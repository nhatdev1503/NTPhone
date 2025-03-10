@include('layouts.header')
<div class="container my-4">
    @yield('content')
    <div class="bodywrap">
        <h1 class="d-none">NTPhone - Chuyên cung cấp điện thoại iphone, samsung, máy tính bảng ipad, phụ kiện
            công nghệ các loại uy tín, chất lượng</h1>
        <section class="section_slider">
            <div class="home-slider swiper-container">
                <div class="swiper-wrapper">
                    <a href="https://www.hoangkien.com/chinh-sach-bao-hanh-12-thang-1-doi-1" title="Slider"
                        class="swiper-slide">
                        <picture>
                            <source media="(min-width: 1200px)"
                                srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_1.jpg?1741067950025">
                            <source media="(min-width: 992px)"
                                srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_1.jpg?1741067950025">
                            <source media="(min-width: 569px)"
                                srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_1.jpg?1741067950025">
                            <source media="(max-width: 567px)"
                                srcset="//bizweb.dktcdn.net/thumb/large/100/112/815/themes/966034/assets/slider_mb_1.jpg?1741067950025">
                            <img width="1920" height="650"
                                src="//bizweb.dktcdn.net/thumb/grande/100/112/815/themes/966034/assets/slider_1.jpg?1741067950025"
                                alt="Slider" class="img-responsive" />
                        </picture>
                    </a>
                    <a href="https://www.hoangkien.com/cam-ket-chat-luong" title="Slider" class="swiper-slide">
                        <picture>
                            <source media="(min-width: 1200px)"
                                srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_2.jpg?1741067950025">
                            <source media="(min-width: 992px)"
                                srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_2.jpg?1741067950025">
                            <source media="(min-width: 569px)"
                                srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_2.jpg?1741067950025">
                            <source media="(max-width: 567px)"
                                srcset="//bizweb.dktcdn.net/thumb/large/100/112/815/themes/966034/assets/slider_mb_2.jpg?1741067950025">
                            <img width="1920" height="650"
                                src="//bizweb.dktcdn.net/thumb/grande/100/112/815/themes/966034/assets/slider_2.jpg?1741067950025"
                                alt="Slider" class="img-responsive" />
                        </picture>
                    </a>
                    <a href="https://www.hoangkien.com/chinh-sach-mua-lai" title="Slider" class="swiper-slide">
                        <picture>
                            <source media="(min-width: 1200px)"
                                srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_3.jpg?1741067950025">
                            <source media="(min-width: 992px)"
                                srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_3.jpg?1741067950025">
                            <source media="(min-width: 569px)"
                                srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_3.jpg?1741067950025">
                            <source media="(max-width: 567px)"
                                srcset="//bizweb.dktcdn.net/thumb/large/100/112/815/themes/966034/assets/slider_mb_3.jpg?1741067950025">
                            <img width="1920" height="650"
                                src="//bizweb.dktcdn.net/thumb/grande/100/112/815/themes/966034/assets/slider_3.jpg?1741067950025"
                                alt="Slider" class="img-responsive" />
                        </picture>
                    </a>
                </div>
            </div>
            <div class="section_2_banner">
                <div class="container">
                    <div class="row row-fix">
                        <div class="col-md-6 col-6 col-fix margin-0">
                            <a class="thumb-image-banner" href="https://www.hoangkien.com/chinh-sach-doi-tra-len-doi"
                                title="Banner">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/large/100/112/815/themes/966034/assets/2banner_1.jpg?1741067950025">
                                    <img width="714" height="257"
                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/2banner_1.jpg?1741067950025"
                                        alt="Banner">
                                </picture>
                            </a>
                        </div>
                        <div class="col-md-6 col-6 col-fix margin-0">
                            <a class="thumb-image-banner" href="https://www.hoangkien.com/chinh-sach-doi-tra-len-doi"
                                title="Banner">
                                <picture>
                                    <source media="(max-width: 567px)"
                                        srcset="//bizweb.dktcdn.net/thumb/large/100/112/815/themes/966034/assets/2banner_2.jpg?1741067950025">
                                    <img width="714" height="257"
                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/2banner_2.jpg?1741067950025"
                                        alt="Banner">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiper = new Swiper('.home-slider', {
                autoplay: false,
                pagination: {
                    el: '.home-slider .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.home-slider .swiper-button-next',
                    prevEl: '.home-slider .swiper-button-prev',
                },
            });
        </script>
        <section class="section_danhmuc2">
            <div class="container">
                <div class="block-background">
                    <h3 class="title-index p-5">
                        <a class="title-name" href="/collections/all" title="Danh mục nổi bật">Danh mục nổi bật
                        </a>
                    </h3>
                    <div class="danhmuc2-slider swiper-container p-5">
                        <div class="swiper-wrapper">
                            @foreach ($categories as $category)
                                <div class="swiper-slide">
                                    <div class="row row-fix">
                                        <div class="col-12 item col-fix">
                                            <div class="product-image">
                                                <a class="image_thumb scale_hover"
                                                    href="{{ route('web.product.category', $category->id) }}"
                                                    title="{{ $category->name }}">
                                                    <picture>
                                                        @foreach ($category->products as $product)
                                                        @endforeach
                                                        <source media="(max-width: 567px)"
                                                            srcset="https://bizweb.dktcdn.net/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-a373a501-a879-49b7-8036-024e2dead860-d1ac5802-c456-4803-9c80-b6a415fbf2d5.png?v=1740461892397">
                                                        <img width="130" height="130" src="{{ $product->image }}"
                                                            alt="{{ $category->name }}">
                                                    </picture>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('web.product.category', $category->id) }}"
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
                    <img width="1270" height="236" class="lazyload"
                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                        data-src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/banner.jpg?1741067950025"
                        alt="Banner">
                </a>
            </div>
        </section>
        <section class="section_product one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-background">
                            <div class="title-index p-5">
                                <a class="title-name" href="dien-thoai" title="iPhone">iPhone
                                </a>
                                <ul class="menu-title">
                                    <li class="nav-item">
                                        <a class="a-img" href="/dien-thoai" title="Điện thoại">
                                            Điện thoại
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="a-img" href="/phu-kien" title="Phụ kiện">
                                            Phụ kiện
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="a-img" href="/linh-kien" title="Linh Kiện">
                                            Linh Kiện
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="a-img" href="/blogs/all" title="Tin tức">
                                            Tin tức
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product1-swiper swiper-container p-5">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-41332974"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/iphone-16-pro-max-256gb-new-box"
                                                    title="iPhone 16 Pro Max 256Gb New Box">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-a373a501-a879-49b7-8036-024e2dead860-d1ac5802-c456-4803-9c80-b6a415fbf2d5.png?v=1740461892397"
                                                        alt="iPhone 16 Pro Max 256Gb New Box">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="137429602" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết"
                                                        type="button"
                                                        onclick="window.location.href='/iphone-16-pro-max-256gb-new-box'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-detail"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/iphone-16-pro-max-256gb-new-box"
                                                        title="iPhone 16 Pro Max 256Gb New Box">iPhone 16 Pro Max 256Gb
                                                        New Box</a></h3>
                                                <div class="price-box">
                                                    31.600.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-38055822"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-16-pro-max-256gb"
                                                    title="iPhone 16 Pro Max 256GB">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-b975b0aa-7752-49b5-abab-233be70b7b70.png?v=1730447628487"
                                                        alt="iPhone 16 Pro Max 256GB">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="128105842" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết"
                                                        type="button"
                                                        onclick="window.location.href='/iphone-16-pro-max-256gb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-detail"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/iphone-16-pro-max-256gb"
                                                        title="iPhone 16 Pro Max 256GB">iPhone 16 Pro Max 256GB</a>
                                                </h3>
                                                <div class="price-box">
                                                    26.600.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-38056338"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-16-pro-256gb-1"
                                                    title="iPhone 16 Pro 256GB">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/full-anh-16pro-72f8a447-3d0a-4d5b-9572-0bef22c06d28-00733168-fd90-4e2c-ac0e-d4fe342c4cdb.png?v=1730448605057"
                                                        alt="iPhone 16 Pro 256GB">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="128106927" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết"
                                                        type="button"
                                                        onclick="window.location.href='/iphone-16-pro-256gb-1'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-detail"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/iphone-16-pro-256gb-1"
                                                        title="iPhone 16 Pro 256GB">iPhone 16 Pro 256GB</a></h3>
                                                <div class="price-box">
                                                    26.000.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-38018722"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-15-pro-max-512gb"
                                                    title="iPhone 15 Pro Max 512GB">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/oae-compressed-867664d6-0bee-44d8-a72d-1a1b96aaa8de.jpg?v=1730347064060"
                                                        alt="iPhone 15 Pro Max 512GB">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="127966805" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết"
                                                        type="button"
                                                        onclick="window.location.href='/iphone-15-pro-max-512gb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-detail"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/iphone-15-pro-max-512gb"
                                                        title="iPhone 15 Pro Max 512GB">iPhone 15 Pro Max 512GB</a>
                                                </h3>
                                                <div class="price-box">
                                                    24.700.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-38018669"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-15-pro-max-256gb"
                                                    title="iPhone 15 Pro Max 256GB">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/oae-compressed-39f1f569-2a69-452f-bb71-8c876c28bded.jpg?v=1730346963937"
                                                        alt="iPhone 15 Pro Max 256GB">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="127966666" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết"
                                                        type="button"
                                                        onclick="window.location.href='/iphone-15-pro-max-256gb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-detail"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/iphone-15-pro-max-256gb"
                                                        title="iPhone 15 Pro Max 256GB">iPhone 15 Pro Max 256GB</a>
                                                </h3>
                                                <div class="price-box">
                                                    23.700.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-38056522"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-16-plus-256gb"
                                                    title="iPhone 16 Plus 256GB">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/full-0436fd9f-880f-4d2a-afe9-2b9fcd1b561d-0b158a8a-601e-4b34-8c14-846fb24fd8f7-3271a403-5e5e-4b05-b315-5c92be50ba51.png?v=1730449219047"
                                                        alt="iPhone 16 Plus 256GB">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="128107291" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết"
                                                        type="button"
                                                        onclick="window.location.href='/iphone-16-plus-256gb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-detail"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/iphone-16-plus-256gb"
                                                        title="iPhone 16 Plus 256GB">iPhone 16 Plus 256GB</a></h3>
                                                <div class="price-box">
                                                    23.500.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-38056200"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-16-pro-256gb"
                                                    title="iPhone 16 Pro 128GB">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/full-anh-16pro-72f8a447-3d0a-4d5b-9572-0bef22c06d28-555bb6e2-4ca6-4308-b976-141d1c7679a6.png?v=1730448281517"
                                                        alt="iPhone 16 Pro 128GB">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="128106702" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết"
                                                        type="button"
                                                        onclick="window.location.href='/iphone-16-pro-256gb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-detail"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/iphone-16-pro-256gb" title="iPhone 16 Pro 128GB">iPhone
                                                        16 Pro 128GB</a></h3>
                                                <div class="price-box">
                                                    23.500.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-38056425"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-16-plus-128gb"
                                                    title="iPhone 16 Plus 128GB">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/full-0436fd9f-880f-4d2a-afe9-2b9fcd1b561d-0b158a8a-601e-4b34-8c14-846fb24fd8f7.png?v=1730448961283"
                                                        alt="iPhone 16 Plus 128GB">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="128107109" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết"
                                                        type="button"
                                                        onclick="window.location.href='/iphone-16-plus-128gb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-detail"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/iphone-16-plus-128gb"
                                                        title="iPhone 16 Plus 128GB">iPhone 16 Plus 128GB</a></h3>
                                                <div class="price-box">
                                                    21.200.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-38057127"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-16-256gb"
                                                    title="iPhone 16 256GB">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/full-240d7d83-9bbc-4a4c-b2f6-827e7053a691-7d119993-fe87-4d0d-8f76-4487ec43571a-4486f1de-7ac6-434f-96ed-66eba80ece2f-856916c7-b30a-4f05-b00d-87737fc07baf.png?v=1730449545183"
                                                        alt="iPhone 16 256GB">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="128108124" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết"
                                                        type="button"
                                                        onclick="window.location.href='/iphone-16-256gb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-detail"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/iphone-16-256gb" title="iPhone 16 256GB">iPhone 16
                                                        256GB</a></h3>
                                                <div class="price-box">
                                                    21.100.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-38019374"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-14-pro-max-1tb"
                                                    title="iPhone 14 Pro Max 1TB">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/rehrh-71e53ef3-19ef-4451-938c-7722ab83a866-3f664214-2b1c-472f-98ad-aa7a0b4b13a1.png?v=1730348304800"
                                                        alt="iPhone 14 Pro Max 1TB">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="127968400" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết"
                                                        type="button"
                                                        onclick="window.location.href='/iphone-14-pro-max-1tb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-detail"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/iphone-14-pro-max-1tb"
                                                        title="iPhone 14 Pro Max 1TB">iPhone 14 Pro Max 1TB</a></h3>
                                                <div class="price-box">
                                                    21.000.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="swiper-button-next">
                                </div>
                                <div class="swiper-button-prev">
                                </div>
                                <div class="text-center no-padding">
                                    <a class="see-more" title="Xem toàn bộ sản phẩm" href="dien-thoai">Xem toàn bộ
                                        sản phẩm <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                        slidesPerView: 2,
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
                    <img width="1270" height="236" class="lazyload"
                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                        data-src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/banner2.jpg?1741067950025"
                        alt="Banner">
                </a>
            </div>
        </section>
        <section class="section_product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-background">
                            <div class="title-index p-5">
                                <a class="title-name" href="phu-kien" title="PHỤ KIỆN">PHỤ KIỆN
                                </a>
                                <ul class="menu-title">
                                    <li class="nav-item">
                                        <a class="a-img" href="/dien-thoai" title="Điện thoại">
                                            Điện thoại
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="a-img" href="/phu-kien" title="Phụ kiện">
                                            Phụ kiện
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="a-img" href="/linh-kien" title="Linh Kiện">
                                            Linh Kiện
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="a-img" href="/blogs/all" title="Tin tức">
                                            Tin tức
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product2-swiper swiper-container p-5">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-33911300"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/cap-type-c-type-c-1m-iphone-chinh-hang"
                                                    title="Cáp Sạc Nhanh C To C 1m iPhone Zin">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/ytrtyi.png?v=1703319792653"
                                                        alt="Cáp Sạc Nhanh C To C 1m iPhone Zin">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="105666500" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/cap-type-c-type-c-1m-iphone-chinh-hang"
                                                        title="Cáp Sạc Nhanh C To C 1m iPhone Zin">Cáp Sạc Nhanh C To C
                                                        1m iPhone Zin</a></h3>
                                                <div class="price-box">
                                                    250.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-21162027"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/sac-nhanh-20w-iphone-chinh-hang-pro-max"
                                                    title="Sạc Nhanh 20W iPhone chính hãng">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/6ut6i7i-compressed-1.jpg?v=1703389273287"
                                                        alt="Sạc Nhanh 20W iPhone chính hãng">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="43737873" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/sac-nhanh-20w-iphone-chinh-hang-pro-max"
                                                        title="Sạc Nhanh 20W iPhone chính hãng">Sạc Nhanh 20W iPhone
                                                        chính hãng</a></h3>
                                                <div class="price-box">
                                                    350.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-17750021"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/copy-of-tai-nghe-iphone-chinh-hang-new"
                                                    title="Tai Nghe Lightning Iphone Chính Hãng New">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/d05231ca34989fc6c689.jpg?v=1704171473330"
                                                        alt="Tai Nghe Lightning Iphone Chính Hãng New">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="32362229" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/copy-of-tai-nghe-iphone-chinh-hang-new"
                                                        title="Tai Nghe Lightning Iphone Chính Hãng New">Tai Nghe
                                                        Lightning Iphone Chính Hãng New</a></h3>
                                                <div class="price-box">
                                                    400.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-17750018"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/cap-sac-nhanh-iphone-chinh-hang-pro-max"
                                                    title="Cáp Sạc Nhanh C To L iPhone Zin">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/353fafd0aa8201dc5893.jpg?v=1704171449690"
                                                        alt="Cáp Sạc Nhanh C To L iPhone Zin">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="32362215" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/cap-sac-nhanh-iphone-chinh-hang-pro-max"
                                                        title="Cáp Sạc Nhanh C To L iPhone Zin">Cáp Sạc Nhanh C To L
                                                        iPhone Zin</a></h3>
                                                <div class="price-box">
                                                    200.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-3990425"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/cap-iphone-chinh-hang"
                                                    title="Cáp iPhone USB to L Zin">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/ytit-compressed.jpg?v=1703389562297"
                                                        alt="Cáp iPhone USB to L Zin">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="6497315" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/cap-iphone-chinh-hang"
                                                        title="Cáp iPhone USB to L Zin">Cáp iPhone USB to L Zin</a>
                                                </h3>
                                                <div class="price-box">
                                                    150.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="swiper-button-next">
                                </div>
                                <div class="swiper-button-prev">
                                </div>
                                <div class="text-center no-padding">
                                    <a class="see-more" title="Xem toàn bộ sản phẩm" href="phu-kien">Xem toàn bộ sản
                                        phẩm <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiperflash = new Swiper('.product2-swiper', {
                slidesPerView: 3,
                loop: false,
                grabCursor: true,
                roundLengths: true,
                slideToClickedSlide: false,
                spaceBetween: 20,
                autoplay: false,
                navigation: {
                    nextEl: '.product2-swiper .swiper-button-next',
                    prevEl: '.product2-swiper .swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1.6,
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
        <section class="section_product">
            <div class="container">
                <div class="block-background">
                    <div class="title-index p-5">
                        <a class="title-name" href="pin-eu-dung-luong-cao" title="Pin EU">Pin EU
                        </a>
                        <ul class="menu-title">
                            <li class="nav-item">
                                <a class="a-img" href="/man-hinh-iphone-ipad" title="Màn hình">
                                    Màn hình
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="a-img" href="/pin-iphone-ipad" title="Pin">
                                    Pin
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="a-img" href="/thay-the-sua-chua-iphone-ipad"
                                    title="Thay thế, sửa chữa iPhone, iPad">
                                    Thay thế, sửa chữa iPhone, iPad
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="a-img" href="pin-eu-dung-luong-cao" title="Xem tất cả">
                                    Xem tất cả
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="product4-swiper swiper-container p-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide-pro">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-cart-form data-id="product-actions-37786664" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover"
                                            href="/pin-eu-iphone-12-pro-max-dung-luong-cao"
                                            title="Pin EU iPhone 12 PRO MAX Dung Lượng Cao">
                                            <img width="234" height="234" class="lazyload image1"
                                                src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/987b7279884f23117a5e-46e16906-df66-4993-bdfe-66e039f3fd55.jpg?v=1729321804880"
                                                alt="Pin EU iPhone 12 PRO MAX Dung Lượng Cao">
                                        </a>
                                        <div class="tag-km">
                                        </div>
                                        <input class="hidden" type="hidden" name="variantId" value="127314787" />
                                        <div class="action">
                                            <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                href="/pin-eu-iphone-12-pro-max-dung-luong-cao"
                                                title="Pin EU iPhone 12 PRO MAX Dung Lượng Cao">Pin EU iPhone 12 PRO
                                                MAX Dung Lượng Cao</a></h3>
                                        <div class="price-box">
                                            800.000₫
                                        </div>
                                        <div class="wishlish-compare">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="swiper-slide swiper-slide-pro">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-cart-form data-id="product-actions-37786679" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/pin-eu-iphone-12-pro-dung-luong-cao"
                                            title="Pin EU iPhone 12 PRO Dung Lượng Cao">
                                            <img width="234" height="234" class="lazyload image1"
                                                src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/7f8a969391a53afb63b4-5dabe557-1bad-4746-b61b-79606fceef67-fde1f40e-6b22-4ce4-a620-cfac698d6e2e.jpg?v=1729321854093"
                                                alt="Pin EU iPhone 12 PRO Dung Lượng Cao">
                                        </a>
                                        <div class="tag-km">
                                        </div>
                                        <input class="hidden" type="hidden" name="variantId" value="127314802" />
                                        <div class="action">
                                            <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                href="/pin-eu-iphone-12-pro-dung-luong-cao"
                                                title="Pin EU iPhone 12 PRO Dung Lượng Cao">Pin EU iPhone 12 PRO Dung
                                                Lượng Cao</a></h3>
                                        <div class="price-box">
                                            650.000₫
                                        </div>
                                        <div class="wishlish-compare">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="swiper-slide swiper-slide-pro">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-cart-form data-id="product-actions-37786691" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/pin-eu-iphone-12-dung-luong-cao"
                                            title="Pin EU iPhone 12 Dung Luọng Cao">
                                            <img width="234" height="234" class="lazyload image1"
                                                src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/7f8a969391a53afb63b4-b3372e2f-58dd-441d-b403-4436d805172b.jpg?v=1729321893593"
                                                alt="Pin EU iPhone 12 Dung Luọng Cao">
                                        </a>
                                        <div class="tag-km">
                                        </div>
                                        <input class="hidden" type="hidden" name="variantId" value="127314820" />
                                        <div class="action">
                                            <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                href="/pin-eu-iphone-12-dung-luong-cao"
                                                title="Pin EU iPhone 12 Dung Luọng Cao">Pin EU iPhone 12 Dung Luọng
                                                Cao</a></h3>
                                        <div class="price-box">
                                            650.000₫
                                        </div>
                                        <div class="wishlish-compare">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="swiper-slide swiper-slide-pro">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-cart-form data-id="product-actions-37786704" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover"
                                            href="/pin-eu-iphone-11-pro-max-dung-luong-cao"
                                            title="Pin EU iPhone 11 PRO MAX Dung Lượng Cao">
                                            <img width="234" height="234" class="lazyload image1"
                                                src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/aed015161e20b57eec312-5dbc4be6-5129-4905-8db6-eb009426ff93-0503c5c2-a682-4ce4-a8f6-b761e505e027.jpg?v=1729321932620"
                                                alt="Pin EU iPhone 11 PRO MAX Dung Lượng Cao">
                                        </a>
                                        <div class="tag-km">
                                        </div>
                                        <input class="hidden" type="hidden" name="variantId" value="127314838" />
                                        <div class="action">
                                            <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                href="/pin-eu-iphone-11-pro-max-dung-luong-cao"
                                                title="Pin EU iPhone 11 PRO MAX Dung Lượng Cao">Pin EU iPhone 11 PRO
                                                MAX Dung Lượng Cao</a></h3>
                                        <div class="price-box">
                                            750.000₫
                                        </div>
                                        <div class="wishlish-compare">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="swiper-slide swiper-slide-pro">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-cart-form data-id="product-actions-37786709" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/pin-eu-iphone-11-pro-dung-luong-cao"
                                            title="Pin EU iPhone 11 PRO Dung Lượng Cao">
                                            <img width="234" height="234" class="lazyload image1"
                                                src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/aed015161e20b57eec312-55a09e87-175d-416a-bca3-4510e2783a9e-34b3aef8-d02f-4b89-92ec-339676a8dd63.jpg?v=1729321967557"
                                                alt="Pin EU iPhone 11 PRO Dung Lượng Cao">
                                        </a>
                                        <div class="tag-km">
                                        </div>
                                        <input class="hidden" type="hidden" name="variantId" value="127314848" />
                                        <div class="action">
                                            <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                href="/pin-eu-iphone-11-pro-dung-luong-cao"
                                                title="Pin EU iPhone 11 PRO Dung Lượng Cao">Pin EU iPhone 11 PRO Dung
                                                Lượng Cao</a></h3>
                                        <div class="price-box">
                                            700.000₫
                                        </div>
                                        <div class="wishlish-compare">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="swiper-slide swiper-slide-pro">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-cart-form data-id="product-actions-37786722" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/pin-eu-iphone-11-dung-luong-cao"
                                            title="Pin EU iPhone 11 Dung Lượng Cao">
                                            <img width="234" height="234" class="lazyload image1"
                                                src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/105367bf6c89c7d79e984-6239ff4d-9db3-4309-a874-385f5d2c39e6.jpg?v=1729322009090"
                                                alt="Pin EU iPhone 11 Dung Lượng Cao">
                                        </a>
                                        <div class="tag-km">
                                        </div>
                                        <input class="hidden" type="hidden" name="variantId" value="127314876" />
                                        <div class="action">
                                            <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                href="/pin-eu-iphone-11-dung-luong-cao"
                                                title="Pin EU iPhone 11 Dung Lượng Cao">Pin EU iPhone 11 Dung Lượng
                                                Cao</a></h3>
                                        <div class="price-box">
                                            650.000₫
                                        </div>
                                        <div class="wishlish-compare">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="swiper-slide swiper-slide-pro">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-cart-form data-id="product-actions-37786728" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/pin-eu-iphone-xs-max-dung-luong-cao"
                                            title="Pin EU iPhone XS MAX Dung Lượng Cao">
                                            <img width="234" height="234" class="lazyload image1"
                                                src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/918a294c227a8924d06b1-2fafd3f8-cf5e-4cd9-9589-64593cb335c8.jpg?v=1729322049750"
                                                alt="Pin EU iPhone XS MAX Dung Lượng Cao">
                                        </a>
                                        <div class="tag-km">
                                        </div>
                                        <input class="hidden" type="hidden" name="variantId" value="127314887" />
                                        <div class="action">
                                            <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                href="/pin-eu-iphone-xs-max-dung-luong-cao"
                                                title="Pin EU iPhone XS MAX Dung Lượng Cao">Pin EU iPhone XS MAX Dung
                                                Lượng Cao</a></h3>
                                        <div class="price-box">
                                            700.000₫
                                        </div>
                                        <div class="wishlish-compare">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="swiper-slide swiper-slide-pro">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-cart-form data-id="product-actions-37786735" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/pin-eu-iphone-xs-dung-luong-cao"
                                            title="Pin EU iPhone XS Dung Lượng Cao">
                                            <img width="234" height="234" class="lazyload image1"
                                                src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/aed015161e20b57eec312-eff1ce3a-638e-4c9e-afcc-cab5e2313966.jpg?v=1729322081837"
                                                alt="Pin EU iPhone XS Dung Lượng Cao">
                                        </a>
                                        <div class="tag-km">
                                        </div>
                                        <input class="hidden" type="hidden" name="variantId"
                                            value="127314895" />
                                        <div class="action">
                                            <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                href="/pin-eu-iphone-xs-dung-luong-cao"
                                                title="Pin EU iPhone XS Dung Lượng Cao">Pin EU iPhone XS Dung Lượng
                                                Cao</a></h3>
                                        <div class="price-box">
                                            650.000₫
                                        </div>
                                        <div class="wishlish-compare">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="swiper-slide swiper-slide-pro">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-cart-form data-id="product-actions-37786747" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/pin-eu-iphone-xr-dung-luong-cao"
                                            title="Pin EU iPhone XR Dung Lượng Cao">
                                            <img width="234" height="234" class="lazyload image1"
                                                src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/75a895327a04d15a8815-0e712e95-1257-4c30-9560-efcc74a4f58f.jpg?v=1729322122947"
                                                alt="Pin EU iPhone XR Dung Lượng Cao">
                                        </a>
                                        <div class="tag-km">
                                        </div>
                                        <input class="hidden" type="hidden" name="variantId"
                                            value="127314921" />
                                        <div class="action">
                                            <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-cart"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                href="/pin-eu-iphone-xr-dung-luong-cao"
                                                title="Pin EU iPhone XR Dung Lượng Cao">Pin EU iPhone XR Dung Lượng
                                                Cao</a></h3>
                                        <div class="price-box">
                                            550.000₫
                                        </div>
                                        <div class="wishlish-compare">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="swiper-button-next">
                        </div>
                        <div class="swiper-button-prev">
                        </div>
                        <div class="text-center no-padding">
                            <a class="see-more" title="Xem toàn bộ sản phẩm" href="pin-eu-dung-luong-cao">Xem toàn
                                bộ sản phẩm <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiperflash = new Swiper('.product4-swiper', {
                slidesPerView: 3,
                loop: false,
                grabCursor: true,
                roundLengths: true,
                slideToClickedSlide: false,
                spaceBetween: 10,
                autoplay: false,
                slidesPerColumn: 2,
                slidesPerColumnFill: "row",
                navigation: {
                    nextEl: '.product4-swiper .swiper-button-next',
                    prevEl: '.product4-swiper .swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 2,
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
        <section class="section_product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-background">
                            <div class="title-index p-5">
                                <a class="title-name" href="man-hinh-iphone-ipad" title="màn hình">màn hình
                                </a>
                                <ul class="menu-title">
                                    <li class="nav-item">
                                        <a class="a-img" href="/man-hinh-iphone-ipad" title="Màn hình">
                                            Màn hình
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="a-img" href="/pin-iphone-ipad" title="Pin">
                                            Pin
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="a-img" href="/thay-the-sua-chua-iphone-ipad"
                                            title="Thay thế, sửa chữa iPhone, iPad">
                                            Thay thế, sửa chữa iPhone, iPad
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product3-swiper swiper-container p-5">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-32473076"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/man-hinh-iphone-14-pro-max-zin-chinh-hang"
                                                    title="Màn hình iPhone 14 Pro Max Zin Chính Hãng">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/dich-vu-thay-man-hinh-iphone-11-11pro-11-pro-max-chinh-hang-1-af2280a3-8bb1-4f1e-91dc-da4f30eda8ca-jpg-v-1626425424570-e1bacf71-d06a-4cd3-85ee-2704f60ea4ba-jpg-v-1668567278763.jpg?v=1693899469880"
                                                        alt="Màn hình iPhone 14 Pro Max Zin Chính Hãng">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="97334990" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/man-hinh-iphone-14-pro-max-zin-chinh-hang"
                                                        title="Màn hình iPhone 14 Pro Max Zin Chính Hãng">Màn hình
                                                        iPhone 14 Pro Max Zin Chính Hãng</a></h3>
                                                <div class="price-box">
                                                    8.700.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-32473114"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/man-hinh-iphone-14-pro-zin-chinh-hang"
                                                    title="Màn hình iPhone 14 Pro Zin Chính Hãng">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/dich-vu-thay-man-hinh-iphone-11-11pro-11-pro-max-chinh-hang-1-af2280a3-8bb1-4f1e-91dc-da4f30eda8ca-jpg-v-1626425424570-e1bacf71-d06a-4cd3-85ee-2704f60ea4ba-jpg-v-1668567278763-jpg-v-1693899469880.jpg?v=1693899642247"
                                                        alt="Màn hình iPhone 14 Pro Zin Chính Hãng">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="97335056" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/man-hinh-iphone-14-pro-zin-chinh-hang"
                                                        title="Màn hình iPhone 14 Pro Zin Chính Hãng">Màn hình iPhone
                                                        14 Pro Zin Chính Hãng</a></h3>
                                                <div class="price-box">
                                                    7.700.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-32473132"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/man-hinh-iphone-14-zin-chinh-hang"
                                                    title="Màn hình iPhone 14 Zin Chính Hãng">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/dich-vu-thay-man-hinh-iphone-11-11pro-11-pro-max-chinh-hang-1-af2280a3-8bb1-4f1e-91dc-da4f30eda8ca-jpg-v-1626425424570-e1bacf71-d06a-4cd3-85ee-2704f60ea4ba-jpg-v-1668567278763-jpg-v-1693899469880-jpg-v-1693899642247.jpg?v=1693899731607"
                                                        alt="Màn hình iPhone 14 Zin Chính Hãng">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="97335083" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/man-hinh-iphone-14-zin-chinh-hang"
                                                        title="Màn hình iPhone 14 Zin Chính Hãng">Màn hình iPhone 14
                                                        Zin Chính Hãng</a></h3>
                                                <div class="price-box">
                                                    4.500.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-28542175"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/man-hinh-iphone-13-pro-max-zin-chinh-hang"
                                                    title="Màn hình iPhone 13 Pro Max Zin Chính Hãng">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/dich-vu-thay-man-hinh-iphone-11-11pro-11-pro-max-chinh-hang-1-af2280a3-8bb1-4f1e-91dc-da4f30eda8ca-jpg-v-1626425424570-e1bacf71-d06a-4cd3-85ee-2704f60ea4ba.jpg?v=1668567278763"
                                                        alt="Màn hình iPhone 13 Pro Max Zin Chính Hãng">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="75679699" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/man-hinh-iphone-13-pro-max-zin-chinh-hang"
                                                        title="Màn hình iPhone 13 Pro Max Zin Chính Hãng">Màn hình
                                                        iPhone 13 Pro Max Zin Chính Hãng</a></h3>
                                                <div class="price-box">
                                                    7.500.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-28542185"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/man-hinh-iphone-13-pro-zin-chinh-hang"
                                                    title="Màn hình iPhone 13 Pro Zin Chính Hãng">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/dich-vu-thay-man-hinh-iphone-11-11pro-11-pro-max-chinh-hang-1-af2280a3-8bb1-4f1e-91dc-da4f30eda8ca-jpg-v-1626425424570-6110bb22-d17d-4231-b5e6-9460ee3db2ca.jpg?v=1668567264960"
                                                        alt="Màn hình iPhone 13 Pro Zin Chính Hãng">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="75679710" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/man-hinh-iphone-13-pro-zin-chinh-hang"
                                                        title="Màn hình iPhone 13 Pro Zin Chính Hãng">Màn hình iPhone
                                                        13 Pro Zin Chính Hãng</a></h3>
                                                <div class="price-box">
                                                    6.500.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-28542196"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/man-hinh-iphone-13-zin-chinh-hang"
                                                    title="Màn hình iPhone 13 Zin Chính Hãng">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/dich-vu-thay-man-hinh-iphone-11-11pro-11-pro-max-chinh-hang-1-af2280a3-8bb1-4f1e-91dc-da4f30eda8ca-jpg-v-1626425424570.jpg?v=1668567248083"
                                                        alt="Màn hình iPhone 13 Zin Chính Hãng">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="75679722" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/man-hinh-iphone-13-zin-chinh-hang"
                                                        title="Màn hình iPhone 13 Zin Chính Hãng">Màn hình iPhone 13
                                                        Zin Chính Hãng</a></h3>
                                                <div class="price-box">
                                                    3.500.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-28542160"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/man-hinh-iphone-12-pro-max-zin-chinh-hang"
                                                    title="Màn hình iPhone 12 Pro Max Zin Chính Hãng">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/dich-vu-thay-man-hinh-iphone-11-11pro-11-pro-max-chinh-hang-1-af2280a3-8bb1-4f1e-91dc-da4f30eda8ca-jpg-v-1626425424570-ab039735-7425-4c80-8185-d8142554119e.jpg?v=1668567293830"
                                                        alt="Màn hình iPhone 12 Pro Max Zin Chính Hãng">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="75679673" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/man-hinh-iphone-12-pro-max-zin-chinh-hang"
                                                        title="Màn hình iPhone 12 Pro Max Zin Chính Hãng">Màn hình
                                                        iPhone 12 Pro Max Zin Chính Hãng</a></h3>
                                                <div class="price-box">
                                                    4.200.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-28542076"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/man-hinh-iphone-12-pro-zin-chinh-hang"
                                                    title="Màn hình iPhone 12 Pro Zin Chính Hãng">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/dich-vu-thay-man-hinh-iphone-11-11pro-11-pro-max-chinh-hang-1-af2280a3-8bb1-4f1e-91dc-da4f30eda8ca-jpg-v-1626425424570-ffaa8cbd-6426-4efb-ad90-57031990a213.jpg?v=1668567325903"
                                                        alt="Màn hình iPhone 12 Pro Zin Chính Hãng">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="75679545" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/man-hinh-iphone-12-pro-zin-chinh-hang"
                                                        title="Màn hình iPhone 12 Pro Zin Chính Hãng">Màn hình iPhone
                                                        12 Pro Zin Chính Hãng</a></h3>
                                                <div class="price-box">
                                                    2.900.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-28542110"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/man-hinh-iphone-12-zin-chinh-hang"
                                                    title="Màn hình iPhone 12 Zin Chính Hãng">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/dich-vu-thay-man-hinh-iphone-11-11pro-11-pro-max-chinh-hang-1-af2280a3-8bb1-4f1e-91dc-da4f30eda8ca-jpg-v-1626425424570-dfee4156-bb11-43bb-bd7f-9348ec0f3380.jpg?v=1668567309030"
                                                        alt="Màn hình iPhone 12 Zin Chính Hãng">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="75679606" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/man-hinh-iphone-12-zin-chinh-hang"
                                                        title="Màn hình iPhone 12 Zin Chính Hãng">Màn hình iPhone 12
                                                        Zin Chính Hãng</a></h3>
                                                <div class="price-box">
                                                    2.900.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-pro">
                                        <form action="/cart/add" method="post" class="variants product-action"
                                            data-cart-form data-id="product-actions-22421481"
                                            enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="/man-hinh-iphone-promax-zin-chinh-hang"
                                                    title="Màn hình iPhone 11 PROMAX Zin Chính Hãng">
                                                    <img width="234" height="234" class="lazyload image1"
                                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/dich-vu-thay-man-hinh-iphone-11-11pro-11-pro-max-chinh-hang-1-af2280a3-8bb1-4f1e-91dc-da4f30eda8ca.jpg?v=1626425424570"
                                                        alt="Màn hình iPhone 11 PROMAX Zin Chính Hãng">
                                                </a>
                                                <div class="tag-km">
                                                </div>
                                                <input class="hidden" type="hidden" name="variantId"
                                                    value="48901214" />
                                                <div class="action">
                                                    <button class="btn-cart btn-views add_to_cart "
                                                        title="Thêm vào giỏ">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                                        href="/man-hinh-iphone-promax-zin-chinh-hang"
                                                        title="Màn hình iPhone 11 PROMAX Zin Chính Hãng">Màn hình
                                                        iPhone 11 PROMAX Zin Chính Hãng</a></h3>
                                                <div class="price-box">
                                                    2.900.000₫
                                                </div>
                                                <div class="wishlish-compare">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="swiper-button-next">
                                </div>
                                <div class="swiper-button-prev">
                                </div>
                                <div class="text-center no-padding">
                                    <a class="see-more" title="Xem toàn bộ sản phẩm"
                                        href="man-hinh-iphone-ipad">Xem toàn bộ sản phẩm <svg
                                            xmlns="http://www.w3.org/2000/svg" height="1em"
                                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiperflash = new Swiper('.product3-swiper', {
                slidesPerView: 3,
                loop: false,
                grabCursor: true,
                roundLengths: true,
                slideToClickedSlide: false,
                spaceBetween: 20,
                autoplay: false,
                navigation: {
                    nextEl: '.product3-swiper .swiper-button-next',
                    prevEl: '.product3-swiper .swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 2,
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
        <section class="section_blog">
            <div class="container">
                <div class="block-product block-background">
                    <h3 class="title-index p-5">
                        <a class="title-name" href="tin-tuc" title="Tin tức mới nhất">Tin tức mới nhất
                        </a>
                    </h3>
                    <div class="row p-5">
                        <div class="col-md-6">
                            <div class="item-blog-big">
                                <div class="block-thumb">
                                    <a class="thumb"
                                        href="/apple-phat-hanh-ios-18-3-1-va-ios-17-7-5-khac-phuc-lo-hong-bao-mat-nghiem-trong-moi-ban-cap-nhat-ngay"
                                        title="Apple phát hành iOS 18.3.1 và iOS 17.7.5 khắc phục lỗ hổng bảo mật nghiêm trọng, mời bạn cập nhật ngay">
                                        <img class="lazyload"
                                            src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                            data-src="https://bizweb.dktcdn.net/100/112/815/articles/ios-18-3-1.jpg?v=1739506056363"
                                            alt="Apple phát hành iOS 18.3.1 và iOS 17.7.5 khắc phục lỗ hổng bảo mật nghiêm trọng, mời bạn cập nhật ngay">
                                    </a>
                                </div>
                                <div class="block-content">
                                    <h3>
                                        <a class="line-clamp line-clamp-1"
                                            href="/apple-phat-hanh-ios-18-3-1-va-ios-17-7-5-khac-phuc-lo-hong-bao-mat-nghiem-trong-moi-ban-cap-nhat-ngay"
                                            title="Apple phát hành iOS 18.3.1 và iOS 17.7.5 khắc phục lỗ hổng bảo mật nghiêm trọng, mời bạn cập nhật ngay">Apple
                                            phát hành iOS 18.3.1 và iOS 17.7.5 khắc phục lỗ hổng bảo mật nghiêm trọng,
                                            mời bạn cập nhật ngay</a>
                                    </h3>
                                    <div class="time-post">
                                        Ngày đăng:
                                        <span>14/02/2025</span>
                                    </div>
                                    <p class="justify line-clamp line-clamp-3">&nbsp;Apple&nbsp;đã bất ngờ tung ra iOS
                                        18.3.1 cùng với iPadOS 18.3.1 và iOS 17.7.5 cho các thiết bị cũ hơn để vá lỗi
                                        bảo mật quan trọng.
                                        Trong một bài viết về bảo mật được đăng trên trang web của Apple, công ty đã nêu
                                        chi tiết các bản vá bảo...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-blog-small">
                                <div class="block-thumb">
                                    <a class="thumb"
                                        href="/danh-gia-ios-18-3-con-loi-khong-hieu-nang-ra-sao-co-nen-cap-nhat"
                                        title="Đánh giá iOS 18.3: Còn lỗi không? Hiệu năng ra sao? Có nên cập nhật?">
                                        <img width="140" height="75" class="lazyload"
                                            src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                            data-src="https://bizweb.dktcdn.net/100/112/815/articles/danh-gia-ios-183-cover.jpg?v=1739505772833"
                                            alt="Đánh giá iOS 18.3: Còn lỗi không? Hiệu năng ra sao? Có nên cập nhật?">
                                    </a>
                                </div>
                                <div class="block-content">
                                    <h3>
                                        <a class="line-clamp line-clamp-2" style="    height: auto"
                                            href="/danh-gia-ios-18-3-con-loi-khong-hieu-nang-ra-sao-co-nen-cap-nhat"
                                            title="Đánh giá iOS 18.3: Còn lỗi không? Hiệu năng ra sao? Có nên cập nhật?">Đánh
                                            giá iOS 18.3: Còn lỗi không? Hiệu năng ra sao? Có nên cập nhật?</a>
                                    </h3>
                                    <p class="justify line-clamp line-clamp-2">Sau 1 tuần chính thức phát hành, hãy
                                        cùng Sforum đánh giá IOS 18.3&nbsp;để xem bản cập nhật này có còn lỗi không và
                                        bạn có nên cập nhật trên điện thoại của mình không nhé.
                                        Bài viết này sẽ tổng hợp các phản hồi, đánh giá iOS 18.3 dựa trên...
                                    </p>
                                </div>
                            </div>
                            <div class="item-blog-small">
                                <div class="block-thumb">
                                    <a class="thumb"
                                        href="/apple-da-cho-phep-chuyen-ung-dung-da-mua-tu-tai-khoan-nay-sang-tai-khoan-khac"
                                        title="Apple đã cho phép chuyển ứng dụng đã mua từ tài khoản này sang tài khoản khác">
                                        <img width="140" height="75" class="lazyload"
                                            src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                            data-src="https://bizweb.dktcdn.net/100/112/815/articles/ios-app-store-general-feature-sqaure-complement.jpg?v=1739505500307"
                                            alt="Apple đã cho phép chuyển ứng dụng đã mua từ tài khoản này sang tài khoản khác">
                                    </a>
                                </div>
                                <div class="block-content">
                                    <h3>
                                        <a class="line-clamp line-clamp-2" style="    height: auto"
                                            href="/apple-da-cho-phep-chuyen-ung-dung-da-mua-tu-tai-khoan-nay-sang-tai-khoan-khac"
                                            title="Apple đã cho phép chuyển ứng dụng đã mua từ tài khoản này sang tài khoản khác">Apple
                                            đã cho phép chuyển ứng dụng đã mua từ tài khoản này sang tài khoản khác</a>
                                    </h3>
                                    <p class="justify line-clamp line-clamp-2">Nếu đang sở hữu hai tài khoản
                                        Apple&nbsp;với nhiều ứng dụng, nhạc, phim và các nội dung số khác thì chúc mừng
                                        bạn, Apple vừa ra mắt tính năng mới cho phép bạn hợp nhất các tài khoản bằng
                                        cách chuyển giao dịch mua hàng từ tài khoản này sang...
                                    </p>
                                </div>
                            </div>
                            <div class="item-blog-small">
                                <div class="block-thumb">
                                    <a class="thumb"
                                        href="/apple-chinh-thuc-khoa-sign-ios-18-1-1-chan-nguoi-dung-ha-cap"
                                        title="Apple chính thức khóa sign iOS 18.1.1, chặn người dùng hạ cấp">
                                        <img width="140" height="75" class="lazyload"
                                            src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                            data-src="https://bizweb.dktcdn.net/100/112/815/articles/apple-khoa-sign-ios-18-1-1.jpg?v=1735180204930"
                                            alt="Apple chính thức khóa sign iOS 18.1.1, chặn người dùng hạ cấp">
                                    </a>
                                </div>
                                <div class="block-content">
                                    <h3>
                                        <a class="line-clamp line-clamp-2" style="    height: auto"
                                            href="/apple-chinh-thuc-khoa-sign-ios-18-1-1-chan-nguoi-dung-ha-cap"
                                            title="Apple chính thức khóa sign iOS 18.1.1, chặn người dùng hạ cấp">Apple
                                            chính thức khóa sign iOS 18.1.1, chặn người dùng hạ cấp</a>
                                    </h3>
                                    <p class="justify line-clamp line-clamp-2">Apple mới đây đã chính thức khóa sign
                                        iOS 18.1.1, qua đó chặn người dùng iPhone&nbsp;chạy iOS 18.2 hạ cấp về phiên bản
                                        iOS này.
                                        “Nhà Táo” thường xuyên khóa sign các bản phát hành iOS cũ hơn theo thời gian để
                                        ngăn người dùng hạ cấp xuống phiên bản phần...
                                    </p>
                                </div>
                            </div>
                            <div class="item-blog-small">
                                <div class="block-thumb">
                                    <a class="thumb"
                                        href="/apple-phat-hanh-ban-thu-nghiem-cuoi-cung-cua-ios-18-2-ban-da-cap-nhat-chua"
                                        title="Apple phát hành bản thử nghiệm cuối cùng của iOS 18.2, bạn đã cập nhật chưa?">
                                        <img width="140" height="75" class="lazyload"
                                            src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                            data-src="https://bizweb.dktcdn.net/100/112/815/articles/ios-18-2-hero-2.jpg?v=1733458900763"
                                            alt="Apple phát hành bản thử nghiệm cuối cùng của iOS 18.2, bạn đã cập nhật chưa?">
                                    </a>
                                </div>
                                <div class="block-content">
                                    <h3>
                                        <a class="line-clamp line-clamp-2" style="    height: auto"
                                            href="/apple-phat-hanh-ban-thu-nghiem-cuoi-cung-cua-ios-18-2-ban-da-cap-nhat-chua"
                                            title="Apple phát hành bản thử nghiệm cuối cùng của iOS 18.2, bạn đã cập nhật chưa?">Apple
                                            phát hành bản thử nghiệm cuối cùng của iOS 18.2, bạn đã cập nhật chưa?</a>
                                    </h3>
                                    <p class="justify line-clamp line-clamp-2">Hôm nay, Apple&nbsp;đã phát hành các
                                        phiên bản Release Candidate của iOS 18.2, iPadOS 18.2 và macOS Sequoia 15.2 sắp
                                        ra mắt cho các nhà phát triển và người tham gia chương trình public beta.
                                        Nếu không có gì thay đổi thì đây là những bản thử nghiệm cuối cùng của...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center no-padding">
                        <a class="see-more" title="Xem toàn bộ tin tức" href="tin-tuc">Xem toàn bộ tin tức <svg
                                xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_video">
            <div class="container ">
                <div class="block-product block-background">
                    <h3 class="title-index p-5">
                        <a class="title-name" href="huong-dan-thu-thuat" title="Hướng Dẫn Thủ Thuật">Hướng Dẫn Thủ
                            Thuật
                        </a>
                    </h3>
                    <div class="row p-5">
                        <a href="/huong-dan-cach-tat-tien-doan-tren-iphone-chi-tiet-moi-nhat"
                            class="item col-lg-3 col-sm-5 col-9 "
                            title="Hướng dẫn cách tắt tiên đoán trên iPhone chi tiết, mới nhất">
                            <div class="block-thumb">
                                <div class="thumb"
                                    title="Hướng dẫn cách tắt tiên đoán trên iPhone chi tiết, mới nhất">
                                    <img class="lazyload"
                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                        data-src="https://bizweb.dktcdn.net/100/112/815/articles/cach-tat-tien-doan-tren-iphone.jpg?v=1733459922230"
                                        alt="Hướng dẫn cách tắt tiên đoán trên iPhone chi tiết, mới nhất">
                                </div>
                            </div>
                            <div class="block-content">
                                <h3 class="line-clamp line-clamp-2">
                                    Hướng dẫn cách tắt tiên đoán trên iPhone chi tiết, mới nhất
                                </h3>
                            </div>
                        </a>
                        <a href="/cach-ha-ios-18-xuong-17-don-gian-tot-nhat-cho-iphone"
                            class="item col-lg-3 col-sm-5 col-9 "
                            title="Cách hạ iOS 18 xuống 17 đơn giản, tốt nhất cho iPhone">
                            <div class="block-thumb">
                                <div class="thumb" title="Cách hạ iOS 18 xuống 17 đơn giản, tốt nhất cho iPhone">
                                    <img class="lazyload"
                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                        data-src="https://bizweb.dktcdn.net/100/112/815/articles/cach-ha-ios-18-xuong-17.jpg?v=1733459426357"
                                        alt="Cách hạ iOS 18 xuống 17 đơn giản, tốt nhất cho iPhone">
                                </div>
                            </div>
                            <div class="block-content">
                                <h3 class="line-clamp line-clamp-2">
                                    Cách hạ iOS 18 xuống 17 đơn giản, tốt nhất cho iPhone
                                </h3>
                            </div>
                        </a>
                        <a href="/cach-tat-cho-phep-dan-tren-iphone" class="item col-lg-3 col-sm-5 col-9 "
                            title="Cách tắt cho phép dán trên iPhone">
                            <div class="block-thumb">
                                <div class="thumb" title="Cách tắt cho phép dán trên iPhone">
                                    <img class="lazyload"
                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                        data-src="https://bizweb.dktcdn.net/100/112/815/articles/3-49aee7c6-7092-4ea0-9b8e-d51fff3e9ac6.jpg?v=1728444368303"
                                        alt="Cách tắt cho phép dán trên iPhone">
                                </div>
                            </div>
                            <div class="block-content">
                                <h3 class="line-clamp line-clamp-2">
                                    Cách tắt cho phép dán trên iPhone
                                </h3>
                            </div>
                        </a>
                        <a href="/su-that-ipad-man-hinh-gap-dau-tien-cua-apple-co-the-bi-tri-hoan-den-nam-2026"
                            class="item col-lg-3 col-sm-5 col-9 "
                            title="Sự Thật iPad Màn Hình Gập Đầu Tiên của Apple Có Thể Bị Trì Hoãn Đến Năm 2026">
                            <div class="block-thumb">
                                <div class="thumb"
                                    title="Sự Thật iPad Màn Hình Gập Đầu Tiên của Apple Có Thể Bị Trì Hoãn Đến Năm 2026">
                                    <img class="lazyload"
                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025"
                                        data-src="https://bizweb.dktcdn.net/100/112/815/articles/thumbnail-39.png?v=1725210966733"
                                        alt="Sự Thật iPad Màn Hình Gập Đầu Tiên của Apple Có Thể Bị Trì Hoãn Đến Năm 2026">
                                </div>
                            </div>
                            <div class="block-content">
                                <h3 class="line-clamp line-clamp-2">
                                    Sự Thật iPad Màn Hình Gập Đầu Tiên của Apple Có Thể Bị Trì Hoãn Đến Năm 2026
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="text-center no-padding">
                        <a class="see-more" title="Xem toàn bộ video" href="huong-dan-thu-thuat">Xem toàn bộ video
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="popup-video">
            <div class="body-popup">
            </div>
            <div class="close-popup-video">
                <i class="fa fa-close"></i>
                Đóng
            </div>
        </div>
        <section class="section_danhgia">
            <div class="container">
                <div class="block-background">
                    <h3 class="title-index p-5">
                        <span class="title-name"></span>
                    </h3>
                    <div class="danhgia-slider swiper-container p-5">
                        <div class="swiper-wrapper">
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
            var swiperdanhgia = new Swiper('.danhgia-slider', {
                autoplay: false,
                slidesPerView: 2,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.danhgia-slider .swiper-button-next',
                    prevEl: '.danhgia-slider .swiper-button-prev',
                },
                breakpoints: {
                    300: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    500: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    991: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    }
                }
            });
        </script>
    </div>
    <script>
        (function($) {
            "use strict";
            $.ajaxChimp = {
                responses: {
                    "We have sent you a confirmation email": 0,
                    "Please enter a valueggg": 1,
                    "An email address must contain a single @": 2,
                    "The domain portion of the email address is invalid (the portion after the @: )": 3,
                    "The username portion of the email address is invalid (the portion before the @: )": 4,
                    "This email address looks fake or invalid. Please enter a real email address": 5
                },
                translations: {
                    en: null
                },
                init: function(selector, options) {
                    $(selector).ajaxChimp(options)
                }
            };
            $.fn.ajaxChimp = function(options) {
                $(this).each(function(i, elem) {
                    var form = $(elem);
                    var email = form.find("input[type=email]");
                    var label = form.find("label[for=" + email.attr("id") + "]");
                    var settings = $.extend({
                        url: form.attr("action"),
                        language: "en"
                    }, options);
                    var url = settings.url.replace("/post?", "/post-json?").concat("&c=?");
                    form.attr("novalidate", "true");
                    email.attr("name", "EMAIL");
                    form.submit(function() {
                        var msg;

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
</div>
@include('layouts.footer')
