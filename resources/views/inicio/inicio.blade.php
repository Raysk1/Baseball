<!DOCTYPE html>
<html>
<head>
	<title>Header Desplegable</title>
	<style>
		/* Estilos para el header */
		.header {
			background-color: #0e46de;
			color: white;
			padding: 10px;
			text-align: center;
		}

		/* Estilos para el menú desplegable */
		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			z-index: 1;
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown-item {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			background-color: #eb8d00;
			font-size: 14px;
		}

		.dropdown-item:hover {
			background-color: #ea5c3c;
		}
	</style>
</head>
<body>
	<header class="header">
		<div class="dropdown">
			<a href="#" class="dropdown-item">Jugadores</a>
			<div class="dropdown-content">
				<a href="/tablajugadores" class="dropdown-item">tablajugadores</a>
				<a href="/bajajugadores" class="dropdown-item">bajajugadores</a>
				<a href="/cambiojugadores" class="dropdown-item">cambiojugadores</a>
			</div>
		</div>
		<div class="dropdown">
			<a href="#" class="dropdown-item">tabla</a>
		
			<div class="dropdown-content">
				<a href="#" class="dropdown-item">Inicio</a>
				<a href="#" class="dropdown-item">Boxscore</a>
				<a href="#" class="dropdown-item">Ampayers</a>
			</div>
		</div>
		<div class="dropdown">
			<a href="#" class="dropdown-item">tabla</a>
		
			<div class="dropdown-content">
				<a href="#" class="dropdown-item">Inicio</a>
				<a href="#" class="dropdown-item">Boxscore</a>
				<a href="#" class="dropdown-item">Ampayers</a>
			</div>
		</div>
		<div class="dropdown">
			<a href="#" class="dropdown-item">tabla</a>
		
			<div class="dropdown-content">
				<a href="#" class="dropdown-item">Inicio</a>
				<a href="#" class="dropdown-item">Boxscore</a>
				<a href="#" class="dropdown-item">Ampayers</a>
			</div>
		</div>
		<div class="dropdown">
			<a href="#" class="dropdown-item">tabla</a>
		
			<div class="dropdown-content">
				<a href="#" class="dropdown-item">Inicio</a>
				<a href="#" class="dropdown-item">Boxscore</a>
				<a href="#" class="dropdown-item">Ampayers</a>
			</div>
		</div>
		
	</header>
</body>
</html>
