@extends('layouts.customer')

@section('title', 'Lịch sử mua hàng')

@section('content')
<style>
    .status-filter {
        display: flex;
        gap: 0.75rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 10px;
    }

    .status-filter .btn {
        padding: 0.5rem 1.25rem;
        border-radius: 25px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: none;
        text-decoration: none;
        font-size: 0.95rem;
    }

    .status-filter .btn-danger {
        background: #e74c3c;
        color: white;
        box-shadow: 0 2px 5px rgba(231, 76, 60, 0.2);
    }

    .status-filter .btn-outline-secondary {
        border: 1px solid #dee2e6;
        color: #6c757d;
        background: white;
    }

    .status-filter .btn-outline-secondary:hover {
        background-color: #f8f9fa;
        color: #495057;
        border-color: #e74c3c;
    }

    .order-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        margin-bottom: 2rem;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .order-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .order-header {
        background: #f8f9fa;
        padding: 1.25rem 2rem;
        border-bottom: 1px solid #eee;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .order-code {
        font-weight: 600;
        color: #2c3e50;
        font-size: 1.1rem;
    }

    .order-price {
        color: #e74c3c;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .order-date {
        color: #6c757d;
        font-size: 0.95rem;
    }

    .order-status {
        display: inline-block;
        padding: 0.5rem 1.25rem;
        border-radius: 25px;
        font-weight: 500;
        margin: 1rem 2rem;
        font-size: 0.95rem;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .status-pending {
        background: #fff3cd;
        color: #856404;
    }

    .status-processing {
        background: #cce5ff;
        color: #004085;
    }

    .status-shipping {
        background: #d4edda;
        color: #155724;
    }

    .status-delivered {
        background: #d1e7dd;
        color: #0f5132;
    }

    .status-completed {
        background: #d1e7dd;
        color: #0f5132;
    }

    .status-cancelled {
        background: #f8d7da;
        color: #721c24;
    }

    .product-list {
        padding: 0 2rem 2rem;
    }

    .product-item {
        display: flex;
        align-items: center;
        padding: 1.25rem 0;
        border-bottom: 1px solid #eee;
    }

    .product-item:last-child {
        border-bottom: none;
    }

    .product-image {
        width: 90px;
        height: 90px;
        object-fit: cover;
        border-radius: 10px;
        margin-right: 1.5rem;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .product-info {
        flex: 1;
    }

    .product-name {
        font-weight: 500;
        margin-bottom: 0.75rem;
        font-size: 1.05rem;
    }

    .product-name a {
        color: #2c3e50;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .product-name a:hover {
        color: #e74c3c;
    }

    .product-variant {
        color: #666;
        font-size: 0.95rem;
        margin-bottom: 0.75rem;
    }

    .product-variant div {
        margin-bottom: 0.25rem;
    }

    .product-price {
        color: #e74c3c;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .product-quantity {
        color: #6c757d;
        font-size: 0.95rem;
        margin-top: 0.5rem;
    }

    .order-actions {
        padding: 1.25rem 2rem;
        border-top: 1px solid #eee;
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
    }

    .btn-action {
        padding: 0.6rem 1.25rem;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
        font-size: 0.95rem;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .btn-detail {
        background: #17a2b8;
        color: white;
    }

    .btn-detail:hover {
        background: #138496;
        color: white;
        transform: translateY(-1px);
    }

    .btn-cancel {
        background: #dc3545;
        color: white;
    }

    .btn-cancel:hover {
        background: #c82333;
        color: white;
        transform: translateY(-1px);
    }

    .btn-confirm {
        background: #28a745;
        color: white;
    }

    .btn-confirm:hover {
        background: #218838;
        color: white;
        transform: translateY(-1px);
    }

    .empty-state {
        text-align: center;
        padding: 4rem 1rem;
        background: #f8f9fa;
        border-radius: 15px;
        margin: 2rem 0;
    }

    .empty-state i {
        font-size: 3.5rem;
        color: #e74c3c;
        margin-bottom: 1.5rem;
    }

    .empty-state p {
        color: #6c757d;
        font-size: 1.2rem;
        margin: 0;
    }

    .pagination {
        margin-top: 3rem;
    }

    .pagination .page-link {
        color: #e74c3c;
        border: none;
        padding: 0.6rem 1.25rem;
        margin: 0 0.25rem;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .pagination .page-item.active .page-link {
        background-color: #e74c3c;
        border-color: #e74c3c;
    }

    .payment-info {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        padding: 1rem 2rem;
        background: #f8f9fa;
        border-bottom: 1px solid #eee;
    }

    .payment-method {
        color: #6c757d;
        font-size: 0.95rem;
    }

    .payment-status {
        padding: 0.4rem 1rem;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .payment-status.paid {
        background: #28a745;
        color: white;
    }

    .payment-status.pending {
        background: #ffc107;
        color: #000;
    }

    .payment-status.failed {
        background: #dc3545;
        color: white;
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

<h1>Lịch sử mua hàng</h1>

<!-- Tabs lọc trạng thái -->
<div class="status-filter">
    @php
        $statuses = [
            'all' => 'Tất cả',
            'pending' => 'Chờ xác nhận',
            'processing' => 'Đang xử lý',
            'shipping' => 'Đang giao hàng',
            'delivered' => 'Đã giao hàng',
            'completed' => 'Hoàn thành',
            'cancelled' => 'Hủy',
        ];
        $currentStatus = request('status', 'all');
    @endphp

    @foreach ($statuses as $key => $label)
        <a href="{{ route('customer.order.history', ['status' => $key]) }}"
            class="btn {{ $currentStatus == $key ? 'btn-danger' : 'btn-outline-secondary' }}">
            {{ $label }}
        </a>
    @endforeach
</div>

<!-- Danh sách đơn hàng -->
@if ($orders->isEmpty())
    <div class="empty-state">
        <i class="bi bi-bag-x"></i>
        <p>Không có đơn hàng nào.</p>
    </div>
@else
    @foreach ($orders as $order)
        <div class="order-card">
            <div class="order-header">
                <div>
                    <span class="order-code">Đơn hàng {{ $order->order_code }}</span>
                    <span class="order-price ms-3">{{ number_format($order->total_price, 0, ',', '.') }}đ</span>
                </div>
                <div>
                    <span class="order-date">{{ $order->created_at->format('d/m/Y H:i') }}</span>
                </div>
            </div>

            <div class="payment-info">
                <span class="payment-method">Phương thức thanh toán: {{ $order->payment_method }}</span>
                <span class="payment-status {{ $order->payment_status }}">
                    {{ $order->payment_status == 'paid' ? 'Đã thanh toán' : ($order->payment_status == 'pending' ? 'Chờ thanh toán' : 'Thất bại') }}
                </span>
            </div>

            <div class="order-status status-{{ $order->status }}">
                @php
                    $statusText = [
                        'pending' => 'Chờ xác nhận',
                        'processing' => 'Đang xử lý',
                        'shipping' => 'Đang giao hàng',
                        'delivered' => 'Đã giao hàng',
                        'completed' => 'Hoàn thành',
                        'cancelled' => 'Hủy',
                    ];
                    echo $statusText[$order->status] ?? 'Không xác định';
                @endphp
            </div>

            <div class="product-list">
                @foreach ($order->orderItems as $item)
                    @if ($item->productVariant && $item->productVariant->product)
                        <div class="product-item">
                            <img src="{{ asset($item->productVariant->product->image) }}"
                                 alt="{{ $item->productVariant->product->name }}"
                                 class="product-image">
                            <div class="product-info">
                                <div class="product-name">
                                    <a href="{{ route('customer.product_detail', $item->productVariant->product->id) }}">
                                        {{ $item->productVariant->product->name }}
                                    </a>
                                </div>
                                <div class="product-variant">
                                    <div><strong>Màu sắc:</strong> {{ $item->productVariant->color ?? 'Không có' }}</div>
                                    <div><strong>Dung lượng:</strong> {{ $item->productVariant->storage ?? 'Không có' }}</div>
                                </div>
                                <div class="product-price">{{ number_format($item->price, 0, ',', '.') }}đ</div>
                                <div class="product-quantity">Số lượng: {{ $item->quantity }}</div>
                            </div>
                        </div>
                    @else
                        <div class="product-item">
                            <div class="text-center text-warning w-100">Sản phẩm không còn tồn tại</div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="order-actions">
                <a href="{{ route('order_detail', $order->id) }}" class="btn-action btn-detail">
                    <i class="bi bi-eye"></i> Xem chi tiết
                </a>
                
                @if($order->status == 'delivered')
                    <form action="{{ route('order.confirm', $order->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn-action btn-confirm">
                            <i class="bi bi-check-circle"></i> Xác nhận đã nhận hàng
                        </button>
                    </form>
                @endif

                @if(($order->status == 'pending' || $order->status == 'processing') && $order->payment_status != 'paid')
                    <button type="button" class="btn-action btn-cancel" data-bs-toggle="modal" data-bs-target="#cancelModal{{ $order->id }}">
                        <i class="bi bi-x-circle"></i> Hủy đơn hàng
                    </button>
                @endif
            </div>
        </div>
    @endforeach
@endif

<!-- Phân trang -->
<div class="d-flex justify-content-center">
    {{ $orders->links() }}
</div>

<!-- Modal Hủy đơn hàng -->
@foreach ($orders as $order)
    @if(($order->status == 'pending' || $order->status == 'processing') && $order->payment_status != 'paid')
        <div class="modal fade" id="cancelModal{{ $order->id }}" tabindex="-1">
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
@endforeach

<script>
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.innerHTML = `
        <i class="bi ${type === 'success' ? 'bi-check-circle' : 'bi-exclamation-circle'}"></i>
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
