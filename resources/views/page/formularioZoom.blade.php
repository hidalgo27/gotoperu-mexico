<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
    <!-- Title y meta descripcion-->
    <title>Formulario para contactar por Zoom</title>
    <link href="{{asset('icons/favicon.ico')}}" rel="icon" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ asset('css/block.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('themify-icons/themify-icons.css') }}" rel="stylesheet">

</head>
<body>
<div class=" container">
    <div class="row">
        <div class=" col-lg-6 mt-5 mx-auto">
                <div class=" text-center mb-5">
                    <a href="https://gotoperu.com.mx/" target="_blank"><img src="{{asset('images/logo-gotoperu-ave.png')}}" alt="Logo Gotoperu" class=" w-25 mb-3"></a>
                    <h1 class=" h2 text-g-yellow font-weight-bolder mb-1">Programa una reunión vía ZOOM</h1>
                    <p class=" text-g-dark-light m-2">Déjenos su datos para poder agendar una reunion por zoom</p>
                    @if (session('status'))
                        <div class=" alert alert-success mt-2" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                </div>
                <form method="POST" action="{{route('zoom_path')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="t_nombre" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Celular</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="t_celular" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" name="t_email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Fecha</label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control" name="t_fecha" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Hora</label>
                        <div class="col-sm-10">
                            <select name="t_hora" class="form-control">
                                <option selected>09:00 am - 09:30 am</option>
                                <option>09:30 am - 10:00 am</option>
                                <option>10:00 am - 10:30 am</option>
                                <option>10:30 am - 11:00 am</option>
                                <option>11:00 am - 11:30 am</option>
                                <option>11:30 am - 12:00 pm</option>
                                <option>12:00 pm - 12:30 pm</option>
                                <option>12:30 am - 01:00 pm</option>
                                <option>02:00 pm - 02:30 pm</option>
                                <option>02:30 pm - 03:00 pm</option>
                                <option>03:00 pm - 03:30 pm</option>
                                <option>03:30 pm - 04:00 pm</option>
                                <option>04:00 pm - 04:30 pm</option>
                                <option>04:30 pm - 05:00 pm</option>
                                <option>05:00 pm - 05:30 pm</option>
                                <option>05:30 pm - 06:00 pm</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button class=" btn btn-g-yellow text-white" type="submit">Enviar</button>
                    </div>
                </form>
        </div>
    </div>
    
</div>
   
</body>
</html>