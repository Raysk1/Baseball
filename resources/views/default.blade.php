<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    @yield('styles')
    <style>
        body {
            background-image: url("https://www.shutterstock.com/image-vector/vector-baseball-background-600w-593309054.jpg");


            /* Para dejar la imagen de fondo centrada, vertical y

horizontalmente */

            background-position: center center;

            /* Para que la imagen de fondo no se repita */

            background-repeat: no-repeat;

            /* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */

            background-attachment: fixed;

            /* La imagen de fondo se reescala automáticamente con el cambio del ancho de ventana del navegador */

            background-size: cover;

        }
        .d-flex{
margin-top: 0.8%;
           text-align: center;
        }
    </style>
</head>

<body>
    <header class="sticky-top ">
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg bg-warning">
            <div class="container-fluid">
                <h2>BASEBALL </h2>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href={{ route('Noticias') }}><b> Inicio
                                </b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <b> Consultas </b>
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
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <b> Capturas</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href={{ route('jugadoresIndex') }}>Jugadores</a></li>
                                <li><a class="dropdown-item" href={{ route('equiposIndex') }}>Equipos</a></li>
                                <li><a class="dropdown-item" href={{ route('juegosIndex') }}>Juegos</a></li>
                                <li><a class="dropdown-item" href={{ route('AmpayersIndex') }}>Ampayer</a></li>
                                <li><a class="dropdown-item" href={{ route('ligasIndex') }}>Ligas</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <b> Informacion </b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href={{ route('contacto') }}>Contactos</a></li>
                                <li><a class="dropdown-item" href={{ route('reglamento') }}>Reglamento</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <b> Registros</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Jugadores</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <a type="button" href="/header" class="btn btn-danger">logout</a>
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
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    @yield('script')
</body>

</html>
