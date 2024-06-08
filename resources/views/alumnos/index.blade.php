<!-- resources/views/alumnos/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alumnos</title>
</head>
<body>
<h1>Lista de Alumnos</h1>
<a href="{{ route('alumnos.create') }}">Crear Alumno</a>
@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Carne</th>
        <th>Nombre</th>
        <th>Correo Institucional</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->id }}</td>
            <td>{{ $alumno->carne }}</td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->correo_institucional }}</td>
            <td>{{ $alumno->telefono }}</td>
            <td>
                <a href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a>
                <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $alumnos->links() }}
</body>
</html>
