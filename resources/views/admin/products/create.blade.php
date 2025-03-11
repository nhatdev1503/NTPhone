@extends('layouts.admin.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h3 class="mb-0">Thêm sản phẩm mới</h3>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="category_id" class="form-label">Danh mục</label>
                                    <select class="form-control" id="category_id" name="category_id" required>
                                        <option value="" selected>Chọn danh mục</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Mô tả sản phẩm</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="image" class="form-label">Ảnh sản phẩm</label>
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="mini_image" class="form-label">Ảnh mini</label>
                                    <input type="file" class="form-control" id="mini_image" name="mini_image" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="screen" class="form-label">Màn hình</label>
                                    <input type="text" class="form-control" id="screen" name="screen"
                                        value="{{ old('screen') }}" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="os" class="form-label">Hệ điều hành</label>
                                    <input type="text" class="form-control" id="os" name="os"
                                        value="{{ old('os') }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="screen" class="form-label">Camera trước</label>
                                    <input type="text" class="form-control" id="front_camera" name="screen"
                                        value="{{ old('front_camera') }}" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="os" class="form-label">Camera sau</label>
                                    <input type="text" class="form-control" id="os" name="rear_camera"
                                        value="{{ old('rear_camera') }}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cpu" class="form-label">CPU</label>
                                    <input type="text" class="form-control" id="cpu" name="cpu"
                                        value="{{ old('cpu') }}" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="ram" class="form-label">RAM</label>
                                    <input type="text" class="form-control" id="ram" name="ram"
                                        value="{{ old('ram') }}" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="battery" class="form-label">Dung lượng Pin</label>
                                <input type="text" class="form-control" id="battery" name="battery"
                                    value="{{ old('battery') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="base_price" class="form-label">Giá cơ bản</label>
                                <input type="number" class="form-control" id="base_price" name="base_price"
                                    value="{{ old('base_price') }}" required>
                            </div>

                            <!-- Biến thể sản phẩm -->
                            <div id="variant-section">
                                <h4 class="text-center mt-4">Thêm biến thể</h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Màu sắc</label>
                                        <select class="form-control" id="variant_color">
                                            <option value="">Chọn màu</option>
                                            @foreach (['Green', 'Red', 'Black', 'Pink', 'White', 'Silver', 'Blue', 'Purple', 'Yellow', 'Gold'] as $color)
                                                <option value="{{ $color }}">{{ $color }}</option>
                                            @endforeach
                                                <option value="other">Khác</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Dung lượng</label>
                                        <select class="form-control" id="variant_storage">
                                            <option value="">Chọn dung lượng</option>
                                            @foreach (['8GB', '16GB', '32GB', '64GB', '128GB', '256GB', '512GB', '1TB', '2TB'] as $storage)
                                                <option value="{{ $storage }}">{{ $storage }}</option>
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

                                <h5 class="mt-4">Danh sách biến thể cần thêm: </h5>
                                <ul class="list-group" id="variant-list"></ul>
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
        document.getElementById("add-variant").addEventListener("click", function () {
            const color = document.getElementById("variant_color").value;
            const storage = document.getElementById("variant_storage").value;
            const origin_price = document.getElementById("variant_origin_price").value;
            const price = document.getElementById("variant_price").value;
            const stock = document.getElementById("variant_stock").value;
    
            if (!color || !storage || !origin_price || !price || !stock) {
                alert("Vui lòng điền đầy đủ thông tin biến thể!");
                return;
            }
            if(origin_price < price){
                alert("Giá giảm phải bé hơn giá gốc!");
                return;
            }
            let exists = false;
            document.querySelectorAll("#variant-list li").forEach(function (item) {
                console.log(`Checking: ${item.dataset.color} | ${item.dataset.storage}`);
                if (item.dataset.color === color && item.dataset.storage === storage) {
                    exists = true;
                }
            });
    
            if (exists) {
                alert("Biến thể với màu và dung lượng này đã tồn tại!");
                return;
            }
    
            // Tạo input hidden để gửi biến thể lên server
            const input = document.createElement("input");
            input.type = "hidden";
            input.name = "variants[]";
            input.value = JSON.stringify({ color, storage, origin_price, price, stock });
    
            document.getElementById("variant-section").appendChild(input);
    
            // Thêm vào danh sách hiển thị
            const variantList = document.getElementById("variant-list");
            const li = document.createElement("li");
            li.classList.add("list-group-item");
            li.dataset.color = color;
            li.dataset.storage = storage;
            li.innerHTML = `${color}   |   ${storage}   |   Giá gốc: ${origin_price}   |   Giá bán: ${price}   |   Kho: ${stock}
                <button type="button" class="btn btn-danger btn-sm remove-variant">X</button>`;
    
            variantList.appendChild(li);
        });
    
        // Xóa biến thể khỏi danh sách
        document.getElementById("variant-list").addEventListener("click", function (e) {
            if (e.target.classList.contains("remove-variant")) {
                e.target.parentElement.remove();
            }
        });
        document.getElementById("variant_color").addEventListener("change", function () {
        let customColorInput = document.getElementById("custom_color");
        if (this.value === "other") {
            customColorInput.classList.remove("d-none");
            customColorInput.focus();
        } else {
            customColorInput.classList.add("d-none");
        }
    });
    </script>
    
@endsection
