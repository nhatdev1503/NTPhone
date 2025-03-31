@extends('layouts.admin.main')

@section('content')
    <div class="container mt-4" style="max-width: 95%; min-width: 1200px;">
        <div class="card shadow">
            <div class="card-header bg-warning text-white">
                <h3 class="mb-0">Chỉnh sửa sản phẩm</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Cột trái: Thông tin cơ bản -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Danh mục</label>
                                <select name="category_id" class="form-select">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Mô tả</label>
                                <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Ảnh sản phẩm</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset($product->image) }}" alt="Ảnh sản phẩm" class="mt-2 img-thumbnail"
                                width="120" height="150">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Ảnh thu nhỏ (Mini Image)</label>
                                <input type="file" name="mini_images[]" class="form-control" multiple>
                                <label class="form-label fw-bold text-danger">*Chọn ảnh muốn xóa</label>
                                <div class="d-flex flex-wrap mt-2">
                                    @foreach ($product->images as $image)
                                        <div class="position-relative" style="margin-left: 20px">
                                            <img src="{{ asset($image->mini_image) }}" alt="Ảnh thu nhỏ" class="img-thumbnail" width="80" height="100">
                                            <input type="checkbox" name="delete_mini_images[]" value="{{ $image->id }}" class="position-absolute top-0 end-0">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            
                        </div>

                        <!-- Cột phải: Thông số kỹ thuật -->
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label class="form-label fw-bold">Màn hình</label>
                                <input type="text" name="screen" class="form-control" value="{{ $product->screen }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Hệ điều hành</label>
                                <input type="text" name="os" class="form-control" value="{{ $product->os }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Camera sau</label>
                                <input type="text" name="rear_camera" class="form-control"
                                    value="{{ $product->rear_camera }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Camera trước</label>
                                <input type="text" name="front_camera" class="form-control"
                                    value="{{ $product->front_camera }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Vi xử lý</label>
                                <input type="text" name="cpu" class="form-control" value="{{ $product->cpu }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">RAM</label>
                                <input type="text" name="ram" class="form-control" value="{{ $product->ram }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Pin</label>
                                <input type="text" name="battery" class="form-control" value="{{ $product->battery }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Giá cơ bản</label>
                                <input type="text" name="base_price" class="form-control"
                                    value="{{ $product->base_price }}" required>
                            </div>
                        </div>
                    </div>
                    <!-- Danh sách biến thể -->
                    <input type="hidden" id="product-status" value="{{ $product->status }}">
                    <input type="hidden" id="category-status" value="{{ $product->category->status }}">

                    <div class="mt-4">
                        <h3 class="mb-2" style="font-size:larger">Danh sách biến thể: </h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Màu sắc</th>
                                        <th>Dung lượng</th>
                                        <th>Giá gốc</th>
                                        <th>Giá giảm</th>
                                        <th>Số lượng</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product->variants as $index => $variant)
                                        <tr class="text-center" data-id="{{ $variant->id }}">
                                            <td class="text-center align-middle">{{ $index + 1 }}</td>
                                            <td>
                                                    <select class="form-control text-center variant-input" name="color">
                                                        @foreach ($colors as $color)
                                                            <option value="{{ $color->name }}" @if ($variant->color == $color->name) selected @endif >{{ $color->name }}</option>
                                                        @endforeach
                                                    </select>
                                            </td>
                                            <td>
                                                <select class="form-control text-center variant-input" name="storage">
                                                    @foreach ($storages as $storage)
                                                        <option value="{{ $storage->size }}" @if ($variant->storage == $storage->size) selected @endif >{{ $storage->size }}</option>
                                                    @endforeach
                                                </select>
                                        </td>
                                            <td>
                                                <input type="number" class="form-control text-center variant-input"
                                                    name="origin_price" value="{{ $variant->origin_price }}">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control text-center variant-input"
                                                    name="price" value="{{ $variant->price }}">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control text-center variant-input"
                                                    name="stock" value="{{ $variant->stock }}">
                                            </td>
                                            <td>
                                                <select name="status"
                                                    class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    @php
                                                        $isActive =
                                                            $product->category->status === 'active' &&
                                                            $product->status === 'active' &&
                                                            $variant->status === 'active';
                                                    @endphp

                                                    <option value="active" {{ $isActive ? 'selected' : '' }}>Đang bán
                                                    </option>
                                                    <option value="inactive" {{ !$isActive ? 'selected' : '' }}>Ngừng bán
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Biến thể sản phẩm -->
                    <div id="variant-section">
                        <h4 class="text-center mt-4">Thêm biến thể</h4>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="form-label">Màu sắc</label>
                                <select class="form-control variant_color" onchange="toggleInput(this, 'variant_color')">
                                    <option value="" disabled selected>Chọn màu</option>
                                    @foreach ($colors as $color)
                                        <option value="{{ $color->name }}">{{ $color->name }}</option>
                                    @endforeach
                                </select>
                                <input type="text" id="variant_color" class="form-control mt-2 d-none"
                                    placeholder="Nhập màu sắc">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Dung lượng</label>
                                <select class="form-control variant_storage"
                                    onchange="toggleInput(this, 'variant_storage')">
                                    <option value="" disabled selected>Chọn dung lượng</option>
                                    @foreach ($storages as $storage)
                                        <option value="{{ $storage->size }}">{{ $storage->size }}</option>
                                    @endforeach
                                </select>
                                <input type="text" id="variant_storage" class="form-control mt-2 d-none"
                                    placeholder="Nhập dung lượng">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Giá gốc</label>
                                <input type="number" class="form-control" id="variant_origin_price">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Giá giảm</label>
                                <input type="number" class="form-control" id="variant_price">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Kho hàng</label>
                                <input type="number" class="form-control" id="variant_stock">
                            </div>
                            <div class="col-md-1 d-flex align-items-end">
                                <button type="button" class="btn btn-success" id="add-variant">+</button>
                            </div>
                        </div>

                        <h5 class="mt-4">Danh sách thêm mới: </h5>
                        <ul class="list-group" id="variant-list"></ul>
                    </div>



                    <div class="text-end">
                        <button type="submit" id="submit-button" class="btn btn-success mt-5">
                            <i class="fa fa-save"></i> Lưu thay đổi
                        </button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-5">
                            <i class="fa fa-arrow-left"></i> Quay lại
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function toggleInput(selectElement, inputId) {
            let inputField = document.getElementById(inputId);
            if (selectElement.value === "other") {
                inputField.classList.remove("d-none"); // Hiện ô nhập
                inputField.setAttribute("required", "true");
            } else {
                inputField.classList.add("d-none"); // Ẩn ô nhập
                inputField.removeAttribute("required");
            }
        }
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector("form");
            const variantSection = document.getElementById("variant-section");
            let initialData = new Map();
            let initialStatuses = new Map();

            // Lưu trạng thái ban đầu của biến thể
            document.querySelectorAll(".variant-input").forEach(input => {
                const row = input.closest("tr");
                const key =
                    `${row.querySelector("[name='color']").value}_${row.querySelector("[name='storage']").value}`;
                initialData.set(key, JSON.stringify(getVariantData(row)));
                initialStatuses.set(row.dataset.id, row.querySelector("[name='status']").value);
            });

            function getVariantData(row) {
                return {
                    variantId: row.dataset.id,
                    color: row.querySelector("[name='color']").value,
                    storage: row.querySelector("[name='storage']").value,
                    origin_price: row.querySelector("[name='origin_price']").value,
                    price: row.querySelector("[name='price']").value,
                    stock: row.querySelector("[name='stock']").value,
                    status: row.querySelector("[name='status']").value
                };
            }

            function updateHiddenInputs() {
                document.querySelectorAll("input[name='updatevariants[]']").forEach(el => el.remove());
                let changedVariants = new Map();

                document.querySelectorAll(".variant-input").forEach(input => {
                    const row = input.closest("tr");
                    const key =
                        `${row.querySelector("[name='color']").value}_${row.querySelector("[name='storage']").value}`;
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
                let storage = document.querySelector(".variant_storage").value;
                const origin_price = document.getElementById("variant_origin_price").value;
                const price = document.getElementById("variant_price").value;
                const stock = document.getElementById("variant_stock").value;
                const inputColor = document.getElementById("variant_color").value;
                const inputStorage = document.getElementById("variant_storage").value;
                if (color == "other") {
                    color = inputColor;
                }
                if (storage == "other") {
                    storage = inputStorage;
                }
                if (!color || !storage || !origin_price || !price || !stock) {
                    alert("Vui lòng điền đầy đủ thông tin biến thể!");
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
                    storage,
                    origin_price,
                    price,
                    stock
                });
                variantSection.appendChild(input);

                const li = document.createElement("li");
                li.classList.add("list-group-item");
                li.dataset.color = color;
                li.dataset.storage = storage;
                li.innerHTML = `${color} | ${storage} | Giá gốc: ${origin_price} | Giá bán: ${price} | Kho: ${stock}
                <button type="button" class="btn btn-danger btn-sm remove-variant">X</button>`;
                document.getElementById("variant-list").appendChild(li);
            });

            document.getElementById("variant-list").addEventListener("click", function(e) {
                if (e.target.classList.contains("remove-variant")) {
                    e.target.parentElement.remove();
                }
            });

            document.getElementById("submit-button").addEventListener("click", function(event) {
                console.log("Submit event triggered");

                let productStatus = document.getElementById("product-status").value;
                let categoryStatus = document.getElementById("category-status").value;
                console.clear();

                let statusChangedToActive = false;
                document.querySelectorAll("select[name='status']").forEach(select => {
                    let variantId = select.closest("tr").dataset.id;
                    if (initialStatuses.get(variantId) !== "active" && select.value === "active") {
                        statusChangedToActive = true;
                    }
                });

                if (statusChangedToActive && (productStatus === "inactive" || categoryStatus ===
                        "inactive")) {
                    alert(
                        "Không thể thay đổi trạng thái biến thể vì sản phẩm hoặc danh mục đang bị vô hiệu hóa."
                    );
                    event.preventDefault();
                    return;
                }

                let existingVariants = new Set();
                let hasDuplicate = false;

                document.querySelectorAll("tr[data-id]").forEach(row => {
                    const key =
                        `${row.querySelector("input[name='color']").value.trim()}_${row.querySelector("input[name='storage']").value.trim()}`;
                    if (existingVariants.has(key)) {
                        hasDuplicate = true;
                        console.log(`Duplicate detected: ${key}`);
                    } else {
                        existingVariants.add(key);
                    }
                });
                document.querySelectorAll("#variant-list li").forEach(item => {
                    const key = `${item.dataset.color}_${item.dataset.storage}`;
                    if (existingVariants.has(key)) {
                        hasDuplicate = true;
                        console.log(`Duplicate detected in list: ${key}`);
                    } else {
                        existingVariants.add(key);
                    }
                });
                if (hasDuplicate) {
                    alert("Có biến thể bị trùng lặp trong danh sách. Vui lòng kiểm tra lại!");
                    event.preventDefault();
                    return;
                }

            });
        });
    </script>
@endsection
