<!-- resources/views/proyectos/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de proyectos</title>
</head>
<body>
    <h1>Lista de Proyectos</h1>
    <a href="{{ route('proyectos.create') }}">Añadir Proyecto</a>
    <ul>
        @foreach ($proyectos as $proyecto)
            <li>
                <a href="{{ route('proyectos.show', $proyecto) }}">{{ $proyecto->descripcion }}</a>
                <a href="{{ route('proyectos.edit', $proyecto) }}">Editar</a>
                <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
