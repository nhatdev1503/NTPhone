@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <i class="bi bi-ticket-perforated text-blue-400 text-2xl"></i>
                <h1 class="text-2xl font-bold text-blue-400">Quản lý Voucher</h1>
            </div>
            <a href="{{ route('discounts.create') }}" 
                class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition-colors">
                <i class="bi bi-plus-circle"></i> Thêm voucher
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20 text-green-400 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form lọc và tìm kiếm -->
        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6 mb-6">
            <form action="{{ route('discounts.index') }}" method="GET">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Tìm mã voucher</label>
                        <input type="text" name="code" 
                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Nhập mã voucher..."
                            value="{{ request('code') }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Trạng thái</label>
                        <select name="status" 
                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">-- Tất cả trạng thái --</option>
                            <option value="upcoming" {{ request('status') == 'upcoming' ? 'selected' : '' }}>Sắp tới</option>
                            <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Hoạt động</option>
                            <option value="expired" {{ request('status') == 'expired' ? 'selected' : '' }}>Hết hạn</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Loại voucher</label>
                        <select name="discount_type" 
                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">-- Tất cả voucher --</option>
                            <option value="fixed" {{ request('discount_type') == 'fixed' ? 'selected' : '' }}>Giảm giá cố định</option>
                            <option value="percentage" {{ request('discount_type') == 'percentage' ? 'selected' : '' }}>Giảm giá %</option>
                        </select>
                    </div>
                    <div class="flex items-end gap-2">
                        <button type="submit" 
                            class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 transition-colors">
                            <i class="bi bi-search"></i> Lọc
                        </button>
                        <a href="{{ route('discounts.index') }}" 
                            class="w-full bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 transition-colors">
                            <i class="bi bi-arrow-counterclockwise"></i> Reset
                        </a>
                    </div>
                </div>
            </form>
        </div>

        <div class="bg-blue-500/10 border border-blue-500/20 text-blue-400 p-4 rounded-lg mb-6">
            Hiển thị {{ $vouchers->count() }} voucher trên tổng số {{ $vouchers->total() }} voucher.
        </div>

        <!-- Bảng voucher -->
        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-700/50">
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">STT</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Code</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Loại voucher</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Giá trị</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Ngày bắt đầu</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Ngày kết thúc</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Trạng thái</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        @foreach($vouchers as $index => $voucher)
                            <tr class="hover:bg-gray-700/30 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 text-sm text-white font-medium">{{ $voucher->code }}</td>
                                <td class="px-6 py-4 text-sm text-gray-300">
                                    @if($voucher->discount_type == 'fixed')
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-500/10 text-blue-400">
                                            Cố định
                                        </span>
                                    @else
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-purple-500/10 text-purple-400">
                                            Phần trăm
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-white">
                                    @if($voucher->discount_type == 'fixed')
                                        {{ number_format($voucher->discount_value, 0, ',', '.') }} VND
                                    @else
                                        {{ $voucher->discount_value }}%
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-300">
                                    {{ \Carbon\Carbon::parse($voucher->start_date)->format('d/m/Y') }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-300">
                                    {{ \Carbon\Carbon::parse($voucher->expiration_date)->format('d/m/Y') }}
                                </td>
                                <td class="px-6 py-4">
                                    @php
                                        $now = now();
                                        if($voucher->start_date > $now) {
                                            $status = ['text' => 'Sắp tới', 'class' => 'bg-yellow-500/10 text-yellow-400'];
                                        } elseif($voucher->expiration_date < $now) {
                                            $status = ['text' => 'Hết hạn', 'class' => 'bg-red-500/10 text-red-400'];
                                        } else {
                                            $status = ['text' => 'Hoạt động', 'class' => 'bg-green-500/10 text-green-400'];
                                        }
                                    @endphp
                                    <span class="px-2 py-1 text-xs font-medium rounded-full {{ $status['class'] }}">
                                        {{ $status['text'] }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('discounts.show', $voucher->id) }}" 
                                            class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm flex items-center gap-1 transition-colors">
                                            <i class="bi bi-eye"></i> Xem
                                        </a>
                                        <a href="{{ route('discounts.edit', $voucher->id) }}" 
                                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-lg text-sm flex items-center gap-1 transition-colors">
                                            <i class="bi bi-pencil"></i> Sửa
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="px-6 py-4 border-t border-gray-700">
                {{ $vouchers->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
