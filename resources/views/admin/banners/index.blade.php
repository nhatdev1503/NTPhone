@extends('layouts.admin.main')

@section('content')
    <div class="p-6 bg-gray-900 min-h-screen text-white">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-blue-400">Quản lý Banner</h1>
            <a href="{{ route('banners.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition-colors">
                <i class="bi bi-plus-lg"></i> Thêm Banner
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Banner đang hiển thị -->
        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6 mb-8">
            <div class="flex items-center gap-2 mb-4">
                <i class="bi bi-play-circle-fill text-green-400 text-xl"></i>
                <h2 class="text-xl font-semibold text-green-400">Banner đang hiển thị</h2>
            </div>
            
            <div class="grid grid-cols-1 gap-4">
                @foreach ($banners->where('status', 'active') as $banner)
                    <div class="bg-gray-700 rounded-lg p-4 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('storage/' . $banner->image) }}" 
                                 alt="{{ $banner->title }}" 
                                 class="rounded-lg"
                                 style="width: 240px; height: 80px; object-fit: cover;">
                            <div>
                                <h3 class="text-lg font-medium mb-1">{{ $banner->title ?? 'Không có tiêu đề' }}</h3>
                                <div class="flex items-center gap-2 text-sm text-gray-300">
                                    <span class="bg-green-500/20 text-green-400 px-2 py-1 rounded-full text-xs">Đang hiển thị</span>
                                    <span>•</span>
                                    <a href="{{ route('products.show',$banner->product_url)}}" class="text-blue-400 hover:text-blue-300">
                                        {{ $banner->product_name }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="{{ route('banners.show', $banner->id) }}" 
                               class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg transition-colors">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('banners.edit', $banner->id) }}" 
                               class="bg-yellow-500 hover:bg-yellow-600 text-white p-2 rounded-lg transition-colors">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Banner không hiển thị -->
        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
            <div class="flex items-center gap-2 mb-4">
                <i class="bi bi-pause-circle-fill text-red-400 text-xl"></i>
                <h2 class="text-xl font-semibold text-red-400">Banner không hiển thị</h2>
            </div>
            
            <div class="grid grid-cols-1 gap-4">
                @foreach ($banners->where('status', 'inactive') as $banner)
                    <div class="bg-gray-700 rounded-lg p-4 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('storage/' . $banner->image) }}" 
                                 alt="{{ $banner->title }}" 
                                 class="rounded-lg"
                                 style="width: 240px; height: 80px; object-fit: cover;">
                            <div>
                                <h3 class="text-lg font-medium mb-1">{{ $banner->title ?? 'Không có tiêu đề' }}</h3>
                                <div class="flex items-center gap-2 text-sm text-gray-300">
                                    <span class="bg-red-500/20 text-red-400 px-2 py-1 rounded-full text-xs">Không hiển thị</span>
                                    <span>•</span>
                                    <a href="{{ route('products.show',$banner->product_url)}}" class="text-blue-400 hover:text-blue-300">
                                        {{ $banner->product_name }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="{{ route('banners.show', $banner->id) }}" 
                               class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg transition-colors">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('banners.edit', $banner->id) }}" 
                               class="bg-yellow-500 hover:bg-yellow-600 text-white p-2 rounded-lg transition-colors">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('banners.status', $banner->id) }}" method="POST" class="inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" 
                                        class="bg-green-500 hover:bg-green-600 text-white p-2 rounded-lg transition-colors"
                                        onclick="return confirm('Bạn có chắc chắn muốn hiển thị banner này?');">
                                    <i class="bi bi-play-circle"></i>
                                </button>
                            </form>
                            <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Bạn có chắc chắn muốn xóa banner này?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg transition-colors">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex items-center justify-between">
            <p class="text-gray-400">
                Hiển thị <span class="font-medium text-white">{{ $banners->firstItem() }}</span> đến 
                <span class="font-medium text-white">{{ $banners->lastItem() }}</span> của 
                <span class="font-medium text-white">{{ $banners->total() }}</span> kết quả
            </p>
            <div class="text-white">
                {{ $banners->links() }}
            </div>
        </div>

        @if ($banners->isEmpty())
            <div class="text-center py-8">
                <i class="bi bi-image text-4xl text-gray-600 mb-2"></i>
                <p class="text-gray-400">Chưa có banner nào.</p>
            </div>
        @endif
    </div>
@endsection
