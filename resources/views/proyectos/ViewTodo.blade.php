<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Todo los proyectos</title>
</head>
<body>
<h1>Lista de Proyectos</h1>
<a href="/posts/crear">Crear nuevo proyecto</a><br><br>
@if ($proyectos->isEmpty())
        <p>No hay proyectos disponibles.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha de Inicio</th>
                    <th>Estado</th>
                    <th>Responsable</th>
                    <th>Monto</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->id }}</td>
                        <td>{{ $proyecto->nombre }}</td>
                        <td>{{ $proyecto->fechainicio }}</td>
                        <td>{{ $proyecto->estado ? 'Activo' : 'Inactivo' }}</td>
                        <td>{{ $proyecto->responsable }}</td>
                        <td>${{ number_format($proyecto->monto, 2) }}</td>
                        <td><a href="/posts/{{$proyecto->id}}">Ver</a></td>
                    <td><a href="/posts/{{$proyecto->id}}/edit">Modificar</a></td>
                    <td><form action="/posts/{{$proyecto->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Eliminar Proyecto</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>