<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard del backofficet</title>
</head>
<body>
    <h2>Datos de usuario logeado</h2><br>
    <p>Nombre : {{$user->nombre}}</p>
    <p>Email : {{$user->email}}</p>
    <p>Estado : {{$user->activo}}</p>
    <hr>
    <form action="{{ Route('usuario.logout') }}" method="POST">
        @csrf
        <button type="submit">Cerrar sesion</button>
    </form>
    
</body>
</html>