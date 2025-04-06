@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <i class="bi bi-grid text-blue-400 text-2xl"></i>
                <h1 class="text-2xl font-bold text-blue-400">Quản lý Danh Mục</h1>
            </div>
            <a href="{{ route('categories.create') }}" 
               class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                <i class="bi bi-plus-lg"></i> Thêm mới
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20 text-green-400 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-700/50">
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">STT</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Tên danh mục</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Ảnh</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Mô tả</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Trạng thái</th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Hành động</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        @foreach($categories as $category)
                            <tr class="hover:bg-gray-700/30 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">
                                    <span class="font-medium text-white">{{ $category->name }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset($category->image) }}" 
                                         alt="{{ $category->name }}" 
                                         class="w-12 h-12 rounded-lg object-cover">
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $category->description }}</td>
                                <td class="px-6 py-4">
                                    @if ($category->status === 'active')
                                        <span class="px-2 py-1 text-xs font-medium bg-green-500/10 text-green-400 rounded-full">
                                            Hoạt động
                                        </span>
                                    @else
                                        <span class="px-2 py-1 text-xs font-medium bg-red-500/10 text-red-400 rounded-full">
                                            Ngừng hoạt động
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('categories.edit', $category->id) }}" 
                                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-lg text-sm flex items-center gap-1 transition-colors">
                                            <i class="bi bi-pencil"></i> Sửa
                                        </a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                    class="px-3 py-1 rounded-lg text-sm flex items-center gap-1 transition-colors {{ $category->status == 'active' ? 'bg-red-500 hover:bg-red-600' : 'bg-green-500 hover:bg-green-600' }} text-white"
                                                    onclick="return confirm('{{ $category->status == 'active' ? 'Bạn có chắc chắn muốn vô hiệu hóa danh mục này?' : 'Bạn có chắc chắn muốn mở khóa danh mục này?' }}')">
                                                <i class="bi {{ $category->status == 'active' ? 'bi-lock' : 'bi-unlock' }}"></i>
                                                {{ $category->status == 'active' ? 'Khóa' : 'Mở' }}
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
