@extends('layouts.admin.main')

@section('content')
    <div class="container">
        <h2>Create New News Article</h2>

        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title" style="color: black;">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="content" style="color: black;">Content</label>
        <textarea name="content" id="tinymce-editor" class="form-control" required>{{ old('content') }}</textarea>
        @error('content')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="is_active">Status</label>
        <select name="is_active" id="is_active" class="form-control">
            <option value="1" {{ old('is_active') == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>
   
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('news.index') }}" class="btn btn-secondary">Cancel</a>
    
</form>
    </div>

    {{-- TinyMCE CDN --}}
    <script src="https://cdn.tiny.cloud/1/rmmh49b4qpvs6yg7r9ov3mmjtz8ltfutkp4hxyfguni1fzfz/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
   
<script>
    
   tinymce.init({
    selector: '#tinymce-editor',
    height: 500,
    plugins: 'image link media table code lists advlist fullscreen',
    toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright | forecolor backcolor | link image media table | numlist bullist | code fullscreen',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',

    setup: function(editor) {
        editor.on('change', function() {
            tinymce.activeEditor.save();
        });
    },
    images_upload_url: "{{ route('news.upload_images') }}",

    file_picker_types: 'image',
    file_picker_callback: function(callback, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');
    input.setAttribute('multiple', 'multiple');

    input.onchange = function() {
        var files = input.files;
        if (files.length > 0) {
            var formData = new FormData();
            for (let i = 0; i < files.length; i++) {
                formData.append('images[]', files[i]);
            }
            fetch("{{ route('news.upload_images') }}",{ 

                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                }
            })
            .then(response => response.json())
            .then(data => {
                
                data.images.forEach(image => {
                    
                    callback(image.url, { alt: image.name });
                });
            })
            .catch(error => {
                console.error('Error uploading images:', error);
            });
        }
    };
    
    input.click(); 
}

});
document.querySelector('form').addEventListener('submit', function(event) {
    console.log('Form is being submitted');
    
});

</script>

@endsection
