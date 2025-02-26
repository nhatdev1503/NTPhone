@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Chỉnh Sửa Danh Mục</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Laravel yêu cầu phương thức PUT/PATCH để cập nhật -->

                <div class="mb-3">
                    <label for="name" class="form-label">Tên danh mục</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Mô tả</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ $category->description }}">
                </div>

                <button type="submit" class="btn btn-success">Cập Nhật</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Quay lại</a>
            </form>
        </div>
    </div>
</div>
@endsection
