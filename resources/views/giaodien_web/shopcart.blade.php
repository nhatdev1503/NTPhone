@include('layouts.customer.header')

<div class="container my-4">
    @yield('content')


    <html lang="vi">
        <head>
            <meta charset="UTF-8" />
            <meta name="theme-color" content="" />
            <link rel="canonical" href="https://dienthoaihanoi.vn/cart"/>
            <meta name='revisit-after' content='2 days' />
            <meta name="robots" content="follow, noindex">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
            <meta name="google-site-verification" content="hFk9_7fu7Oke1xk8bcmaMx5NCI3Q-S--zoRnxl-0z6M" />
    
            <meta name="description" content="">
            <title>Giỏ hàng		</title>
            <meta name="keywords" content="Giỏ hàng, Điện thoại Hà Nội VN, dienthoaihanoi.vn"/>		
            
    
        <meta property="og:type" content="website">
        <meta property="og:title" content="Giỏ hàng">
        <meta property="og:image" content="https://bizweb.dktcdn.net/100/460/635/themes/869995/assets/share_fb_home.jpg?1738993211137">
        <meta property="og:image:secure_url" content="https://bizweb.dktcdn.net/100/460/635/themes/869995/assets/share_fb_home.jpg?1738993211137">
    
    <meta property="og:description" content="">
    <meta property="og:url" content="https://dienthoaihanoi.vn/cart">
    <meta property="og:site_name" content="Điện thoại Hà Nội VN">
    
            <link rel="icon" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/favicon.png?1738993211137" type="image/x-icon" />
            <link  rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link  rel="dns-prefetch" href="https://fonts.gstatic.com" >
    <link  rel="dns-prefetch" href="https://bizweb.dktcdn.net" >
    <link rel="dns-prefetch" href="https://dienthoaihanoi.vn">
    <!--
    <link rel="preload" as='style' type="text/css" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/main.css?1738993211137" />
    -->
    
    <link rel="preload" as='style'  type="text/css" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/index.css?1738993211137">
    <link rel="preload" as='style'  type="text/css" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/bootstrap-4-3-min.css?1738993211137">
    <link rel="preload" as='style'  type="text/css" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/responsive.css?1738993211137">
    <link rel="preload" as='style'  type="text/css" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/product-infor-style.css?1738993211137">
    <link rel="preload" as='style'  type="text/css" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/quickviews-popup-cart.css?1738993211137">
    
    
    
    
            <link rel="stylesheet" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/bootstrap-4-3-min.css?1738993211137">
            <style>
                :root{
                    --text-color: #000000;
                    --body-background: #F9F9FB;
                    --text-secondary-color: #8F8F8F;
                    --primary-color: #f8e505;
                    --secondary-color:#ff4f1a;
                    --price-color: #ed3324;
                    --header-background: #000000;
                    --header-color: #ffffff;
                    --subheader-background: #ffffff;
                    --subheader-color: #2f4858;
                    --label-background: #ed3324;
                    --label-color: #ffffff;
                    --footer-bg:#ffffff;
                    --footer-color:#333333;
                    --show-loadmore: none!important;				--order-loadmore: -1!important;				--sale-pop-color: #e40303;
                    --buynow-bg: #ed3324;
                    --buynow-text-color: #ffffff;
                    --cta-color: #ed3324;
                    --coupon-title-color: #fd545b;
                    --coupon-button-color: #fd545b;
                    --col-menu: 3;
                    --border-color: #f1f1f1;
                    --link-color: #2F80ED;
                    --coupon-code-background: #fd545b;
                }
                @font-face {
                    font-family: 'Lato';
                    font-style: normal;
                    font-weight: 300;
                    font-display: swap;
                    src: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/lato-light.woff2?1738993211137) format('woff2');
                }
                @font-face {
                    font-family: 'Lato';
                    font-style: normal;
                    font-weight: 400;
                    font-display: swap;
                    src: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/lato-regular.woff2?1738993211137) format('woff2');
                }
                @font-face {
                    font-family: 'Lato';
                    font-style: normal;
                    font-weight: 700;
                    font-display: swap;
                    src: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/lato-bold.woff2?1738993211137) format('woff2');
                }
            </style>
            <link href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/main.css?1738993211137" rel="stylesheet"/>
    
            <link href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/product-infor-style.css?1738993211137" rel="stylesheet" type="text/css" media="all" />
            <style>
        .swatch-element {
            position: relative;
            margin: 8px 10px 0px 0px;
        }
        .swatch-element.color {
            margin: 8px 15px 0px 0px;
        }
        .swatch-element.color .trang {
            background-color: #fcfcfc;
        }
        .swatch-element.color .xanh-ngoc {
            background-color: #0572ff;
        }
        .swatch-element.color .hong {
            background-color: #f662d6;
        }
        .swatch-element.color .den {
            background-color: #000;
        }
        .swatch-element.color .do {
            background-color: #f20808;
        }
        .swatch-element.color .vang {
            background-color: #fcef05;
        }
        .swatch-element.color .xam {
            background-color: #615a5a;
        }
        .swatch-element.color .xanh-nuoc-bien {
            background-color: #3a40fa;
        }
        .swatch-element.color .xanh-luc {
            background-color: #00b7ff;
        }
        .swatch-element.color .tim {
            background-color: #c500ff;
        }
    
                                    .swatch-element.color .trang {
            background-color:#ffffff;
        }
        .swatch-element.color .trang.image-type {
            background: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/color_1.png?1738993211137) no-repeat center center;
            background-size: cover;
        }
                                        .swatch-element.color .xanh-duong {
            background-color:#009cce;
        }
        .swatch-element.color .xanh-duong.image-type {
            background: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/color_2.png?1738993211137) no-repeat center center;
            background-size: cover;
        }
                                        .swatch-element.color .xam {
            background-color:#7e7e7e;
        }
        .swatch-element.color .xam.image-type {
            background: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/color_3.png?1738993211137) no-repeat center center;
            background-size: cover;
        }
                                        .swatch-element.color .do {
            background-color:#e80000;
        }
        .swatch-element.color .do.image-type {
            background: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/color_4.png?1738993211137) no-repeat center center;
            background-size: cover;
        }
                                        .swatch-element.color .den {
            background-color:#000000;
        }
        .swatch-element.color .den.image-type {
            background: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/color_5.png?1738993211137) no-repeat center center;
            background-size: cover;
        }
                                        .swatch-element.color .hong {
            background-color:#ffd1d1;
        }
        .swatch-element.color .hong.image-type {
            background: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/color_6.png?1738993211137) no-repeat center center;
            background-size: cover;
        }
                                        .swatch-element.color .tim {
            background-color:#a000bb;
        }
        .swatch-element.color .tim.image-type {
            background: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/color_7.png?1738993211137) no-repeat center center;
            background-size: cover;
        }
                                        .swatch-element.color .xanh-reu {
            background-color:#008070;
        }
        .swatch-element.color .xanh-reu.image-type {
            background: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/color_8.png?1738993211137) no-repeat center center;
            background-size: cover;
        }
                                        .swatch-element.color .kem {
            background-color:#fff8e2;
        }
        .swatch-element.color .kem.image-type {
            background: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/color_9.png?1738993211137) no-repeat center center;
            background-size: cover;
        }
                                        .swatch-element.color .bac {
            background-color:#f0f0f0;
        }
        .swatch-element.color .bac.image-type {
            background: url(//bizweb.dktcdn.net/100/460/635/themes/869995/assets/color_10.png?1738993211137) no-repeat center center;
            background-size: cover;
        }
            
        .swatch-element.color + .tooltip {
            z-index: -1;
            white-space: nowrap;
        }
        .swatch-element.color:hover + .tooltip {
            opacity: 1;
            z-index: 100;
            top: -30px;
            min-width: 30px;
            background: #000;
            color: #fff;
            padding: 4px 6px;
            font-size: 10px;
            border-radius: 4px;
        }
        .swatch-element.color:hover + .tooltip:after {
            content: '';
            position: absolute;
            left: 16px;
            bottom: -3px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 3px 2.5px 0 2.5px;
            border-color: #000 transparent transparent transparent;
        }
        .swatch-element label {
            padding: 10px;
            font-size: 14px;
            border-radius: 6px;
            height: 30px !important;
            min-width: auto !important;
            white-space: nowrap;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .swatch-element input {
            width: 100%;
            height: 100%;
            opacity: 0;
            position: absolute;
            z-index: 3;
            top: 0;
            left: 0;
            cursor: pointer;
        }
        .swatch .swatch-element input:checked + label {
            border-color: var(--primary-color) !important;
            color: var(--primary-color);
            position: relative;
        }
        .swatch .swatch-element input:checked + label:after {
            content: none;
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkCw8RJSHXzNuNAAAAfElEQVQoz7WRsQ2CYBQGLwRCaLRkDwqdwcLCSZjCmj2AgtoJXMbEUquzEAz+8Je89r675sGG59ka0ig+0ZFbJDGbgRwoAXemi/hb1QZw793ebB739cPgTdV2qvzZAFY+VL+VwB4nB59j5RLYhBVXcTBZw7NJDAN49LrFyz67GnkMHStx0wAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0xMS0xNVQxNzozNzozMyswMDowMGfDTJEAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMTEtMTVUMTc6Mzc6MzMrMDA6MDAWnvQtAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg==");
            background-repeat: no-repeat;
            background-size: contain;
            position: absolute;
            top: 0px;
            right: 0;
            width: 6px;
            height: 6px;
        }
        .swatch .swatch-element input:checked + label:before {
            content: none;
            padding: 4px;
            font-size: 10px;
            line-height: 1;
            position: absolute;
            top: -15px;
            right: -13px;
            background: var(--primary-color);
            width: 26px;
            height: 24px;
            transform: rotate(45deg);
        }
        .swatch .color label {
            width: 24px;
            min-width: unset !important;
            height: 24px !important;
            line-height: 24px !important;
            border-radius: 6px !important;
        }
        .swatch .color label:before {
            content: none;
        }
        .swatch {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            padding: 0 0 10px;
        }
        .swatch .header {
            font-weight: bold;
            padding-right: 20px;
            min-width: 115px;
            color: #333;
        }
        .swatch .color label {
            position: relative;
            z-index: 2;
            border-radius: 100% !important;
        }
        .swatch .color span {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            border-radius: 100%;
            background: #fff;
            top: 50%;
            left: 50%;
            z-index: 0;
            transform: translate(-50%, -50%);
        }
        .swatch .color input:checked + label {
            border-color: #eee !important;
        }
        .swatch .color input:checked ~ span {
            opacity: 1;
            border: 2px solid var(--primary-color);
        }
        .quick-view-product .swatch {
            padding: var(--block-spacing) 0;
        }
        .item_product_main .swatch-element.color {
            margin-right: 5px;
            margin-top: 5px;
        }
        .item_product_main .swatch .color label {
            width: 26px;
            height: 26px!important;
            line-height: 26px!important;
            padding: 0;
        }
    </style>		<link href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/quickviews-popup-cart.css?1738993211137" rel="stylesheet" type="text/css" media="all" />
                    <link href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/cartpage.css?1738993211137" rel="stylesheet" type="text/css" media="all" />		
            
            
            
            
            
            <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/jquery.js?1738993211137" />
            <script src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/jquery.js?1738993211137" type="text/javascript"></script>
                    <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/slick-min.js?1738993211137" />
            <script src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/slick-min.js?1738993211137" type="text/javascript"></script>
                    <link href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/responsive.css?1738993211137" rel="stylesheet" type="text/css" media="all" />
            <script>
        var Bizweb = Bizweb || {};
        Bizweb.store = 'dienthoaihanoivn.mysapo.net';
        Bizweb.id = 460635;
        Bizweb.theme = {"id":869995,"name":"EGA Techstore","role":"main"};
        Bizweb.template = 'cart';
        if(!Bizweb.fbEventId)  Bizweb.fbEventId = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
        var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
                    return v.toString(16);
                });		
    </script>
    <script>
        (function () {
            function asyncLoad() {
                var urls = [];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
        })();
    </script>
    
    
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
        
    
    
    
    
    
    <!--Facebook Pixel Code-->
    <script>
        !function(f, b, e, v, n, t, s){
        if (f.fbq) return; n = f.fbq = function(){
        n.callMethod?
        n.callMethod.apply(n, arguments):n.queue.push(arguments)}; if (!f._fbq) f._fbq = n;
        n.push = n; n.loaded = !0; n.version = '2.0'; n.queue =[]; t = b.createElement(e); t.async = !0;
        t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)}
        (window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1083346976198278', {} , {'agent': 'plsapo'}); // Insert your pixel ID here.
        fbq('track', 'PageView',{},{ eventID: Bizweb.fbEventId });
        
    </script>
    <noscript>
        <img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=1083346976198278&ev=PageView&noscript=1' />
    </noscript>
    <!--DO NOT MODIFY-->
    <!--End Facebook Pixel Code-->
    
    
    
    <script>
        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        
        eventsListenerScript.src = "/dist/js/store_events_listener.min.js?v=8ee4227";
        
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    </script>
    
    
    
    
    
    
            
    
            
    <script type="application/ld+json">
            {
            "@context": "http://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": 
            [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "item": 
                    {
                      "@id": "https://dienthoaihanoi.vn",
                      "name": "Trang chủ"
                    }
                },
          
            
          
          
          
          
          {
                    "@type": "ListItem",
                    "position": 2,
                    "item": 
                    {
                      "@id": "https://dienthoaihanoi.vn/cart",
                      "name": "Giỏ hàng"
                    }
                }
          
        
            ]
            }
    </script>
            <!--
    Theme Information
    --------------------------------------
    Theme ID: EGA TechStore
    Version: v1.3.0_20220624
    Company: EGANY
    changelog: //bizweb.dktcdn.net/100/460/635/themes/869995/assets/ega-changelog.js?1738993211137
    ---------------------------------------
    -->
    
            <script>var ProductReviewsAppUtil=ProductReviewsAppUtil || {};ProductReviewsAppUtil.store={name: 'Điện thoại Hà Nội VN'};</script>
        </head>



    <body id="template-cart">
            <div class="opacity_menu"></div>
            <div class="top-banner position-relative" style="background: #a6040c">
        <div class="container text-center px-0" >
                    <a class="position-relative  d-sm-none d-block" 
               style="max-height: 78px;height:  calc( 78 * 100vw /828  )"
               href="/collections/all" 
               title="Khuyến mãi">
                <img class='img-fluid position-absolute ' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/top_banner_mb.jpg?1738993211137" 
                     style="left:0"
                     alt="Khuyến mãi"
                     width="828 "
                     height="78"
                     loading="lazy"
                     >
            </a>
                    <a class="position-relative d-sm-block d-none " 
               style="max-height: 44px;height:  calc(44 * 100vw /1200)"
               href="/collections/all" 
               title="Khuyến mãi">
                <picture>
                    <source media="(max-width: 480px)" srcset="//bizweb.dktcdn.net/thumb/large/100/460/635/themes/869995/assets/top_banner.jpg?1738993211137">
                    <img class='img-fluid position-absolute' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/top_banner.jpg?1738993211137" 
                         style="left:0"
                         alt="Khuyến mãi"
                         width="1200"
                         height="44"
                         loading="lazy"
                         >
                </picture>
            </a>
            <button type="button" class="close " 
                    aria-label="Close" style="z-index: 9;">✕</button>
        </div>
    </div>
    <script>
        $(document).ready(() => {
            $('.top-banner .close').click(()=>{
                $('.top-banner').slideToggle()
                sessionStorage.setItem("top-banner",true)
            })
        })
    
    </script>
    <header class="header header_menu">
        <div class="mid-header wid_100 d-flex align-items-center">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-2 col-sm-3 header-right d-lg-none d-block">
                        <div class="toggle-nav btn menu-bar mr-4 ml-0 p-0  d-lg-none d-flex text-white">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 col-xl-3 header-left">
                        
                        <a href="/" class="logo-wrapper " title='Điện thoại Hà Nội VN'>
                            <img loading="lazy" class="img-fluid"
                                 src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/logo.png?1738993211137" 
                                 alt="logo Điện thoại Hà Nội VN"
                                 width="300"
                                 height="56"
                                 >
                        </a>
                        
    
                    </div>
                    <div class="col-lg-4 col-12 header-center pl-lg-0" id="search-header">
                        <form action="/search" method="get" class="input-group search-bar custom-input-group " role="search">
        <input type="text" name="query" value="" autocomplete="off" 
               class="input-group-field auto-search form-control " required="" 
               data-placeholder="Bạn cần tìm gì..;
    Nhập tên sản phẩm..">
        <input type="hidden" name="type" value="product">
        <span class="input-group-btn btn-action">
            <button type="submit"  aria-label="search" class="btn text-white icon-fallback-text h-100">
                <svg class="icon">
        <use xlink:href="#icon-search" />
    </svg>		</button>
        </span>
    
    </form>
        
    <div class="search-overlay">
        
    </div>
    
                        
                                            
                                            <div class="search-dropdow">
                            <ul class="search__list pl-0 d-flex list-unstyled mb-0 flex-wrap">
                                <li class="mr-2" >
                                    <a id="filter-search-iphone-xsm" href="/search?q=tags:(Iphone+xsm)&type=product">Iphone xsm</a>
                                </li>	
                                <li class="mr-2" >
                                    <a id="filter-search-iphone-14" href="/search?q=tags:(+Iphone+14)&type=product"> Iphone 14</a>
                                </li>	
                                <li class="mr-2" >
                                    <a id="filter-search-iphone-12-promax" href="/search?q=tags:(+iphone+12+promax)&type=product"> iphone 12 promax</a>
                                </li>	
                                <li class="mr-2" >
                                    <a id="filter-search-iphone-13-promax" href="/search?q=tags:(+Iphone+13+promax)&type=product"> Iphone 13 promax</a>
                                </li>	
                            </ul>
                        </div>
                                                            </div>
                    <div class="col-4 col-sm-3 col-lg-6 col-xl-5 pl-0">
                        <ul class="header-right mb-0 list-unstyled d-flex align-items-center">
        <li class='media d-lg-flex d-none hotline'>
            <img loading="lazy"
                 src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/phone-icon.png?1738993211137" 
                 width="24" height="24" class="mr-1 align-self-center" 
                 alt="phone-icon"/>
    
            <div class="media-body d-md-flex flex-column d-none ">
                <span>Gọi mua hàng</span>
                <a class="font-weight-bold d-block" href="tel:0981.044.044" title="0981.044.044">
                    0981.044.044
                </a>
            </div>
        </li>
        <li class='ml-md-3 media d-lg-flex d-none hotline'>
            <img loading="lazy"
                 src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/address-icon.png?1738993211137" 
                 width="24" height="24" class="mr-1 align-self-center" 
                 alt="address-icon"/>
    
            <div class="media-body d-md-flex flex-column d-none ">
                <a href="/he-thong-cua-hang" 
                   title="Hệ thống cửa hàng">
                    Hệ thống <br/> cửa hàng
                </a>
            </div>
        </li>
        <li class='ml-4 mr-4 mr-md-0 ml-md-3 media d-lg-flex d-none'>
            <img loading="lazy" src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/account-icon.png?1738993211137"  
                 width="24" height="24" alt="account_icon"
                 class="mr-1 align-self-center" />
            <div class="media-body d-md-flex flex-column d-none ">
                            <a rel="nofollow" href="/account/login"  class="d-block" title="Tài khoản" >
                    Tài khoản
                </a>
                <small>
                    <a href="/account/login" title="Đăng nhập" class="font-weight: light">
                        Đăng nhập
                    </a>
                </small>
                
            </div>
        </li>
            <li class='d-lg-none'>
            <a href="/so-sanh-san-pham" class='position-relative d-block'
               title="So sánh sản phẩm">
                <img loading="lazy"
                     src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/compare-icon.png?1738993211137" 
                     width="24" height="24" class="align-self-center" 
                     alt="compare-icon"/>
                <span class='compare-product__header-count position-absolute d-block'>0</span>
            </a>
        </li>
        
        <li class="cartgroup ml-3">
            <div class="mini-cart text-xs-center">
                <a class="img_hover_cart" href="/cart" title="Giỏ hàng" >  
                    <img loading="lazy" 
                         src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/cart-icon.png?1738993211137" 
                         width="24" height="24"
                         alt="cart_icon"
                         />
                    <span class='ml-2 d-xl-block d-none'>Giỏ hàng</span>
                    <span class="count_item count_item_pr">5</span>
                </a>
                <div class="top-cart-content card ">
                    <ul id="cart-sidebar" class="mini-products-list count_li list-unstyled">
                        <li class="list-item">
                            <ul></ul>
                        </li>
                        <li class="action">
    
                        </li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
                    </div>
                </div>
            </div>
        </div>
    
    </header>
    

 
    <div class="subheader ">
        <div class="container ">
            <div class="toogle-nav-wrapper" >
                <div class="icon-bar btn menu-bar mr-2 p-0 d-inline-flex">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <strong>DANH MỤC SẢN PHẨM</strong>
    
                <div class="navigation-wrapper ">
                    
                    <nav class="h-100">
        <ul  class="navigation list-group list-group-flush scroll">
                                                            <li class="menu-item list-group-item">
                <a href="/dien-thoai-apple" class="menu-item__link" title="Điện Thoại Apple">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Điện Thoại Apple" />
                                    <span>Điện Thoại Apple</span>
                                    <i class='float-right' data-toggle-submenu>
                        
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                </a>			
                    
                            <div class="submenu scroll">
                                    <ul class="submenu__list">
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/ip7g-7plus" title="iP7G – 7Plus">iP7G – 7Plus</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/8g-8-plus-x" title="8G – 8 Plus – X">8G – 8 Plus – X</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/iphone-xr-xs-xs-max" title="iPhone XR– XS – XS Max">iPhone XR– XS – XS Max</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/11-11-pro-11-promax" title="11 – 11 pro – 11 promax">11 – 11 pro – 11 promax</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/12-12-pro-12-promax" title="12 – 12 pro – 12 promax">12 – 12 pro – 12 promax</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/13-13-pro-13-promax" title="13 – 13 pro – 13 promax">13 – 13 pro – 13 promax</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/iphone-14" title="Iphone 14">Iphone 14</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/iphone-15-15pro-15promax" title="Iphone 15 - 15Pro - 15Promax">Iphone 15 - 15Pro - 15Promax</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/iphone-16-16pro-16prm" title="Iphone 16 - 16Pro - 16Prm">Iphone 16 - 16Pro - 16Prm</a>
                        </li>
                        
                        
                    </ul>
                </div>
                        </li>
                                                    <li class="menu-item list-group-item">
                <a href="/dien-thoai-samsung" class="menu-item__link" title="Điện thoại Samsung">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Điện thoại Samsung" />
                                    <span>Điện thoại Samsung</span>
                                    <i class='float-right' data-toggle-submenu>
                        
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                </a>			
                    
                            <div class="submenu scroll">
                                    <ul class="submenu__list">
                        
    
                        
                        <li class="submenu__col">
                            <span class="submenu__item submenu__item--main">
                                <a class="link" href="/samsung-note" title="Samsung Note">Samsung Note</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="Note 9">Note 9</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="Note 10">Note 10</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="Note 10 Plus">Note 10 Plus</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="Note20">Note20</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="Note 20 Ultra">Note 20 Ultra</a>
                            </span>
                            
                        </li>
                        
                        
    
                        
                        <li class="submenu__col">
                            <span class="submenu__item submenu__item--main">
                                <a class="link" href="/samsung-galaxy-s" title="Samsung Galaxy S">Samsung Galaxy S</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S9 Plus">S9 Plus</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S10">S10</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S10 Plus">S10 Plus</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S10 5G">S10 5G</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S20">S20</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S20 Plus">S20 Plus</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S20 Ultra">S20 Ultra</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S21">S21</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S21 Plus">S21 Plus</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S21 Ultra">S21 Ultra</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S22">S22</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S22 Ultra">S22 Ultra</a>
                            </span>
                            
                        </li>
                        
                        
    
                        
                        <li class="submenu__col">
                            <span class="submenu__item submenu__item--main">
                                <a class="link" href="/samsung-z-flip" title="Samsung Z Flip">Samsung Z Flip</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="z flip – z">z flip – z</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="flip 2 – z">flip 2 – z</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="flip 3">flip 3</a>
                            </span>
                            
                        </li>
                        
                        
    
                        
                        <li class="submenu__col">
                            <span class="submenu__item submenu__item--main">
                                <a class="link" href="/samsung-z-fold" title="Samsung Z fold">Samsung Z fold</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="z fold 1 – z">z fold 1 – z</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="fold 2 – z">fold 2 – z</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="fold 3">fold 3</a>
                            </span>
                            
                        </li>
                        
                        
                    </ul>
                </div>
                        </li>
                                                    <li class="menu-item list-group-item">
                <a href="/may-tinh-bang" class="menu-item__link" title="Máy Tính Bảng">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Máy Tính Bảng" />
                                    <span>Máy Tính Bảng</span>
                                    <i class='float-right' data-toggle-submenu>
                        
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                </a>			
                    
                            <div class="submenu scroll">
                                    <ul class="submenu__list">
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/ipad-air" title="iPad Air">iPad Air</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/ipad-gen" title="iPad Gen">iPad Gen</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/ipad-mini" title="iPad Mini">iPad Mini</a>
                        </li>
                        
                        
                    </ul>
                </div>
                        </li>
                                                    <li class="menu-item list-group-item">
                <a href="/apple-watch" class="menu-item__link" title="Apple Watch">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Apple Watch" />
                                    <span>Apple Watch</span>
                                    <i class='float-right' data-toggle-submenu>
                        
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                </a>			
                    
                            <div class="submenu scroll">
                                    <ul class="submenu__list">
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/s3-nhom-thep" title="S3 (Nhôm – Thép)">S3 (Nhôm – Thép)</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/s4-nhom-thep" title="S4(Nhôm – Thép)">S4(Nhôm – Thép)</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/s5-nhom-thep" title="S5 (Nhôm – Thép)">S5 (Nhôm – Thép)</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/s6-nhom-thep" title="S6(Nhôm – Thép)">S6(Nhôm – Thép)</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/s7-nhom-thep" title="S7(Nhôm – Thép)">S7(Nhôm – Thép)</a>
                        </li>
                        
                        
                    </ul>
                </div>
                        </li>
                                                    <li class="menu-item list-group-item">
                <a href="/phu-kien" class="menu-item__link" title="Phụ Kiện">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Phụ Kiện" />
                                    <span>Phụ Kiện</span>
                                    <i class='float-right' data-toggle-submenu>
                        
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                </a>			
                    
                            <div class="submenu scroll">
                                    <ul class="submenu__list">
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/tai-nghe" title="Tai nghe">Tai nghe</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/sac-cap" title="Sạc + Cáp">Sạc + Cáp</a>
                        </li>
                        
                        
                    </ul>
                </div>
                        </li>
                                                    <li class="menu-item list-group-item">
                <a href="/dich-vu-sua-chua" class="menu-item__link" title="Dịch Vụ Sửa Chữa">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Dịch Vụ Sửa Chữa" />
                                    <span>Dịch Vụ Sửa Chữa</span>
                                    <i class='float-right' data-toggle-submenu>
                        
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                </a>			
                    
                            <div class="submenu scroll">
                                    <ul class="submenu__list">
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/thay-man" title="Thay màn">Thay màn</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/thay-pin" title="Thay Pin">Thay Pin</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/sua-nguon" title="Sửa nguồn">Sửa nguồn</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/sua-treo-tao" title="Sửa Treo Táo">Sửa Treo Táo</a>
                        </li>
                        
                        
                    </ul>
                </div>
                        </li>
                                                    <li class="menu-item list-group-item">
                <a href="/san-pham-khac" class="menu-item__link" title="Sản phẩm khác">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Sản phẩm khác" />
                                    <span>Sản phẩm khác</span>
                    
                </a>			
                    
                        </li>
            
        </ul>
    </nav>
                    
    
                </div>
    
            </div>
            <ul class="shop-policises list-unstyled d-flex align-items-center flex-wrap m-0 pr-0">
                                <li>
            <div class="">
                <img class="img-fluid " 
                     src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/policy_header_image_1.png?1738993211137" 
                     loading="lazy"
                     width="32"
                     height="32"
                     alt="Điện Thoại iPhone">
            </div>
            <a class="link" href="/dien-thoai-apple" title="Điện Thoại iPhone">Điện Thoại iPhone</a>
        </li>
                                    <li>
            <div class="">
                <img class="img-fluid " 
                     src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/policy_header_image_2.png?1738993211137" 
                     loading="lazy"
                     width="32"
                     height="32"
                     alt="Hướng dẫn thanh toán Online">
            </div>
            <a class="link" href="/huong-dan-mua-hang" title="Hướng dẫn thanh toán Online">Hướng dẫn thanh toán Online</a>
        </li>
                                    <li>
            <div class="">
                <img class="img-fluid " 
                     src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/policy_header_image_3.png?1738993211137" 
                     loading="lazy"
                     width="32"
                     height="32"
                     alt="Chính sách bảo hành">
            </div>
            <a class="link" href="/chinh-sach-bao-hanh" title="Chính sách bảo hành">Chính sách bảo hành</a>
        </li>
                                    <li>
            <div class="">
                <img class="img-fluid " 
                     src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/policy_header_image_4.png?1738993211137" 
                     loading="lazy"
                     width="32"
                     height="32"
                     alt="Địa chỉ liên hệ">
            </div>
            <a class="link" href="/lien-he" title="Địa chỉ liên hệ">Địa chỉ liên hệ</a>
        </li>
                
    </ul>
        </div>
    </div>
    <script type="text/x-custom-template" data-template="sticky-nav">
        <div class="toogle-nav-wrapper w-100 " >
                            <div class=" d-flex align-items-center" style="height: 52px; font-size: 1rem; font-weight: 500">
                                <div class="icon-bar btn menu-bar mr-3 ml-0 p-0 d-inline-flex">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
        </div>
                            Danh mục sản phẩm
        </div>
    
                            <div class="navigation-wrapper">
                                <nav class="h-100">
        <ul  class="navigation list-group list-group-flush scroll">
                                                            <li class="menu-item list-group-item">
                <a href="/dien-thoai-apple" class="menu-item__link" title="Điện Thoại Apple">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Điện Thoại Apple" />
                                    <span>Điện Thoại Apple</span>
                                    <i class='float-right' data-toggle-submenu>
                        
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                </a>			
                    
                            <div class="submenu scroll">
                                    <ul class="submenu__list">
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/ip7g-7plus" title="iP7G – 7Plus">iP7G – 7Plus</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/8g-8-plus-x" title="8G – 8 Plus – X">8G – 8 Plus – X</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/iphone-xr-xs-xs-max" title="iPhone XR– XS – XS Max">iPhone XR– XS – XS Max</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/11-11-pro-11-promax" title="11 – 11 pro – 11 promax">11 – 11 pro – 11 promax</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/12-12-pro-12-promax" title="12 – 12 pro – 12 promax">12 – 12 pro – 12 promax</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/13-13-pro-13-promax" title="13 – 13 pro – 13 promax">13 – 13 pro – 13 promax</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/iphone-14" title="Iphone 14">Iphone 14</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/iphone-15-15pro-15promax" title="Iphone 15 - 15Pro - 15Promax">Iphone 15 - 15Pro - 15Promax</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/iphone-16-16pro-16prm" title="Iphone 16 - 16Pro - 16Prm">Iphone 16 - 16Pro - 16Prm</a>
                        </li>
                        
                        
                    </ul>
                </div>
                        </li>
                                                    <li class="menu-item list-group-item">
                <a href="/dien-thoai-samsung" class="menu-item__link" title="Điện thoại Samsung">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Điện thoại Samsung" />
                                    <span>Điện thoại Samsung</span>
                                    <i class='float-right' data-toggle-submenu>
                        
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                </a>			
                    
                            <div class="submenu scroll">
                                    <ul class="submenu__list">
                        
    
                        
                        <li class="submenu__col">
                            <span class="submenu__item submenu__item--main">
                                <a class="link" href="/samsung-note" title="Samsung Note">Samsung Note</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="Note 9">Note 9</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="Note 10">Note 10</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="Note 10 Plus">Note 10 Plus</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="Note20">Note20</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="Note 20 Ultra">Note 20 Ultra</a>
                            </span>
                            
                        </li>
                        
                        
    
                        
                        <li class="submenu__col">
                            <span class="submenu__item submenu__item--main">
                                <a class="link" href="/samsung-galaxy-s" title="Samsung Galaxy S">Samsung Galaxy S</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S9 Plus">S9 Plus</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S10">S10</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S10 Plus">S10 Plus</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S10 5G">S10 5G</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S20">S20</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S20 Plus">S20 Plus</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S20 Ultra">S20 Ultra</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S21">S21</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S21 Plus">S21 Plus</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S21 Ultra">S21 Ultra</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S22">S22</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="S22 Ultra">S22 Ultra</a>
                            </span>
                            
                        </li>
                        
                        
    
                        
                        <li class="submenu__col">
                            <span class="submenu__item submenu__item--main">
                                <a class="link" href="/samsung-z-flip" title="Samsung Z Flip">Samsung Z Flip</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="z flip – z">z flip – z</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="flip 2 – z">flip 2 – z</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="flip 3">flip 3</a>
                            </span>
                            
                        </li>
                        
                        
    
                        
                        <li class="submenu__col">
                            <span class="submenu__item submenu__item--main">
                                <a class="link" href="/samsung-z-fold" title="Samsung Z fold">Samsung Z fold</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="z fold 1 – z">z fold 1 – z</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="fold 2 – z">fold 2 – z</a>
                            </span>
                            
                            <span class="submenu__item submenu__item">
                                <a class="link" href="/" title="fold 3">fold 3</a>
                            </span>
                            
                        </li>
                        
                        
                    </ul>
                </div>
                        </li>
                                                    <li class="menu-item list-group-item">
                <a href="/may-tinh-bang" class="menu-item__link" title="Máy Tính Bảng">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Máy Tính Bảng" />
                                    <span>Máy Tính Bảng</span>
                                    <i class='float-right' data-toggle-submenu>
                        
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                </a>			
                    
                            <div class="submenu scroll">
                                    <ul class="submenu__list">
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/ipad-air" title="iPad Air">iPad Air</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/ipad-gen" title="iPad Gen">iPad Gen</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/ipad-mini" title="iPad Mini">iPad Mini</a>
                        </li>
                        
                        
                    </ul>
                </div>
                        </li>
                                                    <li class="menu-item list-group-item">
                <a href="/apple-watch" class="menu-item__link" title="Apple Watch">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Apple Watch" />
                                    <span>Apple Watch</span>
                                    <i class='float-right' data-toggle-submenu>
                        
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                </a>			
                    
                            <div class="submenu scroll">
                                    <ul class="submenu__list">
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/s3-nhom-thep" title="S3 (Nhôm – Thép)">S3 (Nhôm – Thép)</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/s4-nhom-thep" title="S4(Nhôm – Thép)">S4(Nhôm – Thép)</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/s5-nhom-thep" title="S5 (Nhôm – Thép)">S5 (Nhôm – Thép)</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/s6-nhom-thep" title="S6(Nhôm – Thép)">S6(Nhôm – Thép)</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/s7-nhom-thep" title="S7(Nhôm – Thép)">S7(Nhôm – Thép)</a>
                        </li>
                        
                        
                    </ul>
                </div>
                        </li>
                                                    <li class="menu-item list-group-item">
                <a href="/phu-kien" class="menu-item__link" title="Phụ Kiện">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Phụ Kiện" />
                                    <span>Phụ Kiện</span>
                                    <i class='float-right' data-toggle-submenu>
                        
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                </a>			
                    
                            <div class="submenu scroll">
                                    <ul class="submenu__list">
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/tai-nghe" title="Tai nghe">Tai nghe</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/sac-cap" title="Sạc + Cáp">Sạc + Cáp</a>
                        </li>
                        
                        
                    </ul>
                </div>
                        </li>
                                                    <li class="menu-item list-group-item">
                <a href="/dich-vu-sua-chua" class="menu-item__link" title="Dịch Vụ Sửa Chữa">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Dịch Vụ Sửa Chữa" />
                                    <span>Dịch Vụ Sửa Chữa</span>
                                    <i class='float-right' data-toggle-submenu>
                        
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                </a>			
                    
                            <div class="submenu scroll">
                                    <ul class="submenu__list">
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/thay-man" title="Thay màn">Thay màn</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/thay-pin" title="Thay Pin">Thay Pin</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/sua-nguon" title="Sửa nguồn">Sửa nguồn</a>
                        </li>
                        
                        
    
                        
                        <li class="submenu__item submenu__item--main">
                            <a class="link" href="/sua-treo-tao" title="Sửa Treo Táo">Sửa Treo Táo</a>
                        </li>
                        
                        
                    </ul>
                </div>
                        </li>
                                                    <li class="menu-item list-group-item">
                <a href="/san-pham-khac" class="menu-item__link" title="Sản phẩm khác">
                                    <img loading="lazy"
                         width='24'
                         height='24'
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                         alt="Sản phẩm khác" />
                                    <span>Sản phẩm khác</span>
                    
                </a>			
                    
                        </li>
            
        </ul>
    </nav>
        </div>
    
        </div>
                        <div class="sticky-overlay">
    
        </div>
    </script>
           
    <link rel="stylesheet" href="https://pc.baokim.vn/css/bk.css">
 
    <style>
        .bk-btn .bk-btn-paynow {
            width: 100%;
            line-height: 1.6rem;
        }
    
        .bk-btn .bk-btn-installment {
            width: 100%;
            line-height: 1.6rem;
            margin-right: 0px;
        }
    
        .bk-btn .bk-btn-installment-amigo {
            width: 100%;
            line-height: 1.6rem;
            margin-right: 0px;
        }
    </style>
    




    <section class="bread-crumb mb-1">
        <span class="crumb-border"></span>
        <div class="container ">
            <div class="row">
                <div class="col-12 a-left">
                    <ul class="breadcrumb m-0 px-0 py-2">					
                        <li class="home">
                            <a  href="/" class='link' ><span >Trang chủ</span></a>						
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>
                        
                        <li><strong ><span>Giỏ hàng</span></strong></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <div class="cart-coupon my-4">
        <div class="cart-coupon-header">
            <span class="coupon-toggle-btn">
                <i class="fa fa-arrow-left "> </i>
            </span>
            <span>Mã giảm giá</span>
        </div>
        <link rel="preload" as='style' type="text/css" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/coupon.css?1738993211137">
    
    <link rel="stylesheet" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/coupon.css?1738993211137" >
    <!-- ℹ-->
    
    <div class="section_coupons">
        <div class="container border-0">
            <div class="row scroll justify-content-xl-center">
                
    
    
    <div class="py-2 col-12">
        <div class="coupon_item">
        
        <div class="coupon_icon pos-relative embed-responsive embed-responsive-1by1">
                    <img  class="img-fluid" src="//bizweb.dktcdn.net/thumb/medium/100/460/635/themes/869995/assets/coupon_1_img.png?1738993211137" alt="coupon_1_img.png"
                 loading="lazy" width="79" height="70"/>
                </div>
            <div class="coupon_body">
            <div class="coupon_head">
                <h3 class="coupon_title">NHẬP MÃ: EGA50</h3>
                <div class="coupon_desc">Giảm 50% cho đơn hàng giá trị tối thiểu 500K. Mã giảm tối đa 300K			</div>
    
            </div>
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <button class="btn btn-main btn-sm coupon_copy" data-ega-coupon="EGA10">
                    <span>Sao chép</span></button>
                            <span class="coupon_info_toggle"
                      data-coupon="EGA10" >
                    Điều kiện
                </span>
                <div class="coupon_info">
                    - Giá trị đơn hàng tối thiểu 250k. <br/>
    - Mỗi khách hàng được sử dụng tối đa 1 lần.			</div>
                
            </div>
        </div>
    </div></div>
    
    
    
    <div class="py-2 col-12">
        <div class="coupon_item">
        
        <div class="coupon_icon pos-relative embed-responsive embed-responsive-1by1">
                    <img  class="img-fluid" src="//bizweb.dktcdn.net/thumb/medium/100/460/635/themes/869995/assets/coupon_2_img.png?1738993211137" alt="coupon_2_img.png"
                 loading="lazy" width="79" height="70"/>
                </div>
            <div class="coupon_body">
            <div class="coupon_head">
                <h3 class="coupon_title">NHẬP MÃ: EGA15</h3>
                <div class="coupon_desc">Giảm 15% cho đơn hàng giá trị tối thiểu 500k. Mã giảm tối đa 250K			</div>
    
            </div>
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <button class="btn btn-main btn-sm coupon_copy" data-ega-coupon="EGA15">
                    <span>Sao chép</span></button>
                            <span class="coupon_info_toggle"
                      data-coupon="EGA15" >
                    Điều kiện
                </span>
                <div class="coupon_info">
                    - Đơn hàng giá trị tối thiểu 500k. <br/>
    - Chỉ áp dụng 1 mã giảm giá trên một đơn hàng.			</div>
                
            </div>
        </div>
    </div></div>
    
    
    
    <div class="py-2 col-12">
        <div class="coupon_item">
        
        <div class="coupon_icon pos-relative embed-responsive embed-responsive-1by1">
                    <img  class="img-fluid" src="//bizweb.dktcdn.net/thumb/medium/100/460/635/themes/869995/assets/coupon_3_img.png?1738993211137" alt="coupon_3_img.png"
                 loading="lazy" width="79" height="70"/>
                </div>
            <div class="coupon_body">
            <div class="coupon_head">
                <h3 class="coupon_title">NHẬP MÃ: EGA99K</h3>
                <div class="coupon_desc">Mã giảm 99k cho đơn hàng tối thiểu 1 triệu. Tối đa 1 mã giảm giá/đơn hàng.			</div>
    
            </div>
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <button class="btn btn-main btn-sm coupon_copy" data-ega-coupon="EGA99K">
                    <span>Sao chép</span></button>
                            <span class="coupon_info_toggle"
                      data-coupon="EGA99K" >
                    Điều kiện
                </span>
                <div class="coupon_info">
                    - Đơn hàng từ 1000K.<br/>
    - Chỉ áp dụng 1 mã giảm giá trên một đơn hàng.			</div>
                
            </div>
        </div>
    </div></div>
    
    
    
    <div class="py-2 col-12">
        <div class="coupon_item">
        
        <div class="coupon_icon pos-relative embed-responsive embed-responsive-1by1">
                    <img  class="img-fluid" src="//bizweb.dktcdn.net/thumb/medium/100/460/635/themes/869995/assets/coupon_4_img.png?1738993211137" alt="coupon_4_img.png"
                 loading="lazy" width="79" height="70"/>
                </div>
            <div class="coupon_body">
            <div class="coupon_head">
                <h3 class="coupon_title">NHẬP MÃ:  FREESHIP</h3>
                <div class="coupon_desc">Miễn phí vận chuyển cho đơn hàng từ 500k. Áp dụng cho khu vực Tp.HCM			</div>
    
            </div>
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <button class="btn btn-main btn-sm coupon_copy" data-ega-coupon="FREESHIP">
                    <span>Sao chép</span></button>
                            <span class="coupon_info_toggle"
                      data-coupon="FREESHIP" >
                    Điều kiện
                </span>
                <div class="coupon_info">
                    - Đơn hàng từ 500K <br/>
    - Áp dụng cho khu vực Tp.HCM			</div>
                
            </div>
        </div>
    </div></div>
    
    
    
    
    
    
    
    
    
            </div>
        </div>
    </div>
    <script type="text/x-custom-template" data-template="couponPopup">
    <div id="coupon-modal" class="coupon-modal modal fade " role="dialog" style="display:none;">
        <div class="modal-dialog align-vertical">
        <div class="modal-content">
            <button type="button" class="close window-close" data-dismiss="modal" data-backdrop="false"
            aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>
            <div class="coupon-content"></div>
        </div>
        </div>
        </div>
    </script>
    <script>
    $(document).ready(()=>{
            let initCoupon = false
            function initCoupons (){
            if( initCoupon) return
            initCoupon = true
            if(!$('#coupon-modal').length){
            $('body').append($('[data-template="couponPopup"]').html())
            }
            $('.coupon_info_toggle').click(function(e){
                    e.preventDefault();
                    const code = $(this).data('coupon')
                    const info = $(this).next('.coupon_info').html()|| ''
                    const title = $(this).parents('.coupon_body').find('.coupon_title').text() || ''
                    const couponHtml = `
                        <div class="coupon-title">${title}</div>
                        <div class="coupon-row">
                            <div class="coupon-label">Mã khuyến mãi:</div><span class="code">${code}</span>
        
                        </div>
                        <div class="coupon-row">
                            <div class="coupon-label">Điều kiện:</div><div class="coupon-info">${info}</div>
                        </div>
                        <div class="coupon-action">
                        <button type="button" class="btn btn-main" data-dismiss="modal" data-backdrop="false"
                            aria-label="Close" style="z-index: 9;">Đóng</button>
                        <button class="btn btn-main coupon_copy" data-ega-coupon="${code}">
                            <span>Sao chép</span></button>
                        </div>
                        `
                    $('.coupon-modal .coupon-content').html(couponHtml)
                    $("#coupon-modal").modal();
                })
                $(document).on('click','.coupon_copy', function() {
                    
            const copyText = "Sao chép";
            const copiedText = "Đã chép";
            const coupon = $(this).data().egaCoupon;
            const _this = $(this);
            _this.html(`<span>${copiedText}</span>`);
            _this.addClass('disabled');
            setTimeout(function() {
                _this.html(`<span>${copyText}</span>`);
                _this.removeClass('disabled');
            }, 3000)
            navigator.clipboard.writeText(coupon);
        })
            
            }
        $(window).one(' mousemove touchstart scroll', initCoupons)
                
        })
    </script>	<div class="cart-coupon-footer ">
            <button class="btn btn-main btn-block rounded-sm coupon-toggle-btn">
                Quay lại trang giỏ hàng
            </button>
        </div>
    </div>
    <div class="cart-coupon-overlay coupon-toggle-btn"></div>
    <div id="tab-header"></div>
    <section class="main-cart-page main-container col1-layout mobile-tab active" id="cart-tab"  data-title="Giỏ hàng">
        <div class="wrap_background_aside padding-top-15 margin-bottom-40 padding-left-0 padding-right-0 cartmbstyle">
            <div class="cart-mobile container card border-0 py-2">
                <form action="/cart" method="post" novalidate="" class="margin-bottom-0">
                    <div class="header-cart">
                                            <div class=" title_cart_mobile heading-bar">
                            <h1 class="heading-bar__title">Giỏ hàng</h1>
                        </div>
                                        </div>
                    <div class="header-cart-content"></div>
                </form>
            </div>
            <div class="cart-empty container card border-0 py-2 " style="display:none" >
                <div class="alert green-alert section" role="alert">
                    <div class="title-cart text-center">
                        <h1 class="d-none">Giỏ hàng</h1>
                        <div>
                            <img loading="lazy" src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/cart_empty_background.png?1738993211137"
                                 class="img-fluid"
                                 width="298"
                                 height="152">
                        </div>
                        <h3>
                            Hổng” có gì trong giỏ hết
                        </h3>
                        <p>	Về trang cửa hàng để chọn mua sản phẩm bạn nhé!!</p>
                        <a href="/" title="Mua sắm ngay" class="btn btn-main">Mua sắm ngay</a> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        
     
        function updateVAT() { 
            $('.btn-checkout').addClass('disabled');
            var invoice = $('input[name="attributes[invoice]"]').val();
            var company = $('input[name="attributes[company_name]"]').val();
            var address = $('[name="attributes[company_address]"]').val();
            var tax = $('input[name="attributes[tax_code]"]').val();
            var email_company = $('input[name="attributes[invoice_email]"]').val();
            var cart_info = {
                'Xuất hóa đơn': invoice,
                'Tên công ty': '',
                'Địa chỉ công ty': '',
                'Mã số thuế': '',
                'Email nhận hóa đơn': ''
            };
            
            if (invoice === 'có') {
              cart_info = {
                'Xuất hóa đơn': invoice,
                'Tên công ty': company,
                'Địa chỉ công ty': address,
                'Mã số thuế': tax,
                'Email nhận hóa đơn': email_company
              };
            }
            
    
            Cookies.set('cart_info', {
                'company': company,
                'address': address,
                'tax': tax,
                'email_company': email_company,
                'email': email_company
            });
            var attributes = Object.keys(cart_info).reduce(function(result, info) {
                if (cart_info[info] !== "") {
                    return {
                        ...result,
                        ...{
                            [info]: cart_info[info]
                        }
                    }
                }
                return result;
            }, {})
            var note = document.getElementById('note').value;
            const deliveryAttr =    sessionStorage.getItem("ega-delivery-value") || '';
            if (deliveryAttr !== '') {
                attributes['Thời gian giao hàng'] = deliveryAttr;
            }
            var data = {};
            if (note.trim() !== '') {
                data.note = note;
            }
                data.attributes = attributes;
    
                var params = {
                    type: 'POST',
                    url: '/cart/update.js',
                    data: data,
                    dataType: 'json',
                    success: function(cart) {
                        window.location.href = '/checkout'
                    },
                    complete: function() {
                        setTimeout(function() {
                            $('.btn-checkout').removeClass('disabled');
                        }, 1000);
                    },
                    error: function(XMLHttpRequest, textStatus) {
                        Haravan.onError(XMLHttpRequest, textStatus);
                    }
                };
                jQuery.ajax(params);
        }
    
       window.onload = function () {
          $(document).on('keyup', '.val-f', function () {
                if ($(this).val() === '') {
                    if ($(this).next('span.text-danger').length == 0) {
                        $(this).after('<span class="text-danger">Bạn không được để trống trường này</span>');
                    }
                } else {
                    $(this).next('span.text-danger').remove();
                    if($(this).hasClass('val-n')
                       && $(this).val().trim().length < Number('10')) {
                      $(this).after('<span class="text-danger">Mã số thuế phải tối thiểu 10 ký tự nè</span>');
                    }
                    if ($(this).hasClass('val-email')
                       && !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($(this).val().trim()))) {
                      $(this).after('<span class="text-danger">Định dạng email không đúng</span>');
                    }
                }
            })
                           
          if($('.r-bill .regular-checkbox').is(':checked')) {
            $('.bill-field').show();
          }
    
          $(document).on('click', '.r-bill .regular-checkbox', 'click', function() {
                                                  console.log($(this).is(':checked'));
            if($(this).is(':checked')){
              $('#re-checkbox-bill').val('có');
            } else {
              $('#re-checkbox-bill').val('không');
            }
            $('.bill-field').stop(true, true).slideToggle(400);
         })
        }
    
         /** PHan hoa don **/
    
         function goToCheckout(e) {
             e.preventDefault();
             if($('.btn-proceed-checkout-mobile').hasClass('disabled')) {
                 return;
             }
             
             
              const totalPrice = $('.js-total-price').val();
                if (totalPrice < Number('500000')) {
                    swal({
                        title: ``,
                        text: `Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
    Vui lòng chọn mua thêm sản phẩm.`,
                        type: "warning",
                        className: 'cart-limit-modal',
                        button: ''
                    })
                    $('.cart-limit-alert').css('display', 'block');
                    return;
                } else {
                    $('.cart-limit-alert').css('display', 'none');
                }
                
            
                
             if ($('#checkbox-bill').is(':checked')) {
                 var a = $(this);
                 let isValidated = true;
                 $('.val-f').each(function() {
                     if ($(this).val() === '') {
                         isValidated = false;
                     } else {
                         if($(this).hasClass('val-n')
                                && $(this).val().trim().length < Number('10')) {
                             isValidated = false;
                         }
                         if ($(this).hasClass('val-email')
                                 && !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($(this).val().trim()))) {
                                 isValidated = false;
                         }
                     }
                 })
    
                 if (isValidated) {
                     swal({
                         title: `Bạn có chắc muốn xuất hóa đơn?`,
                         text: `Hãy kiểm tra lại thông tin hóa đơn của mình thật chính xác!`,
                         type: "warning",
                       className: 'vat-checked-modal',
                         buttons: ["Kiểm tra lại", "Có, tiến hành thanh toán"],
                     }).then(function() {
                         $('body').on('click', '.swal-button--confirm', function() {
                             updateVAT();
                         })
                     });
                 } else {
                   $('.val-f').each(function() {
                     if ($(this).val() === '') {
                       if ($(this).next('span.text-danger').length == 0) {
                         $(this).after('<span class="text-danger">Bạn không được để trống trường này</span>');
                       }
                     } else {
                       $(this).next('span.text-danger').remove();
                       if($(this).hasClass('val-n')
                           && $(this).val().trim().length < Number('10')) {
                          $(this).after('<span class="text-danger">Mã số thuế phải tối thiểu 10 ký tự nè</span>');
                        }
                        if ($(this).hasClass('val-email')
                           && !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($(this).val().trim()))) {
                          $(this).after('<span class="text-danger">Định dạng email không đúng</span>');
                        }
                      }
                    })
                 }
             } else {
               
                 updateVAT()
               
             }
                   return;
             
             $('body').off('click', '.swal-button--confirm');
             location.href = '/checkout'
         }
    
         /** end hoa don **/  
    </script><script type="text/x-custom-template" data-template="ItemDropCart">
        <li class="item productid-${id_item}">
            <div class="border_list"><div class="image_drop">
                <a class="product-image pos-relative embed-responsive embed-responsive-1by1" href="${url}" title="${title}">
                    <img loading="lazy" alt="${title}" src="${image_url}" width="'+ '100' +'"\>
                </a>
                </div>
                <div class="detail-item">
                    <div class="product-details">
                        <span href="javascript:;" data-id="${id_item}" title="Xóa" class="remove-item-cart fa fa-times"></span>
                        <p class="product-name"> <a href="${url}" title="${title}">${title}</a></p></div>
                        <span class="variant-title">${variant_title}</span>
                    <div class="product-details-bottom"><span class="price">${price}</span>
                        <span class="quanlity">x ${quanty}</span>
                        <div class="quantity-select qty_drop_cart d-none">
                            <input class="variantID" type="hidden" name="variantId" value="${id_item}">
                            <button onClick="var result = document.getElementById('qty${id_item}'); var qty${id_item} = result.value; if( !isNaN( qty${id_item} ) &amp;&amp; qty${id_item} &gt; 1 ) result.value--;return false;" class="btn btn_reduced reduced items-count btn-minus" ${buttonQty} type="button">–</button>
                            <input type="text" maxlength="3" min="1" readonly class="form-control input-text number-sidebar qty${id_item}" id="qty${id_item}" name="Lines" id="updates_${id_item}" size="4" value="${quanty}">
                            <button onClick="var result = document.getElementById('qty${id_item}'); var qty${id_item} = result.value; if( !isNaN( qty${id_item} )) result.value++;return false;" class=" btn btn_increase increase items-count btn-plus" type="button">+</button>
                        </div>
                    </div>
                </div>
            </div>
          </li>
        </script>
    
        <script type="text/x-custom-template" data-template="HeaderCartPc">
          <div class="cart page_cart hidden-xs hidden-sm row">
            <form action="/cart" method="post" novalidate class="formcartpage col-lg-12 col-md-12 margin-bottom-0">
                <div class="bg-scroll">
                    <div class="cart-thead">
                        <div style="width: 18%" class="a-center">Ảnh sản phẩm</div>
                        <div style="width: 32%" class="a-center">Tên sản phẩm</div>
                        <div style="width: 17%" class="a-center">Đơn giá</div>
                        <div style="width: 14%" class="a-center">Số lượng</div>
                        <div style="width: 14%" class="a-center">Thầnh tiền</div>
                        <div style="width: 5%" class="a-center">Xóa</div>
                    </div>
                    <div class="cart-tbody">
                    </div>
                </div>
            </form>
          </div>
        </script>
        <script type="text/x-custom-template" data-template="pageCartCheckout">
          <div class="col-lg-7 col-md-7">
            <a href="/" class="form-cart-continue">Tiếp tục mua hàng</a>
          </div>
          <div class="col-lg-5 col-md-5">
            <div class="section bg_cart shopping-cart-table-total">
                <div class="table-total">
                    <table class="table">
                        <tr>
                            <td coldspan="20" class="total-text">Tổng tiền thanh toán: </td>
                            <td class="txt-right totals_price price_end a-right">${price_total}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="section continued">
                <a href="/checkout" class="btn-checkout-cart button_checkfor_buy">Tiến hành thanh toán</a>
            </div>
          </div>
        </script>
        
        <script type="text/x-custom-template" data-template="pageCartItem">
          <div class="item-cart productid-${id_item}">
            <div style="width: 18%" class="image">
                <a class="product-image a-left" title="${title}" href="${url}">
                    <img loading="lazy" width="75" height="auto" alt="${title}" src="${image_url}">
                </a>
            </div>
            <div style="width: 32%" class="a-center">
                <h3 class="product-name"> <a class="text2line" href="${url}" title="${title}">
                ${title}</a> </h3>
                <span class="variant-title">${variant_title}</span>
                <a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="${id_item}">
                    <span><i class="fa fa-times"></i></span>
                </a>
            </div>
            <div style="width: 17%" class="a-center">
                <span class="cart-prices">
                    <span class="prices">${price}</span> 
                </span>
            </div>
            <div style="width: 14%" class="a-center">
                <div class="input_qty_pr">
                    <input class="variantID" type="hidden" name="variantId" value="${id_item}">
                    <button onClick="var result = document.getElementById('qtyItem${id_item}'); var qtyItem${id_item} = result.value; if( !isNaN( qtyItem${id_item} ) &amp;&amp; qtyItem${id_item} &gt; 1 ) result.value--;return false;" ${buttonQty} class="reduced_pop items-count btn-minus" type="button">-</button>
                    <input type="text" maxlength="3" readonly min="0" class="check_number_here input-text number-sidebar input_pop input_pop qtyItem${id_item}" id="qtyItem${id_item}" name="Lines" id="updates_${id_item}" size="4" value="${quanty}">
                    <button onClick="var result = document.getElementById('qtyItem${id_item}'); var qtyItem${id_item} = result.value; if( !isNaN( qtyItem${id_item} )) result.value++;return false;" class="increase_pop items-count btn-plus" type="button">+</button>
                </div>
            </div>
            <div style="width: 14%" class="a-center">
                <span class="cart-price">
                    <span class="price">${price_quanty}</span> 
                </span>
            </div>
            <div style="width: 5%" class="a-center">
                <a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="${id_item}">
                    <span><i class="fa fa-trash-alt"></i></span>
                </a>
            </div>
          </div>
        </script>
        
        <script type="text/x-custom-template" data-template="ItemCartMobile">
          <div class="item-product item productid-${id_item} ">
            <div class="text-center">
                <a class="remove-itemx remove-item-cart " title="Xóa" href="javascript:;" data-id="${id_item}">
                    <svg  class="icon" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0)">
    <path d="M0.620965 12C0.462896 12 0.304826 11.9399 0.184729 11.8189C-0.0563681 11.5778 -0.0563681 11.1869 0.184729 10.9458L10.9497 0.180823C11.1908 -0.0602744 11.5817 -0.0602744 11.8228 0.180823C12.0639 0.421921 12.0639 0.8128 11.8228 1.05405L1.05795 11.8189C0.936954 11.9392 0.778884 12 0.620965 12Z" fill="#8C9196"/>
    <path d="M11.3867 12C11.2287 12 11.0707 11.9399 10.9505 11.8189L0.184729 1.05405C-0.0563681 0.8128 -0.0563681 0.421921 0.184729 0.180823C0.425827 -0.0602744 0.816706 -0.0602744 1.05795 0.180823L11.8228 10.9458C12.0639 11.1869 12.0639 11.5778 11.8228 11.8189C11.7018 11.9392 11.5439 12 11.3867 12Z" fill="#8C9196"/>
    </g>
    <defs>
    <clipPath id="clip0">
    <rect width="12" height="12" fill="white"/>
    </clipPath>
    </defs>
    </svg>
                </a>
            </div>
            <div class="item-product-cart-mobile">
                <a href="${url}">	
                    <a class="product-images1  pos-relative embed-responsive embed-responsive-1by1" href=""  title="${title}">
                        <img loading="lazy" class="img-fluid bk-product-image" src="${image_url}" alt="${title}">
                    </a>
                </a>
            </div>
            <div class="product-cart-infor">
            <div class="title-product-cart-mobile">
                <h3 class="product-name"> <a class="text2line bk-product-name" href="${url}" title="${title}">
                ${title}</a>  </h3>
                <span class="variant-title bk-product-property">${variant_title}</span>
            </div>
            
            <div class="cart-price">
                <span class="product-price price bk-product-price">${price_quanty}</span>
            </div>
            <div class="select-item-qty-mobile">
                <div class="txt_center">
                    <input class="variantID" type="hidden" name="variantId" value="${id_item}">
                    <button onClick="var result = document.getElementById('qtyMobile${id_item}'); var qtyMobile${id_item} = result.value; if( !isNaN( qtyMobile${id_item} ) &amp;&amp; qtyMobile${id_item} &gt; 1 ) result.value--;return false;" class="reduced items-count btn-minus btn" type="button"><svg class="icon">
        <use xlink:href="#icon-minus" />
    </svg></button>
                    <input type="text" maxlength="3" min="1" class="bk-product-qty form-control input-text number-sidebar qtyMobile${id_item}" id="qtyMobile${id_item}" name="Lines" id="updates_${id_item}" size="4" value="${quanty}">
                    <button onClick="var result = document.getElementById('qtyMobile${id_item}'); var qtyMobile${id_item} = result.value; if( !isNaN( qtyMobile${id_item} )) result.value++;return false;" class="increase items-count btn-plus btn" type="button"><svg class="icon">
        <use xlink:href="#icon-plus" />
    </svg></button>
                </div>
            </div>
            </div>
          </div>
        </script>
            <script type="text/x-custom-template" data-template="pageCartCheckoutMobile">
          <div class="header-cart-price">
              <div class="timedeli-modal">
              <div class="timedeli-modal-content">
                <button type="button" class="close window-close d-sm-none" aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>
                <div class="timedeli d-sm-block"></div>
                <div class="timedeli-cta">
                    <button class="btn btn-block timedeli-btn  d-sm-none" type="button">
                      <span>Xong</span>
                    </button>		
                </div>
              </div>
              <div class="timedeli-overaly">
            </div>
          </div>
          
    <div class="r-bill">
        <div class="checkbox">
            <input type="hidden" name="attributes[invoice]" id="re-checkbox-bill"
                   value='không'>
            <input type="checkbox" id="checkbox-bill" value="có" 
                   class="regular-checkbox" />
            <label for="checkbox-bill" class="box"></label>
            <label for="checkbox-bill" class="title">Xuất hóa đơn công ty</label>
        </div>
        <div class="bill-field">
            <div class="form-group">
                <label>Tên công ty</label>
                <input type="text" class="form-control val-f" 
                       name="attributes[company_name]" 
                       value=""
                       placeholder="Tên công ty" >
            </div>	
            <div class="form-group">
                <label>Mã số thuế</label>
                <input type="number" pattern=".{10,}" onkeydown="return FilterInput(event)" 
                       onpaste="handlePaste(event)" 
                       class="form-control val-f val-n" 
                       name="attributes[tax_code]" 
                       value="" 
                       placeholder="Mã số thuế">
            </div>
            <div class="form-group">
                <label>Địa chỉ công ty</label>
                <textarea type="text" class="form-control val-f" 
                          name="attributes[company_address]"
                          placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>
            </div>
            <div class="form-group">
                <label>Email nhận hoá đơn</label>
                <input type="email" class="form-control val-f val-email" 
                       name="attributes[invoice_email]" 
                       value="" 
                       placeholder="Email nhận hoá đơn">
            </div>
        </div>
    </div>
    
    
            <div class="title-cart d-none d-sm-flex ">
                <h3 class="text-xs-left">TỔNG CỘNG</h3>
                <span class="text-xs-right  totals_price_mobile">${price_total}</span>
                <i class="text-xs-right price_vat ">(Đã bao gồm VAT nếu có)</i>		</div>
            
                  <div class='cart-limit-alert d-xs-none'
                         >
                        <i class="fa fa-info-circle mr-1" aria-hidden="true"></i> Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
    Vui lòng chọn mua thêm sản phẩm.
                </div>
            
                        <div class="coupon-toggle d-flex justify-content-between  align-items-center ">
            <div>
              <img loading="lazy" class="mr-1" src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/coupon-icon.png?1738993211137" alt="delivery" ->
                <span>Mã giảm giá</span>
            </div>
            
            <div class="coupon-toggle-btn">
            <span class="mr-1">Chọn mã giảm giá</span>
            
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
            </div>
            </div>
            
    
            <div class="checkout d-none d-sm-block">
                <button class="btn btn-block btn-proceed-checkout-mobile" title="Tiến hành thanh toán"
                        type="button" onclick='goToCheckout(event)'>
                    <span>Thanh Toán</span>
                </button>		
            </div>
            <!-- BK BUTTON -->
            <div class='bk-btn'></div>
            <!-- END BK BUTTON -->
    
                    
            <div class="cart-trustbadge mt-3">
                <span class="title-menu">
        Phương thức thanh toán 
    </span>
    <div class="trustbadge">
        <a href="/chinh-sach-bao-mat" 
           target="_blank"
           title="Phương thức thanh toán">
            <img class=" img-fluid" loading="lazy"
                 src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/footer_trustbadge.jpg?1738993211137" 
                 alt=""
                 width="246"
                 height="53"
                 >
        </a>
    </div>
            </div>
                  </div>
        
        </script>
        <script type="text/x-custom-template" data-template="templateStickyCheckout">
      <div class="cart-sticky-cta">
                      <div class="coupon-toggle d-flex justify-content-between  align-items-center ">
            <div>
              <img loading="lazy" class="mr-1" src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/coupon-icon.png?1738993211137" alt="delivery" ->
                <span>Mã giảm giá</span>
            </div>
            
            <div class="coupon-toggle-btn">
            <span class="mr-1">Chọn mã giảm giá</span>
            
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
            </div>
            </div>
            
    
              
                  <div class='cart-limit-alert '
                         >
                        <i class="fa fa-info-circle mr-1" aria-hidden="true"></i> Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
    Vui lòng chọn mua thêm sản phẩm.
                </div>
            
            <div class="cart-cta">
        
                    <div class="toggle-delivery col-5 d-flex justify-content-start align-items-center flex-column px-2">
                <img loading="lazy" src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/delivery-icon.png?1738993211137" alt="delivery" ->
                <span>HẸN GIỜ NHẬN HÀNG</span>
            </div>
                    <div>
                    <button class="btn btn-block btn-proceed-checkout-mobile" title="Tiến hành thanh toán"
                        type="button" onclick="goToCheckout(event)">
                    <span>Thanh Toán</span> <span class="text-xs-right  totals_price_mobile">${price_total}</span>
                </button>	
                        <i class="text-xs-right price_vat ">(Đã bao gồm VAT nếu có)</i>			</div>
            </div>
            </div>
    </script>
        <script type="text/x-custom-template" data-template="TemplateItemPopupCart">
        <div class="item-popup productid-${id_item}">
            <div style="width: 13%;" class="height image_ text-left">
                <div class="item-image">
                    <a class="product-image" href="${url}" title="${title}">
                        <img loading="lazy" alt="${title}" src="${image_url}"width="'+ '90' +'"\>
                    </a>
                </div>
            </div>
            <div style="width:40%;" class="height text-left fix_info">
                <div class="item-info">
                    <p class="item-name">
                        <a class="text2line textlinefix" href="${url}" title="${title}">${title}</a>
                    </p>
                    <span class="variant-title-popup">${variant_title}</span>
                    <a href="javascript:;" class="remove-item-cart" title="Xóa" data-id="${id_item}">
                        <i class="fa fa-times"></i>&nbsp;&nbsp;Bỏ sản phẩm
                    </a>
                    <p class="addpass" style="color:#fff;margin:0px;">${id_item}</p>
                </div>
            </div>
            <div style="width: 15%;" class="height text-center">
                <div class="item-price">
                    <span class="price">${price}</span>
                </div>
            </div>
            <div style="width: 15%;" class="height text-center">
                <div class="qty_h check_">
                    <input class="variantID" type="hidden" name="variantId" value="${id_item}">
                    <button onClick="var result = document.getElementById('qtyItemP${id_item}'); var qtyItemP${id_item} = result.value; if( !isNaN( qtyItemP${id_item} ) &amp;&amp; qtyItemP${id_item} &gt; 1 ) result.value--;return false;" ${buttonQty} class="num1 reduced items-count btn-minus" type="button">-</button>
                    <input type="text" maxlength="3" min="0" readonly class="input-text number-sidebar qtyItemP${id_item}" id="qtyItemP${id_item}" name="Lines" id="updates_${id_item}" size="4" value="${quanty}">
                    <button onClick="var result = document.getElementById('qtyItemP${id_item}'); var qtyItemP${id_item} = result.value; if( !isNaN( qtyItemP${id_item} )) result.value++;return false;" class="num2 increase items-count btn-plus" type="button">+</button>
                </div>
            </div>
            <div style="width: 17%;" class="height text-center">
                <span class="cart-price">
                    <span class="price">${price_quanty}</span>
                </span>
            </div>
        </div>
        </script>
    <!-- BK MODAL -->
    <div id='bk-modal'></div>
    <!-- END BK MODAL -->
    
    <script src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/cart.js?1738993211137" defer></script>
    
    <script>
        function relatedProductSlide(){
            if(window.matchMedia('(min-width: 768px)').matches && $('.slickrelated .item_product_main').length >= 6){
                $('.slickrelated').slick({
                    autoplay: false,
                    autoplaySpeed: 6000,
                    dots: false,
                    arrows: true,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    centerMode: false,
                    responsive: [
                        {
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4
                            }
                        },
                        {
                            breakpoint: 991,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        }
                    ]
                });
            }
        }
        function initProductsRelated() {
            var cartData = {};
            $.ajax({
                url: "/cart?view=data",
                async : false,
                success: function(data){
                    cartData = JSON.parse(data);
                }
            })
    
            var relatedPrefix = "lienquan";
            var relatedTags = cartData.cart_tags.filter(function onlyUnique(value, index, self) {
                return self.indexOf(value) === index && value.indexOf(`${relatedPrefix.trim()}_`) >= 0
            })
    
            if(relatedTags.length > 0){
                $.get(`/search?q= NOT id:(${cartData.cart_id.join(" OR ")}) AND  tags:(${relatedTags.join(" OR ")})&view=cart`).then(response => {
                    if(response && response.length) {
                        $('.slickrelated').html(response)
                        relatedProductSlide()			
                    } else {
                        window.matchMedia('(min-width: 768px)').matches && $('.item_product_main').length >= 5 && $(`.recent-view-list`).slick({
                            autoplay: false,
                            autoplaySpeed: 6000,
                            dots: false,
                            arrows: true,
                            infinite: false,
                            speed: 300,
                            slidesToShow: 5,
                            slidesToScroll: 5,
                            centerMode: false,
                            responsive: [
                                {
                                    breakpoint: 1200,
                                    settings: {
                                        slidesToShow: 5,
                                        slidesToScroll: 5
                                    }
                                },
                                {
                                    breakpoint: 1024,
                                    settings: {
                                        slidesToShow: 4,
                                        slidesToScroll: 4
                                    }
                                },
                                {
                                    breakpoint: 991,
                                    settings: {
                                        slidesToShow: 3,
                                        slidesToScroll: 1
                                    }
                                },
                                {
                                    breakpoint: 767,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 2
                                    }
                                }
                            ]
                        });
                    }
                })
            } else {
                window.matchMedia('(min-width: 768px)').matches && $('.item_product_main').length >= 5 && $(`.recent-view-list`).slick({
                    autoplay: false,
                    autoplaySpeed: 6000,
                    dots: false,
                    arrows: true,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    centerMode: false,
                    responsive: [
                        {
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 5,
                                slidesToScroll: 5
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4
                            }
                        },
                        {
                            breakpoint: 991,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        }
                    ]
                });
            }
        }
        initProductsRelated();
    </script>
    
    
    <!-- BK JS -->
    <script src="https://pc.baokim.vn/js/bk_plus_v2.popup.js"></script>
    <!-- END BK JS -->
    
            
    <div class='top-footer'>
        <div class='container'>
            <div class='row align-items-center'>
                            <div class='col-12 col-sm-9 col-xl-7 order-sm-1'>
                    <div class='subscribe align-items-center'>
                        <img src='//bizweb.dktcdn.net/100/460/635/themes/869995/assets/email-icon.svg?1738993211137' width='32' height='32' loading='lazy' alt='email' />
                        <h6 class="m-0">
                            Bạn muốn nhận khuyến mãi đặc biệt? Đăng ký ngay.
                        </h6>
                        <div class="form_register" style='flex: 1 1 100%'>
                            <form id="mc-form" class="newsletter-form custom-input-group" data-toggle="validator">
                                <input class="form-control input-group-field  " aria-label="Địa chỉ Email" type="email" placeholder="Thả email nhận ngay ưu đãi.."  name="EMAIL" required autocomplete="off" >
                                <div class="input-group-btn btn-action">
                                    <button class="h-100 btn text-white button_subscribe subscribe" style='line-height: 26px;'
                                            type="submit" aria-label="Đăng ký nhận tin" name="subscribe">Đăng ký</button>
                                </div>
                            </form>
                            <div class="mailchimp-alerts ">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                        </div>
                    </div>
                </div>
                            <div class='col-12 col-sm-3 col-xl-5 mt-0 mt-sm-0'>
                    <div class="social-footer">
                        <ul class="follow_option mb-0 mt-2 mt-sm-0 d-flex flex-wrap align-items-center p-0 list-unstyled">	
                                                    <li>
                                <a class="facebook link" href="https://www.facebook.com/dienthoaihanoi.vn"   target="_blank"
                                   title="Theo dõi Facebook Điện thoại Hà Nội VN">
                                    <img src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/facebook.svg?1738993211137" loading="lazy" width="32" height="32" alt="facebook"/>	
                                </a>
                            </li>
                            
                                                    <li>
                                <a class="zalo link" href="https://zalo.me/0832499999"   target="_blank" title="Theo dõi zalo Điện thoại Hà Nội VN">
                                    <img src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/zalo.svg?1738993211137" loading="lazy" width="32" height="32" alt="zalo"/>	
                                </a>
                            </li>
                            
                                                    <li>
                                <a class="instgram link" href="https://bikipweb.site"   target="_blank" title="Theo dõi instgram Điện thoại Hà Nội VN">
                                    <img src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/instagram.svg?1738993211137" loading="lazy" width="32" height="32" alt="instgram"/>	
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer bg-white" style="--footer-overlay: #fff">
        <div class="mid-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-xl-4 footer-click footer-1">
                        <h4 class="title-menu clicked">
                            Thông tin liên hệ 
                        </h4>
                        
                        <a href="/" class="logo-wrapper mb-3 d-block ">	
                            <img loading="lazy"
                                 src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/logo-footer.png?1738993211137" 
                                 alt="logo Điện thoại Hà Nội VN"
                                 width="60" 
                                 height="60">
                        </a>
                        
                                            <p>
                            HỘ KINH DOANH ĐIỆN THOẠI HÀ NỘI<br>
    ĐKHKD số: 01E8029916 Do Phòng TC&KH quận Đống Đa
    cấp ngày 08/07/2020 <br>
    Người đại diện: ĐỖ DUY BẰNG<br>
    
                        </p>
                                                                <div class="single-contact">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="content"><strong>Địa chỉ: </strong>
                                                            <span>298 Xã Đàn – Đống Đa – Hà Nội</span>
                                
                            </div>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="content"><strong>Địa chỉ: </strong>
                                                            <span> 107 Xuân Thuỷ - Cầu Giấy - Hà Nội</span>
                                
                            </div>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="content"><strong>Địa chỉ: </strong>
                                                            <span>358 Đ.Nguyễn Trãi - P. Trung Văn - Q. Nam Từ Liêm - HN ( Cạnh Nhà Sách Minh Thuận) </span>
                                
                            </div>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-mobile-alt"></i>
                            <div class="content">
                                <strong>Số điện thoại: </strong>
                                <a class="link" title="0981.044.044" href="tel:0981.044.044">0981.044.044</a> - <a class="link" title="0981.044.044" href="tel:0964.777.444">0964.777.444</a>
                            </div>
                        </div>
    
                        <div class="single-contact">
                            <i class="fa fa-envelope"></i>
                            <div class="content">
                                <strong>Email: </strong><a title="bangxadan@gmail.com" class="link" href="mailto:bangxadan@gmail.com">bangxadan@gmail.com</a>
                            </div>
                        </div>
                                                                <a target="_blank" href="http://online.gov.vn/Home/WebDetails/102316?AspxAutoDetectCookieSupport=1" title="Logo Bộ Công Thương"  >
                            <img loading="lazy" 
                                 src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/logo_bct.png?1738993211137" 
                                 width="104"
                                 height="40"
                                 alt="Logo Bộ Công Thương" />
                        </a>
                                        </div>
                    <div class="col-xs-12 col-md-6 col-xl-2 footer-click">
                        <h4 class="title-menu clicked">
                            Hỗ trợ khách hàng <i class="fa fa-angle-down d-md-none d-inline-block"></i>
                        </h4>
                        <ul class="list-menu toggle-mn" >
                            
                            <li class="li_menu">
                                <a class="link"  href="/huong-dan" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link"  href="/he-thong-cua-hang" title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link"  href="/chinh-sach-bao-hanh" title="Chính sách bảo hành">Chính sách bảo hành</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link"  href="/dieu-khoan" title="Điều khoản">Điều khoản</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link"  href="/chinh-sach" title="Chính sách bảo mật">Chính sách bảo mật</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link"  href="/chinh-sach-kiem-hang" title="Chính sách kiểm hàng">Chính sách kiểm hàng</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link"  href="/chinh-sach-van-chuyen" title="Chính sách vận chuyển">Chính sách vận chuyển</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-6 col-xl-2 footer-click">
                        <h4 class="title-menu clicked">
                            Fanpage
                        </h4>
                        <div class="footerText">
                            <div class="fb-page" data-href="https://www.facebook.com/dienthoaihanoi.vn" data-tabs="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <div class="fb-xfbml-parse-ignore">
                                    <blockquote cite="https://www.facebook.com/dienthoaihanoi.vn">
                                        <a href="https://www.facebook.com/dienthoaihanoi.vn">Facebook</a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-xl-4 footer-click">
                        <h4 class="title-menu clicked">
                            Tổng đài hỗ trợ <i class="fa fa-angle-down d-md-none d-inline-block"></i>
                        </h4>
                                                                                                        <p>
                                                    <span>Gọi mua hàng:</span>
                                                                            <a class='text-primary font-weight-bold' href='tel:0964.777.444'>0964.777.444</a>
                                                                            <span>(8h-20h)</span>
                                                </p>
                                                                <p>
                                                    <span>
    Gọi bảo hành:</span>
                                                                            <a class='text-primary font-weight-bold' href='tel:0981.044.044'>0981.044.044</a>
                                                                            <span>(8h-20h)</span>
                                                </p>
                                                                <p>
                                                    <span>
    Gọi khiếu nại:</span>
                                                                            <a class='text-primary font-weight-bold' href='tel:0888.20.9999'>0888.20.9999</a>
                                                                            <span> (8h-20h)</span>
                                                </p>
                                            
                                            <span class="title-menu">
        Phương thức thanh toán 
    </span>
    <div class="trustbadge">
        <a href="/chinh-sach-bao-mat" 
           target="_blank"
           title="Phương thức thanh toán">
            <img class=" img-fluid" loading="lazy"
                 src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/footer_trustbadge.jpg?1738993211137" 
                 alt=""
                 width="246"
                 height="53"
                 >
        </a>
    </div>
                                        </div>
                </div>
            </div>
        </div>
        <div class="bg-footer-bottom copyright clearfix py-2">
            <div class="container">
                <div class="row">
                    <div id="copyright" class=" col-xl-12 col-lg-12 col-md-12 col-xs-12 fot_copyright text-center">
                        <span class="wsp">
                            © Bản quyền thuộc về 
                            <a href="https://egany.com" rel="nofollow" target="_blank">Điện thoại Hà Nội VN</a> | Cung cấp bởi <a href="javascript:;">Sapo</a>
                        </span>
                    </div>
                </div>
    
            </div>
        </div>
    </footer>
    
    
    <script type="text/x-custom-template" data-template="navigation">
    
    <nav class="h-100">
    <ul  class="navigation list-group list-group-flush scroll">
            
        
        
                <li class="menu-item list-group-item">
            <a href="/dien-thoai-apple" class="menu-item__link" title="Điện Thoại Apple">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_1.png?1738993211137" alt="Điện Thoại Apple" />
                                        <span>Điện Thoại Apple</span>
                
                <i class='float-right' data-toggle-submenu>
                
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                </i>
                </a>			
                
                    <div class="submenu scroll">
                <div class='toggle-submenu d-lg-none d-xl-none'>
                    <i class='mr-3'>
                        
    
    <svg class="icon" style="transform: rotate(180deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                    <span>Điện Thoại Apple </span>
                </div>
                <ul class="submenu__list">
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/ip7g-7plus" title="iP7G – 7Plus">iP7G – 7Plus</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/8g-8-plus-x" title="8G – 8 Plus – X">8G – 8 Plus – X</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/iphone-xr-xs-xs-max" title="iPhone XR– XS – XS Max">iPhone XR– XS – XS Max</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/11-11-pro-11-promax" title="11 – 11 pro – 11 promax">11 – 11 pro – 11 promax</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/12-12-pro-12-promax" title="12 – 12 pro – 12 promax">12 – 12 pro – 12 promax</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/13-13-pro-13-promax" title="13 – 13 pro – 13 promax">13 – 13 pro – 13 promax</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/iphone-14" title="Iphone 14">Iphone 14</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/iphone-15-15pro-15promax" title="Iphone 15 - 15Pro - 15Promax">Iphone 15 - 15Pro - 15Promax</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/iphone-16-16pro-16prm" title="Iphone 16 - 16Pro - 16Prm">Iphone 16 - 16Pro - 16Prm</a>
                    </li>
                
                
            </ul>
            </div>
                </li>
        
        
        
                <li class="menu-item list-group-item">
            <a href="/dien-thoai-samsung" class="menu-item__link" title="Điện thoại Samsung">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_2.png?1738993211137" alt="Điện thoại Samsung" />
                                        <span>Điện thoại Samsung</span>
                
                <i class='float-right' data-toggle-submenu>
                
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                </i>
                </a>			
                
                    <div class="submenu scroll">
                <div class='toggle-submenu d-lg-none d-xl-none'>
                    <i class='mr-3'>
                        
    
    <svg class="icon" style="transform: rotate(180deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                    <span>Điện thoại Samsung </span>
                </div>
                <ul class="submenu__list">
                
                
                
                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/samsung-note" title="Samsung Note">Samsung Note</a>
                    </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Note 9">Note 9</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Note 10">Note 10</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Note 10 Plus">Note 10 Plus</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Note20">Note20</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Note 20 Ultra">Note 20 Ultra</a>
                     </span>
                    
                </li>
                
                
                
                
                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/samsung-galaxy-s" title="Samsung Galaxy S">Samsung Galaxy S</a>
                    </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S9 Plus">S9 Plus</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S10">S10</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S10 Plus">S10 Plus</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S10 5G">S10 5G</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S20">S20</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S20 Plus">S20 Plus</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S20 Ultra">S20 Ultra</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S21">S21</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S21 Plus">S21 Plus</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S21 Ultra">S21 Ultra</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S22">S22</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S22 Ultra">S22 Ultra</a>
                     </span>
                    
                </li>
                
                
                
                
                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/samsung-z-flip" title="Samsung Z Flip">Samsung Z Flip</a>
                    </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="z flip – z">z flip – z</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="flip 2 – z">flip 2 – z</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="flip 3">flip 3</a>
                     </span>
                    
                </li>
                
                
                
                
                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/samsung-z-fold" title="Samsung Z fold">Samsung Z fold</a>
                    </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="z fold 1 – z">z fold 1 – z</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="fold 2 – z">fold 2 – z</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="fold 3">fold 3</a>
                     </span>
                    
                </li>
                
                
            </ul>
            </div>
                </li>
        
        
        
                <li class="menu-item list-group-item">
            <a href="/may-tinh-bang" class="menu-item__link" title="Máy Tính Bảng">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_3.png?1738993211137" alt="Máy Tính Bảng" />
                                        <span>Máy Tính Bảng</span>
                
                <i class='float-right' data-toggle-submenu>
                
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                </i>
                </a>			
                
                    <div class="submenu scroll">
                <div class='toggle-submenu d-lg-none d-xl-none'>
                    <i class='mr-3'>
                        
    
    <svg class="icon" style="transform: rotate(180deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                    <span>Máy Tính Bảng </span>
                </div>
                <ul class="submenu__list">
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/ipad-air" title="iPad Air">iPad Air</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/ipad-gen" title="iPad Gen">iPad Gen</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/ipad-mini" title="iPad Mini">iPad Mini</a>
                    </li>
                
                
            </ul>
            </div>
                </li>
        
        
        
                <li class="menu-item list-group-item">
            <a href="/apple-watch" class="menu-item__link" title="Apple Watch">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_4.png?1738993211137" alt="Apple Watch" />
                                        <span>Apple Watch</span>
                
                <i class='float-right' data-toggle-submenu>
                
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                </i>
                </a>			
                
                    <div class="submenu scroll">
                <div class='toggle-submenu d-lg-none d-xl-none'>
                    <i class='mr-3'>
                        
    
    <svg class="icon" style="transform: rotate(180deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                    <span>Apple Watch </span>
                </div>
                <ul class="submenu__list">
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/s3-nhom-thep" title="S3 (Nhôm – Thép)">S3 (Nhôm – Thép)</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/s4-nhom-thep" title="S4(Nhôm – Thép)">S4(Nhôm – Thép)</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/s5-nhom-thep" title="S5 (Nhôm – Thép)">S5 (Nhôm – Thép)</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/s6-nhom-thep" title="S6(Nhôm – Thép)">S6(Nhôm – Thép)</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/s7-nhom-thep" title="S7(Nhôm – Thép)">S7(Nhôm – Thép)</a>
                    </li>
                
                
            </ul>
            </div>
                </li>
        
        
        
                <li class="menu-item list-group-item">
            <a href="/phu-kien" class="menu-item__link" title="Phụ Kiện">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_5.png?1738993211137" alt="Phụ Kiện" />
                                        <span>Phụ Kiện</span>
                
                <i class='float-right' data-toggle-submenu>
                
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                </i>
                </a>			
                
                    <div class="submenu scroll">
                <div class='toggle-submenu d-lg-none d-xl-none'>
                    <i class='mr-3'>
                        
    
    <svg class="icon" style="transform: rotate(180deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                    <span>Phụ Kiện </span>
                </div>
                <ul class="submenu__list">
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/tai-nghe" title="Tai nghe">Tai nghe</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/sac-cap" title="Sạc + Cáp">Sạc + Cáp</a>
                    </li>
                
                
            </ul>
            </div>
                </li>
        
        
        
                <li class="menu-item list-group-item">
            <a href="/dich-vu-sua-chua" class="menu-item__link" title="Dịch Vụ Sửa Chữa">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_6.png?1738993211137" alt="Dịch Vụ Sửa Chữa" />
                                        <span>Dịch Vụ Sửa Chữa</span>
                
                <i class='float-right' data-toggle-submenu>
                
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                </i>
                </a>			
                
                    <div class="submenu scroll">
                <div class='toggle-submenu d-lg-none d-xl-none'>
                    <i class='mr-3'>
                        
    
    <svg class="icon" style="transform: rotate(180deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                    <span>Dịch Vụ Sửa Chữa </span>
                </div>
                <ul class="submenu__list">
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/thay-man" title="Thay màn">Thay màn</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/thay-pin" title="Thay Pin">Thay Pin</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/sua-nguon" title="Sửa nguồn">Sửa nguồn</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/sua-treo-tao" title="Sửa Treo Táo">Sửa Treo Táo</a>
                    </li>
                
                
            </ul>
            </div>
                </li>
        
        
        
                <li class="menu-item list-group-item">
            <a href="/san-pham-khac" class="menu-item__link" title="Sản phẩm khác">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_7.png?1738993211137" alt="Sản phẩm khác" />
                                        <span>Sản phẩm khác</span>
                
                </a>			
                
                </li>
        
    </ul>
    </nav>
    
    </script>
    
    <script type="text/x-custom-template" data-template="menuMobile">
    <div id="mobile-menu" class="scroll">
        <div class='media d-flex user-menu'>
    
            <i class="fas fa-user-circle mr-3 align-self-center"></i>
            <div class="media-body d-md-flex flex-column ">
                            <a rel="nofollow" href="/account/login" class="d-block" title="Tài khoản" >
                    Tài khoản
                </a>
                <small>
                    <a href="/account/login" title="Đăng nhập" class="font-weight: light">
                        Đăng nhập
                    </a> </small>
                
            </div>
        </div>
        <div class="mobile-menu-body scroll">
            <nav class="h-100">
    <ul  class="navigation list-group list-group-flush scroll">
            
        
        
                <li class="menu-item list-group-item">
            <a href="/dien-thoai-apple" class="menu-item__link" title="Điện Thoại Apple">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_1.png?1738993211137" alt="Điện Thoại Apple" />
                                        <span>Điện Thoại Apple</span>
                
                <i class='float-right' data-toggle-submenu>
                
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                </i>
                </a>			
                
                    <div class="submenu scroll">
                <div class='toggle-submenu d-lg-none d-xl-none'>
                    <i class='mr-3'>
                        
    
    <svg class="icon" style="transform: rotate(180deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                    <span>Điện Thoại Apple </span>
                </div>
                <ul class="submenu__list">
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/ip7g-7plus" title="iP7G – 7Plus">iP7G – 7Plus</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/8g-8-plus-x" title="8G – 8 Plus – X">8G – 8 Plus – X</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/iphone-xr-xs-xs-max" title="iPhone XR– XS – XS Max">iPhone XR– XS – XS Max</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/11-11-pro-11-promax" title="11 – 11 pro – 11 promax">11 – 11 pro – 11 promax</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/12-12-pro-12-promax" title="12 – 12 pro – 12 promax">12 – 12 pro – 12 promax</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/13-13-pro-13-promax" title="13 – 13 pro – 13 promax">13 – 13 pro – 13 promax</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/iphone-14" title="Iphone 14">Iphone 14</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/iphone-15-15pro-15promax" title="Iphone 15 - 15Pro - 15Promax">Iphone 15 - 15Pro - 15Promax</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/iphone-16-16pro-16prm" title="Iphone 16 - 16Pro - 16Prm">Iphone 16 - 16Pro - 16Prm</a>
                    </li>
                
                
            </ul>
            </div>
                </li>
        
        
        
                <li class="menu-item list-group-item">
            <a href="/dien-thoai-samsung" class="menu-item__link" title="Điện thoại Samsung">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_2.png?1738993211137" alt="Điện thoại Samsung" />
                                        <span>Điện thoại Samsung</span>
                
                <i class='float-right' data-toggle-submenu>
                
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                </i>
                </a>			
                
                    <div class="submenu scroll">
                <div class='toggle-submenu d-lg-none d-xl-none'>
                    <i class='mr-3'>
                        
    
    <svg class="icon" style="transform: rotate(180deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                    <span>Điện thoại Samsung </span>
                </div>
                <ul class="submenu__list">
                
                
                
                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/samsung-note" title="Samsung Note">Samsung Note</a>
                    </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Note 9">Note 9</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Note 10">Note 10</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Note 10 Plus">Note 10 Plus</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Note20">Note20</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="Note 20 Ultra">Note 20 Ultra</a>
                     </span>
                    
                </li>
                
                
                
                
                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/samsung-galaxy-s" title="Samsung Galaxy S">Samsung Galaxy S</a>
                    </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S9 Plus">S9 Plus</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S10">S10</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S10 Plus">S10 Plus</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S10 5G">S10 5G</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S20">S20</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S20 Plus">S20 Plus</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S20 Ultra">S20 Ultra</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S21">S21</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S21 Plus">S21 Plus</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S21 Ultra">S21 Ultra</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S22">S22</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="S22 Ultra">S22 Ultra</a>
                     </span>
                    
                </li>
                
                
                
                
                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/samsung-z-flip" title="Samsung Z Flip">Samsung Z Flip</a>
                    </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="z flip – z">z flip – z</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="flip 2 – z">flip 2 – z</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="flip 3">flip 3</a>
                     </span>
                    
                </li>
                
                
                
                
                <li class="submenu__col">
                    <span class="submenu__item submenu__item--main">
                        <a class="link" href="/samsung-z-fold" title="Samsung Z fold">Samsung Z fold</a>
                    </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="z fold 1 – z">z fold 1 – z</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="fold 2 – z">fold 2 – z</a>
                     </span>
                    
                     <span class="submenu__item submenu__item">
                         <a class="link" href="/" title="fold 3">fold 3</a>
                     </span>
                    
                </li>
                
                
            </ul>
            </div>
                </li>
        
        
        
                <li class="menu-item list-group-item">
            <a href="/may-tinh-bang" class="menu-item__link" title="Máy Tính Bảng">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_3.png?1738993211137" alt="Máy Tính Bảng" />
                                        <span>Máy Tính Bảng</span>
                
                <i class='float-right' data-toggle-submenu>
                
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                </i>
                </a>			
                
                    <div class="submenu scroll">
                <div class='toggle-submenu d-lg-none d-xl-none'>
                    <i class='mr-3'>
                        
    
    <svg class="icon" style="transform: rotate(180deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                    <span>Máy Tính Bảng </span>
                </div>
                <ul class="submenu__list">
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/ipad-air" title="iPad Air">iPad Air</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/ipad-gen" title="iPad Gen">iPad Gen</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/ipad-mini" title="iPad Mini">iPad Mini</a>
                    </li>
                
                
            </ul>
            </div>
                </li>
        
        
        
                <li class="menu-item list-group-item">
            <a href="/apple-watch" class="menu-item__link" title="Apple Watch">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_4.png?1738993211137" alt="Apple Watch" />
                                        <span>Apple Watch</span>
                
                <i class='float-right' data-toggle-submenu>
                
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                </i>
                </a>			
                
                    <div class="submenu scroll">
                <div class='toggle-submenu d-lg-none d-xl-none'>
                    <i class='mr-3'>
                        
    
    <svg class="icon" style="transform: rotate(180deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                    <span>Apple Watch </span>
                </div>
                <ul class="submenu__list">
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/s3-nhom-thep" title="S3 (Nhôm – Thép)">S3 (Nhôm – Thép)</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/s4-nhom-thep" title="S4(Nhôm – Thép)">S4(Nhôm – Thép)</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/s5-nhom-thep" title="S5 (Nhôm – Thép)">S5 (Nhôm – Thép)</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/s6-nhom-thep" title="S6(Nhôm – Thép)">S6(Nhôm – Thép)</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/s7-nhom-thep" title="S7(Nhôm – Thép)">S7(Nhôm – Thép)</a>
                    </li>
                
                
            </ul>
            </div>
                </li>
        
        
        
                <li class="menu-item list-group-item">
            <a href="/phu-kien" class="menu-item__link" title="Phụ Kiện">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_5.png?1738993211137" alt="Phụ Kiện" />
                                        <span>Phụ Kiện</span>
                
                <i class='float-right' data-toggle-submenu>
                
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                </i>
                </a>			
                
                    <div class="submenu scroll">
                <div class='toggle-submenu d-lg-none d-xl-none'>
                    <i class='mr-3'>
                        
    
    <svg class="icon" style="transform: rotate(180deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                    <span>Phụ Kiện </span>
                </div>
                <ul class="submenu__list">
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/tai-nghe" title="Tai nghe">Tai nghe</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/sac-cap" title="Sạc + Cáp">Sạc + Cáp</a>
                    </li>
                
                
            </ul>
            </div>
                </li>
        
        
        
                <li class="menu-item list-group-item">
            <a href="/dich-vu-sua-chua" class="menu-item__link" title="Dịch Vụ Sửa Chữa">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_6.png?1738993211137" alt="Dịch Vụ Sửa Chữa" />
                                        <span>Dịch Vụ Sửa Chữa</span>
                
                <i class='float-right' data-toggle-submenu>
                
    
    <svg class="icon" >
        <use xlink:href="#icon-arrow" />
    </svg>
                </i>
                </a>			
                
                    <div class="submenu scroll">
                <div class='toggle-submenu d-lg-none d-xl-none'>
                    <i class='mr-3'>
                        
    
    <svg class="icon" style="transform: rotate(180deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
                    </i>
                    <span>Dịch Vụ Sửa Chữa </span>
                </div>
                <ul class="submenu__list">
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/thay-man" title="Thay màn">Thay màn</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/thay-pin" title="Thay Pin">Thay Pin</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/sua-nguon" title="Sửa nguồn">Sửa nguồn</a>
                    </li>
                
                
                
                
                <li class="submenu__item submenu__item--main">
                        <a class="link" href="/sua-treo-tao" title="Sửa Treo Táo">Sửa Treo Táo</a>
                    </li>
                
                
            </ul>
            </div>
                </li>
        
        
        
                <li class="menu-item list-group-item">
            <a href="/san-pham-khac" class="menu-item__link" title="Sản phẩm khác">
                            <img loading="lazy" width='24' height='24' src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/menu_icon_7.png?1738993211137" alt="Sản phẩm khác" />
                                        <span>Sản phẩm khác</span>
                
                </a>			
                
                </li>
        
    </ul>
    </nav>
    
            <ul class="shop-policises list-unstyled d-flex align-items-center flex-wrap m-0 pr-0">
                                <li>
            <div class="">
                <img class="img-fluid " 
                     src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/policy_header_image_1.png?1738993211137" 
                     loading="lazy"
                     width="32"
                     height="32"
                     alt="Điện Thoại iPhone">
            </div>
            <a class="link" href="/dien-thoai-apple" title="Điện Thoại iPhone">Điện Thoại iPhone</a>
        </li>
                                    <li>
            <div class="">
                <img class="img-fluid " 
                     src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/policy_header_image_2.png?1738993211137" 
                     loading="lazy"
                     width="32"
                     height="32"
                     alt="Hướng dẫn thanh toán Online">
            </div>
            <a class="link" href="/huong-dan-mua-hang" title="Hướng dẫn thanh toán Online">Hướng dẫn thanh toán Online</a>
        </li>
                                    <li>
            <div class="">
                <img class="img-fluid " 
                     src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/policy_header_image_3.png?1738993211137" 
                     loading="lazy"
                     width="32"
                     height="32"
                     alt="Chính sách bảo hành">
            </div>
            <a class="link" href="/chinh-sach-bao-hanh" title="Chính sách bảo hành">Chính sách bảo hành</a>
        </li>
                                    <li>
            <div class="">
                <img class="img-fluid " 
                     src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/policy_header_image_4.png?1738993211137" 
                     loading="lazy"
                     width="32"
                     height="32"
                     alt="Địa chỉ liên hệ">
            </div>
            <a class="link" href="/lien-he" title="Địa chỉ liên hệ">Địa chỉ liên hệ</a>
        </li>
                
    </ul>	</div>
    
        <div class="mobile-menu-footer border-top w-100 d-flex align-items-center text-center">
            <div class="hotline  w-50   p-2 ">
                <a  href="tel:0981.044.044" title="0981.044.044">
                    Gọi điện <i class="fas fa-phone ml-3"></i>
                </a>
            </div>
                    <div class="messenger border-left p-2 w-50 border-left">
                            
                <a  href="https://www.facebook.com/dienthoaihanoi.vn" title="https://www.facebook.com/dienthoaihanoi.vn">
                    Nhắn tin
                    <i class="fab fa-facebook-messenger ml-3"></i>
                </a>
            </div>
            
        </div>
    </div>
    <div class='menu-overlay'>
    
    </div></script>		<svg style="display:none">
        <defs>
            <symbol class="icon " id="icon-cart" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.594 16.39a.703.703 0 0 1-.703.704h-.704v.703a.703.703 0 0 1-1.406 0v-.703h-.703a.703.703 0 0 1 0-1.407h.703v-.703a.703.703 0 1 1 1.406 0v.704h.704c.388 0 .703.314.703.703Zm0-10.968v6.75a.703.703 0 0 1-1.406 0V6.125H12.78v2.11a.703.703 0 1 1-1.406 0v-2.11h-6.75v2.11a.703.703 0 1 1-1.406 0v-2.11H1.813v10.969h7.453a.703.703 0 1 1 0 1.406H1.109a.703.703 0 0 1-.703-.703V5.422c0-.388.315-.703.703-.703h2.143A4.788 4.788 0 0 1 8 .5a4.788 4.788 0 0 1 4.748 4.219h2.143c.388 0 .703.315.703.703Zm-4.266-.703A3.38 3.38 0 0 0 8 1.906 3.38 3.38 0 0 0 4.672 4.72h6.656Z" fill="currentColor"/></symbol>
        </defs>
    </svg>
    <svg style="display:none">
        <defs>
            <symbol id="icon-minus" class="icon icon-minus" viewBox="0 0 16 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.375 0H0.625C0.279813 0 0 0.279813 0 0.625C0 0.970187 0.279813 1.25 0.625 1.25H15.375C15.7202 1.25 16 0.970187 16 0.625C16 0.279813 15.7202 0 15.375 0Z" fill="#8C9196"/>
            </symbol>
        </defs>
    </svg>
    
    <svg style="display:none">
        <defs>
            <symbol id="icon-plus" class="icon icon-plus" viewBox="0 0 93.562 93.562" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path xmlns="http://www.w3.org/2000/svg" d="M87.952,41.17l-36.386,0.11V5.61c0-3.108-2.502-5.61-5.61-5.61c-3.107,0-5.61,2.502-5.61,5.61l0.11,35.561H5.61   c-3.108,0-5.61,2.502-5.61,5.61c0,3.107,2.502,5.609,5.61,5.609h34.791v35.562c0,3.106,2.502,5.61,5.61,5.61   c3.108,0,5.61-2.504,5.61-5.61V52.391h36.331c3.108,0,5.61-2.504,5.61-5.61C93.562,43.672,91.032,41.17,87.952,41.17z"  fill="currentColor"/>
            </symbol>
        </defs>
    </svg>
    
    <svg style="display:none">
        <defs>
            <symbol  class="icon icon-arrow" id="icon-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490.8 490.8" fill="none" aria-hidden="true" focusable="false" role="presentation">
                <path d="M135.685 3.128c-4.237-4.093-10.99-3.975-15.083.262-3.992 4.134-3.992 10.687 0 14.82l227.115 227.136-227.136 227.115c-4.237 4.093-4.354 10.845-.262 15.083 4.093 4.237 10.845 4.354 15.083.262.089-.086.176-.173.262-.262l234.667-234.667c4.164-4.165 4.164-10.917 0-15.083L135.685 3.128z" fill="currentColor"/>
                <path d="M128.133 490.68a10.667 10.667 0 01-7.552-18.219l227.136-227.115L120.581 18.232c-4.171-4.171-4.171-10.933 0-15.104 4.171-4.171 10.933-4.171 15.104 0l234.667 234.667c4.164 4.165 4.164 10.917 0 15.083L135.685 487.544a10.663 10.663 0 01-7.552 3.136z"/>
            </symbol>
        </defs>
    </svg>
    
    <svg style="display:none">
        <defs>
            <symbol id="icon-search" class="icon icon-search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904">
                <path d="M190.707 180.101l-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 005.303 2.197 7.498 7.498 0 005.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z"/>
            </symbol>
        </defs>
    </svg>		<link rel="preload" as="script" href="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js">
    
            <script src="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js" type="text/javascript"></script>
            
            
            
    
    <div id="quick-view-product" class="quickview-product" style="display:none;">
        <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
        <div class="quick-view-product align-verticle"></div>
        <div id="quickview-modal" style="display:none;">
            <div class="block-quickview primary_block details-product">
                <div class="row">
                    <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-6">
                        <div class="image-block large-image col_large_default">
                            <span class="view_full_size">
                                <a class="img-product d-block  pos-relative embed-responsive embed-responsive-1by1" title="" href="javascript:;">
                                    <img loading="lazy" src="https://mixcdn.egany.com/themes/assets/thumb/large/noimage.gif" id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" alt="quickview"  />
                                </a>
                            </span>
                            <div class="loading-imgquickview" style="display:none;"></div>
                        </div>
                        <div class="more-view-wrapper clearfix">
                            <div class="thumbs_quickview owl_nav_custome1" id="thumbs_list_quickview">
                                <ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq" id="thumblist_quickview"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 details-pro style_product style_border">
                        <div class="head-qv group-status">
                            <h3 class="qwp-name title-product">abc</h3>
                            <div class="vend-qv group-status">
                                <div class="left_vend">
                                    <div class="first_status  d-inline-block">Thương hiệu:
                                        <span class="vendor_ status_name"></span>
                                    </div>		
                                    <span class="line_tt ">|</span>
                                    <div class="top_sku first_status d-inline-block">Mã sản phẩm:
                                        <span class="sku_ status_name"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <input type='hidden' id='qv-product-tags'/>
                        
                        <div class="quickview-info clearfix">
                            <span class="prices price-box">
                                <span class="price product-price"></span>
                                <del class="old-price"></del>
                                <span class="label_product"></span>
                            </span>
                        </div>
                        
    
                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="quick_option variants form-ajaxtocart form-product">
                            <span class="price-product-detail hidden" style="opacity: 0;">
                                <span class=""></span>
                            </span>
                            <select name='variantId' class="hidden" style="display:none"></select>
                            
                                                    <div class='product-promotion rounded-sm mb-3' id='qv-ega-salebox'></div>
                                                    
                            <div class="form-group form_product_content">
                                <div class="count_btn_style quantity_wanted_p">
                                    <div class="custom input_number_product soluong1">									
                                        <button class="btn_num btn num_1 button button_qty" onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv &gt; 1 ) result.value--;return false;">
                                            <svg class="icon">
        <use xlink:href="#icon-minus" />
    </svg></button>
                                        <input type="text" id="quantity-detail" name="quantity" value="1" maxlength="2" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                        <button class="btn_num  btn num_2 button button_qty" onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">
                                            <svg class="icon">
        <use xlink:href="#icon-plus" />
    </svg>									</button>
                                    </div>
                                    <div class="button_actions clearfix">
                                        <button type="submit" class="btn_cool btn fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart_detail">
                                            THÊM VÀO GIỎ
                                        </button>
                                                                        </div>
                                </div>
                            </div>
                        </form>
    
                    </div>
                </div>
            </div>      
            <a title="Close" class="quickview-close close-window" href="javascript:;"><i class="fas fa-times"></i></a>
        </div>    
    </div>
    <script type="text/javascript">
        Bizweb.doNotTriggerClickOnThumb = false;
        function changeImageQuickView(img, selector) {
            var src = $(img).attr("src");
            src = src.replace("_compact", "");
            
            var $videoEl = $(selector).parent();
            
            if($(img).hasClass('video')) {
                $(selector).parent().find('img').hide()
                var codevideo = $(img).parent().data().videocode.split("_")[1];
                var videoHtml = `<iframe class="img-responsive" width="560" height="315" src="https://www.youtube.com/embed/${codevideo}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
                $videoEl.append(videoHtml);
            } else {
                $videoEl.find("iframe").remove();
                $(selector).parent().find('img').show()
                $(selector).attr("src", src);
            }
        }
        function validate(evt) {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode( key );
            var regex = /[0-9]|\./;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
        }
        var selectCallbackQuickView = function(variant, selector) {
            $('#quick-view-product form').show();
            var productItem = jQuery('.quick-view-product .product-item'),
                addToCart = productItem.find('.add_to_cart_detail'),
                installmentBtn = productItem.find('.btn-installment'),
                productPrice = productItem.find('.price'),
                comparePrice = productItem.find('.old-price'),
                discountLabel= productItem.find('.label_product'),
                form2 = jQuery('.soluong1'),
                status = productItem.find('.soluong'),
                sku = productItem.find('.sku_'),
                totalPrice = productItem.find('.total-price span');		
            if(variant && variant.sku ) {
                sku.text(variant.sku);
            } else {
                sku.text('Đang cập nhật');
            }
            if (variant && variant.available) {
                var form = jQuery('#' + selector.domIdPrefix).closest('form');
                for (var i=0,length=variant.options.length; i<length; i++) {
                    var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');
                    if (radioButton.size()) {
                        radioButton.get(0).checked = true;
                    }
                }
    
                addToCart.removeClass('hidden').removeClass('disabled').removeAttr('disabled');
                addToCart.html(`THÊM VÀO GIỎ`).removeAttr('disabled');
                            installmentBtn.removeClass('hidden')
                addToCart.removeClass('is-full')
                            status.text('Còn hàng');
                if(variant.price < 1){			   
                    $("#quick-view-product .price").html('Liên hệ');
                    $("#quick-view-product del, #quick-view-product .quantity_wanted_p").hide();
                    $("#quick-view-product .prices .old-price").hide();
                                    discountLabel.hide()
                    form2.hide();
                }else{
                    productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));
                    if ( variant.compare_at_price > variant.price ) {
                      comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();         
                      let save = variant.compare_at_price - variant.price;
                      let savePerCent = Math.ceil(save / variant.compare_at_price * 100);
                      if(savePerCent > 99){
                          savePerCent = 99
                      }
                      if(savePerCent < 1){
                          savePerCent = 1
                      }
                      discountLabel.html('-'+savePerCent+ "%").show()
                      productPrice.addClass('on-sale');
                   } else {
                      comparePrice.hide();
                      discountLabel.hide()
                      productPrice.removeClass('on-sale');
                   }
                $(".quantity_wanted_p").show();
                $(".input_qty_qv_").show();
                form2.show();
            }
    
    
            
            updatePricingQuickView();
            
                                /*begin variant image*/
                                if (variant && variant.featured_image) {
    
                var originalImage = $("#product-featured-image-quickview");
                var newImage = variant.featured_image;
                var element = originalImage[0];
                Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
                    $('#thumblist_quickview img').each(function() {
                        var parentThumbImg = $(this).parent();
                        var productImage = $(this).parent().data("image");
                        if (newImageSizedSrc.includes(productImage)) {
                            $(this).parent().trigger('click');
                            return false;
                        }
                    });
    
                });
                $('#product-featured-image-quickview').attr('src',variant.featured_image.src);
            }
        } else {
            addToCart.addClass('disabled').attr('disabled', 'disabled');
            addToCart.removeClass('hidden').addClass('btn_buy is-full').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>');
            installmentBtn.addClass('hidden')
            status.text('Hết hàng');
            $(".quantity_wanted_p").show();
            if(variant){
                if(variant.price < 1){			   
                    $("#quick-view-product .price").html('Liên hệ');
                    $("#quick-view-product del").hide();
                    //$("#quick-view-product .quantity_wanted_p").hide();
                    $("#quick-view-product .prices .old-price").hide();
                                    discountLabel.hide()
    
                    form2.hide();
                    comparePrice.hide();
                    discountLabel.hide();
                    productPrice.removeClass('on-sale');
                    addToCart.addClass('disabled').attr('disabled', 'disabled');
                    addToCart.addClass('hidden').addClass('btn_buy is-full').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();
                    installmentBtn.addClass('hidden')
                }else{
                    productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));
                    if ( variant.compare_at_price > variant.price ) {
                        comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();         
                        productPrice.addClass('on-sale');
                        let save = variant.compare_at_price - variant.price;
                        let savePerCent = Math.ceil(save / variant.compare_at_price * 100);
                        if(savePerCent > 99){
                            savePerCent = 99
                        }
                        if(savePerCent < 1){
                            savePerCent = 1
                        }
                        discountLabel.html('-'+savePerCent+ "%").show()
                    } else {
                        comparePrice.hide();
                        discountLabel.hide();
    
                        productPrice.removeClass('on-sale');
                        $("#quick-view-product .prices .old-price").html('');
                                        discountLabel.hide()
    
                    }
                    /*$("#quick-view-product .price").html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));
                                                                            $("#quick-view-product del ").hide();
                                                         $("#quick-view-product .prices .old-price").show();
                                    discountLabel.show()*/
    
                    $(".input_qty_qv_").hide();
                    form2.hide();
                    addToCart.addClass('disabled').attr('disabled', 'disabled');
                    addToCart.removeClass('hidden').addClass('btn_buy is-full').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>');
                    installmentBtn.addClass('hidden')
                }
            }else{
                $("#quick-view-product .price").html('Liên hệ');
                $("#quick-view-product del").hide();
                $("#quick-view-product .quantity_wanted_p").hide();
                $("#quick-view-product .prices .old-price").hide();
                                discountLabel.hide()
    
                form2.hide();
                comparePrice.hide();
                discountLabel.hide();
    
                productPrice.removeClass('on-sale');
                addToCart.addClass('disabled').attr('disabled', 'disabled');
                addToCart.removeClass('hidden').addClass('btn_buy is-full').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>');
                installmentBtn.addClass('hidden')
            }
        }
        /*begin variant image*/
        if (variant && variant.featured_image) {
    
            var originalImage = $("#product-featured-image-quickview");
            var newImage = variant.featured_image;
            var element = originalImage[0];
            Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
                $('#thumblist_quickview img').each(function() {
                    var parentThumbImg = $(this).parent();
                    var productImage = $(this).parent().data("image");
                    if (newImageSizedSrc.includes(productImage)) {
                        $(this).parent().trigger('click');
                        return false;
                    }
                });
    
            });
            $('#product-featured-image-quickview').attr('src',variant.featured_image.src);
        }
    
        };
        
        if(typeof copyButton === 'undefined' && typeof codeCopy === 'undefined') {
          const copyButton = {"copiedText": "Đã chép", "copyText": "Sao chép"};
          function codeCopy(el){
    
                    const copyText = copyButton.copyText;
                    const copiedText = el.dataset.copiedText;
                    const coupon = el.dataset.code;
    
    
                    const _this = $(el);
                    _this.html(`<span>${copiedText}</span>`);
                    _this.addClass('disabled');
                    setTimeout(function() {
                        _this.html(`<span>${copyText}</span>`);
                        _this.removeClass('disabled');
                    }, 3000)
                    navigator.clipboard.writeText(coupon);
                }
        }
    </script>		<script>
    initQuickView();
    var product = {};
    var currentLinkQuickView = '';
    var option1 = '';
    var option2 = '';
    
    function setButtonNavQuickview() {
        $("#quickview-nav-button a").hide();
        $("#quickview-nav-button a").attr("data-index", "");
        var listProducts = $(currentLinkQuickView).closest(".slide").find("a.quick-view");
        if(listProducts.length > 0) {
            var currentPosition = 0;
            for(var i = 0; i < listProducts.length; i++) {
                if($(listProducts[i]).data("handle") == $(currentLinkQuickView).data("handle")) {
                    currentPosition = i;
                    break;
                }
            }
            if(currentPosition < listProducts.length - 1) {
                $("#quickview-nav-button .btn-next-product").show();
                $("#quickview-nav-button .btn-next-product").attr("data-index", currentPosition + 1);
            }
            if(currentPosition > 0) {
                $("#quickview-nav-button .btn-previous-product").show();
                $("#quickview-nav-button .btn-previous-product").attr("data-index", currentPosition - 1);
            }
        }
        $("#quickview-nav-button a").click(function() {
            $("#quickview-nav-button a").hide();
            var indexLink = parseInt($(this).data("index"));
            if(!isNaN(indexLink) && indexLink >= 0) {
                var listProducts = $(currentLinkQuickView).closest(".slide").find("a.quick-view");
                if(listProducts.length > 0 && indexLink < listProducts.length) {
                    //$(".quickview-close").trigger("click");
                    $(listProducts[indexLink]).trigger("click");
                }
            }
        });
    }
    function initQuickView(){
        $(document).on("click", "#thumblist_quickview li", function() {
            changeImageQuickView($(this).find("img:first-child"), ".product-featured-image-quickview");
            $('#thumblist_quickview li').removeClass('active');
            $(this).addClass('active');
        });	
        $(document).on('click', '.quick-view', function(e) {
            if($(window).width() > 1025) {
                e.preventDefault();
                const proImage =  $(this).parents('.product-thumbnail').find('img:not(.product-frame)')
                const frame =  $(this).parents('.product-thumbnail').find('.product-frame').clone()
                const badges = $(this).parents('.item_product_main').find('.product-badge').clone()
                const promoTag = $(this).parents('.item_product_main').find('.product-promo-tag').clone()
                const promotion = $(this).parents('.item_product_main').find('.product-promotion').html();
                $('#qv-ega-salebox').html(promotion);
    
                const copyButton = {"copiedText": "Đã chép", "copyText": "Sao chép"};
                function convertCouponItem(content) {
                    const regex = /\[(.*?)\]/gi
                    content = content.replace(regex, function (str, innerString) {
                        let code = innerString.split('=')[1].replace(/"/g,'').trim();
                        return `<span onClick="codeCopy(this)" class="smb-copy smb-cursor-pointer text-danger" 
                                    data-code="${code}"
                                    data-copied-text="${copyButton.copiedText}">${copyButton.copyText}</span>`
                    })
                    return content
                }
                
                const saleboxHtml = $("#qv-ega-salebox .product-promotion__heading").siblings().clone().wrap("<div/>").parent().html()
                const newContent = convertCouponItem(saleboxHtml);
                $("#qv-ega-salebox .product-promotion__heading").siblings().replaceWith(newContent);
        
                var producthandle = $(this).data("handle");
                currentLinkQuickView = $(this);
                Bizweb.getProduct(producthandle, function(product) {
                    var qvhtml = $("#quickview-modal").html();
                    $(".quick-view-product").html(qvhtml);
                    var quickview = $(".quick-view-product");
                    const tags = product.tags;
                    quickview.find('#qv-product-tags').val(JSON.stringify(tags));
                    if(product.summary != null && product.summary !=""){
                        var productdes = product.summary;
                    }
    
                    var featured_image = Bizweb.resizeImage(product.featured_image, "large");
                    if(featured_image == null){
                        featured_image = 'https://mixcdn.egany.com/themes/assets/thumb/large/noimage.gif';
                    }
                    // Reset current link quickview and button navigate in Quickview
                    setButtonNavQuickview();
                    if(featured_image != null){
                        quickview.find(".view_full_size img").attr("src",featured_image);
                    }
                    const installmentBtn = jQuery('.quick-view-product .product-item').find('.btn-installment');
                    
                                    installmentBtn.addClass('hidden');
                                    
                    if(product.price < 1 && product.variants.length < 2){			
                        quickview.find(".price").html('Liên hệ');
                        quickview.find("del").html('');
                        quickview.find("#quick-view-product form").hide();
                        quickview.find(".prices").html('<span class="price h2">Liên hệ</span>');
                        quickview.find(".add_to_cart_detail span").html('Liên hệ');
                        installmentBtn.addClass('hidden');
                        quickview.find(".add_to_cart_detail").addClass('is-full')
                    }
                    else{
                        quickview.find("#quick-view-product form").show();
                        
                        quickview.find(".price").html(Bizweb.formatMoney(product.price, "{{amount_no_decimals_with_comma_separator}}₫" ));
                                                                         
                                                                         }
                                                                         quickview.find(".product-item").attr("id", "product-" + product.id);
                                                      quickview.find(".qv-link").attr("href",product.url);
                        quickview.find(".variants").attr("id", "product-actions-" + product.id);
                        quickview.find(".variants select").attr("id", "product-select-" + product.id);
    
                        quickview.find(".qwp-name").html('<a class="text2line" href="'+ product.url +'" title="'+product.name+'">'+product.name +'</a>');
                        quickview.find(".reviews_qv .text_revi").html('<a href="'+ product.url +'" title="Đánh giá '+product.name+'"><i class="fa fa-edit"></i>&nbsp;Đánh giá</a>');
    
                        if(product.vendor){
                            quickview.find(".vend-qv .vendor_").append(product.vendor);
                        }else{
                            quickview.find(".vend-qv .vendor_").append("Đang cập nhật");
                        }
                        if(product.variants.sku){
                            quickview.find("vend-qv .sku_").append(product.variants.sku);
                        }else{
                            quickview.find(".vend-qv .sku_").append("Đang cập nhật");
                        }
                        if(product.available){
                            if (product.variants[0].inventory_management == 'bizweb') {
                                quickview.find(".vend-qv .soluong").html('Còn hàng');
                            }else{
                                quickview.find(".vend-qv .soluong").html('Còn hàng');
                            }
                        }else {
                            quickview.find(".vend-qv .soluong").html('Hết hàng');
                            $('.soluong1').hide();
                        }
    
                        quickview.find(".product-description .rte").html(productdes);
                        quickview.find(".view-more").attr('href',product.url);
    
                        if (product.compare_at_price_max > product.price) {
                                                    quickview.find(".old-price").html(Bizweb.formatMoney(product.compare_at_price_max, "{{amount_no_decimals_with_comma_separator}}₫" )).show();
                                                                                 let save = product.variants[0].compare_at_price - product.variants[0].price
                            let savePerCent = Math.ceil(save / product.variants[0].compare_at_price * 100);
                      if(savePerCent > 99){
                          savePerCent = 99
                      }
                      if(savePerCent < 1){
                          savePerCent = 1
                      }
                               quickview.find('.label_product').html('-'+ savePerCent + "%").show()
                                                    quickview.find(".price").addClass("sale-price")
                        }
                        else {
                            quickview.find(".old-price").html("");
                            quickview.find('.label_product').hide()
                            quickview.find(".price").removeClass("sale-price")
                        }
                        if (!product.available) {
                            $(".quick-view-product form").show();
                            $(".quick-view-product .quantity_wanted_p").show();
                            quickViewVariantsSwatch(product, quickview);
                            if (product.price < 1) {
                                $('#quick-view-product form').hide();
                            } else {
                                $('#quick-view-product form').show();
                            }
                            $(".soluong_qv").hide();
                            $('.soluong1').hide();
                            quickview.find(".add_to_cart_detail").text("Hết hàng").addClass("disabled").attr("disabled", "disabled");				
                            if (product.variants.length > 1) {
                                quickview.find(".dec, .inc, .variants label").show();
                                quickview.find("select").hide();
                            } else {
                                quickview.find("select,.dec, .inc, .variants label").hide();
                            }
                        } else {
                            quickViewVariantsSwatch(product, quickview);
                            $(".quick-view-product .quantity_wanted_p").show();
                            if(product.variants.length > 1){
                                $('#quick-view-product form').show();
                            }else{
                                if(product.price < 1){
                                    $('#quick-view-product form').hide();
                                }else{
                                    $('#quick-view-product form').show();
                                }
                            }
                        }
    
                        quickview.find('.more_info_block .page-product-heading li:first, .more_info_block .tab-content section:first').addClass('active');
    
                        $("#quick-view-product").modal();
    
                        $(".view_scroll_spacer").removeClass("hidden");
    
                        loadQuickViewSlider(product, quickview);
                        $('.quick-view-product .product-frame').remove()
                        if (frame && frame.length) {
                            $('.quick-view-product .img-product').append(frame)
                        }
                        let imageScale = proImage.attr('style')
                        $('img#product-featured-image-quickview').attr('style',imageScale)
                        $('.quickview-info  .product-badge').remove()
                        if(badges && badges.length){
                            $('.quickview-info ').append(badges)
                        }
                        $('.quickview-info .product-promo-tag').remove()
    
                        if(promoTag && promoTag.length) {
                            $('.quickview-info').append(promoTag)
                        }
                        $('.reviews_qv  .sapo-product-reviews-badge').attr('data-id',product.id)
                        if(window.BPR && window.BPR.loadBadges){
                            window.BPR.initDomEls()
                            window.BPR.loadBadges()
                        }
                        //$('#thumblist_quickview li').eq(0).trigger('click')
                        // Action
                        setTimeout(function(){					   
                            var thumbLargeimg = $('.view_full_size .img-product #product-featured-image-quickview').attr('src');
                            var thumMedium = $('#thumbs_list_quickview .owl-item li').find('img:not(.product-frame)').attr('src');
                            if (thumbLargeimg == thumMedium) {
                                $( "#thumbs_list_quickview .owl-item li" ).first().addClass( "active" );
                            }
    
                        },2000);
    
                        //initQuickviewAddToCart();
    
                        $(".quick-view").fadeIn(500);
                        if ($(".quick-view .total-price").length > 0) {
                            $(".quick-view input[name=quantity]").on("change", updatePricingQuickView)
                        }			
                        updatePricingQuickView();
                        // Setup listeners to add/subtract from the input
    
                        $(".js-qty__adjust").on("click", function() {
                            var el = $(this),
                                id = el.data("id"),
                                qtySelector = el.siblings(".js-qty__num"),
                                qty = parseInt(qtySelector.val().replace(/\D/g, ''));
    
                            var qty = validateQty(qty);
    
                            // Add or subtract from the current quantity
                            if (el.hasClass("js-qty__adjust--plus")) {
                                qty = qty + 1;
                            } else {
                                qty = qty - 1;
                                if (qty <= 1) qty = 1;
                            }
    
                            // Update the input's number
                            let variantId = $(`#product-select-${product.id} `).val()
                            let validQty = validateQty(product,variantId, qty)
                            validQty ? $('#qtym').val(validQty) : qtySelector.val(qty);
                            updatePricingQuickView();
                        });
                        $(".js-qty__num").on("change", function() {
                            updatePricingQuickView();
                        });
                        function onQtyChange(){
                            let qty = parseInt($('#quantity-detail').val())
                            let variantId = parseInt(quickview.find('[name="variantId"]').val())
                            let validQty = validateQty(product,variantId, qty)
                            validQty ? $('#quantity-detail').val(validQty) : qty
                        }	
    
                        quickview.find('.btn_num').click(onQtyChange)
                        $('#quantity-detail').change(onQtyChange)
                    });
                    var numInput = document.querySelector('.quantity_wanted_p input');
                    numInput.addEventListener('input', function(){
                        // Let's match only digits.
                        var num = this.value.match(/^\d+$/);
                        if (num === null) {
                            // If we have no match, value will be empty.
                            this.value = "";
                        }		
                        if (num ==0) {
                            // If we have no match, value will be empty.
                            this.value = 1;
                        }	
                    }, false)
    
                    return false;
                }else{
                                  window.location.href = $(e.currentTarget).data('href')					  
            }
        });
    }
    
    function loadQuickViewSlider(n, r) {
        productImage();
        var loadingImgQuickView = $('.loading-imgquickview');
        var s = Bizweb.resizeImage(n.featured_image, "large");
        var video_tags = n.tags.filter(function(v,i){return v.indexOf("video_") > -1});
        var video_code = video_tags[0];
        r.find(".quickview-featured-image").append('<a href="' + n.url + '"><img src="' + s + '" title="' + n.title + '"/><div style="height: 100%; width: 100%; top:0; left:0 z-index: 2000; position: absolute; display: none; background: url(' + window.loading_url + ') 50% 50% no-repeat;"></div></a>');
        if (n.images.length > 1 || video_code) {
            $('.thumbs_quickview').addClass('thumbs_list_quickview');
            var o = r.find(".more-view-wrapper ul");
    
            var videoThumb = false
            for (i in n.images) {
                var u = Bizweb.resizeImage(n.images[i], "large");
                var a = Bizweb.resizeImage(n.images[i], "large");
                var f = '<li><a href="javascript:void(0)" data-imageid="' + n.id + '"" data-zoom-image="' + u + '" title="title"><img src="' + u + '" alt="Office World" /></a></li>';
                            if(u.indexOf("video") > -1 ){
                    videoThumb  = true
                    
                    var icon_play = "//bizweb.dktcdn.net/100/460/635/themes/869995/assets/icon-button-play.png?1738993211137";
                    var f = '<li><a href="javascript:void(0)"' + 'data-videocode="' + video_code + '" data-imageid="' + n.id + '"" data-zoom-image="' + u + '" title="title"><img class="video" src="' + u + '" alt="Office World" /><img class="icon-button-play" src="' + icon_play + '" alt="video-play-button" /></a></li>';
                                }else{
                    var f = '<li><a href="javascript:void(0)" data-imageid="' + n.id + '"" data-zoom-image="' + u + '" title="title"><img src="' + u + '" alt="Office World" /></a></li>';
                }
                            if(u.indexOf("color-") == -1 ){
                    o.append(f)
                }
            }
            
            if(!videoThumb && video_code){
                let code = video_code.split('_')[1]
                var u = `https://img.youtube.com/vi/${code}/mqdefault.jpg`
                
                var icon_play = "//bizweb.dktcdn.net/100/460/635/themes/869995/assets/icon-button-play.png?1738993211137";
                var f = '<li><a href="javascript:void(0)"' + 'data-videocode="' + video_code + '" data-imageid="' + n.id + '"" data-zoom-image="' + u + '" title="title"><img class="video" src="' + u + '" alt="Office World" /><img class="icon-button-play" src="' + icon_play + '" alt="video-play-button" /></a></li>';
                            o.prepend(f)
            }
            
            o.find("a").click(function() {
                var t = r.find("#product-featured-image-quickview");
                if (t.attr("src") != $(this).attr("data-image")) {
                    t.attr("src", $(this).attr("data-image"));
                    loadingImgQuickView.show();
                    t.load(function(t) {
                        loadingImgQuickView.hide();
                        $(this).unbind("load");
                        loadingImgQuickView.hide()
                    })
                }
            });
            o.slick({
                autoplay: true,
                autoplaySpeed: 6000,
                dots: false,
                arrows: false,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4
            }).css("visibility", "visible")
        } else {  
            $('.thumbs_quickview').removeClass('thumbs_list_quickview');
            r.find(".quickview-more-views").remove();
            r.find(".quickview-more-view-wrapper-jcarousel").remove()
        }
    }
    function quickViewVariantsSwatch(t, quickview) {	
        var v = '<input type="hidden" name="id" value="' + t.id + '">';
        quickview.find("form.variants").append(v);
        if (t.variants.length > 1) {	
            for (var r = 0; r < t.variants.length; r++) {
                var i = t.variants[r];
                var s = '<option value="' + i.id + '">' + i.title + "</option>";
                quickview.find("form.variants > select").append(s)
            }
    
            var ps = "product-select-" + t.id;
            new Bizweb.OptionSelectors( ps, { 
                product: t, 
                onVariantSelected: selectCallbackQuickView
            });
    
            if (t.options.length == 1) {
                quickview.find(".selector-wrapper:eq(0)").hide().prepend("<label>" + t.options[0].name + "</label>")
            }
    
            var options="";
            for (var i = 0; i < t.options.length; i++) {
                options += '<div class="swatch clearfix" data-option-index="' + i + '">';
                options += '<div class="header">' + t.options[i].name + ': </div>';
                var is_color = false;
    
                            if (/Color|Colour|Màu/i.test(t.options[i].name)) {
                    is_color = true;
                }
                            var optionValues = new Array();
                for (var j = 0; j < t.variants.length; j++) {
                    var variant = t.variants[j];
                    var value = variant.options[i];
                    var valueHandle = awe_convertVietnamese(value);
    
                    var forText = 'swatch-' + i + '-' + valueHandle;
                    if (optionValues.indexOf(value) < 0) {
                        //not yet inserted
                        options += '<div class="position-relative">'
                        if (variant.featured_image != null) {
                            options += '<div data-image="'+variant.featured_image.src+'" data-value="' + value + '" class="swatch-element ' + (is_color ? "color " : " ") + valueHandle + (variant.available ? ' available ' : ' soldout ') + '">';
                        } else {
                            options += '<div  data-value="' + value + '" class="swatch-element ' + (is_color ? "color " : " ") + valueHandle + (variant.available ? ' available ' : ' soldout ') + '">';
                        }
    
                        options += '<input id="' + forText + '" type="radio" name="option-' + i + '" value="' + value + '" ' + (j == 0 ? ' checked ' : '') + (variant.available ? '' : '') + ' />';
    
    
                        if (is_color) {
                        let useVImg = true;
                        let vImgPrefix = `color-${valueHandle}`;
                        let vImgSrc = t.images.find(el => el.indexOf(vImgPrefix) > -1);
                                                     if(vImgSrc != undefined){
                                        options += '<label for="${forText}" class="${valueHandle}" style="background-image: url(' + vImgSrc + ');background-size: cover;"></label><span></span>'
                                }else{
                                                                                    options += '<label for="' + forText + '" class="'+valueHandle+'" style="background-color: ' + valueHandle + '"></label><span></span>';
                                                                                }
                        
                        } else {
                            options += '<label for="' + forText + '">' + value + '</label>';
                        }
                        options += '</div>';
                        if (is_color) {
                            options += '<div class="tooltip">' + value + '</div>';
                        }
                        options += '</div>';
                        if (variant.available) {
                            //$('#quick-view-product .swatch[data-option-index="' + i + '"] .' + valueHandle).removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                        }
                        optionValues.push(value);
                    }
                }
                options += '</div>';
            }
    
            quickview.find('form.variants > select').after(options);
            var chon = [];
            var qmoney = [];
            var qimage = [];
            var qid = [];
            quickview.find('.swatch :radio').change(function() {
                var optionIndex = $(this).closest('.swatch').attr('data-option-index');
                var optionValue = $(this).val();
                $(this)
                    .closest('form')
                    .find('.single-option-selector')
                    .eq(optionIndex)
                    .val(optionValue)
                    .trigger('change');
    
                var variant_id = $('.quickview-product select[name=id]').val();
    
                var check = false;
                for (var i = 0; i < qid.length; i++){
                    if (qid[i] == variant_id){                            
                        var quantity = parseInt($('.quickview-product input[name=quantity]').val());
                        var totalPrice = qmoney[i] * quantity;
                        var gia = Bizweb.formatMoney(qmoney[i], window.money_format); 
                        var totalPriceText = Bizweb.formatMoney(totalPrice, window.money_format);             
    
                        var totalPriceHtml = $('.quickview-product .price').html();
    
    
                        $('.quickview-product .total-price span').html(totalPriceText);
                        $('.quickview-product .price').html(gia);
                        currency();
    
                        if(qimage[i]){
                            $('.quickview-product .featured-image img').attr('src',qimage[i]);
                        }
                    }
                }
                for (var i = 0; i < chon.length; i++){
                    if (chon[i] == variant_id){             
                        var check = true;
                    }                       
                    else{
                    }
                }
                if(check == true) {
                    $('.quickview-product .btn-addToCart').attr('disabled','disabled');
                    $(".quickview-product .btn-addToCart").removeAttr("disabled");
                }
    
            });
    
            quickview.find("form.variants .selector-wrapper label").each(function(n, r) {
                $(this).html(t.options[n].name)
            })
        }
        else {
            quickview.find("form.variants > select").remove();
            var q = '<input type="hidden" name="variantId" value="' + t.variants[0].id + '">';
            quickview.find("form.variants").append(q);
        }
    }
    function productImage() {
        $('#thumblist').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            dots: false,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    
        if (!!$.prototype.fancybox){
            $('li:visible .fancybox, .fancybox.shown').fancybox({
                'hideOnContentClick': true,
                'openEffect'	: 'elastic',
                'closeEffect'	: 'elastic'
            });
        }
    }
    /* Quick View ADD TO CART */
    
    function updatePricingQuickView() {
        //Currency.convertAll(window.shop_currency, $("#currencies a.selected").data("currency"), "span.money", "money_format")
    }
    
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( key );
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
    
    $(document).on('click', '.quickview-close, #quick-view-product .quickview-overlay, .fancybox-overlay', function(e){
        $("#quick-view-product").fadeOut(0);
        $("#quick-view-product iframe").each(function(){
            let currSrc = $(this).attr('src')
            $(this).attr('src',currSrc)
        })
        awe_hidePopup();
        $('#quick-view-product').modal('hide');
    });
    $(document).on('click', '.fix_add_to_cart', function(e) {	
        e.preventDefault();		
        $('#quick-view-product').modal('hide');
        var $this = $(this);
        var form = $this.parents('form');		
        $.ajax({
            type: 'POST',
            url: '/cart/add.js',
            async: false,
            data: form.serialize(),
            dataType: 'json',
            error: addToCartFail,
            beforeSend: function() {  
            },
            success: addToCartSuccess,
            cache: false
        });
    });
    </script>		
                    
            <script src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/scripts.js?1738993211137" type="text/javascript"></script>
    
            <script>
    var GLOBAL = {
        common : {
            init: function(){
                $(document).on('click', '.add_to_cart',addToCart )
                $(document).on('click', '.buynow',buynow )
            }
        },
        templateIndex : {
            init: function(){
            }
        },
        templateProduct : {
            init: function(){
            }
        },
        templateCart : {
            init: function(){
            }
        }
    }
    var UTIL = {
        fire : function(func,funcname, args){
            var namespace = GLOBAL;
            funcname = (funcname === undefined) ? 'init' : funcname;
            if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function'){
                namespace[func][funcname](args);
            }
        },
        loadEvents : function(){
            var bodyId = document.body.id;
            UTIL.fire('common');
            $.each(document.body.className.split(/\s+/),function(i,classnm){
                UTIL.fire(classnm);
                UTIL.fire(classnm,bodyId);
            });
        }
    };
    $(document).ready(UTIL.loadEvents);
    Number.prototype.formatMoney = function(c, d, t){
        var n = this, 
            c = isNaN(c = Math.abs(c)) ? 2 : c, 
            d = d == undefined ? "." : d, 
            t = t == undefined ? "." : t, 
            s = n < 0 ? "-" : "", 
            i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
            j = (j = i.length) > 3 ? j % 3 : 0;
        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    };
    function addToCart(e){
        if (typeof e !== 'undefined') e.preventDefault();
        var $this = $(this);
        var form = $this.parents('form');		
        $.ajax({
            type: 'POST',
            url: '/cart/add.js',
            async: false,
            data: form.serialize(),
            dataType: 'json',
            error: addToCartFail,
            beforeSend: function() {  
            },
            success: addToCartSuccess,
            cache: false
        });
    }
    function buynow(e){
        if (typeof e !== 'undefined') e.preventDefault();
        var $this = $(this);
        var form = $this.parents('form');		
        const callback = (cart) => {
            location.href = '/checkout';
        }
        
        $.ajax({
            type: 'POST',
            url: '/cart/add.js',
            async: false,
            data: form.serialize(),
            dataType: 'json',
            error: addToCartFail,
            beforeSend: function() {  
            },
            success: (jqXHR, textStatus, errorThrown) => {
                addToCartSuccess(jqXHR, textStatus, errorThrown,callback)
            },
            cache: false
        });
    }
        function qty(){	
        var dqty = $('#qtym').val();	
            if (dqty == undefined){
            return 1;
        }
        return dqty;
        }
        
    function checkCartLimit(e, totalPrice) {
            e.preventDefault();
            
             if ((totalPrice) < Number('500000')) {
                 swal({
                     title: ``,
                     text: `Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
    Vui lòng chọn mua thêm sản phẩm.`,
                     type: "warning",
                     className: 'cart-limit-modal',
                     button: ''
                 })
                 return;
             } else {
                 location.href = '/checkout';
             }
             
    }
    function addToCartSuccess (jqXHR, textStatus, errorThrown,callback){
        $.ajax({
            type: 'GET',
            url: '/cart.js',
            async: false,
            cache: false,
            dataType: 'json',
            success: function (cart){
                
                awe.hidePopup('.loading');
                var url_product = jqXHR['url'];
                var class_id = jqXHR['product_id'];
                var name = jqXHR['name'];
                var textDisplay = ('<i style="margin-right:5px; color:red; font-size:13px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm vào giỏ hàng');
                var id = jqXHR['variant_id'];
                var dataList = $(".item-name a").map(function() {
                    var plus = $(this).text();
                    return plus;
                }).get();
                $('.title-popup-cart .cart-popup-name').html('<a href="'+ url_product +'" title="'+name+'">'+ name + '</a> ');
                var nameid = dataList,
                    found = $.inArray(name, nameid);
                var textfind = found;
    
                var src = '';
                if(Bizweb.resizeImage(jqXHR['image'], 'small') == null || Bizweb.resizeImage(jqXHR['image'], 'small') =="null" || Bizweb.resizeImage(jqXHR['image'], 'small') ==''){
                    src= 'https://mixcdn.egany.com/themes/assets/thumb/large/noimage.gif'
                }
                else
                {
                    src=  Bizweb.resizeImage(jqXHR['image'], 'small')
                }
                $(".item-info > p:contains("+id+")").html('<span class="add_sus" style="color:#898989;"><i style="margin-right:5px; color:#3cb878; font-size:14px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm</span>');
                
                var va_title = jqXHR['variant_title'];
    
                if (va_title == 'Default Title') {
                    va_title = "";
                }else {
                    va_title = jqXHR['variant_title'];
                }
                    var windowW = $(window).width();
                    $('#popup-cart').addClass('opencart');
                    $('body').addClass('opacitycart');
                    $('#popup-cart').addClass('opencart');
                    $('body').addClass('opacitycart');
                    $('#popupCartModal').html('');
                const limit = Number('500000')
                const  cart_action = cart.total_price >= limit ? `
                <a href="/checkout" class="btn btn-main btn-full">Thanh toán</a>
                <a  href="/cart" class="btn btn-main checkout_button btn-full">Xem giỏ hàng</a>
                `: `
                <button type="button" class="btn btn-main" data-dismiss="modal" data-backdrop="false"
                        aria-label="Close" >Mua thêm</button>
                <a  href="/cart" class="btn btn-main  checkout_button btn-full">Xem giỏ hàng</a>
                `
                let limit_message  = `Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
    Vui lòng chọn mua thêm sản phẩm.`
                    limit_message = limit_message ? `<span class="mr-2"><i class="fa fa-info-circle" aria-hidden="true"></i></span> ${limit_message}`  : ''
                    var $popupMobile = `<div class="modal-dialog align-vertical">
        <div class="modal-content "><button type="button" class="close" data-dismiss="modal" data-backdrop="false"
            aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>
          <div class="row row-noGutter">
            <div class="modal-left col-sm-12 col-lg-12 col-md-12">
              <h3 class="modal-title"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.00006 15.3803C12.0761 15.3803 15.3804 12.076 15.3804 7.99995C15.3804 3.92391 12.0761 0.619629 8.00006 0.619629C3.92403 0.619629 0.619751 3.92391 0.619751 7.99995C0.619751 12.076 3.92403 15.3803 8.00006 15.3803Z" fill="#2EB346"/>
                <path d="M8 16C3.58916 16 0 12.4115 0 8C0 3.58916 3.58916 0 8 0C12.4115 0 16 3.58916 16 8C16 12.4115 12.4115 16 8 16ZM8 1.23934C4.27203 1.23934 1.23934 4.27203 1.23934 8C1.23934 11.728 4.27203 14.7607 8 14.7607C11.728 14.7607 14.7607 11.7273 14.7607 8C14.7607 4.27203 11.728 1.23934 8 1.23934Z" fill="#2EB346"/>
                <path d="M7.03336 10.9434C6.8673 10.9434 6.70865 10.8771 6.59152 10.7582L4.30493 8.43438C4.06511 8.19023 4.06821 7.7986 4.31236 7.55816C4.55652 7.31898 4.94877 7.32145 5.18858 7.5656L7.0154 9.42213L10.7948 5.25979C11.0259 5.00635 11.4176 4.98838 11.6698 5.21766C11.9232 5.44757 11.9418 5.8392 11.7119 6.09326L7.49193 10.7408C7.3773 10.8672 7.21618 10.9403 7.04577 10.944C7.04143 10.9434 7.03771 10.9434 7.03336 10.9434Z" fill="white"/>
                </svg>
                <span>Thêm vào giỏ hàng thành công</span></h3>
              <div class="modal-body">
                <div class="media">
                  <div class="media-left thumb_img">
                    <div class="thumb-1x1"><img loading="lazy"
                        src="${src}"
                        alt="${jqXHR['title']}"></div>
                  </div>
                  <div class="media-body body_content">
                    <div class="product-title">${jqXHR['title']}</div>
                    <div class="variant_title font-weight-light"><span>${va_title}</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-right margin-top-10 col-sm-12 col-lg-12 col-md-12">
              <div class="title right_title d-flex justify-content-between" ><a href="/cart"> Giỏ hàng hiện có </a>
            <div class="text-right">
                <span class="price">${Bizweb.formatMoney(cart.total_price, '{{amount_no_decimals_with_comma_separator}}₫')}</span>
                <div class="count font-weight-light">
                    (<span
                class="cart-popup-count">4</span>) sản phẩm 
                </div>
            </div>
                
          
              </div>
                
                ${cart.total_price < limit ? `  <div class="cart-message">${limit_message}</div>`:'' }
                  
                  <div class="cart-action">
                                ${cart_action}
    
                  </div>
            </div>
          </div>
        </div>
      </div>`;
                    $('#popupCartModal').html($popupMobile);
                
                if(typeof callback == 'function' &&  cart.total_price >= limit){
                return	callback(cart)
                }
                    $('#popupCartModal').modal(); 
                Bizweb.updateCartFromForm(cart, '.top-cart-content .mini-products-list');
                Bizweb.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
                    
                $('.cart-mobile .header-cart').html(`
                        <div class="title-cart title_cart_mobile heading-bar">
                            <h1>Giỏ hàng</h1>
                        </div>
                        `);
                         Bizweb.updateCartPageFormMobile(cart, '.cart-mobile .header-cart-content');
                          Bizweb.updateCartPageForm(cart, '.cart_desktop_page'); 
                            getDelivery()
                            $('.cart-empty').hide()
                            $('.cart-mobile .header-cart').show()
                            
                if($('.r-bill .regular-checkbox').is(':checked')) {
                    $('.bill-field').show();
                }
                                cart_min()
    
                          
                
            }
        });
    }
    function addToCartFail(jqXHR, textStatus, errorThrown){
        var response = $.parseJSON(jqXHR.responseText);
        var $info = '<div class="error">'+ response.description +'</div>';
    }
    function getDelivery(){
        if(!$('.ega-delivery').length && window.egaDeliveryValid){
               var head = document.getElementsByTagName('head').item(0);
            var script = document.createElement('script');
            script.setAttribute('src', 'https://mixcdn.egany.com/themes/delivery-builtin/index.min.js');
            head.appendChild(script);
           }
    
    }
    $(document).on('click', ".remove-item-cart", function () {
        var variantId = $(this).attr('data-id');
        removeItemCart(variantId);
    });
    $(document).on('click', ".items-count", function () {
        $(this).parent().children('.items-count').prop('disabled', true);
        var thisBtn = $(this);
        var variantId = $(this).parent().find('.variantID').val();
        var qty =  $(this).parent().children('.number-sidebar').val();
        updateQuantity(qty, variantId);
    });
    $(document).on('change', ".number-sidebar", function () {
        var variantId = $(this).parent().children('.variantID').val();
        var qty =  $(this).val();
        updateQuantity(qty, variantId);
    });
    function updateQuantity (qty, variantId){
        var variantIdUpdate = variantId;
        $.ajax({
            type: "POST",
            url: "/cart/change.js",
            data: {"quantity": qty, "variantId": variantId},
            dataType: "json",
            success: function (cart, variantId) {
                Bizweb.onCartUpdateClick(cart, variantIdUpdate);
                cart_min();
            },
            error: function (qty, variantId) {
                Bizweb.onError(qty, variantId)
            }
        })
    }
    function removeItemCart (variantId){
        var variantIdRemove = variantId;
        $.ajax({
            type: "POST",
            url: "/cart/change.js",
            data: {"quantity": 0, "variantId": variantId},
            dataType: "json",
            success: function (cart, variantId) {
                Bizweb.onCartRemoveClick(cart, variantIdRemove);
                $('.productid-'+variantIdRemove).remove();
                if($('.tbody-popup>div').length == '0' ){
                    $('#popup-cart').removeClass('opencart');
                    $('body').removeClass('opacitycart');
                }
                if($('.list-item-cart>li').length == '0' ){
                    $('.mini-products-list').html('<div class="no-item"><p>Không có sản phẩm nào.</p></div>');
                }
                if($('.cart-mobile .item-product').length == '0' ){
                    $('.page_cart').empty();
                    $('.header-cart-content').empty();
                    $('.cart-mobile .header-cart').hide()
                    $('.title_cart_pc').html('<p class="hidden-xs-down">Không có sản phẩm nào. Quay lại <a href="/" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>');
                    $('.cart-empty').show()
                    $('.cart-sticky-cta').remove()
                }
                cart_min()
            },
            error: function (variantId, r) {
                Bizweb.onError(variantId, r)
            }
        })
    }
    function render(props) {
            return function(tok, i) {
                return (i % 2) ? props[tok] : tok;
            };
        }
        Bizweb.updateCartFromForm = function(cart, cart_summary_id, cart_count_id) {
            if ((typeof cart_summary_id) === 'string') {
                var cart_summary = jQuery(cart_summary_id);
                if (cart_summary.length) {
                    // Start from scratch.
                    cart_summary.empty();
                    // Pull it all out.        
                    jQuery.each(cart, function(key, value) {
                        if (key === 'items') {
                            var table = jQuery(cart_summary_id);           
                            if (value.length) {   
                                jQuery('<ul class="list-item-cart"></ul>').appendTo(table);
                                jQuery.each(value, function(i, item) {	
                                    var buttonQty = "";
                                    if(item.quantity == '1'){
                                        buttonQty = 'disabled';
                                    }else{
                                        buttonQty = '';
                                    }
                                    var link_img0 = Bizweb.resizeImage(item.image, 'compact');
                                    if(link_img0=="null" || link_img0 =='' || link_img0 ==null){
                                        link_img0 = 'https://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif';
                                    }
                                    if(item.variant_title == 'Default Title'){
                                    var ItemDropCart = [{
                                      url: item.url,
                                      image_url: link_img0,
                                      price: Bizweb.formatMoney(item.price, '{{amount_no_decimals_with_comma_separator}}₫'),
                                      title: item.title,
                                      buttonQty: buttonQty,
                                      quanty: item.quantity,
                                      id_item: item.variant_id,
                                      variant_title: ''
                                    }]
                                    }else {
                                    var ItemDropCart = [{
                                      url: item.url,
                                      image_url: link_img0,
                                      price: Bizweb.formatMoney(item.price, '{{amount_no_decimals_with_comma_separator}}₫'),
                                      title: item.title,
                                      buttonQty: buttonQty,
                                      quanty: item.quantity,
                                      id_item: item.variant_id,
                                      variant_title: item.variant_title,
                                    }];
                                                                }
                                    $(function() {
                                        var TemplateItemDropCart = $('script[data-template="ItemDropCart"]').text().split(/\$\{(.+?)\}/g);
                                        $('.list-item-cart').append(ItemDropCart.map(function(item) {
                                            return TemplateItemDropCart.map(render(item)).join('');
                                        }));
                                    });
                                }); 
                                jQuery('<div class="pd"><div class="top-subtotal">Tổng tiền tạm tính: <span class="price price_big">' + Bizweb.formatMoney(cart.total_price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span></div></div>').appendTo(table);
                                jQuery('<div class="pd right_ct"><a href="/cart" class="btn btn-white"><span>Tiến hành thanh toán</span></a></div>').appendTo(table);
                            }
                            else {
                                jQuery('<div class="no-item"><p>Không có sản phẩm nào.</p></div>').appendTo(table);
    
                            }
                        }
                    });
                }
            }
            updateCartDesc(cart);
            var numInput = document.querySelector('#cart-sidebar input.input-text');
            if (numInput != null){
                // Listen for input event on numInput.
                numInput.addEventListener('input', function(){
                    // Let's match only digits.
                    var num = this.value.match(/^\d+$/);
                    if (num == 0) {
                        // If we have no match, value will be empty.
                        this.value = 1;
                    }
                    if (num === null) {
                        // If we have no match, value will be empty.
                        this.value = "";
                    }
                }, false)
            }
        }
    
        Bizweb.updateCartPageForm = function(cart, cart_summary_id, cart_count_id) {
            if ((typeof cart_summary_id) === 'string') {
                var cart_summary = jQuery(cart_summary_id);
                if (cart_summary.length) {
                    // Start from scratch.
                    cart_summary.empty();
                    // Pull it all out.        
                    jQuery.each(cart, function(key, value) {
                        if (key === 'items') {
                            var table = jQuery(cart_summary_id);           
                            if (value.length) {  
                
                                var HeaderCartPc = $('script[data-template="HeaderCartPc"]').text().split(/\$\{(.+?)\}/g);
                                var pageCartCheckout = $('script[data-template="pageCartCheckout"]').text().split(/\$\{(.+?)\}/g);
                                
                                $(table).append((function() {
                                    return HeaderCartPc.map(render()).join('');
                                }));
                                                        
                                jQuery.each(value, function(i, item) {
                                    var buttonQty = "";
                                    if(item.quantity == '1'){
                                        buttonQty = 'disabled';
                                    }else{
                                        buttonQty = '';
                                    }
                                    var link_img1 = Bizweb.resizeImage(item.image, 'compact');
                                    if(link_img1=="null" || link_img1 =='' || link_img1 ==null){
                                        link_img1 = 'https://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif';
                                    }
                                    
                                    
                                    if(item.variant_title == 'Default Title'){
                                        var ItemCartPage = [{
                                          url: item.url,
                                          image_url: link_img1,
                                          price: Bizweb.formatMoney(item.price, '{{amount_no_decimals_with_comma_separator}}₫'),
                                          title: item.title,
                                          buttonQty: buttonQty,
                                          quanty: item.quantity,
                                          variant_title: item.variant_title,
                                          price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{amount_no_decimals_with_comma_separator}}₫"),
                                          id_item: item.variant_id,
                                          variant_title: ''
                                        }]
                                    }else {
                                        var ItemCartPage = [{
                                          url: item.url,
                                          image_url: link_img1,
                                          price: Bizweb.formatMoney(item.price, '{{amount_no_decimals_with_comma_separator}}₫'),
                                          title: item.title,
                                          buttonQty: buttonQty,
                                          quanty: item.quantity,
                                          variant_title: item.variant_title,
                                          price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{amount_no_decimals_with_comma_separator}}₫"),
                                          id_item: item.variant_id
                                        }]
                                    }
                                    
                                    $(function() {
                                        var pageCartItem = $('script[data-template="pageCartItem"]').text().split(/\$\{(.+?)\}/g);
                                        $(table.find('.cart-tbody')).append(ItemCartPage.map(function(item) {
                                            return pageCartItem.map(render(item)).join('');
                                            
                                        }));
                                    });
                                    
                                }); 
                                
                                var PriceTotalCheckout = [{
                                      price_total: Bizweb.formatMoney(cart.total_price, "{{amount_no_decimals_with_comma_separator}}₫")
                                }];				
                                $(table.children('.cart')).append(PriceTotalCheckout.map(function(item) {
                                    return pageCartCheckout.map(render(item)).join('');
                                }));
                            }else {
                                jQuery('<p class="hidden-xs-down ">Không có sản phẩm nào. Quay lại <a href="/collections/all" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>').appendTo(table);
                                 jQuery('.cart_desktop_page').css('min-height', 'auto');
                            }
                        }
                    });
                }
            }
            updateCartDesc(cart);
            jQuery('#wait').hide();
    
        }
        Bizweb.updateCartPopupForm = function(cart, cart_summary_id, cart_count_id) {
    
            if ((typeof cart_summary_id) === 'string') {
                var cart_summary = jQuery(cart_summary_id);
                if (cart_summary.length) {
                    // Start from scratch.
                    cart_summary.empty();
                    // Pull it all out.        
                    jQuery.each(cart, function(key, value) {
                        if (key === 'items') {
                            var table = jQuery(cart_summary_id);           
                            if (value.length) { 
                                jQuery.each(value, function(i, item) {
                                    var src = item.image;
                                    if(src == null){
                                        src = "https://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
                                    }
                                    var buttonQty = "";
                                    if(item.quantity == '1'){
                                        buttonQty = 'disabled';
                                    }else{
                                        buttonQty = '';
                                    }
                                                          
                                    if(item.variant_title == 'Default Title'){				  
                                        var ItemPopupCart = [{
                                              url: item.url,
                                              image_url: src,
                                              price: Bizweb.formatMoney(item.price, '{{amount_no_decimals_with_comma_separator}}₫'),
                                              title: item.title,
                                              quanty: item.quantity,
                                              variant_title: '',
                                              price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{amount_no_decimals_with_comma_separator}}₫"),
                                              id_item: item.variant_id
                                        }];
                                    }else {
                                        var ItemPopupCart = [{
                                              url: item.url,
                                              image_url: src,
                                              price: Bizweb.formatMoney(item.price, '{{amount_no_decimals_with_comma_separator}}₫'),
                                              title: item.title,
                                              quanty: item.quantity,
                                              variant_title: item.variant_title,
                                              price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{amount_no_decimals_with_comma_separator}}₫"),
                                              id_item: item.variant_id
                                        }];
                                    }
                                    
                            
                                    $(function() {
                                        var TemplateItemPopupCart = $('script[data-template="TemplateItemPopupCart"]').text().split(/\$\{(.+?)\}/g);
                                        $(table).append(ItemPopupCart.map(function(item) {
                                            return TemplateItemPopupCart.map(render(item)).join('');
                                        }));
                                    });					  
                                    
                                    $('.link_product').text();
                                }); 
                            }
                        }
                    });
                }
            }
            jQuery('.total-price').html(Bizweb.formatMoney(cart.total_price, "{{amount_no_decimals_with_comma_separator}}₫"));
                updateCartDesc(cart);
            }
        Bizweb.updateCartPageFormMobile = function(cart, cart_summary_id, cart_count_id) {
                if ((typeof cart_summary_id) === 'string') {
                    var cart_summary = jQuery(cart_summary_id);
                    if (cart_summary.length) {
                        // Start from scratch.
                        cart_summary.empty();
                        // Pull it all out.
                        if (cart.items && cart.items.length) {
                          var table = jQuery(cart_summary_id);           
                          jQuery('<div class="cart_page_mobile content-product-list"></div>').appendTo(table);
                          jQuery.each(cart.items, function(i, item) {
                                        if ( item.image != null) {
                                            var src = Bizweb.resizeImage(item.image, 'compact');
                                        } else {
                                            var src = "https://mixcdn.egany.com/themes/assets/thumb/large/noimage.gif";
                                        }
                                        var ItemCartPageMobile = [{
                                          url: item.url,
                                          image_url: src,
                                          price: Bizweb.formatMoney(item.price, '{{amount_no_decimals_with_comma_separator}}₫'),
                                          title: item.title,
                                          quanty: item.quantity,
                                          variant_title: item.variant_title !== 'Default Title'?item.variant_title : '',
                                          price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{amount_no_decimals_with_comma_separator}}₫"),
                                          id_item: item.variant_id
                                        }];
                                        
                                            var pageCartItemMobile = $('script[data-template="ItemCartMobile"]').text().split(/\$\{(.+?)\}/g);
                                        
                                            $(table.children('.content-product-list')).append(ItemCartPageMobile.map(function(item) {
                                                return pageCartItemMobile.map(render(item)).join('');
                                            }));
    
                                    })
                                    
                                    var pageCartCheckoutMobile = $('script[data-template="pageCartCheckoutMobile"]').text().split(/\$\{(.+?)\}/g);  
                                    var PriceTotalCheckoutMobile = [{
                                        price_total: Bizweb.formatMoney(cart.total_price, "{{amount_no_decimals_with_comma_separator}}₫")
                                    }];
                                    if(window.innerWidth < 767 ){
                                    var stickyCartCheckout = $('script[data-template="templateStickyCheckout"]').text().split(/\$\{(.+?)\}/g);  
                                    $('body').append(PriceTotalCheckoutMobile.map(function(item) {
                                        return stickyCartCheckout.map(render(item)).join('');
                                    }));
                                    }										
                                    $(table).append(PriceTotalCheckoutMobile.map(function(item) {
                                        return pageCartCheckoutMobile.map(render(item)).join('');
                                    }));
                                    
                        
                                    
                                        
                        $('.cart_page_mobile').append(`<div class="cart-note">
                        <label for="note" class="note-label">Ghi chú đơn hàng</label>
                        <textarea id="note" name="note" rows="8"></textarea>
                    </div>`)
                          }
                                        
                    }
                }
                updateCartDesc(cart);
        }
    
    
        function updateCartDesc(data){
            var $cartPrice = Bizweb.formatMoney(data.total_price, "{{amount_no_decimals_with_comma_separator}}₫"),
                $cartMobile = $('#header .cart-mobile .quantity-product'),
                $cartDesktop = $('.count_item_pr, .count_sidebar, .cart-popup-count'),
                $cartDesktopList = $('.cart-counter-list'),
                $cartPopup = $('.cart-popup-count');
    
            switch(data.item_count){
                case 0:
                    $cartMobile.text('0');
                    $cartDesktop.text('0');
                    $cartDesktopList.text('0');
                    $cartPopup.text('0');
    
                    break;
                case 1:
                    $cartMobile.text('1');
                    $cartDesktop.text('1');
                    $cartDesktopList.text('1');
                    $cartPopup.text('1');
    
                    break;
                default:
                    $cartMobile.text(data.item_count);
                    $cartDesktop.text(data.item_count);
                    $cartDesktopList.text(data.item_count);
                    $cartPopup.text(data.item_count);
    
                    break;
            }
            $('.top-cart-content .top-subtotal .price, aside.sidebar .block-cart .subtotal .price, .popup-total .total-price').html($cartPrice);
            $('.popup-total .total-price').html($cartPrice);
            $('.shopping-cart-table-total .totals_price, .price_sidebar .price_total_sidebar').html($cartPrice);
            $('.totals_price_mobile').html($cartPrice);
            $('.cartCount, .cart-popup-count, #ega-cart-count').html(data.item_count);
                                                                    
                                                                
        }
    
        Bizweb.onCartUpdate = function(cart) {
            Bizweb.updateCartFromForm(cart, '.mini-products-list');
            Bizweb.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
            
            Bizweb.updateCartPageFormMobile(cart, '.cart-mobile .header-cart-content');
             Bizweb.updateCartPageForm(cart, '.cart_desktop_page');
             
             };
             Bizweb.onCartUpdateClick = function(cart, variantId) {
                 jQuery.each(cart, function(key, value) {
                     if (key === 'items') {    
                         jQuery.each(value, function(i, item) {	
                             if(item.variant_id == variantId){
                                 $('.productid-'+variantId).find('.cart-price span.price').html(Bizweb.formatMoney(item.price * item.quantity, "{{amount_no_decimals_with_comma_separator}}₫"));
                                 $('.productid-'+variantId).find('.items-count').prop("disabled", false);
                                 $('.productid-'+variantId).find('.number-sidebar').prop("disabled", false);
                                 $('.productid-'+variantId +' .number-sidebar').val(item.quantity);
                                  $('.list-item-cart .item.productid-'+variantId).find( '.quanlity').text('x ' + item.quantity) 
                                    if(item.quantity == '1'){
                                     $('.productid-'+variantId).find('.items-count.btn-minus').prop("disabled", true);
                                 }
                             }
                         }); 
                     }
                 });
                 updateCartDesc(cart);
             }
             Bizweb.onCartRemoveClick = function(cart, variantId) {
                 jQuery.each(cart, function(key, value) {
                     if (key === 'items') {    
                         jQuery.each(value, function(i, item) {	
                             if(item.variant_id == variantId){
                                 $('.productid-'+variantId).remove();
                             }
                         }); 
                     }
                 });
                 updateCartDesc(cart);
             }
    const initCart = ()=>{
                                 $.ajax({
                     type: 'GET',
                     url: '/cart.js',
                     async: false,
                     cache: false,
                     dataType: 'json',
                     success: function (cart){
                         Bizweb.updateCartFromForm(cart, '.mini-products-list');
                         Bizweb.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup'); 
                         
                         Bizweb.updateCartPageFormMobile(cart, '.cart-mobile .header-cart-content');
                          Bizweb.updateCartPageForm(cart, '.cart_desktop_page');
                            getDelivery()
    
                          
                            if(!cart.item_count){
                                                                        
                            }
                          }
                         });
                 
                 var wDWs = $(window).width();
                if (wDWs < 1199) {
                    $('.top-cart-content').remove();
    
                }									
                                                                    
            }														
             $(window).ready(function(){
                        
                    initCart()
                
                 
    });
                                                                    
        //Check inventory
        $(document).on('click', ".items-count", function () {
            $(this).parent().children('.items-count').prop('disabled', true);
            var variantId = $(this).parent().find('.variantID').val(),
                qty = $(this).parent().children('.number-sidebar').val(),
                url = $(this).parent().parent().parent().find('.product-name a').attr('href');
            CheckQtyCart(qty, variantId, url);
        })
            $(document).ready(function ($) {
            setTimeout(function(){
                $('.item-cart .items-count, .list-item-cart .item .items-count, .item-popup .items-count').each(function(){
                    $(this).parent().children('.items-count').prop('disabled', false);
                    var variantId = $(this).parent().find('.variantID').val(),
                        qty = $(this).parent().children('.number-sidebar').val(),
                        url = $(this).closest('.item-cart, .item, .item-popup').find('.product-name a').attr('href');
                    CheckQtyCart(qty, variantId, url);
                })
            }, 200);
        });
            function CheckQtyCart(qty, variantId, url) {
            if(!url) return																	
            $.ajax({
                type : 'GET',
                dataType : 'json',
                url: ""+url+".json",
                success : function(data) {
                    locationData = data;
                    for(var i = 0; i < locationData.variants.length; i++) {
                        if(locationData.variants[i].id == variantId){
                            var maxS = locationData.variants[i].inventory_quantity,
                                allow = locationData.variants[i].inventory_management,
                                continues = locationData.variants[i].inventory_policy;
                            if (allow == 'bizweb'){
                                $('.productid-'+variantId+'').find('.items-count.btn-plus').css("pointer-events","auto");
                                if (continues == "deny") {
                                    $('.productid-'+variantId+'').find('.items-count.btn-plus').css("pointer-events","none");
                                    if (qty >= maxS) {
                                        updateQuantity(maxS, variantId);
                                        $('.productid-'+variantId+'').find('.quanlity').text(`x ${maxS}`)
                                        $('.productid-'+variantId+'').find('.items-count.btn-plus').css("pointer-events","none");
                                    }else {
                                        $('.productid-'+variantId+'').find('.items-count.btn-plus').css("pointer-events","auto");
                                    }
                                } else if (continues == "continue") {
                                    $('.productid-'+variantId+'').find('.items-count.btn-plus').css("pointer-events","auto");
                                } else{
                                    $('.productid-'+variantId+'').find('.items-count.btn-plus').css("pointer-events","auto");
                                }
                            }
                        }
                    }
                }
            })
        }
        function alertInvalidQty(qty){
            alert(`Bạn chỉ có thể mua tối đa ${qty} sản phẩm`)			
        }
        function validateQty(product, variantId, qty){
            let isInValidQty = false;
            /** check variant **/
            let variant = product && product.variants.find(item => item.id == variantId )
            if(variant && variant.inventory_management === "bizweb" && variant.inventory_policy == "deny" ){
                isInValidQty = qty > variant.inventory_quantity 
                isInValidQty && alertInvalidQty(variant.inventory_quantity)
                return isInValidQty ? variant.inventory_quantity: false
            }
            return 	isInValidQty
    
        }
    function cart_min() {
        var sts = true;
        $.ajax({
            type: 'GET',
            url: '/cart.js',
            async: false,
            success:function(data) {
                var cart = parseInt(data.total_price+'');
                var cart_compare = parseInt(500000);
                if(cart < cart_compare) {
                    $('.btn-proceed-checkout-mobile').addClass('disabled');
                    $('.cart-limit-alert').css('display', 'block');
                    $('#template-cart').removeClass('cart-available')
                    sts = false;
                } else {
                    $('.btn-proceed-checkout-mobile').removeClass('disabled');
                    $('.cart-limit-alert').css('display', 'none');
                    $('#template-cart').addClass('cart-available')
                }
            }
        })
        return sts;
    }
     
    
      $(document).ready(function () {
          
          cart_min()
            })
      
    
    </script>
            
            <script>
              const newsletter_form_action = 'https://egany.us5.list-manage.com/subscribe/post?u=30fc9d9e428051fcf936d142c&id=8a0a96cc36';
              const stock_notify_mailchimp = "";
              const banner_popup_show = false;
              const vendor_js = '//bizweb.dktcdn.net/100/460/635/themes/869995/assets/vendors.js?1738993211137';
            </script>
            <script src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/main.js?1738993211137" type="text/javascript"></script>
            
    
            <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/ega-gateway-min.js?1738993211137">
    
            <script src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/ega-gateway-min.js?1738993211137" type="text/javascript"></script>
                    <!-- Add to cart -->
            <div id="popupCartModal" class="modal fade" role="dialog">
            </div>
    
            
    <link rel="stylesheet" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/sales-pop.css?1738993211137" media="print" onload="this.media='all'">
    
    <noscript><link href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/sales-pop.css?1738993211137" rel="stylesheet" type="text/css" media="all" /></noscript>	
    <div id="ega-sale-pop" class="sales-pop hidden">
        <div class="sale-pop-wrap">
    
        </div>
        <div class="sale-pop-close">
            <i class="fa fa-times"></i>
        </div>	
    
    </div>
    <script>
        var salePopArr = [];
        let timePerPop = 15000;
        let timeDelay = 1500;
        let salesPopDesc = `[name] ở [address] vừa mua cách đây [time]`;
        let count = 0;
        let fakerScript ="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/faker.js?1738993211137"
        let customerGender = undefined;
            
            salePopArr = [			]	
    
            function showSalePop() {		
                if(!faker) return
                $('#ega-sale-pop.salepop-show').removeClass('salepop-show').addClass('salespop-close');
                let pdRanIndex = Math.floor(Math.random() * salePopArr.length),
                    salePopProduct = salePopArr[pdRanIndex],
                    randomMin = `${Math.floor(Math.random() * 59) + 1} phút`;
                const name= `${faker.name.lastName(customerGender)} ${faker.name.firstName(customerGender)}`
                const phone = `${faker.phone.phoneNumber().replace(' ')}`
                const address = faker.random.arrayElement(faker.locales.vi.address.city_root)
                const desc = salesPopDesc
                .replace(`[name]`, name)
                .replace(`[phone]`, `xxx${phone.substr(phone.length - 8)}`)
                .replace(`[time]`, randomMin)
                .replace('[address]', address)
                const salesPopContent = `	
                <div class="sale-pop-img">
                <img src="${salePopProduct.img_url}" class="img-fluid" loading="lazy" alt="${salePopProduct.title}" width="80" height="80"/>
                    </div>
                <div class="sale-pop-body">
                <div class="sale-pop-name">
                <a href="${salePopProduct.pd_url}">${salePopProduct.pd_title}</a>
                    </div>
                <span class="sale-pop-desc">${desc}</span>
                    </div>
    `
                $('.sale-pop-wrap').html(salesPopContent)
                setTimeout(()=>{
                    $('#ega-sale-pop').addClass('salepop-show').removeClass('salespop-close');
                    setTimeout(()=>{
                        $('#ega-sale-pop.salepop-show').removeClass('salepop-show').addClass('salespop-close');
                        setTimeout(()=>{
                            showSalePop()
                        },timeDelay)
                    },10000)
                },3000)
    
    
            }
    
    
        function initSalesPop() {
            if(!salePopArr.length) return;
            setTimeout(()=>{
            $.getScript(fakerScript).then(()=>{
            if(faker){
                    showSalePop()
                }
            })
            
            },timeDelay)
            
    
    
    
        }
    
        $(document).ready(() => {
            $('#ega-sale-pop').removeClass('hidden');
                initSalesPop()
                $(".sale-pop-close").click(function () {
                    $("#ega-sale-pop").removeClass('salepop-show').removeClass('salespop-close');
                })
                $(".sale-pop-cta").click(function (e) {
                    e.preventDefault();
                    $(".sale-pop-regis").show();
                })
                $(".regis-close").click(function () {
                    $(".sale-pop-regis").hide();
                })
        })
    
    
    </script>
    
    
            <link rel="stylesheet" href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/addthis-sharing.css?1738993211137" media="print" onload="this.media='all'">
    
    <noscript><link href="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/addthis-sharing.css?1738993211137" rel="stylesheet" type="text/css" media="all" /></noscript>	
    <div class="addThis_listSharing ">
        
    <a href="#" id="back-to-top" class="backtop back-to-top d-flex align-items-center justify-content-center"  title="Lên đầu trang">
        
    
    <svg class="icon" style="transform: rotate(-90deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg>
    </a>
    
    
        <ul class="addThis_listing list-unstyled  d-none d-sm-block">
            
            <li class="addThis_item">
                <a class="addThis_item--icon" href="tel:0981.044.044" rel="nofollow" >
                    <img class="img-fluid" src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/addthis-phone.svg?1738993211137" alt="Gọi ngay cho chúng tôi" loading="lazy" width="44" height="44" />
                    <span class="tooltip-text">Gọi ngay cho chúng tôi</span>
                </a>
            </li>
            <li class="addThis_item">
                <a class="addThis_item--icon" href="https://zalo.me/0964777444" target="_blank"  rel="nofollow">
                    <img class="img-fluid" src="//bizweb.dktcdn.net/100/460/635/themes/869995/assets/addthis-zalo.svg?1738993211137" alt="Gọi ngay cho chúng tôi" loading="lazy" width="44" height="44" />
                    <span class="tooltip-text">Chat với chúng tôi qua zalo</span>
                </a>
            </li>
    
        </ul>
    </div>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>
    
    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    
    <script>
    
        $(document).ready(() => {
            const page_id = "119103438664344"
            if(page_id && window.innerWidth  > 600){
            $(window).one(' mousemove touchstart scroll', () => {
                var chatbox = document.getElementById('fb-customer-chat');
                chatbox.setAttribute("page_id", page_id);
                                     chatbox.setAttribute("attribution", "biz_inbox");
    
                window.fbAsyncInit = function() {
                    FB.init({
                        xfbml            : true,
                        version          : 'v12.0'
                    });
                };
    
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            })
            }
        })
    
    </script>
    
    
                    <script>
                const EGASmartSearchConfigs = {
                    settings: {
                        isEnabled: true,
                        // color
                        colorBg: '#FFFFFF',
                        colorBgHover: '',
                        colorLabelBg: '#F7F7F7',
                        colorLabelText: '#A0A0A0',
                        colorItemBorder: '#EEEEEE',
                        colorItemTextTitle: '#0288D1',
                        colorItemTextPrice: '#dd0115',
                        colorItemTextCompareAtPrice: '#A7A7A7',
                        colorItemTextSku: '#747474',
                        colorItemTextDescription: '#747474',
                        colorItemTextViewAll: '#0288D1',
                        colorHeaderText: '#dd0115',
                        colorLoading: '#ff0000',
                        // general
                        searchAccuracy: 'title',
                        isFixedSearch: 'fixed',
                        searchWidth: '390px',
                        searchHeight: '380px',
                        searchView:	'list',
                        // product
                        productSortby: '',
                        displayProductDescription: false,
                        productLimit: 5
                    },
                    CONSTANT: {
                        shopDomain: '',
                        searchView: 'ega.smartsearch.json',
                        textHeaderSectionTitle: 'Kết quả tìm kiếm cho ',
                        textProductSectionTitle: 'Sản phẩm',
                        textArticleSectionTitle: 'Bài viết',
                        notFound: 'Không tìm thấy kết quả nào',
                        textFrom: '',
                        textShowAll: 'Xem tất cả sản phẩm có chứa '
                    }
                }
                window.egaSmartSearchValid = true;
            </script>
            
            
            <script>
        window.egaDeliveryValid = true;
        window.EGADeliverySettings = {
            "general": {
                "enabled":true,
                "title":"HẸN GIỜ NHẬN HÀNG",
                "optionDefault":"Chọn thời gian",
                "inputBackground":"#e6e6e6",
                "inputColor":"#000000",
                "startTime":"09:30",
                "endTime":"21:00",
                "waitTime":120,
                "orderTime":30,
                "orderTimeUnit":"1",
                "query":".timedeli",
                "position":"left",
                "inputBorder":"#d1d1d2",
                "datepickerBg":"#dcdcdc",
                "labelDatePicker":"Ngày nhận hàng",
                "labelTimePicker":"Thời gian nhận hàng"
            },
            "advanced":
            {
                "enableTimeSlots": true,
                
                
                "timeSlots": [
                
                
                {"title": "08h00 - 12h00"}
                
                ,{"title": " 14h00 - 18h00"}
                
                ,{"title": " 19h00 - 21h00"}
                
                
                ],
                "availableDay": [
                {
                "name": "1"
            },
            {
            "name": "2"
        },
            {
            "name": "3"
        },
            {
            "name": "4"
        },
            {
            "name": "5"
        },
            {
            "name": "6"
        },
            {
            "name": "0"
        }],
        }
        }
    
        window.EGADeliverySettings.general = Object.assign(window.EGADeliverySettings.general,{
            currentTemplate: "cart",
            platform: Bizweb
        })
    </script>
            
    
            
            <script src='//bizweb.dktcdn.net/100/460/635/themes/869995/assets/sweetalert-min.js?1738993211137'></script>
    
            
            <script src='//bizweb.dktcdn.net/100/460/635/themes/869995/assets/js-cookie-min.js?1738993211137'></script>
            
            
            
                    <div class='compare-product__qv'>
        <div class='container position-relative'>
            <a href='' class='js-compare-product-hide-qv compare-product__qv-hide'>Thu gọn 
    
    <svg class="icon" style="transform: rotate(90deg)"
    >
        <use xlink:href="#icon-arrow" />
    </svg></a>
            <div class='compare-product__qv-row'>
            </div>
            <div class='compare-product__qv-show justify-content-center align-items-center'>
                <a href='/so-sanh-san-pham' class='btn btn-main'>So sánh ngay</a>
                <a href='' class='mt-sm-2 js-compare-product-remove-all'>Xóa tất cả sản phẩm</a>
            </div>
        </div>
    </div>
    
    <script type="text/custom-template" data-template='compare-product-qv'>
        <div class='compare-product__qv-item'>
              <span class='compare-product__qv-remove js-compare-product-qv-remove' data-id='${id}' title='Xóa sản phẩm'>✕</span>
            <a href='${url}' title='${title}'>
              <img src="${image}" alt="${title}" class='mb-2'>
              <h3>${title}</h3>
        </a>
        </div>
    </script>
    
    <script>
        const showCompareProductQv = function () {
            $('.compare-product__qv').addClass('is-show');
        }
        const hideCompareProductQv = function () {
            $('.compare-product__qv').removeClass('is-show');
        }
        const checkIfAddedCompare = function () {
                }
        let dataQv = [];
        let compareProducts = localStorage.getItem('compareProducts') ? JSON.parse(localStorage.getItem('compareProducts')) : [];
        const renderProductQv = function () {
            if (dataQv && dataQv.length) {
                const productMain = $("script[data-template='compare-product-qv']").text().split(/\$\{(.+?)\}/g);
                $('.compare-product__qv-row').html('');
                $('.compare-product__qv-row').append(dataQv.map(function (item) {
                    return productMain.map(render(item)).join('')
                }))
            } else {
                hideCompareProductQv()
            }
            $('.compare-product__header-count').text(dataQv.length)
        }
        $(document).on('click', '.js-compare-product-add', function(e) {
            e.preventDefault();
            compareProducts = localStorage.getItem('compareProducts') ? JSON.parse(localStorage.getItem('compareProducts')) : [];
            const productId = $(this).data('id');
            if (compareProducts.indexOf(productId) === -1) {
                if (compareProducts.length >= 3) {
                    compareProducts.pop();
                }
                compareProducts.unshift(productId);
                localStorage.setItem('compareProducts', JSON.stringify(compareProducts));
            }
            if (compareProducts && compareProducts.length) {
                const searchTerm = '(id:' + compareProducts.join(' OR id:') + ')';
                $.ajax({
                    type: 'GET',
                    dataType: 'json',
                    url: `/search?q=${searchTerm}&view=compare`,
                    success: function (resp) {
                        dataQv = resp;
                        renderProductQv();
                        showCompareProductQv()
                    }
                })
            }
            checkIfAddedCompare()
        })
        $(document).on('click', '.js-compare-product-qv-remove', function(e) {
            e.preventDefault();
            const id = $(this).data('id');
            const newCompareList = localStorage.getItem('compareProducts') ? JSON.parse(localStorage.getItem('compareProducts')) : []
            if (newCompareList.indexOf(id) > -1) {
                newCompareList.splice(newCompareList.indexOf(id), 1);
                localStorage.setItem('compareProducts', JSON.stringify(newCompareList));
                dataQv = dataQv.filter(function (item) {
                    return +item.id !== +id
                })
                renderProductQv();
            }
            checkIfAddedCompare()
        })
        $(document).on('click', '.js-compare-product-remove-all', function (e) {
            e.preventDefault();
            localStorage.removeItem('compareProducts');
            hideCompareProductQv();
            checkIfAddedCompare();
            $('.compare-product__header-count').text(0)
        })
        $(document).on('click', '.js-compare-product-hide-qv', function (e) {
            e.preventDefault();
            hideCompareProductQv();
        })
        
        document.addEventListener('DOMContentLoaded', function () {
            if (compareProducts && compareProducts.length) {
                 $('.compare-product__header-count').text(compareProducts.length)
            }
        })
    </script></body>
    </html>









</div>
@include('layouts.customer.footer')
