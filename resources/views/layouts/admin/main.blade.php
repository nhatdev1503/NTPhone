<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - NTPhone</title>
    
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
            padding: 1.5rem;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 1.5rem;
        }

        .sidebar-header h1 {
            font-size: 1.5rem;
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
            margin-bottom: 0.5rem;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 0.8rem 1rem;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
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
            margin-right: 1rem;
            font-size: 1.2rem;
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
            background: white;
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
                <a href="{{ route('products.index') }}" class="sidebar-link {{ request()->routeIs('products.*') ? 'active' : '' }}">
                    <i class="bi bi-box"></i>
                    <span>Quản lí sản phẩm</span>
                </a>
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
                <a href="{{ route('users.index') }}" class="sidebar-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                    <i class="bi bi-people"></i>
                    <span>Quản lí tài khoản</span>
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
                <div class="user-menu relative">
                    <div class="flex items-center gap-2 cursor-pointer" id="userMenuToggle">
                        <img src="{{ Auth::user()->avatar ?? 'https://ui-avatars.com/api/?name=' . Auth::user()->name }}" 
                             alt="Avatar" 
                             class="w-8 h-8 rounded-full">
                        <div>
                            <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-400">{{ Auth::user()->email }}</p>
                        </div>
                        <i class="bi bi-chevron-down text-gray-400"></i>
                    </div>
                    <div class="user-menu-dropdown hidden absolute right-0 mt-2 w-48 bg-gray-800 rounded-lg shadow-lg border border-gray-700">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">
                            <i class="bi bi-person me-2"></i> Thông tin cá nhân
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">
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
    <script>
        // User menu toggle
        document.getElementById('userMenuToggle').addEventListener('click', function() {
            document.querySelector('.user-menu-dropdown').classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.user-menu')) {
                document.querySelector('.user-menu-dropdown').classList.add('hidden');
            }
        });
    </script>
</body>
</html>