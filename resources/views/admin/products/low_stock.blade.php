@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Sản phẩm sắp hết hàng</h1>
    
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Original Price</th>
          <th>Price</th>
          <th>Stock</th>
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
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection