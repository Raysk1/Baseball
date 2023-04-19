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

    @yield('styles')
    <title>Iniciar Sesion</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            background: #009FFF;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #ec2F4B, #009FFF);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #ec2F4B, #009FFF);
            background-image: url("https://www.apple.com/newsroom/images/product/apple-tv-plus/standard/Apple-TV-plus-MLB-Friday-Night-Baseball-hero_big.jpg.slideshow-xlarge_2x.jpg");

        }

        form {
            position: absolute;
            min-width: 280px;
            max-width: 25%;
            width: 25%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 15px;
            box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.3);
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(1rem);
            border-radius: 5px;
            color: #fff;
        }

        h1 {
            position: relative;
            font-size: 18px;
            margin-bottom: 15px;
            padding-bottom: 7px;
        }

        h1::after {
            content: "";
            position: absolute;
            height: 3px;
            border-radius: 3px;
            background-color: #fff;
            width: 120px;
            left: 0;
            bottom: 0;
        }

        input {
            display: block;
            width: 100%;
            height: 40px;
            padding: 5px 6px;
            margin-bottom: 15px;
            border: none;
            outline: none;
            border-radius: 1px;
        }

        button {
            display: block;
            margin: auto;
            width: 100%;
            height: 40px;
            background-color: #5d5b5b96;
            border: none;
            cursor: pointer;
            border-radius: 20px;
            color: #fff;
        }

        .link {
            text-align: center;
            margin-top: 15px;
            font-weight: bolder;
        }
        .btn{
            display: block;
            margin: auto;
            width: 100%;
            height: 40px;
            background-color: #201d1d96;
            border: none;
            cursor: pointer;
            border-radius: 20px;
            color: #fff;
        }
    </style>
</head>

<body>
    <form action='/inicio' method="post">
        @csrf
        <h1>Iniciar Sesión</h1>
        <input type="email" name="email" class="form-control input_user" value=""
        placeholder="Ingrese su Correo" required>
        <input type="password" name="password" class="form-control input_pass" value=""
        placeholder="Ingrese su contraseña" required>
        <button type="submit" class="btn btn-danger btn-flat" > Iniciar Sesion </button>
        <p class="link"><a href="/registrologin">¿Aun no tienes cuenta?</a></p>
    </form>
</body>

</html>

