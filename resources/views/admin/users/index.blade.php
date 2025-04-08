@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <i class="bi bi-people text-blue-400 text-2xl"></i>
                <h1 class="text-2xl font-bold text-blue-400">Quản lý Tài Khoản</h1>
            </div>
            <a href="{{ route('users.create') }}" 
                class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition-colors">
                <i class="bi bi-plus-circle"></i> Thêm tài khoản
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20 text-green-400 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form tìm kiếm -->
        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6 mb-6">
            <form action="{{ route('users.index') }}" method="GET">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Tìm kiếm</label>
                        <input type="text" name="search" value="{{ request('search') }}"
                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Tìm theo tên, email...">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Vai trò</label>
                        <select name="role" 
                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Tất cả vai trò</option>
                            <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>Người dùng</option>
                        </select>
                    </div>
                    <div class="flex items-end gap-2">
                        <button type="submit" 
                            class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 transition-colors">
                            <i class="bi bi-search"></i> Tìm kiếm
                        </button>
                        <a href="{{ route('users.index') }}" 
                            class="w-full bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 transition-colors">
                            <i class="bi bi-arrow-counterclockwise"></i> Reset
                        </a>
                    </div>
                </div>
            </form>
        </div>

        <div class="bg-blue-500/10 border border-blue-500/20 text-blue-400 p-4 rounded-lg mb-6">
            Hiển thị {{ $users->count() }} tài khoản trên tổng số {{ $users->total() }} tài khoản.
        </div>

        <!-- Bảng tài khoản -->
        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-700/50">
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">STT</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Tên</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Email</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Số điện thoại</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Vai trò</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Trạng thái</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        @foreach($users as $index => $user)
                            <tr class="hover:bg-gray-700/30 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 text-sm text-white font-medium">{{ $user->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $user->email }}</td>
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $user->phone }}</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full {{ $user->role === 'admin' ? 'bg-purple-500/10 text-purple-400' : 'bg-blue-500/10 text-blue-400' }}">
                                        {{ $user->role === 'admin' ? 'Admin' : 'Người dùng' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full {{ $user->status ? 'bg-green-500/10 text-green-400' : 'bg-red-500/10 text-red-400' }}">
                                        {{ $user->status ? 'Hoạt động' : 'Đã khóa' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('users.show', $user->id) }}" 
                                            class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm flex items-center gap-1 transition-colors">
                                            <i class="bi bi-eye"></i> Xem
                                        </a>
                                        <a href="{{ route('users.edit', $user->id) }}" 
                                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-lg text-sm flex items-center gap-1 transition-colors">
                                            <i class="bi bi-pencil"></i> Sửa
                                        </a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg text-sm flex items-center gap-1 transition-colors"
                                                onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này?')">
                                                <i class="bi bi-trash"></i> Xóa
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="px-6 py-4 border-t border-gray-700">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
