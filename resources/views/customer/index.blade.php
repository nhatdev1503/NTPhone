@include('layouts.customer.header')
<style>
/* Thêm CSS để hiển thị 5 sản phẩm trên hàng và các style khác */
.section_product .col-lg-3 {
    /* For large screens (lg), default is 4 columns (col-lg-3). We change it to 5 */
    width: 20%; /* 100% / 5 = 20% */
    flex: 0 0 20%;
    max-width: 20%;
}

/* Adjust for medium screens (md) if needed */
@media (max-width: 991.98px) {
    .section_product .col-md-4 {
        /* Default is 3 columns (col-md-4). Change to maybe 3 or 4 */
        width: 33.333%;
        flex: 0 0 33.333%;
        max-width: 33.333%;
    }
}

/* Adjust for small screens (sm/xs) */
@media (max-width: 767.98px) {
    .section_product .col-6 {
        /* Default is 2 columns (col-6). Keep as 2 or adjust if needed */
        width: 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }
}

.product-thumbnail {
    position: relative;
    overflow: hidden; /* Ensure content fits */
    border: 1px solid #eee;
    border-radius: 8px;
    margin-bottom: 10px;
}

.product-thumbnail .image_thumb img {
    display: block;
    width: 100%;
    height: auto; /* Maintain aspect ratio */
    aspect-ratio: 1 / 1; /* Make images square */
    object-fit: cover; /* Cover the area without distortion */
    transition: transform 0.3s ease;
}

.product-thumbnail:hover .image_thumb img {
    transform: scale(1.05);
}

.tag-discount {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: #ff4d4f; /* Red background for discount */
    color: white;
    padding: 3px 8px;
    font-size: 0.75rem;
    font-weight: bold;
    border-radius: 4px;
    z-index: 2;
}

.product-info {
    text-align: left;
    padding: 0 5px; /* Add some padding */
}

.product-name a {
    font-size: 0.85rem; /* Smaller font size */
    color: #333;
    text-decoration: none;
    font-weight: 500; /* Slightly bolder */
    height: 3em; /* Limit to 2 lines */
    line-height: 1.5em;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
.product-name a:hover {
    color: var(--shop-color-hover);
}

.price-box {
    margin-top: 5px;
    display: flex;
    flex-direction: column; /* Stack prices vertically */
    align-items: flex-start; /* Align prices to the left */
    gap: 2px; /* Space between prices */
}

.price-box .sale-price {
    font-size: 0.95rem; /* Slightly larger sale price */
    font-weight: 600;
    color: #d70018; /* Red color for sale price */
}

.price-box .origin-price {
    font-size: 0.75rem; /* Smaller origin price */
    color: #888;
    text-decoration: line-through;
}

.product-sold {
    font-size: 0.75rem;
    color: #555;
    margin-top: 5px;
}
.product-action .action { /* Hide action button by default */
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}
.product-thumbnail:hover .action { /* Show on hover */
    opacity: 1;
    visibility: visible;
}
.btn-views {
    position: absolute;
    bottom: 10px;
    right: 10px;
    background-color: rgba(0, 0, 0, 0.6);
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.btn-views:hover {
    background-color: rgba(0, 0, 0, 0.8);
}
.btn-views svg {
    width: 16px;
    height: 16px;
}
/* Ensure swiper structure doesn't interfere with column layout */
.section_product .swiper-slide-pro {
    width: 100% !important; /* Override swiper's width */
    margin-right: 0 !important; /* Override swiper's margin */
}
.section_product .swiper-wrapper {
     display: flex; /* Use flexbox for alignment */
     flex-wrap: wrap; /* Allow items to wrap */
     width: auto !important; /* Let container define width */
     transform: none !important; /* Disable swiper transform */
}
</style>
<div class="bodywrap">
    <h1 class="d-none">Hoàng Kiên - Chuyên cung cấp điện thoại iphone, máy tính bảng ipad, máy đọc sách, phụ kiện công
        nghệ các loại uy tín, chất lượng</h1>
    <section class="section_slider">
        <div class="home-slider swiper-container">
            <div class="swiper-wrapper">
                <a href="https://www.hoangkien.com/chinh-sach-bao-hanh-12-thang-1-doi-1" title="Slider"
                    class="swiper-slide">
                    <picture>
                        <source media="(min-width: 1200px)"
                            srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_1.jpg?1742954225872">
                        <source media="(min-width: 992px)"
                            srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_1.jpg?1742954225872">
                        <source media="(min-width: 569px)"
                            srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_1.jpg?1742954225872">
                        <source media="(max-width: 567px)"
                            srcset="//bizweb.dktcdn.net/thumb/large/100/112/815/themes/966034/assets/slider_mb_1.jpg?1742954225872">
                        <img width="1920" height="650"
                            src="//bizweb.dktcdn.net/thumb/grande/100/112/815/themes/966034/assets/slider_1.jpg?1742954225872"
                            alt="Slider" class="img-responsive" />
                    </picture>
                </a>
                <a href="https://www.hoangkien.com/cam-ket-chat-luong" title="Slider" class="swiper-slide">
                    <picture>
                        <source media="(min-width: 1200px)"
                            srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_2.jpg?1742954225872">
                        <source media="(min-width: 992px)"
                            srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_2.jpg?1742954225872">
                        <source media="(min-width: 569px)"
                            srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_2.jpg?1742954225872">
                        <source media="(max-width: 567px)"
                            srcset="//bizweb.dktcdn.net/thumb/large/100/112/815/themes/966034/assets/slider_mb_2.jpg?1742954225872">
                        <img width="1920" height="650"
                            src="//bizweb.dktcdn.net/thumb/grande/100/112/815/themes/966034/assets/slider_2.jpg?1742954225872"
                            alt="Slider" class="img-responsive" />
                    </picture>
                </a>
                <a href="https://www.hoangkien.com/chinh-sach-mua-lai" title="Slider" class="swiper-slide">
                    <picture>
                        <source media="(min-width: 1200px)"
                            srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_3.jpg?1742954225872">
                        <source media="(min-width: 992px)"
                            srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_3.jpg?1742954225872">
                        <source media="(min-width: 569px)"
                            srcset="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/slider_3.jpg?1742954225872">
                        <source media="(max-width: 567px)"
                            srcset="//bizweb.dktcdn.net/thumb/large/100/112/815/themes/966034/assets/slider_mb_3.jpg?1742954225872">
                        <img width="1920" height="650"
                            src="//bizweb.dktcdn.net/thumb/grande/100/112/815/themes/966034/assets/slider_3.jpg?1742954225872"
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
                        @foreach ($categories as $category)
                            <div class="swiper-slide">
                                <div class="row row-fix">
                                    <div class="col-12 item col-fix">
                                        <div class="product-image">
                                            <a class="image_thumb scale_hover"
                                                href="{{ route('customer.category', $category->id) }}"
                                                title="{{ $category->name }}">
                                                <picture>
                                                    <img width="130" height="130"
                                                        src="{{ asset( $category->image) }}"
                                                        alt="{{ $category->name }}">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('customer.category', $category->id) }}" title="iPhone">
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
                    src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1742954225872"
                    data-src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/banner.jpg?1742954225872"
                    alt="Banner">
            </a>
        </div>
    </section>
    <section class="section_product one">
        <div class="container">
            <div class="block-background">
                <h3 class="title-index p-5">
                    <a class="title-name" href="/collections/all" title="Sản phẩm nổi bật">Sản phẩm nổi bật
                    </a>
                </h3>
                <div class="row">
                    @foreach ($featuredProducts as $product)
                        <div class="col-6 col-md-4 col-lg-3 mb-4">
                            <form action="{{ route('customer.postCart') }}" method="post" class="variants product-action" data-cart-form data-id="product-actions-{{ $product->id }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                @php
                                    $firstVariant = $product->variants->first();
                                    $displayPrice = $product->sale_price ?? 0;
                                    $originPrice = $product->origin_price ?? 0;
                                    $discountPercentage = $product->discount_percentage ?? 0;
                                    $soldCount = $product->sold_count ?? 0;
                                @endphp
                                <input type="hidden" name="variantId" value="{{ $firstVariant->id ?? '' }}">

                                <div class="product-thumbnail">
                                    @if ($discountPercentage > 0)
                                        <div class="tag-discount">-{{ $discountPercentage }}%</div>
                                    @endif
                                    <a class="image_thumb scale_hover" href="{{ route('customer.product_detail', $product->id) }}" title="{{ $product->name }}">
                                        <img width="130" height="130"
                                            src="{{ asset($product->image) }}"
                                            alt="{{ $product->name }}"
                                            loading="lazy"
                                            onerror="this.onerror=null;this.src='/path/to/placeholder.jpg';">
                                    </a>
                                    <div class="action">
                                        <a href="{{ route('customer.product_detail', $product->id) }}" class="btn-views" title="Xem chi tiết">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" fill="currentColor"></path></svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a class="line-clamp line-clamp-2" href="{{ route('customer.product_detail', $product->id) }}" title="{{ $product->name }}">{{ $product->name }}</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="sale-price">{{ number_format($displayPrice) }}₫</span>
                                        @if ($originPrice > $displayPrice)
                                            <span class="origin-price">{{ number_format($originPrice) }}₫</span>
                                        @endif
                                    </div>
                                    @if($soldCount > 0)
                                        <div class="product-sold">Đã bán: {{ $soldCount }}</div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="section_product one">
        <div class="container">
            <div class="block-background">
                <h3 class="title-index p-5">
                    <a class="title-name" href="/collections/all" title="Sản phẩm bán chạy">Sản phẩm mới nhất
                    </a>
                </h3>
                <div class="row">
                    @foreach ($bestSellingProducts as $product)
                        <div class="col-6 col-md-4 col-lg-3 mb-4">
                            <form action="{{ route('customer.postCart') }}" method="post" class="variants product-action" data-cart-form data-id="product-actions-{{ $product->id }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                @php
                                    $firstVariant = $product->variants->first();
                                    $displayPrice = $product->sale_price ?? 0;
                                    $originPrice = $product->origin_price ?? 0;
                                    $discountPercentage = $product->discount_percentage ?? 0;
                                    $soldCount = $product->sold_count ?? 0;
                                @endphp
                                <input type="hidden" name="variantId" value="{{ $firstVariant->id ?? '' }}">

                                <div class="product-thumbnail">
                                    @if ($discountPercentage > 0)
                                        <div class="tag-discount">-{{ $discountPercentage }}%</div>
                                    @endif
                                    <a class="image_thumb scale_hover" href="{{ route('customer.product_detail', $product->id) }}" title="{{ $product->name }}">
                                        <img width="130" height="130"
                                            src="{{ asset($product->image) }}"
                                            alt="{{ $product->name }}"
                                            loading="lazy"
                                            onerror="this.onerror=null;this.src='/path/to/placeholder.jpg';">
                                    </a>
                                    <div class="action">
                                        <a href="{{ route('customer.product_detail', $product->id) }}" class="btn-views" title="Xem chi tiết">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" fill="currentColor"></path></svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="line-clamp line-clamp-2" href="{{ route('customer.product_detail', $product->id) }}" title="{{ $product->name }}">{{ $product->name }}</a></h3>
                                    <div class="price-box">
                                        <span class="sale-price">{{ number_format($displayPrice) }}₫</span>
                                        @if ($originPrice > $displayPrice)
                                            <span class="origin-price">{{ number_format($originPrice) }}₫</span>
                                        @endif
                                    </div>
                                    @if($soldCount > 0)
                                        <div class="product-sold">Đã bán: {{ $soldCount }}</div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
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
                                <a class="thumb" href="/ios-19-an-dinh-ngay-ra-mat"
                                    title="IOS 19 ẤN ĐỊNH NGÀY RA MẮT">
                                    <img class="lazyload"
                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1742954225872"
                                        data-src="https://bizweb.dktcdn.net/100/112/815/articles/a-nh-chu-p-ma-n-hi-nh-2025-03-30-094617.png?v=1743302853807"
                                        alt="IOS 19 ẤN ĐỊNH NGÀY RA MẮT">
                                </a>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-1" href="/ios-19-an-dinh-ngay-ra-mat"
                                        title="IOS 19 ẤN ĐỊNH NGÀY RA MẮT">IOS 19 ẤN ĐỊNH NGÀY RA MẮT</a>
                                </h3>
                                <div class="time-post">
                                    Ngày đăng:
                                    <span>30/03/2025</span>
                                </div>
                                <p class="justify line-clamp line-clamp-3">Apple đã chính thức công bố Hội nghị Các
                                    nhà phát triển Toàn cầu (WWDC) 2025 sẽ diễn ra từ ngày 9 đến 13/6 tại Apple Park,
                                    California. Đây là sự kiện thường niên quan trọng của Apple, nơi hãng sẽ giới thiệu
                                    các phiên bản hệ điều hành mới...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item-blog-small">
                            <div class="block-thumb">
                                <a class="thumb" href="/iphone-17-air-ke-hoach-trinh-lang-dang-mong-cho-tu-apple"
                                    title="IPHONE 17 AIR - KẾ HOẠCH TRÌNH LÀNG ĐÁNG MONG CHỜ TỪ APPLE?">
                                    <img width="140" height="75" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1742954225872"
                                        data-src="https://bizweb.dktcdn.net/100/112/815/articles/iphone-17-air-size-feature.jpg?v=1743219219530"
                                        alt="IPHONE 17 AIR - KẾ HOẠCH TRÌNH LÀNG ĐÁNG MONG CHỜ TỪ APPLE?">
                                </a>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-2" style="    height: auto"
                                        href="/iphone-17-air-ke-hoach-trinh-lang-dang-mong-cho-tu-apple"
                                        title="IPHONE 17 AIR - KẾ HOẠCH TRÌNH LÀNG ĐÁNG MONG CHỜ TỪ APPLE?">IPHONE 17
                                        AIR - KẾ HOẠCH TRÌNH LÀNG ĐÁNG MONG CHỜ TỪ APPLE?</a>
                                </h3>
                                <p class="justify line-clamp line-clamp-2">Apple luôn tiên phong trong việc đổi mới
                                    công nghệ và thiết kế sản phẩm. Mới đây, thông tin về iphone 17 air đang thu hút sự
                                    chú ý của cộng đồng yêu công nghệ. Hãy cùng khám phá kế hoạch trình làng iphone 17
                                    air và những nâng cấp...
                                </p>
                            </div>
                        </div>
                        <div class="item-blog-small">
                            <div class="block-thumb">
                                <a class="thumb" href="/ios-18-3-2-gay-loi-gui-email-trong-ung-dung-mail"
                                    title="iOS 18.3.2 Gây Lỗi Gửi Email Trong Ứng Dụng Mail">
                                    <img width="140" height="75" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1742954225872"
                                        data-src="https://bizweb.dktcdn.net/100/112/815/articles/a-nh-chu-p-ma-n-hi-nh-2025-03-27-094024.png?v=1743043318497"
                                        alt="iOS 18.3.2 Gây Lỗi Gửi Email Trong Ứng Dụng Mail">
                                </a>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-2" style="    height: auto"
                                        href="/ios-18-3-2-gay-loi-gui-email-trong-ung-dung-mail"
                                        title="iOS 18.3.2 Gây Lỗi Gửi Email Trong Ứng Dụng Mail">iOS 18.3.2 Gây Lỗi
                                        Gửi Email Trong Ứng Dụng Mail</a>
                                </h3>
                                <p class="justify line-clamp line-clamp-2">Bản cập nhật iOS 18.3.2 vừa ra mắt đã khiến
                                    nhiều người dùng iPhone gặp rắc rối khi sử dụng ứng dụng Mail. Cụ thể, họ không thể
                                    gửi email hoặc không nhận được thông báo email mới từ tài khoản iCloud. Điều này gây
                                    ảnh hưởng lớn đến công...
                                </p>
                            </div>
                        </div>
                        <div class="item-blog-small">
                            <div class="block-thumb">
                                <a class="thumb" href="/iphone-17-pro-max-lo-dien-dot-pha-trong-thiet-ke"
                                    title="iPhone 17 Pro Max Lộ Diện – Đột Phá Trong Thiết Kế?">
                                    <img width="140" height="75" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1742954225872"
                                        data-src="https://bizweb.dktcdn.net/100/112/815/articles/hq720.jpg?v=1742873404433"
                                        alt="iPhone 17 Pro Max Lộ Diện – Đột Phá Trong Thiết Kế?">
                                </a>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-2" style="    height: auto"
                                        href="/iphone-17-pro-max-lo-dien-dot-pha-trong-thiet-ke"
                                        title="iPhone 17 Pro Max Lộ Diện – Đột Phá Trong Thiết Kế?">iPhone 17 Pro Max
                                        Lộ Diện – Đột Phá Trong Thiết Kế?</a>
                                </h3>
                                <p class="justify line-clamp line-clamp-2">Những thông tin rò rỉ về iPhone 17 Pro Max
                                    đã bắt đầu xuất hiện, thu hút sự quan tâm lớn từ cộng đồng yêu công nghệ. Theo các
                                    nguồn tin uy tín, Apple đang lên kế hoạch cải tiến mạnh mẽ về thiết kế, màn hình và
                                    hiệu suất...
                                </p>
                            </div>
                        </div>
                        <div class="item-blog-small">
                            <div class="block-thumb">
                                <a class="thumb"
                                    href="/phat-hanh-adobe-cho-iphone-trai-nghiem-chinh-sua-chuyen-nghiep-tren-di-dong"
                                    title="Phát Hành Adobe Cho iPhone – Trải Nghiệm Chỉnh Sửa Chuyên Nghiệp Trên Di Động">
                                    <img width="140" height="75" class="lazyload"
                                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1742954225872"
                                        data-src="https://bizweb.dktcdn.net/100/112/815/articles/adobe-photoshop-iphone-cover.jpg?v=1742783214297"
                                        alt="Phát Hành Adobe Cho iPhone – Trải Nghiệm Chỉnh Sửa Chuyên Nghiệp Trên Di Động">
                                </a>
                            </div>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-2" style="    height: auto"
                                        href="/phat-hanh-adobe-cho-iphone-trai-nghiem-chinh-sua-chuyen-nghiep-tren-di-dong"
                                        title="Phát Hành Adobe Cho iPhone – Trải Nghiệm Chỉnh Sửa Chuyên Nghiệp Trên Di Động">Phát
                                        Hành Adobe Cho iPhone – Trải Nghiệm Chỉnh Sửa Chuyên Nghiệp Trên Di Động</a>
                                </h3>
                                <p class="justify line-clamp line-clamp-2">Với sự phát triển không ngừng của công
                                    nghệ, Adobe đã chính thức đưa nhiều ứng dụng chỉnh sửa và thiết kế nổi tiếng lên nền
                                    tảng iOS, giúp người dùng iPhone có thể thao tác ngay trên thiết bị di động của
                                    mình. Những cái tên như Adobe Photoshop,...
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
                    <a href="/bien-iphone-thanh-may-tao-tieng-on-trang-giai-phap-giup-ban-ngu-ngon-hon"
                        class="item col-lg-3 col-sm-5 col-9 "
                        title="Biến iPhone thành máy tạo tiếng ồn trắng: Giải pháp giúp bạn ngủ ngon hơn">
                        <div class="block-thumb">
                            <div class="thumb"
                                title="Biến iPhone thành máy tạo tiếng ồn trắng: Giải pháp giúp bạn ngủ ngon hơn">
                                <img class="lazyload"
                                    src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1742954225872"
                                    data-src="https://bizweb.dktcdn.net/100/112/815/articles/cachbattinhnangamthanhtrongnenios153-1366x768-800-resize.jpg?v=1743390246027"
                                    alt="Biến iPhone thành máy tạo tiếng ồn trắng: Giải pháp giúp bạn ngủ ngon hơn">
                            </div>
                        </div>
                        <div class="block-content">
                            <h3 class="line-clamp line-clamp-2">
                                Biến iPhone thành máy tạo tiếng ồn trắng: Giải pháp giúp bạn ngủ ngon hơn
                            </h3>
                        </div>
                    </a>
                    <a href="/dieu-khien-robot-hut-bui-bang-apple-home-va-siri"
                        class="item col-lg-3 col-sm-5 col-9 "
                        title="Điều Khiển Robot Hút Bụi Bằng Apple Home và Siri">
                        <div class="block-thumb">
                            <div class="thumb" title="Điều Khiển Robot Hút Bụi Bằng Apple Home và Siri">
                                <img class="lazyload"
                                    src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1742954225872"
                                    data-src="https://bizweb.dktcdn.net/100/112/815/articles/a-nh-chu-p-ma-n-hi-nh-2025-03-28-094630.png?v=1743130055220"
                                    alt="Điều Khiển Robot Hút Bụi Bằng Apple Home và Siri">
                            </div>
                        </div>
                        <div class="block-content">
                            <h3 class="line-clamp line-clamp-2">
                                Điều Khiển Robot Hút Bụi Bằng Apple Home và Siri
                            </h3>
                        </div>
                    </a>
                    <a href="/su-dung-apple-music-hieu-qua-nhat" class="item col-lg-3 col-sm-5 col-9 "
                        title="Sử Dụng Apple Music Hiệu Quả Nhất">
                        <div class="block-thumb">
                            <div class="thumb" title="Sử Dụng Apple Music Hiệu Quả Nhất">
                                <img class="lazyload"
                                    src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1742954225872"
                                    data-src="https://bizweb.dktcdn.net/100/112/815/articles/6a0120a5580826970c01bb09a70f5e970d.jpg?v=1742958126430"
                                    alt="Sử Dụng Apple Music Hiệu Quả Nhất">
                            </div>
                        </div>
                        <div class="block-content">
                            <h3 class="line-clamp line-clamp-2">
                                Sử Dụng Apple Music Hiệu Quả Nhất
                            </h3>
                        </div>
                    </a>
                    <a href="/huong-dan-ve-sinh-iphone-don-gian-tai-nha-loa-to-ro-sac-khong-chap-chon"
                        class="item col-lg-3 col-sm-5 col-9 "
                        title="Hướng Dẫn Vệ Sinh iPhone Đơn Giản Tại Nhà – Loa To Rõ, Sạc Không Chập Chờn">
                        <div class="block-thumb">
                            <div class="thumb"
                                title="Hướng Dẫn Vệ Sinh iPhone Đơn Giản Tại Nhà – Loa To Rõ, Sạc Không Chập Chờn">
                                <img class="lazyload"
                                    src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1742954225872"
                                    data-src="https://bizweb.dktcdn.net/100/112/815/articles/cach-don-dep-rac-tren-iphone-7.jpg?v=1742615016183"
                                    alt="Hướng Dẫn Vệ Sinh iPhone Đơn Giản Tại Nhà – Loa To Rõ, Sạc Không Chập Chờn">
                            </div>
                        </div>
                        <div class="block-content">
                            <h3 class="line-clamp line-clamp-2">
                                Hướng Dẫn Vệ Sinh iPhone Đơn Giản Tại Nhà – Loa To Rõ, Sạc Không Chập Chờn
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
<<<<<<< Updated upstream
    </script>
</div>
=======
</script>

    </div>
>>>>>>> Stashed changes
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
@include('layouts.customer.footer')
