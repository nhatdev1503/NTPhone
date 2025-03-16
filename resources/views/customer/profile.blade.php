{{-- filepath: resources/views/customer/profile.blade.php --}}
@include('layouts.customer.header')
<style>

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to bottom, #ffffff, #f9f9f9);
        }

        .card h2 {
            font-size: 28px;
            color: #007bff;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .nav-pills {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }

        .nav-link {
            font-size: 16px;
            font-weight: bold;
            color: #555;
            border-radius: 25px;
            padding: 8px 18px;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }

        .nav-link:hover {
            background-color: #007bff;
            color: #fff;
        }

        .nav-link.active {
            background-color: #007bff;
            color: #fff;
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
        }

        .tab-content {
            display: none;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            animation: fadeIn 0.3s ease-in-out;
        }

        .tab-content.active {
            display: block;
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        input.form-control {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        input.form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
        }

        button.btn-primary {
            background: #007bff;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 25px;
            color: #fff;
            transition: all 0.3s ease;
        }

        button.btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0 6px 15px rgba(0, 123, 255, 0.4);
            transform: scale(1.05);
        }

        .alert-success {
            font-size: 14px;
            font-weight: 500;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 12px 20px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="card shadow-lg p-4 rounded-4 border-0">
            <h2 class="text-center text-primary fw-bold mb-4">Thông tin người dùng 🛠️</h2>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3 d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link active" onclick="showTab(event, 'profile')">Thông tin cá nhân</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="showTab(event, 'orders')">Quản lý đơn hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="showTab(event, 'voucher')">Voucher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" onclick="showTab(event, 'logout')">Đăng xuất</a>
                </li>
            </ul>

            <!-- Tab Content -->
            <div id="profile" class="tab-content active">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('customer.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Avatar Upload -->
                    <div class="text-center mb-4">
                        @if ($user->avatar)
                            <img src="{{ asset('storage/avatars/' . $user->avatar) }}" alt="Avatar"
                                class="rounded-circle border border-4 border-primary shadow-sm"
                                style="width: 140px; height: 140px; object-fit: cover;">
                        @else
                            <div class="bg-secondary text-white rounded-circle d-flex justify-content-center align-items-center shadow"
                                style="width: 140px; height: 140px;">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                        @endif
                    </div>

                    <!-- Full Name -->
                    <div class="mb-3">
                        <label for="fullname" class="form-label fw-bold">Họ tên</label>
                        <input type="text" name="fullname" id="fullname" class="form-control rounded-pill shadow-sm"
                            value="{{ old('fullname', $user->fullname) }}" required>
                    </div>

                    <!-- Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label fw-bold">Username</label>
                        <input type="text" name="username" id="username" class="form-control rounded-pill shadow-sm"
                            value="{{ old('username', $user->username) }}" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email (không thay đổi)</label>
                        <input type="email" id="email" class="form-control rounded-pill bg-light shadow-sm"
                            value="{{ $user->email }}" readonly>
                    </div>

                    <!-- Phone -->
                    <div class="mb-3">
                        <label for="phone" class="form-label fw-bold">Số điện thoại</label>
                        <input type="text" name="phone" id="phone" class="form-control rounded-pill shadow-sm"
                            value="{{ old('phone', $user->phone) }}">
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label fw-bold">Địa chỉ</label>
                        <input type="text" name="address" id="address" class="form-control rounded-pill shadow-sm"
                            value="{{ old('address', $user->address) }}">
                    </div>

                    <!-- Avatar File Upload -->
                    <div class="mb-3">
                        <label for="avatar" class="form-label fw-bold">Thay đổi Avatar</label>
                        <input type="file" name="avatar" id="avatar" class="form-control rounded-pill shadow-sm">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold rounded-pill shadow">Cập nhật thông tin</button>
                </form>
            </div>

            <div id="orders" class="tab-content">
                <div class="p-3">
                    <h3>Quản lý đơn hàng</h3>
                    <p>Nội dung quản lý đơn hàng ở đây (Fake Content cho test giao diện).</p>
                </div>
            </div>

            <div id="voucher" class="tab-content">
                <div class="p-3">
                    <h3>Voucher</h3>
                    <p>Nội dung danh sách voucher ở đây (Fake Content cho test giao diện).</p>
                </div>
            </div>

            <div id="logout" class="tab-content">
                <div class="text-center py-5">
                    <p class="fw-bold text-danger">Bạn có chắc chắn muốn đăng xuất?</p>
                    <a href="" class="btn btn-danger rounded-pill w-100">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showTab(e, tabId) {
            document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
            document.getElementById(tabId).classList.add('active');

            document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
            if (e) {
                e.target.classList.add('active');
            }
        }
    </script>
@include('layouts.customer.footer')



