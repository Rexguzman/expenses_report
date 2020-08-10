@extends('layouts.app')

@section('content')
    <style>
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
            margin: 100px 0px;
            height: 475px;
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
        .register{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container select{
            margin: 20px 0px 0px 0px;
            padding: 5px 0px;
            border-radius: 5px;
            border-color: transparent;
            outline: none;
            text-align-last: center;
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
    <div class="register">
        <section class="register-container">
            <h1>Nuevo Cliente</h1>
            <form class="form-container" method="POST" action="/clients">
                @csrf
                <input type="text" placeholder="Nombre" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="error">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <select type="text" id="sex" name="sex">
                        <option value="Sin especificar">Seleccionar Sexo</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                <input type="text" placeholder="Identificación" id="identity" name="identity" value="{{ old('identity') }}" required autocomplete="name" autofocus>
                    @error('identity')
                    <span class="error">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <input type="text" placeholder="Telefono" id="phone" name="phone" value="{{ old('phone') }}" required autocomplete="name" autofocus>
                    @error('phone')
                    <span class="error">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <input type="text" placeholder="Dirección" id="direction" name="direction" value="{{ old('direction') }}" required autocomplete="name" autofocus>
                    @error('direction')
                    <span class="error">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <button type="submit">Registrar Cliente</button>
            </form>
        </section>
    </div>
</body>
@endsection