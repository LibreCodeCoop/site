@extends('_layouts.main')
@section('body')

@php
    $localePosts = collect($posts)
        ->filter(function ($post) use ($page) {
            return current_path_locale($post) === current_path_locale($page);
        })
        ->values();
    $featuredPost = $localePosts->first();
    $remainingPosts = $localePosts->slice(1)->values();
    $formatDate = function ($timestamp) {
        return \Carbon\Carbon::createFromTimestamp($timestamp)->locale('pt_BR')->isoFormat('D [de] MMMM [de] YYYY');
    };
@endphp

<section class="lc-pagehero">
    <div class="lc-pagehero__inner">
        <p class="lc-eyebrow lc-hero__eyebrow" data-reveal="up">// journal · software livre</p>

        <h1 data-hero-title>
            <span class="lc-line"><span>O blog da</span></span>
            <span class="lc-line"><span class="lc-accent">LibreCode</span></span>
        </h1>

        <p class="lc-pagehero__lead" data-reveal="up">
            Cooperativismo, tecnologia livre e assinatura digital — ideias e experiências
            de quem constrói soluções abertas, com as pessoas no centro.
        </p>

        <p class="lc-pagehero__count" data-reveal="up" aria-hidden="true">
            <span>{{ str_pad($localePosts->count(), 2, '0', STR_PAD_LEFT) }}</span> artigos publicados
        </p>
    </div>
</section>

<main id="main">
    <section class="lc-journal lc-section--paper">
        <div class="lc-shell">

            @if ($featuredPost)
                <a class="lc-feature" href="{{ $featuredPost->getUrl() }}" data-reveal="up">
                    <div class="lc-feature__media">
                        <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }}" loading="lazy">
                    </div>
                    <div class="lc-feature__body">
                        <p class="lc-feature__tag">Em destaque</p>
                        <h2 class="lc-feature__title">{{ $featuredPost->title }}</h2>
                        <p class="lc-feature__excerpt">{{ $featuredPost->description }}</p>
                        <div class="lc-feature__meta">
                            <time datetime="{{ date('Y-m-d', $featuredPost->date) }}">{{ $formatDate($featuredPost->date) }}</time>
                            <span class="lc-feature__read">Ler artigo <span aria-hidden="true">→</span></span>
                        </div>
                    </div>
                </a>
            @endif

            @if ($remainingPosts->count())
                <div class="lc-journal__head" data-reveal="up">
                    <p class="lc-eyebrow">Todos os artigos</p>
                </div>

                <div class="lc-journal__grid" data-reveal="stagger">
                    @foreach ($remainingPosts as $post)
                        <article class="lc-post-card">
                            <a class="lc-post-card__media" href="{{ $post->getUrl() }}" tabindex="-1" aria-hidden="true">
                                <img src="{{ $post->cover_image }}" alt="" loading="lazy">
                            </a>
                            <div class="lc-post-card__body">
                                <time class="lc-post-card__date" datetime="{{ date('Y-m-d', $post->date) }}">{{ $formatDate($post->date) }}</time>
                                <h3 class="lc-post-card__title">
                                    <a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
                                </h3>
                                <p class="lc-post-card__excerpt">{{ $post->description }}</p>
                                <span class="lc-post-card__read">Ler artigo <span aria-hidden="true">→</span></span>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif

        </div>
    </section>
</main>
@endsection
