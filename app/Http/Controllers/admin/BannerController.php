<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->paginate('9');
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function show($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.show', compact('banner'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'product_name' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'title.string' => 'Tiêu đề phải là chuỗi ký tự.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            
            'product_name.string' => 'Tên sản phẩm phải là chuỗi ký tự.',
            'product_name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
            
            'image.required' => 'Vui lòng chọn một hình ảnh.',
            'image.image' => 'Tệp tải lên phải là hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif.',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
        ]);

        // Lưu ảnh
        $imagePath = $request->file('image')->store('banners', 'public');

        Banner::create([
            'title' => $request->title,
            'product_name' => $request->product_name,
            'product_url' => $request->product_url,
            'image' => $imagePath,
        ]);

        return redirect()->route('banners.index')->with('success', 'Thêm banner thành công!');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        Storage::disk('public')->delete($banner->image);
        $banner->delete();

        return redirect()->route('banners.index')->with('success', 'Xóa banner thành công!');
    }
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'product_name' => 'nullable|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'title.string' => 'Tiêu đề phải là chuỗi ký tự.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            
            'product_name.string' => 'Đường dẫn phải là chuỗi ký tự.',
            'product_name.max' => 'Đường dẫn không được vượt quá 255 ký tự.',
            
            'image.image' => 'Tệp tải lên phải là hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif.',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
        ]);
    
        $banner = Banner::findOrFail($id);
        $banner->title = $request->input('title', $banner->title);
        $banner->product_name = $request->input('product_name', $banner->product_name);
        $banner->product_url = $request->input('product_url', $banner->product_url);
    
        if ($request->hasFile('image')) {
            try {
                if ($banner->image && Storage::exists('public/' . $banner->image)) {
                    Storage::delete('public/' . $banner->image);
                }
                $imagePath = $request->file('image')->store('banners', 'public');
                $banner->image = $imagePath;
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Có lỗi xảy ra khi xử lý ảnh: ' . $e->getMessage());
            }
        }
    
        $banner->save();
    
        return redirect()->route('banners.index')->with('success', 'Cập nhật banner thành công!');
    }
    public function status(Banner $banner)
    {
        // Nếu banner đang được chọn là inactive, chuyển tất cả banner khác sang inactive
        if ($banner->status === 'inactive') {
            // Cập nhật banner được chọn thành active
            $banner->update(['status' => 'active']);
            
            // Cập nhật tất cả banner khác thành inactive
            Banner::where('id', '!=', $banner->id)->update(['status' => 'inactive']);
        }
        
        return redirect()->route('banners.index')
            ->with('success', 'Cập nhật trạng thái banner thành công');
    }
    public function apiProductURL(Request $request)
    {
        $query = $request->query('query');
    // Tìm kiếm sản phẩm và danh mục theo tên
    $products = Product::where('name', 'like', "%{$query}%")
        ->where('status','active')
        ->limit(5)
        ->get(['id','name','image']);
    $results = [];

    foreach ($products as $product) {
        $results[] = [
            'name' => $product->name,
            'url' => $product->id,
            'image' => asset($product->image)
        ];
    }
    return response()->json($results);
    }

}


?>