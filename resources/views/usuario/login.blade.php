<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <form action="{{ Route('usuario.validar') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Ingresar Email"> <br>
        <input type="password" name="password" placeholder="Ingresar Contraseña"> <br>
        <button type="submit">Ingresar</button>
    </form>
    <hr>
    Si no tiene una cuenta, entonces<a href="{{ Route('usuario.registrar') }}"> haga click aqui</a>
</body>
</html>