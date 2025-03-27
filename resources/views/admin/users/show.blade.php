@extends('layouts.admin.main')

@section('content')
    <div class="container mt-5" style="max-width: 95%; min-width: 1200px;">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="row">
                            <!-- Avatar -->
                            <div class="col-md-4 text-center">
                                <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/default-avatar.png') }}"
                                    alt="Avatar" class="img-fluid rounded-circle shadow-lg"
                                    style="width: 150px; height: 150px;">
                            </div>

                            <!-- User Information -->
                            <div class="col-md-8">
                                <h4 class="mb-3">Thông tin người dùng</h4>
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Họ và tên:</strong> {{ $user->fullname }}</li>
                                    <li class="list-group-item"><strong>Tên đăng nhập:</strong> {{ $user->username }}</li>
                                    <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                                    <li class="list-group-item"><strong>Số điện thoại:</strong> {{ $user->phone }}</li>
                                    <li class="list-group-item"><strong>Địa chỉ:</strong> {{ $user->address }}</li>
                                    <li class="list-group-item"><strong>Vai trò:</strong>
                                        <span class="badge badge-{{ $user->role == 'admin' ? 'danger' : 'primary' }}">
                                            {{ ucfirst($user->role) }}
                                        </span>
                                    </li>
                                    <li class="list-group-item"><strong>Trạng thái:</strong>
                                        <span class="badge badge-{{ $user->status == 'active' ? 'success' : 'danger' }}">
                                            {{ $user->status == 'active' ? 'Đang hoạt động' : 'Ngừng hoạt động' }}
                                        </span>
                                    </li>
                                    <li class="list-group-item"><strong>Lí do {{ $user->status == 'active' ? 'Mở' : 'Khóa' }}:</strong>
                                        <span class="">
                                            {{ $user->block_reason }}
                                        </span>
                                    </li>
                                    
                                </ul>

                                <!-- Action Buttons -->
                                <div class="mt-3">
                                    <a href="{{ route('users.index') }}" class="btn btn-warning">Danh sách
                                    </a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Chỉnh sửa
                                    </a>
                                </div>
                            </div>
                        </div> <!-- End Row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
