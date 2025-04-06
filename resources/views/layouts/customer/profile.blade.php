@extends('layouts.customer')

@section('content')
<style>
    .profile-container {
        display: flex;
        gap: 2rem;
        padding: 2rem;
        background: #f8f9fa;
        min-height: calc(100vh - 200px);
    }

    .profile-sidebar {
        width: 280px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 1.5rem;
        height: fit-content;
    }

    .profile-sidebar .nav-link {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 1rem;
        color: #2c3e50;
        border-radius: 8px;
        transition: all 0.3s ease;
        margin-bottom: 0.5rem;
        text-decoration: none;
    }

    .profile-sidebar .nav-link:hover {
        background: #f8f9fa;
        color: #e74c3c;
    }

    .profile-sidebar .nav-link.active {
        background: #e74c3c;
        color: white;
    }

    .profile-sidebar .nav-link i {
        font-size: 1.2rem;
    }

    .profile-content {
        flex: 1;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 2rem;
    }

    .profile-header {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-bottom: 2rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid #eee;
    }

    .profile-avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #e74c3c;
    }

    .profile-info h2 {
        color: #2c3e50;
        margin-bottom: 0.5rem;
    }

    .profile-info p {
        color: #6c757d;
        margin-bottom: 0;
    }

    .page-title {
        font-size: 24px;
        color: #2c3e50;
        margin-bottom: 1.5rem;
        font-weight: 600;
        padding-bottom: 1rem;
        border-bottom: 1px solid #eee;
    }
</style>

<div class="profile-container">
    <div class="profile-sidebar">
        <nav class="nav flex-column">
            <a class="nav-link {{ request()->routeIs('customer.profile') ? 'active' : '' }}" 
               href="{{ route('customer.profile') }}">
                <i class="bi bi-person-circle"></i>
                Thông tin cá nhân
            </a>
            <a class="nav-link {{ request()->routeIs('customer.change_password') ? 'active' : '' }}" 
               href="{{ route('customer.change_password') }}">
                <i class="bi bi-key"></i>
                Đổi mật khẩu
            </a>
            <a class="nav-link {{ request()->routeIs('customer.order.history') ? 'active' : '' }}" 
               href="{{ route('customer.order.history') }}">
                <i class="bi bi-clock-history"></i>
                Lịch sử mua hàng
            </a>
        </nav>
    </div>

    <div class="profile-content">
        @yield('profile_content')
    </div>
</div>
@endsection 