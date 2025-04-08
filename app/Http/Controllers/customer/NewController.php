<?php
namespace App\Http\Controllers\Customer;


use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        $latestNews = News::latest('published_at')->take(5)->get();
        $allNews = News::latest('published_at')->paginate(6);
    
        return view('customer.news', compact('latestNews', 'allNews'));
    }
    

    public function show($id)
    {
        // Tìm bài viết theo ID
        $news = News::findOrFail($id);

        // Trả về view với dữ liệu bài viết
        return view('customer.shownew', compact('news'));
    }

    // Các phương thức khác như store, create, update, etc.
}
