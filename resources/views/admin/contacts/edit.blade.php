@extends('layouts.admin.main')

@section('content')
<div class="container mx-auto p-4 max-w-2xl">
    <h2 class="text-xl font-bold mb-4">Chỉnh sửa liên hệ</h2>
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST" class="grid gap-4">
        @csrf
        @method('PUT')
        
        <label class="block">Tên</label>
        <input type="text" name="name" value="{{ $contact->name }}" class="border p-2 rounded w-full" required>

        <label class="block">Email</label>
        <input type="email" name="email" value="{{ $contact->email }}" class="border p-2 rounded w-full" required>

        <label class="block">Số điện thoại</label>
        <input type="text" name="phone" value="{{ $contact->phone }}" class="border p-2 rounded w-full" required>

        <label class="block">Địa chỉ</label>
        <input type="text" name="address" value="{{ $contact->address }}" class="border p-2 rounded w-full">

        <label class="block">Facebook</label>
        <input type="text" name="facebook" value="{{ $contact->facebook }}" class="border p-2 rounded w-full">

        <button type="submit" class="bg-green-500 text-white px-4 py-1 rounded">Cập nhật</button>
    </form>
</div>
@endsection
