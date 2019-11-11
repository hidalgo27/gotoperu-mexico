@extends('layouts.page.app')
    @section('content')
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
                        <h1 class="font-weight-lighter h2 mt-5">Caminho Pelo Salkantay</h1>
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
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#detalle" data-toggle="tooltip" data-placement="right" title="Detalle"></a>
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#incluye" data-toggle="tooltip" data-placement="right" title="incluye"></a>
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#list-item-3" data-toggle="tooltip" data-placement="right" title="Precios"></a>
                    <a class="list-group-item list-group-item-detail list-group-item-action" href="#list-item-4" data-toggle="tooltip" data-placement="right" title="Consulte Ahora"></a>
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
                                    <p class="m-0">Paquete donde podra disfrutar las maravillas de Cusco ciudad y su mistica detras de la conquista española, conocera un poco más acerca de lo que representaba el centro historico de Cusco para el imperio INCA y sus cambios a traves de la historia. Quedara sorprendido sobre como para la epoca el imperio INCA estaba muy adelantado en temas de ingienería, agricultura, astronomia, etc y por supuesto la magia que envuelve Machupicchu su descubrimiento, historia, curiosidades, etc. Ademas de tener la opción de elegir entre 2 increibles tours como lo son Montaña 7 Colores o Laguna Humantay, sinceramente con el equipo de GOTOPERÚ no logramos decidir cual es nuestro favorito, pero algo si puede tener seguro ambos le dejaran boquiabierta una vez llegue a la cima de esas montañas. ¡Perú los espera!</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h6 class="font-weight-bold text-secondary mt-4"><span class="text-g-yellow">Categoría</span>: <mark>Recomendados Favoritos</mark></h6>
                                    <p>Disfrute de lo mas importante de Cusco con los expertos, en cantidad de dias que se adaptan a su itinerario. Los esperamos!</p>

                                    <h6 class="font-weight-bold text-secondary mt-4"><span class="text-g-yellow">Demanda física</span>: <mark>Baja</mark></h6>
                                    <p>Físicamente poco exigente.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card sticky-top">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center my-5">
                <div class="tl-1"></div>
                <div class="tl-2"><img src="{{asset('images/logo-ave-grey.png')}}" alt="" class="w-100"></div>
                <div class="tl-3"></div>
            </div>
            <div id="incluye">
                <div class="container">
                    <div class="row justify-content-around pt-4">
                        <div class="col-4 text-center">
                            <img width="110" height="75" src="https://backpacktraveler.mikado-themes.com/wp-content/uploads/2018/09/beach-category.png" class="attachment-full size-full" alt="o" />
                            <h4>Beaches</h4>
                            <p class="mkdf-pcli-count">4 destinations</p>
                        </div>
                        <div class="col-4 text-center">
                            <img width="110" height="75" src="https://backpacktraveler.mikado-themes.com/wp-content/uploads/2018/09/dog-category.png" class="attachment-full size-full" alt="o" />
                            <h4>Beaches</h4>
                            <p class="mkdf-pcli-count">4 destinations</p>
                        </div>

                        <div class="col-4 text-center">
                            <img width="110" height="75" src="https://backpacktraveler.mikado-themes.com/wp-content/uploads/2018/09/restorant-category.png" class="attachment-full size-full" alt="o" />
                            <h4>Beaches</h4>
                            <p class="mkdf-pcli-count">4 destinations</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center my-5">
                <div class="tl-1"></div>
{{--                <div class="tl-2"><img src="{{asset('images/logo-ave-grey.png')}}" alt="" class="w-100"></div>--}}
                <div class="tl-3"></div>
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


    @endsection
