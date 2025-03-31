@extends('layouts.admin.main')

@section('content')
    <div class="container mt-4" style="max-width: 95%; min-width: 1200px;">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        @if ($product->image)
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                class="img-fluid rounded shadow mb-3" width="250">
                        @else
                            <div class="text-muted">Không có ảnh</div>
                        @endif

                        <div class="d-flex justify-content-center flex-wrap gap-2">
                            @foreach ($product->images->take(4) as $image)
                                <div class="p-1">
                                    <img src="{{ asset($image->mini_image) }}" alt="Ảnh mini"
                                        class="rounded shadow-sm border" width="80" height="100">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>Tên:</th>
                                    <td><span class="fw-bold text-dark fs-5" >{{ $product->name }}</span></td>
                                </tr>
                                <tr>
                                    <th>Trạng thái:</th>
                                    <td>
                                        <span
                                            class="badge bg-{{ $product->status == 'active' && $product->category->status == 'active' ? 'success' : 'danger' }}">
                                            {{ $product->status == 'active' && $product->category->status == 'active' ? 'Đang bán' : 'Ngừng bán' }}
                                        </span>
                                    </td>
                                </tr>

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
                                    <td class="">
                                        {{ $product->variants->pluck('color')->unique()->join(', ') ?: 'Không có biến thể' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Dung lượng máy đang được bán:</th>
                                    <td class="">
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
                    <h3 class="mb-2" style="font-size:larger">Thông số kỹ thuật</h3>
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
                            <tr>
                                <th>Giá cơ bản</th>
                                <td>{{ $product->base_price }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Danh sách biến thể -->
                <div class="mt-4">
                    <h3 class="mb-2" style="font-size:larger">Danh sách biến thể: </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Màu sắc</th>
                                    <th>Dung lượng</th>
                                    <th>Giá gốc</th>
                                    <th>Giá giảm</th>
                                    <th>Số lượng</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product->variants as $index => $variant)
                                    <tr class="text-center" data-id="{{ $variant->id }}">
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            {{ $variant->color }}
                                        </td>
                                        <td>
                                            {{ $variant->storage }}
                                        </td>
                                        <td>
                                            {{ $variant->origin_price }}
                                        </td>
                                        <td>
                                            {{ $variant->price }}
                                        </td>
                                        <td>
                                            {{ $variant->stock }}
                                        </td>
                                        <td>
                                            {{ $variant->created_at->format('d/m/Y') }}
                                        </td>
                                        <td>
                                            {{ $variant->updated_at->format('d/m/Y') }}
                                        </td>
                                        <td>
                                            @php
                                                $isActive =
                                                    $product->category->status === 'active' &&
                                                    $product->status === 'active' &&
                                                    $variant->status === 'active';
                                            @endphp

                                            <span
                                                class="btn btn-{{ $isActive ? 'primary' : 'danger' }}">{{ $isActive ? 'Đang bán' : 'Ngừng bán' }}</span>
                                        </td>

                                    </tr>
                                @endforeach
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
    </div>
    </div>
    </div>
    </div>
@endsection
