@extends('layouts.customer')

@section('content')
@section('title', 'Chi tiết đơn hàng')
<style>
    .container {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .content {
        margin-left: 120px;
    }

    .card h4 {
        font-size: 30px;
        font-weight: 500;
        text-align: center;
        padding: 20px 0px;
        color: #333333;
        font-weight: 500;
    }


    .card h5 {
        font-size: 20px;
        color: #333333;
        font-weight: 600;
    }

    .card-body {
        line-height: 30px;
    }
</style>
<div class="container mt-5 content">
    <div class="card shadow-sm">
        <div class="card-header  text-white">
            <h4 class="mb-0">Chi tiết đơn hàng: {{ $order->order_code }}</h4>
        </div>
        <div class="card-body">
            <!-- Thông tin đơn hàng -->

            <div class="mb-4">
                <h6>Sản phẩm</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Biến thể</th> <!-- Cột "Biến thể" sẽ chứa màu sắc và số lượng kho -->
                            <th>Giá</th>
                            <th>Số lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderItems as $item)
                            @if ($item->productVariant && $item->productVariant->product)
                                <tr>
                                    <td>
                                        <!-- Bao bọc hình ảnh trong thẻ a để khi click vào sẽ chuyển đến trang chi tiết sản phẩm -->
                                        <a
                                            href="{{ route('customer.product_detail', $item->productVariant->product->id) }}">
                                            <img src="{{ asset($item->productVariant->product->image) }}"
                                                alt="{{ $item->productVariant->product->name }}"
                                                style="width: 50px; height: 50px; object-fit: cover;">
                                        </a>
                                    </td>
                                    <td>
                                        <!-- Liên kết đến trang chi tiết sản phẩm -->
                                        <a href="{{ route('customer.product_detail', $item->productVariant->product->id) }}"
                                            class="text-decoration-none text-dark">
                                            {{ $item->productVariant->product->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <!-- Hiển thị thông tin biến thể: màu sắc với thanh màu -->
                                        <div><strong>Màu sắc:</strong></div>
                                        @if ($item->productVariant->color)
                                            <div
                                                style="width: 30px; height: 30px; background-color: {{ $item->productVariant->color }}; border-radius: 50%; display: inline-block;">
                                            </div>
                                        @else
                                            <div>Không có</div>
                                        @endif
                                        <div><strong>Kho hàng:</strong>
                                            {{ $item->productVariant->storage ?? 'Không có' }}</div>
                                    </td>
                                    <td>{{ number_format($item->price, 0, ',', '.') }}đ</td>
                                    <td>{{ $item->quantity }}</td>
                                </tr>
                            @else
                                <tr>
                                    <td colspan="5" class="text-center text-warning">Sản phẩm không còn tồn tại</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>

                <p><i class="bi bi-calendar3 me-2"></i><strong>Ngày đặt hàng:</strong>
                    {{ $order->created_at->format('d/m/Y H:i') }}</p>
                @php
                    $statusMappings = [
                        'pending' => 'Chờ xác nhận',
                        'confirmed' => 'Đã xác nhận',
                        'shipped' => 'Đang giao',
                        'delivered' => 'Đã giao',
                        'canceled' => 'Đã hủy',
                    ];
                    $statusColors = [
                        'pending' => 'warning',
                        'processing' => 'primary',
                        'shipped' => 'info',
                        'delivered' => 'success',
                        'cancelled' => 'danger',
                        'completed' => 'secondary',
                    ];
                @endphp

                <p class="bi bi-truck-front me-3"><strong>Trạng thái:</strong>
                    <span class="badge bg-{{ $statusColors[$order->status] ?? 'secondary' }}">
                        {{ $statusMappings[$order->status] ?? 'Không xác định' }}
                    </span>
                </p>
                <p><i class="bi bi-cash-stack me-2"></i><strong>Tổng tiền:</strong>
                    {{ number_format($order->total_price, 0, ',', '.') }} đ</p>
            </div>

            <!-- Thông tin khách hàng -->
            <div class="mb-4">
                <div class="card border">
                    <div class="card-header text-white">
                        <h5 class="mb-0">Thông tin khách hàng</h5>
                    </div>
                    <div class="card-body">
                        <p><i class="bi bi-person-fill me-2"></i><strong>Họ và tên:</strong> {{ $order->fullname }}</p>
                        <p><i class="bi bi-envelope-fill me-2"></i><strong>Email:</strong> {{ $order->email }}</p>
                        <p><i class="bi bi-telephone-fill me-2"></i><strong>Số điện thoại:</strong>
                            {{ $order->phone ?? 'Chưa cập nhật' }}</p>
                        <p><i class="bi bi-geo-alt-fill me-2"></i><strong>Địa chỉ:</strong>
                            {{ $order->address ?? 'Chưa cập nhật' }}</p>
                    </div>
                </div>
            </div>

            <!-- Thông tin thanh toán -->
            <div class="mb-4">
                <div class="card border">
                    <div class="card-header text-white">
                        <h5 class="mb-0">Thông tin thanh toán</h5>
                    </div>
                    <div class="card-body">
                        <p><i class="bi bi-credit-card-2-front-fill me-2"></i><strong>Phương thức thanh toán:</strong>
                            {{ $order->payment_method ?? 'Chưa cập nhật' }}</p>
                        <p><i class="bi bi-check-circle-fill me-2"></i><strong>Tình trạng thanh toán:</strong>
                            @php
                                $paymentStatusText = [
                                    'pending' => 'Đang chờ xử lý',
                                    'paid' => 'Đã thanh toán',
                                    'failed' => 'Thanh toán thất bại',
                                ];
                            @endphp
                            {{ $paymentStatusText[$order->payment_status] ?? 'Chưa cập nhật' }}
                        </p>

                        <p><i class="bi bi-card-text me-2"></i><strong>Ghi chú:</strong>
                            {{ $order->payment_note ?? 'Không có' }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('customer.order.history') }}" class="btn btn-outline-secondary">Quay lại lịch sử đơn
                hàng</a>
        </div>
    </div>
</div>
@endsection
