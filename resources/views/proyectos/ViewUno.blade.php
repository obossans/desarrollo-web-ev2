<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver detalle de un Proyecto</title>
</head>
<body>
    <h1>Detalles del Proyecto</h1>

    @if ($proyecto)
        <ul>
            <li><strong>ID:</strong> {{ $proyecto->id }}</li>
            <li><strong>Nombre:</strong> {{ $proyecto->nombre }}</li>
            <li><strong>Fecha de Inicio:</strong> {{ $proyecto->fechainicio }}</li>
            <li><strong>Estado:</strong> {{ $proyecto->estado ? 'Activo' : 'Inactivo' }}</li>
            <li><strong>Responsable:</strong> {{ $proyecto->responsable }}</li>
            <li><strong>Monto:</strong> ${{ number_format($proyecto->monto, 2) }}</li>
        </ul>
    @else
        <p>El proyecto que buscas no existe.</p>
    @endif

    <a href="{{ url('/posts') }}">Volver a la lista de proyectos</a>
</body>
</html>