@extends('layouts.admin.main')

@section('content')
<div class="container mx-auto p-4 max-w-2xl">
    <h2 class="text-xl font-bold mb-4">Thêm liên hệ mới</h2>
    
    <form action="{{ route('contacts.store') }}" method="POST" class="grid gap-4">
        @csrf
        
        <label class="block">Tên</label>
        <input type="text" name="name" class="border p-2 rounded w-full" required>
        
        <label class="block">Email</label>
        <input type="email" name="email" class="border p-2 rounded w-full" required>
        
        <label class="block">Số điện thoại</label>
        <input type="text" name="phone" class="border p-2 rounded w-full" required>
        
        <label class="block">Địa chỉ</label>
        <input type="text" name="address" class="border p-2 rounded w-full">
        
        <label class="block">Facebook</label>
        <input type="text" name="facebook" class="border p-2 rounded w-full">
        
        <div class="d-flex">
            <a class="btn btn-primary" href="{{ route('contacts.index') }}">Quay lại</a>
            <button type="submit" class="bg-green-500 ml-2 px-4 py-1 rounded">Lưu</button>
        </div>

    </form>
</div>
@endsection