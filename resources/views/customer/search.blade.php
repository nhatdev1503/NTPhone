@include('layouts.customer.header')
<div class="container my-4">
    @yield('content')
    <div class="container">
        <div class="block-background">
            <h2 class="p-5" style="font-size: 30px; font-weight: bold;">Kết quả tìm kiếm: {{ $query }}</h2>

            @if ($products->isEmpty())
                <p style="margin-left: 5%; font-size: 20px;">Không tìm thấy sản phẩm nào.</p>
            @else
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-6 col-md-4 col-lg-3 mb-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-pro">
                                    <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                        data-id="product-actions-42560501" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="{{ route('customer.product_detail', $product->id) }}"
                                                title="{{ $product->name }}">
                                                <img width="130" height="130" src="{{ asset($product->image) }}"
                                                    alt="{{ $product->name }}">
                                            </a>
                                            <div class="tag-km">
                                            </div>
                                            <input class="hidden" type="hidden" name="variantId" value="140112418" />
                                            <div class="action">
                                                <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                    onclick="window.location.href='#'">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-detail"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a class="line-clamp line-clamp-2" href="#"
                                                    title="{{ $product->name }}">{{ $product->name }}</a>
                                            </h3>
                                            <div class="price-box">
                                                {{ number_format($product->sale_price) }}₫
                                            </div>
                                            <div class="wishlish-compare">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center mt-4" style="color: white;">
                    {{ $products->links() }}
                </div>
            @endif
        </div>
    </div>
</div>

@include('layouts.customer.footer')
