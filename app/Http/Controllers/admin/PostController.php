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
        $posts = Post::with('images')->get();  // Lấy tất cả bài viết kèm theo ảnh nếu có
        return view('admin.posts.index', compact('posts'));
    }
    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'status' => 'required|in:published,draft',
            'content' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Kiểm tra ảnh
        ]);

        // Tạo bài viết mới
        $post = Post::create([
            'title' => $request->title,
            'status' => $request->status,
            'content' => $request->content
        ]);

        // Xử lý ảnh
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                // Lưu ảnh vào thư mục "posts"
                $imagePath = $image->store('posts', 'public');

                // Lưu thông tin ảnh vào bảng post_images
                PostImage::create([
                    'post_id' => $post->id,
                    'content' => $request->input("image_content.$index"), // Nội dung ảnh
                    'image' => $imagePath,
                    'position' => $index,
                ]);
            }
        }

        return redirect()->route('posts.index')->with('success', 'Bài viết đã được thêm thành công!');
    }
}
