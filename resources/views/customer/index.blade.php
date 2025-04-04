@include('layouts.customer.header')
<div class="bg-sg"></div>
<section>

    <div class="slide-home owl-carousel owl-theme">
        <a aria-label="slide" data-cate="0" data-place="1733" href="https://www.topzone.vn/chuong-trinh-iphone-16e"
            onclick="jQuery.ajax({ url: '/bannertracking?bid=97552&r='+ (new Date).getTime(), async: true, cache: false });"><img
                width='1920' height='400'
                src="//cdnv2.tgdd.vn/mwg-static/topzone/Banner/7a/29/7a291748627967d8a5482d1d2de85bff.png"
                alt="iPhone 16"></a><a aria-label="slide" data-cate="0" data-place="1733"
            href="http://topzone.vn/chuong-trinh-ipad"
            onclick="jQuery.ajax({ url: '/bannertracking?bid=97605&r='+ (new Date).getTime(), async: true, cache: false });"><img
                width='1920' height='400' loading="lazy" class="lazyload owl-lazy"
                data-src="//cdnv2.tgdd.vn/mwg-static/topzone/Banner/02/c0/02c0657da9c428d28ea85071977ba4db.png"
                alt="iPhone 16"></a><a aria-label="slide" data-cate="0" data-place="1733"
            href="http://topzone.vn/chuong-trinh-macbook-air"
            onclick="jQuery.ajax({ url: '/bannertracking?bid=97553&r='+ (new Date).getTime(), async: true, cache: false });"><img
                width='1920' height='400' loading="lazy" class="lazyload owl-lazy"
                data-src="//cdnv2.tgdd.vn/mwg-static/topzone/Banner/dd/a8/dda80e8ef4193e52786f5762cad257ef.png"
                alt="NTT iPad Pro M4"></a><a aria-label="slide" data-cate="0" data-place="1733"
            href="https://www.topzone.vn/iphone-16"
            onclick="jQuery.ajax({ url: '/bannertracking?bid=97554&r='+ (new Date).getTime(), async: true, cache: false });"><img
                width='1920' height='400' loading="lazy" class="lazyload owl-lazy"
                data-src="//cdnv2.tgdd.vn/mwg-static/topzone/Banner/70/52/705203a83f332a0470954c41ef48dd45.png"
                alt="tai nghe airpods"></a><a aria-label="slide" data-cate="0" data-place="1733"
            href="https://www.topzone.vn/iphone/iphone-15"
            onclick="jQuery.ajax({ url: '/bannertracking?bid=88437&r='+ (new Date).getTime(), async: true, cache: false });"><img
                width='1920' height='400' loading="lazy" class="lazyload owl-lazy"
                data-src="//cdnv2.tgdd.vn/mwg-static/topzone/Banner/39/a5/39a57f17c78de5950f901efcbb9d5862.png"
                alt="ốp lưng"></a><a aria-label="slide" data-cate="0" data-place="1733"
            href="https://www.topzone.vn/ipad/ipad-gen-10"
            onclick="jQuery.ajax({ url: '/bannertracking?bid=91531&r='+ (new Date).getTime(), async: true, cache: false });"><img
                width='1920' height='400' loading="lazy" class="lazyload owl-lazy"
                data-src="//cdnv2.tgdd.vn/mwg-static/topzone/Banner/d0/7c/d07cdf3fecd4c1530d9db53d412ec247.png"
                alt="NTT iPad Pro M4"></a><a aria-label="slide" data-cate="0" data-place="1733"
            href="https://www.topzone.vn/mac/apple-macbook-air-m2-2022-16gb-256gb"
            onclick="jQuery.ajax({ url: '/bannertracking?bid=88017&r='+ (new Date).getTime(), async: true, cache: false });"><img
                width='1920' height='400' loading="lazy" class="lazyload owl-lazy"
                data-src="//cdnv2.tgdd.vn/mwg-static/topzone/Banner/0e/19/0e19fb77c81450a51f7813ff06cbb483.png"
                alt="tai nghe airpods"></a><a aria-label="slide" data-cate="0" data-place="1733"
            href="https://www.topzone.vn/apple-watch-series-10"
            onclick="jQuery.ajax({ url: '/bannertracking?bid=90680&r='+ (new Date).getTime(), async: true, cache: false });"><img
                width='1920' height='400' loading="lazy" class="lazyload owl-lazy"
                data-src="//cdnv2.tgdd.vn/mwg-static/topzone/Banner/22/95/229529dc5c564551521e769e8cefabf6.png"
                alt="NTT iPad mini"></a><a aria-label="slide" data-cate="0" data-place="1733"
            href="https://www.topzone.vn/tai-nghe/tai-nghe-bluetooth-airpods-pro-gen-2-magsafe-charge-usb-c-apple-mtjv3"
            onclick="jQuery.ajax({ url: '/bannertracking?bid=87355&r='+ (new Date).getTime(), async: true, cache: false });"><img
                width='1920' height='400' loading="lazy" class="lazyload owl-lazy"
                data-src="//cdnv2.tgdd.vn/mwg-static/topzone/Banner/5e/3e/5e3edfc68b5f5096279b09184f3991c8.png"
                alt="ốp lưng"></a>
    </div>
    <div class="main">
        <div class="warpper-box-product ">
            <div class="box-cate-product ">
                @php
                    $images = [
                        'iphone' => 'https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/IP_Desk.png',
                        'samsung' => 'https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Mac_Desk.png',
                        'oppo' => 'https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Ipad_Desk.png',
                        'xiaomi' => 'https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Watch_Desk.png',
                    ];
                @endphp

                <ul class="choose-cate">
                    @foreach ($categories as $category)
                        @php
                            $slug = strtolower($category->slug ?? str_replace(' ', '-', $category->name));
                            $imgUrl = $images[$slug] ?? 'https://via.placeholder.com/150';
                        @endphp
                        <li>
                            <a href="{{ route('customer.category',$category->id) }}">
                                <div class="img-catesp cate{{ $slug }}">
                                    <img src="{{ $imgUrl }}" alt="" width="150" height="110">
                                </div>
                                <span>{{ $category->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                @foreach ($categories as $category)
                    <div class="box-slide">
                        <a href="{{ route('customer.category',$category->id) }}" class="logo-cate  ">
                            <i class="topzone-iconapple"></i>
                            <h2 class="title-text">{{ $category->name }}</h2>
                        </a>
                        <div class="slide-cate owl-carousel owl-theme" data-block="iPhone">
                            @foreach ($category->products as $product)
                                <div class="item" data-pos="1" data-block="iPhone">

                                    <a href="{{ route('customer.product_detail', ['id' => $product->id]) }}"  class="main-contain">
                                    
                                        <label>M&#x1EDB;i</label>
                                        <div class="img-slide">
                                            <img data-src="{{ asset($product->image) }}"
                                                class="lazyload" alt="iPhone 16e 128GB" width=300 height=300>
                                        </div>
                                        <h3>{{ $product->name }}</h3>
                                        <span class="box-price">
                                            {{ number_format($product->sale_price, 0, '', '.') }}&#x20AB;
                                            <strike>{{ number_format($product->base_price, 0, '', '.') }}&#x20AB;</strike>
                                            <small>-{{ (int) str_replace(',', '', (100-($product->sale_price/$product->base_price*100))) }}%</small>
                                        </span>
                                        <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="intro-topzone">
            <p>
                Tại NTPhone, khách hàng yêu mến hệ sinh thái Apple sẽ tìm thấy đầy đủ và đa dạng nhất các sản phẩm như
                iPhone, iPad, Apple Watch, MacBook và các phụ kiện Apple... với không gian mua sắm đẳng cấp, hiện đại.
            </p>
        </div>
        <div class="policy">
            <ul class="pr-policy">
                <li>
                    <i class="topzone-homeDiver  "></i>
                    <span>Mẫu mã đa dạng, <br />chính hãng</span>
                </li>
                <li>
                    <i class="topzone-homeDeli  "></i>
                    <span>Giao hàng toàn quốc</span>
                </li>
                <li>
                    <i class="topzone-homeInsur  "></i>
                    <span>Bảo hành có cam kết <br />tới 12 tháng</span>
                </li>
            </ul>
        </div>
    </div>
</section>
<div class="slide-popup">
    <div class="bg-popup"></div>

</div>
@include('layouts.customer.footer')
