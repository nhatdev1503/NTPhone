@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <i class="bi bi-person-plus text-blue-400 text-2xl"></i>
                <h1 class="text-2xl font-bold text-blue-400">Thêm Tài Khoản Mới</h1>
            </div>
            <a href="{{ route('users.index') }}" 
                class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition-colors">
                <i class="bi bi-arrow-left"></i> Quay lại
            </a>
        </div>

        @if ($errors->any())
            <div class="bg-red-500/10 border border-red-500/20 text-red-400 p-4 rounded-lg mb-6">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Avatar và thông tin cơ bản -->
                <div class="flex flex-col md:flex-row gap-6 mb-6">
                    <!-- Avatar -->
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-blue-500/20 mb-4">
                            <div class="w-full h-full bg-gray-700 flex items-center justify-center" id="avatar-placeholder">
                                <i class="bi bi-person-circle text-4xl text-gray-500"></i>
                            </div>
                        </div>
                        <div class="flex flex-col items-center">
                            <label for="avatar" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer transition-colors">
                                <i class="bi bi-camera"></i> Chọn ảnh
                            </label>
                            <input type="file" name="avatar" id="avatar" class="hidden" accept="image/*">
                        </div>
                    </div>

                    <!-- Thông tin cơ bản -->
                    <div class="flex-grow space-y-4">
                        <div>
                            <label for="fullname" class="block text-sm font-medium text-gray-400 mb-1">Họ và tên</label>
                            <input type="text" name="fullname" id="fullname" value="{{ old('fullname') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-400 mb-1">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-400 mb-1">Số điện thoại</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Thông tin đăng nhập và vai trò -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <h3 class="text-lg font-medium text-gray-300 mb-4">Thông tin đăng nhập</h3>
                        <div>
                            <label for="username" class="block text-sm font-medium text-gray-400 mb-1">Tên đăng nhập</label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-400 mb-1">Mật khẩu</label>
                            <input type="password" name="password" id="password"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg font-medium text-gray-300 mb-4">Vai trò và trạng thái</h3>
                        <div>
                            <label for="role" class="block text-sm font-medium text-gray-400 mb-1">Vai trò</label>
                            <select name="role" id="role"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="customer" {{ old('role') == 'customer' ? 'selected' : '' }}>Người dùng</option>
                                <option value="staff" {{ old('role') == 'staff' ? 'selected' : '' }}>Nhân viên</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-400 mb-1">Trạng thái</label>
                            <select name="status" id="status"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="active" {{ old('status', 'active') == 'active' ? 'selected' : '' }}>Hoạt động</option>
                                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Đã khóa</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Địa chỉ -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-300 mb-4">Địa chỉ</h3>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-400 mb-1">Địa chỉ</label>
                        <textarea name="address" id="address" rows="3"
                            class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('address') }}</textarea>
                    </div>
                </div>

                <!-- Nút submit -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                        <i class="bi bi-check-lg"></i> Tạo tài khoản
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const avatarInput = document.getElementById('avatar');
        const avatarPlaceholder = document.getElementById('avatar-placeholder');
        
        // Xử lý preview ảnh khi chọn file
        avatarInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = 'Avatar Preview';
                    img.className = 'w-full h-full object-cover';
                    img.id = 'avatar-preview';
                    avatarPlaceholder.replaceWith(img);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>
@endpush
