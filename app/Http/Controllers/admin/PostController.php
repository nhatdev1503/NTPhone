<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();  // Lấy tất cả bài viết kèm theo ảnh nếu có
        return view('admin.posts.index', compact('posts'));
    }
    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'status' => 'draft',  // Hoặc bạn có thể thay đổi trạng thái thành "published"
        ]);

        return redirect()->route('posts.index');
    }
}
