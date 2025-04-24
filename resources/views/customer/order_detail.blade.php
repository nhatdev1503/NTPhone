@extends('layouts.customer')

@section('title', 'Chi tiết đơn hàng ')

@section('content')
    <style>
        .highlight-rating {
            animation: glow 1s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                box-shadow: 0 0 10px #ffc107;
            }

            to {
                box-shadow: 0 0 20px #ffc107;
            }
        }

        .rating-stars i {
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .rating-stars i:hover {
            transform: scale(1.2);
        }

        .profile-container {
            min-height: 800px;
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
    @php
        use Illuminate\Support\Str;
    @endphp
    <div class="container profile-container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3">
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
                <div class="main-content p-4">
                    <h2 class="content-title mb-4 border-bottom pb-2">🧾 Chi tiết đơn hàng</h2>

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-x-circle"></i> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="row gy-4 order-info-wrapper" style="font-size: 0.9rem;">
                        <!-- Thông tin đơn hàng -->
                        <div class="col-md-6">
                            <div>
                                <h5 class="mb-3">📦 Thông tin đơn hàng:</h5>
                                <p><strong>Mã đơn:</strong> {{ $order->order_code }}</p>
                                <p><strong>Ngày đặt:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
                                <p><strong>Trạng thái:</strong>
                                    @php
                                        $statusText = [
                                            'pending' => [
                                                'label' => 'Chờ xác nhận',
                                                'class' => 'badge bg-warning text-dark',
                                            ],
                                            'processing' => ['label' => 'Đang xử lý', 'class' => 'badge bg-primary'],
                                            'shipped' => [
                                                'label' => 'Đang giao hàng',
                                                'class' => 'badge bg-info text-dark',
                                            ],
                                            'delivered' => ['label' => 'Đã giao hàng', 'class' => 'badge bg-success'],
                                            'completed' => ['label' => 'Hoàn thành', 'class' => 'badge bg-success'],
                                            'cancelled' => ['label' => 'Hủy', 'class' => 'badge bg-danger'],
                                        ];

                                        $status = $order->status;
                                        $label = $statusText[$status]['label'] ?? 'Không xác định';
                                        $class = $statusText[$status]['class'] ?? 'badge bg-secondary';
                                    @endphp

                                    <span class="{{ $class }} ms-2">{{ $label }}</span>
                                </p>
                                @if ($order->status === 'cancelled' && $order->cancel_reason)
                                    <p><strong>Lý do hủy:</strong> {{ $order->cancel_reason }}</p>
                                @endif
                            </div>
                        </div>

                        <!-- Thông tin khách hàng -->
                        <div class="col-md-6">
                            <div>
                                <h5 class="mb-3">👤 Thông tin khách hàng:</h5>
                                <p><strong>Họ tên:</strong> {{ $order->fullname }}</p>
                                <p><strong>Email:</strong> {{ $order->email }}</p>
                                <p><strong>SĐT:</strong> {{ $order->phone }}</p>
                                <p><strong>Địa chỉ:</strong> {{ $order->address }}</p>
                            </div>
                        </div>

                        <!-- Thông tin thanh toán -->
                        <div class="col-md-6">
                            <div>
                                <h5 class="mb-3">💳 Thông tin thanh toán:</h5>
                                <p><strong>Phương thức:</strong> {{ strtoupper($order->payment_method) }}</p>
                                <p><strong>Trạng thái:</strong>
                                    <span
                                        class="ms-2 badge {{ $order->payment_status == 'paid' ? 'bg-success' : ($order->payment_status == 'pending' ? 'bg-warning text-dark' : 'bg-danger') }}">
                                        {{ $order->payment_status == 'paid' ? 'Đã thanh toán' : ($order->payment_status == 'pending' ? 'Chờ thanh toán' : 'Thất bại') }}
                                    </span>
                                </p>
                            </div>
                        </div>

                        <!-- Tổng tiền -->
                        <div class="col-md-6">
                            <div>
                                <h5 class="mb-3">💰 Tổng tiền:
                                    <span class="text-red"> {{ number_format($order->total_price, 0, ',', '.') }}
                                        VND</span>
                                </h5>
                            </div>
                        </div>

                        <!-- Nút hành động -->
                        <div class="action-buttons d-flex justify-content-start gap-2 mt-3">
                            @if (($order->status == 'pending' || $order->status == 'processing') && $order->payment_status != 'paid')
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#cancelModal">
                                    <i class="fas fa-times-circle"></i> Hủy đơn
                                </button>
                            @endif
                            @if ($order->status == 'delivered')
                                <form action="{{ route('order.confirm', $order->id) }}" method="POST"
                                    class="d-inline confirm-received-form" data-order-code="{{ $order->order_code }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-check-circle"></i> Xác nhận đã nhận hàng
                                    </button>
                                </form>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

            <!-- Danh sách sản phẩm -->
            <div class="col-lg-9 offset-lg-3 mt-4">
                <div>
                    <h5 class="mb-3">🛒 Danh sách sản phẩm</h5>
                    @foreach ($order->orderItems as $item)
                        @if ($item->productVariant && $item->productVariant->product)
                            <div class="card mb-3">
                                <div class="card-body d-flex flex-row align-items-center justify-content-between">
                                    <div class="me-3">
                                        <img src="{{ asset($item->image) }}"
                                            alt="{{ $item->name }}"
                                            style="width: 90px; height: 90px; object-fit: cover; border-radius: 8px;">
                                    </div>

                                    <div class="flex-grow-1">
                                        <h6 class="fw-bold mb-1">{{ $item->name }}</h6>
                                        @if ($item->productVariant->product->have_variant == 1)
                                        <div class="text-muted small mb-1">
                                            Màu: {{ $item->color ?? 'Không có' }} |
                                            Dung lượng: {{ $item->storage ?? 'Không có' }}
                                        </div>
                                        @endif
                                        <div class="mb-1">Giá:
                                            <strong>{{ number_format($item->price, 0, ',', '.') }}đ</strong>
                                        </div>
                                        <div>Số lượng: {{ $item->quantity }}</div>
                                    </div>

                                    <!-- Đánh giá -->
                                    <div class="text-end" style="min-width: 220px;">
                                        @if ($item->rating || $item->review)
                                            <div>
                                                <div class="mb-1">Đã đánh giá:</div>
                                                <div class="mb-1">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <i
                                                            class="bi bi-star{{ $i <= $item->rating ? '-fill text-warning' : '' }}"></i>
                                                    @endfor
                                                </div>
                                                @if (!empty($item->review))
                                                    <p class="text-muted mb-0">
                                                        {{ Str::words(strip_tags($item->review), 10, '...') }}
                                                    </p>
                                                @endif
                                            </div>
                                        @elseif ($order->status === 'completed')
                                            <div>
                                                <div class="rating-stars mb-2" data-item-id="{{ $item->id }}">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <i class="bi bi-star fs-5 text-warning star-icon mx-1"
                                                            data-value="{{ $i }}"></i>
                                                    @endfor
                                                </div>
                                                <button class="btn btn-sm btn-outline-primary"
                                                    onclick="openRatingModal({{ $item->id }}, '{{ $item->name }}', '{{ asset($item->image) }}')">
                                                    Gửi đánh giá
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-danger">Xác nhận hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
    @if (session('cancel_success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Thành công!',
                    text: '{{ session('cancel_success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif
    <!-- Modal đánh giá sản phẩm -->
    <div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header">
                    <h5 class="modal-title">Đánh giá sản phẩm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row g-4">
                        <!-- Bên trái: ảnh + tên -->
                        <div class="col-md-5 border-end text-center">
                            <img id="modal_product_img" class="img-fluid rounded mb-3"
                                style="max-height: 180px; margin-left: 65px;" />
                            <h6 id="modal_product_name" class="fw-bold" style="text-align: center"></h6>
                        </div>

                        <!-- Bên phải: form đánh giá -->
                        <div class="col-md-7">
                            <form id="ratingForm" method="POST" action="{{ route('customer.submitReview') }}">
                                @csrf
                                <input type="hidden" name="item_id" id="item_id_input">
                                <input type="hidden" name="rating" id="rating_input">

                                <div class="mb-3">
                                    <label for="review_content" class="form-label">Nội dung đánh giá</label>
                                    <textarea class="form-control" name="review" id="review_content" rows="4" required></textarea>
                                    <small id="review_preview" class="text-muted d-block mt-1"></small>

                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-secondary me-2"
                                        data-bs-dismiss="modal">Hủy</button>
                                    <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let ratingMap = {};

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.rating-stars').forEach(starGroup => {
                const itemId = starGroup.getAttribute('data-item-id');
                const stars = starGroup.querySelectorAll('.star-icon');

                stars.forEach(star => {
                    star.addEventListener('click', function() {
                        const rating = parseInt(this.getAttribute('data-value'));
                        ratingMap[itemId] = rating;

                        stars.forEach((s, index) => {
                            if (index < rating) {
                                s.classList.remove('bi-star');
                                s.classList.add('bi-star-fill');
                            } else {
                                s.classList.remove('bi-star-fill');
                                s.classList.add('bi-star');
                            }
                        });
                    });
                });
            });
        });

        function openRatingModal(itemId, productName, imageUrl) {
            document.getElementById('item_id_input').value = itemId;
            document.getElementById('modal_product_name').textContent = productName;
            document.getElementById('modal_product_img').src = imageUrl;
            document.getElementById('review_content').value = '';
            document.getElementById('rating_input').value = ratingMap[itemId] || '';
            const modal = new bootstrap.Modal(document.getElementById('ratingModal'));
            modal.show();
        }
        document.addEventListener('DOMContentLoaded', function() {
            const confirmForms = document.querySelectorAll('.confirm-received-form');

            confirmForms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    const orderCode = form.dataset.orderCode;

                    Swal.fire({
                        title: 'Xác nhận đã nhận hàng?',
                        text: `Bạn đã chắc chắn nhận được đơn hàng có mã ${orderCode}?`,
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Đã nhận hàng',
                        cancelButtonText: 'Chưa nhận'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Cảm ơn bạn đã xác nhận!',
                                text: 'Mời bạn đánh giá sản phẩm đã mua.',
                                timer: 4000,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                backdrop: true,
                                timerProgressBar: true
                            }).then((result) => {
                                form.submit();
                                if (result.isConfirmed) {
                                    const ratingSection = document.querySelector(
                                        '.rating-stars');
                                    if (ratingSection) {
                                        ratingSection.scrollIntoView({
                                            behavior: 'smooth',
                                            block: 'center'
                                        });

                                        ratingSection.classList.add(
                                            'highlight-rating');
                                        setTimeout(() => {
                                            ratingSection.classList.remove(
                                                'highlight-rating');
                                        }, 6000);
                                    }

                                    const firstRatingButton = document
                                        .querySelector('.btn-open-rating');
                                    if (firstRatingButton) {
                                        firstRatingButton.click();
                                    }
                                }
                            });
                        }

                    });
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const reviewContent = document.getElementById('review_content');
            const ratingForm = document.getElementById('ratingForm');
            let fullReviewContent = '';

            if (reviewContent) {
                reviewContent.addEventListener('input', function() {
                    fullReviewContent = this.value;
                    const words = this.value.trim().split(/\s+/);
                    if (words.length > 10) {
                        const displayText = words.slice(0, 10).join(' ') + '...';
                        this.value = displayText;
                    }
                });

                ratingForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    reviewContent.value = fullReviewContent;
                    this.submit();
                });
            }
        });
    </script>

@endsection
