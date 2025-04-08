@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center gap-2 mb-6">
            <i class="bi bi-pencil-square text-blue-400 text-2xl"></i>
            <h1 class="text-2xl font-bold text-blue-400">Chỉnh sửa sản phẩm</h1>
        </div>

        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Cột trái: Thông tin cơ bản -->
                    <div class="space-y-6">
                        <div class="bg-gray-700/50 rounded-xl p-4">
                            <h3 class="text-lg font-semibold text-blue-400 mb-4">Thông tin cơ bản</h3>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Tên sản phẩm</label>
                                    <input type="text" name="name" value="{{ old('name',$product->name)}}"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    @if ($errors->has('name'))
                                        <div class="text-red-400 text-sm mt-1">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Danh mục</label>
                                    <select name="category_id"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <div class="text-red-400 text-sm mt-1">{{ $errors->first('category_id') }}</div>
                                    @endif
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Mô tả</label>
                                    <textarea name="description" rows="3"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('description',$product->description)}}</textarea>
                                    @if ($errors->has('description'))
                                        <div class="text-red-400 text-sm mt-1">{{ $errors->first('description') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-700/50 rounded-xl p-4">
                            <h3 class="text-lg font-semibold text-blue-400 mb-4">Hình ảnh sản phẩm</h3>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Ảnh chính</label>
                                    <input type="file" name="image"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    @if ($errors->has('image'))
                                        <div class="text-red-400 text-sm mt-1">{{ $errors->first('image') }}</div>
                                    @endif
                                    @if ($product->image)
                                        <div class="mt-2">
                                            <img src="{{ asset($product->image) }}" alt="Ảnh sản phẩm"
                                                class="rounded-lg shadow-lg max-w-[200px]">
                                        </div>
                                    @endif
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Ảnh chi tiết</label>
                                    <input type="file" name="mini_images[]" multiple
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    @if ($errors->has('mini_image'))
                                        <div class="text-red-400 text-sm mt-1">{{ $errors->first('mini_image') }}</div>
                                    @endif
                                    <p class="text-sm text-red-400 mt-1">*Chọn ảnh muốn xóa</p>
                                    @if ($product->images->count() > 0)
                                        <div class="grid grid-cols-2 gap-2 mt-2">
                                            @foreach ($product->images as $image)
                                                <div class="relative">
                                                    <img src="{{ asset($image->mini_image) }}" alt="Ảnh thu nhỏ"
                                                        class="rounded-lg shadow-lg w-full">
                                                    <div class="absolute top-2 right-2">
                                                        <input type="checkbox" name="delete_mini_images[]" value="{{ $image->id }}"
                                                            class="w-5 h-5 text-red-500">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cột phải: Thông số kỹ thuật -->
                    <div class="space-y-6">
                        <div class="bg-gray-700/50 rounded-xl p-4">
                            <h3 class="text-lg font-semibold text-blue-400 mb-4">Thông số kỹ thuật</h3>
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Màn hình</label>
                                    <input type="text" name="screen" value="{{ old('screen',$product->screen)}}"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Hệ điều hành</label>
                                    <input type="text" name="os" value="{{ old('os',$product->os)}}"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Camera sau</label>
                                    <input type="text" name="rear_camera" value="{{ old('rear_camera',$product->rear_camera)}}"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Camera trước</label>
                                    <input type="text" name="front_camera" value="{{ old('front_camera',$product->front_camera)}}"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Vi xử lý</label>
                                    <input type="text" name="cpu" value="{{ old('cpu',$product->cpu)}}"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">RAM</label>
                                    <input type="text" name="ram" value="{{ old('ram',$product->ram)}}"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Pin</label>
                                    <input type="text" name="battery" value="{{ old('battery',$product->battery)}}"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-700/50 rounded-xl p-4">
                            <h3 class="text-lg font-semibold text-blue-400 mb-4">Giá và kho</h3>
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Giá gốc</label>
                                    <input type="text" name="base_price" value="{{ old('base_price',$product->base_price) }}"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Giá giảm</label>
                                    <input type="text" name="sale_price" value="{{ old('sale_price',$product->sale_price) }}"
                                        class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>

                                @if ($product->have_variant == 0)
                                    <div>
                                        <label class="block text-sm font-medium text-gray-300 mb-1">Số lượng</label>
                                        <input type="text" name="stock" value="{{ old('stock',$product->one_variant->stock )}}"
                                            class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                @if ($product->have_variant == 1)
                    <input type="hidden" id="product-status" value="{{ $product->status }}">
                    <input type="hidden" id="category-status" value="{{ $product->category->status }}">

                    <div class="mt-6 bg-gray-700/50 rounded-xl p-4">
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
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-600">
                                    @foreach ($product->variants as $variant)
                                        <tr class="hover:bg-gray-600/50" data-id="{{ $variant->id }}">
                                            <td class="py-3">
                                                <select class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent variant-input" name="color">
                                                    @foreach ($colors as $color)
                                                        <option value="{{ $color->name }}" data-hax="{{ $color->hax_code }}" @if ($variant->color == $color->name) selected @endif>{{ $color->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="py-3">
                                                <select class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent variant-input" name="storage">
                                                    @foreach ($storages as $storage)
                                                        <option value="{{ $storage->size }}" @if ($variant->storage == $storage->size) selected @endif>{{ $storage->size }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="py-3">
                                                <input type="number" class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent variant-input text-center" name="origin_price" value="{{ $variant->origin_price }}">
                                            </td>
                                            <td class="py-3">
                                                <input type="number" class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent variant-input text-center" name="price" value="{{ $variant->price }}">
                                            </td>
                                            <td class="py-3">
                                                <input type="number" class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent variant-input text-center" name="stock" value="{{ $variant->stock }}">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div id="variant-section" class="mt-6 bg-gray-700/50 rounded-xl p-4">
                        <h3 class="text-lg font-semibold text-blue-400 mb-4">Thêm biến thể mới</h3>
                        <div class="grid grid-cols-1 md:grid-cols-6 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-1">Màu sắc</label>
                                <select class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent variant_color">
                                    <option value="" disabled selected>Chọn màu</option>
                                    @foreach ($colors as $color)
                                        <option value="{{ $color->name }}" data-hax="{{ $color->hax_code }}">{{ $color->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-1">Dung lượng</label>
                                <select class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent variant_storage">
                                    <option value="" disabled selected>Chọn dung lượng</option>
                                    @foreach ($storages as $storage)
                                        <option value="{{ $storage->size }}">{{ $storage->size }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-1">Giá gốc</label>
                                <input type="number" class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="variant_origin_price">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-1">Giá giảm</label>
                                <input type="number" class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="variant_price">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-1">Kho hàng</label>
                                <input type="number" class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="variant_stock">
                            </div>
                            <div class="flex items-end">
                                <button type="button" id="add-variant" class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 transition-colors">
                                    <i class="bi bi-plus-lg"></i> Thêm
                                </button>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-sm font-medium text-gray-300 mb-2">Danh sách thêm mới:</h4>
                            <ul class="space-y-2" id="variant-list"></ul>
                        </div>
                    </div>
                @endif

                <div class="flex items-center justify-end gap-4 mt-6">
                    <a href="{{ url()->previous() }}"
                        class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                        <i class="bi bi-arrow-left"></i> Quay lại
                    </a>
                    <button type="submit" id="submit-button"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                        <i class="bi bi-save"></i> Lưu thay đổi
                    </button>
                </div>
            </form>

            <form action="{{ route('products.priority',$product->id) }}" method="POST" class="mt-4">
                @csrf
                @method('PUT')
                <button type="submit"
                    class="bg-purple-500 hover:bg-purple-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                    <i class="bi bi-arrow-up"></i> Đưa sản phẩm lên đầu trang
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.querySelector("form");
        const variantSection = document.getElementById("variant-section");
        let initialData = new Map();

        // Lưu trạng thái ban đầu của biến thể
        document.querySelectorAll(".variant-input").forEach(input => {
            const row = input.closest("tr");
            const key = `${row.querySelector("[name='color']").value}_${row.querySelector("[name='storage']").value}`;
            initialData.set(key, JSON.stringify(getVariantData(row)));
        });

        function getVariantData(row) {
            return {
                variantId: row.dataset.id,
                color: row.querySelector("[name='color']").value,
                hax_code: row.querySelector("select[name='color']").selectedOptions[0].getAttribute('data-hax'),
                storage: row.querySelector("[name='storage']").value,
                origin_price: row.querySelector("[name='origin_price']").value,
                price: row.querySelector("[name='price']").value,
                stock: row.querySelector("[name='stock']").value
            };
        }

        function updateHiddenInputs() {
            document.querySelectorAll("input[name='updatevariants[]']").forEach(el => el.remove());
            let changedVariants = new Map();

            document.querySelectorAll(".variant-input").forEach(input => {
                const row = input.closest("tr");
                const key = `${row.querySelector("[name='color']").value}_${row.querySelector("[name='storage']").value}`;
                const newValue = JSON.stringify(getVariantData(row));

                if (initialData.get(key) !== newValue) changedVariants.set(key, newValue);
            });

            changedVariants.forEach((value) => {
                const hiddenInput = document.createElement("input");
                hiddenInput.type = "hidden";
                hiddenInput.name = "updatevariants[]";
                hiddenInput.value = value;
                variantSection.appendChild(hiddenInput);
            });
        }

        function debounce(func, delay) {
            let timeout;
            return function() {
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(this, arguments), delay);
            };
        }

        document.querySelectorAll(".variant-input").forEach(input => {
            input.addEventListener("input", debounce(updateHiddenInputs, 300));
        });

        form.addEventListener("submit", updateHiddenInputs);

        document.getElementById("add-variant").addEventListener("click", function() {
            let color = document.querySelector(".variant_color").value;
            let hax_code = document.querySelector(".variant_color").selectedOptions[0].getAttribute('data-hax');
            let storage = document.querySelector(".variant_storage").value;
            const origin_price = parseFloat(document.getElementById("variant_origin_price").value);
            const price = parseFloat(document.getElementById("variant_price").value);
            const stock = parseInt(document.getElementById("variant_stock").value);

            if (!color || !storage || isNaN(origin_price) || isNaN(price) || isNaN(stock)) {
                alert("Vui lòng điền đầy đủ thông tin biến thể!");
                return;
            }
            if (origin_price < 0 || price < 0 || stock < 0) {
                alert("Giá gốc, giá giảm và kho hàng không được phép âm!");
                return;
            }
            if (origin_price < price) {
                alert("Giá giảm phải bé hơn giá gốc!");
                return;
            }

            const input = document.createElement("input");
            input.type = "hidden";
            input.name = "variants[]";
            input.value = JSON.stringify({
                color,
                hax_code,
                storage,
                origin_price,
                price,
                stock
            });
            variantSection.appendChild(input);

            const li = document.createElement("li");
            li.classList.add("bg-gray-600", "rounded-lg", "p-3", "flex", "items-center", "justify-between");
            li.dataset.color = color;
            li.dataset.storage = storage;
            li.innerHTML = `
                <span class="text-white">${color} | ${storage} | Giá gốc: ${origin_price} | Giá bán: ${price} | Kho: ${stock}</span>
                <button type="button" class="text-red-400 hover:text-red-300 transition-colors remove-variant">
                    <i class="bi bi-trash"></i>
                </button>
            `;
            document.getElementById("variant-list").appendChild(li);
        });

        document.getElementById("variant-list").addEventListener("click", function(e) {
            if (e.target.closest(".remove-variant")) {
                const li = e.target.closest("li");
                const color = li.dataset.color;
                const storage = li.dataset.storage;

                const hiddenInputs = document.querySelectorAll("input[name='variants[]']");
                hiddenInputs.forEach(input => {
                    const variant = JSON.parse(input.value);
                    if (variant.color === color && variant.storage === storage) {
                        input.remove();
                    }
                });

                li.remove();
            }
        });

        document.getElementById("submit-button").addEventListener("click", function(event) {
            let productStatus = document.getElementById("product-status").value;
            let categoryStatus = document.getElementById("category-status").value;

            let existingVariants = new Set();
            let hasDuplicate = false;

            document.querySelectorAll("tr[data-id]").forEach(row => {
                const key = `${row.querySelector("select[name='color']").value.trim()}_${row.querySelector("select[name='storage']").value.trim()}`;
                if (existingVariants.has(key)) {
                    hasDuplicate = true;
                } else {
                    existingVariants.add(key);
                }
            });

            document.querySelectorAll("#variant-list li").forEach(item => {
                const key = `${item.dataset.color}_${item.dataset.storage}`;
                if (existingVariants.has(key)) {
                    hasDuplicate = true;
                } else {
                    existingVariants.add(key);
                }
            });

            if (hasDuplicate) {
                alert("Có biến thể bị trùng lặp trong danh sách. Vui lòng kiểm tra lại!");
                event.preventDefault();
                return;
            }

            let hasNegativeValues = false;

            document.querySelectorAll("tr[data-id]").forEach(row => {
                const origin_price = parseFloat(row.querySelector("input[name='origin_price']").value);
                const price = parseFloat(row.querySelector("input[name='price']").value);
                const stock = parseInt(row.querySelector("input[name='stock']").value);

                if (origin_price < 0 || price < 0 || stock < 0) {
                    hasNegativeValues = true;
                }
            });

            if (hasNegativeValues) {
                alert("Giá gốc, giá giảm và kho hàng không được phép âm!");
                event.preventDefault();
                return;
            }
        });
    });
</script>
@endsection
