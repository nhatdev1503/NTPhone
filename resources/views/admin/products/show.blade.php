@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">{{ $product->name }}</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Hình ảnh sản phẩm -->
                    <div class="col-md-4 text-center">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="img-fluid rounded shadow">
                        @else
                            <div class="text-muted">Không có ảnh</div>
                        @endif
                    </div>

                    <!-- Thông tin sản phẩm -->
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>Danh mục:</th>
                                    <td>
                                        <h3 class="text-primary fw-bold">
                                            {{ $product->category->name ?? 'Không có danh mục' }}</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Mô tả:</th>
                                    <td>{{ $product->description }}</td>
                                </tr>
                                <tr>
                                    <th>Các màu đang được bán:</th>
                                    <td class="text-danger fw-bold">
                                        {{ $product->variants->pluck('color')->unique()->join(', ') ?: 'Không có biến thể' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Dung lượng máy đang được bán:</th>
                                    <td class="text-success fw-bold">
                                        {{ $product->variants->pluck('storage')->unique()->join(', ') ?: 'Không có biến thể' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tổng số lượng:</th>
                                    <td class="fw-bold">
                                        {{ $product->variants->sum('stock') }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Thông số kỹ thuật -->
                <div class="mt-4">
                    <h5 class="text-primary">Thông số kỹ thuật</h5>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Màn hình</th>
                                <td>{{ $product->screen }}</td>
                            </tr>
                            <tr>
                                <th>Hệ điều hành</th>
                                <td>{{ $product->os }}</td>
                            </tr>
                            <tr>
                                <th>Camera sau</th>
                                <td>{{ $product->rear_camera }}</td>
                            </tr>
                            <tr>
                                <th>Camera trước</th>
                                <td>{{ $product->front_camera }}</td>
                            </tr>
                            <tr>
                                <th>Vi xử lý</th>
                                <td>{{ $product->cpu }}</td>
                            </tr>
                            <tr>
                                <th>RAM</th>
                                <td>{{ $product->ram }}</td>
                            </tr>
                            <tr>
                                <th>Pin</th>
                                <td>{{ $product->battery }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer text-end">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                    <i class="fa fa-arrow-left"></i> Danh sách
                </a>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">
                    <i class="fa fa-edit"></i> Chỉnh sửa
                </a>
            </div>
        </div>
    </div>
@endsection
