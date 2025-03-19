@extends('layouts.admin.main')

@section('content')
    <div class="container mt-4" style="max-width: 95%; min-width: 1200px;">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>Chi Tiết Đơn Hàng: {{ $order->order_code }}</h3>
            </div>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="card-body">
                <div class="row">
                    <!-- Thông tin đơn hàng -->
                    <div class="col-md-6">
                        <h5 class="text-primary">Thông Tin Đơn Hàng</h5>
                        <p><strong>Mã Đơn:</strong> {{ $order->order_code }}</p>
                        <p><strong>Trạng Thái:</strong>
                            <span class="badge bg-{{ $statusColors[$order->status] }}">
                                {{ $statusText[$order->status] }}
                            </span>
                        </p>
                        <p><strong>Ngày Đặt:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
                    </div>

                    <!-- Thông tin khách hàng -->
                    <div class="col-md-6">
                        <h5 class="text-primary">Thông Tin Khách Hàng</h5>
                        <p><strong>Họ Tên:</strong> {{ $order->fullname }}</p>
                        <p><strong>Số Điện Thoại:</strong> {{ $order->phone }}</p>
                        <p><strong>Email:</strong> {{ $order->email }}</p>
                        <p><strong>Địa Chỉ:</strong> {{ $order->address }}</p>
                    </div>
                </div>

                <hr>

                <!-- Thông tin thanh toán -->
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-primary">Thanh Toán</h5>
                        <p><strong>Hình Thức:</strong> {{ $order->payment_method }}</p>
                        <p><strong>Trạng Thái:</strong>
                            <span class="badge bg-{{ $paymentColors[$order->payment_status] }}">
                                {{ $paymentStatus[$order->payment_status] }}
                            </span>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <h5 class="text-primary">Tổng Tiền</h5>
                        <p><strong>Tổng Đơn Hàng:</strong>
                            {{ number_format($order->total_price + $order->discount_amount, 0, ',', '.') }} VND</p>
                        <p><strong>Mã giảm giá:</strong> {{ $order->discount->code ?? 'Không có' }}</p>
                        <p><strong>Giảm Giá : </strong> -{{ number_format($order->discount_amount, 0, ',', '.') }} VND</p>
                        <p><strong>Thành Tiền:</strong>
                            <span class="text-danger fw-bold">
                                {{ number_format($order->total_price, 0, ',', '.') }} VND
                            </span>
                        </p>
                    </div>
                </div>

                <hr>

                <!-- Danh sách sản phẩm -->
                <h5 class="text-primary">Danh Sách Sản Phẩm</h5>
                <table class="table table-bordered mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Biến Thể</th>
                            <th>Số Lượng</th>
                            <th>Giá</th>
                            <th>Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderItems as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset( $item->productVariant->product->image) }}"
                                        alt="Ảnh sản phẩm" width="60">
                                </td>
                                <td>{{ $item->productVariant->product->name }}</td>
                                <td>
                                    Màu: {{ $item->productVariant->color }} <br>
                                    Dung lượng: {{ $item->productVariant->storage }}
                                </td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ number_format($item->price, 0, ',', '.') }} VND</td>
                                <td>{{ number_format($item->quantity * $item->price, 0, ',', '.') }} VND</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="text-center mt-4">
                    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Quay Lại</a>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmModal">
                        Xác nhận
                    </button>

                </div>
            </div>
        </div>
    </div>

    <!-- MODAL XÁC NHẬN -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title" id="confirmModalLabel">Xác nhận trạng thái đơn hàng</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('orders.update', $order->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                        <label for="order_status">Chọn trạng thái:</label>
                        <select class="form-select" name="status">
                            <option value="pending" @if ($order->status != 'pending' && $order->status != 'cancelled') disabled @endif @if ($order->status == 'pending') selected @endif>Chờ xác nhận</option>
                            <option value="processing" @if ($order->status == 'shipped' || $order->status == 'delivered'|| $order->status == 'cancelled') disabled @endif @if ($order->status == 'processing') selected @endif>Đang đóng gói</option>
                            <option value="shipped" @if ($order->status == 'pending' || $order->status == 'delivered' || $order->status == 'cancelled') disabled @endif @if ($order->status == 'shipped') selected @endif>Đang giao</option>
                            <option value="delivered"@if ($order->status == 'pending' || $order->status == 'processing'|| $order->status == 'cancelled') disabled @endif @if ($order->status == 'delivered') selected @endif>Đã giao</option>
                            <option value="cancelled"@if ($order->status == 'cancelled')  disabled selected @endif>Hoàn hàng</option>
                        </select>
                        <div class="mt-3 text-end">
                            <button type="submit" class="btn btn-success">Xác nhận</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
