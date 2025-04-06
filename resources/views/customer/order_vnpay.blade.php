@include('layouts.customer.header')
<div class="container">
    <h2>Thanh toán qua VNPay</h2>
    <p>{{ session('success') }}</p>
    <!-- Thêm logic tích hợp VNPay nếu cần -->
    <a href="{{ route('customer.index') }}" class="btn btn-primary">Quay lại</a>
</div>

<div class="cart-steps">
    <div class="step completed">
        <span class="step-number">1</span>
        <span class="step-text">Giỏ hàng</span>
    </div>
    <div class="step-line active"></div>
    <div class="step completed">
        <span class="step-number">2</span>
        <span class="step-text">Đặt hàng</span>
    </div>
    <div class="step-line active"></div>
    <div class="step active">
        <span class="step-number">3</span>
        <span class="step-text">Thành công</span>
    </div>
</div>

<style>
.cart-steps {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 2rem auto;
    padding: 2rem;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    max-width: 800px;
    width: 100%;
}

.step {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    flex: 1;
    z-index: 1;
}

.step-number {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #e0e0e0;
    color: #666;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    margin-bottom: 0.5rem;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.step-text {
    font-size: 1rem;
    color: #666;
    transition: all 0.3s ease;
    font-weight: 500;
}

/* Bước 1 - Giỏ hàng */
.step:nth-child(1).completed .step-number {
    background: #28a745;
    color: #fff;
    border-color: #28a745;
}

.step:nth-child(1).completed .step-text {
    color: #28a745;
}

/* Bước 2 - Đặt hàng */
.step:nth-child(3).completed .step-number {
    background: #007bff;
    color: #fff;
    border-color: #007bff;
}

.step:nth-child(3).completed .step-text {
    color: #007bff;
}

/* Bước 3 - Thành công */
.step:nth-child(5).active .step-number {
    background: #ff6b00;
    color: #fff;
    border-color: #ff6b00;
    transform: scale(1.1);
}

.step:nth-child(5).active .step-text {
    color: #ff6b00;
    font-weight: 600;
}

.step-line {
    flex: 1;
    height: 3px;
    background: #e0e0e0;
    margin: 0 1rem;
    position: relative;
    z-index: 0;
}

.step-line.active {
    background: linear-gradient(to right, #28a745, #007bff, #ff6b00);
}

@media (max-width: 768px) {
    .cart-steps {
        padding: 1rem;
        flex-direction: column;
        gap: 1rem;
    }
    .step-line {
        width: 3px;
        height: 40px;
        margin: 0.5rem 0;
    }
    .step-line.active {
        background: linear-gradient(to bottom, #28a745, #007bff, #ff6b00);
    }
}
</style>
@include('layouts.customer.footer')
@include('layouts.customer.footer')