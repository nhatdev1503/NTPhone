@include('layouts.customer.header')
<div class="container my-4">
    @yield('content')
    <div class="bodywrap">
        <h1 class="d-none">NTPhone - Chuyên cung cấp điện thoại iphone, samsung, máy tính bảng ipad, phụ kiện
            công nghệ các loại uy tín, chất lượng</h1>
        <section class="section_slider">
            <div class="home-slider swiper-container">
                <div class="swiper-wrapper">
                    <a href="#" title="Slider" class="swiper-slide">
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
                            @foreach ($categoryList as $category)
                                <div class="swiper-slide">
                                    <div class="row row-fix">
                                        <div class="col-12 item col-fix">
                                            <div class="product-image">
                                                <a class="image_thumb scale_hover"
                                                    href="{{ route('customer.category', $category->id) }}"
                                                    title="{{ $category->name }}">
                                                    <picture>
                                                        @foreach ($category->products as $product)
                                                            <source media="(max-width: 567px)"
                                                                srcset="https://bizweb.dktcdn.net/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-a373a501-a879-49b7-8036-024e2dead860-d1ac5802-c456-4803-9c80-b6a415fbf2d5.png?v=1740461892397">
                                                            <img width="130" height="130"
                                                                src="{{ $product->image }}" alt="{{ $category->name }}">
                                                        @endforeach
                                                    </picture>
                                                </a>

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
                </a>
            </div>
        </section>
        @foreach ($categories as $category)
            <section class="section_product one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="block-background" width="19%    ">
                                <div class="title-index p-5">
                                    <a class="title-name" href="{{ '/' . $category->name }}"
                                        title="{{ $category->name }}">{{ $category->name }}
                                    </a>
                                </div>

                                <div class="product1-swiper swiper-container p-5">
                                    <div class="swiper-wrapper">
                                        @foreach ($category->latestProducts as $product)
                                            <div class="swiper-slide swiper-slide-pro">
                                                <form action="/cart/add" method="post"
                                                    class="variants product-action" data-cart-form
                                                    data-id="product-actions-41332974" enctype="multipart/form-data">
                                                    <div class="product-thumbnail">
                                                        <a class="image_thumb scale_hover"
                                                            href="#"
                                                            title="#">
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
                                                                href="#"
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
            </div>
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
<style>
</style>
@include('layouts.customer.footer')
