@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center gap-2 mb-6">
            <i class="bi bi-plus-circle text-blue-400 text-2xl"></i>
            <h1 class="text-2xl font-bold text-blue-400">Thêm mới sản phẩm</h1>
        </div>

        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Thông tin cơ bản -->
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Tên sản phẩm</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('name'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('name') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="category_id" class="block text-sm font-medium text-gray-300 mb-2">Danh mục</label>
                            <select id="category_id" name="category_id"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="" selected>Chọn danh mục</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('category_id') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-300 mb-2">Mô tả sản phẩm</label>
                            <textarea id="description" name="description" rows="3"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('description') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-300 mb-2">Ảnh sản phẩm</label>
                            <input type="file" id="image" name="image"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('image'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('image') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="mini_image" class="block text-sm font-medium text-gray-300 mb-2">Ảnh mini (Có thể chọn nhiều ảnh)</label>
                            <input type="file" id="mini_image" name="mini_images[]" multiple
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('mini_image'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('mini_image') }}</p>
                            @endif
                        </div>
                    </div>

                    <!-- Thông số kỹ thuật -->
                    <div class="space-y-4">
                        <div>
                            <label for="screen" class="block text-sm font-medium text-gray-300 mb-2">Màn hình</label>
                            <input type="text" id="screen" name="screen" value="{{ old('screen') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('screen'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('screen') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="os" class="block text-sm font-medium text-gray-300 mb-2">Hệ điều hành</label>
                            <input type="text" id="os" name="os" value="{{ old('os') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('os'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('os') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="front_camera" class="block text-sm font-medium text-gray-300 mb-2">Camera trước</label>
                            <input type="text" id="front_camera" name="front_camera" value="{{ old('front_camera') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('front_camera'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('front_camera') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="rear_camera" class="block text-sm font-medium text-gray-300 mb-2">Camera sau</label>
                            <input type="text" id="rear_camera" name="rear_camera" value="{{ old('rear_camera') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('rear_camera'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('rear_camera') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="cpu" class="block text-sm font-medium text-gray-300 mb-2">CPU</label>
                            <input type="text" id="cpu" name="cpu" value="{{ old('cpu') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('cpu'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('cpu') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="ram" class="block text-sm font-medium text-gray-300 mb-2">RAM</label>
                            <input type="text" id="ram" name="ram" value="{{ old('ram') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('ram'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('ram') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="battery" class="block text-sm font-medium text-gray-300 mb-2">Dung lượng Pin</label>
                            <input type="text" id="battery" name="battery" value="{{ old('battery') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('battery'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('battery') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="base_price" class="block text-sm font-medium text-gray-300 mb-2">Giá gốc</label>
                            <input type="number" id="base_price" name="base_price" value="{{ old('base_price') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('base_price'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('base_price') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="sale_price" class="block text-sm font-medium text-gray-300 mb-2">Giá giảm</label>
                            <input type="number" id="sale_price" name="sale_price" value="{{ old('sale_price') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('sale_price'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('sale_price') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="product_type" class="block text-sm font-medium text-gray-300 mb-2">Loại sản phẩm</label>
                            <select id="product_type" name="have_variant"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="0" selected>Sản phẩm đơn</option>
                                <option value="1">Sản phẩm có biến thể</option>
                            </select>
                        </div>

                        <div id="stock-input">
                            <label for="stock" class="block text-sm font-medium text-gray-300 mb-2">Số lượng</label>
                            <input type="number" id="stock" name="stock" value="{{ old('stock') }}"
                                class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @if ($errors->has('stock'))
                                <p class="mt-1 text-sm text-red-400">{{ $errors->first('stock') }}</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Phần biến thể -->
                <div id="variant-section" class="mt-8 bg-gray-700/50 rounded-xl p-6 hidden">
                    <h4 class="text-lg font-semibold text-blue-400 mb-4">Thêm biến thể</h4>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h5 class="text-sm font-medium text-gray-300 mb-3">Chọn màu sắc</h5>
                            <div class="grid grid-cols-2 gap-3">
                                @foreach ($colors as $color)
                                    <label class="flex items-center gap-2 text-gray-300">
                                        <input type="checkbox" class="form-checkbox text-blue-500 variant-color"
                                            value="{{ $color->name }}" haxcode="{{ $color->hax_code }}">
                                        <span>{{ $color->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <h5 class="text-sm font-medium text-gray-300 mb-3">Chọn dung lượng</h5>
                            <div class="grid grid-cols-2 gap-3">
                                @foreach ($storages as $storage)
                                    <label class="flex items-center gap-2 text-gray-300">
                                        <input type="checkbox" class="form-checkbox text-blue-500 variant-storage"
                                            value="{{ $storage->size }}">
                                        <span>{{ $storage->size }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <button type="button" id="generate-variants"
                        class="mt-4 bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                        <i class="bi bi-check-lg"></i> Đồng ý
                    </button>

                    <div class="mt-6">
                        <h5 class="text-sm font-medium text-gray-300 mb-3">Danh sách biến thể</h5>
                        <div id="variant-list" class="space-y-2"></div>
                        <div id="variant-hidden-inputs"></div>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-4 mt-8">
                    <a href="{{ route('products.index') }}"
                        class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                        <i class="bi bi-arrow-left"></i> Quay lại
                    </a>
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                        <i class="bi bi-plus-lg"></i> Thêm mới
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const productTypeSelect = document.getElementById("product_type");
        const variantSection = document.getElementById("variant-section");
        const stockInput = document.getElementById("stock-input");
        let variants = [];

        productTypeSelect.addEventListener("change", function() {
            if (this.value === "1") {
                variantSection.classList.remove("hidden");
                stockInput.classList.add("hidden");
            } else {
                variantSection.classList.add("hidden");
                stockInput.classList.remove("hidden");
            }
        });

        document.getElementById("generate-variants").addEventListener("click", function() {
            let selectedCheckboxes = Array.from(document.querySelectorAll(".variant-color:checked"));
            let selectedColors = selectedCheckboxes.map(el => el.value);
            let selectedHaxCode = selectedCheckboxes.map(el => el.getAttribute("haxcode"));
            let selectedStorages = Array.from(document.querySelectorAll(".variant-storage:checked"))
                .map(el => el.value);

            if (selectedColors.length === 0 || selectedStorages.length === 0) {
                alert("Vui lòng chọn ít nhất một màu sắc và một dung lượng!");
                return;
            }

            selectedColors.forEach((color, index) => {
                selectedStorages.forEach(storage => {
                    let hax_code = selectedHaxCode[index];

                    let exists = variants.some(v => v.color === color && v.storage === storage);
                    if (!exists) {
                        variants.push({
                            color,
                            hax_code,
                            storage,
                            origin_price: "",
                            price: "",
                            stock: ""
                        });
                    }
                });
            });

            renderVariantList();
        });

        function renderVariantList() {
            let variantList = document.getElementById("variant-list");
            let hiddenInputsContainer = document.getElementById("variant-hidden-inputs");

            variantList.innerHTML = "";
            hiddenInputsContainer.innerHTML = "";

            variants.forEach((variant, index) => {
                let variantItem = document.createElement("div");
                variantItem.classList.add("bg-gray-700", "p-4", "rounded-lg", "cursor-pointer", "hover:bg-gray-600", "transition-colors");
                variantItem.dataset.index = index;

                variantItem.innerHTML = `
                    <div class="flex justify-between items-center">
                        <span class="text-gray-300">${variant.color} | ${variant.storage}</span>
                        <button type="button" class="text-red-400 hover:text-red-300 transition-colors remove-variant">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                    <div class="hidden mt-4 space-y-3 variant-inputs">
                        <input type="number" class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent variant-input" 
                               placeholder="Giá gốc" data-index="${index}" data-key="origin_price" value="${variant.origin_price}">
                        <input type="number" class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent variant-input" 
                               placeholder="Giá giảm" data-index="${index}" data-key="price" value="${variant.price}">
                        <input type="number" class="w-full bg-gray-600 border border-gray-500 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent variant-input" 
                               placeholder="Kho hàng" data-index="${index}" data-key="stock" value="${variant.stock}">
                    </div>
                `;
                variantList.appendChild(variantItem);
            });

            updateHiddenInputs();
        }

        document.getElementById("variant-list").addEventListener("click", function(e) {
            let listItem = e.target.closest("div[data-index]");

            if (e.target.classList.contains("remove-variant") || e.target.closest(".remove-variant")) {
                let index = listItem.dataset.index;
                variants.splice(index, 1);
                renderVariantList();
                return;
            }

            if (e.target.tagName === "INPUT") {
                return;
            }

            if (listItem) {
                let inputs = listItem.querySelector(".variant-inputs");
                inputs.classList.toggle("hidden");
            }
        });

        document.getElementById("variant-list").addEventListener("input", function(e) {
            if (e.target.classList.contains("variant-input")) {
                let index = e.target.dataset.index;
                let key = e.target.dataset.key;
                let value = e.target.value;

                if (key === "origin_price" || key === "price" || key === "stock") {
                    if (value < 0) {
                        alert("Giá gốc, giá giảm và kho hàng không được phép âm!");
                        e.target.value = "";
                        return;
                    }
                }

                if (variants[index]) {
                    variants[index][key] = value;
                }

                updateHiddenInputs();
            }
        });

        function updateHiddenInputs() {
            let hiddenInputsContainer = document.getElementById("variant-hidden-inputs");
            hiddenInputsContainer.innerHTML = "";

            variants.forEach(variant => {
                if (variant.origin_price === "" && variant.price === "" && variant.stock === "") {
                    return;
                }

                let input = document.createElement("input");
                input.type = "hidden";
                input.name = "variants[]";
                input.value = JSON.stringify(variant);
                hiddenInputsContainer.appendChild(input);
            });
        }

        document.querySelector("form").addEventListener("submit", function(event) {
            if (productTypeSelect.value === "1" && variants.length === 0) {
                event.preventDefault();
                alert("Vui lòng tạo ít nhất một biến thể trước khi thêm mới!");
                return;
            }

            variants = variants.filter(variant => {
                return !(variant.origin_price === "" && variant.price === "" && variant.stock === "");
            });

            if (variants.length === 1) {
                const variant = variants[0];
                if (variant.origin_price === "" && variant.price === "" && variant.stock === "") {
                    event.preventDefault();
                    alert("Biến thể duy nhất không được để trống tất cả các giá trị!");
                    return;
                }
            }

            if (variants.length === 0 && productTypeSelect.value === "1") {
                event.preventDefault();
                alert("Vui lòng nhập thông tin cho ít nhất một biến thể hợp lệ!");
            }

            updateHiddenInputs();
        });
    });
</script>
@endsection
