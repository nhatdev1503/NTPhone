@extends('layouts.admin.main')

@section('content')
    <div class="container mt-4 max-w-4xl">
        <h2 class="mb-4 text-xl font-semibold">Thêm mới Banner</h2>
        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block font-medium">Tiêu đề:</label>
                    <input type="text" name="title" class="w-full border rounded px-3 py-2" value="{{ old('title') }}">
                </div>
                @if ($errors->has('title'))
                    <div class="validate_error">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <div class="relative">
                    <label class="block font-medium">Đường dẫn tới sản phẩm:</label>
                    <input type="text" name="product_name" id="product_name" class="w-full border rounded px-3 py-2"
                        placeholder="Nhập tên sản phẩm..." value="">

                    <!-- Danh sách gợi ý -->
                    <div id="searchResults" class="absolute left-0 w-full bg-white border rounded shadow-md mt-1 hidden">
                    </div>

                    <!-- Input ẩn để lưu URL -->
                    <input type="hidden" name="product_url" id="product_url" value="">
                </div>

                @if ($errors->has('product_url'))
                    <div class="validate_error">
                        {{ $errors->first('product_url') }}
                    </div>
                @endif
            </div>

            <div>
                <label class="block font-medium">Hình ảnh:</label>
                <input type="file" name="image" class="w-full border rounded px-3 py-2">
            </div>
            @if ($errors->has('image'))
                <div class="validate_error">
                    {{ $errors->first('image') }}
                </div>
            @endif
            <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Lưu
            </button>
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
