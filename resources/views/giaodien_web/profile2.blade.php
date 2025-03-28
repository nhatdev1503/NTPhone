@include('layouts.customer.header')

<div class="container my-4">
    @yield('content')




    <div class="body_container ">
        <div class=" container">

            <div id="main_container" class="row">

                <div class="col-md-12 col-sm-12 main-column">
                    <input type="hidden" id="alert_info"
                        value='["B\u1ea1n ch\u01b0a nh\u1eadp h\u1ecd t\u00ean","B\u1ea1n ch\u01b0a nh\u1eadp s\u1ed1 \u0111i\u1ec7n tho\u1ea1i","S\u1ed1 \u0111i\u1ec7n tho\u1ea1i kh\u00f4ng \u0111\u00fang \u0111\u1ecbnh d\u1ea1ng","S\u1ed1 \u0111i\u1ec7n tho\u1ea1i t\u1eeb 10 \u0111\u1ebfn 12 s\u1ed1","B\u1ea1n ch\u01b0a nh\u1eadp m\u1eadt kh\u1ea9u","M\u1eadt kh\u1ea9u t\u1eeb 6 k\u00fd t\u1ef1 tr\u1edf l\u00ean","M\u1eadt kh\u1ea9u nh\u1eadp l\u1ea1i kh\u00f4ng \u0111\u00fang"]' />
                    <main>
                        <div class="grid-members">
                            <div class="grid-item">
                                <div class="user-menu-side">
                                    <div class="user-name">
                                        <img onerror="this.src='https://didongthongminh.vn/images/logo-user.svg'"
                                            src="https://didongthongminh.vn/https://lh3.googleusercontent.com/a-/ALV-UjVLHJjmqdohiX6EcMncXKXM5tfErJcle_ITRrbo8KYOK5BRpt0a=s96-c"
                                            alt="avatar" class="img-responsive">
                                        <div class="name">
                                            Xin chào, <span>trongh138</span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="selected">
                                            <a href="https://didongthongminh.vn/trang-ca-nhan">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                Thông tin tài khoản </a>
                                        </li>
                                        <li class="">
                                            <a href="https://didongthongminh.vn/quan-ly-don-hang">
                                                <i class="fa fa-wpforms" aria-hidden="true"></i>
                                                Quản lý đơn hàng </a>
                                        </li>
                                        <li class="">
                                            <a href="https://didongthongminh.vn/doi-mat-khau">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                                Đổi mật khẩu </a>
                                        </li>
                                        <li class="">
                                            <a href="https://didongthongminh.vn/so-dia-chi">
                                                <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                                Sổ địa chỉ </a>
                                        </li>
                                        <li>
                                            <a href="https://didongthongminh.vn/dang-xuat">
                                                <i class="fa fa-power-off" aria-hidden="true"></i>
                                                Đăng xuất </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="grid-item">
                                <div class="user-content-side">
                                    <h2 class="member-title">Thông tin tài khoản</h2>
                                    <form action="" method="post" name="frmUser" id="frmUser"
                                        enctype="multipart/form-data">
                                        <div class="box-user">
                                            <label class="label-input" for="u_name">Họ và tên</label>
                                            <input type="text" name="u_name" id="u_name" value="trongh138"
                                                placeholder="Họ và tên" class="form-control">
                                        </div>
                                        <div class="box-user">
                                            <label class="label-input" for="u_email">Email</label>
                                            <input type="text" name="u_email" id="u_email"
                                                value="trongh138@gmail.com" placeholder="Email" class="form-control"
                                                disabled readonly>
                                        </div>
                                        <div class="box-user">
                                            <label class="label-input" for="u_tel">Điện thoại</label>
                                            <input type="text" name="u_tel" id="u_tel" value=""
                                                placeholder="Điện thoại" class="form-control">
                                        </div>
                                        <div class="box-user box-submit">
                                            <a href="javascript:void(0)" class="submit-btn"
                                                onclick="checkUpdateUser()">Cập nhật</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </main>
                    <div class="alert_modal fade" id="alert_modal">
                        <div class="alert_body">
                            <div class="alert_message" id="alert_message">

                            </div>
                            <a id="a_message" onclick="close_alert()">Đóng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="hidden-lg hidden-md bottom">
        <ul class="ul-bottom-no-product">
            <li>
                <a href="/">
                    <img alt="Trang chủ" src="/modules/products/assets/images/home.svg" width="22" height="22">
                    <span><b>Trang chủ</b></span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" id="procat">
                    <img alt="Danh mục sản phẩm" src="/modules/products/assets/images/danhmuc.svg" width="22"
                        height="22">
                    <span><b>Danh mục</b></span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" id="modal_support">
                    <img alt="Liên hệ" src="/modules/products/assets/images/didongthongminh.svg" width="22"
                        height="22">
                    <span><b>Liên hệ</b></span>
                </a>
            </li>

            <li>
                <a alt="Hệ thống cửa hàng" href="/he-thong-cua-hang">
                    <img alt="hệ thống cửa hàng" src="/modules/products/assets/images/shop.svg" width="22"
                        height="22">
                    <span><b>Cửa hàng</b></span>
                </a>
            </li>
            <li>
                <a href="https://didongthongminh.vn/blogs/all">
                    <img alt="Hỗ trợ" style="height:22px;" src="/modules/products/assets/images/news_icon.svg"
                        width="22" height="22">
                    <span><b>Tin tức</b></span>
                </a>
            </li>
        </ul>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action='' method="post">
                        <div id="searh_list"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_1" class="modal fade">
        <div class="support"><button type="button" class="btn-close-custom" data-dismiss="modal"
                aria-label="Close">
                &times;
            </button>
            <div class="area">
                <div class="area">
                    <div class="nameregion"><img src="https://didongthongminh.vn/images/config/logo_1648529142.svg"
                            alt="Miền Name"><span>Miền Nam</span></div>
                    <div class="region">
                        <div class="item">
                            <div class="name">Hải Dương</div>
                            <div class="address">35B Chợ Con, gần Hồ Bạch Đằng, TP Hải Dương</div>
                            <div class="contact"><span class="hotline"><a href="tel:0899965566"><img
                                            src ="/images/hotline.svg" alt="hotline" /></a></span><span
                                    class="zalo"><a href="https://zalo.me/0899965566"><img src ="/images/zalo.svg"
                                            alt="zalo" /></a></span><span class="messenger"><a
                                        href="https://m.me/didongthongminh.vn"><img src ="/images/messenger.svg"
                                            alt="messenger" /></a></span></div>
                        </div>
                        <div class="item">
                            <div class="name">Hải Phòng</div>
                            <div class="address">12 Điện Biên Phủ, TP Hải Phòng</div>
                            <div class="contact"><span class="hotline"><a href="tel:0916551212"><img
                                            src ="/images/hotline.svg" alt="hotline" /></a></span><span
                                    class="zalo"><a href="https://zalo.me/0916551212"><img src ="/images/zalo.svg"
                                            alt="zalo" /></a></span><span class="messenger"><a
                                        href="https://m.me/didongthongminh.vn"><img src ="/images/messenger.svg"
                                            alt="messenger" /></a></span></div>
                        </div>
                        <div class="item">
                            <div class="name">Hà Nội</div>
                            <div class="address">15 Trần Đại Nghĩa, Hai Bà Trưng, TP Hà Nội</div>
                            <div class="contact"><span class="hotline"><a href="tel:0856781515"><img
                                            src ="/images/hotline.svg" alt="hotline" /></a></span><span
                                    class="zalo"><a href="https://zalo.me/0856781515"><img src ="/images/zalo.svg"
                                            alt="zalo" /></a></span><span class="messenger"><a
                                        href=""><img src ="/images/messenger.svg"
                                            alt="messenger" /></a></span></div>
                        </div>
                        <div class="item">
                            <div class="name">Hà Nội</div>
                            <div class="address">119 Thái Thịnh, Đống Đa, TP Hà Nội ( gọi điện trước )</div>
                            <div class="contact"><span class="hotline"><a href="tel:0966119995"><img
                                            src ="/images/hotline.svg" alt="hotline" /></a></span><span
                                    class="zalo"><a href="https://zalo.me/0966119995"><img src ="/images/zalo.svg"
                                            alt="zalo" /></a></span><span class="messenger"><a
                                        href="https://m.me/didongthongminh.vn"><img src ="/images/messenger.svg"
                                            alt="messenger" /></a></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .support {
                max-width: 100%;
                width: 95%;
                margin: 0 auto;
                border: 2px dashed #ff6700;
                background: #f1f1f1;
                padding: 10px;
                border-radius: 10px;
                display: block;
                top: 10%;
                bottom: unset;
            }

            .support .nameregion {
                background: #ff6700;
                color: #fff;
                padding: 0px 10px;
                border: 2px solid #ffffff;
                border-radius: 10px;
                margin: 0 auto;
                display: inline-flex;
                text-align: center;
                margin-top: 15px;
                margin-bottom: 15px;

            }

            .support .nameregion img {
                padding-right: 5px;
                height: 33px;
            }

            .address {
                font-size: 12px;
                color: #666;
            }

            .nameregion {
                margin-bottom: 20px;
                /* Khoảng cách phía dưới tên region */
                font-weight: bold;
                /* Làm nổi bật tên region */
                text-align: center;
                /* Căn giữa tên region */
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .region {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                /* Chia thành 2 cột đều nhau */
                gap: 20px;
                /* Khoảng cách giữa các cột và hàng */
                width: 100%;
                /* Đảm bảo chiếm toàn bộ chiều rộng */
            }

            .region .item {
                box-sizing: border-box;
                text-align: left;
                background: #fff;
                padding: 10px;
                text-align: center;
            }

            .region .item .name {
                color: #60bb22;
                font-weight: 600;
            }

            .region .item .address {
                font-size: 12px;
                color: #666;
                padding: 5px 0;
            }

            .contact {
                display: flex;
                justify-content: space-between;
                /* Hoặc sử dụng space-around nếu muốn khoảng cách đều nhau */
                text-align: center;
                width: 100%;
                /* Đảm bảo chiếm toàn bộ chiều rộng */
            }

            .contact span {
                flex: 1;
                /* Chia đều mỗi span */
                text-align: center;
                /* Căn giữa nội dung */
            }

            .support div span {
                color: #fff;
            }

            .btn-close-custom {
                position: absolute;
                top: 10px;
                /* Cách đỉnh modal 10px */
                right: 10px;
                /* Cách phải modal 10px */
                background-color: #007bff;
                /* Màu xanh */
                color: white;
                border: none;
                border-radius: 50%;
                /* Nút tròn */
                width: 30px;
                height: 30px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 20px;
                cursor: pointer;
                z-index: 1051;
                /* Đảm bảo nút nằm trên nội dung modal */
            }

            .btn-close-custom:hover {
                background-color: #0056b3;
                /* Màu xanh đậm khi hover */
            }

            .support button {
                background: #4baa2b;
            }
        </style>
        <script>
            document.querySelector('.btn-close-custom').addEventListener('click', function() {
                document.getElementById('modal_1').style.display = 'none';
            });
        </script>
        <!--<div class="support">
        <div>
            <a href="tel:" class="quick-alo-ph-img-circle">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="30" cy="30" r="30" fill="#FF6700"/>
                    <g>
                        <path d="M39.2889 44.973C40.8008 44.973 42.2507 44.3726 43.3196 43.3034C44.3887 42.2345 44.9892 40.7846 44.9892 39.2728C44.9917 38.7481 44.9184 38.2259 44.772 37.7221C44.7115 37.5222 44.5703 37.3567 44.3825 37.2654L37.978 34.0669V34.0667C37.6898 33.9192 37.3392 33.9736 37.1092 34.2016L34.6822 36.6287C31.9963 35.8494 29.551 34.4038 27.574 32.4262C25.5964 30.4489 24.1508 28.0036 23.3715 25.318L25.7986 22.891C26.0266 22.661 26.081 22.3104 25.9335 22.0222L22.7348 15.6177C22.6435 15.4299 22.478 15.2887 22.2781 15.2282C21.7742 15.0818 21.2521 15.0085 20.7274 15.011C19.2155 15.011 17.7657 15.6115 16.6968 16.6806C15.6276 17.7495 15.0272 19.1994 15.0272 20.7113C15.0194 23.8985 15.6439 27.0555 16.864 29.9999C18.0842 32.9443 19.8759 35.6176 22.1356 37.865C24.3831 40.1248 27.0564 41.9165 30.0008 43.1366C32.9449 44.3568 36.102 44.9813 39.2894 44.9735L39.2889 44.973ZM20.7271 16.5088C21.0015 16.5088 21.2749 16.5364 21.5438 16.5913L24.3528 22.2093L22.0007 24.5614C21.8302 24.7562 21.7584 25.0183 21.8058 25.2729C21.8186 25.3624 21.8412 25.4504 21.8733 25.535C22.7093 28.5471 24.3123 31.2907 26.526 33.4977C28.7396 35.7048 31.4881 37.2999 34.5022 38.1268C34.5972 38.1607 34.6948 38.1855 34.7944 38.2018C35.0412 38.2535 35.2972 38.1775 35.476 37.9994L37.8281 35.6474L43.4461 38.4564C43.4885 38.7265 43.5035 38.9998 43.491 39.273C43.489 40.3868 43.0455 41.4545 42.258 42.2422C41.4702 43.0298 40.4026 43.4732 39.2888 43.4752C36.2985 43.4832 33.3365 42.8976 30.5742 41.7516C27.8121 40.606 25.3051 38.9233 23.1982 36.8011C21.0759 34.6946 19.3933 32.1876 18.2477 29.4252C17.1017 26.663 16.5161 23.7011 16.5242 20.7105C16.5262 19.5967 16.9696 18.529 17.7571 17.7413C18.5449 16.9538 19.6125 16.5104 20.7263 16.5084L20.7271 16.5088Z"
                              fill="white"/>
                        <path d="M30.0081 24.7483C31.3988 24.7483 32.7323 25.3008 33.7157 26.2842C34.699 27.2676 35.2516 28.6011 35.2516 29.9918C35.2516 30.4054 35.5869 30.741 36.0005 30.741C36.4143 30.741 36.7496 30.4054 36.7496 29.9918C36.7496 28.2038 36.0394 26.4891 34.7751 25.2248C33.5107 23.9605 31.7961 23.2502 30.0081 23.2502C29.5945 23.2502 29.2589 23.5856 29.2589 23.9994C29.2589 24.413 29.5945 24.7483 30.0081 24.7483Z"
                              fill="white"/>
                        <path d="M30.0081 18.0068C32.1118 18.0068 34.1786 18.5606 36.0005 19.6127C37.8226 20.6646 39.3354 22.1774 40.3873 23.9995C41.4394 25.8213 41.9932 27.8882 41.9932 29.9919C41.9932 30.4055 42.3285 30.7411 42.742 30.7411C43.1559 30.7411 43.4912 30.4055 43.4912 29.9919C43.4912 26.416 42.0707 22.9865 39.5421 20.4581C37.0134 17.9295 33.584 16.5089 30.0082 16.5089C29.5946 16.5089 29.259 16.8442 29.259 17.2581C29.259 17.6716 29.5946 18.007 30.0082 18.007L30.0081 18.0068Z"
                              fill="white"/>
                    </g>
                </svg>
                <span>Gọi điện</span>
            </a>
        </div>
        <div>
            <a href="https://zalo.me/" class="quick-alo-ph-img-circle">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="30" cy="30" r="30" fill="#1572E9"/>
                    <path d="M23.0966 44.1276C21.3168 44.1276 19.5305 44.1856 17.7506 44.1211C15.6449 44.0372 14.0345 42.2879 14.0345 40.203C14.0345 33.4706 14.0476 26.7382 14.0345 19.9994C14.0345 17.695 15.8535 16.0877 17.9462 16.0297C20.1368 15.9716 22.3338 16.0167 24.5309 16.0167C24.57 16.0167 24.6222 15.9974 24.6417 16.0619C24.6287 16.1781 24.5113 16.191 24.4396 16.2362C23.1488 16.985 21.9687 17.8822 20.9778 18.9924C19.3414 20.8256 18.207 22.9299 17.8224 25.3763C17.1443 29.6945 18.5069 33.3609 21.5906 36.4205C22.1382 36.9691 22.21 37.3952 21.7732 38.131C21.2451 39.0153 20.4432 39.6156 19.5891 40.1643C19.4979 40.2159 19.4066 40.2805 19.3153 40.3386C19.1784 40.4548 19.2632 40.5128 19.3805 40.5645C19.4066 40.6226 19.4392 40.6742 19.4783 40.7259C20.228 41.3842 20.9387 42.0878 21.6754 42.7591C22.0209 43.0754 22.3664 43.4046 22.6989 43.7338C22.8358 43.8565 23.064 43.8952 23.0966 44.1276Z"
                          fill="white"/>
                    <path d="M23.0967 44.1276C23.0641 43.9017 22.8359 43.863 22.699 43.7274C22.3665 43.3918 22.0209 43.069 21.6754 42.7527C20.9387 42.0814 20.2281 41.3778 19.4783 40.7195C19.4392 40.6678 19.4066 40.6162 19.3806 40.5581C21.043 40.8808 22.6664 40.6614 24.2636 40.1772C24.8048 40.0159 25.3459 39.8545 25.8935 39.719C26.2651 39.6221 26.6563 39.6415 27.0149 39.7706C31.1482 41.1777 35.2294 41.0486 39.2454 39.3058C40.8818 38.5894 42.3747 37.5824 43.6395 36.3237C43.7047 36.2592 43.7503 36.1623 43.8677 36.1559C43.9264 36.2463 43.8938 36.3431 43.8938 36.4399V40.216C43.9068 42.3719 42.1596 44.1276 39.9821 44.147H39.9495C37.6025 44.1599 35.2555 44.147 32.9085 44.147H23.4878C23.3574 44.1341 23.227 44.1276 23.0967 44.1276Z"
                          fill="white"/>
                    <path d="M24.1136 29.6817C25.0981 29.6817 26.0238 29.6752 26.9431 29.6817C27.4581 29.6881 27.7385 29.9011 27.7906 30.3078C27.8493 30.8177 27.5494 31.1598 26.9887 31.1663C25.9326 31.1792 24.8829 31.1727 23.8268 31.1727C23.5204 31.1727 23.2205 31.1856 22.9141 31.1663C22.5359 31.1469 22.1643 31.0695 21.9818 30.6822C21.7992 30.2949 21.9296 29.9463 22.1774 29.63C23.1814 28.3649 24.1919 27.0933 25.2024 25.8281C25.2611 25.7507 25.3197 25.6732 25.3784 25.6022C25.3132 25.4925 25.2219 25.5441 25.1437 25.5377C24.4396 25.5312 23.729 25.5377 23.0249 25.5312C22.8619 25.5312 22.6989 25.5118 22.5424 25.4796C22.1708 25.3957 21.9427 25.0277 22.0274 24.6663C22.0861 24.421 22.2817 24.2209 22.5294 24.1628C22.6859 24.1241 22.8489 24.1047 23.0119 24.1047C24.1723 24.0982 25.3393 24.0982 26.4998 24.1047C26.7084 24.0982 26.9105 24.1241 27.1126 24.1757C27.5559 24.3242 27.745 24.7308 27.569 25.1568C27.4125 25.5248 27.1648 25.841 26.917 26.1573C26.063 27.2353 25.2089 28.3068 24.3549 29.3718C24.2831 29.4558 24.218 29.5397 24.1136 29.6817Z"
                          fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M32.263 25.8474C31.9957 25.8991 31.8327 26.0863 31.6763 26.2864C30.8613 25.5828 29.9616 25.5376 29.075 26.0604C28.0058 26.6801 27.6081 27.6871 27.745 28.8683C27.8754 29.9592 28.3513 30.8564 29.5118 31.2308C30.2354 31.4631 30.907 31.3792 31.5002 30.9016C31.6567 30.7789 31.7023 30.8047 31.8132 30.9403C32.0283 31.2178 32.3999 31.3147 32.7259 31.192C33.0453 31.0952 33.267 30.7983 33.267 30.4626C33.28 29.1717 33.2866 27.8807 33.267 26.5897C33.2605 26.0733 32.778 25.7441 32.263 25.8474ZM29.3744 28.7252C29.3717 28.6977 29.3696 28.6701 29.3684 28.6424C29.3678 28.5713 29.3704 28.5024 29.376 28.4358C29.3782 28.4096 29.3808 28.3838 29.3839 28.3583C29.4736 27.6198 29.9412 27.1878 30.5745 27.2223C30.671 27.2264 30.7656 27.2439 30.8556 27.2739C31.0539 27.3363 31.2304 27.4611 31.3568 27.6354C31.7219 28.126 31.7219 28.9328 31.3568 29.4234C31.2916 29.5073 31.2199 29.5783 31.1417 29.6364C30.9474 29.7787 30.7205 29.8468 30.4961 29.8459C30.2718 29.8467 30.045 29.7786 29.8508 29.6364C29.7726 29.5783 29.7009 29.5073 29.6357 29.4234C29.4886 29.2195 29.3999 28.9789 29.3744 28.7252ZM38.8085 25.7377C37.2439 25.7829 36.1421 27.0222 36.1942 28.6811C36.1682 30.2948 37.5177 31.5148 39.2193 31.3469C40.7774 31.192 41.7879 30.0366 41.7358 28.4035C41.6836 26.7898 40.471 25.6861 38.8085 25.7377ZM38.111 29.4299C37.9154 29.1652 37.8176 28.8489 37.8306 28.5262C37.8306 27.7241 38.3203 27.1962 39.0179 27.2281C39.022 27.2283 39.0261 27.2285 39.0302 27.2288C39.0494 27.2292 39.0684 27.2301 39.0874 27.2317C39.3721 27.2549 39.6349 27.4055 39.806 27.6354C39.814 27.646 39.8218 27.6567 39.8295 27.6675C40.1775 28.1613 40.1695 28.9627 39.7995 29.4428C39.6684 29.6074 39.4969 29.7228 39.3095 29.7865C39.089 29.8633 38.8511 29.8643 38.6333 29.7952C38.5131 29.7577 38.3979 29.6985 38.2935 29.617C38.2219 29.5655 38.1632 29.501 38.1111 29.43C38.1111 29.43 38.111 29.4299 38.111 29.4299ZM35.622 28.3971C35.6213 28.0636 35.6205 27.7301 35.6205 27.3966C35.6205 27.0612 35.6213 26.725 35.622 26.3887C35.6234 25.7152 35.6249 25.0408 35.6205 24.3693C35.6205 23.8529 35.288 23.5301 34.7926 23.5366C34.3101 23.5366 33.9907 23.8593 33.9841 24.3564C33.9798 24.5584 33.9812 24.7575 33.9827 24.9576C33.9834 25.058 33.9841 25.1587 33.9841 25.26V30.3916C33.9841 30.7983 34.2319 31.1404 34.5579 31.2243C34.6361 31.2437 34.7208 31.2501 34.7991 31.2501C35.262 31.2372 35.627 30.8564 35.6205 30.3981C35.6249 29.7311 35.6234 29.0641 35.622 28.3971Z"
                          fill="white"/>
                </svg>
                <span>Chat Zalo</span>
            </a>
        </div>
        <div>
            <a href="https://m.me/didongthongminh.vn" class="quick-alo-ph-img-circle">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="30" cy="30" r="30" fill="#0084FF"/>
                    <g clip-path="url(#clip0_2047_5235)">
                        <path d="M30 15C21.7163 15 15 21.2175 15 28.8888C15 33.2612 17.18 37.1562 20.5862 39.7062V45L25.6962 42.1975C27.0613 42.5725 28.5037 42.7775 30 42.7775C38.2838 42.7775 45 36.5588 45 28.89C45 21.2213 38.2838 15 30 15ZM31.4888 33.7038L27.67 29.6287L20.2162 33.7038L28.415 25L32.3288 29.0737L39.69 25L31.4888 33.7038Z"
                              fill="white"/>
                    </g>
                </svg>
                <span>Messenger</span>
            </a>
        </div>

                    <div>
                <a href="#">
                    <script data-b24-form="click/6/gvos90" data-skip-moving="true">
                        (function(w, d, u) {
                            var s = d.createElement('script');
                            s.async = true;
                            s.src = u + '?' + (Date.now() / 180000 | 0);
                            var h = d.getElementsByTagName('script')[0];
                            h.parentNode.insertBefore(s, h);
                        })(window, document, 'https://cdn.bitrix24.vn/b19243465/crm/form/loader_6.js');
                    </script>
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="30" cy="30" r="30" fill="#60BB22"/>
                        <g clip-path="url(#clip0_2047_5250)">
                            <path d="M15.6086 37.2029C15.2907 37.2029 15.0329 37.4512 15.0329 37.7576C15.0329 38.0639 15.2907 38.3122 15.6086 38.3122H18.4868V42.195C18.4879 42.9302 18.7914 43.6351 19.3308 44.1551C19.8705 44.6749 20.6021 44.9673 21.3651 44.9683H42.0888C42.8518 44.9673 43.5835 44.6749 44.1232 44.1551C44.6626 43.6351 44.9661 42.9302 44.9671 42.195V17.7892C44.9661 17.054 44.6626 16.3491 44.1232 15.8291C43.5835 15.3093 42.8518 15.0169 42.0888 15.0159H21.3651C20.6021 15.0169 19.8705 15.3093 19.3308 15.8291C18.7914 16.3491 18.4879 17.054 18.4868 17.7892V21.672H15.6086C15.2907 21.672 15.0329 21.9203 15.0329 22.2266C15.0329 22.533 15.2907 22.7813 15.6086 22.7813H18.4868V29.4374H15.6086C15.2907 29.4374 15.0329 29.6858 15.0329 29.9921C15.0329 30.2984 15.2907 30.5468 15.6086 30.5468H18.4868V37.2029H15.6086ZM19.6382 30.5468H22.5165C22.8343 30.5468 23.0921 30.2984 23.0921 29.9921C23.0921 29.6858 22.8343 29.4374 22.5165 29.4374H19.6382V22.7813H22.5165C22.8343 22.7813 23.0921 22.533 23.0921 22.2266C23.0921 21.9203 22.8343 21.672 22.5165 21.672H19.6382V17.7892C19.6387 17.348 19.8209 16.925 20.1444 16.613C20.4682 16.3013 20.9072 16.1257 21.3652 16.1252H42.0888C42.5468 16.1257 42.9857 16.3013 43.3096 16.613C43.6331 16.925 43.8153 17.348 43.8158 17.7892V42.195C43.8153 42.6362 43.6331 43.0592 43.3096 43.3712C42.9858 43.6829 42.5468 43.8585 42.0888 43.859H21.3652C20.9072 43.8585 20.4682 43.6829 20.1444 43.3712C19.8209 43.0592 19.6387 42.6362 19.6382 42.195V38.3122H22.5165C22.8343 38.3122 23.0921 38.0639 23.0921 37.7576C23.0921 37.4512 22.8343 37.2029 22.5165 37.2029H19.6382V30.5468Z"
                                  fill="white"/>
                            <path d="M32.8783 29.4374C33.9471 29.4374 34.972 29.0284 35.7276 28.3001C36.4834 27.5722 36.9079 26.5846 36.9079 25.5547C36.9079 24.5248 36.4834 23.5374 35.7276 22.8093C34.972 22.0811 33.9472 21.672 32.8783 21.672C31.8094 21.672 30.7846 22.0811 30.029 22.8093C29.2732 23.5373 28.8487 24.5248 28.8487 25.5547C28.85 26.5841 29.275 27.5709 30.0303 28.2989C30.7859 29.0266 31.81 29.4362 32.8783 29.4374ZM32.8783 22.7813C33.6416 22.7813 34.3737 23.0735 34.9137 23.5935C35.4534 24.1138 35.7566 24.8193 35.7566 25.5547C35.7566 26.2902 35.4533 26.9956 34.9137 27.5159C34.3738 28.0359 33.6416 28.3281 32.8783 28.3281C32.115 28.3281 31.3829 28.0359 30.8429 27.5159C30.3032 26.9957 30 26.2902 30 25.5547C30.001 24.8195 30.3045 24.1145 30.844 23.5945C31.3836 23.0748 32.1153 22.7824 32.8783 22.7813Z"
                                  fill="white"/>
                            <path d="M27.1217 38.3122C27.2744 38.3122 27.4208 38.2538 27.5288 38.1498C27.6367 38.0458 27.6974 37.9046 27.6974 37.7576V34.4295C27.6979 33.9882 27.8801 33.5653 28.2036 33.2533C28.5274 32.9415 28.9664 32.766 29.4244 32.7655H36.3322C36.7902 32.766 37.2292 32.9415 37.553 33.2533C37.8765 33.5653 38.0587 33.9882 38.0592 34.4295V37.7576C38.0592 38.0639 38.317 38.3122 38.6349 38.3122C38.9528 38.3122 39.2106 38.0639 39.2106 37.7576V34.4295C39.2095 33.6943 38.906 32.9893 38.3666 32.4693C37.8269 31.9496 37.0953 31.6571 36.3323 31.6561H29.4244C28.6613 31.6571 27.9297 31.9496 27.39 32.4693C26.8506 32.9893 26.5471 33.6943 26.5461 34.4295V37.7576C26.5461 37.9046 26.6067 38.0458 26.7147 38.1498C26.8226 38.2538 26.9691 38.3122 27.1217 38.3122H27.1217Z"
                                  fill="white"/>
                        </g>
                    </svg>
                    <span>Liên hệ</span>
                </a>
            </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="M1.05002 11.85L0.150024 10.95L5.10002 6.00002L0.150024 1.05002L1.05002 0.150024L6.00002 5.10002L10.95 0.150024L11.85 1.05002L6.90002 6.00002L11.85 10.95L10.95 11.85L6.00002 6.90002L1.05002 11.85Z"
                          fill="white"/>
                </g>
            </svg>
        </button>
    </div>-->





        <input type="hidden" value="https://didongthongminh.vn/" id='root' />

        <div class="content-pop">
            <div class="wrapper-popup" id="wrapper-popup"></div>
            <div class="wrapper-popup-2" id="wrapper-popup-2"></div>
            <div class="wrapper-popup-3" id="wrapper-popup-3"></div>
        </div>
        <div class="full"></div>
        <div class="full2"></div>
        <div class="scrollToTop">
            <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M14.38 10L16 8.31771L8 -3.49691e-07L-3.63579e-07 8.31771L1.62 10L8 3.36979L14.38 10Z"
                    fill="white" />
            </svg>
        </div>

        <div class="quick-alo-phone-footer">
            <div class="quick-alo-phone quick-alo-green quick-alo-show" id="quick-alo-phoneIcon">
                <a href="tel:0966 119 995" title="Liên hệ nhanh với Didongthongminh"></a>
                <a href="tel:0966 119 995" class="quick-alo-ph-circle"></a>
                <a href="tel:0966 119 995" class="quick-alo-ph-circle-fill"></a>
                <a href="tel:0966 119 995" class="quick-alo-ph-img-circle">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.515 15.46L15.459 12.755C15.2109 12.5909 14.91 12.5262 14.6163 12.5738C14.3226 12.6214 14.0576 12.7779 13.874 13.012L12.692 14.531C12.6192 14.6288 12.5131 14.6966 12.3938 14.7217C12.2744 14.7467 12.1501 14.7273 12.044 14.667L11.819 14.543C10.4926 13.8197 9.29622 12.8801 8.27904 11.763C7.16306 10.7451 6.22394 9.54879 5.50004 8.22304L5.37704 7.99803C5.31731 7.89173 5.29797 7.76743 5.32259 7.648C5.34721 7.52857 5.41413 7.42205 5.51104 7.34804L7.02804 6.16704C7.262 5.98332 7.41831 5.71833 7.46592 5.4247C7.51353 5.13106 7.44896 4.83026 7.28504 4.58204L4.58004 0.526035C4.41213 0.273629 4.15338 0.0956696 3.85761 0.0291769C3.56184 -0.0373157 3.25182 0.0127772 2.99204 0.169035L1.30004 1.18704C0.765606 1.49961 0.373119 2.00716 0.205041 2.60304C-0.404959 4.82904 0.0540409 8.67004 5.71204 14.329C10.212 18.829 13.564 20.04 15.867 20.04C16.3972 20.0423 16.9253 19.9734 17.437 19.835C18.0324 19.6682 18.5399 19.2772 18.853 18.744L19.873 17.044C20.028 16.7845 20.0772 16.4753 20.0106 16.1805C19.944 15.8857 19.7665 15.6277 19.515 15.46ZM19.3 16.705L18.282 18.405C18.0572 18.7901 17.692 19.0732 17.263 19.195C15.208 19.759 11.619 19.295 6.18704 13.86C0.755041 8.42504 0.286041 4.83504 0.850041 2.78204C0.971908 2.35284 1.25497 1.98737 1.64004 1.76204L3.34004 0.744035C3.45276 0.676221 3.58729 0.654488 3.71563 0.683359C3.84396 0.71223 3.95622 0.789482 4.02904 0.899035L5.49504 3.10404L6.72804 4.95404C6.79923 5.06181 6.82724 5.19244 6.80648 5.31992C6.78573 5.44741 6.71774 5.56241 6.61604 5.64204L5.10004 6.82304C4.87651 6.9939 4.7221 7.23966 4.66515 7.51519C4.60821 7.79073 4.65255 8.07756 4.79004 8.32304L4.91104 8.54204C5.66216 9.9253 6.63853 11.1737 7.80004 12.236C8.86393 13.3997 10.1144 14.3777 11.5 15.13L11.719 15.251C11.9645 15.3885 12.2513 15.4329 12.5269 15.3759C12.8024 15.319 13.0482 15.1646 13.219 14.941L14.4 13.423C14.4797 13.3213 14.5947 13.2533 14.7222 13.2326C14.8496 13.2118 14.9803 13.2398 15.088 13.311L19.144 16.016C19.2538 16.0887 19.3312 16.2009 19.3603 16.3292C19.3893 16.4576 19.3678 16.5922 19.3 16.705Z"
                            fill="white" />
                        <path
                            d="M11.356 3.34109C12.8611 3.34295 14.304 3.94165 15.3682 5.0059C16.4324 6.07014 17.0311 7.51303 17.033 9.0181C17.033 9.10668 17.0682 9.19164 17.1308 9.25427C17.1934 9.31691 17.2784 9.3521 17.367 9.3521C17.4556 9.3521 17.5405 9.31691 17.6031 9.25427C17.6658 9.19164 17.701 9.10668 17.701 9.0181C17.6991 7.33587 17.03 5.72307 15.8405 4.53355C14.651 3.34404 13.0382 2.67495 11.356 2.6731C11.2674 2.6731 11.1824 2.70829 11.1198 2.77093C11.0572 2.83356 11.022 2.91851 11.022 3.0071C11.022 3.09568 11.0572 3.18063 11.1198 3.24327C11.1824 3.30591 11.2674 3.34109 11.356 3.34109Z"
                            fill="white" />
                        <path
                            d="M11.356 5.345C12.3301 5.34606 13.2639 5.73348 13.9527 6.42226C14.6415 7.11104 15.0289 8.04492 15.03 9.019C15.03 9.10758 15.0652 9.19254 15.1278 9.25517C15.1904 9.31781 15.2754 9.353 15.364 9.353C15.4526 9.353 15.5375 9.31781 15.6002 9.25517C15.6628 9.19254 15.698 9.10758 15.698 9.019C15.6966 7.86783 15.2388 6.7642 14.4248 5.9502C13.6108 5.13621 12.5072 4.67833 11.356 4.677C11.2674 4.677 11.1824 4.71219 11.1198 4.77483C11.0572 4.83746 11.022 4.92242 11.022 5.011C11.022 5.09958 11.0572 5.18454 11.1198 5.24718C11.1824 5.30981 11.2674 5.345 11.356 5.345Z"
                            fill="white" />
                        <path
                            d="M11.356 7.34915C11.7987 7.34968 12.2232 7.5258 12.5363 7.83887C12.8493 8.15194 13.0254 8.5764 13.026 9.01915C13.026 9.10773 13.0612 9.19269 13.1238 9.25533C13.1864 9.31796 13.2714 9.35315 13.36 9.35315C13.4486 9.35315 13.5335 9.31796 13.5962 9.25533C13.6588 9.19269 13.694 9.10773 13.694 9.01915C13.6934 8.39924 13.447 7.80486 13.0086 7.36652C12.5703 6.92817 11.9759 6.68168 11.356 6.68115C11.2674 6.68115 11.1824 6.71634 11.1198 6.77898C11.0572 6.84161 11.022 6.92657 11.022 7.01515C11.022 7.10373 11.0572 7.18869 11.1198 7.25133C11.1824 7.31396 11.2674 7.34915 11.356 7.34915Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Chặn link SHOPEE

                function blockShopeeLinks() {
                    document.querySelectorAll('a[href^="https://s.shopee.vn"]').forEach(function(link) {
                        link.href = "javascript:void(0)";
                        link.style.pointerEvents = "none";
                    });
                    document.querySelectorAll('iframe[src^="https://s.shopee.vn"]').forEach(function(iframe) {
                        iframe.remove();
                    });

                    document.querySelectorAll('script[src^="https://s.shopee.vn"]').forEach(function(script) {
                        script.remove();
                    });
                }

                blockShopeeLinks();

                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.type === "childList") {
                            blockShopeeLinks();
                        }
                    });
                });

                observer.observe(document.body, {
                    childList: true,
                    subtree: true,
                });
            });
        </script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/libraries/jquery/owlcarousel/owl.carousel.min.js?v=15.87"></script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/templates/default/js/jquery.lazyloadxt.js?v=15.87"></script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/templates/default/js/bootstrap.min.js?v=15.87"></script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/blocks/mainmenu/assets/js/nav.jquery.min.js?v=15.87"></script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/templates/default/js/main.js?v=15.87"></script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/templates/default/js/form.js?v=15.87"></script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/blocks/mainmenu/assets/js/bottom_menu_mobile.js?v=15.87"></script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/modules/members/assets/js/default.js?v=15.87"></script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/modules/members/assets/js/scroll.js?v=15.87"></script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/blocks/mainmenu/assets/js/moby.min.js?v=15.87"></script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/blocks/mainmenu/assets/js/menu_mobile.js?v=15.87"></script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/blocks/search/assets/js/jquery.autocomplete.js?v=15.87"></script>
        <script language="javascript" type="text/javascript"
            src="https://didongthongminh.vn/blocks/search/assets/js/search_simple.js?v=15.87"></script>
        </body>

        </html>














    </div>

    {{-- https://didongthongminh.vn/trang-ca-nhan --}}

</div>
@include('layouts.customer.footer')
