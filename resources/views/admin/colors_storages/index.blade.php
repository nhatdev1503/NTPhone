@extends('layouts.admin.main')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Quản lý Màu sắc & Dung lượng</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Quản lý màu sắc -->
        <div class="bg-gray-100 p-4 rounded-lg">
            <h3 class="text-xl font-semibold mb-3">Danh sách Màu sắc</h3>
            
            <!-- Form thêm màu sắc -->
            <form method="POST" action="{{ route('colors.store') }}" class="mb-4 flex space-x-2">
                @csrf
                <input type="text" name="name" placeholder="Nhập màu sắc..." required 
                    class="p-2 border rounded w-full">
                    <input type="text" name="hax_code" placeholder="Nhập mã màu..." required 
                    class="p-2 border rounded w-full">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Thêm
                </button>
            </form>

            <!-- Danh sách màu sắc -->
            <ul class="space-y-2">
                @foreach($colors as $color)
                    <li class="p-2 bg-white rounded shadow flex justify-between items-center">
                        <span>{{ $color->name }}</span>
                        <form method="POST" action="{{ route('colors.destroy', $color->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Xóa</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Quản lý dung lượng -->
        <div class="bg-gray-100 p-4 rounded-lg">
            <h3 class="text-xl font-semibold mb-3">Danh sách Dung lượng</h3>

            <!-- Form thêm dung lượng -->
            <form method="POST" action="{{ route('storages.store') }}" class="mb-4 flex space-x-2">
                @csrf
                <input type="text" name="size" placeholder="Nhập dung lượng..." required 
                    class="p-2 border rounded w-full">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Thêm
                </button>
            </form>

            <!-- Danh sách dung lượng -->
            <ul class="space-y-2">
                @foreach($storages as $storage)
                    <li class="p-2 bg-white rounded shadow flex justify-between items-center">
                        <span>{{ $storage->size }}</span>
                        <form method="POST" action="{{ route('storages.destroy', $storage->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Xóa</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
