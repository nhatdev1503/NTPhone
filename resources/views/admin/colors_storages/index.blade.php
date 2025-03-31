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
                    <input type="text" name="name" placeholder="Nhập màu sắc..." class="p-2 border rounded w-full"
                        value="{{ old('name') }}">
                    <input type="text" name="hax_code" placeholder="Nhập mã màu..." class="p-2 border rounded w-full"
                        value="{{ old('hax_code') }}">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        Thêm
                    </button>
                </form>
                @if ($errors->has('name'))
                    <div class="validate_error" style="margin-top:-20px">
                        {{ $errors->first('name') }}
                    </div>
                @elseif ($errors->has('hax_code'))
                    <div class="validate_error" style="margin-top:-20px">
                        {{ $errors->first('hax_code') }}
                    </div>
                @endif

                <!-- Danh sách màu sắc -->
                <ul class="space-y-2">
                    @foreach ($colors as $color)
                        <li class="p-2 bg-white rounded shadow flex justify-between items-center">
                            <div class="flex items-center space-x-2">
                                <span>{{ $color->name }}</span>
                                <div class="w-5 h-5 rounded-full border" style="background-color: {{ $color->hax_code }};"></div>
                                <div>{{ $color->hax_code }}</div>
                            </div>
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
                    <input type="text" name="size" placeholder="Nhập dung lượng..." class="p-2 border rounded w-full"
                        value="{{ old('size') }}">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        Thêm
                    </button>
                </form>
                @if ($errors->has('size'))
                    <div class="validate_error" style="margin-top:-20px">
                        {{ $errors->first('size') }}
                    </div>
                @endif

                <!-- Danh sách dung lượng -->
                <ul class="space-y-2">
                    @foreach ($storages as $storage)
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
