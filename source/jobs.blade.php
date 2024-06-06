@extends('_layouts.main')
@section('body')
<main id="main" class="hight-jobs-page">
    <section id="about" class="products">
        <div class="container">
            <h1 class="display-4">Faça parte da LibreCode</h1>
            <p class="lead mb-5">A LibreCode é uma cooperativa de devs de software livre em busca de uma forma de trabalhar diferente das que já experimentamos no mundo corporativo.</p>

            <h4>Local de trabalho</h4>
            <div class="ml-5">
                <i class="lni lni-home"></i>
                <span>0.0.0.0 ou 127.0.0.1</span>
            </div>

            <h4 class="mt-5">Forma de contratação</h4>
            <ul>
                <li>Associar-se assumindo os direitos e deveres de sócio com remuneração variável de acordo com produção</li>
            </ul>
            <p class="text-danger ml-5 border border-danger border-bottom-0 border-top-0 p-3">OBS: Tornar-se sócio da LibreCode não é um trabalho de freelance que dedicamos quando há tempo extra. Tornar-se sócio é vestir a camisa e ser dono como todos os outros sócios contribuindo para o crescimento da cooperativa.</p>

            <h4 class="mt-5">Benefícios</h4>
            <ul>
                <li>Seguro de vida</li>
                <li>Plano de saúde</li>
                <li>Participação na divisão de sobras orçamentárias do ano</li>
                <li>Formações na área do cooperativismo</li>
                <li>Férias remuneradas</li>
                <li>Renda mensal variável de acordo com produção</li>
            </ul>

            <h4 id="pre-requisito" class="mt-5">Pré-requisitos</h4>
            <ul>
                <li>
                    Conhecer as leis que regem o nosso ramo do cooperativismo:
                    <ul>
                        <li><a href="https://www.planalto.gov.br/ccivil_03/Leis/L5764.htm" target="blank">LEI Nº 5.764, DE 16 DE DEZEMBRO DE 1971</a></li>
                        <li><a href="https://www.planalto.gov.br/CCIVIL_03/_Ato2011-2014/2012/Lei/L12690.htm" target="blank">LEI Nº 12.690, DE 19 DE JULHO DE 2012</a></li>
                    </ul>
                </li>
                <li>Conhecer e aceitar os termos de nosso <a href="https://gitlab.com/librecodecoop/estatuto" target="blank">Estatuto</a> e <a href="https://gitlab.com/librecodecoop/regimento-interno" target="blank">Regimento Interno</a></li>
                <li>Atuar na atividade fim da cooperativa</li>
                <li>Não atuar como sócio em empresa na atividade fim da LibreCode</li>
                <li>
                    Dar uma olhada nos materiais de apoio:

                    <p class="ml-4" style="margin-bottom: 0"><a href="https://www.youtube.com/watch?v=L-oXL6g00Og" target="blank">História de como surgiu o cooperativismo:</a></p>
                    <p class="ml-4" style="margin-bottom: 0">Documentários:</p>
                    <ul>
                        <ul>
                            <li><a href="https://libreflix.org/i/freenet" target="blank">Acesso a internet e outras coisas</a></li>
                        </ul>
                    </ul>
                    <p class="ml-4" style="margin-bottom: 0">Sobre software livre:</p>
                    <ul>
                        <ul>
                            <li><a href="https://libreflix.org/i/revolution-os" target="blank">Revolution OS</a></li>
                            <li><a href="https://libreflix.org/i/the-code" target="blank">The Code</a></li>
                        </ul>
                    </ul>
                </li>
                <li>
                    Cursos
                    <p class="ml-4" style="margin-bottom: 0">Faça cadastro no site <a href="https://www.capacita.coop.br/">CapacitaCoop</a></p>

                    <ul>
                        <ul>
                            <li>Selecione "não se aplica" no campo inscrição - quando solicitado a cooperativa.</li>
                        </ul>
                    </ul>

                    <p class="ml-4" style="margin-bottom: 0">Cursos obrigatórios</p>
                    <ul>
                        Nacionais
                        <ul>
                            <li>Cooperativismo - Primeiras lições</li>
                            <li>Entendendo a sociedade cooperativa</li>
                        </ul>
                    </ul>
                    <p class="ml-4 mb-3 mt-4" style="margin-bottom: 0">Ao concluir os cursos, envie em nosso grupo o comprovante de conclusão</p>

                </li>
                <li>
                    Estar de acordo com nossa
                    <ul>
                        <li>
                            Missão
                            <p class="ml-4">Colaborar para a construção de uma economia solidária por meio do cooperativismo, democratizando a tecnologia da informação, a segurança e a privacidade de dados com software livre.</p>
                        </li>
                        <li>
                            Visão
                            <p class="ml-4">Crescer e fomentar a criação de novas cooperativas de tecnologias livres com o objetivo de construir uma federação, nos fortalecer mutuamente, atingir visibilidade na sociedade e representatividade em decisões públicas.</p>
                        </li>
                        <li>
                            Valor
                            <p class="ml-4">Economia solidária, Segurança e privacidade, Comunidade, Transparência, Copyleft: libre code</p>
                        </li>
                    </ul>
                </li>
            </ul>

            <h4 class="mt-5">Área de atuação</h4>
            <p>A LibreCode é composta por profissionais de tecnologia que trabalham com soluções livres com os quais você poderá desenvolver o teu potencial como empreendedor.</p>
            <p>Caso tenha interesse em empreender conosco, submeta seu pedido de associação e vamos avaliar as possibilidades em conjunto.</p>

            <h6>Hoje temos:</h6>
            <ul>
                <li>
                    Desenvolvimento
                    <ul>
                        Backend:
                        <p class="ml-4" style="margin-bottom: 0">Requistos</p>
                        <ul>
                            <ul>
                                <li>Qualidade de software (CI/CD)</li>
                                <li>Utilizar e compreender os valores do software livre</li>
                                <li>Linux, PHP & Banco de Dados</li>
                                <li>Habilidades com análise e gestão de projetos</li>
                            </ul>
                        </ul>

                        <p class="ml-4" style="margin-bottom: 0">Tipos de trabalhos a executar</p>
                        <ul>
                            <ul>
                                <li>Desenvolvimento para Nextcloud</li>
                                <li>Análise de sistemas e gestão de projetos</li>
                                <li>Projetar e implementar aplicações web diversas (principalmente PHP)</li>
                            </ul>
                        </ul>
                    </ul>
                    <ul>
                        Frontend:
                        <p class="ml-4" style="margin-bottom: 0">Requistos</p>
                        <ul>
                            <ul>
                                <li>Utilizar e compreender os valores do software livre</li>
                                <li>
                                    Tecnologias
                                    <ul>
                                        <li>Linux</li>
                                        <li>JavaScript</li>
                                        <li>Docker</li>
                                        <li>VueJS</li>
                                        <li>webpack</li>
                                    </ul>
                                </li>
                                <li>Conhecimento e interesse em UX / UI</li>
                                <li>Habilidades com análise e gestão de projetos</li>
                                <li>Qualidade de software (CI/CD)</li>
                            </ul>
                        </ul>

                        <p class="ml-4" style="margin-bottom: 0">Tipos de trabalhos a executar</p>
                        <ul>
                            <ul>
                                <li>Desenvolvimento para Nextcloud</li>
                                <li>Análise de sistemas e gestão de projetos</li>
                                <li>Projetar e implementar frontend para aplicações web diversas</li>
                            </ul>
                        </ul>
                    </ul>
                </li>
                <li>
                    Infraestrutura
                    <ul>
                        <p class="ml-4" style="margin-bottom: 0">Requistos</p>
                        <ul>
                            <ul>
                                <li>Utilizar e compreender os valores do software livre</li>
                                <li>Conhecimentos de sysadmin Linux</li>
                                <li>Docker</li>
                            </ul>
                        </ul>

                        <p class="ml-4" style="margin-bottom: 0">Diferenciais</p>
                        <ul>
                            <ul>
                                <li>Banco de dados relacionais</li>
                                <li>Noções de programação</li>
                            </ul>
                        </ul>

                        <p class="ml-4" style="margin-bottom: 0">Tipos de trabalhos a executar</p>
                        <ul>
                            <ul>
                                <li>Administração de infraestrutura da LibreCode e de clientes</li>
                                <li>Automação de processos de infra</li>
                                <li>Auxiliar no suporte a clientes</li>
                            </ul>
                        </ul>
                    </ul>
                </li>
                <p class="text-center text-success border border-success border-bottom-0 border-top-0 p-3 mt-5">Porém, não se limite ao que temos hoje, venha cooperar conosco!</p>
            </ul>


            <h4 class="mt-5">Como se candidatar</h4>
            <ul>
                <li>Dê estrelinhas neste e em outros repos da LibreCode que curtir</li>
                <li>Atender aos <a href="{{ locale_path($page, $page->baseUrl) }}jobs/#pre-requisito">pré-requisitos</a></li>
                <li>Dar um oi em nosso <a href="https://t.me/LibreCodeCoop" target="blank">grupo público informando que tem interesse em fazer parte do time</li>
                <li>Submeter <a href="https://ls.librecode.coop/index.php?r=survey/index&sid=154438&lang=pt-BR" target="blank">proposta de admissão</a></li>
            </ul>


        </div>
    </section>
  </main>
@endsection