<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión - Proyecto Gestión</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: whitesmoke;
            color: #4a5568;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            max-width: 500px;
            width: 100%;
            margin: 10px 30px;
            border: 2px solid #f31124;
            display: flex;
            flex-direction: column;
            align-items: center;
            opacity: 0;
            animation: fade-in 0.8s ease-out forwards;
        }
        .logo, .title, .login-form {
            opacity: 0;
        }
        .logo {
            margin-bottom: 20px;
            animation: slide-in-down 0.8s ease-out forwards, fade-in 0.8s ease-out forwards;
            animation-delay: 0.2s;
        }
        .logo img {
            width: 200px;
        }
        .title {
            font-size: 28px;
            font-weight: 700;
            color: #d30d14;
            margin-bottom: 20px;
            animation: slide-in-left 0.8s ease-out forwards, fade-in 0.8s ease-out forwards;
            animation-delay: 0.4s;
        }
        .login-form {
            width: 100%;
            margin-bottom: 20px;
            animation: slide-in-up 0.8s ease-out forwards, fade-in 0.8s ease-out forwards;
            animation-delay: 0.6s;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: center;
            width: 100%;
        }
        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            text-align: left; /* Alineación izquierda */
        }
        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 8px;
            border: 1px solid #0c0c0c;
            border-radius: 5px;
            font-size: 14px;
            font-family: 'Montserrat', sans-serif;
        }
        .form-check {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-check-label {
            margin-left: 8px;
            font-family: 'Montserrat', sans-serif;
        }
        .btn-primary {
            background-color: #e60404;
            color: #ffffff;
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 650;
            transition: background-color 0.3s, transform 0.3s, cursor 0.3s;
            border: none;
            font-size: 16px;
            display: block;
            margin: 20px auto;
            font-family: 'Montserrat', sans-serif;
        }
        .btn-primary:hover {
            background-color: #e60404;
            cursor: pointer;
        }
        .btn-primary:active {
            transform: scale(0.95);
        }
        .btn-link {
            color: #ec2a2a;
            text-decoration: none;
            font-weight: 650;
            font-family: 'Montserrat', sans-serif;
        }
        .btn-link:hover {
            color: #ec2a2a;
            text-decoration: underline;
        }
        @keyframes slide-in-up {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes slide-in-down {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes slide-in-left {
            from {
                transform: translateX(-50px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<div class="container">

    <div class="title">Iniciar Sesión</div>

    <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Recuérdame
                    </label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Iniciar Sesión
                </button>
                <br>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>
</body>
</html>
