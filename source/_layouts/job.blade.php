@extends('_layouts.main')
@section('body')

<section class="lc-pagehero lc-pagehero--article">
    <div class="lc-pagehero__inner">
        <p class="lc-eyebrow lc-hero__eyebrow" data-reveal="up">
            <a href="{{ $page->baseUrl }}jobs">Coopere Conosco</a>
        </p>
        <h1 data-hero-title>
            <span class="lc-line"><span>{{ $page->title ?? 'Coopere com a LibreCode' }}</span></span>
        </h1>
    </div>
</section>

<main id="main" class="lc-article">
    <div class="lc-article__body" data-reveal="up">
        @yield('content')
    </div>

    <div class="lc-article__back" data-reveal="up">
        <a href="{{ $page->baseUrl }}jobs" class="lc-btn">
            <span aria-hidden="true">←</span> Voltar para Coopere Conosco
        </a>
    </div>
</main>

@endsection
