@extends('layouts.page.app')
@section('content')

    <header class="header-detail">
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            <img src="{{asset('images/social.jpg')}}" alt="" loading="lazy">

        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h1 class="font-weight-lighter h2 mt-5">RESPONSABILIDAD SOCIAL</h1>
                    <div>
                        <div class="tl-1"></div>
                        <div class="tl-2"><img src="{{asset('images/logo-andes-ave-white.png')}}" alt="" class="w-100" loading="lazy"></div>
                        <div class="tl-3"></div>
                    </div>
                    {{--                    <div class="mt-4">--}}
                    {{--                        <a href="" class="text-white">Detalle</a> |--}}
                    {{--                        <a href="" class="text-white">Itinerario</a> |--}}
                    {{--                        <a href="" class="text-white">Precios</a> |--}}
                    {{--                        <a href="" class="text-g-yellow font-weight-bold">Consulte Ahora</a>--}}
                    {{--                    </div>--}}
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

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row mb-3">
                <div class="col text-center">
                    <h2 class="h1 text-g-green font-weight-bold text-center">Porque nos importa<br><span class=" font-weight-bold h3 text-g-yellow">Retribuimos a nuestras comunidades</span></h2>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="col-md-4 card border-0">
                    <div class="row card-body ">
                        <div class="col my-auto">
                            <img src="{{asset('images/chahua.jpg')}}" class="img-fluid shadow">
                        </div>
                    </div>
                </div>
                <div class="col-md-8 card border-top-0 border-left-0">
                    <div class="row card-body">
                        <div class="col my-auto">
                            <p class="lead">El equipo de GOTOPERU se identifica con los niños de la comunidad de Chaullacohca - Cusco, ubicada a 15,000 alimentaciones (4500 mts) a 2 horas al noroeste de cusco. Tenemos muy en claro nuestra responsabilidad social con los niños de esta comunidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-2 bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <p class="lead"><b>En GOTOPERU estamos comprometidos a hacer negocios de una manera que realmente le devuelva a nuestras comunidades parte de nuestras ganancias especialmente a comunidades  ubicadas en lugares remotos. Nuestra planificación y ejecución de uno de nuestros viajes implica una larga cadena de suministro: desde guías y operadores locales hasta proveedores de transporte, hoteles y restaurantes, interactuamos con muchas organizaciones en diferentes lugares, pero también sabemos que algunas comunidades especialmente ubicadas arriba de los Andes a más de 15,000 pies que debido al difícil acceso, no reciben la asistencia que merecen, es por eso que organizamos periódicamente viajes a comunidades tan lejanas para traerles especialmente suéteres y juguetes para niños.</b></p>

                </div>

            </div>
        </div>
    </section>


    <section class="py-3 bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{asset('images/social/care2.jpg')}}" alt="" class="w-100 rounded" loading="lazy">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <img src="{{asset('images/social/care1.jpg')}}" alt="" class="w-100 rounded" loading="lazy">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <img src="{{asset('images/social/care3.jpg')}}" alt="" class="w-100 rounded" loading="lazy">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <img src="{{asset('images/social/care4.jpg')}}" alt="" class="w-100 rounded" loading="lazy">
                </div>
            </div>
        </div>
    </section>
@stop

