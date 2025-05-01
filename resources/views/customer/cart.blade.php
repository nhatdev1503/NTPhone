<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Các hàm xử lý sự kiện khác...

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
    });
</script> 