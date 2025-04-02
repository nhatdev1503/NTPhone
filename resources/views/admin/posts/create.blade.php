<!-- resources/views/admin/posts/create.blade.php -->

@extends('layouts.admin.main')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-3xl font-semibold mb-6">Thêm Bài Viết Mới</h2>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <!-- Tiêu đề bài viết -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Tiêu Đề</label>
            <input type="text" id="title" name="title" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>

        <!-- Trạng thái bài viết -->
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Trạng Thái</label>
            <select id="status" name="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                <option value="published">Công khai</option>
                <option value="draft">Ẩn</option>
            </select>
        </div>

        <!-- Nội dung bài viết (Quill Editor) -->
        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Nội Dung</label>
            <div id="editor" class="bg-white p-4 border border-gray-300 rounded-lg"></div>
            <input type="hidden" name="content" id="content">
        </div>

        <!-- Chọn ảnh -->
        <div class="mb-4">
            <label for="images" class="block text-sm font-medium text-gray-700">Ảnh</label>
            <input type="file" id="images" name="images[]" class="w-full px-4 py-2 border border-gray-300 rounded-lg" multiple>
            <small class="text-gray-500">Chọn nhiều ảnh nếu cần</small>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">Lưu Bài Viết</button>
    </form>
</div>

<script>
    // Khởi tạo Quill editor
    var quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': '1' }, { 'header': '2' }],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                ['bold', 'italic', 'underline'],
                ['link'],
                [{ 'align': [] }],
                ['image'] // Cho phép chèn ảnh
            ]
        }
    });

    // Xử lý khi form submit
    $('form').submit(function(e) {
        // Đưa nội dung Quill vào input hidden
        var content = [];
        var delta = quill.getContents();
        delta.ops.forEach(function(op) {
            if (op.insert && op.insert.image) {
                content.push({
                    text: null,
                    image: op.insert.image
                });
            } else if (op.insert && typeof op.insert === 'string') {
                content.push({
                    text: op.insert,
                    image: null
                });
            }
        });
        $('#content').val(JSON.stringify(content)); // Lưu nội dung vào trường 'content'
    });

    // AJAX để tải ảnh lên
    quill.getModule('toolbar').addHandler('image', function() {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.click();

        input.onchange = () => {
            var file = input.files[0];
            var formData = new FormData();
            formData.append('image', file);

            // Gửi ảnh lên server qua AJAX
            $.ajax({
                url: '{{ route('orders.index') }}',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    var range = quill.getSelection();
                    quill.insertEmbed(range.index, 'image', response.imageUrl); // Chèn ảnh vào editor
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    });
</script>
@endsection
