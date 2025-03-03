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

        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="fullname" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="fullname" name="fullname"
                    value="{{ old('fullname', $user->fullname) }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email"
                    value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="address" name="address"
                    value="{{ old('address', $user->address) }}" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone"
                    value="{{ old('phone', $user->phone) }}" required>
            </div>
            @if ($user->role != 'admin')
                <div class="mb-3">
                    <label for="role" class="form-label">Vai trò</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="staff" {{ old('role', $user->role) == 'staff' ? 'selected' : '' }}>Nhân viên
                        </option>
                        <option value="customer" {{ old('role', $user->role) == 'customer' ? 'selected' : '' }}>Khách hàng
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Trạng thái</label>
                    <select class="form-control" id="status" name="status">
                        <option value="active" {{ old('status', $user->status) == 'active' ? 'selected' : '' }}>Hoạt động
                        </option>
                        <option value="inactive" {{ old('status', $user->status) == 'inactive' ? 'selected' : '' }}>Ngừng
                            hoạt động</option>
                    </select>
                </div>
            @endif


            <div class="mb-3">
                <label for="avatar" class="form-label">Ảnh đại diện</label>
                @if ($user->avatar)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="img-thumbnail"
                            width="100">
                    </div>
                @endif
                <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
            </div>

            <button type="submit" class="btn btn-success">Cập nhật</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
@endsection
