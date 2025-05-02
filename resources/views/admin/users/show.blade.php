@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <i class="bi bi-person-circle text-blue-400 text-2xl"></i>
                <h1 class="text-2xl font-bold text-blue-400">Chi Tiết Tài Khoản</h1>
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ route('users.edit', $user->id) }}" 
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition-colors">
                    <i class="bi bi-pencil"></i> Chỉnh sửa
                </a>
                <a href="{{ route('users.index') }}" 
                    class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition-colors">
                    <i class="bi bi-arrow-left"></i> Quay lại
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20 text-green-400 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Thông tin tài khoản -->
        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
            <!-- Avatar và thông tin cơ bản -->
            <div class="flex flex-col md:flex-row gap-6 mb-6">
                <!-- Avatar -->
                <div class="flex-shrink-0">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-blue-500/20">
                        @if($user->avatar)
                            <img src="{{ asset( 'storage/' .$user->avatar) }}" alt="Avatar" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gray-700 flex items-center justify-center">
                                <i class="bi bi-person-circle text-4xl text-gray-500"></i>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Thông tin cơ bản -->
                <div class="flex-grow space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-1">Họ và tên</label>
                        <div class="bg-gray-700 rounded-lg px-4 py-2 text-white">{{ $user->fullname }}</div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-1">Email</label>
                        <div class="bg-gray-700 rounded-lg px-4 py-2 text-white">{{ $user->email }}</div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-1">Số điện thoại</label>
                        <div class="bg-gray-700 rounded-lg px-4 py-2 text-white">{{ $user->phone }}</div>
                    </div>
                </div>
            </div>

            <!-- Thông tin vai trò và trạng thái -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-300 mb-4">Vai trò và trạng thái</h3>
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-1">Vai trò</label>
                        <div class="px-2 py-1 text-sm font-medium rounded-full {{ $user->role === 'admin' ? 'bg-purple-500/10 text-purple-400' : 'bg-blue-500/10 text-blue-400' }}">
                            {{ $user->role === 'admin' ? 'Admin' : 'Người dùng' }}
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-1">Trạng thái</label>
                        <div class="px-2 py-1 text-sm font-medium rounded-full {{ $user->status == 'active' ? 'bg-green-500/10 text-green-400' : 'bg-red-500/10 text-red-400' }}">
                            {{ $user->status == 'active' ? 'Hoạt động' : 'Đã khóa' }}
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-1">Ngày tạo</label>
                        <div class="bg-gray-700 rounded-lg px-4 py-2 text-white">
                            {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i') }}
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-1">Cập nhật lúc</label>
                        <div class="bg-gray-700 rounded-lg px-4 py-2 text-white">
                            {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i') }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lịch sử đơn hàng -->
            <div class="mt-8">
                <h3 class="text-lg font-medium text-gray-300 mb-4">Lịch sử đơn hàng</h3>
                <div class="bg-gray-700 rounded-lg overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-800">
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-300">Mã đơn</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-300">Ngày đặt</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-300">Tổng tiền</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-300">Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-600">
                                @forelse($user->orders as $order)
                                    <tr class="hover:bg-gray-600/50 transition-colors">
                                        <td class="px-4 py-2 text-sm text-white"><a href="{{ route('orders.show',$order->id) }}">{{ $order->order_code }}</a></td>
                                        <td class="px-4 py-2 text-sm text-gray-300">
                                            {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i') }}
                                        </td>
                                        <td class="px-4 py-2 text-sm text-white">
                                            {{ number_format($order->total_price, 0, ',', '.') }} VND
                                        </td>
                                        <td class="px-4 py-2">
                                            <span class="px-2 py-1 text-xs font-medium rounded-full 
                                                @switch($order->status)
                                                    @case('pending')
                                                        bg-yellow-500/10 text-yellow-400
                                                        @break
                                                    @case('processing')
                                                        bg-blue-500/10 text-blue-400
                                                        @break
                                                    @case('shipped')
                                                        bg-blue-500/10 text-blue-400
                                                        @break
                                                    @case('delivered')
                                                        bg-green-500/10 text-pink-400
                                                        @break
                                                    @case('completed')
                                                        bg-green-500/10 text-green-400
                                                        @break
                                                    @case('cancelled')
                                                        bg-red-500/10 text-red-400
                                                        @break
                                                @endswitch">
                                                @switch($order->status)
                                                    @case('pending')
                                                        Chờ xác nhận
                                                        @break
                                                    @case('processing')
                                                        Đang xử lý
                                                        @break
                                                    @case('shipped')
                                                        Đang giao
                                                        @break
                                                    @case('delivered')
                                                        Đã giao hàng
                                                        @break
                                                    @case('completed')
                                                        Hoàn thành
                                                        @break
                                                    @case('cancelled')
                                                        Đã hủy
                                                        @break
                                                @endswitch
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-4 py-4 text-center text-gray-400">
                                            Chưa có đơn hàng nào
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
