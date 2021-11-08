@extends('layouts.page.app')
@section('content')

    <header>
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            {{--                <iframe title="GotoPeru background video" src="https://player.vimeo.com/video/361847703?background=1" width="100%" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
            <img src="{{asset('images/FOTOGRAMA78.jpg')}}" alt="" loading="lazy" class="blur">
        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h1 class="font-weight-lighter h2 mt-5">TÉRMINOS Y CONDICIONES DE RESERVA</h1>
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
        <div class="container pt-5">
            <div class="row mb-5" >
                <div class= "col text-center">
                    <p class="lead">Es importante saber que para lograr una relación fraternal entre GOTOPERU y usted, es imprescindible considerar y aceptar las políticas, términos y condiciones de nuestros servicios ofrecidos.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class=" bg-light border border-g-green px-3 py-2 shadow">
                        <h5 class="h6 text-g-green font-weight-bold">DESCRIPCION GENERAL</h5>
                    </div>
                    <div class="px-3 py-4 border-left border-right border-g-green">
                        <p><span class="text-g-yellow font-weight-bold">GOTOPERU</span> es el sitio de reservas online cuyo nombre comercial es GOTOPERU GROUP SAC.
                        </P> 
                        <ul>
                            <li>Sede registrada en Avenida El Sol N° 449 - Cusco - Cusco.</li>
                            <li>Número de registro 000873-005733 del Ministerio de Comercio Exterior y Turismo del Perú (MINCETUR.</li>
                            <li>Autorización Fiscal de Perú RUC: 205619753.</li>
                        </ul>        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class=" bg-light border border-g-green px-3 py-2 shadow">
                        <h5 class="h6 text-g-green font-weight-bold">CONDICIONES DE RESERVA</h5>
                    </div>
                    <div class="px-3 py-4 border-left border-right border-g-green">
                        <p>Cualquier reserva realizada por un cliente, ya sea a través del sitio web de la empresa o de otro modo, se considerará como una oferta del cliente para comprar el paquete o arreglo de viaje correspondiente sujeto a las siguientes condiciones de reserva: <p>
                        <ul>
                            <li>Al enviar una reserva, nos garantiza y nos confirma que cumple con estos acuerdos.</li>
                            <li>Ningún contrato entre el cliente y GOTOPERU entrará en vigor hasta que GOTOPERU reciba el pago del depósito inicial dependiendo del programa podría ser del 20%, 30%, 50% del mondo o el monto total y se emita un Recibo de Pago.</li>
                            <li>Los pagos de reservas deben realizarse al menos 10 días antes de la fecha del viaje</li>
                            <li>El cliente que realiza la reserva acepta estas condiciones en nombre de todos los miembros de su grupo de viaje y es responsable del saldo de pago del grupo en su totalidad.</li>
                            <li>La reserva de cualquier paquete de viaje solo podrá ser realizada por personas mayores de 18 años. Además, las personas menores de 18 años en un tour de GOTOPERU deben estar acompañadas por un adulto.</p>
                        </ul>
                        <p>Nuestra empresa está totalmente autorizada por el gobierno Peruano. Así mismo somos miembros de varias asociaciones de la industria de viajes en Perú.</p>
                                
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col ">
                    <div class=" bg-light border border-g-green px-3 py-2 shadow">
                        <h5 class="h6 text-g-green font-weight-bold">PROCESO DE RESERVA</h5>
                    </div>
                    <div class="px-3 py-4 border-left border-right border-g-green">
                        <p>Para proceder con la reserva se debe: </p>
                        <ol>
                            <li class="text-g-dark-light font-weight-bold mb-3 ">
                                <h6 class="font-weight-bold">Enviar datos personales</h6>
                                <p class=" text-dark font-weight-normal">La persona que realizó la reserva tiene que mandar los datos personales requeridos de todos los miembros que realizarán el viaje.</p>
                                <div class="col-md-6">
                                    <ul class="bg-light small text-dark py-3">
                                        <li>Nombres:</li>
                                        <li>Apellidos:</li>
                                        <li>Fecha de nacimiento:</li>
                                        <li>Nacionalidad:</li>
                                        <li>Número de pasaporte:</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="text-g-dark-light font-weight-bold">
                                <h6 class="font-weight-bold">Realizar pago</h6>
                                <p class="text-dark font-weight-normal">Para la opción de pago el cliente elegirá entre 3 métodos de pago:</p>
                                <ul>
                                    <li>
                                        <span class="text-dark font-weight-bold">Tarjeta de crédito o débito</span><br>
                                        <span class="text-dark font-weight-normal">Con esta opción recibirá un link de pago seguro para pago online, esta opción tiene un cargo de procesamiento de 2.9%.</span>
                                        <div class="text-center mt-2">
                                            <img src="{{asset('images/Visa_Logo.png')}}" width="64">
                                            <img src="{{asset('images/Mastercard.png')}}"  width="64">
                                        </div>
                                    </li>
                                    <li>
                                        <span class="text-dark font-weight-bold">Transferencia bancaria</span><br>
                                        <span class="text-dark font-weight-normal">con esta opción recibirá un Invoice PDF con nuestros datos bancarios.</span>
                                        <div class="text-center mt-2">
                                            <img src="{{asset('images/bcp.png')}}" width="80">
                                        </div>
                                    </li>
                                    <li>
                                        <span class="text-dark font-weight-bold">Vía Western Union o MoneyGram</span><br>
                                        <div class="text-center mt-2">
                                            <img src="{{asset('images/Western-Union-logo.png')}}" width="120">
                                            <img src="{{asset('images/logo-MoneyGram.png')}}" width="120">
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ol>    
                     </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col ">
                    <div class=" bg-light border border-g-green px-3 py-2 shadow">
                        <h5 class="h6 text-g-green font-weight-bold">PAGOS RETRAZADOS</h5>
                    </div>
                    <div class="px-3 py-4 border-left border-right border-bottom border-g-green">
                        <p>GOTOPERU se reserva el derecho de tratar los casos de pago retrasado como una cancelación de la reserva, pudiendo la empresa retirar su confirmación de servicios. Tenga en cuenta que esto se aplica si no se ha llegado a un acuerdo para pagar el saldo restante.</p>      
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
