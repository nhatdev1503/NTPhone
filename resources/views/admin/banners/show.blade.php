@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center gap-2 mb-6">
            <i class="bi bi-eye text-blue-400 text-2xl"></i>
            <h1 class="text-2xl font-bold text-blue-400">Xem Banner</h1>
        </div>

        @if ($banner)
            <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 overflow-hidden">
                <div class="relative">
                    <img src="{{ asset('storage/' . $banner->image) }}" 
                         class="w-full h-64 object-cover" 
                         alt="{{ $banner->title }}">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h2 class="text-2xl font-bold mb-2">{{ $banner->title ?? 'Không có tiêu đề' }}</h2>
                        <div class="flex items-center gap-2 text-gray-300">
                            <i class="bi bi-link-45deg"></i>
                            <a href="{{ $banner->product_url }}" class="text-blue-400 hover:text-blue-300 transition-colors">
                                {{ $banner->product_name }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex items-center gap-4">
                        <a href="{{ route('banners.index') }}" 
                           class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                            <i class="bi bi-arrow-left"></i> Quay lại
                        </a>
                        <a href="{{ route('banners.edit', $banner->id) }}" 
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                            <i class="bi bi-pencil"></i> Chỉnh sửa
                        </a>
                    </div>
                </div>
            </div>
        @else
            <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-8 text-center">
                <i class="bi bi-exclamation-circle text-4xl text-gray-600 mb-4"></i>
                <p class="text-gray-400 mb-6">Không tìm thấy banner nào.</p>
                <a href="{{ route('banners.index') }}" 
                   class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors inline-flex">
                    <i class="bi bi-arrow-left"></i> Quay lại Danh sách
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
