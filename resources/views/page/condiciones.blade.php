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
                    <div class="accordion " id="accordionExample">
                        <div class="card border-g-green">
                            <div class="card-header p-1 border-g-green" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-g-green font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    CONDICIONES DE RESERVA
                                    </button>
                                </h2>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p><span class="text-g-dark-light font-weight-bold">GOTOPERU</span> es el sitio de reservas online cuyo nombre comercial es <b class="text-g-dark-light">GOTOPERU GROUP SAC.</b> 
                                    </P>
                                    <ul>
                                        <li>Sede registrada en Avenida El Sol N° 449 - Cusco - Cusco.</li>
                                        <li>Número de registro 000873-005733 del Ministerio de Comercio Exterior y Turismo del Perú (MINCETUR.</li>
                                        <li>Autorización Fiscal de Perú RUC: 205619753.</li>
                                    </ul>
                                    <p>Cualquier reserva realizada por un cliente, ya sea a través del sitio web de la empresa o de otro modo, se considerará como una oferta del cliente para comprar el paquete o arreglo de viaje correspondiente sujeto a estas condiciones de reserva. Al enviar una reserva, nos garantiza y nos confirma que cumple con estos acuerdos. Ningún contrato entre el cliente y GOTOPERU entrará en vigor hasta que GOTOPERU reciba el pago del depósito inicial y emita un Recibo de Pago. El cliente que realiza la reserva acepta estas condiciones en nombre de todos los miembros de su grupo de viaje y es responsable del saldo de pago del grupo en su totalidad.</p>
                                    <p>Los servicios de reserva con GOTOPERU solo están disponibles para personas mayores de 18 años. Además, las personas menores de 18 años en un tour de GOTOPERU deben estar acompañadas por un adulto.</p>
                                    <p>Nuestra empresa está totalmente autorizada por el gobierno Peruano. Así mismo somos miembros de varias asociaciones de la industria de viajes en Perú.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-g-green">
                            <div class="card-header p-1 border-g-green" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed text-g-green font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    PAGOS
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>GOTOPERU acepta las principales tarjetas de crédito y débito para las reservas realizadas al menos 10 días antes de la fecha del viaje, también aceptamos transferencias bancarias.</p>
                                    <p>Aceptamos pagos de Visa, Visa Electron, MasterCard, Maestro, JCB, Discover, UnionPay, Diners y American Express. Si desea pagar mediante transferencia bancaria, seleccione "Transferencia bancaria" como método de pago en el proceso de reserva, y GOTOPERU le enviará nuestros datos bancarios. Tenga en cuenta que las transferencias bancarias no son posibles para las reservas realizadas con menos de 10 días de la fecha del viaje.</p>
                                    <h6 class="text-g-yellow font-weight-bold">PROCESO DE PAGO</h6>
                                    <p>GOTOPERU requerirá un pago de depósito inicial, dependiendo del programa podría ser 20%, 30%, 50% o el monto total al momento de la reserva, dependiendo de cuándo se realiza la reserva, su destino, número de viajeros y qué tipo de paquete turístico se reserva.</p>
                                    <p>Una vez recibido el pago, su asesor de viajes le enviará un recibo de pago.</p>
                                    <h6 class="text-g-yellow font-weight-bold">PAGO RETRAZADO</h6>
                                    <p>GOTOPERU se reserva el derecho de tratar los casos de pago retrasado como una cancelación de la reserva, pudiendo la empresa retirar su confirmación de servicios. Tenga en cuenta que esto se aplica si no se ha llegado a un acuerdo para pagar el saldo restante.</p>
                                </div>
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
