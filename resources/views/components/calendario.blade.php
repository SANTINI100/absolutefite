<!DOCTYPE html>
<html lang="es">
<!-- 
    creadores:Santiago Piraquive, Andres Tibaquicha
    el fin de esta pagina es tener un apartado que tenga el calendario con los dias y meses del año y tambien tener 
    un crud donde se puedan registrar los usuarios su propias clases sean de trx yoga boxeo con la fecha en la cual
    se va a tomar la clase asignada, en el navbar tiene 3 apartados los cuales son inicio entrenadores y el usuario
    tambien tenemos el apartado del footer el cual tiene el copyright de la pagina y las redes sociales
 -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

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
                                <!-- apartado de inicio -->
                                <li class="nav-item">
                                    <a class="nav-link head" href="{{ url('/') }}">Inicio</a>
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
            <!-- en este section sale el nombre de pagina -->
            <section class="page-title-area parallax">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="page-title m-2">
                                <div class="title">
                                    <h2>CALENDARIO</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- en este cotainer esta todo el contenido que sale en el calendario que se implemento en la pagina -->
            <div class="container">
                <div class="row">
                    <div class="form text-white">
                        <form class="my-2" id="form">
                            <div class="calendar">
                                <div id="mes" class="calendar-info">
                                    <!-- aca esta el boton para seleccionar el mes anterior  -->
                                    <div class="calendar-prev carousel-control-prev-icon" id="prev-month"></div>
                                    <!-- este div muestra el mes en el que estamos -->
                                    <div class="calendar-month" id="month">Octubre</div>
                                    <!-- este div muestra el año en el que estamos -->
                                    <div class="calendar-year" id="year">2021</div>
                                    <!-- aca esta el boton para seleccionar el mes siguiente -->
                                    <div class="calendar-next carousel-control-next-icon" id="next-month"></div>
                                </div>
                                <!-- en este apatado se muestran los dias de la semana -->
                                <div id="dias" class="calendar-week">
                                    <div class="calendar-day calendar-item">lun</div>
                                    <div class="calendar-day calendar-item">mar</div>
                                    <div class="calendar-day calendar-item">mie</div>
                                    <div class="calendar-day calendar-item">jue</div>
                                    <div class="calendar-day calendar-item">vie</div>
                                    <div class="calendar-day calendar-item">sab</div>
                                    <div class="calendar-day calendar-item">dom</div>
                                </div>
                                <!-- en este apartado se muestran los dias del mes -->
                                <div class="calendar-dates" id="datos"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- en este apartado es donde esta un borton que despliega un modal para apartar clases con surespectiva tabla de cotenido -->
    <div class="col-12">
        <div class="box-header">
            <!--deplegar modal-->
            @if(auth()->user()->rol=="Entrenador")
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#RClases">
                    Registrar Clase
                </button>
            @endif
        </div><br>
        <!-- aca se encuantra la tabla que muestra los datos de la base de datos -->
        <table class="table table-dark table-bordered table-hover table-striped dt-responsive">
            <!-- aca estan los titulos de cada una de las columnas de la tabla -->
            <thead>
                <tr>
                    <th>Dia</th>
                    <th>Hora</th>
                    <th>Email</th>
                    <th>Clase</th>
                    <th></th>
                </tr>
            </thead>
            <!-- aca es donde se muestra el contenido que se guarda en la base de datos -->
            <tbody>
                @foreach($clases as $clase)
                    <tr>
                        <td>{{ $clase->fecha }}</td>
                        <td>{{ $clase->hora }}</td>
                        <td>{{ $clase->email }}</td>
                        <td>{{ $clase->clase }}</td>
                        <td>
                            @if(auth()->user()->rol=="User")
                                <div class="row">
                                    <form method="post" action="{{ url('incribir-clase/'.$clase->id) }}">
                                    @method('PUT')
                                        @csrf
                                        <div class="col-md-1">
                                            <a>
                                                <button class="btn btn-success">inscribirse</button>
                                            </a>
                                        </div>
                                    </form>
                            @endif
                            @if(auth()->user()->rol=="Entrenador")
                                <div class="row">
                                    <div class="col-md-1">
                                        <a>
                                            <button class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#EClases">Editar</button>
                                        </a>
                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class=" col-md-1 ">
                                        <!-- aca esta la funcion para eliminar datos -->
                                        <form method="post"
                                            action="{{ url('Eliminar-clase/'.$clase->id) }}">
                                            @method('delete')
                                            @csrf
                                            <!-- aca esta el boton para eliminar los dato -->
                                            <button class="btn btn-danger"> <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>
    </div>
    <!-- aca esta el modal que se despliega -->
    <div class="modal fade" id="RClases" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- titulo del modal -->
                    <h5 class="modal-title" id="staticBackdropLabel">Registrar Clase</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post">
                    @csrf
                    <div class="modal-body">
                        <!-- detro de este div se selecciona el dia que se quiere apartar la clase -->
                        <div class="form-group">
                            <h2>Dia</h2>
                            <select class="form-control input-lg" name="fecha" require="">
                                <?php
                        // se crea un bucle el cual genera los dias de 1 hasta el 31 para la opcion de dia
                        // y con la opcion de mostrar el dia de hoy
                            for ($i=1; $i<=31; $i++) {
                                if ($i == date('j'))
                                    echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                else
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                        ?>
                            </select>
                        </div>
                        <!-- en este div se selecciona la hora a la que se va an entrar a clase -->
                        <div class="form-group">
                            <h2>Hora</h2>
                            <select class="form-control input-lg" name="hora" require="">
                                <option value="">Seleccionar...</option>
                                <option value="8:00">8:00</option>
                                <option value="10:00">10:00</option>
                                <option value="14:00">14:00</option>
                                <option value="16:00">16:00</option>
                            </select>
                        </div>
                        <!-- en este div se ingresa el email de la parsona que aparta la clase -->
                        <div class="form-group">
                            <h2>Email</h2>
                            <input type="email" class="form-control input-lg" name="email" value="">
                            @error('email')
                                <div class="alert alert-danger"></div>
                            @enderror
                        </div>
                        <!-- en este div se selecciona la clase que se quiere tomar -->
                        <div class="form-group">
                            <h2>Clases</h2>
                            <select class="form-control input-lg" name="clase" require="">
                                <option value=""> Seleccionar...</option>
                                <option value="Trx">Trx</option>
                                <option value="Boxeo">Boxeo</option>
                                <option value="Yoga">Yoga</option>
                                <option value="Entrenamiento basico">Entrenamiento basico</option>
                            </select>
                        </div>
                    </div>
                    <!-- aca esta el voton para crear e registro -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Registrar</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="EClases" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- titulo del modal -->
                    <h5 class="modal-title" id="staticBackdropLabel">Editar Clase</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @foreach($clases as $clase)
                    <form method="post" action="{{ url('actualizar-clase',$clase->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="modal-body">
                            <!-- detro de este div se selecciona el dia que se quiere apartar la clase -->
                            <div class="form-group">
                                <h2>Dia</h2>
                                <select class="form-control input-lg" name="fecha" require=""
                                    value="{{ $clase->fecha }}">
                                    <?php
                        // se crea un bucle el cual genera los dias de 1 hasta el 31 para la opcion de dia
                        // y con la opcion de mostrar el dia de hoy
                            for ($i=1; $i<=31; $i++) {
                                if ($i == date('j'))
                                    echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                else
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                        ?>
                                </select>
                            </div>
                            <!-- en este div se selecciona la hora a la que se va an entrar a clase -->
                            <div class="form-group">
                                <h2>Hora</h2>
                                <select class="form-control input-lg" name="hora" require="">
                                    <option value="{{ $clase->hora }}"></option>
                                    <option value="8:00">8:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="16:00">16:00</option>
                                </select>
                            </div>
                            <!-- en este div se ingresa el email de la parsona que aparta la clase -->
                            <div class="form-group">
                                <h2>Email</h2>
                                <input type="email" class="form-control input-lg" name="email"
                                    value="{{ $clase->email }}">
                                @error('email')
                                    <div class="alert alert-danger"></div>
                                @enderror
                            </div>
                            <!-- en este div se selecciona la clase que se quiere tomar -->
                            <div class="form-group">
                                <h2>Clases</h2>
                                <select class="form-control input-lg" name="clase" require="">
                                    <option value="{{ $clase->clase }}"></option>
                                    <option value="Trx">Trx</option>
                                    <option value="Boxeo">Boxeo</option>
                                    <option value="Yoga">Yoga</option>
                                    <option value="Entrenamiento basico">Entrenamiento basico</option>
                                </select>
                            </div>
                        </div>
                        <!-- aca esta el voton para crear e registro -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Editar</button>
                        </div>
            </div>
            </form>
            @endforeach
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

    <script>
        // arreglo de los meses
        let monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'
        ];

        // fecha del pc
        let currentDate = new Date();
        // dia de la semana
        let currentDay = currentDate.getDate();
        // numero del mes entre 0 y 11
        let monthNumber = currentDate.getMonth();
        // año
        let currentYear = currentDate.getFullYear();

        let datos = document.getElementById('datos');
        let mes = document.getElementById('month');
        let año = document.getElementById('year');

        let flechaL = document.getElementById('prev-month');
        let flechaR = document.getElementById('next-month');

        // se encargan de poner el año y el mes
        month.textContent = monthNames[monthNumber];
        year.textContent = currentYear.toString();
        // funcion de flechas
        flechaL.addEventListener('click', () => lastMonth());
        flechaR.addEventListener('click', () => nextMonth());
        // se llama la funcion de dias
        writeMonth(monthNumber);

        // se encarga de cambiar los meses
        function writeMonth(month) {

            for (let i = startDay(); i > 0; i--) {
                datos.innerHTML +=
                    ` <div class"calendar-date calendar-item" id="antes">${getTotalDays(monthNumber-1)-(i-1)}</div>`;
            }

            for (let i = 1; i <= getTotalDays(month); i++) {

                if (i === currentDay) {
                    // muestra el dia de hoy
                    datos.innerHTML += ` <div class"calendar-date calendar-item" id="today">${i}</div>`;
                } else {
                    // muestra todos los dias 
                    datos.innerHTML += ` <div class"calendar-date calendar-item">${i}</div>`;
                }
            }
        }

        // se encarga de escribir la cantidad total de dias
        function getTotalDays(month) {
            if (month === -1) month = 11;
            // meses con 31 dias
            if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                return 31;

            }
            // meses con 30 dias
            else if (month == 3 || month == 5 || month == 8 || month == 10) {
                return 30;
            }
            // para febrero 
            else {
                return isLeap() ? 29 : 28;
            }
        }

        // se encarga de saber si el año es bisiesto
        function isLeap() {
            return ((currentYear % 100 !== 0) && (currentYear % 4 === 0) || (currentYear % 400 === 0));
        }

        // se encarga de poner el dia en el que empieza la semana 
        function startDay() {
            let start = new Date(currentYear, monthNumber, 1);
            return ((start.getDay() - 1) === -1) ? 6 : start.getDay() - 1;
        }

        // se encarga de poner el mes anterios
        function lastMonth() {
            if (monthNumber !== 0) {
                monthNumber--;
            } else {
                monthNumber = 11;
                currentYear--;
            }

            setNewDate();
        }

        // se encarga de poner el mes siguiente
        function nextMonth() {
            if (monthNumber !== 11) {
                monthNumber++;
            } else {
                monthNumber = 0;
                currentYear++;
            }

            setNewDate();
        }
        // establece la nueva fecha al mover el calendario
        function setNewDate() {
            currentDate.setFullYear(currentYear, monthNumber, currentDay);
            month.textContent = monthNames[monthNumber];
            year.textContent = currentYear.toString();
            datos.textContent = '';
            writeMonth(monthNumber);
        }
    </script>

</body>

</html>