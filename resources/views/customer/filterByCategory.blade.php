@include('layouts.customer.header')
<div class="container my-4">
    @yield('content')
    <div class="container">
        <h2 style="font-size: 30px; font-weight: bold; margin: 30px 0 30px 0; text-align: center;">Danh mục
            {{ $category->name }}</h2>

        <form action="{{ route('customer.filter', $category->id) }}" method="GET"
            style="margin: 30px 0 30px 0; padding-left: 15%;">
            <label for="filter" style="color: white; margin-right: 10px;">Lọc theo giá:</label>
            <select name="filter" id="filter" onchange="this.form.submit()">
                <option value="">Chọn khoảng giá</option>
                <option value="0-500000" {{ request('filter') == '0-500000' ? 'selected' : '' }}>Dưới 500.000 ₫</option>
                <option value="500000-1000000" {{ request('filter') == '500000-1000000' ? 'selected' : '' }}>500.000 -
                    1.000.000 ₫</option>
                <option value="1000000-5000000" {{ request('filter') == '1000000-5000000' ? 'selected' : '' }}>1.000.000
                    - 5.000.000 ₫</option>
                <option value="5000000-10000000" {{ request('filter') == '5000000-10000000' ? 'selected' : '' }}>
                    5.000.000 - 10.000.000 ₫</option>
                <option value="10000000-100000000" {{ request('filter') == '10000000-100000000' ? 'selected' : '' }}>
                    Trên 10.000.000 ₫</option>
            </select>
        </form>

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
                                        <img width="234" height="234" class="lazyload image1"
                                            src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                                    </a>
                                    <div class="tag-km">
                                    </div>
                                    <input class="hidden" type="hidden" name="variantId" value="105666500" />
                                    <div class="action">
                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart">
                                                </use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="#">{{ $product->name }}</a></h3>
                                    <div class="price-box">
                                        {{ number_format($product->price) }}₫
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
