@extends('layouts.admin.main')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card shadow-lg p-4 rounded-lg" style="width: 400px;">
        <div class="text-center">
            <h3 class="fw-bold">{{ $contact->name }}</h3>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Email:</strong> {{ $contact->email }}</li>
            <li class="list-group-item"><strong>Điện thoại:</strong> {{ $contact->phone }}</li>
            <li class="list-group-item"><strong>Địa chỉ:</strong> {{ $contact->address ?? 'Chưa cập nhật' }}</li>
            <li class="list-group-item"><strong>Facebook:</strong> 
                <a href="{{ $contact->facebook }}" target="_blank">{{ $contact->facebook ?? 'Chưa cập nhật' }}</a>
            </li>
        </ul>
        <div class="text-center mt-3">
            <a href="{{ route('contacts.edit') }}" class="btn btn-primary">Chỉnh sửa</a>
        </div>
    </div>
</div>
@endsection
