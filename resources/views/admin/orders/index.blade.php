@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <i class="bi bi-cart-check text-blue-400 text-2xl"></i>
                <h1 class="text-2xl font-bold text-blue-400">Quản lý Đơn Hàng</h1>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20 text-green-400 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form lọc và tìm kiếm -->
        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6 mb-6">
            <form action="{{ route('orders.index') }}" method="GET">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Tìm kiếm</label>
                        <input type="text" name="keyword" 
                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Tìm kiếm khách hàng, SĐT"
                            value="{{ request('keyword') }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Trạng thái đơn</label>
                        <select name="status" 
                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">-- Tất cả --</option>
                            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Chờ xác nhận</option>
                            <option value="processing" {{ request('status') == 'processing' ? 'selected' : '' }}>Đang xử lí</option>
                            <option value="shipped" {{ request('status') == 'shipped' ? 'selected' : '' }}>Đang giao hàng</option>
                            <option value="delivered" {{ request('status') == 'delivered' ? 'selected' : '' }}>Đã giao hàng</option>
                            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Hoàn thành</option>
                            <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Hủy</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Trạng thái thanh toán</label>
                        <select name="payment_status" 
                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">-- Tất cả --</option>
                            <option value="pending" {{ request('payment_status') == 'pending' ? 'selected' : '' }}>Chưa thanh toán</option>
                            <option value="paid" {{ request('payment_status') == 'paid' ? 'selected' : '' }}>Đã thanh toán</option>
                            <option value="failed" {{ request('payment_status') == 'failed' ? 'selected' : '' }}>Thất bại</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Ngày bắt đầu</label>
                        <input type="date" name="from_date" 
                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            value="{{ request('from_date') }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Ngày kết thúc</label>
                        <input type="date" name="to_date" 
                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            value="{{ request('to_date') }}">
                    </div>
                    <div class="flex items-end gap-2">
                        <button type="submit" 
                            class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 transition-colors">
                            <i class="bi bi-search"></i> Lọc
                        </button>
                        <a href="{{ route('orders.index') }}" 
                            class="w-full bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 transition-colors">
                            <i class="bi bi-arrow-counterclockwise"></i> Reset
                        </a>
                    </div>
                </div>
            </form>
        </div>

        <div class="bg-blue-500/10 border border-blue-500/20 text-blue-400 p-4 rounded-lg mb-6">
            Hiển thị {{ $orders->count() }} đơn hàng trên tổng số {{ $orders->total() }} đơn hàng.
        </div>

        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-700/50">
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Mã Order</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Khách hàng</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Tổng tiền</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Trạng thái thanh toán</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Thanh toán</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Trạng thái đơn</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Ngày đặt</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Hành động</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        @foreach ($orders as $order)
                            <tr class="hover:bg-gray-700/30 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $order->order_code }}</td>
                                <td class="px-6 py-4 text-sm text-white">{{ $order->fullname }}</td>
                                <td class="px-6 py-4 text-sm text-gray-300">{{ number_format($order->total_price) }}</td>
                                <td class="px-6 py-4">
                                    @php
                                        $paymentStatusColors = [
                                            'pending' => 'bg-yellow-500/10 text-yellow-400',
                                            'paid' => 'bg-green-500/10 text-green-400',
                                            'failed' => 'bg-red-500/10 text-red-400',
                                        ];
                                        $paymentStatusText = [
                                            'pending' => 'Chưa thanh toán',
                                            'paid' => 'Đã thanh toán',
                                            'failed' => 'Thất bại',
                                        ];
                                    @endphp
                                    <span class="px-2 py-1 text-xs font-medium rounded-full {{ $paymentStatusColors[$order->payment_status] }}">
                                        {{ $paymentStatusText[$order->payment_status] }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $order->payment_method }}</td>
                                <td class="px-6 py-4">
                                    @php
                                        $statusColors = [
                                            'pending' => 'bg-yellow-500/10 text-yellow-400',
                                            'processing' => 'bg-blue-500/10 text-blue-400',
                                            'shipped' => 'bg-gray-500/10 text-gray-400',
                                            'delivered' => 'bg-yellow-500/10 text-yellow-400',
                                            'completed' => 'bg-green-500/10 text-green-400',
                                            'cancelled' => 'bg-red-500/10 text-red-400',
                                        ];
                                        $statusText = [
                                            'pending' => 'Chờ xác nhận',
                                            'processing' => 'Đang xử lí',
                                            'shipped' => 'Đang giao',
                                            'delivered' => 'Đã giao',
                                            'completed' => 'Hoàn thành',
                                            'cancelled' => 'Hủy',
                                        ];
                                    @endphp
                                    <span class="px-2 py-1 text-xs font-medium rounded-full {{ $statusColors[$order->status] }}">
                                        {{ $statusText[$order->status] }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $order->created_at->format('d/m/Y') }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('orders.show', $order->id) }}" 
                                        class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg text-sm flex items-center gap-1 transition-colors">
                                        <i class="bi bi-eye"></i> Xem
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="px-6 py-4 border-t border-gray-700">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
