<!DOCTYPE html>
<!-- 
    creadores:Santiago Piraquive, Andres Tibaquicha
    el fin de esta pagina es mostra un home page de un sitio web que es sobre un gimnasio, la pagina tiene un menu de navegacion una seccion con un video 
    tiene un apartado de tres imagenes cada una con contenido mas abajo hay otro apartado que se llama transformacion luego de ese apartado esta el footer
 -->
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
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</head>

<body>
    <!-- contenedor de la pagina -->
    <div class="container-fluid">
        <div class="row">
            <!-- navbar de la pagina contiene una condicion en la que no se muestran las oras paginas hasta que el usuario este registrado -->
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
                                <!-- apartado de calendario -->
                                <li class="nav-item">
                                    <a class="nav-link head"
                                        href="{{ url('/calendario') }}">Calendario</a>
                                </li>
                                <!-- apartado de entrenadores -->
                                <li class="nav-item">
                                    <a class="nav-link head"
                                        href="{{ url('/entrenador') }}">Entrenadores</a>
                                </li>
                                <!-- apartado del nombre del usuario -->
                                <li class="nav-item">
                                    <a class="nav-link head" href="#">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul>
                                        <!-- apartado de accion de logout -->
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
            <!-- en este section se es donde se genera la imagen que esta debajo del navbar -->
            <section class="img-fluid banner"></section>
            <!-- en este apartado esta la el sibtitulo y el un video sacado de youtube -->
            <h2 id="titulop" class="text-center">MOTIVATE</h2>
            <div class="container-fluid col-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/X_9VoqR5ojM"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>

            <!-- en este apartado esta uno de los titulos de la pagina -->
            <div class="container">
                <div class="row">
                    <h1 id="titulop" class="text-center">Entrena fuertemente</h1>
                </div>
            </div>

            <!-- aca podemoos encontrar un apartado con 3 imagenes cada imagen con texto  -->
            <div class="col-12 mt-4 text-center">
                <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-0 g-lg-4">
                    <div class="clas1 col">
                        <!-- imagen1 -->
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
                        <!-- imagen2 -->
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
                        <!-- imagen3 -->
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

        <br>
        <!-- en este apartado se muestra la transformacion que tubo un usuario del gym -->
        <div class="col-12 text-center">
            <h1>Transformation</h1>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <!-- imagen 1 con texto -->
                <img id="pr" src="{{ URL::asset('/img/intestinocover.jpg') }}"
                    class="img-fluid col- border bg-light" align="left" alt="doc" width="270" height="270">

                <h5>Iniciando en AbsoluteFite</h5>
                <p> <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus enim totam officiis doloremque,
                    magni adipisci commodi hic a cumque quam facere laboriosam deserunt molestiae fuga excepturi,
                    tempora ad possimus in, eum dolorem harum. Accusamus doloribus eum modi minima
                    tempore vel ipsa ea, exercitationem doloremque sint. Ipsa cumque ullam nihil et.
                </p> <br>


            </div>

            <div class="col-sm-12 col-md-6">

                <!-- imagen 2 con texto -->
                <img id="pr" src="{{ URL::asset('/img/proceso.jpg') }}"
                    class="img-fluid col- border bg-light" align="left" alt="doc" width="300" height="400">

                <h5>Meses Despues en AbsoluteFite</h5>
                <p> <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus enim totam officiis doloremque,
                    magni adipisci commodi hic a cumque quam facere laboriosam deserunt molestiae fuga excepturi,
                    tempora ad possimus in, eum dolorem harum. Accusamus doloribus eum modi minima
                    tempore vel ipsa ea, exercitationem doloremque sint. Ipsa cumque ullam nihil et.
                </p> <br>


            </div>

            <div class="col-sm-12 col-md-6">

                <!-- imagen 3 con texto -->
                <img id="pr" src="{{ URL::asset('/img/proceso2.jpg') }}"
                    class="img-fluid col- border bg-light" align="left" alt="doc" width="270" height="270">

                <h5>1 Año en AbsoluteFite</h5>
                <p> <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus enim totam officiis doloremque,
                    magni adipisci commodi hic a cumque quam facere laboriosam deserunt molestiae fuga excepturi,
                    tempora ad possimus in, eum dolorem harum. Accusamus doloribus eum modi minima
                    tempore vel ipsa ea, exercitationem doloremque sint. Ipsa cumque ullam nihil et.
                </p> <br>


            </div>

            <div class="col-sm-12 col-md-6">

                <!-- imagen 4 con texto -->
                <img id="pr" src="{{ URL::asset('/img/proceso3.jpg') }}"
                    class="img-fluid col- border bg-light" align="left" alt="doc" width="200" height="200">

                <h5>2 Años en AbsoluteFite</h5>
                <p> <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus enim totam officiis doloremque,
                    magni adipisci commodi hic a cumque quam facere laboriosam deserunt molestiae fuga excepturi,
                    tempora ad possimus in, eum dolorem harum. Accusamus doloribus eum modi minima
                    tempore vel ipsa ea, exercitationem doloremque sint. Ipsa cumque ullam nihil et.
                </p> <br>


            </div>

        </div>
    </div>


    </div>
    <br>
    <!-- en este apartado se puede ver el footer que contiene informacion sobre la pagina al igual que la redes sociales -->
    <footer id="foot" class="container-fluid text-center text-lg-start text-muted">
        <!-- en este section esta la informacion de el footer  -->
        <section class="col-12 d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

            <div class="me-5 d-none d-lg-block">
                <span>Este es un espacio publicitario de AbsoluteFite:</span>
            </div>
            <!-- aca podemos ver las redes sociales de la pagina -->
            <div>
                <!-- facebook -->
                <a href="https://www.facebook.com/" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <!-- twitter -->
                <a href="https://twitter.com/" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <!-- google -->
                <a href="https://www.google.com/" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <!-- instagram -->
                <a href="https://www.instagram.com/" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <!-- linkedin -->
                <a href="https://co.linkedin.com/" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <!-- github -->
                <a href="https://github.com/" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>

        </section>
        <!-- aca se puede encontrar el contenido del nav -->
        <section class="">
            <div class="container text-center text-md-start mt-5">

                <div class="row mt-3">
                    <!-- primer colimna -->
                    <div class="col-12 col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>AbsoluteFite
                        </h6>
                        <p>
                            Esta empresa quiere que tus metas se cumplan
                        </p>
                    </div>

                    <!-- segunda columna -->
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
                    <!-- tercera columna -->
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
                    <!-- cuarta columna -->
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
        <!-- en este apartado pondemos encontrar el copyright de la pagina -->
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


</body>

</html>