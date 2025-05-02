@include('layouts.customer.header')
<div class="container my-4">
    @yield('content')
    <div class="container">
        <div class="block-background">
            <h2 class="p-5" style="font-size: 30px; font-weight: bold;">Kết quả tìm kiếm: {{ $query }}</h2>

            <!-- Bộ lọc sản phẩm - Luôn hiển thị -->
            <div class="filter-container mb-3">
                <form action="{{ route('customer.search') }}" method="POST" class="filter-form">
                    @csrf
                    <input type="hidden" name="query" value="{{ $query }}">
                    <div class="filter-group">
                        <label for="min_price_select" class="filter-label">Giá từ:</label>
                        <select name="min_price" id="min_price_select" class="filter-select">
                            <option value="0" {{ request('min_price', 0) == 0 ? 'selected' : '' }}>0₫</option>
                            <option value="500000" {{ request('min_price') == 500000 ? 'selected' : '' }}>500.000₫</option>
                            <option value="1000000" {{ request('min_price') == 1000000 ? 'selected' : '' }}>1.000.000₫</option>
                            <option value="5000000" {{ request('min_price') == 5000000 ? 'selected' : '' }}>5.000.000₫</option>
                            <option value="10000000" {{ request('min_price') == 10000000 ? 'selected' : '' }}>10.000.000₫</option>
                        </select>
                        
                        <label for="max_price_select" class="filter-label ms-2">đến:</label>
                        <select name="max_price" id="max_price_select" class="filter-select">
                            <option value="50000000" {{ request('max_price', 50000000) == 50000000 ? 'selected' : '' }}>50.000.000₫</option>
                            <option value="10000000" {{ request('max_price') == 10000000 ? 'selected' : '' }}>10.000.000₫</option>
                            <option value="5000000" {{ request('max_price') == 5000000 ? 'selected' : '' }}>5.000.000₫</option>
                            <option value="1000000" {{ request('max_price') == 1000000 ? 'selected' : '' }}>1.000.000₫</option>
                            <option value="500000" {{ request('max_price') == 500000 ? 'selected' : '' }}>500.000₫</option>
                        </select>
                        
                        <button type="submit" class="filter-btn">Lọc</button>
                    </div>
                </form>
            </div>

            @if ($products->isEmpty())
                <div class="no-products-message">
                    <p style="margin-left: 5%; font-size: 20px;">Không tìm thấy sản phẩm nào.</p>
                </div>
            @else
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-6 col-md-4 col-lg-2-4 mb-4">
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
                                        href="{{ route('customer.product_detail', $product->id) }}"
                                        title="{{ $product->name }}">
                                        <img width="130" height="130" src="{{ asset($product->image) }}"
                                            alt="{{ $product->name }}" loading="lazy"
                                            onerror="this.onerror=null;this.src='/path/to/placeholder.jpg';">
                                    </a>
                                    <div class="action">
                                        <a href="{{ route('customer.product_detail', $product->id) }}"
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
                                            href="{{ route('customer.product_detail', $product->id) }}"
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

                <div class="d-flex justify-content-center mt-4" style="color: white;">
                    {{ $products->links() }}
                </div>
            @endif
        </div>
    </div>
</div>

<style>
    /* Thêm class col-lg-2-4 để hiển thị 5 sản phẩm trên một hàng */
    .col-lg-2-4 {
        width: 20%;
        flex: 0 0 20%;
        max-width: 20%;
    }
    
    /* Điều chỉnh responsive cho các màn hình nhỏ hơn */
    @media (max-width: 991.98px) {
        .col-md-4 {
            width: 33.333%;
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }
    }
    
    @media (max-width: 767.98px) {
        .col-6 {
            width: 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }
    }
    
    .filter-container {
        background-color: #f8f9fa;
        padding: 10px 15px;
        border-radius: 5px;
        border: 1px solid #e9ecef;
    }
    
    .filter-form {
        display: flex;
        align-items: center;
    }
    
    .filter-group {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 5px;
    }
    
    .filter-label {
        font-size: 14px;
        margin-bottom: 0;
        color: #495057;
    }
    
    .filter-select {
        padding: 5px 10px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        font-size: 14px;
        background-color: white;
        min-width: 120px;
    }
    
    .filter-btn {
        background-color: #0d6efd;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 5px 15px;
        font-size: 14px;
        cursor: pointer;
        margin-left: 10px;
    }
    
    .filter-btn:hover {
        background-color: #0b5ed7;
    }
    
    .filter-reset {
        color: #6c757d;
        text-decoration: none;
        font-size: 14px;
        margin-left: 10px;
    }
    
    .filter-reset:hover {
        text-decoration: underline;
    }
    
    .no-products-message {
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 5px;
        margin-bottom: 20px;
        text-align: center;
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

<script>
    const minPriceSelect = document.getElementById('min_price_select');
    const maxPriceSelect = document.getElementById('max_price_select');

    function updateMaxPriceOptions() {
        const minPriceValue = parseInt(minPriceSelect.value);
        const maxPriceOptions = maxPriceSelect.querySelectorAll('option');

        maxPriceOptions.forEach(option => {
            const optionValue = parseInt(option.value);
            option.disabled = optionValue <= minPriceValue;
        });

        if (parseInt(maxPriceSelect.value) <= minPriceValue) {
            for (const option of maxPriceOptions) {
                if (!option.disabled) {
                    maxPriceSelect.value = option.value;
                    break;
                }
            }
        }
    }

    function updateMinPriceOptions() {
        const maxPriceValue = parseInt(maxPriceSelect.value);
        const minPriceOptions = minPriceSelect.querySelectorAll('option');

        minPriceOptions.forEach(option => {
            const optionValue = parseInt(option.value);
            option.disabled = optionValue >= maxPriceValue;
        });

        if (parseInt(minPriceSelect.value) >= maxPriceValue) {
            for (const option of minPriceOptions) {
                if (!option.disabled) {
                    minPriceSelect.value = option.value;
                    break;
                }
            }
        }
    }

    minPriceSelect.addEventListener('change', updateMaxPriceOptions);
    maxPriceSelect.addEventListener('change', updateMinPriceOptions);

    // Khởi tạo trạng thái ban đầu
    updateMaxPriceOptions();
    updateMinPriceOptions();
</script>

@include('layouts.customer.footer')
