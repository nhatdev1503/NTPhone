@include('layouts.customer.header')

@php
    $user = Auth::user();
@endphp

<div class="container cart-container">
    <h2 class="page-title">🛒 Giỏ hàng của bạn</h2>
    <div id="notification-container" class="notification-container"></div>
    <form id="checkout-form" action="{{ route('customer.cart.checkout') }}" method="POST">
        @csrf

        <div class="main-grid">
            <div class="left-col">
                <div class="product-list-container">
                    <table class="product-table" id="cart-table">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Giá (₫)</th>
                                <th>Tạm tính (₫)</th>
                                <th>Chọn tất cả <input type="checkbox" id="select-all" title="Chọn tất cả"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $subTotal = 0; @endphp
                                <tr class="cart-item" data-price="{{ $price }}"
                                    data-cart-id=""
                                    data-default-color="{{ $product_variant->color }}"
                                    data-default-storage="{{ $product_variant->storage }}">
                                    <td>
                                        <div class="product-cell">
                                            <img src="{{ asset($product_variant->product->image) }}"
                                                alt="{{ $product_variant->product->name }}" class="product-image">
                                            <div class="product-details">
                                                <span class="product-name">
                                                    {{ $product_variant->product->name ?? 'Sản phẩm không tồn tại' }}
                                                </span>
                                                <div class="variant-info">
                                                    @if ($colors->count() <= 1 && $storages->count() <= 1)
                                                        <span class="variant-static">
                                                            {{ $product_variant->color }} -
                                                            {{ $product_variant->storage }}
                                                        </span>
                                                    @else
                                                        <div class="variant-selectors">
                                                            @if ($colors->count() > 1)
                                                                <select class="variant-color"
                                                                    data-cart-id="">
                                                                    @foreach ($colors as $color)
                                                                        <option value="{{ $color }}"
                                                                            {{ $product_variant->color == $color ? 'selected' : '' }}>
                                                                            {{ $color }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            @endif
                                                            @if ($storages->count() > 1)
                                                                <select class="variant-storage"
                                                                    data-cart-id="">
                                                                    @foreach ($storages as $storage)
                                                                        <option value="{{ $storage }}"
                                                                            {{ $product_variant->storage == $storage ? 'selected' : '' }}>
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
                                                    <button type="button" class="btn-delete"
                                                        data-cart-id="" title="Xóa">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price-cell">
                                        <div class="quantity-control">
                                            <button type="button" class="btn-decrease"
                                                data-cart-id="">-</button>
                                            <input type="number" name="quantities[]"
                                                value="" min="1" max="5"
                                                class="qty-input" data-cart-id="">
                                            <button type="button" class="btn-increase"
                                                data-cart-id="">+</button>
                                        </div>
                                        <div class="price">
                                            {{ number_format($price, 0, ',', '.') }}₫
                                        </div>
                                    </td>
                                    <td class="item-subtotal">
                                        {{ number_format($itemSubTotal, 0, ',', '.') }}
                                    </td>
                                    <td class="action-cell">
                                        <input type="checkbox" name="selected_items[]" value="{{ $cart->id }}"
                                            class="item-checkbox">
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>

                <div class="total-amount">
                    <span>Tạm tính: </span>
                    <span id="sub-total">{{ number_format($subTotal, 0, ',', '.') }}₫</span>
                </div>

                <div class="user-info-section">
                    <div class="card user-info-card">
                        <div class="card-body">
                            <div class="user-info-header">
                                <h3 class="section-title">Thông tin khách hàng</h3>
                                <button type="button" class="toggle-user-info">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <div class="user-info-content">
                                <p class="section-title" style="color: #6f42c1; font-size: 12px; padding: 0 0 0 0;">
                                    (Thông tin này chỉ áp dụng cho đơn hàng, không thay đổi tài khoản của bạn.)
                                </p>
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
            </div>

            <div class="right-col">
                <div class="payment-voucher-section">
                    <div class="card payment-card">
                        <div class="card-body">
                            <h3 class="section-title">Thanh toán & Voucher</h3>
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
                            <div class="form-group">
                                <label for="voucher_code">Voucher (nếu có)</label>
                                <div class="voucher-group">
                                    <input type="text" name="voucher_code" id="voucher_code"
                                        placeholder="Nhập mã voucher" class="form-input">
                                    <button type="button" id="apply-voucher" class="btn-apply-voucher">Áp
                                        dụng</button>
                                </div>
                            </div>
                            <div class="voucher-list" id="voucher-list-container">
                                <h4>Voucher khả dụng:</h4>
                                <ul id="voucher-list">
                                    @foreach ($activeVouchers as $index => $voucher)
                                        <li
                                            class="voucher-item @if ($index >= 3) hidden-voucher @endif">
                                            <span>{{ $voucher->code }}</span> -
                                            @if ($voucher->discount_type == 'percentage')
                                                Giảm {{ $voucher->discount_value }}%
                                                @if ($voucher->max_discount_value)
                                                    (tối đa
                                                    {{ number_format($voucher->max_discount_value, 0, ',', '.') }}₫)
                                                @endif
                                            @else
                                                Giảm cố định
                                                {{ number_format($voucher->discount_value, 0, ',', '.') }}₫
                                            @endif
                                            @if ($voucher->min_order_value)
                                                - Đơn tối thiểu
                                                {{ number_format($voucher->min_order_value, 0, ',', '.') }}₫
                                            @endif
                                            - Hết hạn:
                                            {{ \Carbon\Carbon::parse($voucher->expiration_date)->format('d/m/Y') }}
                                            <button type="button" class="btn-use-voucher"
                                                data-code="{{ $voucher->code }}">Dùng</button>
                                        </li>
                                    @endforeach
                                </ul>
                                @if ($activeVouchers->count() > 3)
                                    <button type="button" id="toggle-voucher-list" class="btn-toggle-voucher">
                                        Xem thêm <i class="fas fa-chevron-down"></i>
                                    </button>
                                @endif
                            </div>
                            <div class="voucher-info" id="voucher-info" style="display: none;">
                                <p><strong>Voucher:</strong> <span id="voucher-code-display"></span></p>
                                <p><strong>Giảm:</strong> <span id="voucher-discount-display"></span>₫</p>
                                <button type="button" id="remove-voucher" class="btn-remove-voucher">Hủy bỏ</button>
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
                                <label for="agree" style="color: white" class="form-check-label">
                                    Tôi đã đọc và đồng ý với <a href="#" id="terms-link"
                                        class="terms-link">điều khoản thanh toán</a>
                                </label>
                            </div>
                            <button type="submit" class="btn-checkout">Hoàn tất thanh toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Popup Điều khoản -->
    <div id="terms-popup" class="popup">
        <div class="popup-content">
            <h2>Điều khoản mua điện thoại</h2>
            <div class="terms-content">
                <p><strong>1. Quy định chung:</strong> Khi mua điện thoại tại cửa hàng của chúng tôi, bạn đồng ý tuân
                    thủ các điều khoản và điều kiện được liệt kê dưới đây.</p>
                <p><strong>2. Thanh toán:</strong> Thanh toán có thể được thực hiện qua COD hoặc VNPay. Đơn hàng chỉ
                    được xác nhận sau khi thanh toán hoàn tất (đối với VNPay) hoặc khi bạn nhận hàng (đối với COD).</p>
                <p><strong>3. Bảo hành:</strong> Điện thoại được bảo hành theo chính sách của nhà sản xuất (thường 12
                    tháng). Vui lòng giữ hóa đơn để được hỗ trợ bảo hành.</p>
                <p><strong>4. Đổi trả:</strong> Sản phẩm được đổi trả trong vòng 7 ngày nếu có lỗi từ nhà sản xuất. Sản
                    phẩm phải còn nguyên vẹn, không trầy xước, đầy đủ phụ kiện và hóa đơn.</p>
                <p><strong>5. Giao hàng:</strong> Thời gian giao hàng từ 2-5 ngày làm việc, tùy thuộc vào địa chỉ nhận
                    hàng. Chi phí vận chuyển sẽ được thông báo trước.</p>
                <p><strong>6. Trách nhiệm:</strong> Chúng tôi không chịu trách nhiệm về hư hỏng do người dùng gây ra sau
                    khi nhận hàng.</p>
                <p><strong>7. Thay đổi điều khoản:</strong> Chúng tôi có quyền cập nhật điều khoản mà không cần thông
                    báo trước. Vui lòng kiểm tra lại trước khi đặt hàng.</p>
            </div>
            <button id="close-terms" class="btn-close-popup">Đóng</button>
        </div>
    </div>
</div>

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

    // Xử lý thay đổi biến thể
    document.querySelectorAll('.variant-color, .variant-storage').forEach(function(select) {
        select.addEventListener('change', function() {
            const cartId = this.getAttribute('data-cart-id');
            const row = document.querySelector(`tr[data-cart-id="${cartId}"]`);
            const colorSelect = document.querySelector(`.variant-color[data-cart-id="${cartId}"]`);
            const storageSelect = document.querySelector(`.variant-storage[data-cart-id="${cartId}"]`);
            const spinner = this.parentElement.querySelector('.spinner');

            const color = colorSelect ? colorSelect.value : row.getAttribute('data-default-color');
            const storage = storageSelect ? storageSelect.value : row.getAttribute(
                'data-default-storage');

            spinner.style.display = 'inline-block';

            fetch("{{ route('customer.cart.updateVariant') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        cart_id: cartId,
                        color: color,
                        storage: storage
                    })
                })
                .then(response => response.json())
                .then(data => {
                    spinner.style.display = 'none';
                    if (data.success) {
                        const priceCell = row.querySelector('.price');
                        const itemSubtotalCell = row.querySelector('.item-subtotal');
                        const qty = parseInt(row.querySelector('.qty-input').value);

                        row.setAttribute('data-price', data.price);
                        priceCell.innerText = data.price.toLocaleString('vi-VN') + '₫';
                        itemSubtotalCell.innerText = (data.price * qty).toLocaleString('vi-VN') +
                            '₫';

                        row.setAttribute('data-default-color', color);
                        row.setAttribute('data-default-storage', storage);

                        updateTotals();
                        showNotification('Đã cập nhật biến thể thành công!', 'success');
                    } else {
                        showNotification(data.message || 'Có lỗi khi cập nhật biến thể.', 'error');
                    }
                })
                .catch(error => {
                    spinner.style.display = 'none';
                    console.error('Lỗi:', error);
                    showNotification('Có lỗi xảy ra khi cập nhật biến thể.', 'error');
                });
        });
    });

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

    // Cập nhật tổng tiền
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

    // AJAX cập nhật số lượng
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

    // Nút tăng/giảm số lượng
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

    // Checkbox xử lý
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

    // Xử lý submit form
    document.getElementById('checkout-form').addEventListener('submit', function(e) {
        const selectedItems = document.querySelectorAll('.item-checkbox:checked');
        if (selectedItems.length === 0) {
            e.preventDefault();
            showNotification('Vui lòng chọn ít nhất một sản phẩm để đặt hàng!', 'error');
        }
    });

    // Voucher xử lý
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
            if (voucher.min_order_value && selectedSubTotal < voucher.min_order_value) {
                showNotification(
                    `Đơn hàng phải từ ${voucher.min_order_value.toLocaleString('vi-VN')}₫ để áp dụng voucher này!`,
                    'error');
                return;
            }
            discount = selectedSubTotal * (voucher.discount_value / 100);
            if (voucher.max_discount_value && discount > voucher.max_discount_value) {
                discount = voucher.max_discount_value;
            }
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

    // Toggle danh sách voucher
    document.getElementById('toggle-voucher-list')?.addEventListener('click', function() {
        const voucherItems = document.querySelectorAll('.voucher-item.hidden-voucher');
        const isHidden = voucherItems[0].style.display === 'none' || voucherItems[0].style.display === '';
        voucherItems.forEach(function(item) {
            item.style.display = isHidden ? 'list-item' : 'none';
        });
        this.innerHTML = isHidden ? 'Thu gọn <i class="fas fa-chevron-up"></i>' :
            'Xem thêm <i class="fas fa-chevron-down"></i>';
    });

    // Xử lý xóa sản phẩm
    document.querySelectorAll('.btn-delete').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const cartId = this.getAttribute('data-cart-id');
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

    // Toggle thông tin người dùng

    // Xử lý popup điều khoản
    const termsPopup = document.getElementById('terms-popup');
    const termsLink = document.getElementById('terms-link');
    const agreeCheckbox = document.getElementById('agree');
    const closeTerms = document.getElementById('close-terms');

    function showTermsPopup() {
        termsPopup.style.display = 'flex';
    }

    termsLink.addEventListener('click', function(e) {
        e.preventDefault();
        showTermsPopup();
    });

    agreeCheckbox.addEventListener('change', function() {
        if (this.checked) {
            showTermsPopup();
        }
    });

    closeTerms.addEventListener('click', function() {
        termsPopup.style.display = 'none';
    });

    // Đóng popup khi nhấp ra ngoài nội dung
    termsPopup.addEventListener('click', function(e) {
        if (e.target === termsPopup) {
            termsPopup.style.display = 'none';
        }
    });

    // Khởi tạo tổng tiền
    updateTotals();
</script>

<style>
    .cart-container {
        max-width: 1400px;
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
        padding: 3px 9px;
        border-radius: 8px;
        background-color: #6f42c1;
        color: white;
    }

    .product-table tr>th {
        text-align: center;
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
        margin-top: 0.5rem;
        display: block;
    }

    .btn-delete:hover {
        color: #cc0000;
    }

    .final-total {
        margin-top: 1rem;
    }

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

    .left-col {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .product-list-container {
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
        width: 70px;
        height: 70px;
        border-radius: 8px;
        object-fit: cover;
        border: 1px solid #444;
    }

    .product-details {
        flex: 1;
        text-align: left;
    }

    .product-name {
        font-weight: 600;
        color: #fff;
    }

    .quantity-control {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
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

    .price-cell {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .price {
        color: #ff6f61;
        font-weight: bold;
    }

    .item-subtotal {
        color: #ff6f61;
        font-weight: bold;
    }

    .total-amount {
        text-align: right;
        font-size: 1.1rem;
        font-weight: 600;
        color: #fff;
    }

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

    .terms-link {
        color: #6f42c1;
        text-decoration: underline;
        cursor: pointer;
    }

    .terms-link:hover {
        color: #59329c;
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

    .user-info-section .card {
        background-color: #1e1e1e;
    }

    .final-amount {
        margin: 0 0 10px 0;
    }

    .payment-card,
    .user-info-card {
        background-color: #242424;
        border: 1px solid #333;
        border-radius: 10px;
        padding: 0.5rem;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    }

    .user-info-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .toggle-user-info {
        background: none;
        border: none;
        color: #6f42c1;
        font-size: 1.2rem;
        cursor: pointer;
        transition: transform 0.3s;
    }

    .notification-container {
        position: fixed;
        top: 70px;
        right: 20px;
        z-index: 100000;
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

    /* Popup Styles */
    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .popup-content {
        background-color: #1e1e1e;
        padding: 2rem;
        border-radius: 10px;
        width: 90%;
        max-width: 1000px;
        max-height: 80vh;
        overflow-y: auto;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        position: relative;
    }

    .popup-content h2 {
        color: #f1f1f1;
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .terms-content {
        color: #f1f1f1;
        font-size: 0.95rem;
        line-height: 1.6;
    }

    .terms-content p {
        margin-bottom: 1rem;
    }

    .btn-close-popup {
        display: block;
        margin: 1.5rem auto 0;
        padding: 0.5rem 1.5rem;
        background-color: #6f42c1;
        color: #fff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-close-popup:hover {
        background-color: #59329c;
    }

    .product-name {
        display: block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
