@extends('layouts.page.app')
@section('content')

    <header>
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            {{--                <iframe title="GotoPeru background video" src="https://player.vimeo.com/video/361847703?background=1" width="100%" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
            <img src="{{asset('images/hotel.jpg')}}" alt="" loading="lazy" class=" card-img-bottom">
        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h1 class="font-weight-lighter h2 mt-5">HOTELES TURÍSTICOS</h1>
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
            <div class="row mb-5 mt-2">
                <div class="col">
                    <p class=" lead text-center">Te damos a conocer los hoteles en las regiones más visitadas de Perú</p>
                </div>
            </div>
            <div class="row mb-5">
            @foreach ($destinos as $destino)
                <div class="col-md-4 mb-5">
                    <div class=" position-relative cont">
                        <a href="{{route('hotel_path')}}/{{$destino['url']}}">
                            <img src="{{$destino['imagen']}}" class=" img-fluid shadow trans">
                        </a>
                        <div class=" position-absolute-bottom bg-rgba-dark-6 pt-3 pb-2 px-3 justify-content-between">
                            <span class="h6 text-uppercase font-weight-bold text-white">{{$destino['nombre']}}</span><br>
                            <a href="{{route('hotel_path')}}/{{$destino['url']}}" class="text-g-yellow">Ver hoteles <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection