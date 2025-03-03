<?php

namespace App\Http\Controllers;

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

        if ($request->filled('payment_method')) {
            $query->where('payment_method', $request->payment_method);
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
            'shipped' => 'info',
            'delivered' => 'success',
            'cancelled' => 'danger',
        ];

        $statusText = [
            'pending' => 'Chờ xác nhận',
            'processing' => 'Đang đóng gói',
            'shipped' => 'Đang giao',
            'delivered' => 'Đã giao',
            'cancelled' => 'Đã hủy',
        ];
        $paymentColors = [
            'pending' => 'info',
            'paid' => 'success',
            'failed' => 'danger',
        ];

        $paymentStatus = [
            'pending' => 'Chưa thanh toán',
            'paid' => 'Thành công',
            'failed' => 'Thất bại',
        ];

        return view('admin.orders.show', compact('order', 'statusColors', 'statusText','paymentColors','paymentStatus'));
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
        $order->status = $request->status;
        $order->staff_id = 1;
        $order->save();
        return redirect()->route('orders.show',$order->id)->with('success', 'Cập nhật trạng thái đơn hàng thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
