{{-- filepath: resources/views/customer/profile.blade.php --}}
@include('layouts.customer.header')

<div class="container my-5">
    <div class="card shadow-lg p-4 rounded-4 border-0"
        style="max-width: 750px; margin: auto; background: linear-gradient(to bottom, #f9f9f9, #ffffff);">
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
            @include('customer.profile_info')
        </div>

        <div id="orders" class="tab-content">
            @include('customer.order_management')
        </div>

        <div id="voucher" class="tab-content">
            @include('customer.voucher_list')
        </div>

        <div id="logout" class="tab-content">
            <div class="text-center py-5">
                <p class="fw-bold text-danger">Bạn có chắc chắn muốn đăng xuất?</p>
                <a href="{{ route('customer.logout') }}" class="btn btn-danger rounded-pill w-100">Đăng xuất</a>
            </div>
        </div>
    </div>
</div>

@include('layouts.customer.footer')

<style>
    .nav-link {
        cursor: pointer;
        border-radius: 20px;
        padding: 8px 20px;
        transition: background 0.3s ease;
    }
    
    .nav-link.active {
        background-color: #007bff;
        color: #fff !important;
    }
    
    .tab-content {
        display: none;
        animation: fadeIn 0.3s ease-in-out;
    }
    
    .tab-content.active {
        display: block;
    }
    
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

<script>
    function showTab(e, tabId) {
        // Ẩn hết tất cả tab content
        document.querySelectorAll('.tab-content').forEach(function(tab) {
            tab.classList.remove('active');
        });
        // Hiển thị tab được chỉ định
        document.getElementById(tabId).classList.add('active');

        // Xóa active của tất cả link
        document.querySelectorAll('.nav-link').forEach(function(link) {
            link.classList.remove('active');
        });
        // Active link hiện hành (yêu cầu sự kiện event được truyền)
        e.target.classList.add('active');
    }
</script>