<!-- create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alumno</title>
</head>
<body>
<h1>Crear Alumno</h1>
<form action="{{ route('alumnos.store') }}" method="POST">
    @csrf
    @include('alumnos._form')
    <button type="submit">Guardar</button>
</form>
</body>
</html>
