@extends('layouts.admin.main')

@section('content')
<div class="container mt-4" style="max-width: 95%; min-width: 1200px;">
    <h2 class="mb-4">Chỉnh Sửa Danh Mục</h2>
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
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT') 

                <div class="mb-3">
                    <label for="name" class="form-label">Tên danh mục</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
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
