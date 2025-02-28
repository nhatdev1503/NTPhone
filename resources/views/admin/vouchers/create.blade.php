@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Tạo Voucher mới</h2>
        <form action="{{ route('vouchers.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="code">Code:</label>
                <input type="text" name="code" class="form-control">
            </div>
            <div class="mb-3">
                <label for="discount_type">Loại Voucher:</label>
                <select name="discount_type" class="form-control">
                    <option value="percentage">Phần trăm</option>
                    <option value="fixed">Cố định</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="discount_value">Giá trị:</label>
                <input type="number" name="discount_value" class="form-control" step="0.1">
            </div>
            <div class="mb-3">
                <label for="start_date">Ngày bắt đầu:</label>
                <input type="date" name="start_date" class="form-control">
            </div>
            <div class="mb-3">
                <label for="expiration_date">Ngày kết thúc:</label>
                <input type="date" name="expiration_date" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Tạo mới</button>
        </form>
    </div>
@endsection