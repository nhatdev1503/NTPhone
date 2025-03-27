@extends('layouts.admin.main')

@section('content')
    <div class="container mx-auto mt-8 max-w-screen-xl">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-gray-600 text-white py-4 px-6">
                <h3 class="text-2xl font-semibold">Chi Tiết Đơn Hàng: {{ $order->order_code }}</h3>
            </div>
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mt-4" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="p-6">
                <div class="grid grid-cols-2 gap-8">
                    <!-- Thông tin đơn hàng -->
                    <div>
                        <h5 class="text-blue-600 font-semibold">Thông Tin Đơn Hàng</h5>
                        <p><strong>Mã Đơn:</strong> {{ $order->order_code }}</p>
                        <p><strong>Trạng Thái:</strong>
                            <span class="px-3 py-1 rounded-full badge bg-{{ $statusColors[$order->status] }}">
                                {{ $statusText[$order->status] }}
                            </span>
                        </p>
                        <p><strong>Ngày Đặt:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
                    </div>

                    <!-- Thông tin khách hàng -->
                    <div>
                        <h5 class="text-blue-600 font-semibold">Thông Tin Khách Hàng</h5>
                        <p><strong>Họ Tên:</strong> {{ $order->fullname }}</p>
                        <p><strong>Số Điện Thoại:</strong> {{ $order->phone }}</p>
                        <p><strong>Email:</strong> {{ $order->email }}</p>
                        <p><strong>Địa Chỉ:</strong> {{ $order->address }}</p>
                    </div>
                </div>

                <hr class="my-6">

                <!-- Thông tin thanh toán -->
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h5 class="text-blue-600 font-semibold">Thanh Toán</h5>
                        <p><strong>Hình Thức:</strong> {{ $order->payment_method }}</p>
                        <p><strong>Trạng Thái:</strong>
                            <span class="px-3 py-1 rounded-full badge bg-{{ $paymentColors[$order->payment_status] }}">
                                {{ $paymentStatus[$order->payment_status] }}
                            </span>
                        </p>
                    </div>

                    <div>
                        <h5 class="text-blue-600 font-semibold">Tổng Tiền</h5>
                        <p><strong>Tổng Đơn Hàng:</strong> {{ number_format($order->total_price , 0, ',', '.') }} VND</p>
                        <p><strong>Mã Giảm Giá:</strong class="text-black-50"> {{ $order->discount->code ?? 'Không có' }}</p>
                        <p><strong>Giảm Giá: </strong><span class="text-red-500 font-bold">-{{ number_format($order->discount_amount, 0, ',', '.') }}  VND</span></p>
                        <p><strong>Thành Tiền:</strong> <span class="">{{ number_format($order->total_price - $order->discount_amount, 0, ',', '.') }} VND</span></p>
                    </div>
                </div>

                <hr class="my-6">

                <!-- Danh sách sản phẩm -->
                <h5 class="text-blue-600 font-semibold">Danh Sách Sản Phẩm</h5>
                <div class="overflow-x-auto">
                    <table class="w-full table-auto mt-4">
                        <thead>
                            <tr class="bg-gray-800 text-white">
                                <th class="py-2">Ảnh</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Biến Thể</th>
                                <th>Số Lượng</th>
                                <th>Giá</th>
                                <th>Tổng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderItems as $item)
                                <tr class="border-b">
                                    <td class="py-2"><img src="{{ asset($item->productVariant->product->image) }}" alt="Ảnh sản phẩm" class="w-16"></td>
                                    <td>{{ $item->productVariant->product->name }}</td>
                                    <td>Màu: {{ $item->productVariant->color }} - Dung lượng: {{ $item->productVariant->storage }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ number_format($item->price, 0, ',', '.') }} VND</td>
                                    <td>{{ number_format($item->quantity * $item->price, 0, ',', '.') }} VND</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-center space-x-4 mt-8">
                    <a href="{{ route('orders.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Quay Lại</a>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg" data-bs-toggle="modal" data-bs-target="#confirmModal">Xác nhận</button>
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
                            <option value="pending" @if ($order->status != 'cancelled') disabled @endif @if ($order->status == 'pending') selected @endif>Chờ xác nhận</option>
                            <option value="processing" @if ($order->status != 'pending') disabled @endif @if ($order->status == 'processing') selected @endif>Đang đóng gói</option>
                            <option value="shipped" @if ($order->status != 'processing') disabled @endif @if ($order->status == 'shipped') selected @endif>Đang giao</option>
                            <option value="delivered"@if ($order->status != 'shipped') disabled @endif @if ($order->status == 'delivered') selected @endif>Đã giao</option>
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
