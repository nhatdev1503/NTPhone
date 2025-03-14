@include('layouts.guest.header')

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row justify-content-center w-100 absolute top-56">
        <div class="col-md-6">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header bg-gradient text-white text-center py-4 rounded-top-4"
                    style="background: linear-gradient(135deg, #28a745, #218838);">
                    <h3 class="mb-0 fw-bold"><i class="bi bi-search"></i> Tra cứu đơn hàng</h3>
                </div>
                <div class="card-body p-5">
                    <form id="orderLookupForm" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-4">
                            <label for="order_code" class="form-label fw-semibold fs-5">Nhập mã đơn hàng:</label>
                            <div class="input-group">
                                <span class="input-group-text bg-success text-white"><i class="bi bi-hash"></i></span>
                                <input type="text" id="order_code" name="order_code"
                                    class="form-control border-success shadow-sm" placeholder="VD: DH123456" required>
                                <div class="invalid-feedback">Vui lòng nhập mã đơn hàng!</div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success w-100 btn-lg shadow-sm fw-bold">
                            <i class="bi bi-search"></i> Tìm kiếm đơn hàng
                        </button>
                    </form>
                    <div id="loadingIndicator" class="text-center mt-3 d-none">
                        <p class="text-success fw-bold">🔄 Đang tìm kiếm...</p>
                    </div>
                    <div id="orderError" class="alert alert-danger mt-3 d-none"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="orderResult" class="mt-4 d-none">
        <h4 class="text-center text-success fw-bold">✅ Kết quả tìm kiếm</h4>
        <table class="table table-bordered shadow-sm">
            <tbody>
                <tr><th>Mã đơn hàng:</th> <td id="resultOrderCode"></td></tr>
                <tr><th>Tên người nhận:</th> <td id="resultName"></td></tr>
                <tr><th>Địa chỉ:</th> <td id="resultAddress"></td></tr>
                <tr><th>Số điện thoại:</th> <td id="resultPhone"></td></tr>
                <tr><th>Email:</th> <td id="resultEmail"></td></tr>
                <tr><th>Trạng thái:</th> <td id="resultStatus"></td></tr>
                <tr><th>Ngày đặt hàng:</th> <td id="resultDate"></td></tr>
                <tr><th>Tổng tiền:</th> <td id="resultTotal"></td></tr>
            </tbody>
        </table>
        <a id="orderDetailLink" href="#" class="btn btn-primary w-100 fw-bold">🔍 Xem chi tiết đơn hàng</a>
    </div>
</div>

<script>
document.getElementById("orderLookupForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Ngăn chặn tải lại trang

    let orderCode = document.getElementById("order_code").value;
    let resultContainer = document.getElementById("orderResult");
    let errorContainer = document.getElementById("orderError");
    let loadingIndicator = document.getElementById("loadingIndicator");

    // Reset UI
    resultContainer.classList.add("d-none");
    errorContainer.classList.add("d-none");
    loadingIndicator.classList.remove("d-none");

    fetch("{{ route('guest.orders.apiSearch') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ order_code: orderCode })
    })
    .then(response => response.json())
    .then(data => {
        loadingIndicator.classList.add("d-none"); // Ẩn loading

        if (data.success) {
            // Hiển thị thông tin đơn hàng trên giao diện
            document.getElementById("resultOrderCode").innerText = data.order.code;
            document.getElementById("resultName").innerText = data.order.customer_name;
            document.getElementById("resultAddress").innerText = data.order.address;
            document.getElementById("resultPhone").innerText = data.order.phone;
            document.getElementById("resultEmail").innerText = data.order.email;
            document.getElementById("resultStatus").innerText = data.order.status;
            document.getElementById("resultDate").innerText = data.order.order_date;
            document.getElementById("resultTotal").innerText = data.order.total + " VND";
            document.getElementById("orderDetailLink").href = "/orders/" + data.order.id;

            resultContainer.classList.remove("d-none"); // Hiện bảng kết quả
        } else {
            errorContainer.innerText = "Không tìm thấy đơn hàng!";
            errorContainer.classList.remove("d-none");
        }
    })
    .catch(error => {
        loadingIndicator.classList.add("d-none");
        errorContainer.innerText = "Lỗi kết nối đến server!";
        errorContainer.classList.remove("d-none");
        console.error("Lỗi:", error);
    });
});
</script>

@include('layouts.guest.footer')
