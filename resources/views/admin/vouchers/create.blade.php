@extends('layouts.admin.main')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card p-4 shadow" style="width: 600px; max-width: 100%;">
            <h2 class="mb-4 text-center fw-bold display-6">Tạo Voucher Mới</h2>
            <form action="{{ route('discounts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="code" class="form-label">Mã Code:</label>
                    <input type="text" name="code" class="form-control" value="{{ old('code') }}">
                    @if ($errors->has('code'))
                        <div class="validate_error">
                            {{ $errors->first('code') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="discount_value" class="form-label">Giá trị:</label>
                    <input type="number" name="discount_value" class="form-control" step="0.1"
                        value="{{ old('discount_value') }}">
                    @if ($errors->has('discount_value'))
                        <div class="validate_error">
                            {{ $errors->first('discount_value') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="discount_type" class="form-label">Loại Voucher:</label>
                        <select name="discount_type" id="discountType" class="form-control">
                            <option value="" disabled {{ old('discount_type') == '' ? 'selected' : '' }}>Chọn loại voucher</option>
                            <option value="percentage" {{ old('discount_type') == 'percentage' ? 'selected' : '' }}>Phần trăm</option>
                            <option value="fixed" {{ old('discount_type') == 'fixed' ? 'selected' : '' }}>Cố định</option>
                        </select>
                        @if ($errors->has('discount_type'))
                            <div class="validate_error">
                                {{ $errors->first('discount_type') }}
                            </div>
                        @endif
                        @if ($errors->has('max_discount_value'))
                            <div class="validate_error">
                                {{ $errors->first('max_discount_value') }}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6" id="maxDiscountContainer" style="display: none;">
                        <label for="max_discount_value" class="form-label">Số tiền giảm tối đa:</label>
                        <input type="number" name="max_discount_value" class="form-control form-control-sm"
                            value="{{ old('max_discount_value') }}">
                    </div>
                </div>


                <div class="mb-3">
                    <label for="min_order_value" class="form-label">Đơn hàng tối thiểu:</label>
                    <input type="number" name="min_order_value" class="form-control" value="{{ old('min_order_value') }}">
                    @if ($errors->has('min_order_value'))
                        <div class="validate_error">
                            {{ $errors->first('min_order_value') }}
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Ngày Bắt Đầu:</label>
                    <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}">
                    @if ($errors->has('start_date'))
                        <div class="validate_error">
                            {{ $errors->first('start_date') }}
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="expiration_date" class="form-label">Ngày Kết Thúc:</label>
                    <input type="date" name="expiration_date" class="form-control" value="{{ old('expiration_date') }}">
                    @if ($errors->has('expiration_date'))
                        <div class="validate_error">
                            {{ $errors->first('expiration_date') }}
                        </div>
                    @endif
                </div>

                <div class="">
                    <button type="submit" class="btn btn-success">Tạo Mới</button>
                    <a href="{{ route('discounts.index') }}" class="btn btn-secondary">Danh sách</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let discountType = document.getElementById("discountType");
            let maxDiscountContainer = document.getElementById("maxDiscountContainer");

            if (discountType.value === "percentage") {
                maxDiscountContainer.style.display = "block";
            } else {
                maxDiscountContainer.style.display = "none";
            }

            // Hiển thị số tiền giảm tối đa khi chọn "Phần trăm"
            discountType.addEventListener("change", function() {
                if (this.value === "percentage") {
                    maxDiscountContainer.style.display = "block";
                } else {
                    maxDiscountContainer.style.display = "none";
                }
            });

        });
    </script>
@endsection
