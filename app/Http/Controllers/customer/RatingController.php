<?php
namespace App\Http\Controllers\Customer;

use App\Models\Rating;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    // Xử lý lưu đánh giá sản phẩm
    public function storeRating(Request $request, $productId)
    {
        $userId = auth()->id();

        // Kiểm tra xem người dùng đã mua sản phẩm chưa
        $hasPurchased = DB::table('orders')
            ->join('order_items', 'orders.id', '=', 'order_items.order_id')
            ->where('orders.user_id', $userId)
            ->where('order_items.product_variant_id', $productId)
            ->exists();

        if (!$hasPurchased) {
            return response()->json(['message' => 'Bạn chỉ có thể đánh giá sản phẩm khi đã mua.'], 403);
        }

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:500',
        ]);

        Rating::updateOrCreate(
            ['product_id' => $productId, 'user_id' => $userId],
            ['rating' => $request->input('rating'), 'review' => $request->input('review')]
        );

        return response()->json(['message' => 'Đánh giá thành công!']);
    }

    // Lấy danh sách đánh giá của một sản phẩm
    public function getRatings($productId)
    {
        $ratings = Rating::where('product_id', $productId)
        ->join('users', 'ratings.user_id', '=', 'users.id')  // Thực hiện join với bảng users để lấy fullname
        ->select('users.fullname', 'ratings.review', 'ratings.rating', 'ratings.created_at')  // Chọn các trường cần thiết
        ->get();

    return response()->json($ratings);
    }

    // Cập nhật đánh giá của người dùng
    public function updateRating(Request $request, $productId)
    {
        $userId = auth()->id();

        $rating = Rating::where('product_id', $productId)->where('user_id', $userId)->first();
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

    public function deleteRating($productId)
    {
        $userId = auth()->id();

        $rating = Rating::where('product_id', $productId)->where('user_id', $userId)->first();
        if (!$rating) {
            return response()->json(['message' => 'Bạn chưa đánh giá sản phẩm này.'], 404);
        }

        $rating->delete();

        return response()->json(['message' => 'Đánh giá đã được xóa!']);
    }
}
