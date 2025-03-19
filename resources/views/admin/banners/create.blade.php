@extends('layouts.admin.main')

@section('content')
<div class="container mt-4" style="max-width: 95%; min-width: 1200px;">
        <h2>Thêm Banner</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tiêu đề:</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Hình ảnh:</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Lưu</button>
        </form>
    </div>
@endsection
