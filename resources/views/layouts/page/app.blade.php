<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Paquetes de Viaje a Perú | Perú Tours</title>
    <link href="{{asset('icons/favicon.ico')}}" rel="icon" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('themify-icons/themify-icons.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token()  }}">

    <script type="text/javascript" src="https://widget.sirena.app/get?token=zdF9nfRDq1GYnzBarfuv3NTwoEBBmEga" async="true"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KK52HEG2LE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-KK52HEG2LE');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153176828-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-153176828-1');
    </script>


</head>
<body data-spy="scroll" data-target="#navbar-scroll">
<div id="app">

    <div class="menu-container">
        <div class="container mt-3">
            <div class="row justify-content-between align-items-center">
                <div class="col-3">
                    <div class="form-group m-0 has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control form-control-search shadow-none border-0 text-white" placeholder="BUSCAR">
                    </div>
                </div>
                <div class="col-auto">
                    <a href="{{route('home_path')}}"><img src="{{asset('images/logo-gotoperu-white.png')}}" width="250" alt="logo andesviagens" class="img-fluid"></a>
                </div>
                <div class="col-3 text-right">
                    <a href="#consulte" class="btn btn-inquire float-right ml-3 font-weight-bold px-4 text-white rounded-0">COTIZAR VIAJE</a>
                </div>
            </div>
        </div>
        @include('layouts.page.menu')

    </div>




    @yield('content')

    <footer>
        <img src="{{asset('images/footer.jpg')}}" alt="" class="w-100">
    </footer>

</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="https://apps.elfsight.com/p/platform.js"></script>
<script src="https://player.vimeo.com/api/player.js"></script>
<script src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/d1b447b4-892c-4562-a6dc-536d0eb23944-loader.js" ></script>
@stack('scripts')
<script>
    feather.replace();

    $(document).ready(function(){
        $('.venobox').venobox();
    });

    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
</script>
    <script>
        /*global $ */
        $(document).ready(function() {

            "use strict";

            $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
            //Checks if li has sub (ul) and adds class for toggle icon - just an UI

            $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
            //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

            $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">Navigation</a>");

            //Adds menu-mobile class (for mobile toggle menu) before the normal menu
            //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
            //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
            //Done this way so it can be used with wordpress without any trouble

            $(".menu > ul > li").hover(function(e) {
                if ($(window).width() > 943) {
                    $(this).children("ul").stop(true, false).fadeToggle(150);
                    e.preventDefault();
                }
            });
            //If width is more than 943px dropdowns are displayed on hover

            $(".menu > ul > li").click(function() {
                if ($(window).width() <= 943) {
                    $(this).children("ul").fadeToggle(150);
                }
            });
            //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

            $(".menu-mobile").click(function(e) {
                $(".menu > ul").toggleClass('show-on-mobile');
                e.preventDefault();
            });
            //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <!-- begin olark code -->
    <script type="text/javascript" async> ;(function(o,l,a,r,k,y){if(o.olark)return; r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0]; y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r); y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)}; y.extend=function(i,j){y("extend",i,j)}; y.identify=function(i){y("identify",k.i=i)}; y.configure=function(i,j){y("configure",i,j);k.c[i]=j}; k=y._={s:[],t:[+new Date],c:{},l:a}; })(window,document,"static.olark.com/jsclient/loader.js");
        /* custom configuration goes here (www.olark.com/documentation) */
        olark.identify('7508-290-10-8562');</script>
    <!-- end olark code -->


    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDf1RN8KKGNdS-iEarIgXpaqa-khw7EmZI&callback=initMap">
    </script>
</body>
</html>
