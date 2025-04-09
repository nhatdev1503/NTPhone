@include('layouts.customer.header')
<div class="container my-4">
    @yield('content')
    <div class="container">
        <h2 style="font-size: 30px; font-weight: bold; margin: 30px 0 30px 0; text-align: center;">Danh mục
            {{ $category->name }}</h2>

        <div class="filter">
            <h2 class="my-3" style="font-size: 25px; font-weight: bold;">Bộ lọc:</h2>
            <form action="{{ route('customer.filter', $category->id) }}" method="GET" style="display: flex;">
                <div class="mb-3 me-4">
                    <label for="" style="font-weight: bold;">Mức giá</label>
                    <br>
                    Từ
                    <select name="min_price" id="min_price_select">
                        <option value="0">0₫</option>
                        <option value="500000">500.000₫</option>
                        <option value="1000000">1.000.000₫</option>
                        <option value="5000000">5.000.000₫</option>
                        <option value="10000000">10.000.000₫</option>
                    </select>
                    đến
                    <select name="max_price" id="max_price_select">
                        <option value="50000000">50.000.000₫</option>
                        <option value="10000000">10.000.000₫</option>
                        <option value="5000000">5.000.000₫</option>
                        <option value="1000000">1.000.000₫</option>
                        <option value="500000">500.000₫</option>
                    </select>
                </div>

                <div class="mb-3 me-4">
                    <label for="" style="font-weight: bold;">Màn hình</label>
                    <select name="screen" id="screen">
                        <option value="6.5">6.5 inches</option>
                        <option value="6.8">6.8 inches</option>
                    </select>
                </div>

                <div class="mb-3 me-4">
                    <label for="" style="font-weight: bold;">Hệ điều hành</label>
                    <select name="os" id="os">
                        <option value="ios">Ios</option>
                        <option value="android">Android</option>
                    </select>
                </div>

                <div class="mb-3 me-4">
                    <label for="" style="font-weight: bold;">Dung lượng</label>
                    <select name="storage" id="storage">
                        <option value="8">8GB</option>
                        <option value="16">16GB</option>
                        <option value="32">32GB</option>
                        <option value="64">64GB</option>
                    </select>
                </div>

                <div class="mb-3 me-4">
                    <label for="" style="font-weight: bold;">Ram</label>
                    <select name="ram" id="ram">
                        <option value="6">6GB</option>
                        <option value="12">12GB</option>
                    </select>
                </div>

                <div class="mb-3 me-4">
                    <label for="" style="font-weight: bold;">Dung lượng pin</label>
                    <select name="battery" id="battery">
                        <option value="3000">3000mAh</option>
                        <option value="4000">4000mAh</option>
                        <option value="5000">5000mAh</option>
                    </select>
                </div>

                <div class="mb-3 me-4">
                    <label for="" style="font-weight: bold;">CPU</label>
                    <select name="cpu" id="cpu">
                        <option value="A16 Bionic">Apple A</option>
                        <option value="Snapdragon">Snapdragon</option>
                        <option value="Exynos">Exynos</option>
                    </select>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Lọc</button>
                </div>
            </form>
        </div>

        <div class="row d-flex flex-wrap">
            @if ($products->isEmpty())
                <p style="text-align: center; width: 100%;">Không tìm thấy sản phẩm phù hợp.</p>
            @else
                @foreach ($products as $product)
                    <div class="col-6 col-md-4 col-lg-3 mb-4 p-2" style="width: 20%;">
                        <div class="card border-0 shadow-sm">
                            <form action="/cart/add" method="post" class="variants product-action" data-cart-form
                                data-id="product-actions-33911300" enctype="multipart/form-data">
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover" href="#" title="{{ $product->name }}">
                                        <img width="130" height="130" src="{{ asset($product->image) }}"
                                            alt="{{ $product->name }}">
                                    </a>
                                    <div class="tag-km">
                                    </div>
                                    <input class="hidden" type="hidden" name="variantId" value="105666500" />
                                    <div class="action">
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#icon-cart">
                                                </use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="#">{{ $product->name }}</a></h3>
                                    <div class="price-box">
                                        {{ number_format($product->sale_price) }}₫
                                    </div>
                                    <div class="wishlish-compare">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="d-flex justify-content-center mt-4" style="color: white;">
            {{ $products->links() }}
        </div>
    </div>
</div>

@include('layouts.customer.footer')
