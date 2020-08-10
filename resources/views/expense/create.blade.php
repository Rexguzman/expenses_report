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
        .register{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="register">
        <section class="register-container">
            <h1>Nuevo reporte</h1>
            <form class="form-container" method="POST" action="/clients/{{ $client->id }}/expenses">
                @csrf
                <input type="text" placeholder="description" id="description" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                    @error('description')
                    <span class="error">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <input type="number" placeholder="Amount" id="amount" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>
                    @error('identity')
                    <span class="error">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <button type="submit">Registrar reporte</button>
            </form>
        </section>
    </div>
</body>
@endsection