<!-- resources/views/proyectos/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Editar Proyecto</title>
</head>
<body>
    <h1>Editar Proyecto</h1>
    <form action="{{ route('proyectos.update', $proyecto) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="descripcion">descripcion:</label>
        <input type="text" name="descripcion" id="descripcion" value="{{ $proyecto->descripcion }}">
        <label for="fecha_inicio">fecha_inicio:</label>
        <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ $proyecto->fecha_inicio }}">
        <label for="fecha_fin">fecha_fin:</label>
        <input type="date" name="fecha_fin" id="fecha_fin" value="{{ $proyecto->fecha_fin}}">
        <label for="cuantia">cuantia:</label>
        <input type="text" name="cuantia" id="cuantia" value="{{ $proyecto->cuantia }}">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
