<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Ensure user is authenticated
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Bạn cần đăng nhập để bình luận.');
        }

        // Validate the request data
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'content' => 'required|string|max:1000', // Use 'content' instead of 'comment_text'
        ]);

        // Create the comment
        Comment::create([
            'user_id' => Auth::id(),
            'product_id' => $request->input('product_id'),
            'content' => $request->input('content'), // Use 'content' instead of 'comment_text'
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Bình luận của bạn đã được gửi.');
    }
        
}
