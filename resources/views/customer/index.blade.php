@include('layouts.customer.header')
<style>
    .section_danhmuc2 .danhmuc2-slider .swiper-slide>a h3 {
        font-size: 14px;
    }

    .news-section .block-product {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
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
        width: 20%;
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

    /* Adjust for medium screens (md) */
    @media (max-width: 991.98px) {
        .section_product .col-md-4 {
            width: 33.333%;
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }
    }

    /* Adjust for small screens (sm/xs) */
    @media (max-width: 767.98px) {
        .section_product .col-6 {
            width: 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    .product-thumbnail {
        position: relative;
        overflow: hidden;
        border: 1px solid #eee;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .product-thumbnail .image_thumb img {
        display: block;
        width: 100%;
        height: auto;
        aspect-ratio: 1 / 1;
        object-fit: cover;
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

    .product-action .action {
        display: flex;
        gap: 8px;
        position: absolute;
        bottom: 10px;
        right: 10px;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .product-thumbnail:hover .action {
        opacity: 1;
        visibility: visible;
    }

    .btn-views {
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
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

    .product-action .action .btn-buy-now,
    .product-action .action .btn-add-cart {
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .product-action .action .btn-buy-now:hover {
        background-color: #d70018;
    }

    .product-action .action .btn-add-cart:hover {
        background-color: #007bff;
    }

    .product-action .action .btn-buy-now svg,
    .product-action .action .btn-add-cart svg {
        width: 16px;
        height: 16px;
    }

    .product-action .action .btn-buy-now:disabled,
    .product-action .action .btn-add-cart:disabled {
        background-color: rgba(0, 0, 0, 0.3);
        cursor: not-allowed;
    }

    /* CSS cho toast notification */
    .toast-container {
        position: fixed;
        top: 25px;
        right: 20px;
        z-index: 100000;
    }

    .toast {
        background-color: #333;
        color: white;
        padding: 12px 20px;
        border-radius: 8px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        opacity: 0;
        transform: translateX(100%);
        transition: opacity 0.3s ease, transform 0.3s ease;
        max-width: 300px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .toast.show {
        opacity: 1;
        transform: translateX(0);
    }

    .toast.success {
        background-color: #28a745;
    }

    .toast.error {
        background-color: #dc3545;
    }

    .toast .toast-icon {
        font-size: 18px;
    }

    .toast .toast-message {
        font-size: 14px;
        flex: 1;
    }

    .toast .toast-close {
        cursor: pointer;
        font-size: 16px;
        color: #fff;
        opacity: 0.7;
    }

    .toast .toast-close:hover {
        opacity: 1;
    }

    /* Ensure swiper structure doesn't interfere with column layout */
    .section_product .swiper-slide-pro {
        width: 100% !important;
        margin-right: 0 !important;
    }

    .section_product .swiper-wrapper {
        display: flex;
        flex-wrap: wrap;
        width: auto !important;
        transform: none !important;
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
        /* display: flex;
        gap: 5px;
        flex-wrap: wrap;
        margin: 8px 0; */
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

    .flash-sale-section {
        margin-bottom: 30px;
    }

    .flash-sale-section .section-header {
        border-bottom: 1px solid #eee;
    }

    .flash-sale-section .section-title {
        color: #d70018;
        font-size: 24px;
        font-weight: 700;
        margin-right: 20px;
    }

    .countdown-timer {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #fff3f3;
        padding: 8px 15px;
        border-radius: 20px;
    }

    .countdown-label {
        font-size: 14px;
        color: #d70018;
    }

    .countdown {
        display: flex;
        gap: 5px;
        font-size: 18px;
        font-weight: 600;
        color: #d70018;
    }

    .flash-sale-navigation {
        display: flex;
        gap: 10px;
    }

    .flash-prev,
    .flash-next {
        width: 40px;
        height: 40px;
        border: none;
        border-radius: 50%;
        background: #f5f5f5;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .flash-prev:hover,
    .flash-next:hover {
        background: #e0e0e0;
    }

    .flash-prev svg,
    .flash-next svg {
        width: 24px;
        height: 24px;
        fill: #666;
    }

    .flash-sale-slider {
        padding: 20px;
    }

    .flash-sale-slider .swiper-slide {
        width: 20%;
    }

    @media (max-width: 1200px) {
        .flash-sale-slider .swiper-slide {
            width: 25%;
        }
    }

    @media (max-width: 992px) {
        .flash-sale-slider .swiper-slide {
            width: 33.333%;
        }
    }

    @media (max-width: 768px) {
        .flash-sale-slider .swiper-slide {
            width: 50%;
        }
    }

    @media (max-width: 576px) {
        .flash-sale-slider .swiper-slide {
            width: 100%;
        }
    }
</style>
<div class="bodywrap">
    <h1 class="d-none">NTShop - Chuyên cung cấp điện thoại iphone, máy tính bảng ipad, máy đọc sách, phụ kiện công
        nghệ các loại uy tín, chất lượng</h1>
    <section class="section_slider">
        <div class="home-slider swiper-container">
            <div class="swiper-wrapper">
                <a href="{{ route('customer.product_detail', $banner->product_url) }}" title="{{ $banner->name }}"
                    class="swiper-slide">
                    <picture>
                        <img width="1920" height="650" src="{{ asset('storage/' . $banner->image) }}" alt="Slider"
                            class="img-responsive" />
                    </picture>
                </a>
            </div>
        </div>
    </section>

    <!-- Flash Sale Section -->
    <section class="flash-sale-section">
        <div class="container">
            <div class="block-background">
                <div class="section-header d-flex justify-content-between align-items-center mb-4 p-4">
                    <div class="d-flex align-items-center gap-3">
                        <h2 class="section-title mb-0">Giá sốc trong ngày 🔥🔥🔥</h2>
                        <div class="countdown-timer">
                            <span class="countdown-label">Kết thúc sau:</span>
                            <div class="countdown" data-end-time="{{ $flashSaleEndTime }}">
                                <span class="hours">00</span>:<span class="minutes">00</span>:<span class="seconds">00</span>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="flash-sale-slider swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($highestDiscountProducts as $product)
                            <div class="swiper-slide">
                                <div class="variants product-action" data-id="product-actions-{{ $product->id }}">
                                    @php
                                        $firstVariant = $product->variants->first();
                                        $displayPrice = $firstVariant ? $firstVariant->price : 0;
                                        $originPrice = $firstVariant ? $firstVariant->origin_price : 0;
                                        $discountPercentage = $product->discount_percent ?? 0;
                                        $soldCount = $product->sold_count ?? 0;
                                        $isOutOfStock = $product->is_out_of_stock ?? true;
                                    @endphp

                                    <div class="product-thumbnail">
                                        @if ($discountPercentage > 0)
                                            <div class="tag-discount">-{{ $discountPercentage }}%</div>
                                        @endif
                                        <a class="image_thumb scale_hover"
                                            href="{{ route('customer.product_detail', $product->id) }}"
                                            title="{{ $product->name }}">
                                            <img width="240" height="240" src="{{ asset($product->image) }}"
                                                alt="{{ $product->name }}" loading="lazy">
                                        </a>
                                        <div class="action">
                                            <button class="btn-add-cart" title="Thêm vào giỏ hàng"
                                                data-product-id="{{ $product->id }}"
                                                {{ $isOutOfStock ? 'disabled' : '' }}>
                                                <svg class="icon" viewBox="0 0 24 24" fill="none">
                                                    <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-8.9-5h7.45c.75 0 1.41-.41 1.75-1.03l3.86-7.01L19.42 4h-.01l-1.1-2H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63z" fill="currentColor"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">
                                            <a class="line-clamp line-clamp-2"
                                                href="{{ route('customer.product_detail', $product->id) }}"
                                                title="{{ $product->name }}">{{ $product->name }}</a>
                                        </h3>
                                        <div class="price-box">
                                            <span class="sale-price">{{ number_format($displayPrice, 0, ',', '.') }}₫</span>
                                            @if ($originPrice > $displayPrice)
                                                <span class="origin-price">{{ number_format($originPrice, 0, ',', '.') }}₫</span>
                                            @endif
                                        </div>
                                        <div class="product-sold">Đã bán: {{ $soldCount }}</div>

                                        @if ($product->available_colors && count($product->available_colors) > 0)
                                            <div class="colors-container">
                                                @foreach($product->available_colors as $color)
                                                    <div class="color-circle" title="{{ $color['name'] }}"
                                                        style="background-color: {{ $color['hex_code'] }}">
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif

                                        @if ($product->available_storages && count($product->available_storages) > 0)
                                            <div class="storage-options">
                                                @foreach($product->available_storages as $storage)
                                                    <span class="storage-badge">{{ $storage }}</span>
                                                @endforeach
                                            </div>
                                        @endif

                                        <div class="rating">
                                            <div class="stars-container">
                                                @php
                                                    $fullStars = floor($product->average_rating);
                                                    $hasHalfStar = $product->average_rating - $fullStars >= 0.5;
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
                                            <span class="rating-number">{{ number_format($product->average_rating, 1) }}</span>
                                            <span class="total-ratings">({{ $product->total_ratings }} đánh giá)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .flash-sale-section {
        margin-bottom: 30px;
    }

    .flash-sale-section .section-header {
        border-bottom: 1px solid #eee;
    }

    .flash-sale-section .section-title {
        color: #d70018;
        font-size: 24px;
        font-weight: 700;
        margin-right: 20px;
    }

    .countdown-timer {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #fff3f3;
        padding: 8px 15px;
        border-radius: 20px;
    }

    .countdown-label {
        font-size: 14px;
        color: #d70018;
    }

    .countdown {
        display: flex;
        gap: 5px;
        font-size: 18px;
        font-weight: 600;
        color: #d70018;
    }

    .flash-sale-navigation {
        display: flex;
        gap: 10px;
    }

    .flash-prev,
    .flash-next {
        width: 40px;
        height: 40px;
        border: none;
        border-radius: 50%;
        background: #f5f5f5;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .flash-prev:hover,
    .flash-next:hover {
        background: #e0e0e0;
    }

    .flash-prev svg,
    .flash-next svg {
        width: 24px;
        height: 24px;
        fill: #666;
    }

    .flash-sale-slider {
        padding: 20px;
    }

    .flash-sale-slider .swiper-slide {
        width: 20%;
    }

    @media (max-width: 1200px) {
        .flash-sale-slider .swiper-slide {
            width: 25%;
        }
    }

    @media (max-width: 992px) {
        .flash-sale-slider .swiper-slide {
            width: 33.333%;
        }
    }

    @media (max-width: 768px) {
        .flash-sale-slider .swiper-slide {
            width: 50%;
        }
    }

    @media (max-width: 576px) {
        .flash-sale-slider .swiper-slide {
            width: 100%;
        }
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Khởi tạo Swiper cho Flash Sale
        var flashSaleSwiper = new Swiper('.flash-sale-slider', {
            slidesPerView: 5,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.flash-next',
                prevEl: '.flash-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                576: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                1200: {
                    slidesPerView: 5,
                    spaceBetween: 20
                }
            }
        });

        // Countdown timer
        const countdown = document.querySelector('.countdown');
        const endTime = parseInt(countdown.dataset.endTime);
        
        function updateCountdown() {
            const now = new Date().getTime();
            const distance = endTime - now;
            
            if (distance < 0) {
                countdown.innerHTML = '<span class="hours">00</span>:<span class="minutes">00</span>:<span class="seconds">00</span>';
                // Khi hết thời gian, reload trang để cập nhật flash sale mới
                window.location.reload();
                return;
            }
            
            const hours = Math.floor(distance / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            countdown.querySelector('.hours').textContent = String(hours).padStart(2, '0');
            countdown.querySelector('.minutes').textContent = String(minutes).padStart(2, '0');
            countdown.querySelector('.seconds').textContent = String(seconds).padStart(2, '0');
        }
        
        // Cập nhật countdown mỗi giây
        updateCountdown();
        const countdownInterval = setInterval(updateCountdown, 1000);

        // Cleanup interval khi component unmount
        window.addEventListener('beforeunload', function() {
            clearInterval(countdownInterval);
        });
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
                                                        src="{{ asset($category->image) }}" alt="{{ $category->name }}">
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
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
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
                    slidesPerView: 1
                },
                500: {
                    slidesPerView: 1
                },
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 2
                },
                991: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            }
        });
    </script>
    <section class="section_1_banner">
        <div class="container">
            <a class="thumb-image-banner" href="{{ route('customer.category', $category->id) }}"
                title="Banner">
                <img width="100%" height="236" class="lazyload"
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
                            <div class="variants product-action" data-id="product-actions-{{ $product->id }}">
                                @php
                                    $firstVariant = $product->variants->first();
                                    $displayPrice = $product->sale_price ?? 0;
                                    $originPrice = $product->origin_price ?? 0;
                                    $discountPercentage = $product->discount_percentage ?? 0;
                                    $soldCount = $product->sold_count ?? 0;
                                    $isOutOfStock = $product->is_out_of_stock ?? true;
                                @endphp

                                <div class="product-thumbnail">
                                    @if ($discountPercentage > 0)
                                        <div class="tag-discount">-{{ $discountPercentage }}%</div>
                                    @endif
                                    <a class="image_thumb scale_hover"
                                        href="{{ route('customer.product_detail', $product->id) }}"
                                        title="{{ $product->name }}">
                                        <img width="130" height="130" src="{{ asset($product->image) }}"
                                            alt="{{ $product->name }}" loading="lazy"
                                            onerror="this.onerror=null;this.src='/path/to/placeholder.jpg';">
                                    </a>
                                    <div class="action">
                                        <button class="btn-add-cart" title="Thêm vào giỏ hàng"
                                            data-product-id="{{ $product->id }}"
                                            {{ $isOutOfStock ? 'disabled' : '' }}>
                                            <svg class="icon" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-8.9-5h7.45c.75 0 1.41-.41 1.75-1.03l3.86-7.01L19.42 4h-.01l-1.1-2H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a class="line-clamp line-clamp-2"
                                            href="{{ route('customer.product_detail', $product->id) }}"
                                            title="{{ $product->name }}">{{ $product->name }}</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="sale-price">{{ number_format($displayPrice) }}₫</span>
                                        @if ($originPrice > $displayPrice)
                                            <span class="origin-price">{{ number_format($originPrice) }}₫</span>
                                        @endif
                                    </div>
                                    <div class="product-sold">Đã bán: {{ $product->sold ?? 0 }}</div>

                                    @if ($product->available_colors && $product->available_colors->count() > 0)
                                        <div class="colors-container">
                                            @foreach ($product->available_colors as $color)
                                                <div class="color-circle" title="{{ $color['name'] }}"
                                                    style="background-color: {{ $color['hex_code'] }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                    @if ($product->available_storages && $product->available_storages->count() > 0)
                                        <div class="storage-options">
                                            @foreach ($product->available_storages as $storage)
                                                <span class="storage-badge">{{ $storage }}</span>
                                            @endforeach
                                        </div>
                                    @endif

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
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="section_1_banner">
        <div class="container">
            <div class="banner-container">
                <a class="thumb-image-banner" href="{{ route('customer.category',15 ) }}" title="iPhone 16 Pro">
                    <img width="635" height="236" class="lazyload"
                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1742954225872"
                        data-src="https://cdn.tgdd.vn/News/1315253/cach-xem-dia-chi-ip-cua-dien-thoai-android-iphone-don-gian-21-800x300-1.jpg"
                        alt="iPhone 16 Pro">
                </a>
                <a class="thumb-image-banner" href="{{ route('customer.category',16) }}" title="iPhone 15">
                    <img width="635" height="236" class="lazyload"
                        src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1742954225872"
                        data-src="https://inventstore.in/wp-content/uploads/2024/09/25-scaled.webp"
                        alt="iPhone 15">
                </a>
            </div>
        </div>
    </section>
    <style>
        .banner-container {
            display: flex;
            gap: 20px;
            width: 100%;
            max-width: 1270px;
            margin: 0 auto;
        }
    
        .banner-container .thumb-image-banner {
            flex: 1;
            width: 50%;
            display: block;
        }
    
        .banner-container .thumb-image-banner img {
            width: 100%;
            height: 236px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
    
        .banner-container .thumb-image-banner:hover img {
            transform: scale(1.03);
        }
    
        @media (max-width: 767.98px) {
            .banner-container {
                flex-direction: column;
                gap: 10px;
            }
    
            .banner-container .thumb-image-banner {
                width: 100%;
            }
        }
    </style>
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
                            <div class="variants product-action" data-id="product-actions-{{ $product->id }}">
                                @php
                                    $firstVariant = $product->variants->first();
                                    $displayPrice = $product->sale_price ?? 0;
                                    $originPrice = $product->origin_price ?? 0;
                                    $discountPercentage = $product->discount_percentage ?? 0;
                                    $soldCount = $product->sold_count ?? 0;
                                    $isOutOfStock = $product->is_out_of_stock ?? true;
                                @endphp

                                <div class="product-thumbnail">
                                    @if ($discountPercentage > 0)
                                        <div class="tag-discount">-{{ $discountPercentage }}%</div>
                                    @endif
                                    <a class="image_thumb scale_hover"
                                        href="{{ route('customer.product_detail', $product->id) }}"
                                        title="{{ $product->name }}">
                                        <img width="130" height="130" src="{{ asset($product->image) }}"
                                            alt="{{ $product->name }}" loading="lazy"
                                            onerror="this.onerror=null;this.src='/path/to/placeholder.jpg';">
                                    </a>
                                    <div class="action">
                                        <button class="btn-add-cart" title="Thêm vào giỏ hàng"
                                            data-product-id="{{ $product->id }}"
                                            {{ $isOutOfStock ? 'disabled' : '' }}>
                                            <svg class="icon" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-8.9-5h7.45c.75 0 1.41-.41 1.75-1.03l3.86-7.01L19.42 4h-.01l-1.1-2H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a class="line-clamp line-clamp-2"
                                            href="{{ route('customer.product_detail', $product->id) }}"
                                            title="{{ $product->name }}">{{ $product->name }}</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="sale-price">{{ number_format($displayPrice) }}₫</span>
                                        @if ($originPrice > $displayPrice)
                                            <span class="origin-price">{{ number_format($originPrice) }}₫</span>
                                        @endif
                                    </div>
                                    <div class="product-sold">Đã bán: {{ $product->sold }}</div>

                                    @if ($product->available_colors && $product->available_colors->count() > 0)
                                        <div class="colors-container">
                                            @foreach ($product->available_colors as $color)
                                                <div class="color-circle" title="{{ $color['name'] }}"
                                                    style="background-color: {{ $color['hex_code'] }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                    @if ($product->available_storages && $product->available_storages->count() > 0)
                                        <div class="storage-options">
                                            @foreach ($product->available_storages as $storage)
                                                <span class="storage-badge">{{ $storage }}</span>
                                            @endforeach
                                        </div>
                                    @endif

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
                            </div>
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
                    <a class="title-name" href="{{ route('customer.news') }}">Tin tức mới nhất</a>
                </h3>
                <div class="row gx-4 gy-4">
                    <div class="col-md-6">
                        @if ($latestNews->first())
                            @php $firstNews = $latestNews->first(); @endphp
                            <div class="item-blog-big">
                                <a class="thumb d-block mb-3" href="{{ route('customer.show', $firstNews->id) }}">
                                    <img class="lazyload" src="{{ asset('default-thumbnail.jpg') }}"
                                        data-src="{{ asset('storage/' . $firstNews->thumbnail_path) }}"
                                        alt="{{ $firstNews->title }}">
                                </a>
                                <div class="block-content">
                                    <h3>
                                        <a class="line-clamp line-clamp-1"
                                            href="{{ route('customer.show', $firstNews->id) }}">
                                            {{ $firstNews->title }}
                                        </a>
                                    </h3>
                                    <div class="time-post">
                                        Ngày đăng:
                                        <span>{{ \Carbon\Carbon::parse($firstNews->published_at)->format('d/m/Y') }}</span>
                                    </div>
                                    <p class="justify line-clamp line-clamp-3">
                                        {{ Str::limit(strip_tags(html_entity_decode($firstNews->content)), 200) }}
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6 news-small-group">
                        @foreach ($latestNews->skip(1)->take(4) as $news)
                            <div class="item-blog-small">
                                <a class="thumb" href="{{ route('customer.show', $news->id) }}">
                                    <img class="lazyload" src="{{ asset('default-thumbnail.jpg') }}"
                                        data-src="{{ asset('storage/' . $news->thumbnail_path) }}"
                                        alt="{{ $news->title }}">
                                </a>
                                <div class="block-content">
                                    <h3>
                                        <a class="line-clamp line-clamp-2"
                                            href="{{ route('customer.show', $news->id) }}">
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
                    <a class="see-more" href="{{ route('customer.news') }}">
                        Xem toàn bộ tin tức
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h306.7L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section_video">
        <div class="container">
            <div class="block-product block-background">
                <h3 class="title-index p-5">
                    <a class="title-name" href="huong-dan-thu-thuat" title="Hướng Dẫn Thủ Thuật">Hướng Dẫn Thủ
                        Thuật</a>
                </h3>
                <div class="row p-5">
                    <a href="/bien-iphone-thanh-may-tao-tieng-on-trang-giai-phap-giup-ban-ngu-ngon-hon"
                        class="item col-lg-3 col-sm-5 col-9"
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
                    <a href="/dieu-khien-robot-hut-bui-bang-apple-home-va-siri" class="item col-lg-3 col-sm-5 col-9"
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
                    <a href="/su-dung-apple-music-hieu-qua-nhat" class="item col-lg-3 col-sm-5 col-9"
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
                        class="item col-lg-3 col-sm-5 col-9"
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
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="popup-video">
        <div class="body-popup"></div>
        <div class="close-popup-video">
            <i class="fa fa-close"></i> Đóng
        </div>
    </div>
    <!-- Toast container -->
    <div class="toast-container"></div>
</div>
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
                $(selector).ajaxChimp(options);
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
                            email.removeClass("error").addClass("valid");
                        } else {
                            email.removeClass("valid").addClass("error");
                            label.removeClass("valid").addClass("error");
                            var index = -1;
                            try {
                                var parts = resp.msg.split(" - ", 2);
                                if (parts[1] === undefined) {
                                    msg = resp.msg;
                                } else {
                                    var i = parseInt(parts[0], 10);
                                    if (i.toString() === parts[0]) {
                                        index = parts[0];
                                        msg = parts[1];
                                    } else {
                                        index = -1;
                                        msg = resp.msg;
                                    }
                                }
                            } catch (e) {
                                index = -1;
                                msg = resp.msg;
                            }
                        }
                        if (settings.language !== "en" && $.ajaxChimp.responses[msg] !==
                            undefined &&
                            $.ajaxChimp.translations && $.ajaxChimp.translations[settings
                                .language] &&
                            $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[
                                msg]]) {
                            msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp
                                .responses[msg]
                            ];
                        }
                        label.html(msg);
                        label.show(2e3);
                        if (settings.callback) {
                            settings.callback(resp);
                        }
                    }
                    var data = {};
                    var dataArray = form.serializeArray();
                    $.each(dataArray, function(index, item) {
                        data[item.name] = item.value;
                    });
                    $.ajax({
                        url: url,
                        data: data,
                        success: successCallback,
                        dataType: "jsonp",
                        error: function(resp, text) {
                            console.log("mailchimp ajax submit error: " + text);
                        }
                    });
                    var submitMsg = "Submitting...";
                    if (settings.language !== "en" && $.ajaxChimp.translations &&
                        $.ajaxChimp.translations[settings.language] &&
                        $.ajaxChimp.translations[settings.language]["submit"]) {
                        submitMsg = $.ajaxChimp.translations[settings.language]["submit"];
                    }
                    label.html(submitMsg).show(2e3);
                    return false;
                });
            });
            return this;
        };
    })(jQuery);
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Xử lý nút Thêm vào giỏ
        document.querySelectorAll('.btn-add-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                addToCart(productId, false);
            });
        });

        // Xử lý nút Mua ngay
        document.querySelectorAll('.btn-buy-now').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                addToCart(productId, true);
            });
        });

        function addToCart(productId, isBuyNow) {
            // Gửi yêu cầu AJAX để thêm vào giỏ hàng
            fetch('{{ route('customer.postCart') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        quantity: 1
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        if (isBuyNow) {
                            window.location.href = data.cart_url || '{{ route('customer.cart') }}';
                        } else {
                            showNotification(data.message || 'Đã thêm sản phẩm vào giỏ hàng!', 'success');
                        }
                    } else {
                        showNotification(data.message || 'Có lỗi xảy ra khi thêm vào giỏ hàng.', 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showNotification('Có lỗi xảy ra khi thêm vào giỏ hàng.', 'error');
                });
        }
    });
</script>
@include('layouts.customer.footer')
