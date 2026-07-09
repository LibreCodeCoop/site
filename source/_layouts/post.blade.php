@extends('_layouts.main')

@section('body')

@php
    $formatDate = function ($timestamp) {
        return \Carbon\Carbon::createFromTimestamp($timestamp)->locale('pt_BR')->isoFormat('D [de] MMMM [de] YYYY');
    };

    $readingTimeInMinutes = null;
    try {
        $wordCount = str_word_count(strip_tags($page->getContent()));
        $readingTimeInMinutes = max(1, (int) ceil($wordCount / 200));
    } catch (\Throwable $exception) {
        $readingTimeInMinutes = null;
    }

    $relatedPosts = collect($posts)
        ->filter(function ($post) use ($page) {
            return current_path_locale($post) === current_path_locale($page)
                && $post->getUrl() !== $page->getUrl();
        })
        ->take(3)
        ->values();

    $author = collect($team)->first(function ($teamMember) use ($page) {
        return $teamMember->name === $page->author;
    });
@endphp

<section class="lc-pagehero lc-pagehero--article">
    <div class="lc-pagehero__inner">
        <p class="lc-eyebrow lc-hero__eyebrow" data-reveal="up">
            <a href="{{ locale_path($page, $page->baseUrl) }}posts">← Blog</a>
        </p>

        <h1 class="lc-article__title" data-hero-title>
            <span class="lc-line"><span>{{ $page->title }}</span></span>
        </h1>

        <div class="lc-article__meta" data-reveal="up">
            @if ($author && $author->name === 'LibreCode')
                <img class="lc-article__avatar" src="{{ $page->baseUrl }}assets/images/logo/librecode_author.jpg" alt="" loading="lazy">
            @elseif ($author)
                <img class="lc-article__avatar" src="https://www.gravatar.com/avatar/{{ $author->gravatar }}?size=96" alt="" loading="lazy">
            @endif
            <span class="lc-article__author">{{ $page->author }}</span>
            <span class="lc-article__sep" aria-hidden="true">·</span>
            <time datetime="{{ date('Y-m-d', $page->date) }}">{{ $formatDate($page->date) }}</time>
            @if ($readingTimeInMinutes)
                <span class="lc-article__sep" aria-hidden="true">·</span>
                <span>{{ $readingTimeInMinutes }} min de leitura</span>
            @endif
        </div>
    </div>
</section>

<main id="main">
    <article class="lc-article lc-section--paper">
        <div class="lc-article__banner" data-reveal="up">
            <img src="{{ $page->banner }}" alt="{{ $page->title }}" loading="lazy">
        </div>

        <div class="lc-article__body" data-reveal="up">
            @yield('content')
        </div>

        @if ($author)
            <section id="blog-author" class="lc-author" data-reveal="up">
                @if ($author->name === 'LibreCode')
                    <img class="lc-author__avatar" src="{{ $page->baseUrl }}assets/images/logo/librecode_author.jpg" alt="{{ $author->name }}">
                @else
                    <img class="lc-author__avatar" src="https://www.gravatar.com/avatar/{{ $author->gravatar }}?size=200" alt="{{ $author->name }}">
                @endif
                <div class="lc-author__body">
                    <p class="lc-author__kicker">Escrito por</p>
                    <h2 class="lc-author__name">{{ $author->name }}</h2>
                    <p class="lc-author__bio">{{ $author->bio }}</p>
                    @if (!empty($author->social))
                        <div class="lc-author__social">
                            @foreach ($author->social as $network => $url)
                                <a href="{{ $url }}" target="_blank" rel="noopener" aria-label="{{ $network }}">
                                    <i class="lni lni-{{ $network }}-original"></i>
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </section>
        @endif
    </article>

    @if ($relatedPosts->count())
        <section class="lc-more lc-section--ink">
            <div class="lc-shell">
                <div class="lc-head" data-reveal="up">
                    <p class="lc-eyebrow">Continue lendo</p>
                    <h2>Mais do nosso blog</h2>
                </div>

                <div class="lc-journal__grid lc-journal__grid--ink" data-reveal="stagger">
                    @foreach ($relatedPosts as $article)
                        <article class="lc-post-card lc-post-card--ink">
                            <a class="lc-post-card__media" href="{{ $article->getUrl() }}" tabindex="-1" aria-hidden="true">
                                <img src="{{ $article->cover_image }}" alt="" loading="lazy">
                            </a>
                            <div class="lc-post-card__body">
                                <time class="lc-post-card__date" datetime="{{ date('Y-m-d', $article->date) }}">{{ $formatDate($article->date) }}</time>
                                <h3 class="lc-post-card__title">
                                    <a href="{{ $article->getUrl() }}">{{ $article->title }}</a>
                                </h3>
                                <span class="lc-post-card__read">Ler artigo <span aria-hidden="true">→</span></span>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</main>
@endsection
