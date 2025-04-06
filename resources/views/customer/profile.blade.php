@extends('layouts.customer')

@section('title', 'Thông tin tài khoản')

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
                <h2 class="content-title">Thông tin cá nhân</h2>
                
                <div class="profile-header">
                    <img src="{{ asset(auth()->user()->avatar) }}" alt="Avatar" class="profile-avatar">
                    <div class="profile-info">
                        <h3>{{ auth()->user()->name }}</h3>
                        <p>{{ auth()->user()->email }}</p>
                    </div>
                </div>

                <form action="{{ route('customer.profile.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Họ và tên</label>
                            <input type="text" name="fullname" class="form-control" value="{{ auth()->user()->fullname }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Số điện thoại</label>
                            <input type="tel" name="phone" class="form-control" value="{{ auth()->user()->phone }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" value="{{ auth()->user()->address }}">
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-save">
                            <i class="bi bi-save"></i> Lưu thay đổi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 