<!-- resources/views/admin/posts/create.blade.php -->

@extends('layouts.admin.main')

@section('content')
<div class="container">
    <h2>Thêm Bài Viết</h2>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Tiêu Đề</label>
            <input type="text" name="title" id="title" required class="form-control">
        </div>

        <div id="editor"></div>

        <div>
            <button type="submit" class="btn btn-primary">Lưu Bài Viết</button>
        </div>
    </form>
</div>

<script>
    var quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': '1' }, { 'header': '2' }, { 'font': [] }],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'align': [] }],
                ['bold', 'italic', 'underline'],
                ['link', 'image'],
                ['clean']
            ]
        }
    });

    quill.getModule('toolbar').addHandler('image', () => {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.click();

        input.onchange = () => {
            const file = input.files[0];
            const formData = new FormData();
            formData.append('image', file);

            axios.post('/upload-image', formData).then(response => {
                const imageUrl = response.data.url;
                const range = quill.getSelection();
                quill.insertEmbed(range.index, 'image', imageUrl);
            });
        };
    });
</script>
@endsection
