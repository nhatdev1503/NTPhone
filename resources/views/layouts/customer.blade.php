<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Ví dụ thêm Font Awesome vào phần <head> của file layout -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-papjQfYHx3o+2yjxuYvLr2efJmOMFyxXNVq7Y0B6zqysqLLcJ57v3Kb2K6tPQ9BlNjZqAqjC1JfxOUn2S9V+Iw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    {{-- Header --}}
    @include('layouts.customer.header')

    <div class="container mt-4">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('layouts.customer.footer')

</body>

</html>
