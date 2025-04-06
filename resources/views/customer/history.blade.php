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
            background-color: #cccccc;
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

        .btn-cancell {
            color: #d10024;
            border: 1px solid #d10024;
            padding: 4px 10px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
            right: 0;
            position: absolute;
            top: 5px;
            margin-right: 30px;
        }

        .btn-detail:hover {
            background-color: #d10024;
            color: #fff;
        }

        .btn-cancell:hover {
            background-color: #d10024;
            color: #fff;
        }

        .min-height {
            min-height: 600px;
        }

        .swal2-input {
            padding: 10px;
            justify-content: center;
            align-items: center;
        }
    </style>

    <div class="container mt-5 min-height">
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
                        @php
                            $firstItem = $order->orderItems->first();
                            $otherCount = $order->orderItems->count() - 1;
                        @endphp
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


                        <div class="order-card">
                            <div class="order-left">
                                @if ($firstItem && $firstItem->productVariant && $firstItem->productVariant->product)
                                    <a
                                        href="{{ route('customer.product_detail', $firstItem->productVariant->product->id) }}">
                                        <img src="{{ asset($firstItem->productVariant->product->image) }}"
                                            alt="{{ $firstItem->productVariant->product->name }}" class="product-image">
                                    </a>
                                @endif

                                <div class="product-info">
                                    @if ($firstItem && $firstItem->productVariant && $firstItem->productVariant->product)
                                        <p class="product-title">{{ $firstItem->productVariant->product->name }}</p>
                                    @endif

                                    @if ($otherCount > 0)
                                        <p class="product-other">và {{ $otherCount }} sản phẩm khác</p>
                                    @endif

                                    <button class="btn-cancel" disabled>
                                        {{ $statusText[$order->status] ?? 'Không xác định' }}
                                    </button>

                                </div>
                            </div>



                            <div class="order-right">

                                <span class="order-date">{{ $order->created_at->format('d/m/Y H:i') }}</span>
                                <p class="product-price">{{ number_format($order->total_price, 0, ',', '.') }}đ</p>
                                <!-- Nút hủy đơn hàng -->
                                @if (in_array($order->status, ['pending', 'processing']) &&
                                        $order->payment_status != 'paid' &&
                                        $order->payment_method != 'VNPAY')
                                    <a href="#" class="btn-detail"
                                        onclick="event.preventDefault(); confirmCancelOrder('{{ $order->id }}', '{{ $order->order_code }}', '{{ number_format($order->total_price, 0, ',', '.') }}')">
                                        Hủy đơn hàng
                                    </a>

                                    <!-- Form hủy đơn hàng (ẩn) -->
                                    <form id="cancel-form-{{ $order->id }}"
                                        action="{{ route('customer.order.cancel', $order->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('PATCH') <!-- Giả lập phương thức PATCH -->
                                    </form>
                                @endif

                                <!-- Thông báo SweetAlert2 -->
                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                                <script>
                                    // Hàm xử lý popup khi nhấn nút hủy
                                    function confirmCancelOrder(orderId, orderCode, totalPrice) {
                                        Swal.fire({
                                            title: 'Xác nhận hủy đơn hàng',
                                            html: `
                                                <p>Bạn chắc chắn muốn hủy đơn hàng <strong>#${orderCode}</strong>?</p>
                                                <p><strong>Giá tiền:</strong> ${totalPrice}đ</p>
                                                <p>Hành động này không thể hoàn tác.</p>
                                                <label for="cancel-reason">Lý do hủy (chọn lý do dưới đây):</label>
                                                <select id="cancel-reason" class="swal2-input">
                                                    <option value="">Chọn lý do hủy...</option>
                                                    <option value="Sản phẩm không còn cần thiết">Sản phẩm không còn cần thiết</option>
                                                    <option value="Giá quá cao">Giá quá cao</option>
                                                    <option value="Lý do cá nhân">Lý do cá nhân</option>
                                                    <option value="Tìm thấy sản phẩm khác tốt hơn">Tìm thấy sản phẩm khác tốt hơn</option>
                                                </select>
                                            `,
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonText: 'Tiếp tục hủy',
                                            cancelButtonText: 'Hủy bỏ',
                                            preConfirm: () => {
                                                const cancelReason = document.getElementById('cancel-reason').value;

                                                // Kiểm tra lý do hủy
                                                if (!cancelReason) {
                                                    Swal.showValidationMessage('Vui lòng chọn lý do hủy');
                                                    return false;
                                                }

                                                return cancelReason; // Trả về lý do chọn
                                            }
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                const cancelReason = result.value;
                                                const form = document.getElementById('cancel-form-' + orderId);

                                                // Tạo input ẩn để gửi lý do hủy vào form
                                                const inputReason = document.createElement('input');
                                                inputReason.type = 'hidden';
                                                inputReason.name = 'cancel_reason';
                                                inputReason.value = cancelReason;
                                                form.appendChild(inputReason);

                                                // Submit form hủy đơn hàng
                                                form.submit();
                                            }
                                        });
                                    }
                                </script>


                                @if (session('success'))
                                    <script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Thành công',
                                            text: "{{ session('success') }}",
                                            showConfirmButton: true
                                        });
                                    </script>
                                @endif

                                @if (session('error'))
                                    <script>
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Lỗi',
                                            text: "{{ session('error') }}",
                                            showConfirmButton: true
                                        });
                                    </script>
                                @endif
                                

                                <a href="{{ route('customer.order_detail', $order->id) }}" class="btn-detail">Xem chi
                                    tiết</a>
                            </div>

                        </div>


                        </p>


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
