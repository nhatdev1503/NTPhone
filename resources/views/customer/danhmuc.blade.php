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
                                <a href="#" class="main-contain">
                                    <label>Mới</label>
                                    <div class="img-slide">
                                        <img src="https://cdn.tgdd.vn/Products/Images/42/334864/s16/iphone-16e-black-thumbtz-650x650.png"
                                            class="img-fluid" alt="iPhone 16e 128GB">
                                    </div>
                                    <h3>iPhone 16e 128GB</h3>
                                    <span class="box-price">
                                        16.490.000₫
                                        <strike>16.990.000₫</strike>
                                        <small>-2%</small>
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
