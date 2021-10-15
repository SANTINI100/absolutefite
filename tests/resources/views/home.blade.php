<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AbsoluteFite</title>

    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link rel="shortcut icon" href="{{ URL::asset('/img/Logo.png') }}">
    <!--CDN MDBootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

    <!-- icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Boostarp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->

    <style>
        .banner {
            width: 100%;
            position: relative;
            background: url(https://s1.1zoom.me/big0/242/Fitness_weight_lifting_434614.jpg);
            min-height: 75vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .scrolling-active {
            background-color: #fff;
            box-shadow: 0 3px 1rem rgba(0, 0, 0, .1);
        }

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
            color: #911a11;
        }

        .head:hover {
            color: #911a11;
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

        #foot {
            background: #000000;
        }

        #logo {
            position: relative;
            bottom: 8px;
        }

        .nav ul li ul {
            display: none;
            position: absolute;
            list-style: none;
        }

        .nav ul li:hover>ul {
            display: block;
        }
        #vid{
            
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="menu" class="nav navbar fixed-top navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <img id="logo" src="{{ URL::asset('/img/Logo.png') }}" alt="logo"
                        width="50" height="50">
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
                                    <a class="nav-link head"
                                        href="{{ url('/calendario') }}">Calendario</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link head"
                                        href="{{ url('/entrenador') }}">Entrenadores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link head" href="#">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul>
                                        <li><a class="nav-link head" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                        </li>
                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}"
                                        method="POST" class="d-none head">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <section class="img-fluid banner"></section>
            <h2 class="text-center">MOTIVATE!!!</h2>
            <div id="vid" class="container-fluid col-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/X_9VoqR5ojM"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>


            <div class="container">
                <div class="row">
                    <h1 class="text-center">Entrena fuertemente</h1>
                </div>
            </div>


            <div class="col-12 mt-4 text-center">
                <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-0 g-lg-4">
                    <div class="clas1 col">
                        <div id="img1" class="p-4 border bg-light">
                            <img src="{{ URL::asset('/img/workout-abs-crossfit-russian-dumbbell-wallpaper-preview.jpg') }}"
                                class="img-fluid" alt="img1">
                            <h5>Acoplate al mejor AbsoluteFite y estaras en forma</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis alias eligendi
                                officia expedita corrupti laboriosam nam quam quas voluptatum architecto totam
                                asperiores magnam, corporis qui cum sed amet illum quis.
                            </p>
                        </div>
                    </div>
                    <div class="clas1 col">
                        <div id="img2" class="p-4 border bg-light">
                            <img src="{{ URL::asset('/img/personal-weight-training-in-the-gym-royalty-free-image-1568020980.jpg') }}"
                                class="img-fluid" alt="doc">
                            <h5>Profesionales</h5>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, odit! Quidem nobis
                                delectus facere ea a unde odio laudantium vero aut culpa in soluta labore dignissimos
                                officia sequi inventore totam fugit iusto laboriosam assumenda itaque, praesentium
                                facilis. Pariatur!
                            </p>
                        </div>
                    </div>
                    <div class="clas1 col">
                        <div id="img3" class="p-4 border bg-light">
                            <img src="{{ URL::asset('/img/female-weightlifter-crossfit.jpg') }}"
                                class="img-fluid" alt="imagen">
                            <h5>Entrenador Personal</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt repudiandae, perferendis
                                vitae dicta veniam sit laboriosam esse distinctio reprehenderit reiciendis placeat
                                consequatur doloribus maxime unde, porro nesciunt molestias laborum nisi? Amet velit
                                soluta voluptates eaque ullam nesciunt doloribus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <footer id="foot" class="container-fluid text-center text-lg-start text-muted">

        <section class="col-12 d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

            <div class="me-5 d-none d-lg-block">
                <span>Este es un espacio publicitario de AbsoluteFite:</span>
            </div>

            <div>
                <a href="https://www.facebook.com/" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.google.com/" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="https://www.instagram.com/" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://co.linkedin.com/" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com/" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>

        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">

                <div class="row mt-3">

                    <div class="col-12 col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>AbsoluteFite
                        </h6>
                        <p>
                            Esta empresa quiere que tus metas se cumplan
                        </p>
                    </div>


                    <div class="col-12 col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Productos
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">ligas</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pesas</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Caminadoras</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Prensa de piernas</a>
                        </p>
                    </div>

                    <div class="col-12 col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Atencion al Cliente
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Precios</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Configuraciones</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pedidos</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Ayudas</a>
                        </p>
                    </div>

                    <div class="col-12 col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Contactos
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Km7, via Mosquera</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            AbsoluteFite@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 57 310 567 8865</p>
                        <p><i class="fas fa-print me-3"></i> + 57 320 567 8934</p>
                    </div>

                </div>

            </div>
        </section>

        <div class="col-12 text-center p-4" id="Footer">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">AbsoluteFite</a>
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script>
        window.addEventListener('scroll', function () {
            let header = document.querySelector('#menu');
            let windowPosition = window.scrollY > 335;
            header.classList.toggle('scrolling-active', windowPosition);
        })
    </script>

</body>

</html>