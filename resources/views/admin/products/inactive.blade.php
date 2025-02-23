
@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Sản phẩm ngừng bán</h1>
    
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

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
              <!-- Form chuyển từ trạng thái inactive sang active -->
              <form action="{{ route('admin.products.activate', $product->id) }}" method="POST">
                 @csrf
                 @method('PATCH')
                 <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Mở bán sản phẩm này ?')">Mở bán</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    
    {{ $products->links() }}
</div>
@endsection