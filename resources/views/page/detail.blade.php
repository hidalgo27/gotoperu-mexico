@extends('layouts.page.app')
    @section('content')
        <header class="header-detail">
            <div class="overlay"></div>
            {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
            {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
            {{--            </video>--}}
            <div class="homepage-video">
                <img src="{{asset('images/packages/slider/AV500-1.jpg')}}" alt="">

            </div>
            <div class="container h-100">
                <div class="row d-flex h-100 text-center align-items-center">
                    <div class="col w-100 text-white mt-5">
                        <h1 class="font-weight-lighter h2 mt-5">Caminho Pelo Salkantay</h1>
                        <div>
                            <div class="tl-1"></div>
                            <div class="tl-2"><img src="{{asset('images/logo-andes-ave-white.png')}}" alt="" class="w-100"></div>
                            <div class="tl-3"></div>
                        </div>
                        <div class="mt-4">
                            <a href="" class="text-white">Detalle</a> |
                            <a href="" class="text-white">Itinerario</a> |
                            <a href="" class="text-white">Precios</a> |
                            <a href="" class="text-g-yellow font-weight-bold">Consulte Ahora</a>
                        </div>
{{--                        <a href="#Inquire" class="btn btn-outline-g-yellow btn-lg h2 font-weight-normal mt-3">Diseña tu Viaje</a>--}}
                        {{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
                    </div>
                </div>
            </div>
            <div class="position-absolute-bottom p-2">
                <div class="row justify-content-center">
                    <div class="col-auto text-center">
                        <a href="#title_section" class="mx-2">
                            <i data-feather="chevrons-down" class="text-white" stroke-width="1" height="50" width="50"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="nav-fixed">
                <div id="navbar-scroll" class="list-group list-group-detail sticky-top">
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#list-item-1" data-toggle="tooltip" data-placement="right" title="Detalle"></a>
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#list-item-2" data-toggle="tooltip" data-placement="right" title="Itinerario"></a>
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#list-item-3" data-toggle="tooltip" data-placement="right" title="Precios"></a>
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#list-item-4" data-toggle="tooltip" data-placement="right" title="Consulte Ahora"></a>
                </div>
            </div>
        </section>

        <section class="my-5" id="title_section">
            <div class="container position-relative">
                <div class="row">
                    <div class="col">
{{--                        <p class="">Somos <b>ANDESVIAGENS</b>, especialistas em viagens locais! Nossos guias, motoristas e representantes locais terão o prazer em compartilhar o melhor do nosso país em nossos mais de 12 anos de experiência criando viagens inesquecíveis para a terra dos Incas! Temos uma grande reputação, incluindo parceiros globais como Expedia, Travelocity e Tripadvisor, que também reconheceram nossos esforços citando-nos como os melhores especialistas locais.</p>--}}

                        <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
                            <h4 id="list-item-1">Item 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur error eveniet ipsum perferendis quam quos saepe sit soluta! Explicabo facere molestiae quod recusandae voluptatem. Ad assumenda debitis nam natus nihil?</p>
                            <h4 id="list-item-2">Item 2</h4>
                            <p>...</p>
                            <h4 id="list-item-3">Item 3</h4>
                            <p>...</p>
                            <h4 id="list-item-4">Item 4</h4>
                            <p>...</p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam architecto corporis dicta error facilis ipsam magni, mollitia necessitatibus odio quasi quo, repudiandae saepe sapiente sed. Cum qui sed veritatis!
                        </div>
                    </div>
                </div>
            </div>
        </section>


    @endsection
