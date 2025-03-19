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


</div>
<div id="orderResult" class="container mb-5 d-none" style=" margin-top: -200px;">
    <!-- Label Kết Quả -->
    <h3 class="text-center text-success fw-bold mb-3"> Kết quả tìm kiếm</h3>

    <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header bg-gradient text-white text-center py-3 rounded-top-4"
            style="background: linear-gradient(135deg, #007bff, #0056b3);">
            <h4 class="mb-0 fw-bold"> Thông Tin Đơn Hàng</h4>
        </div>
        <div class="card-body p-4">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="border p-3 rounded shadow-sm bg-light">
                        <h6 class="text-muted">📄 Mã đơn hàng:</h6>
                        <p class="fw-bold text-primary" id="resultOrderCode"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border p-3 rounded shadow-sm bg-light">
                        <h6 class="text-muted">👤 Tên khách hàng:</h6>
                        <p class="fw-bold" id="resultName"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border p-3 rounded shadow-sm bg-light">
                        <h6 class="text-muted">📍 Địa chỉ:</h6>
                        <p class="fw-bold" id="resultAddress"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border p-3 rounded shadow-sm bg-light">
                        <h6 class="text-muted">📞 Số điện thoại:</h6>
                        <p class="fw-bold" id="resultPhone"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border p-3 rounded shadow-sm bg-light">
                        <h6 class="text-muted">📧 Email:</h6>
                        <p class="fw-bold" id="resultEmail"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border p-3 rounded shadow-sm bg-light">
                        <h6 class="text-muted">🚚 Trạng thái:</h6>
                        <p class="fw-bold text-success" id="resultStatus"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border p-3 rounded shadow-sm bg-light">
                        <h6 class="text-muted">📅 Ngày đặt hàng:</h6>
                        <p class="fw-bold" id="resultDate"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border p-3 rounded shadow-sm bg-light">
                        <h6 class="text-muted">💰 Tổng tiền:</h6>
                        <p class="fw-bold text-danger" id="resultTotal"></p>
                    </div>
                </div>
            </div>
            <a id="orderDetailLink" href="#" class="btn btn-primary w-100 mt-3 fw-bold"> Xem chi tiết đơn hàng</a>
        </div>
    </div>
</div>


<script>
    document.getElementById("orderLookupForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Ngăn reload trang

        let orderCode = document.getElementById("order_code").value;
        let resultContainer = document.getElementById("orderResult");
        let errorContainer = document.getElementById("orderError");
        let loadingIndicator = document.getElementById("loadingIndicator");

        // Ẩn kết quả cũ và thông báo lỗi, hiện loading
        resultContainer.classList.add("d-none");
        errorContainer.classList.add("d-none");
        loadingIndicator.classList.remove("d-none");

        fetch(`/guest/api/order-lookup/${orderCode}`)
            .then(response => response.json())
            .then(data => {
                loadingIndicator.classList.add("d-none");

                if (data.success) {
                    document.getElementById("resultOrderCode").innerText = data.order.code;
                    document.getElementById("resultName").innerText = data.order.customer_name;
                    document.getElementById("resultAddress").innerText = data.order.address;
                    document.getElementById("resultPhone").innerText = data.order.phone;
                    document.getElementById("resultEmail").innerText = data.order.email;
                    document.getElementById("resultStatus").innerText = data.order.status;
                    document.getElementById("resultDate").innerText = data.order.order_date;
                    document.getElementById("resultTotal").innerText = new Intl.NumberFormat('vi-VN', {
                        style: 'currency',
                        currency: 'VND'
                    }).format(data.order.total);
                    document.getElementById("orderDetailLink").href = `/orders/${data.order.id}`;

                    let detailLink = document.getElementById("orderDetailLink");
                    detailLink.href = `/guest/order-lookup/${data.order.code}`;

                    resultContainer.classList.remove("d-none"); // Hiện kết quả
                } else {
                    errorContainer.innerText = "❌ " + data.message;
                    errorContainer.classList.remove("d-none");
                }
            })
            .catch(error => {
                loadingIndicator.classList.add("d-none");
                errorContainer.innerText = "❌ Lỗi kết nối đến server!";
                errorContainer.classList.remove("d-none");
            });
    });
</script>

@include('layouts.guest.footer')
