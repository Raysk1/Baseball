<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ 'assets/login.css' }}">
    @yield('styles')
    <title>Iniciar Sesion</title>
    
</head>

<body>
    <form action='/inicio' method="post">
        @csrf
        <h1>Iniciar Sesión</h1>
        <input type="email" name="email" class="form-control input_user" value=""
            placeholder="Ingrese su Correo" required>
        <input type="password" name="password" class="form-control input_pass" value=""
            placeholder="Ingrese su contraseña" required>
        <button type="submit" class="btn btn-danger btn-flat"> Iniciar Sesion </button>
        <p class="link"><a href="/registrologin">¿Aun no tienes cuenta?</a></p>
    </form>
</body>

</html>
