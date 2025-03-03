@extends('layouts.main')

@section('content')
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
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label>Hình ảnh:</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
@endsection
