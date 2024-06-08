<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Lista de Alumnos</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: whitesmoke;
            color: #4a5568;
            margin: 0;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .title {
            font-size: 32px;
            font-weight: 700;
            color: #ec0a0a;
        }
        .buttons {
            display: flex;
            gap: 10px;
            align-items: center; /* Alinea verticalmente los elementos dentro de .buttons */
        }
        .buttons a {
            background-color: #a80f0f;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 650;
            transition: background-color 0.3s, transform 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .buttons a:hover {
            background-color: #aa152b;
        }
        .buttons a:active {
            transform: scale(0.95);
        }
        .logout-button {
            background: none;
            border: none;
            color: #a80f0f;
            font-size: 24px;
            cursor: pointer;
            transition: color 0.3s, transform 0.3s;
            display: flex;
            align-items: center; /* Asegura que el ícono esté centrado verticalmente */
        }
        .logout-button:hover {
            color: #aa152b;
        }
        .logout-button:active {
            transform: scale(0.95);
        }
        .table-container {
            overflow-y: auto;
            max-height: 70vh;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .action-buttons a, .action-buttons button {
            background-color: #f8f9fa;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .action-buttons a {
            color: #28a745; /* Green color for edit */
        }
        .action-buttons button {
            color: #dc3545; /* Red color for delete */
        }
        .action-buttons a:hover, .action-buttons button:hover {
            background-color: #e2e6ea;
        }
        .action-buttons a:active, .action-buttons button:active {
            transform: scale(0.95);
        }
        .action-buttons form {
            display: inline;
        }
        .footer {
            background-color: #000000;
            color: #ffffff;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
            left: 0;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="title">Lista de Alumnos</div>
    <div class="buttons">
        <a href="{{ route('alumnos.create') }}">Crear Alumno</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-button" title="Cerrar sesión"><i class="fas fa-power-off"></i></button>
        </form>
    </div>
</div>
@if (session('success'))
    <div>{{ session('success') }}</div>
@endif
<div class="table-container">
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Carnet</th>
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
                <td class="action-buttons">
                    <a href="{{ route('alumnos.edit', $alumno->id) }}" title="Editar"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este alumno?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="footer">
    &copy; 2024 Grupo No.3. Todos los derechos reservados.
</div>
</body>
</html>

