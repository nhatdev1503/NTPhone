@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Danh sách sản phẩm</h1>
    
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">+ Thêm mới</a>
    
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Original Price</th>
          <th>Price</th>
          <th>Stock</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->original_price }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>
              <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
              <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Chắc chắc xóa ?')">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    {{ $products->links() }}
</div>
@endsection
