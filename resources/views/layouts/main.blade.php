<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NTPhone Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors\mdi\css\materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors\simple-line-icons\css\simple-line-icons.css">
  <link rel="stylesheet" href="vendors\flag-icon-css\css\flag-icon.min.css">
  <link rel="stylesheet" href="vendors\css\vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors\font-awesome\css\font-awesome.min.css">
  <link rel="stylesheet" href="vendors\jquery-bar-rating\fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css\style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images\favicon.png">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images\logo.svg" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images\logo-mini.svg" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item dropdown d-none d-lg-flex">
            <a class="nav-link dropdown-toggle nav-btn" id="actionDropdown" href="#" data-toggle="dropdown">
              <span class="btn">+ Thêm Mới</span>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-left" aria-labelledby="actionDropdown">
              <a class="dropdown-item" href="#">
                Người dùng
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                Sản phẩm
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                Danh mục
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                Đơn hàng
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
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
              <!-- <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a> -->
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
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false">
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
                  <img src="images\faces\face4.jpg" alt="image" class="profile-pic">
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
                  <img src="images\faces\face2.jpg" alt="image" class="profile-pic">
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
                  <img src="images\faces\face3.jpg" alt="image" class="profile-pic">
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
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="icon-grid"></i>
            </a>
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
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles primary"></div>
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles pink"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="profile-image">
                  <img src="images\faces\face10.jpg" alt="image">
                  <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
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
              <a class="nav-link" href="index.html">
                <span class="menu-title">Trang chủ</span>
                <span class="badge badge-success">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages\widgets.html">
                <span class="menu-title">Quản lí banner</span>
                <span class="badge badge-danger">3</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages\widgets.html">
                <span class="menu-title">Quản lí danh mục</span>
                <span class="badge badge-danger">3</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <span class="menu-title">Quản lí sản phẩm</span>
                <span class="badge badge-primary">2</span>
              </a>
              <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('products.index' )}}"> Tất cả sản phẩm </a></li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.products.lowStock') }}"> Sản phẩm sắp hết hàng </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.products.inactive') }}"> Sản phẩm ngừng bán </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-title">Quản lí đơn hàng</span>
                <span class="badge badge-success">10</span>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages\ui-features\accordions.html">Tất cả đơn hàng</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages\ui-features\buttons.html">Chờ xác nhận</a></li>
                  <span class="badge badge-success">10</span>
                  <li class="nav-item"> <a class="nav-link" href="pages\ui-features\badges.html">Đang đóng gói</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages\ui-features\dropdowns.html">Đang giao</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages\ui-features\modals.html">Đã giao</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages\ui-features\progress.html">Đã hủy</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                aria-controls="ui-advanced">
                <span class="menu-title">Quản lí voucher</span>
                <span class="badge badge-primary">8</span>
              </a>
              <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages\ui-features\dragula.html">Tất cả voucher</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages\ui-features\clipboard.html">Đã hết hạn</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages\ui-features\context-menu.html">Đang được áp dụng</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <span class="menu-title">Quản lí tài khoản</span>
                <span class="badge badge-danger">3</span>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="pages\forms\basic_elements.html">Khách hàng</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="pages\forms\advanced_elements.html">Nhân viên</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          @yield('content')
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2017 <a
                  href="#">UrbanUI</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                  class="mdi mdi-heart text-danger"></i></span>
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

  <!-- plugins:js -->
  <script src="vendors\js\vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors\jquery-bar-rating\jquery.barrating.min.js"></script>
  <script src="vendors\chart.js\Chart.min.js"></script>
  <script src="vendors\raphael\raphael.min.js"></script>
  <script src="vendors\morris.js\morris.min.js"></script>
  <script src="vendors\jquery-sparkline\jquery.sparkline.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js\off-canvas.js"></script>
  <script src="js\hoverable-collapse.js"></script>
  <script src="js\misc.js"></script>
  <script src="js\settings.js"></script>
  <script src="js\todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js\dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>