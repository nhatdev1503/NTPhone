@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center gap-2 mb-6">
            <i class="bi bi-plus-circle text-blue-400 text-2xl"></i>
            <h1 class="text-2xl font-bold text-blue-400">Thêm mới sản phẩm</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Form chính -->
            <div class="lg:col-span-2">
                <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="space-y-6">
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
                                    <label for="image" class="block text-sm font-medium text-gray-300 mb-2">Ảnh chính:</label>
                                    <input type="file" id="image" name="image" value="{{ old('image') }}"
                                        class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    @if ($errors->has('image'))
                                        <p class="mt-1 text-sm text-red-400">{{ $errors->first('image') }}</p>
                                    @endif
                                </div>
                                <div>
                                    <label for="mini_images" class="block text-sm font-medium text-gray-300 mb-2">Ảnh mini:</label>
                                    <input type="file" id="mini_images" multiple name="mini_images[]" value="{{ old('mini_images') }}"
                                        class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    @if ($errors->has('mini_images'))
                                        <p class="mt-1 text-sm text-red-400">{{ $errors->first('mini_images') }}</p>
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


                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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
                            <div id="variant-section" class="bg-gray-700/50 rounded-xl p-6 hidden">
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

                            <div class="flex items-center justify-end gap-4">
                                <a href="{{ route('products.index') }}"
                                    class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                                    <i class="bi bi-arrow-left"></i> Quay lại
                                </a>
                                <button type="button" id="continue-btn" class="hidden bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                                    <i class="bi bi-arrow-right"></i> Tiếp tục
                                </button>
                                <button type="submit" id="submit-btn"
                                    class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                                    <i class="bi bi-plus-lg"></i> Thêm mới
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Sidebar bên phải -->
            <div class="lg:col-span-1">
                <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6 space-y-6">
                    <!-- Hướng dẫn -->
                    <div>
                        <h3 class="text-lg font-semibold text-blue-400 mb-4 flex items-center gap-2">
                            <i class="bi bi-info-circle"></i>
                            Hướng dẫn
                        </h3>
                        <div class="space-y-3 text-sm text-gray-300">
                            <p>1. Điền đầy đủ thông tin cơ bản của sản phẩm</p>
                            <p>2. Chọn loại sản phẩm phù hợp:</p>
                            <ul class="list-disc list-inside ml-4 space-y-1">
                                <li>Sản phẩm đơn: Nhập số lượng trực tiếp</li>
                                <li>Sản phẩm có biến thể: Tạo các biến thể với màu sắc và dung lượng khác nhau</li>
                            </ul>
                            <p>3. Kiểm tra lại thông tin trước khi thêm mới</p>
                        </div>
                    </div>

                    <!-- Lưu ý -->
                    <div>
                        <h3 class="text-lg font-semibold text-yellow-400 mb-4 flex items-center gap-2">
                            <i class="bi bi-exclamation-triangle"></i>
                            Lưu ý
                        </h3>
                        <div class="space-y-3 text-sm text-gray-300">
                            <p>• Tên sản phẩm nên ngắn gọn và dễ hiểu</p>
                            <p>• Giá giảm phải nhỏ hơn giá gốc</p>
                            <p>• Số lượng phải lớn hơn 0</p>
                            <p>• Mô tả nên chi tiết về tính năng và thông số kỹ thuật</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const productTypeSelect = document.getElementById("product_type");
        const variantSection = document.getElementById("variant-section");
        const stockInput = document.getElementById("stock-input");
        const continueBtn = document.getElementById("continue-btn");
        const submitBtn = document.getElementById("submit-btn");
        let variants = [];

        productTypeSelect.addEventListener("change", function() {
            if (this.value === "1") {
                variantSection.classList.remove("hidden");
                stockInput.classList.add("hidden");
                continueBtn.classList.remove("hidden");
                submitBtn.classList.add("hidden");
            } else {
                variantSection.classList.add("hidden");
                stockInput.classList.remove("hidden");
                continueBtn.classList.add("hidden");
                submitBtn.classList.remove("hidden");
            }
        });

        continueBtn.addEventListener("click", function() {
            if (variants.length === 0) {
                alert("Vui lòng tạo ít nhất một biến thể trước khi tiếp tục!");
                return;
            }

            // Kiểm tra xem tất cả các biến thể đã có đầy đủ thông tin chưa
            let isValid = true;
            variants.forEach(variant => {
                if (!variant.origin_price || !variant.price || !variant.stock) {
                    isValid = false;
                }
            });

            if (!isValid) {
                alert("Vui lòng nhập đầy đủ thông tin cho tất cả các biến thể!");
                return;
            }

            // Hiển thị nút submit và ẩn nút continue
            continueBtn.classList.add("hidden");
            submitBtn.classList.remove("hidden");
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
                    <div class="mt-4 space-y-3 variant-inputs">
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
{{-- TinyMCE CDN --}}
<script src="https://cdn.tiny.cloud/1/rmmh49b4qpvs6yg7r9ov3mmjtz8ltfutkp4hxyfguni1fzfz/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
tinymce.init({
    selector: '#description', // <-- chỉ đổi chỗ này thôi
    height: 500,
    plugins: 'image link media table code lists advlist fullscreen',
    toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright | forecolor backcolor | link image media table | numlist bullist | code fullscreen',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',

    setup: function(editor) {
        editor.on('change', function() {
            tinymce.activeEditor.save();
        });
    },

    images_upload_url: "{{ route('news.upload_images') }}",

    file_picker_types: 'image',
    file_picker_callback: function(callback, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.setAttribute('multiple', 'multiple');

        input.onchange = function() {
            var files = input.files;
            if (files.length > 0) {
                var formData = new FormData();
                for (let i = 0; i < files.length; i++) {
                    formData.append('images[]', files[i]);
                }
                fetch("{{ route('news.upload_images') }}", { 
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    }
                })
                .then(response => response.json())
                .then(data => {
                    data.images.forEach(image => {
                        callback(image.url, { alt: image.name });
                    });
                })
                .catch(error => {
                    console.error('Error uploading images:', error);
                });
            }
        };

        input.click(); 
    }
});
</script>
@endsection
