@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center gap-2 mb-6">
            <i class="bi bi-box text-blue-400 text-2xl"></i>
            <h1 class="text-2xl font-bold text-blue-400">Chi tiết sản phẩm</h1>
        </div>

        @if (session('success'))
            <div class="bg-green-500/10 border border-green-500 text-green-400 px-4 py-3 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Phần ảnh sản phẩm -->
                <div class="space-y-4">
                    @if ($product->image)
                        <div class="bg-gray-700 rounded-xl p-4">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                class="w-full rounded-lg shadow-lg">
                        </div>
                    @else
                        <div class="bg-gray-700 rounded-xl p-4 text-center text-gray-400">
                            <i class="bi bi-image text-4xl"></i>
                            <p class="mt-2">Không có ảnh</p>
                        </div>
                    @endif

                    @if ($product->images->count() > 0)
                        <div class="bg-gray-700 rounded-xl p-4">
                            <h3 class="text-sm font-medium text-gray-300 mb-3">Ảnh chi tiết</h3>
                            <div class="grid grid-cols-2 gap-2">
                                @foreach ($product->images as $image)
                                    <div class="aspect-[3/4] rounded-lg overflow-hidden">
                                        <img src="{{ asset($image->mini_image) }}" alt="Ảnh mini"
                                            class="w-full h-full object-cover">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Thông tin cơ bản -->
                <div class="md:col-span-2 space-y-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold text-white">{{ $product->name }}</h2>
                        <span class="px-3 py-1 rounded-full text-sm font-medium {{ $product->status == 'active' && $product->category->status == 'active' ? 'bg-green-500/10 text-green-400' : 'bg-red-500/10 text-red-400' }}">
                            {{ $product->status == 'active' && $product->category->status == 'active' ? 'Đang bán' : 'Ngừng bán' }}
                        </span>
                    </div>

                    <div class="bg-gray-700/50 rounded-xl p-4 space-y-3">
                        <div class="flex items-center gap-2">
                            <i class="bi bi-tag text-blue-400"></i>
                            <span class="text-gray-300">Danh mục:</span>
                            <span class="text-blue-400 font-medium">{{ $product->category->name ?? 'Không có danh mục' }}</span>
                        </div>

                        <div class="text-gray-300">
                            <p class="font-medium mb-2">Mô tả:</p>
                            <p class="text-sm">{{ $product->description }}</p>
                        </div>

                        @if ($product->have_variant == 1)
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm font-medium text-gray-300 mb-1">Màu sắc đang bán:</p>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach ($product->variants->pluck('color')->unique() as $color)
                                            <span class="px-2 py-1 bg-gray-600 rounded text-sm">{{ $color }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-300 mb-1">Dung lượng đang bán:</p>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach ($product->variants->pluck('storage')->unique() as $storage)
                                            <span class="px-2 py-1 bg-gray-600 rounded text-sm">{{ $storage }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="grid grid-cols-2 gap-4 pt-2">
                            <div>
                                <p class="text-sm font-medium text-gray-300">Tổng số lượng:</p>
                                <p class="text-lg font-bold text-white">{{ $product->variants->sum('stock') }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-300">Giá gốc:</p>
                                <p class="text-lg font-bold text-white">{{ number_format($product->base_price, 0, ',', '.') }}đ</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-300">Giá giảm:</p>
                                <p class="text-lg font-bold text-red-400">{{ number_format($product->sale_price, 0, ',', '.') }}đ</p>
                            </div>
                        </div>
                    </div>

                    <!-- Thông số kỹ thuật -->
                    <div class="bg-gray-700/50 rounded-xl p-4">
                        <h3 class="text-lg font-semibold text-blue-400 mb-4">Thông số kỹ thuật</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">Màn hình</span>
                                    <span class="text-white">{{ $product->screen }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">Hệ điều hành</span>
                                    <span class="text-white">{{ $product->os }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">Camera sau</span>
                                    <span class="text-white">{{ $product->rear_camera }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">Camera trước</span>
                                    <span class="text-white">{{ $product->front_camera }}</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">Vi xử lý</span>
                                    <span class="text-white">{{ $product->cpu }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">RAM</span>
                                    <span class="text-white">{{ $product->ram }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">Pin</span>
                                    <span class="text-white">{{ $product->battery }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">Lượt xem</span>
                                    <span class="text-white">{{ $product->view }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-300">Đã bán</span>
                                    <span class="text-white">{{ $product->sold }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($product->have_variant == 1)
                        <!-- Danh sách biến thể -->
                        <div class="bg-gray-700/50 rounded-xl p-4">
                            <h3 class="text-lg font-semibold text-blue-400 mb-4">Danh sách biến thể</h3>
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="text-left border-b border-gray-600">
                                            <th class="pb-3 text-gray-300">Màu sắc</th>
                                            <th class="pb-3 text-gray-300">Dung lượng</th>
                                            <th class="pb-3 text-gray-300">Giá gốc</th>
                                            <th class="pb-3 text-gray-300">Giá giảm</th>
                                            <th class="pb-3 text-gray-300">Số lượng</th>
                                            <th class="pb-3 text-gray-300">Ngày tạo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-600">
                                        @foreach ($product->variants as $variant)
                                            <tr class="hover:bg-gray-600/50">
                                                <td class="py-3 text-white">{{ $variant->color }}</td>
                                                <td class="py-3 text-white">{{ $variant->storage }}</td>
                                                <td class="py-3 text-white">{{ number_format($variant->origin_price, 0, ',', '.') }}đ</td>
                                                <td class="py-3 text-red-400">{{ number_format($variant->price, 0, ',', '.') }}đ</td>
                                                <td class="py-3 text-white">{{ $variant->stock }}</td>
                                                <td class="py-3 text-gray-300">{{ $variant->created_at->format('d/m/Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                    <!-- Nút điều hướng -->
                    <div class="flex items-center justify-end gap-4 pt-4">
                        <a href="{{ route('products.index') }}"
                            class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                            <i class="bi bi-arrow-left"></i> Danh sách
                        </a>
                        <a href="{{ route('products.edit', $product->id) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                            <i class="bi bi-pencil"></i> Chỉnh sửa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
