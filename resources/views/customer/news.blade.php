@include('layouts.customer.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<style>
    
    .highlight-news-list {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.highlight-item {
  display: flex;
  align-items: center;
  position: relative;
  gap: 10px;
  padding-left: 10px;
}

.highlight-rank {
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  background-color: red;
  color: white;
  width: 22px;
  height: 22px;
  font-size: 12px;
  font-weight: bold;
  border-radius: 50%;
  text-align: center;
  line-height: 22px;
}

.highlight-thumb {
  flex: 0 0 90px;
  height: 55px;
  overflow: hidden;
  border-radius: 6px;
}

.highlight-thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  border-radius: 6px;
}

.highlight-info {
  flex: 1;
  padding-right: 5px;
}

.highlight-info .title {
  display: block;
  font-size: 15px;
  font-weight: 600;
  color: #333;
  line-height: 1.3;
  margin-bottom: 3px;
  text-decoration: none;
}

.highlight-info .title:hover {
  color: #00adf0;
}

.highlight-info .date {
  font-size: 13px;
  color: #888;
}

   .latest-news-card {
  display: flex;
  gap: 15px;
  padding: 15px;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.08);
  background-color: white;
  align-items: flex-start;
}

.latest-news-image {
  flex: 0 0 40%;
  border-radius: 10px;
  overflow: hidden;
}

.latest-news-image img {
  width: 100%;
  aspect-ratio: 16 / 9;
  object-fit: cover;
  display: block;
  border-radius: 10px;
}

.latest-news-content {
  flex: 1;
}

.latest-news-content h3 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 8px;
}

.latest-news-content h3 a {
  text-decoration: none;
  color: #000;
}

.latest-news-content h3 a:hover {
  color: #00adf0;
}

.latest-news-content .meta-row {
  font-size: 14px;
  color: #666;
  margin-bottom: 10px;
}

.latest-news-content p {
  text-align: justify;
  line-height: 1.5;
}

  .alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
  }
  .title-page {
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: 700;
    text-transform: uppercase;
    border-left: 7px solid #00adf0;
    padding-left: 10px;
  }
  .block-thumb img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.3s ease-in-out;
  }
  .block-thumb img:hover {
    transform: scale(1.03);
  }
  .item-blog, .swiper-slide {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    overflow: hidden;
  }
  .meta-row {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    color: #666;
    margin: 5px 0;
  }
  .line-clamp {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  .line-clamp-2 { -webkit-line-clamp: 2; }
  .line-clamp-3 { -webkit-line-clamp: 3; }
  .justify { text-align: justify; }
  .sidebar {
    padding-left: 25px;
    border-left: 2px solid #ddd;
    margin-top: 20px;

  }
  .sidebar .title-head-col {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #00adf0;
  }
  .nav-category ul {
    padding-left: 0;
    list-style: none;
  }
  .nav-category li {
    margin-bottom: 8px;
  }
  .nav-category a {
    color: #333;
    text-decoration: none;
  }
  .nav-category a:hover {
    color: #00adf0;
  }
</style>

<div class="bodywrap">
  <section class="bread-crumb">
    <div class="container">
      <ul class="breadcrumb">
        <li class="home">
          <a href="/"><span>Trang chủ</span></a>
          <span class="mr_lr">&nbsp;<i class="fas fa-chevron-right"></i>&nbsp;</span>
        </li>
        <li><strong><span>Tin tức</span></strong></li>
      </ul>
    </div>
  </section>

  <div class="blog_wrapper layout-blog">
    <div class="container">
      <div class="row row-fix">
        <div class="col-lg-9 col-12">

          @if($latestNews->count())
          <div class="mb-4">
            <div class="title-page">Tin mới nhất</div>
            <div class="swiper blog-slider">
              <div class="swiper-wrapper">
                @foreach ($latestNews as $news)
                <div class="swiper-slide">
  <div class="latest-news-card">
    <div class="latest-news-image">
      <a href="{{ route('customer.show', $news->id) }}">
        @if ($news->thumbnail_path)
          <img src="{{ asset('storage/' . $news->thumbnail_path) }}" alt="{{ $news->title }}">
        @else
          <img src="{{ asset('default-thumbnail.jpg') }}" alt="No image">
        @endif
      </a>
    </div>
    <div class="latest-news-content">
      <h3>
        <a href="{{ route('customer.show', $news->id) }}">{{ $news->title }}</a>
      </h3>
      <div class="meta-row">
        <i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($news->published_at)->format('d/m/Y') }}
      </div>
      <p>{{ Str::limit(strip_tags(html_entity_decode($news->content)), 300) }}</p>
    </div>
  </div>
</div>

                @endforeach
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
          @endif

          <div class="list-blogs">
            <div class="title-page">Tất cả tin tức</div>
            <div class="row">
              @forelse ($allNews as $news)
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="item-blog">
                  <div class="block-thumb">
                    <a class="thumb" href="{{ route('customer.show', $news->id) }}">
                      @if ($news->thumbnail_path)
                        <img src="{{ asset('storage/' . $news->thumbnail_path) }}" alt="{{ $news->title }}">
                      @else
                        <img src="{{ asset('default-thumbnail.jpg') }}" alt="No image">
                      @endif
                    </a>
                  </div>
                  <div class="block-content p-3">
                    <h3 class="font-bold text-base line-clamp-2">
                      <a href="{{ route('customer.show', $news->id) }}">{{ $news->title }}</a>
                    </h3>
                    <div class="meta-row">
                      <span><i class="fas fa-user"></i> {{ $news->user->fullname ?? 'Admin' }}</span>
                      <span><i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($news->published_at)->format('d/m/Y') }}</span>
                    </div>
                    <p class="justify line-clamp line-clamp-3">
  {{ Str::limit(strip_tags(html_entity_decode($news->content)), 150) }}
</p>

                  </div>
                </div>
              </div>
              @empty
              <div class="col-12">
                <div class="alert alert-warning">Không có tin tức nào.</div>
              </div>
              @endforelse
              <div class="col-12 mt-3">
                {{ $allNews->links() }}
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-3 col-12 sidebar">
          <div class="aside-content-blog">
            <div class="title-head-col">Danh mục</div>
            <div class="nav-category">
              <ul>
                <li><a href="{{ route('customer.index') }}">Trang chủ</a></li>
                <li><a href="{{ route('customer.warranty') }}">Chính sách bảo hành</a></li>
                <li><a href="{{ route('customer.contact') }}">Liên hê</a></li>
                <li><a href="#"></a></li>
              </ul>
            </div>
          </div>

          <div class="aside-content-blog mt-4">
  <div class="title-head-col">Bài viết nổi bật</div>
  <div class="highlight-news-list">
    @foreach($latestNews as $index => $highlight)
    <div class="highlight-item">
      <div class="highlight-rank">{{ $index + 1 }}</div>
      <div class="highlight-thumb">
        <a href="{{ route('customer.show', $highlight->id) }}">
          @if($highlight->thumbnail_path)
          <img src="{{ asset('storage/' . $highlight->thumbnail_path) }}" alt="{{ $highlight->title }}">
          @else
          <img src="{{ asset('default-thumbnail.jpg') }}" alt="No image">
          @endif
        </a>
      </div>
      <div class="highlight-info">
        <a class="title" href="{{ route('customer.show', $highlight->id) }}">{{ Str::limit($highlight->title, 50) }}</a>
        <div class="date"><i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($highlight->published_at)->format('d/m/Y') }}</div>
      </div>
    </div>
    @endforeach
  </div>
</div>

        </div>

      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
      delay: 5000,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    slidesPerView: 1,
    spaceBetween: 15,
  });
</script>

@include('layouts.customer.footer')
