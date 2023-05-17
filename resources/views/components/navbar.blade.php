@props(['showLoginButton' => true])
<nav class="navbar navbar-dark navbar-expand-lg bg-black">
    <div class="container-fluid">


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-warning" aria-current="page" href={{ route('inicio') }}><b> Inicio
                        </b></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  text-warning " href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <b> Consultas </b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">

                        <li><a class="dropdown-item" >Ampayers Juegos</a></li>
                        <li><a class="dropdown-item" href="#">Entradas</a></li>
                        <li><a class="dropdown-item" href={{ route('ligasIndex') }}>Liga</a></li>
                    </ul>
                </li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <b> Capturas</b>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href={{ route('jugadoresIndex') }}>Jugadores</a></li>
                            <li><a class="dropdown-item" href={{ route('equiposIndex') }}>Equipos</a></li>
                            <li><a class="dropdown-item" href={{ route('juegosIndex') }}>Juegos</a></li>
                            <li><a class="dropdown-item" href={{ route('AmpayersIndex') }}>Ampayer</a></li>
                            <li><a class="dropdown-item" href={{ route('ligasIndex') }}>Ligas</a></li>
                            <li><a class="dropdown-item" href={{ route('manejadoresIndex') }}>
                                    Manejadores</a></li>
                            <li><a class="dropdown-item" href={{ route('temporadasIndex') }}>Temporadas</a></li>
                        </ul>
                    </li>
                @endauth

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-warning" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <b> Informacion </b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item " href={{ route('contacto') }}>Contactos</a></li>
                        <li><a class="dropdown-item" href={{ route('reglamento') }}>Reglamento</a></li>
                    </ul>
                </li>


            </ul>
            @if ($showLoginButton)
                <div class="d-flex">
                    @guest
                        <a class="btn btn-outline-success" type="button" href={{ route('login') }}>login</a>
                    @endguest
                    @auth
                        <a class="btn btn-outline-success" type="button" href={{ route('logout') }}>logout</a>
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>
