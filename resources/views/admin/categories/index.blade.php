@extends('layouts.admin.main')

@section('content')
<div class="container mt-4" style="max-width: 95%; min-width: 1200px;">
    <h2 class="mb-4">Quản Lý Danh Mục</h2>

    <!-- Hiển thị thông báo -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="col-md-6 text-start mb-3">
        <a href="{{ route('categories.create') }}" class="btn btn-success">
            <i class="fa fa-plus"></i> Thêm mới
        </a>
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
                        <th>Trạng thái</th>
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
                                @if ($category->status === 'active')
                                    <span class="badge bg-success">Hoạt động</span>
                                @else
                                    <span class="badge bg-danger">Ngừng hoạt động</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">
                                    Sửa
                                </a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit"
                                        class="btn btn-sm {{ $category->status == 'active' ? 'btn-danger' : 'btn-success' }}"
                                        onclick="return confirm('{{ $category->status == 'active' ? 'Bạn có chắc chắn muốn vô hiệu hóa danh mục này?' : 'Bạn có chắc chắn muốn mở khóa danh mục này?' }}')">
                                        {{ $category->status == 'active' ? 'Khóa' : '-Mở-' }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Hiển thị phân trang -->
</div>
@endsection
