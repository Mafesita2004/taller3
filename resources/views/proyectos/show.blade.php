<!-- resources/views/proyectos/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Proyecto</title>
</head>
<body>
    <h1>{{ $proyecto->descripcion }}</h1>
    <p>fecha_inicio:{{ $proyecto->fecha_inicio}}</p>
    <p>fecha_fin:{{ $proyecto->fecha_Fin }}</p>
    <p>cuantia:{{ $proyecto->cuantia }}</p>
    <a href="{{ route('proyectos.index') }}">Volver a la lista</a>
</body>
</html>
