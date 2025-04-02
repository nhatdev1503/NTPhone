@include('layouts.customer.header')

<div class="container my-4">
    @yield('content')

    <div class="container">
        <h2 style="font-size: 30px; font-weight: bold; margin-bottom: 15px;">Sản phẩm yêu thích của bạn ❤️</h2>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="product-card mt-4">
                        <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                            data-id="product-actions-{{ $product->id }}" enctype="multipart/form-data">
                            <div class="product-thumbnail">
                                <a class="image_thumb scale_hover" href="#" title="{{ $product->name }}">
                                    <img width="100%" height="auto" src="{{ $product->image }}"
                                        alt="{{ $product->name }}">
                                </a>
                                <div class="action">
                                    <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                        onclick="window.location.href='#'">
                                        <svg class="icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-detail">
                                            </use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-name">
                                    <a class="line-clamp line-clamp-2" href="#" title="{{ $product->name }}">
                                        {{ $product->name }}
                                    </a>
                                </h3>
                                <div class="price-box">
                                    {{ number_format($product->base_price, 0, ',', '.') }} VND
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $products->links() }}
        </div>
    </div>
</div>

@include('layouts.customer.footer')
