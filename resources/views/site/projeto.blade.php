@extends('layout.layout')

@section('primeiro')
PROJETOS
@endsection

@section('title', 'Projetos')

@section('conteudo')

<section class="portfolio spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio__filter">
                    <li class="active" data-filter="*">Todos</li>
                    <li data-filter=".branding">Sites</li>
                    <li data-filter=".digital-marketing">Aplicativos</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio__gallery">
            <div class="col-lg-4 col-md-6 col-sm-6 mix branding">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-1.jpg">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Code Forge</h4>
                        <ul>
                            <li>Site</li>
                            <li>Agência</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix digital-marketing">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-2.jpg">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Royal Barber</h4>
                        <ul>
                            <li>Site</li>
                            <li>Barbearia</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-3.jpg">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>??</h4>
                        <ul>
                            <li>Site</li>
                            <li>Corretora</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination__option">
                    <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Próximo</a>
                    <a href="#" class="number__pagination">1</a>
                    <a href="#" class="number__pagination">2</a>
                    <a href="#" class="arrow__pagination right__arrow">Anterior <span class="arrow_right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

