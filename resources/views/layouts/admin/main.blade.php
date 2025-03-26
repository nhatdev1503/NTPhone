<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <script>
    lucide.createIcons();
  </script>
  <title>Admin Panel</title>
</head>
<body class="bg-gray-100 text-gray-900">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-700 p-6 text-white">
      <h1 class="text-2xl font-bold mb-8">Admin</h1>
      <ul>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-home"></i>
          <a href="{{ route('admin.index') }}">Dashboard</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-image"></i>
          <a href="{{ route('banners.index') }}">Quản lí banner</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-layout-grid"></i>
          <a href="{{ route('categories.index') }}">Quản lí danh mục</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-box"></i>
          <a href="{{ route('products.index') }}">Quản lí sản phẩm</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-tag"></i>
          <a href="{{ route('discounts.index') }}">Quản lí khuyến mãi</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-phone-call"></i>
          <a href="#">Quản lí liên hệ</a>
        </li>
        <li class="flex items-center gap-3 p-3 rounded-lg cursor-pointer hover:bg-gray-600">
          <i class="lucide lucide-users"></i>
          <a href="{{ route('users.index') }}">Quản lí tài khoản</a>
        </li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Header -->
      <div class="bg-gray-800 p-4 flex justify-between items-center relative text-white">
        <h2 class="text-2xl font-bold">NTPhone</h2>
        
        <!-- User Dropdown -->
        <div class="relative">
          <!-- Trigger Button -->
          <input type="checkbox" id="userMenuToggle" class="peer hidden">
          <label for="userMenuToggle" class="cursor-pointer flex items-center gap-2">
            <i class="lucide lucide-user-circle text-white text-3xl"></i>
            <span class="hidden md:inline-block">Admin</span>
          </label>

          <!-- Dropdown Menu -->
          <div class="hidden peer-checked:flex flex-col absolute right-0 mt-2 w-56 bg-white text-gray-900 rounded-lg shadow-xl overflow-hidden z-50">
            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Thông tin cá nhân</a>
            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Lịch sử mua hàng</a>
            <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Đổi mật khẩu</a>
            <form action="{{ route('auth.logout') }}" method="POST">
              @csrf
              <button type="submit" class="w-full text-left px-4 py-3 text-red-600 hover:bg-gray-100">Đăng xuất</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Page Content -->
      <div class="flex-1 p-8 bg-white rounded-lg shadow">
        @yield('content')
      </div>
    </div>
  </div>
</body>
</html>