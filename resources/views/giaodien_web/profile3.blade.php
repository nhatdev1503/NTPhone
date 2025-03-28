<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang Profile - Website Kinh Doanh</title>
  <style>
    /* Reset & Font */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f6f8;
      color: #333;
      line-height: 1.6;
      display: flex;
      justify-content: center;
      padding: 20px;
    }
    /* Container */
    .profile-container {
      display: flex;
      max-width: 1200px;
      width: 100%;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      overflow: hidden;
    }
    /* Sidebar */
    .sidebar {
      width: 250px;
      background: #324DC5;
      color: #fff;
      padding: 20px;
    }
    .sidebar ul {
      list-style: none;
    }
    .sidebar ul li {
      padding: 15px 10px;
      margin-bottom: 10px;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s;
    }
    .sidebar ul li:hover,
    .sidebar ul li.active {
      background: rgba(255,255,255,0.2);
    }
    /* Content Area */
    .content {
      flex: 1;
      padding: 30px;
      overflow-y: auto;
    }
    .tab-content {
      display: none;
      animation: fadeIn 0.3s ease-in;
    }
    .tab-content.active {
      display: block;
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    /* Profile Info Section */
    .profile-section {
      margin-bottom: 30px;
      border-bottom: 1px solid #e2e8f0;
      padding-bottom: 20px;
    }
    .profile-section:last-child {
      border-bottom: none;
    }
    .profile-section h3 {
      color: #324DC5;
      margin-bottom: 10px;
    }
    .profile-section p {
      margin-bottom: 8px;
    }
    form label {
      display: block;
      margin-bottom: 5px;
      font-weight: 600;
    }
    form input[type="text"],
    form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #d1d5db;
      border-radius: 4px;
    }
    form button {
      background: #324DC5;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s;
    }
    form button:hover {
      background: #2B44B0;
    }
    /* Orders */
    .order-item {
      border: 1px solid #e2e8f0;
      border-radius: 4px;
      padding: 15px;
      margin-bottom: 15px;
    }
    /* Favorites */
    .favorites-list {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
    .favorite-item {
      width: 150px;
      text-align: center;
    }
    .favorite-item img {
      width: 100%;
      border-radius: 4px;
      margin-bottom: 8px;
    }
    /* Reviews */
    .review {
      padding: 15px;
      border: 1px solid #e2e8f0;
      border-radius: 4px;
      margin-bottom: 15px;
    }
    .review p {
      margin-bottom: 8px;
    }
    .review strong {
      color: #324DC5;
    }
    /* Logout */
    .logout-container {
      text-align: center;
      padding: 40px 0;
    }
    .logout-container button {
      background: #DC2626;
      color: #fff;
      padding: 12px 30px;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }
    .logout-container button:hover {
      background: #b71c1c;
    }
    /* Responsive */
    @media (max-width: 768px) {
      .profile-container {
        flex-direction: column;
      }
      .sidebar {
        width: 100%;
        text-align: center;
      }
      .sidebar ul li {
        margin-bottom: 5px;
      }
    }
  </style>
</head>
<body>
  <div class="profile-container">
    <!-- Sidebar Menu -->
    <div class="sidebar">
      <ul class="nav">
        <li data-target="profile-info" class="active">Thông tin cá nhân</li>
        <li data-target="orders">Đơn hàng</li>
        <li data-target="favorites">Sản phẩm yêu thích</li>
        <li data-target="reviews">Đánh giá &amp; Phản hồi</li>
        <li data-target="logout">Đăng xuất</li>
      </ul>
    </div>

    <!-- Content Area -->
    <div class="content">
      <!-- Thông tin cá nhân -->
      <div id="profile-info" class="tab-content active">
        <h2>Thông tin cá nhân</h2>
        <!-- Thông tin chung -->
        <div class="profile-section">
          <h3>Thông tin cá nhân</h3>
          <p><strong>Họ tên:</strong> Nguyễn Văn A</p>
          <p><strong>Email:</strong> nguyenvana@example.com</p>
          <p><strong>Số điện thoại:</strong> 0123 456 789</p>
        </div>
        <!-- Đổi mật khẩu -->
        <div class="profile-section">
          <h3>Đổi mật khẩu</h3>
          <form>
            <label for="current-password">Mật khẩu cũ:</label>
            <input type="password" id="current-password" placeholder="Nhập mật khẩu cũ">
            <label for="new-password">Mật khẩu mới:</label>
            <input type="password" id="new-password" placeholder="Nhập mật khẩu mới">
            <label for="confirm-password">Xác nhận mật khẩu:</label>
            <input type="password" id="confirm-password" placeholder="Xác nhận mật khẩu">
            <button type="submit">Cập nhật mật khẩu</button>
          </form>
        </div>
        <!-- Địa chỉ cá nhân -->
        <div class="profile-section">
          <h3>Địa chỉ cá nhân</h3>
          <p><strong>Địa chỉ:</strong> 123 Đường ABC, Phường 1, Quận 1, TP.HCM</p>
        </div>
      </div>

      <!-- Đơn hàng -->
      <div id="orders" class="tab-content">
        <h2>Đơn hàng</h2>
        <div class="order-item">
          <p><strong>Mã đơn hàng:</strong> DH001</p>
          <p><strong>Ngày đặt:</strong> 01/03/2025</p>
          <p><strong>Tổng tiền:</strong> 2.500.000 VND</p>
          <p><strong>Trạng thái:</strong> Đang xử lý</p>
        </div>
        <div class="order-item">
          <p><strong>Mã đơn hàng:</strong> DH002</p>
          <p><strong>Ngày đặt:</strong> 15/02/2025</p>
          <p><strong>Tổng tiền:</strong> 1.200.000 VND</p>
          <p><strong>Trạng thái:</strong> Giao hàng thành công</p>
        </div>
      </div>

      <!-- Sản phẩm yêu thích -->
      <div id="favorites" class="tab-content">
        <h2>Sản phẩm yêu thích</h2>
        <div class="favorites-list">
          <div class="favorite-item">
            <img src="https://via.placeholder.com/150" alt="Sản phẩm 1">
            <p>Sản phẩm 1</p>
          </div>
          <div class="favorite-item">
            <img src="https://via.placeholder.com/150" alt="Sản phẩm 2">
            <p>Sản phẩm 2</p>
          </div>
          <div class="favorite-item">
            <img src="https://via.placeholder.com/150" alt="Sản phẩm 3">
            <p>Sản phẩm 3</p>
          </div>
        </div>
      </div>

      <!-- Đánh giá & Phản hồi -->
      <div id="reviews" class="tab-content">
        <h2>Đánh giá &amp; Phản hồi</h2>
        <div class="review">
          <p><strong>Nguyễn Thị B</strong> - 5 sao</p>
          <p>Sản phẩm rất tốt, dịch vụ chăm sóc khách hàng tuyệt vời.</p>
        </div>
        <div class="review">
          <p><strong>Trần Văn C</strong> - 4 sao</p>
          <p>Sản phẩm chất lượng ổn, giao hàng nhanh nhưng cần cải thiện đóng gói.</p>
        </div>
      </div>

      <!-- Đăng xuất -->
      <div id="logout" class="tab-content">
        <h2>Đăng xuất</h2>
        <div class="logout-container">
          <p>Bạn có chắc chắn muốn đăng xuất khỏi hệ thống?</p>
          <br>
          <button onclick="logout()">Đăng xuất</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Chuyển đổi tab mượt mà khi click vào sidebar menu
    const navItems = document.querySelectorAll('.nav li');
    const tabContents = document.querySelectorAll('.tab-content');
    
    navItems.forEach(item => {
      item.addEventListener('click', function() {
        // Xóa active cho tất cả các menu
        navItems.forEach(nav => nav.classList.remove('active'));
        this.classList.add('active');
        
        // Hiển thị tab nội dung tương ứng
        const target = this.getAttribute('data-target');
        tabContents.forEach(content => {
          content.classList.remove('active');
          if(content.id === target) {
            content.classList.add('active');
          }
        });
      });
    });
    
    // Hàm đăng xuất
    function logout() {
      // Thực hiện logic đăng xuất nếu cần
      alert("Bạn đã đăng xuất thành công!");
      // Ví dụ chuyển hướng: window.location.href = "login.html";
    }
  </script>
</body>
</html>
