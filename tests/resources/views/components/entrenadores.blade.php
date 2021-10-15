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
                                    <a class="nav-link head" href="{{ url('/') }}">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link head"
                                        href="{{ url('/calendario') }}">Calendario</a>
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
            <div class="col-12 mt-4">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 g-2 g-lg-3">
                    <div class="col">
                        <div id="shop" class="p-3 border bg-light">
                            <h5>Andres R.</h5>
                            <img src="{{ URL::asset('/img/pexels-ali-madad-sakhirani-1211605.jpg') }}"
                                align="right" class="img-fluid" width="130" height="130" alt="foto4">
                            <h6>
                                Entrenador de Yoga
                            </h6>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit reprehenderit
                                necessitatibus inventore quibusdam officia modi, officiis repellendus ipsum, maiores
                                quasi dolorum reiciendis! Error hic eligendi laboriosam, possimus sunt placeat expedita,
                                commodi saepe ea quam quod veritatis illo exercitationem ullam. Expedita, reprehenderit.
                                Odit soluta pariatur recusandae dolores alias voluptates amet natus quae eligendi
                                voluptate atque nobis eaque mollitia quas nisi corrupti omnis, quo minus beatae impedit
                                sequi quos earum asperiores similique? Perspiciatis corporis eligendi sit laboriosam,
                                odit tempore architecto iure esse.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div id="shop1" class="p-3 border bg-light">
                            <h5>Carlos N.</h5>
                            <img src="{{ URL::asset('/img/pexels-andrew-dick-733500.jpg') }}"
                                align="right" class="img-fluid" width="130" height="130" alt="foto5">
                            <h6>
                                Entrenador de TRX
                            </h6>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore nisi esse ullam, fugit
                                eaque dolore distinctio temporibus fuga impedit quis facilis similique inventore earum!
                                Placeat minus corporis est quibusdam ab vero in recusandae consequuntur fugit harum sed
                                tempore expedita voluptas dolores, et doloremque a enim reprehenderit ratione tempora
                                at? Assumenda magnam perspiciatis ut nam fuga tempore quam suscipit vel. Consequuntur
                                tenetur, necessitatibus unde voluptate quos officia exercitationem! Harum in nemo
                                ratione impedit numquam odit? Rem nisi sequi eos laboriosam perspiciatis?</p>
                        </div>
                    </div>
                    <div class="col">
                        <div id="shop2" class="p-3 border bg-light">
                            <h5>Samuel M.</h5>
                            <img src="{{ URL::asset('/img/pexels-dani-alejandro-2951545.jpg') }}"
                                align="right" class="img-fluid" width="130" height="130" alt="foto6">
                            <h6>
                                Entrenador de Boxeo
                            </h6>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid debitis doloribus,
                                magnam numquam dolore accusantium sit reprehenderit magni aliquam doloremque laborum ad,
                                iusto alias. Quod eveniet placeat, dicta molestias, dolor sunt omnis modi fugit tempore
                                in explicabo. Ipsa omnis nobis quasi cupiditate totam, mollitia recusandae earum fugit
                                iure error sint, vitae deleniti saepe ut corrupti, provident itaque ab explicabo dolor
                                molestiae eligendi voluptate consequatur rerum. Soluta facere porro non quas, debitis
                                quis dolorum placeat ipsa quod magnam facilis, officiis harum.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div id="shop3" class="p-3 border bg-light">
                            <h5>Harol Y.</h5>
                            <img src="{{ URL::asset('/img/pexels-dellon-thomas-2216612.jpg') }}"
                                align="right" class="img-fluid" width="130" height="130" alt="foto7">
                            <h6>
                                Entrenador basico
                            </h6>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente iste impedit quas
                                exercitationem odit voluptates nobis iusto, amet cupiditate aspernatur. Eveniet officiis
                                sit unde odio doloribus assumenda nostrum, aspernatur porro laborum aliquid, id impedit
                                placeat corrupti debitis minima esse nesciunt fugiat eos quos molestiae, blanditiis
                                magnam qui quod expedita! Laborum blanditiis eligendi laudantium, praesentium omnis
                                nostrum consequatur beatae itaque fuga quisquam sequi incidunt quidem vitae corrupti
                                quod quibusdam nihil enim reiciendis doloribus. Atque repellat, sapiente velit ipsa
                                veniam ullam non!
                            </p>

                        </div>
                    </div>
                    <div class="col">
                        <div id="shop4" class="p-3 border bg-light">
                            <h5>Angela P.</h5>
                            <img src="{{ URL::asset('/img/pexels-jermaine-ulinwa-3225889.jpg') }}"
                                align="right" class="img-fluid" width="130" height="130" alt="foto8">
                            <h6>
                                Entrenadora de Boxeo
                            </h6>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quas alias
                                exercitationem magnam rem commodi possimus maxime deserunt repudiandae minima quisquam
                                reprehenderit tenetur nesciunt sunt suscipit distinctio eius iure a, labore ipsam at
                                quaerat sint quasi aspernatur? Quia animi minima error enim vero exercitationem
                                provident alias inventore quam magnam laboriosam consectetur iste, excepturi facilis
                                architecto sint unde autem nihil nulla ratione quod molestiae voluptates consequatur?
                                Autem, pariatur officia sed quibusdam praesentium velit tenetur. Ad aspernatur deleniti
                                harum, praesentium eveniet culpa?
                            </p>

                        </div>
                    </div>
                    <div class="col">
                        <div id="shop5" class="p-3 border bg-light">
                            <h5>Maria G.</h5>
                            <img src="{{ URL::asset('/img/pexels-mikhail-nilov-6740744.jpg') }}"
                                align="right" class="img-fluid" width="130" height="130" alt="foto9">
                            <h6>
                                Entrenadora de Yoga
                            </h6>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti optio repudiandae
                                rerum possimus minus autem, earum molestiae ad maiores amet atque obcaecati minima
                                laboriosam cupiditate illum numquam? Ut, amet. Nostrum distinctio enim quod quas eveniet
                                sint ullam. Laboriosam deserunt reiciendis illum nostrum eos esse aliquam repellat aut
                                quis sequi dolorum quam ipsam eius obcaecati beatae sunt iusto atque labore
                                exercitationem officiis et ipsum, maiores totam quibusdam. Mollitia ratione cumque
                                quidem, illum asperiores repellat error corrupti eos hic blanditiis, id maiores!
                            </p>

                        </div>
                    </div>
                    <div class="col">
                        <div id="shop6" class="p-3 border bg-light">
                            <h5>Sara H.</h5>
                            <img src="{{ URL::asset('/img/model-2453250_1920.jpg') }}"
                                align="right" class="img-fluid" width="130" height="130" alt="foto10">
                            <h6>
                                Entrenadora basico
                            </h6>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde error incidunt ea
                                nostrum vero soluta impedit saepe accusantium quam, vitae, corrupti atque aut veritatis,
                                tempora reprehenderit officia mollitia ullam animi cupiditate hic dignissimos in
                                aliquid! Eum et neque officiis sed a praesentium magnam quod odio, perferendis similique
                                ab veritatis ea enim eaque eligendi corporis aliquid alias voluptate dolores! Assumenda,
                                ullam facere consequuntur, quis iste accusantium quasi hic cupiditate voluptatem dolorum
                                fugiat quia similique, recusandae voluptas non asperiores eius officia!
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div id="shop7" class="p-3 border bg-light">
                            <h5>Juan C.</h5>
                            <img src="{{ URL::asset('/img/workout-2928389_1920.jpg') }}"
                                align="right" class="img-fluid" width="130" height="130" alt="foto11">
                            <h6>
                                Entrenador de TRX
                            </h6>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dicta
                                repudiandae illo, quis atque ab tenetur aliquam illum aspernatur possimus tempora,
                                eaque, sed a. Amet numquam vitae earum voluptates unde beatae, nulla laudantium, ex quo
                                quam libero! Officiis mollitia eos velit similique iste id fugit reiciendis officia,
                                libero exercitationem molestiae ab ea modi non iure a eligendi consectetur sint saepe
                                ipsa? Corrupti praesentium eius quibusdam tempore iusto, deserunt magnam nulla beatae
                                rem, reprehenderit libero optio nesciunt sapiente aspernatur, provident obcaecati.
                            </p>


                        </div>
                    </div>

                </div>
            </div>

            <br>
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
                integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
                integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
                crossorigin="anonymous">
            </script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js">
            </script>
            <script>
                window.addEventListener('scroll', function () {
                    let header = document.querySelector('#menu');
                    let windowPosition = window.scrollY > 335;
                    header.classList.toggle('scrolling-active', windowPosition);
                })
            </script>

</body>

</html>