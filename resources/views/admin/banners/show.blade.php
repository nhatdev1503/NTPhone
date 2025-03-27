@extends('layouts.admin.main')

@section('content')
<div class="container mt-5" style="max-width: 800px;">
    <h2 class="mb-4 display-6">Xem Banner</h2>
    <div class="card shadow-lg">
        @if ($banner)
            <img src="{{ asset('storage/' . $banner->image) }}" class="card-img-top" alt="{{ $banner->title }}" style="max-height: 400px; object-fit: cover;">
            <div class="card-body text-center">
                <h2 class="card-title mb-4">{{ $banner->title ?? 'Không có tiêu đề' }}</h2>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('banners.index') }}" class="btn btn-secondary">Danh sách</a>
                    <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-primary">Chỉnh sửa</a>
                </div>
            </div>
        @else
            <p class="text-center text-muted py-5">Không tìm thấy banner nào.</p>
            <div class="text-center">
                <a href="{{ route('banners.index') }}" class="btn btn-secondary">Quay lại Danh sách</a>
            </div>
        @endif
    </div>
</div>
@endsection
