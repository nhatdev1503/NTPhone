<?php

namespace App\Observers;

use App\Models\Order;
use App\Mail\OrderStatusChanged;
use Illuminate\Support\Facades\Mail;

class OrderObserver
{
    /**
     * Handle the Order "updated" event.
     */
    public function updated(Order $order): void
    {
        // Kiểm tra xem trạng thái đơn hàng có thay đổi không
        if ($order->wasChanged('status')) {
            // Gửi email thông báo cho khách hàng
            Mail::to($order->email)->send(new OrderStatusChanged($order));
        }
    }
} 