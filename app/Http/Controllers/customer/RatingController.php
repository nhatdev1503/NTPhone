<?php
namespace App\Http\Controllers\Customer;

use App\Models\Rating;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    // Rename method to store and update logic
    public function store(Request $request)
    {
        $request->validate([
            'product_variant_id' => 'required|exists:product_variants,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:1000',
        ]);

        $userId = Auth::id();
        $variantId = $request->input('product_variant_id');

        // Check if user has already rated this product
        $existingRating = Rating::where('product_variant_id', $variantId)
            ->where('user_id', $userId)
            ->first();

        if ($existingRating) {
            return redirect()->back()->with('error', 'Bạn đã đánh giá sản phẩm này rồi.');
        }

        // Check if the user has purchased and the order is completed
        $canRate = DB::table('orders')
        ->join('order_items', 'orders.id', '=', 'order_items.order_id')
        ->where('orders.user_id', $userId)
        ->where('order_items.product_variant_id', $variantId)
        ->where('orders.status', 'completed')
        ->exists();

        if (!$canRate) {
            return redirect()->back()->with('error', 'Bạn chỉ có thể đánh giá sản phẩm sau khi đơn hàng hoàn thành.');
        }

        Rating::create([
            'product_variant_id' => $variantId,
            'user_id' => $userId,
            'rating' => $request->input('rating'),
            'color' => $request->input('color'),
            'storage' => $request->input('storage'),
            'review' => $request->input('review')
        ]);

        return redirect()->back()->with('success', 'Cảm ơn bạn đã đánh giá sản phẩm!');
    }

    // Lấy danh sách đánh giá của một sản phẩm
    public function getRatings($variantId)
{
    $ratings = Rating::where('product_variant_id', $variantId)
        ->join('users', 'ratings.user_id', '=', 'users.id')
        ->select(
            'users.id as user_id',
            'users.fullname',
            'ratings.review',
            'ratings.rating',
            'ratings.created_at',
            'ratings.color',
            'ratings.storage'
        )
        ->orderBy('ratings.created_at', 'desc')
        ->get();

    return response()->json($ratings);
}

    // Cập nhật đánh giá của người dùng
    public function updateRating(Request $request, $variantId)
    {
        $userId = auth()->id();

        $rating = Rating::where('product_variant_id', $variantId)->where('user_id', $userId)->first();
        if (!$rating) {
            return response()->json(['message' => 'Bạn chưa đánh giá sản phẩm này.'], 404);
        }

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:500',
        ]);

        $rating->update([
            'rating' => $request->input('rating'),
            'review' => $request->input('review'),
        ]);

        return response()->json(['message' => 'Cập nhật đánh giá thành công!']);
    }

    public function deleteRating($variantId)
    {
        $userId = auth()->id();

        $rating = Rating::where('product_variant_id', $variantId)->where('user_id', $userId)->first();
        if (!$rating) {
            return response()->json(['message' => 'Bạn chưa đánh giá sản phẩm này.'], 404);
        }

        $rating->delete();

        return response()->json(['message' => 'Đánh giá đã được xóa!']);
    }
}
