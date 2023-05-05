<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
    @yield('styles')
    <style>
        body {
            background-image: url("https://www.shutterstock.com/image-vector/vector-baseball-background-600w-593309054.jpg");


            /* Para dejar la imagen de fondo centrada, vertical ynhorizontalmente */

            background-position: center center;

            /* Para que la imagen de fondo no se repita */

            background-repeat: no-repeat;

            /* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */

            background-attachment: fixed;

            /* La imagen de fondo se reescala automáticamente con el cambio del ancho de ventana del navegador */

            background-size: cover;

        }
        
 
    </style>
</head>

<body>
    <header class="sticky-top " style="height: 10%">
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg bg-warning">
            <div class="container-fluid">
                <h2>BASEBALL </h2>

                <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href={{ route('inicio') }}><b> Inicio
                                </b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-warning  " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <b > Consultas </b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href={{ route('manejadoresIndex') }}>
                                        Manejadores</a></li>
                                <li><a class="dropdown-item" href={{ route('temporadasIndex') }}>Temporadas</a></li>
                                <li><a class="dropdown-item" href="#">Standing</a></li>
                                <li><a class="dropdown-item" href="#">Lideres</a></li>
                                <li><a class="dropdown-item" href="#">Estadisticas</a></li>
                                <li><a class="dropdown-item" href="RoosterIndex">Rooster</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-warning" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <b  > Capturas</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href={{ route('jugadoresIndex') }}>Jugadores</a></li>
                                <li><a class="dropdown-item" href={{ route('equiposIndex') }}>Equipos</a></li>
                                <li><a class="dropdown-item" href={{ route('juegosIndex') }}>Juegos</a></li>
                                <li><a class="dropdown-item" href={{ route('ampayersIndex') }}>Ampayer</a></li>
                                <li><a class="dropdown-item" href={{ route('ligasIndex') }}>Ligas</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-warning" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <b  > Informacion </b>
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item " href={{ route('contacto') }}>Contactos</a></li>
                                <li><a class="dropdown-item" href={{ route('reglamento') }}>Reglamento</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-warning" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <b > Registros</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Jugadores</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <a class="btn btn-outline-success" type="button" href="/header" >logout</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')


    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    @yield('script')

</body>

</html>
