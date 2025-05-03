@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <i class="bi bi-archive text-red-400 text-2xl"></i>
                <h1 class="text-2xl font-bold text-red-400">Sản phẩm đã ngừng bán</h1>
            </div>
            <a href="{{ route('products.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                <i class="bi bi-plus-lg"></i> Thêm mới
            </a>
        </div>
        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20 text-green-400 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif
        <!-- Form tìm kiếm và lọc -->
        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6 mb-6">
            <form method="GET" action="{{ route('products.inactive') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Danh mục</label>
                    <select name="category_id" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">-- Tất cả danh mục --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Tìm kiếm</label>
                    <input type="text" name="search" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                           placeholder="Nhập tên sản phẩm..." value="{{ request('search') }}">
                </div>
                <div class="flex items-end gap-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition-colors h-[42px]">
                        <i class="bi bi-search"></i> Tìm kiếm
                    </button>
                    <a href="{{ route('products.inactive') }}" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition-colors h-[42px]">
                        <i class="bi bi-arrow-counterclockwise"></i> Reset
                    </a>
                </div>
            </form>
        </div>

        <!-- Bảng sản phẩm -->
        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-700">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">STT</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Tên sản phẩm</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Danh mục</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Ảnh</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Giá gốc</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Giá giảm</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Sản phẩm</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Trạng thái</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Hành động</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        @forelse ($products as $index => $product)
                            <tr class="hover:bg-gray-700/50 transition-colors cursor-pointer product-row" data-product-id="{{ $product->id }}">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <i class="bi bi-chevron-down toggle-icon text-gray-400" id="icon-{{ $product->id }}"></i>
                                        <span class="text-white">{{ $product->name }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $product->category->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <img src="{{ asset($product->image) }}" alt="" class="w-10 h-10 rounded-lg object-cover">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ number_format($product->base_price) }}đ</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ number_format($product->sale_price) }}đ</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $product->have_variant == 1 ? 'Biến thể' : 'Đơn' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-500/10 text-red-400">Ngừng hoạt động</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('products.show', $product->id) }}" class="text-blue-400 hover:text-blue-300 transition-colors">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-400 hover:text-yellow-300 transition-colors">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="text-green-400 hover:text-green-300 transition-colors"
                                                    onclick="return confirm('Bạn có chắc chắn muốn mở bán sản phẩm này?')">
                                                <i class="bi bi-unlock"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('products.delete', $product->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="text-red-400 hover:text-red-300 transition-colors"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này? Hành động này không thể hoàn tác.')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr class="variant-row hidden bg-gray-700/30" id="variants-{{ $product->id }}">
                                <td colspan="11" class="px-6 py-4">
                                    <div class="overflow-x-auto">
                                        <table class="w-full">
                                            <thead class="bg-gray-700">
                                                <tr>
                                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-300 uppercase">Dung lượng</th>
                                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-300 uppercase">Màu</th>
                                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-300 uppercase">Giá gốc</th>
                                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-300 uppercase">Giá giảm</th>
                                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-300 uppercase">Số lượng</th>
                                                </tr>
                                            </thead>
                                            <tbody id="variant-list-{{ $product->id }}" class="divide-y divide-gray-700">
                                                <tr>
                                                    <td colspan="5" class="px-4 py-2 text-center text-gray-400">Đang tải...</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="11" class="px-6 py-4 text-center text-gray-400">
                                    <div class="flex flex-col items-center gap-2">
                                        <i class="bi bi-archive text-4xl"></i>
                                        <p>Không có sản phẩm nào đã ngừng bán.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Phân trang -->
            <div class="px-6 py-4 bg-gray-700/50 border-t border-gray-700">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-400">
                        Hiển thị <span class="font-medium text-white">{{ $products->firstItem() }}</span> đến 
                        <span class="font-medium text-white">{{ $products->lastItem() }}</span> của 
                        <span class="font-medium text-white">{{ $products->total() }}</span> kết quả
                    </p>
                    <div class="text-white">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".product-row").forEach(function (row) {
            row.addEventListener("click", function (event) {
                if (event.target.tagName === "A" || event.target.tagName === "BUTTON") {
                    return;
                }

                let productId = this.getAttribute("data-product-id");
                let variantRow = document.getElementById("variants-" + productId);
                let icon = document.getElementById("icon-" + productId);

                if (!variantRow) {
                    console.error("Không tìm thấy hàng biến thể cho sản phẩm ID: " + productId);
                    return;
                }

                if (variantRow.classList.contains("hidden")) {
                    variantRow.classList.remove("hidden");
                    icon.classList.remove("bi-chevron-down");
                    icon.classList.add("bi-chevron-up");

                    fetch(`/admin/products/${productId}/variants`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error("Lỗi tải biến thể từ API");
                            }
                            return response.json();
                        })
                        .then(variants => {
                            let variantList = document.getElementById("variant-list-" + productId);
                            variantList.innerHTML = "";

                            if (variants.length > 0) {
                                variants.forEach(variant => {
                                    let row = `
                                        <tr class="hover:bg-gray-700/50">
                                            <td class="px-4 py-2 text-sm text-gray-300">${variant.storage}</td>
                                            <td class="px-4 py-2 text-sm text-gray-300">${variant.color}</td>
                                            <td class="px-4 py-2 text-sm text-gray-300">${variant.origin_price}</td>
                                            <td class="px-4 py-2 text-sm text-gray-300">${variant.price}</td>
                                            <td class="px-4 py-2 text-sm text-gray-300">${variant.stock}</td>
                                        </tr>
                                    `;
                                    variantList.innerHTML += row;
                                });
                            } else {
                                variantList.innerHTML = `
                                    <tr>
                                        <td colspan="5" class="px-4 py-2 text-center text-gray-400">
                                            Không có biến thể nào.
                                        </td>
                                    </tr>
                                `;
                            }
                        })
                        .catch(error => {
                            console.error("Lỗi Fetch API:", error);
                            let variantList = document.getElementById("variant-list-" + productId);
                            variantList.innerHTML = `
                                <tr>
                                    <td colspan="5" class="px-4 py-2 text-center text-red-400">
                                        Lỗi tải biến thể.
                                    </td>
                                </tr>
                            `;
                        });
                } else {
                    variantRow.classList.add("hidden");
                    icon.classList.remove("bi-chevron-up");
                    icon.classList.add("bi-chevron-down");
                }
            });
        });
    });
</script>
@endsection 