@extends('layouts.customer')

@section('content')
    <div class="container mt-5">
        <h2>Chi tiết đơn hàng #{{ $order->id }}</h2>

        <div class="card mb-3">
            <div class="card-header bg-primary text-white">Thông tin đơn hàng</div>
            <div class="card-body">
                @if (isset($tongTienSanPham))
                    <p><strong>Tổng tiền sản phẩm:</strong> {{ number_format($tongTienSanPham, 0, ',', '.') }}đ</p>
                    <p><strong>Giảm giá:</strong> {{ number_format($discountAmount, 0, ',', '.') }}đ</p>
                    <p><strong>Thành tiền:</strong> <span
                            class="text-danger">{{ number_format($totalPayable, 0, ',', '.') }}đ</span></p>
                @else
                    <p class="text-muted">Chưa có dữ liệu đơn hàng.</p>
                @endif

            </div>
        </div>

        <h4>Danh sách sản phẩm</h4>
        @if ($order->orderDetails->isNotEmpty())
            <div class="list-group">
                @foreach ($order->orderDetails as $detail)
                    <div class="list-group-item">
                        <h5>{{ $detail->product?->name ?? 'Không tìm thấy sản phẩm' }}</h5>
                        <p>Giá: {{ number_format($detail->price, 0, ',', '.') }}đ</p>
                        <p>Số lượng: {{ $detail->quantity }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-muted">Không có sản phẩm nào trong đơn hàng này.</p>
        @endif

        <a href="{{ route('customer.order.history') }}" class="btn btn-secondary mt-3">Quay lại lịch sử đơn hàng</a>
    </div>
@endsection
