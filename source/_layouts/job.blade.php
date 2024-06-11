@extends('_layouts.main')
@section('body')

<main id="main" class="p-5 hight-jobs-page">
  <section>
    <div class="container">
      <div>
        <div class="content p-3 text-justify">@yield('content')</div>
        <a href="{{ $page->baseUrl }}jobs" class="btn btn-danger mt-5 mb-5">Voltar</a>
      </div>
    </div>
  </section>
</main>

@endsection

