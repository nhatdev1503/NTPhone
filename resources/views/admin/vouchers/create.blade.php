@extends('layouts.admin.main')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card p-4 shadow" style="width: 600px; max-width: 100%;">
            <h2 class="mb-4 text-center fw-bold display-6">Tạo Voucher Mới</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('discounts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="code" class="form-label">Mã Code:</label>
                    <input type="text" name="code" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="discount_type" class="form-label">Loại Voucher:</label>
                    <select name="discount_type" class="form-control">
                        <option value="percentage">Phần trăm</option>
                        <option value="fixed">Cố định</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="discount_value" class="form-label">Giá trị:</label>
                    <input type="number" name="discount_value" class="form-control" step="0.1">
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Ngày Bắt Đầu:</label>
                    <input type="date" name="start_date" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="expiration_date" class="form-label">Ngày Kết Thúc:</label>
                    <input type="date" name="expiration_date" class="form-control">
                </div>

                <div class="">
                    <button type="submit" class="btn btn-success">Tạo Mới</button>
                    <a href="{{ route('discounts.index') }}" class="btn btn-secondary">Danh sách</a>
                </div>
            </form>
        </div>
    </div>
@endsection
