@include('layouts.guest.header')

<style>
    body {
        background: #e3e9f7;
    }
</style>

<!-- Phần căn giữa sử dụng Tailwind CSS -->
<div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-md w-full">
        <h3 class="text-2xl font-bold mb-2">Đăng Ký Tài Khoản</h3>
        <p class="text-gray-500 mb-6">Nhập thông tin của bạn để tạo tài khoản</p>

        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded-md mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4 relative">
                <i class="bi bi-person absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <input type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Họ và tên"
                       class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>

            <div class="mb-4 relative">
                <i class="bi bi-person absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <input type="text" name="username" value="{{ old('username') }}" placeholder="Tên tài khoản"
                       class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>

            <div class="mb-4 relative">
                <i class="bi bi-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                       class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>

            <div class="mb-4 relative">
                <i class="bi bi-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <input type="password" name="password" placeholder="Mật khẩu"
                       class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>

            <div class="mb-6 relative">
                <i class="bi bi-lock-fill absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu"
                       class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">Đăng Ký
            </button>

            <div class="text-center mt-4">
                <span class="text-gray-600">Đã có tài khoản? </span>
                <a href="{{ route('login') }}" class="text-blue-500 font-bold">Đăng nhập ngay</a>
            </div>
        </form>
    </div>
</div>

@include('layouts.guest.footer')
