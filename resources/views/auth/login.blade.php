@include('layouts.guest.header')

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-blue-100 px-4">
    <div class="w-full max-w-md bg-white p-8 rounded-3xl shadow-2xl relative">
        <div class="text-center mb-6">
            <h2 class="text-3xl text-gray-800">Chào Mừng Trở Lại 👋</h2>
            <p class="text-gray-500">Đăng nhập để tiếp tục</p>
        </div>

        <form action="{{ route('auth.login') }}" method="POST" class="space-y-5">
            @csrf

            <div class="relative">
                <input type="text" name="username"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition placeholder-gray-400"
                    placeholder="Email hoặc Tên tài khoản" required>
                <i class="lucide lucide-user absolute left-4 top-3 text-gray-400"></i>
            </div>

            <div class="relative">
                <input type="password" name="password"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition placeholder-gray-400"
                    placeholder="Mật khẩu" required>
                <i class="lucide lucide-lock absolute left-4 top-3 text-gray-400"></i>
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center text-sm text-gray-600">
                    <input type="checkbox" class="mr-2 rounded border-gray-300 focus:ring-blue-500"> Ghi nhớ đăng nhập
                </label>
                <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium">Quên mật khẩu?</a>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition font-semibold shadow-md">
                Đăng nhập
            </button>
        </form>
        @if (session('success'))
            <div class="text-center alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        <p class="text-center text-sm text-gray-500 mt-6">
            Chưa có tài khoản? <a href="{{ route('register') }}"
                class="text-blue-600 font-semibold hover:underline">Đăng ký ngay</a>
        </p>
    </div>
</div>

@include('layouts.guest.footer')
