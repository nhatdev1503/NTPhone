@include('layouts.customer.header')
<div class="container">
    <h2>Thanh toán qua VNPay</h2>
    <p>{{ session('success') }}</p>
    <!-- Thêm logic tích hợp VNPay nếu cần -->
    <a href="{{ route('customer.index') }}" class="btn btn-primary">Quay lại</a>
</div>
@include('layouts.customer.footer')