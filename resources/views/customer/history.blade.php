@extends('layouts.customer')

@section('title', 'Lịch sử mua hàng')

@section('content')
    <style>
        .history-title {
            font-size: 40px;
            text-align: center;
            color: #333333;
            padding: 10px;
            text-transform: uppercase;
        }

        body {
            background-color: white;
        }

        /* Đảm bảo phần content không thay đổi chiều cao */
    </style>
    <div class="container mt-5 content">
        <h1 class="history-title mb-4">Lịch sử mua hàng</h1>

        <!-- Tabs lọc trạng thái -->
        <div class="d-flex mb-3">
            @php
                $statuses = [
                    'all' => 'Tất cả',
                    'pending' => 'Chờ xác nhận',
                    'processing' => 'Đang đóng gói',
                    'shipping' => 'Đang giao',
                    'delivered' => 'Đã giao',
                    'cancelled' => 'Hoàn hàng',
                    'completed' => 'Hoàn thành',
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
                <div class="card mb-4">
                    <div class="card-body mb-3" style="line-height: 35px;">
                        <h5 class="card-title">Đơn hàng {{ $order->order_code }}</h5>
                        <p><strong>Giá:</strong> {{ number_format($order->total_price, 0, ',', '.') }}đ</p>
                        <p><strong>Ngày đặt:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
                        <p><strong>Trạng thái:</strong>
                            @php
                                $statusText = [
                                    'pending' => 'Chờ xác nhận',
                                    'processing' => 'Đang đóng gói',
                                    'shipped' => 'Đang giao',
                                    'delivered' => 'Đã giao',
                                    'cancelled' => 'Hoàn hàng',
                                    'completed' => 'Hoàn thành',
                                ];

                                $statusColors = [
                                    'pending' => 'warning',
                                    'processing' => 'primary',
                                    'shipped' => 'info',
                                    'delivered' => 'success',
                                    'cancelled' => 'danger',
                                    'completed' => 'secondary',
                                ];

                                $orderStatus = $order->status;
                                $statusLabel = $statusText[$orderStatus] ?? 'Không xác định';
                                $statusColor = $statusColors[$orderStatus] ?? 'secondary';
                            @endphp
                            <span class="badge bg-{{ $statusColor }}">
                                {{ $statusLabel }}
                            </span>
                        </p>
                        @extends('layouts.customer')

                        @section('title', 'Lịch sử mua hàng')

                    @section('content')
                        <style>
                            .history-title {
                                font-size: 40px;
                                text-align: center;
                                color: #333333;
                                padding: 10px;
                                text-transform: uppercase;
                            }

                            body {
                                background-color: white;
                            }

                            /* Đảm bảo phần content không thay đổi chiều cao */
                        </style>
                        <div class="container mt-5 content">
                            <h1 class="history-title mb-4">Lịch sử mua hàng</h1>

                            <!-- Tabs lọc trạng thái -->
                            <div class="d-flex mb-3">
                                @php
                                    $statuses = [
                                        'all' => 'Tất cả',
                                        'pending' => 'Chờ xác nhận',
                                        'processing' => 'Đang đóng gói',
                                        'shipping' => 'Đang giao',
                                        'delivered' => 'Đã giao',
                                        'cancelled' => 'Hoàn hàng',
                                        'completed' => 'Hoàn thành',
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
                                    <div class="card mb-4">
                                        <div class="card-body mb-3" style="line-height: 35px;">
                                            <h5 class="card-title">Đơn hàng {{ $order->order_code }}</h5>
                                            <p><strong>Giá:</strong> {{ number_format($order->total_price, 0, ',', '.') }}đ
                                            </p>
                                            <p><strong>Ngày đặt:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
                                            <p><strong>Trạng thái:</strong>
                                                @php
                                                    $statusText = [
                                                        'pending' => 'Chờ xác nhận',
                                                        'processing' => 'Đang đóng gói',
                                                        'shipped' => 'Đang giao',
                                                        'delivered' => 'Đã giao',
                                                        'cancelled' => 'Hoàn hàng',
                                                        'completed' => 'Hoàn thành',
                                                    ];

                                                    $statusColors = [
                                                        'pending' => 'warning',
                                                        'processing' => 'primary',
                                                        'shipped' => 'info',
                                                        'delivered' => 'success',
                                                        'cancelled' => 'danger',
                                                        'completed' => 'secondary',
                                                    ];

                                                    $orderStatus = $order->status;
                                                    $statusLabel = $statusText[$orderStatus] ?? 'Không xác định';
                                                    $statusColor = $statusColors[$orderStatus] ?? 'secondary';
                                                @endphp
                                                <span class="badge bg-{{ $statusColor }}">
                                                    {{ $statusLabel }}
                                                </span>
                                            </p>
                                            <h6>Sản phẩm</h6>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Hình ảnh</th>
                                                        <th>Tên sản phẩm</th>
                                                        <th>Biến thể</th>  <!-- Cột "Biến thể" sẽ chứa màu sắc và số lượng kho -->
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
                                                                    <a href="{{ route('customer.product_detail', $item->productVariant->product->id) }}">
                                                                        <img src="{{ asset( $item->productVariant->product->image) }}"
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
                                                                        <div style="width: 30px; height: 30px; background-color: {{ $item->productVariant->color }}; border-radius: 50%; display: inline-block;"></div>
                                                                    @else
                                                                        <div>Không có</div>
                                                                    @endif
                                                                    <div><strong>Kho hàng:</strong> {{ $item->productVariant->storage ?? 'Không có' }}</div>
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
                                            


                                            <a href="{{ route('customer.order_detail', $order->id) }}"
                                                class="btn btn-info mb-2" style="margin-top: 20px">Xem chi tiết</a>
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

                    <a href="{{ route('customer.order_detail', $order->id) }}" class="btn btn-info mb-2"
                        style="margin-top: 20px">Xem chi tiết</a>
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
