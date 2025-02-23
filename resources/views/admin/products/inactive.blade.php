@extends('layouts.main')

@section('content')
<div class="container my-5">
  <div class="card shadow">
    <div class="card-header bg-danger text-white">
      <h3 class="mb-0">Sản phẩm ngừng bán</h3>
    </div>
    <div class="card-body">
      @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <div class="row mb-4">
        <div class="col-md-6">
          <form action="" method="GET">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Tìm kiếm sản phẩm..." value="{{ request('search') }}">
              <button class="btn btn-outline-secondary" style="background-color: rgb(81, 141, 236);" type="submit">
                <i style="color: aliceblue" class="fa fa-search"></i>
              </button>
            </div>
          </form>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Tên sản phẩm</th>
              <th>Giá gốc</th>
              <th>Giá bán</th>
              <th>Số lượng</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ number_format($product->original_price, 0, ',', '.') }}</td>
              <td>{{ number_format($product->price, 0, ',', '.') }}</td>
              <td>{{ $product->stock }}</td>
              <td>
                <!-- Form chuyển từ trạng thái inactive sang active -->
                <form action="{{ route('admin.products.activate', $product->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('PATCH')
                  <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Mở bán sản phẩm này ?')">
                    <i class="fa fa-check"></i> Mở bán
                  </button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="6" class="text-center">Không có sản phẩm ngừng bán nào.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      <div class="d-flex justify-content-center">
        {{ $products->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
