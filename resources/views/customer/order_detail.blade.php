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



    .order-card {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 16px;
        border-radius: 8px;
        border: 1px solid #f0f0f0;
        background-color: #fff;
        margin-bottom: 16px;
    }

    .order-left {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .product-image {
        width: 100px;
        height: 80px;
        object-fit: cover;
        border-radius: 4px;
    }

    .product-info {
        display: flex;
        flex-direction: column;
    }

    .product-title {
        font-weight: bold;
        font-size: 16px;
        color: #333;
        margin-bottom: 4px;
    }

    .product-other {
        font-size: 14px;
        color: #999;
        margin-bottom: 6px;
    }

    .btn-cancel {
        background-color: #e0e0e0;
        border: none;
        padding: 2px 10px;
        border-radius: 6px;
        color: #444;
        cursor: not-allowed;
        width: fit-content;
        font-size: 14px;
    }

    .order-right {
        text-align: right;
    }

    .order-date {
        font-size: 12px;
        color: #999;
        display: block;
        margin-bottom: 4px;
    }

    .product-price {
        color: red;
        font-weight: bold;
        font-size: 16px;
        margin: 8px 0;
    }

    .btn-detail {
        color: #d10024;
        border: 1px solid #d10024;
        padding: 6px 12px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        transition: 0.3s;
    }

    .btn-detail:hover {
        background-color: #d10024;
        color: #fff;
    }

    .card-footer {
        position: absolute;
        right: 0;
        background: none;
        bottom: 0;
        margin-top: 30px;
    }

    .card-footer>a {
        padding: 8px;
    }

    .cancel-reason h4 {
        color: #333333;
        font-size: 18px;
        margin-bottom: 10px;
        margin-left: 0;
    }

    /* Nội dung lý do hủy */
    .cancel-reason p {
        color: #333;
        font-size: 16px;
        line-height: 1.5;
        text-align: center
    }
</style>

<div class="container mt-5 content">
    <div class="card shadow-sm">
        <div class="card-header text-white">
            <h4 class="mb-0">Chi tiết đơn hàng</h4>
            <a href="{{ route('customer.order.history') }}" class="btn btn-outline-secondary">Quay lại lịch sử đơn hàng</a>
        </div>
        <div class="card-body">
            <!-- Thông tin đơn hàng -->
            <div class="mb-4">
                <div class="card mb-4">
                    <div class="card-body mb-3" style="line-height: 35px;">
                        <h5 class="card-title">Đơn hàng {{ $order->order_code }}</h5>

                        @php
                            $statusText = [
                                'pending' => 'Chờ xác nhận',
                                'processing' => 'Đang đóng gói',
                                'shipped' => 'Đang giao',
                                'delivered' => 'Đã giao',
                                'cancelled' => 'Hoàn hàng',
                                'completed' => 'Hoàn thành',
                            ];
                        @endphp

                        @foreach ($order->orderItems as $item)
                            @php
                                $product = $item->productVariant->product ?? null;
                                $variant = $item->productVariant;
                                $color = $variant->color ?? 'Không rõ';
                            @endphp
                            @if ($product)
                                <div class="order-card">
                                    <div class="order-left">
                                        <a href="{{ route('customer.product_detail', $product->id) }}">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                                class="product-image">
                                        </a>
                                        <div class="product-info">
                                            <p class="product-title">{{ $product->name }}</p>
                                            <p class="product-other">Màu: {{ $color }}</p>
                                            <p class="product-other">Số lượng: {{ $item->quantity }}</p>
                                        </div>
                                    </div>

                                    <div class="order-right">
                                        <span class="order-date">{{ $order->created_at->format('d/m/Y H:i') }}</span>
                                        <button class="btn-cancel" disabled>
                                            {{ $statusText[$order->status] ?? 'Không xác định' }}
                                        </button>

                                        <p class="product-price">{{ number_format($order->total_price, 0, ',', '.') }}đ
                                        </p>
                                        @if (in_array($order->status, ['completed', 'cancelled']))
                                            @php
                                                // Lấy sản phẩm đầu tiên trong đơn hàng
                                                $firstItem = $order->orderItems->first();
                                            @endphp

                                            @if ($firstItem && $firstItem->productVariant && $firstItem->productVariant->product)
                                                <a href="{{ route('customer.product_detail', $firstItem->productVariant->product->id) }}"
                                                    class="btn-detail">
                                                    Mua lại
                                                </a>
                                            @endif
                                        @endif
                                    </div>
                                    @if ($order->status == 'cancelled')
                                    @endif

                                </div>
                            @endif
                        @endforeach
                        @if ($order->status == 'cancelled')
                            <div class="cancel-reason">
                                <h4>Lý do hủy:</h4>
                                <p>{{ $order->cancel_reason }}</p>
                            </div>
                        @endif
                        <!-- Phần xác nhận đã nhận hàng -->
                        @if ($order->status == 'delivered')
                            <div class="card-footer">
                                <a href="#" class="btn-detail"
                                    onclick="event.preventDefault(); confirmReceivedOrder('{{ $order->id }}', '{{ $order->order_code }}')">
                                    Xác nhận đã nhận hàng
                                </a>

                                <!-- Form xác nhận đã nhận hàng (ẩn) -->
                                <form id="received-form-{{ $order->id }}"
                                    action="{{ route('customer.order.confirm_received', $order->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('PATCH') <!-- Giả lập phương thức PATCH -->
                                </form>
                            </div>
                        @endif
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            function confirmReceivedOrder(orderId, orderCode) {
                                Swal.fire({
                                    title: 'Xác nhận đã nhận hàng',
                                    text: `Bạn đã nhận được đơn hàng ${orderCode} chưa?`,
                                    icon: 'question',
                                    showCancelButton: true,
                                    confirmButtonText: 'Xác nhận',
                                    cancelButtonText: 'Hủy bỏ',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        document.getElementById('received-form-' + orderId).submit();
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
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
</div>
@endsection
