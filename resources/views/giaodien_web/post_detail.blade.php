@include('layouts.customer.header')
<div class="container my-4">
    @yield('content')
    <div class="container">
        <h2 class="title">{{ $post->title }}</h2>
        <br>

        @foreach ($post_detail as $detail)
            <div class="content">
                <p style="color: white;">{{ $detail->content }}</p>
                <br>
                <img src="{{ $detail->image }}" alt="image" width="60%" height="auto">
                <br>
                <br>
            </div>
        @endforeach
    </div>
</div>

@include('layouts.customer.footer')

<style>
    .container .title{
        color: white;
        font-size: 50px;
        font-weight: bold;
        margin: 40px 0 40px 0;
        padding: 0 10% 0 10%;
        line-height: 1.5;
        white-space: normal;
    }

    .container .content{
        padding: 0 10% 0 10%;
        font-size: 20px;
    }
</style>