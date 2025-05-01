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
                                    <div class="swiper-slide" style="width: 75.75px; margin-right: 10px;">
                                        <div class="p-100">
                                            <img height="80" width="80" src="{{ asset($product->image) }}"
                                                alt="{{ $product->name }}" class="swiper-lazy">
                                        </div>
                                    </div>
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
                                    <div class="swiper-slide" style="width: 75.75px; margin-right: 10px;">
                                        <div class="p-100">
                                            <img height="80" width="80" src="{{ asset($product->image) }}"
                                                alt="{{ $product->name }}" class="swiper-lazy">
                                        </div>
                                    </div>
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
                                                <div class="col-lg-4 col-md-3 col-4" style="padding-left: 3px; padding-right: 3px;width: 70px;">
                                                    <a href="javascript:void(0);"
                                                       class="thumb-phienban storage-option"
                                                       data-storage="{{ $storage->storage }}"
													data-price="{{ $storage->price }}"
                                                       data-origin-price="{{ $storage->origin_price }}"
                                                       style="display: inline-block; text-align: center; border: 1px solid #ccc; padding: 5px 10px; margin-bottom: 10px; border-radius: 8px; font-size: 0.85em; width: auto; min-width: fit-content; transition: all 0.2s ease-in-out; background-color: #fff; color: #333; text-decoration: none;">
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

                                    .layout-product .input_number_product .btn_num svg {
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
                                           
                                            <button type="button" style="width: 100%" class="btn-buyNow"
                                               
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

                                    // // Disable button during AJAX request
                                    // if (clickedButton) {
                                    //     const originalText = $(clickedButton).find('.txt-main').length ? $(clickedButton).find('.txt-main').text() :
                                    //         $(clickedButton).text();
                                    //     $(clickedButton).prop('disabled', true);
                                    //     if ($(clickedButton).find('.txt-main').length) $(clickedButton).find('.txt-main').text('Đang xử lý...');
                                    //     else $(clickedButton).text('Đang xử lý...');
                                    // }

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
                                                        SuccessNoti(response.message || 'Sản phẩm đã có trong giỏ hàng.');
                                                    } else {
                                                        // Use ErrorNoti for other add to cart failures, provide fallback message
                                                        ErrorNoti(response.message || 'Không thể thêm vào giỏ hàng.');
                                                    }
                                                }
                                            }
                                        },
                                        error: function(jqXHR, textStatus, errorThrown) {
                                            console.error('AJAX Error:', textStatus, errorThrown, jqXHR.responseText);
                                            let errorMessage =
                                                'Có lỗi kết nối hoặc lỗi máy chủ. Vui lòng thử lại.'; // More specific default error
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
						<div class="row">
            <div class="col-12">
                <div class="block-background review-comment-section">
                    <div class="product-tab e-tabs not-dqtab" id="tab-reviews-comments">
                        <ul class="tabs tabs-title clearfix">
                            <li class="tab-link active" data-tab="#tab-reviews">
                                <h3 class="tab-title-heading">Đánh giá</h3>
                            </li>
                            <li class="tab-link" data-tab="#tab-comments">
                                <h3 class="tab-title-heading">Bình luận</h3>
                            </li>
                        </ul>

                        {{-- Tab Đánh giá --}}
                        <div id="tab-reviews" class="tab-content active">
                            <div class="review-summary mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-3 text-center">
                                        <div class="rating-score">
                                            @php
                                                $orderItems = $product->orderItems()->whereNotNull('rating')->get();
                                                $totalRatings = $orderItems->count();
                                                $avgRating = $totalRatings > 0 ? $orderItems->avg('rating') : 0;
                                            @endphp
                                            <div class="score">{{ number_format($avgRating, 1) }}</div>
                                            <div class="stars">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <i class="fas fa-star"
                                                        style="color: {{ $i <= round($avgRating) ? '#ffc107' : '#ddd' }};"></i>
                                                @endfor
                                            </div>
                                            <div class="total-ratings">{{ $totalRatings }} đánh giá</div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        {{-- Rating bars --}}
                                        <div class="rating-bars">
                                            @for ($i = 5; $i >= 1; $i--)
                                                @php
                                                    $count = $orderItems->where('rating', $i)->count();
                                                    $percentage =
                                                        $totalRatings > 0 ? ($count / $totalRatings) * 100 : 0;
                                                @endphp
                                                <div class="rating-bar-item">
                                                    <div class="bar-label">{{ $i }} <span
                                                            class="star">★</span></div>
                                                    <div class="bar-container">
                                                        <div class="bar" style="width: {{ $percentage }}%">
                                                        </div>
                                                    </div>
                                                    <div class="bar-count">{{ $count }}</div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="reviews-list">
                                @php
                                    $orderItemsWithRating = $product
                                        ->orderItems()
                                        ->whereNotNull('rating')
                                        ->with('order.user', 'productVariant')
                                        ->get();
                                @endphp
                                @if ($orderItemsWithRating->isNotEmpty())
                                    @foreach ($orderItemsWithRating as $item)
                                        <div class="review-item">
                                            <div class="review-header">
                                                <div class="reviewer-info">
                                                    <div class="avatar">
                                                        <i class="fas fa-user-circle"></i>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <div class="reviewer-name">
                                                            {{ $item->order->user->fullname ?? 'Khách' }}</div>
                                                        <div class="review-date">
                                                            {{ $item->updated_at->format('d/m/Y H:i') }}</div>
                                                    </div>
                                                </div>
                                                <div class="variant-info mt-2">
                                                    @if ($item->productVariant)
                                                        <i class="fas fa-palette"></i> Màu:
                                                        <strong>{{ $item->productVariant->color }}</strong>,
                                                        <i class="fas fa-hdd"></i> Dung lượng:
                                                        <strong>{{ $item->productVariant->storage }}</strong>
                                                    @endif
                                                </div>
                                                <div class="review-rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <span class="star"
                                                            style="color: {{ $i <= $item->rating ? '#ffc107' : '#ddd' }};">★</span>
                                                    @endfor
                                                </div>
                                            </div>
                                            <div class="review-content">{{ $item->review }}</div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="no-reviews">
                                        <i class="fas fa-comment-alt"></i>
                                        <p>Chưa có đánh giá nào cho sản phẩm này.</p>
                                    </div>
                                @endif
                            </div>

                            {{-- Form đánh giá --}}
                            @auth
                                @if ($canRateProduct)
                                    <div class="review-form">
                                        {{-- Hiển thị lịch sử đánh giá của user --}}
                                        @php
                                            $userRating = $ratings->where('user_id', Auth::id())->first();
                                        @endphp

                                        @if ($userRating)
                                            <div class="rating-history mb-4">
                                                <div class="rating-history-header">
                                                    <h5><i class="fas fa-history"></i> Đánh giá trước đây của bạn</h5>
                                                </div>
                                                <div class="previous-rating">
                                                    <div class="rating-info">
                                                        <div class="rating-stars">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <span class="star"
                                                                    style="color: {{ $i <= $userRating->rating ? '#ffc107' : '#ddd' }};">★</span>
                                                            @endfor
                                                        </div>
                                                        <div class="rating-date">
                                                            <i class="far fa-clock"></i>
                                                            {{ $userRating->created_at->format('d/m/Y H:i') }}
                                                        </div>
                                                        <div class="variant-info mt-2">
                                                            <i class="fas fa-palette"></i> Màu:
                                                            <strong>{{ $userRating->color }}</strong>,
                                                            <i class="fas fa-hdd"></i> Dung lượng:
                                                            <strong>{{ $userRating->storage }}</strong>
                                                        </div>

                                                    </div>
                                                    <div class="rating-content">
                                                        <div class="content-header">
                                                            <i class="fas fa-comment-alt"></i>
                                                            <span>Nội dung đánh giá:</span>
                                                        </div>
                                                        <div class="content-text">{{ $userRating->review }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <div class="review-notice">
                                        <i class="fas fa-info-circle"></i>
                                        <p>Bạn cần mua sản phẩm này để viết đánh giá.</p>
                                    </div>
                                @endif
                            @else
                                <div class="review-notice">
                                    <i class="fas fa-user-circle"></i>
                                    <p>Vui lòng <a href="{{ route('login') }}">đăng nhập</a> để viết đánh giá.</p>
                                </div>
                            @endauth
                        </div>

                        {{-- Tab Bình luận --}}
                        <div id="tab-comments" class="tab-content">
                            <div class="comments-list">
                                @if (isset($comments) && !$comments->isEmpty())
                                    @foreach ($comments as $comment)
                                        <div class="comment-item">
                                            <div class="comment-header">
                                                <div class="commenter-info">
                                                    <div class="avatar">
                                                        <i class="fas fa-user-circle"></i>
                                                    </div>
                                                    <div class="commenter-details">
                                                        <div class="commenter-name">
                                                            {{ $comment->user->fullname ?? 'Khách' }}
                                                        </div>
                                                        <div class="comment-date">
                                                            {{ $comment->created_at->format('d/m/Y H:i') }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-content">{{ $comment->content }}</div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="no-comments">
                                        <i class="fas fa-comments"></i>
                                        <p>Chưa có bình luận nào cho sản phẩm này.</p>
                                    </div>
                                @endif
                            </div>

                            {{-- Form bình luận --}}
                            @auth
                                <div class="comment-form">
                                    <h4>Viết bình luận của bạn</h4>
                                    <form action="{{ route('customer.comments.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                        <div class="form-group">
                                            <textarea name="content" class="form-control" rows="3" required
                                                placeholder="Chia sẻ suy nghĩ của bạn về sản phẩm này..."></textarea>
											</div>

                                        <button type="submit" class="btn btn-primary">Gửi bình luận</button>
                                    </form>
											</div>
                            @else
                                <div class="comment-notice">
                                    <i class="fas fa-user-circle"></i>
                                    <p>Vui lòng <a href="{{ route('login') }}">đăng nhập</a> để viết bình luận.</p>
										</div>
                            @endauth
                        </div>
                    </div>
                </div>
										</div>
									</div>
								</div>

    <style>
        /* Style cho section đánh giá và bình luận */
        .review-comment-container {
            position: relative;
            z-index: 1;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .review-comment-section {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            position: relative;
            z-index: 2;
        }

        /* Style cho tabs */
        .tabs-title {
            display: flex;
            border-bottom: 2px solid #eee;
            margin-bottom: 20px;
            position: relative;
            z-index: 3;
        }

        .tab-link {
            padding: 10px 20px;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            margin-bottom: -2px;
            position: relative;
            z-index: 3;
        }

        .tab-link.active {
            border-bottom-color: #007bff;
            color: #007bff;
        }

        .tab-content {
            display: none;
            position: relative;
            z-index: 2;
        }

        .tab-content.active {
            display: block;
        }

        /* Style cho phần tổng quan đánh giá */
        .rating-summary {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }

        .rating-score {
            text-align: center;
        }

        .score {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ffc107;
            line-height: 1;
        }

        .stars {
            margin: 10px 0;
        }

        .total-ratings {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .rating-bars {
            padding: 10px 0;
        }

        .rating-bar-item {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .bar-label {
            width: 60px;
            text-align: right;
            margin-right: 10px;
        }

        .bar-container {
            flex: 1;
            height: 8px;
            background: #eee;
            border-radius: 4px;
            overflow: hidden;
        }

        .bar {
            height: 100%;
            background: #ffc107;
            border-radius: 4px;
        }

        .bar-count {
            width: 40px;
            text-align: left;
            margin-left: 10px;
            color: #6c757d;
        }

        /* Style cho danh sách đánh giá */
        .review-item,
        .comment-item {
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        .review-item:last-child,
        .comment-item:last-child {
            border-bottom: none;
        }

        .review-header,
        .comment-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .reviewer-info,
        .commenter-info {
            display: flex;
            align-items: center;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .avatar i {
            font-size: 24px;
            color: #6c757d;
        }

        .reviewer-details,
        .commenter-details {
            display: flex;
            flex-direction: column;
        }

        .reviewer-name,
        .commenter-name {
            font-weight: 600;
            color: #333;
        }

        .review-date,
        .comment-date {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .review-content,
        .comment-content {
            color: #333;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .review-images {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .review-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Style cho form đánh giá và bình luận */
        .review-form,
        .comment-form {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .rating-input {
            margin-bottom: 20px;
        }

        /* Style cho star rating */
        .star-rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
            gap: 5px;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            cursor: pointer;
            font-size: 24px;
            color: #ddd;
            padding: 5px;
            transition: color 0.2s ease;
        }

        .star-rating label:hover,
        .star-rating label:hover~label,
        .star-rating input:checked~label {
            color: #ffc107;
        }

        /* Style cho stars trong review */
        .stars {
            display: flex;
            gap: 5px;
        }

        .stars i {
            font-size: 16px;
            color: #ddd;
            transition: color 0.2s ease;
        }

        .stars i.fa-star {
            color: #ffc107;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        /* Style cho thông báo */
        .review-notice,
        .comment-notice,
        .no-reviews,
        .no-comments {
            text-align: center;
            padding: 30px;
            color: #6c757d;
        }

        .review-notice i,
        .comment-notice i,
        .no-reviews i,
        .no-comments i {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        /* Custom scrollbar */
        .reviews-list,
        .comments-list {
            max-height: 500px;
            overflow-y: auto;
            padding-right: 10px;
        }

        .reviews-list::-webkit-scrollbar,
        .comments-list::-webkit-scrollbar {
            width: 6px;
        }

        .reviews-list::-webkit-scrollbar-track,
        .comments-list::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .reviews-list::-webkit-scrollbar-thumb,
        .comments-list::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 3px;
        }

        .reviews-list::-webkit-scrollbar-thumb:hover,
        .comments-list::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .star {
            font-size: 16px;
            transition: color 0.2s ease;
        }

        .bar-label .star {
            color: #ffc107;
            font-size: 14px;
            margin-left: 5px;
        }

        .review-rating .star {
            font-size: 14px;
        }

        .star-rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
            gap: 5px;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            cursor: pointer;
            font-size: 24px;
            color: #ddd;
            padding: 5px;
            transition: color 0.2s ease;
        }

        .star-rating label:hover,
        .star-rating label:hover~label,
        .star-rating input:checked~label {
            color: #ffc107;
        }

        .rating-history .stars {
            display: flex;
            gap: 5px;
            margin-bottom: 10px;
        }

        .rating-history .star {
            font-size: 18px;
        }

        .rating-history {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .rating-history-header {
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .rating-history-header h5 {
            margin: 0;
            color: #495057;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .rating-history-header i {
            color: #6c757d;
        }

        .rating-info {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 15px;
        }

        .rating-stars {
            display: flex;
            gap: 5px;
        }

        .rating-stars .star {
            font-size: 20px;
        }

        .rating-date {
            color: #6c757d;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .rating-content {
            background: #fff;
            border-radius: 6px;
            padding: 15px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .content-header {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #495057;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .content-header i {
            color: #6c757d;
        }

        .content-text {
            color: #212529;
            line-height: 1.6;
            font-size: 0.95rem;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Xử lý chuyển tab
            const tabLinks = document.querySelectorAll('.tab-link');
            tabLinks.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    tabLinks.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');

                    const tabId = this.getAttribute('data-tab');
                    document.querySelectorAll('.tab-content').forEach(content => {
                        content.classList.remove('active');
                    });
                    document.querySelector(tabId).classList.add('active');
                });
            });

            // Preview hình ảnh khi upload
            const imageInput = document.querySelector('input[type="file"]');
            if (imageInput) {
                imageInput.addEventListener('change', function() {
                    const previewContainer = document.createElement('div');
                    previewContainer.className = 'review-images';

                    Array.from(this.files).forEach(file => {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.className = 'review-image';
                            previewContainer.appendChild(img);
                        }
                        reader.readAsDataURL(file);
                    });

                    const existingPreview = this.parentElement.querySelector('.review-images');
                    if (existingPreview) {
                        existingPreview.remove();
                    }
                    this.parentElement.appendChild(previewContainer);
                });
            }

            function SuccessNoti(message) {
                showNotification(message, 'success');
            }

            function ErrorNoti(message) {
                showNotification(message, 'error');
            }

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
                                SuccessNoti(data.message || 'Đã thêm sản phẩm vào giỏ hàng!');
                            }
                        } else {
                            if (data.exists) {
                                SuccessNoti(data.message || 'Sản phẩm đã có trong giỏ hàng.');
                            } else {
                                ErrorNoti(data.message || 'Không thể thêm vào giỏ hàng.');
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        ErrorNoti('Có lỗi xảy ra khi thêm vào giỏ hàng.');
                    });
            }
        });
    </script>

	<div class="mid-product">
		<div class="container">
			<div class="row ">
				<div class="col-lg-7 ">
                    <div class="block-background" style="margin-bottom: 20px;width:97%;">

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
                                    <label class="block text-sm font-medium text-gray-300 mb-1">Mô tả sản phẩm</label>
                                    <div id="description" class="rte">
                                        {!! $product->description !!}
									</div>
								</div>


							</div>
						</div>

					</div>
				</div>
                {{-- có thể bạn thích  --}}
				<div class="col-lg-5">
					<div class="row row-fix">
					<div class="col-12 col-md-12 col-lg-12 col-fix">
    <div class="product-like block-background">
        <h3 class="title">
                                    <a class="title-name"
                                        href="{{ route('customer.category', ['id' => $categoryId]) }}"
                                        title="Có thể bạn thích">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                </svg>
                Có thể bạn thích
            </a>
        </h3>
                                <div
                                    class="product1-swiper swiper-container p-5 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-multirow">
                                    <div class="swiper-wrapper">
                                        @foreach ($products as $product)
                                            <div class="swiper-slide"
                                                style="width: 236px; margin-right: 20px; {{ $loop->iteration > 3 ? 'margin-top: 20px;' : '' }}">
                                                <form action="/cart/add" method="post"
                                                    class="variants product-action" data-cart-form=""
                                                    data-id="product-actions-{{ $product->id }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                            <div class="product-thumbnail">
                                                        <a class="image_thumb scale_hover"
                                                            href="{{ route('customer.product_detail', ['id' => $product->id]) }}"
                                                            title="{{ $product->name }}">
                                                            <img width="234" height="234" class=""
                                                                src="{{ asset($product->image) }}"
                                                                alt="{{ $product->name }}">
                                                            @if ($product->discount_percentage > 0)
                                                                <span
                                                                    class="discount-tag">{{ $product->discount_percentage }}%</span>
                                                            @endif
                                                        </a>
                                                        <input class="hidden" type="hidden" name="variantId"
                                                            value="{{ $product->variants->first()->id ?? '' }}">
                            <div class="action">
                                                            <button class="btn-cart btn-views" title="Xem chi tiết"
                                                                type="button"
                                                                onclick="window.location.href='{{ route('customer.product_detail', ['id' => $product->id]) }}'">
                                    <svg class="icon">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xlink:href="#icon-detail"></use>
                                    </svg>
                                </button>
                            </div>
                                                    </div>
                            <div class="product-info">
                                                        <h3 class="product-name">
                                                            <a class="line-clamp line-clamp-2"
                                                                href="{{ route('customer.product_detail', ['id' => $product->id]) }}"
                                                                title="{{ $product->name }}">
                                                                {{ $product->name }}
                                                            </a>
                                                        </h3>
                                <div class="price-box">
                                                            @if ($product->discount_percentage > 0)
                                                                <span
                                                                    class="compare-price">{{ number_format($product->origin_price, 0, ',', '.') }}₫</span>
                                                                <span
                                                                    class="special-price">{{ number_format($product->sale_price, 0, ',', '.') }}₫</span>
                                                            @else
                                                                <span
                                                                    class="special-price">{{ number_format($product->sale_price, 0, ',', '.') }}₫</span>
                                                            @endif
                                                        </div>
                                                        @if ($product->available_colors->isNotEmpty())
                                                            <div class="color-options">
                                                                @foreach ($product->available_colors as $color)
                                                                    <span class="color-circle"
                                                                        style="background-color: {{ $color['hex_code'] }};"></span>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                        @if ($product->available_storages->isNotEmpty())
                                                            <div class="storage-options">
                                                                @foreach ($product->available_storages as $storage)
                                                                    <span
                                                                        class="storage-option">{{ $storage }}</span>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                        <div class="rating">
                                                            <span class="stars">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    <span
                                                                        class="star {{ $i <= round($product->average_rating) ? 'filled' : '' }}">★</span>
                                                                @endfor
                                                            </span>
                                                            <span class="review-count">({{ $product->total_ratings }}
                                                                đánh giá)</span>
                                                        </div>
                                                        <div class="sold-quantity">
                                                            Đã bán: {{ $product->sold }}
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev swiper-button-disabled"></div>
        </div>
        <div class="text-center no-padding">
                                    <a class="see-more" title="Xem toàn bộ sản phẩm"
                                        href="{{ route('customer.category', ['id' => $categoryId]) }}">Xem toàn bộ sản
                                        phẩm
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
				</div>

			</div>
		</div>
	</div>

    <style>
        /* Định dạng màu sắc */
        .color-options {
            margin-top: 5px;
        }

        .color-circle {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-right: 5px;
            border: 1px solid #ddd;
        }

        /* Định dạng dung lượng */
        .storage-options {
            margin-top: 5px;
        }

        .storage-option {
            display: inline-block;
            padding: 3px 8px;
            margin-right: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 12px;
            color: #333;
        }

        /* Định dạng đánh giá */
        .rating {
            margin-top: 5px;
            font-size: 14px;
        }

        .stars .star {
            color: #ddd;
        }

        .stars .star.filled {
            color: #f5c518;
        }

        .review-count {
            margin-left: 5px;
            color: #666;
        }

        /* Định dạng số lượng đã bán */
        .sold-quantity {
            margin-top: 5px;
            font-size: 12px;
            color: #666;
        }

        /* Định dạng giá */
        .price-box .compare-price {
            text-decoration: line-through;
            color: #999;
            margin-right: 5px;
        }

        .price-box .special-price {
            color: #e74c3c;
            font-weight: bold;
        }

        /* Định dạng phần trăm giảm giá */
        .discount-tag {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #e74c3c;
            color: white;
            padding: 2px 8px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
        }
    </style>

    {{-- san phẩm liên quan  --}}
	<div class="productRelate product-lq">
        <div class="container">
			<div class="block-product block-background">
				<h3 class="title-index">
                    <a class="title-name" href="/iphone-16-pro-max" title="Sản phẩm liên quan">Sản phẩm liên quan</a>
				</h3>
                <div
                    class="product-relate-swiper swiper-container p-5 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
					<div class="swiper-wrapper">
						@foreach ($relatedProducts as $relatedProduct)
						<div class="swiper-slide swiper-slide-pro" style="width: 202px; margin-right: 20px;">
                                <form action="/cart/add" method="post" class="variants product-action"
                                    data-cart-form="" data-id="product-actions-{{ $relatedProduct->id }}"
                                    enctype="multipart/form-data">
                                    @csrf
								<div class="product-thumbnail">
                                        <a class="image_thumb scale_hover"
                                            href="{{ route('customer.product_detail', ['id' => $relatedProduct->id]) }}"
                                            title="{{ $relatedProduct->name }}">
                                            <img width="234" height="234" class=""
                                                src="{{ asset($relatedProduct->image) }}"
                                                alt="{{ $relatedProduct->name }}">
                                            <!-- Hiển thị phần trăm giảm giá nếu có -->
                                            @if ($relatedProduct->discount_percentage > 0)
                                                <span
                                                    class="discount-tag">{{ $relatedProduct->discount_percentage }}%</span>
                                            @endif
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
                                            @if ($relatedProduct->discount_percentage > 0)
                                                <span
                                                    class="compare-price">{{ number_format($relatedProduct->origin_price, 0, ',', '.') }}₫</span>
                                                <span
                                                    class="special-price">{{ number_format($relatedProduct->sale_price, 0, ',', '.') }}₫</span>
                                            @else
                                                <span
                                                    class="special-price">{{ number_format($relatedProduct->sale_price, 0, ',', '.') }}₫</span>
                                            @endif
									</div>

                                        <!-- Hiển thị màu sắc -->
                                        @if ($relatedProduct->available_colors->isNotEmpty())
                                            <div class="color-options">
                                                @foreach ($relatedProduct->available_colors as $color)
                                                    <span class="color-circle"
                                                        style="background-color: {{ $color['hex_code'] }};"></span>
                                                @endforeach
                                            </div>
                                        @endif

                                        <!-- Hiển thị dung lượng -->
                                        @if ($relatedProduct->available_storages->isNotEmpty())
                                            <div class="storage-options">
                                                @foreach ($relatedProduct->available_storages as $storage)
                                                    <span class="storage-option">{{ $storage }}</span>
                                                @endforeach
                                            </div>
                                        @endif

                                        <!-- Hiển thị đánh giá -->
                                        <div class="rating">
                                            <span class="stars">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <span
                                                        class="star {{ $i <= round($relatedProduct->average_rating) ? 'filled' : '' }}">★</span>
                                                @endfor
                                            </span>
                                            <span class="review-count">({{ $relatedProduct->total_ratings }} đánh
                                                giá)</span>
                                        </div>

                                        <!-- Hiển thị số lượng đã bán -->
                                        <div class="sold-quantity">
                                            Đã bán: {{ $relatedProduct->sold }}
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


    <style>
        /* Định dạng màu sắc */

        .color-options {
            margin-top: 5px;
        }

        .color-circle {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-right: 5px;
            border: 1px solid #ddd;
        }

        /* Định dạng dung lượng */
        .storage-options {
            margin-top: 5px;
        }

        .storage-option {
            display: inline-block;
            padding: 3px 8px;
            margin-right: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 12px;
            color: #333;
        }

        /* Định dạng đánh giá */
        .rating {
            margin-top: 5px;
            font-size: 14px;
        }

        .stars .star {
            color: #ddd;
        }

        .stars .star.filled {
            color: #f5c518;
        }

        .review-count {
            margin-left: 5px;
            color: #666;
        }

        /* Định dạng số lượng đã bán */
        .sold-quantity {
            margin-top: 5px;
            font-size: 12px;
            color: #666;
        }

        /* Định dạng giá */
        .price-box .compare-price {
            text-decoration: line-through;
            color: #999;
            margin-right: 5px;
        }

        .price-box .special-price {
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
</div>


@include('layouts.customer.footer')
