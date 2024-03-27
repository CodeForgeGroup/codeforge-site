@extends('layout.layout')

@section('title', 'Home - Code Forge')

@section('primeiro')
CODE
@endsection

@section('segundo')
FORGE
@endsection

@section('conteudo')
<section id="features" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap mb-5">
                <h2 class="section-title">
                    Criado e feito por <a href="https://codeforgedev.com.br" target="_blank">CodeForge</a>
                </h2>
                <p class="section-sub-title">Fazemos com fervor, disciplina e dedicação, para que você tenha<br>  o melhor alavancamento para sua empresa.</p>
            </div>

            <!-- End of Section Title -->

            <div class="row">
                <!-- Features Holder-->
                <div class="col-md-10 offset-md-1 features-holder">
                    <div class="row">
                        <!-- Features Item -->
                        <div class="col-md-4 col-sm-12 text-center mt-4">
                            <div class="shadow rounded feature-item p-4 mb-4">
                                <div class="my-4">
                                    <i class="lnr lnr-cog fs-40"></i>
                                </div>
                                <h4>Fácil de personalizar</h4>
                                <p>Oferecemos soluções que são facilmente adaptáveis às suas necessidades específicas, permitindo uma personalização rápida e fácil para os requisitos do seu projeto.</p>
                            </div>
                            <div class="shadow rounded feature-item p-4 mb-4">
                                <div class="my-4">
                                    <i class="lnr lnr-frame-contract fs-40"></i>
                                </div>
                                <h4>Pixel Perfect</h4>
                                <p>Garantimos um trabalho meticuloso e detalhado em cada aspecto do design e impressionantes em cada pixel.</p>
                            </div>
                        </div>
                        <!-- End of Feature Item -->
                        <!-- Features Item -->
                        <div class="col-md-4 col-sm-12 text-center">
                            <div class="shadow rounded feature-item p-4 mb-4">
                                <div class="my-4">
                                    <i class="lnr lnr-bubble fs-40"></i>
                                </div>
                                <h4>Full Support</h4>
                                <p>Estamos sempre aqui para ajudar. Oferecemos suporte completo durante todo o processo, desde a concepção até a implementação.</p>
                            </div>
                            <div class="shadow rounded feature-item p-4 mb-4">
                                <div class="my-4">
                                    <i class="lnr lnr-magic-wand fs-40"></i>
                                </div>
                                <h4>Clean Design</h4>
                                <p>Nosso foco está em criar designs limpos e elegantes que não apenas cativam visualmente, mas também proporcionam uma experiência de usuário intuitiva e agradável.</p>
                            </div>
                        </div>
                        <!-- End of Feature Item -->
                        <!-- Features Item -->
                        <div class="col-md-4 col-sm-12 text-center mt-4">
                            <div class="shadow rounded feature-item p-4 mb-4">
                                <div class="my-4">
                                    <i class="lnr lnr-clock fs-40"></i>
                                </div>
                                <h4>Projeto no prazo</h4>
                                <p>Comprometemo-nos a entregar seus projetos dentro do prazo acordado, mantendo a qualidade e garantindo que você tenha uma experiência tranquila e sem atrasos.</p>
                            </div>
                            <div class="shadow rounded feature-item p-4 mb-4">
                                <div class="my-4">
                                    <i class="lnr lnr-thumbs-up fs-40"></i>
                                </div>
                                <h4>Feitos com modernidade</h4>
                                <p>Nossos projetos são desenvolvidos utilizando tecnologias modernas, garantindo não apenas eficiência e flexibilidade, mas também um código limpo e organizado.</p>
                            </div>
                        </div>
                        <!-- End of Feature Item -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End of Features Section-->	<section id="section-featurettes" class="featurettes overlay bg-fixed" style="background-image: url(img/bg.jpg);">

    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center text-white">

                        <div class="col-md-4 offset-md-2 col-sm-6">
                            <h4 class="mb-4">Responsividade pratica e rapida para seus projetos</h4>
                            <p>Trabalhamos com o melhor alcance do mercado para que possamos proporcionar responsividade e acessibilidade para todos os clientes.</p>
                            <button type="button" class="btn btn-outline-primary">CONTATO</button>
                        </div><!--/ .col-md-4.col-md-offset-2.col-sm-6 -->

                        <div class="col-md-4 offset-md-right-2 col-sm-6">
                            <img style="border-radius: 20px;" class="my-5" src="img/app-codeforge.png" alt="">
                        </div><!--/ .col-md-4.col-md-offset-right-2.col-sm-6 -->

                    </div><!--/ .featurettes-item -->

                </div><!--/ .col-md-12 -->

            </div><!--/ .row -->
        </div>
    </div><!--/ .container -->

</section>	<section id="section-featurettes" class="featurettes">

    <style>
        #counter-up-trigger{
            padding: 150px;
        }
        .counter-up .cover {
    background-color: rgba(0, 7, 11, 0.8);
    }
    .cover {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0px;
    top: 0px;
    background-color: rgba(0, 46, 82, 0.15);
    }

    .devider {
    width: 100%;
    height: 23px;
    background: url(../img/imgSkills/img/devider.png) no-repeat center center;
    margin: 5px 0 10px;
}
.counter-up {
	position: relative;
	background-color: #171717;
	padding: 80px 0 50px 0;
}
.counter-up .cover {
	background-color: rgba(0, 7, 11, 0.8);
}
.counter-up .fact {
}
.counter-up .fact.last {
	border-right: none;
}
.counter-up .fact-inner {
	padding-bottom: 30px;
}
.counter-up .fact-inner .counter {
	font-size: 60px;
}
/* ===== End Counter-Up ===== */


/* ===== End progress bar ===== */

.member-info {
    display: flex;
    flex-direction: column;
    align-items: unset;
    justify-content: space-around;
    width: 100%;
    text-align: center;
    padding: 4% 4%;
    margin: 0;
}

.member-info h3{
    font-size: 15pt;
}

.member-info p{
    font-size: 15pt;
}

.barra-sobre {
    height: 5px;
    background-color: #ff9900;
    text-align: right;
    color: white;
    line-height: 2px;
    transition: width 2s ease-out;
}
.estatistica-info{
    padding: 2% 0%;
}


.estatistica-info span, p{
    font-size: 15pt;
}

.social-link .fab {
    width: 35px;
    height: 35px;
    line-height: 35px;
    background-color: #ff9900;
    color: #fff;
    margin: 0 7px;
    cursor: pointer;
    transition: transform 0.5s;
}

    </style>
    <link rel="stylesheet" href="{{ asset('css/styleSkills.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
    <div class="member-info container-fluid">
        <h3 style="font-size: 2rem;" class="text-center">Habilidades em Ferramentas Gerais</h3>
        <p>Ferramentas de desenvolvimento &amp; Design</p>
        <div style="display: flex; gap:15%; padding:1% 0%;">
        <div class="estatistica-container">
            <div class="estatistica-sobre" data-percent="90">
              <div class="estatistica-info">
                  <span>HTML</span>
                  <p class="numero-sobre">90%</p>
              </div>
              <div class="progresso-sobre">
                <div class="barra-sobre" style="width: 81%;"></div>
              </div>
            </div>
            <div class="estatistica-sobre" data-percent="80">
              <div class="estatistica-info">
                  <span>CSS</span>
                  <p class="numero-sobre">80%</p>
              </div>
              <div class="progresso-sobre">
                <div class="barra-sobre" style="width: 64%;"></div>
              </div>
            </div>
            <div class="estatistica-sobre" data-percent="85">
              <div class="estatistica-info">
                  <span>JavaScript</span>
                  <p class="numero-sobre">85%</p>
              </div>
              <div class="progresso-sobre">
                <div class="barra-sobre" style="width: 72.25%;"></div>
              </div>
            </div>
            <div class="estatistica-sobre" data-percent="85">
                <div class="estatistica-info">
                    <span>PHP</span>
                    <p class="numero-sobre">85%</p>
                </div>
                <div class="progresso-sobre">
                  <div class="barra-sobre" style="width: 72.25%;"></div>
                </div>
              </div>
          </div>
          <div class="estatistica-container">
            <div class="estatistica-sobre" data-percent="70">
              <div class="estatistica-info">
                  <span>Adobe Photoshop</span>
                  <p class="numero-sobre">70%</p>
              </div>
              <div class="progresso-sobre">
                <div class="barra-sobre" style="width: 71%;"></div>
              </div>
            </div>
            <div class="estatistica-sobre" data-percent="60">
              <div class="estatistica-info">
                  <span>React JS</span>
                  <p class="numero-sobre">60%</p>
              </div>
              <div class="progresso-sobre">
                <div class="barra-sobre" style="width: 64%;"></div>
              </div>
            </div>
            <div class="estatistica-sobre" data-percent="75">
              <div class="estatistica-info">
                  <span>Node JS</span>
                  <p class="numero-sobre">75%</p>
              </div>
              <div class="progresso-sobre">
                <div class="barra-sobre" style="width: 75.25%;"></div>
              </div>
            </div>
            <div class="estatistica-sobre" data-percent="85">
                <div class="estatistica-info">
                    <span>Laravel</span>
                    <p class="numero-sobre">85%</p>
                </div>
                <div class="progresso-sobre">
                  <div class="barra-sobre" style="width: 82.25%;"></div>
                </div>
              </div>
          </div>
        </div>

        <div style="margin-top: 2%;" class="social-link">
            <h3 style="font-size: 1rem;margin-bottom:1%;" class="text-center">Redes Sociais da Empresa</h3>
            <a href="https://github.com/CodeForgeGroup" target="_blank"><i class="fab fa-github"></i></a>
            <a href="mailto: codeforgegroup@gmail.com"><i class="fab ri-mail-fill"></i></a>
        </div>
      </div>


    <div class="">
        <section id="counter-section">
            <div id="counter-up-trigger" class="counter-up text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(&quot;img/imgSkills/img/counter-bg.jpg&quot;); background-position: 0px 199.961px;">
                <div class="cover"></div>
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="col-md-12 page-header text-center wow fadeInDown animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
                            <h2>Veja nossos feitos</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Descubra sobre nossa empresa</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">

                    <div class="row">

                        <div class="fact text-center col-md-3 col-sm-6">
                            <div class="fact-inner">
                                <i class="fa fa-users fa-3x"></i>
                                <div class="extra-space-l"></div>
                                <span class="counter">3</span>
                                <p class="lead">Clientes Presentes</p>
                            </div>
                        </div>

                        <div class="fact text-center col-md-3 col-sm-6">
                            <div class="fact-inner">
                                <i class="fa fa-leaf fa-3x"></i>
                                <div class="extra-space-l"></div>
                                <span class="counter">15</span>
                                <p class="lead">Projetos Completos</p>
                            </div>
                        </div>

                        <div class="fact text-center col-md-3 col-sm-6">
                            <div class="fact-inner">
                                <i class="fa fa-trophy fa-3x"></i>
                                <div class="extra-space-l"></div>
                                <span class="counter">4</span>
                                <p class="lead">Avaliações</p>
                            </div>
                        </div>

                        <div class="fact last text-center col-md-3 col-sm-6">
                            <div class="fact-inner">
                                <i class="fa fa-usd fa-3x"></i>
                                <div class="extra-space-l"></div>
                                <span class="counter">5</span>
                                <p class="lead">Projetos Vendidos</p>
                            </div>
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>
        </section>
    </div><!--/ .container -->

</section>	<!-- Testimonial Section-->
<section id="testimonial" class="section-padding bg-fixed bg-white overlay" style="background-image: url(img/bg-white.jpg);">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <h2>
                    Avaliações
                </h2>
            </div>
            <div class="row">
                <!-- Depoimentos -->
                <div class="testi-content testi-carousel owl-carousel">
                    <div class="testi-item text-center">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <h4 class="testi-text"><b>Code Forge</b> é o melhor agência que já contratei até agora.<br> É ideal para pessoas sem conhecimento em programação como eu!</h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            <div class="testi-img mr-2">
                                <img src="img/testi-1.jpg" alt="">
                            </div>
                            <div class="testi-details">
                                <p class="testi-author mb-0 font-weight-bolder">João Silva</p>
                                <p class="testi-desc mb-0">Empresário</p>
                            </div>
                        </div>

                    </div>
                    <div class="testi-item text-center">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <h4 class="testi-text"><b>Code Forge</b> uma agência que trabalha com prazos e entrega.<br> Eu adorei o trabalho e a contribuição da agência em meu projeto, obrigado.</h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            <div class="testi-img mr-2">
                                <img src="img/testi-1.jpg" alt="">
                            </div>
                            <div class="testi-details">
                                <p class="testi-author mb-0 font-weight-bolder">Vitor Santos</p>
                                <p class="testi-desc mb-0">Vendedor</p>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item text-center">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <h4 class="testi-text">Eu agradeço o esforço e a atenção dedicada a mim, sou um cliente muito satisfeito.<br>Espero podermos trabalhar juntos outra vez.</h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            <div class="testi-img mr-2">
                                <img src="img/testi-1.jpg" alt="">
                            </div>
                            <div class="testi-details">
                                <p class="testi-author mb-0 font-weight-bolder">Kaua Silva</p>
                                <p class="testi-desc mb-0">Empresário</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Fim de avaliações --}}
            </div>

        </div>
    </div>
</section>
<!-- End of Testimonial Section-->	<!-- Portfolio Section -->
<section id="portfolio" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap">
                <h2 class="section-title">Nossos <b>Melhores</b> Trabalhos</h2>
                <p class="section-sub-title">Aqui você pode saber mais sobre o tipo do nosso trabalho e como trabalhos<br>Projetos que foram feitos e estão no mercado hoje!</p>
            </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Portfolio Holder -->
                <div class="col-md-12 portfolio-holder mt-3">
                    <!-- Btn Filter -->
                    <div class="filter-button-group btn-filter d-flex justify-content-center">
                        <a tabindex="0" class="is-checked" data-filter="*">Show All</a>
                        <a tabindex="0" data-filter=".minimalism">Minimalism</a>
                        <a tabindex="0" data-filter=".vintage">Vintage</a>
                        <a tabindex="0" data-filter=".creative">Creative</a>
                    </div>
                    <!-- End of Btn Filter -->
                    <!-- Portfolio Content -->
                    <div class="grid-portfolio">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <!-- Portfolio Item -->
                        <div class="grid-item minimalism">
                            <div class="grid-item-wrapper">
                                <img src="img/Projetos/web.png" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/Projetos/web.png" title="Photo-1">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Tablet</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End of Portfolio Item -->
                        <!-- Portfolio Item -->
                        <div class="grid-item vintage">
                            <div class="grid-item-wrapper">
                                <img src="img/Projetos/355web.png" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/Projetos/355web.png" title="Ship">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Computador</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End of Portfolio Item -->
                        <!-- Portfolio Item -->
                        <div class="grid-item creative grid-item-height">
                            <div class="grid-item-wrapper">
                                <img src="img/Projetos/532web.png" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/Projetos/532web.png" title="Tracy Portrait">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Mobile</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End of Portfolio Item -->
                        <!-- Portfolio Item -->
                        <div class="grid-item creative">
                            <div class="grid-item-wrapper">
                                <img src="img/photo-7.jpg" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/photo-7.jpg" title="Guitar">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Tablet</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End of Portfolio Item -->
                        <!-- Portfolio Item -->
                        <div class="grid-item vintage">
                            <div class="grid-item-wrapper">
                                <img src="img/Projetos/leflower.png" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/photo-4.jpg" title="Bookself">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Computador</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End of Portfolio Item -->
                        <!-- Portfolio Item -->
                        <div class="grid-item creative">
                            <div class="grid-item-wrapper">
                                <img src="img/Projetos/obras.png" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/photo-9.jpg" title="Guitar">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Red</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End of Portfolio Item -->
                    </div>
                    <!-- End of Portfolio Content -->
                </div>
                <!-- End of Portfolio Holder -->
            </div>
        </div>
    </div>
</section>
<!-- End of Portfolio Section -->	<!-- Client Section -->
<section id="client" class="overlay bg-fixed" style="background-image: url(img/bg.jpg);">
    <div class="container">
        <div class="section-content">
            <div class="row ">
                <div class="col-md-12">
                    <!-- Section Title -->
                    <div class="title-wrap mb-5">
                        <h2>Ferramentais com<span> quais trabalhamos</span></h2>
                    </div>
                    <!-- End of Section Title -->
                </div>
                <!-- Client Holder -->
                <div class="col-md-12 client-holder">
                    <div class="client-slider owl-carousel">
                        <div class="client-item">
                            <img class="img-responsive" src="img/client1.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="img/laravel.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="img/javascript.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="img/html.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="img/css.png" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="img/react.png" alt=" ">
                        </div>
                    </div>
                    <!-- End of Client Holder -->
                </div>
            </div>
        </div>
</section>
<!-- End of Client Section -->	<!-- Reservation Section -->
<section id="reservation" class="bg-white section-content">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-1 mb-5 mb-lg-0">
                <div class="bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <h2 class="mb-4">
                            Contate-nos
                        </h2>
                    </div>
                    <form id="form-contato" onsubmit="return false">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome: ">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email: ">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="numero" name="numero" placeholder="Número: ">
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="mensagem" name="mensagem" rows="6" placeholder="Deixe sua mensagem: "></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit" onclick="enviarEmail()">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <h2 class="mb-4">
                    Melhor solução para criar qualquer website. Pague uma vez.
                </h2>
                <p class="mb-4">Comece hoje sua nova solução para sua empresa, para que possa alavancar suas vendas e serviços.</p>

                <ul class="list-inline py-2">
                    <li class="list-inline-item text-center">
                        <span class="lnr fs-40 lnr-rocket"></span>
                        <p>Entrega rápida</p>
                    </li>
                    <li class="list-inline-item text-center">
                        <span class="lnr fs-40 lnr-magic-wand"></span>
                        <p>Design incrível</p>
                    </li>
                    <li class="list-inline-item text-center">
                        <span class="lnr fs-40 lnr-cog"></span>
                        <p>Fácil de personalizar</p>
                    </li>
                </ul>

                <a href="#" class="btn btn-link p-0">
                    <span>COMPRE AGORA</span>
                    <span class="lnr lnr-arrow-right"></span>
                </a>
            </div>

        </div>

    </div>
</section>
@endsection
