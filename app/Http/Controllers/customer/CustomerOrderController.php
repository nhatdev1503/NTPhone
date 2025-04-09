<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

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
    
}
