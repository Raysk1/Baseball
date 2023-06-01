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
            width: auto;
    height: auto;
    background: #009FFF;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #ec2F4B, #009FFF);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #ec2F4B, #009FFF);
    background-image: url("/img/fondos/fondo.webp");

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
    <header class="sticky-top ">
        <!-- place navbar here -->
        <x-navbar> </x-navbar>
    </header>
    <main>
        @yield('content')

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    @yield('script')


</body>

</html>
