@extends('_layouts.main')

@section('body')
  <section id="intro-blog">
    <div class="container">
      <h1 class="text-center font-weight-bold mt-5">{{ $page->title }}</h1>
      <p class="description mt-5 mb-5 text-justify">{{ $page->description }}</p>
    </div>
  </section>

  <main id="main">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
              <div class="container mb-5">

                <article class="article-detail-blog">
                  <div class="article-img">
                    <img src="{{ $page->banner }}" alt="banner-image" class="img-fluid">
                  </div>

                  <h2 class="title p-3 mt-3">{{ $page->title }}</h2>

                  <div class="container mt-4 mb-5 p-3">
                    <div class="row">
                      <div class="col-3">
                        <i class="lni lni-user mr-2"></i>
                        <a href="{{ locale_path($page, $page->getUrl()) }}#blog-author">Daiane Alves</a>
                      </div>
                      <div class="col-8">
                        <i class="lni lni-calendar"></i>
                        <time datetime="2020-01-01">{{ date('F j, Y', $page->date) }}</time>
                      </div>
                    </div>
                  </div>

                  <div class="content p-3 text-justify">@yield('content')</div>

                </article>

              </div>
          </div>

          <div class="col-lg-4 sidebar">

            <div>

              <div>

                <h3 class="font-weight-bold mt-5">Recent Posts</h3>
                @php $count = 0; @endphp
                @foreach($posts as $article)
                  @php $count++; @endphp
                  @if($count >= 4)
                    @break
                  @endif
                <div class="post-item">
                  <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="{{ $article->getUrl() }}">{{ $article->title }}</a></h4>
                    <time datetime="2020-01-01">{{ date('F j, Y', $article->date) }}</time>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="blog-author" class="blog-author ml-4">
      {{$page->gravatar}}
      <div class="container">
        <div class="author-container d-flex align-items-center">
          @foreach($team as $item => $option)
            @if($option->name == $page->author)
              <img src="https://www.gravatar.com/avatar/{{$option->gravatar}}?size=170"
              alt="{{ $option->name }}" class="rounded-circle flex-shrink-0" alt="author_image">
              <div>
                <h4>{{ $option->name }}</h4>
                <div class="social-links">
                  @foreach($option->social as $contact => $url)
                  <a href="{{ $url }}" target="blank"><i class="lni lni-{{ $contact }}-original"></i></a>
                  @endforeach
                </div>

                <p class="text-justify">{{ $option->bio }}</p>
              </div>
            @endif
          @endforeach
        </div>
      </div>

    </section>

  </main>
@endsection
