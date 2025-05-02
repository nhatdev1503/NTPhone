@include('layouts.customer.header')
@php
    $user = Auth::user();
@endphp

<div class="checkout-container">
    <div class="cart-header">
        <div class="container">

            <div class="cart-steps">
                <div class="step completed">
                    <span class="step-number">1</span>
                    <span class="step-text">Giỏ hàng</span>
                </div>
                <div class="step-line"></div>
                <div class="step active">
                    <span class="step-number">2</span>
                    <span class="step-text">Đặt hàng</span>
                </div>
                <div class="step-line"></div>
                <div class="step">
                    <span class="step-number">3</span>
                    <span class="step-text">Thành công</span>
                </div>
            </div>
            {{-- <div class="header-content">
            
                <div class="back-buttons">
                    <a href="{{ route('customer.cart') }}" class="btn-back">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                    <a href="{{ route('customer.index') }}" class="btn-back">
                        <i class="fas fa-home"></i> Trang chủ
                    </a>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="container">
        <div id="notification-container" class="notification-container"></div>
        <form id="checkout-form" action="{{ route('customer.cart.checkout') }}" method="POST">
            @csrf
            <input type="hidden" name="selected_items" value="{{ json_encode($selectedCartIds) }}">
            <input type="hidden" name="voucher_code" id="voucher_code_input">
            <input type="hidden" name="discount_amount" id="discount_amount_input">
            <input type="hidden" name="agree" value="1">
            <div class="checkout-content">
                <div class="left-section">
                    <div class="customer-info">

                        <div class="payment-section">
                            <h2>Phương thức thanh toán</h2>
                            <div class="payment-methods">
                                <label class="payment-method">
                                    <input type="radio" name="payment_method" value="COD" checked>
                                    <div class="method-info">
                                        <i class="fas fa-money-bill-wave"></i>
                                        <span>Thanh toán khi nhận hàng (COD)</span>
                                    </div>
                                </label>
                                <label class="payment-method">
                                    <input type="radio" name="payment_method" value="VNPay">
                                    <div class="method-info">
                                        <i class="fas fa-credit-card"></i>
                                        <span>Thanh toán qua VNPay</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <h2>Thông tin giao hàng</h2>
                        <div class="form-group">
                            <label for="fullname">Họ và tên <span class="required">*</span></label>
                            <input type="text" class="form-control" id="fullname" name="fullname"
                                value="{{ $user->fullname }}" required>
                            <span class="error-message" id="fullname-error"></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $user->email }}" required>
                            <span class="error-message" id="email-error"></span>
                        </div>

                        <div class="form-group">
                            <label for="phone">Số điện thoại <span class="required">*</span></label>
                            <div class="phone-group">
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    value="{{ $user->phone }}" required>
                                <span class="error-message" id="phone-error"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Địa chỉ <span class="required">*</span></label>
                            <textarea class="form-control" id="address" name="address" rows="3" required>{{ $user->address }}</textarea>
                            <span class="error-message" id="address-error"></span>
                        </div>

                        <div class="form-group">
                            <label for="note">Ghi chú</label>
                            <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                        </div>
                    </div>


                </div>
                <div class="right-section">
                    <div class="order-summary">
                        <h2>Đơn hàng ({{ count($carts) }} sản phẩm)</h2>
                        <div class="product-list">
                            @foreach ($carts as $cart)
                                <div class="product-item">
                                    <div class="product-image">
                                        <img src="{{ asset($cart->product_variant->product->image) }}"
                                            alt="{{ $cart->product_variant->product->name }}">
                                        <span class="quantity">{{ $cart->quantity }}</span>
                                    </div>
                                    <div class="product-info">
                                        <h3>{{ $cart->product_variant->product->name }}</h3>
                                        <div class="variant-info">
                                            {{ $cart->product_variant->color }} -
                                            {{ $cart->product_variant->storage }}
                                        </div>
                                        <div class="price-info">
                                            <div class="unit-price">
                                                <span class="label">Đơn giá:</span>
                                                <span
                                                    class="value">{{ number_format($cart->product_variant->price, 0, ',', '.') }}₫</span>
                                            </div>
                                            <div class="total-price">
                                                <span class="label">Tổng:</span>
                                                <span
                                                    class="value">{{ number_format($cart->product_variant->price * $cart->quantity, 0, ',', '.') }}₫</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="discount-section">
                            <div class="discount-input">
                                <input type="text" id="voucher_code" name="voucher_code"
                                    placeholder="Nhập mã giảm giá">
                                <button type="button" id="apply-voucher" class="btn-apply">Áp dụng</button>
                                <button type="button" id="show-vouchers" class="btn-show-vouchers">
                                    <i class="fas fa-gift"></i></i> Voucher
                                </button>
                            </div>
                            <div class="voucher-info" id="voucher-info" style="display: none;">
                                <div class="applied-voucher">
                                    <div class="voucher-code" id="applied-voucher-code"></div>
                                    <div class="voucher-discount" id="applied-voucher-discount"></div>
                                    <button type="button" id="remove-voucher" class="btn-remove-voucher">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="order-totals">
                            <div class="subtotal">
                                <span>Tạm tính</span>
                                <span>{{ number_format($subTotal, 0, ',', '.') }}₫</span>
                            </div>
                            <div class="discount">
                                <span>Giảm giá</span>
                                <span id="discount-amount">0₫</span>
                            </div>
                            <div class="shipping">
                                <span>Phí vận chuyển</span>
                                <span>Miễn phí</span>
                            </div>
                            <div class="total">
                                <span>Tổng cộng</span>
                                <span class="final-price"
                                    id="final-total">{{ number_format($subTotal, 0, ',', '.') }}₫</span>
                            </div>
                        </div>

                        <div class="agree-check">
                            <input type="checkbox" name="agree" id="agree" required>
                            <label for="agree">
                                Bằng việc tiến hành đặt mua hàng, bạn đồng ý với Điều khoản dịch vụ và Chính sách
                                xử lý dữ liệu cá nhân của NTShop .
                                Tôi đã đọc và đồng ý với <a href="#" id="terms-link">điều khoản thanh toán</a>
                            </label>
                        </div>

                        <button type="submit" class="place-order">ĐẶT HÀNG</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Terms Popup -->
<div id="terms-popup" class="terms-popup">
    <div class="terms-content">
        <div class="terms-header">
            <h3>Điều khoản thanh toán</h3>
            <button id="close-terms" class="close-terms">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="terms-body">
            <h4>1. Thông tin thanh toán</h4>
            <p>- Khi đặt hàng, bạn cần cung cấp đầy đủ thông tin cá nhân chính xác.</p>
            <p>- Chúng tôi cam kết bảo mật thông tin thanh toán của bạn.</p>

            <h4>2. Phương thức thanh toán</h4>
            <p>- Thanh toán khi nhận hàng (COD): Bạn chỉ cần thanh toán khi nhận được hàng.</p>
            <p>- Thanh toán qua VNPay: Bạn sẽ được chuyển hướng đến trang thanh toán VNPay.</p>

            <h4>3. Điều khoản giao hàng</h4>
            <p>- Thời gian giao hàng: 2-5 ngày làm việc.</p>
            <p>- Phí vận chuyển: Miễn phí vận chuyển đến hết tháng 9/2025.</p>

            <h4>4. Chính sách hoàn trả</h4>
            <p>- Được hoàn trả trong vòng 7 ngày nếu sản phẩm có lỗi.</p>
            <p>- Sản phẩm phải còn nguyên vẹn, đầy đủ phụ kiện.</p>
        </div>
    </div>
</div>

<!-- Voucher Popup -->
<div id="voucher-popup" class="voucher-popup">
    <div class="voucher-popup-content">
        <div class="voucher-popup-header">
            <h3>Voucher khả dụng</h3>
            <button id="close-voucher-popup" class="close-voucher">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="voucher-popup-body">
            <div class="voucher-list">
                @foreach ($activeVouchers as $voucher)
                    <div class="voucher-item">
                        <div class="voucher-content">
                            <div class="voucher-header">
                                <div class="voucher-code">{{ $voucher->code }}</div>
                                <div class="voucher-expiry">HSD:
                                    {{ \Carbon\Carbon::parse($voucher->expiration_date)->format('d/m/Y') }}
                                </div>
                            </div>
                            <div class="voucher-body">
                                <div class="voucher-discount">
                                    @if ($voucher->discount_type == 'percentage')
                                        Giảm {{ $voucher->discount_value }}%
                                        @if ($voucher->max_discount_value)
                                            (tối đa
                                            {{ number_format($voucher->max_discount_value, 0, ',', '.') }}₫)
                                        @endif
                                    @else
                                        Giảm
                                        {{ number_format($voucher->discount_value, 0, ',', '.') }}₫
                                    @endif
                                </div>
                                @if ($voucher->min_order_value)
                                    <div class="voucher-condition">
                                        Đơn tối thiểu
                                        {{ number_format($voucher->min_order_value, 0, ',', '.') }}₫
                                    </div>
                                @endif
                            </div>
                            <div class="voucher-footer">
                                <button type="button" class="btn-use-voucher" data-code="{{ $voucher->code }}">
                                    <i class="fas fa-check"></i> Sử dụng
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
    .checkout-container {
        background: #f4f4f4;
        min-height: 100vh;
        padding-bottom: 3rem;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    .cart-header {
        background: #fff;
        padding: 10px;
        margin-bottom: 20px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .cart-header h1 {
        font-size: 1.8rem;
        color: #333;
        margin-bottom: 1.5rem;
        font-weight: 600;
    }

    .cart-steps {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0;
        padding: 10px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        flex: 1;
    }

    .step-number {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #e0e0e0;
        color: #666;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        margin-bottom: 0.5rem;
        transition: all 0.3s ease;
    }

    .step-text {
        font-size: 0.9rem;
        color: #666;
        transition: all 0.3s ease;
    }

    .step.active .step-number {
        background: #007bff;
        color: #fff;
    }

    .step.active .step-text {
        color: #007bff;
        font-weight: 500;
    }

    .step.completed .step-number {
        background: #28a745;
        color: #fff;
    }

    .step.completed .step-text {
        color: #28a745;
    }

    .step-line {
        flex: 1;
        height: 2px;
        background: #e0e0e0;
        margin: 0 1rem;
    }

    .step-line.active {
        background: #28a745;
    }

    .checkout-content {
        display: grid;
        grid-template-columns: 1fr 450px;
        gap: 2rem;
    }

    .left-section {
        background: #fff;
        padding: 10px 20px 20px 20px;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .customer-info h2,
    .payment-section h2 {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 10px;
        font-weight: 600;
        text-align: center;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-control {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 0.95rem;
    }

    .form-control:focus {
        border-color: #2979ff;
        outline: none;
    }

    .phone-group {
        position: relative;
    }

    .country-select {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        align-items: center;
        gap: 5px;
        padding-right: 10px;
        border-right: 1px solid #ddd;
    }

    .phone-group .form-control {}

    .payment-methods {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .payment-method {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.2s;
    }

    .payment-method:hover {
        border-color: #2979ff;
    }

    .payment-method input[type="radio"] {
        margin: 0;
    }

    .method-info {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #333;
    }

    .method-info i {
        font-size: 1.2rem;
        color: #2979ff;
    }

    .right-section {
        position: sticky;
        top: 2rem;
    }

    .order-summary {
        background: #fff;
        padding: 10px 20px 20px 20px;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .order-summary h2 {
        font-size: 1.2rem;
        color: #333;
        font-weight: 600;
    }

    .product-list {
        border-bottom: 1px solid #eee;
    }

    .product-item {
        display: flex;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .product-image {
        position: relative;
        width: 80px;
        height: 80px;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 4px;
    }

    .quantity {
        position: absolute;
        top: 1px;
        right: 2px;
        background: #2979ff;
        color: white;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
    }

    .product-info {
        flex: 1;
    }

    .product-info h3 {
        font-size: 0.95rem;
        color: #333;
        margin-bottom: 0.5rem;
        font-weight: bold;
    }

    .variant-info {
        font-size: 0.85rem;
        color: #666;
        margin-bottom: 0.5rem;
    }

    .price-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .unit-price {
        display: flex;
        align-items: center;
    }

    .label {
        font-size: 0.9rem;
        color: #666;
        margin-right: 0.5rem;
    }

    .value {
        font-size: 0.9rem;
        color: #333;
        font-weight: 500;
    }

    .total-price {
        display: flex;
        align-items: center;
    }

    .discount-section {
        margin-bottom: 1.5rem;
    }

    .discount-input {
        display: flex;
        gap: 0.5rem;
    }

    .discount-input input {
        flex: 1;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 0.95rem;
    }

    .btn-apply {
        padding: 10px;
        background: #2979ff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px0;
        transition: background 0.2s;
    }

    .btn-apply:hover {
        background: #2962ff;
    }

    .order-totals {
        margin-bottom: 1.5rem;
    }

    .order-totals>div {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.75rem;
        color: #666;
    }

    .order-totals .total {
        color: #333;
        font-weight: 600;
        font-size: 1.1rem;
        border-top: 1px solid #eee;
        padding-top: 1rem;
        margin-top: 0.5rem;
    }

    .agree-check {
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .agree-check input[type="checkbox"] {
        margin: 0;
    }

    .agree-check label {
        font-size: 0.95rem;
        color: #666;
    }

    .agree-check a {
        color: #2979ff;
        text-decoration: none;
    }

    .place-order {
        width: 100%;
        padding: 1rem;
        background: #d12a05;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 1.1rem;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.2s;
    }

    .place-order:hover {
        background: #2962ff;
    }

    @media (max-width: 992px) {
        .checkout-content {
            grid-template-columns: 1fr;
        }

        .right-section {
            position: static;
        }
    }

    .header-content {
        margin: 10px 0 0 0;
    }

    .back-buttons {
        display: flex;
        gap: 1rem;
    }

    .btn-back {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        background: #f5f5f5;
        color: #666;
        text-decoration: none;
        border-radius: 4px;
        transition: all 0.2s;
    }

    .btn-back:hover {
        background: #e0e0e0;
        color: #333;
    }

    .btn-back i {
        font-size: 0.9rem;
    }

    .voucher-list {
        margin-top: 1rem;
    }

    .voucher-item {
        background: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        margin-bottom: 1rem;
        overflow: hidden;
    }

    .voucher-content {
        padding: 8px;
    }

    .voucher-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .voucher-code {
        font-size: 1.1rem;
        font-weight: 600;
        color: #2979ff;
    }

    .voucher-expiry {
        font-size: 0.85rem;
        color: #666;
    }

    .voucher-discount {
        font-size: 1rem;
        color: #333;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }

    .voucher-condition {
        font-size: 0.9rem;
        color: #666;
    }

    .voucher-footer {
        display: flex;
        justify-content: flex-end;
    }

    .btn-use-voucher {
        background: #2979ff;
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition: background 0.2s;
    }

    .btn-use-voucher:hover {
        background: #2962ff;
    }

    .applied-voucher {
        display: flex;
        align-items: center;
        gap: 1rem;
        background: #e3f2fd;
        padding: 1rem;
        border-radius: 4px;
        margin-top: 1rem;
    }

    .btn-remove-voucher {
        background: none;
        border: none;
        color: #666;
        cursor: pointer;
        padding: 0.25rem;
    }

    .btn-remove-voucher:hover {
        color: #f44336;
    }

    .terms-popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .terms-content {
        background: white;
        width: 90%;
        max-width: 600px;
        max-height: 80vh;
        border-radius: 8px;
        overflow-y: auto;
    }

    .terms-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        border-bottom: 1px solid #eee;
    }

    .terms-header h3 {
        margin: 0;
        color: #333;
    }

    .close-terms {
        background: none;
        border: none;
        font-size: 1.2rem;
        color: #666;
        cursor: pointer;
    }

    .terms-body {
        padding: 1rem;
    }

    .terms-body h4 {
        color: #333;
        margin: 1rem 0 0.5rem;
    }

    .terms-body p {
        color: #666;
        margin-bottom: 0.5rem;
        line-height: 1.5;
    }

    .notification-container {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 100000;
    }

    .notification {
        background: #fff;
        padding: 1rem;
        border-radius: 4px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        margin-bottom: 0.5rem;
        transform: translateX(100%);
        opacity: 0;
        transition: all 0.3s;
        min-width: 300px;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .notification.show {
        transform: translateX(0);
        opacity: 1;
    }

    .notification.success {
        border-left: 4px solid #4caf50;
    }

    .notification.error {
        border-left: 4px solid #f44336;
    }

    .notification i {
        font-size: 1.2rem;
    }

    .notification.success i {
        color: #4caf50;
    }

    .notification.error i {
        color: #f44336;
    }

    .notification-content {
        flex: 1;
    }

    .notification-title {
        font-weight: 600;
        margin-bottom: 0.25rem;
    }

    .discount {
        display: none !important;
    }

    .notification-message {
        font-size: 0.9rem;
        color: #666;
    }

    .place-order:disabled {
        background: #ccc;
        cursor: not-allowed;
    }

    .fa-spinner {
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .error-message {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
        display: block;
    }

    .form-control.is-invalid {
        border-color: #dc3545;
    }

    .voucher-popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .voucher-popup-content {
        background: white;
        width: 90%;
        max-width: 600px;
        max-height: 80vh;
        border-radius: 8px;
        overflow-y: auto;
    }

    .voucher-popup-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        border-bottom: 1px solid #eee;
    }

    .voucher-popup-header h3 {
        margin: 0;
        color: #333;
    }

    .close-voucher {
        background: none;
        border: none;
        font-size: 1.2rem;
        color: #666;
        cursor: pointer;
    }

    .voucher-popup-body {
        padding: 1rem;
    }

    .btn-show-vouchers {
        background: #ff6c10;
        color: white;
        border: none;
        padding: 4px;
        font-size: 14px;
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-show-vouchers:hover {
        background: #2962ff;
    }

    .btn-toggle-products {
        width: 100%;
        padding: 1px 0 1px 0;
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        color: #e85d00;
        font-weight: 500;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        margin: 5px 0;
        transition: all 0.2s;
    }

    .btn-toggle-products:hover {
        background: #e9ecef;
    }

    .btn-toggle-products i {
        transition: transform 0.2s;
    }

    .product-item {
        transition: all 0.3s ease;
    }

    .product-list {
        margin-bottom: 0;
    }

    .required {
        color: red;
    }
</style>

<script>
    const activeVouchers = {!! json_encode(
        $activeVouchers->map(function ($voucher) {
                return [
                    'code' => $voucher->code,
                    'discount_type' => $voucher->discount_type,
                    'discount_value' => $voucher->discount_value,
                    'min_order_value' => $voucher->min_order_value ?? 0,
                    'max_discount_value' => $voucher->max_discount_value ?? null,
                ];
            })->toArray(),
    ) !!};

    let appliedDiscount = 0;
    const subtotal = {{ $subTotal }}; // Store the initial subtotal

    document.getElementById('apply-voucher').addEventListener('click', function() {
        const code = document.getElementById('voucher_code').value.trim();
        if (code === '') {
            showNotification('Vui lòng nhập mã voucher!', 'error');
            return;
        }
        applyVoucher(code, true);
    });

    function applyVoucher(code, showMessage = true) {
        const voucher = activeVouchers.find(v => v.code === code);
        if (!voucher) {
            if (showMessage) {
                showNotification('Mã voucher không khả dụng!', 'error');
            }
            document.getElementById('voucher_code').value = '';
            document.getElementById('voucher-info').style.display = 'none';
            document.getElementById('discount-amount').innerText = '0₫';
            document.getElementById('voucher_code_input').value = '';
            updateFinalTotal();
            return;
        }

        // Check minimum order value
        if (voucher.min_order_value && subtotal < voucher.min_order_value) {
            if (showMessage) {
                showNotification(
                    `Đơn hàng phải từ ${voucher.min_order_value.toLocaleString('vi-VN')}₫ để áp dụng voucher này!`,
                    'error'
                );
            }
            document.getElementById('voucher_code').value = '';
            document.getElementById('voucher-info').style.display = 'none';
            document.getElementById('discount-amount').innerText = '0₫';
            document.getElementById('voucher_code_input').value = '';
            updateFinalTotal();
            return;
        }

        let discount = 0;
        if (voucher.discount_type === 'percentage') {
            discount = subtotal * (voucher.discount_value / 100);
            if (voucher.max_discount_value && discount > voucher.max_discount_value) {
                discount = voucher.max_discount_value;
            }
        } else {
            discount = voucher.discount_value;
        }

        appliedDiscount = discount;
        document.getElementById('discount-amount').innerText = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(discount).replace('₫', '') + '₫';
        document.getElementById('voucher_code_input').value = code;
        updateFinalTotal();

        // Show applied voucher info
        document.getElementById('voucher-info').style.display = 'block';
        document.getElementById('applied-voucher-code').textContent = code;
        document.getElementById('applied-voucher-discount').textContent = `Giảm ${new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(discount).replace('₫', '')}₫`;

        if (showMessage) {
            showNotification('Đã áp dụng mã giảm giá', 'success');
        }
    }

    function updateFinalTotal() {
        const finalTotal = Math.max(subtotal - appliedDiscount, 0);
        document.getElementById('final-total').innerText = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(finalTotal).replace('₫', '') + '₫';
    }

    function showNotification(message, type = 'success', title = '') {
        const container = document.getElementById('notification-container');
        const notification = document.createElement('div');
        notification.classList.add('notification', type);

        const content = document.createElement('div');
        content.classList.add('notification-content');

        if (title) {
            const titleElement = document.createElement('div');
            titleElement.classList.add('notification-title');
            titleElement.textContent = title;
            content.appendChild(titleElement);
        }

        const messageElement = document.createElement('div');
        messageElement.classList.add('notification-message');
        messageElement.textContent = message;
        content.appendChild(messageElement);

        const icon = document.createElement('i');
        icon.className = type === 'success' ? 'fas fa-check-circle' : 'fas fa-exclamation-circle';

        notification.appendChild(icon);
        notification.appendChild(content);

        container.appendChild(notification);
        setTimeout(() => notification.classList.add('show'), 10);
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => notification.remove(), 500);
        }, 5000);
    }

    // Terms popup
    const termsPopup = document.getElementById('terms-popup');
    const termsLink = document.getElementById('terms-link');
    const closeTerms = document.getElementById('close-terms');

    termsLink.addEventListener('click', function(e) {
        e.preventDefault();
        termsPopup.style.display = 'flex';
    });

    closeTerms.addEventListener('click', function() {
        termsPopup.style.display = 'none';
    });

    termsPopup.addEventListener('click', function(e) {
        if (e.target === termsPopup) {
            termsPopup.style.display = 'none';
        }
    });

    // Toggle voucher list
    document.getElementById('toggle-voucher-list')?.addEventListener('click', function() {
        const voucherItems = document.querySelectorAll('.voucher-item.hidden-voucher');
        const isHidden = voucherItems[0].style.display === 'none' || voucherItems[0].style.display === '';
        voucherItems.forEach(item => {
            item.style.display = isHidden ? 'block' : 'none';
        });
        this.innerHTML = isHidden ? 'Thu gọn <i class="fas fa-chevron-up"></i>' :
            'Xem thêm <i class="fas fa-chevron-down"></i>';
    });

    document.querySelectorAll('.btn-use-voucher').forEach(btn => {
        btn.addEventListener('click', function() {
            const code = this.getAttribute('data-code');
            document.getElementById('voucher_code').value = code;
            applyVoucher(code, true);
        });
    });

    document.getElementById('remove-voucher')?.addEventListener('click', function() {
        appliedDiscount = 0;
        document.getElementById('voucher_code').value = '';
        document.getElementById('voucher_code_input').value = '';
        document.getElementById('voucher-info').style.display = 'none';
        document.getElementById('discount-amount').innerText = '0₫';
        updateFinalTotal();
        showNotification('Đã hủy áp dụng mã giảm giá.', 'success');
    });

    // Update form submission
    document.getElementById('checkout-form').addEventListener('submit', function(e) {
        e.preventDefault();

        // Reset error states
        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
        document.querySelectorAll('.form-control').forEach(el => el.classList.remove('is-invalid'));

        // Create form data
        const formData = new FormData(this);

        // Submit form using fetch
        fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (!data.success && data.errors) {
                    // Display validation errors
                    Object.keys(data.errors).forEach(field => {
                        const errorElement = document.getElementById(`${field}-error`);
                        const inputElement = document.getElementById(field);
                        if (errorElement) {
                            errorElement.textContent = data.errors[field][0];
                            inputElement?.classList.add('is-invalid');

                            // Scroll to first error
                            if (inputElement) {
                                inputElement.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'center'
                                });
                            }
                        }
                    });
                } else if (data.success) {
                    // Redirect to success page or VNPay
                    window.location.href = data.redirect_url;
                } else {
                    throw new Error(data.message || 'Có lỗi xảy ra khi xử lý đơn hàng');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification(error.message, 'error', 'Lỗi xử lý đơn hàng');
            });
    });

    // Voucher popup functionality
    const voucherPopup = document.getElementById('voucher-popup');
    const showVouchersBtn = document.getElementById('show-vouchers');
    const closeVoucherBtn = document.getElementById('close-voucher-popup');

    showVouchersBtn.addEventListener('click', function() {
        voucherPopup.style.display = 'flex';
    });

    closeVoucherBtn.addEventListener('click', function() {
        voucherPopup.style.display = 'none';
    });

    voucherPopup.addEventListener('click', function(e) {
        if (e.target === voucherPopup) {
            voucherPopup.style.display = 'none';
        }
    });

    // Modify the product list section to include show more/less functionality
    document.addEventListener('DOMContentLoaded', function() {
        const productList = document.querySelector('.product-list');
        const products = productList.querySelectorAll('.product-item');
        const initialDisplayCount = 2;
        let isExpanded = false;

        // Add show more/less button if there are more than 2 products
        if (products.length > initialDisplayCount) {
            const toggleButton = document.createElement('button');
            toggleButton.className = 'btn-toggle-products';
            toggleButton.innerHTML = 'Xem thêm <i class="fas fa-chevron-down"></i>';
            productList.insertAdjacentElement('afterend', toggleButton);

            // Initially hide products beyond the first two
            products.forEach((product, index) => {
                if (index >= initialDisplayCount) {
                    product.style.display = 'none';
                }
            });

            // Toggle button click handler
            toggleButton.addEventListener('click', function() {
                isExpanded = !isExpanded;
                products.forEach((product, index) => {
                    if (index >= initialDisplayCount) {
                        product.style.display = isExpanded ? 'flex' : 'none';
                    }
                });
                this.innerHTML = isExpanded ? 'Thu gọn <i class="fas fa-chevron-up"></i>' :
                    'Xem thêm <i class="fas fa-chevron-down"></i>';
            });
        }
    });

    // Remove duplicate event listeners for voucher buttons
    document.getElementById('apply-voucher').removeEventListener('click', applyVoucherHandler);
    document.getElementById('apply-voucher').addEventListener('click', applyVoucherHandler);

    function applyVoucherHandler() {
        const code = document.getElementById('voucher_code').value.trim();
        if (code === '') {
            showNotification('Vui lòng nhập mã voucher!', 'error');
            return;
        }
        applyVoucher(code, true);
    }
</script>
@include('layouts.customer.footer')
