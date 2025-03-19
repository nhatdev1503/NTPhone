@include('layouts.customer.header')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white text-center">
                    <h4><i class="bi bi-receipt"></i> Thông tin đơn hàng</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Mã đơn:</strong> {{ $order->order_code }}</li>
                        <li class="list-group-item"><strong>Khách hàng:</strong> {{ $order->fullname }}</li>
                        <li class="list-group-item"><strong>Địa chỉ nhận hàng:</strong> {{ $order->address }}</li>
                        <li class="list-group-item"><strong>Số điện thoại:</strong> {{ $order->phone }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $order->email }}</li>
                        <li class="list-group-item"><strong>Trạng thái:</strong> <span
                                class="badge bg-info">{{ $order->status }}</span></li>
                        <li class="list-group-item"><strong>Ngày đặt hàng:</strong>
                            {{ $order->created_at->format('d/m/Y H:i') }}</li>
                    </ul>

                    <h5 class="mt-4 text-danger"><i class="bi bi-credit-card"></i> Thanh toán</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Tổng tiền:</strong>
                            {{ number_format($order->total_price, 0, ',', '.') }}đ</li>
                        <li class="list-group-item"><strong>Phương thức thanh toán:</strong>
                            {{ $order->payment_method }}</li>
                        <li class="list-group-item"><strong>Trạng thái thanh toán:</strong> {{ $order->payment_status }}
                        </li>
                    </ul>

                     <br><br>
                    <h5 class="text-primary"><i class="bi bi-list-check"></i> Danh Sách Sản Phẩm</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered mt-3">
                            <thead class="table-dark text-center">
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
                                        <td class="text-center">
                                            <img src="{{ asset('storage/' . $item->productVariant->product->image) }}"
                                                alt="{{ $item->productVariant->product->name }}" width="60"
                                                class="rounded">
                                        </td>
                                        <td class="align-middle">{{ $item->productVariant->product->name }}</td>
                                        <td class="align-middle">
                                            <span class="badge bg-dark text-whitewhite">Màu: {{ $item->productVariant->color }}</span>
                                            <br>
                                            <span class="badge bg-secondary">Dung lượng:
                                                {{ $item->productVariant->storage }}</span>
                                        </td>
                                        <td class="text-center align-middle">{{ $item->quantity }}</td>
                                        <td class="text-end align-middle">
                                            {{ number_format($item->price, 0, ',', '.') }} VND</td>
                                        <td class="text-end align-middle">
                                            {{ number_format($item->quantity * $item->price, 0, ',', '.') }} VND</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ route('guest.orders.lookup') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Quay lại tra cứu
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.customer.footer')
