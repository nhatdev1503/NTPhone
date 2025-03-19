<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderLookupController extends Controller
{

    // Trang tìm kiếm đơn hàng
    public function lookup()
    {
        return view('guest.orders.lookup');
    }
    

    // Xử lý form tìm kiếm và chuyển hướng sang trang chi tiết đơn hàng
    public function apiLookup(Request $request)
{
    $order = Order::where('order_code', $request->order_code)->first();

    if (!$order) {
        return response()->json([
            'success' => false,
            'message' => 'Không tìm thấy đơn hàng!'
        ]);
    }

    return response()->json([
        'success' => true,
        'order' => [
            'id' => $order->id,
            'code' => $order->order_code,
            'customer_name' => $order->fullname,
            'address' => $order->address,
            'phone' => $order->phone,
            'email' => $order->email,
            'status' => $order->status,
            'order_date' => $order->created_at->format('d/m/Y'),
            'total' => $order->total
        ]
    ]);
}


    // Trang hiển thị thông tin đơn hàng
    public function show($order_code)
    {
        $order = Order::where('order_code', $order_code)->first();

        if (!$order) {
            return redirect()->route('guest.orders.lookup')->with('error', 'Không tìm thấy đơn hàng.');
        }

        return view('guest.orders.show', compact('order'));
    }
}
?>