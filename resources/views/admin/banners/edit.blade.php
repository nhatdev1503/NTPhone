@extends('layouts.admin.main')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center gap-2 mb-6">
            <i class="bi bi-pencil-square text-blue-400 text-2xl"></i>
            <h1 class="text-2xl font-bold text-blue-400">Chỉnh sửa Banner</h1>
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

        <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-300">Tiêu đề:</label>
                    <input type="text" name="title" id="title" 
                           class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                           value="{{ old('title', $banner->title) }}"
                           placeholder="Nhập tiêu đề banner...">
                </div>

                <div class="space-y-2 relative">
                    <label class="block text-sm font-medium text-gray-300">Đường dẫn tới sản phẩm:</label>
                    <input type="text" name="product_name" id="product_name" 
                           class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                           placeholder="Nhập tên sản phẩm..." 
                           value="{{ old('product_name', $banner->product_name) }}">

                    <div id="searchResults" class="absolute left-0 w-full bg-gray-800 border border-gray-700 rounded-lg shadow-lg mt-1 hidden z-50">
                    </div>

                    <input type="hidden" name="product_url" id="product_url" 
                           value="{{ old('product_url', $banner->product_url) }}">
                </div>
            </div>

            <div class="space-y-4">
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-300">Hình ảnh hiện tại:</label>
                    <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                        <img src="{{ asset('storage/' . $banner->image) }}" 
                             class="w-full h-48 object-cover rounded-lg" 
                             alt="Banner hiện tại">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-300">Chọn ảnh mới (nếu muốn thay đổi):</label>
                    <div class="flex items-center justify-center w-full">
                        <label for="image" class="w-full flex flex-col items-center px-4 py-6 bg-gray-800 border-2 border-gray-700 border-dashed rounded-lg cursor-pointer hover:bg-gray-700 transition-colors">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="bi bi-cloud-upload text-3xl text-gray-400 mb-2"></i>
                                <p class="mb-2 text-sm text-gray-400">
                                    <span class="font-semibold">Click để tải ảnh</span> hoặc kéo thả
                                </p>
                                <p class="text-xs text-gray-400">PNG, JPG hoặc GIF (Tối đa 2MB)</p>
                            </div>
                            <input id="image" name="image" type="file" class="hidden" accept="image/*">
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                    <i class="bi bi-check-lg"></i> Cập nhật
                </button>
                <a href="{{ route('banners.index') }}" class="bg-gray-700 hover:bg-gray-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                    <i class="bi bi-arrow-left"></i> Quay lại
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const inputSearch = document.getElementById("product_name");
        const inputUrl = document.getElementById("product_url");
        const resultsDiv = document.getElementById("searchResults");

        inputSearch.addEventListener("input", function() {
            let query = inputSearch.value.trim();
            if (query.length < 2) {
                resultsDiv.innerHTML = "";
                resultsDiv.classList.add("hidden");
                return;
            }

            fetch(`/admin/api/product_url?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    resultsDiv.innerHTML = "";
                    if (data.length === 0) {
                        resultsDiv.classList.add("hidden");
                        return;
                    }

                    data.forEach(item => {
                        let div = document.createElement("div");
                        div.classList.add("p-3", "flex", "items-center", "gap-3",
                            "hover:bg-gray-700", "cursor-pointer", "transition-colors");

                        let img = document.createElement("img");
                        img.src = item.image;
                        img.alt = item.name;
                        img.classList.add("w-12", "h-12", "rounded-lg", "object-cover");

                        let span = document.createElement("span");
                        span.textContent = item.name;
                        span.classList.add("text-gray-300");

                        div.appendChild(img);
                        div.appendChild(span);

                        div.addEventListener("click", function() {
                            inputSearch.value = item.name;
                            inputUrl.value = item.url;
                            resultsDiv.innerHTML = "";
                            resultsDiv.classList.add("hidden");
                        });

                        resultsDiv.appendChild(div);
                    });

                    resultsDiv.classList.remove("hidden");
                })
                .catch(error => console.error("Lỗi khi tìm kiếm:", error));
        });

        document.addEventListener("mousedown", function(e) {
            if (!inputSearch.contains(e.target) && !resultsDiv.contains(e.target)) {
                resultsDiv.classList.add("hidden");
            }
        });
    });
</script>
@endsection
