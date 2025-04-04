@include('layouts.customer.header')

<section data-id="320977" data-cate-id="5698" class="detail">
    <div class="intro-detail">
        <div class="center-page">
            <aside id="slider-detail">
                <div class="video-img">
                    <div class="thubmail-slide full">
                        <div class="prev disabled"></div>
                        <div class="next"></div>
                        <div class="owl-carousel slider-img owl-loaded owl-drag" id="slider-defaults">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all;">

                                    <div class="owl-item slidenumber1" style="width: 600px;">
                                        <div class="item-img" data-thumb="{{ $product->image ?: 'https://via.placeholder.com/650' }}">
                                            <img class="owl-lazy" alt="Product Image" data-src="{{ $product->image ?: 'https://via.placeholder.com/650' }}" width="650" height="650">
                                        </div>
                                    </div>

                                    {{-- Danh sách ảnh từ $productImages --}}
                                    @foreach ($productImages as $index => $image)
                                    <div class="owl-item slidenumber{{ $index + 2 }}" style="width: 600px;">
                                        <div class="item-img" data-thumb="{{ $image->mini_image ?: 'https://via.placeholder.com/650' }}">
                                            <img class="owl-lazy" alt="Product Image" data-src="{{ $image->mini_image ?: 'https://via.placeholder.com/650' }}" width="650" height="650">
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-sp"></div>
            </aside>


            <aside>
                <h1 style="    display: block;
        padding: 0 0 20px;
        color: #fff;
        font-size: 32px;
        font-weight: 700;
        padding-top: 5px;
        line-height: 1.2;
        position: relative;">{{ $product->name }}</h1>

                <div class="capacity callout">
                    <ul>
                        <span>Dung lượng</span>
                        @php
                        $uniqueStorages = collect(); // Tạo collection để kiểm tra trùng lặp dung lượng
                        @endphp
                        @foreach ($variants as $variant)
                        @if ($variant->status === 'active' && !$uniqueStorages->contains($variant->storage))
                        @php
                        $uniqueStorages->push($variant->storage); // Thêm dung lượng vào danh sách đã chọn
                        @endphp
                        <li class="{{ $loop->first ? 'active' : '' }}"
                            data-id="{{ $variant->id }}"
                            data-storage="{{ $variant->storage }}"
                            data-price="{{ $variant->price }}"
                            data-origin-price="{{ $variant->origin_price ?? 0 }}"
                            data-stock="{{ $variant->stock }}"
                            data-color="{{ $variant->color }}"> <!-- Thêm thuộc tính color -->
                            <a href="javascript:void(0)"> {{ $variant->storage }} </a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>


                <div class="color-sp">
                    <span id="selected-color">
                        Màu : {{ optional($variants->where('status', 'active')->first())->color ?? 'N/A' }}
                    </span>
                    <ul>
                        @foreach ($variants->where('status', 'active') as $variant)
                        <li class="{{ $loop->first ? 'active' : '' }}"
                            data-id="{{ $variant->id }}"
                            data-name="{{ $variant->color }}"
                            data-code="{{ $variant->color }}"
                            data-storage="{{ $variant->storage }}"
                            data-origin-price="{{ $variant->origin_price ?? 0 }}"
                            data-price="{{ $variant->price }}"
                            data-color="{{ $variant->color }}"
                            data-stock="{{ $variant->stock }}">
                            <a href="javascript:;" id="colorVariant"></a>



                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="box_saving olgr v2">
                    <div class="bs_title">
                        <div class="bs_price">
                            <b>Online Giá Rẻ Quá</b>
                            <strong id="product-price">{{ number_format($variants->first()->price, 0, ',', '.') }}₫</strong>

                            @if ($variants->first()->origin_price && $variants->first()->origin_price > $variants->first()->price)
                            <em id="origin-price">{{ number_format($variants->first()->origin_price, 0, ',', '.') }}₫</em>
                            <i id="discount-percent">({{ round((1 - $variants->first()->price / $variants->first()->origin_price) * 100) }}%)</i>
                            @else
                            <em id="origin-price" style="display:none;"></em>
                            <i id="discount-percent" style="display:none;"></i>
                            @endif
                        </div>


                        <div class="bs_time">
                            <span>Kết thúc sau</span>
                            <div id="clock_oltk" class="clockv2" data-time="2025/03/30 23:59:00" data-reload="1"><b>05</b><i>:</i><b>49</b><i>:</i><b>47</b></div>
                            <div class="bs_count">
                                <img src="https://cdnv2.tgdd.vn/webmwg/2024/ContentMwg/images/fs-iconfire.png">
                                <span>
                                    <i style="width:100%"></i>
                                    @foreach ($product->variants as $variant)
                                    <p><b>Còn {{ $variant->stock }}</b> - {{ $variant->color }} - {{ $variant->ssd }}</p>
                                    @endforeach
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="bs_content">
                        <div class="pr-item mg-bot10">
                            <p>
                                <small>Giá và khuyến mãi có thể kết thúc sớm hơn dự kiến</small>
                            </p>
                        </div>
                        <div class="loyalty">
                            <div class="loyalty__main">
                                <img data-src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/promote_loyalty/logo.png" class=" ls-is-cached lazyloaded" width="24" height="24" src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/promote_loyalty/logo.png">
                                <p class="loyalty__main__point"><b>+61.980</b> điểm tích lũy Quà Tặng VIP</p>
                                <img data-src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/promote_loyalty/question_mark.png" class="loyalty__main__ic-tooltip ls-is-cached lazyloaded" width="20" height="20" src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/promote_loyalty/question_mark.png">
                            </div>
                            <ul class="loyalty__tooltip">
                                <li>Đây là điểm tích lũy tạm tính khi mua sản phẩm này. Số điểm thực tế có thể thay đổi và sẽ được hiển thị chính xác sau khi Quý khách hoàn tất đặt hàng.</li>
                                <li>Tải <b>app Quà Tặng VIP</b> để tích và sử dụng điểm cho khách hàng thân thiết. <a href="https://www.topzone.vn/tekzone/tat-tan-tat-thong-tin-ve-app-tich-diem-hoan-toan-moi-1480642" target="_blank">Tìm hiểu thêm</a></li>
                            </ul>
                        </div>
                        <div class="bs_rule">
                            <ul>
                                <li>Giao hàng nhanh chóng (tuỳ khu vực)</li>
                                <li>Mỗi số điện thoại chỉ mua 3 sản phẩm trong 1 tháng</li>
                                <li>Giá và khuyến mãi có thể kết thúc sớm</li>
                            </ul>
                        </div>
                        <div class="buy-sp twoprice">
                            <!-- Nút Mua Ngay -->
                            <a href="javascript:void(0)" onclick="buyNow()" class="btn-buy red full">
                                MUA NGAY GIÁ {{ number_format($variant->price, 0, '', '.') }}₫
                            </a>

                            <!-- Nút Mua Trả Chậm -->
                            <a href="/tra-gop/tai-chinh/mac/{{ $product->slug }}" class="btn-ins pay-taichinh has-another-pay twoprice blue">
                                Mua trả chậm 0% <span>Qua công ty tài chính</span>
                            </a>

                            <a href="/tra-gop/the/mac/{{ $product->slug }}" class="btn-ins pay-nganluong blue has-another-pay twoprice">
                                Trả chậm qua thẻ <span>Visa, Mastercard, JCB, Amex</span>
                            </a>
                        </div>

                        <!-- Form gửi dữ liệu -->
                        <form action="{{ route('customer.postCart') }}" id="form-buy-now" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">

                            <input type="hidden" name="color" id="color">

                            <input type="hidden" name="storage" id="storage">
                        </form>

                    </div>
                </div>
                <ul class="policy">
                    <li>
                        <span>
                            <i class="topzone-boxtskt"></i>
                            Bộ sản phẩm gồm: Chuột ( Magic Mouse ), Bàn phím ( Magic Keyboard ), Cáp chuyển ( Cáp USB-C thành Lightning ), Adapter sạc ( 143W ), Dây nguồn ( 2m ), Sách hướng dẫn
                        </span>
                    </li>
                    <li>
                        <span>
                            <i class="topzone-doitra"></i>
                            Hư gì đổi nấy <b>12 tháng</b> tại 3044 siêu thị trên toàn quốc <a href="https://www.topzone.vn/bao-hanh-doi-tra"> Xem chi tiết chính sách bảo hành, đổi trả </a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <i class="topzone-baohanhpolicy"></i>
                            Bảo hành chính hãng 1 năm
                        </span>
                    </li>
                    <li>
                        <span>
                            <i class="topzone-giaohang"></i>
                            Giao hàng nhanh toàn quốc <a href="/giao-hang">Xem chi tiết</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <i class="topzone-tongdai"></i>
                            Tổng đài: <a href="tel:1900969642">1900.9696.42</a> (8:00 - 21:30)
                        </span>
                    </li>
                </ul>
                <div class="pr-loyalty">
                    <div class="qr-download">
                        <img data-src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/promote_loyalty/qr.png?v=1" class=" ls-is-cached lazyloaded" width="72" height="72" src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/promote_loyalty/qr.png?v=1">
                        <p>Quét để tải App</p>
                    </div>
                    <div class="text-area">
                        <p class="text-area__title"><img data-src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/promote_loyalty/logo.png" class=" ls-is-cached lazyloaded" width="32" height="32" src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/promote_loyalty/logo.png"><span>Quà Tặng VIP</span></p>
                        <p class="text-area__content">
                            Tích &amp; Sử dụng điểm <br> cho khách hàng thân thiết
                        </p>
                        <p class="text-area__note">Sản phẩm của tập đoàn MWG</p>
                    </div>
                    <div class="download-link">
                        <a href="http://play.google.com/store/apps/details?id=mwg.tgdd.loyalty" target="_blank">
                            <img data-src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/promote_loyalty/ggplay.png" class=" ls-is-cached lazyloaded" width="136" height="40" src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/promote_loyalty/ggplay.png">
                        </a>
                        <a href="https://apps.apple.com/vn/app/qu%C3%A0-t%E1%BA%B7ng-vip/id1589555369" target="_blank">
                            <img data-src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/promote_loyalty/appstore.png" class=" ls-is-cached lazyloaded" width="136" height="40" src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/promote_loyalty/appstore.png">
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <div class="descrip">
        <div class="tabs">
            <h2 class="tab-link current" data-tab="tab-1">
                <button class="tab-button" id="desc-tab">Mô tả</button>
            </h2>
            <h2 class="tab-link" data-tab="tab-2">
                <button class="tab-button" id="specs-tab">Thông số kỹ thuật</button>
            </h2>
        </div>

        <div id="description" class="tab-content active">
            <h3>Mô tả sản phẩm</h3>
            <p>{{ $product->description }}</p>
        </div>
        <div class="specifications tab-content" id="tab-2">
            <div class="box-specifi">
                <a href="javascript:;" class="active" data-group-id="11608" data-index="1">
                    <h3>Bộ xử lý</h3>
                </a>
                <ul class="text-specifi active">
                    <li>
                        <aside>
                            <strong>Công nghệ CPU:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->cpu }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Loại CPU:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->cpu_type ?? 'Hãng không công bố' }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Tốc độ CPU:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->cpu_speed ?? 'Hãng không công bố' }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Tốc độ tối đa:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->cpu_max_speed ?? 'Hãng không công bố' }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Chipset:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->chipset ?? 'Hãng không công bố' }}</span>
                        </aside>
                    </li>
                </ul>
            </div>

            <div class="box-specifi">
                <a href="javascript:;" class="active" data-group-id="11609" data-index="2">
                    <h3>Bộ nhớ RAM, Ổ cứng</h3>
                </a>
                <ul class="text-specifi active">
                    <li>
                        <aside>
                            <strong>RAM:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->ram }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Loại RAM:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->ram_type ?? 'Hãng không công bố' }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Dung lượnglượng:</strong>
                        </aside>
                        <aside>
                            <!-- Thông tin kỹ thuật -->
                            <div id="product-storage">
                                <span id="storage-info">Dung lượng: <span>{{ $product->default_storage }}</span></span>
                            </div>

                        </aside>
                    </li>
                </ul>
            </div>

            <div class="box-specifi">
                <a href="javascript:;" class="" data-group-id="11610" data-index="3">
                    <h3>Màn hình</h3>
                </a>
                <ul class="text-specifi">
                    <li>
                        <aside>
                            <strong>Kích thước màn hình:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->screen }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Công nghệ màn hình:</strong>
                        </aside>
                        <aside>
                            <span class="comma">{{ $product->screen_technology ?? 'Không có thông tin' }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Độ phân giải:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->screen_resolution ?? 'Không có thông tin' }}</span>
                        </aside>
                    </li>
                </ul>
            </div>

            <div class="box-specifi">
                <a href="javascript:;" class="" data-group-id="11906" data-index="4">
                    <h3>Đồ họa và Âm thanh</h3>
                </a>
                <ul class="text-specifi">
                    <li>
                        <aside>
                            <strong>Thiết kế card:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->graphics_card ?? 'Không có thông tin' }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Card màn hình:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->graphics_card_type ?? 'Không có thông tin' }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Công nghệ âm thanh:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->sound_technology ?? 'Không có thông tin' }}</span>
                        </aside>
                    </li>
                </ul>
            </div>

            <div class="box-specifi">
                <a href="javascript:;" class="" data-group-id="11612" data-index="9">
                    <h3>Cổng kết nối &amp; tính năng mở rộng</h3>
                </a>
                <ul class="text-specifi">
                    <li>
                        <aside>
                            <strong>Cổng giao tiếp:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->ports ?? 'Không có thông tin' }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Giao tiếp mạng:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->network_communication ?? 'Không có thông tin' }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Webcam:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->webcam ?? 'Không có thông tin' }}</span>
                        </aside>
                    </li>
                </ul>
            </div>

            <div class="box-specifi">
                <a href="javascript:;" class="" data-group-id="11615" data-index="10">
                    <h3>Kích thước &amp; khối lượng</h3>
                </a>
                <ul class="text-specifi">
                    <li>
                        <aside>
                            <strong>Kích thước, khối lượng:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->dimensions ?? 'Không có thông tin' }}</span>
                        </aside>
                    </li>
                </ul>
            </div>

            <div class="box-specifi">
                <a href="javascript:;" class="" data-group-id="11907" data-index="11">
                    <h3>Thông tin khác</h3>
                </a>
                <ul class="text-specifi">
                    <li>
                        <aside>
                            <strong>Bộ nguồn điện:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->power_supply ?? 'Không có thông tin' }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Hệ điều hành:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->os ?? 'Không có thông tin' }}</span>
                        </aside>
                    </li>
                    <li>
                        <aside>
                            <strong>Thời gian ra mắt:</strong>
                        </aside>
                        <aside>
                            <span class="">{{ $product->release_year ?? 'Không có thông tin' }}</span>
                        </aside>
                    </li>
                </ul>
            </div>
        </div>

        <div class="description tab-content current short" id="tab-1">
            <div class="text-detail ">
                <p><img alt="iMac 24 inch M3 2023 8CPU - Giới thiệu" data-src="https://cdn.tgdd.vn/Products/Images/5698/318238/s16/imac-24-inch-2023-4-5k-m3-8-core-gpu-desk-1.jpg" class=" lazyloaded" title="iMac 24 inch M3 2023 8CPU - Giới thiệu" src="https://cdn.tgdd.vn/Products/Images/5698/318238/s16/imac-24-inch-2023-4-5k-m3-8-core-gpu-desk-1.jpg"><img alt="iMac 24 inch M3 2023 8CPU - Hiệu năng" data-src="https://cdn.tgdd.vn/Products/Images/5698/318238/s16/imac-24-inch-2023-4-5k-m3-8-core-gpu-desk-2.jpg" class=" lazyloaded" title="iMac 24 inch M3 2023 8CPU - Hiệu năng" src="https://cdn.tgdd.vn/Products/Images/5698/318238/s16/imac-24-inch-2023-4-5k-m3-8-core-gpu-desk-2.jpg"></p>
                <p></p>
                <p></p>
                <h3><strong>Nội dung về tính năng</strong></h3>
                <p>Máy tính để bàn tất cả trong một cực đỉnh, nay siêu mạnh mẽ với chip M3. Với màn hình 24 inch tuyệt đẹp<sup>1</sup>&nbsp;trong một thiết kế mang tính biểu tượng cùng camera, micrô và loa chất lượng đỉnh cao.&nbsp;<a href="https://www.topzone.vn/imac" target="_blank" title="Tham khảo các mẫu iMac hiện đang kinh doanh tại Topzone.vn.">iMac</a>&nbsp;là lựa chọn hoàn hảo cho cả công việc và giải trí.</p>
                <h3><strong>Pháp lý</strong></h3>
                <p>Hiện có sẵn các lựa chọn để nâng cấp. Các màu iMac có sẵn tại cửa hàng có thể thay đổi.</p>
                <p><sup>1</sup>Kích thước thật của màn hình theo đường chéo là 23.5 inch.</p>
                <!-- Khảo sát -->
                <div class="survey-wrap">
                    <div class="crm-survey-render" data-type="QUESTION_FORM" data-applicationid="1" data-programid="447" data-attributeid-2="" data-programcode="7FAF6E1E41A2DC2" data-siteid="16" data-provinceid="3" data-districtid="0" data-wardid="0">
                        <div id="survey-question-form" class="main-form-programid447 survey-system-question-form-TopZone program_447 svelte-1pwfq7v">
                            <div class="crm-wrapper-survey">
                                <div class="main-form" style="border-color: rgb(50, 50, 50);">
                                    <div id="crm-question-form-null-447">
                                        <div class="flex-container svelte-cktoy5">
                                            <div class="crm-ask-and-answer_survey_system flex-reverse-direction">
                                                <div class="wrap_question_survey_system">
                                                    <div class="crm-ask" style="text-align: left;"><span class="question-name" style="font-style: normal; font-weight: 600; font-size: 13px; line-height: 18px; color: rgb(81, 87, 100); flex: 0 0 auto; order: 0;">Bạn có hài lòng với thông tin sản phẩm không?</span></div>
                                                </div>
                                                <div id="wrap_lst_answer_questionid1294" class="wrap_lst_answer_Horizontal svelte-cktoy5">
                                                    <div id="div-button-crm-survey" class="svelte-unsrhu">
                                                        <div class="wrap_anwser_survey_system_survey_system svelte-13ainzo" style="width: 100%;float: left; --backgroundColorMain:#323232">
                                                            <div key="5054" class="answer-input dflex svelte-13ainzo" style="height: 100%;"><button class="crmsurvey-btnanswer-icon svelte-13ainzo" fdprocessedid="zx0dfl" style="border-color: rgb(50, 50, 50);">
                                                                    <div style="flex: 1 0 0%;"><img src="https://cdn.tgdd.vn/crmweb/survey/img/icon-happy.png" alt="radio_5054" class="hoverScale transition-hover surver-img-hasIcon svelte-13ainzo"></div>
                                                                    <div style="flex: 1 0 0%;"><span class="surver-text-hasIcon svelte-13ainzo" style="line-height: 20px;">Hài lòng</span></div>
                                                                </button></div>
                                                        </div>
                                                        <div class="wrap_anwser_survey_system_survey_system svelte-13ainzo" style="width: 100%;float: left; --backgroundColorMain:#323232">
                                                            <div key="5055" class="answer-input dflex svelte-13ainzo" style="height: 100%;"><button class="crmsurvey-btnanswer-icon svelte-13ainzo" fdprocessedid="eu24ul" style="border-color: rgb(50, 50, 50);">
                                                                    <div style="flex: 1 0 0%;"><img src="https://cdn.tgdd.vn/crmweb/survey/img/icon-bad.png" alt="radio_5055" class="hoverScale transition-hover surver-img-hasIcon svelte-13ainzo"></div>
                                                                    <div style="flex: 1 0 0%;"><span class="surver-text-hasIcon svelte-13ainzo" style="line-height: 20px;">Không hài lòng</span></div>
                                                                </button></div>
                                                        </div>
                                                    </div>
                                                    <div id="div-text-crm-survey" class="svelte-unsrhu"></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="crmspantextinputerror"></div>
                                    </div>
                                    <div id="main-form-tks-programid-null-447"></div>
                                </div>
                            </div>
                            <form action="" id="">
                                <input type="hidden" name="color" value="">
                                <input type="hidden" name="storage" value="">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                            </form>
                        </div>
                    </div>

                    <link href="//cdn.tgdd.vn/crmweb/survey/js/survey.min.v202503300610.css" rel="stylesheet" type="text/css">
                    <script defer="defer" async="async" src="//cdn.tgdd.vn/crmweb/survey/js/survey.min.v202503300610.js"></script>
                </div>
                <div class="bg-article"></div>
                <a href="javascript:;" class="btn-detail" onclick="$('.description').removeClass('short');$(this).remove();$('.bg-article').remove();$('.text-detail').addClass('expand')"><span>Xem thêm</span></a>
            </div>
        </div>

        <div class="rating-container">
            @if($hasPurchased) <!-- Chỉ hiển thị form đánh giá nếu người dùng đã mua sản phẩm -->
            <div class="rating-title">Đánh giá sản phẩm này</div>
            <div class="rating-subtitle">
                Nếu đã mua sản phẩm này tại Ntshop. Hãy đánh giá ngay để giúp hàng ngàn người chọn mua hàng tốt nhất bạn nhé!
            </div>

            <div class="rating-wrapper">
                <div class="rating-stars">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="star {{ isset($rating) && $rating->rating >= $i ? 'selected' : '' }}"
                        data-value="{{ $i }}">★</span>
                        @endfor
                </div>
                <div class="rating-labels">
                    <div class="label">Rất tệ</div>
                    <div class="label">Tệ</div>
                    <div class="label">Tạm ổn</div>
                    <div class="label">Tốt</div>
                    <div class="label">Rất tốt</div>
                </div>
            </div>

            <div class="rating-comment">
                <textarea class="comment-box" placeholder="Nhập đánh giá của bạn..."
                    {{ isset($rating) ? 'readonly' : '' }}>{{ $rating->review ?? '' }}</textarea>
            </div>

            @if(!isset($rating))
            <button class="submit-button" onclick="submitRating()">Gửi đánh giá</button>
            @endif
            @endif
        </div>
        <div class="ratings-list">
            <h3>Đánh giá sản phẩm</h3>
            @foreach ($ratings as $rating)
            <div class="rating-item">
                <div class="rating-user">
                    <strong>{{ $rating->fullname }}</strong> <!-- Hiển thị tên người đánh giá -->
                </div>
                <div class="rating-stars">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="star {{ $rating->rating >= $i ? 'selected' : '' }}">★</span>
                        @endfor
                </div>
                <div class="rating-comment">
                    <p>{{ $rating->review }}</p> <!-- Hiển thị bình luận -->
                </div>
                <div class="rating-date">
                    <small>Đánh giá vào: {{ $rating->created_at->format('d/m/Y') }}</small> <!-- Hiển thị ngày đánh giá -->
                </div>
            </div>
            @endforeach
        </div>




        <!--#endregion-->
        <!--#region WebPage-->
        <script type="application/ld+json">
            {
                "@type": "WebPage",
                "@id": "https://www.topzone.vn/mac/imac-24-inch-2023-4-5k-m3-16gb#WebPage",
                "url": "https://www.topzone.vn/mac/imac-24-inch-2023-4-5k-m3-16gb",
                "inLanguage": ["EN", "VN"],
                "name": "iMac 24 inch M3 16GB/256GB - Chính hãng",
                "publisher": {
                    "@type": "Organization",
                    "@id": "https://www.topzone.vn/#Organization"
                },
                "description": "iMac 24 inch M3 16GB/256GB chính hãng. Bảo hành uy tín, trả góp với giá ưu đãi, giao hàng nhanh chóng tận nơi. Xem ngay!",
                "isPartOf": {
                    "@id": "https://www.topzone.vn/#website"
                },
                "@context": "https://schema.org"
            }
        </script>
        <!--#endregion-->
        <!--#region VideoObject-->
        <!--#endregion-->
        <!--#region ImageObject-->
        <script type="application/ld+json">
            {
                "@type": "ImageObject",
                "keywords": [],
                "about": {
                    "@type": "Thing",
                    "image": "https://cdn.tgdd.vn/Products/Images/5698/320977/s16/imac-m3-pink-thumb-650x650.png",
                    "url": "https://www.topzone.vn/mac/imac-24-inch-2023-4-5k-m3-16gb",
                    "mainEntityOfPage": "https://www.topzone.vn/mac/imac-24-inch-2023-4-5k-m3-16gb",
                    "name": "iMac 24 inch M3 16GB/256GB",
                    "description": "iMac 24 inch M3 16GB/256GB chính hãng. Bảo hành uy tín, trả góp với giá ưu đãi, giao hàng nhanh chóng tận nơi. Xem ngay!"
                },
                "name": "https://cdn.tgdd.vn/Products/Images/5698/320977/s16/imac-m3-pink-thumb-650x650.png",
                "contentUrl": "https://cdn.tgdd.vn/Products/Images/5698/320977/s16/imac-m3-pink-thumb-650x650.png",
                "url": "https://cdn.tgdd.vn/Products/Images/5698/320977/s16/imac-m3-pink-thumb-650x650.png",
                "contentSize": "49.1kb",
                "Width": "800",
                "Height": "800",
                "uploadDate": "2021-12-31T9:00:00.000Z",
                "caption": "iMac 24 inch M3 16GB/256GB",
                "alternativeHeadline": "iMac 24 inch M3 16GB/256GB chính hãng Apple 100% tại TopZone",
                "description": null,
                "sourceOrganization": {
                    "@type": "Organization",
                    "@id": "https://www.topzone.vn/#organization"
                },
                "publisher": {
                    "@type": "Organization",
                    "@id": "https://www.topzone.vn/#organization"
                },
                "creator": {
                    "@type": "Organization",
                    "@id": "https://www.topzone.vn/#organization"
                },
                "producer": {
                    "@type": "Organization",
                    "@id": "https://www.topzone.vn/#organization"
                },
                "copyrightHolder": {
                    "@type": "Organization",
                    "@id": "https://www.topzone.vn/#organization"
                },
                "author": {
                    "@type": "Organization",
                    "@id": "https://www.topzone.vn/#organization"
                },
                "@context": "https://schema.org"
            }
        </script>
        <!--#endregion-->
        <!--#region Product-->
        <script type="application/ld+json">
            {
                "@type": "Product",
                "name": "iMac 24 inch M3 16GB/256GB",
                "url": "https://www.topzone.vn/mac/imac-24-inch-2023-4-5k-m3-16gb",
                "@id": "https://www.topzone.vn/mac/imac-24-inch-2023-4-5k-m3-16gb#product",
                "award": "iMac 24 inch M3 16GB/256GB chính hãng Apple 100% tại TopZone",
                "description": "iMac 24 inch M3 16GB/256GB chính hãng. Bảo hành uy tín, trả góp với giá ưu đãi, giao hàng nhanh chóng tận nơi. Xem ngay!",
                "disambiguatingDescription": "iMac 24 inch M3 16GB/256GB chính hãng. Bảo hành uy tín, trả góp với giá ưu đãi, giao hàng nhanh chóng tận nơi. Xem ngay!",
                "mainEntityOfPage": "https://www.topzone.vn/mac/imac-24-inch-2023-4-5k-m3-16gb",
                "isVariantOf": {
                    "@type": "ProductGroup",
                    "name": "iMac, Mac mini",
                    "url": "https://www.topzone.vn/mac"
                },
                "image": [
                    "https://cdn.tgdd.vn/Products/Images/5698/320977/s16/imac-m3-pink-thumb-650x650.png"
                ],
                "sku": 320977,
                "mpn": 320977,
                "color": [
                    "Hồng"
                ],
                "brand": {
                    "@type": "Brand",
                    "url": "https://www.topzone.vn/mac",
                    "@id": "https://www.topzone.vn/mac#brand"
                },
                "manufacturer": {
                    "@type": "Organization",
                    "@id": "https://www.apple.com/#organization"
                },
                "offers": {
                    "@type": "Offer",
                    "priceCurrency": "VND",
                    "itemCondition": "https://schema.org/NewCondition",
                    "priceValidUntil": "December 31, 2025",
                    "price": "31990000.0"
                },
                "potentialAction": {
                    "@type": "BuyAction",
                    "instrument": [
                        "phone",
                        "laptop",
                        "pc",
                        "tablet"
                    ],
                    "seller": {
                        "@id": "https://www.topzone.vn/#organization"
                    },
                    "mainEntityOfPage": "https://www.topzone.vn/cart/",
                    "name": "Đặt Hàng",
                    "url": "https://www.topzone.vn/cart/",
                    "target": "https://www.topzone.vn/cart/",
                    "description": "Đặt hàng Apple chính hãng 100% tại TopZone",
                    "priceSpecification": {
                        "@type": "PriceSpecification",
                        "priceCurrency": "VND",
                        "name": "Giá iMac 24 inch M3 16GB/256GB",
                        "price": "41990000.0",
                        "validFrom": "01-01- 2025",
                        "validThrough": "31-12- 2025"
                    }
                },
                "category": "https://www.topzone.vn/mac",
                "width": "71.5 mm",
                "height": "146.7 mm",
                "depth": "7.65 mm",
                "weight": "174 g",
                "additionalProperty": [{
                        "@type": "PropertyValue",
                        "name": "Công nghệ CPU",
                        "value": [
                            "Apple M3"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Loại CPU",
                        "value": [
                            "Hãng không công bố"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Tốc độ CPU",
                        "value": [
                            "100 GB/s memory bandwidth"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Tốc độ tối đa",
                        "value": [
                            "Hãng không công bố"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Chipset",
                        "value": [
                            "Hãng không công bố"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "RAM",
                        "value": [
                            "16 GB"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Loại RAM",
                        "value": [
                            "Hãng không công bố"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Số khe RAM",
                        "value": [
                            "Hãng không công bố"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Tốc độ Bus RAM",
                        "value": [
                            "Hãng không công bố"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Hỗ trợ RAM tối đa",
                        "value": [
                            "Không hỗ trợ nâng cấp"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Ổ cứng",
                        "value": [
                            "SSD 256 GB"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Kích thước màn hình",
                        "value": [
                            "24 inch"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Công nghệ màn hình",
                        "value": [
                            "True Tone Technology",
                            "500 nits brightness",
                            "Wide color (P3)"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Độ phân giải",
                        "value": [
                            "Retina 4.5K (4480 x 2520)"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Thiết kế card",
                        "value": [
                            "Card đồ hoạ tích hợp"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Card màn hình",
                        "value": [
                            "8-core GPU"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Công nghệ âm thanh",
                        "value": [
                            "3 micro",
                            "Dolby Atmos",
                            "Hệ thống 6 loa",
                            "Wide stereo sound",
                            "Spatial Audio"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Cổng giao tiếp",
                        "value": [
                            "Jack 3.5 mm",
                            "2 x Thunderbolt / USB 4 (hỗ trợ DisplayPort, Thunderbolt 3 (up to 40Gb/s), USB 4 (up to 40Gb/s), USB 3.1 Gen 2 (up to 10Gb/s))"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Giao tiếp mạng",
                        "value": [
                            "Wi-Fi 6E (802.11ax)",
                            "Bluetooth 5.3"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Webcam",
                        "value": [
                            "1080p FaceTime HD camera"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Tính năng khác",
                        "value": [
                            "Đi kèm chuột & bàn phím không dây"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Kích thước, khối lượng",
                        "value": [
                            "Dài 547 mm - Rộng 461 mm - Dày 147 mm - Nặng 4.43 kg"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Bộ nguồn điện",
                        "value": [
                            "143 W"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Hệ điều hành",
                        "value": [
                            "macOS Sonoma"
                        ]
                    },
                    {
                        "@type": "PropertyValue",
                        "name": "Thời gian ra mắt",
                        "value": [
                            "2023"
                        ]
                    }
                ],
                "@context": "https://schema.org"
            }
        </script>

        <!--#endregion-->
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let selectedStorage = document.querySelector('.capacity ul li.active')?.dataset.storage;
        let selectedColor = document.querySelector('.color-sp ul li.active')?.dataset.color;
        let productId = "{{ $product->id }}"; // Lấy id của sản phẩm từ Blade

        // Hàm cập nhật giá
        function updatePrice() {
            if (!selectedStorage || !selectedColor) return;

            fetch(`/api/get-price?product_id=${productId}&storage=${selectedStorage}&color=${selectedColor}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        let formattedPrice = new Intl.NumberFormat('vi-VN').format(data.price) + "₫";
                        document.getElementById("product-price").textContent = formattedPrice;

                        if (data.origin_price) {
                            let formattedOriginPrice = new Intl.NumberFormat('vi-VN').format(data.origin_price) + "₫";
                            document.getElementById("origin-price").textContent = formattedOriginPrice;
                            document.getElementById("origin-price").style.display = "inline";

                            let discountPercent = `(${Math.round((1 - data.price / data.origin_price) * 100)}%)`;
                            document.getElementById("discount-percent").textContent = discountPercent;
                            document.getElementById("discount-percent").style.display = "inline";
                        } else {
                            document.getElementById("origin-price").style.display = "none";
                            document.getElementById("discount-percent").style.display = "none";
                        }

                        // **Cập nhật giá trên nút "MUA NGAY"**
                        let buyNowButton = document.querySelector(".btn-buy.red.full");
                        if (buyNowButton) {
                            buyNowButton.innerHTML = `MUA NGAY GIÁ ${formattedPrice}`;
                        }

                        // **Cập nhật URL để lưu trạng thái**
                        const newUrl = `?storage=${selectedStorage}&color=${selectedColor}`;
                        history.pushState(null, "", newUrl);
                    }
                })
                .catch(error => console.error("Lỗi khi lấy giá:", error));
        }

        // Hàm cập nhật màu sắc dựa trên dung lượng đã chọn
        function updateAvailableColors() {
            if (!selectedStorage) return;

            // Lọc các màu sắc hợp lệ theo dung lượng
            document.querySelectorAll(".color-sp ul li").forEach(item => {
                let colorStorage = item.dataset.storage; // Lấy dung lượng của mỗi màu
                if (colorStorage === selectedStorage) {
                    item.style.display = "inline-block"; // Hiển thị màu sắc nếu dung lượng khớp
                    item.style.pointerEvents = "auto";
                    item.style.opacity = "1";
                } else {
                    item.style.display = "none"; // Ẩn màu sắc nếu dung lượng không khớp
                    item.style.pointerEvents = "none"; // Vô hiệu hóa click
                    item.style.opacity = "0.5";
                }
            });

            // Chọn màu sắc hợp lệ đầu tiên nếu không có màu được chọn
            let firstValidColor = document.querySelector(".color-sp ul li:not([style*='display: none'])");
            if (firstValidColor && !selectedColor) {
                document.querySelector(".color-sp ul li.active")?.classList.remove("active");
                firstValidColor.classList.add("active");
                selectedColor = firstValidColor.dataset.color;
            }
        }

        // Cập nhật thông tin dung lượng khi thay đổi
        function updateStorageInfo() {
            const storageInfoElement = document.getElementById("storage-info");
            if (storageInfoElement && selectedStorage) {
                storageInfoElement.querySelector("span").textContent = selectedStorage; // Cập nhật giá trị dung lượng
            }
        }

        // Hàm xử lý khi click vào dung lượng hoặc màu sắc
        function handleVariantClick(event, type) {
            if (event.currentTarget.classList.contains("disabled")) return; // Chặn click nếu bị vô hiệu hóa

            document.querySelector(`.${type} ul li.active`)?.classList.remove("active");
            event.currentTarget.classList.add("active");

            if (type === "capacity") {
                selectedStorage = event.currentTarget.dataset.storage;
                updateAvailableColors(); // Cập nhật màu sắc khi thay đổi dung lượng
                updateStorageInfo(); // Cập nhật thông tin dung lượng
                document.getElementById("storage").value = selectedStorage; // Gán giá trị dung lượng vào input hidden
            } else if (type === "color-sp") {
                selectedColor = event.currentTarget.dataset.color;
                document.getElementById("color").value = selectedColor; // Gán giá trị màu vào input hidden
            }

            updatePrice(); // Cập nhật giá sau khi chọn dung lượng hoặc màu sắc
        }

        // Lắng nghe sự kiện click trên dung lượng
        document.querySelectorAll(".capacity ul li").forEach(item => {
            item.addEventListener("click", function(event) {
                handleVariantClick(event, "capacity");
            });
        });

        // Lắng nghe sự kiện click trên màu sắc
        document.querySelectorAll(".color-sp ul li").forEach(item => {
            item.addEventListener("click", function(event) {
                handleVariantClick(event, "color-sp");
            });
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("product_buy");
        const addToCartBtn = document.querySelector(".btn-ins.blue");
        const buyNowBtn = document.querySelector(".btn-ins.red");
        const inputColor = document.querySelector("input[name='product_variant_color']");
        const inputStorage = document.querySelector("input[name='product_variant_storage']");

        function validateSelection() {
            if (!inputColor.value || !inputStorage.value) {
                alert("Vui lòng chọn đầy đủ màu sắc và dung lượng trước khi tiếp tục.");
                return false;
            }
            return true;
        }

        // Gọi khi tải trang để hiển thị biến thể đầu tiên hợp lệ và cập nhật giá
        updateAvailableColors();
        updatePrice();
        updateStorageInfo(); // Cập nhật thông tin dung lượng ngay khi trang tải
    });
</script>

//Slider mini
<script>
    function loadProductImages(productId) {
        fetch(`/api/get-product-images?product_id=${productId}`)
            .then(response => response.json())
            .then(data => {
                if (data.success && data.images.length > 0) {
                    let sliderContainer = document.querySelector("#slider-defaults .owl-stage");
                    let dotsContainer = document.querySelector(".owl-dots");

                    // Xóa nội dung cũ
                    sliderContainer.innerHTML = "";
                    dotsContainer.innerHTML = "";

                    data.images.forEach((imgUrl, index) => {
                        let slideItem = `
                        <div class="owl-item slidenumber${index + 1}" style="width: 600px;">
                            <div class="item-img" data-thumb="${imgUrl}">
                                <img class="owl-lazy" title="Sản phẩm" alt="Sản phẩm" data-src="${imgUrl}" width="650" height="650">
                            </div>
                        </div>
                    `;

                        let dotItem = `
                        <button role="button" class="owl-dot dotnumber${index + 1} img" data-info="${index + 1}">
                            <img class="theImg" src="${imgUrl}" alt="Sản phẩm" title="Sản phẩm">
                        </button>
                    `;

                        sliderContainer.innerHTML += slideItem;
                        dotsContainer.innerHTML += dotItem;
                    });

                    // Khởi động lại slider Owl Carousel (nếu dùng thư viện này)
                    $(".owl-carousel").trigger("destroy.owl.carousel");
                    $(".owl-carousel").owlCarousel({
                        items: 4,
                        lazyLoad: true,
                        loop: true,
                        margin: 10,
                        nav: true
                    });
                }
            })
            .catch(error => console.error("Lỗi khi lấy danh sách ảnh:", error));
    }

    // Gọi hàm khi trang tải xong
    document.addEventListener("DOMContentLoaded", function() {
        let productId = document.querySelector("#product-id").value; // Giả sử bạn có input hidden lưu `product_id`
        if (productId) {
            loadProductImages(productId);
        }
    });
</script>
//Desquestion
<script>
    // Lắng nghe sự kiện click trên nút tab
    document.getElementById('desc-tab').addEventListener('click', function() {
        toggleTabs('description', 'tab-2');
        toggleActiveButton('desc-tab', 'specs-tab');
    });

    document.getElementById('specs-tab').addEventListener('click', function() {
        toggleTabs('tab-2', 'description');
        toggleActiveButton('specs-tab', 'desc-tab');
    });

    // Hàm chuyển đổi tab
    function toggleTabs(showTab, hideTab) {
        document.getElementById(showTab).classList.add('active');
        document.getElementById(hideTab).classList.remove('active');
    }

    // Hàm thay đổi trạng thái của nút
    function toggleActiveButton(activeButtonId, inactiveButtonId) {
        document.getElementById(activeButtonId).classList.add('active');
        document.getElementById(inactiveButtonId).classList.remove('active');
    }
</script>

//Buy
<script>
    function buyNow() {
        // Tự động submit form
        document.getElementById('form-buy-now').submit();
    }
</script>

//rate
<script>
    // Đánh dấu sao khi người dùng chọn
    document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.star');

        stars.forEach(star => {
            star.addEventListener('click', function() {
                const ratingValue = parseInt(this.getAttribute('data-value')); // Lấy số sao

                // Xóa class "selected" khỏi tất cả sao
                stars.forEach(s => s.classList.remove('selected'));

                // Thêm class "selected" cho các sao đã chọn
                for (let i = 0; i < ratingValue; i++) {
                    stars[i].classList.add('selected');
                }

                console.log('Số sao đã chọn:', ratingValue); // Debug
            });
        });
    });


    // Hàm gửi đánh giá
    function submitRating() {
        const rating = document.querySelectorAll('.star.selected').length;

        const productId = "{{ $product->id }}";

        let review = document.querySelector('.comment-box').value;
        console.log('Rating to send:', rating);
        console.log('Product ID:', productId);
        console.log('Review to send:', review);




        if (rating === 0) {
            alert('Vui lòng chọn số sao đánh giá!');
            return;
        }

        const formData = new FormData();
        formData.append('rating', rating);
        formData.append('review', review);

        // Gửi POST request đến backend
        fetch(`/customer/rate-product/${productId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message); // Thông báo khi gửi thành công
                location.reload(); // Tải lại trang để hiển thị đánh giá mới
            })
            .catch(error => {
                console.error('Lỗi:', error);
            });
    }
</script>
<script>
    document.getElementById("colorVariant").style.backgroundColor = "#{{ ltrim($variant->hax_code, '#') }}";
</script>

@include('layouts.customer.footer')