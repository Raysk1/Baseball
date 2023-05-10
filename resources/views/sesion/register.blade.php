@extends("default")

@section("content")
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="http://cdn.shopify.com/s/files/1/0164/9206/8918/products/pelota-practicas-beisbol-rawlings-fsr100-up-sports-zona-948409.jpg?v=1620306787"
                        class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form action={{ route('Register') }} method="POST" >
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="name" class="form-control input_user" value=""
                            placeholder="Nombre" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control input_user" value=""
                            placeholder="Correo" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control input_pass" value=""
                            placeholder="password" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password_confirmation" class="form-control input_pass"
                            value="" placeholder="ConfirmPassword" required>
                    </div>
                 
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit"  class="btn login_btn">Registrarse</button>
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    ¿Ya tienes una cuenta? <a href="/login" class="ml-2">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
