@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <i class="bi bi-cart-check text-blue-400 text-2xl"></i>
                <h1 class="text-2xl font-bold text-blue-400">Chi Tiết Đơn Hàng</h1>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-gray-400">Mã đơn:</span>
                <span class="text-xl font-semibold text-white">{{ $order->order_code }}</span>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20 text-green-400 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-500/10 border border-red-500/20 text-red-400 p-4 rounded-lg mb-6">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Thông tin đơn hàng và khách hàng -->
            <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
                <div class="space-y-6">
                    <!-- Thông tin đơn hàng -->
                    <div>
                        <h2 class="text-lg font-semibold text-blue-400 mb-4 flex items-center gap-2">
                            <i class="bi bi-info-circle"></i> Thông Tin Đơn Hàng
                        </h2>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Trạng Thái:</span>
                                <span class="px-3 py-1 rounded-full text-sm font-medium {{ $statusColors[$order->status] }}">
                                    {{ $statusText[$order->status] }}
                                </span>
                            </div>
                            @if($order->cancel_reason)
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-400">Lý do Hủy:</span>
                                    <span class="text-red-400">{{ $order->cancel_reason }}</span>
                                </div>
                            @endif
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Ngày Đặt:</span>
                                <span class="text-white">{{ $order->created_at->format('d/m/Y H:i') }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Thông tin khách hàng -->
                    <div>
                        <h2 class="text-lg font-semibold text-blue-400 mb-4 flex items-center gap-2">
                            <i class="bi bi-person-circle"></i> Thông Tin Khách Hàng
                        </h2>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Họ Tên:</span>
                                <span class="text-white">{{ $order->fullname }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Số Điện Thoại:</span>
                                <span class="text-white">{{ $order->phone }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Email:</span>
                                <span class="text-white">{{ $order->email }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Địa Chỉ:</span>
                                <span class="text-white text-right">{{ $order->address }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Thông tin thanh toán -->
            <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
                <div class="space-y-6">
                    <!-- Thanh toán -->
                    <div>
                        <h2 class="text-lg font-semibold text-blue-400 mb-4 flex items-center gap-2">
                            <i class="bi bi-credit-card"></i> Thanh Toán
                        </h2>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Hình Thức:</span>
                                <span class="text-white">{{ $order->payment_method }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Trạng Thái:</span>
                                <span class="px-3 py-1 rounded-full text-sm font-medium {{ $paymentColors[$order->payment_status] }}">
                                    {{ $paymentStatus[$order->payment_status] }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Tổng tiền -->
                    <div>
                        <h2 class="text-lg font-semibold text-blue-400 mb-4 flex items-center gap-2">
                            <i class="bi bi-cash"></i> Tổng Tiền
                        </h2>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Tổng Đơn Hàng:</span>
                                <span class="text-white">{{ number_format($order->total_price, 0, ',', '.') }} VND</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Mã Giảm Giá:</span>
                                <span class="text-white">{{ $order->discount->code ?? 'Không có' }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Giảm Giá:</span>
                                <span class="text-red-400">-{{ number_format($order->discount_amount, 0, ',', '.') }} VND</span>
                            </div>
                            <div class="flex justify-between items-center pt-2 border-t border-gray-700">
                                <span class="text-gray-400 font-medium">Thành Tiền:</span>
                                <span class="text-xl font-bold text-blue-400">{{ number_format($order->total_price - $order->discount_amount, 0, ',', '.') }} VND</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Danh sách sản phẩm -->
        <div class="mt-6 bg-gray-800 rounded-xl shadow-lg border border-gray-700 overflow-hidden">
            <div class="p-6">
                <h2 class="text-lg font-semibold text-blue-400 mb-4 flex items-center gap-2">
                    <i class="bi bi-box"></i> Danh Sách Sản Phẩm
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-700/50">
                                <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Ảnh</th>
                                <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Tên Sản Phẩm</th>
                                <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Biến Thể</th>
                                <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Số Lượng</th>
                                <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Giá</th>
                                <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Tổng</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            @foreach($order->orderItems as $item)
                                <tr class="hover:bg-gray-700/30 transition-colors">
                                    <td class="px-6 py-4">
                                        <img src="{{ asset($item->productVariant->product->image) }}" 
                                            alt="Ảnh sản phẩm" 
                                            class="w-16 h-16 object-cover rounded-lg">
                                    </td>
                                    <td class="px-6 py-4 text-sm text-white">{{ $item->productVariant->product->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-300">
                                        <span class="w-4 h-4 rounded-full">{{ $item->productVariant->color }}</span>
                                        <div class="flex items-center gap-2">
                                            {{ $item->productVariant->storage }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-300">{{ $item->quantity }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-300">{{ number_format($item->price, 0, ',', '.') }} VND</td>
                                    <td class="px-6 py-4 text-sm text-white">{{ number_format($item->quantity * $item->price, 0, ',', '.') }} VND</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-end gap-4 mt-6">
            <a href="{{ route('orders.index') }}" 
                class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                <i class="bi bi-arrow-left"></i> Quay Lại
            </a>
            @if($order->status == 'processing' || $order->status == 'shipped' || $order->status == 'pending')
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors"
                    data-bs-toggle="modal" data-bs-target="#confirmModal">
                    <i class="bi bi-check-circle"></i> Xác nhận
                </button>
            @endif
        </div>
    </div>
</div>

<!-- Modal Xác nhận -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-gray-800 border border-gray-700">
            <div class="modal-header border-b border-gray-700">
                <h5 class="modal-title text-white" id="confirmModalLabel">
                    <i class="bi bi-exclamation-triangle text-yellow-400 mr-2"></i>
                    Xác nhận trạng thái đơn hàng
                </h5>
            </div>
            <div class="modal-body p-6">
                <form action="{{ route('orders.update', $order->id) }}" method="POST" id="orderForm" onsubmit="return validateStatus()">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-300 mb-2">Chọn trạng thái:</label>
                        <select name="status" id="orderStatus" 
                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="pending" @if($order->status != 'cancelled') disabled @endif @if($order->status == 'pending') selected @endif>Chờ xác nhận</option>
                            <option value="processing" @if($order->status != 'pending') disabled @endif @if($order->status == 'processing') selected @endif>Đang xử lí</option>
                            <option value="shipped" @if($order->status != 'processing') disabled @endif @if($order->status == 'shipped') selected @endif>Đang giao hàng</option>
                            <option value="delivered" @if($order->status != 'shipped') disabled @endif @if($order->status == 'delivered') selected @endif>Đã giao hàng</option>
                            <option value="cancelled" @if($order->status == 'cancelled' || $order->status == 'delivered' || $order->status == 'shipped' || $order->payment_status == 'paid') disabled @endif @if($order->status == 'cancelled') selected @endif>Hủy</option>
                        </select>
                    </div>

                    <div id="cancelReasonContainer" style="display: none;" class="mb-4">
                        <label class="block text-sm font-medium text-gray-300 mb-2">Lý do hủy:</label>
                        <textarea name="cancel_reason" id="cancelReason" 
                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            rows="3" placeholder="Nhập lý do hủy đơn hàng..."></textarea>
                    </div>

                    <div class="flex justify-end gap-3">
                        <button type="button" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle mr-2"></i>Hủy
                        </button>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="bi bi-check-circle mr-2"></i>Xác nhận
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let orderStatus = document.getElementById("orderStatus");
    let cancelReasonContainer = document.getElementById("cancelReasonContainer");
    let cancelReason = document.getElementById("cancelReason");

    orderStatus.addEventListener("change", function() {
        if (this.value === "cancelled") {
            cancelReasonContainer.style.display = "block";
            cancelReason.setAttribute("required", "required");
        } else {
            cancelReasonContainer.style.display = "none";
            cancelReason.removeAttribute("required");
        }
    });
});
</script>
@endsection
