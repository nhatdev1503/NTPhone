<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\NewsImage;
class NewsController extends Controller
{
    
    public function index()
    {
        $news = News::paginate(10); 
        return view('admin.news.index', compact('news'));
    }
    

    public function create()
    {
        return view('admin.news.create');
    }


  
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);
    
        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->is_active = $request->is_active;
        $news->user_id = auth()->id();
        $news->published_at = now();
        $news->save(); 
    
      
        preg_match_all('/<img[^>]+src="([^">]+)"/', $news->content, $matches);
    
        if (!empty($matches[1])) {
            foreach ($matches[1] as $imageUrl) {
                
                if (Str::contains($imageUrl, 'storage/news_images/')) {
                    $imagePath = str_replace('storage/', '', $imageUrl);
    
                  
                    NewsImage::create([
                        'news_id' => $news->id,
                        'image_path' => $imagePath,
                    ]);
                }
            }
        }
    
        
        $news->content = preg_replace_callback(
            '/<img[^>]+src="([^">]+)"/',
            function ($matches) {
                $src = $matches[1];
    
                if (!Str::startsWith($src, ['http://', 'https://'])) {
                    $src = str_replace(['../../', '../', './'], '', $src);
                    $src = asset($src);
                }
    
                return '<img src="' . $src . '"';
            },
            $news->content
        );
    
        $news->save(); 
    
        return redirect()->route('news.index')->with('success', 'Thêm mới thành công ');
    }
    
    
    
    public function uploadImages(Request $request)
{
    
    $request->validate([
        'images' => 'required|array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
    ]);

    $imageUrls = [];
    foreach ($request->file('images') as $image) {
       
        $path = $image->store('news_images', 'public');
        $imageUrls[] = [
            'url' => asset('storage/' . $path),
            'name' => $image->getClientOriginalName(),
        ];
    }

    
    return response()->json(['images' => $imageUrls]);
}

    
    public function destroy(News $news)
    {
       
        $news->delete();

      
        return redirect()->route('news.index')->with('success', 'Đã Xóa thành công');
    }
}
