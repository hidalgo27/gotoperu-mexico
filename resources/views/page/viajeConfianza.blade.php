@extends('layouts.page.app')
@section('content')

    <header>
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            {{--                <iframe title="GotoPeru background video" src="https://player.vimeo.com/video/361847703?background=1" width="100%" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
            <img src="{{asset('images/FOTOGRAMA13.jpg')}}" alt="" loading="lazy">
        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    {{--<h1 class="font-weight-lighter h2 mt-5">Viaje con nosotros</h1>--}}
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
                    <h1 class=" text-center text-g-green font-weight-bolder my-3">¿Qué estamos haciendo por su <span class=" text-g-yellow">bienestar?</span></h1>
                </div>
            </div>
            <div class="row">
                <div class=" col-lg-5 card border-0">
                    <div class=" card-body">
                        <img src="{{asset('images/safe.jpg')}}" class=" img-fluid shadow">
                    </div>
                </div>
                <div class=" col-lg-7 card border-bottom-0 border-left-0 my-auto">
                    <div class=" card-body">
                        <h4 class=" text-g-dark-light mb-4 font-weight-bold">Procesos de higiene y salud</h4>
                        <p class="">Teniendo en cuenta los últimos desarrollos, hemos agregado medidas mejoradas a nuestros estándares de seguridad en viajes, incluidas políticas de mayor distanciamiento social para ofrecer las experiencias más seguras.
                        <br>Estas medidas se han desarrollado en consonancia con las recomendaciones del gobierno y los proveedores de salud en todos nuestros destinos. Por ejemplo, GOTOPERU ha implementado los protocolos de “Viajes Seguros” del Consejo Mundial de Viajes y Turismo y las normas “Limpias y Seguras” de la Oficina de Turismo del Perú.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class=" col-lg-5 card border-0">
                    <div class=" card-body">
                        <img src="{{asset('images/safe-transportation.jpg')}}" class=" img-fluid shadow">
                    </div>
                </div>
                <div class=" col-lg-7 card border-bottom-0 border-left-0 my-auto">
                    <div class=" card-body">
                        <h4 class=" text-g-dark-light mb-4 font-weight-bold">Transporte seguro</h4>
                        <p class="">Todos los vehículos se limpian en profundidad para mantenerte a salvo. Por ejemplo, si se une a uno de nuestros recorridos para grupos pequeños, su autobús turístico estará equipado con desinfectante de manos y el vehículo se desinfectará con regularidad. Si realiza un recorrido privado, su camioneta se limpiará a fondo antes de cada servicio.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class=" col-lg-5 card border-0">
                    <div class=" card-body">
                        <img src="{{asset('images/TAMBO_DEL_INKA.jpeg')}}" class=" img-fluid shadow">
                    </div>
                </div>
                <div class=" col-lg-7 card border-bottom-0 border-left-0 my-auto">
                    <div class=" card-body">
                        <h4 class=" text-g-dark-light mb-4 font-weight-bold">Hoteles de calidad comprobada</h4>
                        <p>Nuestros agentes de viajes de GOTOPERU seleccionan los hoteles por su calidad, ubicación y altos estándares de servicio. Además, estamos trabajando con nuestros socios hoteleros para asegurarnos de que también cumplan con los requisitos de salud e higiene.
                            Puede disfrutar de cada estadía sabiendo que todos los puntos de contacto clave se desinfectarán con regularidad y se proporcionará gel de manos en todos los hoteles en los que se hospedará. Si viaja solo, tendrá su propia habitación privada, esto también era una política antes. los tiempos actuales.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class=" col-lg-5 card border-0">
                    <div class=" card-body">
                        <img src="{{asset('images/CASA_ANDINA_PLAZA.jpg')}}" class=" img-fluid shadow">
                    </div>
                </div>
                <div class=" col-lg-7 card border-bottom-0 border-left-0 my-auto">
                    <div class=" card-body">
                        <h4 class=" text-g-dark-light mb-4 font-weight-bold">Actividades y restaurantes cuidadosamente seleccionados</h4>
                        <p>El Perú es conocido por su exquisita gastronomía, por ello le ofreceremos los mejores platos en los mejores lugares. También certificamos que nuestros proveedores estén alineados a los procedimientos de salud e higiene; todas las actividades peruanas que se ofrecen son probadas y seleccionadas para usted.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class=" col-lg-5 card border-0">
                    <div class=" card-body">
                        <img src="{{asset('images/FOTOGRAMA5.jpg')}}" class=" img-fluid shadow">
                    </div>
                </div>
                <div class=" col-lg-7 card border-bottom-0 border-left-0 my-auto">
                    <div class=" card-body">
                        <h4 class=" text-g-dark-light mb-4 font-weight-bold">Guías de turimo experimentados</h4>
                        <p>Los mejores guías locales están en GOTOPERU. Ellos estarán ahí de principio a fin para mantenerlo seguro y para apoyarlo a crear unas vacaciones inolvidables en Perú. Nuestros especialistas se encuentran capacitados en cuanto a los protocolos de seguridad y sanidad, ellos siempre estarán ahí para tí.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class=" col-lg-5 card border-0">
                    <div class=" card-body">
                        <img src="{{asset('images/FOTOGRAMA76.jpg')}}" class=" img-fluid shadow">
                    </div>
                </div>
                <div class=" col-lg-7 card border-bottom-0 border-left-0 my-auto">
                    <div class=" card-body">
                        <h4 class=" text-g-dark-light mb-4 font-weight-bold">Documentos de viaje detallados</h4>
                        <p>Parte de la experiencia de GOTOPERU será tener todos los documentos de viaje completos e información útil antes de la llegada. Su asesor de viajes lo mantendrá actualizado en caso de que surjan cambios.
                            <br>Sus documentos de viaje a Perú tendrán toda la información que necesita en un solo lugar para ayudarlo a preparar y maximizar su aventura en Perú, además de nuestros consejos basados ​​en muchos años de experiencia.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class=" col-lg-5 card border-0">
                    <div class=" card-body">
                        <img src="{{asset('images/FOTOGRAMA-74.jpg')}}" class=" img-fluid shadow">
                    </div>
                </div>
                <div class=" col-lg-7 card border-bottom-0 border-left-0 my-auto">
                    <div class=" card-body">
                        <h4 class=" text-g-dark-light mb-4 font-weight-bold">Soporte 24/7</h4>
                        <p>Vivimos en cada destino, siempre habrá un agente listo para atenderlo. Si necesita contactarnos urgentemente, puede acceder a nuestra línea de asistencia en cualquier momento del día.
                            Nuestra Sede se encuentra ubicada en Cusco pero contamos con oficinas remotas en Arequipa, Lima y Puno, además de representantes de GOTOPERU en MachuPicchu, Nazca, Paracas, Urubamba, Puerto Maldonado y Chiclayo.
                        </p>
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
