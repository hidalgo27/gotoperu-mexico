@extends('layouts.page.app')
@section('content')

    <header>
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            {{--                <iframe title="GotoPeru background video" src="https://player.vimeo.com/video/361847703?background=1" width="100%" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
            <img src="{{asset('images/FOTOGRAMA17.jpg')}}" alt="" loading="lazy">
        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h1 class="font-weight-lighter h2 mt-5">PREGUNTAS FRECUENTES</h1>
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
            <div class="row my-5">
                <div class="col text-center">
                    <p class="lead font-weight-normal text-muted">¡Un viaje a Perú es una aventura emocionante! Hay una serie de preguntas comunes que hacen con frecuencia quienes viajan por primera vez a Perú.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="accordion" id="accordionExample">
                        @foreach($faqs as $faq)
                            <div class="card border-g-green">
                                <div class="card-header border-g-green" id="heading{{$loop->index}}">
                                    <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-g-green font-weight-bold text-left {{ $loop->first ? '' : 'collapsed' }}" type="button" data-toggle="collapse" data-target="#collapse{{$loop->index}}" aria-expanded="true" aria-controls="collapse{{$loop->index}}">
                                        {{$loop->index+1}}.- {{$faq->titulo}}
                                        </button>
                                    </h2>
                                </div>
                            
                                <div id="collapse{{$loop->index}}" class="collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading{{$loop->index}}" data-parent="#accordionExample">
                                    <div class="card-body">
                                        {!!$faq->descripcion!!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
