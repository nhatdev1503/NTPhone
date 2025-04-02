@extends('layouts.admin.main')

@section('content')
    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-semibold mb-6">Danh Sách Bài Viết</h2>
        
        <!-- Thêm Bài Viết -->
        <a href="{{ route('posts.create') }}" class="inline-block mb-4 py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Thêm Bài Viết</a>

        <!-- Bảng Danh Sách Bài Viết -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full text-left table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-2 px-4 text-sm font-semibold text-gray-700">#</th>
                        <th class="py-2 px-4 text-sm font-semibold text-gray-700">Tiêu Đề</th>
                        <th class="py-2 px-4 text-sm font-semibold text-gray-700">Trạng Thái</th>
                        <th class="py-2 px-4 text-sm font-semibold text-gray-700">Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $index => $post)
                        <tr>
                            <td class="py-2 px-4">{{ $index + 1 }}</td>
                            <td class="py-2 px-4">{{ $post->title }}</td>
                            <td class="py-2 px-4">
                                <span class="badge {{ $post->status == 'published' ? 'bg-green-500' : 'bg-red-500' }}">
                                    {{ $post->status == 'published' ? 'Công khai' : 'Ẩn' }}
                                </span>
                            </td>
                            <td class="py-2 px-4">
                                <a href="{{ route('posts.edit', $post->id) }}" class="text-yellow-500 hover:text-yellow-700">Sửa</a> | 
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
