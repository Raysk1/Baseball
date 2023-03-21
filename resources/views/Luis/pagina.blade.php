<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BASEBALL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Consultas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Resultados</a></li>
            <li><a class="dropdown-item" href="#">Boxcores</a></li>
			<li><a class="dropdown-item" href="#">Standing</a></li>
            <li><a class="dropdown-item" href="#">Lideres</a></li>
			<li><a class="dropdown-item" href="#">Estadisticas</a></li>
            <li><a class="dropdown-item" href="#">Roster</a></li>
          </ul>
        </li>

		<li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            Capturas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Jugadores</a></li>
            <li><a class="dropdown-item" href="#">Equipos</a></li>
			      <li><a class="dropdown-item" href="#">Ligas</a></li>
            <li><a class="dropdown-item" href="#">Ampayer</a></li>
			      <li><a class="dropdown-item" href="#">Parques</a></li>
            <li><a class="dropdown-item" href="#">Avisos</a></li>
          </ul>
        </li>

		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/informacion" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informacion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/informacion">Contactos</a></li>
          </ul>
        </li>

		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Jugadores</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>