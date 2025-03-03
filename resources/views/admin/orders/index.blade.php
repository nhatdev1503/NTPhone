@extends('layouts.main')

@section('content')
    <div class="container-fluid my-4" style="max-width: 95%; min-width: 1200px;">
        <div class="card-header text-white bg-primary p-3 mb-3">
            <h3 class="fs-4 text-center">Danh sách đơn hàng</h3>
        </div>

        <!-- Form lọc và tìm kiếm -->
        <form action="{{ route('orders.index') }}" method="GET" class="mb-4">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label fw-bold"> Tìm kiếm</label>
                    <input type="text" name="keyword" class="form-control form-control-lg fs-5"
                        placeholder="Tìm kiếm khách hàng, email, SĐT..."
                        value="{{ request('keyword') }}">
                </div>

                <div class="col-md-2">
                    <label for="">Trạng thái đơn</label>
                    <select name="status" class="form-control form-control-lg fs-5">
                        <option value="">-- Tất cả --</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Chờ xác nhận</option>
                        <option value="processing" {{ request('status') == 'processing' ? 'selected' : '' }}>Đang đóng gói</option>
                        <option value="shipped" {{ request('status') == 'shipped' ? 'selected' : '' }}>Đang giao</option>
                        <option value="delivered" {{ request('status') == 'delivered' ? 'selected' : '' }}>Đã giao</option>
                        <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Đã hủy</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="">Hình thức thanh toán</label>
                    <select name="payment_method" class="form-control form-control-lg fs-5">
                        <option value="">-- Tất cả --</option>
                        <option value="COD" {{ request('payment_method') == 'COD' ? 'selected' : '' }}>COD</option>
                        <option value="VNPay" {{ request('payment_method') == 'VNpay' ? 'selected' : '' }}>VNPay</option>
                        <option value="MoMo" {{ request('payment_method') == 'MoMo' ? 'selected' : '' }}>MoMo</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-label" for="">Ngày bắt đầu</label>
                    <input type="date" name="from_date" class="form-control form-control-lg fs-5"
                        value="{{ request('from_date') }}">
                </div>

                <div class="col-md-2">
                    <label for="">Ngày kết thúc</label>
                    <input type="date" name="to_date" class="form-control form-control-lg fs-5"
                        value="{{ request('to_date') }}">
                </div>

                <div class="col-md-1 mt-3">
                    <button type="submit" class="btn btn-primary btn-lg w-100">Lọc</button>
                </div>

                <div class="col-md-1 mt-3">
                    <a href="{{ route('orders.index') }}" class="btn btn-secondary btn-lg w-100">Reset</a>
                </div>
            </div>
        </form>

        <div class="card-body">
            <table class="table table-bordered table-lg fs-5 w-100">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Mã Order</th>
                        <th class="text-center">Khách hàng</th>
                        <th class="text-center">SĐT</th>
                        <th class="text-center">Tổng tiền</th>
                        <th class="text-center">Trạng thái đơn</th>
                        <th class="text-center">Thanh toán</th>
                        <th class="text-center">Trạng thái thanh toán</th>
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
                                    $statusColors = [
                                        'pending' => 'badge bg-warning text-dark',
                                        'processing' => 'badge bg-primary',
                                        'shipped' => 'badge bg-info',
                                        'delivered' => 'badge bg-success',
                                        'cancelled' => 'badge bg-danger',
                                    ];
                                    $statusText = [
                                        'pending' => 'Chờ xác nhận',
                                        'processing' => 'Đang đóng gói',
                                        'shipped' => 'Đang giao',
                                        'delivered' => 'Đã giao',
                                        'cancelled' => 'Đã hủy',
                                    ];
                                @endphp
                                <span class="{{ $statusColors[$order->status] }} p-2">
                                    {{ $statusText[$order->status] }}
                                </span>
                            </td>
                            <td>
                                {{ $order->payment_method }}
                            </td>
                            <td>
                                @php
                                    $statusColors = [
                                        'pending' => 'badge bg-warning text-dark',
                                        'paid' => 'badge bg-success',
                                        'failed' => 'badge bg-danger',
                                    ];
                                    $statusText = [
                                        'pending' => 'Chưa thanh toán',
                                        'paid' => 'Thành công',
                                        'failed' => 'Thất bại',
                                    ];
                                @endphp
                                <span class="{{ $statusColors[$order->payment_status] }} p-2">
                                    {{ $statusText[$order->payment_status] }}
                                </span>
                            </td>
                            <td>{{ $order->created_at->format('d/m/Y') }}</td>
                            <td>{{ $order->staff->fullname ?? 'Chưa có' }}</td>
                            <td>
                                <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-lg">Xem</a>
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
