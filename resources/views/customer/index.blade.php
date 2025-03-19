@include('layouts.customer.header')
<div class="bg-sg"></div>
<section>

<<<<<<< HEAD
                                            </div>


                                        </div>
                                    </div>
                                    <a href="{{ route('customer.category', $category->id) }}"
                                        title="{{ $category->name }}">
                                        <h3>
                                            {{ $category->name }}
                                            <span> </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </h3>
                                    </a>

                                </div>
                            @endforeach










                        </div>
                        <div class="swiper-button-next">
                        </div>
                        <div class="swiper-button-prev">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiperdanhmuc2 = new Swiper('.danhmuc2-slider', {
                slidesPerView: 2,
                loop: false,
                grabCursor: true,
                roundLengths: true,
                slideToClickedSlide: false,
                spaceBetween: 10,
                autoplay: false,
                navigation: {
                    nextEl: '.section_danhmuc2 .swiper-button-next',
                    prevEl: '.section_danhmuc2 .swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1,
                    },
                    500: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    991: {
                        slidesPerView: 3,
                    },
                    1200: {
                        slidesPerView: 4,
                    }
                }
            });
        </script>
        <section class="section_1_banner">
            <div class="container">
                <a class="thumb-image-banner" href="https://www.hoangkien.com/iphone-16-16plus-16pro-16promax"
                    title="Banner">
                    <img width="100%" height="236" class="lazyload"
                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                        data-src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/banner.jpg?1741067950025"
                        alt="Banner">
=======
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
    {{-- <section>
        <div class="slide-home owl-carousel owl-theme">
            @foreach ($banners as $banner)
                <a aria-label="slide" href="{{ $banner->link ?? '#' }}"
                    onclick="jQuery.ajax({ url: '/bannertracking?bid={{ $banner->id }}&r=' + (new Date).getTime(), async: true, cache: false });">
                    <img width="1920" height="120" src="{{ asset($banner->image) }}" alt="{{ $banner->title }}">
>>>>>>> ebadd290b9701eb91b109ea87b4e2da59907a251
                </a>
            @endforeach
        </div>
    </section> --}}

<<<<<<< HEAD
                                <div class="product1-swiper swiper-container p-5">
                                    <div class="swiper-wrapper">
                                        @foreach ($category->latestProducts as $product)
                                            <div class="swiper-slide swiper-slide-pro">
                                                <form action="/cart/add" method="post"
                                                    class="variants product-action" data-cart-form
                                                    data-id="product-actions-41332974" enctype="multipart/form-data">
                                                    <div class="product-thumbnail">
                                                    <a class="image_thumb scale_hover" href="{{ route('customer.product_detail', $product->id) }}" title="{{ $product->name }}">

                                                            <img width="234px" height="234px"
                                                                class=""
                                                                src="{{ $product->image }}"
                                                                alt="{{ $product->name }}">
                                                        </a>
                                                        <div class="tag-km">
                                                        </div>
                                                        <input class="hidden" type="hidden" name="variantId"
                                                            value="137429602" />
                                                        <div class="action">
                                                            <button class="btn-cart btn-views" title="Xem chi tiết"
                                                                type="button"
                                                                onclick="window.location.href='#'">
                                                                <svg class="icon">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xlink:href="#icon-detail"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                                href="{{ route('customer.product_detail', $product->id) }}"
                                                                title="#">{{ $product->name }}
                                                            </a></h3>
                                                        <div class="price-box">
                                                            {{ $product->base_price }}
                                                        </div>
                                                        <div class="wishlish-compare">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        @endforeach
                                        <div class="text-center no-padding">
                                            <a class="see-more" title="Xem toàn bộ sản phẩm" href="dien-thoai">Xem
                                                toàn bộ
                                                sản phẩm </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        @endforeach
        <script>
            var swiperflash = new Swiper('.product1-swiper', {
                slidesPerView: 3,
                loop: false,
                grabCursor: true,
                roundLengths: true,
                slideToClickedSlide: false,
                spaceBetween: 20,
                autoplay: false,
                navigation: {
                    nextEl: '.product1-swiper .swiper-button-next',
                    prevEl: '.product1-swiper .swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1,
                        spaceBetween: 15,
                    },
                    450: {
                        slidesPerView: 2,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    767: {
                        slidesPerView: 3,
                        spaceBetween: 15
                    },
                    991: {
                        slidesPerView: 3,
                        spaceBetween: 15
                    },
                    1200: {
                        slidesPerView: 5,
                        spaceBetween: 20
                    }
                }
            });
        </script>
        <section class="section_1_banner">
            <div class="container">
                <a class="thumb-image-banner" href="https://www.hoangkien.com/chinh-sach-bao-hanh-12-thang-1-doi-1"
                    title="Banner">
                    <img width="100%" height="236" class="lazyload"
                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                        data-src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/banner2.jpg?1741067950025"
                        alt="Banner">
                </a>
=======
    <div class="main">


        <div class=" flashsale-block" id="flashsale">
            <div class="stage-two">
                <div class="load"></div>
>>>>>>> ebadd290b9701eb91b109ea87b4e2da59907a251
            </div>
            <div class="flex-fs">
                <div class="gvdshock">
                    <h3>
                        <i class="lightning-ic">
                            <img width="32" height="70"
                                src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/icon-fs.png" alt="lightningicon" />
                        </i>
                    </h3>
                    <div class="endtime" data-countdown="3/16/2025 11:59:00 PM" data-begin="3/16/2025 8:00:00 AM">
                        <span class="title-end">Kết thúc trong</span>
                        <span class="countdown-timer calling">
                            <label id="hour">00</label>
                            <label id="minute">00</label>
                            <label id="second">00</label>
                        </span>
                    </div>
                </div>
                <div class="listing-timeline">
                    <a href="javascript:;" class="active" data-ishappening="true"
                        data-productlist="315057,315069,293543,295452,325503,332448,331986,318238,320977,325308,329153,329704,315998,316001,331568,325164,325505,325524,325307,325521,325522,331404,314696,315995,331230,331232,326662,330192,329937,329750,315611,331976,325340,314738,298454,331291">
                        <span>Đang diễn ra</span>
                        <span class="timeline">08:00 - 23:59</span>
                    </a>
                </div>
            </div>
            <div class="box-scroll">
                <div class="listproduct slider-flashsale owl-carousel" data-size="36">

                    <div class="item" data-id="315057" data-pos="1">
                        <a href='/op-lung-iphone/op-lung-magsafe-iphone-15-pro-vai-tinh-det-apple-mt4h3?utm_flashsale=1'
                            data-crm="1986989" class="remain_quantity main-contain" data-s="TwoPriceDetailCMS"
                            data-site="16" data-pro="3" data-cache="True"
                            data-name="&#x1ED0;p l&#x1B0;ng Magsafe cho iPhone 15 Pro V&#x1EA3;i Tinh D&#x1EC7;t Apple"
                            data-id="315057" data-price="390000.0" data-brand="Apple"
                            data-cate="&#x1ED0;p l&#x1B0;ng, v&#xED; da iPhone" data-box="BoxHomeFlashsale"
                            data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/60/315057/s16/op-lung-magsafe-iphone-15-pro-vai-tinh-det-apple-mt4h3-xanh-dam-(thumb)-650x650.png"
                                    class="lazyload"
                                    alt="&#x1ED0;p l&#x1B0;ng Magsafe cho iPhone 15 Pro V&#x1EA3;i Tinh D&#x1EC7;t Apple"
                                    width=207 height=207>
                            </div>
                            <h3>Ốp lưng Magsafe cho iPhone 15 Pro Vải Tinh Dệt Apple</h3>
                            <strong class="price">
                                390.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        790.000&#x20AB;
                                    </label>
                                    <small>-50%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 10/10</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="315069" data-pos="2">
                        <a href='/op-lung-iphone/op-lung-magsafe-iphone-15-pro-max-vai-tinh-det-apple-mt4w3?utm_flashsale=1'
                            data-crm="1986990" class="remain_quantity main-contain" data-s="TwoPriceDetailCMS"
                            data-site="16" data-pro="3" data-cache="True"
                            data-name="&#x1ED0;p l&#x1B0;ng Magsafe cho iPhone 15 Pro Max V&#x1EA3;i tinh d&#x1EC7;t Apple"
                            data-id="315069" data-price="590000.0" data-brand="Apple"
                            data-cate="&#x1ED0;p l&#x1B0;ng, v&#xED; da iPhone" data-box="BoxHomeFlashsale"
                            data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/60/315069/s16/op-lung-magsafe-iphone-15-pro-max-vai-tinh-det-apple-mt4w3-xanh-dam-thumb-650x650.png"
                                    class="lazyload"
                                    alt="&#x1ED0;p l&#x1B0;ng Magsafe cho iPhone 15 Pro Max V&#x1EA3;i tinh d&#x1EC7;t Apple"
                                    width=207 height=207>
                            </div>
                            <h3>Ốp lưng Magsafe cho iPhone 15 Pro Max Vải tinh dệt Apple</h3>
                            <strong class="price">
                                590.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        1.090.000&#x20AB;
                                    </label>
                                    <small>-45%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 10/10</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="293543" data-pos="3">
                        <a href='/ipad/ipad-10?utm_flashsale=1' data-crm="1986991"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="iPad 10 WiFi 256GB" data-id="293543"
                            data-price="13490000.0" data-brand="iPad (Apple)" data-cate="iPad"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/522/293543/s16/iPad-gen-10-pink-1-650x650.png"
                                    class="lazyload" alt="iPad 10 WiFi 256GB" width=207 height=207>
                            </div>
                            <h3>iPad 10 WiFi 256GB</h3>
                            <strong class="price">
                                13.490.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        15.390.000&#x20AB;
                                    </label>
                                    <small>-12%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 5/5</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="295452" data-pos="4">
                        <a href='/ipad/ipad-10-wifi-cellular-256gb?utm_flashsale=1' data-crm="1986992"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="iPad 10 5G" data-id="295452"
                            data-price="16090000.0" data-brand="iPad (Apple)" data-cate="iPad"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/522/295452/s16/iPad-gen-10-5G-sliver-thumb-1-650x650.png"
                                    class="lazyload" alt="iPad 10 5G 256GB" width=207 height=207>
                            </div>
                            <h3>iPad 10 5G 256GB</h3>
                            <strong class="price">
                                16.090.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        20.490.000&#x20AB;
                                    </label>
                                    <small>-21%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 5/5</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="325503" data-pos="5">
                        <a href='/ipad/ipad-air-m2-11-inch-wifi-512gb?utm_flashsale=1' data-crm="1986993"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="iPad Air 6 M2 11 inch WiFi" data-id="325503"
                            data-price="21990000.0" data-brand="iPad (Apple)" data-cate="iPad"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/522/325503/s16/ipad-air-m2-11-inch-wifi-blue-thumb-650x650.png"
                                    class="lazyload" alt="iPad Air 6 M2 11 inch WiFi 512GB" width=207 height=207>
                            </div>
                            <h3>iPad Air 6 M2 11 inch WiFi 512GB</h3>
                            <strong class="price">
                                21.990.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        24.990.000&#x20AB;
                                    </label>
                                    <small>-12%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 5/5</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="332448" data-pos="6">
                        <a href='/mac/macbook-pro-14-nano-m4-16-512?utm_flashsale=1' data-crm="1987018"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="MacBook Pro 14 inch Nano M4 16GB/512GB"
                            data-id="332448" data-price="41990000.0" data-brand="MacBook" data-cate="MacBook"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/44/332448/s16/macbook-pro-14-nano-m4-16-512-topzone-den-650x650.png"
                                    class="lazyload" alt="MacBook Pro 14 inch Nano M4 16GB/512GB" width=207
                                    height=207>
                            </div>
                            <h3>MacBook Pro 14 inch Nano M4 16GB/512GB</h3>
                            <strong class="price">
                                41.990.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        43.790.000&#x20AB;
                                    </label>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 3/3</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="331986" data-pos="7">
                        <a href='/mac/macbook-air-13-m2-24gb-512gb?utm_flashsale=1' data-crm="1987019"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="Macbook Air 13 M2 24GB/512GB"
                            data-id="331986" data-price="31990000.0" data-brand="MacBook" data-cate="MacBook"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/44/331986/s16/Mac-Air-13-M2-bac-1-650x650.png"
                                    class="lazyload" alt="Macbook Air 13 M2 24GB/512GB" width=207 height=207>
                            </div>
                            <h3>Macbook Air 13 M2 24GB/512GB</h3>
                            <strong class="price">
                                31.990.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        34.990.000&#x20AB;
                                    </label>
                                    <small>-8%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 3/3</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="318238" data-pos="8">
                        <a href='/mac/imac-24-inch-2023-4-5k-m3-8-core-gpu?utm_flashsale=1' data-crm="1987011"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="iMac 24 inch M3" data-id="318238"
                            data-price="27990000.0" data-brand="Apple" data-cate="iMac, Mac mini"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/5698/318238/s16/imac-m3-blue-thumb-650x650.png"
                                    class="lazyload" alt="iMac 24 inch M3 8GB/256GB" width=207 height=207>
                            </div>
                            <h3>iMac 24 inch M3 8GB/256GB</h3>
                            <strong class="price">
                                27.990.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        36.990.000&#x20AB;
                                    </label>
                                    <small>-24%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 2/2</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="320977" data-pos="9">
                        <a href='/mac/imac-24-inch-2023-4-5k-m3-16gb?utm_flashsale=1' data-crm="1987012"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="iMac 24 inch M3" data-id="320977"
                            data-price="30990000.0" data-brand="Apple" data-cate="iMac, Mac mini"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/5698/320977/s16/imac-m3-pink-thumb-650x650.png"
                                    class="lazyload" alt="iMac 24 inch M3 16GB/256GB" width=207 height=207>
                            </div>
                            <h3>iMac 24 inch M3 16GB/256GB</h3>
                            <strong class="price">
                                30.990.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        41.990.000&#x20AB;
                                    </label>
                                    <small>-26%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 1/1</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="325308" data-pos="10">
                        <a href='/mac/imac-24-inch-m3-16gb-512gb?utm_flashsale=1' data-crm="1987013"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="iMac 24 inch M3" data-id="325308"
                            data-price="33990000.0" data-brand="Apple" data-cate="iMac, Mac mini"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/5698/325308/s16/imac-24-inch-m3-16gb-512gb-thumb-pink-650x650.png"
                                    class="lazyload" alt="iMac 24 inch M3 16GB/512GB" width=207 height=207>
                            </div>
                            <h3>iMac 24 inch M3 16GB/512GB</h3>
                            <strong class="price">
                                33.990.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        46.990.000&#x20AB;
                                    </label>
                                    <small>-27%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 1/1</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="329153" data-pos="11">
                        <a href='/apple-watch/apple-watch-s10?utm_flashsale=1' data-crm="1987001"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True"
                            data-name="Apple Watch Series 10 42mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                            data-id="329153" data-price="10190000.0" data-brand="Apple" data-cate="Watch"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/7077/329153/s16/apple-watch-s10-den-tb-650x650.png"
                                    class="lazyload"
                                    alt="Apple Watch Series 10 42mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                    width=207 height=207>
                            </div>
                            <h3>Apple Watch Series 10 42mm viền nhôm dây thể thao</h3>
                            <strong class="price">
                                10.190.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        10.990.000&#x20AB;
                                    </label>
                                    <small>-7%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 5/5</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="329704" data-pos="12">
                        <a href='/apple-watch/apple-watch-series-10-42mm-day-vai?utm_flashsale=1' data-crm="1987002"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True"
                            data-name="Apple Watch Series 10 42mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                            data-id="329704" data-price="10190000.0" data-brand="Apple" data-cate="Watch"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/7077/329704/s16/apple-watch-series-10-lte-42mm-day-vai-den-tb-650x650.png"
                                    class="lazyload"
                                    alt="Apple Watch Series 10 42mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                    width=207 height=207>
                            </div>
                            <h3>Apple Watch Series 10 42mm viền nhôm dây vải</h3>
                            <strong class="price">
                                10.190.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        10.990.000&#x20AB;
                                    </label>
                                    <small>-7%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 5/5</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="315998" data-pos="13">
                        <a href='/apple-watch/apple-watch-series-9-gps-41mm-sport-loop?utm_flashsale=1'
                            data-crm="1987003" class="remain_quantity main-contain" data-s="TwoPriceDetailCMS"
                            data-site="16" data-pro="3" data-cache="True"
                            data-name="Apple Watch Series 9 GPS 41mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                            data-id="315998" data-price="7290000.0" data-brand="Apple" data-cate="Watch"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/7077/315998/s16/apple-watch-s9-vien-nhom-day-vai-xanh-den-tb-1-1-650x650.png"
                                    class="lazyload"
                                    alt="Apple Watch Series 9 GPS 41mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                    width=207 height=207>
                            </div>
                            <h3>Apple Watch Series 9 GPS 41mm viền nhôm dây vải</h3>
                            <strong class="price">
                                7.290.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        10.490.000&#x20AB;
                                    </label>
                                    <small>-30%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:80%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 4/5</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="325505" data-pos="14">
                        <a href='/ipad/ipad-air-m2-11-inch-wifi-1tb?utm_flashsale=1' data-crm="1987009"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="iPad Air 6 M2 11 inch WiFi" data-id="325505"
                            data-price="27490000.0" data-brand="iPad (Apple)" data-cate="iPad"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/522/325505/s16/ipad-air-m2-11-inch-wifi-purple-thumb-650x650.png"
                                    class="lazyload" alt="iPad Air 6 M2 11 inch WiFi 1TB" width=207 height=207>
                            </div>
                            <h3>iPad Air 6 M2 11 inch WiFi 1TB</h3>
                            <strong class="price">
                                27.490.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        30.490.000&#x20AB;
                                    </label>
                                    <small>-9%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 5/5</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="325524" data-pos="15">
                        <a href='/ipad/ipad-air-m2-11-inch-wifi-cellular-1tb?utm_flashsale=1' data-crm="1987010"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="iPad Air 6 M2 11 inch 5G" data-id="325524"
                            data-price="31490000.0" data-brand="iPad (Apple)" data-cate="iPad"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/522/325524/s16/ipad-air-m2-11-inch-wifi-cellular-purple-thumb-650x650.png"
                                    class="lazyload" alt="iPad Air 6 M2 11 inch 5G 1TB" width=207 height=207>
                            </div>
                            <h3>iPad Air 6 M2 11 inch 5G 1TB</h3>
                            <strong class="price">
                                31.490.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        34.490.000&#x20AB;
                                    </label>
                                    <small>-8%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 5/5</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="325307" data-pos="16">
                        <a href='/mac/apple-macbook-pro-16-inch-m3-max-96gb-1tb?utm_flashsale=1' data-crm="1987017"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="MacBook Pro 16 inch M3 Max" data-id="325307"
                            data-price="96990000.0" data-brand="MacBook" data-cate="MacBook"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/44/325307/s16/apple-macbook-pro-16-inch-m3-max-96gb-1tb-030524-024759-650x650.png"
                                    class="lazyload" alt="MacBook Pro 16 inch M3 Max 96GB/1TB" width=207 height=207>
                            </div>
                            <h3>MacBook Pro 16 inch M3 Max 96GB/1TB</h3>
                            <strong class="price">
                                96.990.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        109.990.000&#x20AB;
                                    </label>
                                    <small>-11%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 1/1</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="331230" data-pos="17">
                        <a href='/ipad/ipad-mini-7-wifi-256gb?utm_flashsale=1' data-crm="1986997"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="iPad mini 7 WiFi" data-id="331230"
                            data-price="15990000.0" data-brand="iPad (Apple)" data-cate="iPad"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/522/331230/s16/ipad-mini-7-wifi-starlight-thumbtz-650x650.png"
                                    class="lazyload" alt="iPad mini 7 WiFi 256GB" width=207 height=207>
                            </div>
                            <h3>iPad mini 7 WiFi 256GB</h3>
                            <strong class="price">
                                15.990.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        16.490.000&#x20AB;
                                    </label>
                                    <small>-3%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:80%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 4/5</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="331232" data-pos="18">
                        <a href='/ipad/ipad-mini-7-5g?utm_flashsale=1' data-crm="1986998"
                            class="remain_quantity main-contain" data-s="TwoPriceDetailCMS" data-site="16"
                            data-pro="3" data-cache="True" data-name="iPad mini 7 5G" data-id="331232"
                            data-price="17290000.0" data-brand="iPad (Apple)" data-cate="iPad"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/522/331232/s16/ipad-mini-7-5g-starlight-thumbtz-650x650.png"
                                    class="lazyload" alt="iPad mini 7 5G 128GB" width=207 height=207>
                            </div>
                            <h3>iPad mini 7 5G 128GB</h3>
                            <strong class="price">
                                17.290.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        17.990.000&#x20AB;
                                    </label>
                                    <small>-3%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 5/5</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="330192" data-pos="19">
                        <a href='/op-lung-iphone/op-lung-iphone-16-pro-magclick-charging-combat-nhua-tpu-tpe-pc-uniq-stone?utm_flashsale=1'
                            data-crm="1985666" class="remain_quantity main-contain" data-s="TwoPriceDetailCMS"
                            data-site="16" data-pro="3" data-cache="True"
                            data-name="&#x1ED0;p l&#x1B0;ng MagSafe cho iPhone 16 Pro Nh&#x1EF1;a TPU TPE PC UNIQ MAGCLICK CHARGING COMBAT"
                            data-id="330192" data-price="432000.0" data-brand="UNIQ"
                            data-cate="&#x1ED0;p l&#x1B0;ng, v&#xED; da iPhone" data-box="BoxHomeFlashsale"
                            data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/60/330192/s16/op-lung-iphone-16-pro-magclick-charging-combat-nhua-tpu-tpe-pc-uniq-stone-xam-thumb-650x650.png"
                                    class="lazyload"
                                    alt="&#x1ED0;p l&#x1B0;ng MagSafe cho iPhone 16 Pro Nh&#x1EF1;a TPU TPE PC UNIQ MAGCLICK CHARGING COMBAT"
                                    width=207 height=207>
                            </div>
                            <h3>Ốp lưng MagSafe cho iPhone 16 Pro Nhựa TPU TPE PC UNIQ MAGCLICK CHARGING COMBAT</h3>
                            <strong class="price">
                                432.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        720.000&#x20AB;
                                    </label>
                                    <small>-40%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 5/5</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="329937" data-pos="20">
                        <a href='/mieng-dan-man-hinh/mieng-dan-kinh-cuong-luc-iphone-16-pro-max-jincase?utm_flashsale=1'
                            data-crm="1985692" class="remain_quantity main-contain" data-s="TwoPriceDetailCMS"
                            data-site="16" data-pro="3" data-cache="True"
                            data-name="Mi&#x1EBF;ng d&#xE1;n k&#xED;nh c&#x1B0;&#x1EDD;ng l&#x1EF1;c iPhone 16 Pro Max Jincase"
                            data-id="329937" data-price="49000.0" data-brand="Jincase"
                            data-cate="Mi&#x1EBF;ng d&#xE1;n" data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/Products/Images/1363/329937/mieng-dan-kinh-cuong-luc-iphone-16-pro-max-jincase-thumb-638621807502835868-650x650.png"
                                    class="lazyload"
                                    alt="Mi&#x1EBF;ng d&#xE1;n k&#xED;nh c&#x1B0;&#x1EDD;ng l&#x1EF1;c iPhone 16 Pro Max Jincase"
                                    width=207 height=207>
                            </div>
                            <h3>Miếng dán kính cường lực iPhone 16 Pro Max Jincase</h3>
                            <strong class="price">
                                49.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        90.000&#x20AB;
                                    </label>
                                    <small>-45%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:80%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 16/20</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="329750" data-pos="21">
                        <a href='/op-lung-iphone/op-lung-iphone-16-nhua-cung-vien-deo-laut-crystal-matter?utm_flashsale=1'
                            data-crm="1985659" class="remain_quantity main-contain" data-s="TwoPriceDetailCMS"
                            data-site="16" data-pro="3" data-cache="True"
                            data-name="&#x1ED0;p l&#x1B0;ng MagSafe cho iPhone 16 Nh&#x1EF1;a c&#x1EE9;ng vi&#x1EC1;n d&#x1EBB;o LAUT Crystal Matter"
                            data-id="329750" data-price="576000.0" data-brand="Laut"
                            data-cate="&#x1ED0;p l&#x1B0;ng, v&#xED; da iPhone" data-box="BoxHomeFlashsale"
                            data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/Products/Images/60/329750/op-lung-iphone-16-nhua-cung-vien-deo-laut-crystal-matter-thumb-638640823556387689-650x650.png"
                                    class="lazyload"
                                    alt="&#x1ED0;p l&#x1B0;ng MagSafe cho iPhone 16 Nh&#x1EF1;a c&#x1EE9;ng vi&#x1EC1;n d&#x1EBB;o LAUT Crystal Matter"
                                    width=207 height=207>
                            </div>
                            <h3>Ốp lưng MagSafe cho iPhone 16 Nhựa cứng viền dẻo LAUT Crystal Matter</h3>
                            <strong class="price">
                                576.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        960.000&#x20AB;
                                    </label>
                                    <small>-40%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 5/5</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="331976" data-pos="22">
                        <a href='/cap-sac/cap-type-c-type-c-0-9m-anker-543-nylon-bio-braided-a80e5?utm_flashsale=1'
                            data-crm="1988033" class="remain_quantity main-contain" data-s="TwoPriceDetailCMS"
                            data-site="16" data-pro="3" data-cache="True"
                            data-name="C&#xE1;p Type C - Type C 0.9m Anker 543 Nylon Bio-braided A80E5"
                            data-id="331976" data-price="130000.0" data-brand="Anker"
                            data-cate="C&#xE1;p s&#x1EA1;c" data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/58/331976/s16/cap-type-c-type-c-0-9m-anker-543-nylon-bio-braided-a80e5-den-thumb-650x650.png"
                                    class="lazyload"
                                    alt="C&#xE1;p Type C - Type C 0.9m Anker 543 Nylon Bio-braided A80E5" width=207
                                    height=207>
                            </div>
                            <h3>Cáp Type C - Type C 0.9m Anker 543 Nylon Bio-braided A80E5</h3>
                            <strong class="price">
                                130.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        210.000&#x20AB;
                                    </label>
                                    <small>-38%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:90%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 9/10</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="325340" data-pos="23">
                        <a href='/tai-nghe/tai-nghe-bluetooth-true-wireless-marshall-motif-ii-a-n-c?utm_flashsale=1'
                            data-crm="1985890" class="remain_quantity main-contain" data-s="TwoPriceDetailCMS"
                            data-site="16" data-pro="3" data-cache="True"
                            data-name="Tai nghe Bluetooth True Wireless Marshall Motif II A.N.C." data-id="325340"
                            data-price="4940000.0" data-brand="Marshall" data-cate="Tai nghe"
                            data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/54/325340/s16/tai-nghe-bluetooth-tws-marshall-motif-ii-a-n-c-1-650x650.png"
                                    class="lazyload" alt="Tai nghe Bluetooth True Wireless Marshall Motif II A.N.C."
                                    width=207 height=207>
                            </div>
                            <h3>Tai nghe Bluetooth True Wireless Marshall Motif II A.N.C.</h3>
                            <strong class="price">
                                4.940.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        5.490.000&#x20AB;
                                    </label>
                                    <small>-10%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 10/10</b>
                                </span>

                            </div>
                        </a>

                    </div>
                    <div class="item" data-id="331291" data-pos="24">
                        <a href='/sac-du-phong/pin-sac-du-phong-polymer-10000mah-type-c-pd-qc-3-0-30w-anker-zolo-a1680?utm_flashsale=1'
                            data-crm="1985894" class="remain_quantity main-contain" data-s="TwoPriceDetailCMS"
                            data-site="16" data-pro="3" data-cache="True"
                            data-name="Pin s&#x1EA1;c d&#x1EF1; ph&#xF2;ng Polymer 10000mAh Type C PD QC 3.0 30W Anker Zolo A1680 k&#xE8;m C&#xE1;p Lightning v&#xE0; Type C"
                            data-id="331291" data-price="600000.0" data-brand="Anker"
                            data-cate="S&#x1EA1;c d&#x1EF1; ph&#xF2;ng" data-box="BoxHomeFlashsale" data-pos="0">
                            <div class="item-img">
                                <img data-src="https://cdn.tgdd.vn/Products/Images/57/331291/s16/pin-sac-du-phong-polymer-10000mah-type-c-pd-qc-3-0-30w-anker-zolo-a1680-trang-thumb--650x650.png"
                                    class="lazyload"
                                    alt="Pin s&#x1EA1;c d&#x1EF1; ph&#xF2;ng Polymer 10000mAh Type C PD QC 3.0 30W Anker Zolo A1680 k&#xE8;m C&#xE1;p Lightning v&#xE0; Type C"
                                    width=207 height=207>
                            </div>
                            <h3>Pin sạc dự phòng Polymer 10000mAh Type C PD QC 3.0 30W Anker Zolo A1680 kèm Cáp
                                Lightning và Type C</h3>
                            <strong class="price">
                                600.000&#x20AB;
                                <span class="price-and-discount">
                                    <label class="price-old black">
                                        990.000&#x20AB;
                                    </label>
                                    <small>-39%</small>
                                </span>
                            </strong>

                            <div class="fs-contain">



                                <img width="15" height="15"
                                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/fs-iconfire.png"
                                    alt="icon flashsale" />
                                <span class="rq_count fscount ">
                                    <i style="width:100%;" class="fs-iconfire">
                                    </i>
                                    <b>Còn 10/10</b>
                                </span>

                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <div class="warpper-box-product ">
            <div class="box-cate-product ">


                {{-- <ul class="choose-cate  ">
                    <li>
                        <a href="/iphone">
                            <div class="img-catesp cateiphone">
                                <img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/IP_Desk.png"
                                    alt="" width="102" height="112">
                            </div>
                            <span>iPhone</span>
                        </a>
                    </li>
                    <li>
                        <a href="/mac">
                            <div class="img-catesp catemac">
                                <img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Mac_Desk.png"
                                    alt="" width="150" height="97">
                            </div>
                            <span>Mac</span>
                        </a>
                    </li>
                    <li>
                        <a href="/ipad">
                            <div class="img-catesp cateipad">
                                <img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Ipad_Desk.png"
                                    alt="" width="116" height="102">
                            </div>
                            <span>iPad</span>
                        </a>
                    </li>
                    <li>
                        <a href="/apple-watch">
                            <div class="img-catesp catewatch">
                                <img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Watch_Desk.png"
                                    alt="" width="169" height="110">
                            </div>
                            <span>Watch</span>
                        </a>
                    </li>
                    <li>
                        <a href="/am-thanh">
                            <div class="img-catesp cateisound">
                                <img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Speaker_Desk.png"
                                    alt="" width="169" height="124">
                            </div>
                            <span>Tai nghe, loa</span>
                        </a>
                    </li>
                    <li>
                        <a href="/phu-kien">
                            <div class="img-catesp catephukien">
                                <img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Phukien_Desk.png"
                                    alt="" width="71" height="100">
                            </div>
                            <span>Phụ kiện</span>
                        </a>
                    </li>
                </ul> --}}

                @php
                    $images = [
                        'iphone' => 'https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/IP_Desk.png',
                        'samsung' => 'https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Mac_Desk.png',
                        'oppo' => 'https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Ipad_Desk.png',
                        'xiaomi' => 'https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Watch_Desk.png',
                        // 'am-thanh' => 'https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Speaker_Desk.png',
                        // 'phu-kien' => 'https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Phukien_Desk.png',
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

                <div class="box-slide">
                    <a href="iphone" class="logo-cate  ">
                        <i class="topzone-iconapple"></i>
                        <h2 class="title-text">iPhone</h2>
                    </a>
                    <div class="slide-cate owl-carousel owl-theme" data-block="iPhone">
                        <div class="item" data-pos="1" data-block="iPhone">

                            <a href="/iphone/iphone-16e" class="main-contain" data-s="TwoPriceDetail" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPhone 16e 128GB" data-id="334864"
                                data-price="16490000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                data-box="BoxHome">
                                <label>M&#x1EDB;i</label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/334864/s16/iphone-16e-black-thumbtz-650x650.png"
                                        class="lazyload" alt="iPhone 16e 128GB" width=300 height=300>
                                </div>
                                <h3>iPhone 16e 128GB</h3>
                                <span class="box-price">
                                    16.490.000&#x20AB;
                                    <strike>16.990.000&#x20AB;</strike>
                                    <small>-2%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="2" data-block="iPhone">

                            <a href="/iphone/iphone-16-pro" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPhone 16 Pro 128GB" data-id="329143"
                                data-price="25690000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/329143/s16/iphone-16-pro-tu-nhien-650x650.png"
                                        class="lazyload" alt="iPhone 16 Pro 128GB" width=300 height=300>
                                </div>
                                <h3>iPhone 16 Pro 128GB</h3>
                                <span class="box-price">
                                    25.690.000&#x20AB;
                                    <strike>28.990.000&#x20AB;</strike>
                                    <small>-11%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="3" data-block="iPhone">

                            <a href="/iphone/iphone-16-pro-max" class="main-contain" data-s="TwoPriceDetail"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPhone 16 Pro Max 256GB"
                                data-id="329149" data-price="31290000.0" data-brand="iPhone (Apple)"
                                data-cate="iPhone" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/329149/s16/iphone-16-pro-max-titan-sa-mac-thumbnew-650x650.png"
                                        class="lazyload" alt="iPhone 16 Pro Max 256GB" width=300 height=300>
                                </div>
                                <h3>iPhone 16 Pro Max 256GB</h3>
                                <span class="box-price">
                                    31.290.000&#x20AB;
                                    <strike>34.990.000&#x20AB;</strike>
                                    <small>-10%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="4" data-block="iPhone">

                            <a href="/iphone/iphone-16-plus" class="main-contain" data-s="TwoPriceDetail"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPhone 16 Plus 128GB"
                                data-id="329138" data-price="22590000.0" data-brand="iPhone (Apple)"
                                data-cate="iPhone" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/329138/s16/iphone-16-pink-thumbnew-650x650.png"
                                        class="lazyload" alt="iPhone 16 Plus 128GB" width=300 height=300>
                                </div>
                                <h3>iPhone 16 Plus 128GB</h3>
                                <span class="box-price">
                                    22.590.000&#x20AB;
                                    <strike>25.990.000&#x20AB;</strike>
                                    <small>-13%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="5" data-block="iPhone">

                            <a href="/iphone/iphone-16" class="main-contain" data-s="TwoPriceDetail"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPhone 16 128GB"
                                data-id="329135" data-price="19590000.0" data-brand="iPhone (Apple)"
                                data-cate="iPhone" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/329135/s16/iphone-16-xanh-la-650x650.png"
                                        class="lazyload" alt="iPhone 16 128GB" width=300 height=300>
                                </div>
                                <h3>iPhone 16 128GB</h3>
                                <span class="box-price">
                                    19.590.000&#x20AB;
                                    <strike>22.990.000&#x20AB;</strike>
                                    <small>-14%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="6" data-block="iPhone">

                            <a href="/iphone/iphone-15" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPhone 15" data-id="281570"
                                data-price="15990000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/281570/s16/iphone-15-pink-1-2-650x650.png"
                                        class="lazyload" alt="iPhone 15 128GB" width=300 height=300>
                                </div>
                                <h3>iPhone 15 128GB</h3>
                                <span class="box-price">
                                    15.990.000&#x20AB;
                                    <strike>19.990.000&#x20AB;</strike>
                                    <small>-20%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="7" data-block="iPhone">

                            <a href="/iphone/iphone-15-pro-max" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPhone 15 Pro Max"
                                data-id="305658" data-price="29990000.0" data-brand="iPhone (Apple)"
                                data-cate="iPhone" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/305658/s16/iphone-15-pro-max-black-1-2-650x650.png"
                                        class="lazyload" alt="iPhone 15 Pro Max 256GB" width=300 height=300>
                                </div>
                                <h3>iPhone 15 Pro Max 256GB</h3>
                                <span class="box-price">
                                    29.990.000&#x20AB;
                                    <strike>30.990.000&#x20AB;</strike>
                                    <small>-3%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="8" data-block="iPhone">

                            <a href="/iphone/iphone-14" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPhone 14" data-id="240259"
                                data-price="13490000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/240259/s16/iphone-14-black-1-2-650x650.png"
                                        class="lazyload" alt="iPhone 14 128GB" width=300 height=300>
                                </div>
                                <h3>iPhone 14 128GB</h3>
                                <span class="box-price">
                                    13.490.000&#x20AB;
                                    <strike>17.990.000&#x20AB;</strike>
                                    <small>-25%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="9" data-block="iPhone">

                            <a href="/iphone/iphone-15-plus" class="main-contain" data-s="TwoPriceDetail"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPhone 15 Plus"
                                data-id="303891" data-price="19690000.0" data-brand="iPhone (Apple)"
                                data-cate="iPhone" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/303891/s16/iphone-15-plus-green-1-2-650x650.png"
                                        class="lazyload" alt="iPhone 15 Plus 128GB" width=300 height=300>
                                </div>
                                <h3>iPhone 15 Plus 128GB</h3>
                                <span class="box-price">
                                    19.690.000&#x20AB;
                                    <strike>22.990.000&#x20AB;</strike>
                                    <small>-14%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="10" data-block="iPhone">

                            <a href="/iphone/iphone-14-plus" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPhone 14 Plus" data-id="245545"
                                data-price="18990000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/245545/s16/iphone-14-plus-purple-650x650.png"
                                        class="lazyload" alt="iPhone 14 Plus 128GB" width=300 height=300>
                                </div>
                                <h3>iPhone 14 Plus 128GB</h3>
                                <span class="box-price">
                                    18.990.000&#x20AB;
                                    <strike>19.990.000&#x20AB;</strike>
                                    <small>-5%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="11" data-block="iPhone">

                            <a href="/iphone/iphone-13" class="main-contain" data-s="TwoPriceDetail"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPhone 13"
                                data-id="223602" data-price="11890000.0" data-brand="iPhone (Apple)"
                                data-cate="iPhone" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/223602/s16/iphone-13-black-1-2-3-650x650.png"
                                        class="lazyload" alt="iPhone 13 128GB" width=300 height=300>
                                </div>
                                <h3>iPhone 13 128GB</h3>
                                <span class="box-price">
                                    11.890.000&#x20AB;
                                    <strike>14.990.000&#x20AB;</strike>
                                    <small>-20%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="12" data-block="iPhone">

                            <a href="/iphone/iphone-12" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPhone 12" data-id="213031"
                                data-price="10590000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/213031/s16/iphone-12-purple-1-2-650x650.png"
                                        class="lazyload" alt="iPhone 12 64GB" width=300 height=300>
                                </div>
                                <h3>iPhone 12 64GB</h3>
                                <span class="box-price">
                                    10.590.000&#x20AB;
                                    <strike>11.990.000&#x20AB;</strike>
                                    <small>-11%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="13" data-block="iPhone">

                            <a href="/iphone/iphone-12-128gb" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPhone 12" data-id="228736"
                                data-price="11590000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/228736/s16/iphone-12-green-1-2-3-650x650.png"
                                        class="lazyload" alt="iPhone 12 128GB" width=300 height=300>
                                </div>
                                <h3>iPhone 12 128GB</h3>
                                <span class="box-price">
                                    11.590.000&#x20AB;
                                    <strike>13.990.000&#x20AB;</strike>
                                    <small>-17%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="14" data-block="iPhone">

                            <a href="/iphone/iphone-13-512gb" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPhone 13" data-id="250257"
                                data-price="21990000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/250257/s16/iphone-13-pink-1-1-2-3-4-5-650x650.png"
                                        class="lazyload" alt="iPhone 13 512GB" width=300 height=300>
                                </div>
                                <h3>iPhone 13 512GB</h3>
                                <span class="box-price">
                                    21.990.000&#x20AB;
                                    <strike>24.990.000&#x20AB;</strike>
                                    <small>-12%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="15" data-block="iPhone">

                            <a href="/iphone/iphone-13-256gb" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPhone 13" data-id="250258"
                                data-price="17990000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/250258/s16/iphone-13-blue-1-2-3-650x650.png"
                                        class="lazyload" alt="iPhone 13 256GB" width=300 height=300>
                                </div>
                                <h3>iPhone 13 256GB</h3>
                                <strong class="price">17.990.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="16" data-block="iPhone">

                            <a href="/iphone/iphone-14-256gb" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPhone 14" data-id="289663"
                                data-price="16590000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/289663/s16/iphone-14-gold-1-650x650.png"
                                        class="lazyload" alt="iPhone 14 256GB" width=300 height=300>
                                </div>
                                <h3>iPhone 14 256GB</h3>
                                <span class="box-price">
                                    16.590.000&#x20AB;
                                    <strike>20.990.000&#x20AB;</strike>
                                    <small>-20%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="17" data-block="iPhone">

                            <a href="/iphone/iphone-14-plus-256gb" class="main-contain" data-s="TwoPriceDetail"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPhone 14 Plus"
                                data-id="289710" data-price="20490000.0" data-brand="iPhone (Apple)"
                                data-cate="iPhone" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/289710/s16/iphone-14-plus-blue-1-2-650x650.png"
                                        class="lazyload" alt="iPhone 14 Plus 256GB" width=300 height=300>
                                </div>
                                <h3>iPhone 14 Plus 256GB</h3>
                                <span class="box-price">
                                    20.490.000&#x20AB;
                                    <strike>22.990.000&#x20AB;</strike>
                                    <small>-10%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="18" data-block="iPhone">

                            <a href="/iphone/iphone-14-plus-512gb" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPhone 14 Plus"
                                data-id="289712" data-price="22990000.0" data-brand="iPhone (Apple)"
                                data-cate="iPhone" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/289712/s16/iphone-14-plus-purple-650x650.png"
                                        class="lazyload" alt="iPhone 14 Plus 512GB" width=300 height=300>
                                </div>
                                <h3>iPhone 14 Plus 512GB</h3>
                                <span class="box-price">
                                    22.990.000&#x20AB;
                                    <strike>28.990.000&#x20AB;</strike>
                                    <small>-20%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="19" data-block="iPhone">

                            <a href="/iphone/iphone-15-256gb" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPhone 15 256GB" data-id="303716"
                                data-price="18990000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/303716/s16/iphone-15-green-1-2-650x650.png"
                                        class="lazyload" alt="iPhone 15 256GB" width=300 height=300>
                                </div>
                                <h3>iPhone 15 256GB</h3>
                                <span class="box-price">
                                    18.990.000&#x20AB;
                                    <strike>22.990.000&#x20AB;</strike>
                                    <small>-17%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="20" data-block="iPhone">

                            <a href="/iphone/iphone-15-512gb" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPhone 15" data-id="303812"
                                data-price="24990000.0" data-brand="iPhone (Apple)" data-cate="iPhone"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/303812/s16/iphone-15-yellow-650x650.png"
                                        class="lazyload" alt="iPhone 15 512GB" width=300 height=300>
                                </div>
                                <h3>iPhone 15 512GB</h3>
                                <span class="box-price">
                                    24.990.000&#x20AB;
                                    <strike>28.990.000&#x20AB;</strike>
                                    <small>-13%</small>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>

<<<<<<< HEAD
                        function successCallback(resp) {
                            if (resp.result === "success") {
                                msg = "We have sent you a confirmation email";
                                label.removeClass("error").addClass("valid");
                                email.removeClass("error").addClass("valid")
                            } else {
                                email.removeClass("valid").addClass("error");
                                label.removeClass("valid").addClass("error");
                                var index = -1;
                                try {
                                    var parts = resp.msg.split(" - ", 2);
                                    if (parts[1] === undefined) {
                                        msg = resp.msg
                                    } else {
                                        var i = parseInt(parts[0], 10);
                                        if (i.toString() === parts[0]) {
                                            index = parts[0];
                                            msg = parts[1]
                                        } else {
                                            index = -1;
                                            msg = resp.msg
                                        }
                                    }
                                } catch (e) {
                                    index = -1;
                                    msg = resp.msg
                                }
                            }
                            if (settings.language !== "en" && $.ajaxChimp.responses[msg] !==
                                undefined && $.ajaxChimp.translations && $.ajaxChimp.translations[
                                    settings.language] && $.ajaxChimp.translations[settings
                                    .language][$.ajaxChimp.responses[msg]]) {
                                msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp
                                    .responses[msg]
                                ]
                            }
                            label.html(msg);
                            label.show(2e3);
                            if (settings.callback) {
                                settings.callback(resp)
                            }
                        }
                        var data = {};
                        var dataArray = form.serializeArray();
                        $.each(dataArray, function(index, item) {
                            data[item.name] = item.value
                        });
                        $.ajax({
                            url: url,
                            data: data,
                            success: successCallback,
                            dataType: "jsonp",
                            error: function(resp, text) {
                                console.log("mailchimp ajax submit error: " + text)
                            }
                        });
                        var submitMsg = "Submitting...";
                        if (settings.language !== "en" && $.ajaxChimp.translations && $.ajaxChimp
                            .translations[settings.language] && $.ajaxChimp.translations[settings
                                .language]["submit"]) {
                            submitMsg = $.ajaxChimp.translations[settings.language]["submit"]
                        }
                        label.html(submitMsg).show(2e3);
                        return false
                    })
                });
                return this
            }
        })(jQuery);
    </script>
    {{-- test commitcommit --}}
=======

                <div class="box-slide">
                    <a href="mac" class="logo-cate  ">
                        <i class="topzone-iconapple"></i>
                        <h2 class="title-text">Mac</h2>
                    </a>
                    <div class="slide-cate owl-carousel owl-theme" data-block="Mac">
                        <div class="item" data-pos="1" data-block="Mac">

                            <a href="/mac/apple-macbook-air-2020-mgn63saa" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Air 13 inch M1" data-id="231244" data-price="17390000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/231244/s16/mac-air-m1-13-xam-new-650x650.png"
                                        class="lazyload" alt="MacBook Air 13 inch M1 8GB/256GB" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Air 13 inch M1 8GB/256GB</h3>
                                <span class="box-price">
                                    17.390.000&#x20AB;
                                    <strike>19.990.000&#x20AB;</strike>
                                    <small>-13%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="2" data-block="Mac">

                            <a href="/mac/apple-macbook-air-m2-2022-16gb-256gb" class="main-contain"
                                data-s="TwoPriceDetailCMS" data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Air 13 inch M2 8GPU" data-id="289472" data-price="23890000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/289472/s16/apple-macbook-air-m2-2022-16gb-256gb-thumb-650x650.png"
                                        class="lazyload" alt="MacBook Air 13 inch M2 16GB/256GB/8GPU" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Air 13 inch M2 16GB/256GB/8GPU</h3>
                                <span class="box-price">
                                    23.890.000&#x20AB;
                                    <strike>24.990.000&#x20AB;</strike>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="3" data-block="Mac">

                            <a href="/mac/macbook-air-13-inch-m3-2024-16gb-256gb" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Air 13 inch M3 10GPU" data-id="322633" data-price="27490000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/322633/s16/macbook-air-15-inch-m3-2024-bac-650x650.png"
                                        class="lazyload" alt="MacBook Air 13 inch M3 16GB/256GB" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Air 13 inch M3 16GB/256GB</h3>
                                <span class="box-price">
                                    27.490.000&#x20AB;
                                    <strike>32.990.000&#x20AB;</strike>
                                    <small>-16%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="4" data-block="Mac">

                            <a href="/mac/macbook-pro-14-inch-m4-16gb-512gb" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Pro 14 inch M4" data-id="331564" data-price="39990000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/331564/s16/macbook-pro-14-inch-m4-pro-topzone-den-thumb-650x650.png"
                                        class="lazyload" alt="MacBook Pro 14 inch M4 16GB/512GB" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Pro 14 inch M4 16GB/512GB</h3>
                                <strong class="price">39.990.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="5" data-block="Mac">

                            <a href="/mac/mac-mini-m4-16gb-256gb" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="Mac Mini M4 16GB/256GB" data-id="331493" data-price="14990000.0"
                                data-brand="Apple" data-cate="iMac, Mac mini" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/5698/331493/s16/mac-mini-m4-16gb-256gb-sliver-thumb-11-650x650.png"
                                        class="lazyload" alt="Mac Mini M4 16GB/256GB" width=300 height=300>
                                </div>
                                <h3>Mac Mini M4 16GB/256GB</h3>
                                <strong class="price">14.990.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="6" data-block="Mac">

                            <a href="/mac/macbook-pro-14-inch-m3-2023" class="main-contain" data-s="CleanStock"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Pro 14 inch M3" data-id="318228" data-price="35490000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/318228/s16/mac-topzone-spacegray-650x650.png"
                                        class="lazyload" alt="MacBook Pro 14 inch M3 8GB/512GB" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Pro 14 inch M3 8GB/512GB</h3>
                                <span class="box-price">
                                    35.490.000&#x20AB;
                                    <strike>39.990.000&#x20AB;</strike>
                                    <small>-11%</small>
                                </span>
                                <p class="item-txt-online orange">X&#x1EA3; kho gi&#xE1; s&#x1ED1;c</p>
                            </a>

                        </div>
                        <div class="item" data-pos="7" data-block="Mac">

                            <a href="/mac/apple-macbook-pro-14-inch-m3-pro-2023" class="main-contain"
                                data-s="CleanStock" data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Pro 14 inch M3 Pro" data-id="318230" data-price="49990000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/318230/s16/mac-topzone-promax-black-650x650.png"
                                        class="lazyload" alt="MacBook Pro 14 inch M3 Pro 18GB/512GB" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Pro 14 inch M3 Pro 18GB/512GB</h3>
                                <strong class="price">49.990.000&#x20AB;</strong>
                                <p class="item-txt-online orange">X&#x1EA3; kho gi&#xE1; s&#x1ED1;c</p>
                            </a>

                        </div>
                        <div class="item" data-pos="8" data-block="Mac">

                            <a href="/mac/apple-studio-display-27-5k-retina" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="Apple Studio Display Standard 27 inch 5K" data-id="274150"
                                data-price="38490000.0" data-brand="Apple" data-cate="M&#xE0;n h&#xEC;nh"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/5697/274150/s16/apple-studio-display-27-5k-retina-650x650.png"
                                        class="lazyload"
                                        alt="Apple Studio Display Standard 27 inch Retina 5K/60Hz (MK0U3SA/A)"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Studio Display Standard 27 inch Retina 5K/60Hz (MK0U3SA/A)</h3>
                                <span class="box-price">
                                    38.490.000&#x20AB;
                                    <strike>41.990.000&#x20AB;</strike>
                                    <small>-8%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="9" data-block="Mac">

                            <a href="/mac/apple-macbook-air-m2-2022-10-core-gpu" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Air 13 inch M2 10GPU" data-id="282847" data-price="24790000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/282847/s16/mac-air-m2-13-xanh-new-650x650.png"
                                        class="lazyload" alt="MacBook Air 13 inch M2 8GB/512GB/10GPU" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Air 13 inch M2 8GB/512GB/10GPU</h3>
                                <span class="box-price">
                                    24.790.000&#x20AB;
                                    <strike>29.990.000&#x20AB;</strike>
                                    <small>-17%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="10" data-block="Mac">

                            <a href="/mac/apple-macbook-air-m2-2022-16gb" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Air 13 inch M2 10GPU" data-id="289441" data-price="28590000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/289441/s16/apple-macbook-air-m2-2022-16gb-180524-065619-650x650.png"
                                        class="lazyload" alt="MacBook Air 13 inch M2 16GB/512GB/10GPU" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Air 13 inch M2 16GB/512GB/10GPU</h3>
                                <span class="box-price">
                                    28.590.000&#x20AB;
                                    <strike>29.990.000&#x20AB;</strike>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="11" data-block="Mac">

                            <a href="/mac/mac-studio-m2-max-2023" class="main-contain" data-s="TwoPriceDetailCMS"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="Mac Studio M2 Max 2023 12CPU - 30GPU" data-id="309281"
                                data-price="50490000.0" data-brand="Apple" data-cate="iMac, Mac mini"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/5698/309281/s16/mac-studio-m2-max-2023-150623-105154-650x650.png"
                                        class="lazyload" alt="Mac Studio M2 Max 2023 12CPU/32GB/512GB/30GPU"
                                        width=300 height=300>
                                </div>
                                <h3>Mac Studio M2 Max 2023 12CPU/32GB/512GB/30GPU</h3>
                                <span class="box-price">
                                    50.490.000&#x20AB;
                                    <strike>54.990.000&#x20AB;</strike>
                                    <small>-8%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="12" data-block="Mac">

                            <a href="/mac/apple-macbook-pro-16-inch-m3-pro-2023-12-core" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Pro 16 inch M3 Pro" data-id="318233" data-price="57990000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/318233/s16/mac16-topzone-silver-650x650.png"
                                        class="lazyload" alt="MacBook Pro 16 inch M3 Pro 18GB/512GB" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Pro 16 inch M3 Pro 18GB/512GB</h3>
                                <span class="box-price">
                                    57.990.000&#x20AB;
                                    <strike>64.990.000&#x20AB;</strike>
                                    <small>-10%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="13" data-block="Mac">

                            <a href="/mac/apple-macbook-pro-16-inch-m3-max-2023-14-core" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Pro 16 inch M3 Max" data-id="318236" data-price="81990000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/318236/s16/mac16-topzone-black-650x650.png"
                                        class="lazyload" alt="MacBook Pro 16 inch M3 Max 36GB/1TB" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Pro 16 inch M3 Max 36GB/1TB</h3>
                                <span class="box-price">
                                    81.990.000&#x20AB;
                                    <strike>89.990.000&#x20AB;</strike>
                                    <small>-8%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="14" data-block="Mac">

                            <a href="/mac/imac-24-inch-2023-4-5k-m3-8-core-gpu" class="main-contain"
                                data-s="TwoPriceDetailCMS" data-site="16" data-pro="3" data-cache="True"
                                data-name="iMac 24 inch M3" data-id="318238" data-price="27990000.0"
                                data-brand="Apple" data-cate="iMac, Mac mini" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/5698/318238/s16/imac-m3-blue-thumb-650x650.png"
                                        class="lazyload" alt="iMac 24 inch M3 8GB/256GB" width=300 height=300>
                                </div>
                                <h3>iMac 24 inch M3 8GB/256GB</h3>
                                <span class="box-price">
                                    27.990.000&#x20AB;
                                    <strike>36.990.000&#x20AB;</strike>
                                    <small>-24%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="15" data-block="Mac">

                            <a href="/mac/imac-24-inch-2023-4-5k-m3-16gb" class="main-contain"
                                data-s="TwoPriceDetailCMS" data-site="16" data-pro="3" data-cache="True"
                                data-name="iMac 24 inch M3" data-id="320977" data-price="30990000.0"
                                data-brand="Apple" data-cate="iMac, Mac mini" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/5698/320977/s16/imac-m3-pink-thumb-650x650.png"
                                        class="lazyload" alt="iMac 24 inch M3 16GB/256GB" width=300 height=300>
                                </div>
                                <h3>iMac 24 inch M3 16GB/256GB</h3>
                                <span class="box-price">
                                    30.990.000&#x20AB;
                                    <strike>41.990.000&#x20AB;</strike>
                                    <small>-26%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="16" data-block="Mac">

                            <a href="/mac/apple-macbook-pro-16-inch-m3-pro-2023-12-core-cpu-36gb-1tb"
                                class="main-contain" data-s="TwoPriceDetail" data-site="16" data-pro="3"
                                data-cache="True" data-name="MacBook Pro 16 inch M3 Pro" data-id="321000"
                                data-price="65990000.0" data-brand="MacBook" data-cate="MacBook"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/321000/s16/apple-macbook-pro-16-inch-m3-pro-2023-12-core-cpu-36gb-1tb-100124-022521-650x650.png"
                                        class="lazyload" alt="MacBook Pro 16 inch M3 Pro 36GB/1TB" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Pro 16 inch M3 Pro 36GB/1TB</h3>
                                <span class="box-price">
                                    65.990.000&#x20AB;
                                    <strike>79.990.000&#x20AB;</strike>
                                    <small>-17%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="17" data-block="Mac">

                            <a href="/mac/macbook-pro-14-inch-m3-pro-2023-36gb-512gb" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Pro 14 inch M3 Pro" data-id="322359" data-price="53490000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/322359/s16/macbook-pro-14-inch-m3-pro-2023-36gb-512gb-040324-120320-650x650.png"
                                        class="lazyload" alt="MacBook Pro 14 inch M3 Pro 36GB/512GB" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Pro 14 inch M3 Pro 36GB/512GB</h3>
                                <span class="box-price">
                                    53.490.000&#x20AB;
                                    <strike>59.990.000&#x20AB;</strike>
                                    <small>-10%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="18" data-block="Mac">

                            <a href="/mac/macbook-air-13-inch-m3-2024-16gb-512gb" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Air 13 inch M3" data-id="322634" data-price="30590000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/322634/s16/macbook-air-15-inch-m3-2024-bac-650x650.png"
                                        class="lazyload" alt="MacBook Air 13 inch M3 16GB/512GB" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Air 13 inch M3 16GB/512GB</h3>
                                <span class="box-price">
                                    30.590.000&#x20AB;
                                    <strike>32.990.000&#x20AB;</strike>
                                    <small>-7%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="19" data-block="Mac">

                            <a href="/mac/macbook-air-15-inch-m3-2024-16gb-256gb" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Air 15 inch M3" data-id="322636" data-price="30690000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/322636/s16/macbook-air-15-inch-m3-2024-16gb-256gb-060324-100132-650x650.png"
                                        class="lazyload" alt="MacBook Air 15 inch M3 16GB/256GB" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Air 15 inch M3 16GB/256GB</h3>
                                <span class="box-price">
                                    30.690.000&#x20AB;
                                    <strike>32.990.000&#x20AB;</strike>
                                    <small>-6%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="20" data-block="Mac">

                            <a href="/mac/macbook-air-15-inch-m3-2024-16gb-512gb" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="MacBook Air 15 inch M3" data-id="322637" data-price="35190000.0"
                                data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/44/322637/s16/macbook-air-15-inch-m3-2024-bac-650x650.png"
                                        class="lazyload" alt="MacBook Air 15 inch M3 16GB/512GB" width=300
                                        height=300>
                                </div>
                                <h3>MacBook Air 15 inch M3 16GB/512GB</h3>
                                <span class="box-price">
                                    35.190.000&#x20AB;
                                    <strike>37.990.000&#x20AB;</strike>
                                    <small>-7%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="box-slide">
                    <a href="ipad" class="logo-cate  ">
                        <i class="topzone-iconapple"></i>
                        <h2 class="title-text">iPad</h2>
                    </a>
                    <div class="slide-cate owl-carousel owl-theme" data-block="iPad">
                        <div class="item" data-pos="1" data-block="iPad">

                            <a href="/ipad/ipad-air-m2-11-inch-wifi-128gb" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="iPad Air 6 M2 11 inch WiFi" data-id="325501" data-price="16390000.0"
                                data-brand="iPad (Apple)" data-cate="iPad" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/325501/s16/ipad-air-m2-11-inch-wifi-blue-thumb-650x650.png"
                                        class="lazyload" alt="iPad Air 6 M2 11 inch WiFi 128GB" width=300
                                        height=300>
                                </div>
                                <h3>iPad Air 6 M2 11 inch WiFi 128GB</h3>
                                <span class="box-price">
                                    16.390.000&#x20AB;
                                    <strike>16.990.000&#x20AB;</strike>
                                    <small>-3%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="2" data-block="iPad">

                            <a href="/ipad/ipad-pro-m4-11-inch-wifi-256gb" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="iPad Pro M4 11 inch WiFi 256GB" data-id="325513"
                                data-price="27790000.0" data-brand="iPad (Apple)" data-cate="iPad"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/325513/s16/ipad-pro-11-inch-wifi-black-thumb-650x650.png"
                                        class="lazyload" alt="iPad Pro M4 11 inch WiFi 256GB" width=300 height=300>
                                </div>
                                <h3>iPad Pro M4 11 inch WiFi 256GB</h3>
                                <span class="box-price">
                                    27.790.000&#x20AB;
                                    <strike>28.990.000&#x20AB;</strike>
                                    <small>-4%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="3" data-block="iPad">

                            <a href="/ipad/ipad-gen-10" class="main-contain" data-s="TwoPriceDetail"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPad 10 WiFi 64GB"
                                data-id="294103" data-price="9390000.0" data-brand="iPad (Apple)"
                                data-cate="iPad" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/294103/s16/ipad-10-pink-650x650.png"
                                        class="lazyload" alt="iPad 10 WiFi 64GB" width=300 height=300>
                                </div>
                                <h3>iPad 10 WiFi 64GB</h3>
                                <span class="box-price">
                                    9.390.000&#x20AB;
                                    <strike>11.490.000&#x20AB;</strike>
                                    <small>-18%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="4" data-block="iPad">

                            <a href="/ipad/ipad-air-m2-13-inch-wifi-128gb" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="iPad Air 6 M2 13 inch WiFi" data-id="325506" data-price="20990000.0"
                                data-brand="iPad (Apple)" data-cate="iPad" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/325506/s16/ipad-air-m2-13-inch-wifi-gray-thumb-650x650.png"
                                        class="lazyload" alt="iPad Air 6 M2 13 inch WiFi 128GB" width=300
                                        height=300>
                                </div>
                                <h3>iPad Air 6 M2 13 inch WiFi 128GB</h3>
                                <span class="box-price">
                                    20.990.000&#x20AB;
                                    <strike>22.490.000&#x20AB;</strike>
                                    <small>-6%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="5" data-block="iPad">

                            <a href="/ipad/ipad-pro-m4-13-inch-wifi-256gb" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="iPad Pro M4 13 inch WiFi" data-id="325517" data-price="36590000.0"
                                data-brand="iPad (Apple)" data-cate="iPad" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/325517/s16/ipad-pro-13-inch-wifi-black-650x650.png"
                                        class="lazyload" alt="iPad Pro M4 13 inch WiFi 256GB" width=300 height=300>
                                </div>
                                <h3>iPad Pro M4 13 inch WiFi 256GB</h3>
                                <span class="box-price">
                                    36.590.000&#x20AB;
                                    <strike>37.990.000&#x20AB;</strike>
                                    <small>-3%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="6" data-block="iPad">

                            <a href="/ipad/ipad-air-m2-11-inch-wifi-cellular-128gb" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="iPad Air 6 M2 11 inch 5G" data-id="325521" data-price="20690000"
                                data-brand="iPad (Apple)" data-cate="iPad" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/325521/s16/ipad-air-m2-11-inch-wifi-cellular-blue-thumb-650x650.png"
                                        class="lazyload" alt="iPad Air 6 M2 11 inch 5G 128GB" width=300 height=300>
                                </div>
                                <h3>iPad Air 6 M2 11 inch 5G 128GB</h3>
                                <span class="box-price">
                                    20.690.000&#x20AB;
                                    <strike>20.990.000&#x20AB;</strike>
                                    <small>-1%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="7" data-block="iPad">

                            <a href="/ipad/ipad-mini-7-wifi" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPad mini 7 WiFi" data-id="331229"
                                data-price="13990000.0" data-brand="iPad (Apple)" data-cate="iPad"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/331229/s16/ipad-mini-7-wifi-blue-thumbtz-650x650.png"
                                        class="lazyload" alt="iPad mini 7 WiFi 128GB" width=300 height=300>
                                </div>
                                <h3>iPad mini 7 WiFi 128GB</h3>
                                <strong class="price">13.990.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="8" data-block="iPad">

                            <a href="/ipad/ipad-mini-7-wifi-256gb" class="main-contain" data-s="TwoPriceDetailCMS"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPad mini 7 WiFi"
                                data-id="331230" data-price="15990000.0" data-brand="iPad (Apple)"
                                data-cate="iPad" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/331230/s16/ipad-mini-7-wifi-starlight-thumbtz-650x650.png"
                                        class="lazyload" alt="iPad mini 7 WiFi 256GB" width=300 height=300>
                                </div>
                                <h3>iPad mini 7 WiFi 256GB</h3>
                                <span class="box-price">
                                    15.990.000&#x20AB;
                                    <strike>16.490.000&#x20AB;</strike>
                                    <small>-3%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="9" data-block="iPad">

                            <a href="/ipad/ipad-mini-7-5g" class="main-contain" data-s="TwoPriceDetailCMS"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPad mini 7 5G"
                                data-id="331232" data-price="17290000.0" data-brand="iPad (Apple)"
                                data-cate="iPad" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/331232/s16/ipad-mini-7-5g-starlight-thumbtz-650x650.png"
                                        class="lazyload" alt="iPad mini 7 5G 128GB" width=300 height=300>
                                </div>
                                <h3>iPad mini 7 5G 128GB</h3>
                                <span class="box-price">
                                    17.290.000&#x20AB;
                                    <strike>17.990.000&#x20AB;</strike>
                                    <small>-3%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="10" data-block="iPad">

                            <a href="/ipad/ipad-mini-7-5g-256gb" class="main-contain" data-s="TwoPriceDetail"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPad mini 7 5G"
                                data-id="331233" data-price="19490000.0" data-brand="iPad (Apple)"
                                data-cate="iPad" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/331233/s16/ipad-mini-7-5g-purple-thumbtz-650x650.png"
                                        class="lazyload" alt="iPad mini 7 5G 256GB" width=300 height=300>
                                </div>
                                <h3>iPad mini 7 5G 256GB</h3>
                                <span class="box-price">
                                    19.490.000&#x20AB;
                                    <strike>20.490.000&#x20AB;</strike>
                                    <small>-4%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="11" data-block="iPad">

                            <a href="/ipad/ipad-mini-7-wifi-512gb" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPad mini 7 WiFi"
                                data-id="331231" data-price="20990000.0" data-brand="iPad (Apple)"
                                data-cate="iPad" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/331231/s16/ipad-mini-7-wifi-purple-thumbtz-650x650.png"
                                        class="lazyload" alt="iPad mini 7 WiFi 512GB" width=300 height=300>
                                </div>
                                <h3>iPad mini 7 WiFi 512GB</h3>
                                <span class="box-price">
                                    20.990.000&#x20AB;
                                    <strike>21.990.000&#x20AB;</strike>
                                    <small>-4%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="12" data-block="iPad">

                            <a href="/ipad/ipad-mini-7-5g-512gb" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPad mini 7 5G"
                                data-id="331234" data-price="25990000.0" data-brand="iPad (Apple)"
                                data-cate="iPad" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/331234/s16/ipad-mini-7-5g-blue-thumbtz-650x650.png"
                                        class="lazyload" alt="iPad mini 7 5G 512GB" width=300 height=300>
                                </div>
                                <h3>iPad mini 7 5G 512GB</h3>
                                <strong class="price">25.990.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="13" data-block="iPad">

                            <a href="/ipad/ipad-11-wifi-128gb" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPad 11 (A16) WiFi"
                                data-id="335308" data-price="9990000.0" data-brand="iPad (Apple)"
                                data-cate="iPad" data-box="BoxHome">
                                <label>M&#x1EDB;i</label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/335308/s16/ipad-11-wifi-blue-thumb-650x650.png"
                                        class="lazyload" alt="iPad 11 (A16) WiFi 128GB" width=300 height=300>
                                </div>
                                <h3>iPad 11 (A16) WiFi 128GB</h3>
                                <strong class="price">9.990.000&#x20AB;</strong>
                                <p class="item-txt-online ">H&#xE0;ng s&#x1EAF;p v&#x1EC1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="14" data-block="iPad">

                            <a href="/ipad/ipad-11-wifi-256gb" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPad 11 (A16) WiFi"
                                data-id="335309" data-price="12490000.0" data-brand="iPad (Apple)"
                                data-cate="iPad" data-box="BoxHome">
                                <label>M&#x1EDB;i</label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/335309/s16/ipad-11-wifi-sliver-thumb-650x650.png"
                                        class="lazyload" alt="iPad 11 (A16) WiFi 256GB" width=300 height=300>
                                </div>
                                <h3>iPad 11 (A16) WiFi 256GB</h3>
                                <strong class="price">12.490.000&#x20AB;</strong>
                                <p class="item-txt-online ">H&#xE0;ng s&#x1EAF;p v&#x1EC1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="15" data-block="iPad">

                            <a href="/ipad/ipad-11-wifi-512gb" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True" data-name="iPad 11 (A16) WiFi"
                                data-id="335310" data-price="17990000.0" data-brand="iPad (Apple)"
                                data-cate="iPad" data-box="BoxHome">
                                <label>M&#x1EDB;i</label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/335310/s16/ipad-11-wifi-pink-thumb-650x650.png"
                                        class="lazyload" alt="iPad 11 (A16) WiFi 512GB" width=300 height=300>
                                </div>
                                <h3>iPad 11 (A16) WiFi 512GB</h3>
                                <strong class="price">17.990.000&#x20AB;</strong>
                                <p class="item-txt-online ">H&#xE0;ng s&#x1EAF;p v&#x1EC1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="16" data-block="iPad">

                            <a href="/ipad/ipad-11-5g-128gb" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPad 11 (A16) 5G" data-id="335311"
                                data-price="13990000.0" data-brand="iPad (Apple)" data-cate="iPad"
                                data-box="BoxHome">
                                <label>M&#x1EDB;i</label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/335311/s16/ipad-11-5g-yellow-thumb-650x650.png"
                                        class="lazyload" alt="iPad 11 (A16) 5G 128GB" width=300 height=300>
                                </div>
                                <h3>iPad 11 (A16) 5G 128GB</h3>
                                <strong class="price">13.990.000&#x20AB;</strong>
                                <p class="item-txt-online ">H&#xE0;ng s&#x1EAF;p v&#x1EC1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="17" data-block="iPad">

                            <a href="/ipad/ipad-11-5g-256gb" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPad 11 (A16) 5G" data-id="335312"
                                data-price="16490000.0" data-brand="iPad (Apple)" data-cate="iPad"
                                data-box="BoxHome">
                                <label>M&#x1EDB;i</label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/335312/s16/ipad-11-5g-pink-thumb-650x650.png"
                                        class="lazyload" alt="iPad 11 (A16) 5G 256GB" width=300 height=300>
                                </div>
                                <h3>iPad 11 (A16) 5G 256GB</h3>
                                <strong class="price">16.490.000&#x20AB;</strong>
                                <p class="item-txt-online ">H&#xE0;ng s&#x1EAF;p v&#x1EC1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="18" data-block="iPad">

                            <a href="/ipad/ipad-11-5g-512gb" class="main-contain" data-s="Nomal" data-site="16"
                                data-pro="3" data-cache="True" data-name="iPad 11 (A16) 5G" data-id="335313"
                                data-price="21990000.0" data-brand="iPad (Apple)" data-cate="iPad"
                                data-box="BoxHome">
                                <label>M&#x1EDB;i</label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/335313/s16/ipad-11-5g-blue-thumb-650x650.png"
                                        class="lazyload" alt="iPad 11 (A16) 5G 512GB" width=300 height=300>
                                </div>
                                <h3>iPad 11 (A16) 5G 512GB</h3>
                                <strong class="price">21.990.000&#x20AB;</strong>
                                <p class="item-txt-online ">H&#xE0;ng s&#x1EAF;p v&#x1EC1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="19" data-block="iPad">

                            <a href="/ipad/ipad-air-m3-11-inch-wifi-128gb" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="iPad Air M3 11 inch WiFi" data-id="335267" data-price="16990000.0"
                                data-brand="iPad (Apple)" data-cate="iPad" data-box="BoxHome">
                                <label>M&#x1EDB;i</label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/335267/s16/ipad-air-m3-11-inch-wifi-gray-thumb-650x650.png"
                                        class="lazyload" alt="iPad Air M3 11 inch WiFi 128GB" width=300 height=300>
                                </div>
                                <h3>iPad Air M3 11 inch WiFi 128GB</h3>
                                <strong class="price">16.990.000&#x20AB;</strong>
                                <p class="item-txt-online ">H&#xE0;ng s&#x1EAF;p v&#x1EC1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="20" data-block="iPad">

                            <a href="/ipad/ipad-air-m3-11-inch-wifi-256gb" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="iPad Air M3 11 inch WiFi" data-id="335268" data-price="19490000.0"
                                data-brand="iPad (Apple)" data-cate="iPad" data-box="BoxHome">
                                <label>M&#x1EDB;i</label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/522/335268/s16/ipad-air-m3-11-inch-wifi-blue-thumb-650x650.png"
                                        class="lazyload" alt="iPad Air M3 11 inch WiFi 256GB" width=300 height=300>
                                </div>
                                <h3>iPad Air M3 11 inch WiFi 256GB</h3>
                                <strong class="price">19.490.000&#x20AB;</strong>
                                <p class="item-txt-online ">H&#xE0;ng s&#x1EAF;p v&#x1EC1;</p>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="box-slide">
                    <a href="apple-watch" class="logo-cate  ">
                        <i class="topzone-iconapple"></i>
                        <h2 class="title-text">WATCH</h2>
                    </a>
                    <div class="slide-cate owl-carousel owl-theme" data-block="WATCH">
                        <div class="item" data-pos="1" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-s10" class="main-contain" data-s="TwoPriceDetailCMS"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="Apple Watch Series 10 42mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                data-id="329153" data-price="10190000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/329153/s16/apple-watch-s10-den-tb-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch Series 10 42mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch Series 10 42mm viền nhôm dây thể thao</h3>
                                <span class="box-price">
                                    10.190.000&#x20AB;
                                    <strike>10.990.000&#x20AB;</strike>
                                    <small>-7%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="2" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-se-2023-gps-40mm-sport-loop" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="Apple Watch SE 2 GPS 40mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                data-id="316008" data-price="5990000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/316008/s16/t&#xE1;ch n&#x1EC1;n site 16-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch SE 2 GPS 40mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch SE 2 GPS 40mm viền nhôm dây vải</h3>
                                <strong class="price">5.990.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="3" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-series-10-lte-42mm-day-vai" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="Apple Watch Series 10 GPS &#x2B; Cellular 42mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                data-id="329708" data-price="13390000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/329708/s16/apple-watch-series-10-lte-42mm-day-vai-den-tb-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch Series 10 GPS &#x2B; Cellular 42mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch Series 10 GPS + Cellular 42mm viền nhôm dây vải</h3>
                                <span class="box-price">
                                    13.390.000&#x20AB;
                                    <strike>13.590.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="4" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-se-2023-gps-cellular-40mm-sport-loop"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="Apple Watch SE 2 GPS &#x2B; Cellular 40mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                data-id="316004" data-price="7090000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/316004/s16/Apple Watch SE 2-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch SE 2 GPS &#x2B; Cellular 40mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch SE 2 GPS + Cellular 40mm viền nhôm dây vải</h3>
                                <span class="box-price">
                                    7.090.000&#x20AB;
                                    <strike>7.290.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="5" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-s10-lte-46mm" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="Apple Watch Series 10 GPS &#x2B; Cellular 46mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                data-id="329157" data-price="14190000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/329157/s16/apple-watch-s10-xanh-nhat-tn-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch Series 10 GPS &#x2B; Cellular 46mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch Series 10 GPS + Cellular 46mm viền nhôm dây thể thao</h3>
                                <span class="box-price">
                                    14.190.000&#x20AB;
                                    <strike>14.390.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="6" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-series-10-lte-46mm-day-vai" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="Apple Watch Series 10 GPS &#x2B; Cellular 46mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                data-id="329706" data-price="14190000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/329706/s16/apple-watch-series-10-lte-42mm-day-vai-den-tb-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch Series 10 GPS &#x2B; Cellular 46mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch Series 10 GPS + Cellular 46mm viền nhôm dây vải</h3>
                                <span class="box-price">
                                    14.190.000&#x20AB;
                                    <strike>14.390.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="7" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-s10-lte-42mm-vien-titanium-day-thep"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="Apple Watch Series 10 GPS &#x2B; Cellular 42mm vi&#x1EC1;n Titanium d&#xE2;y Milan"
                                data-id="329159" data-price="20890000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/329159/s16/titan-tu-nhien-topzone-1-2-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch Series 10 GPS &#x2B; Cellular 42mm vi&#x1EC1;n Titanium d&#xE2;y Milan"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch Series 10 GPS + Cellular 42mm viền Titanium dây Milan</h3>
                                <span class="box-price">
                                    20.890.000&#x20AB;
                                    <strike>21.090.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="8" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-s10-lte-46mm-vien-titanium-day-thep"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="Apple Watch Series 10 GPS &#x2B; Cellular 46mm vi&#x1EC1;n Titanium d&#xE2;y Milan"
                                data-id="329160" data-price="22390000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/329160/s16/titan-xam-topzone-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch Series 10 GPS &#x2B; Cellular 46mm vi&#x1EC1;n Titanium d&#xE2;y Milan"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch Series 10 GPS + Cellular 46mm viền Titanium dây Milan</h3>
                                <span class="box-price">
                                    22.390.000&#x20AB;
                                    <strike>22.590.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="9" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-s9-45mm-vien-nhom-day-silicone" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="Apple Watch Series 9 GPS 45mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                data-id="314708" data-price="7990000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/314708/s16/apple-watch-s9-45mm-vien-nhom-day-silicone-do-thumb-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch Series 9 GPS 45mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch Series 9 GPS 45mm viền nhôm dây thể thao</h3>
                                <span class="box-price">
                                    7.990.000&#x20AB;
                                    <strike>11.290.000&#x20AB;</strike>
                                    <small>-29%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="10" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-series-9-gps-41mm-sport-loop" class="main-contain"
                                data-s="TwoPriceDetailCMS" data-site="16" data-pro="3" data-cache="True"
                                data-name="Apple Watch Series 9 GPS 41mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                data-id="315998" data-price="7290000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/315998/s16/apple-watch-s9-vien-nhom-day-vai-xanh-den-tb-1-1-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch Series 9 GPS 41mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch Series 9 GPS 41mm viền nhôm dây vải</h3>
                                <span class="box-price">
                                    7.290.000&#x20AB;
                                    <strike>10.490.000&#x20AB;</strike>
                                    <small>-30%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="11" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-se-2023-gps-40mm-sport-band" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="Apple Watch SE 2 GPS 40mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                data-id="316007" data-price="5990000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/316007/s16/t&#xE1;ch n&#x1EC1;n site 16 (1)-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch SE 2 GPS 40mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch SE 2 GPS 40mm viền nhôm dây thể thao</h3>
                                <strong class="price">5.990.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="12" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-se-2023-gps-44mm-sport-band" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="Apple Watch SE 2 GPS 44mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                data-id="316012" data-price="6590000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/316012/s16/t&#xE1;ch n&#x1EC1;n site 16-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch SE 2 GPS 44mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch SE 2 GPS 44mm viền nhôm dây thể thao</h3>
                                <span class="box-price">
                                    6.590.000&#x20AB;
                                    <strike>6.790.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="13" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-se-2023-gps-44mm-sport-loop" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="Apple Watch SE 2 GPS 44mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                data-id="316015" data-price="6590000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/316015/s16/t&#xE1;ch n&#x1EC1;n site 16-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch SE 2 GPS 44mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch SE 2 GPS 44mm viền nhôm dây vải</h3>
                                <span class="box-price">
                                    6.590.000&#x20AB;
                                    <strike>6.790.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="14" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-se-2023-gps-cellular-40mm-sport-band"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="Apple Watch SE 2 GPS &#x2B; Cellular 40mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                data-id="316003" data-price="7090000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/316003/s16/t&#xE1;ch n&#x1EC1;n site 16 (1)-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch SE 2 GPS &#x2B; Cellular 40mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch SE 2 GPS + Cellular 40mm viền nhôm dây thể thao</h3>
                                <span class="box-price">
                                    7.090.000&#x20AB;
                                    <strike>7.290.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="15" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-se-2023-gps-cellular-44mm-sport-band"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="Apple Watch SE 2 GPS &#x2B; Cellular 44mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                data-id="316009" data-price="7890000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/316009/s16/t&#xE1;ch n&#x1EC1;n site 16-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch SE 2 GPS &#x2B; Cellular 44mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch SE 2 GPS + Cellular 44mm viền nhôm dây thể thao</h3>
                                <span class="box-price">
                                    7.890.000&#x20AB;
                                    <strike>8.090.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="16" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-se-2023-gps-cellular-44mm-sport-loop"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="Apple Watch SE 2 GPS &#x2B; Cellular 44mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                data-id="316011" data-price="7890000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/316011/s16/Apple Watch SE 2-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch SE 2 GPS &#x2B; Cellular 44mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y v&#x1EA3;i"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch SE 2 GPS + Cellular 44mm viền nhôm dây vải</h3>
                                <span class="box-price">
                                    7.890.000&#x20AB;
                                    <strike>8.090.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="17" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-ultra-2-lte-49mm-vien-titanium-day-alpine-size-l"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="Apple Watch Ultra 2 GPS &#x2B; Cellular 49mm vi&#x1EC1;n Titanium d&#xE2;y Alpine"
                                data-id="314937" data-price="22490000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/314937/s16/t&#xE1;ch n&#x1EC1;n site 16-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch Ultra 2 GPS &#x2B; Cellular 49mm vi&#x1EC1;n Titanium d&#xE2;y Alpine N&#xE2;u nh&#x1EA1;t"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch Ultra 2 GPS + Cellular 49mm viền Titanium dây Alpine Nâu nhạt</h3>
                                <span class="box-price">
                                    22.490.000&#x20AB;
                                    <strike>22.990.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="18" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-series-9-gps-45mm-sport-band-size-s"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="Apple Watch Series 9 GPS 45mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao size S/M"
                                data-id="316002" data-price="7990000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/316002/s16/apple-watch-s9-vien-nhom-day-silicone-do-tb-1-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch Series 9 GPS 45mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao size S/M"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch Series 9 GPS 45mm viền nhôm dây thể thao size S/M</h3>
                                <span class="box-price">
                                    7.990.000&#x20AB;
                                    <strike>11.290.000&#x20AB;</strike>
                                    <small>-29%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="19" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-se-2023-gps-cellular-44mm-sport-band-size-s"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="Apple Watch SE 2 GPS &#x2B; Cellular 44mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao size S/M"
                                data-id="316010" data-price="7690000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/316010/s16/apple-watch-se-lte-2023-vien-nhom-day-silicone-xanh-nhat-tb-1-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch SE 2 GPS &#x2B; Cellular 44mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao size S/M"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch SE 2 GPS + Cellular 44mm viền nhôm dây thể thao size S/M</h3>
                                <span class="box-price">
                                    7.690.000&#x20AB;
                                    <strike>8.390.000&#x20AB;</strike>
                                    <small>-8%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="20" data-block="WATCH">

                            <a href="/apple-watch/apple-watch-s10-46mm" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="Apple Watch Series 10 46mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                data-id="329155" data-price="11590000.0" data-brand="Apple" data-cate="Watch"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/7077/329155/s16/apple-watch-s10-den-tb-650x650.png"
                                        class="lazyload"
                                        alt="Apple Watch Series 10 46mm vi&#x1EC1;n nh&#xF4;m d&#xE2;y th&#x1EC3; thao"
                                        width=300 height=300>
                                </div>
                                <h3>Apple Watch Series 10 46mm viền nhôm dây thể thao</h3>
                                <span class="box-price">
                                    11.590.000&#x20AB;
                                    <strike>11.790.000&#x20AB;</strike>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="box-slide">
                    <a href="am-thanh" class="logo-cate  ">
                        <h2 class="title-text-amthanh">Tai nghe, Loa</h2>
                    </a>
                    <div class="slide-cate owl-carousel owl-theme" data-block="Tai nghe, Loa">
                        <div class="item" data-pos="1" data-block="Tai nghe, Loa">

                            <a href="/tai-nghe/tai-nghe-co-day-apple-mtjy3" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="EarPods jack c&#x1EAF;m USB-C" data-id="315072" data-price="550000.0"
                                data-brand="Apple" data-cate="Tai nghe" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/54/315072/s16/tai-nghe-co-day-apple-mtjy3-thumb-650x650.png"
                                        class="lazyload" alt="EarPods jack c&#x1EAF;m USB-C" width=300 height=300>
                                </div>
                                <h3>EarPods jack cắm USB-C</h3>
                                <strong class="price">550.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="2" data-block="Tai nghe, Loa">

                            <a href="/tai-nghe/airpods-4-mxp63" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True" data-name="AirPods 4"
                                data-id="329154" data-price="3190000.0" data-brand="Apple" data-cate="Tai nghe"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/54/329154/s16/airpods-4-thumb-1-650x650.png"
                                        class="lazyload" alt="AirPods 4" width=300 height=300>
                                </div>
                                <h3>AirPods 4</h3>
                                <span class="box-price">
                                    3.190.000&#x20AB;
                                    <strike>3.490.000&#x20AB;</strike>
                                    <small>-8%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="3" data-block="Tai nghe, Loa">

                            <a href="/tai-nghe/tai-nghe-bluetooth-airpods-pro-gen-2-magsafe-charge-usb-c-apple-mtjv3"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True" data-name="AirPods Pro (2nd Gen) USB-C" data-id="315014"
                                data-price="5690000.0" data-brand="Apple" data-cate="Tai nghe"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/54/315014/s16/tai-nghe-bluetooth-airpods-pro-2nd-gen-usb-c-charge-apple-thumb-12-1-650x650.png"
                                        class="lazyload" alt="AirPods Pro (2nd Gen) USB-C" width=300 height=300>
                                </div>
                                <h3>AirPods Pro (2nd Gen) USB-C</h3>
                                <span class="box-price">
                                    5.690.000&#x20AB;
                                    <strike>6.200.000&#x20AB;</strike>
                                    <small>-8%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="4" data-block="Tai nghe, Loa">

                            <a href="/tai-nghe/bluetooth-airpods-max-apple" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True" data-name="AirPods Max"
                                data-id="236331" data-price="11990000.0" data-brand="Apple" data-cate="Tai nghe"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/54/236331/s16/bluetooth-airpods-max-apple-pink-tn-650x650.png"
                                        class="lazyload" alt="AirPods Max" width=300 height=300>
                                </div>
                                <h3>AirPods Max</h3>
                                <span class="box-price">
                                    11.990.000&#x20AB;
                                    <strike>13.990.000&#x20AB;</strike>
                                    <small>-14%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="5" data-block="Tai nghe, Loa">

                            <a href="/loa/bluetooth-jbl-go-3-xanh-den" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth JBL Go 3" data-id="242826" data-price="790000.0"
                                data-brand="JBL" data-cate="Loa" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/242826/s16/bluetooth-jbl-go-3-xanh-den-thumb-1-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth JBL Go 3" width=300 height=300>
                                </div>
                                <h3>Loa Bluetooth JBL Go 3</h3>
                                <span class="box-price">
                                    790.000&#x20AB;
                                    <strike>1.090.000&#x20AB;</strike>
                                    <small>-27%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="6" data-block="Tai nghe, Loa">

                            <a href="/loa/bluetooth-harman-kardon-soundsticks-4" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth Harman Kardon SoundSticks 4" data-id="242835"
                                data-price="7350000.0" data-brand="Harman Kardon" data-cate="Loa"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/242835/s16/bluetooth-harman-kardon-soundsticks-4-trang-tn-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth Harman Kardon SoundSticks 4" width=300
                                        height=300>
                                </div>
                                <h3>Loa Bluetooth Harman Kardon SoundSticks 4</h3>
                                <span class="box-price">
                                    7.350.000&#x20AB;
                                    <strike>7.990.000&#x20AB;</strike>
                                    <small>-8%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="7" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-jbl-charge-5" class="main-contain" data-s="TwoPriceDetail"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth JBL Charge 5" data-id="251230" data-price="3490000.0"
                                data-brand="JBL" data-cate="Loa" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/251230/s16/bluetooth-jbl-charge-5-xanh-tn-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth JBL Charge 5" width=300 height=300>
                                </div>
                                <h3>Loa Bluetooth JBL Charge 5</h3>
                                <span class="box-price">
                                    3.490.000&#x20AB;
                                    <strike>3.990.000&#x20AB;</strike>
                                    <small>-12%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="8" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-jbl-boombox-3" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth JBL Boombox 3" data-id="299607" data-price="11030000.0"
                                data-brand="JBL" data-cate="Loa" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/299607/s16/loa-bluetooth-jbl-boombox-3-thumb-1-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth JBL Boombox 3" width=300 height=300>
                                </div>
                                <h3>Loa Bluetooth JBL Boombox 3</h3>
                                <span class="box-price">
                                    11.030.000&#x20AB;
                                    <strike>11.990.000&#x20AB;</strike>
                                    <small>-8%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="9" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-monster-superstar-s320" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth Monster Superstar S320" data-id="302671"
                                data-price="1400000.0" data-brand="MONSTER" data-cate="Loa" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/302671/s16/loa-bluetooth-monster-superstar-s320-thumb-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth Monster Superstar S320" width=300
                                        height=300>
                                </div>
                                <h3>Loa Bluetooth Monster Superstar S320</h3>
                                <span class="box-price">
                                    1.400.000&#x20AB;
                                    <strike>1.900.000&#x20AB;</strike>
                                    <small>-26%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="10" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-jbl-authentics-300" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth JBL Authentics 300" data-id="304565"
                                data-price="10290000.0" data-brand="JBL" data-cate="Loa" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/304565/s16/loa-bluetooth-jbl-authentics-a300-081223-070144-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth JBL Authentics 300" width=300
                                        height=300>
                                </div>
                                <h3>Loa Bluetooth JBL Authentics 300</h3>
                                <span class="box-price">
                                    10.290.000&#x20AB;
                                    <strike>11.900.000&#x20AB;</strike>
                                    <small>-13%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="11" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-harman-kardon-go-play-3" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth Harman Kardon Go &#x2B; Play 3" data-id="324096"
                                data-price="6990000.0" data-brand="Harman Kardon" data-cate="Loa"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/324096/s16/loa-bluetooth-harman-kardon-go-play-3loa-bluetooth-harman-kardon-go-play-3-den-thumb-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth Harman Kardon Go &#x2B; Play 3"
                                        width=300 height=300>
                                </div>
                                <h3>Loa Bluetooth Harman Kardon Go + Play 3</h3>
                                <span class="box-price">
                                    6.990.000&#x20AB;
                                    <strike>7.490.000&#x20AB;</strike>
                                    <small>-6%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="12" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-marshall-emberton" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth Marshall Emberton II" data-id="325331"
                                data-price="3490000.0" data-brand="Marshall" data-cate="Loa" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/325331/s16/loa-bluetooth-marshall-emberton-den-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth Marshall Emberton II" width=300
                                        height=300>
                                </div>
                                <h3>Loa Bluetooth Marshall Emberton II</h3>
                                <span class="box-price">
                                    3.490.000&#x20AB;
                                    <strike>4.990.000&#x20AB;</strike>
                                    <small>-30%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="13" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-marshall-middleton" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth Marshall Middleton" data-id="325332"
                                data-price="8090000.0" data-brand="Marshall" data-cate="Loa" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/325332/s16/loa-bluetooth-marshall-middleton-den-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth Marshall Middleton" width=300
                                        height=300>
                                </div>
                                <h3>Loa Bluetooth Marshall Middleton</h3>
                                <span class="box-price">
                                    8.090.000&#x20AB;
                                    <strike>8.990.000&#x20AB;</strike>
                                    <small>-10%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="14" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-marshall-stockwell-ii" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth Marshall Stockwell II" data-id="325333"
                                data-price="6020000.0" data-brand="Marshall" data-cate="Loa" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/325333/s16/loa-bluetooth-marshall-stockwell-ii-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth Marshall Stockwell II" width=300
                                        height=300>
                                </div>
                                <h3>Loa Bluetooth Marshall Stockwell II</h3>
                                <span class="box-price">
                                    6.020.000&#x20AB;
                                    <strike>6.690.000&#x20AB;</strike>
                                    <small>-10%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="15" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-marshall-kilburn-ii" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth Marshall Kilburn II" data-id="325334"
                                data-price="8090000.0" data-brand="Marshall" data-cate="Loa" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/325334/s16/loa-bluetooth-marshall-kilburn-ii-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth Marshall Kilburn II" width=300
                                        height=300>
                                </div>
                                <h3>Loa Bluetooth Marshall Kilburn II</h3>
                                <span class="box-price">
                                    8.090.000&#x20AB;
                                    <strike>8.990.000&#x20AB;</strike>
                                    <small>-10%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="16" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-marshall-tufton" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth Marshall Tufton" data-id="325335" data-price="9590000.0"
                                data-brand="Marshall" data-cate="Loa" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/325335/s16/loa-bluetooth-marshall-tufton-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth Marshall Tufton" width=300 height=300>
                                </div>
                                <h3>Loa Bluetooth Marshall Tufton</h3>
                                <span class="box-price">
                                    9.590.000&#x20AB;
                                    <strike>12.990.000&#x20AB;</strike>
                                    <small>-26%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="17" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-marshall-acton-iii" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth Marshall Acton III" data-id="325336"
                                data-price="7190000.0" data-brand="Marshall" data-cate="Loa" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/325336/s16/loa-bluetooth-marshall-acton-iii-kem-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth Marshall Acton III" width=300
                                        height=300>
                                </div>
                                <h3>Loa Bluetooth Marshall Acton III</h3>
                                <span class="box-price">
                                    7.190.000&#x20AB;
                                    <strike>7.990.000&#x20AB;</strike>
                                    <small>-10%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="18" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-marshall-stanmore-iii" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth Marshall Stanmore III" data-id="325337"
                                data-price="10780000.0" data-brand="Marshall" data-cate="Loa"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/325337/s16/loa-bluetooth-marshall-stanmore-iii-den-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth Marshall Stanmore III" width=300
                                        height=300>
                                </div>
                                <h3>Loa Bluetooth Marshall Stanmore III</h3>
                                <span class="box-price">
                                    10.780.000&#x20AB;
                                    <strike>11.990.000&#x20AB;</strike>
                                    <small>-10%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="19" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-marshall-woburn-iii-den" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth Marshall Woburn III" data-id="325338"
                                data-price="16180000.0" data-brand="Marshall" data-cate="Loa"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/325338/s16/loa-bluetooth-marshall-woburn-iii-den-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth Marshall Woburn III" width=300
                                        height=300>
                                </div>
                                <h3>Loa Bluetooth Marshall Woburn III</h3>
                                <span class="box-price">
                                    16.180.000&#x20AB;
                                    <strike>17.990.000&#x20AB;</strike>
                                    <small>-10%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                        <div class="item" data-pos="20" data-block="Tai nghe, Loa">

                            <a href="/loa/loa-bluetooth-jbl-partybox-320-pbstage320as" class="main-contain"
                                data-s="TwoPriceDetail" data-site="16" data-pro="3" data-cache="True"
                                data-name="Loa Bluetooth JBL Partybox 320 PBSTAGE320AS" data-id="326060"
                                data-price="13900000.0" data-brand="JBL" data-cate="Loa" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/2162/326060/s16/loa-bluetooth-jbl-partybox-320-pbstage320as-thumb-650x650.png"
                                        class="lazyload" alt="Loa Bluetooth JBL Partybox 320 PBSTAGE320AS" width=300
                                        height=300>
                                </div>
                                <h3>Loa Bluetooth JBL Partybox 320 PBSTAGE320AS</h3>
                                <span class="box-price">
                                    13.900.000&#x20AB;
                                    <strike>15.900.000&#x20AB;</strike>
                                    <small>-12%</small>
                                </span>
                                <p class="item-txt-online orange">Online gia&#x301; re&#x309; qu&#xE1;</p>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="box-slide">
                    <a href="phu-kien" class="logo-cate  ">
                        <h2 class="title-text-phukien">Ph&#x1EE5; ki&#x1EC7;n</h2>
                    </a>
                    <div class="slide-cate owl-carousel owl-theme" data-block="Ph&#x1EE5; ki&#x1EC7;n">
                        <div class="item" data-pos="1" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/adapter-sac/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True" data-name="Adapter s&#x1EA1;c Apple USB-C 20W" data-id="230315"
                                data-price="550000.0" data-brand="Apple" data-cate="Adapter s&#x1EA1;c"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/9499/230315/s16/adapter-sac-type-c-20w-cho-iphone-ipad-apple-mhje3-101021-023343-650x650.png"
                                        class="lazyload" alt="Adapter s&#x1EA1;c Apple USB-C 20W" width=300
                                        height=300>
                                </div>
                                <h3>Adapter sạc Apple USB-C 20W</h3>
                                <strong class="price">550.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="2" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/phim-but/apple-pencil-pro" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True" data-name="Apple Pencil Pro"
                                data-id="325539" data-price="3290000.0" data-brand="Apple"
                                data-cate="B&#xFA;t tablet" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/1882/325539/s16/apple-pencil-pro-650x650.png"
                                        class="lazyload" alt="Apple Pencil Pro" width=300 height=300>
                                </div>
                                <h3>Apple Pencil Pro</h3>
                                <span class="box-price">
                                    3.290.000&#x20AB;
                                    <strike>3.490.000&#x20AB;</strike>
                                    <small>-5%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="3" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/ban-phim/magic-keyboard" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True" data-name="Magic Keyboard"
                                data-id="251881" data-price="1990000.0" data-brand="Apple"
                                data-cate="B&#xE0;n ph&#xED;m" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/4547/251881/s16/magic-keyboard-thumb-650x650.png"
                                        class="lazyload" alt="Magic Keyboard" width=300 height=300>
                                </div>
                                <h3>Magic Keyboard</h3>
                                <span class="box-price">
                                    1.990.000&#x20AB;
                                    <strike>2.290.000&#x20AB;</strike>
                                    <small>-13%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="4" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/cap-sac/cap-type-c-type-c-1m-apple-mqkj3" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="C&#xE1;p s&#x1EA1;c Type C - Type C 1m" data-id="315202"
                                data-price="550000.0" data-brand="Apple" data-cate="C&#xE1;p s&#x1EA1;c"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/58/315202/s16/cap-type-c-type-c-1m-apple-mqkj3-thumb-5-650x650.png"
                                        class="lazyload" alt="C&#xE1;p s&#x1EA1;c Type C - Type C 1m" width=300
                                        height=300>
                                </div>
                                <h3>Cáp sạc Type C - Type C 1m</h3>
                                <strong class="price">550.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="5" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/op-lung-ipad/bao-da-smart-folio-cho-ipad-pro-m4-11-inch" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="Bao da Smart Folio cho iPad Pro M4 11 inch" data-id="325750"
                                data-price="2290000.0" data-brand="Apple" data-cate="&#x1ED0;p l&#x1B0;ng iPad"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/1662/325750/s16/bao-da-smart-folio-cho-ipad-pro-m4-11-inch-thumb-650x650.png"
                                        class="lazyload" alt="Bao da Smart Folio cho iPad Pro M4 11 inch" width=300
                                        height=300>
                                </div>
                                <h3>Bao da Smart Folio cho iPad Pro M4 11 inch</h3>
                                <strong class="price">2.290.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="6" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/adapter-sac/adapter-sac-apple-type-c-70w" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="Adapter s&#x1EA1;c Apple Type C 70W" data-id="309907"
                                data-price="1490000.0" data-brand="Apple" data-cate="Adapter s&#x1EA1;c"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/9499/309907/s16/adapter-sac-apple-type-c-70w-thumb-650x650.png"
                                        class="lazyload" alt="Adapter s&#x1EA1;c Apple Type C 70W" width=300
                                        height=300>
                                </div>
                                <h3>Adapter sạc Apple Type C 70W</h3>
                                <strong class="price">1.490.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="7" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/phim-but/apple-pencil-usb-c" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True" data-name="Apple Pencil (USB-C)"
                                data-id="318196" data-price="2190000.0" data-brand="Apple"
                                data-cate="B&#xFA;t tablet" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/1882/318196/s16/apple-pencil-usb-c-091123-031115-650x650.png"
                                        class="lazyload" alt="Apple Pencil (USB-C)" width=300 height=300>
                                </div>
                                <h3>Apple Pencil (USB-C)</h3>
                                <strong class="price">2.190.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="8" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/op-lung-iphone/op-lung-magsafe-iphone-16-pro-max-nhua-trong-apple"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="&#x1ED0;p l&#x1B0;ng MagSafe iPhone 16 Pro Max Nh&#x1EF1;a Trong Apple"
                                data-id="329778" data-price="1430000.0" data-brand="Apple"
                                data-cate="&#x1ED0;p l&#x1B0;ng, v&#xED; da iPhone" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/Products/Images/60/329778/op-lung-magsafe-iphone-16-pro-max-nhua-trong-apple-thumb-1-638695242643696877-650x650.png"
                                        class="lazyload"
                                        alt="&#x1ED0;p l&#x1B0;ng MagSafe iPhone 16 Pro Max Nh&#x1EF1;a Trong Apple"
                                        width=300 height=300>
                                </div>
                                <h3>Ốp lưng MagSafe iPhone 16 Pro Max Nhựa Trong Apple</h3>
                                <strong class="price">1.430.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="9" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/ban-phim/magic-keybroad-cho-ipad-air-m2-11-inch" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="Magic Keyboard cho iPad Air M2 11 inch" data-id="325542"
                                data-price="8290000.0" data-brand="Apple" data-cate="B&#xE0;n ph&#xED;m"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/4547/325542/s16/magic-keybroad-cho-ipad-air-m2-11-inch-650x650.png"
                                        class="lazyload" alt="Magic Keyboard cho iPad Air M2 11 inch" width=300
                                        height=300>
                                </div>
                                <h3>Magic Keyboard cho iPad Air M2 11 inch</h3>
                                <strong class="price">8.290.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="10" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/op-lung-iphone/op-lung-magsafe-iphone-16-pro-max-silicone-apple"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="&#x1ED0;p l&#x1B0;ng MagSafe iPhone 16 Pro Max Silicone Apple"
                                data-id="329779" data-price="1430000.0" data-brand="Apple"
                                data-cate="&#x1ED0;p l&#x1B0;ng, v&#xED; da iPhone" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdnv2.tgdd.vn/mwg-static/topzone/Products/Images/60/329779/op-lung-magsafe-iphone-16-pro-max-silicone-apple-638629599798112104-650x650.png"
                                        class="lazyload"
                                        alt="&#x1ED0;p l&#x1B0;ng MagSafe iPhone 16 Pro Max Silicone Apple" width=300
                                        height=300>
                                </div>
                                <h3>Ốp lưng MagSafe iPhone 16 Pro Max Silicone Apple</h3>
                                <strong class="price">1.430.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="11" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/op-lung-ipad/bao-da-smart-folio-cho-ipad-air-m2-11-inch" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="Bao da Smart Folio cho iPad Air M2 11 inch" data-id="325752"
                                data-price="2290000.0" data-brand="Apple" data-cate="&#x1ED0;p l&#x1B0;ng iPad"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/1662/325752/s16/bao-da-smart-folio-cho-ipad-air-m2-11-inch-thumb-1-650x650.png"
                                        class="lazyload" alt="Bao da Smart Folio cho iPad Air M2 11 inch" width=300
                                        height=300>
                                </div>
                                <h3>Bao da Smart Folio cho iPad Air M2 11 inch</h3>
                                <strong class="price">2.290.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="12" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/op-lung-iphone/vi-da-magsafe-apple-vai-tinh-det" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="V&#xED; da MagSafe Apple V&#x1EA3;i tinh d&#x1EC7;t" data-id="330337"
                                data-price="1690000.0" data-brand="Apple"
                                data-cate="&#x1ED0;p l&#x1B0;ng, v&#xED; da iPhone" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/60/330337/s16/vi-da-magsafe-apple-vai-tinh-det-tim-650x650.png"
                                        class="lazyload" alt="V&#xED; da MagSafe Apple V&#x1EA3;i tinh d&#x1EC7;t"
                                        width=300 height=300>
                                </div>
                                <h3>Ví da MagSafe Apple Vải tinh dệt</h3>
                                <strong class="price">1.690.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="13" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/hub-chuyen-doi/cap-chuyen-doi-usb-c-sang-lightning-apple-muqx3"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="C&#xE1;p chuy&#x1EC3;n &#x111;&#x1ED5;i USB-C sang Lightning"
                                data-id="315851" data-price="840000.0" data-brand="Apple"
                                data-cate="Hub, c&#xE1;p chuy&#x1EC3;n &#x111;&#x1ED5;i" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/12979/315851/s16/cap-chuyen-doi-usb-c-sang-lightning-apple-muqx3-thumb-650x650.png"
                                        class="lazyload"
                                        alt="C&#xE1;p chuy&#x1EC3;n &#x111;&#x1ED5;i USB-C sang Lightning" width=300
                                        height=300>
                                </div>
                                <h3>Cáp chuyển đổi USB-C sang Lightning</h3>
                                <span class="box-price">
                                    840.000&#x20AB;
                                    <strike>940.000&#x20AB;</strike>
                                    <small>-10%</small>
                                </span>
                            </a>

                        </div>
                        <div class="item" data-pos="14" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/airtag/thiet-bi-dinh-vi-thong-minh-airtag-1-pack-mx532" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="AirTag" data-id="238092" data-price="800000.0" data-brand="Apple"
                                data-cate="Airtag" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/10618/238092/s16/airtag-650x650.png"
                                        class="lazyload" alt="AirTag" width=300 height=300>
                                </div>
                                <h3>AirTag</h3>
                                <strong class="price">800.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="15" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/hub-chuyen-doi/cap-chuyen-doi-lightning-sang-35mm-mmx62" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="C&#xE1;p chuy&#x1EC3;n &#x111;&#x1ED5;i Lightning sang 3.5 mm"
                                data-id="154845" data-price="300000.0" data-brand="Apple"
                                data-cate="Hub, c&#xE1;p chuy&#x1EC3;n &#x111;&#x1ED5;i" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/12979/154845/s16/116-650x650.png"
                                        class="lazyload"
                                        alt="C&#xE1;p chuy&#x1EC3;n &#x111;&#x1ED5;i Lightning sang 3.5 mm" width=300
                                        height=300>
                                </div>
                                <h3>Cáp chuyển đổi Lightning sang 3.5 mm</h3>
                                <strong class="price">300.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="16" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/cap-sac/cap-type-c-type-c-80cm-apple-mq4h2" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="C&#xE1;p USB-C Thunderbolt 3 Apple 0.8 m" data-id="156780"
                                data-price="890000.0" data-brand="Apple" data-cate="C&#xE1;p s&#x1EA1;c"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/58/156780/s16/125-650x650.png"
                                        class="lazyload" alt="C&#xE1;p USB-C Thunderbolt 3 Apple 0.8 m" width=300
                                        height=300>
                                </div>
                                <h3>Cáp USB-C Thunderbolt 3 Apple 0.8 m</h3>
                                <strong class="price">890.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="17" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/hub-chuyen-doi/cap-chuyen-doi-type-c-sang-35mm-apple-mu7e2-trang"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="C&#xE1;p chuy&#x1EC3;n &#x111;&#x1ED5;i Type C sang 3.5 mm"
                                data-id="203759" data-price="300000.0" data-brand="Apple"
                                data-cate="Hub, c&#xE1;p chuy&#x1EC3;n &#x111;&#x1ED5;i" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/12979/203759/s16/cap-chuyen-doi-type-c-sang-35mm-apple-mu7e2-trang-thumb-1-3-650x650.png"
                                        class="lazyload"
                                        alt="C&#xE1;p chuy&#x1EC3;n &#x111;&#x1ED5;i Type C sang 3.5 mm" width=300
                                        height=300>
                                </div>
                                <h3>Cáp chuyển đổi Type C sang 3.5 mm</h3>
                                <strong class="price">300.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="18" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/cap-sac/cap-type-c-type-c-1m-apple-muf72-trang" class="main-contain"
                                data-s="Nomal" data-site="16" data-pro="3" data-cache="True"
                                data-name="C&#xE1;p s&#x1EA1;c USB-C 1m" data-id="203760" data-price="550000.0"
                                data-brand="Apple" data-cate="C&#xE1;p s&#x1EA1;c" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/58/203760/s16/122-650x650.png"
                                        class="lazyload" alt="C&#xE1;p s&#x1EA1;c USB-C 1m" width=300 height=300>
                                </div>
                                <h3>Cáp sạc USB-C 1m</h3>
                                <strong class="price">550.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="19" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/hub-chuyen-doi/adapter-type-c-sang-hdmi-type-c-usb-apple-muf82"
                                class="main-contain" data-s="Nomal" data-site="16" data-pro="3"
                                data-cache="True"
                                data-name="Adapter chuy&#x1EC3;n &#x111;&#x1ED5;i Type C sang HDMI/Type C/USB"
                                data-id="215983" data-price="2100000.0" data-brand="Apple"
                                data-cate="Hub, c&#xE1;p chuy&#x1EC3;n &#x111;&#x1ED5;i" data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/12979/215983/s16/adapter-type-c-sang-hdmi-type-c-usb-apple-muf82-thumb-1-650x650.png"
                                        class="lazyload"
                                        alt="Adapter chuy&#x1EC3;n &#x111;&#x1ED5;i Type C sang HDMI/Type C/USB"
                                        width=300 height=300>
                                </div>
                                <h3>Adapter chuyển đổi Type C sang HDMI/Type C/USB</h3>
                                <strong class="price">2.100.000&#x20AB;</strong>
                            </a>

                        </div>
                        <div class="item" data-pos="20" data-block="Ph&#x1EE5; ki&#x1EC7;n">

                            <a href="/cap-sac/cap-lightning-1m-apple-mxly2" class="main-contain" data-s="Nomal"
                                data-site="16" data-pro="3" data-cache="True"
                                data-name="C&#xE1;p s&#x1EA1;c USB - Lightning 1m" data-id="217437"
                                data-price="550000.0" data-brand="Apple" data-cate="C&#xE1;p s&#x1EA1;c"
                                data-box="BoxHome">
                                <label class=no-label></label>
                                <div class="img-slide">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/58/217437/s16/cap-lightning-1m-apple-mxly2-thumb-1-650x650.png"
                                        class="lazyload" alt="C&#xE1;p s&#x1EA1;c USB - Lightning 1m" width=300
                                        height=300>
                                </div>
                                <h3>Cáp sạc USB - Lightning 1m</h3>
                                <strong class="price">550.000&#x20AB;</strong>
                            </a>

                        </div>
                    </div>
                </div>

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
                        <a
                            href="/tekzone/iphone-13-series-gia-chi-tu-12-590-000-dong-mua-tra-cham-0-lai-suat-1575884">
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
                        <a
                            href="/tekzone/ipad-10-wifi-64gb-gia-chi-tu-9-690-000-dong-mua-tra-cham-0-lai-suat-1575847">
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



        {{-- <div class="list-sieuthi">
        <div class="center-page">
            <div class="store-province">
                <b>Mở bán tại 85 cửa hàng</b>
                <div>
                    <span>Chọn tỉnh thành</span>
                    <ul>
                            <li data-province="3">H&#x1ED3; Ch&#xED; Minh</li>
                            <li data-province="5">H&#xE0; N&#x1ED9;i</li>
                            <li data-province="9">&#x110;&#xE0; N&#x1EB5;ng</li>
                            <li data-province="82">An Giang</li>
                            <li data-province="102">B&#xE0; R&#x1ECB;a - V&#x169;ng T&#xE0;u</li>
                            <li data-province="106">B&#x1EAF;c Ninh</li>
                            <li data-province="107">B&#x1EBF;n Tre</li>
                            <li data-province="108">B&#xEC;nh &#x110;&#x1ECB;nh</li>
                            <li data-province="109">B&#xEC;nh D&#x1B0;&#x1A1;ng</li>
                            <li data-province="110">B&#xEC;nh Ph&#x1B0;&#x1EDB;c</li>
                            <li data-province="111">B&#xEC;nh Thu&#x1EAD;n</li>
                            <li data-province="7">C&#x1EA7;n Th&#x1A1;</li>
                            <li data-province="6">&#x110;&#x1EAF;k L&#x1EAF;k</li>
                            <li data-province="8">&#x110;&#x1ED3;ng Nai</li>
                            <li data-province="116">Gia Lai</li>
                            <li data-province="120">H&#xE0; T&#x129;nh</li>
                            <li data-province="101">H&#x1EA3;i Ph&#xF2;ng</li>
                            <li data-province="122">H&#x1EAD;u Giang</li>
                            <li data-province="124">H&#x1B0;ng Y&#xEA;n</li>
                            <li data-province="125">Kh&#xE1;nh H&#xF2;a</li>
                            <li data-province="126">Ki&#xEA;n Giang</li>
                            <li data-province="129">L&#xE2;m &#x110;&#x1ED3;ng</li>
                            <li data-province="131">L&#xE0;o Cai</li>
                            <li data-province="132">Long An</li>
                            <li data-province="133">Nam &#x110;&#x1ECB;nh</li>
                            <li data-province="134">Ngh&#x1EC7; An</li>
                            <li data-province="136">Ninh Thu&#x1EAD;n</li>
                            <li data-province="142">Qu&#x1EA3;ng Ninh</li>
                            <li data-province="143">Qu&#x1EA3;ng Tr&#x1ECB;</li>
                            <li data-province="146">T&#xE2;y Ninh</li>
                            <li data-province="148">Th&#xE1;i Nguy&#xEA;n</li>
                            <li data-province="149">Thanh H&#xF3;a</li>
                            <li data-province="151">Ti&#x1EC1;n Giang</li>
                            <li data-province="154">V&#x129;nh Long</li>
                            <li data-province="155">V&#x129;nh Ph&#xFA;c</li>
                    </ul>
                </div>
            </div>
            <div class="store-list">
                    <p class="p149 ">
                        <a href="/sieu-thi-duong-dai-lo-le-loi-phuong-phu-son-thanh-pho-thanh-hoa-tinh-thanh-hoa-id-13881">
                            <span>TopZone &#x110;&#x1EA1;i L&#x1ED9; L&#xEA; L&#x1EE3;i <span>Xem chỉ đường</span></span>
                            <span>&#x110;&#x1B0;&#x1EDD;ng &#x110;&#x1EA1;i l&#x1ED9; L&#xEA; L&#x1EE3;i, Ph&#x1B0;&#x1EDD;ng Ph&#xFA; S&#x1A1;n, Th&#xE0;nh ph&#x1ED1; Thanh H&#xF3;a, T&#x1EC9;nh Thanh H&#xF3;a, Vi&#x1EC7;t Nam</span>
                        </a>
                    </p>
                    <p class="p102 ">
                        <a href="/sieu-thi-267a-cach-mang-thang-8-p-phuoc-hiep-tp-ba-ria-t-ba-ria-vung-tau-id-10337">
                            <span>TopZone C&#xE1;ch M&#x1EA1;ng Th&#xE1;ng 8 <span>Xem chỉ đường</span></span>
                            <span>267A C&#xE1;ch m&#x1EA1;ng th&#xE1;ng t&#xE1;m, Ph&#x1B0;&#x1EDD;ng Ph&#x1B0;&#x1EDB;c Hi&#x1EC7;p, Th&#xE0;nh ph&#x1ED1; B&#xE0; R&#x1ECB;a, T&#x1EC9;nh B&#xE0; R&#x1ECB;a - V&#x169;ng T&#xE0;u, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 ">
                        <a href="/sieu-thi-133-xo-viet-nghe-tinh-phuong-17-quan-binh-thanh-thanh-pho-ho-chi-minh-id-12958">
                            <span>TopZone 133 X&#xF4; Vi&#x1EBF;t Ngh&#x1EC7; T&#x129;nh <span>Xem chỉ đường</span></span>
                            <span>133 X&#xF4; Vi&#x1EBF;t Ngh&#x1EC7; T&#x129;nh, Ph&#x1B0;&#x1EDD;ng 17, Qu&#x1EAD;n B&#xEC;nh Th&#x1EA1;nh, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 ">
                        <a href="/sieu-thi-125-nguyen-xi-phuong-26-quan-binh-thanh-thanh-pho-ho-chi-minh-id-12959">
                            <span>TopZone Nguy&#x1EC5;n X&#xED; <span>Xem chỉ đường</span></span>
                            <span>125 Nguy&#x1EC5;n X&#xED;, Ph&#x1B0;&#x1EDD;ng 26, Qu&#x1EAD;n B&#xEC;nh Th&#x1EA1;nh, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p129 ">
                        <a href="/sieu-thi-4-23-5-23-tran-phu-phuong-4-thanh-pho-da-lat-tinh-lam-dong-id-13961">
                            <span>TopZone Tr&#x1EA7;n Ph&#xFA;T <span>Xem chỉ đường</span></span>
                            <span>4/23-5/23 Tr&#x1EA7;n Ph&#xFA;, Ph&#x1B0;&#x1EDD;ng 4, Th&#xE0;nh ph&#x1ED1; &#x110;&#xE0; L&#x1EA1;t, T&#x1EC9;nh L&#xE2;m &#x110;&#x1ED3;ng, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p5 ">
                        <a href="/sieu-thi-53-55-dang-phuc-thong-doi-dien-cay-xang-doc-la-thon-la-coi-xa-yen-vien-huyen-gia-lam-thanh-pho-ha-noi-id-13884">
                            <span>TopZone Y&#xEA;n Vi&#xEA;n <span>Xem chỉ đường</span></span>
                            <span>Th&#xF4;n L&#xE3; C&#xF4;i, X&#xE3; Y&#xEA;n Vi&#xEA;n, Huy&#x1EC7;n Gia L&#xE2;m, Th&#xE0;nh ph&#x1ED1; H&#xE0; N&#x1ED9;i, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p154 hide">
                        <a href="/sieu-thi-210-le-thai-to-phuong-2-tpvinh-long-vinh-long-id-10330">
                            <span>TopZone L&#xEA; Th&#xE1;i T&#x1ED5; <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 210 &#x111;&#x1B0;&#x1EDD;ng L&#xEA; Th&#xE1;i T&#x1ED5;, Ph&#x1B0;&#x1EDD;ng 2, Th&#xE0;nh ph&#x1ED1; V&#x129;nh Long, T&#x1EC9;nh V&#x129;nh Long, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-191-dien-bien-phu-p-6-q-3-thanh-pho-ho-chi-minh-id-9815">
                            <span>TopZone &#x110;i&#x1EC7;n Bi&#xEA;n Ph&#x1EE7; <span>Xem chỉ đường</span></span>
                            <span>191 &#x110;i&#x1EC7;n Bi&#xEA;n Ph&#x1EE7; , Ph&#x1B0;&#x1EDD;ng 06, Qu&#x1EAD;n 3, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p146 hide">
                        <a href="/sieu-thi-so-14-pham-hung-phuong-long-hoa-hoa-thanh-tay-ninh-id-13962">
                            <span>TopZone H&#xF2;a Th&#xE0;nh <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 1/4, khu ph&#x1ED1; 3, Th&#x1ECB; Tr&#x1EA5;n H&#xF2;a Th&#xE0;nh, Th&#x1ECB; x&#xE3; Ho&#xE0; Th&#xE0;nh, T&#x1EC9;nh T&#xE2;y Ninh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p5 hide">
                        <a href="/sieu-thi-so-34-to-2-khu-xuan-ha-tt-xuan-mai-h-chuong-my-tp-ha-noi-id-13885">
                            <span>TopZone Xu&#xE2;n Mai <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 34, t&#x1ED5; 2, Khu Xu&#xE2;n H&#xE0;, Th&#x1ECB; Tr&#x1EA5;n Xu&#xE2;n Mai, Huy&#x1EC7;n Ch&#x1B0;&#x1A1;ng M&#x1EF9;, Th&#xE0;nh ph&#x1ED1; H&#xE0; N&#x1ED9;i, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p107 hide">
                        <a href="/sieu-thi-591b-592b2-duong-dong-khoi-p-phu-khuong-tp-ben-tre-ben-tre-id-10332">
                            <span>TopZone &#x110;&#x1ED3;ng Kh&#x1EDF;i <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 591B-592B2, &#x110;&#x1EA1;i L&#x1ED9; &#x110;&#x1ED3;ng Kh&#x1EDF;i, Ph&#x1B0;&#x1EDD;ng Ph&#xFA; Kh&#x1B0;&#x1A1;ng, Th&#xE0;nh ph&#x1ED1; B&#x1EBF;n Tre, Tinh B&#x1EBF;n Tre, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p151 hide">
                        <a href="/sieu-thi-49-2-ap-bac-phuong-5-tpmy-tho-tien-giang-id-10331">
                            <span>TopZone &#x1EA4;p B&#x1EAF;c <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 49/2 &#x111;&#x1B0;&#x1EDD;ng &#x1EA4;p B&#x1EAF;c, Ph&#x1B0;&#x1EDD;ng 5, Th&#xE0;nh ph&#x1ED1; M&#x1EF9; Tho, T&#x1EC9;nh Ti&#x1EC1;n Giang, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p146 hide">
                        <a href="/sieu-thi-so-10-quoc-lo-22-khu-pho-gia-huynh-thi-tran-trang-bang-thi-xa-trang-bang-tinh-tay-ninh-id-13883">
                            <span>TopZone Tr&#x1EA3;ng B&#xE0;ng <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 10, Qu&#x1ED1;c l&#x1ED9; 22, Khu ph&#x1ED1; Gia Hu&#x1EF3;nh, Th&#x1ECB; Tr&#x1EA5;n Tr&#x1EA3;ng B&#xE0;ng, Th&#x1ECB; x&#xE3; Tr&#x1EA3;ng B&#xE0;ng, T&#x1EC9;nh T&#xE2;y Ninh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p132 hide">
                        <a href="/sieu-thi-quoc-lo-50-thi-tran-can-duoc-huyen-can-duoc-tinh-long-an-id-13888">
                            <span>TopZone Qu&#x1ED1;c L&#x1ED9; 50 (C&#x1EA7;n &#x110;&#x1B0;&#x1EDB;c) <span>Xem chỉ đường</span></span>
                            <span>Th&#x1EED;a s&#x1ED1; 266, T&#x1EDD; b&#x1EA3;n &#x111;&#x1ED3; s&#x1ED1; 5, Qu&#x1ED1;c L&#x1ED9; 50, Th&#x1ECB; tr&#x1EA5;n C&#x1EA7;n &#x110;&#x1B0;&#x1EDB;c, Huy&#x1EC1;n C&#x1EA7;n &#x110;&#x1B0;&#x1EDB;c, T&#x1EC9;nh Long An, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p122 hide">
                        <a href="/sieu-thi-so-17-duong-3-2-phuong-v-thanh-pho-vi-thanh-tinh-hau-giang-id-13965">
                            <span>TopZone &#x110;&#x1B0;&#x1EDD;ng 3/2 <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 17, &#x111;&#x1B0;&#x1EDD;ng 3/2, Ph&#x1B0;&#x1EDD;ng V, Th&#xE0;nh ph&#x1ED1; V&#x1ECB; Thanh, T&#x1EC9;nh H&#x1EAD;u Giang, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p146 hide">
                        <a href="/sieu-thi-583-cach-mang-thang-8-khu-pho-2-p-3-tp-tay-ninh-tay-ninh-id-10334">
                            <span>TopZone C&#xE1;ch M&#x1EA1;ng Th&#xE1;ng T&#xE1;m <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 583, &#x111;&#x1B0;&#x1EDD;ng C&#xE1;ch M&#x1EA1;ng Th&#xE1;ng T&#xE1;m, khu ph&#x1ED1; 2, Ph&#x1B0;&#x1EDD;ng 3, Th&#xE0;nh ph&#x1ED1; T&#xE2;y Ninh, T&#x1EC9;nh T&#xE2;y Ninh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p131 hide">
                        <a href="/sieu-thi-nga-6-pho-ly-cong-uan-phuong-kim-tan-thanh-pho-lao-cai-tinh-lao-cai-id-13889">
                            <span>TopZone L&#xFD; C&#xF4;ng U&#x1EA9;n <span>Xem chỉ đường</span></span>
                            <span>Ng&#xE3; 6 ph&#x1ED1; L&#xFD; C&#xF4;ng U&#x1EA9;n, Ph&#x1B0;&#x1EDD;ng Kim T&#xE2;n, Th&#xE0;nh ph&#x1ED1; L&#xE0;o Cai, T&#x1EC9;nh L&#xE0;o Cai, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p8 hide">
                        <a href="/sieu-thi-so-1-1-pham-van-thuan-tp-bien-hoa-dong-nai-id-10333">
                            <span>TopZone Ph&#x1EA1;m V&#x103;n Thu&#x1EAD;n <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 1/1, Ph&#x1EA1;m V&#x103;n Thu&#x1EAD;n, KP 9, Ph&#x1B0;&#x1EDD;ng Tam Hi&#x1EC7;p, Th&#xE0;nh ph&#x1ED1; Bi&#xEA;n Ho&#xE0;, T&#x1EC9;nh &#x110;&#x1ED3;ng Nai, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p154 hide">
                        <a href="/sieu-thi-to-21-khom-5-phuong-cai-von-thi-xa-binh-minh-tinh-vinh-long-id-13886">
                            <span>TopZone C&#xE1;i V&#x1ED3;n <span>Xem chỉ đường</span></span>
                            <span>T&#x1ED5; 21, kh&#xF3;m 5, Ph&#x1B0;&#x1EDD;ng C&#xE1;i V&#x1ED3;n, Th&#x1ECB; x&#xE3; B&#xEC;nh Minh, T&#x1EC9;nh V&#x129;nh Long, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p109 hide">
                        <a href="/sieu-thi-so-77-dai-lo-binh-duong-pphu-tho-tpthu-dau-mot-tinh-binh-duong-id-10930">
                            <span>TopZone &#x110;&#x1EA1;i l&#x1ED9; B&#xEC;nh D&#x1B0;&#x1A1;ng <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 77 &#x110;&#x1EA1;i l&#x1ED9; B&#xEC;nh D&#x1B0;&#x1A1;ng, Ph&#x1B0;&#x1EDD;ng Ph&#xFA; Th&#x1ECD;, Th&#xE0;nh ph&#x1ED1; Th&#x1EE7; D&#x1EA7;u M&#x1ED9;t, T&#x1EC9;nh B&#xEC;nh D&#x1B0;&#x1A1;ng, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p8 hide">
                        <a href="/sieu-thi-so-207-duong-hung-vuong-p-xuan-hoa-tp-long-khanh-dong-nai-id-10336">
                            <span>TopZone H&#xF9;ng V&#x1B0;&#x1A1;ng <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 207 &#x111;&#x1B0;&#x1EDD;ng H&#xF9;ng V&#x1B0;&#x1A1;ng, Ph&#x1B0;&#x1EDD;ng Xu&#xE2;n H&#xF2;a, Th&#xE0;nh ph&#x1ED1; Long Kh&#xE1;nh, T&#x1EC9;nh &#x110;&#x1ED3;ng Nai, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-32-hoang-cam-phuong-linh-xuan-thanh-pho-thu-duc-thanh-pho-ho-chi-minh-id-13963">
                            <span>TopZone Qu&#x1ED1;c l&#x1ED9; 1K <span>Xem chỉ đường</span></span>
                            <span>30-32 Qu&#x1ED1;c l&#x1ED9; 1K, Ph&#x1B0;&#x1EDD;ng Linh Xu&#xE2;n, Th&#xE0;nh ph&#x1ED1; Th&#x1EE7; &#x110;&#x1EE9;c, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-670-au-co-p-10-q-tan-binh-thanh-pho-ho-chi-minh-id-9816">
                            <span>TopZone &#xC2;u C&#x1A1; <span>Xem chỉ đường</span></span>
                            <span>670 &#xC2;u C&#x1A1;, Ph&#x1B0;&#x1EDD;ng 10, Qu&#x1EAD;n T&#xE2;n B&#xEC;nh, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p102 hide">
                        <a href="/sieu-thi-290-truong-cong-dinh-p8-tp-vung-tau-ba-ria-vung-tau-id-10335">
                            <span>TopZone Tr&#x1B0;&#x1A1;ng C&#xF4;ng &#x110;&#x1ECB;nh <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 290 Tr&#x1B0;&#x1A1;ng C&#xF4;ng &#x110;&#x1ECB;nh, Ph&#x1B0;&#x1EDD;ng 8, Th&#xE0;nh ph&#x1ED1; V&#x169;ng T&#xE0;u, T&#x1EC9;nh B&#xE0; R&#x1ECB;a - V&#x169;ng T&#xE0;u, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p5 hide">
                        <a href="/sieu-thi-238-nguyen-trai-p-trung-van-q-nam-tu-liem-ha-noi-id-9817">
                            <span>TopZone Nguy&#x1EC5;n Tr&#xE3;i <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 238, &#x111;&#x1B0;&#x1EDD;ng Nguy&#x1EC5;n Tr&#xE3;i, Ph&#x1B0;&#x1EDD;ng Trung V&#x103;n, Qu&#x1EAD;n Nam T&#x1EEB; Li&#xEA;m, Th&#xE0;nh ph&#x1ED1; H&#xE0; N&#x1ED9;i, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-49-tinh-lo-8-khu-pho-1-thi-tran-cu-chi-huyen-cu-chi-thanh-pho-ho-chi-minh-id-12560">
                            <span>TopZone T&#x1EC9;nh L&#x1ED9; 8 <span>Xem chỉ đường</span></span>
                            <span>49 T&#x1EC9;nh l&#x1ED9; 8, khu ph&#x1ED1; 1, Th&#x1ECB; Tr&#x1EA5;n C&#x1EE7; Chi, Huy&#x1EC7;n C&#x1EE7; Chi, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p125 hide">
                        <a href="/sieu-thi-khom-5-thi-tran-van-gia-huyen-van-ninh-tinh-khanh-hoa-id-13892">
                            <span>TopZone V&#x1EA1;n Gi&#xE3; <span>Xem chỉ đường</span></span>
                            <span>Kh&#xF3;m 5, Th&#x1ECB; Tr&#x1EA5;n V&#x1EA1;n Gi&#xE3;, Huy&#x1EC7;n V&#x1EA1;n Ninh, T&#x1EC9;nh Kh&#xE1;nh H&#xF2;a, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p132 hide">
                        <a href="/sieu-thi-so-159-161-duong-825-o-6-khu-b-thi-tran-hau-nghia-huyen-duc-hoa-tinh-long-an-id-13890">
                            <span>TopZone H&#x1EAD;u Ngh&#x129;a <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 159-161, &#x110;&#x1B0;&#x1EDD;ng 825, &#xD4; 6, Khu B, Th&#x1ECB; Tr&#x1EA5;n H&#x1EAD;u Ngh&#x129;a, Huy&#x1EC7;n &#x110;&#x1EE9;c Ho&#xE0;, T&#x1EC9;nh Long An, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p82 hide">
                        <a href="/sieu-thi-170a-tran-hung-dao-p-my-xuyen-tp-long-xuyen-an-giang-id-10700">
                            <span>TopZone Tr&#x1EA7;n H&#x1B0;ng &#x110;&#x1EA1;o <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 170A Tr&#x1EA7;n H&#x1B0;ng &#x110;&#x1EA1;o, Ph&#x1B0;&#x1EDD;ng M&#x1EF9; Xuy&#xEA;n, Th&#xE0;nh ph&#x1ED1; Long Xuy&#xEA;n, T&#x1EC9;nh An Giang, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-so-620-622-624-626-628-nguyen-oanh-p-6-q-go-vap-tp-ho-chi-minh-id-10824">
                            <span>TopZone Nguy&#x1EC5;n Oanh <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 620-622-624-626-628 Nguy&#x1EC5;n Oanh, Ph&#x1B0;&#x1EDD;ng 6, Qu&#x1EAD;n G&#xF2; V&#x1EA5;p, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p151 hide">
                        <a href="/sieu-thi-313-duong-nguyen-hue-kp-iii-phuong-2-tx-go-cong-tinh-tien-giang-id-11759">
                            <span>TopZone 313 Nguy&#x1EC5;n Hu&#x1EC7; <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 313 Nguy&#x1EC5;n Hu&#x1EC7;, Ph&#x1B0;&#x1EDD;ng 2, Th&#x1ECB; x&#xE3; G&#xF2; C&#xF4;ng, T&#x1EC9;nh Ti&#x1EC1;n Giang, Vi&#x1EC7;t Nam</span>
                        </a>
                    </p>
                    <p class="p132 hide">
                        <a href="/sieu-thi-duong-tinh-lo-10-xa-duc-hoa-ha-huyen-duc-hoa-long-an-id-11758">
                            <span>TopZone T&#x1EC9;nh L&#x1ED9; 10 (&#x110;&#x1EE9;c H&#xF2;a H&#x1EA1;) <span>Xem chỉ đường</span></span>
                            <span>&#x110;&#x1B0;&#x1EDD;ng T&#x1EC9;nh l&#x1ED9; 10, X&#xE3; &#x110;&#x1EE9;c Ho&#xE0; H&#x1EA1;, Huy&#x1EC7;n &#x110;&#x1EE9;c Ho&#xE0;, T&#x1EC9;nh Long An, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-451-le-trong-tan-phuong-son-ky-quan-tan-phu-tp-ho-chi-minh-id-12849">
                            <span>TopZone L&#xEA; Tr&#x1ECD;ng T&#x1EA5;n <span>Xem chỉ đường</span></span>
                            <span>449 - 451 L&#xEA; Tr&#x1ECD;ng T&#x1EA5;n, Ph&#x1B0;&#x1EDD;ng S&#x1A1;n K&#x1EF3;, Qu&#x1EAD;n T&#xE2;n Ph&#xFA;, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-171-nguyen-son-phuong-phu-thanh-quan-tan-phu-thanh-pho-ho-chi-minh-id-12608">
                            <span>TopZone Nguy&#x1EC5;n S&#x1A1;n <span>Xem chỉ đường</span></span>
                            <span>171 Nguy&#x1EC5;n S&#x1A1;n, Ph&#x1B0;&#x1EDD;ng Ph&#xFA; Th&#x1EA1;nh, Qu&#x1EAD;n T&#xE2;n Ph&#xFA;, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p9 hide">
                        <a href="/sieu-thi-351-nguyen-huu-tho-p-hoa-cuong-bac-q-hai-chau-tp-da-nang-id-10341">
                            <span>TopZone Nguy&#x1EC5;n H&#x1EEF;u Th&#x1ECD; <span>Xem chỉ đường</span></span>
                            <span>351 Nguy&#x1EC5;n H&#x1EEF;u Th&#x1ECD;, Ph&#x1B0;&#x1EDD;ng Ho&#xE0; C&#x1B0;&#x1EDD;ng B&#x1EAF;c, Qu&#x1EAD;n H&#x1EA3;i Ch&#xE2;u, Th&#xE0;nh ph&#x1ED1; &#x110;&#xE0; N&#x1EB5;ng, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-874-874a-phan-van-khai-tt-cu-chi-h-cu-chi-tp-ho-chi-minh-id-13895">
                            <span>TopZone Qu&#x1ED1;c L&#x1ED9; 22 <span>Xem chỉ đường</span></span>
                            <span>874-874A Qu&#x1ED1;c l&#x1ED9; 22, khu ph&#x1ED1; 8, Th&#x1ECB; Tr&#x1EA5;n C&#x1EE7; Chi, Huy&#x1EC7;n C&#x1EE7; Chi, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-633-633a-635-le-van-viet-ap-cau-xay-phuong-tan-phu-thanh-pho-thu-duc-thanh-pho-ho-chi-minh-id-12960">
                            <span>TopZone 633 L&#xEA; V&#x103;n Vi&#x1EC7;t <span>Xem chỉ đường</span></span>
                            <span>633-633A-635 L&#xEA; V&#x103;n Vi&#x1EC7;t, &#x1EA4;p C&#x1EA7;u X&#xE2;y, Ph&#x1B0;&#x1EDD;ng T&#xE2;n Ph&#xFA;, Th&#xE0;nh ph&#x1ED1; Th&#x1EE7; &#x110;&#x1EE9;c, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-458-nguyen-tri-phuong-phuong-09-quan-10-thanh-pho-ho-chi-minh-id-12840">
                            <span>TopZone Nguy&#x1EC5;n Tri Ph&#x1B0;&#x1A1;ng <span>Xem chỉ đường</span></span>
                            <span>458 Nguy&#x1EC5;n Tri Ph&#x1B0;&#x1A1;ng, Ph&#x1B0;&#x1EDD;ng 09, Qu&#x1EAD;n 10, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p7 hide">
                        <a href="/sieu-thi-217-duong-3-2-phuong-hung-loi-quan-ninh-kieu-thanh-pho-can-tho-id-12961">
                            <span>TopZone &#x110;&#x1B0;&#x1EDD;ng 3/2 <span>Xem chỉ đường</span></span>
                            <span>217, &#x110;&#x1B0;&#x1EDD;ng 3/2, Ph&#x1B0;&#x1EDD;ng H&#x1B0;ng L&#x1EE3;i, Qu&#x1EAD;n Ninh Ki&#x1EC1;u, Th&#xE0;nh ph&#x1ED1; C&#x1EA7;n Th&#x1A1;, Vi&#x1EC7;t Nam</span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-532-534-tran-hung-dao-phuong-02-quan-5-thanh-pho-ho-chi-minh-id-12565">
                            <span>TopZone Tr&#x1EA7;n H&#x1B0;ng &#x110;&#x1EA1;o <span>Xem chỉ đường</span></span>
                            <span>532 &#x2013; 534 Tr&#x1EA7;n H&#x1B0;ng &#x110;&#x1EA1;o, Ph&#x1B0;&#x1EDD;ng 02, Qu&#x1EAD;n 5, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-163-165-khanh-hoi-phuong-03-quan-4-tp-ho-chi-minh-id-10142">
                            <span>TopZone Kh&#xE1;nh H&#x1ED9;i <span>Xem chỉ đường</span></span>
                            <span>163-165 Kh&#xE1;nh H&#x1ED9;i, Ph&#x1B0;&#x1EDD;ng 13, Qu&#x1EAD;n 4, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-so-223-225-phan-huy-ich-phuong-14-quan-go-vap-thanh-pho-ho-chi-minh-id-13893">
                            <span>TopZone Phan Huy &#xCD;ch <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 223-225 Phan Huy &#xCD;ch, Ph&#x1B0;&#x1EDD;ng 14, Qu&#x1EAD;n G&#xF2; V&#x1EA5;p, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p124 hide">
                        <a href="/sieu-thi-98-98b-100-duong-dien-bien-p-le-loi-tp-hung-yen-tinh-hung-yen-id-12563">
                            <span>TopZone 98 &#x110;i&#x1EC7;n Bi&#xEA;n <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 98-98B-100 &#x110;&#x1B0;&#x1EDD;ng &#x110;i&#x1EC7;n Bi&#xEA;n, Ph&#x1B0;&#x1EDD;ng L&#xEA; L&#x1EE3;i, Th&#xE0;nh ph&#x1ED1; H&#x1B0;ng Y&#xEA;n, T&#x1EC9;nh H&#x1B0;ng Y&#xEA;n, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-so-1044-1046-quang-trung-phuong-8-quan-go-vap-thanh-pho-ho-chi-minh-id-13897">
                            <span>TopZone Quang Trung <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 1044 - 1046 Quang Trung, Ph&#x1B0;&#x1EDD;ng 8, Qu&#x1EAD;n G&#xF2; V&#x1EA5;p, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p126 hide">
                        <a href="/sieu-thi-142a-142b-nguyen-trung-truc-tt-duong-dong-h-phu-quoc-t-kien-giang-id-12963">
                            <span>TopZone Nguy&#x1EC5;n Trung Tr&#x1EF1;c <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 142A-142B &#x111;&#x1B0;&#x1EDD;ng Nguy&#x1EC5;n Trung Tr&#x1EF1;c, Th&#x1ECB; Tr&#x1EA5;n D&#x1B0;&#x1A1;ng &#x110;&#xF4;ng, Huy&#x1EC7;n Ph&#xFA; Qu&#x1ED1;c, T&#x1EC9;nh Ki&#xEA;n Giang, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p5 hide">
                        <a href="/sieu-thi-so-498-duong-xa-dan-p-nam-dong-q-dong-da-ha-noi-id-10072">
                            <span>TopZone X&#xE3; &#x110;&#xE0;n <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 498, &#x111;&#x1B0;&#x1EDD;ng X&#xE3; &#x110;&#xE0;n, Ph&#x1B0;&#x1EDD;ng Nam &#x110;&#x1ED3;ng, Qu&#x1EAD;n &#x110;&#x1ED1;ng &#x110;a, Th&#xE0;nh ph&#x1ED1; H&#xE0; N&#x1ED9;i, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p142 hide">
                        <a href="/sieu-thi-so-537-ha-long-p-bai-chay-tp-ha-long-quang-ninh-id-10514">
                            <span>TopZone H&#x1EA1; Long <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 537 &#x111;&#x1B0;&#x1EDD;ng H&#x1EA1; Long, Ph&#x1B0;&#x1EDD;ng B&#xE3;i Ch&#xE1;y, Th&#xE0;nh ph&#x1ED1; H&#x1EA1; Long, T&#x1EC9;nh Qu&#x1EA3;ng Ninh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-328-328a-duong-chanh-hung-phuong-5-quan-8-thanh-pho-ho-chi-minh-viet-nam-id-10833">
                            <span>TopZone Ch&#xE1;nh H&#x1B0;ng <span>Xem chỉ đường</span></span>
                            <span>328-328A &#x111;&#x1B0;&#x1EDD;ng Ch&#xE1;nh H&#x1B0;ng, Ph&#x1B0;&#x1EDD;ng 5, Qu&#x1EAD;n 8, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p107 hide">
                        <a href="/sieu-thi-so-21a1-tran-hung-dao-khu-pho-2-thi-tran-ba-tri-huyen-ba-tri-tinh-ben-tre-id-12935">
                            <span>TopZone 21A1 Tr&#x1EA7;n H&#x1B0;ng &#x110;&#x1EA1;o (Ba Tri) <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 21A1, Tr&#x1EA7;n H&#x1B0;ng &#x110;&#x1EA1;o, khu ph&#x1ED1; 2, Th&#x1ECB; Tr&#x1EA5;n Ba Tri, Huy&#x1EC7;n Ba Tri, T&#x1EC9;nh B&#x1EBF;n Tre, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p146 hide">
                        <a href="/sieu-thi-so-421-quoc-lo-22b-kpthanh-ha-ttgo-dau-hgo-dau-ttay-ninh-id-12936">
                            <span>TopZone Qu&#x1ED1;c L&#x1ED9; 22B <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 421, Qu&#x1ED1;c l&#x1ED9; 22B, khu ph&#x1ED1; Thanh H&#xE0;, Th&#x1ECB; Tr&#x1EA5;n G&#xF2; D&#x1EA7;u, Huy&#x1EC7;n G&#xF2; D&#x1EA7;u, T&#x1EC9;nh T&#xE2;y Ninh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-32-3-le-van-khuong-p-thoi-an-q12-thanh-pho-ho-chi-minh-id-10557">
                            <span>TopZone L&#xEA; V&#x103;n Kh&#x1B0;&#x1A1;ng <span>Xem chỉ đường</span></span>
                            <span>32/3 L&#xEA; V&#x103;n Kh&#x1B0;&#x1A1;ng, Ph&#x1B0;&#x1EDD;ng Th&#x1EDB;i An, Qu&#x1EAD;n 12, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                        </a>
                    </p>
                    <p class="p108 hide">
                        <a href="/sieu-thi-564-566-tran-hung-dao-p-thi-nai-tpquy-nhon-binh-dinh-id-11525">
                            <span>TopZone 564 Tr&#x1EA7;n H&#x1B0;ng &#x110;&#x1EA1;o <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 564-566 &#x111;&#x1B0;&#x1EDD;ng Tr&#x1EA7;n H&#x1B0;ng &#x110;&#x1EA1;o, Ph&#x1B0;&#x1EDD;ng Th&#x1ECB; N&#x1EA1;i, Th&#xE0;nh ph&#x1ED1; Quy Nh&#x1A1;n, T&#x1EC9;nh B&#xEC;nh &#x110;&#x1ECB;nh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p109 hide">
                        <a href="/sieu-thi-171-dt745-khu-pho-long-thoi-phuong-lai-thieu-tp-thuan-an-tinh-binh-duong-id-12933">
                            <span>TopZone L&#xE1;i Thi&#xEA;u <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 171, &#x111;&#x1B0;&#x1EDD;ng &#x110;T 745, khu ph&#x1ED1; Long Th&#x1EDB;i, Ph&#x1B0;&#x1EDD;ng L&#xE1;i Thi&#xEA;u, Th&#x1ECB; x&#xE3; Thu&#x1EAD;n An, T&#x1EC9;nh B&#xEC;nh D&#x1B0;&#x1A1;ng, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p101 hide">
                        <a href="/sieu-thi-so-282-duong-da-nang-p-van-my-q-ngo-quyen-hai-phong-id-10559">
                            <span>TopZone &#x110;&#xE0; N&#x1EB5;ng <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 282 &#x110;&#xE0; N&#x1EB5;ng, Ph&#x1B0;&#x1EDD;ng V&#x1EA1;n M&#x1EF9;, Qu&#x1EAD;n Ng&#xF4; Quy&#x1EC1;n, Th&#xE0;nh ph&#x1ED1; H&#x1EA3;i Ph&#xF2;ng, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p142 hide">
                        <a href="/sieu-thi-so-209-duong-tran-phu-p-cam-tay-tp-cam-pha-quang-ninh-id-10515">
                            <span>TopZone Tr&#x1EA7;n Ph&#xFA; <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 209, &#x111;&#x1B0;&#x1EDD;ng Tr&#x1EA7;n Ph&#xFA;, Ph&#x1B0;&#x1EDD;ng C&#x1EA9;m T&#xE2;y, Th&#xE0;nh ph&#x1ED1; C&#x1EA9;m Ph&#x1EA3;, T&#x1EC9;nh Qu&#x1EA3;ng Ninh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p120 hide">
                        <a href="/sieu-thi-khoi-1-phuong-ha-huy-tap-thanh-pho-ha-tinh-tinh-ha-tinh-id-12934">
                            <span>TopZone H&#xE0; Huy T&#x1EAD;p <span>Xem chỉ đường</span></span>
                            <span>nh&#xE0; &#xF4;ng Tr&#x1B0;&#x1A1;ng Xu&#xE2;n H&#x1EA3;i, Kh&#x1ED1;i 1, Ph&#x1B0;&#x1EDD;ng H&#xE0; Huy T&#x1EAD;p, Th&#xE0;nh ph&#x1ED1; H&#xE0; T&#x129;nh, T&#x1EC9;nh H&#xE0; T&#x129;nh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-287a-khu-pho-1-le-van-quoi-p-binh-tri-dong-q-binh-tan-id-12937">
                            <span>TopZone L&#xEA; V&#x103;n Qu&#x1EDB;i <span>Xem chỉ đường</span></span>
                            <span>287A Khu ph&#x1ED1; 1 L&#xEA; V&#x103;n Qu&#x1EDB;i, Ph&#x1B0;&#x1EDD;ng B&#xEC;nh Tr&#x1ECB; &#x110;&#xF4;ng, Qu&#x1EAD;n B&#xEC;nh T&#xE2;n, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p109 hide">
                        <a href="/sieu-thi-so-63a-1-kp-1a-p-an-phu-tx-thuan-an-binh-duong-id-10838">
                            <span>TopZone An Ph&#xFA; <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 63A/1, Khu ph&#x1ED1; 1A, Ph&#x1B0;&#x1EDD;ng An Ph&#xFA;, Th&#x1ECB; x&#xE3; Thu&#x1EAD;n An, T&#x1EC9;nh B&#xEC;nh D&#x1B0;&#x1A1;ng, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p6 hide">
                        <a href="/sieu-thi-390-392-394-396-duong-le-duan-p-eatam-tp-buon-ma-thuot-t-dak-lak-id-11760">
                            <span>TopZone L&#xEA; Du&#x1EA9;n <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 390-392-394-396 &#x111;&#x1B0;&#x1EDD;ng L&#xEA; Du&#x1EA9;n, Ph&#x1B0;&#x1EDD;ng Ea Tam, TP.Bu&#xF4;n Ma Thu&#x1ED9;t, T&#x1EC9;nh &#x110;&#x103;kL&#x103;k, Vi&#x1EC7;t Nam</span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-so-271-phan-van-khai-xa-tan-phu-trung-huyen-cu-chi-thanh-pho-ho-chi-minh-id-12850">
                            <span>TopZone Qu&#x1ED1;c L&#x1ED9; 22 <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 271-273 Qu&#x1ED1;c L&#x1ED9; 22, &#x1EA5;p &#x110;&#xEC;nh, X&#xE3; T&#xE2;n Ph&#xFA; Trung, Huy&#x1EC7;n C&#x1EE7; Chi, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p106 hide">
                        <a href="/sieu-thi-so-320-duong-tran-hung-dao-pdai-phuc-tpbac-ninh-tbac-ninh-id-11762">
                            <span>TopZone 320 Tr&#x1EA7;n H&#x1B0;ng &#x110;&#x1EA1;o <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 320 &#x111;&#x1B0;&#x1EDD;ng Tr&#x1EA7;n H&#x1B0;ng &#x110;&#x1EA1;o, Ph&#x1B0;&#x1EDD;ng &#x110;&#x1EA1;i Ph&#xFA;c, Th&#xE0;nh ph&#x1ED1; B&#x1EAF;c Ninh, T&#x1EC9;nh B&#x1EAF;c Ninh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p125 hide">
                        <a href="/sieu-thi-93-ly-tu-trong-khom-dong-mon-thi-tran-dien-khanh-huyen-dien-khanh-tinh-khanh-hoa-id-12931">
                            <span>TopZone 93 L&#xFD; T&#x1EF1; Tr&#x1ECD;ng <span>Xem chỉ đường</span></span>
                            <span>93 &#x111;&#x1B0;&#x1EDD;ng L&#xFD; T&#x1EF1; Tr&#x1ECD;ng, Kh&#xF3;m &#x110;&#xF4;ng M&#xF4;n, Th&#x1ECB; Tr&#x1EA5;n Di&#xEA;n Kh&#xE1;nh, Huy&#x1EC7;n Di&#xEA;n Kh&#xE1;nh, T&#x1EC9;nh Kh&#xE1;nh H&#xF2;a, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p155 hide">
                        <a href="/sieu-thi-duong-nguyen-tat-thanh-phuong-khai-quang-thanh-pho-vinh-yen-tinh-vinh-phuc-id-12932">
                            <span>TopZone Khai Quang <span>Xem chỉ đường</span></span>
                            <span>&#x110;&#x1B0;&#x1EDD;ng Nguy&#x1EC5;n T&#x1EA5;t Th&#xE0;nh, Ph&#x1B0;&#x1EDD;ng Khai Quang, Th&#xE0;nh ph&#x1ED1; V&#x129;nh Y&#xEA;n, T&#x1EC9;nh V&#x129;nh Ph&#xFA;c, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p109 hide">
                        <a href="/sieu-thi-237-nguyen-an-ninh-kp-binh-minh-2-p-di-an-tp-di-an-t-binh-duong-id-11763">
                            <span>TopZone 237 Nguy&#x1EC5;n An Ninh <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 237 Nguy&#x1EC5;n An Ninh, khu ph&#x1ED1; B&#xEC;nh Minh 2, Ph&#x1B0;&#x1EDD;ng D&#x129; An, Th&#x1ECB; X&#xE3; Di An, T&#x1EC9;nh B&#xEC;nh D&#x1B0;&#x1A1;ng, Vi&#x1EC7;t Nam</span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-374-376-nguyen-duy-trinh-phuong-binh-trung-dong-thanh-pho-thu-duc-thanh-pho-ho-chi-minh-id-12610">
                            <span>TopZone Nguy&#x1EC5;n Duy Trinh <span>Xem chỉ đường</span></span>
                            <span>374 - 376 Nguy&#x1EC5;n Duy Trinh, Ph&#x1B0;&#x1EDD;ng B&#xEC;nh Tr&#x1B0;ng &#x110;&#xF4;ng, Th&#xE0;nh ph&#x1ED1; Th&#x1EE7; &#x110;&#x1EE9;c, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p116 hide">
                        <a href="/sieu-thi-05-nguyen-tat-thanh-phuong-hoa-lu-tp-pleiku-tinh-gia-lai-id-11524">
                            <span>TopZone Nguy&#x1EC5;n T&#x1EA5;t Th&#xE0;nh <span>Xem chỉ đường</span></span>
                            <span>05 Nguy&#x1EC5;n T&#x1EA5;t Th&#xE0;nh , Ph&#x1B0;&#x1EDD;ng Hoa L&#x1B0;, Th&#xE0;nh ph&#x1ED1; Pleiku, T&#x1EC9;nh Gia Lai, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-428-nguyen-thi-thap-phuong-tan-quy-quan-7-tp-ho-chi-minh-id-10599">
                            <span>TopZone Nguy&#x1EC5;n Th&#x1ECB; Th&#x1EAD;p <span>Xem chỉ đường</span></span>
                            <span>428 Nguy&#x1EC5;n Th&#x1ECB; Th&#x1EAD;p, Ph&#x1B0;&#x1EDD;ng T&#xE2;n Quy, Qu&#x1EAD;n 7, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p155 hide">
                        <a href="/sieu-thi-so-286-duong-hai-ba-trung-phuong-hung-vuong-thanh-pho-phuc-yen-tinh-vinh-phuc-id-12930">
                            <span>TopZone 286 Hai B&#xE0; Tr&#x1B0;ng <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; nh&#xE0; 286, &#x110;&#x1B0;&#x1EDD;ng Hai B&#xE0; Tr&#x1B0;ng, Ph&#x1B0;&#x1EDD;ng H&#xF9;ng V&#x1B0;&#x1A1;ng, Th&#xE0;nh ph&#x1ED1; Ph&#xFA;c Y&#xEA;n ,T&#x1EC9;nh V&#x129;nh Ph&#xFA;c, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p133 hide">
                        <a href="/sieu-thi-so-59-duong-dien-bien-to-15-phuong-cua-bac-tp-nam-dinh-tinh-nam-dinh-id-10917">
                            <span>TopZone &#x110;i&#x1EC7;n Bi&#xEA;n <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 59 &#x110;&#x1B0;&#x1EDD;ng &#x110;i&#x1EC7;n Bi&#xEA;n, t&#x1ED5; 15, Ph&#x1B0;&#x1EDD;ng C&#x1EED;a B&#x1EAF;c, Th&#xE0;nh ph&#x1ED1; Nam &#x110;&#x1ECB;nh, T&#x1EC9;nh Nam &#x110;&#x1ECB;nh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-229-nguyen-thi-tu-pbinh-hung-hoa-b-qbinh-tan-tp-ho-chi-minh-id-10602">
                            <span>TopZone Nguy&#x1EC5;n Th&#x1ECB; T&#xFA; <span>Xem chỉ đường</span></span>
                            <span>229 Nguy&#x1EC5;n Th&#x1ECB; T&#xFA;, Ph&#x1B0;&#x1EDD;ng B&#xEC;nh H&#x1B0;ng H&#xF2;a B, Qu&#x1EAD;n B&#xEC;nh T&#xE2;n, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-473-475-477-kinh-duong-vuong-khu-pho-6-phuong-an-lac-quan-binh-tan-thanh-pho-ho-chi-minh-id-13959">
                            <span>TopZone Kinh D&#x1B0;&#x1A1;ng V&#x1B0;&#x1A1;ng <span>Xem chỉ đường</span></span>
                            <span>473-475-477 Kinh D&#x1B0;&#x1A1;ng V&#x1B0;&#x1A1;ng, Khu ph&#x1ED1; 6, Ph&#x1B0;&#x1EDD;ng An L&#x1EA1;c, Qu&#x1EAD;n B&#xEC;nh T&#xE2;n, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p110 hide">
                        <a href="/sieu-thi-so-38-quoc-lo-13-to-6-khu-pho-2-phuong-hung-long-thi-xa-chon-thanh-tinh-binh-phuoc-id-13879">
                            <span>TopZone 38 Qu&#x1ED1;c L&#x1ED9; 13 <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 38 qu&#x1ED1;c l&#x1ED9; 13, t&#x1ED5; 6, khu ph&#x1ED1; 2, Ph&#x1B0;&#x1EDD;ng H&#x1B0;ng Long, Th&#x1ECB; x&#xE3; Ch&#x1A1;n Th&#xE0;nh, T&#x1EC9;nh B&#xEC;nh Ph&#x1B0;&#x1EDB;c, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p125 hide">
                        <a href="/sieu-thi-03-quang-trung-p-van-thanh-tp-nha-trang-khanh-hoa-id-10606">
                            <span>TopZone Quang Trung <span>Xem chỉ đường</span></span>
                            <span>03 Quang Trung, Ph&#x1B0;&#x1EDD;ng V&#x1EA1;n Th&#x1EA1;nh, Th&#xE0;nh ph&#x1ED1; Nha Trang, T&#x1EC9;nh Kh&#xE1;nh H&#xF2;a, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p134 hide">
                        <a href="/sieu-thi-so-7-duong-quang-trung-p-quang-trung-vinh-nghe-an-id-10560">
                            <span>TopZone Quang Trung <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 7, &#x111;&#x1B0;&#x1EDD;ng Quang Trung, Ph&#x1B0;&#x1EDD;ng Quang Trung, Th&#xE0;nh ph&#x1ED1; Vinh, T&#x1EC9;nh Ngh&#x1EC7; An, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p82 hide">
                        <a href="/sieu-thi-so-17a-nguyen-van-thoai-phuong-chau-phu-b-thanh-pho-chau-doc-tinh-an-giang-id-13951">
                            <span>TopZone Nguy&#x1EC5;n V&#x103;n Tho&#x1EA1;i <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 17A Nguy&#x1EC5;n V&#x103;n Tho&#x1EA1;i, Ph&#x1B0;&#x1EDD;ng Ch&#xE2;u Ph&#xFA; B, Th&#xE0;nh ph&#x1ED1; Ch&#xE2;u &#x110;&#x1ED1;c, T&#x1EC9;nh An Giang, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p136 hide">
                        <a href="/sieu-thi-so-312-312a-thong-nhat-phuong-phu-ha-tp-phan-rang-thap-cham-tinh-ninh-thuan-id-10563">
                            <span>TopZone Th&#x1ED1;ng Nh&#x1EA5;t <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 312 - 312A Th&#x1ED1;ng Nh&#x1EA5;t, Ph&#x1B0;&#x1EDD;ng Ph&#x1EE7; H&#xE0;, TP. Phan Rang-Th&#xE1;p Ch&#xE0;m, T&#x1EC9;nh Ninh Thu&#x1EAD;n, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p111 hide">
                        <a href="/sieu-thi-80-tran-hung-dao-p-phu-trinh-tp-phan-thiet-binh-thuan-id-10562">
                            <span>TopZone Tr&#x1EA7;n H&#x1B0;ng &#x110;&#x1EA1;o <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 80 Tr&#x1EA7;n H&#x1B0;ng &#x110;&#x1EA1;o, Ph&#x1B0;&#x1EDD;ng Ph&#xFA; Trinh, Th&#xE0;nh ph&#x1ED1; Phan Thi&#x1EBF;t, T&#x1EC9;nh B&#xEC;nh Thu&#x1EAD;n,  Vi&#x1EC7;t Nam</span>
                        </a>
                    </p>
                    <p class="p132 hide">
                        <a href="/sieu-thi-so-179-duong-do-tuong-phong-thi-tran-tam-vu-huyen-chau-thanh-tinh-long-an-id-13877">
                            <span>TopZone &#x110;&#x1ED7; T&#x1B0;&#x1EDD;ng Phong <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 179, &#x110;&#x1B0;&#x1EDD;ng &#x110;&#x1ED7; T&#x1B0;&#x1EDD;ng Phong, Th&#x1ECB; Tr&#x1EA5;n T&#x1EA7;m Vu, Huy&#x1EC7;n Ch&#xE2;u Th&#xE0;nh, T&#x1EC9;nh Long An, Vi&#x1EC7;t Nam</span>
                        </a>
                    </p>
                    <p class="p7 hide">
                        <a href="/sieu-thi-so-08-hoa-binh-p-an-cu-q-ninh-kieu-tp-can-tho-id-10323">
                            <span>TopZone Ho&#xE0; B&#xEC;nh <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 08 Ho&#xE0; B&#xEC;nh, Ph&#x1B0;&#x1EDD;ng An C&#x1B0;, Qu&#x1EAD;n Ninh Ki&#x1EC1;u, Th&#xE0;nh Ph&#x1ED1; C&#x1EA7;n Th&#x1A1;, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p132 hide">
                        <a href="/sieu-thi-so-15-nguyen-huu-tho-khu-pho-3-thi-tran-ben-luc-huyen-ben-luc-tinh-long-an-id-13878">
                            <span>TopZone Nguy&#x1EC5;n H&#x1EEF;u Th&#x1ECD; <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 15, Nguy&#x1EC5;n H&#x1EEF;u Th&#x1ECD;, Khu Ph&#x1ED1; 3, Th&#x1ECB; Tr&#x1EA5;n B&#x1EBF;n L&#x1EE9;c, Huy&#x1EC7;n B&#x1EBF;n L&#x1EE9;c, T&#x1EC9;nh Long An, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p109 hide">
                        <a href="/sieu-thi-so-123-lo-m-khu-dan-cu-thuong-mai-uyen-hung-phuong-uyen-hung-thanh-pho-tan-uyen-tinh-binh-duong-id-13952">
                            <span>TopZone 123 L&#xF4; M Uy&#xEA;n H&#x1B0;ng <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 123 L&#xF4; M, Khu d&#xE2;n c&#x1B0; Th&#x1B0;&#x1A1;ng m&#x1EA1;i Uy&#xEA;n H&#x1B0;ng, Ph&#x1B0;&#x1EDD;ng Uy&#xEA;n H&#x1B0;ng, Th&#x1ECB; x&#xE3; T&#xE2;n Uy&#xEA;n, T&#x1EC9;nh B&#xEC;nh D&#x1B0;&#x1A1;ng, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p143 hide">
                        <a href="/sieu-thi-so-1-hung-vuong-phuong-1-tp-dong-ha-quang-tri-id-12940">
                            <span>TopZone H&#xF9;ng V&#x1B0;&#x1A1;ng <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 01 H&#xF9;ng V&#x1B0;&#x1A1;ng, Ph&#x1B0;&#x1EDD;ng 1, Th&#xE0;nh ph&#x1ED1; &#x110;&#xF4;ng H&#xE0;, T&#x1EC9;nh Qu&#x1EA3;ng Tr&#x1ECB;, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p151 hide">
                        <a href="/sieu-thi-so-212-to-13-khu-pho-3-thi-tran-cai-be-huyen-cai-be-tinh-tien-giang-id-13875">
                            <span>TopZone C&#xE1;i B&#xE8; <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 212, T&#x1ED5; 13, Khu ph&#x1ED1; 3, Th&#x1ECB; tr&#x1EA5;n C&#xE1;i B&#xE8;, Huy&#x1EC7;n C&#xE1;i B&#xE8;, T&#x1EC9;nh Ti&#x1EC1;n Giang, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p3 hide">
                        <a href="/sieu-thi-d7-23-ap-4-nguyen-thi-tu-xa-vinh-loc-b-huyen-binh-chanh-tpho-chi-minh-id-11534">
                            <span>TopZone Nguy&#x1EC5;n Th&#x1ECB; T&#xFA; <span>Xem chỉ đường</span></span>
                            <span>D7/23, &#x1EA5;p 4, &#x111;&#x1B0;&#x1EDD;ng Nguy&#x1EC5;n Th&#x1ECB; T&#xFA;, X&#xE3; V&#x129;nh L&#x1ED9;c B, Huy&#x1EC7;n B&#xEC;nh Ch&#xE1;nh, Th&#xE0;nh ph&#x1ED1; H&#x1ED3; Ch&#xED; Minh, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
                    <p class="p148 hide">
                        <a href="/sieu-thi-so-477-duong-luong-ngoc-quyen-p-phan-dinh-phung-tp-thai-nguyen-thai-nguyen-id-10324">
                            <span>TopZone L&#x1B0;&#x1A1;ng Ng&#x1ECD;c Quy&#x1EBF;n <span>Xem chỉ đường</span></span>
                            <span>S&#x1ED1; 477, &#x111;&#x1B0;&#x1EDD;ng L&#x1B0;&#x1A1;ng Ng&#x1ECD;c Quy&#x1EBF;n , Ph&#x1B0;&#x1EDD;ng Phan &#x110;&#xEC;nh Ph&#xF9;ng, Th&#xE0;nh ph&#x1ED1; Th&#xE1;i Nguy&#xEA;n, T&#x1EC9;nh Th&#xE1;i Nguy&#xEA;n, Vi&#x1EC7;t Nam</span>
                                <span id="promoApple"><img src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/common/Icon_ApplePay.png" /><b> Hỗ trợ thanh toán qua Apple Pay</b> </span>
                        </a>
                    </p>
            </div>
            
                <a href="javascript:;" class="viewmore">Xem thêm 79 cửa hàng</a>
        </div>
    </div> --}}


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

>>>>>>> ebadd290b9701eb91b109ea87b4e2da59907a251
</div>

<!--#region WebSite-->
<script type="application/ld+json">
        {"@type":"WebSite","url":"https://www.topzone.vn/","@id":"https://www.topzone.vn/#website","inLanguage":"vi","name":"TopZone","alternateName":"Siêu thị TopZone - Hệ thống cửa hàng Apple chính hãng 100%","description":"TopZone là hệ thống cửa hàng của Thế Giới Di Động chuyên bán các sản phẩm Apple chính hãng như iPhone, iPad, iMac, Macbook, các phụ kiện Apple. Ngoài ra TopZone còn có nhiều chương trình ưu đãi, bảo hành uy tín và phục vụ khách hàng tận tâm.","mainEntityOfPage":"https://www.topzone.vn/","potentialAction":{"@type":"SearchAction","target":{"@type":"Entrypoint","urlTemplate":"https://www.topzone.vn/tim-kiem?key={search_term_string}"},"query-input":"required name=search_term_string"},"@context":"https://schema.org"}
    </script>
<!--#endregion-->
<!--#region Organization-->
<script type="application/ld+json">
        {"@type":"Organization","image":["https://cdnv2.tgdd.vn/webmwg/2024/tz/images/logo-video.png?v=4"],"founder":{"@type":"Person","name":"Đoàn Văn Hiểu Em","url":"https://mwg.vn/hoi-dong-quan-tri-va-ban-lanh-dao/doan-van-hieu-em-14"},"additionalType":["https://en.wikipedia.org/wiki/Apple_Store","https://en.wikipedia.org/wiki/IPhone","https://en.wikipedia.org/wiki/IPad","https://en.wikipedia.org/wiki/IMac","https://en.wikipedia.org/wiki/MacBook","https://en.wikipedia.org/wiki/Apple_TV","https://en.wikipedia.org/wiki/HomePod","https://en.wikipedia.org/wiki/Apple_Pencil"],"sameAs":["https://www.facebook.com/topzone.vn","https://www.linkedin.com/company/topzonevn","https://www.youtube.com/channel/UCoWdPNr8jSr7JM0OFlKvQHw","https://www.pinterest.com/topzonevn","https://twitter.com/TopZonevn"],"url":"https://www.topzone.vn/","@id":"https://www.topzone.vn/#organization","potentialAction":{"@type":"BuyAction","seller":{"@type":"Organization","name":"TopZone"},"target":[{"@type":"EntryPoint","inLanguage":"vn","actionPlatform":["http://schema.org/DesktopWebPlatform","http://schema.org/IOSPlatform","http://schema.org/AndroidPlatform"],"urlTemplate":"https://www.topzone.vn/cart/"}]},"name":"TopZone","alternatename":"Siêu thị TopZone - Hệ thống cửa hàng Apple chính hãng 100%","description":"TopZone là hệ thống cửa hàng của Thế Giới Di Động chuyên bán các sản phẩm Apple chính hãng như iPhone, iPad, iMac, Macbook, các phụ kiện Apple. Ngoài ra TopZone còn có nhiều chương trình ưu đãi, bảo hành uy tín và phục vụ khách hàng tận tâm.","disambiguatingdescription":"TopZone là hệ thống siêu thị chuẩn Apple mới nhất trên thế giới. Chuỗi siêu thị này chuyên cung cấp iPhone, iPad, iMac, Macbook và phụ kiện Apple với mức giá ưu đãi và bảo hành chính hãng 100%","logo":"https://cdnv2.tgdd.vn/webmwg/2024/tz/images/logo-video.png?v=4","mainEntityOfPage":["https://www.topzone.vn/"],"email":["cskh@topzone.vn"],"contactPoint":[{"@type":"ContactPoint","telephone":"1900.9696.42","contactType":"sales","areaServed":"VN"},{"@type":"ContactPoint","telephone":"1900.8668.54","contactType":"technical support","areaServed":"VN"},{"@type":"ContactPoint","telephone":"1900.9868.43","contactType":"customer support","areaServed":"VN"}],"telephone":"1900.9696.42","address":{"@type":"PostalAddress","addressCountry":"Việt Nam","addressLocality":"Quận 1","addressRegion":"Hồ Chí Minh","streetAddress":"128 Trần Quang Khải","postalCode":"700000"},"foundingLocation":{"@type":"Place","name":"Hồ Chí Minh","url":" https://en.wikipedia.org/wiki/Ho_Chi_Minh_City","address":"Việt Nam"},"legalName":"Công ty Cổ Phần Thế Giới Di Động","foundingDate":"2021","hasOfferCatalog":[{"@type":"OfferCatalog","name":"iPhone","url":"https://www.topzone.vn/mac","itemListElement":[{"@type":"Offer","name":"MacBook Pro M4","itemOffered":"Product Group","url":"https://www.topzone.vn/macbook-pro-m4","@id":"https://www.topzone.vn/macbook-pro-m4#productgroup"},{"@type":"Offer","name":"MacBook Pro","itemOffered":"Product Group","url":"https://www.topzone.vn/macbook-pro","@id":"https://www.topzone.vn/macbook-pro#productgroup"},{"@type":"Offer","name":"MacBook Air","itemOffered":"Product Group","url":"https://www.topzone.vn/macbook-air","@id":"https://www.topzone.vn/macbook-air#productgroup"}]},{"@type":"OfferCatalog","name":"iPhone","url":"https://www.topzone.vn/am-thanh","itemListElement":[{"@type":"Offer","name":"AirPods","itemOffered":"Product Group","url":"https://www.topzone.vn/airpods","@id":"https://www.topzone.vn/airpods#productgroup"},{"@type":"Offer","name":"EarPods","itemOffered":"Product Group","url":"https://www.topzone.vn/earpods","@id":"https://www.topzone.vn/earpods#productgroup"},{"@type":"Offer","name":"Beats","itemOffered":"Product Group","url":"https://www.topzone.vn/beats","@id":"https://www.topzone.vn/beats#productgroup"}]},{"@type":"OfferCatalog","name":"iPhone","url":"https://www.topzone.vn/phu-kien","itemListElement":[{"@type":"Offer","name":"Phụ kiện iPhone","itemOffered":"Product Group","url":"https://www.topzone.vn/phu-kien-iphone","@id":"https://www.topzone.vn/phu-kien-iphone#productgroup"},{"@type":"Offer","name":"Phụ kiện Mac","itemOffered":"Product Group","url":"https://www.topzone.vn/phu-kien-mac","@id":"https://www.topzone.vn/phu-kien-mac#productgroup"},{"@type":"Offer","name":"Phụ kiện iPad","itemOffered":"Product Group","url":"https://www.topzone.vn/phu-kien-ipad","@id":"https://www.topzone.vn/phu-kien-ipad#productgroup"},{"@type":"Offer","name":"Phụ kiện Apple Watch","itemOffered":"Product Group","url":"https://www.topzone.vn/phu-kien-apple-watch","@id":"https://www.topzone.vn/phu-kien-apple-watch#productgroup"},{"@type":"Offer","name":"Sạc dự phòng","itemOffered":"Product Group","url":"https://www.topzone.vn/sac-du-phong","@id":"https://www.topzone.vn/sac-du-phong#productgroup"},{"@type":"Offer","name":"Bàn phím","itemOffered":"Product Group","url":"https://www.topzone.vn/ban-phim","@id":"https://www.topzone.vn/ban-phim#productgroup"},{"@type":"Offer","name":"Adapter sạc","itemOffered":"Product Group","url":"https://www.topzone.vn/adapter-sac","@id":"https://www.topzone.vn/adapter-sac#productgroup"},{"@type":"Offer","name":"Cáp sạc","itemOffered":"Product Group","url":"https://www.topzone.vn/cap-sac","@id":"https://www.topzone.vn/cap-sac#productgroup"},{"@type":"Offer","name":"Hub, cáp chuyển đổi","itemOffered":"Product Group","url":"https://www.topzone.vn/hub-chuyen-doi","@id":"https://www.topzone.vn/hub-chuyen-doi#productgroup"},{"@type":"Offer","name":"Ốp lưng, ví da iPhone","itemOffered":"Product Group","url":"https://www.topzone.vn/op-lung-iphone","@id":"https://www.topzone.vn/op-lung-iphone#productgroup"},{"@type":"Offer","name":"Ốp lưng iPad","itemOffered":"Product Group","url":"https://www.topzone.vn/op-lung-ipad","@id":"https://www.topzone.vn/op-lung-ipad#productgroup"},{"@type":"Offer","name":"Chuột máy tính","itemOffered":"Product Group","url":"https://www.topzone.vn/chuot-may-tinh","@id":"https://www.topzone.vn/chuot-may-tinh#productgroup"},{"@type":"Offer","name":"Bút tablet","itemOffered":"Product Group","url":"https://www.topzone.vn/phim-but","@id":"https://www.topzone.vn/phim-but#productgroup"},{"@type":"Offer","name":"Airtag","itemOffered":"Product Group","url":"https://www.topzone.vn/airtag","@id":"https://www.topzone.vn/airtag#productgroup"},{"@type":"Offer","name":"Apple TV","itemOffered":"Product Group","url":"https://www.topzone.vn/tv-box","@id":"https://www.topzone.vn/tv-box#productgroup"},{"@type":"Offer","name":"Miếng dán","itemOffered":"Product Group","url":"https://www.topzone.vn/mieng-dan-man-hinh","@id":"https://www.topzone.vn/mieng-dan-man-hinh#productgroup"},{"@type":"Offer","name":"Túi đựng AirPods","itemOffered":"Product Group","url":"https://www.topzone.vn/tui-dung-airpods","@id":"https://www.topzone.vn/tui-dung-airpods#productgroup"},{"@type":"Offer","name":"Balo, túi chống sốc","itemOffered":"Product Group","url":"https://www.topzone.vn/tui-chong-soc","@id":"https://www.topzone.vn/tui-chong-soc#productgroup"},{"@type":"Offer","name":"Dây/Ốp Apple Watch","itemOffered":"Product Group","url":"https://www.topzone.vn/day-apple-watch","@id":"https://www.topzone.vn/day-apple-watch#productgroup"}]}],"areaServed":{"@type":"Country","name":"Việt Nam","url":"https://www.wikidata.org/wiki/Q881"},"availableLanguage":{"@type":"Language","name":"VN","alternateName":"vi"},"@context":"https://schema.org"}
    </script>
<!--#endregion-->


@include('layouts.customer.footer')
