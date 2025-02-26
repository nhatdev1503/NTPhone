@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Sửa voucher</h2>

        <form action="{{ route('admin.updateVoucher', $discount->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="code">Code:</label>
                <input type="text" name="code" class="form-control" value="{{ $discount->code }}">
            </div>
            <div class="mb-3">
                <label for="discount_type">Type:</label>
                <select name="discount_type" class="form-control">
                    <option value="percentage" {{ $discount->discount_type == 'percentage' ? 'selected' : '' }}>Phần trăm</option>
                    <option value="fixed" {{ $discount->discount_type == 'fixed' ? 'selected' : '' }}>Cố định</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="discount_value">Value:</label>
                <input type="number" name="discount_value" class="form-control" step="0.1" value="{{ $discount->discount_value }}">
            </div>
            <div class="mb-3">
                <label for="max_discount">Max discount:</label>
                <input type="number" name="max_discount" class="form-control" step="0.1" value="{{ $discount->max_discount }}">
            </div>
            <div class="mb-3">
                <label for="start_date">Start date:</label>
                <input type="date" name="start_date" class="form-control" value="{{ $discount->start_date }}">
            </div>
            <div class="mb-3">
                <label for="expiration_date">Expiration date:</label>
                <input type="date" name="expiration_date" class="form-control" value="{{ $discount->expiration_date }}">
            </div>

            <button type="submit" class="btn btn-success">Cập nhật</button>
        </form>
    </div>
@endsection