@include('layouts.customer.header')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-success text-white text-center py-3 rounded-top-4">
                    <h4 class="mb-0"><i class="bi bi-search"></i> Tra cứu đơn hàng</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('customer.orders.redirect') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="order_code" class="form-label fw-bold">Nhập mã đơn hàng:</label>
                            <input type="text" id="order_code" name="order_code" class="form-control border-primary shadow-sm" 
                                placeholder="VD: DH123456" required>
                            <div class="invalid-feedback">Vui lòng nhập mã đơn hàng!</div>
                        </div>
                        <button type="submit" class="btn btn-success w-100 btn-lg shadow-sm">
                            <i class="bi bi-search"></i> Tìm kiếm
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.customer.footer')

<script>
    // Bootstrap validation
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
