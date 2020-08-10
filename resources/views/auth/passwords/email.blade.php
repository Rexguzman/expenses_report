<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            display: flex;
            justify-content: center;
            background-color: #050047;
            align-items: center;
            height: 100vh;
            font-family: 'Source Sans Pro', sans-serif;
        }
        input{
            margin: 20px 0px 0px 0px;
            padding: 5px 0px;
            border-radius: 5px;
            border-color: transparent;
            outline: none;
            text-align: center;
        }
        button{
            margin: 20px 0px;
            padding: 10px 0px;
            border-radius: 5px;
            outline: none;
            border-color: transparent;
            background-color: #050047;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: limegreen;
            border-color: transparent;
        }
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            color: limegreen;
        }
        section h1{
            margin: 20px 0px;
            font-size: 35px;
        }
        section form p{
            margin: 20px 0px 0px 0px;
            text-align: center;
        }
        .register-container{
            display: flex;
            flex-direction: column;
            background-color: #06018A;
            justify-content: center;
            align-items: center;
            color: white;
            width: 50vw;
            max-width: 500px;
            margin: 150px 0px;
            height: 400px;
            border-radius: 15px;
        }
        .form-container{
            display: flex;
            flex-direction: column;
            width: -webkit-fill-available;
            max-width: 350px;
        }
        .error{
            color:red;
            text-align: center;
        }
    </style>
</head>
<body>
    <section class="register-container">
        <h1>Restablecer Contraseña</h1>
        <form class="form-container" method="POST" action="{{ route('password.email') }}">
        @csrf
            <input type="email" placeholder="Correo" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="error">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <p>¿Recordaste tu contraseña? <a href="/login">Inicar Sesión</a></p>
            <p>¿Aun no tienes cuenta? <a href="/register">Registrarse</a></p>
            <button type="submit">Enviar Link</button>
        </form>
    </section>
</body>
</html>