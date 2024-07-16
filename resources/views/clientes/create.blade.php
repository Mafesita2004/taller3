<!-- resources/views/clientes/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Añadir cliente</title>
</head>
<body>
    <h1>Añadir cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label for="num_social">Num_social:</label>
        <input type="number" name="num_social" id="num_social" required>
        <br>
        <label for="telefono">Telefono:</label>
        <input type="number" name="telefono" id="telefono" required>
        <br>
        <label for="domicilio">Domicilio:</label>
        <input type="text" name="domicilio" id="domicilio" required>
        <br>
        <label for="proyecto_id">Proyecto ID:</label>
        <input type="number" name="proyecto_id" id="proyecto_id" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
