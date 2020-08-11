<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        section form p{
            margin: 20px 0px 0px 0px;
            text-align: center;
        }
        section h1{
            margin: 20px 0px;
            font-size: 35px;
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
        @media (max-width: 900px) { 
    
            .register-container {
                width: 80%;
            }
            .form-container {
                max-width: 290px;
            }
        }
    </style>
</head>
<body>
    <section class="register-container">
        <h1>Registro</h1>
        <form class="form-container" method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" placeholder="Nombre" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="text" placeholder="Correo" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="password" placeholder="Contraseña" id="password" name="password" required autocomplete="new-password">
            @error('password')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="password" placeholder="Confirmar Contraseña" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
            <p>¿Ya tienes cuenta? <a href="/login">Iniciar Sesión</a></p>
            <button type="submit">Registro</button>
        </form>
    </section>
</body>
