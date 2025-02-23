@extends('layouts.main')

@section('content')
<div class="container">
    <h2 class="my-4">Chỉnh sửa tài khoản</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="fullname" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="fullname" name="fullname" value="{{ old('fullname', $user->fullname) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Vai trò</label>
            <select class="form-control" id="role" name="role" required>
                <option value="staff" {{ old('role', $user->role) == 'staff' ? 'selected' : '' }}>Nhân viên</option>
                <option value="customer" {{ old('role', $user->role) == 'customer' ? 'selected' : '' }}>Khách hàng</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Trạng thái</label>
            <select class="form-control" id="status" name="status">
                <option value="active" {{ old('status', $user->status) == 'active' ? 'selected' : '' }}>Hoạt động</option>
                <option value="inactive" {{ old('status', $user->status) == 'inactive' ? 'selected' : '' }}>Ngừng hoạt động</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
