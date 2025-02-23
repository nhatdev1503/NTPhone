@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    
    <div class="card">
      <div class="card-header">
          {{ $product->name }}
      </div>
      <div class="card-body">
          @if($product->image)
              <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" width="200">
          @endif
          <p><strong>Category ID:</strong> {{ $product->category_id }}</p>
          <p><strong>Description:</strong> {{ $product->description }}</p>
          <p><strong>Original Price:</strong> {{ $product->original_price }}</p>
          <p><strong>Price:</strong> {{ $product->price }}</p>
          <p><strong>Stock:</strong> {{ $product->stock }}</p>
          <p><strong>Screen:</strong> {{ $product->screen }}</p>
          <p><strong>OS:</strong> {{ $product->os }}</p>
          <p><strong>Rear Camera:</strong> {{ $product->rear_camera }}</p>
          <p><strong>Front Camera:</strong> {{ $product->front_camera }}</p>
          <p><strong>CPU:</strong> {{ $product->cpu }}</p>
          <p><strong>RAM:</strong> {{ $product->ram }}</p>
          <p><strong>Battery:</strong> {{ $product->battery }}</p>
      </div>
      <div class="card-footer">
          <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
      </div>
    </div>
</div>
@endsection


