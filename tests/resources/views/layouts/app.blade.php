<!doctype html>
<html lang="es">

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
    <style>
        .nav-item {
            font-weight: 800;
            text-transform: uppercase;
            font-size: 1.2em;
            text-decoration: none;
            background-image: linear-gradient(currentColor, currentColor);
            background-position: 0% 100%;
            background-repeat: no-repeat;
            background-size: 0% 2px;
            transition: background-size .3s;
            list-style-type: none;
            color: #7B170F;
        }

        .nav-item:hover,
        .nav-item:focus {
            background-size: 100% 3px;
        }

        .head {
            color: #7B170F;
        }

        .head:hover {
            color: #7B170F;
        }

        .log {
            font-weight: 800;
            text-transform: uppercase;
            font-size: 1.2em;
            text-decoration: none;
            background-image: linear-gradient(currentColor, currentColor);
            background-position: 0% 100%;
            background-repeat: no-repeat;
            background-size: 0% 2px;
            list-style-type: none;
        }

        .card {
            width: 640px;
            height: 460px;
            background: #000;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        .card2 {
            width: 640px;
            height: 500px;
            background: #000;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        .card2 .logo,
        .card .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }

        .card-header {
            margin: 0;
            padding: 0 0 2px;
            text-align: center;
            font-size: 34px;
            text-transform: uppercase;
        }

        .card2 label,
        .card label {
            margin: 0;
            padding: 0;
            font-weight: bold;
            display: block;
        }

        .card2 .input,
        .card .input {
            width: 100%;
            margin-bottom: 20px;
        }

        .card2 input[type="text"],
        .card2 input[type="email"],
        .card2 input[type="password"],
        .card input[type="text"],
        .card input[type="email"],
        .card input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }

        .card2 input[type="submit"],
        .card input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #911a11;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }

        .card a {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgray;
        }

        .card a:hover {
            color: #fff;
        }


        .nav ul li ul {
            display: none;
            position: absolute;
            list-style: none;
        }

        .nav ul li:hover>ul {
            display: block;
        }
    </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
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
                                <li class="nav-item">
                                    <a class="nav-link head"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if(Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link head"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link head" href="#">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul>
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