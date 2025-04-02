@include('layouts.customer.header')

@php
    $user = Auth::user();
@endphp

<div class="container cart-container">
    <h2 class="page-title">🛒 Giỏ hàng của bạn</h2>
    <div id="notification-container" class="notification-container"></div>
    <form id="checkout-form" action="{{ route('customer.cart.checkout') }}" method="POST">
        @csrf

        <!-- Grid: 2 cột cho sản phẩm và thanh toán -->
        <div class="main-grid">
            <!-- Cột trái: Danh sách sản phẩm và thông tin khách hàng -->
            <div class="left-col">
                <!-- Thông tin số lượng sản phẩm -->


                <!-- Danh sách sản phẩm -->
                <div class="product-list-container">
                    <table class="product-table" id="cart-table">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá (₫)</th>
                                <th>Tạm tính (₫)</th>
                                <th>Chọn tất cả <input type="checkbox" id="select-all" title="Chọn tất cả"></th>
                            </tr>
                        </thead>
                        <tbody>
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
                                <tr class="cart-item" data-price="{{ $price }}"
                                    data-cart-id="{{ $cart->id }}">
                                    <td>
                                        <div class="product-cell">
                                            <img src="{{ asset('storage/' . $cart->product_variant->product->image) }}"
                                                alt="{{ $cart->product_variant->product->name }}" class="product-image">
                                            <div class="product-details">
                                                <span class="product-name">
                                                    {{ $cart->product_variant->product->name ?? 'Sản phẩm không tồn tại' }}
                                                </span>
                                                <div class="variant-info">
                                                    <!-- Hiển thị biến thể hiện tại nếu không có lựa chọn khác -->
                                                    @if ($colors->count() <= 1 && $storages->count() <= 1)
                                                        <span class="variant-static">
                                                            {{ $cart->product_variant->color }} -
                                                            {{ $cart->product_variant->storage }}
                                                        </span>
                                                    @else
                                                        <div class="variant-selectors">
                                                            @if ($colors->count() > 1)
                                                                <select class="variant-color"
                                                                    data-cart-id="{{ $cart->id }}">
                                                                    @foreach ($colors as $color)
                                                                        <option value="{{ $color }}"
                                                                            {{ $cart->product_variant->color == $color ? 'selected' : '' }}>
                                                                            {{ $color }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            @endif
                                                            @if ($storages->count() > 1)
                                                                <select class="variant-storage"
                                                                    data-cart-id="{{ $cart->id }}">
                                                                    @foreach ($storages as $storage)
                                                                        <option value="{{ $storage }}"
                                                                            {{ $cart->product_variant->storage == $storage ? 'selected' : '' }}>
                                                                            {{ $storage }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            @endif
                                                            <span class="spinner" style="display: none;">
                                                                <i class="fas fa-spinner fa-spin"></i>
                                                            </span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="quantity-control">
                                            <button type="button" class="btn-decrease"
                                                data-cart-id="{{ $cart->id }}">-</button>
                                            <input type="number" name="quantities[{{ $cart->id }}]"
                                                value="{{ $cart->quantity }}" min="1" max="5"
                                                class="qty-input" data-cart-id="{{ $cart->id }}">
                                            <button type="button" class="btn-increase"
                                                data-cart-id="{{ $cart->id }}">+</button>
                                        </div>
                                    </td>
                                    <td class="price">
                                        {{ number_format($price, 0, ',', '.') }}
                                    </td>
                                    <td class="item-subtotal">
                                        {{ number_format($itemSubTotal, 0, ',', '.') }}
                                    </td>
                                    <td class="action-cell">
                                        <button type="button" class="btn-delete" data-cart-id="{{ $cart->id }}"
                                            title="Xóa"><i class="fas fa-trash-alt"></i></button>
                                        <input type="checkbox" name="selected_items[]" value="{{ $cart->id }}"
                                            class="item-checkbox">

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="total-amount">

                    <span>Tạm tính: </span>
                    <span id="sub-total">{{ number_format($subTotal, 0, ',', '.') }}₫</span>
                </div>

                <!-- Thông tin khách hàng -->
                <div class="user-info-section">
                    <div class="card user-info-card">
                        <div class="card-body">
                            <h3 class="section-title">Thông tin khách hàng</h3>
                            <p class="section-title" style="color: #6f42c1;font-size: 12px;padding:0 0 0 0;">( Thông tin
                                này chỉ áp dụng cho đơn hàng, không thay đổi tài khoản của bạn. )</p>
                            <div class="form-group">
                                <label for="fullname">Họ tên</label>
                                <input type="text" name="fullname" id="fullname" class="form-input" required
                                    value="{{ $user->fullname }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input type="text" name="address" id="address" class="form-input" required
                                    value="{{ $user->address }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" name="phone" id="phone" class="form-input" required
                                    value="{{ $user->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-input" required
                                    value="{{ $user->email }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cột phải: Thanh toán & Voucher -->
            <div class="right-col">
                <div class="payment-voucher-section">
                    <div class="card payment-card">
                        <div class="card-body">
                            <h3 class="section-title">Thanh toán & Voucher</h3>
                            <!-- Phương thức thanh toán -->
                            <div class="form-group payment-method">
                                <label>Phương thức thanh toán</label>
                                <div class="radio-group">
                                    <div class="radio-item">
                                        <input type="radio" name="payment_method" id="COD" value="COD"
                                            checked>
                                        <label for="COD">Thanh toán khi nhận hàng</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" name="payment_method" id="VNPay" value="VNPay">
                                        <label for="VNPay">Thanh toán qua ví VNPay</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Voucher -->
                            <div class="form-group">
                                <label for="voucher_code">Voucher (nếu có)</label>
                                <div class="voucher-group">
                                    <input type="text" name="voucher_code" id="voucher_code"
                                        placeholder="Nhập mã voucher" class="form-input">
                                    <button type="button" id="apply-voucher" class="btn-apply-voucher">Áp
                                        dụng</button>
                                </div>
                            </div>
                            <!-- Danh sách voucher -->
                            <div class="voucher-list" id="voucher-list-container">
                                <h4>Voucher khả dụng:</h4>
                                <ul id="voucher-list">
                                    @foreach ($activeVouchers as $index => $voucher)
                                        <li
                                            class="voucher-item @if ($index >= 3) hidden-voucher @endif">
                                            <span>{{ $voucher->code }}</span> -
                                            @if ($voucher->discount_type == 'percentage')
                                                Giảm {{ $voucher->discount_value }}%
                                            @else
                                                Giảm cố định
                                                {{ number_format($voucher->discount_value, 0, ',', '.') }}₫
                                            @endif
                                            - Hết hạn:
                                            {{ \Carbon\Carbon::parse($voucher->expiration_date)->format('d/m/Y') }}
                                            <button type="button" class="btn-use-voucher"
                                                data-code="{{ $voucher->code }}">Dùng</button>
                                        </li>
                                    @endforeach
                                </ul>
                                @if ($activeVouchers->count() > 3)
                                    <button type="button" id="toggle-voucher-list" class="btn-toggle-voucher">Xem
                                        thêm <i class="fas fa-chevron-down"></i></button>
                                @endif
                            </div>
                            <div class="voucher-info" id="voucher-info" style="display: none;">
                                <p><strong>Voucher:</strong> <span id="voucher-code-display"></span></p>
                                <p><strong>Giảm:</strong> <span id="voucher-discount-display"></span>₫</p>
                                <button type="button" id="remove-voucher" class="btn-remove-voucher">Hủy bỏ
                                </button>
                            </div>
                        </div>
                        <div class="final-total">
                            <p class="cart-info">
                                Sản phẩm trong giỏ: <span id="total-items">{{ $carts->count() }}</span> <br>
                                Sản phẩm đã chọn: <span id="selected-items">0</span>
                            </p>
                            <div class="total-amount final-amount">
                                <span>Tổng tiền: </span>
                                <span id="final-total">{{ number_format($subTotal, 0, ',', '.') }}₫</span>
                            </div>
                            <div class="agree-check">
                                <input type="checkbox" name="agree" id="agree" class="form-check-input"
                                    required>
                                <label for="agree" style="color: white" class="form-check-label">Tôi đã đọc và
                                    đồng ý với điều khoản thanh toán</label>
                            </div>
                            <button type="submit" class="btn-checkout">Hoàn tất thanh toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    // Hàm hiển thị thông báo
    function showNotification(message, type = 'success') {
        const container = document.getElementById('notification-container');
        const notification = document.createElement('div');
        notification.classList.add('notification', type);
        notification.textContent = message;
        container.appendChild(notification);
        setTimeout(() => notification.classList.add('show'), 10);
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => notification.remove(), 500);
        }, 3000);
    }

    // --- Cập nhật tổng tiền ---
    function updateTotals() {
        let subTotal = 0;
        let selectedSubTotal = 0;
        let selectedCount = 0;

        document.querySelectorAll('#cart-table tbody tr.cart-item').forEach(function(row) {
            const price = parseFloat(row.getAttribute('data-price'));
            const qtyInput = row.querySelector('.qty-input');
            const quantity = parseInt(qtyInput.value);
            const itemSubtotal = price * quantity;
            const isChecked = row.querySelector('.item-checkbox').checked;

            row.querySelector('.item-subtotal').innerText = itemSubtotal.toLocaleString('vi-VN') + '₫';
            subTotal += itemSubtotal;
            if (isChecked) {
                selectedSubTotal += itemSubtotal;
                selectedCount++;
            }
        });

        document.getElementById('sub-total').innerText = subTotal.toLocaleString('vi-VN') + '₫';
        document.getElementById('total-items').innerText = document.querySelectorAll('.cart-item').length;
        document.getElementById('selected-items').innerText = selectedCount;

        const finalTotal = window.appliedDiscount ? Math.max(selectedSubTotal - window.appliedDiscount, 0) :
            selectedSubTotal;
        document.getElementById('final-total').innerText = finalTotal.toLocaleString('vi-VN') + '₫';
    }

    // --- Hàm AJAX cập nhật số lượng lên server ---
    function updateCart(cartId, quantity) {
        fetch("{{ route('customer.cart.update', '') }}/" + cartId, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    quantity: quantity
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log('Số lượng đã được cập nhật trên server.');
                } else {
                    showNotification('Có lỗi khi cập nhật số lượng.', 'error');
                }
            })
            .catch(error => {
                console.error('Lỗi:', error);
                showNotification('Có lỗi xảy ra khi cập nhật số lượng.', 'error');
            });
    }

    // --- Nút tăng / giảm số lượng ---
    document.querySelectorAll('.btn-decrease').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const cartId = this.getAttribute('data-cart-id');
            const input = document.querySelector('.qty-input[data-cart-id="' + cartId + '"]');
            let qty = parseInt(input.value);
            if (qty > 1) {
                input.value = --qty;
                updateTotals();
                updateCart(cartId, qty);
            }
        });
    });

    document.querySelectorAll('.btn-increase').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const cartId = this.getAttribute('data-cart-id');
            const input = document.querySelector('.qty-input[data-cart-id="' + cartId + '"]');
            let qty = parseInt(input.value);
            if (qty < 5) {
                input.value = ++qty;
                updateTotals();
                updateCart(cartId, qty);
            }
        });
    });

    document.querySelectorAll('.qty-input').forEach(function(input) {
        input.addEventListener('change', function() {
            let qty = parseInt(this.value);
            if (qty < 1) qty = 1;
            if (qty > 5) qty = 5;
            this.value = qty;
            updateTotals();
            const cartId = this.getAttribute('data-cart-id');
            updateCart(cartId, qty);
        });
    });

    // --- Checkbox xử lý ---
    document.querySelectorAll('.item-checkbox').forEach(function(checkbox) {
        checkbox.addEventListener('change', updateTotals);
    });

    document.getElementById('select-all').addEventListener('change', function() {
        const isChecked = this.checked;
        document.querySelectorAll('.item-checkbox').forEach(function(checkbox) {
            checkbox.checked = isChecked;
        });
        updateTotals();
    });

    // --- Xử lý submit form ---
    document.getElementById('checkout-form').addEventListener('submit', function(e) {
        const selectedItems = document.querySelectorAll('.item-checkbox:checked');
        if (selectedItems.length === 0) {
            e.preventDefault();
            showNotification('Vui lòng chọn ít nhất một sản phẩm để đặt hàng!', 'error');
        }
    });

    // --- Voucher xử lý ---
    const activeVouchers = @json($activeVouchers);
    document.getElementById('apply-voucher').addEventListener('click', function() {
        const code = document.getElementById('voucher_code').value.trim();
        if (code === '') {
            showNotification('Vui lòng nhập mã voucher!', 'error');
            return;
        }
        applyVoucher(code);
    });

    document.querySelectorAll('.btn-use-voucher').forEach(function(btn) {
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

    function applyVoucher(code) {
        const voucher = activeVouchers.find(v => v.code === code);
        if (!voucher) {
            showNotification('Mã voucher không khả dụng!', 'error');
            return;
        }
        let selectedSubTotal = 0;
        document.querySelectorAll('.item-checkbox:checked').forEach(function(checkbox) {
            const row = checkbox.closest('.cart-item');
            const price = parseFloat(row.getAttribute('data-price'));
            const quantity = parseInt(row.querySelector('.qty-input').value);
            selectedSubTotal += price * quantity;
        });
        let discount = 0;
        if (voucher.discount_type === 'percentage') {
            discount = selectedSubTotal * (voucher.discount_value / 100);
        } else if (voucher.discount_type === 'fixed') {
            discount = parseFloat(voucher.discount_value);
        }
        window.appliedDiscount = discount;
        document.getElementById('voucher-info').style.display = 'block';
        document.getElementById('voucher-code-display').innerText = voucher.code;
        document.getElementById('voucher-discount-display').innerText = discount.toLocaleString('vi-VN');
        updateTotals();
        showNotification('Đã áp dụng mã giảm giá', 'success');
    }

    // --- Toggle danh sách voucher ---
    document.getElementById('toggle-voucher-list')?.addEventListener('click', function() {
        const voucherItems = document.querySelectorAll('.voucher-item.hidden-voucher');
        const isHidden = voucherItems[0].style.display === 'none' || voucherItems[0].style.display === '';
        voucherItems.forEach(function(item) {
            item.style.display = isHidden ? 'list-item' : 'none';
        });
        this.innerHTML = isHidden ? 'Thu gọn <i class="fas fa-chevron-up"></i>' :
            'Xem thêm <i class="fas fa-chevron-down"></i>';
    });

    // --- Xử lý xóa sản phẩm ---
    document.querySelectorAll('.btn-delete').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const cartId = this.getAttribute('data-cart-id');
            // if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')) {
            //     deleteCartItem(cartId, this);
            // }
            deleteCartItem(cartId, this);
        });
    });

    function deleteCartItem(cartId, buttonElement) {
        fetch("{{ route('customer.cart.delete', '') }}/" + cartId, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log('Sản phẩm đã được xóa.');
                    const row = buttonElement.closest('.cart-item');
                    row.remove();
                    updateTotals();
                    showNotification('Sản phẩm đã được xóa khỏi giỏ hàng.', 'success');
                } else {
                    showNotification('Có lỗi khi xóa sản phẩm: ' + (data.message || 'Không rõ lỗi'), 'error');
                }
            })
            .catch(error => {
                console.error('Lỗi:', error);
                showNotification('Có lỗi xảy ra khi xóa sản phẩm.', 'error');
            });
    }

    // Khởi tạo tổng tiền khi tải trang
    updateTotals();
</script>



<style>
    /* body {
      background-color: #121212;
      color: #ffffff;
  } */

    .cart-container {
        max-width: 1200px;
        margin: auto;
        padding: 2rem 1rem;
    }

    .page-title {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 2rem;
        font-weight: 700;
        color: #f1f1f1;
    }

    .cart-info {
        font-size: 1rem;
        color: #f1f1f1;
        margin-bottom: 1rem;
    }

    .btn-remove-voucher {
        border: 2px #e0d9d9 solid;
        padding: 3px 9px 3px 9px;
        border-radius: 8px;
        background-color: #6f42c1;
        color: white;

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
        border: 1px solid #555;
        border-radius: 6px;
        background-color: #1e1e1e;
        color: #f1f1f1;
    }

    .spinner {
        margin-left: 0.5rem;
        color: #6f42c1;
    }

    .item-checkbox {
        margin-right: 10px;
    }

    .btn-delete {
        background: none;
        border: none;
        color: #ff4d4f;
        cursor: pointer;
        padding: 5px;
        font-size: 16px;
        transition: color 0.3s;
        margin: 0 60px 0 0;
    }

    .btn-delete:hover {
        color: #cc0000;
    }

    .final-total {
        margin-top: 1rem;
    }

    /* Grid bố cục: 2 cột */
    .main-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    @media (min-width: 992px) {
        .main-grid {
            grid-template-columns: 2fr 1fr;
        }
    }

    /* Cột trái: Sản phẩm & User Info */
    .left-col {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    /* Product List: sử dụng fixed header */
    .product-list-container {
        /* Đặt chiều cao của tbody, không bao gồm thead */
        overflow: hidden;
        border-radius: 8px;
        border: 1px solid #333;
    }

    .product-table {
        width: 100%;
        border-collapse: collapse;
    }

    .product-table thead {
        display: table;
        width: 100%;
        table-layout: fixed;
        background-color: #333;
    }

    .product-table thead tr th {
        padding: 0.75rem;
        color: #f1f1f1;
        font-size: 0.9rem;

    }

    .product-table tbody {
        display: block;
        max-height: 250px;
        /* Giới hạn khoảng 5 sản phẩm */
        overflow-y: auto;
        width: 100%;
    }

    .product-table tbody::-webkit-scrollbar {
        width: 6px;
    }

    .product-table tbody::-webkit-scrollbar-track {
        background: #2e2e2e;
        border-radius: 3px;
    }

    .product-table tbody::-webkit-scrollbar-thumb {
        background: #6f42c1;
        border-radius: 3px;
    }

    .product-table tbody tr {
        display: table;
        width: 100%;
        table-layout: fixed;
        background-color: #1e1e1e;
        border-bottom: 1px solid #333;
    }

    .product-table tbody tr:last-child {
        border-bottom: none;
    }

    .product-table tbody tr td {
        padding: 1rem;
        vertical-align: middle;
        font-size: 0.9rem;
        color: #f1f1f1;
        text-align: center;
    }

    .product-cell {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .product-image {
        width: 60px;
        height: 60px;
        border-radius: 8px;
        object-fit: cover;
    }

    .product-details {
        flex: 1;
    }

    .product-name {
        font-weight: 600;
        color: #fff;
    }

    .product-attr {
        color: #bbb;
        font-size: 0.8rem;
    }

    .delete-form {
        margin-left: 1rem;
    }

    .btn-delete {
        background: none;
        border: none;
        cursor: pointer;
        color: #dc3545;
        font-size: 1.2rem;
    }

    .quantity-control {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .qty-input {
        width: 60px;
        padding: 0.4rem;
        border: 1px solid #555;
        border-radius: 6px;
        text-align: center;
        background-color: #1e1e1e;
        color: #f1f1f1;
    }

    .btn-decrease,
    .btn-increase {
        width: 30px;
        height: 30px;
        border: none;
        background: #6f42c1;
        color: #fff;
        border-radius: 15%;
        cursor: pointer;
    }

    .price,
    .item-subtotal {
        color: #ff6f61;
        font-weight: bold;
    }

    .total-amount {
        text-align: right;
        font-size: 1.1rem;
        font-weight: 600;
        /* margin-top: 1rem; */
        color: #fff;
    }

    /* Right Column: Payment & Voucher */
    .right-col {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .payment-voucher-section .card {
        background-color: #1e1e1e;
    }

    .section-title {
        text-align: center;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        color: #fff;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-group label {
        font-weight: 600;
        margin-bottom: 0.5rem;
        display: block;
        color: #f1f1f1;
    }

    .form-input {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid #555;
        border-radius: 8px;
        transition: all 0.3s ease;
        background-color: #121212;
        color: #f1f1f1;
    }

    .form-input:focus {
        border-color: #6f42c1;
        box-shadow: 0 0 6px rgba(111, 66, 193, 0.4);
        outline: none;
    }

    .payment-method .radio-group {
        display: flex;
        gap: 1.5rem;
        margin-top: 0.5rem;
    }

    .radio-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #f1f1f1;
    }

    /* Voucher Section */
    .voucher-group {
        display: flex;
        gap: 0.5rem;
    }

    .btn-apply-voucher {
        padding: 0.5rem 1rem;
        background-color: #6f42c1;
        color: #fff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-apply-voucher:hover {
        background-color: #59329c;
    }

    /* .voucher-list {
      margin-bottom: 1rem;
  } */
    .voucher-list h4 {
        margin-bottom: 0.5rem;
        color: #fff;
    }

    .voucher-list ul {
        list-style: none;
        padding: 0;
    }

    .voucher-list li {
        margin-bottom: 0.5rem;
        color: #f1f1f1;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.5rem;
        border: 1px solid #333;
        border-radius: 4px;
        font-size: 11px;
    }

    /* Nút "Dùng" cho voucher */
    .btn-use-voucher {
        padding: 0.25rem 0.75rem;
        background-color: transparent;
        border: 1px solid #6f42c1;
        color: #6f42c1;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
    }

    .btn-use-voucher:hover {
        background-color: #6f42c1;
        color: #fff;
    }

    /* Ẩn các voucher sau thứ 3 */
    .voucher-item.hidden-voucher {
        display: none;
    }

    .btn-toggle-voucher {
        background: none;
        border: none;
        color: #6f42c1;
        cursor: pointer;
        font-size: 1rem;
        margin-top: 0.5rem;
    }

    .voucher-info {
        background-color: #e6ffed;
        border: 1px solid #b7eb8f;
        padding: 0.75rem;
        border-radius: 8px;
        margin-bottom: 1rem;
        font-size: 0.9rem;
        color: #2e7d32;
        margin-top: 10px;
    }

    .agree-check {
        margin-bottom: 1.5rem;
        color: #fff;
    }

    .btn-checkout {
        width: 100%;
        padding: 0.85rem;
        border: none;
        border-radius: 8px;
        background-color: #6f42c1;
        color: #fff;
        font-size: 1rem;
        font-weight: 600;
        transition: background 0.3s ease;
        cursor: pointer;
    }

    .btn-checkout:hover {
        background-color: #59329c;
    }

    /* User Info Section */
    .user-info-section .card {
        background-color: #1e1e1e;
    }

    /* Final Total Section */
    .final-amount {
        margin: 0 0 10px 0;
    }

    /* Card chung cho Thanh toán & Voucher và Thông tin khách hàng */
    .payment-card,
    .user-info-card {
        background-color: #242424;
        /* màu nền tối hơn nhưng không hoàn toàn đen */
        border: 1px solid #333;
        /* border mềm mại */
        border-radius: 10px;
        /* bo tròn vừa phải */
        padding: 1.5rem;
        /* padding hợp lý */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    }

    /* Tiêu đề trong card */
    .section-title {
        text-align: center;
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        color: #f1f1f1;
        border-bottom: 1px solid #333;
        padding-bottom: 0.5rem;
    }

    /* Các form group bên trong card */
    .user-info-card .form-group,
    .payment-card .form-group {
        margin-bottom: 1rem;
    }

    .user-info-card .form-group label,
    .payment-card .form-group label {
        font-weight: 600;
        margin-bottom: 0.5rem;
        display: block;
        color: #f1f1f1;
    }

    /* Input bên trong card */
    .user-info-card .form-input,
    .payment-card .form-input {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid #555;
        border-radius: 8px;
        background-color: #121212;
        color: #f1f1f1;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .user-info-card .form-input:focus,
    .payment-card .form-input:focus {
        border-color: #6f42c1;
        box-shadow: 0 0 6px rgba(111, 66, 193, 0.4);
        outline: none;
    }

    /* Nút checkout chung */
    .btn-checkout {
        width: 100%;
        padding: 0.85rem;
        border: none;
        border-radius: 8px;
        background-color: #6f42c1;
        color: #fff;
        font-size: 1rem;
        font-weight: 600;
        transition: background 0.3s ease;
        cursor: pointer;
    }

    .btn-checkout:hover {
        background-color: #59329c;
    }

    /* Một số điều chỉnh nhỏ cho voucher */
    .voucher-group {
        display: flex;
        gap: 0.5rem;
    }

    .btn-apply-voucher {
        padding: 0.5rem 1rem;
        background-color: #6f42c1;
        color: #fff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-apply-voucher:hover {
        background-color: #59329c;
    }

    .notification-container {
        position: fixed;
        top: 70px;
        right: 20px;
        z-index: 1000;
        width: 250px;
    }

    .notification {
        background-color: #1e1e1e;
        color: #f1f1f1;
        padding: 1rem;
        margin-bottom: 10px;
        border-radius: 8px;
        border: 1px solid #333;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        opacity: 0;
        transform: translateX(100%);
        transition: all 0.5s ease-in-out;

    }

    .notification.success {
        background-color: #2e7d32;
        border-color: #b7eb8f;
    }

    .notification.error {
        background-color: #dc3545;
        border-color: #ff6f61;
    }

    .notification.show {
        opacity: 1;
        transform: translateX(0);
    }

    .product-image {
        width: 70px;
        height: 70px;
        border-radius: 8px;
        object-fit: cover;
        border: 1px solid #444;
    }
</style>

@include('layouts.customer.footer')
