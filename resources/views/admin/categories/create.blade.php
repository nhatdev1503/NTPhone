@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Thêm mới danh mục</h2>

    <!-- Form thêm danh mục -->
    <div class="card mb-4">
        <div class="card-header">Thêm Danh Mục</div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Tên danh mục</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên danh mục" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Mô tả</label>
                    <input type="text" name="description" id="description" class="form-control" placeholder="Nhập mô tả">
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>

   
</div>
@endsection
