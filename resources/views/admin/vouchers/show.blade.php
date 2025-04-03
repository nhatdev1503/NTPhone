@extends('layouts.admin.main')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card p-4 shadow" style="width: 600px; max-width: 100%;">
            <h2 class="mb-4 text-center fw-bold display-6">Chi Tiết Voucher</h2>

            <div class="mb-3">
                <label for="code" class="form-label">Mã Code:</label>
                <input type="text" name="code" class="form-control" value="{{ $voucher->code }}" disabled>
            </div>

            <div class="mb-3">
                <label for="discount_value" class="form-label">Giá trị:</label>
                <input type="number" name="discount_value" class="form-control" step="0.1" value="{{ $voucher->discount_value }}" disabled>
            </div>

            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="discount_type" class="form-label">Loại Voucher:</label>
                    <input type="text" name="discount_type" class="form-control" value="{{ $voucher->discount_type == 'percentage' ? 'Phần trăm' : 'Cố định' }}" disabled>
                </div>

                @if($voucher->discount_type == 'percentage')
                    <div class="col-md-6">
                        <label for="max_discount_value" class="form-label">Số tiền giảm tối đa:</label>
                        <input type="number" name="max_discount_value" class="form-control form-control-sm" value="{{ $voucher->max_discount_value }}" disabled>
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="min_order_value" class="form-label">Đơn hàng tối thiểu:</label>
                <input type="number" name="min_order_value" class="form-control" value="{{ $voucher->min_order_value }}" disabled>
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Ngày Bắt Đầu:</label>
                <input type="date" name="start_date" class="form-control" value="{{ $voucher->start_date }}" disabled>
            </div>

            <div class="mb-3">
                <label for="expiration_date" class="form-label">Ngày Kết Thúc:</label>
                <input type="date" name="expiration_date" class="form-control" value="{{ $voucher->expiration_date }}" disabled>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('discounts.index') }}" class="btn btn-secondary">Danh sách</a>
                <a href="{{ route('discounts.edit', $voucher->id) }}" class="btn btn-primary">Chỉnh sửa</a>
            </div>
        </div>
    </div>
@endsection
