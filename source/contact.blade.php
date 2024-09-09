@extends('_layouts.main')
@section('body')
    <main id="main" class="hight-jobs-page mb-5">

        <section id="contact_backgroud">
            <div class="container" data-aos="fade-up">

            <header class="section-header mb-5">
                <h1 class="display-4">Fale Conosco</h1>
            </header>

            </div>
        </section>

        <section id="contact_backgroud">
            <div class="container">
                <div class="row justify-content-md-center">

                    <div class="col-lg-8 pt-5">
                        {{-- <h5 class="text-center">Contate-nos</h5> --}}
                        <iframe id="form-contato" src="https://ls.librecode.coop/?r=survey/index&sid=467949&newtest=Y" style="width: 100%;height:460px;border: 0;overflow:hidden;" scrolling="no"></iframe>
                    </div>

                    <div class="col-lg-4 contact-us-div pt-5">
                        <h4 class="text-center mb-5">Vamos quebrar o gelo.</h4>
                        <p class="text-center mb-5 p-3">Estamos aqui para ajudar! Se você tiver alguma dúvida, sugestão ou precisar de mais informações sobre nossos produtos e serviços, não hesite em nos contatar. </p>

                        <div class="row justify-content-md-center">
                            <div class="col-lg-3 text-center">
                                <a href="tel:+55(21)2042-2073"><i class="lni lni-phone contact-icon"></i></a>
                            </div>
                            <div class="col-lg-3 text-center">
                                <a href="mailto:contato@librecode.coop"><i class="lni lni-envelope text-center contact-icon"></i></a>
                            </div>
                        </div>
                        <p class="text-center mt-5 p-5">Agradecemos pelo seu contato e estaremos ansiosos para ajudar!</p>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
