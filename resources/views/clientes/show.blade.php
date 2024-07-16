<!-- resources/views/clientes/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Cliente</title>
</head>
<body>
    <h1>{{ $cliente->num_social }}</h1>
    <p>telefono {{ $cliente->telefono}}</p>
    <p>domicilio{{ $cliente->domicilio }}</p>
    <a href="{{ route('clientes.index') }}">Volver a la lista</a>
</body>
</html>
