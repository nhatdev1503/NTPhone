@extends('layouts.admin.main')

@section('content')
    <div class="container-fluid my-4">
        <div class="card-header text-white bg-dark p-3 mb-3">
            <h3 class="fs-4 text-center">Danh sách đơn hàng</h3>
        </div>

        <!-- Form lọc và tìm kiếm -->
        <form action="{{ route('orders.index') }}" method="GET" class="mb-4">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label fw-bold"> Tìm kiếm</label>
                    <input type="text" name="keyword" class="form-control form-control-md fs-6"
                        placeholder="Tìm kiếm khách hàng, SĐT"
                        value="{{ request('keyword') }}">
                </div>
                <div class="col-md-2">
                    <label for="">Trạng thái đơn</label>
                    <select name="status" class="form-control form-control-md fs-6 mt-2">
                        <option value="">-- Tất cả --</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Chờ xác nhận</option>
                        <option value="processing" {{ request('status') == 'processing' ? 'selected' : '' }}>Đang xử lí</option>
                        <option value="shipped" {{ request('status') == 'shipped' ? 'selected' : '' }}>Đang giao hàng</option>
                        <option value="delivered" {{ request('status') == 'delivered' ? 'selected' : '' }}>Đã giao hàng</option>
                        <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Hoàn thành</option>
                        <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Hủy</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="">Trạng thái thanh toán</label>
                    <select name="payment_status" class="form-control form-control-md fs-6 mt-2">
                        <option value="">-- Tất cả --</option>
                        <option value="pending" {{ request('payment_status') == 'pending' ? 'selected' : '' }}>Chưa thanh toán</option>
                        <option value="paid" {{ request('payment_status') == 'paid' ? 'selected' : '' }}>Đã thanh toán </option>
                        <option value="failed" {{ request('payment_status') == 'failed' ? 'selected' : '' }}>Thất bại</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-label" for="">Ngày bắt đầu</label>
                    <input type="date" name="from_date" class="form-control form-control-md fs-6"
                        value="{{ request('from_date') }}">
                </div>

                <div class="col-md-2">
                    <label for="">Ngày kết thúc</label>
                    <input type="date" name="to_date" class="form-control form-control-md fs-6 mt-2"
                        value="{{ request('to_date') }}">
                </div>

                <div class="col-md-1 mt-3">
                    <button type="submit" class="btn btn-primary btn-md w-100">Lọc</button>
                </div>

                <div class="col-md-1 mt-3">
                    <a href="{{ route('orders.index') }}" class="btn btn-secondary btn-md w-100">Reset</a>
                </div>
            </div>
        </form>
        <div class="alert alert-info">
            Hiển thị {{ $orders->count() }} đơn hàng trên tổng số {{ $orders->total() }} đơn hàng.
        </div>
        <div class="card-body">
            <table class="table table-bordered table-md fs-6 w-100">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Mã Order</th>
                        <th class="text-center">Khách hàng</th>
                        <th class="text-center">SĐT</th>
                        <th class="text-center">Tổng tiền</th>
                        <th class="text-center">Trạng thái thanh toán</th>
                        <th class="text-center">Thanh toán</th>
                        <th class="text-center">Trạng thái đơn</th>
                        <th class="text-center">Ngày đặt</th>
                        <th class="text-center">Người xác nhận</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->order_code }}</td>
                            <td>{{ $order->fullname }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ number_format($order->total_price) }}</td>
                            <td>
                                @php
                                    $paymentStatusColors = [
                                        'pending' => 'badge bg-warning text-dark',
                                        'paid' => 'badge bg-success',
                                        'failed' => 'badge bg-danger',
                                    ];
                                    $paymentStatusText = [
                                        'pending' => 'Chưa thanh toán',
                                        'paid' => 'Đã thanh toán',
                                        'failed' => 'Thất bại',
                                    ];
                                @endphp
                                <span class="{{ $paymentStatusColors[$order->payment_status] }} p-2">
                                    {{ $paymentStatusText[$order->payment_status] }}
                                </span>
                            </td>
                            <td>
                                {{ $order->payment_method }}
                            </td>
                            <td>
                                @php
                                    $statusColors = [
                                        'pending' => 'badge bg-warning text-dark',
                                        'processing' => 'badge bg-primary',
                                        'shipped' => 'badge bg-dark',
                                        'delivered' => 'badge bg-warning',
                                        'completed' => 'badge bg-success',
                                        'cancelled' => 'badge bg-danger',
                                    ];
                                    $statusText = [
                                        'pending' => 'Chờ xác nhận',
                                        'processing' => 'Đang xử lí',
                                        'shipped' => 'Đang giao hàng',
                                        'delivered' => 'Đã giao hàng',
                                        'completed' => 'Hoàn thành',
                                        'cancelled' => 'Hủy',
                                    ];
                                @endphp
                                <span class="{{ $statusColors[$order->status] }} p-2">
                                    {{ $statusText[$order->status] }}
                                </span>
                            </td>
                            <td>{{ $order->created_at->format('d/m/Y') }}</td>
                            <td>{{ $order->staff->fullname ?? 'Chưa có' }}</td>
                            <td>
                                <a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary btn-md">Xem</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center mt-4">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection
