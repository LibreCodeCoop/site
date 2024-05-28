@extends('_layouts.main')
@section('body')
    <section id="intro-blog">
        <div class="container">
            <h1 class="text-center mt-5">Blog</h1>
            <p class="description mt-5 mb-5 text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius molestie pharetra. Curabitur et est sagittis, elementum magna et, sodales ante. Cras sit amet consequat dolor. Nulla ac nisi metus. Suspendisse fermentum purus vitae ante imperdiet ornare. Duis aliquam rutrum semper. Ut egestas a ligula mollis dictum.
            </p>
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
                                    <a href="{{ $post->getUrl }}">
                                        <img src="{{ $post->cover_image }}" class="img-fluid">
                                    </a>
                                </div>
                                <p class="post-category">{{ date('F j, Y', $post->date) }}</p>
                                <h2 class="title">
                                    <a href="{{ $post->getUrl }}">{{ $post->title }}</a>
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
