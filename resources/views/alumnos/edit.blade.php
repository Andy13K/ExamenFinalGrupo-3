<!-- edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
</head>
<body>
<h1>Editar Alumno</h1>
<form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('alumnos._form')
    <button type="submit">Actualizar</button>
</form>
</body>
</html>
