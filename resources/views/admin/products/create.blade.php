@extends('layouts.admin.main')

@section('content')
    <div class="container mt-2" style="max-width: 95%; min-width: 1200px;">
        <h2 class="mb-4 display-6">Thêm mới sản phẩm</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <div class="validate_error">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="category_id" class="form-label">Danh mục</label>
                                    <select class="form-control" id="category_id" name="category_id">
                                        <option value="" selected>Chọn danh mục</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <div class="validate_error">
                                            {{ $errors->first('category_id') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Mô tả sản phẩm</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <div class="validate_error">
                                        {{ $errors->first('description') }}
                                    </div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="image" class="form-label">Ảnh sản phẩm</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @if ($errors->has('image'))
                                        <div class="validate_error">
                                            {{ $errors->first('image') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="mini_image" class="form-label">Ảnh mini (Có thể chọn nhiều ảnh)</label>
                                    <input type="file" class="form-control" id="mini_image" name="mini_images[]"
                                        multiple>
                                    @if ($errors->has('mini_image'))
                                        <div class="validate_error">
                                            {{ $errors->first('mini_image') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="screen" class="form-label">Màn hình</label>
                                    <input type="text" class="form-control" id="screen" name="screen"
                                        value="{{ old('screen') }}">
                                    @if ($errors->has('screen'))
                                        <div class="validate_error">
                                            {{ $errors->first('screen') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="os" class="form-label">Hệ điều hành</label>
                                    <input type="text" class="form-control" id="os" name="os"
                                        value="{{ old('os') }}">
                                    @if ($errors->has('os'))
                                        <div class="validate_error">
                                            {{ $errors->first('os') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="screen" class="form-label">Camera trước</label>
                                    <input type="text" class="form-control" id="front_camera" name="front_camera"
                                        value="{{ old('front_camera') }}">
                                    @if ($errors->has('front_camera'))
                                        <div class="validate_error">
                                            {{ $errors->first('front_camera') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="os" class="form-label">Camera sau</label>
                                    <input type="text" class="form-control" id="os" name="rear_camera"
                                        value="{{ old('rear_camera') }}">
                                    @if ($errors->has('rear_camera'))
                                        <div class="validate_error">
                                            {{ $errors->first('rear_camera') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cpu" class="form-label">CPU</label>
                                    <input type="text" class="form-control" id="cpu" name="cpu"
                                        value="{{ old('cpu') }}">
                                    @if ($errors->has('cpu'))
                                        <div class="validate_error">
                                            {{ $errors->first('cpu') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="ram" class="form-label">RAM</label>
                                    <input type="text" class="form-control" id="ram" name="ram"
                                        value="{{ old('ram') }}">
                                    @if ($errors->has('ram'))
                                        <div class="validate_error">
                                            {{ $errors->first('ram') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="battery" class="form-label">Dung lượng Pin</label>
                                <input type="text" class="form-control" id="battery" name="battery"
                                    value="{{ old('battery') }}">
                                @if ($errors->has('battery'))
                                    <div class="validate_error">
                                        {{ $errors->first('battery') }}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="battery" class="form-label">Giá gốc</label>
                                <input type="number" class="form-control" id="battery" name="base_price"
                                    value="{{ old('base_price') }}">
                                @if ($errors->has('base_price'))
                                    <div class="validate_error">
                                        {{ $errors->first('base_price') }}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="battery" class="form-label">Giá giảm</label>
                                <input type="text" class="form-control" id="battery" name="sale_price"
                                    value="{{ old('sale_price') }}">
                                @if ($errors->has('sale_price'))
                                    <div class="validate_error">
                                        {{ $errors->first('sale_price') }}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="product_type" class="form-label">Loại sản phẩm</label>
                                <select class="form-control" id="product_type" name="have_variant">
                                    <option value="0" selected>Sản phẩm đơn</option>
                                    <option value="1">Sản phẩm có biến thể</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="battery" class="form-label">Số lượng: </label>
                                <input type="text" class="form-control" id="product_stock" name="stock"
                                    value="{{ old('stock') }}">
                                @if ($errors->has('stock'))
                                    <div class="validate_error">
                                        {{ $errors->first('stock') }}
                                    </div>
                                @endif
                            </div>
                            <!-- Biến thể sản phẩm -->
                            <div id="variant-section" class="bg-white p-6 shadow-lg rounded-lg" style="display: none;">
                                <h4 class="text-center text-lg font-semibold mb-4">Thêm biến thể</h4>

                                <!-- Chọn màu sắc và dung lượng -->
                                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                                    <h4 class="text-lg font-semibold">Chọn màu sắc</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-2">
                                        @foreach ($colors as $color)
                                            <label class="flex items-center space-x-2">
                                                <input type="checkbox" class="form-checkbox text-blue-500 variant-color"
                                                    value="{{ $color->name }}" haxcode="{{ $color->hax_code }}">
                                                <span>{{ $color->name }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                    <h4 class="text-lg font-semibold mt-3">Chọn dung lượng</h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-2">
                                        @foreach ($storages as $storage)
                                            <label class="flex items-center space-x-2">
                                                <input type="checkbox" class="form-checkbox text-blue-500 variant-storage"
                                                    value="{{ $storage->size }}">
                                                <span>{{ $storage->size }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                    <button type="button"
                                        class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600"
                                        id="generate-variants">Đồng ý</button>
                                </div>

                                <!-- Danh sách biến thể -->
                                <h5 class="mt-4 font-semibold">Danh sách biến thể</h5>
                                <ul id="variant-list" class="space-y-2"></ul>
                                <div id="variant-hidden-inputs">
                                    <input type="hidden" name="variants[]" value="">
                                </div>
                            </div>


                            <div class="text-center mt-4">
                                <a href="{{ route('products.index') }}" class="btn btn-secondary">Danh sách</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-arrow-right"></i> Thêm mới
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const productTypeSelect = document.getElementById("product_type");
            const variantSection = document.getElementById("variant-section");
            const productStock = document.getElementById("product_stock");

            productTypeSelect.addEventListener("change", function() {
                if (this.value === "1") {
                    variantSection.style.display = "block";
                    productStock.style.display = "none";
                } else {
                    variantSection.style.display = "none";
                    productStock.style.display = "block";
                }
            });

            let variants = []; // Mảng lưu trữ biến thể

            // Xử lý khi nhấn "Đồng ý"
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
                    let variantItem = document.createElement("li");
                    variantItem.classList.add("p-3", "bg-gray-100", "rounded-lg", "cursor-pointer", "mt-2");
                    variantItem.dataset.index = index;

                    variantItem.innerHTML = `
                    <div class="flex justify-between items-center">
                        <span>${variant.color} | ${variant.storage}</span>
                        <button type="button" class="remove-variant text-red-500">Xóa</button>
                    </div>
                    <div class="hidden mt-2 space-y-2 variant-inputs">
                        <input type="number" class="block w-full p-2 border rounded variant-input" placeholder="Giá gốc" data-index="${index}" data-key="origin_price" value="${variant.origin_price}">
                        <input type="number" class="block w-full p-2 border rounded variant-input" placeholder="Giá giảm" data-index="${index}" data-key="price" value="${variant.price}">
                        <input type="number" class="block w-full p-2 border rounded variant-input" placeholder="Kho hàng" data-index="${index}" data-key="stock" value="${variant.stock}">
                    </div>
                `;
                    variantList.appendChild(variantItem);
                });

                updateHiddenInputs();
            }

            document.getElementById("variant-list").addEventListener("click", function(e) {
                let listItem = e.target.closest("li");

                if (e.target.classList.contains("remove-variant")) {
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
                        return; // Không lưu biến thể chưa nhập gì
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
