@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Create New Product</h1>
    
    @if($errors->any())
      <div class="alert alert-danger">
         <ul>
           @foreach($errors->all() as $error)
             <li>{{ $error }}</li>
           @endforeach
         </ul>
      </div>
    @endif
    
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
          <label for="category_id" class="form-label">Category ID</label>
          <input type="number" class="form-control" id="category_id" name="category_id" required>
      </div>
      <div class="mb-3">
          <label for="name" class="form-label">Product Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="description" name="description"></textarea>
      </div>
      <div class="mb-3">
          <label for="original_price" class="form-label">Original Price</label>
          <input type="number" step="0.01" class="form-control" id="original_price" name="original_price" required>
      </div>
      <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" step="0.01" class="form-control" id="price" name="price" required>
      </div>
      <div class="mb-3">
          <label for="stock" class="form-label">Stock</label>
          <input type="number" class="form-control" id="stock" name="stock" required>
      </div>
      <div class="mb-3">
          <label for="image" class="form-label">Product Image</label>
          <input type="file" class="form-control" id="image" name="image">
      </div>
      <div class="mb-3">
          <label for="screen" class="form-label">Screen</label>
          <input type="text" class="form-control" id="screen" name="screen">
      </div>
      <div class="mb-3">
          <label for="os" class="form-label">Operating System</label>
          <input type="text" class="form-control" id="os" name="os">
      </div>
      <div class="mb-3">
          <label for="rear_camera" class="form-label">Rear Camera</label>
          <input type="text" class="form-control" id="rear_camera" name="rear_camera">
      </div>
      <div class="mb-3">
          <label for="front_camera" class="form-label">Front Camera</label>
          <input type="text" class="form-control" id="front_camera" name="front_camera">
      </div>
      <div class="mb-3">
          <label for="cpu" class="form-label">CPU</label>
          <input type="text" class="form-control" id="cpu" name="cpu">
      </div>
      <div class="mb-3">
          <label for="ram" class="form-label">RAM</label>
          <input type="text" class="form-control" id="ram" name="ram">
      </div>
      <div class="mb-3">
          <label for="battery" class="form-label">Battery</label>
          <input type="text" class="form-control" id="battery" name="battery">
      </div>
      <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
</div>
@endsection