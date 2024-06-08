<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .table thead th {
            text-align: center;
        }
        .table tbody td {
            vertical-align: middle;
            text-align: center;
        }
        .btn {
            margin: 0 2px;
        }
        .success-message {
            margin-top: 15px;
        }
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .btn-create {
            background-color: #007bff;
            color: white;
        }
        .btn-return {
            background-color: #17a2b8;
            color: white;
        }
        .btn-edit {
            background-color: #ffc107;
            color: white;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
        .btn-view {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Lista de Alumnos</h1>
        <a href="{{ route('alumnos.create') }}" class="btn btn-create">Crear Alumno</a>
    </div>
    @if (session('success'))
        <div class="alert alert-success success-message">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
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
                    <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-view btn-sm">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-edit btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete btn-sm">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $alumnos->links() }}
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
