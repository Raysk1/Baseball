<!DOCTYPE html>
<html lang="en" >

<head>
    <title>My Awesome Login Page</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
    <link rel="stylesheet" href="{{ '/css/estilos.css' }}">
</head>
<!--Coded with love by Mutiullah Samim-->

<body class="h-100">
    <header>
        <x-navbar showLoginButton="{{ false }}"></x-navbar>
    </header>
    <div class="h-100 d-flex align-content-center">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="/img/pelota.webp"
                                class="brand_logo" alt="Logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container">
                        <form action={{ route('Register') }} method="POST">
                            @csrf
                            <div class="input-group mb-2">
                                <div class="input-group-append h-100">
                                    <span class="input-group-text">
                                        <i class="bi bi-person-fill"></i>    
                                    </span>
                                </div>
                                <input type="text" name="name" class="form-control input_user" value=""
                                    placeholder="Nombre" required>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="bi bi-envelope-fill"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" class="form-control input_user" value=""
                                    placeholder="Correo" required>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="bi bi-key-fill"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" class="form-control input_pass" value=""
                                    placeholder="Contraseña" required>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="bi bi-key-fill"></i>
                                    </span>
                                </div>
                                <input type="password" name="password_confirmation" class="form-control input_pass"
                                    value="" placeholder="Confirmar Contraseña" required>
                            </div>
    
                            <div class="d-flex justify-content-center mt-3 login_container">
                                <button type="submit" class="btn login_btn">Registrarse</button>
                            </div>
                        </form>
                    </div>
    
                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                            ¿Ya tienes una cuenta? <a href="/login" class="ml-2 link">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</body>

</html>
