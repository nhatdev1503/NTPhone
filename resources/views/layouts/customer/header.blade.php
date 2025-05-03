<!DOCTYPE html>
<html lang="vi">

<head>
    @php
        use Illuminate\Support\Facades\Route;
        $currentRoute = Route::currentRouteName();
    @endphp
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#000" />
    <link rel="canonical" href="https://www.hoangkien.com/" />
    <meta name='revisit-after' content='2 days' />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="noodp,index,follow" />
    <meta name="description"
        content="Chuyên cung cấp điện thoại iphone, máy tính bảng ipad, máy đọc sách, phụ kiện công nghệ các loại uy tín, chất lượng">
    <title>Shop NTPhone </title>
    <meta name="keywords" content="Cập nhật sau" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Apple Store - NTShop iPhone, iPad and more.....">
    <meta property="og:image"
        content="https://bizweb.dktcdn.net/100/112/815/themes/966034/assets/logo.png?1742954225872">
    <meta property="og:image:secure_url"
        content="https://bizweb.dktcdn.net/100/112/815/themes/966034/assets/logo.png?1742954225872">
    <meta property="og:description"
        content="Chuyên cung cấp điện thoại iphone, máy tính bảng ipad, máy đọc sách, phụ kiện công nghệ các loại uy tín, chất lượng">
    <meta property="og:url" content="https://www.hoangkien.com/">
    <meta property="og:site_name" content="NTShop">
    <link rel="icon" href="{{ asset('uploads/icon-ntphone.png') }}" type="image/png" />
    <link rel="preload" as="script"
        href="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/jquery.js?1742954225872" />
    <script src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/jquery.js?1742954225872" type="text/javascript">
    </script>
    <link rel="preload" as="script"
        href="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/cookie.js?1742954225872" />
    <script src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/cookie.js?1742954225872" type="text/javascript">
    </script>
    <link rel="preload" as="script"
        href="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/swiper.js?1742954225872" />
    <script src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/swiper.js?1742954225872" type="text/javascript">
    </script>
    <link rel="preload" as="script"
        href="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.js?1742954225872" />
    <script src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.js?1742954225872" type="text/javascript">
    </script>
    <link rel="preload" as='style' type="text/css"
        href="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/main.scss.css?1742954225872">
    <link rel="preload" as='style' type="text/css"
        href="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/index.scss.css?1742954225872">
    <link rel="preload" as='style' type="text/css"
        href="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/bootstrap-4-3-min.css?1742954225872">
    <link href="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/bootstrap-4-3-min.css?1742954225872"
        rel="stylesheet" type="text/css" media="all" />
    <link href="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/main.scss.css?1742954225872" rel="stylesheet"
        type="text/css" media="all" />
    <link href="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/index.scss.css?1742954225872" rel="stylesheet"
        type="text/css" media="all" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://bizweb.dktcdn.net/100/112/815/themes/966034/assets/breadcrumb_style.scss.css?1742954225872">
    <link rel="stylesheet"
        href="https://bizweb.dktcdn.net/100/112/815/themes/966034/assets/ajaxcart.scss.css?1742954225872">
    <link rel="stylesheet"
        href="https://bizweb.dktcdn.net/100/112/815/themes/966034/assets/product_style.scss.css?1742954225872">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script>
        window.BizwebAnalytics = window.BizwebAnalytics || {};
        window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
        window.BizwebAnalytics.meta.currency = 'VND';
        window.BizwebAnalytics.tracking_url = '/s';
        var meta = {};
        for (var attr in meta) {
            window.BizwebAnalytics.meta[attr] = meta[attr];
        }
    </script>
    <script src="/dist/js/stats.min.js?v=96f2ff2"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-61144205-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script>
        window.enabled_enhanced_ecommerce = false;
    </script>
    <!--Facebook Pixel Code-->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }
        (window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1482269005400151', {}, {
            'agent': 'plsapo'
        }); // Insert your pixel ID here.
        fbq('track', 'PageView', {}, {
            eventID: Bizweb.fbEventId
        });
    </script>
    <noscript>
        <img height='1' width='1' style='display:none'
            src='https://www.facebook.com/tr?id=1482269005400151&ev=PageView&noscript=1' />
    </noscript>
    <!--DO NOT MODIFY-->
    <!--End Facebook Pixel Code-->
    <script>
        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "/dist/js/store_events_listener.min.js?v=8ee4227";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    </script>
    <script>
        $(document).ready(function($) {
            awe_lazyloadImage();
        });

        function awe_lazyloadImage() {
            var ll = new LazyLoad({
                elements_selector: ".lazyload",
                load_delay: 100,
                threshold: 0
            });
        }
        window.awe_lazyloadImage = awe_lazyloadImage;
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    @include('components.notification')
    <div class="opacity_menu"></div>
    <div class="banner-top d-none d-md-block" style="background: #01000d">
        <div class="container">
            <a href="" title="Banner top">
                <picture>
                    <source media="(max-width: 567px)"
                        srcset="//bizweb.dktcdn.net/thumb/large/100/112/815/themes/966034/assets/banner_top.jpg?1742954225872">
                    <img alt="Banner top" width="1270" height="47"
                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/banner_top.jpg?1742954225872">
                </picture>
            </a>
        </div>
    </div>
    <header class="header header-scroll">
        <div class="container">
            <div class="header-top d-flex     align-items-center" style="    justify-content: space-between;">
                <a href="{{ route('customer.index') }}" class="logo" title="Logo">
                    <picture>
                        <source media="(max-width: 567px)"
                            srcset="//bizweb.dktcdn.net/thumb/large/100/112/815/themes/966034/assets/logo-mobile2.png?1742954225872">
                        <img width="414" height="100"
                            src="{{ asset('uploads/ChatGPT Image 19_21_24 5 thg 4, 2025.png') }}" alt="NTShop">
                    </picture>
                </a>


                <div class="notification-bell" id="notification-bell">
                    <div class="bell-icon">
                        <i class="fas fa-bell"></i>
                        <div class="glow-effect"></div>
                    </div>
                </div>

                <div class="hot-deals-container" id="hotDealsContainer"
                    style="{{ $currentRoute === 'customer.index' ? '' : 'display: none;' }}">
                    <div class="hot-deals-title">
                        Giá sốc trong ngày
                        <button class="close-hot-deals">&times;</button>
                    </div>
                    <div class="hot-deals-content">
                        <div class="hot-deal-item">
                            <a href="#" class="product-link">
                                <div class="product-image">
                                    <img src="" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <div class="product-name"></div>
                                    <div class="price-container">
                                        <div class="old-price"></div>
                                        <div class="new-price"></div>
                                        <div class="discount"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="icon-menu vertical-menu-category d-none d-lg-block" style="position: relative">
                    <span class="menu-icon">
                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bars" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            class="svg-inline--fa fa-bars fa-w-14">
                            <path fill="#ffffff"
                                d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"
                                class=""></path>
                        </svg>
                    </span>
                    <span class="vertical-heading-text" style="position: absolute; top:8px; left:35px">Danh mục</span>
                </div>
                <div class="menu-vertical  ">
                    <div class="list_menu_header">
                        <div class="ul nav vertical-nav ul_menu site-nav-vetical">
                            @foreach ($categoriess as $category)
                                <div class="nav_item nav-item lv1 li_check ">
                                    <a href="{{ route('customer.category', $category->id) }}" title="Điện thoại"
                                        style="background-image: url('//bizweb.dktcdn.net/100/112/815/themes/966034/assets/icon_megamenu_1.png?1742954225872')">{{ $category->name }}
                                        <i class="fas fa-angle-right">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                            </svg>
                                        </i>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="search-header" style="flex: 1;">
                    <div class="search-smart">
                        <form action="{{ auth()->check() ? route('customer.search') : route('guest.search') }}"
                            method="POST" class="search-form">
                            @csrf
                            <div class="search-container">
                                <input type="text" name="query" id="search-input"
                                    placeholder="Bạn cần tìm gì..." autocomplete="off">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <div class="search-results" id="search-results">
                                <div class="trending-products">
                                    <h3>Sản phẩm nổi bật</h3>
                                    <div class="product-grid">
                                        <!-- Products will be inserted here by JavaScript -->
                                    </div>
                                </div>
                                <div class="search-products" style="display: none;">
                                    <h3>Kết quả tìm kiếm</h3>
                                    <div class="product-grid">
                                        <!-- Search results will be inserted here -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header-control d-none d-xl-flex ">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                    </div>
                    <div class="content">
                        <a title="0867023153" href="tel:0867023153" class="button-wishlist">
                            Hotline<span>0867023153</span>
                        </a>
                    </div>
                </div>
                <div class="header-control d-none d-lg-flex">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-clipboard2-check" viewBox="0 0 16 16">
                            <path
                                d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z" />
                            <path
                                d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z" />
                            <path
                                d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z" />
                        </svg>
                    </div>
                    <div class="content">
                        <a title="Tra cứu đơn hàng" href="{{ route('customer.order.history') }}"
                            class="button-wishlist">
                            Lịch sử<span>mua hàng</span>
                        </a>
                    </div>
                </div>
                <div class="header-control d-none header-cart block-cart d-lg-flex">
                    <div title="Giỏ hàng" class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 40 40">
                            <defs></defs>
                            <g id="ic-cart">
                                <path id="shopping-bag" class="cls-1"
                                    d="M35.91,36.17,33.24,10.75a1,1,0,0,0-1-.94h-5V8.67a6.47,6.47,0,1,0-12.93,0V9.81h-5a1.05,1.05,0,0,0-1,.94L5.52,36.17a1,1,0,0,0,.93,1.15H34.87a1,1,0,0,0,1.05-1A.41.41,0,0,0,35.91,36.17ZM16.35,8.67a4.38,4.38,0,1,1,8.75,0V9.81H16.35ZM7.73,35.24l2.45-23.33h4.07v2.3a1,1,0,0,0,1,1.09,1,1,0,0,0,1.09-1V11.91H25.1v2.3a1,1,0,0,0,1,1.09,1,1,0,0,0,1.09-1V11.91h4.07l2.45,23.33Z" />
                            </g>
                        </svg>
                    </div>
                    <div class="content">
                        <a href="{{ route('customer.cart') }}" title="Giỏ hàng">
                            Giỏ hàng<br>
                            Sản phẩm <span
                                class="count_item_pr">{{ \App\Models\Cart::where('user_id', auth()->id())->count() }}</span>
                        </a>
                    </div>
                    <div class="top-cart-content">
                        <div class="CartHeaderContainer">
                        </div>
                    </div>
                </div>
                <div class="account-header d-none d-lg-block">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 40 40">
                            <defs></defs>
                            <g id="ic-user">
                                <g id="_6-User" data-name="6-User">
                                    <g id="Group_18" data-name="Group 18">
                                        <path id="Path_92" data-name="Path 92" class="cls-1"
                                            d="M20,22.21a6.12,6.12,0,1,0-6.12-6.12h0A6.13,6.13,0,0,0,20,22.21ZM20,12a4.08,4.08,0,1,1-4.08,4.08A4.08,4.08,0,0,1,20,12Z" />
                                        <path id="Path_93" data-name="Path 93" class="cls-1"
                                            d="M20,4.88A16.31,16.31,0,1,0,36.31,21.19,16.31,16.31,0,0,0,20,4.88Zm0,2A14.25,14.25,0,0,1,31.93,29a15.23,15.23,0,0,0-21.38-2.47A15.66,15.66,0,0,0,8.07,29,14.25,14.25,0,0,1,20,6.92Zm0,28.54A14.24,14.24,0,0,1,9.35,30.65a13.24,13.24,0,0,1,21.3,0A14.24,14.24,0,0,1,20,35.46Z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span>Thông tin</span>
                    <div class="dropdown-menu">
                        <a href="{{ route('customer.profile') }}" class="dropdown-item">
                            <i class="bi bi-person"></i> Thông tin tài khoản
                        </a>
                        <form action="{{ route('auth.logout') }}" method="POST" class="dropdown-item">
                            @csrf
                            <button type="submit" class="btn btn-link p-0">
                                <i class="bi bi-box-arrow-right"></i> Đăng xuất
                            </button>
                        </form>
                    </div>
                </div>
                <div class="menu-bar d-lg-none d-flex">
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bars" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                        class="svg-inline--fa fa-bars fa-w-14">
                        <path fill="#ffffff"
                            d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"
                            class=""></path>
                    </svg>
                </div>
            </div>
        </div>
    </header>

    {{-- Flash Message Display --}}
    <div class="container" style="padding-top: 15px;">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('warning') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('info'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('info') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    {{-- End Flash Message Display --}}

    {{-- Assume main content (@yield or similar) follows here --}}

    <!-- Thêm ngay sau thẻ body -->
    <div id="promotion-popup" class="promotion-popup">
        <div class="popup-content">
            <button class="close-popup">&times;</button>
            <div class="popup-image">
                <img src="{{ asset('banners/z6564600626573_304f1f14c1aa56b2a7c162a347f7f041.jpg') }}" alt="Khuyến mãi">
            </div>
            <div class="popup-text">
                <h2>🎉 Tin vui mới nhất! 🎉</h2>
                <p>Kính gửi quý khách,</p>
                <p class="highlight">Chúng tôi đang có chương trình:</p>
                <ul>
                    <li>🚚 Miễn phí vận chuyển toàn quốc tới tháng 9/2025</li>
                    <li>🎫 Hàng loạt voucher giảm giá hấp dẫn</li>
                </ul>
                <div class="cta-button">
                    <a href="{{ route('customer.index') }}" class="shop-now">Mua sắm ngay thôi nào!</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<style>
    .account-header {
        position: relative;
        cursor: pointer;
    }

    .account-header .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        min-width: 200px;
        z-index: 1000;
        padding: 8px 0;
    }

    .account-header:hover .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        padding: 10px 15px;
        color: #2c3e50;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .dropdown-item:hover {
        background: #f8f9fa;
        color: #e74c3c;
    }

    .dropdown-item i {
        margin-right: 10px;
        font-size: 1.1em;
    }

    .dropdown-item button {
        width: 100%;
        text-align: left;
        color: #2c3e50;
        text-decoration: none;
        background: none;
        border: none;
        padding: 0;
    }

    .dropdown-item button:hover {
        color: #e74c3c;
    }

    .count_item_pr {
        background: #e74c3c;
        color: white;
        padding: 2px 8px;
        border-radius: 12px;
        font-size: 0.8em;
        font-weight: 500;
    }

    .promotion-popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 99999;
        animation: fadeIn 0.3s ease-out;
    }

    .popup-content {
        position: relative;
        width: 90%;
        max-width: 600px;
        background: white;
        margin: 50px auto;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
        animation: slideIn 0.5s ease-out;
    }

    .close-popup {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: #333;
        z-index: 1;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .close-popup:hover {
        background: #ff4444;
        color: white;
    }

    .popup-image {
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .popup-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .popup-text {
        padding: 20px;
        text-align: center;
    }

    .popup-text h2 {
        color: #ff4444;
        margin-bottom: 15px;
        font-size: 24px;
    }

    .popup-text p {
        margin-bottom: 10px;
        color: #333;
    }

    .popup-text .highlight {
        color: #ff4444;
        font-weight: bold;
        font-size: 18px;
    }

    .popup-text ul {
        list-style: none;
        padding: 0;
        margin: 15px 0;
    }

    .popup-text ul li {
        margin: 10px 0;
        color: #666;
        font-size: 16px;
    }

    .cta-button {
        margin-top: 20px;
    }

    .shop-now {
        display: inline-block;
        padding: 12px 30px;
        background: linear-gradient(45deg, #ff4444, #ff6b6b);
        color: white;
        text-decoration: none;
        border-radius: 25px;
        font-weight: bold;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px rgba(255, 68, 68, 0.3);
    }

    .shop-now:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 68, 68, 0.4);
        background: linear-gradient(45deg, #ff6b6b, #ff4444);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes slideIn {
        from {
            transform: translateY(-100px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .notification-bell {
        position: fixed;
        top: 81%;
        left: 20px;
        transform: translateY(-50%);
        z-index: 9999;
        cursor: pointer;
        background: #ff4444;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 10px rgba(255, 68, 68, 0.3);
    }

    .bell-icon {
        position: relative;
        color: #fff;
        font-size: 20px;
    }

    .glow-effect {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        background: rgba(255, 68, 68, 0.3);
        border-radius: 50%;
        animation: glow 2s infinite;
        pointer-events: none;
    }

    @keyframes glow {
        0% {
            width: 100%;
            height: 100%;
            opacity: 0.3;
        }

        50% {
            width: 150%;
            height: 150%;
            opacity: 0.1;
        }

        100% {
            width: 100%;
            height: 100%;
            opacity: 0.3;
        }
    }

    @media (max-width: 768px) {
        .notification-bell {
            top: auto;
            bottom: 20px;
            left: 20px;
        }
    }

    .notification-bell:hover {
        transform: translateY(-50%) scale(1.1);
        transition: transform 0.3s ease;
    }

    @media (max-width: 768px) {
        .notification-bell:hover {
            transform: scale(1.1);
        }
    }

    .search-header {
        margin: 0 20px;
        position: relative;
    }

    .search-container {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
    }

    .search-container input {
        width: 100%;
        padding: 12px 45px 12px 20px;
        border: 2px solid #e0e0e0;
        border-radius: 30px;
        font-size: 14px;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }

    .search-container input:focus {
        border-color: #ff4444;
        box-shadow: 0 0 0 4px rgba(255, 68, 68, 0.1);
        outline: none;
        background: #fff;
    }

    .search-container button {
        position: absolute;
        right: 15px;
        background: none;
        border: none;
        color: #666;
        cursor: pointer;
        padding: 8px;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .search-container button:hover {
        color: #ff4444;
        background: rgba(255, 68, 68, 0.1);
    }

    .search-results {
        display: none;
        position: absolute;
        top: calc(100% + 5px);
        left: 0;
        width: 100%;
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        margin-top: 5px;
        z-index: 1000;
        padding: 20px;
        animation: slideDown 0.3s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .search-results h3 {
        font-size: 14px;
        color: #666;
        margin-bottom: 15px;
        padding-left: 10px;
        font-weight: 600;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .product-item {
        display: flex;
        align-items: center;
        padding: 12px;
        border-radius: 12px;
        transition: all 0.3s ease;
        text-decoration: none;
        background: #fff;
    }

    .product-item:hover {
        background-color: #f8f9fa;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .product-image {
        width: 70px;
        height: 70px;
        border-radius: 10px;
        overflow: hidden;
        margin-right: 15px;
        border: 1px solid #eee;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-info {
        flex: 1;
    }

    .product-name {
        font-size: 14px;
        color: #333;
        margin-bottom: 6px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        font-weight: 500;
    }

    .product-price {
        font-size: 13px;
        display: flex;
        flex-direction: column;
    }

    .old-price {
        color: #999;
        text-decoration: line-through;
        margin-bottom: 2px;
    }

    .new-price {
        color: #ff4444;
        font-weight: 600;
        font-size: 14px;
    }

    @media (max-width: 768px) {
        .product-grid {
            grid-template-columns: 1fr;
        }

        .search-results {
            position: fixed;
            top: 60px;
            left: 0;
            width: 100%;
            height: calc(100vh - 60px);
            border-radius: 0;
            margin-top: 0;
        }
    }

    .hot-deals-container {
        position: fixed;
        top: 62%;
        left: 48px;
        z-index: 10;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        width: 250px;
        overflow: hidden;
        animation: slideIn 0.5s ease;
    }

    .hot-deals-title {
        background: #ff4444;
        color: white;
        font-weight: bold;
        text-align: center;

        position: relative;
    }

    .close-hot-deals {
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
        padding: 0 5px;
        line-height: 1;
    }

    .close-hot-deals:hover {
        opacity: 0.8;
    }

    .product-link {
        display: flex;
        gap: 12px;
        text-decoration: none;
        color: inherit;
    }

    .product-link:hover .product-name {
        color: #ff4444;
    }

    .hot-deals-content {
        padding: 12px;
    }

    .hot-deal-item {
        display: flex;
        gap: 12px;
        transition: opacity 0.5s ease;
    }

    .product-image {
        width: 80px;
        height: 80px;
        overflow: hidden;
        border-radius: 4px;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-info {
        flex: 1;
    }

    .product-name {
        font-weight: 500;
        margin-bottom: 8px;
        color: #333;
        font-size: 14px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .price-container {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .old-price {
        text-decoration: line-through;
        color: #999;
        font-size: 0.9em;
    }

    .new-price {
        color: #ff4444;
        font-weight: bold;
        font-size: 1.1em;
    }

    .discount {
        position: absolute;
        background: #ff4444;
        color: white;
        padding: 2px 6px;
        border-radius: 4px;
        font-size: 0.8em;
        top: 32px;
        left: 70px;
    }

    @media (max-width: 768px) {
        .hot-deals-container {
            top: auto;
            bottom: 80px;
            left: 20px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentRoute = '{{ Route::currentRouteName() }}';
        const hotDealsContainer = document.getElementById('hotDealsContainer');

        // Chỉ khởi tạo và chạy hot deals nếu đang ở trang chủ
        if (currentRoute === 'customer.index') {
            const popup = document.getElementById('promotion-popup');
            const bell = document.getElementById('notification-bell');
            const closeBtn = document.querySelector('.close-popup');
            const closeHotDeals = document.querySelector('.close-hot-deals');
            const isLoggedIn = {{ Auth::check() ? 'true' : 'false' }};

            // Thêm sự kiện click cho chuông bell
            bell.addEventListener('click', function() {
                popup.style.display = 'block';
            });

            // Thêm sự kiện đóng popup
            closeBtn.addEventListener('click', function() {
                popup.style.display = 'none';
            });

            // Xử lý đóng hot deals
            closeHotDeals.addEventListener('click', function(e) {
                e.preventDefault();
                hotDealsContainer.style.display = 'none';
                localStorage.setItem('hotDealsHidden', 'true');

                // Tự động hiện lại sau 2 phút
                setTimeout(() => {
                    hotDealsContainer.style.display = 'block';
                    localStorage.setItem('hotDealsHidden', 'false');
                }, 120000); // 120000ms = 2 phút
            });

            // Kiểm tra trạng thái hiển thị hot deals từ localStorage
            const isHotDealsHidden = localStorage.getItem('hotDealsHidden') === 'true';
            if (isHotDealsHidden) {
                hotDealsContainer.style.display = 'none';

                // Tự động hiện lại sau 2 phút nếu đã bị ẩn
                setTimeout(() => {
                    hotDealsContainer.style.display = 'block';
                    localStorage.setItem('hotDealsHidden', 'false');
                }, 120000);
            }

            // Xử lý hiển thị sản phẩm giá sốc
            const hotDeals = @json($highestDiscountProducts ?? []);
            let currentIndex = 0;
            const hotDealItem = document.querySelector('.hot-deal-item');
            const productLink = document.querySelector('.product-link');
            const productImage = document.querySelector('.product-image img');
            const productName = document.querySelector('.product-name');
            const oldPrice = document.querySelector('.old-price');
            const newPrice = document.querySelector('.new-price');
            const discount = document.querySelector('.discount');

            function updateHotDeal() {
                if (!hotDeals || hotDeals.length === 0) return;

                const deal = hotDeals[currentIndex];
                const firstVariant = deal.variants[0];

                if (deal && firstVariant) {
                    productLink.href = '{{ route('customer.product_detail', '') }}/' + deal.id;
                    productImage.src = '/' + deal.image;
                    productImage.alt = deal.name;
                    productName.textContent = deal.name;
                    oldPrice.textContent = new Intl.NumberFormat('vi-VN', {
                        style: 'currency',
                        currency: 'VND'
                    }).format(firstVariant.origin_price);
                    newPrice.textContent = new Intl.NumberFormat('vi-VN', {
                        style: 'currency',
                        currency: 'VND'
                    }).format(firstVariant.price);
                    discount.textContent = `-${deal.discount_percent}%`;
                }

                hotDealItem.style.opacity = '0';
                setTimeout(() => {
                    hotDealItem.style.opacity = '1';
                }, 500);
            }

            // Cập nhật sản phẩm đầu tiên
            updateHotDeal();

            // Tự động chuyển đổi sản phẩm mỗi 3 giây
            setInterval(() => {
                currentIndex = (currentIndex + 1) % hotDeals.length;
                updateHotDeal();
            }, 3000);
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('search-input');
        const searchResults = document.getElementById('search-results');
        const trendingProducts = document.querySelector('.trending-products');
        const searchProducts = document.querySelector('.search-products');
        let searchTimeout;

        // Load trending products on focus
        searchInput.addEventListener('focus', function() {
            searchResults.style.display = 'block';
            if (!searchInput.value) {
                loadTrendingProducts();
            }
        });

        // Handle input changes
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            const query = this.value.trim();

            searchTimeout = setTimeout(() => {
                if (query) {
                    searchProducts.style.display = 'block';
                    trendingProducts.style.display = 'none';
                    searchProductsByQuery(query);
                } else {
                    searchProducts.style.display = 'none';
                    trendingProducts.style.display = 'block';
                    loadTrendingProducts();
                }
            }, 300);
        });

        // Close search results when clicking outside
        document.addEventListener('click', function(e) {
            if (!searchResults.contains(e.target) && e.target !== searchInput) {
                searchResults.style.display = 'none';
            }
        });

        function loadTrendingProducts() {
            const url = '{{ auth()->check() ? '/search-suggestions' : '/guest/search-suggestions' }}';
            fetch(url)
                .then(response => response.json())
                .then(products => {
                    displayProducts(products, trendingProducts.querySelector('.product-grid'));
                });
        }

        function searchProductsByQuery(query) {
            const url = '{{ auth()->check() ? '/search-suggestions' : '/guest/search-suggestions' }}';
            fetch(`${url}?query=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(products => {
                    displayProducts(products, searchProducts.querySelector('.product-grid'));
                });
        }

        function displayProducts(products, container) {
            if (products.length === 0) {
                container.innerHTML = '<div class="no-results">Không tìm thấy sản phẩm nào</div>';
                return;
            }

            container.innerHTML = products.map(product => `
            <a href="${product.url}" class="product-item">
                <div class="product-image">
                    <img src="${product.image}" alt="${product.name}">
                </div>
                <div class="product-info">
                    <div class="product-name">${product.name}</div>
                    <div class="product-price">
                        <span class="old-price">${product.base_price}</span>
                        <span class="new-price">${product.sale_price}</span>
                    </div>
                </div>
            </a>
        `).join('');
        }
    });
</script>

<style>
    /* .header-scroll {
        transition: 0.3s linear;
        position: fixed;
        z-index: 99999;
        top: 0 !important;
        width: 100%;
    }
    .header-scroll.active {
        position: fixed;
        top: 0 !important;
        width: 100%;
    } */
    .header-scroll {
        transition: 0.3s linear;
        width: 100%;
        /* Không fixed mặc định */
    }

    .header-scroll.active {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 99999;
        width: 100%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
     
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.querySelector('.header-scroll');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) { // 50px, bạn có thể chỉnh lại
                header.classList.add('active');
            } else {
                header.classList.remove('active');
            }
        });
    });
</script>
