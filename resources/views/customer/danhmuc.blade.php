@include('layouts.customer.header')

<div class="container my-4">
    @yield('content')

    <div class="container">
        <h2>Danh mục {{ $category->name }}</h2>
        <div class="row">
            @foreach($category->products as $product)
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card" style="border: 1px solid black; margin: 15px 0 15px 0; border-radius: 10px; overflow: hidden; height: 500px;">
                        <div class="img_product">
                            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" style="height: 360px; object-fit: cover; margin: 10px auto 10px auto;">
                        </div>
                        <div class="card-body" style="margin: 0 15px 0 15px;">
                            <h2 class="card-title" style="font-size: 25px; font-weight: bold;">{{ $product->name }}</h2>
                            <p class="card-text" style="color: red; margin-top: 8px;">{{ number_format($product->base_price, 0, ',', '.') }} VND</p>
                            <div class="action" style="text-align: center; margin-top: 15px;">
                                <form action="" style="display: inline-block;">
                                    @csrf
                                    <button type="submit" style="border: 1px solid black; padding: 2px 4px; background-color: #ffc107; font-size: 16px; font-weight: bold; border-radius: 5px; cursor: pointer;">
                                        Thêm vào giỏ hàng
                                    </button>
                                </form>
                            
                                <a href="#" style="border: 1px solid black; padding: 2px 4px; background-color: #0d6efd; font-size: 16px; font-weight: bold; border-radius: 5px; text-decoration: none; display: inline-block; color: black;">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>

@include('layouts.customer.footer')