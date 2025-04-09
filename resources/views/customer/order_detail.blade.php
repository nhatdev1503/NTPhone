@extends('layouts.customer')

@section('title', 'Chi tiết đơn hàng ')

@section('content')
    <style>
        .profile-container {
            min-height: 700px;
        }

        .sidebar {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            padding: 20px 30px;
            height: fit-content;
           
        }

        .sidebar-item {
            padding: 12px 25px;
            color: #2c3e50;
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .sidebar-item:hover {
            background: #f8f9fa;
            color: #e74c3c;
        }

        .sidebar-item.active {
            background: #f8f9fa;
            color: #e74c3c;
            border-left: 3px solid #e74c3c;
        }

        .sidebar-item i {
            margin-right: 10px;
            font-size: 1.1em;
        }

        .main-content {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
        }

        .content-title {
            color: #2c3e50;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f8f9fa;
        }

        .form-label {
            color: #2c3e50;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #dee2e6;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #e74c3c;
            box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25);
        }

        .btn-save {
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-save:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.3);
            color: white;
        }

        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
            border: 3px solid #e74c3c;
        }

        .profile-info h3 {
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .profile-info p {
            color: #6c757d;
            margin-bottom: 0;
        }
    </style>

    <div class="container profile-container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 mb-4">
                <div class="sidebar">
                    <a href="{{ route('customer.profile') }}"
                        class="sidebar-item {{ request()->routeIs('customer.profile') ? 'active' : '' }}">
                        <i class="bi bi-person"></i> Thông tin cá nhân
                    </a>
                    <a href="{{ route('customer.order.history') }}"
                        class="sidebar-item {{ request()->routeIs('customer.order.history') ? 'active' : '' }}">
                        <i class="bi bi-clock-history"></i> Lịch sử mua hàng
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9">
                <div class="main-content p-4 shadow rounded"
                    style="background-color: rgba(255, 255, 255, 0.6); backdrop-filter: blur(2px); border: none;">
                    <h2 class="content-title mb-4 border-bottom pb-2">🧾 Chi tiết đơn hàng</h2>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-x-circle"></i> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    <div class="row gy-4 order-info-wrapper" style="font-size: 0.9rem;">
                        <!-- Thông tin đơn hàng -->
                        <div class="col-md-6">
                            <div class="border p-3 rounded">
                                <h5 class="mb-3">📦 Thông tin đơn hàng:</h5>
                                <p><strong>Mã đơn:</strong> {{ $order->order_code }}</p>
                                <p><strong>Ngày đặt:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
                                <p><strong>Trạng thái:</strong>
                                    @php
                                        $statusText = [
                                            'pending' => ['label' => 'Chờ xác nhận', 'class' => 'bg-warning text-dark'],
                                            'processing' => ['label' => 'Đang xử lý', 'class' => 'bg-primary'],
                                            'shipped' => ['label' => 'Đang giao hàng', 'class' => 'bg-info text-dark'],
                                            'delivered' => ['label' => 'Đã giao hàng', 'class' => 'bg-success'],
                                            'completed' => ['label' => 'Hoàn thành', 'class' => 'bg-success'],
                                            'cancelled' => ['label' => 'Đã hủy', 'class' => 'bg-danger'],
                                        ];

                                        $status = $order->status;
                                        $label = $statusText[$status]['label'] ?? 'Không xác định';
                                        $class = $statusText[$status]['class'] ?? 'bg-secondary';
                                    @endphp
                                    <span class="badge {{ $class }}">{{ $label }}</span>
                                </p>
                                @if ($order->status === 'cancelled' && $order->cancel_reason)
                                    <p><strong>Lý do hủy:</strong> {{ $order->cancel_reason }}</p>
                                @endif

                            </div>
                        </div>

                        <!-- Thông tin khách hàng -->
                        <div class="col-md-6">
                            <div class="border p-3 rounded">
                                <h5 class="mb-3">👤 Thông tin khách hàng:</h5>
                                <p><strong>Họ tên:</strong> {{ $order->fullname }}</p>
                                <p><strong>Email:</strong> {{ $order->email }}</p>
                                <p><strong>SĐT:</strong> {{ $order->phone }}</p>
                                <p><strong>Địa chỉ:</strong> {{ $order->address }}</p>
                            </div>
                        </div>

                        <!-- Thông tin thanh toán -->
                        <div class="col-md-6">
                            <div class="border p-3 rounded">
                                <h5 class="mb-3">💳 Thông tin thanh toán:</h5>
                                <p><strong>Phương thức:</strong> {{ strtoupper($order->payment_method) }}</p>
                                <p><strong>Trạng thái:</strong>
                                    @if ($order->payment_status == 'paid')
                                        <span class="badge bg-success">Đã thanh toán</span>
                                    @elseif($order->payment_status == 'pending')
                                        <span class="badge bg-warning text-dark">Chờ thanh toán</span>
                                    @else
                                        <span class="badge bg-danger">Thất bại</span>
                                    @endif
                                </p>
                            </div>
                        </div>

                        <!-- Tổng tiền -->
                        <div class="col-md-6">
                            <div class="border p-3 rounded">
                                <h5 class="mb-3">💰 Tổng tiền:
                                    <span class="text-red"> {{ number_format($order->total_price, 0, ',', '.') }}
                                        VND</span>
                                </h5>
                            </div>
                        </div>
                        <div class="action-buttons">
                            @if (($order->status == 'pending' || $order->status == 'processing') && $order->payment_status != 'paid')
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelModal">
                                    <i class="fas fa-times-circle"></i> Hủy đơn
                                </button>
                            @endif
                            @if ($order->status == 'delivered')
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
                @if (($order->status == 'pending' || $order->status == 'processing') && $order->payment_status != 'paid')
                    <div class="modal fade" id="cancelModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content" style="position: absolute; margin-top: 150px;">
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
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Đóng</button>
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
            </div>

            <!-- Danh sách sản phẩm -->
            <div class="row gy-4 mt-4">
                <div class="col-md-12">
                    <div class="border p-3 rounded">
                        <h5 class="mb-3">🛒 Danh sách sản phẩm</h5>
                        @foreach ($order->orderItems as $item)
                            @if ($item->productVariant && $item->productVariant->product)
                                <div class="d-flex mb-3 p-2 border rounded align-items-center bg-light">
                                    <img src="{{ asset($item->productVariant->product->image) }}"
                                        alt="{{ $item->productVariant->product->name }}"
                                        style="width: 80px; height: 80px; object-fit: cover;" class="me-3 rounded">
                                    <div>
                                        <div><strong>{{ $item->productVariant->product->name }}</strong></div>
                                        <div class="small text-muted">Màu:
                                            {{ $item->productVariant->color ?? 'Không có' }} |
                                            Dung lượng: {{ $item->productVariant->storage ?? 'Không có' }}</div>
                                        <div>Giá: <strong>{{ number_format($item->price, 0, ',', '.') }}đ</strong>
                                        </div>
                                        <div>Số lượng: {{ $item->quantity }}</div>
                                    </div>
                                </div>
                            @else
                                <div class="text-danger">Sản phẩm không tồn tại hoặc đã bị xóa.</div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>



@endsection
