<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NTPhone Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors\mdi\css\materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors\mdi\css\materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors\flag-icon-css\css\flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors\css\vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('vendors\font-awesome\css\font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors\jquery-bar-rating\fontawesome-stars.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images\favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
              
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown d-none d-lg-flex">
                        <a class="nav-link dropdown-toggle nav-btn" id="actionDropdown" href="#"
                            data-toggle="dropdown">
                            <span class="btn">+ Thêm Mới Nhanh</span>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-left" aria-labelledby="actionDropdown">
                            <a class="dropdown-item" href="{{ route('users.create') }}">
                                Người dùng
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('products.create') }}">
                                Sản phẩm
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('categories.create') }}">
                                Danh mục
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('discounts.create') }}">
                                Voucher
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <a class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">Bạn có 3 thông báo chưa đọc
                                </p>
                                <span class="badge badge-pill badge-warning float-right">Xem tất cả</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="icon-envelope mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium">Thay đổi thông tin sản phẩm</h6>
                                    <p class="font-weight-light small-text">
                                        2 ngày trước
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="icon-envelope mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium">Thêm mới voucher</h6>
                                    <p class="font-weight-light small-text">
                                        2 ngày trước
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="icon-envelope mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium">Lượt đăng kí mới</h6>
                                    <p class="font-weight-light small-text">
                                        2 ngày trước
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-envelope mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="messageDropdown">
                            <div class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">Bạn có 7 tin nhắn mới
                                </p>
                                <span class="badge badge-info badge-pill float-right">Xem tất cả</span>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('images\faces\face4.jpg') }}" alt="image"
                                        class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium">Hưng
                                        <span class="float-right font-weight-light small-text"> 1 phút trước</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        Đơn hàng đến đâu rồi ạ?
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('images\faces\face2.jpg') }}" alt="image"
                                        class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium">Quyết
                                        <span class="float-right font-weight-light small-text">15 phút trước</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        Cho mình hỏi về thông tin...
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('images\faces\face3.jpg') }}" alt="image"
                                        class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium"> Hiếu
                                        <span class="float-right font-weight-light small-text">18 phút trước</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        Áp mã giảm giá như thế nào vậy ạ?
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-info d-none d-lg-block" style="position: relative">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-grid"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#">Thông tin tài khoản</a></li>
                            <li><a class="dropdown-item" href="#">Thay đổi thông tin cá nhân</a></li>
                            <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('auth.logout') }}" method="POST">
                                    @csrf 
                                    <button type="submit" class="dropdown-item text-danger">Đăng xuất</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="row row-offcanvas row-offcanvas-right">
                <!-- partial:partials/_settings-panel.html -->
               
                <!-- partial -->
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item nav-profile">
                            <div class="nav-link">
                                <div class="profile-image">
                                    <img src="{{ asset('images\faces\face10.jpg') }}" alt="image">
                                    <span class="online-status online"></span>
                                    <!--change class online to offline or busy as needed-->
                                </div>
                                <div class="profile-name">
                                    <p class="name">
                                        Cao Văn Nhật
                                    </p>
                                    <p class="designation">
                                        Admin
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <span class="menu-title">Dashboard</span>
                                <span class="badge badge-success">New</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <span class="menu-title">Quản lí tài khoản</span>
                                <span class="badge badge-warning">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('banners.index') }}">
                                <span class="menu-title">Quản lí banner</span>
                                <span class="badge badge-danger">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories.index') }}">
                                <span class="menu-title">Quản lí danh mục</span>
                                <span class="badge badge-danger">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">
                                <span class="menu-title">Quản lí sản phẩm</span>
                                <span class="badge badge-info">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('orders.index') }}">
                                <span class="menu-title">Quản lí đơn hàng</span>
                                <span class="badge badge-danger">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('discounts.index') }}">
                                <span class="menu-title">Quản lí voucher</span>
                                <span class="badge badge-primary">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="menu-title">Quản lí tin tức</span>
                                <span class="badge badge-primary">3</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- partial -->
                <div class="content-wrapper" >
                    @yield('content')
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="container-fluid clearfix">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                                2017 <a href="#">UrbanUI</a>. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &
                                made with <i class="mdi mdi-heart text-danger"></i></span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row-offcanvas ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- plugins:js -->
    <script src="{{ asset('vendors\js\vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('vendors\jquery-bar-rating\jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('vendors\chart.js\Chart.min.js') }}"></script>
    <script src="{{ asset('vendors\raphael\raphael.min.js') }}"></script>
    <script src="{{ asset('vendors\morris.js\morris.min.js') }}"></script>
    <script src="{{ asset('vendors\jquery-sparkline\jquery.sparkline.min.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('js\off-canvas.js') }}"></script>
    <script src="{{ asset('js\hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js\misc.js') }}"></script>
    <script src="{{ asset('js\settings.js') }}"></script>
    <script src="{{ asset('js\todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js\dashboard.js') }}"></script>
    <!-- End custom js for this page-->
    <script src="{{ asset('js\productlist.js') }}"></script>
</body>


</html>


<style>
    .custom-logo-center {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .custom-logo {
        margin-left: 250px;
        height: 58px;
        /* điều chỉnh kích thước theo ý bạn */
        width: auto;
        /* Có thể thêm hiệu ứng viền, bo góc, shadow... nếu muốn */
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>
