@extends('layouts.admin.main')

@section('content')
    <div class="container mt-4" style="max-width: 95%; min-width: 1200px;">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="mb-4 display-6">Quản lý Banner</h2>
            <a href="{{ route('banners.create') }}" class="btn btn-success">+ Thêm Banner</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Banner Đang Sử Dụng -->
        <h4 class="mb-3">Banner Đang Sử Dụng</h4>
        <ul class="list-group mb-4">
            @foreach ($banners->where('status', 'active') as $banner)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" class="rounded me-3"
                            style="width: 80px; height: 80px; object-fit: cover;">
                        <div>
                            <h6 class="mb-1">{{ $banner->title ?? 'Không có tiêu đề' }}</h6>
                            <small>Trạng thái: <span class="text-success">Đang hiển thị</span></small>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('banners.show', $banner->id) }}" class="btn btn-primary btn-sm">Xem</a>
                        <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('banners.status', $banner->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Bạn có chắc chắn muốn ngừng hiển thị banner này?');">Ngừng hiển thị</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>

        <!-- Danh Sách Tất Cả Banner -->
        <h4 class="mb-3">Danh Sách Banner Ngừng Hiển Thị</h4>
        <ul class="list-group">
            @foreach ($banners->where('status', 'inactive') as $banner)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}"
                                class="rounded me-3" style="width: 80px; height: 80px; object-fit: cover;">
                            <div>
                                <h6 class="mb-1">{{ $banner->title ?? 'Không có tiêu đề' }}</h6>
                                <small>Trạng thái: <span
                                        class="{{ $banner->status == 'active' ? 'text-success' : 'text-danger' }}">{{ $banner->status == 'active' ? 'Đang hiển thị' : 'Ngừng hiển thị' }}</span></small>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('banners.show', $banner->id) }}" class="btn btn-primary btn-sm">Xem</a>
                            <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('banners.status', $banner->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button type="submit"
                                    class="btn btn-sm {{ $banner->status == 'active' ? 'btn-danger' : 'btn-success' }}"
                                    onclick="return confirm('{{ $banner->status == 'active' ? 'Bạn có chắc chắn muốn ngừng banner này?' : 'Bạn có chắc chắn muốn sử dụng banner này?' }}');">
                                    {{ $banner->status == 'active' ? 'Ngừng hiển thị' : 'Hiển thị' }}
                                </button>
                            </form>
                            <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">🗑 Xóa</button>
                            </form>
                        </div>
                    </li>
            @endforeach
        </ul>

        <!-- Hiển thị phân trang -->
        <div class="d-flex justify-content-center mt-4">
            {{ $banners->links('pagination::bootstrap-5') }}
        </div>
        @if ($banners->isEmpty())
            <p class="text-center text-muted">Chưa có banner nào.</p>
        @endif
    </div>
@endsection
