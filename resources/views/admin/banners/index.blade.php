@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="mb-4">Quản lý Banner</h2>
            <a href="{{ route('banners.create') }}" class="btn btn-success">+ Thêm Banner</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row">
            @foreach ($banners as $banner)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('storage/' . $banner->image) }}" class="card-img-top" alt="{{ $banner->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $banner->title ?? 'Không có tiêu đề' }}</h5>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-warning btn-sm">✏ Sửa</a>
                                <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">🗑 Xóa</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
         <!-- Hiển thị phân trang -->
        <div class="d-flex justify-content-center mt-4">
            {{ $banners->links('pagination::bootstrap-5') }}
        </div>
        @if ($banners->isEmpty())
            <p class="text-center text-muted">Chưa có banner nào.</p>
        @endif
    </div>
@endsection
