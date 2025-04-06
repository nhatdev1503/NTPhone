@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <i class="bi bi-ticket-perforated text-blue-400 text-2xl"></i>
                <h1 class="text-2xl font-bold text-blue-400">Thêm Voucher Mới</h1>
            </div>
            <a href="{{ route('discounts.index') }}" 
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
            <form action="{{ route('discounts.store') }}" method="POST">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Thông tin cơ bản -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1">Mã voucher</label>
                            <input type="text" name="code" value="{{ old('code') }}"
                                class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Nhập mã voucher...">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1">Loại voucher</label>
                            <select name="discount_type" id="discountType"
                                class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Chọn loại voucher</option>
                                <option value="fixed" {{ old('discount_type') == 'fixed' ? 'selected' : '' }}>Giảm giá cố định</option>
                                <option value="percentage" {{ old('discount_type') == 'percentage' ? 'selected' : '' }}>Giảm giá %</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1">Giá trị giảm giá</label>
                            <div class="relative">
                                <input type="number" name="discount_value" value="{{ old('discount_value') }}"
                                    class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Nhập giá trị giảm giá...">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400">
                                    <span id="discount-unit">VND</span>
                                </div>
                            </div>
                        </div>

                        <div id="maxDiscountContainer" class="hidden">
                            <label class="block text-sm font-medium text-gray-300 mb-1">Số tiền giảm tối đa</label>
                            <div class="relative">
                                <input type="number" name="max_discount_value" value="{{ old('max_discount_value') }}"
                                    class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="Nhập số tiền giảm tối đa...">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400">
                                    VND
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Thời gian và giới hạn -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1">Ngày bắt đầu</label>
                            <input type="datetime-local" name="start_date" value="{{ old('start_date') }}"
                                class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1">Ngày kết thúc</label>
                            <input type="datetime-local" name="expiration_date" value="{{ old('expiration_date') }}"
                                class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                    </div>
                </div>

                <!-- Điều kiện áp dụng -->
                <div class="mt-6">
                    <h3 class="text-lg font-medium text-gray-300 mb-4">Điều kiện áp dụng</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1">Giá trị đơn hàng tối thiểu</label>
                            <input type="number" name="min_order_value" value="{{ old('min_order_value') }}"
                                class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Nhập giá trị tối thiểu...">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1">Giá trị giảm giá tối đa</label>
                            <input type="number" name="max_order_value" value="{{ old('max_order_value') }}"
                                class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Nhập giá trị tối đa...">
                        </div>
                    </div>
                </div>

                <!-- Nút submit -->
                <div class="mt-8 flex justify-end">
                    <button type="submit" 
                        class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                        <i class="bi bi-check-circle"></i> Thêm voucher
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const discountType = document.getElementById('discountType');
    const maxDiscountContainer = document.getElementById('maxDiscountContainer');
    const discountUnit = document.getElementById('discount-unit');

    // Hàm cập nhật hiển thị trường giá trị tối đa và đơn vị
    function updateDiscountFields() {
        if (discountType.value === 'percentage') {
            maxDiscountContainer.classList.remove('hidden');
            discountUnit.textContent = '%';
        } else {
            maxDiscountContainer.classList.add('hidden');
            discountUnit.textContent = 'VND';
        }
    }

    // Lắng nghe sự kiện thay đổi loại voucher
    discountType.addEventListener('change', updateDiscountFields);

    // Chạy khi trang load để set trạng thái ban đầu
    updateDiscountFields();
</script>
@endpush
@endsection
