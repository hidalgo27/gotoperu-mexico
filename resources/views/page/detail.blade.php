@extends('layouts.page.app')
    @section('content')
        @foreach($paquete as $paquetes)
        <header class="header-detail">
            <div class="overlay"></div>
            {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
            {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
            {{--            </video>--}}
            <div class="homepage-video">
                <img src="{{asset('images/packages/slider/AV500-1.jpg')}}" alt="">

            </div>
            <div class="container h-100">
                <div class="row d-flex h-100 text-center align-items-center">
                    <div class="col w-100 text-white mt-5">
                        <h1 class="font-weight-lighter h2 mt-5">{{$paquetes->titulo}}</h1>
                        <div>
                            <div class="tl-1"></div>
                            <div class="tl-2"><img src="{{asset('images/logo-andes-ave-white.png')}}" alt="" class="w-100"></div>
                            <div class="tl-3"></div>
                        </div>
                        <div class="mt-4">
                            <a href="" class="text-white">Detalle</a> |
                            <a href="" class="text-white">Itinerario</a> |
                            <a href="" class="text-white">Precios</a> |
                            <a href="" class="text-g-yellow font-weight-bold">Consulte Ahora</a>
                        </div>
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

        <section>
            <div class="nav-fixed">
                <div id="navbar-scroll" class="list-group list-group-detail sticky-top">
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#detalle" data-toggle="tooltip" data-placement="right" title="Detalle"><i data-feather="book-open" stroke-width="1"></i></a>
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#incluye" data-toggle="tooltip" data-placement="right" title="Incluye"><i data-feather="check" stroke-width="1"></i></a>
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#itinerario" data-toggle="tooltip" data-placement="right" title="Itinerario"><i data-feather="list" stroke-width="1"></i></a>
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#destinos" data-toggle="tooltip" data-placement="right" title="Destinos"><i data-feather="map" stroke-width="1"></i></a>
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#precios" data-toggle="tooltip" data-placement="right" title="Precios"><i data-feather="dollar-sign" stroke-width="1"></i></a>
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#opcional" data-toggle="tooltip" data-placement="right" title="Opcional"><i data-feather="file-plus" stroke-width="1"></i></a>
                    <a class="list-group-item list-group-item-detail list-group-item-action bg-g-yellow" href="#consulte" data-toggle="tooltip" data-placement="right" title="Consulte Ahora"><i data-feather="edit-2" stroke-width="1"></i></a>
                </div>
            </div>
        </section>

        <section class="my-5" id="title_section">
            <div id="detalle">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <div class="col">
                                    <p class="m-0">{!! $paquetes->descripcion !!}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    @foreach($paquetes->paquetes_categoria as $categoria)
                                    <h6 class="font-weight-bold text-secondary mt-4"><span class="text-g-yellow">Categoría</span>: <mark>{{ucwords(strtolower($categoria->categoria->nombre))}}</mark></h6>
                                    {!! $categoria->categoria->descripcion !!}
                                    @endforeach

                                        @foreach($dificultad->where('idpaquetes', $paquetes->id) as $dificultades)
                                    <h6 class="font-weight-bold text-secondary mt-4"><span class="text-g-yellow">Demanda física</span>: <mark>{{$dificultades->dificultad->nombre}}</mark></h6>
                                    <p>{!! $dificultades->dificultad->descripcion !!}</p>
                                        @endforeach



                                </div>
                            </div>

                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="p-3">
                                    <b class="h1 text-secondary font-weight-bold">5 días</b>
                                    <div class="text-center mb-2">
                                        <small class="text-secondary">Desde</small>
                                        <b class="h1 text-center font-weight-bold text-danger"><sup>$</sup>500</b>
                                        <small class="small text-secondary">USD</small>
                                    </div>
                                    <p class="m-0 text-g-yellow"><b>Código: GTP500</b></p>
                                </div>
                                <a  href="#book-now" class="btn btn-dark font-weight-bold">
                                    Consulte Ahora
                                </a>
                            </div>

                            <div class="mt-5 bg-white p-3 text-center rounded shadow-sm">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-3">
                                        <img src="{{asset('images/icons/whatsapp-i.png')}}" alt="" class="w-100">
                                    </div>
                                    <div class="col">
                                        <h6 class="font-weight-bold text-secondary">Consulte ahora por Whatsapp</h6>
                                        <a href="https://api.whatsapp.com/send?phone=5117059774" class="text-secondary h4 font-weight-bold stretched-link">+51 1 7059774</a>
                                    </div>
                                </div>
{{--                                <h5 class="font-weight-bold text-secondary">Tour highligh</h5>--}}
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li><i class="fas fa-chevron-right"></i> Arequipa</li>--}}
{{--                                    <li><i class="fas fa-chevron-right"></i> Cusco</li>--}}
{{--                                    <li><i class="fas fa-chevron-right"></i> Machu picchu</li>--}}
{{--                                </ul>--}}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="text-center py-5 bg-white">--}}
{{--                <div class="tl-1"></div>--}}
{{--                <div class="tl-2"><img src="{{asset('images/logo-ave-grey.png')}}" alt="" class="w-100"></div>--}}
{{--                <div class="tl-3"></div>--}}
{{--            </div>--}}
            <div id="incluye">
                <div class="position-relative py-5 mt-4">
                    <div class="offer-banner">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-4 text-center">
                                    <img width="110" height="75" src="https://backpacktraveler.mikado-themes.com/wp-content/uploads/2018/09/beach-category.png" class="attachment-full size-full" alt="o" />
                                    <h4>Tours</h4>
{{--                                    <p class="mkdf-pcli-count">4 destinations</p>--}}
                                </div>
                                <div class="col-4 text-center">
                                    <img width="110" height="75" src="https://backpacktraveler.mikado-themes.com/wp-content/uploads/2018/09/dog-category.png" class="attachment-full size-full" alt="o" />
                                    <h4>Beaches</h4>
{{--                                    <p class="mkdf-pcli-count">4 destinations</p>--}}
                                </div>

                                <div class="col-4 text-center">
                                    <img width="110" height="75" src="https://backpacktraveler.mikado-themes.com/wp-content/uploads/2018/09/restorant-category.png" class="attachment-full size-full" alt="o" />
                                    <h4>Restaurants</h4>
{{--                                    <p class="mkdf-pcli-count">4 destinations</p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="text-center py-5 bg-white">--}}
{{--                <div class="tl-1"></div>--}}
{{--                <div class="tl-2"><img src="{{asset('images/logo-ave-grey.png')}}" alt="" class="w-100"></div>--}}
{{--                <div class="tl-3"></div>--}}
{{--            </div>--}}

            <div id="itinerario">
                <div class="container-fluid px-0">
                    @foreach($paquetes->paquete_itinerario as $itinerario)
                    <div class="row no-gutters align-items-center align-items-resumen">
                        <div class="col-6">
                            <div class="p-5" id="box-resumen">
                                <h4>Dia 1</h4>
                                <div class="line-subtitle"></div>
                                <p><mark class="font-weight-bold">Llegada A Cusco/noche En Cusco.-</mark> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At blanditiis consequuntur dicta fugit illo in, inventore ipsum iusto officia quasi quo quod, similique tempore temporibus ullam voluptas voluptates, voluptatibus voluptatum.</p>
                                <button type="button" class="btn btn-link p-0 text-secondary font-weight-lighter" onclick="view_itinerary()">LEER MÁS</button>
                            </div>
                            <div class="invisible position-absolute-top" id="box-detail">
                                <div class="swiper-container swiper-container-detail">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <h4>Scroll Container</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, ex eu sagittis faucibus, ligula ipsum sagittis magna, et imperdiet dolor lectus eu libero. Vestibulum venenatis eget turpis sed faucibus. Maecenas in ullamcorper orci, eu ullamcorper sem. Etiam elit ante, luctus non ante sit amet, sodales vulputate odio. Aenean tristique nisl tellus, sit amet fringilla nisl volutpat cursus. Quisque dignissim lectus ac nunc consectetur mattis. Proin vel hendrerit ipsum, et lobortis dolor. Vestibulum convallis, nibh et tincidunt tristique, nisl risus facilisis lectus, ut interdum orci nisl ac nunc. Cras et aliquam felis. Quisque vel ipsum at elit sodales posuere eget non est. Fusce convallis vestibulum dolor non volutpat. Vivamus vestibulum quam ut ultricies pretium.</p>
                                            <p>Suspendisse rhoncus fringilla nisl. Mauris eget lorem ac urna consectetur convallis non vel mi. Donec libero dolor, volutpat ut urna sit amet, aliquet molestie purus. Phasellus faucibus, leo vel scelerisque lobortis, ipsum leo sollicitudin metus, eget sagittis ante orci eu ipsum. Nulla ac mauris eu risus sagittis scelerisque iaculis bibendum mauris. Cras ut egestas orci. Cras odio risus, sagittis ut nunc vitae, aliquam consectetur purus. Vivamus ornare nunc vel tellus facilisis, quis dictum elit tincidunt. Donec accumsan nisi at laoreet sodales. Cras at ullamcorper massa. Maecenas at facilisis ex. Nam mollis dignissim purus id efficitur.</p>
                                            <p>Curabitur eget aliquam erat. Curabitur a neque vitae purus volutpat elementum. Vivamus quis vestibulum leo, efficitur ullamcorper velit. Integer tincidunt finibus metus vel porta. Mauris sed mauris congue, pretium est nec, malesuada purus. Nulla hendrerit consectetur arcu et lacinia. Suspendisse augue justo, convallis eget arcu in, pretium tempor ligula. Nullam vulputate tincidunt est ut ullamcorper.</p>
                                            <p>Curabitur sed sodales leo. Nulla facilisi. Etiam condimentum, nisi id tempor vulputate, nisi justo cursus justo, pellentesque condimentum diam arcu sit amet leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In placerat tellus a posuere vehicula. Donec diam massa, efficitur vitae mattis et, pretium in augue. Fusce iaculis mi quis ante venenatis, sit amet pellentesque orci aliquam. Vestibulum elementum posuere vehicula.</p>
                                            <p>Sed tincidunt diam a massa pharetra faucibus. Praesent condimentum id arcu nec fringilla. Maecenas faucibus, ante et venenatis interdum, erat mi eleifend dui, at convallis nisl est nec arcu. Duis vitae arcu rhoncus, faucibus magna ut, tempus metus. Cras in nibh sed ipsum consequat rhoncus. Proin fringilla nulla ut augue tempor fermentum. Nunc hendrerit non nisi vitae finibus. Donec eget ornare libero. Aliquam auctor erat enim, a semper risus semper at. In ut dui in metus tincidunt euismod eget et lacus. Aenean et dictum urna, sed rhoncus lorem. Duis pharetra sagittis odio. Etiam a libero ut nisi feugiat tincidunt vel vitae turpis. Maecenas vel orci sit amet lorem hendrerit venenatis sollicitudin ut dui. Quisque rhoncus nibh in massa pretium scelerisque.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, ex eu sagittis faucibus, ligula ipsum sagittis magna, et imperdiet dolor lectus eu libero. Vestibulum venenatis eget turpis sed faucibus. Maecenas in ullamcorper orci, eu ullamcorper sem. Etiam elit ante, luctus non ante sit amet, sodales vulputate odio. Aenean tristique nisl tellus, sit amet fringilla nisl volutpat cursus. Quisque dignissim lectus ac nunc consectetur mattis. Proin vel hendrerit ipsum, et lobortis dolor. Vestibulum convallis, nibh et tincidunt tristique, nisl risus facilisis lectus, ut interdum orci nisl ac nunc. Cras et aliquam felis. Quisque vel ipsum at elit sodales posuere eget non est. Fusce convallis vestibulum dolor non volutpat. Vivamus vestibulum quam ut ultricies pretium.</p>
                                            <p>Suspendisse rhoncus fringilla nisl. Mauris eget lorem ac urna consectetur convallis non vel mi. Donec libero dolor, volutpat ut urna sit amet, aliquet molestie purus. Phasellus faucibus, leo vel scelerisque lobortis, ipsum leo sollicitudin metus, eget sagittis ante orci eu ipsum. Nulla ac mauris eu risus sagittis scelerisque iaculis bibendum mauris. Cras ut egestas orci. Cras odio risus, sagittis ut nunc vitae, aliquam consectetur purus. Vivamus ornare nunc vel tellus facilisis, quis dictum elit tincidunt. Donec accumsan nisi at laoreet sodales. Cras at ullamcorper massa. Maecenas at facilisis ex. Nam mollis dignissim purus id efficitur.</p>
                                            <p>Curabitur eget aliquam erat. Curabitur a neque vitae purus volutpat elementum. Vivamus quis vestibulum leo, efficitur ullamcorper velit. Integer tincidunt finibus metus vel porta. Mauris sed mauris congue, pretium est nec, malesuada purus. Nulla hendrerit consectetur arcu et lacinia. Suspendisse augue justo, convallis eget arcu in, pretium tempor ligula. Nullam vulputate tincidunt est ut ullamcorper.</p>
                                            <p>Curabitur sed sodales leo. Nulla facilisi. Etiam condimentum, nisi id tempor vulputate, nisi justo cursus justo, pellentesque condimentum diam arcu sit amet leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In placerat tellus a posuere vehicula. Donec diam massa, efficitur vitae mattis et, pretium in augue. Fusce iaculis mi quis ante venenatis, sit amet pellentesque orci aliquam. Vestibulum elementum posuere vehicula.</p>
                                            <p>Sed tincidunt diam a massa pharetra faucibus. Praesent condimentum id arcu nec fringilla. Maecenas faucibus, ante et venenatis interdum, erat mi eleifend dui, at convallis nisl est nec arcu. Duis vitae arcu rhoncus, faucibus magna ut, tempus metus. Cras in nibh sed ipsum consequat rhoncus. Proin fringilla nulla ut augue tempor fermentum. Nunc hendrerit non nisi vitae finibus. Donec eget ornare libero. Aliquam auctor erat enim, a semper risus semper at. In ut dui in metus tincidunt euismod eget et lacus. Aenean et dictum urna, sed rhoncus lorem. Duis pharetra sagittis odio. Etiam a libero ut nisi feugiat tincidunt vel vitae turpis. Maecenas vel orci sit amet lorem hendrerit venenatis sollicitudin ut dui. Quisque rhoncus nibh in massa pretium scelerisque.</p>
                                        </div>
                                    </div>
                                    <!-- Add Scroll Bar -->
                                    <div class="swiper-scrollbar"></div>
                                    <div class="position-absolute-bottom text-center m-3">
                                        <button type="button" class="btn btn-sm btn-dark shadow-sm" onclick="view_itinerary_resumen()">Ver Resumen</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="swiper-container swiper-container-gallery">
                                <div class="swiper-wrapper">
                                    <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/itinerary/15681356773571.2.jpg')}}"><img src="{{asset('images/itinerary/15681356773571.2.jpg')}}" class="w-100"></a>
                                    <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/itinerary/1571243284484Humantay lake.png')}}"><img src="{{asset('images/itinerary/1571243284484Humantay lake.png')}}" class="w-100"></a>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row no-gutters align-items-center align-items-resumen d-none">
                        <div class="col-6">
                            <div class="swiper-container swiper-container-gallery">
                                <div class="swiper-wrapper">
                                    <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/itinerary/15681356773571.2.jpg')}}"><img src="{{asset('images/itinerary/15681356773571.2.jpg')}}" class="w-100"></a>
                                    <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/itinerary/1571243284484Humantay lake.png')}}"><img src="{{asset('images/itinerary/1571243284484Humantay lake.png')}}" class="w-100"></a>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-5" id="box-resumen">
                                <h4>Dia 2</h4>
                                <div class="line-subtitle"></div>
                                <p><mark class="font-weight-bold">Llegada A Cusco/noche En Cusco.-</mark> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At blanditiis consequuntur dicta fugit illo in, inventore ipsum iusto officia quasi quo quod, similique tempore temporibus ullam voluptas voluptates, voluptatibus voluptatum.</p>
                                <button type="button" class="btn btn-link p-0 text-secondary font-weight-lighter" onclick="view_itinerary()">LEER MÁS</button>
                            </div>
                            <div class="invisible position-absolute-top" id="box-detail">
                                <div class="swiper-container swiper-container-detail">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <h4>Scroll Container</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, ex eu sagittis faucibus, ligula ipsum sagittis magna, et imperdiet dolor lectus eu libero. Vestibulum venenatis eget turpis sed faucibus. Maecenas in ullamcorper orci, eu ullamcorper sem. Etiam elit ante, luctus non ante sit amet, sodales vulputate odio. Aenean tristique nisl tellus, sit amet fringilla nisl volutpat cursus. Quisque dignissim lectus ac nunc consectetur mattis. Proin vel hendrerit ipsum, et lobortis dolor. Vestibulum convallis, nibh et tincidunt tristique, nisl risus facilisis lectus, ut interdum orci nisl ac nunc. Cras et aliquam felis. Quisque vel ipsum at elit sodales posuere eget non est. Fusce convallis vestibulum dolor non volutpat. Vivamus vestibulum quam ut ultricies pretium.</p>
                                            <p>Suspendisse rhoncus fringilla nisl. Mauris eget lorem ac urna consectetur convallis non vel mi. Donec libero dolor, volutpat ut urna sit amet, aliquet molestie purus. Phasellus faucibus, leo vel scelerisque lobortis, ipsum leo sollicitudin metus, eget sagittis ante orci eu ipsum. Nulla ac mauris eu risus sagittis scelerisque iaculis bibendum mauris. Cras ut egestas orci. Cras odio risus, sagittis ut nunc vitae, aliquam consectetur purus. Vivamus ornare nunc vel tellus facilisis, quis dictum elit tincidunt. Donec accumsan nisi at laoreet sodales. Cras at ullamcorper massa. Maecenas at facilisis ex. Nam mollis dignissim purus id efficitur.</p>
                                            <p>Curabitur eget aliquam erat. Curabitur a neque vitae purus volutpat elementum. Vivamus quis vestibulum leo, efficitur ullamcorper velit. Integer tincidunt finibus metus vel porta. Mauris sed mauris congue, pretium est nec, malesuada purus. Nulla hendrerit consectetur arcu et lacinia. Suspendisse augue justo, convallis eget arcu in, pretium tempor ligula. Nullam vulputate tincidunt est ut ullamcorper.</p>
                                            <p>Curabitur sed sodales leo. Nulla facilisi. Etiam condimentum, nisi id tempor vulputate, nisi justo cursus justo, pellentesque condimentum diam arcu sit amet leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In placerat tellus a posuere vehicula. Donec diam massa, efficitur vitae mattis et, pretium in augue. Fusce iaculis mi quis ante venenatis, sit amet pellentesque orci aliquam. Vestibulum elementum posuere vehicula.</p>
                                            <p>Sed tincidunt diam a massa pharetra faucibus. Praesent condimentum id arcu nec fringilla. Maecenas faucibus, ante et venenatis interdum, erat mi eleifend dui, at convallis nisl est nec arcu. Duis vitae arcu rhoncus, faucibus magna ut, tempus metus. Cras in nibh sed ipsum consequat rhoncus. Proin fringilla nulla ut augue tempor fermentum. Nunc hendrerit non nisi vitae finibus. Donec eget ornare libero. Aliquam auctor erat enim, a semper risus semper at. In ut dui in metus tincidunt euismod eget et lacus. Aenean et dictum urna, sed rhoncus lorem. Duis pharetra sagittis odio. Etiam a libero ut nisi feugiat tincidunt vel vitae turpis. Maecenas vel orci sit amet lorem hendrerit venenatis sollicitudin ut dui. Quisque rhoncus nibh in massa pretium scelerisque.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus, ex eu sagittis faucibus, ligula ipsum sagittis magna, et imperdiet dolor lectus eu libero. Vestibulum venenatis eget turpis sed faucibus. Maecenas in ullamcorper orci, eu ullamcorper sem. Etiam elit ante, luctus non ante sit amet, sodales vulputate odio. Aenean tristique nisl tellus, sit amet fringilla nisl volutpat cursus. Quisque dignissim lectus ac nunc consectetur mattis. Proin vel hendrerit ipsum, et lobortis dolor. Vestibulum convallis, nibh et tincidunt tristique, nisl risus facilisis lectus, ut interdum orci nisl ac nunc. Cras et aliquam felis. Quisque vel ipsum at elit sodales posuere eget non est. Fusce convallis vestibulum dolor non volutpat. Vivamus vestibulum quam ut ultricies pretium.</p>
                                            <p>Suspendisse rhoncus fringilla nisl. Mauris eget lorem ac urna consectetur convallis non vel mi. Donec libero dolor, volutpat ut urna sit amet, aliquet molestie purus. Phasellus faucibus, leo vel scelerisque lobortis, ipsum leo sollicitudin metus, eget sagittis ante orci eu ipsum. Nulla ac mauris eu risus sagittis scelerisque iaculis bibendum mauris. Cras ut egestas orci. Cras odio risus, sagittis ut nunc vitae, aliquam consectetur purus. Vivamus ornare nunc vel tellus facilisis, quis dictum elit tincidunt. Donec accumsan nisi at laoreet sodales. Cras at ullamcorper massa. Maecenas at facilisis ex. Nam mollis dignissim purus id efficitur.</p>
                                            <p>Curabitur eget aliquam erat. Curabitur a neque vitae purus volutpat elementum. Vivamus quis vestibulum leo, efficitur ullamcorper velit. Integer tincidunt finibus metus vel porta. Mauris sed mauris congue, pretium est nec, malesuada purus. Nulla hendrerit consectetur arcu et lacinia. Suspendisse augue justo, convallis eget arcu in, pretium tempor ligula. Nullam vulputate tincidunt est ut ullamcorper.</p>
                                            <p>Curabitur sed sodales leo. Nulla facilisi. Etiam condimentum, nisi id tempor vulputate, nisi justo cursus justo, pellentesque condimentum diam arcu sit amet leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In placerat tellus a posuere vehicula. Donec diam massa, efficitur vitae mattis et, pretium in augue. Fusce iaculis mi quis ante venenatis, sit amet pellentesque orci aliquam. Vestibulum elementum posuere vehicula.</p>
                                            <p>Sed tincidunt diam a massa pharetra faucibus. Praesent condimentum id arcu nec fringilla. Maecenas faucibus, ante et venenatis interdum, erat mi eleifend dui, at convallis nisl est nec arcu. Duis vitae arcu rhoncus, faucibus magna ut, tempus metus. Cras in nibh sed ipsum consequat rhoncus. Proin fringilla nulla ut augue tempor fermentum. Nunc hendrerit non nisi vitae finibus. Donec eget ornare libero. Aliquam auctor erat enim, a semper risus semper at. In ut dui in metus tincidunt euismod eget et lacus. Aenean et dictum urna, sed rhoncus lorem. Duis pharetra sagittis odio. Etiam a libero ut nisi feugiat tincidunt vel vitae turpis. Maecenas vel orci sit amet lorem hendrerit venenatis sollicitudin ut dui. Quisque rhoncus nibh in massa pretium scelerisque.</p>
                                        </div>
                                    </div>
                                    <!-- Add Scroll Bar -->
                                    <div class="swiper-scrollbar"></div>
                                    <div class="position-absolute-bottom text-center m-3">
                                        <button type="button" class="btn btn-sm btn-dark shadow-sm" onclick="view_itinerary_resumen()">Ver Resumen</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>

            <div id="destinos">
                <div id="incluye">
                    <div class="position-relative py-5">
                        <div class="offer-banner">
                            <div class="container">
                                <div class="row mt-3 justify-content-around">
                                    <div class="col-auto text-center">
                                        <a href="" class="text-dark">
                                            <img src="{{asset('images/destinations/colca.jpg')}}" alt="" width="80" height="80" class="rounded-circle" data-toggle="tooltip" data-placement="top" title="lima">
                                            <small class="d-block font-weight-bold">Lima</small>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center">
                                        <a href="" class="text-dark">
                                            <img src="{{asset('images/destinations/titicaca.jpg')}}" alt="" width="80" height="80" class="rounded-circle" data-toggle="tooltip" data-placement="top" title="lima">
                                            <small class="d-block font-weight-bold">Cusco</small>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center">
                                        <a href="" class="text-dark">
                                            <img src="{{asset('images/destinations/machu-picchu.jpg')}}" alt="" width="80" height="80" class="rounded-circle" data-toggle="tooltip" data-placement="top" title="lima">
                                            <small class="d-block font-weight-bold">Cusco</small>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center">
                                        <a href="" class="text-dark">
                                            <img src="{{asset('images/destinations/colca.jpg')}}" alt="" width="80" height="80" class="rounded-circle" data-toggle="tooltip" data-placement="top" title="lima">
                                            <small class="d-block font-weight-bold">Machu picchu</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="precios">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col">
                            <h6 class="font-weight-bold text-secondary mt-4"><span class="text-g-yellow">Precios:</span></h6>
                            <p>Los precios estan basados en doble acomodación.</p>
                            <table class="table table-borderless border">
                                <thead class="thead-dark">
                                    <tr class="text-center">
                                        <th scope="col">Económico</th>
                                        <th scope="col">Normal</th>
                                        <th scope="col">Superior</th>
                                        <th scope="col">Lujo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>$567<small>USD</small></td>
                                        <td>$567<small>USD</small></td>
                                        <td>$567<small>USD</small></td>
                                        <td>$567<small>USD</small></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="alert alert-primary">
                                <p class="m-0">*Si tiene algún hotel en especifico con gusto lo prepararemos una cotización personalizada.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="opcional">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h6 class="font-weight-bold text-secondary mt-4"><span class="text-g-yellow">Opcional</span></h6>
                            <p>Disfrute de lo mas importante de Cusco con los expertos, en cantidad de dias que se adaptan a su itinerario. Los esperamos!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="consulte">
            <div class="container-fluid">
                <div class="row justify-content-center my-4">
                    <div class="col-2">
                        <img src="{{asset('images/logo-andes-y.png')}}" alt="" class="w-100">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-7">
                        <h5 class="font-weight-bold text-center">CONSULTA DE VIAJES</h5>
                        <form-inquire-detail></form-inquire-detail>
                    </div>
                </div>
            </div>
        </section>

        @endforeach
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
