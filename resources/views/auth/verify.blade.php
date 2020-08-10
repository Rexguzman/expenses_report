<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            text-align:center;
        }
        .register-container h2{
            margin: 10px 10px;
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
        .info-container{
            
        }
    </style>
</head>
<body>
    <section class="register-container">
        <h1>Verificar tu Correo</h1>
            @if (session('resent'))
                <h2>Se ha enviado un link a tu correo para verificar que eres tú</h2>
            @endif
                <h2>¿Aun no te ha llegado el link?</h2>
            <form class="form-container" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit">Enviar link @if (session('resent')) nuevamente @endif</button>
                <a href="/login">Regresar al login</a>
            </form>
    </section>
</body>
