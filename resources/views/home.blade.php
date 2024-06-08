<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alumno</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f7fafc;
            color: #2d3748;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 600px;
            padding: 40px;
            background-color: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            margin-bottom: 20px;
            text-align: center;
        }
        .title {
            font-size: 28px;
            font-weight: 700;
            color: #ec0a0a;
        }
        .form-container {
            width: 100%;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e0;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .form-group .error {
            color: #e53e3e;
            font-size: 14px;
            margin-top: 5px;
        }
        .buttons-group {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 20px;
        }
        .buttons a, .buttons button {
            background-color: #a80f0f;
            color: #fff;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 650;
            transition: background-color 0.3s, transform 0.3s;
            border: none;
            cursor: pointer;
            display: inline-block;
            text-align: center;
            width: 48%;
        }
        .buttons a:hover, .buttons button:hover {
            background-color: #aa152b;
        }
        .buttons a:active, .buttons button:active {
            transform: scale(0.95);
        }
        .footer {
            background-color: #000;
            color: #fff;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="title">Crear Alumno</div>
    </div>
    <div class="form-container">
        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
                <div class="error">{{ $errors->first('nombre') }}</div>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" required>
                <div class="error">{{ $errors->first('apellido') }}</div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <div class="error">{{ $errors->first('email') }}</div>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" required>
                <div class="error">{{ $errors->first('telefono') }}</div>
            </div>
            <div class="buttons-group">
                <button type="submit">Guardar</button>
                <a href="{{ route('alumnos.index') }}">Regresar</a>
            </div>
        </form>
    </div>
</div>
<div class="footer">
    &copy; 2024 Grupo No.3. Todos los derechos reservados.
</div>
</body>
</html>

