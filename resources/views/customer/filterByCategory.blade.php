@include('layouts.customer.header')
<div class="container my-4">
    @yield('content')
    <div class="container">
        <h2 style="font-size: 30px; font-weight: bold; margin: 30px 0 30px 0; text-align: center;">Danh mục
            {{ $category->name }}</h2>

            <div class="filter-container mb-3">
                <form action="{{ route('customer.category', $category->id) }}" method="GET" class="filter-form">
                    <div class="filter-group">
                        <label for="min_price_select" class="filter-label">Giá từ:</label>
                        <select name="min_price" id="min_price_select" class="filter-select">
                            <option value="0" {{ request('min_price', 0) == 0 ? 'selected' : '' }}>0₫</option>
                            <option value="500000" {{ request('min_price') == 500000 ? 'selected' : '' }}>500.000₫</option>
                            <option value="1000000" {{ request('min_price') == 1000000 ? 'selected' : '' }}>1.000.000₫
                            </option>
                            <option value="5000000" {{ request('min_price') == 5000000 ? 'selected' : '' }}>5.000.000₫
                            </option>
                            <option value="10000000" {{ request('min_price') == 10000000 ? 'selected' : '' }}>10.000.000₫
                            </option>
                        </select>
    
                        <label for="max_price_select" class="filter-label ms-2">đến:</label>
                        <select name="max_price" id="max_price_select" class="filter-select">
                            <option value="50000000" {{ request('max_price', 50000000) == 50000000 ? 'selected' : '' }}>
                                50.000.000₫</option>
                            <option value="10000000" {{ request('max_price') == 10000000 ? 'selected' : '' }}>10.000.000₫
                            </option>
                            <option value="5000000" {{ request('max_price') == 5000000 ? 'selected' : '' }}>5.000.000₫
                            </option>
                            <option value="1000000" {{ request('max_price') == 1000000 ? 'selected' : '' }}>1.000.000₫
                            </option>
                            <option value="500000" {{ request('max_price') == 500000 ? 'selected' : '' }}>500.000₫</option>
                        </select>
    
                        <label for="color" style="margin-left: 20px;" class="filter-label">Màu sắc:</label>
                        <select name="color" id="color" class="filter-select">
                            <option value="">Tất cả</option>
                            @foreach ($color as $item)
                                <option value="{{ $item->name }}" {{ request('color') == $item->name ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
    
                        <label for="storage" style="margin-left: 20px;" class="filter-label">Dung lượng:</label>
                        <select name="storage" id="storage" class="filter-select">
                            <option value="">Tất cả</option>
                            @foreach ($storage as $item)
                                <option value="{{ $item->size }}" {{ request('storage') == $item->size ? 'selected' : '' }}>{{ $item->size }}</option>
                            @endforeach
                        </select>
    
                        <button type="submit" class="filter-btn">Lọc</button>
                    </div>
                </form>
            </div>

        <div class="row d-flex flex-wrap">
            @if ($products->isEmpty())
                <p style="text-align: center; width: 100%;">Không tìm thấy sản phẩm phù hợp.</p>
            @else
                @foreach ($products as $product)
                    <div class="col-6 col-md-4 col-lg-3 mb-4 p-2" style="width: 20%;">
                        <form action="{{ route('customer.postCart') }}" method="post" class="variants product-action"
                            data-cart-form data-id="product-actions-{{ $product->id }}" enctype="multipart/form-data">
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
                                @if ($product->discount_percentage > 0)
                                    <div class="badge bg-danger position-absolute"
                                        style="top: 10px; left: 10px; z-index: 999;">
                                        -{{ $product->discount_percentage }}%
                                    </div>
                                @endif
                                <a class="image_thumb scale_hover"
                                    href="{{ route('customer.product_detail', $product->id) }}"
                                    title="{{ $product->name }}">
                                    <img width="130" height="130" src="{{ asset($product->image) }}"
                                        alt="{{ $product->name }}" loading="lazy"
                                        onerror="this.onerror=null;this.src='/path/to/placeholder.jpg';">
                                </a>
                                <div class="action">
                                    <a href="{{ route('customer.product_detail', $product->id) }}" class="btn-views"
                                        title="Xem chi tiết">
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
                                        <span class="origin-price"
                                            style="color: #999; text-decoration: line-through;">{{ number_format($originPrice) }}₫</span>
                                    @endif
                                </div>
                                @if ($soldCount > 0)
                                    <div class="product-sold">Đã bán: {{ $soldCount }}</div>
                                @endif

                                <!-- Thêm phần hiển thị màu sắc -->
                                @if ($product->available_colors && $product->available_colors->count() > 0)
                                    <div class="d-flex justify-content-start gap-2 mb-2">
                                        @foreach ($product->available_colors as $color)
                                            <span class="color-dot rounded-circle border"
                                                style="width: 20px; height: 20px; background-color: {{ $color['hex_code'] }};"></span>
                                        @endforeach
                                    </div>
                                @endif

                                <!-- Thêm phần hiển thị dung lượng -->
                                @if ($product->available_storages && $product->available_storages->count() > 0)
                                    <div class="d-flex justify-content-start gap-2 mb-2">
                                        @foreach ($product->available_storages as $storage)
                                            <span class="badge bg-light border"
                                                style="color: black;">{{ $storage }}</span>
                                        @endforeach
                                    </div>
                                @endif

                                <!-- Thêm phần hiển thị đánh giá -->
                                <div class="rating">
                                    @if ($product->total_ratings > 0)
                                        <span class="stars">{{ $product->average_rating }} ⭐</span>
                                        <span class="total-ratings">({{ $product->total_ratings }} đánh
                                            giá)</span>
                                    @else
                                        <span class="no-ratings">Chưa có đánh giá</span>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="d-flex justify-content-center mt-4" style="color: white;">
            {{ $products->links() }}
        </div>
    </div>
</div>

@include('layouts.customer.footer')

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

    updateMaxPriceOptions();
    updateMinPriceOptions();
</script>
