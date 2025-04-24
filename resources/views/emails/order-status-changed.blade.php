<!DOCTYPE html>
<html>
<head>
    <title>Cập nhật trạng thái đơn hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #f8f9fa;
        }
        .content {
            padding: 20px 0;
        }
        .order-details {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 3px;
            font-weight: bold;
        }
        .status-pending { background-color: #ffeeba; }
        .status-processing { background-color: #b8daff; }
        .status-shipped { background-color: #c3e6cb; }
        .status-delivered { background-color: #d4edda; }
        .status-completed { background-color: #d1ecf1; }
        .status-cancelled { background-color: #f5c6cb; }
        .footer {
            text-align: center;
            padding: 20px 0;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Cập nhật trạng thái đơn hàng</h2>
        </div>
        
        <div class="content">
            <p>Xin chào {{ $order->fullname }},</p>
            
            <p>Đơn hàng <strong>#{{ $order->order_code }}</strong> của bạn đã được cập nhật trạng thái.</p>
            
            <div class="order-details">
                <p><strong>Trạng thái mới:</strong> 
                    <span class="status status-{{ $order->status }}">
                        @switch($order->status)
                            @case('pending')
                                Chờ xử lý
                                @break
                            @case('processing')
                                Đang xử lý
                                @break
                            @case('shipped')
                                Đang giao hàng
                                @break
                            @case('delivered')
                                Đã giao hàng
                                @break
                            @case('completed')
                                Hoàn thành
                                @break
                            @case('cancelled')
                                Đã hủy
                                @break
                            @default
                                {{ $order->status }}
                        @endswitch
                    </span>
                </p>
                
                <p><strong>Thông tin đơn hàng:</strong></p>
                <ul>
                    <li>Mã đơn hàng: #{{ $order->order_code }}</li>
                    <li>Ngày đặt: {{ $order->created_at->format('d/m/Y H:i') }}</li>
                    <li>Tổng tiền: {{ number_format($order->total_price, 0, ',', '.') }}₫</li>
                    <li>Phương thức thanh toán: {{ $order->payment_method == 'COD' ? 'Thanh toán khi nhận hàng' : 'VNPay' }}</li>
                </ul>
            </div>

            @if($order->status == 'cancelled')
                <p><strong>Lý do hủy:</strong> {{ $order->cancel_reason ?? 'Không có' }}</p>
            @endif
            
            <p>Nếu bạn có bất kỳ thắc mắc nào, vui lòng liên hệ với chúng tôi qua:</p>
            <ul>
                <li>Email: support@ntphone.com</li>
                <li>Hotline: 1900 xxxx</li>
            </ul>
        </div>
        
        <div class="footer">
            <p>Email này được gửi tự động, vui lòng không trả lời.</p>
            <p>&copy; {{ date('Y') }} NTPhone. All rights reserved.</p>
        </div>
    </div>
</body>
</html> 