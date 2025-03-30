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
   
    public function show($id)
    {
        $order = Order::where('id', $id)
            ->where('user_id', auth()->id())
            ->with('items.product')
            ->firstOrFail();
        return view('customer.order_detail', compact('order'));
    }
    
}
