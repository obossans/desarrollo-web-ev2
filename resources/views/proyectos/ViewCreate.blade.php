<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
</head>
<body>
    <h1>Formulario para crear un post nuevo</h1>
    <form action="/posts" method="POST">
        @csrf
        <br><br>
        <label>
            Nombre:
            <input type="text" name="nombre">
        </label>
        <br><br>
        <label>
            Fecha de Inicio:
            <input type="date" name="fechainicio">
        </label>
        <br><br>
        <label for="estado">Estado:</label>
            <select id="estado" name="estado" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        <br><br>
        <label>
            Responsable:
            <input type="text" name="responsable">
        </label>
        <br><br>
        <label>
            Monto:
            <input type="number" name="monto">
        </label>
        <br><br>
        <button type="submit">Crear Proyecto</button>
    </form>
</body>
</html>