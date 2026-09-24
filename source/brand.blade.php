---
title: Marca e pronúncia — LibreCode
description: Diretrizes oficiais para a grafia, pronúncia e identidade da LibreCode Coop.
---

@extends('_layouts.main')

@section('body')
<main id="main">
  <section class="lc-section lc-section--ink">
    <div class="lc-shell">
      <div class="lc-head">
        <p class="lc-eyebrow">Marca</p>
        <h1>LibreCode: tecnologia com liberdade</h1>
        <p><strong>Libre</strong> não é apenas parte do nome. É a ideia de liberdade que orienta como construímos, entregamos e sustentamos tecnologia: liberdade para entender o que você usa, escolher quem mantém, adaptar às suas necessidades, integrar com outros sistemas e evitar dependência artificial de um único fornecedor.</p>
        <p>Para nossos clientes, isso se traduz em mais controle sobre tecnologia e dados, maior capacidade de continuidade e uma relação comercial baseada em serviço, conhecimento e confiança — não em aprisionamento tecnológico.</p>
      </div>

      <div class="lc-why">
        <article class="lc-why__card" id="name">
          <div class="lc-why__idx">01</div>
          <h2>Nome oficial</h2>
          <p>Use sempre <strong>LibreCode</strong> e <strong>LibreCode Coop</strong>.</p>
          <p>Em LibreCode, a letra inicial e a segunda palavra começam em maiúscula, sem espaço. <strong>Coop</strong> é escrito sem hífen.</p>
          <p>Evite grafias como <code>Librecode</code>, <code>Libre Code</code> e <code>LibreCode Co-op</code>.</p>
        </article>

        <article class="lc-why__card" id="pronunciation">
          <div class="lc-why__idx">02</div>
          <h2>Pronúncia</h2>
          <p><strong>Libre</strong> começa com o som /i/: não é “laibre”. A pronúncia de referência é <span aria-label="transcrição fonética internacional">/ˈli.bɾe/</span>.</p>
          <p><strong>LibreCode</strong>: <span aria-label="transcrição fonética internacional">/ˈli.bɾe koʊd/</span>. <strong>Code</strong> mantém a pronúncia inglesa.</p>
          <p><strong>Coop</strong> é escrito sem hífen e pronunciado em duas sílabas: <em>co</em> + <em>op</em>.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="lc-section lc-section--paper" id="assets">
    <div class="lc-shell">
      <div class="lc-head">
        <p class="lc-eyebrow">Identidade visual</p>
        <h2>Assets oficiais da LibreCode</h2>
        <p>Use sempre arquivos oficiais e preserve proporções, cores e legibilidade. A fonte canônica e versionada da marca é o repositório <a href="https://github.com/LibreCodeCoop/brand" target="_blank" rel="noopener">LibreCodeCoop/brand</a>; este site é a interface pública das diretrizes e dos exports aprovados.</p>
      </div>

      <div class="lc-why">
        <article class="lc-why__card">
          <div class="lc-why__idx">01</div>
          <h3>Logo LibreCode</h3>
          <p>Versão oficial atualmente utilizada no site.</p>
          <a class="lc-why__link" href="{{ $page->baseUrl }}assets/images/logo/librecode_large.png" download>Baixar logo LibreCode (PNG) <span aria-hidden="true">↓</span></a>
        </article>

        <article class="lc-why__card">
          <div class="lc-why__idx">02</div>
          <h3>Uso consistente</h3>
          <p>Não altere a grafia, proporções ou composição da marca. O núcleo visual mantém o vermelho <code>#e5332a</code>, as proporções do logo, sua área de proteção e regras de redução. A tipografia e os tokens de interface do site pertencem à camada digital da identidade e podem evoluir sem alterar o logo.</p>
                  </article>
      </div>
    </div>
  </section>

  <section class="lc-section lc-section--ink">
    <div class="lc-shell">
      <div class="lc-head">
        <p class="lc-eyebrow">Por que “Libre”</p>
        <h2>Liberdade também é uma decisão de negócio</h2>
        <p>Software livre permite auditar, estudar, adaptar e evoluir a tecnologia. Para uma organização, isso reduz dependências desnecessárias e amplia opções: trocar de fornecedor, internalizar conhecimento, integrar sistemas e planejar a evolução tecnológica com mais autonomia.</p>
        <p>A LibreCode Coop trabalha para transformar essa liberdade técnica em valor operacional: soluções sustentáveis, interoperáveis e mantidas com transparência.</p>
        <p><a class="lc-why__link" href="https://github.com/LibreCodeCoop/brand" target="_blank" rel="noopener">Ver fonte canônica da marca <span aria-hidden="true">↗</span></a></p>
      </div>
    </div>
  </section>
</main>
@endsection
