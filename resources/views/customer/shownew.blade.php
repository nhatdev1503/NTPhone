

@include('layouts.customer.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<style>
    .news-post {
        max-width: 850px;
        margin: 50px auto;
        padding: 30px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        font-family: 'Segoe UI', Roboto, sans-serif;
        line-height: 1.8;
        color: #2c2c2c;
    }

    .news-post h1 {
        font-size: 36px;
        font-weight: bold;
        border-bottom: 3px solid #007BFF;
        padding-bottom: 12px;
        margin-bottom: 25px;
        color: #007BFF;
    }

    .news-post h2 {
        font-size: 28px;
        margin-top: 40px;
        margin-bottom: 20px;
        padding-left: 10px;
        border-left: 4px solid #17a2b8;
        color: #17a2b8;
    }

    .news-post h3 {
        font-size: 24px;
        margin-top: 30px;
        margin-bottom: 15px;
        color: #555;
    }

    .news-post p {
        font-size: 18px;
        margin-bottom: 20px;
        text-align: justify;
    }

    .news-post img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 25px auto;
        border-radius: 8px;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .news-post img:hover {
        transform: scale(1.02);
    }

    .news-post ul,
    .news-post ol {
        margin: 20px 0 20px 40px;
        font-size: 17px;
    }

    .news-post li {
        margin-bottom: 10px;
    }

    .news-post blockquote {
        font-style: italic;
        background: #f0f8ff;
        border-left: 6px solid #0d6efd;
        padding: 18px 20px;
        margin: 30px 0;
        border-radius: 8px;
        color: #333;
    }

    .news-post .meta-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 15px;
        color: #666;
        margin-bottom: 25px;
        flex-wrap: wrap;
    }

    .meta-left,
    .meta-right {
        flex: 1;
        min-width: 200px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .meta-left i,
    .meta-right i {
        color: #007bff;
    }

    .news-post .meta strong {
        color: #333;
    }
</style>
<section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="/"><span>Trang chủ</span></a>
                    <span class="mr_lr" style="display: inline-flex; align-items: center; margin: 0 5px;">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-chevron-right fa-w-10"
                            style="width: 12px; height: 12px; vertical-align: middle;">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                            </path>
                        </svg>
                    </span>

                </li>

                

                <li><strong><span>{{ $news->title }}</span></strong></li>
            </ul>
        </div>
    </section>
<div class="news-post">
    <h1>{{ $news->title }}</h1>

   
    <div class="meta-row">
        <div class="meta-left">
            <i class="fas fa-user"></i>
            <span><strong>By:</strong> {{ $news->user->fullname }}</span>
        </div>
        <div class="meta-right" style="justify-content: flex-end;">
            <i class="fas fa-calendar-alt"></i>
            <span><strong> Date:</strong> {{ \Carbon\Carbon::parse($news->published_at)->format('d/m/Y H:i') }}</span>
        </div>
    </div>

    
    {!! $news->content !!}
</div>

@include('layouts.customer.footer')
