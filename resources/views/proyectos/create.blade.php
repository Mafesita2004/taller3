<!-- resources/views/proyectos/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Añadir proyecto</title>
</head>
<body>
    <h1>Añadir proyecto</h1>
    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" required>
        <br>
        <label for="fecha_inicio">Fecha Inicio:</label>
        <input type="date" name="fecha_inicio" id="fecha_inicio" required>
        <br>
        <label for="fecha_fin">Fecha Fin:</label>
        <input type="date" name="fecha_fin" id="fecha_fin" required>
        <br>
        <label for="cuantia">Cuantía:</label>
        <input type="text" name="cuantia" id="cuantia" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>


