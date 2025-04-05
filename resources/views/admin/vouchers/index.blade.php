@extends('layouts.admin.main')

@section('content')
    <div class="container my-4" style="max-width: 95%; min-width: 1200px;">
        <h2 class="my-4 text-center fw-bold display-6">Quản lý voucher</h2>
        <div class="my-2 mt-3 mb-3">
            <a href="{{ route('discounts.create') }}" style="text-decoration: none;" class="btn btn-success">Thêm voucher</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('discounts.index') }}" method="GET" class="mb-3">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="code" class="form-control" placeholder="Tìm mã voucher..."
                        value="{{ request('code') }}">
                </div>
                <div class="col-md-3">
                    <select name="status" class="form-control">
                        <option value="">-- Tất cả trạng thái --</option>
                        <option value="upcoming" {{ request('status') == 'upcoming' ? 'selected' : '' }}>Sắp tới</option>
                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Hoạt động</option>
                        <option value="expired" {{ request('status') == 'expired' ? 'selected' : '' }}>Hết hạn</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="discount_type" class="form-control">
                        <option value="">-- Tất cả voucher --</option>
                        <option value="fixed" {{ request('discount_type') == 'fixed' ? 'selected' : '' }}>Giảm giá cố định
                        </option>
                        <option value="percentage" {{ request('discount_type') == 'percentage' ? 'selected' : '' }}>Giảm giá
                            %</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Lọc</button>
                    <a href="{{ route('discounts.index') }}" class="btn btn-secondary">Reset</a>
                </div>
            </div>
        </form>
        <div class="alert alert-info">
            Hiển thị {{ $vouchers->count() }} voucher trên tổng số {{ $vouchers->total() }} voucher.
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Code</th>
                        <th>Loại voucher</th>
                        <th>Giá trị</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vouchers as $index => $voucher)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $voucher->code }}</td>
                            <td>
                                @if ($voucher->discount_type == 'fixed')
                                Cố đinh
                            @elseif($voucher->discount_type == 'percentage')
                                Phần trăm
                            @endif
                            </td>
                            <td>
                                @if ($voucher->discount_type == 'fixed')
                                {{ number_format($voucher->discount_value, 0, ',', '.') }}
                                @elseif($voucher->discount_type == 'percentage')
                                {{ $voucher->discount_value }}%
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($voucher->start_date)->format('m/d/Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($voucher->expiration_date)->format('m/d/Y') }}</td>
                            <td>
                                @php
                                    $now = now();
                                    if ($voucher->start_date > $now) {
                                        $status = ['text' => 'Sắp tới', 'class' => 'badge bg-warning text-dark']; // Màu vàng
                                    } elseif ($voucher->expiration_date < $now) {
                                        $status = ['text' => 'Hết hạn', 'class' => 'badge bg-danger']; // Màu đỏ
                                    } else {
                                        $status = ['text' => 'Hoạt động', 'class' => 'badge bg-primary']; // Màu xanh
                                    }
                                @endphp

                                <span class="{{ $status['class'] }}">
                                    {{ $status['text'] }}
                                </span>
                            </td>

                            <td>
                                <a href="{{ route('discounts.show', $voucher->id) }}" class="btn btn-primary">Xem</a>
                                <a href="{{ route('discounts.edit', $voucher->id) }}" class="btn btn-warning">Sửa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center mt-3">
                {{ $vouchers->links() }}
            </div>
        </div>
    </div>
@endsection
