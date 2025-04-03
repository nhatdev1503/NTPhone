@extends('layouts.admin.main')

@section('content')
    <div class="container" style="max-width: 95%; min-width: 1200px;">
        <h2 class="my-4 text-center fw-bold display-6">Quản lý tài khoản</h2>

        <!-- Thêm nút "Thêm tài khoản" -->
        <div class="mb-3">
            <a href="{{ route('users.create') }}" class="btn btn-success">Thêm tài khoản</a>
        </div>

        <!-- Form lọc theo vai trò & trạng thái -->
        <form action="{{ route('users.index') }}" method="GET" class="mb-3">
            <div class="row">
                <div class="col-md-4">
                    <select name="role" class="form-control">
                        <option value="">-- Tất cả vai trò --</option>
                        <option value="staff" {{ request('role') == 'staff' ? 'selected' : '' }}>Nhân viên</option>
                        <option value="customer" {{ request('role') == 'customer' ? 'selected' : '' }}>Khách hàng</option>
                        <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="status" class="form-control">
                        <option value="">-- Tất cả trạng thái --</option>
                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Hoạt động</option>
                        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Ngừng hoạt động
                        </option>
                    </select>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Lọc</button>
                </div>
            </div>
        </form>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="alert alert-info">
            Hiển thị {{ $users->count() }} tài khoản trên tổng số {{ $users->total() }} tài khoản.
        </div>
        <!-- Bảng danh sách tài khoản -->
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td>
                            <span class="badge {{ $user->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                {{ $user->status == 'active' ? 'Hoạt động' : 'Ngừng hoạt động' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-info">
                                Xem
                            </a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">
                                Sửa
                            </a>
                            @if ($user->role != 'admin')
                                <button type="button"
                                    class="btn btn-sm {{ $user->status == 'active' ? 'btn-danger' : 'btn-success' }}"
                                    data-bs-toggle="modal" data-bs-target="#confirmModal"
                                    data-user-id="{{ $user->id }}" data-user-status="{{ $user->status }}"
                                    onclick="setUserData(this)">
                                    {{ $user->status == 'active' ? 'Khóa' : '-Mở-' }}
                                </button>
                            @endif
                            <!-- Modal -->
                            <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmModalLabel">Xác nhận</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('users.destroy', 'USER_ID') }}" method="POST"
                                                id="confirmForm">
                                                @csrf
                                                @method('PUT')
                                                <div id="modalBodyContent"></div>
                                                <!-- Nội dung động sẽ được thêm vào đây -->
                                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Hủy</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>

        <!-- Hiển thị phân trang -->
        {{ $users->links() }}
    </div>
    <script>
        function setUserData(button) {
            // Lấy dữ liệu từ nút đã nhấn
            var userId = button.getAttribute('data-user-id');
            var userStatus = button.getAttribute('data-user-status');

            // Cập nhật URL trong form (route có chứa user_id)
            var form = document.getElementById('confirmForm');
            form.action = form.action.replace('USER_ID', userId);

            // Lấy phần modal body content
            var modalBodyContent = document.getElementById('modalBodyContent');

            // Kiểm tra trạng thái người dùng để thay đổi nội dung modal
            if (userStatus == 'active') {
                // Nếu tài khoản đang hoạt động, hiển thị yêu cầu khóa tài khoản
                document.getElementById('confirmModalLabel').textContent = "Xác nhận Khóa Tài Khoản";
                modalBodyContent.innerHTML = `
            <div class="mb-3">
                <label for="reason" class="form-label">Lý do</label>
                <textarea class="form-control" id="reason" name="block_reason" rows="3" required></textarea>
            </div>
        `;
            } else {
                // Nếu tài khoản bị khóa, hiển thị yêu cầu mở khóa tài khoản
                document.getElementById('confirmModalLabel').textContent = "Xác nhận Mở Khóa Tài Khoản";
                modalBodyContent.innerHTML = `
            <div class="alert alert-warning" role="alert">
                Bạn đang mở khóa tài khoản này. Không cần nhập lý do.
            </div>
        `;
            }
        }
    </script>
@endsection
