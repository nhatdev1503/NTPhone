@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Quản Lý Danh Mục</h2>

    <!-- Hiển thị thông báo -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

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

    <!-- Danh sách danh mục -->
    <div class="card">
        <div class="card-header">Danh Sách Danh Mục</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><strong>{{ $category->name }}</strong></td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc muốn xóa?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Hiển thị phân trang -->
<div class="d-flex justify-content-center mt-3">
    {{ $categories->links('pagination::bootstrap-5') }}
</div>
</div>
@endsection
