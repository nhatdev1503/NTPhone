<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderLookupController extends Controller
{
    
    // Trang tìm kiếm đơn hàng
    public function lookup()
    {
        return view('customer.orders.lookup');
    }

    // Xử lý form tìm kiếm và chuyển hướng sang trang chi tiết đơn hàng
    public function redirect(Request $request)
    {
        $request->validate([
            'order_code' => 'required|string'
        ]);

        return redirect()->route('customer.orders.show', ['order_code' => $request->order_code]);
    }

    // Trang hiển thị thông tin đơn hàng
    public function show($order_code)
    {
        $order = Order::where('order_code', $order_code)->first();

        if (!$order) {
            return redirect()->route('customer.orders.lookup')->with('error', 'Không tìm thấy đơn hàng.');
        }

        return view('customer.orders.show', compact('order'));
    }
}
?>