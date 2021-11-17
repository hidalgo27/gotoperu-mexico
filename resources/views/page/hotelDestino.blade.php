@extends('layouts.page.app')
@section('content')

    <header>
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            {{--                <iframe title="GotoPeru background video" src="https://player.vimeo.com/video/361847703?background=1" width="100%" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
            <img src="{{$destino->destino_imagen->first()->nombre}}" alt="" loading="lazy">
        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h1 class="font-weight-lighter h2 mt-5 text-uppercase">HOTELES EN {{$destino->nombre}}</h1>
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

    <section class=" bg-white py-5">
        <div class="container">   
            <div class="row">
                <div class="col">
                    <div id="myGroup">
                        <div class=" text-center my-5">
                            <button class="btn btn-g-yellow text-white font-weight-bold mx-2 mb-3" data-toggle="collapse" data-target="#dos-estrellas">2 Estrellas </button>
                            <button class="btn btn-g-yellow text-white font-weight-bold mx-2 mb-3" data-toggle="collapse" data-target="#tres-estrellas">3 Estrellas</button>
                            <button class="btn btn-g-yellow text-white font-weight-bold mx-2 mb-3" data-toggle="collapse" data-target="#cuatro-estrellas">4 Estrellas</button>
                            <button class="btn btn-g-yellow text-white font-weight-bold mx-2 mb-3" data-toggle="collapse" data-target="#cinco-estrellas">5 Estrellas</button>
                        </div>
                        <div class="accordion-group">
                            <div class="collapse show" id="dos-estrellas"  data-parent="#myGroup">
                                @foreach ($destino_hoteles_2 as $dest_hotel)
                                    <div class="row mb-5">
                                        <div class="col-md-5 card border-0 my-auto">
                                            <img src="{{$dest_hotel['hotel']->imagen}}" class="shadow">
                                        </div>
                                        <div class="col-md-7 card border-0 shadow">
                                            <div class="my-auto mx-3">
                                                <a href="{{$dest_hotel['hotel']->url}}" target="_Blank"><h4 class=" h5 font-weight-bold text-dark">{{$dest_hotel['hotel']->nombre}}</h4></a>
                                                <div class="row py-1 px-3 justify-content-between">
                                                    <div class="p text-g-dark-light">
                                                        <i class="fa fa-map-marker"></i>
                                                        {{$dest_hotel['hotel']->direccion}}
                                                    </div>
                                                    <div>
                                                        @for ($i = 0; $i < $dest_hotel['hotel']->estrellas; $i++)
                                                            <i class=" fa fa-star text-g-yellow"></i>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <div class=" mt-2">
                                                    {!!$dest_hotel['hotel']->descripcion!!}
                                                </div>
                                                @if ($dest_hotel['hotel']->servicios != "")
                                                <div class="small bg-light py-2">
                                                    @foreach(explode(',', $dest_hotel['hotel']->servicios) as $servicio) 
                                                        @if($servicio=="Internet")
                                                            <span class="px-2"><img src={{asset('images/s-wifi.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                        @if($servicio=="Bar")
                                                            <span class="px-2"><img src={{asset('images/s-bar.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                        @if($servicio=="Restaurant")
                                                            <span class="px-2"><img src={{asset('images/s-restaurant.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                        @if($servicio=="Laundry Service")
                                                            <span class="px-2"><img src={{asset('images/s-laundry.svg')}} width="30"> Servicio de lavandería</span>
                                                        @endif 
                                                        @if($servicio=="Room Service")
                                                            <span class="px-2"><img src={{asset('images/s-room.svg')}} width="30"> Servicio de habitacion</span>
                                                        @endif
                                                        @if($servicio=="Spa")
                                                            <span class="px-2"><img src={{asset('images/s-spa.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                @endif
                                                <div class=" pt-3 row justify-content-around">
                                                    @if($dest_hotel['hotel']->expedia)
                                                        <span class="expedia-color font-weight-bold">Expedia: {{$dest_hotel['hotel']->expedia}}</span>
                                                    @endif
                                                    @if($dest_hotel['hotel']->tripadvisor)
                                                        <span class="tripadvisor-color font-weight-bold">Tripadvisor: {{ $dest_hotel['hotel']->tripadvisor}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="collapse " id="tres-estrellas"  data-parent="#myGroup">
                                @foreach ($destino_hoteles_3 as $dest_hotel)
                                    <div class="row mb-5">
                                        <div class="col-md-5 card border-0 my-auto">
                                            <img src="{{$dest_hotel['hotel']->imagen}}" class="shadow">
                                        </div>
                                        <div class="col-md-7 card border-0 shadow">
                                            <div class="my-auto mx-3">
                                                <a href="{{$dest_hotel['hotel']->url}}" target="_Blank"><h4 class=" h5 font-weight-bold text-dark">{{$dest_hotel['hotel']->nombre}}</h4></a>
                                                <div class="row py-1 px-3 justify-content-between">
                                                    <div class="p text-g-dark-light">
                                                        <i class="fa fa-map-marker"></i>
                                                        {{$dest_hotel['hotel']->direccion}}
                                                    </div>
                                                    <div>
                                                        @for ($i = 0; $i < $dest_hotel['hotel']->estrellas; $i++)
                                                            <i class=" fa fa-star text-g-yellow"></i>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <div class=" mt-2">
                                                    {!!$dest_hotel['hotel']->descripcion!!}
                                                </div>
                                                @if ($dest_hotel['hotel']->servicios != "")
                                                <div class="small bg-light py-2">
                                                    @foreach(explode(',', $dest_hotel['hotel']->servicios) as $servicio) 
                                                        @if($servicio=="Internet")
                                                            <span class="px-2"><img src={{asset('images/s-wifi.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                        @if($servicio=="Bar")
                                                            <span class="px-2"><img src={{asset('images/s-bar.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                        @if($servicio=="Restaurant")
                                                            <span class="px-2"><img src={{asset('images/s-restaurant.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                        @if($servicio=="Laundry Service")
                                                            <span class="px-2"><img src={{asset('images/s-laundry.svg')}} width="30"> Servicio de lavandería</span>
                                                        @endif 
                                                        @if($servicio=="Room Service")
                                                            <span class="px-2"><img src={{asset('images/s-room.svg')}} width="30"> Servicio de habitacion</span>
                                                        @endif
                                                        @if($servicio=="Spa")
                                                            <span class="px-2"><img src={{asset('images/s-spa.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                @endif
                                                <div class=" pt-3 row justify-content-around">
                                                    @if($dest_hotel['hotel']->expedia)
                                                        <span class="expedia-color font-weight-bold">Expedia: {{$dest_hotel['hotel']->expedia}}</span>
                                                    @endif
                                                    @if($dest_hotel['hotel']->tripadvisor)
                                                        <span class="tripadvisor-color font-weight-bold">Tripadvisor: {{ $dest_hotel['hotel']->tripadvisor}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="collapse" id="cuatro-estrellas"  data-parent="#myGroup">
                                @foreach ($destino_hoteles_4 as $dest_hotel)
                                    <div class="row mb-5">
                                        <div class="col-md-5 card border-0 my-auto">
                                            <img src="{{$dest_hotel['hotel']->imagen}}" class="shadow">
                                        </div>
                                        <div class="col-md-7 card border-0 shadow">
                                            <div class="my-auto mx-3">
                                                <a href="{{$dest_hotel['hotel']->url}}" target="_Blank"><h4 class=" h5 font-weight-bold text-dark">{{$dest_hotel['hotel']->nombre}}</h4></a>
                                                <div class="row py-1 px-3 justify-content-between">
                                                    <div class="p text-g-dark-light">
                                                        <i class="fa fa-map-marker"></i>
                                                        {{$dest_hotel['hotel']->direccion}}
                                                    </div>
                                                    <div>
                                                        @for ($i = 0; $i < $dest_hotel['hotel']->estrellas; $i++)
                                                            <i class=" fa fa-star text-g-yellow"></i>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <div class=" mt-2">
                                                    {!!$dest_hotel['hotel']->descripcion!!}
                                                </div>
                                                @if ($dest_hotel['hotel']->servicios != "")
                                                <div class="small bg-light py-2">
                                                    @foreach(explode(',', $dest_hotel['hotel']->servicios) as $servicio) 
                                                        @if($servicio=="Internet")
                                                            <span class="px-2"><img src={{asset('images/s-wifi.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                        @if($servicio=="Bar")
                                                            <span class="px-2"><img src={{asset('images/s-bar.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                        @if($servicio=="Restaurant")
                                                            <span class="px-2"><img src={{asset('images/s-restaurant.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                        @if($servicio=="Laundry Service")
                                                            <span class="px-2"><img src={{asset('images/s-laundry.svg')}} width="30"> Servicio de lavandería</span>
                                                        @endif 
                                                        @if($servicio=="Room Service")
                                                            <span class="px-2"><img src={{asset('images/s-room.svg')}} width="30"> Servicio de habitacion</span>
                                                        @endif
                                                        @if($servicio=="Spa")
                                                            <span class="px-2"><img src={{asset('images/s-spa.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                @endif
                                                <div class=" pt-3 row justify-content-around">
                                                    @if($dest_hotel['hotel']->expedia)
                                                        <span class="expedia-color font-weight-bold">Expedia: {{$dest_hotel['hotel']->expedia}}</span>
                                                    @endif
                                                    @if($dest_hotel['hotel']->tripadvisor)
                                                        <span class="tripadvisor-color font-weight-bold">Tripadvisor: {{ $dest_hotel['hotel']->tripadvisor}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="collapse" id="cinco-estrellas"  data-parent="#myGroup">
                                @foreach ($destino_hoteles_5 as $dest_hotel)
                                    <div class="row mb-5">
                                        <div class="col-md-5 card border-0 my-auto">
                                            <img src="{{$dest_hotel['hotel']->imagen}}" class="shadow">
                                        </div>
                                        <div class="col-md-7 card border-0 shadow">
                                            <div class="my-auto mx-3">
                                                <a href="{{$dest_hotel['hotel']->url}}" target="_Blank"><h4 class=" h5 font-weight-bold text-dark">{{$dest_hotel['hotel']->nombre}}</h4></a>
                                                <div class="row py-1 px-3 justify-content-between">
                                                    <div class="p text-g-dark-light">
                                                        <i class="fa fa-map-marker"></i>
                                                        {{$dest_hotel['hotel']->direccion}}
                                                    </div>
                                                    <div>
                                                        @for ($i = 0; $i < $dest_hotel['hotel']->estrellas; $i++)
                                                            <i class=" fa fa-star text-g-yellow"></i>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <div class=" mt-2">
                                                    {!!$dest_hotel['hotel']->descripcion!!}
                                                </div>
                                                @if ($dest_hotel['hotel']->servicios != "")
                                                <div class="small bg-light py-2">
                                                    @foreach(explode(',', $dest_hotel['hotel']->servicios) as $servicio) 
                                                        @if($servicio=="Internet")
                                                            <span class="px-2"><img src={{asset('images/s-wifi.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                        @if($servicio=="Bar")
                                                            <span class="px-2"><img src={{asset('images/s-bar.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                        @if($servicio=="Restaurant")
                                                            <span class="px-2"><img src={{asset('images/s-restaurant.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                        @if($servicio=="Laundry Service")
                                                            <span class="px-2"><img src={{asset('images/s-laundry.svg')}} width="30"> Servicio de lavandería</span>
                                                        @endif 
                                                        @if($servicio=="Room Service")
                                                            <span class="px-2"><img src={{asset('images/s-room.svg')}} width="30"> Servicio de habitacion</span>
                                                        @endif
                                                        @if($servicio=="Spa")
                                                            <span class="px-2"><img src={{asset('images/s-spa.svg')}} width="30"> {{$servicio}}</span>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                @endif
                                                <div class=" pt-3 row justify-content-around">
                                                    @if($dest_hotel['hotel']->expedia)
                                                        <span class="expedia-color font-weight-bold">Expedia: {{$dest_hotel['hotel']->expedia}}</span>
                                                    @endif
                                                    @if($dest_hotel['hotel']->tripadvisor)
                                                        <span class="tripadvisor-color font-weight-bold">Tripadvisor: {{ $dest_hotel['hotel']->tripadvisor}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection