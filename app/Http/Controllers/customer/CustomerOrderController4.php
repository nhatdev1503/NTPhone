<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class CustomerOrderController4 extends Controller
{
    // Hiển thị danh sách đơn hàng của khách hàng
    public function history(Request $request)
    {
        $query = Order::where('user_id', auth()->id());

        // Lọc theo trạng thái đơn hàng
        if ($request->has('status') && $request->status != 'all') {
            $query->where('status', $request->status);
        }

        // Lọc theo khoảng thời gian
        if ($request->has('from_date') && $request->has('to_date')) {
            $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
        }

        $orders = $query->orderBy('created_at', 'desc')->paginate(5);

        return view('customer.history', compact('orders'));
    }

    public function detail($id)
    {
        $order = Order::with('orderDetails.product')->where('user_id', auth()->id())->find($id);

        if (!$order) {
            return redirect()->route('customer.order.history')->with('error', 'Đơn hàng không tồn tại.');
        }

        return view('customer.order_detail', compact('order'));
    }
    public function show($id)
{
    $order = Order::with(['orderDetails.product', 'customer', 'payment'])->findOrFail($id);
    return view('customer.orders.detail', compact('order'));
}
public function showCustomerOrder($id)
{
    // Tìm đơn hàng kèm các quan hệ liên quan
    $order = Order::with(['orderDetails', 'customer', 'discount'])->find($id);

    // Kiểm tra nếu đơn hàng không tồn tại
    if (!$order) {
        return redirect()->route('customer.order.history')->with('error', 'Không tìm thấy đơn hàng.');
    }

    // Tính tổng tiền sản phẩm
    $tongTienSanPham = 0;
    foreach ($order->orderDetails as $detail) {
        $tongTienSanPham += $detail->price * $detail->quantity;
    }

    // Lấy số tiền giảm giá (nếu có)
    $discountAmount = $order->discount_amount ?? 0;

    // Tính tổng tiền phải thanh toán
    $totalPayable = max(0, $tongTienSanPham - $discountAmount);

    // Trả về view với đầy đủ biến
    return view('customer.order_detail', compact('order', 'tongTienSanPham', 'discountAmount', 'totalPayable'));
}
}
