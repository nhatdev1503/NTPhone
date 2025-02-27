@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">Thêm sản phẩm mới</h3>
                </div>
                <div class="card-body">
                    
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="category_id" class="form-label">Danh mục</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-list"></i></span>
                                    <input type="number" class="form-control" id="category_id" name="category_id" required>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Tên sản phẩm</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-tag"></i></span>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả sản phẩm</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label">Ảnh sản phẩm</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="mini_image" class="form-label">Ảnh mini</label>
                                <input type="file" class="form-control" id="mini_image" name="mini_image">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="screen" class="form-label">Màn hình</label>
                                <input type="text" class="form-control" id="screen" name="screen">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="os" class="form-label">Hệ điều hành</label>
                                <input type="text" class="form-control" id="os" name="os">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="rear_camera" class="form-label">Camera sau</label>
                                <input type="text" class="form-control" id="rear_camera" name="rear_camera">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="front_camera" class="form-label">Camera trước</label>
                                <input type="text" class="form-control" id="front_camera" name="front_camera">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cpu" class="form-label">CPU</label>
                                <input type="text" class="form-control" id="cpu" name="cpu">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="ram" class="form-label">RAM</label>
                                <input type="text" class="form-control" id="ram" name="ram">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="battery" class="form-label">Dung lượng Pin</label>
                            <input type="text" class="form-control" id="battery" name="battery">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fa fa-arrow-right"></i> Tiếp tục
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- FontAwesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection
