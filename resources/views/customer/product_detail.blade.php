@include('layouts.customer.header')
<div class="bodywrap" style="background-color: white;">

    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="/"><span>Trang chủ</span></a>
                    <span class="mr_lr" style="display: inline-flex; align-items: center; margin: 0 5px;">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-chevron-right fa-w-10"
                            style="width: 12px; height: 12px; vertical-align: middle;">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                            </path>
                        </svg>
                    </span>

                </li>

                <li>
                    <a class="changeurl" href="{{ url()->current() }}">
                        <span>{{ $product->name }}</span>
                    </a>
                    <span class="mr_lr" style="display: inline-flex; align-items: center; margin: 0 5px;">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-chevron-right fa-w-10"
                            style="width: 12px; height: 12px; vertical-align: middle;">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                            </path>
                        </svg>
                    </span>

                </li>

                <li><strong><span>{{ $product->name }}</span></strong></li>
            </ul>
        </div>
    </section>



    <section class="product layout-product" itemscope="" itemtype="https://schema.org/Product">
        <meta itemprop="category" content="iPhone 16 Pro Max">
        <meta itemprop="url" content="//www.hoangkien.com/iphone-16-pro-max-512gb">
        <meta itemprop="name" content="iPhone 16 Pro Max 512GB">
        <meta itemprop="image"
            content="http://bizweb.dktcdn.net/thumb/grande/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-a373a501-a879-49b7-8036-024e2dead860.png?v=1730447868917">
        <meta itemprop="description" content="">
        <div class="d-none" itemprop="brand" itemtype="https://schema.org/Brand" itemscope="">
            <meta itemprop="name" content="Apple">
        </div>
        <meta itemprop="model" content="">
        <div class="d-none hidden" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
            <div class="inventory_quantity hidden" itemscope="" itemtype="http://schema.org/ItemAvailability">
                <span class="a-stock" itemprop="supersededBy"><span class="a-stock">Liên hệ</span></span>
            </div>
            <link itemprop="availability" href="http://schema.org/InStock">
            <meta itemprop="priceCurrency" content="VND">
            <meta itemprop="price" content="30000000">
            <meta itemprop="url" content="https://www.hoangkien.com/iphone-16-pro-max-512gb">
            <span itemprop="UnitPriceSpecification" itemscope="" itemtype="https://schema.org/Downpayment">
                <meta itemprop="priceType" content="30000000">
            </span>
            <meta itemprop="priceValidUntil" content="2099-01-01">
        </div>
        <div class="d-none hidden" id="https://www.hoangkien.com" itemprop="seller"
            itemtype="http://schema.org/Organization" itemscope="">
            <meta itemprop="name" content="NTPhone">
            <meta itemprop="url" content="https://www.hoangkien.com">

        </div>

        <div class="container">
            <div class="block-background">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title-product" style="text-align: center;">{{ $product->name }}</h1>

                    </div>
                    <div class="product-detail-left product-images col-12 col-md-12 col-lg-6 col-xl-4"
                        style="margin: 0px 0 0 176px;">
                        <div class="product-image-block">
                            <div
                                class="swiper-container gallery-top p-5 swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                <div class="swiper-wrapper" id="lightgallery" style="transition-duration: 0ms;">
                                    @foreach ($product->images as $image)
                                        <!-- Lặp qua các hình ảnh của sản phẩm -->
                                        <a class="swiper-slide product_videobox"
                                            href="{{ asset($image->mini_image) }}" style="width: 343px; opacity: 1;">
                                            <img height="400" width="400" src="{{ asset($image->mini_image) }}"
                                                alt="{{ $product->name }}"
                                                class="img-responsive mx-auto d-block swiper-lazy">
                                        </a>
                                    @endforeach
                                </div>

                                <div class="tag-km">
                                </div>
                            </div>

                            <div
                                class="swiper-container gallery-thumbs p-5 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-thumbs">
                                <div class="swiper-wrapper" style="transition-duration: 0ms;">
                                    @foreach ($product->images as $image)
                                        <div class="swiper-slide" style="width: 75.75px; margin-right: 10px;">
                                            <div class="p-100">
                                                <img height="80" width="80"
                                                    src="{{ asset($image->mini_image) }}" alt="{{ $product->name }}"
                                                    class="swiper-lazy">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev swiper-button-disabled"></div>
                            </div>
                        </div>



                    </div>

                    <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                        <div class="details-pro">

                            <div class="inventory_quantity">
                                <div class="thump-break row">


                                    <div class="mb-break type col-lg-6">
                                        <span class="stock-brand-title">Thương hiệu:</span>
                                        <span class="a-vendor">{{ $product->category->name ?? 'N/A' }}</span>
                                    </div>
                                    <div class="mb-break inventory col-lg-6">
                                        <span class="stock-brand-title">Tình trạng:</span>
                                        <span class="a-stock">Còn hàng</span>
                                    </div>
                                    <div class="mb-break sku-product clearfix col-lg-6">

                                    </div>
                                </div>

                            </div>

                            <form enctype="multipart/form-data" data-cart-form="" id="add-to-cart-form"
                                method="post" class="form-inline">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                <div class="price-box clearfix">
                                    <span class="title-price">Giá bán:</span>
                                    <span class="special-price">
                                        <span class="price product-price current-price" id="display-price">
                                            {{ number_format(optional($variants->first())->price, 0, ',', '.') }}₫
                                        </span>
                                    </span>
                                    <span class="origin_price" id="display-origin-price">
                                        {{ number_format(optional($variants->first())->origin_price, 0, ',', '.') }}₫
                                    </span>
                                </div>

                                <div class="form-product">
                                    <div class="phienban">
                                        <label for="storage">Dung lượng:</label>
                                        <div class="row">
                                            @foreach ($storages as $storage)
                                                <div class="col-lg-4 col-md-3 col-4">
                                                    <a href="javascript:void(0);"
                                                        class="thumb-phienban storage-option"
                                                        data-storage="{{ $storage->storage }}"
                                                        data-price="{{ $storage->price }}"
                                                        data-origin-price="{{ $storage->origin_price }}">
                                                        <span>{{ $storage->storage }}</span>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                        <input type="hidden" name="storage" id="selected-storage"
                                            value="{{ $storages->first()->storage ?? '' }}">
                                    </div>

                                    <div class="select-swatch">
                                        <div class="swatch clearfix" data-option-index="0">
                                            <div class="header">Màu sắc: <span
                                                    class="value-roperties">{{ $product['colors'][0]['value'] ?? '' }}</span>
                                            </div>
                                            <div class="thump-swatch">
                                                @foreach ($colors as $colorGroup)
                                                    <div data-value="{{ $colorGroup['color'] }}"
                                                        class="swatch-element-circle color"
                                                        id="color-{{ \Str::slug($colorGroup['color']) }}">
                                                        <div class="tooltip"
                                                            style="background-color: '{{ $colorGroup['variants']->first()->hax_code ?? '' }}';">
                                                            {{ $colorGroup['color'] }}
                                                        </div>


                                                        <input id="swatch-0-{{ \Str::slug($colorGroup['color']) }}"
                                                            type="radio" name="option-0"
                                                            value="{{ $colorGroup['color'] }}"
                                                            {{ $loop->first ? 'checked' : '' }} class="color-selector"
                                                            data-price="{{ $colorGroup['variants']->first()->price }}"
                                                            data-origin-price="{{ $colorGroup['variants']->first()->origin_price }}">

                                                        <label for="swatch-0-{{ \Str::slug($colorGroup['color']) }}">
                                                            <span class="color-round"
                                                                data-color="{{ $colorGroup['variants']->first()->hax_code ?? '' }}">
                                                                <span>{{ $colorGroup['color'] }}</span>
                                                            </span>

                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    document.querySelectorAll('.color-round').forEach(function(el) {
                                        const color = el.getAttribute('data-color');
                                        if (color) {
                                            el.style.backgroundColor = color;
                                        }
                                    });
                                </script>

                                <style>
                                    /* Đưa nút Liên hệ và Mua ngay lên cùng hàng ngang */
                                    .group-button {
                                        flex-direction: row;
                                        /* Chuyển từ column sang row */
                                        align-items: center;
                                        /* Căn giữa theo chiều dọc */
                                        gap: 10px;
                                        /* Khoảng cách giữa các nút */
                                        margin-left: 0;
                                        /* Xóa margin-left cũ */
                                    }

                                    .btn-buyNow {
                                        padding: 10px 20px;
                                        /* Điều chỉnh padding cho đồng nhất */
                                        white-space: nowrap;
                                        /* Ngăn text xuống dòng */
                                    }

                                    .button-phone {
                                        display: inline-flex;
                                        /* Sử dụng flex để căn giữa nội dung */
                                        align-items: center;
                                        justify-content: center;
                                        padding: 10px 15px;
                                        /* Điều chỉnh padding cho phù hợp */
                                        background-color: #f8f9fa;
                                        /* Thêm màu nền nhẹ nếu muốn */
                                        border: 1px solid #dee2e6;
                                        /* Thêm viền nhẹ nếu muốn */
                                        border-radius: 4px;
                                        /* Bo góc */
                                        text-decoration: none;
                                        color: #333;
                                    }

                                    .button-phone span {
                                        display: inline;
                                        /* Đảm bảo text hiển thị đúng */
                                    }

                                    /* Đưa giá mới và giá cũ lên cùng hàng với Giá bán */
                                    .price-box {
                                        display: flex;
                                        /* Sử dụng flexbox để xếp ngang */
                                        align-items: center;
                                        /* Căn giữa theo chiều dọc */
                                        gap: 10px;
                                        /* Khoảng cách giữa các phần tử */
                                        flex-wrap: wrap;
                                        /* Cho phép xuống dòng nếu không đủ chỗ */
                                    }

                                    .price-box .title-price {
                                        margin-right: 5px;
                                        /* Khoảng cách nhỏ giữa Giá bán và giá */
                                        font-weight: 600;
                                        /* Làm chữ Giá bán đậm hơn */
                                    }

                                    .special-price {
                                        color: #dc3545;
                                        /* Màu đỏ cho giá mới - có thể thay đổi */
                                        font-size: 1.2em;
                                        /* Kích thước lớn hơn một chút */
                                    }

                                    .origin_price {
                                        text-decoration: line-through;
                                        /* Gạch ngang giá cũ */
                                        color: #6c757d;
                                        /* Màu xám cho giá cũ */
                                        font-size: 0.9em;
                                        /* Nhỏ hơn giá mới */
                                    }

                                    /* Điều chỉnh responsive nếu cần */
                                    @media (max-width: 768px) {
                                        .group-button {
                                            flex-direction: column;
                                            /* Trở về column trên mobile */
                                            align-items: stretch;
                                        }

                                        .price-box {
                                            flex-direction: column;
                                            /* Giá xếp dọc trên mobile */
                                            align-items: flex-start;
                                        }
                                    }

                                    /* Refined gallery borders */
                                    .gallery-top {
                                        border: 1px solid #eee;
                                        border-radius: 4px;
                                        margin-bottom: 10px;
                                        /* Add some space below main image */
                                    }

                                    .gallery-thumbs {
                                        border: 1px solid #eee;
                                        border-radius: 4px;
                                        padding-top: 5px !important;
                                        /* Adjust padding */
                                        padding-bottom: 5px !important;
                                    }

                                    .gallery-thumbs .swiper-slide {
                                        border: 1px solid transparent;
                                        /* Add border for spacing */
                                        border-radius: 4px;
                                        padding: 2px;
                                        /* Padding inside border */
                                        cursor: pointer;
                                    }

                                    .gallery-thumbs .swiper-slide-thumb-active {
                                        border-color: #007bff;
                                        /* Highlight active thumb */
                                    }

                                    .gallery-thumbs img {
                                        border-radius: 3px;
                                    }

                                    /* General spacing */
                                    .details-pro {
                                        padding-left: 15px;
                                        /* Add some padding to separate from image */
                                    }

                                    .price-box {
                                        margin-bottom: 15px;
                                        /* Space below price */
                                    }

                                    .form-product {
                                        margin-bottom: 15px;
                                        /* Space below options */
                                    }

                                    /* Storage options refinement */
                                    .phienban {
                                        margin-bottom: 15px;
                                        /* Space below storage */
                                    }

                                    .phienban label {
                                        display: block;
                                        margin-bottom: 8px;
                                        font-weight: 600;
                                    }

                                    .storage-option {
                                        display: block;
                                        /* Make them block elements */
                                        text-align: center;
                                        border: 1px solid #ccc;
                                        padding: 8px 5px;
                                        /* Adjust padding */
                                        margin-bottom: 10px;
                                        /* Space between storage options */
                                        border-radius: 4px;
                                        font-size: 0.9em;
                                        /* Slightly smaller font */
                                        transition: all 0.2s ease-in-out;
                                        background-color: #fff;
                                        color: #333;
                                        text-decoration: none;
                                    }

                                    .storage-option:hover {
                                        border-color: #999;
                                        background-color: #f9f9f9;
                                    }

                                    .storage-option.selected {
                                        border-color: #007bff;
                                        background-color: #e7f3ff;
                                        color: #0056b3;
                                        font-weight: 600;
                                        box-shadow: 0 0 0 1px #007bff;
                                        /* Subtle glow */
                                    }

                                    /* Remove extra col padding for storage */
                                    .phienban .row .col-lg-4,
                                    .phienban .row .col-md-3,
                                    .phienban .row .col-4 {
                                        padding-left: 5px;
                                        padding-right: 5px;
                                    }


                                    /* Color swatches refinement */
                                    .swatch .header {
                                        margin-bottom: 8px;
                                        font-weight: 600;
                                    }

                                    .swatch-element-circle {
                                        border-radius: 50%;
                                        overflow: visible;
                                        /* Allow focus ring */
                                        display: inline-block;
                                        margin-right: 5px;
                                        /* Adjust spacing */
                                        margin-bottom: 5px;
                                        padding: 0;
                                        /* Remove padding */
                                        position: relative;
                                        /* For positioning focus */
                                    }

                                    .color-round {
                                        width: 32px;
                                        /* Smaller size */
                                        height: 32px;
                                        /* Smaller size */
                                        display: flex;
                                        /* Center potential inner elements */
                                        align-items: center;
                                        justify-content: center;
                                        border-radius: 50%;
                                        border: 1px solid #ccc;
                                        cursor: pointer;
                                        transition: transform 0.2s ease, border-color 0.2s ease;
                                        background-clip: padding-box;
                                        /* Ensure background respects border */
                                        position: relative;
                                        /* For tooltip positioning */
                                        overflow: hidden;
                                        /* Hide overflowing background color */
                                    }

                                    .color-round span {
                                        /* Hide the text inside */
                                        display: none;
                                    }


                                    .color-round:hover {
                                        transform: scale(1.1);
                                        border-color: #888;
                                    }

                                    .tooltip {
                                        /* Redesign tooltip */
                                        position: absolute;
                                        bottom: 100%;
                                        /* Position above the circle */
                                        left: 50%;
                                        transform: translateX(-50%) translateY(-5px);
                                        /* Center and add gap */
                                        background-color: rgba(0, 0, 0, 0.75);
                                        color: white;
                                        padding: 3px 8px;
                                        border-radius: 4px;
                                        font-size: 12px;
                                        white-space: nowrap;
                                        opacity: 0;
                                        /* Hidden by default */
                                        visibility: hidden;
                                        transition: opacity 0.2s ease, visibility 0.2s ease;
                                        z-index: 10;
                                    }

                                    .swatch-element-circle:hover .tooltip {
                                        opacity: 1;
                                        visibility: visible;
                                    }


                                    .color-selector {
                                        display: none;
                                    }

                                    .swatch-element-circle input:checked+label .color-round {
                                        border: 2px solid #007bff;
                                        /* Use theme color for selected */
                                        transform: scale(1.05);
                                        /* Slightly larger when selected */
                                        box-shadow: 0 0 0 2px white, 0 0 0 4px #007bff;
                                        /* Outline effect */
                                    }

                                    /* Ensure background color is applied */
                                    .swatch-element-circle label .color-round[data-color] {
                                        background-color: attr(data-color);
                                    }


                                    /* Refine quantity and buttons */
                                    .flex-quantity {
                                        display: flex;
                                        align-items: center;
                                        gap: 15px;
                                        /* Space between quantity and buttons */
                                        margin-top: 15px;
                                        /* Space above this section */
                                        position: relative;
                                        /* For error message positioning */
                                    }

                                    .custom-btn-number {
                                        margin-bottom: 0;
                                        /* Remove margin if flex handles spacing */
                                    }

                                    .input_number_product {
                                        width: 100px;
                                        /* Adjust width */
                                        margin-left: 5px;
                                        /* Space after label */
                                    }

                                    #quantity-error {
                                        position: absolute;
                                        bottom: -20px;
                                        /* Position below the input */
                                        left: 70px;
                                        /* Align with input start */
                                        font-size: 0.8em;
                                        white-space: nowrap;
                                    }

                                    .button_actions,
                                    .group-button {
                                        margin-top: 0;
                                        /* Remove top margin if flex handles spacing */
                                    }

                                    .button_actions .btn_add_cart {
                                        padding-top: 12px;
                                        /* Adjust padding for better vertical alignment */
                                        padding-bottom: 12px;
                                    }

                                    .btn-buyNow {
                                        padding: 12px 20px;
                                        /* Match button height */
                                    }

                                    .group-button {
                                        display: flex;
                                        flex-direction: column;
                                        /* Stack buttons */
                                        gap: 10px;
                                
                                    }

                                    .button-phone {
                                        font-size: 0.85em;
                                        /* Make contact smaller */
                                        text-align: center;
                                    }
									.layout-product .input_number_product .btn_num svg{
										width: 33px;
										height: 20px;
									}
                                </style>
                                <script>
                                    let currentStock = 0; // Variable to store current variant stock

                                    jQuery(document).ready(function($) {
                                        // --- Default Variant Selection ---
                                        const firstStorageOption = $('.storage-option').first();
                                        if (firstStorageOption.length) {
                                            firstStorageOption.addClass('selected');
                                            $('#selected-storage').val(firstStorageOption.data('storage'));
                                        }
                                        const firstColorOption = $('.color-selector').first();
                                        if (firstColorOption.length && !$('.color-selector:checked').length) {
                                            firstColorOption.prop('checked', true);
                                        }
                                        const initialStorage = $('#selected-storage').val();
                                        const initialColor = $('.color-selector:checked').val();
                                        const productId = '{{ $product->id }}';
                                        if (productId && initialStorage && initialColor) {
                                            fetchProductPrice(productId, initialStorage, initialColor);
                                        }
                                        // --- End Default Variant Selection ---

                                        // Event listeners for variants
                                        $('.color-selector').on('change', function() {
                                            var selectedStorage = $('#selected-storage').val();
                                            var selectedColor = $(this).val();
                                            fetchProductPrice(productId, selectedStorage, selectedColor);
                                            updateUrl(productId, selectedStorage, selectedColor);
                                            $('.value-roperties').text($(this).siblings('label').find('.tooltip').text().trim());
                                        });
                                        $('.storage-option').on('click', function() {
                                            var selectedStorage = $(this).data('storage');
                                            var selectedColor = $('.color-selector:checked').val();
                                            $('#selected-storage').val(selectedStorage);
                                            $('.storage-option').removeClass('selected');
                                            $(this).addClass('selected');
                                            fetchProductPrice(productId, selectedStorage, selectedColor);
                                            updateUrl(productId, selectedStorage, selectedColor);
                                        });

                                        // Initialize color label text
                                        const checkedColorLabel = $('.color-selector:checked').siblings('label').find('.tooltip').text().trim();
                                        if (checkedColorLabel) {
                                            $('.value-roperties').text(checkedColorLabel);
                                        }

                                        // --- Quantity Input Handling ---
                                        const quantityInput = $('#qtym');
                                        const btnMinus = $('.num_1');
                                        const btnPlus = $('.num_2');

                                        quantityInput.on('input change blur', handleQuantityChange);

                                        btnMinus.on('click', function() {
                                            let currentQuantity = parseInt(quantityInput.val());
                                            if (!isNaN(currentQuantity) && currentQuantity > 1) {
                                                quantityInput.val(currentQuantity - 1);
                                                handleQuantityChange();
                                            }
                                        });

                                        btnPlus.on('click', function() {
                                            let currentQuantity = parseInt(quantityInput.val());
                                            if (!isNaN(currentQuantity)) {
                                                const maxAllowed = Math.min(5, currentStock > 0 ? currentStock : 5);
                                                if (currentQuantity < maxAllowed) {
                                                    quantityInput.val(currentQuantity + 1);
                                                    handleQuantityChange();
                                                }
                                            }
                                        });
                                        // Initial check on load
                                        handleQuantityChange();
                                        // --- End Quantity Input Handling ---
                                    });

                                    // Function to update display price
                                    function updatePrice(price, originPrice) {
                                        const priceElement = $('.current-price');
                                        const originPriceElement = $('.origin_price');
                                        if (price !== null && price !== undefined) {
                                            priceElement.text(new Intl.NumberFormat('vi-VN').format(price) + '₫');
                                        } else {
                                            priceElement.text('Liên hệ');
                                        }
                                        if (originPrice && originPrice > price) {
                                            originPriceElement.text(new Intl.NumberFormat('vi-VN').format(originPrice) + '₫').show();
                                        } else {
                                            originPriceElement.text('').hide();
                                        }
                                    }

                                    // Function to update stock status and buttons
                                    function updateStockAndButtons(available, stock) {
                                        currentStock = stock; // Store current stock
                                        const stockStatusElement = $('.inventory .a-stock');
                                        const addButton = $('.btn_add_cart');
                                        const buyButton = $('.btn-buyNow');
                                        const quantityInput = $('#qtym');
                                        const quantityControls = $('.input_number_product button');
                                        const quantityLabel = $('.custom-btn-number .sl');
                                        const quantityWrapper = $('.input_number_product');

                                        quantityInput.val(1); // Reset quantity to 1 when variant changes

                                        if (available && stock > 0) {
                                            stockStatusElement.text('Còn ' + stock + ' sản phẩm').removeClass('a-stock-out'); // Show stock
                                            quantityInput.prop('disabled', false);
                                            quantityControls.prop('disabled', false);
                                            quantityLabel.show();
                                            quantityWrapper.show();
                                            addButton.prop('disabled', false).removeClass('disabled btn-soldout');
                                            addButton.find('.txt-main').text('Thêm vào giỏ');
                                            buyButton.prop('disabled', false).removeClass('disabled');
                                            handleQuantityChange(); // Re-validate quantity 1 against new stock
                                        } else {
                                            const message = stock === 0 ? 'Hết hàng' : 'Ngừng kinh doanh';
                                            stockStatusElement.text(message).addClass('a-stock-out');
                                            quantityInput.prop('disabled', true).val(1);
                                            quantityControls.prop('disabled', true);
                                            quantityLabel.hide();
                                            quantityWrapper.hide();
                                            addButton.prop('disabled', true).addClass('disabled btn-soldout');
                                            addButton.find('.txt-main').text('Hết hàng');
                                            buyButton.prop('disabled', true).addClass('disabled');
                                            showQuantityError(null); // Clear any previous error
                                        }
                                    }

                                    // Function to fetch product price and details from API
                                    function fetchProductPrice(productId, storage, color) {
                                        console.log(`Fetching price for: Product=${productId}, Storage=${storage}, Color=${color}`);
                                        jQuery.ajax({
                                            url: '/api/get-price',
                                            type: 'GET',
                                            data: {
                                                product_id: productId,
                                                storage: storage,
                                                color: color
                                            },
                                            success: function(response) {
                                                console.log('API Response:', response);
                                                if (response && response.success) {
                                                    updatePrice(response.price, response.origin_price);
                                                    updateStockAndButtons(response.available, response.stock);
                                                } else {
                                                    updatePrice(null, null);
                                                    updateStockAndButtons(false, response.stock !== undefined ? response.stock : 0);
                                                    console.log('Variant not available or error:', response.message);
                                                }
                                            },
                                            error: function(jqXHR, textStatus, errorThrown) {
                                                console.error('API Error:', textStatus, errorThrown, jqXHR.responseText);
                                                updatePrice(null, null);
                                                updateStockAndButtons(false, 0);
                                                $('.inventory .a-stock').text('Không tìm thấy');
                                            }
                                        });
                                    }

                                    // Function to show/hide quantity error messages
                                    function showQuantityError(message) {
                                        const errorElement = $('#quantity-error');
                                        if (message) {
                                            errorElement.text(message).show();
                                        } else {
                                            errorElement.hide().text('');
                                        }
                                    }

                                    // Function to handle quantity changes and enforce limits
                                    function handleQuantityChange() {
                                        const quantityInput = $('#qtym');
                                        let currentQuantity = parseInt(quantityInput.val());
                                        const maxQuantity = 5;
                                        const stock = currentStock;
                                        const addButton = $('.btn_add_cart');
                                        const buyButton = $('.btn-buyNow');
                                        const btnMinus = $('.num_1');
                                        const btnPlus = $('.num_2');

                                        showQuantityError(null); // Clear previous errors

                                        if (isNaN(currentQuantity) || currentQuantity < 1) {
                                            currentQuantity = 1;
                                            quantityInput.val(1);
                                        }

                                        let updatedQuantity = currentQuantity;
                                        let limitReached = false;

                                        if (updatedQuantity > maxQuantity) {
                                            updatedQuantity = maxQuantity;
                                            showQuantityError('Bạn chỉ có thể mua tối đa 5 sản phẩm.');
                                            limitReached = true;
                                        }

                                        if (stock > 0 && updatedQuantity > stock) {
                                            updatedQuantity = stock;
                                            showQuantityError('Số lượng chọn vượt quá số lượng tồn kho (' + stock + ').');
                                            limitReached = true;
                                        }

                                        if (updatedQuantity !== currentQuantity) {
                                            quantityInput.val(updatedQuantity);
                                        }
                                        currentQuantity = updatedQuantity;

                                        $('#selectedQuantity').val(currentQuantity);

                                        // Enable/Disable Add/Buy buttons based only on current quantity vs stock (if variant is available)
                                        const isGenerallyAvailable = !$('.inventory .a-stock').hasClass('a-stock-out');
                                        const canPurchaseQuantity = (stock > 0 && currentQuantity <= stock);
                                        const shouldBeEnabled = isGenerallyAvailable && canPurchaseQuantity;

                                        addButton.prop('disabled', !shouldBeEnabled);
                                        buyButton.prop('disabled', !shouldBeEnabled);
                                        if (!shouldBeEnabled) {
                                            addButton.addClass('disabled');
                                            buyButton.addClass('disabled');
                                        } else {
                                            addButton.removeClass('disabled');
                                            buyButton.removeClass('disabled');
                                        }

                                        // Enable/Disable +/- buttons
                                        btnMinus.prop('disabled', currentQuantity <= 1);
                                        btnPlus.prop('disabled', currentQuantity >= maxQuantity || (stock > 0 && currentQuantity >= stock));
                                    }

                                    // Function to update browser URL
                                    function updateUrl(productId, storage, color) {
                                        if (history.replaceState) {
                                            var newUrl = '/customer/product_detail/' + productId + '?storage=' + encodeURIComponent(storage) +
                                                '&color=' + encodeURIComponent(color);
                                            window.history.replaceState({
                                                path: newUrl
                                            }, '', newUrl);
                                        }
                                    }
                                </script>


                            </form>
                            <div class="clearfix form-group">
                                <div class="flex-quantity">
                                    <div class="custom custom-btn-number show">
                                        <label class="sl section">Số lượng:</label>
                                        <div class="input_number_product form-control">
                                            {{-- Remove onclick handlers --}}
                                            <button class="btn_num num_1 button button_qty" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                    <path
                                                        d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                                </svg>
                                            </button>
                                            <input type="text" id="qtym" name="quantity_display"
                                                value="1" maxlength="2" class="form-control prd_quantity"
                                                inputmode="numeric" pattern="[0-9]*"
                                                onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                            <button class="btn_num num_2 button button_qty" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                </svg>
                                            </button>
                                        </div>

                                        <small id="quantity-error"
                                            style="color: red; display: none; margin-left: 5px; position: absolute; bottom: -18px; left: 60px; white-space: nowrap;"></small>
                                    </div>

                                    <!-- Form mua hàng chung -->
                                    <form id="productForm" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}"
                                            id="product_id">
                                        {{-- Initial values will be updated by JS --}}
                                        <input type="hidden" name="color" id="selectedColor" value="">
                                        <input type="hidden" name="storage" id="selectedStorage" value="">
                                        <input type="hidden" name="quantity" id="selectedQuantity" value="1">
                                        {{-- Add action_type hidden field --}}
                                        <input type="hidden" name="action_type" id="action_type"
                                            value="add_to_cart">

                                        <div class="btn-mua button_actions clearfix">
                                            {{-- Nút Thêm vào giỏ --}}
                                            <button type="button" title="Thêm vào giỏ"
                                                class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart"
                                                onclick="submitForm('{{ route('customer.postCart') }}', 'add_to_cart')">
                                                {{-- Pass action type --}}
                                                <span class="txt-main text_1">Thêm vào giỏ</span>
                                                <span class="text_2">Giao hàng tận nơi miễn phí</span>
                                            </button>
                                        </div>

                                        <div class="group-button">
                                            {{-- Nút Mua ngay --}}
                                            <button type="button" style="width: 100%" class="btn-buyNow" {{-- Update onclick to use the new route and action type --}}
                                                onclick="submitForm('{{ route('customer.buyNowDirect') }}', 'buy_now_direct')">
                                                Mua ngay
                                            </button>


                                        </div>
                                    </form>
                                </div>
                            </div>

                            <script>
                                // Function to show toast messages
                                function showToast(message, type = 'info') {
                                    // Remove existing toasts first to avoid stacking
                                    $('.toast').remove();

                                    const toastId = 'toast-' + Date.now();
                                    const toastHtml = `
                                        <div id="${toastId}" class="toast align-items-center text-white bg-${type === 'success' ? 'success' : (type === 'error' ? 'danger' : 'info')} border-0 position-fixed top-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true" style="z-index: 1100;">
                                          <div class="d-flex">
                                            <div class="toast-body">
                                              ${message}
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                          </div>
                                        </div>
                                    `;
                                    $('body').append(toastHtml);
                                    const toastElement = document.getElementById(toastId);
                                    const toast = new bootstrap.Toast(toastElement, {
                                        delay: 3000 // Auto hide after 3 seconds
                                    });
                                    toast.show();
                                }

                                // Updates hidden form fields before submission
                                function updateValues() {
                                    var selectedStorage = jQuery('#selected-storage').val(); // Get from hidden input now
                                    var selectedColor = jQuery('.color-selector:checked').val();
                                    var selectedQuantity = jQuery('#qtym').val();

                                    document.getElementById('selectedStorage').value = selectedStorage || ''; // Ensure value exists
                                    document.getElementById('selectedColor').value = selectedColor || ''; // Ensure value exists
                                    document.getElementById('selectedQuantity').value = selectedQuantity || '1';
                                    console.log("Updated hidden fields:", {
                                        storage: selectedStorage,
                                        color: selectedColor,
                                        quantity: selectedQuantity
                                    }); // Debug log
                                }

                                // Submits the form to the specified action URL using AJAX
                                function submitForm(action, actionType = 'add_to_cart') {
                                    const clickedButton = event ? event.currentTarget : null;
                                    if (clickedButton && $(clickedButton).prop('disabled')) {
                                        console.warn("Button already disabled, preventing double submission.");
                                        return;
                                    }

                                    updateValues(); // Ensure latest values are set

                                    const productId = document.getElementById('product_id').value;
                                    const selectedColor = document.getElementById('selectedColor').value;
                                    const selectedStorage = document.getElementById('selectedStorage').value;
                                    const selectedQuantity = document.getElementById('selectedQuantity').value;
                                    const csrfToken = $('input[name="_token"]').val(); // Get CSRF token

                                    // Basic check if variant options are selected
                                    if (!selectedColor || !selectedStorage) {
                                        ErrorNoti('Vui lòng chọn Màu sắc và Dung lượng.');
                                        console.error("Color or Storage not selected.");
                                        return; // Stop submission
                                    }

                                    console.log("Submitting AJAX to:", action);
                                    console.log("Action Type:", actionType);
                                    console.log("Form Data:", {
                                        product_id: productId,
                                        color: selectedColor,
                                        storage: selectedStorage,
                                        quantity: selectedQuantity
                                    });

                                    // Disable button during AJAX request
                                    if (clickedButton) {
                                        const originalText = $(clickedButton).find('.txt-main').length ? $(clickedButton).find('.txt-main').text() :
                                            $(clickedButton).text();
                                        $(clickedButton).prop('disabled', true);
                                        if ($(clickedButton).find('.txt-main').length) $(clickedButton).find('.txt-main').text('Đang xử lý...');
                                        else $(clickedButton).text('Đang xử lý...');
                                    }

                                    $.ajax({
                                        url: action,
                                        method: 'POST',
                                        data: {
                                            _token: csrfToken,
                                            product_id: productId,
                                            color: selectedColor,
                                            storage: selectedStorage,
                                            quantity: selectedQuantity
                                        },
                                        success: function(response) {
                                            console.log('AJAX Success:', response);
                                            if (actionType === 'buy_now_direct') {
                                                if (response.success && response.redirect_url) {
                                                    window.location.href = response.redirect_url;
                                                    return; // Stop further processing on redirect
                                                } else {
                                                    ErrorNoti(response.message || 'Không thể mua ngay. Vui lòng thử lại.');
                                                }
                                            } else { // Handle add_to_cart
                                                if (response.success) {
                                                    SuccessNoti('Đã thêm sản phẩm vào giỏ hàng.');
                                                    // Optional: Update cart count
                                                    // if (response.cartCount) { $('.count_item_pr').text(response.cartCount); }
                                                } else {
                                                    if (response.exists) {
                                                        // Use SuccessNoti for 'exists' message to match cart page style
                                                        SuccessNoti(response.message || 'Sản phẩm này đã có trong giỏ hàng.');
                                                    } else {
                                                        // Use ErrorNoti for other add to cart failures, provide fallback message
                                                        ErrorNoti(response.message || 'Không thể thêm vào giỏ hàng.');
                                                    }
                                                }
                                            }
                                        },
                                        error: function(jqXHR, textStatus, errorThrown) {
                                            console.error('AJAX Error:', textStatus, errorThrown, jqXHR.responseText);
                                            let errorMessage = 'Có lỗi kết nối hoặc lỗi máy chủ. Vui lòng thử lại.'; // More specific default error
                                            // Try to get a more specific error from the response, if available
                                            if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                                                errorMessage = jqXHR.responseJSON.message;
                                            } else if (jqXHR.responseText) {
                                                // Fallback to raw response text if JSON parsing fails but text exists
                                                // You might want to limit its length or format it
                                                // errorMessage = jqXHR.responseText.substring(0, 100) + "..."; 
                                            }
                                            ErrorNoti(errorMessage); // Always show an error message
                                        },
                                        complete: function() {
                                            // Restore button text and state unless redirecting
                                            if (actionType !== 'buy_now_direct') { // Don't restore if buy now is redirecting
                                                $button.prop('disabled', false).html(originalButtonText);
                                            }
                                        }
                                    });
                                }
                            </script>



                        </div>
                    </div>

                    {{-- <div class="col-xl-3 col-lg-12 col-md-12 col-12 content-pro">
                        {{-- Nội dung cũ đã được xóa --}}

                    {{-- Khối đánh giá/bình luận đã được di chuyển xuống dưới --}}
                    {{-- </div>  --}}
                </div>
            </div>
        </div>

    </section>


    {{-- Chèn khối đánh giá/bình luận vào đây --}}
    <div class="container review-comment-container" style="margin-top: 30px; margin-bottom: 30px;">
        {{-- Thêm margin để tạo khoảng cách --}}
        <div class="row">
            <div class="col-12">
                <div class="block-background review-comment-section"
                    style="padding: 15px; border: 1px solid #e0e0e0; border-radius: 5px;height: 310px;">
                    <div class="product-tab e-tabs not-dqtab" id="tab-reviews-comments">
                        <ul class="tabs tabs-title clearfix"
                            style="margin-bottom: 15px; padding-left: 0; list-style: none; border-bottom: 1px solid #dee2e6; display: flex;">
                            <li class="tab-link active" data-tab="#tab-reviews"
                                style="margin-bottom: -1px; margin-right: 5px;">
                                <h3 class="tab-title-heading"
                                    style="font-size: 0.95rem; padding: 10px 15px; margin: 0; cursor: pointer; border: 1px solid transparent; border-top-left-radius: .25rem; border-top-right-radius: .25rem; display: block;">
                                    Đánh giá</h3>
                            </li>
                            <li class="tab-link" data-tab="#tab-comments" style="margin-right: 5px;">
                                <h3 class="tab-title-heading"
                                    style="font-size: 0.95rem; padding: 10px 15px; margin: 0; cursor: pointer; border: 1px solid transparent; border-top-left-radius: .25rem; border-top-right-radius: .25rem; display: block;">
                                    Bình luận</h3>
                            </li>
                        </ul>
                        <div class="tab-float" style="height: 440px;">
                            {{-- Tab Đánh giá --}}
                            <div id="tab-reviews" class="tab-content active content_extab">
                                <div class="rte" style="max-height: 441px; overflow-y: auto; padding-right: 10px;">
                                    {{-- Adjust max-height and ensure scroll --}}
                                    <h5>Đánh giá của khách hàng</h5>
                                    @if (isset($ratings) && !$ratings->isEmpty())
                                        @foreach ($ratings as $rating)
                                            <div class="review-item"
                                                style="margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 10px;">
                                                <p style="margin-bottom: 5px;"><strong
                                                        style="font-weight: 600;">{{ $rating->user->fullname ?? 'Khách' }}</strong>
                                                    - <small style="color: #6c757d;">
                                                        {{ str_repeat('⭐', $rating->rating) }}</small>
                                                </p>
                                                <p style="margin-bottom: 0; font-size: 1rem;">{{ $rating->review }}
                                                </p>
                                                <p style="margin-bottom: 5px; color: #ffc107;">
                                                    {{ $rating->created_at->format('d/m/Y H:i') }} </p>

                                            </div>
                                        @endforeach
                                    @else
                                        <p>Chưa có đánh giá nào cho sản phẩm này.</p>
                                    @endif

                                    {{-- Form gửi đánh giá --}}
                                    @auth
                                        @if ($canRateProduct)
                                            <form action="{{ route('customer.ratings.store') }}" method="POST"
                                                style="margin-top: 20px; padding-top: 15px; border-top: 1px solid #eee;">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                                <div class="form-group">
                                                    <label for="rating"
                                                        style="margin-bottom: .5rem; font-weight: 500;">Đánh giá
                                                        (sao)
                                                        :</label>
                                                    <select name="rating" id="rating"
                                                        class="form-control form-control-sm" required
                                                        style="width: auto; display: inline-block; margin-left: 5px; padding: .25rem .5rem; font-size: .875rem; line-height: 1.5; border-radius: .2rem;">
                                                        <option value="5">5 ⭐</option>
                                                        <option value="4">4 ⭐</option>
                                                        <option value="3">3 ⭐</option>
                                                        <option value="2">2 ⭐</option>
                                                        <option value="1">1 ⭐</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="review"
                                                        style="margin-bottom: .5rem; font-weight: 500;"></label>
                                                    <textarea name="review" id="review" rows="3" class="form-control form-control-sm" required
                                                        style="padding: .25rem .5rem; font-size: .875rem; line-height: 1.5; border-radius: .2rem; width: 100%;"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-sm"
                                                    style="padding: .25rem .5rem; font-size: .875rem; line-height: 1.5; border-radius: .2rem;">Gửi
                                                    đánh giá</button>
                                            </form>
                                        @else
                                            <p style="margin-top: 20px; font-size: 0.9rem; color: #6c757d;">Bạn cần mua sản
                                                phẩm này để viết đánh giá.</p>
                                        @endif
                                    @else
                                        <p style="margin-top: 20px; font-size: 0.9rem;">Vui lòng <a
                                                href="{{ route('login') }}">đăng nhập</a> để viết đánh giá.</p>
                                    @endauth
                                </div>
                            </div>

                            {{-- Tab Bình luận --}}
                            <div id="tab-comments" class="tab-content content_extab">
                                <div class="rte">
                                    @if (isset($comments) && !$comments->isEmpty())
                                        <div class="comments-container">
                                            @foreach ($comments as $comment)
                                                <div class="comment-item">
                                                    <p>
                                                        <strong>{{ $comment->user->fullname ?? 'Khách' }}</strong> -
                                                        <small>
                                                            @if ($comment->created_at)
                                                                {{ $comment->created_at->format('d/m/Y H:i') }}
                                                            @else
                                                                (không có ngày)
                                                            @endif
                                                        </small>
                                                    </p>
                                                    <p>{{ $comment->content }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <p>Chưa có bình luận nào cho sản phẩm này.</p>
                                    @endif

                                    {{-- Form bình luận giữ nguyên --}}
                                    @auth
                                        <form action="{{ route('customer.comments.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                                            <div class="form-group">
                                                <label for="comment_content"></label>
                                                <textarea name="content" id="comment_content" rows="3" class="form-control form-control-sm" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm">Gửi bình luận</button>
                                        </form>
                                    @else
                                        <p>Vui lòng <a href="{{ route('login') }}">đăng nhập</a> để viết bình luận.</p>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Style cho section bình luận */
        .review-comment-section {
            padding: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            height: 310px;
            overflow: hidden;
            /* Ẩn phần thừa */
        }

        .tab-content {
            height: 100%;
        }

        .rte {
            max-height: 441px;
            overflow-y: hidden;
            /* Tắt scroll dọc */
            padding-right: 10px;
        }

        /* Container cho danh sách bình luận */
        .comments-container {
            display: flex;
            flex-wrap: nowrap;
            /* Không xuống dòng */
            transition: transform 0.5s ease-in-out;
            /* Hiệu ứng chuyển động mượt */
            height: 97px;
            /* Chiều cao cố định cho bình luận */
            align-items: center;
            justify-content: center;
        }

        /* Mỗi item bình luận */
        .comment-item {
            flex: 0 0 33.33%;
            max-width: 33.33%;
            margin: 0 10px;
            /* padding: 15px; */
            background: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            height: 129px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Style cho tên và thời gian */
        .comment-item p:first-child {
            margin-bottom: 10px;
            font-size: 0.95rem;
        }

        .comment-item strong {
            color: #343a40;
            font-weight: 600;
        }

        .comment-item small {
            color: #6c757d;
            font-size: 0.85rem;
        }

        /* Style cho nội dung bình luận */
        .comment-item p:last-child {
            margin: 0;
            font-size: 0.9rem;
            color: #495057;
            overflow: hidden;
            text-overflow: ellipsis;
            /* Thêm dấu ... nếu nội dung dài */
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Giới hạn 3 dòng */
            -webkit-box-orient: vertical;
        }

        /* Form bình luận */
        form {

            border-top: 1px solid #eee;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const commentsContainer = document.querySelector('#tab-comments .comments-container');
            const commentItems = document.querySelectorAll('#tab-comments .comment-item');
            const totalComments = commentItems.length;
            let currentIndex = 0;

            // Tính số nhóm 3 bình luận
            const groupSize = 3;
            const totalGroups = Math.ceil(totalComments / groupSize);

            // Hàm chuyển đổi bình luận
            function slideComments() {
                currentIndex = (currentIndex + 1) % totalGroups; // Quay vòng
                const offset = -currentIndex * 100; // Dịch chuyển 100% chiều rộng mỗi lần
                commentsContainer.style.transform = `translateX(${offset}%)`;
            }

            // Tự động chạy mỗi 3 giây
            let autoSlide = setInterval(slideComments, 3000);

            // Dừng khi hover
            commentsContainer.addEventListener('mouseenter', () => clearInterval(autoSlide));
            commentsContainer.addEventListener('mouseleave', () => autoSlide = setInterval(slideComments, 3000));

            // Điều chỉnh container để chứa đủ các nhóm
            commentsContainer.style.width = `${totalGroups * 100}%`;
        });
    </script>

    <div class="mid-product">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 ">
                    <div class="block-background" style="margin-bottom: 20px;width:175%;">

                        <div class="product-tab e-tabs not-dqtab" id="tab-product">
                            <ul class="tabs tabs-title clearfix">

                                <li class="tab-link active" data-tab="#tab-1">
                                    <h3>Mô tả sản phẩm</h3>
                                </li>


                                <li class="tab-link" data-tab="#tab-2">
                                    <h3>Hướng dẫn mua hàng</h3>
                                </li>


                            </ul>
                            <div class="tab-float">

                                <div id="tab-1" class="tab-content active content_extab">
                                    <div class="rte product_getcontent">

                                        <div class="ba-text-fpt has-height">
                                            <p><img alt="iphone 16 series đặc điểm nổi bật" loading="lazy"
                                                    src="https://cdn2.cellphones.com.vn/x/media/wysiwyg/1-Pro.jpg"></p>
                                        </div>
                                        <div class="show-more">
                                            <div class="btn btn-default btn--view-more see-more">
                                                <a href="javascript:void(0)" class="more-text see-more">Xem thêm</a>
                                                <a href="javascript:void(0)" class="less-text see-more">Thu gọn </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                                <div id="tab-2" class="tab-content content_extab">
                                    <div class="rte">

                                        <p><strong>Bước 1:</strong>&nbsp;Truy cập website và lựa chọn sản phẩm&nbsp;cần
                                            mua</p>
                                        <p><strong>Bước 2:</strong>&nbsp;Click và sản phẩm muốn mua, màn hình hiển thị
                                            ra pop up với các lựa chọn sau</p>
                                        <p>Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để lựa chọn
                                            thêm sản phẩm vào giỏ hàng</p>
                                        <p>Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ hàng</p>
                                        <p>Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm vào: Đặt
                                            hàng và thanh toán</p>
                                        <p><strong>Bước 3:</strong>&nbsp;Lựa chọn thông tin tài khoản thanh toán</p>
                                        <p>Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là email và mật
                                            khẩu vào mục đã có tài khoản trên hệ thống</p>
                                        <p>Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền các thông
                                            tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài khoản bạn sẽ dễ dàng
                                            theo dõi được đơn hàng của mình</p>
                                        <p>Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột vào mục đặt
                                            hàng không cần tài khoản</p>
                                        <p><strong>Bước 4:</strong>&nbsp;Điền các thông tin của bạn để nhận đơn hàng,
                                            lựa chọn hình thức thanh toán và vận chuyển cho đơn hàng của mình</p>
                                        <p><strong>Bước 5:</strong>&nbsp;Xem lại thông tin đặt hàng, điền chú thích và
                                            gửi đơn hàng</p>
                                        <p>Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách gọi điện
                                            lại để xác nhận lại đơn hàng và địa chỉ của bạn.</p>
                                        <p>Trân trọng cảm ơn.</p>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>




    <div class="productRelate product-lq">
        <div class="container ">
            <div class="block-product block-background"">
                <h3 class="title-index">
                    <a class="title-name" href="/iphone-16-pro-max" title="Sản phẩm liên quan">Sản phẩm liên quan
                    </a>
                </h3>
                <div
                    class="product-relate-swiper swiper-container p-5 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper">
                        @foreach ($relatedProducts as $relatedProduct)
                            <div class="swiper-slide swiper-slide-pro" style="width: 202px; margin-right: 20px;">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-cart-form="" data-id="product-actions-{{ $relatedProduct->id }}"
                                    enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover"
                                            href="{{ route('customer.product_detail', ['id' => $relatedProduct->id]) }}"
                                            title="{{ $relatedProduct->name }}">
                                            <!-- Kiểm tra xem sản phẩm có hình ảnh hay không -->
                                            <img width="234" height="234" class="lazyload image1"
                                                src="{{ $relatedProduct->images->first()->url ?? 'path/to/default-image.jpg' }}"
                                                alt="{{ $relatedProduct->name }}">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">
                                            <a class="line-clamp line-clamp-2"
                                                href="{{ route('customer.product_detail', ['id' => $relatedProduct->id]) }}"
                                                title="{{ $relatedProduct->name }}">
                                                {{ $relatedProduct->name }}
                                            </a>
                                        </h3>
                                        <div class="price-box">
                                            {{ number_format($relatedProduct->sale_price, 0, ',', '.') }}₫
                                        </div>
                                        <div class="action">
                                            <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                onclick="window.location.href='{{ route('customer.product_detail', ['id' => $relatedProduct->id]) }}'">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-detail"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next swiper-button-disabled"></div>
                    <div class="swiper-button-prev swiper-button-disabled"></div>
                </div>
                <div class="text-center no-padding">
                    <a class="see-more" title="Xem toàn bộ sản phẩm"
                        href="{{ route('customer.category', ['id' => $categoryId]) }}">Xem toàn bộ sản phẩm
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                            </path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <div class="thong-so-popup">
        <div class="thong-so">
            <h3 class="title">

                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path
                            d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z">
                        </path>
                    </svg>
                    Thông số kỹ thuật
                </span>
            </h3>
            <div class="content">

                <p><img alt="iphone 16 series đặc điểm nổi bật" loading="lazy"
                        src="https://cdn2.cellphones.com.vn/x/media/wysiwyg/1-Pro.jpg"></p>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.btn-buyNow', function() {
                var _variantID = $('#product-selectors').val();
                var _Qty = parseInt($('#qtym').val());;
                if (_variantID == null) {
                    _variantID = $('#one_variant').val();
                }
                jQuery.ajax({
                    type: "POST",
                    url: "/cart/add.js",
                    data: "quantity=" + _Qty + "&VariantId=" + _variantID,
                    dataType: "json",
                    success: function(e) {
                        window.location = '/checkout';
                    },
                    error: function(e, t) {
                        Bizweb.onError(e, t);
                    }
                });
            })
        });

        function activeTab(obj) {
            // Tìm đến container '.e-tabs' gần nhất của phần tử được click
            var tabContainer = $(obj).closest('.e-tabs');

            // Xóa class 'active' khỏi tất cả các tab và content trong container đó
            tabContainer.find('> ul > li.tab-link').removeClass('active');
            tabContainer.find('.tab-content').removeClass('active');

            // Xóa style đặc biệt của các tiêu đề tab cũ
            tabContainer.find('> ul > li.tab-link .tab-title-heading').css({
                'color': '#007bff', // Màu link mặc định
                'background-color': 'transparent',
                'border-color': 'transparent transparent #dee2e6 transparent'
            });

            // Thêm class 'active' cho tab được click và content tương ứng
            $(obj).addClass('active');
            var id = $(obj).attr('data-tab');
            $(id).addClass('active');

            // Thêm style đặc biệt cho tiêu đề tab được click
            $(obj).find('.tab-title-heading').css({
                'color': '#495057', // Màu text khi active
                'background-color': '#fff', // Nền trắng khi active
                'border-color': '#dee2e6 #dee2e6 #fff' // Border giống tab Bootstrap
            });
        }
        $('.button-thongso').click(function() {
            $('.thong-so-popup, .backdrop__body-backdrop___1rvky').addClass('active');

        });
        // Thay thế sự kiện click cũ
        // $('.product-tab>ul>li').click(function() {
        // 	activeTab(this);
        // 	return false;
        // });

        // Đảm bảo đoạn này chạy sau khi DOM sẵn sàng
        $(document).ready(function() {
            // Gắn sự kiện click cho tất cả các tab links trong các khu vực '.e-tabs'
            $('.e-tabs > ul > li.tab-link').click(function() {
                activeTab(this);
                return false; // Ngăn hành động mặc định của thẻ a (nếu có)
            });

            // Kích hoạt style cho tab active mặc định khi tải trang cho cả hai khu vực tab
            $('.e-tabs').each(function() {
                var activeTabLink = $(this).find('> ul > li.tab-link.active');
                if (activeTabLink.length) {
                    // Chỉ áp dụng style, không cần trigger lại event click
                    var heading = activeTabLink.find('.tab-title-heading');
                    if (heading.length) {
                        heading.css({
                            'color': '#495057',
                            'background-color': '#fff',
                            'border-color': '#dee2e6 #dee2e6 #fff'
                        });
                    }
                }
            });

            $("#lightgallery").lightGallery({
                thumbnail: false
            });

            // Kích hoạt tab đầu tiên của phần đánh giá/bình luận nếu chưa có tab nào active
            var reviewCommentTabs = $('#tab-reviews-comments');
            if (reviewCommentTabs.find('> ul > li.tab-link.active').length === 0) {
                var firstTab = reviewCommentTabs.find('> ul > li.tab-link:first-child');
                if (firstTab.length) {
                    activeTab(firstTab[0]); // Kích hoạt tab đầu tiên
                }
            }
        });

        var swiperflash = new Swiper('.product1-swiper', {
            slidesPerView: 3,
            loop: false,
            grabCursor: true,
            roundLengths: true,
            slideToClickedSlide: false,
            spaceBetween: 20,
            autoplay: false,
            slidesPerColumn: 2,
            slidesPerColumnFill: "row",
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
                    spaceBetween: 20
                },
                767: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                991: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1200: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            }
        });

        var variantsize = false;
        var ww = $(window).width();

        var selectCallback = function(variant, selector) {
            if (variant) {
                var form = jQuery('#' + selector.domIdPrefix).closest('form');
                for (var i = 0, length = variant.options.length; i < length; i++) {
                    var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant
                        .options[i] + '"]');
                    if (radioButton.size()) {
                        radioButton.get(0).checked = true;
                    }
                }
            }
            var addToCart = jQuery('.form-product .btn-cart.normal_button'),
                buyNow = jQuery('.form-product .btn-buyNow'),
                FastAddToCart = jQuery('.form-product .btn-cart.fast'),
                form = jQuery('.form-product .form-group'),
                productPrice = jQuery('.details-pro .special-price .product-price'),
                qty = jQuery('.inventory_quantity .a-stock'),
                comparePrice = jQuery('.details-pro .old-price .product-price-old'),
                comparePriceText = jQuery('.details-pro .old-price'),
                savePrice = jQuery('.details-pro .save-price .product-price-save'),
                savePriceText = jQuery('.details-pro .save-price'),
                qtyBtn = jQuery('.form-product .form-group .custom-btn-number'),
                BtnSold = jQuery('.form-product .form-group .btn-mua'),
                product_sku = jQuery('.details-product .sku-product .variant-sku');

            if (variant && variant.sku != "" && variant.sku != null) {
                product_sku.html(variant.sku);
            } else {
                product_sku.html('Đang cập nhật');
            }

            FastAddToCart.addClass('d-none');

            if (variant && variant.available) {
                if (variant.inventory_management == "bizweb") {
                    if (variant.inventory_quantity != 0) {
                        qty.html('<span class="a-stock">Liên hệ</span>');
                    } else if (variant.inventory_quantity == '') {
                        if (variant.inventory_policy == "continue") {
                            qty.html('<span class="a-stock">Còn hàng</span>');
                        } else {
                            qty.html('<span class="a-stock a-stock-out">Hết hàng</span>');
                        }
                    }
                } else {
                    qty.html('<span class="a-stock">Còn hàng</span>');
                }

                FastAddToCart.removeClass('d-none');
                addToCart.html(
                        '<span class="txt-main text_1">Thêm vào giỏ</span><span class="text_2">Giao hàng tận nơi miễn phí</span>'
                    )
                    .removeAttr('disabled').removeClass('btn-soldout');
                buyNow.removeClass('d-none');
                BtnSold.removeClass('btnsold');
                qtyBtn.removeClass('d-none');

                if (variant.price == 0) {
                    console.log(1);
                    productPrice.html('Liên hệ');
                    comparePrice.hide();
                    savePrice.hide();
                    comparePriceText.hide();
                    savePriceText.hide();
                    form.addClass('d-none');
                } else {
                    form.removeClass('d-none');
                    productPrice.html(Bizweb.formatMoney(variant.price, "@{{ amount_no_decimals_with_comma_separator }}₫"));

                    if (variant.compare_at_price > variant.price) {
                        comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "@{{ amount_no_decimals_with_comma_separator }}₫"))
                            .show();
                        savePrice.html(Bizweb.formatMoney(variant.compare_at_price - variant.price,
                            "@{{ amount_no_decimals_with_comma_separator }}₫")).show();
                        comparePriceText.show();
                        savePriceText.show();
                    } else {
                        comparePrice.hide();
                        savePrice.hide();
                        comparePriceText.hide();
                        savePriceText.hide();
                    }
                }
            } else {
                qty.html('<span class="a-stock a-stock-out">Hết hàng</span>');
                FastAddToCart.addClass('d-none');
                addToCart.html('<span class="txt-main-hh">Hết hàng</span>').attr('disabled', 'disabled').addClass(
                    'btn-soldout');
                buyNow.addClass('d-none');
                BtnSold.addClass('btnsold');
                qtyBtn.addClass('d-none');

                if (variant) {
                    if (variant.price != 0) {
                        form.removeClass('d-none');
                        productPrice.html(Bizweb.formatMoney(variant.price, "@{{ amount_no_decimals_with_comma_separator }}₫"));

                        if (variant.compare_at_price > variant.price) {
                            FastAddToCart.addClass('d-none');
                            addToCart.html('<span class="txt-main-hh">Hết hàng</span>').attr('disabled', 'disabled')
                                .addClass('btn-soldout');
                            buyNow.addClass('d-none');
                            comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "@{{ amount_no_decimals_with_comma_separator }}₫"))
                                .show();
                            savePrice.html(Bizweb.formatMoney(variant.compare_at_price - variant.price,
                                "@{{ amount_no_decimals_with_comma_separator }}₫")).show();
                            comparePriceText.show();
                            savePriceText.show();
                        } else {
                            comparePrice.hide();
                            savePrice.hide();
                            comparePriceText.hide();
                            savePriceText.hide();
                            FastAddToCart.addClass('d-none');
                            addToCart.html('<span class="txt-main-hh">Hết hàng</span>').attr('disabled', 'disabled')
                                .addClass('btn-soldout');
                        }
                    } else {
                        productPrice.html('Liên hệ');
                        comparePrice.hide();
                        savePrice.hide();
                        comparePriceText.hide();
                        savePriceText.hide();
                        form.addClass('d-none');
                        buyNow.addClass('d-none');
                    }
                } else {
                    productPrice.html('Liên hệ');
                    comparePrice.hide();
                    savePrice.hide();
                    comparePriceText.hide();
                    savePriceText.hide();
                    form.addClass('d-none');
                }
            }

            /*begin variant image*/
            if (variant && variant.image) {
                var originalImage = jQuery(".gallery-thumbs .swiper-slide:not(.openvideo) img");
                var stickoriginalImage = jQuery(".nd-product-news img");
                var newImage = variant.image;
                var element = originalImage[0];
                Bizweb.Image.switchImage(newImage, element, function(newImageSizedSrc, newImage, element) {
                    $('.gallery-thumbs .swiper-slide').each(function() {
                        var $this = $(this);
                        var imgThis = $this.find('img').attr('data-image');
                        if (newImageSizedSrc.split("?")[0] == imgThis.split("?")[0]) {
                            var pst = $this.attr('data-hash');
                            galleryTop.slideTo(pst, 1000, false);
                        }
                        jQuery(stickoriginalImage).attr('src', newImageSizedSrc);
                    });
                });
            }
            /*end of variant image*/
        };
        jQuery(function($) {

            new Bizweb.OptionSelectors('product-selectors', {
                product: {
                    "id": 38055946,
                    "name": "iPhone 16 Pro Max 512GB",
                    "alias": "iphone-16-pro-max-512gb",
                    "vendor": "Apple",
                    "type": "Điện Thoại",
                    "content": "<p><img alt=\"iphone 16 series đặc điểm nổi bật\" loading=\"lazy\" src=\"https://cdn2.cellphones.com.vn/x/media/wysiwyg/1-Pro.jpg\" /></p>",
                    "summary": null,
                    "template_layout": "product",
                    "available": true,
                    "tags": ["phienban_iphone-16-pro-max_512GB", "video_peFi0QWOVEg"],
                    "price": 30000000.0000,
                    "price_min": 30000000.0000,
                    "price_max": 35500000.0000,
                    "price_varies": true,
                    "compare_at_price": 0,
                    "compare_at_price_min": 0,
                    "compare_at_price_max": 0,
                    "compare_at_price_varies": false,
                    "variants": [{
                        "id": 128106128,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Đen / Máy Thanh Lý",
                        "options": ["Titan Đen", "Máy Thanh Lý"],
                        "option1": "Titan Đen",
                        "option2": "Máy Thanh Lý",
                        "option3": null,
                        "available": false,
                        "taxable": false,
                        "price": 30000000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-881f6c49-6255-48b2-99cc-580c0370c5a7.png?v=1730447868917"
                        }
                    }, {
                        "id": 128105974,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Đen / LikeNew 99%",
                        "options": ["Titan Đen", "LikeNew 99%"],
                        "option1": "Titan Đen",
                        "option2": "LikeNew 99%",
                        "option3": null,
                        "available": false,
                        "taxable": false,
                        "price": 33000000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-881f6c49-6255-48b2-99cc-580c0370c5a7.png?v=1730447868917"
                        }
                    }, {
                        "id": 128106220,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Đen / Máy sạc ít Pin 100%",
                        "options": ["Titan Đen", "Máy sạc ít Pin 100%"],
                        "option1": "Titan Đen",
                        "option2": "Máy sạc ít Pin 100%",
                        "option3": null,
                        "available": false,
                        "taxable": false,
                        "price": 33500000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-881f6c49-6255-48b2-99cc-580c0370c5a7.png?v=1730447868917"
                        }
                    }, {
                        "id": 128105982,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Đen / Máy New Trần 100%",
                        "options": ["Titan Đen", "Máy New Trần 100%"],
                        "option1": "Titan Đen",
                        "option2": "Máy New Trần 100%",
                        "option3": null,
                        "available": true,
                        "taxable": false,
                        "price": 35000000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 5,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-881f6c49-6255-48b2-99cc-580c0370c5a7.png?v=1730447868917"
                        }
                    }, {
                        "id": 128106129,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Trắng / Máy Thanh Lý",
                        "options": ["Titan Trắng", "Máy Thanh Lý"],
                        "option1": "Titan Trắng",
                        "option2": "Máy Thanh Lý",
                        "option3": null,
                        "available": false,
                        "taxable": false,
                        "price": 30500000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-0b8373fb-1752-498a-a5e0-f82676184c5c.png?v=1730447868917"
                        }
                    }, {
                        "id": 128105975,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Trắng / LikeNew 99%",
                        "options": ["Titan Trắng", "LikeNew 99%"],
                        "option1": "Titan Trắng",
                        "option2": "LikeNew 99%",
                        "option3": null,
                        "available": false,
                        "taxable": false,
                        "price": 33500000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-0b8373fb-1752-498a-a5e0-f82676184c5c.png?v=1730447868917"
                        }
                    }, {
                        "id": 128106221,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Trắng / Máy sạc ít Pin 100%",
                        "options": ["Titan Trắng", "Máy sạc ít Pin 100%"],
                        "option1": "Titan Trắng",
                        "option2": "Máy sạc ít Pin 100%",
                        "option3": null,
                        "available": false,
                        "taxable": false,
                        "price": 34000000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-0b8373fb-1752-498a-a5e0-f82676184c5c.png?v=1730447868917"
                        }
                    }, {
                        "id": 128105983,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Trắng / Máy New Trần 100%",
                        "options": ["Titan Trắng", "Máy New Trần 100%"],
                        "option1": "Titan Trắng",
                        "option2": "Máy New Trần 100%",
                        "option3": null,
                        "available": true,
                        "taxable": false,
                        "price": 35500000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 5,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-0b8373fb-1752-498a-a5e0-f82676184c5c.png?v=1730447868917"
                        }
                    }, {
                        "id": 128106130,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Tự Nhiên / Máy Thanh Lý",
                        "options": ["Titan Tự Nhiên", "Máy Thanh Lý"],
                        "option1": "Titan Tự Nhiên",
                        "option2": "Máy Thanh Lý",
                        "option3": null,
                        "available": false,
                        "taxable": false,
                        "price": 30500000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-e01b5f4e-3a6d-4315-ac62-a41a37aac00d.png?v=1730447868917"
                        }
                    }, {
                        "id": 128105976,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Tự Nhiên / LikeNew 99%",
                        "options": ["Titan Tự Nhiên", "LikeNew 99%"],
                        "option1": "Titan Tự Nhiên",
                        "option2": "LikeNew 99%",
                        "option3": null,
                        "available": false,
                        "taxable": false,
                        "price": 33500000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-e01b5f4e-3a6d-4315-ac62-a41a37aac00d.png?v=1730447868917"
                        }
                    }, {
                        "id": 128106222,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Tự Nhiên / Máy sạc ít Pin 100%",
                        "options": ["Titan Tự Nhiên", "Máy sạc ít Pin 100%"],
                        "option1": "Titan Tự Nhiên",
                        "option2": "Máy sạc ít Pin 100%",
                        "option3": null,
                        "available": false,
                        "taxable": false,
                        "price": 34000000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-e01b5f4e-3a6d-4315-ac62-a41a37aac00d.png?v=1730447868917"
                        }
                    }, {
                        "id": 128105984,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Tự Nhiên / Máy New Trần 100%",
                        "options": ["Titan Tự Nhiên", "Máy New Trần 100%"],
                        "option1": "Titan Tự Nhiên",
                        "option2": "Máy New Trần 100%",
                        "option3": null,
                        "available": true,
                        "taxable": false,
                        "price": 35500000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 5,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-e01b5f4e-3a6d-4315-ac62-a41a37aac00d.png?v=1730447868917"
                        }
                    }, {
                        "id": 128106131,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Sa Mạc / Máy Thanh Lý",
                        "options": ["Titan Sa Mạc", "Máy Thanh Lý"],
                        "option1": "Titan Sa Mạc",
                        "option2": "Máy Thanh Lý",
                        "option3": null,
                        "available": false,
                        "taxable": false,
                        "price": 30500000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-dfe8775b-a8e0-4262-ac61-b05fab7feb31.png?v=1730447868917"
                        }
                    }, {
                        "id": 128105977,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Sa Mạc / LikeNew 99%",
                        "options": ["Titan Sa Mạc", "LikeNew 99%"],
                        "option1": "Titan Sa Mạc",
                        "option2": "LikeNew 99%",
                        "option3": null,
                        "available": false,
                        "taxable": false,
                        "price": 33500000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-dfe8775b-a8e0-4262-ac61-b05fab7feb31.png?v=1730447868917"
                        }
                    }, {
                        "id": 128106223,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Sa Mạc / Máy sạc ít Pin 100%",
                        "options": ["Titan Sa Mạc", "Máy sạc ít Pin 100%"],
                        "option1": "Titan Sa Mạc",
                        "option2": "Máy sạc ít Pin 100%",
                        "option3": null,
                        "available": false,
                        "taxable": false,
                        "price": 34000000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 0,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-dfe8775b-a8e0-4262-ac61-b05fab7feb31.png?v=1730447868917"
                        }
                    }, {
                        "id": 128105985,
                        "barcode": null,
                        "sku": null,
                        "title": "Titan Sa Mạc / Máy New Trần 100%",
                        "options": ["Titan Sa Mạc", "Máy New Trần 100%"],
                        "option1": "Titan Sa Mạc",
                        "option2": "Máy New Trần 100%",
                        "option3": null,
                        "available": true,
                        "taxable": false,
                        "price": 35500000.0000,
                        "compare_at_price": null,
                        "inventory_management": "bizweb",
                        "inventory_policy": "deny",
                        "inventory_quantity": 5,
                        "weight_unit": "kg",
                        "weight": 0,
                        "requires_shipping": true,
                        "image": {
                            "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-dfe8775b-a8e0-4262-ac61-b05fab7feb31.png?v=1730447868917"
                        }
                    }],
                    "featured_image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-a373a501-a879-49b7-8036-024e2dead860.png?v=1730447868917"
                    },
                    "images": [{
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-a373a501-a879-49b7-8036-024e2dead860.png?v=1730447868917"
                    }, {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-0b8373fb-1752-498a-a5e0-f82676184c5c.png?v=1730447868917"
                    }, {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-881f6c49-6255-48b2-99cc-580c0370c5a7.png?v=1730447868917"
                    }, {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-e01b5f4e-3a6d-4315-ac62-a41a37aac00d.png?v=1730447868917"
                    }, {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-dfe8775b-a8e0-4262-ac61-b05fab7feb31.png?v=1730447868917"
                    }, {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-full-3c3b474e-4aa6-44ed-8403-13f91b2c2a97-e16102e5-4132-4dbb-9e79-e62db600a095-8fff99ab-6fa5-4924-b1b4-af372fe3947c.png?v=1730447868917"
                    }],
                    "options": ["Màu sắc", "Tình Trạng"],
                    "created_on": "2024-11-01T14:57:48",
                    "modified_on": "2025-04-01T13:33:21",
                    "published_on": "2024-10-18T13:56:00"
                },
                onVariantSelected: selectCallback,
                enableHistoryState: true
            });

            // Add label if only one product option and it isn't 'Title'. Could be 'Size'.

            // Hide selectors if we only have 1 variant and its title contains 'Default'.

            $('.selector-wrapper').css({
                'text-align': 'left',
                'margin-bottom': '15px'
            });
        });

        jQuery('.swatch :radio').change(function() {
            var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
            var optionValue = jQuery(this).val();
            jQuery(this)
                .closest('form')
                .find('.single-option-selector')
                .eq(optionIndex)
                .val(optionValue)
                .trigger('change');
            $(this).closest('.swatch').find('.header .value-roperties').html(optionValue);
        });

        setTimeout(function() {
            $('.swatch .swatch-element').each(function() {
                $(this).closest('.swatch').find('.header .value-roperties').html($(this).closest('.swatch')
                    .find('input:checked').val());
            });
        }, 500);
        setTimeout(function() {
            var ch = $('.product_getcontent').height(),
                smore = $('.show-more');
            console.log(ch);
            if (ch > 1451) {
                $('.ba-text-fpt').addClass('has-height');
                smore.removeClass('d-none');
            }
        }, 200);
        $('.btn--view-more').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            $this.parents('.product_getcontent').toggleClass('expanded');
            $('html, body').animate({
                scrollTop: $('.product_getcontent').offset().top - 110
            }, 'slow');
            $(this).toggleClass('active');

        });




        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 5,
            slidesPerView: 20,
            freeMode: true,
            lazy: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            hashNavigation: true,
            slideToClickedSlide: true,
            breakpoints: {
                300: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                500: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1199: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
            },
            navigation: {
                nextEl: '.gallery-thumbs .swiper-button-next',
                prevEl: '.gallery-thumbs .swiper-button-prev',
            },
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 0,
            lazy: true,
            hashNavigation: true,
            effect: 'fade',
            thumbs: {
                swiper: galleryThumbs
            }
        });
        var swiper = new Swiper('.product-relate-swiper', {
            slidesPerColumnFill: 'row',
            direction: 'horizontal',
            slidesPerView: 4,
            spaceBetween: 20,
            slidesPerGroup: 1,
            slidesPerColumn: 1,
            navigation: {
                nextEl: '.product-relate-swiper .swiper-button-next',
                prevEl: '.product-relate-swiper .swiper-button-prev',
            },
            breakpoints: {
                280: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 15
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 20
                }
            }
        });

        $(document).ready(function() {
            $("#lightgallery").lightGallery({
                thumbnail: false
            });
        });
    </script>
    <script></script>
    <script>
        $(document).on('click', '.js-copy', function(e) {
            e.preventDefault();
            var copyText = $(this).attr('data-copy');
            var copyTextarea = document.createElement("textarea");
            copyTextarea.textContent = copyText;
            copyTextarea.style.position = "fixed";
            document.body.appendChild(copyTextarea);
            copyTextarea.select();
            document.execCommand("copy");
            document.body.removeChild(copyTextarea);
            var cur_text = $(this).text();
            var $cur_btn = $(this);
            $(this).addClass("iscopied");
            $(this).text("Đã lưu");
            setTimeout(function() {
                $cur_btn.removeClass("iscopied");
                $cur_btn.text(cur_text);
            }, 1500)
        })
    </script>



    <script>
        setTimeout(function() {
            galleryTop.slideTo(0);
        }, 1000);
    </script>

</div>

@include('layouts.customer.footer')
