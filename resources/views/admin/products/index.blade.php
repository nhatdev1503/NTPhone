@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Danh sách sản phẩm</h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                <div class="col-md-6 text-end">
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
                        <input type="text" name="search" class="form-control" placeholder="Nhập tên sản phẩm..." value="{{ request('search') }}">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success w-100">
                            <i class="fa fa-search"></i> Tìm kiếm
                        </button>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('products.index') }}" class="btn btn-secondary w-100">
                            <i class="fa fa-refresh"></i> Reset
                        </a>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Danh mục</th>
                                <th>Ảnh</th>
                                <th>OS</th>
                                <th>Màn hình</th>
                                <th>Ram</th>
                                <th>Pin</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr class="product-row" data-product-id="{{ $product->id }}" style="cursor: pointer;">
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        <i class="fa fa-chevron-down toggle-icon" id="icon-{{ $product->id }}"></i>
                                        {{ $product->name }}
                                    </td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->image }}</td>
                                    <td>{{ $product->os }}</td>
                                    <td>{{ $product->screen }}</td>
                                    <td>{{ $product->ram }}</td>
                                    <td>{{ $product->battery }}</td>
                                    <td>
                                        @if ($product->status == 'active')
                                            <span class="badge bg-success">Hoạt động</span>
                                        @else
                                            <span class="badge bg-danger">Ngừng hoạt động</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info"
                                            title="Xem chi tiết">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning"
                                            title="Chỉnh sửa">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="btn btn-sm {{ $product->status == 'active' ? 'btn-danger' : 'btn-success' }}"
                                                title="{{ $product->status == 'active' ? 'Ngừng bán' : 'Mở bán' }}"
                                                onclick="return confirm('{{ $product->status == 'active' ? 'Bạn có chắc chắn muốn ngừng bán sản phẩm này?' : 'Bạn có chắc chắn muốn mở bán sản phẩm này?' }}')">
                                                <i
                                                    class="fa {{ $product->status == 'active' ? 'fa-ban' : 'fa-check' }}"></i>
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
                                                    <th>Giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Trạng thái</th>
                                                    <th>Hành động</th>
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
                    {{ $products->links() }}
                </div>
                {{-- <div class="d-flex justify-content-center">
                
            </div> --}}
            </div>
        </div>
    </div>
@endsection
