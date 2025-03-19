@include('layouts.customer.header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<div class="container my-5">
    <div class="card shadow-lg rounded-4">
        <!-- Tabs -->
        <div class="tabs">
            <button class="tab-link active" onclick="showTab(event, 'profile')">
                <i class="fa fa-user"></i> Thông Tin Cá Nhân
            </button>
            <button class="tab-link" onclick="showTab(event, 'orders')">
                <i class="fa fa-box"></i> Quản Lý Đơn Hàng
            </button>
            <button class="tab-link" onclick="showTab(event, 'voucher')">
                <i class="fa fa-gift"></i> Voucher
            </button>
            <button class="tab-link logout" onclick="showTab(event, 'logout')">
                <i class="fa fa-sign-out-alt"></i> Đăng Xuất
            </button>
        </div>

        <!-- Tab Content -->
        <div id="profile" class="tab-content active">
            <h2 style="font-size: 28px; text-align: center;">Thông Tin Cá Nhân</h2>
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
                            class="rounded-circle border shadow-sm"
                            style="width: 120px; height: 120px; object-fit: cover;">
                    @else
                        <div class="bg-secondary text-white rounded-circle d-flex justify-content-center align-items-center shadow"
                            style="width: 120px; height: 120px;">
                            <i class="fa fa-user fa-4x"></i>
                        </div>
                    @endif
                </div>

                <!-- User Details -->
                <div class="form-group">
                    <label for="fullname" class="form-label">Họ Tên</label>
                    <input type="text" name="fullname" id="fullname" class="form-control"
                        value="{{ old('fullname', $user->fullname) }}" required>
                </div>

                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control"
                        value="{{ old('username', $user->username) }}" required>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email (không thay đổi)</label>
                    <input type="email" id="email" class="form-control bg-light" value="{{ $user->email }}"
                        readonly>
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Số Điện Thoại</label>
                    <input type="text" name="phone" id="phone" class="form-control"
                        value="{{ old('phone', $user->phone) }}">
                </div>

                <div class="form-group">
                    <label for="address" class="form-label">Địa Chỉ</label>
                    <input type="text" name="address" id="address" class="form-control"
                        value="{{ old('address', $user->address) }}">
                </div>

                <div class="form-group">
                    <label for="avatar" class="form-label">Avatar</label>
                    <input type="file" name="avatar" id="avatar" class="form-control">
                </div>

                <!-- Buttons -->
                <div class="actions">
                    <button type="submit" class="btn btn-primary w-100">Cập Nhật Thông Tin</button>
                </div>
            </form>
        </div>

        <div id="orders" class="tab-content">
            <h2>Quản Lý Đơn Hàng</h2>
            <p>Danh sách đơn hàng sẽ hiển thị tại đây.</p>
        </div>

        <div id="voucher" class="tab-content">
            <h2>Quản Lý Voucher</h2>
            <p>Danh sách voucher của bạn sẽ hiển thị tại đây.</p>
        </div>

        <div id="logout" class="tab-content text-center">
            <h2>Đăng Xuất</h2>
            <p class="text-danger">Bạn có chắc chắn muốn đăng xuất?</p>
            <button class="btn btn-danger">Đăng Xuất</button>
        </div>
    </div>
</div>

<script>
    function showTab(event, tabId) {
        document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
        document.getElementById(tabId).classList.add('active');

        document.querySelectorAll('.tab-link').forEach(link => link.classList.remove('active'));
        event.target.classList.add('active');
    }
</script>

@include('layouts.customer.footer')


<style>
    /* Reset */


    /* Card */
    .card {
        background: white;
        border-radius: 12px;
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-top: 20px;
    }

    /* Căn giữa khối chứa avatar */
    .text-center.mb-4 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Căn giữa khối chứa avatar */
    .text-center.mb-4 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Tabs */
    .tabs {
        display: flex;
        background: #007bff;
    }

    .tab-link {
        flex: 1;
        text-align: center;
        padding: 12px 15px;
        color: white;
        font-weight: bold;
        border: none;
        background: none;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .tab-link:hover,
    .tab-link.active {
        background: #0056b3;
    }

    /* Tab Content */
    .tab-content {
        display: none;
        padding: 20px;
        animation: fadeIn 0.3s ease;
    }

    .tab-content.active {
        display: block;
    }

    /* Form Fields */
    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    /* Buttons */
    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background: #007bff;
    }

    .btn-primary:hover {
        background: #0056b3;
    }

    .btn-danger {
        background: #dc3545;
    }

    .btn-danger:hover {
        background: #a71d2a;
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
