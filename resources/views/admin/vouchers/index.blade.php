@extends('layouts.main')

@section('content')
    <div class="container my-4">
        <div class="card-header text-white bg-primary">
            <h3>Tất cả voucher</h3>
        </div>
        <div class="my-2">
            <a href="{{ route('admin.createVoucher') }}" style="text-decoration: none;" class="btn btn-success">Thêm voucher</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Discount type</th>
                        <th>Discount value</th>
                        <th>Max discount</th>
                        <th>Start date</th>
                        <th>Expiration date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vouchers as $voucher)
                        <tr>
                            <td>{{ $voucher->id }}</td>
                            <td>{{ $voucher->code }}</td>
                            <td>{{ $voucher->discount_type }}</td>
                            <td>
                                {{ number_format($voucher->discount_value) }}
                                @if ($voucher->discount_type == 'fixed') VNĐ @else % @endif
                            </td>
                            <td>
                                {{ number_format($voucher->max_discount) }}
                                @if ($voucher->discount_type == 'fixed') VNĐ @else % @endif
                            </td>
                            <td>{{ $voucher->start_date }}</td>
                            <td>{{ $voucher->expiration_date }}</td>
                            <td>
                                <a href="{{ route('admin.editVoucher', $voucher->id) }}" class="btn btn-warning">Sửa</a>
                                <form action="{{ route('admin.deleteVoucher', $voucher->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa voucher này không?')">Xóa</button>
                                </form>
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