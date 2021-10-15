<!doctype html>
<html lang="es">
<!-- 
    creadores:Santiago Piraquive, Andres Tibaquicha
    el fin de este codigo es dar una plantilla a login y a registro incluyendo un navbar y el estilo de los ya mensionados login y registro
 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AbsoluteFite</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link rel="shortcut icon" href="{{ URL::asset('/img/Logo.png') }}">
    <!--CDN MDBootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
     <!-- contenedor de la pagina -->
    <div>
        <!-- navbar de la pagina contiene una condicion en la que no se muestran las oras paginas hasta que el usuario este registrado -->
        <nav class="nav navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="{{ url('/') }}" class="head log nav-link">AbsoluteFite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <ul class="navbar">
                        @guest
                            @if(Route::has('login'))
                            <!-- apartado de login -->
                                <li class="nav-item">
                                    <a class="nav-link head"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if(Route::has('register'))
                            <!-- apartado de registro -->
                                <li class="nav-item">
                                    <a class="nav-link head"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <!-- apartado del nombre del usuario -->
                            <li class="nav-item">
                                <a class="nav-link head" href="#">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul>
                                    <!-- apartado de accion de logout -->
                                    <li><a class="nav-link head" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </li>
                                </ul>



                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none head">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>

<!--  -->