@include('layouts.customer.header')

<style>
    body {
        background: #e3e9f7;
    }
    .register-container {
        background: #fff;
        padding: 50px;
        border-radius: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        max-width: 420px;
        text-align: center;
    }
    .register-container h3 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .register-container p {
        font-size: 14px;
        color: #6b7280;
    }
    .form-group {
        position: relative;
        margin-bottom: 15px;
    }
    .form-group input {
        width: 100%;
        padding: 12px 15px 12px 45px;
        border: 1px solid #d1d5db;
        border-radius: 8px;
    }
    .form-group i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #6b7280;
    }
    .btn-register {
        background: #2563eb;
        color: #fff;
        padding: 12px;
        border-radius: 8px;
        width: 100%;
        font-weight: bold;
        transition: 0.3s;
    }
    .btn-register:hover {
        background: #1e40af;
    }
    .login-link {
        margin-top: 15px;
        font-size: 14px;
    }
    .login-link a {
        color: #2563eb;
        font-weight: bold;
        text-decoration: none;
    }
</style>

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="register-container">
        <h3>Đăng Ký Tài Khoản</h3>
        <p>Nhập thông tin của bạn để tạo tài khoản</p>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <i class="bi bi-person"></i>
                <input type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Họ và tên" required>
            </div>
            <div class="form-group">
                <i class="bi bi-person"></i>
                <input type="text" name="username" value="{{ old('username') }}" placeholder="Tên tài khoản" required>
            </div>
            <div class="form-group">
                <i class="bi bi-envelope"></i>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
            </div>
            <div class="form-group">
                <i class="bi bi-lock"></i>
                <input type="password" name="password" placeholder="Mật khẩu" required>
            </div>
            <div class="form-group">
                <i class="bi bi-lock-fill"></i>
                <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" required>
            </div>

            <button type="submit" class="btn-register">Đăng Ký</button>

            <div class="login-link">
                <span>Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập ngay</a></span>
            </div>
        </form>
    </div>
</div>

@include('layouts.customer.footer')
