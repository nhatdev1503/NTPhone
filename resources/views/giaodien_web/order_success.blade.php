<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Hàng Thành Công</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .success-container {
            text-align: center;
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .success-icon {
            font-size: 60px;
            color: #28a745;
        }
        .btn-custom {
            width: 200px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">✔</div>
        <h2>Đặt hàng thành công!</h2>
        <p>Chúng tôi sẽ sớm giao đơn hàng đến bạn. Cảm ơn bạn đã mua sắm tại cửa hàng của chúng tôi!</p>
        <a href="{{ route('customer.index') }}" class="btn btn-primary btn-custom">Về Trang Chủ</a>
        {{-- <a href="{{ route('customer.orders') }}" class="btn btn-success btn-custom">Xem Đơn Hàng</a> --}}
    </div>
</body>
</html>
