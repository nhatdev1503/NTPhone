@include('layouts.customer.header')

<div class="container my-4">
    @yield('content')

    <div class="container">
        <h2>Danh mục {{ $category->name }}</h2>
        <div class="row">
            @foreach($category->products as $product)
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card" style="border: 1px solid black; margin: 15px 0 15px 0; border-radius: 10px;">
                        <div class="img_product">
                            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" height="150px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ number_format($product->base_price, 0, ',', '.') }} VND</p>
                            <a href="#" class="btn btn-primary">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>

@include('layouts.customer.footer')