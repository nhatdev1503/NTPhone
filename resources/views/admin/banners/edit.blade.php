@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Chỉnh sửa Banner</h2>

        <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="title">Tiêu đề:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $banner->title) }}">
            </div>

            <div class="form-group mb-3">
                <label>Hình ảnh hiện tại:</label>
                <br>
                <img src="{{ asset('storage/' . $banner->image) }}" width="150" class="mb-3 rounded">
            </div>

            <div class="form-group mb-3">
                <label for="image">Chọn ảnh mới (nếu muốn thay đổi):</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Cập nhật</button>
            <a href="{{ route('banners.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
@endsection
