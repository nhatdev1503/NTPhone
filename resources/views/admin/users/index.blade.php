@extends('layouts.admin.main')

@section('content')
    <div class="container">
        <h2 class="my-4">Quản lý tài khoản</h2>

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
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-info"
                                title="Xem chi tiết">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning"
                                title="Chỉnh sửa" onclick="alert('Bạn muốn cập nhật thông tin người dùng?')">
                                <i class="fa fa-edit"></i>
                            </a>
                            @if ($user->role != 'admin')
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit"
                                        class="btn btn-sm {{ $user->status == 'active' ? 'btn-danger' : 'btn-success' }}"
                                        title="{{ $user->status == 'active' ? 'Khóa' : 'Mở Khóa' }}"
                                        onclick="return confirm('{{ $user->status == 'active' ? 'Bạn có chắc chắn muốn khóa tài khoản này?' : 'Bạn có chắc chắn muốn mở khóa tài khoản này?' }}')">
                                        <i class="fa {{ $user->status == 'active' ? 'fa-ban' : 'fa-check' }}"></i>
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Hiển thị phân trang -->
        {{ $users->links() }}
    </div>
@endsection
