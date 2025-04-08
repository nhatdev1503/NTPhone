@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center gap-2 mb-6">
            <i class="bi bi-plus-circle text-blue-400 text-2xl"></i>
            <h1 class="text-2xl font-bold text-blue-400">Thêm mới Danh Mục</h1>
        </div>

        @if ($errors->any())
            <div class="bg-red-500/10 border border-red-500/20 text-red-400 p-4 rounded-lg mb-6">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Tên danh mục</label>
                        <input type="text" name="name" id="name" 
                               class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="Nhập tên danh mục" required>
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-300 mb-2">Ảnh danh mục</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="image" class="w-full flex flex-col items-center px-4 py-6 bg-gray-700 border-2 border-gray-600 border-dashed rounded-lg cursor-pointer hover:bg-gray-600 transition-colors">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <i class="bi bi-cloud-upload text-3xl text-gray-400 mb-2"></i>
                                    <p class="mb-2 text-sm text-gray-400">
                                        <span class="font-semibold">Click để tải ảnh</span> hoặc kéo thả
                                    </p>
                                    <p class="text-xs text-gray-400">PNG, JPG hoặc GIF (Tối đa 2MB)</p>
                                </div>
                                <input id="image" name="image" type="file" class="hidden" accept="image/*" required>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-300 mb-2">Mô tả</label>
                        <input type="text" name="description" id="description" 
                               class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="Nhập mô tả" required>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                        <i class="bi bi-check-lg"></i> Thêm
                    </button>
                    <a href="{{ route('categories.index') }}" class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                        <i class="bi bi-arrow-left"></i> Quay lại
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
