<!-- resources/views/clientes/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="num_social">Num_social:</label>
        <input type="number" name="num_social" id="num_social" value="{{ $cliente->num_social }}">
        <label for="telefono">Telefono:</label>
        <input type="number" name="telefono" id="telefono" value="{{ $cliente->telefono }}">
        <label for="domicilio">Domicilio:</label>
        <input type="text" name="domicilio" id="domicilio" value="{{ $cliente->domicilio }}">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
