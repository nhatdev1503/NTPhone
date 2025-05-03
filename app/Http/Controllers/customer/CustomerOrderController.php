<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;

class CustomerOrderController extends Controller
{
    public function history(Request $request)
    {
        $query = Order::where('user_id', auth()->id());

        // Lọc theo trạng thái đơn hàng
        if ($request->has('status') && $request->status != 'all') {
            $query->where('status', $request->status);
        }
        if ($request->has('from_date') && $request->has('to_date')) {
            $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
        }

        $orders = $query->orderBy('created_at', 'desc')->paginate(5);
        dd($request->status, $orders->pluck('status'));

        return view('customer.history', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::where('id', $id)
            ->where('user_id', auth()->id())
            ->with('items.productVariant') // Sửa lại đây
            ->firstOrFail();
        return view('customer.order_detail', compact('order'));
    }
    public function submitReview(Request $request)
    {
        $request->validate([
            'item_id' => 'required|exists:order_items,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:1000',
        ], [
            'item_id.required' => 'Vui lòng chọn sản phẩm để đánh giá.',
            'item_id.exists' => 'Sản phẩm bạn chọn không hợp lệ.',
        
            'rating.required' => 'Vui lòng chọn số sao đánh giá.',
            'rating.integer' => 'Số sao đánh giá phải là một số nguyên.',
            'rating.min' => 'Số sao tối thiểu là 1.',
            'rating.max' => 'Số sao tối đa là 5.',
        
            'review.required' => 'Vui lòng nhập nội dung đánh giá.',
            'review.string' => 'Nội dung đánh giá không hợp lệ.',
            'review.max' => 'Nội dung đánh giá không được vượt quá 1000 ký tự.',
        ]);
        $item = OrderItem::findOrFail($request->input('item_id'));
        if($item->rating != null && $item->review != null){
            return back()->with('error', 'Bạn đã đánh giá sản phẩm này rồi');
        }
        $item->rating = $request->input('rating');
        $item->review = $request->input('review');
        $item->save();

        return back()->with('success', 'Cảm ơn bạn đã đánh giá sản phẩm của chúng tôi.NTPHONE rất hân hạnh được phục vụ quý khách');
    }
}
