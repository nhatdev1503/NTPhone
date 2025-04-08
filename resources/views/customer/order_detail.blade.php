@extends('layouts.customer')

@section('title', 'Chi tiết đơn hàng #' . $order->order_code)

@section('content')
<style>
    .order-detail {
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        overflow: hidden;
        margin: 2rem 0;
    }

    .order-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 2rem;
        border-bottom: 1px solid #eee;
        position: relative;
    }

    .order-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #e74c3c, #c0392b);
    }

    .order-header h2 {
        color: #2c3e50;
        font-size: 1.8rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .order-status {
        display: inline-flex;
        align-items: center;
        padding: 0.6rem 1.2rem;
        border-radius: 25px;
        font-weight: 500;
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }

    .order-status i {
        margin-right: 0.5rem;
        font-size: 1.1rem;
    }

    .status-pending {
        background: #fff3cd;
        color: #856404;
        border: 1px solid #ffeeba;
    }

    .status-processing {
        background: #cce5ff;
        color: #004085;
        border: 1px solid #b8daff;
    }

    .status-shipping {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .status-delivered {
        background: #d1e7dd;
        color: #0f5132;
        border: 1px solid #badbcc;
    }

    .status-completed {
        background: #d1e7dd;
        color: #0f5132;
        border: 1px solid #badbcc;
    }

    .status-cancelled {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .order-info {
        padding: 2rem;
    }

    .info-section {
        margin-bottom: 2.5rem;
        background: #fff;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .info-section:last-child {
        margin-bottom: 0;
    }

    .info-section h3 {
        color: #2c3e50;
        margin-bottom: 1.5rem;
        font-size: 1.3rem;
        font-weight: 600;
        display: flex;
        align-items: center;
    }

    .info-section h3 i {
        margin-right: 0.8rem;
        color: #e74c3c;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    .info-item {
        display: flex;
        flex-direction: column;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .info-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    .info-label {
        color: #6c757d;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
        font-weight: 500;
    }

    .info-value {
        color: #2c3e50;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .order-items {
        margin-top: 2rem;
    }

    .order-item {
        display: flex;
        align-items: center;
        padding: 1.2rem;
        border-bottom: 1px solid #eee;
        transition: all 0.3s ease;
    }

    .order-item:hover {
        background: #f8f9fa;
    }

    .order-item:last-child {
        border-bottom: none;
    }

    .product-image {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 10px;
        margin-right: 1.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .product-info {
        flex: 1;
    }

    .product-name {
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        color: #2c3e50;
    }

    .product-variant {
        color: #6c757d;
        font-size: 0.95rem;
        margin-bottom: 0.8rem;
        display: flex;
        align-items: center;
    }

    .product-variant i {
        margin-right: 0.5rem;
        color: #e74c3c;
    }

    .product-price {
        color: #e74c3c;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .order-summary {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 2rem;
        margin-top: 2rem;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid #dee2e6;
    }

    .summary-item:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
        font-weight: 600;
        font-size: 1.2rem;
        color: #2c3e50;
    }

    .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn {
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        font-size: 1rem;
    }

    .btn i {
        margin-right: 0.5rem;
    }

    .btn-primary {
        background: #e74c3c;
        color: white;
    }

    .btn-primary:hover {
        background: #c0392b;
        transform: translateY(-2px);
    }

    .btn-danger {
        background: #dc3545;
        color: white;
    }

    .btn-danger:hover {
        background: #c82333;
        transform: translateY(-2px);
    }

    .cancel-reason {
        background: #fff3cd;
        padding: 1.5rem;
        border-radius: 8px;
        margin-top: 1.5rem;
        border: 1px solid #ffeeba;
    }

    .cancel-reason h4 {
        color: #856404;
        margin-bottom: 0.8rem;
        font-weight: 600;
        display: flex;
        align-items: center;
    }

    .cancel-reason h4 i {
        margin-right: 0.5rem;
    }

    .cancel-reason p {
        color: #856404;
        margin: 0;
        line-height: 1.6;
    }

    .modal-content {
        border-radius: 15px;
        border: none;
    }

    .modal-header {
        background: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        border-radius: 15px 15px 0 0;
        padding: 1.5rem;
    }

    .modal-title {
        font-weight: 600;
        color: #2c3e50;
    }

    .modal-body {
        padding: 1.5rem;
    }

    .modal-footer {
        border-top: 1px solid #dee2e6;
        padding: 1.5rem;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #dee2e6;
        padding: 0.8rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #e74c3c;
        box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25);
    }

    .btn-secondary {
        background: #6c757d;
        color: white;
    }

    .btn-secondary:hover {
        background: #5a6268;
    }

    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 25px;
        border-radius: 8px;
        background: white;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        display: flex;
        align-items: center;
        gap: 10px;
        transform: translateX(120%);
        transition: transform 0.3s ease;
        z-index: 1000;
    }

    .notification.show {
        transform: translateX(0);
    }

    .notification.success {
        border-left: 4px solid #28a745;
    }

    .notification.error {
        border-left: 4px solid #dc3545;
    }

    .notification i {
        font-size: 1.2rem;
    }

    .notification.success i {
        color: #28a745;
    }

    .notification.error i {
        color: #dc3545;
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
            @endforeach
        </div>

        <div class="order-summary">
            <div class="summary-item">
                <span>Tạm tính</span>
                <span>{{ number_format($order->total_price + $order->discount_amount, 0, ',', '.') }}đ</span>
            </div>
            @if($order->discount_amount > 0)
                <div class="summary-item">
                    <span>Giảm giá</span>
                    <span>-{{ number_format($order->discount_amount, 0, ',', '.') }}đ</span>
                </div>
            @endif
            <div class="summary-item">
                <span>Tổng cộng</span>
                <span>{{ number_format($order->total_price, 0, ',', '.') }}đ</span>
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

<!-- Cancel Modal -->
@if(($order->status == 'pending' || $order->status == 'processing') && $order->payment_status != 'paid')
    <div class="modal fade" id="cancelModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hủy đơn hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('order.cancel', $order->id) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <p>Vui lòng cho biết lý do hủy đơn hàng:</p>
                        <textarea name="cancel_reason" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-danger">Xác nhận hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

<script>
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.innerHTML = `
        <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
        <span>${message}</span>
    `;
    
    document.body.appendChild(notification);
    
    // Thêm class show sau 10ms để kích hoạt animation
    setTimeout(() => notification.classList.add('show'), 10);
    
    // Xóa notification sau 3 giây
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}
</script>
@endsection
