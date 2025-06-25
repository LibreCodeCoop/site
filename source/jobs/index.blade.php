@extends('_layouts.main')
@section('body')
<main id="main" class="hight-jobs-page">

    <section id="about">
        <div class="container" data-aos="fade-up">

          <header class="section-header mb-5">
            <h1 class="display-4">Faça parte da LibreCode</h1>
          </header>

          <div class="row about-container">

            <div class="col-lg-6 content order-lg-1 order-2">
              <p>
                A LibreCode é uma cooperativa de devs de software livre em busca de uma forma de trabalhar diferente das que já experimentamos no mundo corporativo.
              </p>

              <div>
                <h5 class="font-weight-bold">Cooperativa de TI</h5>
                <p class="h6">
                    Somos uma cooperativa de profissionais da tecnologia da informação especializados em desenvolvimento e implantação de software livre.
                </p>
              </div>

              <div>
                <h5 class="font-weight-bold mt-3">Apaixonados por Software Livre</h5>
                <p class="h6">Software livre é o software que concede liberdade ao usuário para executar, acessar e modificar o código fonte, e redistribuir cópias com ou sem modificações. </p>
              </div>

            </div>

            <div class="col-lg-6 background order-lg-2 mt-3">
              <img src="{{ $page->baseUrl }}assets/images/librecode_team.jpeg" class="img-fluid" alt="imagem_grupo_librecode">
            </div>
          </div>
        </div>
    </section>

    <section id="about" class="products">
        <div class="container">

            <h1>Coopere Conosco</h1>

            <h4 class="mt-5">Local de trabalho</h4>
            <div class="ml-5 mb-5">
                <i class="lni lni-home"></i>
                <span><code>0.0.0.0</code> ou <code>127.0.0.1</code></span>
            </div>

            <h4 class="mb-5"><a href="{{ $page->baseUrl }}jobs/forma-contratacao">Forma de contratação</a></h4>

            <h4 class="mb-5"><a href="{{ $page->baseUrl }}jobs/beneficios">Benefícios</a></h4>

            <h4 class="mb-5"><a href="{{ $page->baseUrl }}jobs/area-de-atuacao">Área de atuação</a></h4>

            <h4 id="pre-requisito" class="mb-5"><a href="{{ $page->baseUrl }}jobs/pre-requisitos">Vamos juntos cooperar!</a></h4>

        </div>
    </section>
  </main>
@endsection
