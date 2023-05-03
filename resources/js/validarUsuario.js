function validarUsuario() {
    // Obtener los valores de los campos de usuario y contraseña
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
  
    // Validar que los campos no estén vacíos
    if (email == "" || password == "") {
      alert("Por favor, ingrese usuario y contraseña.");
      return false;
    }
  
    // Validar que el usuario y la contraseña sean correctos
    // Aquí podrías hacer una petición AJAX al servidor para validar los datos
    if (email != "email" || password != "contraseña") {
      alert("Usuario o contraseña incorrectos.");
      return false;
    }
  
    // Si los datos son válidos, redirigir al usuario a la página de inicio
    window.location.replace("{{ route('inicio.inicio') }}");
  }
  