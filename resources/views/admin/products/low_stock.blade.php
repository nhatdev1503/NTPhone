@extends('layouts.main')

@section('content')
<div class="container my-5">
  <div class="card shadow">
    <div class="card-header bg-warning text-white">
      <h3 class="mb-0">Sản phẩm sắp hết hàng</h3>
    </div>
    <div class="card-body">
      <!-- Form tìm kiếm -->
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

      <!-- Bảng danh sách sản phẩm -->
      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Tên sản phẩm</th>
              <th>Giá gốc</th>
              <th>Giá bán</th>
              <th>Số lượng</th>
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
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center">Không có sản phẩm sắp hết hàng nào.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      <!-- Phân trang -->
      <div class="d-flex justify-content-center">
        {{ $products->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
