<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Order::query();

        // 🔍 1. Lọc theo từ khóa (tìm theo tên, email, SĐT)
        if ($request->filled('keyword')) {
            $keyword = $request->keyword;
            $query->where(function ($q) use ($keyword) {
                $q->where('fullname', 'like', "%$keyword%")
                    ->orWhere('email', 'like', "%$keyword%")
                    ->orWhere('phone', 'like', "%$keyword%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('payment_status')) {
            $query->where('payment_status', $request->payment_status);
        }

        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }
        $orders = $query->orderBy('id', 'desc')->paginate(10)->appends($request->query());


        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $order = Order::findOrFail($id);

        // Mảng để hiển thị trạng thái đơn hàng đẹp hơn
        $statusColors = [
            'pending' => 'warning',
            'processing' => 'primary',
            'shipped' => 'dark',
            'delivered' => 'secondary',
            'completed' => 'success',
            'cancelled' => 'danger',
        ];

        $statusText = [
            'pending' => 'Chờ xác nhận',
            'processing' => 'Đang xử lí',
            'shipped' => 'Đang giao hàng',
            'delivered' => 'Đã giao hàng',
            'completed' => 'Thành công',
            'cancelled' => 'Hủy',
        ];
        $paymentColors = [
            'pending' => 'warning',
            'paid' => 'success',
            'failed' => 'danger',
        ];

        $paymentStatus = [
            'pending' => 'Chưa thanh toán',
            'paid' => 'Đã thanh toán',
            'failed' => 'Thất bại',
        ];

        return view('admin.orders.show', compact('order', 'statusColors', 'statusText', 'paymentColors', 'paymentStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required',
        ], [
            'status.required' => 'Cần cập nhật trạng thái khi xác nhận',
        ]);
        if ($request->status == 'cancelled') {
            $order->status = 'cancelled';
            $order->cancel_reason = $request->cancel_reason;
        } else {
            $order->status = $request->status;
            $order->cancel_reason = null;
        }
        $order->staff_id = 1;
        $order->save();
        return redirect()->route('orders.show', $order->id)->with('success', 'Cập nhật trạng thái đơn hàng thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // public function cancel($id)
    // {
    //     $order = Order::findOrFail($id);

    //     // Kiểm tra trạng thái trước khi cho hủy
    //     if (!in_array($order->status, ['pending', 'processing'])) {
    //         return redirect()->back()->with('error', 'Không thể hủy đơn hàng ở trạng thái hiện tại.');
    //     }

    //     $order->status = 'cancelled';
    //     $order->save();

    //     return redirect()->back()->with('success', 'Đơn hàng đã được hủy thành công.');
    // }
    public function confirmReceived($orderId)
    {
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->back()->with('error', 'Đơn hàng không tồn tại.');
        }


        if ($order->status !== 'delivered') {
            return redirect()->back()->with('error', 'Đơn hàng không thể xác nhận vì không phải trạng thái đã giao.');
        }


        $order->status = 'completed';
        $order->save();


        return redirect()->route('customer.order_detail', $order->id)
            ->with('success', 'Đơn hàng đã được xác nhận là đã nhận.');
    }
    public function cancelOrder($orderId, Request $request)
    {
        $order = Order::find($orderId);
        if (!$order) {
            return redirect()->back()->with('error', 'Đơn hàng không tồn tại.');
        }
        if (!in_array($order->status, ['pending', 'processing'])) {
            return redirect()->back()->with('error', 'Đơn hàng không thể hủy.');
        }

        
        $order->status = 'cancelled';  
        $order->cancel_reason = $request->input('cancel_reason');  
        $order->save(); 

        // Trả về thông báo thành công
        return redirect()->route('customer.order.history')->with('success', 'Đơn hàng đã được hủy thành công.');
    }
    
}
