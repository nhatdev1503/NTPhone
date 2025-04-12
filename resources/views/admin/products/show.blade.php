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
                                <p class="text-sm font-medium text-gray-300">Sản phẩm:</p>
                                <p class="text-lg font-bold text-white">{{ $product->have_variant == 1 ? 'Có biến thể' : 'Đơn' }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-300">Giá giảm:</p>
                                <p class="text-lg font-bold text-red-400">{{ number_format($product->sale_price, 0, ',', '.') }}đ</p>
                            </div>
                        </div>
                    </div>

                    <!-- Thông số kỹ thuật -->
                    <div class="bg-gray-700/50 rounded-xl p-4">
                        <h3 class="text-lg font-semibold text-blue-400 mb-4">Số liệu của sản phẩm</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="bg-gray-600/50 rounded-lg p-3">
                                <div class="flex items-center gap-2 text-gray-300">
                                    <i class="bi bi-eye text-blue-400"></i>
                                    <span class="text-sm">Lượt xem</span>
                                </div>
                                <p class="text-xl font-semibold text-white mt-1">{{ number_format($product->view) }}</p>
                            </div>
                            <div class="bg-gray-600/50 rounded-lg p-3">
                                <div class="flex items-center gap-2 text-gray-300">
                                    <i class="bi bi-cart-check text-green-400"></i>
                                    <span class="text-sm">Đã bán</span>
                                </div>
                                <p class="text-xl font-semibold text-white mt-1">{{ number_format($product->sold) }}</p>
                            </div>
                            <div class="bg-gray-600/50 rounded-lg p-3">
                                <div class="flex items-center gap-2 text-gray-300">
                                    <i class="bi bi-star text-yellow-400"></i>
                                    <span class="text-sm">Đánh giá</span>
                                </div>
                                <p class="text-xl font-semibold text-white mt-1">{{ number_format($product->orderItems()->whereNotNull('rating')->count()) }}</p>
                            </div>
                            <div class="bg-gray-600/50 rounded-lg p-3">
                                <div class="flex items-center gap-2 text-gray-300">
                                    <i class="bi bi-chat-dots text-purple-400"></i>
                                    <span class="text-sm">Bình luận</span>
                                </div>
                                <p class="text-xl font-semibold text-white mt-1">{{ number_format($product->comments->count()) }}</p>
                            </div>
                        </div>
                        <div class="mt-4 space-y-2">
                            <div class="flex items-center gap-2 text-gray-300">
                                <i class="bi bi-clock text-blue-400"></i>
                                <span class="text-sm">Tạo lúc: {{ $product->created_at->format('d/m/Y H:i') }}</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-300">
                                <i class="bi bi-pencil text-green-400"></i>
                                <span class="text-sm">Cập nhật: {{ $product->updated_at->format('d/m/Y H:i') }}</span>
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
                </div>
            </div>

            <!-- Phần đánh giá và bình luận -->
            <div class="mt-8">
                <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
                    <div class="flex items-center gap-2 mb-6">
                        <i class="bi bi-star text-yellow-400 text-2xl"></i>
                        <h2 class="text-xl font-bold text-yellow-400">Đánh giá và bình luận</h2>
                    </div>

                    <!-- Thống kê đánh giá -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-gray-700/50 rounded-xl p-4 text-center">
                            <p class="text-sm text-gray-400">Đánh giá trung bình</p>
                            <div class="flex items-center justify-center gap-1 mt-2">
                                @php
                                    $orderItems = $product->orderItems()->whereNotNull('rating')->get();
                                    $totalRatings = $orderItems->count();
                                    $avgRating = $totalRatings > 0 ? $orderItems->avg('rating') : 0;
                                @endphp
                                <p class="text-2xl font-bold text-white">{{ number_format($avgRating, 1) }}</p>
                                <div class="flex text-yellow-400">
                                    @php
                                        $fullStars = floor($avgRating);
                                        $halfStar = $avgRating - $fullStars >= 0.5;
                                        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                    @endphp
                                    @for ($i = 0; $i < $fullStars; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor
                                    @if ($halfStar)
                                        <i class="bi bi-star-half"></i>
                                    @endif
                                    @for ($i = 0; $i < $emptyStars; $i++)
                                        <i class="bi bi-star"></i>
                                    @endfor
                                </div>
                            </div>
                            <p class="text-sm text-gray-400 mt-1">{{ $totalRatings }} đánh giá</p>
                        </div>
                        <div class="bg-gray-700/50 rounded-xl p-4 text-center">
                            <p class="text-sm text-gray-400">Tổng bình luận</p>
                            <p class="text-2xl font-bold text-white mt-2">{{ $product->comments->count() }}</p>
                        </div>
                        <div class="bg-gray-700/50 rounded-xl p-4 text-center">
                            <p class="text-sm text-gray-400">Tỷ lệ hài lòng</p>
                            <p class="text-2xl font-bold text-white mt-2">
                                @php
                                    $satisfiedRatings = $orderItems->where('rating', '>=', 4)->count();
                                    $satisfactionRate = $totalRatings > 0 ? round(($satisfiedRatings / $totalRatings) * 100) : 0;
                                @endphp
                                {{ $satisfactionRate }}%
                                <span class="text-sm text-gray-400">({{ $satisfiedRatings }}/{{ $totalRatings }} đánh giá)</span>
                            </p>
                        </div>
                    </div>

                    <!-- Danh sách đánh giá -->
                    <div class="space-y-6">
                        @php
                            $orderItemsWithRating = $product->orderItems()->whereNotNull('rating')->with('order.user')->get();
                        @endphp
                        @forelse ($orderItemsWithRating as $item)
                            <div class="bg-gray-700/50 rounded-xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-gray-600 flex items-center justify-center">
                                            <i class="bi bi-person text-xl text-gray-300"></i>
                                        </div>
                                        <div>
                                            <p class="text-white font-medium">{{ $item->order->user->fullname ?? 'Người dùng không xác định' }}</p>
                                            <p class="text-sm text-gray-400">{{ $item->updated_at->format('d/m/Y H:i') }}</p>
                                        </div>
                                    </div>
                                    <div class="flex text-yellow-400">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="bi bi-star{{ $i <= $item->rating ? '-fill' : '' }}"></i>
                                        @endfor
                                    </div>
                                </div>
                                @if ($item->review)
                                    <p class="text-gray-300">{{ $item->review }}</p>
                                @endif
                                @if ($item->productVariant)
                                    <div class="mt-2 flex gap-2">
                                        @if ($item->productVariant->color)
                                            <span class="px-2 py-1 bg-gray-600 rounded text-sm text-gray-300">{{ $item->productVariant->color }}</span>
                                        @endif
                                        @if ($item->productVariant->storage)
                                            <span class="px-2 py-1 bg-gray-600 rounded text-sm text-gray-300">{{ $item->productVariant->storage }}</span>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        @empty
                            <div class="text-center text-gray-400 py-8">
                                <i class="bi bi-chat-square-text text-4xl mb-2"></i>
                                <p>Chưa có đánh giá nào</p>
                            </div>
                        @endforelse
                    </div>

                    <!-- Danh sách bình luận -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-blue-400 mb-4">Bình luận</h3>
                        <div class="space-y-4">
                            @forelse ($product->comments as $comment)
                                <div class="bg-gray-700/50 rounded-xl p-4">
                                    <div class="flex items-center gap-3 mb-3">
                                        <div class="w-10 h-10 rounded-full bg-gray-600 flex items-center justify-center">
                                            <i class="bi bi-person text-xl text-gray-300"></i>
                                        </div>
                                        <div>
                                            <p class="text-white font-medium">{{ $comment->user->fullname }}</p>
                                            <p class="text-sm text-gray-400">{{ $comment->created_at->format('d/m/Y H:i') }}</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-300">{{ $comment->content }}</p>
                                </div>
                            @empty
                                <div class="text-center text-gray-400 py-8">
                                    <i class="bi bi-chat-square-text text-4xl mb-2"></i>
                                    <p>Chưa có bình luận nào</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nút điều hướng -->
            <div class="flex items-center justify-end gap-4 mt-8">
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
@endsection
