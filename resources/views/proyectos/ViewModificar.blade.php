<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Post</title>
</head>
<body>
    <h1>Modificar Proyecto</h1>
    <form action="/posts/{{$proyecto->id}}" method="POST">
        @csrf

        @method('PUT') 
        <br><br>
        <label>
            Nombre:
            <input type="text" name="nombre" value="{{$proyecto->nombre}}">
        </label>
        <br><br>
        <label>
            Fecha de Inicio:
            <input type="text" name="fechainicio" value="{{$proyecto->fechainicio}}">
        </label>
        <br><br>
        <label for="estado">Estado:</label>
        <select name="estado" id="estado">
                    <option value="1" {{ ($proyecto->estado) == 1 ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ ($proyecto->estado) == 0 ? 'selected' : '' }}>Inactivo</option>
                </select>
        <br><br>
        <label>
            Responsable:
            <input type="text" name="responsable" value="{{$proyecto->responsable}}">
        </label>
        <br><br>
        <label>
            Monto:
            <input type="number" name="monto" value="{{$proyecto->monto}}">
        </label>
        <br><br>
        <button type="submit">Editar Proyecto</button>
    </form>
</body>
</html>