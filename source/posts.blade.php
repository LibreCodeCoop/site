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
                    <div class="col-lg-3 mb-3">
                        <article class="article-blog">

                        <div class="post-img">
                            <img src="{{ locale_path($page, $page->baseUrl) }}assets/images/logo.png" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Politics</p>

                        <h2 class="title">
                            <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="{{ locale_path($page, $page->baseUrl) }}assets/images/daiane.png" alt="" class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                            <p class="post-author">Maria Doe</p>
                            <p class="post-date">
                            <time datetime="2022-01-01">Jan 1, 2022</time>
                            </p>
                            </div>
                        </div>

                        </article>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <article class="article-blog">

                        <div class="post-img">
                            <img src="{{ locale_path($page, $page->baseUrl) }}assets/images/logo.png" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Politics</p>

                        <h2 class="title">
                            <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="{{ locale_path($page, $page->baseUrl) }}assets/images/daiane.png" alt="" class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                            <p class="post-author">Maria Doe</p>
                            <p class="post-date">
                            <time datetime="2022-01-01">Jan 1, 2022</time>
                            </p>
                            </div>
                        </div>

                        </article>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <article class="article-blog">

                        <div class="post-img">
                            <img src="{{ locale_path($page, $page->baseUrl) }}assets/images/logo.png" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Politics</p>

                        <h2 class="title">
                            <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="{{ locale_path($page, $page->baseUrl) }}assets/images/daiane.png" alt="" class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                            <p class="post-author">Maria Doe</p>
                            <p class="post-date">
                            <time datetime="2022-01-01">Jan 1, 2022</time>
                            </p>
                            </div>
                        </div>

                        </article>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <article class="article-blog">

                        <div class="post-img">
                            <img src="{{ locale_path($page, $page->baseUrl) }}assets/images/logo.png" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Politics</p>

                        <h2 class="title">
                            <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="{{ locale_path($page, $page->baseUrl) }}assets/images/daiane.png" alt="" class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                            <p class="post-author">Maria Doe</p>
                            <p class="post-date">
                            <time datetime="2022-01-01">Jan 1, 2022</time>
                            </p>
                            </div>
                        </div>

                        </article>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <article class="article-blog">

                        <div class="post-img">
                            <img src="{{ locale_path($page, $page->baseUrl) }}assets/images/logo.png" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Politics</p>

                        <h2 class="title">
                            <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="{{ locale_path($page, $page->baseUrl) }}assets/images/daiane.png" alt="" class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                            <p class="post-author">Maria Doe</p>
                            <p class="post-date">
                            <time datetime="2022-01-01">Jan 1, 2022</time>
                            </p>
                            </div>
                        </div>

                        </article>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <article class="article-blog">

                        <div class="post-img">
                            <img src="{{ locale_path($page, $page->baseUrl) }}assets/images/logo.png" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Politics</p>

                        <h2 class="title">
                            <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="{{ locale_path($page, $page->baseUrl) }}assets/images/daiane.png" alt="" class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                            <p class="post-author">Maria Doe</p>
                            <p class="post-date">
                            <time datetime="2022-01-01">Jan 1, 2022</time>
                            </p>
                            </div>
                        </div>

                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
