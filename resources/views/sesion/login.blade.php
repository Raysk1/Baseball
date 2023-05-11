<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
    <!-- Bootstrap CSS v5.2.1 -->
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
 
    <link rel="stylesheet" href="{{ 'assets/login.css' }}">
    
    @yield('styles')
    <title>Iniciar Sesion</title>


</head>

<body>
    <x-navbar showLoginButton={{false}}></x-navbar>
    <form action={{route("login")}} method="post">
        @csrf
        <h5 class="mb-2">Iniciar Sesión</h5>
        <input type="email" name="email" id="email" class="form-control input_user mb-2" value="" placeholder="Ingrese su Correo">
        <input type="password" name="password" id="password" class="form-control input_pass mb-2" value="" placeholder="Ingrese su contraseña">
        <button type="submit" class="btn btn-dark"> Iniciar Sesion </button>
        <p class="link"><a href="/register">¿Aun no tienes cuenta?</a></p>
    </form>

</body>

</html>
