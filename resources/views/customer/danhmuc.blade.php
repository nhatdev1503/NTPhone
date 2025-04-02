@include('layouts.customer.header')
<div class="container my-4">
    @yield('content')
    <div class="container">
        <h2 style="font-size: 30px; font-weight: bold; margin: 30px 0 30px 0; color: white; text-align: center;">Danh mục
            {{ $category->name }}</h2>

        <div class="row">
            @foreach ($groupedProducts as $group)
                <div class="slide-cate owl-carousel owl-theme">
                    @foreach ($group as $product)
                        <div class="col-6 col-md-4 col-lg-3 mb-4">
                            <div class="item">
                                <a href="{{ route('customer.product_detail',$product->id) }}" class="main-contain">
                                    <label>Mới</label>
                                    <div class="img-slide">
                                        <img src="{{  asset('storage/' . $product->image)}}"
                                            class="img-fluid" alt="{{ $product->name }}">
                                    </div>
                                    <h3>{{ $product->name }}</h3>
                                    <span class="box-price">
                                        {{ number_format($product->price) }}₫
                                        <strike>{{ number_format($product->origin_price) }}₫</strike>
                                    </span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4" style="color: white;">
            {{ $products->links() }}
        </div>
    </div>
</div>

@include('layouts.customer.footer')