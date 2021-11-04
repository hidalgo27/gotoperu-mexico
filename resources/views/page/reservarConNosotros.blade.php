@extends('layouts.page.app')
@section('content')

    <header>
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            {{--                <iframe title="GotoPeru background video" src="https://player.vimeo.com/video/361847703?background=1" width="100%" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
            <img src="{{asset('images/FOTOGRAMA8.jpg')}}" alt="" loading="lazy">
        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h2 class="h1 font-weight-light h2 mt-5">RESERVE CON NOSOTROS</h2>
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
        <div class="container ">
            <div class="row mb-5">
                <div class="col">
                    <h1 class=" text-center text-g-green font-weight-bolder my-3">¿POR QUÉ ELEGIR <span class=" text-g-yellow">GOTOPERU?</span></h1>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-6 card border-0 ">
                    <div class="mx-3 p-3 border border-g-yellow shadow card-body ">
                        <div class="row">
                            <div class=" col-3 my-auto text-center">
                                <img src="{{asset('images/trustworthy.png')}}" width="65">
                            </div>
                            <div class=" col-9 my-auto ">
                                <h5 class=" font-weight-bolder text-g-yellow">RESERVA CON CONFIANZA</h5>
                            </div>
                        </div>
                        <hr class="pt-2">
                        <div class="row">
                            <div class="col">
                                <p>Planifique su viaje sin riesgos con GOTOPERU, disfrutando de plazos flexibles y tranquilidad. Nuestros depósitos comienzan desde el 20%. Aplican terminos y condiciones.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 card border-0">
                    <div class="mx-3 p-3 border border-g-green shadow card-body">
                        <div class="row row-eq-height">
                            <div class=" col-3 my-auto text-center">
                                <img src="{{asset('images/location.png')}}" width="65">
                            </div>
                            <div class=" col-9 my-auto ">
                                <h5 class=" font-weight-bolder text-g-green">EXPERTOS EN VIAJES LOCALES DE CONFIANZA</h5>
                            </div>
                        </div>
                        <hr class="pt-2">
                        <div class="row">
                            <div class="col">
                                <p>GOTOPERU se estableció en 2010 y desde entonces ha estado creando recorridos inolvidables en Perú. Nuestros consultores de viajes tienen un amplio conocimiento de nuestro país y utilizarán su experiencia para diseñar su viaje perfecto a Perú.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class=" col-md-6 card border-0">
                    <div class="mx-3 p-3 border border-g-green shadow card-body">
                        <div class="row">
                            <div class=" col-3 my-auto text-center">
                                <img src="{{asset('images/review.png')}}" width="65">
                            </div>
                            <div class=" col-9 my-auto ">
                                <h5 class=" font-weight-bolder text-g-green">EXCELENTES TESTIMONIOS</h5>
                            </div>
                        </div>
                        <hr class="pt-2">
                        <div class="row">
                            <div class="col">
                                <p>GOTOPERU apuesta por el mejor servicio, y esto se refleja año tras año cuando Tripadvisor nos premia con su Certificado de Excelencia. Nos enorgullecemos de los comentarios de nuestros clientes, el 97% de nuestros viajeros dicen que nos recomendarían a familiares y amigos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 card border-0">
                    <div class="mx-3 p-3 border border-g-yellow shadow card-body">
                        <div class="row row-eq-height">
                            <div class=" col-3 my-auto text-center">
                                <img src="{{asset('images/photographer.png')}}" width="65">
                            </div>
                            <div class=" col-9 my-auto ">
                                <h5 class=" font-weight-bolder text-g-yellow">EXPERIENCIA SIN ESTRÉS</h5>
                            </div>
                        </div>
                        <hr class="pt-2">
                        <div class="row">
                            <div class="col">
                                <p>Manejamos todos los detalles para la planificación de unas vacaciones inolvidables en Perú. Nuestro agente estará ahí desde tu llegada y en cada punto de servicio, para que ahorres tiempo y esfuerzo. Puede mirar hacia adelante y disfrutar de su viaje a Perú sabiendo que GOTOPERU lo tiene todo a la mano.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class=" col-md-6 card border-0">
                    <div class="mx-3 p-3 border border-g-yellow shadow card-body">
                        <div class="row">
                            <div class=" col-3 my-auto text-center">
                                <img src="{{asset('images/appreciation.png')}}" width="65">
                            </div>
                            <div class=" col-9 my-auto ">
                                <h5 class=" font-weight-bolder text-g-yellow">ESTÁS EN BUENAS MANOS</h5>
                            </div>
                        </div>
                        <hr class="pt-2">
                        <div class="row">
                            <div class="col">
                                <p>Sabemos que estamos aquí no solo para lo porgramado, sino también en situaciones imprevistas o a veces perturbadoras, como huelgas. Si surge algo inesperado durante su viaje a Perú nosotros nos encargaremos de ajustar su itinerario mientras lo mantendremos seguro e informado.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 card border-0">
                    <div class="mx-3 p-3 border border-g-green shadow card-body">
                        <div class="row row-eq-height">
                            <div class=" col-3 my-auto text-center">
                                <img src="{{asset('images/hotel.png')}}" width="65">
                            </div>
                            <div class=" col-9 my-auto ">
                                <h5 class=" font-weight-bolder text-g-green">HOTELES CUIDADOSAMENTE SELECCIONADOSS</h5>
                            </div>
                        </div>
                        <hr class="pt-2">
                        <div class="row">
                            <div class="col">
                                <p>Nuestros representantes de GOTOPERU seleccionan personalmente cada hotel incluido en su itinerario, asegurando que cada uno cumpla con nuestros altos estándares en cuanto a servicio, calidad, ubicación y carácter. Tener un lugar cómodo y amigable para descansar después de un día de exploración es muy importante y parte de tu experiencia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-2 banner-about">
        <div class=" container-fluid py-">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 class="text-g-green font-weight-bold my-5">NUESTRAS CERTIFICACIONES Y COMPROMISO</h4>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-8 my-auto lead">
                        <p>Estos son algunos reconocimientos obtenidos por GOTOPERU a lo largo de estos años, todos gracias al compromiso con la calidad, la sostenibilidad del ambiente y la responsabilidad social empresarial, que reflejan nuestro compromiso de crear experiencias de viaje inigualables y seguras para usted.</p>
                    </div>
                    <div class="col-lg-4 my-auto">  
                        <div class="row">
                            <div class="col-6">   
                                <img src="{{asset('images/trip-advisor-certificate-of-excellence-2021.png')}}" width="180">
                            </div>
                            <div class="col-6">  
                                <img src="{{asset('images/wttc-safetravels.png')}}" width="130">
                            </div>  
                        </div> 
                    </div>
                </div>
                <div class="row mt-5 mx-auto text-center pb-5">
                    <div class="col-lg-2 col-md-3 ">
                        <img src="{{asset('images/peru.png')}}"  width="120">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="{{asset('images/asta.png')}}" width="120">
                    </div>
                    <div class="col-lg-2 col-md-3 ">
                        <img src="{{asset('images/apavit.png')}}" width="120">
                    </div>
                    <div class="col-lg-2 col-md-3 ">
                        <img src="{{asset('images/expedia.png')}}" width="120">
                    </div>
                    <div class="col-lg-2 col-md-3 ">
                        <img src="{{asset('images/apotur.png')}}"  width="120">
                    </div>
                    <div class="col-lg-2 col-md-3 ">
                        <img src="{{asset('images/prom-peru.png')}}"  width="120">
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="py-3 bg-light">
        <div class="container">
            <div class="row py-3">
                <div class=" pt-5">
                    <h4 class="text-g-green font-weight-bolder pb-3">¿QUÉ DICEN NUESTROS CLIENTES?</h4>
                    <p>Descubra lo que nuestros increíbles clientes pensaron sobre su experiencia con GOTOPERU.</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col">
                    <div class="row justify-content-center">
                            <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-4 text-center">
                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" target="_blank">
                                            <img src="{{asset('images/icons/tripadvisor.png')}}" alt="Tripadvisor" class="w-100" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-truncate">
                                        <i class="fa fa-quote-left"></i>
                                        <span class="small">Nuestro Guía Franklin fue un experto no pudimos pedir un guía mejor, pudimos aprender mucho de la cultura e historia Inca!</span>
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <small class="text-g-yellow font-weight-bold">Jhon X2 feb 2019, USA</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-4 text-center">
                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank">
                                            <img src="{{asset('images/icons/yelp.png')}}" alt="Yelp" class="w-100" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-truncate">
                                        <i class="fa fa-quote-left"></i>
                                        <span class="small">Mi experiencia con la Agencia fue perfecta, yo la recomendaría para cualquier.</span>
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <small class="text-g-yellow font-weight-bold">Boon C. Jan 2019 Tampa, FL</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-4 text-center">
                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <a href="https://www.trustpilot.com/review/gotoperu.com" target="_blank">
                                            <img src="{{asset('images/icons/trust.png')}}" alt="TrustPilot" class="w-100" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-truncate">
                                        <i class="fa fa-quote-left"></i>
                                        <span class="small">No dude en recomendar GoToPeru para ayudar a diseñar su viaje. Martin como representante de primera línea</span>
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <small class="text-g-yellow font-weight-bold">jeanette Pan feb 2019, USA</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col text-center">
                                <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5867868-Has_anyone_booked_a_tour_with_GOTOPERU_www_gotoperu_org-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 1</a>
                                <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6509104-Gotoperu_Travel_Agency-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 2</a>
                                <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5657518-GOTOPERU_online_tour_operator-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 3</a>
                                <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6934201-Trip_Report_Two_glorious_weeks_in_Peru_with_GOTOPERU_ORG-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 4</a>
                                <a href="https://www.tripadvisor.co.za/ShowTopic-g294311-i818-k7362487-o10-GotoPeru_or_David_Expeditions-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 5</a>
                            </div>
                        </div>
                    </div>
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
@stop
