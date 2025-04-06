@include('layouts.customer.header')
@php
    $user = Auth::user();
@endphp

<div class="cart-page">
    <div class="cart-header">
    <div class="container">
            <h1>Giỏ hàng của bạn</h1>
            <div class="cart-steps">
                <div class="step active">
                    <span class="step-number">1</span>
                    <span class="step-text">Giỏ hàng</span>
    </div>
                <div class="step-line"></div>
                <div class="step">
                    <span class="step-number">2</span>
                    <span class="step-text">Đặt hàng</span>
                </div>
                <div class="step-line"></div>
                <div class="step">
                    <span class="step-number">3</span>
                    <span class="step-text">Thành công</span>
                </div>
            </div>
        </div>
    </div>

    @if($carts->isEmpty())
    <div class="empty-cart">
        <div class="empty-cart-content">
            <i class="fas fa-shopping-cart"></i>
            <h2>Giỏ hàng trống</h2>
            <p>Mua sắm thôi nào!</p>
            <a href="{{ route('customer.index') }}" class="btn-home">
                <i class="fas fa-home"></i>
                Quay về trang chủ
            </a>
        </div>
    </div>
    @else
    <div class="container">
    <div id="notification-container" class="notification-container"></div>
        <form id="checkout-form" action="{{ route('customer.cart.proceed-to-checkout') }}" method="POST">
        @csrf
            <input type="hidden" name="selected_items" id="selected_items">
            <div class="cart-content">
                <div class="cart-items">
                    <div class="select-all">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" id="select-all">
                            <span class="checkmark"></span>
                            <span>Chọn tất cả ({{ count($carts) }} sản phẩm)</span>
                        </label>
                    </div>

                    @php $subTotal = 0; @endphp
                    @foreach ($carts as $cart)
                        @php
                            $price = $cart->product_variant->price;
                            $itemSubTotal = $price * $cart->quantity;
                            $subTotal += $itemSubTotal;
                            $variants = \App\Models\ProductVariant::where(
                                'product_id',
                                $cart->product_variant->product_id,
                            )
                                ->where('status', 'active')
                                ->get();
                            $colors = $variants->pluck('color')->unique();
                            $storages = $variants->pluck('storage')->unique();
                        @endphp
                        <div class="cart-item" data-price="{{ $price }}" data-cart-id="{{ $cart->id }}"
                            data-default-color="{{ $cart->product_variant->color }}"
                            data-default-storage="{{ $cart->product_variant->storage }}">
                            <div class="item-checkbox">
                                <label class="checkbox-wrapper">
                                    <input type="checkbox" name="selected_items[]" value="{{ $cart->id }}"
                                        class="item-select">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="item-image">
                                    <img src="{{ asset($cart->product_variant->product->image) }}"
                                    alt="{{ $cart->product_variant->product->name }}">
                            </div>
                            <div class="item-info">
                                <h3 class="item-name">{{ $cart->product_variant->product->name }}</h3>
                                <div class="brand-info">
                                    <span class="brand-label">Thương hiệu:</span>
                                    <span class="brand-value">{{ $cart->product_variant->product->category->name }}</span>

                                </div>
                                <div class="stock-info">
                                    <span class="stock-label">Còn lại:</span>
                                    <span class="stock-value" data-cart-id="{{ $cart->id }}">{{ $cart->product_variant->stock }}</span> sản phẩm
                                </div>
                                        <div class="variant-info">
                                    @if ($colors->count() <= 1 && $storages->count() <= 1)
                                            <span class="variant-static">
                                                {{ $cart->product_variant->color }} -
                                                {{ $cart->product_variant->storage }}
                                            </span>
                                    @else
                                        <div class="variant-selectors">
                                            <select class="variant-color" data-cart-id="{{ $cart->id }}">
                                                @foreach ($colors as $color)
                                                    @php
                                                        $variantCheck = $variants->where('color', $color)
                                                            ->where('storage', $cart->product_variant->storage)
                                                            ->where('status', 'active')
                                                            ->first();
                                                        $isAvailable = $variantCheck && $variantCheck->stock > 0;
                                                    @endphp
                                                    <option value="{{ $color }}" 
                                                        {{ $cart->product_variant->color == $color ? 'selected' : '' }}
                                                        {{ !$isAvailable ? 'disabled' : '' }}>
                                                        {{ $color }} {{ !$isAvailable ? '(Hết hàng)' : '' }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            <select class="variant-storage" data-cart-id="{{ $cart->id }}">
                                                @foreach ($storages as $storage)
                                                    @php
                                                        $variantCheck = $variants->where('storage', $storage)
                                                            ->where('color', $cart->product_variant->color)
                                                            ->where('status', 'active')
                                                            ->first();
                                                        $isAvailable = $variantCheck && $variantCheck->stock > 0;
                                                    @endphp
                                                    <option value="{{ $storage }}"
                                                        {{ $cart->product_variant->storage == $storage ? 'selected' : '' }}
                                                        {{ !$isAvailable ? 'disabled' : '' }}>
                                                        {{ $storage }} {{ !$isAvailable ? '(Hết hàng)' : '' }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                                </div>
                                <div class="item-actions">
                                    <div class="quantity-controls">
                                        <button type="button" class="btn-decrease" data-cart-id="{{ $cart->id }}">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <input type="number" name="quantities[{{ $cart->id }}]"
                                            value="{{ $cart->quantity }}" min="1" max="5"
                                            class="quantity-input" data-cart-id="{{ $cart->id }}">
                                        <button type="button" class="btn-increase" data-cart-id="{{ $cart->id }}">
                                            <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    <button type="button" class="btn-remove" data-cart-id="{{ $cart->id }}">
                                        <i class="fas fa-trash"></i>
                                        <span>Xóa</span>
                                    </button>
                                    </div>
                                </div>
                            <div class="item-price">
                                <div class="current-price">{{ number_format($price, 0, ',', '.') }}₫</div>
                                <div class="item-total">{{ number_format($itemSubTotal, 0, ',', '.') }}₫</div>
                                </div>
                                </div>
                    @endforeach
        </div>

        <div class="cart-summary">
                    <div class="summary-header">
                        <h2>Tổng tiền giỏ hàng</h2>
                    </div>
                    <div class="summary-content">
                        <div class="price-details">
                            <div class="price-row">
                                <span>Tạm tính</span>
                                <span class="subtotal">{{ number_format($subTotal, 0, ',', '.') }}₫</span>
                            </div>
                            <div class="price-row total">
                                <span>Tổng cộng</span>
                                <span class="final-price">{{ number_format($subTotal, 0, ',', '.') }}₫</span>
                            </div>
            </div>
            <button type="submit" class="btn-checkout" id="proceed-to-checkout" disabled>
                            Mua hàng (<span id="selected-items">0</span>)
            </button>
                    </div>
                </div>
        </div>
    </form>
    </div>
    @endif
</div>

<style>
    .cart-page {
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
        gap: 1rem;
    }

    .step {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .step-number {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #e0e0e0;
        color: #666;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }

    .step.active .step-number {
        background: #28a745;
        color: #fff;
    }

    .step-text {
        color: #666;
        font-size: 0.9rem;
    }

    .step.active .step-text {
        color: #28a745;
        font-weight: 500;
    }

    .step-line {
        flex: 0 0 60px;
        height: 2px;
        background: #e0e0e0;
    }

    .cart-content {
        display: grid;
        grid-template-columns: 1fr 350px;
        gap: 1.5rem;
    }

    .cart-items {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .select-all {
        padding: 1rem;
        border-bottom: 1px solid #eee;
    }

    .checkbox-wrapper {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
    }

    .checkbox-wrapper input {
        display: none;
    }

    .checkmark {
        width: 20px;
        height: 20px;
        border: 2px solid #2979ff;
        border-radius: 4px;
        position: relative;
    }

    .checkbox-wrapper input:checked+.checkmark:after {
        content: '';
        position: absolute;
        left: 6px;
        top: 2px;
        width: 5px;
        height: 10px;
        border: solid #2979ff;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .cart-item {
        display: grid;
        grid-template-columns: auto 80px 1fr auto;
        gap: 1rem;
        padding: 1rem;
        border-bottom: 1px solid #eee;
        align-items: center;
    }

    .item-image img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 4px;
    }

    .item-info {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .item-name {
        font-size: 0.95rem;
        color: #333;
        font-weight: 500;
    }

    .brand-info, .stock-info {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .brand-label, .stock-label {
        color: #999;
    }

    .stock-info.low-stock {
        color: #ff4444;
    }

    .stock-info.out-of-stock {
        color: #ff0000;
        font-weight: 500;
    }

    .stock-info.in-stock {
        color: #4caf50;
    }

    .variant-info {
        color: #666;
        font-size: 0.85rem;
    }

    .variant-selectors {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-top: 0.5rem;
    }

    .variant-color,
    .variant-storage {
        padding: 0.4rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        background: #fff;
    }

    .item-actions {
        display: flex;
        align-items: center;
        gap: 2rem;
        margin-top: 1rem;
    }

    .quantity-controls {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .quantity-input {
        width: 50px;
        height: 32px;
        text-align: center;
        border: 1px solid #ddd;
        border-radius: 4px;
        -moz-appearance: textfield;
    }

    .quantity-input::-webkit-outer-spin-button,
    .quantity-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .btn-decrease,
    .btn-increase {
        width: 24px;
        height: 24px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background: #fff;
        color: #333;
        cursor: pointer;
        font-size: 0.8rem;
    }

    .btn-decrease:hover,
    .btn-increase:hover {
        background: #f5f5f5;
    }

    .btn-remove {
        background: none;
        border: none;
        color: #666;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }


    .btn-remove:hover {
        color: #ff4444;
    }

    .item-price {
        text-align: right;
    }

    .current-price {
        font-size: 1rem;
        color: #333;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }

    .item-total {
        color: #2979ff;
        font-weight: 600;
    }

    .cart-summary {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        position: sticky;
        top: 1rem;
    }

    .summary-header {
        padding: 1rem;
        border-bottom: 1px solid #eee;
    }

    .summary-header h2 {
        font-size: 1.2rem;
        color: #333;
        font-weight: 600;
    }

    .summary-content {
        padding: 1rem;
    }

    .price-details {
        margin-bottom: 1.5rem;
    }

    .price-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
        color: #666;
    }

    .price-row.total {
        color: #333;
        font-size: 1.2rem;
        font-weight: 600;
        border-top: 1px solid #eee;
        padding-top: 1rem;
        margin-top: 0.5rem;
    }

    .btn-checkout {
        width: 100%;
        padding: 1rem;
        background: #2979ff;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 1.1rem;
        font-weight: 500;
        cursor: pointer;
    }

    .btn-checkout:disabled {
        background: #ccc;
        cursor: not-allowed;
    }

    .notification-container {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1000;
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

    @media (max-width: 992px) {
        .cart-content {
            grid-template-columns: 1fr;
        }

        .cart-item {
            grid-template-columns: auto 100px 1fr;
        }

        .item-price {
            grid-column: 1/-1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }
    }

    @media (max-width: 576px) {
        .cart-item {
            grid-template-columns: auto 1fr;
        }

        .item-image {
            grid-column: 1/-1;
        }

        .item-image img {
            width: 100%;
            height: auto;
        }
    }

    .empty-cart {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 60vh;
        background: #fff;
        border-radius: 8px;
        margin: 2rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .empty-cart-content {
        text-align: center;
        padding: 2rem;
    }

    .empty-cart-content i {
        font-size: 5rem;
        color: #ddd;
        margin-bottom: 1.5rem;
    }

    .empty-cart-content h2 {
        font-size: 1.8rem;
        color: #333;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .empty-cart-content p {
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 2rem;
    }

    .btn-home {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.8rem 1.5rem;
        background: #2979ff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        font-weight: 500;
        transition: background-color 0.3s;
    }

    .btn-home:hover {
        background: #1e88e5;
    }

    .btn-home i {
        font-size: 1.2rem;
        color: #fff;
        margin: 0;
    }

    .item-select:disabled + .checkmark {
        background-color: #e0e0e0;
        border-color: #ccc;
        cursor: not-allowed;
    }
    
    .item-select:disabled + .checkmark:after {
        border-color: #999;
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

    // Thêm biến để theo dõi trạng thái sản phẩm
    let productStates = new Map();
    const currentUserId = {{ Auth::id() }};

    // Hàm kiểm tra trạng thái sản phẩm
    function checkProductStatus() {
        document.querySelectorAll('.cart-item').forEach(item => {
            const cartId = item.getAttribute('data-cart-id');
            
            fetch(`/customer/cart/check-status/${cartId}`, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                const checkbox = item.querySelector('.item-select');
                const quantityInput = item.querySelector('.quantity-input');
                const stockValue = item.querySelector('.stock-value');
                const stockInfo = item.querySelector('.stock-info');
                
                // Cập nhật số lượng tồn kho
                if (stockValue) {
                    stockValue.textContent = data.stock;
                    
                    // Cập nhật style dựa trên số lượng tồn
                    stockInfo.classList.remove('low-stock', 'out-of-stock', 'in-stock');
                    if (data.stock <= 0) {
                        stockInfo.classList.add('out-of-stock');
                    } else if (data.stock <= 5) {
                        stockInfo.classList.add('low-stock');
                    } else {
                        stockInfo.classList.add('in-stock');
                    }
                }

                if (!data.available) {
                    showNotification(data.message, 'warning');
                    
                    if (data.disable_checkbox && checkbox) {
                        checkbox.checked = false;
                        checkbox.disabled = true;
                    }
                    
                    if (data.max_quantity && quantityInput) {
                        quantityInput.value = data.max_quantity;
                    }
                } else {
                    if (data.stock_changed) {
                        showNotification(data.message, 'info');
                        if (quantityInput) {
                            quantityInput.value = data.max_quantity;
                        }
                    }
                    
                    if (!data.disable_checkbox && checkbox) {
                        checkbox.disabled = false;
                    }
                }
                
                updateTotals();
            });
        });
    }

    // Hàm cập nhật UI sản phẩm
    function updateProductUI(item, status) {
        const colorSelect = item.querySelector('.variant-color');
        const storageSelect = item.querySelector('.variant-storage');
        
        if (status.available_variants) {
            updateAvailableOptions(item, status.available_variants);
        }

        // Cập nhật giá nếu có thay đổi
        if (status.price_changed) {
            const priceElement = item.querySelector('.current-price');
            const itemTotalElement = item.querySelector('.item-total');
            const quantity = parseInt(item.querySelector('.quantity-input').value);
            
            priceElement.textContent = new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(status.new_price);
            
            itemTotalElement.textContent = new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(status.new_price * quantity);
            
            item.setAttribute('data-price', status.new_price);
            updateTotals();
        }
    }

    // Hàm hiển thị thông báo thay đổi trạng thái
    function showStatusChangeNotification(status) {
        let message = '';
        let type = 'info';
        let duration = 8000; // Thời gian hiển thị 8 giây

        if (!status.available) {
            message = status.message;
            type = 'warning';
        } else if (status.price_changed) {
            message = `Giá sản phẩm đã được cập nhật từ ${new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(status.old_price)} thành ${new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(status.new_price)}`;
            type = 'info';
        } else if (status.stock_changed) {
            if (status.stock > 0) {
                message = `Sản phẩm đã có hàng trở lại! Còn ${status.stock} sản phẩm`;
                type = 'success';
            } else {
                message = 'Sản phẩm đã hết hàng!';
                type = 'warning';
            }
        }

        if (message) {
            showNotification(message, type, null, duration);
        }
    }

    // Cập nhật hàm showNotification để hỗ trợ thời gian hiển thị tùy chỉnh
    function showNotification(message, type = 'success', title = null, duration = 5000) {
        const container = document.getElementById('notification-container');
        const notification = document.createElement('div');
        notification.classList.add('notification', type);
        
        let icon = '';
        switch(type) {
            case 'success':
                icon = '<i class="fas fa-check-circle"></i>';
                break;
            case 'error':
                icon = '<i class="fas fa-exclamation-circle"></i>';
                break;
            case 'warning':
                icon = '<i class="fas fa-exclamation-triangle"></i>';
                break;
            case 'info':
                icon = '<i class="fas fa-info-circle"></i>';
                break;
        }
        
        let content = `
            ${icon}
            <div class="notification-content">
                ${title ? `<div class="notification-title">${title}</div>` : ''}
                <div class="notification-message">${message}</div>
            </div>
        `;
        
        notification.innerHTML = content;
        container.appendChild(notification);
        
        setTimeout(() => notification.classList.add('show'), 10);
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => notification.remove(), 500);
        }, duration);
    }

    // Thêm style cho notification
    const style = document.createElement('style');
    style.textContent = `
        .notification {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            margin-bottom: 1rem;
            transform: translateX(100%);
            opacity: 0;
            transition: all 0.3s ease;
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            max-width: 400px;
            border-left: 4px solid;
    }

    .notification.show {
        transform: translateX(0);
            opacity: 1;
        }
        
        .notification i {
            font-size: 1.25rem;
            flex-shrink: 0;
        }
        
        .notification-content {
            flex: 1;
        }
        
        .notification-title {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        
        .notification-message {
            font-size: 0.95rem;
            line-height: 1.4;
            color: #666;
        }
        
        .notification.success { border-left-color: #4caf50; }
        .notification.success i { color: #4caf50; }
        
        .notification.error { border-left-color: #f44336; }
        .notification.error i { color: #f44336; }
        
        .notification.warning { border-left-color: #ff9800; }
        .notification.warning i { color: #ff9800; }
        
        .notification.info { border-left-color: #2196f3; }
        .notification.info i { color: #2196f3; }
    `;
    document.head.appendChild(style);

    // Bắt đầu kiểm tra trạng thái mỗi 5 giây
    setInterval(checkProductStatus, 5000);
    
    // Kiểm tra lần đầu khi tải trang
    document.addEventListener('DOMContentLoaded', checkProductStatus);

    // Xử lý thay đổi biến thể
    document.querySelectorAll('.variant-color, .variant-storage').forEach(function(select) {
        select.addEventListener('change', function() {
            const cartId = this.getAttribute('data-cart-id');
            const row = document.querySelector(`[data-cart-id="${cartId}"]`);
            const colorSelect = row.querySelector('.variant-color');
            const storageSelect = row.querySelector('.variant-storage');
            const loadingSpinner = row.querySelector('.loading-spinner');
            
            // Hiển thị loading
            if (loadingSpinner) loadingSpinner.style.display = 'inline-block';
            
            // Disable selects while loading
            colorSelect.disabled = true;
            storageSelect.disabled = true;

            fetch("{{ route('customer.cart.updateVariant') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    cart_id: cartId,
                    color: colorSelect.value,
                    storage: storageSelect.value
                })
            })
            .then(response => response.json())
            .then(data => {
                // Ẩn loading
                if (loadingSpinner) loadingSpinner.style.display = 'none';
                
                // Enable selects
                colorSelect.disabled = false;
                storageSelect.disabled = false;

                if (data.success) {
                    // Cập nhật giá
                    const priceElement = row.querySelector('.current-price');
                    if (priceElement) {
                        priceElement.textContent = new Intl.NumberFormat('vi-VN', {
                            style: 'currency',
                            currency: 'VND'
                        }).format(data.price);
                    }
                    
                    // Cập nhật các option có sẵn
                    if (data.available_variants) {
                        updateAvailableOptions(row, data.available_variants);
                    }
                    
                    showNotification(data.message, 'success');
                    updateTotals();
                } else {
                    // Khôi phục giá trị ban đầu
                    colorSelect.value = row.getAttribute('data-default-color');
                    storageSelect.value = row.getAttribute('data-default-storage');
                    
                    showNotification(data.message, 'warning');
                }
            })
            .catch(error => {
                console.error('Lỗi:', error);
                showNotification('Đã có lỗi xảy ra. Vui lòng thử lại sau.', 'error');
                
                // Ẩn loading và enable selects
                if (loadingSpinner) loadingSpinner.style.display = 'none';
                colorSelect.disabled = false;
                storageSelect.disabled = false;
            });
        });
    });

    function updateAvailableOptions(row, variants) {
        const colorSelect = row.querySelector('.variant-color');
        const storageSelect = row.querySelector('.variant-storage');
        
        // Lấy giá trị đã chọn
        const selectedColor = colorSelect.value;
        const selectedStorage = storageSelect.value;
        
        // Cập nhật options cho color select
        const availableColors = [...new Set(variants.map(v => v.color))];
        colorSelect.innerHTML = availableColors.map(color => {
            const isAvailable = variants.some(v => 
                v.color === color && 
                v.storage === selectedStorage && 
                v.status === 'active' && 
                v.stock > 0
            );
            return `
                <option value="${color}" 
                    ${color === selectedColor ? 'selected' : ''}
                    ${!isAvailable ? 'disabled' : ''}>
                    ${color} ${!isAvailable ? '(Hết hàng)' : ''}
                </option>
            `;
        }).join('');
        
        // Cập nhật options cho storage select
        const availableStorages = [...new Set(variants.map(v => v.storage))];
        storageSelect.innerHTML = availableStorages.map(storage => {
            const isAvailable = variants.some(v => 
                v.storage === storage && 
                v.color === selectedColor && 
                v.status === 'active' && 
                v.stock > 0
            );
            return `
                <option value="${storage}" 
                    ${storage === selectedStorage ? 'selected' : ''}
                    ${!isAvailable ? 'disabled' : ''}>
                    ${storage} ${!isAvailable ? '(Hết hàng)' : ''}
                </option>
            `;
        }).join('');
    }

    // Quantity adjustment event listeners
    document.querySelectorAll('.btn-decrease, .btn-increase').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const cartId = this.getAttribute('data-cart-id');
            const input = document.querySelector(`.quantity-input[data-cart-id="${cartId}"]`);
            let qty = parseInt(input.value);
            
            if (this.classList.contains('btn-decrease') && qty > 1) {
                qty--;
            } else if (this.classList.contains('btn-increase') && qty < 5) {
                qty++;
            }
            
            if (qty >= 1 && qty <= 5) {
                input.value = qty;
                updateTotals();
                updateCart(cartId, qty);
            }
        });
    });

    document.querySelectorAll('.quantity-input').forEach(function(input) {
        input.addEventListener('change', function() {
            const cartId = this.getAttribute('data-cart-id');
            let qty = parseInt(this.value);
            
            if (isNaN(qty) || qty < 1) qty = 1;
            if (qty > 5) qty = 5;
            
            this.value = qty;
            updateTotals();
            updateCart(cartId, qty);
        });
    });

    // Xử lý checkbox
    document.getElementById('select-all').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.item-select');
        checkboxes.forEach(checkbox => checkbox.checked = this.checked);
        updateTotals();
    });

    document.querySelectorAll('.item-select').forEach(checkbox => {
        checkbox.addEventListener('change', updateTotals);
    });

    // Xử lý xóa sản phẩm
    document.querySelectorAll('.btn-remove').forEach(btn => {
        btn.addEventListener('click', function() {
            const cartId = this.getAttribute('data-cart-id');
            deleteCartItem(cartId, this);
        });
    });

    // Xử lý voucher
    document.getElementById('apply-voucher').addEventListener('click', function() {
        const code = document.getElementById('voucher_code').value.trim();
        if (code === '') {
            showNotification('Vui lòng nhập mã voucher!', 'error');
            return;
        }
        applyVoucher(code);
    });

    document.querySelectorAll('.btn-use-voucher').forEach(btn => {
        btn.addEventListener('click', function() {
            const code = this.getAttribute('data-code');
            document.getElementById('voucher_code').value = code;
            applyVoucher(code);
        });
    });

    document.getElementById('remove-voucher')?.addEventListener('click', function() {
        window.appliedDiscount = 0;
        document.getElementById('voucher_code').value = '';
        document.getElementById('voucher-info').style.display = 'none';
        updateTotals();
        showNotification('Đã hủy áp dụng mã giảm giá.', 'success');
    });

    // Xử lý điều khoản
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
            item.style.display = isHidden ? 'list-item' : 'none';
        });
        this.innerHTML = isHidden ? 'Thu gọn <i class="fas fa-chevron-up"></i>' :
            'Xem thêm <i class="fas fa-chevron-down"></i>';
    });

    // Helper functions
    function updateTotals() {
        let subTotal = 0;
        let selectedSubTotal = 0;
        let selectedCount = 0;

        document.querySelectorAll('.cart-item').forEach(row => {
            const price = parseFloat(row.getAttribute('data-price'));
            const quantity = parseInt(row.querySelector('.quantity-input').value);
            const itemSubtotal = price * quantity;
            const isChecked = row.querySelector('.item-select').checked;

            row.querySelector('.item-total').innerText = itemSubtotal.toLocaleString('vi-VN') + '₫';
            subTotal += itemSubtotal;

            if (isChecked) {
                selectedSubTotal += itemSubtotal;
                selectedCount++;
            }
        });

        document.querySelector('.subtotal').innerText = subTotal.toLocaleString('vi-VN') + '₫';
        document.getElementById('selected-items').innerText = selectedCount;
        document.querySelector('.final-price').innerText = selectedSubTotal.toLocaleString('vi-VN') + '₫';
        document.getElementById('proceed-to-checkout').disabled = selectedCount === 0;
    }

    function updateCart(cartId, quantity) {
        fetch("{{ route('customer.cart.updateQuantity', '') }}/" + cartId, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                quantity
            })
        })
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                showNotification(data.message, 'error');
                // Nếu vượt quá số lượng cho phép
                if (data.max_quantity) {
                    // Disable checkbox
                    const checkbox = document.querySelector(`.item-select[value="${cartId}"]`);
                    if (checkbox) {
                        checkbox.checked = false;
                        checkbox.disabled = data.disable_checkbox;
                    }
                    // Cập nhật số lượng về mức tối đa cho phép
                    const quantityInput = document.querySelector(`.quantity-input[data-cart-id="${cartId}"]`);
                    if (quantityInput) {
                        quantityInput.value = data.max_quantity;
                    }
                }
            } else {
                // Enable checkbox nếu số lượng hợp lệ
                const checkbox = document.querySelector(`.item-select[value="${cartId}"]`);
                if (checkbox) {
                    checkbox.disabled = false;
                }
            }
            updateTotals();
        })
        .catch(error => {
            console.error('Lỗi:', error);
            showNotification('Có lỗi xảy ra khi cập nhật số lượng.', 'error');
        });
    }

    function deleteCartItem(cartId, buttonElement) {
        fetch(`{{ route('customer.cart.delete', '') }}/${cartId}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const row = buttonElement.closest('.cart-item');
                row.remove();
                updateTotals();
                showNotification(data.message || 'Sản phẩm đã được xóa khỏi giỏ hàng.', 'success');
            } else {
                showNotification(data.message || 'Có lỗi khi xóa sản phẩm.', 'error');
            }
        })
        .catch(error => {
            console.error('Lỗi:', error);
            showNotification('Có lỗi xảy ra khi xóa sản phẩm.', 'error');
        });
    }

    function applyVoucher(code) {
        const voucher = activeVouchers.find(v => v.code === code);
        if (!voucher) {
            showNotification('Mã voucher không khả dụng!', 'error');
            return;
        }

        let selectedSubTotal = 0;
        document.querySelectorAll('.item-select:checked').forEach(checkbox => {
            const row = checkbox.closest('.cart-item');
            const price = parseFloat(row.getAttribute('data-price'));
            const quantity = parseInt(row.querySelector('.quantity-input').value);
            selectedSubTotal += price * quantity;
        });

        if (voucher.min_order_value && selectedSubTotal < voucher.min_order_value) {
            showNotification(
                `Đơn hàng phải từ ${voucher.min_order_value.toLocaleString('vi-VN')}₫ để áp dụng voucher này!`,
                'error'
            );
            return;
        }

        let discount = 0;
        if (voucher.discount_type === 'percentage') {
            discount = selectedSubTotal * (voucher.discount_value / 100);
            if (voucher.max_discount_value && discount > voucher.max_discount_value) {
                discount = voucher.max_discount_value;
            }
        } else {
            discount = voucher.discount_value;
        }

        window.appliedDiscount = discount;
        document.getElementById('voucher-info').style.display = 'block';
        document.getElementById('voucher-code-display').innerText = code;
        document.getElementById('voucher-discount-display').innerText = discount.toLocaleString('vi-VN');
        updateTotals();
        showNotification('Đã áp dụng mã giảm giá thành công!', 'success');
    }

    // Update the checkout button click handler
    document.getElementById('proceed-to-checkout').addEventListener('click', function(e) {
        e.preventDefault();
        
        // Get selected items
        const selectedItems = Array.from(document.querySelectorAll('.item-select:checked')).map(checkbox => checkbox.value);
        
        if (selectedItems.length === 0) {
            showNotification('Vui lòng chọn ít nhất một sản phẩm!', 'error');
            return;
        }
        
        // Create form data
        const formData = new FormData();
        formData.append('_token', '{{ csrf_token() }}');
        formData.append('selected_items', JSON.stringify(selectedItems));
        
        // Submit form using fetch
        fetch('{{ route("customer.cart.proceed-to-checkout") }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(response => {
            if (response.ok) {
                window.location.href = response.url;
            } else {
                throw new Error('Network response was not ok');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showNotification('Có lỗi xảy ra khi xử lý đơn hàng. Vui lòng thử lại!', 'error');
        });
    });

    // Initialize
    updateTotals();

    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const buyNowVariantId = urlParams.get('buy_now');

        if (buyNowVariantId) {
            console.log('Buy Now Variant ID:', buyNowVariantId);
            const checkboxes = document.querySelectorAll('.item-select'); // Adjust selector if needed
            let itemFound = false;

            checkboxes.forEach(checkbox => {
                // Assume the checkbox value or a data attribute holds the variant ID
                // Example: data-variant-id="123" or value="cart_id_related_to_variant_123"
                // *** YOU MUST ADAPT THIS LINE based on your HTML structure ***
                const checkboxVariantId = checkbox.dataset.variantId; // CHECK THIS!

                if (checkboxVariantId === buyNowVariantId) {
                    checkbox.checked = true;
                    itemFound = true;
                    console.log('Found and checked item for variant:', buyNowVariantId);
                    // Optional: Scroll to the item
                    // checkbox.closest('tr')?.scrollIntoView({ behavior: 'smooth', block: 'center' });
                } else {
                    checkbox.checked = false;
                }
            });

            if (itemFound) {
                // Trigger cart total update if you have a function for it
                if (typeof updateCartTotal === 'function') { // Check if your update function exists
                    updateCartTotal();
                    console.log('Cart total updated.');
                } else {
                     console.warn('Function updateCartTotal() not found. Cart total might not reflect selection.');
                     // You might need to manually trigger a change event on checkboxes if your total calculation depends on it
                     checkboxes.forEach(cb => cb.dispatchEvent(new Event('change', { bubbles: true })));
                }
                // Remove the query parameter from URL to prevent re-triggering on refresh
                 try {
                    const currentUrl = new URL(window.location.href);
                    currentUrl.searchParams.delete('buy_now');
                    window.history.replaceState({}, document.title, currentUrl.toString());
                 } catch (e) {
                     console.error('Error updating URL:', e);
                     // Fallback for older browsers or complex URLs
                     const newUrl = window.location.pathname + window.location.search.replace(/[?&]buy_now=\d+/, '').replace(/^&/, '?');
                     window.history.replaceState({}, document.title, newUrl);
                 }

            } else {
                console.warn('Buy Now item with variant ID', buyNowVariantId, 'not found in cart checkboxes.');
            }
        }
    });

    // Placeholder/Example for your cart update function if it exists
    // function updateCartTotal() {
    //    console.log('Updating cart total based on selections...');
    //    // Add your logic here to recalculate and display the total based on checked checkboxes
    // }
</script>

{{-- @include('layouts.customer.footer') --}}
