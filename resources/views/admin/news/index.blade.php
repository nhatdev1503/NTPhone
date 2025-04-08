@extends('layouts.admin.main')

@section('content')
    <h1>News List</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    
    <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Create New News</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $new)
                <tr>
                    <td>{{ $new->title }}</td>
                    <td>
                        <a href="{{ route('news.edit', $new) }}" class="btn btn-warning">Edit</a>
                        
                       
                        <form action="{{ route('news.destroy', $new) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Phân trang -->
    {{ $news->links() }}
@endsection
