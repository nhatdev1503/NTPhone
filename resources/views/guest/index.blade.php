@include('layouts.guest.header')
<style>
    
    .news-section .block-product {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    padding: 30px 20px;
}

/* Tin lớn */
.news-section .item-blog-big img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.3s ease;
}
.news-section .item-blog-big a.thumb:hover img {
    transform: scale(1.03);
}
.news-section .item-blog-big h3 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 8px;
}
.news-section .item-blog-big .time-post {
    font-size: 14px;
    color: #888;
    margin-bottom: 10px;
}
.news-section .item-blog-big p {
    font-size: 15px;
    color: #444;
}

/* Tin nhỏ */
.news-section .news-small-group {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
}
.news-section .item-blog-small {
    display: flex;
    gap: 15px;
    align-items: flex-start;
}
.news-section .item-blog-small img {
    width: 120px;
    height: 75px;
    object-fit: cover;
    border-radius: 8px;
    transition: transform 0.3s ease;
}
.news-section .item-blog-small a.thumb:hover img {
    transform: scale(1.05);
}
.news-section .item-blog-small h3 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 4px;
}
.news-section .item-blog-small p {
    font-size: 14px;
    color: #555;
    margin: 0;
}

/* Xem thêm */
.news-section .see-more {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-weight: bold;
    color: #007bff;
    text-decoration: none;
    transition: color 0.2s;
}
.news-section .see-more:hover {
    color: #0056b3;

}


    /* Thêm CSS để hiển thị 5 sản phẩm trên hàng và các style khác */
    .section_product .col-lg-3 {
        /* For large screens (lg), default is 4 columns (col-lg-3). We change it to 5 */
        width: 20%;
        /* 100% / 5 = 20% */
        flex: 0 0 20%;
        max-width: 20%;
    }

    .section_danhmuc2 .danhmuc2-slider .swiper-slide {
        width: 190px !important;
        margin-right: 40px !important;
        margin-left: 20px;
    }

    .section_danhmuc2 .danhmuc2-slider .swiper-slide:hover {
        border: 1px solid #f00;
    }

    .section_danhmuc2 .danhmuc2-slider .swiper-slide .product-image img:hover {
        transform: scale(1) !important;
        transition: all 0.3s ease;
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
        overflow: hidden;
        /* Ensure content fits */
        border: 1px solid #eee;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .product-thumbnail .image_thumb img {
        display: block;
        width: 100%;
        height: auto;
        /* Maintain aspect ratio */
        aspect-ratio: 1 / 1;
        /* Make images square */
        object-fit: cover;
        /* Cover the area without distortion */
        transition: transform 0.3s ease;
    }

    .product-thumbnail:hover .image_thumb img {
        transform: scale(1.05);
    }

    .tag-discount {
        position: absolute;
        top: 7px;
        left: -41px;
        width: 120px;
        text-align: center;
        background: linear-gradient(135deg, #ff4b2b 0%, #e03a1a 100%);
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        padding: 6px 10px;
        transform: rotate(-44deg);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 10;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        line-height: 1;
    }

    .product-info {
        text-align: left;
        padding: 0 5px;
        /* Add some padding */
    }

    .product-name a {
        font-size: 1rem;
        color: #333;
        text-decoration: none;
        font-weight: 600;
        height: auto;
        line-height: 1.5;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        text-align: center;
    }

    .product-name a:hover {
        color: var(--shop-color-hover);
    }

    .price-box {
        margin: 10px 0;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .price-box .sale-price {
        font-size: 1.1rem;
        font-weight: 700;
        color: #d70018;
    }

    .price-box .origin-price {
        font-size: 0.9rem;
        color: #888;
        text-decoration: line-through;
    }

    .product-sold {
        font-size: 0.85rem;
        color: #666;
        margin: 5px 0;
    }

    .product-sold {
        font-size: 0.75rem;
        color: #555;
        margin-top: 5px;
    }

    .product-action .action {
        /* Hide action button by default */
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .product-thumbnail:hover .action {
        /* Show on hover */
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
        width: 100% !important;
        /* Override swiper's width */
        margin-right: 0 !important;
        /* Override swiper's margin */
    }

    .section_product .swiper-wrapper {
        display: flex;
        /* Use flexbox for alignment */
        flex-wrap: wrap;
        /* Allow items to wrap */
        width: auto !important;
        /* Let container define width */
        transform: none !important;
        /* Disable swiper transform */
    }

    .colors-container {
        display: flex;
        gap: 5px;
        margin: 8px 0;
    }

    .color-circle {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 1px solid #ddd;
        cursor: pointer;
    }

    .storage-options {
        display: flex;
        gap: 5px;
        flex-wrap: wrap;
        margin: 8px 0;
    }

    .storage-badge {
        padding: 2px 8px;
        background-color: #f5f5f5;
        border-radius: 12px;
        font-size: 12px;
    }

    .rating {
        display: flex;
        align-items: center;
        gap: 5px;
        margin-top: 8px;
        flex-wrap: nowrap;
    }

    .stars-container {
        display: inline-flex;
        align-items: center;
        gap: 2px;
        white-space: nowrap;
    }

    .star {
        color: #ffd700;
        font-size: 14px;
        display: inline-block;
        line-height: 1;
    }

    .half-star {
        position: relative;
        display: inline-block;
        width: 14px;
        height: 14px;
        line-height: 1;
    }

    .half-star::before,
    .half-star::after {
        content: '★';
        position: absolute;
        color: #ffd700;
        font-size: 14px;
        line-height: 1;
    }

    .half-star::before {
        clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%);
    }

    .half-star::after {
        clip-path: polygon(50% 0, 100% 0, 100% 100%, 50% 100%);
        color: #e0e0e0;
    }

    .rating-number {
        color: #666;
        font-size: 12px;
        margin-left: 4px;
        display: inline-block;
        line-height: 1;
    }

    .total-ratings {
        color: #666;
        font-size: 12px;
        display: inline-block;
        line-height: 1;
    }

    .no-ratings {
        color: #999;
        font-size: 12px;
        display: inline-block;
        line-height: 1;
    }
</style>
<div class="bodywrap">
    <h1 class="d-none">NTShop - Chuyên cung cấp điện thoại iphone, máy tính bảng ipad, máy đọc sách, phụ kiện công
        nghệ các loại uy tín, chất lượng</h1>
    <section class="section_slider">
        <div class="home-slider swiper-container">
            <div class="swiper-wrapper">
                <a href="{{ route('guest.product_detail',$banner->product_url) }}" title="{{ $banner->name }}"
                    class="swiper-slide">
                    <picture>
                        <img width="1920" height="650"
                            src="{{ asset('storage/' . $banner->image) }}"
                            alt="Slider" class="img-responsive" />
                    </picture>
                </a>
            </div>
        </div>
    </section>
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
                                                href="{{ route('guest.category', $category->id) }}"
                                                title="{{ $category->name }}">
                                                <picture>
                                                    <img width="130" height="130"
                                                        src="{{ asset($category->image) }}" alt="{{ $category->name }}">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('guest.category', $category->id) }}" title="iPhone">
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
                            <form action="{{ route('customer.postCart') }}" method="post"
                                class="variants product-action" data-cart-form
                                data-id="product-actions-{{ $product->id }}" enctype="multipart/form-data">
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
                                    <a class="image_thumb scale_hover"
                                        href="{{ route('guest.product_detail', $product->id) }}"
                                        title="{{ $product->name }}">
                                        <img width="130" height="130" src="{{ asset($product->image) }}"
                                            alt="{{ $product->name }}" loading="lazy"
                                            onerror="this.onerror=null;this.src='/path/to/placeholder.jpg';">
                                    </a>
                                    <div class="action">
                                        <a href="{{ route('guest.product_detail', $product->id) }}"
                                            class="btn-views" title="Xem chi tiết">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a class="line-clamp line-clamp-2"
                                            href="{{ route('guest.product_detail', $product->id) }}"
                                            title="{{ $product->name }}">{{ $product->name }}</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="sale-price">{{ number_format($displayPrice) }}₫</span>
                                        @if ($originPrice > $displayPrice)
                                            <span class="origin-price">{{ number_format($originPrice) }}₫</span>
                                        @endif
                                    </div>
                                    <div class="product-sold">Đã bán: {{ $soldCount }}</div>

                                    <!-- Thêm phần hiển thị màu sắc -->
                                    @if ($product->available_colors && $product->available_colors->count() > 0)
                                        <div class="colors-container">
                                            @foreach ($product->available_colors as $color)
                                                <div class="color-circle" title="{{ $color['name'] }}"
                                                    style="background-color: {{ $color['hex_code'] }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                    <!-- Thêm phần hiển thị dung lượng -->
                                    @if ($product->available_storages && $product->available_storages->count() > 0)
                                        <div class="storage-options">
                                            @foreach ($product->available_storages as $storage)
                                                <span class="storage-badge">{{ $storage }}</span>
                                            @endforeach
                                        </div>
                                    @endif

                                    <!-- Thêm phần hiển thị đánh giá -->
                                    <div class="rating">
                                        @php
                                            $orderItems = $product->orderItems()->whereNotNull('rating')->get();
                                            $totalRatings = $orderItems->count();
                                            $averageRating = $totalRatings > 0 ? $orderItems->avg('rating') : 0;
                                        @endphp
                                        
                                        @if ($totalRatings > 0)
                                            <div class="stars-container">
                                                @php
                                                    $fullStars = floor($averageRating);
                                                    $hasHalfStar = $averageRating - $fullStars >= 0.5;
                                                @endphp
                                                
                                                @for ($i = 0; $i < $fullStars; $i++)
                                                    <span class="star">★</span>
                                                @endfor
                                                
                                                @if ($hasHalfStar)
                                                    <span class="half-star"></span>
                                                @endif
                                                
                                                @for ($i = $fullStars + ($hasHalfStar ? 1 : 0); $i < 5; $i++)
                                                    <span class="star" style="color: #e0e0e0;">★</span>
                                                @endfor
                                            </div>
                                            <span class="rating-number">{{ number_format($averageRating, 1) }}</span>
                                            <span class="total-ratings">({{ $totalRatings }} đánh giá)</span>
                                        @else
                                            <span class="no-ratings">Chưa có đánh giá</span>
                                        @endif
                                    </div>
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
                            <form action="{{ route('customer.postCart') }}" method="post"
                                class="variants product-action" data-cart-form
                                data-id="product-actions-{{ $product->id }}" enctype="multipart/form-data">
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
                                    <a class="image_thumb scale_hover"
                                        href="{{ route('guest.product_detail', $product->id) }}"
                                        title="{{ $product->name }}">
                                        <img width="130" height="130" src="{{ asset($product->image) }}"
                                            alt="{{ $product->name }}" loading="lazy"
                                            onerror="this.onerror=null;this.src='/path/to/placeholder.jpg';">
                                    </a>
                                    <div class="action">
                                        <a href="{{ route('guest.product_detail', $product->id) }}"
                                            class="btn-views" title="Xem chi tiết">
                                            <svg class="icon" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a class="line-clamp line-clamp-2"
                                            href="{{ route('guest.product_detail', $product->id) }}"
                                            title="{{ $product->name }}">{{ $product->name }}</a></h3>
                                    <div class="price-box">
                                        <span class="sale-price">{{ number_format($displayPrice) }}₫</span>
                                        @if ($originPrice > $displayPrice)
                                            <span class="origin-price">{{ number_format($originPrice) }}₫</span>
                                        @endif
                                    </div>
                                    @if ($soldCount > 0)
                                        <div class="product-sold">Đã bán: {{ $soldCount }}</div>
                                    @endif

                                    <!-- Thêm phần hiển thị màu sắc -->
                                    @if ($product->available_colors && $product->available_colors->count() > 0)
                                        <div class="colors-container">
                                            @foreach ($product->available_colors as $color)
                                                <div class="color-circle" title="{{ $color['name'] }}"
                                                    style="background-color: {{ $color['hex_code'] }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                    <!-- Thêm phần hiển thị dung lượng -->
                                    @if ($product->available_storages && $product->available_storages->count() > 0)
                                        <div class="storage-options">
                                            @foreach ($product->available_storages as $storage)
                                                <span class="storage-badge">{{ $storage }}</span>
                                            @endforeach
                                        </div>
                                    @endif

                                    <!-- Thêm phần hiển thị đánh giá -->
                                    <div class="rating">
                                        @php
                                            $orderItems = $product->orderItems()->whereNotNull('rating')->get();
                                            $totalRatings = $orderItems->count();
                                            $averageRating = $totalRatings > 0 ? $orderItems->avg('rating') : 0;
                                        @endphp
                                        
                                        @if ($totalRatings > 0)
                                            <div class="stars-container">
                                                @php
                                                    $fullStars = floor($averageRating);
                                                    $hasHalfStar = $averageRating - $fullStars >= 0.5;
                                                @endphp
                                                
                                                @for ($i = 0; $i < $fullStars; $i++)
                                                    <span class="star">★</span>
                                                @endfor
                                                
                                                @if ($hasHalfStar)
                                                    <span class="half-star"></span>
                                                @endif
                                                
                                                @for ($i = $fullStars + ($hasHalfStar ? 1 : 0); $i < 5; $i++)
                                                    <span class="star" style="color: #e0e0e0;">★</span>
                                                @endfor
                                            </div>
                                            <span class="rating-number">{{ number_format($averageRating, 1) }}</span>
                                            <span class="total-ratings">({{ $totalRatings }} đánh giá)</span>
                                        @else
                                            <span class="no-ratings">Chưa có đánh giá</span>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="section_blog news-section">
    <div class="container">
        <div class="block-product block-background">
            <h3 class="title-index px-4 pb-3">
                <a class="title-name" href="{{ route('guest.news') }}">Tin tức mới nhất</a>
            </h3>

            <div class="row gx-4 gy-4">
                {{-- Tin lớn bên trái --}}
                <div class="col-md-6">
                    @if($latestNews->first())
                        @php $firstNews = $latestNews->first(); @endphp
                        <div class="item-blog-big">
                            <a class="thumb d-block mb-3" href="{{ route('guest.show', $firstNews->id) }}">
                                <img class="lazyload"
                                     src="{{ asset('default-thumbnail.jpg') }}"
                                     data-src="{{ asset('storage/' . $firstNews->thumbnail_path) }}"
                                     alt="{{ $firstNews->title }}">
                            </a>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-1" href="{{ route('guest.show', $firstNews->id) }}">
                                        {{ $firstNews->title }}
                                    </a>
                                </h3>
                                <div class="time-post">
                                    Ngày đăng: <span>{{ \Carbon\Carbon::parse($firstNews->published_at)->format('d/m/Y') }}</span>
                                </div>
                                <p class="justify line-clamp line-clamp-3">
                                    {{ Str::limit(strip_tags(html_entity_decode($firstNews->content)), 200) }}
                                </p>
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Tin nhỏ bên phải --}}
                <div class="col-md-6 news-small-group">
                    @foreach($latestNews->skip(1)->take(4) as $news)
                        <div class="item-blog-small">
                            <a class="thumb" href="{{ route('guest.show', $news->id) }}">
                                <img class="lazyload"
                                     src="{{ asset('default-thumbnail.jpg') }}"
                                     data-src="{{ asset('storage/' . $news->thumbnail_path) }}"
                                     alt="{{ $news->title }}">
                            </a>
                            <div class="block-content">
                                <h3>
                                    <a class="line-clamp line-clamp-2" href="{{ route('guest.show', $news->id) }}">
                                        {{ $news->title }}
                                    </a>
                                </h3>
                                <p class="line-clamp line-clamp-2">
                                    {{ Str::limit(strip_tags(html_entity_decode($news->content)), 120) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center pt-4">
                <a class="see-more" href="{{ route('guest.news') }}">
                    Xem toàn bộ tin tức
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h306.7L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                    </svg>
                </a>
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
                    <a href="/dieu-khien-robot-hut-bui-bang-apple-home-va-siri" class="item col-lg-3 col-sm-5 col-9 "
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
    {{-- <section class="section_danhgia">
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
    </section> --}}
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
@include('layouts.guest.footer')
