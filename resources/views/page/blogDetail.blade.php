@extends('layouts.page.app')
@section('content')
<header class="header-detail">
    <div class="overlay"></div>
    {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
    {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
    {{--            </video>--}}
    <div class="homepage-video">
        <img src="{{asset('images/packages/slider/AV1000-2.jpg')}}" alt="">

    </div>
    <div class="container h-100">
        <div class="row d-flex h-100 text-center align-items-center">
            <div class="col w-100 text-white mt-5">
                <h1 class="font-weight-lighter h2 mt-5">BLOG DETALLES</h1>
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
<section id="title_section" class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                        <li class="breadcrumb-item"><a href="/blog/{{$post[0]['url']}}">{{$post[0]['titulo']}}</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-8 col-md-12 mr-5">
                <div class="row pb-2">
                    <div class="col blog">
                        <div class="alert bg-success shadow">
                            <h1 class=" h2 font-weight-bold text-white text-center">{{$post[0]['titulo']}}</h1>
                        </div>
                        <div id="carouselExampleCaptions" class="carousel slide slider shadow rounded" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach ($post[0]['imagenes'] as $item)
                                    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($post[0]['imagenes'] as $item)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img src="http://127.0.0.1:8080/storage/post/{{$item['nombre']}}" class="d-block w-100" alt="{{$post[0]['titulo']}}" loading="lazy">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" data-target="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next"  data-target="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row text-secondary text-center">
                    <div class="col">
                        <i class="fa fa-user pr-2 text-g-yellow"></i><span class="h6 text-primary">Autor {{$post[0]['user']['name']}}</span>
                    </div>
                    <div class="col">
                        <i class="fa fa-calendar pr-2 text-g-yellow"></i><span class="h6 text-primary">Fecha {{date('d/m/Y', strtotime($post[0]['updated_at']))}}</span>
                    </div>
                    <div class="col">
                        <i class="fa fa-tags pr-2 text-g-yellow"></i><span class="h6 text-primary">Categoría {{$post[0]['categoria']['nombre']}}</span>
                    </div>
                </div>
                <hr>
                <div class="row py-2">
                    <div class="col text-justify">
                        {!!$post[0]['detalle']!!}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 p-0 m-0">
                <hr class="hr-warning mt-0">
                <div class="row">
                    <div class="col">
                        <p class="h4 pb-3 text-g-yellow font-weight-bold">Buscar</p>
                        <form method="POST" action="{{route('buscar')}}" class="form-inline">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="buscar" class="form-control" placeholder="Buscar en el blog">
                            </div>
                            <button type="submit" class="btn btn-g-green"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <hr class="hr-warning">
                <div class="row">
                    <div class="col">
                        <p class="h4 pb-3 text-g-yellow font-weight-bold">Artículos relacionados</p>
                        <div class="row pl-3">
                            @foreach ($postsRelacionados as $post)                       
                                <div  class="list-group-item list-group-item-action flex-column p-0 pt-3 pb-3">
                                    <a href="/blog/{{$post['url']}}">
                                        <div class="col pr-2 w-100">
                                            <img src="http://127.0.0.1:8080/storage/post/{{$post['imagen_miniatura']}}" alt="{{$post['titulo']}}" class="img-fluid float-left miniatura" loading="lazy">
                                        </div>
                                    </a>
                                    <div class="col pl-2">
                                        <a href="/blog/{{$post['url']}}">
                                            <h6 class="mb-1 text-g-green font-weight-bold">{{$post['titulo']}}</h6>
                                        </a>
                                        <small class="text-primary"><i class="fa fa-calendar pr-2"></i>{{date('d/m/Y', strtotime($post['updated_at']))}}</small>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <hr class="hr-warning">
                <div class="row">
                    <div class="col">
                        <p class="h4 pb-3 text-g-yellow font-weight-bold">Categorías</p>
                        @foreach ($categorias as $categoria)
                        <a href="/blog/categoria/{{$categoria[0]}}">
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">                            
                                        <div class="ms-2 me-auto text-capitalize">
                                            <i class="fa fa-tags mr-2 text-g-dark-light fa h6"></i>{{$categoria[0]}}
                                        </div>
                                        <span class="badge badge-g-green rounded-pill px-3 h6">{{$categoria[1]}}</span>                                   
                                    </li>
                                </ol>
                            </a>
                        @endforeach
                    </div>
                </div>
                <hr class="hr-warning">
                <div class="row">
                    <div class="col">
                        <p class="h4 pb-3 text-g-yellow font-weight-bold">Artículos más recientes</p>
                        <div class="row pl-3">
                            @foreach ($recentPosts as $post)                       
                                <div  class="list-group-item list-group-item-action flex-column p-0 pt-3 pb-3">
                                    <a href="/blog/{{$post['url']}}">
                                        <div class="col pr-2 w-100">
                                            <img src="http://127.0.0.1:8080/storage/post/{{$post['imagen_miniatura']}}" alt="{{$post['titulo']}}" class="img-fluid float-left miniatura" loading="lazy">
                                        </div>
                                    </a>
                                    <div class="col pl-2">
                                        <a href="/blog/{{$post['url']}}">
                                            <h6 class="mb-1 text-g-green font-weight-bold">{{$post['titulo']}}</h6>
                                        </a>
                                        <small class="text-primary"><i class="fa fa-calendar pr-2"></i>{{date('d/m/Y', strtotime($post['updated_at']))}}</small>
                                    </div>
                                </div>
                                
                            @endforeach
                        </div>
                    </div>
                </div>
                <hr class="hr-warning">
                <div class="row">
                        <div class="col">
                            <p class="h4 pb-3 text-g-yellow font-weight-bold">Síguenos en</p>
                            <div class="row pl-3">
                                <div class="col">
                                    <a class="btn"  href="https://www.facebook.com/GOTOPERUcom/" role="button">
                                        <i class="fab fa-facebook-f fa-2x"></i>
                                    </a>
                                    <a class="btn" href="https://twitter.com/GOTOPERUCOM" role="button">
                                        <i class="fab fa-twitter fa-2x"></i>
                                    </a>
                                    <a class="btn"  href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" role="button">
                                        <i class="fab fa-youtube fa-2x"></i>
                                    </a>
                                    <a class="btn" href="https://www.instagram.com/go.to.peru/" role="button">
                                        <i class="fab fa-instagram fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <hr class="hr-warning">
            </div>
        </div>
    </div>
</section>
@endsection