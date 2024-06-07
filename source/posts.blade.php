@extends('_layouts.main')
@section('body')
    <section id="intro-blog">
        <div class="container">
            <h1 class="text-center font-weight-bold mt-5">Blog Page</h1>
        </div>
    </section>

    <main id="main">
        <section class="blog-posts">
            <div class="container padding-auto">
                <div class="row gy-4">
                    @foreach ($posts as $post)
                        @if (current_path_locale($post) !== current_path_locale($page))
                            @continue
                        @endif
                        <div class="col-lg-3 mb-3">
                            <article class="article-blog">
                                <div class="post-img">
                                    <a href="{{ $post->getUrl() }}">
                                        <img src="{{ $post->cover_image }}" class="img-fluid">
                                    </a>
                                </div>
                                <p class="post-category">{{ date('F j, Y', $post->date) }}</p>
                                <h2 class="title">
                                    <a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
                                </h2>
                                <p>{{ $post->description }}</p>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
