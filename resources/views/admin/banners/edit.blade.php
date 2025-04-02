@extends('layouts.admin.main')

@section('content')
    <div class="container mt-4 max-w-lg">
        <h2 class="mb-4 text-xl font-semibold">Chỉnh sửa Banner</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block font-medium">Tiêu đề:</label>
                <input type="text" name="title" id="title" class="w-full border rounded px-3 py-2"
                    value="{{ old('title', $banner->title) }}">
            </div>

            <div class="relative">
                <label class="block font-medium">Đường dẫn tới sản phẩm:</label>
                <input type="text" name="product_name" id="product_name" class="w-full border rounded px-3 py-2"
                    placeholder="Nhập tên sản phẩm..." value="{{ old('product_name', $banner->product_name) }}">

                <!-- Danh sách gợi ý -->
                <div id="searchResults" class="absolute left-0 w-full bg-white border rounded shadow-md mt-1 hidden">
                </div>

                <!-- Input ẩn để lưu URL -->
                <input type="hidden" name="product_url" id="product_url" value="{{ old('product_url', $banner->product_url) }}>
            </div>

            <div class="text-center">
                <label class="block font-medium">Hình ảnh hiện tại:</label>
                <img src="{{ asset('storage/' . $banner->image) }}" class="mx-auto w-40 rounded">
            </div>

            <div>
                <label for="image" class="block font-medium">Chọn ảnh mới (nếu muốn thay đổi):</label>
                <input type="file" name="image" id="image" class="w-full border rounded px-3 py-2">
            </div>

            <div class="flex justify-between">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                    Cập nhật
                </button>
                <a href="{{ route('banners.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">
                    Quay lại
                </a>
            </div>
        </form>
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
                            div.classList.add("p-2", "flex", "items-center",
                                "hover:bg-gray-100", "cursor-pointer");

                            // Tạo ảnh sản phẩm
                            let img = document.createElement("img");
                            img.src = item.image;
                            img.alt = item.name;
                            img.classList.add("w-12", "h-12", "mr-3", "rounded");

                            // Tạo span chứa tên sản phẩm
                            let span = document.createElement("span");
                            span.textContent = item.name;
                            span.classList.add("text-gray-700");

                            // Gắn ảnh + tên sản phẩm vào div
                            div.appendChild(img);
                            div.appendChild(span);

                            div.addEventListener("click", function() {
                                inputSearch.value = item.name; // Hiển thị tên sản phẩm
                                inputUrl.value = item.url; // Lưu URL vào input ẩn
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
