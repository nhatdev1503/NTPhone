@include('layouts.guest.header')

<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
  <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-xl absolute top-56">
      <div class="text-center mb-2">
          <h2 class="text-3xl font-bold text-gray-800">Chào Mừng Trở Lại</h2>
          <p class="text-gray-500">Đăng nhập để tiếp tục</p>
      </div>

      <form action="{{ route('auth.login') }}" method="POST" class="space-y-4">
          @csrf
          
          <div class="relative">
              <input type="text" name="username" class="w-full px-4 py-3 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Email" required>
              <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
          </div>

          <div class="relative">
              <input type="password" name="password" class="w-full px-4 py-3 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Mật khẩu" required>
              <i class="fas fa-lock absolute left-3 top-3 text-gray-400"></i>
          </div>

          <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition font-semibold">
              Đăng nhập
          </button>
      </form>
      <p class="text-center text-sm text-gray-500 mt-6">
          Chưa có tài khoản? <a href="{{ route('register') }}" class="text-blue-600 font-semibold">Đăng ký ngay</a>
      </p>
  </div>
</div>
@include('layouts.guest.footer')
