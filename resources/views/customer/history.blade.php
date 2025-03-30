@extends('layouts.customer')

@section('title', 'Lịch sử mua hàng')

@section('content')
    <style>
        .history-title {
            font-size: 24px;
            font-weight: bold;
            color: #333333* Màu cam nổi bật */ text-transform: uppercase;
            margin-bottom: 20px;
            /* border-bottom: 3px solid #ff4500; */
            display: inline-block;
            padding-bottom: 5px;
        }

        body {
            background-color: white;
        }
    </style>
    <div class="container mt-5">
        <h1 class="history-title mb-4">Lịch sử mua hàng</h1>


        <!-- Tabs lọc trạng thái -->
        <div class="d-flex mb-3">
            @php
                $statuses = [
                    'all' => 'Tất cả',
                    'pending' => 'Chờ xác nhận',
                    'confirmed' => 'Đã xác nhận',
                    'Đang vận chuyển' => 'Đang vận chuyển',
                    'delivered' => 'Đã giao hàng',
                    'canceled' => 'Đã hủy',
                ];
                $currentStatus = request('status', 'all');
            @endphp


            @foreach ($statuses as $key => $label)
                <a href="{{ route('customer.order.history', ['status' => $key]) }}"
                    class="btn {{ $currentStatus == $key ? 'btn-danger' : 'btn-outline-secondary' }} mx-1">
                    {{ $label }}
                </a>
            @endforeach
        </div>

        <!-- Danh sách đơn hàng -->
        @if ($orders->isEmpty())
            <p class="text-danger">Không có đơn hàng nào.</p>
        @else
            @foreach ($orders as $order)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Đơn hàng #{{ $order->id }}</h5>
                        <p><strong>Giá:</strong> {{ number_format($order->total_price, 0, ',', '.') }}đ</p>
                        <p><strong>Ngày đặt:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
                        <p><strong>Trạng thái:</strong>
                            <span
                                class="badge bg-{{ $order->status == 'delivered' ? 'success' : ($order->status == 'canceled' ? 'danger' : 'warning') }}">
                                {{ $statuses[$order->status] ?? 'Không xác định' }}
                            </span>
                        </p>
                        <a href="{{ route('customer.order_detail', $order->id) }}" class="btn btn-info">Xem chi tiết</a>
                    </div>
                </div>
            @endforeach
        @endif

        <!-- Phân trang -->
        <div class="d-flex justify-content-center mt-4">
            {{ $orders->links() }}
        </div>
    </div>
@endsection
