<!-- resources/views/clientes/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}">Añadir Cliente</a>
    <ul>
        @foreach ($clientes as $cliente)
            <li>
                <a href="{{ route('clientes.show', $cliente) }}">{{ $cliente->num_social }}</a>
                <a href="{{ route('clientes.edit', $cliente) }}">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>

