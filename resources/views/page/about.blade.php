@extends('layouts.page.app')
@section('content')

    <header>
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            {{--                <iframe title="GotoPeru background video" src="https://player.vimeo.com/video/361847703?background=1" width="100%" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>
        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h1 class="font-weight-lighter h2 mt-5">GOTOPERU TUS EXPERTOS EN VIAJES LOCALES A PERÚ</h1>
                    {{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
                </div>
            </div>
        </div>
        <div class="position-absolute-bottom p-2">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <a href="" class="mx-2">
                        <i data-feather="facebook" class="text-white" stroke-width="1"></i>
                    </a>
                    <a href="" class="mx-2">
                        <i data-feather="twitter" class="text-white" stroke-width="1"></i>
                    </a>
                    <a href="" class="mx-2">
                        <i data-feather="youtube" class="text-white" stroke-width="1"></i>
                    </a>
                    <a href="" class="mx-2">
                        <i data-feather="instagram" class="text-white" stroke-width="1"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row mb-3">
                <div class="col text-center">
                    <h2 class="h1 text-g-green font-weight-bold text-center">¿Quiénes somos?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 card border-0">
                    <div class="row card-body">
                        <div class="col text-justify">
                            <p>GOTOPERU es una agencia de viajes que atiende a los viajeros que desean una experiencia original, auténtica e inolvidable en la tierra de los Incas. Ofrecemos paquetes de viaje a Perú, hechos a medida de acuerdo a sus intereses y necesidades, desde MachuPicchu hasta aventuras fuera de lo común en el Amazonas, Valle Sagrado, lago Titicaca, Lima, Arequipa y muchos más.</p>
                            <p>Desde que se estableció GOTOPERU en 2009, hemos tenido el placer de dar la bienvenida a decenas de miles de viajeros felices de más de 50 países. Esperamos poder darle la bienvenida y presentarle el Perú mágico, biodiverso e histórico.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 card border-0">
                    <div class="row card-body ">
                        <div class="col my-auto">
                            <img src="{{asset('images/placebg.jpg')}}" class="img-fluid shadow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class=" container-fluid">
            <div class="row">
                <div class="col-md-6 card border-0 bg-g-yellow rounded-0 px-3">
                    <div class="row card-body">
                        <div class="col">
                            <h5 class=" text-white font-weight-bold">NUESTROS VALORES</h5>
                            <p class=" text-white small" >En GOTOPERU, nos guiamos por un conjunto de valores fundamentales: calidad, pasión, confianza y servicio personalizado, y garantizamos que estos sellos se cumplirán todos los días durante sus vacaciones en Perú.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 card">
                    <div class="row card-body border-0 bg-g-green rouded-0 ">
                        <div class="row px-3">
                            <div class="col-md-6 text-center">
                                <h5 class="text-white font-weight-bold">COMPROMISO</h5>
                                <p class="text-white small">No dejar escapar la oportunidad de que nuestros turistas descubran los encantos de Perú y vivir una aventura inolvidable.</p>
                            </div>
                            <div class="col-md-6 text-center">
                                <h5 class="text-white font-weight-bold">MISIÓN</h5>
                                <p class="text-white small">Ofrecer a nuestros clientes los mejores recursos peruanos para una aventura inolvidable.</p>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative py-5">
            <div class="offer-banner">
                <div class="container mt-3">
                    <div class="row align-items-center pt-5 pt-md-0">
                        <div class="col-12 col-md-6">
                            <img src="{{asset('images/gotoperu-banner-rgba.png')}}" alt="" class="w-100" loading="lazy">
                        </div>
                        <div class="col-12 col-md-6">
                            <h4 class="text-center font-weight-bold h1 text-g-green">GOTO<span class="text-g-yellow">PERU</span></h4>
                            <p>Garantizamos una experiencia personalizada y de calidad que cumpla las expectativas de nuestros clientes. El modelo de Gestión de GOTOPERU está basado en la mejora continua y sus principales actuaciones son: Difundir las riquezas de nuestro país el Peru, sus costumbres, gastronomía, su patrimonio natural y cultural, ayudando a fomentar un turismo sostenible.</p>
                            <ul class="pl-3">
                                <li>Cede Central: Cusco, Perú</li>
                                <li>Company: 25 miembros</li>
                                <li>Fundado: 2009</li>
                                <li>Oficinas: Lima, Perú / New York, Usa</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="py-5 position-relative">
        <div class="offer-banner">
            <div class="container">
                <div class="row mb-2">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-bold text-g-green">Nuestro equipo</h2>
                    </div>
                </div>

                <div class="row justify-content-center mt-4">
                    @foreach($team as $teams)
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-5">
                        <div class="card">
                            <a class="venobox position-relative" data-gall="myGallery" href="{{$teams->imagen_portada}}">
                                <img src="{{$teams->imagen_portada}}" alt="image alt" class="card-img-top" loading="lazy">
                                <span class="position-absolute-top text-white">
                                    <i data-feather="image" stroke-width="1"></i>
                                </span>
                            </a>
                            <div class="card-body text-center">
                                <a class="venobox position-relative" href="{{$teams->imagen_perfil}}">
                                    <img src="{{$teams->imagen_perfil}}" alt="image alt" class="avatar rounded-circle" loading="lazy">
                                    <span class="position-absolute-bottom text-white">
                                        <i data-feather="image" stroke-width="2"></i>
                                    </span>
                                </a>
                                <h4 class="card-title">{{$teams->nombre}}</h4>
                                <h6 class="card-subtitle mb-2 text-g-yellow font-weight-bold">{{$teams->cargo}}</h6>
                                <p class="small">{{$teams->frase}}</p>
                                <p class="font-weight-bold small text-secondary"><i data-feather="thumbs-up" stroke-width="2"></i> <b>Actividad Favorita:</b> {{$teams->actividad}}</p>
                                <p class="small m-0"><i data-feather="mail" stroke-width="1"></i> {{$teams->email}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

    <section id="consulte" class="pt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-6 col-md-2">
                    <img src="{{asset('images/logo-gotoperu-black.png')}}" alt="logo" class="w-100" loading="lazy">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-7">
                    <h5 class="font-weight-bold text-center">CONSULTA DE VIAJES</h5>
                    <form-inquire></form-inquire>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="my-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col text-center">--}}
{{--                    <h2 class="font-weight-bold">Porque Nos Importa</h2>--}}
{{--                    <p class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ad aliquam animi at blanditiis dolor facilis fuga fugit harum, iste mollitia natus quisquam ratione saepe sit tenetur veniam voluptatem. Quasi!</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    sd--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@stop
