@extends('layouts.admin.main')

@section('content')
    <div class="container" style="max-width: 95%; min-width: 1200px;">
        <h2 class="mb-4 display-6">Quản lí sản phẩm</h2>
        <div class="card shadow">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- <div class="row mb-4">
                    <div class="col-md-6">
                        <form action="" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Tìm kiếm sản phẩm..."
                                    value="{{ request('search') }}">
                                <button class="btn btn-outline-secondary" style="background-color: rgb(81, 141, 236);"
                                    type="submit">
                                    <i style="color: aliceblue" class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{ route('products.create') }}" class="btn btn-success">
                            <i class="fa fa-plus"></i> Thêm mới
                        </a>
                    </div>
                </div> --}}
                <div class="col-md-6 text-start">
                    <a href="{{ route('products.create') }}" class="btn btn-success">
                        <i class="fa fa-plus"></i> Thêm mới
                    </a>
                </div>
                <form method="GET" action="{{ route('products.index') }}" class="row g-3 mt-3 mb-3">
                    <div class="col-md-4">
                        <select name="status" class="form-control">
                            <option value="">-- Tất cả trạng thái --</option>
                            <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Hoạt động</option>
                            <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Ngừng hoạt động</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="category_id" class="form-control">
                            <option value="">-- Tất cả danh mục --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" 
                                    {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="Nhập tên sản phẩm hoặc danh mục..." value="{{ request('search') }}">
                    </div>
                    <div class="col-md-2 mt-3">
                        <button type="submit" class="btn btn-success w-100">
                            <i class="fa fa-search"></i> Tìm kiếm
                        </button>
                    </div>
                    <div class="col-md-2 mt-3">
                        <a href="{{ route('products.index') }}" class="btn btn-secondary w-100">
                            <i class="fa fa-refresh"></i> Reset
                        </a>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Danh mục</th>
                                <th>Ảnh</th>
                                <th>Màn hình</th>
                                <th>Ram</th>
                                <th>Pin</th>
                                <th>CPU</th>
                                <th>Sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $index => $product)
                                <tr class="product-row" data-product-id="{{ $product->id }}" style="cursor: pointer;">
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <i class="fa fa-chevron-down toggle-icon" id="icon-{{ $product->id }}"></i>
                                        {{ $product->name }}
                                    </td>
                                    <td>{{ $product->category->name }}</td>
                                    <td><img src="{{ asset($product->image) }}" alt="" class="img-fluid" width="40"></td>
                                    <td>{{ $product->screen }}</td>
                                    <td>{{ $product->ram }}</td>
                                    <td>{{ $product->battery }}</td>
                                    <td>{{ $product->cpu }}</td>
                                    <td>{{ $product->have_variant == 1 ? 'Biến thể' : 'Đơn' }}</td>
                                    <td>
                                        @if ($product->status == 'active' && $product->category->status == 'active')
                                            <span class="badge bg-success">Hoạt động</span>
                                        @else
                                            <span class="badge bg-danger">Ngừng hoạt động</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">
                                            Xem
                                        </a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">
                                            Sửa
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="btn btn-sm {{ $product->status == 'active' ? 'btn-danger' : 'btn-success' }}"
                                                onclick="return confirm('{{ $product->status == 'active' ? 'Bạn có chắc chắn muốn ngừng bán sản phẩm này?' : 'Bạn có chắc chắn muốn mở bán sản phẩm này?' }}')">
                                                {{ $product->status == 'active' ? 'Khóa' : '-Mở-' }}
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                <tr class="variant-row" id="variants-{{ $product->id }}"
                                    style="display: none; background: #f8f9fa;">
                                    <td colspan="9">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Dung lượng</th>
                                                    <th>Màu</th>
                                                    <th>Giá gốc</th>
                                                    <th>Giá giảm</th>
                                                    <th>Số lượng</th>
                                                </tr>
                                            </thead>
                                            <tbody id="variant-list-{{ $product->id }}">
                                                <tr>
                                                    <td colspan="5" class="text-center">Đang tải...</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Không có sản phẩm nào.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="flex items-center justify-between mt-4">
                        <p class="text-gray-600">
                            Hiển thị <span class="font-medium">{{ $products->firstItem() }}</span> đến 
                            <span class="font-medium">{{ $products->lastItem() }}</span> của 
                            <span class="font-medium">{{ $products->total() }}</span> kết quả
                        </p>
                    
                        <div>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
                {{-- <div class="d-flex justify-content-center">
                
            </div> --}}
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".product-row").forEach(function (row) {
                row.addEventListener("click", function (event) {
                    // Ngăn chặn sự kiện khi click vào nút bên trong
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
    
                    // Toggle hiển thị hàng biến thể
                    if (variantRow.style.display === "none") {
                        variantRow.style.display = "table-row";
                        icon.classList.remove("fa-chevron-down");
                        icon.classList.add("fa-chevron-up");
    
                        // Gọi API lấy danh sách biến thể
                        fetch(`/admin/products/${productId}/variants`)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error("Lỗi tải biến thể từ API");
                                }
                                return response.json();
                            })
                            .then(variants => {
                                let variantList = document.getElementById("variant-list-" + productId);
                                variantList.innerHTML = ""; // Xóa nội dung cũ
    
                                if (variants.length > 0) {
                                    variants.forEach(variant => {
                                        let row = `
                                            <tr>
                                                <td>${variant.storage}</td>
                                                <td>${variant.color}</td>
                                                <td>${variant.origin_price}</td>
                                                <td>${variant.price}</td>
                                                <td>${variant.stock}</td>
                                            </tr>
                                        `;
                                        variantList.innerHTML += row;
                                    });
                                } else {
                                    variantList.innerHTML = `<tr><td colspan="5" class="text-center">Không có biến thể nào.</td></tr>`;
                                }
                            })
                            .catch(error => {
                                console.error("Lỗi Fetch API:", error);
                                let variantList = document.getElementById("variant-list-" + productId);
                                variantList.innerHTML = `<tr><td colspan="5" class="text-center text-danger">Lỗi tải biến thể.</td></tr>`;
                            });
    
                    } else {
                        variantRow.style.display = "none";
                        icon.classList.remove("fa-chevron-up");
                        icon.classList.add("fa-chevron-down");
                    }
                });
            });
        });
    </script>    
@endsection
