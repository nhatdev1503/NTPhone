@extends('layouts.admin.main')

@section('content')
<div class="container mt-4" style="max-width: 95%; min-width: 1200px;">
    <h2 class="mb-4 display-6">Chỉnh sửa danh mục</h2>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') 

                <div class="mb-3">
                    <label for="name" class="form-label">Tên danh mục</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Ảnh danh mục</label>
                    <input type="file" name="image" class="form-control">
                    <img src="{{ asset($category->image) }}" alt="Ảnh danh mục" class="mt-2 img-thumbnail"
                    width="120" height="150">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Mô tả</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ $category->description }}" required>
                </div>

                <button type="submit" class="btn btn-success">Cập Nhật</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Quay lại</a>
            </form>
        </div>
    </div>
</div>
@endsection
