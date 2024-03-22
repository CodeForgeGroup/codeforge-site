@extends('layout.layout')

@section('primeiro')
PROJETOS
@endsection

@section('title', 'Projetos')

@section('conteudo')



<section id="portfolio" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap d-flex flex-column">
                    <h2 class="section-title title-projects">Projetos desenvolvidos  / <em>Code Forge</em></h2>
                <p class="section-sub-title">Explore uma variedade de projetos desenvolvidos pela <em>Code Forge</em></p>
            </div>
            <div class="row">
                <!-- Portfolio Holder -->
                <div class="col-md-12 portfolio-holder mt-3">
                    <!-- Btn Filter -->
                    <div class="filter-button-group btn-filter d-flex justify-content-center">
                        <a onclick="ativarFiltro(this)" tabindex="0" class="is-checked" data-filter="*">Todos</a>
                        <a onclick="ativarFiltro(this)" tabindex="0" data-filter=".sites">Sites</a>
                        <a onclick="ativarFiltro(this)" tabindex="0" data-filter=".aplicativos">Aplicativos</a>
                    </div>

                    <!-- Portfolio Content -->
                    <div class="grid-portfolio">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <!-- Portfolio Item -->
                        <div class="grid-item sites" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img src="img/projetos/headerRoyal.png" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/projetos/headerRoyal.png" title="Site da Code Forge">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Code Forge</h4>
                                        <p style="color: black;">Site / Agência</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Portfolio Item -->
                        <div class="grid-item sites" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img src="img/projetos/headerRoyal.png" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/projetos/headerRoyal.png" title="Site da Royal Barber">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Royal Barber</h4>
                                        <p style="color: black;">Site / Barbearia</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Portfolio Item -->
                        <div class="grid-item sites grid-item-height" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img src="img/projetos/headerRoyal.png" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/projetos/headerRoyal.png" title="Site da Radar Imóveis">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Radar Imóveis</h4>
                                        <p style="color: black;">Site / Corretora</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Portfolio Item -->
                        <div class="grid-item aplicativos grid-item-height" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img src="img/projetos/headerRoyal.png" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/projetos/headerRoyal.png" title="Aplicativo da Radar Imóveis">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Radar Imóveis</h4>
                                        <p style="color: black;">Aplicativo / Corretora</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Portfolio Item -->
                        <div class="grid-item aplicativos grid-item-height" data-aos="fade-up">
                            <div class="grid-item-wrapper">
                                <img src="img/projetos/headerRoyal.png" alt="portfolio-img" class="portfolio-item">
                                <div class="grid-info">
                                    <div class="grid-link d-flex justify-content-center">
                                        <a class="img-pop" data-rel="lightcase" href="img/projetos/headerRoyal.png" title="Aplicativo da Royal Barber">
                                            <span class="lnr lnr-move"></span>
                                        </a>
                                        <a class="ext-link" href="https://unsplash.com/" target="_blank">
                                            <span class="lnr lnr-link"></span>
                                        </a>
                                    </div>
                                    <div class="grid-title">
                                        <h4>Royal Barber</h4>
                                        <p style="color: black;">Aplicativo / Barbearia</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


<script>

function ativarFiltro(element){

    var buttons = document.querySelectorAll('.btn-filter a');
    buttons.forEach(function(btn) {
        btn.classList.remove('is-checked');
    });

    element.classList.add('is-checked');
}
</script>
