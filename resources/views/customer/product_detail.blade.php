@include('layouts.customer.header')

<div class="bodywrap">

    <section class="bread-crumb">

        <div class="container">

            <ul class="breadcrumb">
                <li class="home">
                    <a href="/"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
                        </svg>&nbsp;</span>
                </li>

                <li>
                    <a class="changeurl" href="{{ url('/category/' . Str::slug($product->category->name)) }}">
                        <span>{{ $product->category->name }}</span>
                    </a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
                        </svg>&nbsp;</span>
                </li>

                <li>
                    <a class="changeurl" href="{{ url('/product/' . $product->id . '-' . Str::slug($product->name)) }}">
                        <span>{{ $product->name }}</span>
                    </a>
                </li>
            </ul>

        </div>
    </section>

    <section class="product layout-product" itemscope="" itemtype="https://schema.org/Product">
        <meta itemprop="category" content="iPhone 16 Pro Max">
        <meta itemprop="url" content="//www.hoangkien.com/iphone-16-pro-max-256gb">
        <meta itemprop="name" content="iPhone 16 Pro Max 256GB">
        <meta itemprop="image" content="http://bizweb.dktcdn.net/thumb/grande/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-b975b0aa-7752-49b5-abab-233be70b7b70.png?v=1730447628487">
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
            <meta itemprop="price" content="25600000">
            <meta itemprop="url" content="https://www.hoangkien.com/iphone-16-pro-max-256gb">
            <span itemprop="UnitPriceSpecification" itemscope="" itemtype="https://schema.org/Downpayment">
                <meta itemprop="priceType" content="25600000">
            </span>
            <meta itemprop="priceValidUntil" content="2099-01-01">
        </div>
        <div class="d-none hidden" id="https://www.hoangkien.com" itemprop="seller" itemtype="http://schema.org/Organization" itemscope="">
            <meta itemprop="name" content="NTPhone">
            <meta itemprop="url" content="https://www.hoangkien.com">
            <meta itemprop="logo" content="http://bizweb.dktcdn.net/100/112/815/themes/966034/assets/logo.png?1741067950025">
        </div>

        <div class="container">
            <div class="block-background">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title-product"><span>{{ $product->name }}</span></h1>
                    </div>
                    <div class="product-detail-left product-images col-12 col-md-12 col-lg-6 col-xl-4">
                        <div class="product-image-block">

                            <div class="swiper-container gallery-top p-5 swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                <div class="swiper-wrapper" id="lightgallery" style="transition-duration: 0ms;">

                                    <a class="swiper-slide" data-hash="0" href="//bizweb.dktcdn.net/thumb/1024x1024/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-b975b0aa-7752-49b5-abab-233be70b7b70.png?v=1730447628487" title="Click để xem" style="width: 397px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                        <img height="400" width="400" src="https://bizweb.dktcdn.net/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-b975b0aa-7752-49b5-abab-233be70b7b70.png?v=1730447628487" alt="iPhone 16 Pro Max 256GB" data-image="https://bizweb.dktcdn.net/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-b975b0aa-7752-49b5-abab-233be70b7b70.png?v=1730447628487" class="img-responsive mx-auto d-block swiper-lazy swiper-lazy-loaded">
                                    </a>

                                    <a class="swiper-slide" data-hash="1" href="//bizweb.dktcdn.net/thumb/1024x1024/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-6e3583c7-2e28-4d70-9260-2a7ce9807c0a.png?v=1730447628487" title="Click để xem" style="width: 397px; opacity: 1; transform: translate3d(-397px, 0px, 0px); transition-duration: 0ms;">
                                        <img height="400" width="400" src="https://bizweb.dktcdn.net/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-6e3583c7-2e28-4d70-9260-2a7ce9807c0a.png?v=1730447628487" alt="iPhone 16 Pro Max 256GB" data-image="https://bizweb.dktcdn.net/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-6e3583c7-2e28-4d70-9260-2a7ce9807c0a.png?v=1730447628487" class="img-responsive mx-auto d-block swiper-lazy swiper-lazy-loaded">
                                    </a>

                                    <a class="swiper-slide swiper-slide-prev" data-hash="2" href="//bizweb.dktcdn.net/thumb/1024x1024/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-01762fbd-ab14-40d2-aba2-18de6d4332c4.png?v=1730447628487" title="Click để xem" style="width: 397px; opacity: 1; transform: translate3d(-794px, 0px, 0px); transition-duration: 0ms;">
                                        <img height="400" width="400" src="https://bizweb.dktcdn.net/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-01762fbd-ab14-40d2-aba2-18de6d4332c4.png?v=1730447628487" alt="iPhone 16 Pro Max 256GB" data-image="https://bizweb.dktcdn.net/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-01762fbd-ab14-40d2-aba2-18de6d4332c4.png?v=1730447628487" class="img-responsive mx-auto d-block swiper-lazy swiper-lazy-loaded">
                                    </a>

                                    <a class="swiper-slide swiper-slide-active" data-hash="3" href="//bizweb.dktcdn.net/thumb/1024x1024/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-989f2fa0-913d-4dbe-87a5-4f3507db107c.png?v=1730447628487" title="Click để xem" style="width: 397px; opacity: 1; transform: translate3d(-1191px, 0px, 0px); transition-duration: 0ms;">
                                        <img height="400" width="400" src="https://bizweb.dktcdn.net/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-989f2fa0-913d-4dbe-87a5-4f3507db107c.png?v=1730447628487" alt="iPhone 16 Pro Max 256GB" data-image="https://bizweb.dktcdn.net/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-989f2fa0-913d-4dbe-87a5-4f3507db107c.png?v=1730447628487" class="img-responsive mx-auto d-block swiper-lazy swiper-lazy-loaded">
                                    </a>

                                    <a class="swiper-slide swiper-slide-next" data-hash="4" href="//bizweb.dktcdn.net/thumb/1024x1024/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-18bcbecf-91b4-44dc-a110-d89ac4a44c26.png?v=1730447628487" title="Click để xem" style="width: 397px; opacity: 0; transform: translate3d(-1588px, 0px, 0px); transition-duration: 0ms;">
                                        <img height="400" width="400" src="https://bizweb.dktcdn.net/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-18bcbecf-91b4-44dc-a110-d89ac4a44c26.png?v=1730447628487" alt="iPhone 16 Pro Max 256GB" data-image="https://bizweb.dktcdn.net/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-18bcbecf-91b4-44dc-a110-d89ac4a44c26.png?v=1730447628487" class="img-responsive mx-auto d-block swiper-lazy swiper-lazy-loaded">
                                    </a>

                                    <a class="swiper-slide" data-hash="5" href="//bizweb.dktcdn.net/thumb/1024x1024/100/112/815/products/16prm-full-3c3b474e-4aa6-44ed-8403-13f91b2c2a97-e16102e5-4132-4dbb-9e79-e62db600a095-4fe55179-52c0-4329-b707-d428ccf71968.png?v=1730447628487" title="Click để xem" style="width: 397px; opacity: 0; transform: translate3d(-1985px, 0px, 0px); transition-duration: 0ms;">
                                        <img height="400" width="400" src="https://bizweb.dktcdn.net/100/112/815/products/16prm-full-3c3b474e-4aa6-44ed-8403-13f91b2c2a97-e16102e5-4132-4dbb-9e79-e62db600a095-4fe55179-52c0-4329-b707-d428ccf71968.png?v=1730447628487" alt="iPhone 16 Pro Max 256GB" data-image="https://bizweb.dktcdn.net/100/112/815/products/16prm-full-3c3b474e-4aa6-44ed-8403-13f91b2c2a97-e16102e5-4132-4dbb-9e79-e62db600a095-4fe55179-52c0-4329-b707-d428ccf71968.png?v=1730447628487" class="img-responsive mx-auto d-block swiper-lazy">
                                    </a>

                                </div>
                                <div class="tag-km">

                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs p-5 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-thumbs">
                                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-99.25px, 0px, 0px);">

                                    <div class="swiper-slide swiper-slide-prev" data-hash="0" style="width: 89.25px; margin-right: 10px;">
                                        <div class="p-100">
                                            <img height="80" width="80" src="//bizweb.dktcdn.net/thumb/medium/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-b975b0aa-7752-49b5-abab-233be70b7b70.png?v=1730447628487" alt="iPhone 16 Pro Max 256GB" data-image="//bizweb.dktcdn.net/thumb/medium/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-b975b0aa-7752-49b5-abab-233be70b7b70.png?v=1730447628487" class="swiper-lazy swiper-lazy-loaded">
                                        </div>
                                    </div>

                                    <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-hash="1" style="width: 89.25px; margin-right: 10px;">
                                        <div class="p-100">
                                            <img height="80" width="80" src="//bizweb.dktcdn.net/thumb/medium/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-6e3583c7-2e28-4d70-9260-2a7ce9807c0a.png?v=1730447628487" alt="iPhone 16 Pro Max 256GB" data-image="//bizweb.dktcdn.net/thumb/medium/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-6e3583c7-2e28-4d70-9260-2a7ce9807c0a.png?v=1730447628487" class="swiper-lazy swiper-lazy-loaded">
                                        </div>
                                    </div>

                                    <div class="swiper-slide swiper-slide-visible swiper-slide-next" data-hash="2" style="width: 89.25px; margin-right: 10px;">
                                        <div class="p-100">
                                            <img height="80" width="80" src="//bizweb.dktcdn.net/thumb/medium/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-01762fbd-ab14-40d2-aba2-18de6d4332c4.png?v=1730447628487" alt="iPhone 16 Pro Max 256GB" data-image="//bizweb.dktcdn.net/thumb/medium/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-01762fbd-ab14-40d2-aba2-18de6d4332c4.png?v=1730447628487" class="swiper-lazy swiper-lazy-loaded">
                                        </div>
                                    </div>

                                    <div class="swiper-slide swiper-slide-visible swiper-slide-thumb-active" data-hash="3" style="width: 89.25px; margin-right: 10px;">
                                        <div class="p-100">
                                            <img height="80" width="80" src="//bizweb.dktcdn.net/thumb/medium/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-989f2fa0-913d-4dbe-87a5-4f3507db107c.png?v=1730447628487" alt="iPhone 16 Pro Max 256GB" data-image="//bizweb.dktcdn.net/thumb/medium/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-989f2fa0-913d-4dbe-87a5-4f3507db107c.png?v=1730447628487" class="swiper-lazy swiper-lazy-loaded">
                                        </div>
                                    </div>

                                    <div class="swiper-slide swiper-slide-visible" data-hash="4" style="width: 89.25px; margin-right: 10px;">
                                        <div class="p-100">
                                            <img height="80" width="80" src="//bizweb.dktcdn.net/thumb/medium/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-18bcbecf-91b4-44dc-a110-d89ac4a44c26.png?v=1730447628487" alt="iPhone 16 Pro Max 256GB" data-image="//bizweb.dktcdn.net/thumb/medium/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-18bcbecf-91b4-44dc-a110-d89ac4a44c26.png?v=1730447628487" class="swiper-lazy swiper-lazy-loaded">
                                        </div>
                                    </div>

                                    <div class="swiper-slide" data-hash="5" style="width: 89.25px; margin-right: 10px;">
                                        <div class="p-100">
                                            <img height="80" width="80" src="//bizweb.dktcdn.net/thumb/medium/100/112/815/products/16prm-full-3c3b474e-4aa6-44ed-8403-13f91b2c2a97-e16102e5-4132-4dbb-9e79-e62db600a095-4fe55179-52c0-4329-b707-d428ccf71968.png?v=1730447628487" alt="iPhone 16 Pro Max 256GB" data-image="//bizweb.dktcdn.net/thumb/medium/100/112/815/products/16prm-full-3c3b474e-4aa6-44ed-8403-13f91b2c2a97-e16102e5-4132-4dbb-9e79-e62db600a095-4fe55179-52c0-4329-b707-d428ccf71968.png?v=1730447628487" class="swiper-lazy">
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-button-next">
                                </div>
                                <div class="swiper-button-prev">
                                </div>
                            </div>


                        </div>



                    </div>

                    <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                        <div class="details-pro">
                            <div class="inventory_quantity">
                                <div class="thump-break row">
                                    <div class="mb-break type col-lg-6">
                                        <span class="stock-brand-title">Loại:</span>
                                        <span class="a-vendor">
                                            Điện thoại
                                        </span>
                                    </div>
                                    <div class="mb-break type col-lg-6">
                                        <span class="stock-brand-title">Thương hiệu:</span>
                                        <span class="a-vendor">
                                            {{$product->category->name ?? 'Không xác định' }}
                                        </span>
                                    </div>
                                    <div class="mb-break inventory col-lg-6">
                                        <span class="stock-brand-title">Tình trạng:</span>
                                        <span class="a-stock">
                                            @if($product->variants->isNotEmpty())
                                            {{ $product->variants->sum('stock') > 0 ? 'Còn hàng' : 'Liên hệ' }}
                                            @else
                                            Liên hệ
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <form enctype="multipart/form-data" id="add-to-cart-form" action="#" method="post" class="form-inline">
                                @csrf
                                <div class="price-box clearfix">
                                    <span class="title-price">Giá bán:</span>
                                    <span class="special-price">
                                        <span class="price product-price">
                                            {{ number_format($product->base_price, 0, ',', '.') }}₫
                                        </span>
                                        <meta itemprop="price" content="{{ $product->base_price }}">
                                        <meta itemprop="priceCurrency" content="VND">
                                    </span>
                                </div>

                                <div class="form-product">
                                    <div class="phienban">
                                        <div class="row">
                                            @if (!empty($product->variants) && is_iterable($product->variants))
                                            @foreach ($product->variants as $variant)
                                            <div class="col-lg-4 col-md-3 col-4">
                                                <a class="thumb-phienban {{ $loop->first ? 'active' : '' }}"
                                                    href="{{ route('customer.product_detail', ['id' => $product->id, 'variant' => $variant->id]) }}"
                                                    title="{{ $product->name }} {{ $variant->storage }}">

                                                    <span class="line-clamp line-clamp-1">
                                                        {{ $variant->storage }}
                                                    </span>
                                                </a>

                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="select-swatch">
                            <div class="swatch clearfix" data-option-index="0">
                                <div class="header">
                                    Màu sắc:
                                    <span class="value-properties">
                                        {{ optional($product->variants->first())->color ?? 'Không xác định' }}
                                    </span>
                                </div>

                                <div class="thump-swatch">
                                    @foreach ($product->variants as $variant)
                                    <div data-value="{{ $variant->color }}" class="swatch-element color {{ Str::slug($variant->color) }} available">
                                        <div class="tooltip">{{ $variant->color }}</div>
                                        <input id="swatch-0-{{ Str::slug($variant->color) }}" type="radio" name="option-0" value="{{ $variant->color }}" {{ $loop->first ? 'checked' : '' }}>
                                        <label for="swatch-0-{{ Str::slug($variant->color) }}">
                                            <img width="47" height="47" src="{{ $variant->image_url }}" alt="{{ $variant->color }}">
                                            <span>{{ $variant->color }}</span>
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="clearfix form-group">
                                <div class="flex-quantity">
                                    <div class="custom custom-btn-number show">
                                        <label class="sl section">Số lượng:</label>
                                        <div class="input_number_product form-control">
                                            <button class="btn_num num_1 button button_qty" onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro > 1 ) result.value--;return false;" type="button"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"></path>
                                                </svg></button>
                                            <input type="text" id="qtym" name="quantity" value="1" maxlength="3" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                            <button class="btn_num num_2 button button_qty" onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                                                </svg> </button>
                                        </div>
                                    </div>
                                    <div class="btn-mua button_actions clearfix">

                                        <button type="submit" title="Thêm vào giỏ" class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart"><span class="txt-main text_1">Thêm vào giỏ</span><span class="text_2">Giao hàng tận nơi miễn phí</span></button>

                                    </div>
                                    <div class="group-button">


                                        <a href="javascript:void(0)" title="Mua ngay" class="btn-buyNow">
                                            Mua ngay
                                        </a>

                                        <a class="button-phone" title="0813600999" href="tel:0813600999">
                                            <span>Liên hệ <b>0813600999</b></span>
                                            Để được tư vấn và hỗ trợ ngay!!!
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>



                        </form>


                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12 col-12 content-pro">
                        <div class="row">

                            <div class="col-12 col-md-12 col-lg-4 col-xl-12">
                                <div class="product-hethong">

                                    <h3 class="title-index-pro">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"></path>
                                        </svg>
                                        Hệ thống cửa hàng
                                    </h3>
                                    <div class="option-chos">

                                        <div class="group-option">
                                            <div class="group-city group">
                                                <select id="city" class="select">
                                                    <option value="ALL" selected="">Chọn tỉnh thành</option>


                                                    <option value="Hà Nội">Hà Nội</option>

                                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>

                                                    <option value=""></option>

                                                </select>
                                            </div>
                                            <div class="group-district group">
                                                <select id="district" class="select" disabled="">
                                                    <option value="ALL">Chọn quận/huyện</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="info-store info-block">
                                            <div data-local="Hà Nội" data-district="Quận Đống Đa" class="store-list"><span class="name-cuahang">NTPhone Xã Đàn</span><span class="store-name"><b>Địa chỉ:</b> 284 Xã Đàn, Đống Đa, Hà Nội: 083.888.3663</span></div>
                                            <div data-local="Hà Nội" data-district="Quận Long Biên" class="store-list"><span class="name-cuahang">NTPhone Hồng Tiến</span><span class="store-name"><b>Địa chỉ:</b> 48 Hồnng Tiến, Q. Long Biên, Hà Nội: 090.896.3993</span></div>
                                            <div data-local="Hà Nội" data-district="Quận Hà Đông" class="store-list"><span class="name-cuahang">NTPhone Trần Phú</span><span class="store-name"><b>Địa chỉ:</b> 42 Trần Phú, Q. Hà Đông, Hà Nội: 086.888.3663</span></div>
                                            <div data-local="Hồ Chí Minh" data-district="Quận 10" class="store-list"><span class="name-cuahang">NTPhone Ngô Gia Tự</span><span class="store-name"><b>Địa chỉ:</b> 403 Ngô Gia Tự- P.2, Q.10 Hồ Chí Minh: 0707.678.707</span></div>
                                        </div>
                                    </div>
                                </div>
                                <script src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/tabletop.js?1741067950025" type="text/javascript"></script>
                                <script>
                                    $(document).ready(function() {
                                        var public_spreadsheet_url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vRIgXK-Wn8Uzhfto2jPCMlzuYspNv1ylRbGnQYIRAz52eOlpsWVBOiUHtGsG4x5jA0gjQGwdACLSk7D/pub?output=csv";
                                        var data;
                                        Papa.parse(public_spreadsheet_url, {
                                            header: true,
                                            download: true,
                                            dynamicTyping: true,
                                            complete: function(results) {
                                                var result = results.data;
                                                var dataFix = result;
                                                showlocation();
                                                $('.store-list span').click(function() {
                                                    var urls = $(this).attr('data-url');
                                                    $('.wrapcontact').addClass('d-none');
                                                    $('.pagebody').removeClass('d-none');
                                                    $('.pagebody iframe').attr('src', urls);
                                                });



                                                /*Theo thành phố*/
                                                var citytarget = '';

                                                $('.group-city select').on('change', function(e) {


                                                    var optionSelected = $("option:selected", this);
                                                    var valueSelected = this.value;
                                                    citytarget = this.value;
                                                    if (valueSelected != 'ALL') {
                                                        $('.store-list').addClass('d-none');
                                                        $('.store-list').each(function() {
                                                            if (valueSelected === $(this).attr('data-local')) {
                                                                $(this).removeClass('d-none');
                                                            }
                                                        });
                                                        $('#district').removeAttr('disabled');
                                                        showDistrict();
                                                        removeDuplicate3();
                                                    } else {
                                                        $('#district').attr('disabled', 'disabled');
                                                        $('.store-list').removeClass('d-none');
                                                        $('.group-district select').html('<option value="ALL">Chọn quận/huyện</option>');

                                                    }

                                                });


                                                /*Theo quận huyện*/
                                                $('.group-district select').on('change', function(e) {
                                                    var oSelected = $("option:selected", this);
                                                    var oSelectedCity = $("option:selected", '.group-city select');
                                                    var oSelectedProduct = $("option:selected", '.group-product select');
                                                    var oSelectedStore = $("option:selected", '.group-store select');
                                                    $(this).attr("selected", "selected");
                                                    var valSelected = oSelected.data('district');
                                                    var valueSelected = oSelected.val();
                                                    var valCity = oSelected.data('local');
                                                    var valProduct = oSelected.data('product');
                                                    var valStore = oSelected.data('store');
                                                    var valSelectedProduct = oSelectedCity.data('product');
                                                    var valSelectedCity = oSelectedCity.val();
                                                    var valSelectedStore = oSelectedStore.val();

                                                    if (valueSelected != 'ALL') {
                                                        $('.store-list').addClass('d-none');

                                                        $('.store-list').each(function() {
                                                            console.log('test' + valCity)
                                                            if (valSelected === $(this).attr('data-district') && valCity === $(this).attr('data-local')) {
                                                                $(this).removeClass('d-none');
                                                            }
                                                        });
                                                        $('#district').removeAttr('disabled');
                                                    } else {
                                                        console.log('check' + valSelectedCity);
                                                        $('.store-list').each(function() {
                                                            if (valSelectedCity === $(this).attr('data-local')) {
                                                                $(this).removeClass('d-none');
                                                            }
                                                        });
                                                    }
                                                });

                                                function showlocation(local) {
                                                    var cityString = "";
                                                    dataFix.forEach(function(data) {
                                                        let datasdt = data.sdt.toString();
                                                        let result = datasdt.replace('#', '');
                                                        cityString += '<div data-local="' + data.city + '" data-district="' + data.district + '" class="store-list">' +
                                                            '<span class="name-cuahang">' + data.name + '</span>' +
                                                            '<span class="store-name"><b>Địa chỉ:</b> ' + data.address + '</span>' +
                                                            '</div>	';
                                                    })
                                                    $('.info-store').html(cityString);
                                                }


                                                function showDistrict(local) {
                                                    var district = "";
                                                    var citys = citytarget;
                                                    dataFix.forEach(function(data) {

                                                        if (data.city === citys) {

                                                            district += '<option data-local="' + data.city + '"data-district="' + data.district + '" value="' + data.city + '" class="district-list">' +
                                                                '<span class="district-name">' + data.district + '</span>' +
                                                                '</option>';
                                                        }
                                                    })
                                                    $('#district').html('<option value="ALL">Chọn quận/huyện</option>' + district);
                                                }

                                                function removeDuplicate() {
                                                    var map = {};
                                                    $('#product option').each(function() {
                                                        if (map[$(this).attr('data-product')]) {
                                                            $(this).remove()
                                                        }
                                                        map[$(this).attr('data-product')] = true;
                                                    })
                                                }

                                                function removeDuplicate2() {
                                                    var map = {};
                                                    $('#city option').each(function() {
                                                        if (map[$(this).attr('data-local')]) {
                                                            $(this).remove()
                                                        }
                                                        map[$(this).attr('data-local')] = true;
                                                    })
                                                }

                                                function removeDuplicate3() {
                                                    var map = {};
                                                    $('#district option').each(function() {
                                                        if (map[$(this).attr('data-district')]) {
                                                            $(this).remove()
                                                        }
                                                        map[$(this).attr('data-district')] = true;
                                                    })
                                                }

                                                function awe_convertVietnamese(str) {
                                                    str = str.toUpperCase();
                                                    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
                                                    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
                                                    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
                                                    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
                                                    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
                                                    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
                                                    str = str.replace(/đ/g, "d");
                                                    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g, "-");
                                                    str = str.replace(/-+-/g, "-");
                                                    str = str.replace(/^\-+|\-+$/g, "");
                                                    return str;
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>


                            <div class="col-12 col-md-6 col-lg-4 col-xl-12">


                                <div class="khuyen-mai">
                                    <h3 class="title">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
                                            <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"></path>
                                            <path d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z"></path>
                                        </svg> Cam kết bán hàng
                                    </h3>
                                    <div class="content">
                                        <ul>


                                            <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/camket_1.png?1741067950025" alt="Bảo hành 12 tháng lỗi 1 đổi 1">
                                                Bảo hành 12 tháng lỗi 1 đổi 1
                                            </li>




                                            <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/camket_2.png?1741067950025" alt="Cam kết không Zin tặng máy">
                                                Cam kết không Zin tặng máy
                                            </li>




                                            <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/camket_3.png?1741067950025" alt="Lên đời thu 100% giá web">
                                                Lên đời thu 100% giá web
                                            </li>




                                            <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/camket_4.png?1741067950025" alt="Bảo hành rơi vỡ vào nước sửa chữa miễn phí không giới hạn">
                                                Bảo hành rơi vỡ vào nước sửa chữa miễn phí không giới hạn
                                            </li>




                                            <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/camket_5.png?1741067950025" alt="Reset bảo hành chỉ 500K">
                                                Reset bảo hành chỉ 500K
                                            </li>




                                            <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/camket_6.png?1741067950025" alt="Tặng kèm cáp sạc nhanh zin + Cường lực full màn + ốp silicon chống sốc">
                                                Tặng kèm cáp sạc nhanh zin + Cường lực full màn + ốp silicon chống sốc
                                            </li>



                                        </ul>
                                    </div>
                                </div>

                            </div>


                            <div class="col-12 col-md-6 col-lg-4 col-xl-12">

                                <div class="khuyen-mai">
                                    <h3 class="title">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                                            <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z"></path>
                                        </svg>
                                        Tình trạng máy
                                    </h3>
                                    <div class="content">
                                        <ul>


                                            <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/km_product1.png?1741067950025" alt="Máy 98% là các máy cấn móp, xước sâu nhiều">Máy 98% là các máy cấn móp, xước sâu nhiều</li>



                                            <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/km_product2.png?1741067950025" alt="Máy 99% là các máy gần như mới, có vài vết xước nhẹ nhỏ">Máy 99% là các máy gần như mới, có vài vết xước nhẹ nhỏ</li>



                                            <li><img width="20" height="20" src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/km_product3.png?1741067950025" alt="Máy New 100% là các máy mới chưa Active ( không box )">Máy New 100% là các máy mới chưa Active ( không box )</li>

                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <script>
                    $(document).ready(function() {
                        $('.swatch-element').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                    });
                </script>

            </div>






        </div>
</div>


</div>
</div>
</div>

</section>
<div class="mid-product">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 ">
                <div class="block-background" style="    margin-bottom: 20px;">

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
                                        <p><img alt="iphone 16 series đặc điểm nổi bật" loading="lazy" src="https://cdn2.cellphones.com.vn/x/media/wysiwyg/1-Pro.jpg"></p>
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

                                    <p><strong>Bước 1:</strong>&nbsp;Truy cập website và lựa chọn sản phẩm&nbsp;cần mua</p>
                                    <p><strong>Bước 2:</strong>&nbsp;Click và sản phẩm muốn mua, màn hình hiển thị ra pop up với các lựa chọn sau</p>
                                    <p>Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để lựa chọn thêm sản phẩm vào giỏ hàng</p>
                                    <p>Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ hàng</p>
                                    <p>Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm vào: Đặt hàng và thanh toán</p>
                                    <p><strong>Bước 3:</strong>&nbsp;Lựa chọn thông tin tài khoản thanh toán</p>
                                    <p>Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là email và mật khẩu vào mục đã có tài khoản trên hệ thống</p>
                                    <p>Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền các thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài khoản bạn sẽ dễ dàng theo dõi được đơn hàng của mình</p>
                                    <p>Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột vào mục đặt hàng không cần tài khoản</p>
                                    <p><strong>Bước 4:</strong>&nbsp;Điền các thông tin của bạn để nhận đơn hàng, lựa chọn hình thức thanh toán và vận chuyển cho đơn hàng của mình</p>
                                    <p><strong>Bước 5:</strong>&nbsp;Xem lại thông tin đặt hàng, điền chú thích và gửi đơn hàng</p>
                                    <p>Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách gọi điện lại để xác nhận lại đơn hàng và địa chỉ của bạn.</p>
                                    <p>Trân trọng cảm ơn.</p>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="row row-fix">




                    <div class="col-12 col-md-12 col-lg-12 col-fix">
                        <div class="product-like block-background">
                            <h3 class="title">

                                <a class="title-name" href="iphone-13-13pro-13pro-max" title="Có thể bạn thích">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    Có thể bạn thích
                                </a>

                            </h3>

                            <div class="product1-swiper swiper-container p-5 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-multirow" style="cursor: grab;">
                                <div class="swiper-wrapper" style="width: 768px; transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide swiper-slide-active" style="width: 236px; margin-right: 20px;">





                                        <form action="/cart/add" method="post" class="variants product-action" data-cart-form="" data-id="product-actions-38020522" enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-13-pro-max-128gb" title="iPhone 13 Pro Max 128GB">
                                                    <img width="234" height="234" class="lazyload image1 loaded" src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/ruu6-compressed-f8055a33-8558-4050-8507-010c93da58fc-ce6a1016-c340-48e8-a98f-981ebcbcfab7.jpg?v=1730353846397" data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/ruu6-compressed-f8055a33-8558-4050-8507-010c93da58fc-ce6a1016-c340-48e8-a98f-981ebcbcfab7.jpg?v=1730353846397" alt="iPhone 13 Pro Max 128GB" data-was-processed="true">

                                                </a>
                                                <div class="tag-km">

                                                </div>


                                                <input class="hidden" type="hidden" name="variantId" value="127971838">
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết" type="button" onclick="window.location.href='/iphone-13-pro-max-128gb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-detail"></use>
                                                        </svg>

                                                    </button>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <h3 class="product-name"><a class="line-clamp line-clamp-2" href="/iphone-13-pro-max-128gb" title="iPhone 13 Pro Max 128GB">iPhone 13 Pro Max 128GB</a></h3>
                                                <div class="price-box">
                                                    14.700.000₫

                                                </div>


                                                <div class="wishlish-compare">


                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" style="width: 236px; margin-right: 20px;">






                                        <form action="/cart/add" method="post" class="variants product-action" data-cart-form="" data-id="product-actions-38020526" enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-13-pro-max-256gb" title="iPhone 13 Pro Max 256GB">
                                                    <img width="234" height="234" class="lazyload image1 loaded" src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/ruu6-compressed-f8055a33-8558-4050-8507-010c93da58fc-636bf21e-1e50-41d9-84ac-16c85cf727c1.jpg?v=1730353916017" data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/ruu6-compressed-f8055a33-8558-4050-8507-010c93da58fc-636bf21e-1e50-41d9-84ac-16c85cf727c1.jpg?v=1730353916017" alt="iPhone 13 Pro Max 256GB" data-was-processed="true">


                                                </a>
                                                <div class="tag-km">





                                                </div>


                                                <input class="hidden" type="hidden" name="variantId" value="127971943">
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết" type="button" onclick="window.location.href='/iphone-13-pro-max-256gb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-detail"></use>
                                                        </svg>

                                                    </button>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <h3 class="product-name"><a class="line-clamp line-clamp-2" href="/iphone-13-pro-max-256gb" title="iPhone 13 Pro Max 256GB">iPhone 13 Pro Max 256GB</a></h3>
                                                <div class="price-box">
                                                    15.700.000₫

                                                </div>


                                                <div class="wishlish-compare">


                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="swiper-slide" style="width: 236px; margin-right: 20px;">




                                        <form action="/cart/add" method="post" class="variants product-action" data-cart-form="" data-id="product-actions-38020529" enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-13-pro-max-512gb" title="iPhone 13 Pro Max 512GB">
                                                    <img width="234" height="234" class="lazyload image1" src="//bizweb.dktcdn.net/100/112/815/themes/966034/assets/lazy.png?1741067950025" data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/ruu6-compressed-f8055a33-8558-4050-8507-010c93da58fc-76a3a7d3-3981-4714-bd80-692f3e9f038b.jpg?v=1730354006193" alt="iPhone 13 Pro Max 512GB">


                                                </a>
                                                <div class="tag-km">





                                                </div>


                                                <input class="hidden" type="hidden" name="variantId" value="127972049">
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết" type="button" onclick="window.location.href='/iphone-13-pro-max-512gb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-detail"></use>
                                                        </svg>

                                                    </button>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <h3 class="product-name"><a class="line-clamp line-clamp-2" href="/iphone-13-pro-max-512gb" title="iPhone 13 Pro Max 512GB">iPhone 13 Pro Max 512GB</a></h3>
                                                <div class="price-box">
                                                    16.500.000₫

                                                </div>


                                                <div class="wishlish-compare">


                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="swiper-slide" style="margin-top: 20px; width: 236px; margin-right: 20px;">

                                        <form action="/cart/add" method="post" class="variants product-action" data-cart-form="" data-id="product-actions-38020533" enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-13-pro-max-1thone-13-pro-max-1tb" title="iPhone 13 Pro Max 1TB">
                                                    <img width="234" height="234" class="lazyload image1 loaded" src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/ruu6-compressed-f8055a33-8558-4050-8507-010c93da58fc-66023d22-ea51-400d-ba94-e295dc4134ec.jpg?v=1730354128813" data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/ruu6-compressed-f8055a33-8558-4050-8507-010c93da58fc-66023d22-ea51-400d-ba94-e295dc4134ec.jpg?v=1730354128813" alt="iPhone 13 Pro Max 1TB" data-was-processed="true">


                                                </a>
                                                <div class="tag-km">





                                                </div>


                                                <input class="hidden" type="hidden" name="variantId" value="127972157">
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết" type="button" onclick="window.location.href='/iphone-13-pro-max-1thone-13-pro-max-1tb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-detail"></use>
                                                        </svg>

                                                    </button>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <h3 class="product-name"><a class="line-clamp line-clamp-2" href="/iphone-13-pro-max-1thone-13-pro-max-1tb" title="iPhone 13 Pro Max 1TB">iPhone 13 Pro Max 1TB</a></h3>
                                                <div class="price-box">
                                                    17.000.000₫

                                                </div>


                                                <div class="wishlish-compare">


                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="swiper-slide" style="margin-top: 20px; width: 236px; margin-right: 20px;">

                                        <form action="/cart/add" method="post" class="variants product-action" data-cart-form="" data-id="product-actions-38020576" enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="/iphone-13-pro-128gb" title="iPhone 13 Pro 128GB">
                                                    <img width="234" height="234" class="lazyload image1 loaded" src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/ruu6-compressed-4fac14c8-68c2-4c05-8cce-745a3cd6084d-711e9c30-b09e-49f4-81da-db2a7e91590f.jpg?v=1730354869223" data-src="//bizweb.dktcdn.net/thumb/large/100/112/815/products/ruu6-compressed-4fac14c8-68c2-4c05-8cce-745a3cd6084d-711e9c30-b09e-49f4-81da-db2a7e91590f.jpg?v=1730354869223" alt="iPhone 13 Pro 128GB" data-was-processed="true">


                                                </a>
                                                <div class="tag-km">





                                                </div>


                                                <input class="hidden" type="hidden" name="variantId" value="127972310">
                                                <div class="action">
                                                    <button class="btn-cart btn-views" title="Xem chi tiết" type="button" onclick="window.location.href='/iphone-13-pro-128gb'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-detail"></use>
                                                        </svg>

                                                    </button>
                                                </div>

                                            </div>
                                            <div class="product-info">

                                                <h3 class="product-name"><a class="line-clamp line-clamp-2" href="/iphone-13-pro-128gb" title="iPhone 13 Pro 128GB">iPhone 13 Pro 128GB</a></h3>
                                                <div class="price-box">
                                                    12.400.000₫

                                                </div>


                                                <div class="wishlish-compare">


                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="swiper-button-next">

                                </div>
                                <div class="swiper-button-prev swiper-button-disabled">

                                </div>

                            </div>
                            <div class="text-center no-padding">
                                <a class="see-more" title="Xem toàn bộ sản phẩm" href="iphone-13-13pro-13pro-max">Xem toàn bộ sản phẩm <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>





<div class="productRelate product-lq">
    <div class="container">
        <div class="block-product block-background">
            <h3 class="title-index">
                <a class="title-name" href="#" title="Sản phẩm liên quan">Sản phẩm liên quan</a>
            </h3>
            <div class="product-relate-swiper swiper-container p-5 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                    
                    @foreach ($relatedProducts as $related)
                        <div class="swiper-slide swiper-slide-pro swiper-slide-active" style="width: 234px; margin-right: 20px;">
                            <form action="/cart/add" method="post" class="variants product-action" enctype="multipart/form-data">
                                @csrf
                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover" href="{{ route('customer.product_detail', $related->id) }}" title="{{ $related->title }}">
                                        <img width="234" height="234" class="lazyload image1 loaded"
                                            src="{{ asset($related->image) }}" 
                                            alt="{{ $related->title }}">
                                    </a>
                                    <div class="tag-km"></div>
                                    <input class="hidden" type="hidden" name="variantId" value="{{ $related->id }}">
                                    <div class="action">
                                        <button class="btn-cart btn-views" title="Xem chi tiết" type="button" onclick="window.location.href='{{ route('customer.product_detail', $related->id) }}'">
                                            <svg class="icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-detail"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name">
                                        <a class="line-clamp line-clamp-2" href="{{ route('customer.product_detail', $related->id) }}" title="{{ $related->title }}">
                                            {{ $related->title }}
                                        </a>
                                    </h3>
                                    <div class="price-box">
                                        @if($related->price)
                                            {{ number_format($related->price, 0, ',', '.') }} đ
                                        @else
                                            Liên hệ
                                        @endif
                                    </div>
                                    <div class="wishlish-compare"></div>
                                </div>
                            </form>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-button-next swiper-button-disabled"></div>
                <div class="swiper-button-prev swiper-button-disabled"></div>
            </div>
            <div class="text-center no-padding">
                <a class="see-more" title="Xem toàn bộ sản phẩm" href="#">Xem toàn bộ sản phẩm
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
                </svg>
                Thông số kỹ thuật
            </span>
        </h3>
        <div class="content">

            <p><img alt="iphone 16 series đặc điểm nổi bật" loading="lazy" src="https://cdn2.cellphones.com.vn/x/media/wysiwyg/1-Pro.jpg"></p>
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
        $('.product-tab>ul>li').removeClass('active');
        $(obj).addClass('active');
        var id = $(obj).attr('data-tab');
        $('.tab-content').removeClass('active');
        $(id).addClass('active');
    }
    $('.button-thongso').click(function() {
        $('.thong-so-popup, .backdrop__body-backdrop___1rvky').addClass('active');

    });
    $('.product-tab>ul>li').click(function() {
        activeTab(this);
        return false;
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
            var form = $('#' + selector.domIdPrefix).closest('form');
            for (var i = 0, length = variant.options.length; i < length; i++) {
                var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
                if (radioButton.length) {
                    radioButton.get(0).checked = true;
                }
            }
        }

        var addToCart = $('.form-product .btn-cart.normal_button'),
            buyNow = $('.form-product .btn-buyNow'),
            FastAddToCart = $('.form-product .btn-cart.fast'),
            form = $('.form-product .form-group'),
            productPrice = $('.details-pro .special-price .product-price'),
            qty = $('.inventory_quantity .a-stock'),
            comparePrice = $('.details-pro .old-price .product-price-old'),
            comparePriceText = $('.details-pro .old-price'),
            savePrice = $('.details-pro .save-price .product-price-save'),
            savePriceText = $('.details-pro .save-price'),
            qtyBtn = $('.form-product .form-group .custom-btn-number'),
            BtnSold = $('.form-product .form-group .btn-mua'),
            product_sku = $('.details-product .sku-product .variant-sku');

        // ✅ Hiển thị SKU sản phẩm
        product_sku.html(variant && variant.sku ? variant.sku : 'Đang cập nhật');

        FastAddToCart.addClass('d-none');

        if (variant && variant.available) {
            if (variant.inventory_management === "bizweb") {
                if (variant.inventory_quantity !== 0) {
                    qty.html('<span class="a-stock">Liên hệ</span>');
                } else if (variant.inventory_quantity === '') {
                    qty.html(variant.inventory_policy === "continue" ? '<span class="a-stock">Liên hệ</span>' : '<span class="a-stock a-stock-out">Hết hàng</span>');
                }
            } else {
                qty.html('<span class="a-stock">Liên hệ</span>');
            }

            FastAddToCart.removeClass('d-none');
            addToCart.html('<span class="txt-main text_1">Thêm vào giỏ</span><span class="text_2">Giao hàng tận nơi miễn phí</span>')
                .removeAttr('disabled').removeClass('btn-soldout');
            buyNow.removeClass('d-none');
            BtnSold.removeClass('btnsold');
            qtyBtn.removeClass('d-none');

            // ✅ Hiển thị giá sản phẩm, dùng `Intl.NumberFormat` để format tiền
            if (variant.price == 0) {
                productPrice.html('Liên hệ');
                comparePrice.hide();
                savePrice.hide();
                comparePriceText.hide();
                savePriceText.hide();
                form.addClass('d-none');
            } else {
                form.removeClass('d-none');
                let formattedPrice = new Intl.NumberFormat('vi-VN').format(variant.price) + "₫";
                productPrice.html(formattedPrice);

                if (variant.compare_at_price > variant.price) {
                    let formattedComparePrice = new Intl.NumberFormat('vi-VN').format(variant.compare_at_price) + "₫";
                    let formattedSavePrice = new Intl.NumberFormat('vi-VN').format(variant.compare_at_price - variant.price) + "₫";

                    comparePrice.html(formattedComparePrice).show();
                    savePrice.html(formattedSavePrice).show();
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
            addToCart.html('<span class="txt-main-hh">Hết hàng</span>').attr('disabled', 'disabled').addClass('btn-soldout');
            buyNow.addClass('d-none');
            BtnSold.addClass('btnsold');
            qtyBtn.addClass('d-none');

            if (variant) {
                if (variant.price != 0) {
                    form.removeClass('d-none');
                    productPrice.html(new Intl.NumberFormat('vi-VN').format(variant.price) + "₫");

                    if (variant.compare_at_price > variant.price) {
                        FastAddToCart.addClass('d-none');
                        addToCart.html('<span class="txt-main-hh">Hết hàng</span>').attr('disabled', 'disabled').addClass('btn-soldout');
                        buyNow.addClass('d-none');

                        let formattedComparePrice = new Intl.NumberFormat('vi-VN').format(variant.compare_at_price) + "₫";
                        let formattedSavePrice = new Intl.NumberFormat('vi-VN').format(variant.compare_at_price - variant.price) + "₫";

                        comparePrice.html(formattedComparePrice).show();
                        savePrice.html(formattedSavePrice).show();
                        comparePriceText.show();
                        savePriceText.show();
                    } else {
                        comparePrice.hide();
                        savePrice.hide();
                        comparePriceText.hide();
                        savePriceText.hide();
                        FastAddToCart.addClass('d-none');
                        addToCart.html('<span class="txt-main-hh">Hết hàng</span>').attr('disabled', 'disabled').addClass('btn-soldout');
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
    };

    /*begin variant image*/
    if (variant && variant.image) {
        var originalImage = jQuery(".gallery-thumbs img");
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
                "id": 38055822,
                "name": "iPhone 16 Pro Max 256GB",
                "alias": "iphone-16-pro-max-256gb",
                "vendor": "Apple",
                "type": "Điện Thoại",
                "content": "<p><img alt=\"iphone 16 series đặc điểm nổi bật\" loading=\"lazy\" src=\"https://cdn2.cellphones.com.vn/x/media/wysiwyg/1-Pro.jpg\" /></p>",
                "summary": null,
                "template_layout": "product",
                "available": true,
                "tags": ["phienban_iphone-16-pro-max_256GB"],
                "price": 25600000.0000,
                "price_min": 25600000.0000,
                "price_max": 30600000.0000,
                "price_varies": true,
                "compare_at_price": 0,
                "compare_at_price_min": 0,
                "compare_at_price_max": 0,
                "compare_at_price_varies": false,
                "variants": [{
                    "id": 128105842,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Đen / Máy Xấu 98%",
                    "options": ["Titan Đen", "Máy Xấu 98%"],
                    "option1": "Titan Đen",
                    "option2": "Máy Xấu 98%",
                    "option3": null,
                    "available": false,
                    "taxable": false,
                    "price": 25600000.0000,
                    "compare_at_price": null,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-01762fbd-ab14-40d2-aba2-18de6d4332c4.png?v=1730447628487"
                    }
                }, {
                    "id": 128105574,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Đen / Máy LikeNew 99%",
                    "options": ["Titan Đen", "Máy LikeNew 99%"],
                    "option1": "Titan Đen",
                    "option2": "Máy LikeNew 99%",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 28600000.0000,
                    "compare_at_price": null,
                    "inventory_management": null,
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-01762fbd-ab14-40d2-aba2-18de6d4332c4.png?v=1730447628487"
                    }
                }, {
                    "id": 128105846,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Đen / Máy sạc ít Pin 100%",
                    "options": ["Titan Đen", "Máy sạc ít Pin 100%"],
                    "option1": "Titan Đen",
                    "option2": "Máy sạc ít Pin 100%",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 29100000.0000,
                    "compare_at_price": null,
                    "inventory_management": null,
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-01762fbd-ab14-40d2-aba2-18de6d4332c4.png?v=1730447628487"
                    }
                }, {
                    "id": 128105582,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Đen / Máy New Trần 100%",
                    "options": ["Titan Đen", "Máy New Trần 100%"],
                    "option1": "Titan Đen",
                    "option2": "Máy New Trần 100%",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 30100000.0000,
                    "compare_at_price": null,
                    "inventory_management": null,
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-01762fbd-ab14-40d2-aba2-18de6d4332c4.png?v=1730447628487"
                    }
                }, {
                    "id": 128105843,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Trắng / Máy Xấu 98%",
                    "options": ["Titan Trắng", "Máy Xấu 98%"],
                    "option1": "Titan Trắng",
                    "option2": "Máy Xấu 98%",
                    "option3": null,
                    "available": false,
                    "taxable": false,
                    "price": 26100000.0000,
                    "compare_at_price": null,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-6e3583c7-2e28-4d70-9260-2a7ce9807c0a.png?v=1730447628487"
                    }
                }, {
                    "id": 128105575,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Trắng / Máy LikeNew 99%",
                    "options": ["Titan Trắng", "Máy LikeNew 99%"],
                    "option1": "Titan Trắng",
                    "option2": "Máy LikeNew 99%",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 29100000.0000,
                    "compare_at_price": null,
                    "inventory_management": null,
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-6e3583c7-2e28-4d70-9260-2a7ce9807c0a.png?v=1730447628487"
                    }
                }, {
                    "id": 128105847,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Trắng / Máy sạc ít Pin 100%",
                    "options": ["Titan Trắng", "Máy sạc ít Pin 100%"],
                    "option1": "Titan Trắng",
                    "option2": "Máy sạc ít Pin 100%",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 29600000.0000,
                    "compare_at_price": null,
                    "inventory_management": null,
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-6e3583c7-2e28-4d70-9260-2a7ce9807c0a.png?v=1730447628487"
                    }
                }, {
                    "id": 128105583,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Trắng / Máy New Trần 100%",
                    "options": ["Titan Trắng", "Máy New Trần 100%"],
                    "option1": "Titan Trắng",
                    "option2": "Máy New Trần 100%",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 30600000.0000,
                    "compare_at_price": null,
                    "inventory_management": null,
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-6e3583c7-2e28-4d70-9260-2a7ce9807c0a.png?v=1730447628487"
                    }
                }, {
                    "id": 128105844,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Tự Nhiên / Máy Xấu 98%",
                    "options": ["Titan Tự Nhiên", "Máy Xấu 98%"],
                    "option1": "Titan Tự Nhiên",
                    "option2": "Máy Xấu 98%",
                    "option3": null,
                    "available": false,
                    "taxable": false,
                    "price": 26100000.0000,
                    "compare_at_price": null,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-989f2fa0-913d-4dbe-87a5-4f3507db107c.png?v=1730447628487"
                    }
                }, {
                    "id": 128105576,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Tự Nhiên / Máy LikeNew 99%",
                    "options": ["Titan Tự Nhiên", "Máy LikeNew 99%"],
                    "option1": "Titan Tự Nhiên",
                    "option2": "Máy LikeNew 99%",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 29100000.0000,
                    "compare_at_price": null,
                    "inventory_management": null,
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-989f2fa0-913d-4dbe-87a5-4f3507db107c.png?v=1730447628487"
                    }
                }, {
                    "id": 128105848,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Tự Nhiên / Máy sạc ít Pin 100%",
                    "options": ["Titan Tự Nhiên", "Máy sạc ít Pin 100%"],
                    "option1": "Titan Tự Nhiên",
                    "option2": "Máy sạc ít Pin 100%",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 29600000.0000,
                    "compare_at_price": null,
                    "inventory_management": null,
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-989f2fa0-913d-4dbe-87a5-4f3507db107c.png?v=1730447628487"
                    }
                }, {
                    "id": 128105584,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Tự Nhiên / Máy New Trần 100%",
                    "options": ["Titan Tự Nhiên", "Máy New Trần 100%"],
                    "option1": "Titan Tự Nhiên",
                    "option2": "Máy New Trần 100%",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 30600000.0000,
                    "compare_at_price": null,
                    "inventory_management": null,
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-989f2fa0-913d-4dbe-87a5-4f3507db107c.png?v=1730447628487"
                    }
                }, {
                    "id": 128105845,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Sa Mạc / Máy Xấu 98%",
                    "options": ["Titan Sa Mạc", "Máy Xấu 98%"],
                    "option1": "Titan Sa Mạc",
                    "option2": "Máy Xấu 98%",
                    "option3": null,
                    "available": false,
                    "taxable": false,
                    "price": 26100000.0000,
                    "compare_at_price": null,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-18bcbecf-91b4-44dc-a110-d89ac4a44c26.png?v=1730447628487"
                    }
                }, {
                    "id": 128105577,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Sa Mạc / Máy LikeNew 99%",
                    "options": ["Titan Sa Mạc", "Máy LikeNew 99%"],
                    "option1": "Titan Sa Mạc",
                    "option2": "Máy LikeNew 99%",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 29100000.0000,
                    "compare_at_price": null,
                    "inventory_management": null,
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-18bcbecf-91b4-44dc-a110-d89ac4a44c26.png?v=1730447628487"
                    }
                }, {
                    "id": 128105849,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Sa Mạc / Máy sạc ít Pin 100%",
                    "options": ["Titan Sa Mạc", "Máy sạc ít Pin 100%"],
                    "option1": "Titan Sa Mạc",
                    "option2": "Máy sạc ít Pin 100%",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 29600000.0000,
                    "compare_at_price": null,
                    "inventory_management": null,
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-18bcbecf-91b4-44dc-a110-d89ac4a44c26.png?v=1730447628487"
                    }
                }, {
                    "id": 128105585,
                    "barcode": null,
                    "sku": null,
                    "title": "Titan Sa Mạc / Máy New Trần 100%",
                    "options": ["Titan Sa Mạc", "Máy New Trần 100%"],
                    "option1": "Titan Sa Mạc",
                    "option2": "Máy New Trần 100%",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 30600000.0000,
                    "compare_at_price": null,
                    "inventory_management": null,
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "kg",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {
                        "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-18bcbecf-91b4-44dc-a110-d89ac4a44c26.png?v=1730447628487"
                    }
                }],
                "featured_image": {
                    "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-b975b0aa-7752-49b5-abab-233be70b7b70.png?v=1730447628487"
                },
                "images": [{
                    "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-full-da134920-b18f-41e8-a5c9-50312d7d0e9d-b975b0aa-7752-49b5-abab-233be70b7b70.png?v=1730447628487"
                }, {
                    "src": "https://bizweb.dktcdn.net/100/112/815/products/iphone-16-promax-trang-48c90668-b63f-4fcf-a9ea-4e40b856dcd7-6e3583c7-2e28-4d70-9260-2a7ce9807c0a.png?v=1730447628487"
                }, {
                    "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-den-89708087-aa1d-43ed-94eb-458ef9c19524-01762fbd-ab14-40d2-aba2-18de6d4332c4.png?v=1730447628487"
                }, {
                    "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-titan-tn-92c8a959-8054-45c5-a7b6-110229df3773-989f2fa0-913d-4dbe-87a5-4f3507db107c.png?v=1730447628487"
                }, {
                    "src": "https://bizweb.dktcdn.net/100/112/815/products/16-prm-sa-mac-73b77578-986e-45eb-abec-c942363f95f0-18bcbecf-91b4-44dc-a110-d89ac4a44c26.png?v=1730447628487"
                }, {
                    "src": "https://bizweb.dktcdn.net/100/112/815/products/16prm-full-3c3b474e-4aa6-44ed-8403-13f91b2c2a97-e16102e5-4132-4dbb-9e79-e62db600a095-4fe55179-52c0-4329-b707-d428ccf71968.png?v=1730447628487"
                }],
                "options": ["Màu sắc", "Tình Trạng"],
                "created_on": "2024-11-01T14:53:48",
                "modified_on": "2025-03-10T10:25:22",
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
            $(this).closest('.swatch').find('.header .value-roperties').html($(this).closest('.swatch').find('input:checked').val());
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
                        if (settings.language !== "en" && $.ajaxChimp.responses[msg] !== undefined && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]) {
                            msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]
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
                    if (settings.language !== "en" && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language]["submit"]) {
                        submitMsg = $.ajaxChimp.translations[settings.language]["submit"]
                    }
                    label.html(submitMsg).show(2e3);
                    return false
                })
            });
            return this
        }
    })(jQuery);
</script>@include('layouts.customer.footer')