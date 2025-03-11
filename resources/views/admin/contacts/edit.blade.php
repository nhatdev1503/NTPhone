@extends('layouts.admin.main')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card shadow-lg p-4 rounded-lg" style="width: 400px;">
        <h3 class="text-center fw-bold">Chỉnh sửa liên hệ</h3>
        <form action="{{ route('contacts.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Tên</label>
                <input type="text" name="name" class="form-control" value="{{ $contact->name }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $contact->email }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Điện thoại</label>
                <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Địa chỉ</label>
                <input type="text" name="address" class="form-control" value="{{ $contact->address }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Facebook</label>
                <input type="url" name="facebook" class="form-control" value="{{ $contact->facebook }}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Lưu</button>
                <a href="{{ route('contacts.show') }}" class="btn btn-secondary">Hủy</a>
            </div>
        </form>
    </div>
</div>
@endsection
