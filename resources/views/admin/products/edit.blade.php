@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-warning text-white">
            <h3 class="mb-0">Chỉnh sửa sản phẩm</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Cột trái: Thông tin cơ bản -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Danh mục</label>
                            <select name="category_id" class="form-select">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" 
                                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Mô tả</label>
                            <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Ảnh sản phẩm</label>
                            <input type="file" name="image" class="form-control">
                            @if($product->image)
                                <img src="{{ asset('storage/'.$product->image) }}" alt="Ảnh sản phẩm" class="mt-2 img-thumbnail" width="120">
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Ảnh thu nhỏ (Mini Image)</label>
                            <input type="file" name="mini_image" class="form-control">
                            @if($product->mini_image)
                                <img src="{{ asset('storage/'.$product->mini_image) }}" alt="Ảnh thu nhỏ" class="mt-2 img-thumbnail" width="80">
                            @endif
                        </div>
                    </div>

                    <!-- Cột phải: Thông số kỹ thuật -->
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label fw-bold">Màn hình</label>
                            <input type="text" name="screen" class="form-control" value="{{ $product->screen }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Hệ điều hành</label>
                            <input type="text" name="os" class="form-control" value="{{ $product->os }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Camera sau</label>
                            <input type="text" name="rear_camera" class="form-control" value="{{ $product->rear_camera }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Camera trước</label>
                            <input type="text" name="front_camera" class="form-control" value="{{ $product->front_camera }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Vi xử lý</label>
                            <input type="text" name="cpu" class="form-control" value="{{ $product->cpu }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">RAM</label>
                            <input type="text" name="ram" class="form-control" value="{{ $product->ram }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Pin</label>
                            <input type="text" name="battery" class="form-control" value="{{ $product->battery }}">
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Lưu thay đổi
                    </button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Quay lại
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
