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
                            <a href="/{{ $slug }}">
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
                        <a href="iphone" class="logo-cate  ">
                            <i class="topzone-iconapple"></i>
                            <h2 class="title-text">{{ $category->name }}</h2>
                        </a>
                        <div class="slide-cate owl-carousel owl-theme" data-block="iPhone">
                            @foreach ($category->products as $product)
                                <div class="item" data-pos="1" data-block="iPhone">
                                    <a href="{{ route('customer.product_detail',$product->id) }}" class="main-contain">
                                        <label>M&#x1EDB;i</label>
                                        <div class="img-slide">
                                            <img data-src="{{ asset($product->image) }}"
                                                class="lazyload" alt="iPhone 16e 128GB" width=300 height=300>
                                        </div>
                                        <h3>{{ $product->name }}</h3>
                                        {{-- <span class="box-price">
                                            {{ number_format($product->price, 0, '', '.') }}&#x20AB;
                                            <strike>{{ number_format($product->origin_price, 0, '', '.') }}&#x20AB;</strike>
                                            <small>-{{ (int) str_replace(',', '', (100-($product->price/$product->base_price*100))) }}%</small>
                                        </span> --}}
                                        <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="box-slide">
                <a href="/tekzone" class="logo-cate ">
                    <h2>TekZone</h2>
                </a>
                <div class="slide-topnews owl-carousel owl-theme" data-block="TekZone">
                    <div class="item">
                        <a href="/tekzone/macbook-pro-m4-gia-chi-tu-39-690-000-dong-mua-tra-cham-0-lai-suat-1575893">
                            <div class="img-slide">
                                <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/News/Thumb/1575893/2638775570444540194.jpg"
                                    alt="MacBook Pro M4 gi&#xE1; ch&#x1EC9; t&#x1EEB; 39.690.000 &#x111;&#x1ED3;ng, mua tr&#x1EA3; ch&#x1EAD;m 0% l&#xE3;i su&#x1EA5;t, tr&#x1EA3; tr&#x1B0;&#x1EDB;c t&#x1EEB; 30%"
                                    class="lazyload" width="376" height="150">
                            </div>
                            <h3>MacBook Pro M4 gi&#xE1; ch&#x1EC9; t&#x1EEB; 39.690.000 &#x111;&#x1ED3;ng, mua
                                tr&#x1EA3; ch&#x1EAD;m 0% l&#xE3;i su&#x1EA5;t, tr&#x1EA3; tr&#x1B0;&#x1EDB;c t&#x1EEB;
                                30%</h3>
                            <span class="timepost">1 ng&#xE0;y tr&#x1B0;&#x1EDB;c</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/tekzone/iphone-13-series-gia-chi-tu-12-590-000-dong-mua-tra-cham-0-lai-suat-1575884">
                            <div class="img-slide">
                                <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/News/Thumb/1575884/3638775457808726115.jpg"
                                    alt="iPhone 13 Series gi&#xE1; ch&#x1EC9; t&#x1EEB; 12.590.000 &#x111;&#x1ED3;ng, mua tr&#x1EA3; ch&#x1EAD;m 0% l&#xE3;i su&#x1EA5;t, tr&#x1EA3; tr&#x1B0;&#x1EDB;c t&#x1EEB; 30%"
                                    class="lazyload" width="376" height="150">
                            </div>
                            <h3>iPhone 13 Series gi&#xE1; ch&#x1EC9; t&#x1EEB; 12.590.000 &#x111;&#x1ED3;ng, mua
                                tr&#x1EA3; ch&#x1EAD;m 0% l&#xE3;i su&#x1EA5;t, tr&#x1EA3; tr&#x1B0;&#x1EDB;c t&#x1EEB;
                                30%</h3>
                            <span class="timepost">2 ng&#xE0;y tr&#x1B0;&#x1EDB;c</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/tekzone/cach-bat-tuong-lua-tren-macbook-1575850">
                            <div class="img-slide">
                                <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/News/Thumb/1575850/5638774618726212246.jpg"
                                    alt="T&#x1B0;&#x1EDD;ng l&#x1EED;a MacBook: L&#xE1; ch&#x1EAF;n v&#x1EEF;ng ch&#x1EAF;c ch&#x1ED1;ng l&#x1EA1;i c&#xE1;c m&#x1ED1;i &#x111;e d&#x1ECD;a tr&#x1EF1;c tuy&#x1EBF;n - H&#x1B0;&#x1EDB;ng d&#x1EAB;n b&#x1EAD;t v&#xE0; t&#xF9;y ch&#x1EC9;nh"
                                    class="lazyload" width="376" height="150">
                            </div>
                            <h3>T&#x1B0;&#x1EDD;ng l&#x1EED;a MacBook: L&#xE1; ch&#x1EAF;n v&#x1EEF;ng ch&#x1EAF;c
                                ch&#x1ED1;ng l&#x1EA1;i c&#xE1;c m&#x1ED1;i &#x111;e d&#x1ECD;a tr&#x1EF1;c tuy&#x1EBF;n
                                - H&#x1B0;&#x1EDB;ng d&#x1EAB;n b&#x1EAD;t v&#xE0; t&#xF9;y ch&#x1EC9;nh</h3>
                            <span class="timepost">2 ng&#xE0;y tr&#x1B0;&#x1EDB;c</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/tekzone/ipad-10-wifi-64gb-gia-chi-tu-9-690-000-dong-mua-tra-cham-0-lai-suat-1575847">
                            <div class="img-slide">
                                <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/News/Thumb/1575847/3638774585783518277.jpg"
                                    alt="iPad 10 WiFi 64GB gi&#xE1; ch&#x1EC9; t&#x1EEB; 9.690.000 &#x111;&#x1ED3;ng, mua tr&#x1EA3; ch&#x1EAD;m 0% l&#xE3;i su&#x1EA5;t, tr&#x1EA3; tr&#x1B0;&#x1EDB;c t&#x1EEB; 20% t&#x1EA1;i TopZone"
                                    class="lazyload" width="376" height="150">
                            </div>
                            <h3>iPad 10 WiFi 64GB gi&#xE1; ch&#x1EC9; t&#x1EEB; 9.690.000 &#x111;&#x1ED3;ng, mua
                                tr&#x1EA3; ch&#x1EAD;m 0% l&#xE3;i su&#x1EA5;t, tr&#x1EA3; tr&#x1B0;&#x1EDB;c t&#x1EEB;
                                20% t&#x1EA1;i TopZone</h3>
                            <span class="timepost">3 ng&#xE0;y tr&#x1B0;&#x1EDB;c</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/tekzone/code-the-hunt-mega-edition-1575913">
                            <div class="img-slide">
                                <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/News/Thumb/1575913/4638776322294072392.jpg"
                                    alt="Code The Hunt: Mega Edition m&#x1EDB;i nh&#x1EA5;t th&#xE1;ng 03/2025 c&#x1EAD;p nh&#x1EAD;t li&#xEA;n t&#x1EE5;c, nh&#x1EAD;n ph&#x1EE5; ki&#x1EC7;n Cactrot"
                                    class="lazyload" width="376" height="150">
                            </div>
                            <h3>Code The Hunt: Mega Edition m&#x1EDB;i nh&#x1EA5;t th&#xE1;ng 03/2025 c&#x1EAD;p
                                nh&#x1EAD;t li&#xEA;n t&#x1EE5;c, nh&#x1EAD;n ph&#x1EE5; ki&#x1EC7;n Cactrot</h3>
                            <span class="timepost">3 ng&#xE0;y tr&#x1B0;&#x1EDB;c</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/tekzone/macbook-air-m3-gia-chi-tu-27-290-000-dong-mua-tra-cham-0-lai-suat-1575806">
                            <div class="img-slide">
                                <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/News/Thumb/1575806/3638773731589028217.jpg"
                                    alt="MacBook Air M3 gi&#xE1; ch&#x1EC9; t&#x1EEB; 27.290.000 &#x111;&#x1ED3;ng, mua tr&#x1EA3; ch&#x1EAD;m 0% l&#xE3;i su&#x1EA5;t, tr&#x1EA3; tr&#x1B0;&#x1EDB;c t&#x1EEB; 20%"
                                    class="lazyload" width="376" height="150">
                            </div>
                            <h3>MacBook Air M3 gi&#xE1; ch&#x1EC9; t&#x1EEB; 27.290.000 &#x111;&#x1ED3;ng, mua
                                tr&#x1EA3; ch&#x1EAD;m 0% l&#xE3;i su&#x1EA5;t, tr&#x1EA3; tr&#x1B0;&#x1EDB;c t&#x1EEB;
                                20%</h3>
                            <span class="timepost">4 ng&#xE0;y tr&#x1B0;&#x1EDB;c</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/tekzone/phim-tat-tren-trinh-duyet-1575886">
                            <div class="img-slide">
                                <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/News/Thumb/1575886/2638775481973823022.jpg"
                                    alt="B&#xED; m&#x1EAD;t &#x111;&#x1ED9;t ph&#xE1; n&#x103;ng su&#x1EA5;t: L&#xE0;m ch&#x1EE7; tr&#xEC;nh duy&#x1EC7;t v&#x1EDB;i nh&#x1EEF;ng ph&#xED;m t&#x1EAF;t si&#xEA;u t&#x1ED1;c m&#xE0; 99% ng&#x1B0;&#x1EDD;i d&#xF9;ng kh&#xF4;ng bi&#x1EBF;t"
                                    class="lazyload" width="376" height="150">
                            </div>
                            <h3>B&#xED; m&#x1EAD;t &#x111;&#x1ED9;t ph&#xE1; n&#x103;ng su&#x1EA5;t: L&#xE0;m ch&#x1EE7;
                                tr&#xEC;nh duy&#x1EC7;t v&#x1EDB;i nh&#x1EEF;ng ph&#xED;m t&#x1EAF;t si&#xEA;u
                                t&#x1ED1;c m&#xE0; 99% ng&#x1B0;&#x1EDD;i d&#xF9;ng kh&#xF4;ng bi&#x1EBF;t</h3>
                            <span class="timepost">4 ng&#xE0;y tr&#x1B0;&#x1EDB;c</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/tekzone/don-vi-do-luong-tren-may-tinh-1575900">
                            <div class="img-slide">
                                <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/News/Thumb/1575900/2638775611279807040.jpg"
                                    alt="B&#xED; m&#x1EAD;t v&#x1EC1; Bit, Byte, Gigabyte v&#xE0; Terabyte: Gi&#x1EA3;i m&#xE3; th&#x1EBF; gi&#x1EDB;i &#x111;&#x1A1;n v&#x1ECB; &#x111;o l&#x1B0;&#x1EDD;ng tr&#xEA;n m&#xE1;y t&#xED;nh"
                                    class="lazyload" width="376" height="150">
                            </div>
                            <h3>B&#xED; m&#x1EAD;t v&#x1EC1; Bit, Byte, Gigabyte v&#xE0; Terabyte: Gi&#x1EA3;i m&#xE3;
                                th&#x1EBF; gi&#x1EDB;i &#x111;&#x1A1;n v&#x1ECB; &#x111;o l&#x1B0;&#x1EDD;ng tr&#xEA;n
                                m&#xE1;y t&#xED;nh</h3>
                            <span class="timepost">4 ng&#xE0;y tr&#x1B0;&#x1EDB;c</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/tekzone/apple-ra-mat-macbook-air-m4-mac-studio-m4-max-va-m3-ultra-1575676">
                            <div class="img-slide">
                                <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/News/Thumb/1575676/2638769511148429725.jpg"
                                    alt="Apple ra m&#x1EAF;t MacBook Air M4, Mac Studio M4 Max v&#xE0; M3 Ultra m&#x1EA1;nh m&#x1EBD; nh&#x1EA5;t t&#x1EEB; tr&#x1B0;&#x1EDB;c &#x111;&#x1EBF;n nay"
                                    class="lazyload" width="376" height="150">
                            </div>
                            <h3>Apple ra m&#x1EAF;t MacBook Air M4, Mac Studio M4 Max v&#xE0; M3 Ultra m&#x1EA1;nh
                                m&#x1EBD; nh&#x1EA5;t t&#x1EEB; tr&#x1B0;&#x1EDB;c &#x111;&#x1EBF;n nay</h3>
                            <span class="timepost">4 ng&#xE0;y tr&#x1B0;&#x1EDB;c</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-topzone">
            <div class="video-topzone">
                <div class="warpper-video">
                    <video width="854" controls muted loop playsinline>
                        <source src="https://cdnv2.tgdd.vn/webmwg/2024/tz/video/Gt-Topzone.mp4" type="video/mp4">
                    </video>
                    <div class="gradient-bg"></div>
                    <img class="logov-topzone" src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/logo-video.png?v=4">
                </div>
            </div>
            <p>
                Tại TopZone, khách hàng yêu mến hệ sinh thái Apple sẽ tìm thấy đầy đủ và đa dạng nhất các sản phẩm như
                iPhone, iPad, Apple Watch, MacBook và các phụ kiện Apple... với không gian mua sắm đẳng cấp, hiện đại.
            </p>
            <a href="/gioi-thieu" target="_blank">Đọc thêm</a>
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
                <li>
                    <i class="topzone-homeReturn  "></i>
                    <span>Có thể đổi trả tại <br>Thegioididong và DienmayXANH</span>
                </li>
            </ul>
        </div>
    </div>
</section>
<div class="slide-popup">
    <div class="bg-popup"></div>

</div>
@include('layouts.customer.footer')
