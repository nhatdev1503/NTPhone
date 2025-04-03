@extends('layouts.admin.main')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-xl font-bold mb-4">Danh sách liên hệ</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="col-md-6 text-start mb-3">
        <a href="{{ route('contacts.create') }}" class="btn btn-success">
            <i class="fa fa-plus"></i> Thêm mới
        </a>
    </div>
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">Email</th>
                <th class="border p-2">Số điện thoại</th>
                <th class="border p-2">Địa chỉ</th>
                <th class="border p-2">Facebook</th>
                <th class="border p-2">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr class="border">
                    <td class="p-2">{{ $contact->email }}</td>
                    <td class="p-2">{{ $contact->phone }}</td>
                    <td class="p-2">{{ $contact->address }}</td>
                    <td class="p-2">
                        <a href="{{ $contact->facebook }}" target="_blank" class="text-blue-500 underline">Facebook</a>
                    </td>
                    <td class="p-2 flex gap-2">
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="bg-blue-500 text-white px-4 py-1 rounded">Chỉnh sửa</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc muốn xóa liên hệ này không?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection