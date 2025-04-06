@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center gap-2 mb-6">
            <i class="bi bi-palette text-blue-400 text-2xl"></i>
            <h1 class="text-2xl font-bold text-blue-400">Quản lý Màu sắc & Dung lượng</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Quản lý màu sắc -->
            <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
                <div class="flex items-center gap-2 mb-6">
                    <i class="bi bi-palette-fill text-blue-400"></i>
                    <h2 class="text-xl font-semibold text-blue-400">Danh sách Màu sắc</h2>
                </div>

                <!-- Form thêm màu sắc -->
                <form method="POST" action="{{ route('colors.store') }}" class="mb-6 space-y-4">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Tên màu</label>
                            <input type="text" name="name" id="name" 
                                   class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Nhập tên màu" value="{{ old('name') }}">
                        </div>
                        <div>
                            <label for="hax_code" class="block text-sm font-medium text-gray-300 mb-2">Mã màu</label>
                            <input type="text" name="hax_code" id="hax_code" 
                                   class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Nhập mã màu" value="{{ old('hax_code') }}">
                        </div>
                    </div>
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                        <i class="bi bi-plus-lg"></i> Thêm màu
                    </button>
                </form>

                @if ($errors->has('name') || $errors->has('hax_code'))
                    <div class="bg-red-500/10 border border-red-500/20 text-red-400 p-4 rounded-lg mb-6">
                        @if ($errors->has('name'))
                            <p>{{ $errors->first('name') }}</p>
                        @endif
                        @if ($errors->has('hax_code'))
                            <p>{{ $errors->first('hax_code') }}</p>
                        @endif
                    </div>
                @endif

                <!-- Danh sách màu sắc -->
                <div class="space-y-3">
                    @foreach ($colors as $color)
                        <div class="bg-gray-700 rounded-lg p-4 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-8 h-8 rounded-full border-2 border-gray-600" style="background-color: {{ $color->hax_code }};"></div>
                                <div>
                                    <h3 class="font-medium text-white">{{ $color->name }}</h3>
                                    <p class="text-sm text-gray-400">{{ $color->hax_code }}</p>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('colors.destroy', $color->id) }}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-300 transition-colors">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Quản lý dung lượng -->
            <div class="bg-gray-800 rounded-xl shadow-lg border border-gray-700 p-6">
                <div class="flex items-center gap-2 mb-6">
                    <i class="bi bi-device-hdd text-blue-400"></i>
                    <h2 class="text-xl font-semibold text-blue-400">Danh sách Dung lượng</h2>
                </div>

                <!-- Form thêm dung lượng -->
                <form method="POST" action="{{ route('storages.store') }}" class="mb-6">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label for="size" class="block text-sm font-medium text-gray-300 mb-2">Dung lượng</label>
                            <input type="text" name="size" id="size" 
                                   class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Nhập dung lượng" value="{{ old('size') }}">
                        </div>
                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                            <i class="bi bi-plus-lg"></i> Thêm dung lượng
                        </button>
                    </div>
                </form>

                @if ($errors->has('size'))
                    <div class="bg-red-500/10 border border-red-500/20 text-red-400 p-4 rounded-lg mb-6">
                        {{ $errors->first('size') }}
                    </div>
                @endif

                <!-- Danh sách dung lượng -->
                <div class="space-y-3">
                    @foreach ($storages as $storage)
                        <div class="bg-gray-700 rounded-lg p-4 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <i class="bi bi-device-hdd text-blue-400"></i>
                                <h3 class="font-medium text-white">{{ $storage->size }}</h3>
                            </div>
                            <form method="POST" action="{{ route('storages.destroy', $storage->id) }}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-300 transition-colors">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
