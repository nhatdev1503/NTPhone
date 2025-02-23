@extends('layouts.main')

@section('content')
<div class="container">
    <h2 class="my-4">Quản lý tài khoản</h2>

    <!-- Thêm nút "Thêm tài khoản" -->
    <div class="mb-3">
        <a href="{{ route('admin.users.create') }}" class="btn btn-success">Thêm tài khoản</a>
    </div>

    <!-- Form lọc theo vai trò & trạng thái -->
    <form action="{{ route('admin.users.index') }}" method="GET" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <select name="role" class="form-control">
                    <option value="">-- Tất cả vai trò --</option>
                    <option value="staff" {{ request('role') == 'staff' ? 'selected' : '' }}>Nhân viên</option>
                    <option value="customer" {{ request('role') == 'customer' ? 'selected' : '' }}>Khách hàng</option>
                </select>
            </div>
            <div class="col-md-4">
                <select name="status" class="form-control">
                    <option value="">-- Tất cả trạng thái --</option>
                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Hoạt động</option>
                    <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Ngừng hoạt động</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Lọc</button>
            </div>
        </div>
    </form>

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
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->role) }}</td>
                    <td>
                        <span class="badge {{ $user->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                            {{ $user->status == 'active' ? 'Hoạt động' : 'Ngừng hoạt động' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Hiển thị phân trang -->
    {{ $users->links() }}
</div>
@endsection
