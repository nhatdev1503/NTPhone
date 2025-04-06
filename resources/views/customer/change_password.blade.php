@extends('layouts.customer')

@section('title', 'Đổi mật khẩu')

@section('content')
<style>
    .profile-container {
        padding: 30px 0;
    }

    .sidebar {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        padding: 20px 0;
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
        box-shadow: 0 2px 15px rgba(0,0,0,0.05);
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

    .password-requirements {
        margin-top: 20px;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 8px;
    }

    .password-requirements h4 {
        color: #2c3e50;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .password-requirements ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .password-requirements li {
        color: #6c757d;
        margin-bottom: 5px;
        display: flex;
        align-items: center;
    }

    .password-requirements li i {
        margin-right: 8px;
        font-size: 0.9em;
    }

    .password-requirements li.valid {
        color: #28a745;
    }

    .password-requirements li.invalid {
        color: #dc3545;
    }
</style>

<div class="container profile-container">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
            <div class="sidebar">
                <a href="{{ route('customer.profile') }}" class="sidebar-item {{ request()->routeIs('customer.profile') ? 'active' : '' }}">
                    <i class="bi bi-person"></i> Thông tin cá nhân
                </a>
                <a href="{{ route('customer.change_password') }}" class="sidebar-item {{ request()->routeIs('customer.change_password') ? 'active' : '' }}">
                    <i class="bi bi-key"></i> Đổi mật khẩu
                </a>
                <a href="{{ route('customer.order.history') }}" class="sidebar-item {{ request()->routeIs('customer.order.history') ? 'active' : '' }}">
                    <i class="bi bi-clock-history"></i> Lịch sử mua hàng
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
            <div class="main-content">
                <h2 class="content-title">Đổi mật khẩu</h2>

                <form action="{{ route('customer.change_password.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Mật khẩu hiện tại</label>
                            <input type="password" name="current_password" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Mật khẩu mới</label>
                            <input type="password" name="new_password" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Xác nhận mật khẩu mới</label>
                            <input type="password" name="new_password_confirmation" class="form-control" required>
                        </div>
                    </div>

                    <div class="password-requirements">
                        <h4>Yêu cầu mật khẩu:</h4>
                        <ul>
                            <li id="length"><i class="bi bi-circle"></i> Ít nhất 8 ký tự</li>
                            <li id="uppercase"><i class="bi bi-circle"></i> Có ít nhất 1 chữ hoa</li>
                            <li id="lowercase"><i class="bi bi-circle"></i> Có ít nhất 1 chữ thường</li>
                            <li id="number"><i class="bi bi-circle"></i> Có ít nhất 1 số</li>
                            <li id="special"><i class="bi bi-circle"></i> Có ít nhất 1 ký tự đặc biệt</li>
                        </ul>
                    </div>

                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-save">
                            <i class="bi bi-save"></i> Đổi mật khẩu
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const newPassword = document.querySelector('input[name="new_password"]');
    const requirements = {
        length: document.getElementById('length'),
        uppercase: document.getElementById('uppercase'),
        lowercase: document.getElementById('lowercase'),
        number: document.getElementById('number'),
        special: document.getElementById('special')
    };

    newPassword.addEventListener('input', function() {
        const password = this.value;
        
        // Check length
        if (password.length >= 8) {
            requirements.length.classList.add('valid');
            requirements.length.classList.remove('invalid');
            requirements.length.querySelector('i').className = 'bi bi-check-circle-fill';
        } else {
            requirements.length.classList.add('invalid');
            requirements.length.classList.remove('valid');
            requirements.length.querySelector('i').className = 'bi bi-circle';
        }

        // Check uppercase
        if (/[A-Z]/.test(password)) {
            requirements.uppercase.classList.add('valid');
            requirements.uppercase.classList.remove('invalid');
            requirements.uppercase.querySelector('i').className = 'bi bi-check-circle-fill';
        } else {
            requirements.uppercase.classList.add('invalid');
            requirements.uppercase.classList.remove('valid');
            requirements.uppercase.querySelector('i').className = 'bi bi-circle';
        }

        // Check lowercase
        if (/[a-z]/.test(password)) {
            requirements.lowercase.classList.add('valid');
            requirements.lowercase.classList.remove('invalid');
            requirements.lowercase.querySelector('i').className = 'bi bi-check-circle-fill';
        } else {
            requirements.lowercase.classList.add('invalid');
            requirements.lowercase.classList.remove('valid');
            requirements.lowercase.querySelector('i').className = 'bi bi-circle';
        }

        // Check number
        if (/[0-9]/.test(password)) {
            requirements.number.classList.add('valid');
            requirements.number.classList.remove('invalid');
            requirements.number.querySelector('i').className = 'bi bi-check-circle-fill';
        } else {
            requirements.number.classList.add('invalid');
            requirements.number.classList.remove('valid');
            requirements.number.querySelector('i').className = 'bi bi-circle';
        }

        // Check special character
        if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
            requirements.special.classList.add('valid');
            requirements.special.classList.remove('invalid');
            requirements.special.querySelector('i').className = 'bi bi-check-circle-fill';
        } else {
            requirements.special.classList.add('invalid');
            requirements.special.classList.remove('valid');
            requirements.special.querySelector('i').className = 'bi bi-circle';
        }
    });
});
</script>
@endsection 