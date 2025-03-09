@include('layouts.header')

<div class="container my-4">
    @yield('content')

    <h2>Danh mục {{ $category->name }}</h2>
</div>

@include('layouts.footer')