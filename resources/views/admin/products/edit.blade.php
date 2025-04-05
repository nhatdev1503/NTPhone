@extends('layouts.admin.main')

@section('content')
    <div class="container mt-4" style="max-width: 95%; min-width: 1200px;">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Cột trái: Thông tin cơ bản -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name',$product->name)}}">
                                @if ($errors->has('name'))
                                        <div class="validate_error" >
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
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
                                @if ($errors->has('category_id'))
                                        <div class="validate_error" >
                                            {{ $errors->first('category_id') }}
                                        </div>
                                    @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Mô tả</label>
                                <textarea name="description" class="form-control" rows="3">{{ old('description',$product->description)}}</textarea>
                                @if ($errors->has('description'))
                                        <div class="validate_error" >
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Ảnh sản phẩm</label>
                                <input type="file" name="image" class="form-control">
                                @if ($errors->has('image'))
                                        <div class="validate_error" >
                                            {{ $errors->first('image') }}
                                        </div>
                                    @endif
                                <img src="{{ asset($product->image) }}" alt="Ảnh sản phẩm" class="mt-2 img-thumbnail"
                                width="120" height="150">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Ảnh thu nhỏ (Mini Image)</label>
                                <input type="file" name="mini_images[]" class="form-control" multiple>
                                @if ($errors->has('mini_image'))
                                        <div class="validate_error" >
                                            {{ $errors->first('mini_image') }}
                                        </div>
                                    @endif
                                <label class="form-label fw-bold text-danger">*Chọn ảnh muốn xóa</label>
                                <div class="d-flex flex-wrap mt-2">
                                    @foreach ($product->images as $image)
                                        <div class="position-relative" style="margin-left: 20px">
                                            <img src="{{ asset($image->mini_image) }}" alt="Ảnh thu nhỏ" class="img-thumbnail" width="50" height="80">
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
                                <input type="text" name="screen" class="form-control" value="{{ old('screen',$product->screen)}}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Hệ điều hành</label>
                                <input type="text" name="os" class="form-control" value="{{ old('os',$product->os)}}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Camera sau</label>
                                <input type="text" name="rear_camera" class="form-control"
                                    value="{{ old('rear_camera',$product->rear_camera)}}" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Camera trước</label>
                                <input type="text" name="front_camera" class="form-control"
                                    value="{{ old('front_camera',$product->front_camera)}}" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Vi xử lý</label>
                                <input type="text" name="cpu" class="form-control" value="{{ old('cpu',$product->cpu)}}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">RAM</label>
                                <input type="text" name="ram" class="form-control" value="{{ old('ram',$product->ram)}}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Pin</label>
                                <input type="text" name="battery" class="form-control" value="{{ old('battery',$product->battery)}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Giá gốc</label>
                                <input type="text" name="base_price" class="form-control" value="{{ old('base_price',$product->base_price) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Giá giảm</label>
                                <input type="text" name="sale_price" class="form-control" value="{{ old('sale_price',$product->sale_price) }}">
                            </div>
                            @if ($product->have_variant == 0)
                            <div class="mb-3">
                                <label class="form-label fw-bold">Số lượng</label>
                                <input type="text" name="stock" class="form-control" value="{{ old('stock',$product->one_variant->stock )}}">
                            </div>
                            @endif
                            
                        </div>
                    </div>
                    @if ($product->have_variant == 1)
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product->variants as $index => $variant)
                                        <tr class="text-center" data-id="{{ $variant->id }}">
                                            <td class="text-center align-middle">{{ $index + 1 }}</td>
                                            <td>
                                                    <select class="form-control text-center variant-input" name="color">
                                                        @foreach ($colors as $color)
                                                            <option value="{{ $color->name }}" data-hax="{{ $color->hax_code }}" @if ($variant->color == $color->name) selected @endif >{{ $color->name }}</option>
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
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Biến thể sản phẩm -->
                    <div id="variant-section">
                        <h4 class="text-center mt-4 mb-5">Thêm biến thể</h4>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="form-label">Màu sắc</label>
                                <select class="form-control variant_color">
                                    <option value="" disabled selected>Chọn màu</option>
                                    @foreach ($colors as $color)
                                        <option value="{{ $color->name }}" data-hax ="{{ $color->hax_code }}">{{ $color->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Dung lượng</label>
                                <select class="form-control variant_storage">
                                    <option value="" disabled selected>Chọn dung lượng</option>
                                    @foreach ($storages as $storage)
                                        <option value="{{ $storage->size }}">{{ $storage->size }}</option>
                                    @endforeach
                                </select>
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
                    @endif
                    



                    <div class="text-end">
                        <form action="{{ route('products.priority',$product->id) }}" method="POST"
                            class="d-inline">
                            @csrf
                            @method('PUT')
                            <button type="submit"
                                class="btn btn-dark mt-5">Ưu tiên lên đầu
                            </button>
                        </form>
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
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector("form");
            const variantSection = document.getElementById("variant-section");
            let initialData = new Map();

            // Lưu trạng thái ban đầu của biến thể
            document.querySelectorAll(".variant-input").forEach(input => {
                const row = input.closest("tr");
                const key =
                    `${row.querySelector("[name='color']").value}_${row.querySelector("[name='storage']").value}`;
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
                li.classList.add("list-group-item");
                li.dataset.color = color;
                li.dataset.storage = storage;
                li.innerHTML = `${color} | ${storage} | Giá gốc: ${origin_price} | Giá bán: ${price} | Kho: ${stock}
                <button type="button" class="btn btn-danger btn-sm remove-variant">X</button>`;
                document.getElementById("variant-list").appendChild(li);
            });

            document.getElementById("variant-list").addEventListener("click", function(e) {
                if (e.target.classList.contains("remove-variant")) {
                    const li = e.target.parentElement;
                    const color = li.dataset.color;
                    const storage = li.dataset.storage;

                    // Remove the corresponding hidden input
                    const hiddenInputs = document.querySelectorAll("input[name='variants[]']");
                    hiddenInputs.forEach(input => {
                        const variant = JSON.parse(input.value);
                        if (variant.color === color && variant.storage === storage) {
                            input.remove();
                        }
                    });

                    // Remove the list item
                    li.remove();
                }
            });

            document.getElementById("submit-button").addEventListener("click", function(event) {
                console.log("Submit event triggered");

                let productStatus = document.getElementById("product-status").value;
                let categoryStatus = document.getElementById("category-status").value;
                console.clear();

                let existingVariants = new Set();
                let hasDuplicate = false;

                document.querySelectorAll("tr[data-id]").forEach(row => {
                    const key =
                        `${row.querySelector("select[name='color']").value.trim()}_${row.querySelector("select[name='storage']").value.trim()}`;
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
