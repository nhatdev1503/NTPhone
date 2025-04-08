@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <i class="bi bi-person-circle text-blue-400 text-2xl"></i>
                <h1 class="text-2xl font-bold text-blue-400">Chỉnh Sửa Tài Khoản</h1>
            </div>
            <a href="{{ route('users.index') }}" 
                class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition-colors">
                <i class="bi bi-arrow-left"></i> Quay lại
            </a>
        </div>

        @if($errors->any())
            <div class="bg-red-500/10 border border-red-500/20 text-red-400 p-4 rounded-lg mb-6">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
            <form action="{{ route('users.update', $user->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Thông tin cơ bản -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-medium text-gray-300 mb-4">Thông tin cơ bản</h3>
                        <div>
                            <label for="fullname" class="block text-sm font-medium text-gray-400 mb-1">Họ và tên</label>
                            <input type="text" name="fullname" id="fullname" value="{{ old('fullname', $user->fullname) }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-400 mb-1">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-400 mb-1">Số điện thoại</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>

                    <!-- Vai trò và trạng thái -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-medium text-gray-300 mb-4">Vai trò và trạng thái</h3>
                        <div>
                            <label for="role" class="block text-sm font-medium text-gray-400 mb-1">Vai trò</label>
                            <select name="role" id="role"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>Người dùng</option>
                                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-400 mb-1">Trạng thái</label>
                            <select name="status" id="status"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="active" {{ old('status', $user->status) == 'active' ? 'selected' : '' }}>Hoạt động</option>
                                <option value="inactive" {{ old('status', $user->status) == 'inactive' ? 'selected' : '' }}>Đã khóa</option>
                            </select>
                        </div>
                        <div id="blockReasonContainer" class="hidden">
                            <label for="block_reason" class="block text-sm font-medium text-gray-400 mb-1">Lý do khóa</label>
                            <textarea name="block_reason" id="block_reason" rows="3"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('block_reason', $user->block_reason) }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Nút submit -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                        <i class="bi bi-check-lg"></i> Cập nhật
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
        const statusSelect = document.getElementById('status');
        const blockReasonContainer = document.getElementById('blockReasonContainer');
        
        function toggleBlockReason() {
            if (statusSelect.value === 'inactive') {
                blockReasonContainer.classList.remove('hidden');
            } else {
                blockReasonContainer.classList.add('hidden');
            }
        }

        // Chạy lần đầu khi trang load
        toggleBlockReason();

        // Lắng nghe sự kiện thay đổi của select status
        statusSelect.addEventListener('change', toggleBlockReason);
    });
</script>
@endpush 