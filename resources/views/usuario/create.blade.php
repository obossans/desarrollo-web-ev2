<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" class="style">
    <script type="text/javascript" src="{{ asset('js/script.js') }}" ></script>
    <title>Crear usuario</title>
</head>
<body>
<div class="login-page">
    <h1>Registro de Usuario</h1>
    <!--- errores ---->
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <div class="form">
    <form class="login-form" action="{{ Route('usuario.registrar') }}" method="POST">
    @csrf
        @method('POST')
        <input type="text" name="nombre" placeholder="Ingresar Nombre"> <br>
        <input type="text" name="email" placeholder="Ingresar Email"> <br>
        <input type="password" name="password" placeholder="Ingresar Contraseña"> <br>
        <input type="password" name="rePassword" placeholder="Ingresar nuevamente su Contraseña"> <br>
        <input type="password" name="dayCode" placeholder="Ingresar codigo del dia"> <br>

        <button>Register</button>
    </form>
    <hr>
    <p class="message">Si usted tiene una cuenta, entonces<a href="/login"> inicie sesion</a></p>
</body>
</html>