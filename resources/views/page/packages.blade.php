@extends('layouts.page.app')
@section('content')
    <header class="header-detail">
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            <img src="{{asset('images/packages/slider/AV612-1.jpg')}}" alt="">
        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h1 class="font-weight-lighter h2 mt-5">PAQUETES DE VIAJE A PERÚ</h1>
                    <div>
                        <div class="tl-1"></div>
                        <div class="tl-2"><img src="{{asset('images/logo-andes-ave-white.png')}}" alt="" class="w-100"></div>
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


    <section id="title_section">
        <div class="container px-0">
            <div class="row my-5">
                <div class="col text-center">
                    <h2 class="font-weight-bold display-4 text-g-yellow">Paquetes de Viaje <strong class="text-g-green">Destacados</strong></h2>
                    <p class="lead">Nuestros paquetes más populares En Perú, Estos paquetes pueden ser usados como referencia para personalizar tu viaje. En GOTOPERU Nos especializamos en la elaboración de experiencias personalizadas basadas en sus preferencias; invitamos a revisar estos programas para tener una idea de los destinos más importantes, por ejemplo, Machu Picchu, Lake Titicaca, Nazca y el Amazonas.</p>
                </div>
            </div>
            <search-package-page></search-package-page>
            <div class="row d-none">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex mb-3">
                    <div class="card w-100 shadow-sm">
                        <div class="header-img-packages position-relative">
                            <a href="'package/'+paquete_p.titulo"><img class="card-img-top" src="{{asset('images/packages/AV400.jpg')}}" alt=""></a>
                            <div class="position-absolute-bottom bg-rgba-dark-3 px-3 py-2">

                                <h5 class="text-white m-0">Cuso Clasico</h5>

                                        <small class="text-white">Lima, Machu Picchu, Valle Sagrado</small>

                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <p class="font-weight-bold h5 m-0">6 Días</p>
                                </div>
                                <div class="col-auto">
                                    <p class="font-weight-bold text-primary h5 m-0"><sup class="small"><small>desde</small></sup> $120<small>USD</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex mb-3">
                    <div class="card w-100 shadow-sm">
                        <div class="header-img-packages position-relative">
                            <a href="'package/'+paquete_p.titulo"><img class="card-img-top" src="{{asset('images/packages/AV400.jpg')}}" alt=""></a>
                            <div class="position-absolute-bottom bg-rgba-dark-3 px-3 py-2">

                                <h5 class="text-white m-0">Cuso Clasico</h5>

                                <small class="text-white">Lima, Machu Picchu, Valle Sagrado</small>

                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <p class="font-weight-bold h5 m-0">6 Días</p>
                                </div>
                                <div class="col-auto">
                                    <p class="font-weight-bold text-primary h5 m-0"><sup class="small"><small>desde</small></sup> $120<small>USD</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex mb-3">
                    <div class="card w-100 shadow-sm">
                        <div class="header-img-packages position-relative">
                            <a href="'package/'+paquete_p.titulo"><img class="card-img-top" src="{{asset('images/packages/AV400.jpg')}}" alt=""></a>
                            <div class="position-absolute-bottom bg-rgba-dark-3 px-3 py-2">

                                <h5 class="text-white m-0">Cuso Clasico</h5>

                                <small class="text-white">Lima, Machu Picchu, Valle Sagrado</small>

                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <p class="font-weight-bold h5 m-0">6 Días</p>
                                </div>
                                <div class="col-auto">
                                    <p class="font-weight-bold text-primary h5 m-0"><sup class="small"><small>desde</small></sup> $120<small>USD</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex mb-3">
                    <div class="card w-100 shadow-sm">
                        <div class="header-img-packages position-relative">
                            <a href="'package/'+paquete_p.titulo"><img class="card-img-top" src="{{asset('images/packages/AV400.jpg')}}" alt=""></a>
                            <div class="position-absolute-bottom bg-rgba-dark-3 px-3 py-2">

                                <h5 class="text-white m-0">Cuso Clasico</h5>

                                <small class="text-white">Lima, Machu Picchu, Valle Sagrado</small>

                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <p class="font-weight-bold h5 m-0">6 Días</p>
                                </div>
                                <div class="col-auto">
                                    <p class="font-weight-bold text-primary h5 m-0"><sup class="small"><small>desde</small></sup> $120<small>USD</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

{{--                <div class="col-6 mb-4">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col">--}}
{{--                            <div class="swiper-container swiper-container-gallery position-relative">--}}
{{--                                <div class="swiper-wrapper">--}}
{{--                                    <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/itinerary/15681356773571.2.jpg')}}">--}}
{{--                                        <img src="{{asset('images/itinerary/15681356773571.2.jpg')}}" class="w-100">--}}
{{--                                    </a>--}}
{{--                                    <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/itinerary/1571243284484Humantay lake.png')}}"><img src="{{asset('images/itinerary/1571243284484Humantay lake.png')}}" class="w-100"></a>--}}
{{--                                </div>--}}
{{--                                <!-- Add Pagination -->--}}
{{--                                <div class="swiper-pagination"></div>--}}
{{--                                <div class="position-absolute-top text-center">--}}
{{--                                    <div class="row align-items-center">--}}
{{--                                        <div class="col">--}}
{{--                                            <span class="badge badge-danger">Classic</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white shadow-sm p-4">--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <div class="col">--}}
{{--                                <h5 class="font-weight-bold text-"> MACHUPICCHU EXPRESS EN LIMA Y CUSCO</h5>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <div class="card p-2 shadow-sm">--}}
{{--                                    <span class="font-weight-bold text-danger">Desde $<b class="h1 font-weight-bold">1109</b>usd</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="line-subtitle"></div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <p class="text-info font-weight-bold"><i data-feather="clock" class="text-" stroke-width="1"></i> 6 Días</p>--}}
{{--                                <p class=""><i data-feather="map-pin" class="text-" stroke-width="1"></i> Lima, CaÑon Del Colca, Lineas De Nazca, Arequipa, Puno Y Lago Titicaca, Valle Sagrado, Machu Picchu, Cusco.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row align-items-center mt-3">--}}
{{--                            <div class="col text-left">--}}
{{--                                <a href="{{route('detail_path', 'hola')}}" class="btn btn-sm btn-outline-secondary font-weight-bold rounded-0" onclick="view_itinerary()"> Solicitar cotización</a>--}}
{{--                            </div>--}}
{{--                            <div class="col text-right">--}}
{{--                                <a href="{{route('detail_path', 'hola')}}" class="btn btn-outline-primary font-weight-bold rounded-0" onclick="view_itinerary()">Ver Detalle del Paquete <i data-feather="chevron-right" class="text-" stroke-width="3"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-6 mb-4">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col">--}}
{{--                            <div class="swiper-container swiper-container-gallery position-relative">--}}
{{--                                <div class="swiper-wrapper">--}}
{{--                                    <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/itinerary/15681356773571.2.jpg')}}">--}}
{{--                                        <img src="{{asset('images/itinerary/15681356773571.2.jpg')}}" class="w-100">--}}
{{--                                    </a>--}}
{{--                                    <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/itinerary/1571243284484Humantay lake.png')}}"><img src="{{asset('images/itinerary/1571243284484Humantay lake.png')}}" class="w-100"></a>--}}
{{--                                </div>--}}
{{--                                <!-- Add Pagination -->--}}
{{--                                <div class="swiper-pagination"></div>--}}
{{--                                <div class="position-absolute-top text-center">--}}
{{--                                    <div class="row align-items-center">--}}
{{--                                        <div class="col">--}}
{{--                                            <span class="badge badge-danger">Classic</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white shadow-sm p-4">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <h5 class="font-weight-bold text-secondary"><mark class="text-dark">6 Días</mark> MACHUPICCHU EXPRESS </h5>--}}
{{--                                <span class="font-weight-bold text-danger">Desde $1109usd</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="line-subtitle"></div>--}}
{{--                        <div class="row mt- mb-3">--}}

{{--                            <div class="col">--}}
{{--                                <span class="font-weight-bold">Lima, Cusco, Machu Picchu, Puno.</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        --}}{{--                        <p>Si sentir la adrenalina es lo tuyo, este paquete es para ti. Desde los rapidos del Río Urubamba hasta la sensación de libertad y vertigo del Zipline o el derrape en el tour a Maras y Moray en cuatrimotos. En fin, este personalmente es uno de nuestros paquetes preferidos, por supuesto con los mejores especialistas en cada día y con la visita a una de las 7 maravillas del mundo moderno ¡MACHUPICCHU! </p>--}}
{{--                        <div class="row mt-4">--}}
{{--                            --}}{{--                            <div class="col">--}}
{{--                            --}}{{--                                <span class="badge badge-danger">Classic</span>--}}
{{--                            --}}{{--                            </div>--}}
{{--                            <div class="col-12 text-center">--}}
{{--                                <a href="{{route('detail_path', 'hola')}}" class="btn btn-g-yellow text-white rounded-0" onclick="view_itinerary()">DETALLE DEL PAQUETE</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

        </div>
    </section>

    {{--        <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">--}}
    {{--            <h4 id="list-item-1">Item 1</h4>--}}
    {{--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur error eveniet ipsum perferendis quam quos saepe sit soluta! Explicabo facere molestiae quod recusandae voluptatem. Ad assumenda debitis nam natus nihil?</p>--}}
    {{--            <h4 id="list-item-2">Item 2</h4>--}}
    {{--            <p>...</p>--}}
    {{--            <h4 id="list-item-3">Item 3</h4>--}}
    {{--            <p>...</p>--}}
    {{--            <h4 id="list-item-4">Item 4</h4>--}}
    {{--            <p>...</p>--}}
    {{--            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam architecto corporis dicta error facilis ipsam magni, mollitia necessitatibus odio quasi quo, repudiandae saepe sapiente sed. Cum qui sed veritatis!--}}
    {{--        </div>--}}
    <section id="consulte" class="pt-5">
        <div class="container-fluid">
            <div class="row justify-content-center my-4">
                <div class="col-2">
                    <img src="{{asset('images/logo-andes-y.png')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-7">
                    <h5 class="font-weight-bold text-center">CONSULTA DE VIAJES</h5>
                    <form-inquire></form-inquire>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        var swiper = new Swiper('.swiper-container-gallery', {
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },
        });

        var swiper = new Swiper('.swiper-container-detail', {
            direction: 'vertical',
            slidesPerView: 'auto',
            freeMode: true,
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            mousewheel: true,
        });

        function view_itinerary() {
            $('#box-resumen').addClass('d-none');
            $('#box-detail').removeClass('invisible');
            $('.align-items-resumen').removeClass('align-items-center');
            // $('#box-resumen').addClass('d-none');
            // $('#box-resumen').removeClass('d-block');
            // $('#box-detail').addClass('d-block');
            // $('#box-detail').removeClass('d-none');
            // $('.box-detail').show();
            view_itinerary_resumen
        }

        function view_itinerary_resumen() {
            $('#box-resumen').removeClass('d-none');
            $('#box-detail').addClass('invisible');
            $('.align-items-resumen').addClass('align-items-center');
        }

    </script>
@endpush

