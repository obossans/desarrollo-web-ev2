<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
</head>
<body>
    <h1>Inicio de sesion</h1>
    <!--- errores ---->
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{ Route('usuario.registrar') }}" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="nombre" placeholder="Ingresar Nombre"> <br>
        <input type="text" name="email" placeholder="Ingresar Email"> <br>
        <input type="password" name="password" placeholder="Ingresar Contraseña"> <br>
        <input type="password" name="rePassword" placeholder="Ingresar nuevamente su Contraseña"> <br>
        <input type="password" name="dayCode" placeholder="Ingresar codigo del dia"> <br>

        <button type="submit">Ingresar</button>
    </form>
    <hr>
    Si usted tiene una cuenta, entonces<a href="/login"> inicie sesion</a>
</body>
</html>