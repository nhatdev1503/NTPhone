<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - NTPhone</title>
    <link rel="icon" href="{{ asset('uploads/icon-ntphone.png') }}"
    type="image/png" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #e74c3c;
            --sidebar-width: 280px;
            --header-height: 70px;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #111827;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: var(--sidebar-width);
            background: var(--primary-color);
            color: white;
            padding: 1rem;
            transition: all 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
        }

        .sidebar-header {
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 1rem;
        }

        .sidebar-header h1 {
            font-size: 1.25rem;
            font-weight: 600;
            margin: 0;
            color: white;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-item {
            margin-bottom: 0.25rem;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 0.5rem 0.75rem;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,0.1);
            color: white;
        }

        .sidebar-link.active {
            background: var(--secondary-color);
            color: white;
        }

        .sidebar-link i {
            margin-right: 0.75rem;
            font-size: 1rem;
        }

        /* Submenu styles */
        #productsSubmenu, #usersSubmenu {
            margin-left: 1rem;
            margin-top: 0.25rem;
            margin-bottom: 0.25rem;
        }

        #productsSubmenu .sidebar-link, #usersSubmenu .sidebar-link {
            padding: 0.4rem 0.75rem;
            font-size: 0.85rem;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
            min-height: 100vh;
        }

        /* Header Styles */
        .header {
            position: fixed;
            top: 0;
            right: 0;
            left: var(--sidebar-width);
            height: var(--header-height);
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            z-index: 900;
        }

        .header-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
            margin: 0;
        }

        .user-menu {
            position: relative;
        }

        .user-menu-toggle {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .user-menu-toggle:hover {
            background: #f8f9fa;
        }

        .user-menu-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            min-width: 200px;
            display: none;
        }

        .user-menu-dropdown.show {
            display: block;
        }

        .user-menu-item {
            display: block;
            padding: 0.8rem 1rem;
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .user-menu-item:hover {
            background: #f8f9fa;
        }

        .user-menu-item.logout {
            color: var(--secondary-color);
        }

        /* Content Area */
        .content-wrapper {
            margin-top: var(--header-height);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.show {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
            }
            .header {
                left: 0;
            }
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h1>NTPhone Admin</h1>
        </div>
        <ul class="sidebar-menu">
            <li class="sidebar-item">
                <a href="{{ route('admin.index') }}" class="sidebar-link {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('banners.index') }}" class="sidebar-link {{ request()->routeIs('banners.*') ? 'active' : '' }}">
                    <i class="bi bi-images"></i>
                    <span>Quản lí banner</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('categories.index') }}" class="sidebar-link {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                    <i class="bi bi-grid"></i>
                    <span>Quản lí danh mục</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('colors_storages.index') }}" class="sidebar-link {{ request()->routeIs('colors_storages.*') ? 'active' : '' }}">
                    <i class="bi bi-palette"></i>
                    <span>Màu - Dung lượng</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link {{ request()->routeIs('products.*') ? 'active' : '' }}" id="productsMenuToggle">
                    <i class="bi bi-box"></i>
                    <span>Quản lí sản phẩm</span>
                    <i class="bi bi-chevron-down ml-auto"></i>
                </a>
                <ul class="ml-6 mt-2 space-y-1 hidden" id="productsSubmenu">
                    <li>
                        <a href="{{ route('products.index') }}" class="sidebar-link {{ request()->routeIs('products.index') ? 'active' : '' }}">
                            <i class="bi bi-grid"></i>
                            <span>Tất cả sản phẩm</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.inactive') }}" class="sidebar-link {{ request()->routeIs('products.inactive') ? 'active' : '' }}">
                            <i class="bi bi-archive"></i>
                            <span>Đã ngừng bán</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('orders.index') }}" class="sidebar-link {{ request()->routeIs('orders.*') ? 'active' : '' }}">
                    <i class="bi bi-cart"></i>
                    <span>Quản lí đơn hàng</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('discounts.index') }}" class="sidebar-link {{ request()->routeIs('discounts.*') ? 'active' : '' }}">
                    <i class="bi bi-tag"></i>
                    <span>Quản lí khuyến mãi</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link {{ request()->routeIs('users.*') ? 'active' : '' }}" id="usersMenuToggle">
                    <i class="bi bi-people"></i>
                    <span>Quản lí tài khoản</span>
                    <i class="bi bi-chevron-down ml-auto"></i>
                </a>
                <ul class="ml-6 mt-2 space-y-1 hidden" id="usersSubmenu">
                    <li>
                        <a href="{{ route('users.index') }}" class="sidebar-link {{ request()->routeIs('users.index') ? 'active' : '' }}">
                            <i class="bi bi-person"></i>
                            <span>Tất cả tài khoản</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.locked') }}" class="sidebar-link {{ request()->routeIs('users.locked') ? 'active' : '' }}">
                            <i class="bi bi-person-x"></i>
                            <span>Tài khoản đã khóa</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('news.index') }}" class="sidebar-link {{ request()->routeIs('news.*') ? 'active' : '' }}">
                    <i class="bi bi-newspaper"></i>
                    <span>Quản lý bài viết</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('chat.index') }}" class="sidebar-link {{ request()->routeIs('chat.*') ? 'active' : '' }}">
                    <i class="bi bi-chat-dots"></i>
                    <span>Trò chuyện</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header class="bg-gray-800 p-4 rounded-lg mb-6">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold text-blue-400">@yield('title', 'Dashboard')</h2>
                <div class="relative inline-block text-left">
                    <!-- Toggle button -->
                    <button id="dropdownToggle" type="button" class="inline-flex items-center gap-2 text-sm text-white focus:outline-none">
                        <img src="{{ asset(Auth::user()->avatar ?? 'https://ui-avatars.com/api/?name=' . Auth::user()->fullname) }}" 
                             alt="Avatar" 
                             class="w-8 h-8 rounded-full">
                        <div class="text-left">
                            <p class="text-sm font-medium">{{ Auth::user()->fullname }}</p>
                        </div>
                        <svg class="w-4 h-4 ml-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
        
                    <!-- Dropdown menu -->
                    <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-gray-800 border border-gray-700 rounded-lg shadow-lg z-50">
                        <a href="{{ route('admin.profile') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">
                            <i class="bi bi-person me-2"></i> Thông tin cá nhân
                        </a>
                        <a href="{{ route('admin.change-password') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">
                            <i class="bi bi-key me-2"></i> Đổi mật khẩu
                        </a>
                        <form method="POST" action="{{ route('auth.logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-400 hover:bg-gray-700">
                                <i class="bi bi-box-arrow-right me-2"></i> Đăng xuất
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const toggleBtn = document.getElementById('dropdownToggle');
                const dropdown = document.getElementById('dropdownMenu');
                const productsMenuToggle = document.getElementById('productsMenuToggle');
                const productsSubmenu = document.getElementById('productsSubmenu');
                const usersMenuToggle = document.getElementById('usersMenuToggle');
                const usersSubmenu = document.getElementById('usersSubmenu');
        
                toggleBtn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    dropdown.classList.toggle('hidden');
                });
        
                document.addEventListener('click', function (e) {
                    if (!toggleBtn.contains(e.target)) {
                        dropdown.classList.add('hidden');
                    }
                });

                // Toggle products submenu
                productsMenuToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    productsSubmenu.classList.toggle('hidden');
                    
                    // Toggle chevron icon
                    const chevron = this.querySelector('.bi-chevron-down');
                    chevron.classList.toggle('rotate-180');
                });

                // Toggle users submenu
                usersMenuToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    usersSubmenu.classList.toggle('hidden');
                    
                    // Toggle chevron icon
                    const chevron = this.querySelector('.bi-chevron-down');
                    chevron.classList.toggle('rotate-180');
                });
            });
        </script>
        

        <!-- Content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Custom Scripts -->
    @stack('scripts')
    
</body>
</html>