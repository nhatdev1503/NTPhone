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
</style>

<div class="order-detail">
    <div class="order-header">
        <h2>Đơn hàng #{{ $order->order_code }}</h2>
        <div class="order-status status-{{ $order->status }}">
            <i class="fas fa-circle"></i>
            @switch($order->status)
                @case('pending')
                    Chờ xác nhận
                    @break
                @case('processing')
                    Đang xử lý
                    @break
                @case('shipping')
                    Đang giao hàng
                    @break
                @case('delivered')
                    Đã giao hàng
                    @break
                @case('completed')
                    Hoàn thành
                    @break
                @case('cancelled')
                    Hủy
                    @break
            @endswitch
        </div>
    </div>

    <div class="order-info">
        <div class="info-section">
            <h3><i class="fas fa-info-circle"></i> Thông tin đơn hàng</h3>
            <div class="info-grid">
                <div class="info-item">
                    <span class="info-label">Ngày đặt</span>
                    <span class="info-value">{{ $order->created_at->format('d/m/Y H:i') }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Phương thức thanh toán</span>
                    <span class="info-value">{{ $order->payment_method === 'COD' ? 'Thanh toán khi nhận hàng' : 'VNPay' }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Trạng thái thanh toán</span>
                    <span class="info-value">{{ $order->payment_status === 'paid' ? 'Đã thanh toán' : 'Chưa thanh toán' }}</span>
                                            </div>
            </div>
            </div>

        <div class="info-section">
            <h3><i class="fas fa-shipping-fast"></i> Thông tin giao hàng</h3>
            <div class="info-grid">
                <div class="info-item">
                    <span class="info-label">Họ tên</span>
                    <span class="info-value">{{ $order->fullname }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Số điện thoại</span>
                    <span class="info-value">{{ $order->phone }}</span>
                    </div>
                <div class="info-item">
                    <span class="info-label">Email</span>
                    <span class="info-value">{{ $order->email }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Địa chỉ</span>
                    <span class="info-value">{{ $order->address }}</span>
                    </div>
                </div>
            </div>

        <div class="order-items">
            <h3><i class="fas fa-shopping-bag"></i> Sản phẩm</h3>
            @foreach($order->orderItems as $item)
                <div class="order-item">
                    <img src="{{ asset( $item->productVariant->product->image) }}" 
                         alt="{{ $item->productVariant->product->name }}" 
                         class="product-image">
                    <div class="product-info">
                        <div class="product-name">{{ $item->productVariant->product->name }}</div>
                        <div class="product-variant">
                            <i class="fas fa-palette"></i>
                            {{ $item->productVariant->color }} - {{ $item->productVariant->storage }}
                        </div>
                        <div class="product-price">
                            {{ number_format($item->price, 0, ',', '.') }}đ x {{ $item->quantity }}
                    </div>
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

        @if($order->cancel_reason)
            <div class="cancel-reason">
                <h4><i class="fas fa-exclamation-triangle"></i> Lý do hủy đơn</h4>
                <p>{{ $order->cancel_reason }}</p>
            </div>
        @endif

        <div class="action-buttons">
            @if(($order->status == 'pending' || $order->status == 'processing') && $order->payment_status != 'paid')
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cancelModal">
                    <i class="fas fa-times-circle"></i> Hủy đơn
                </button>
            @endif
            @if($order->status == 'delivered')
                <form action="{{ route('order.confirm', $order->id) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-check-circle"></i> Xác nhận đã nhận
                    </button>
                </form>
            @endif
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
