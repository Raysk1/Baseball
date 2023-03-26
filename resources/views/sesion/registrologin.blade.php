<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Formulario de Registro</title>
    <style>*{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
       
    }
    body {
        width: 100%;
        height: 100vh;
        background: #009FFF;  
        background: -webkit-linear-gradient(to right, #ec2F4B, #009FFF); 
        background: linear-gradient(to right, #ec2F4B, #009FFF);
        font-family: 'Roboto', sans-serif;  
    }
    form{
        position: absolute;
        min-width: 280px;
        max-width: 25%;
        width: 25%;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 15px;
        box-shadow: 0 1rem 1rem  rgba(0, 0, 0, 0.3);
        background-color: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(1rem);
        border-radius: 5px;
        color: #fff;
    }
    h1{
        position: relative;
        font-size: 18px;
        margin-bottom: 15px;
        padding-bottom: 7px;
    }
    h1::after{
        content: "";
        position: absolute;
        height: 3px;
        border-radius: 3px;
        background-color: #fff;
        width: 120px;
        left: 0;
        bottom: 0;    
    }
    input{
        display: block;
        width: 100%;
        height: 40px;
        padding: 5px 6px;
        margin-bottom: 15px;
        border: none;
        outline: none;
        border-radius: 1px;
    }
    
    .acuerdo{
        text-align: center;
        margin-bottom: 15px;
        font-size: 15px;
    }
    button{
        display: block;
        margin: auto;
        width: 100%;
        height:40px ;
        background-color: #5d5b5b96;
        border: none;
        cursor: pointer;
        border-radius: 20px;
        color: #fff;
    }
    .link{
        text-align: center;
        margin-top: 15px;
        font-weight: bolder;
    }</style>
</head>
<body>
    <form action="">
        <h1>Formulario de Registro </h1>
        <input type="text" placeholder="Ingrese su nombre">
        <input type="text" placeholder="Ingrese su Apellido">
        <input type="email" placeholder="Ingrese su Correo">
        <input type="password" placeholder="Ingrese su contraseña">
        <p class="acuerdo">Estoy de acuerdo con terminos y condiciones</p>
        <button>Registrarse</button>
        <p class="link"><a href="/login">¿Ya tienes cuenta?</a></p>
    </form>
</body>
</html>