@extends('layouts.admin.main')

@section('content')
    <div class="container mt-4" style="max-width: 95%; min-width: 1200px;">
        <h2 class="mb-4 display-6">Thêm mới danh mục</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Form thêm danh mục -->
        <div class="card mb-4">
            <div class="card-header">Thêm Danh Mục</div>
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên danh mục</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Nhập tên danh mục" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Ảnh danh mục</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <input type="text" name="description" id="description" class="form-control"
                            placeholder="Nhập mô tả" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <a href="{{ route('categories.index') }} " class="btn btn-secondary">Danh sách</a>
                </form>
            </div>
        </div>


    </div>
@endsection
