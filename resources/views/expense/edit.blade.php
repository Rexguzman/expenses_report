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
        .delete-button{
            margin:0px;
            padding: 10px 0px;
            border-radius: 5px;
            outline: none;
            border-color: transparent;
            background-color: red;
            color: white;
            cursor: pointer;
        }
        .delete-button:hover{
            background-color: red;
        }
        .modal-contenido{
            background-color:#06018A;
            width: 400px;
            padding: 10px 20px;
            margin: 15% auto;
            position: relative;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
        }
        .modal-contenido a{
            display:contents;
        }
        .modal-contenido h1{
            display:contents;
        }
        .modal-contenido p{
            padding: 30px 0px;
        }
        .modal{
            background-color: rgba(0,0,0,.8);
            position:fixed;
            top:0;
            right:0;
            bottom:0;
            left:0;
            opacity:0;
            pointer-events:none;
            transition: all 1s;
        }
        #deleteModal:target{
            opacity:1;
            pointer-events:auto;
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
        <h1>Editar Reporte</h1>
        <form class="form-container" method="POST" action="/clients/{{ $client->id }}/expenses/{{ $expense->id }}">
            @csrf
            @method('put')
            <input type="text" placeholder="Descripción" id="description" name="description" value="{{$expense->description}}">
                @error('name')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            <input type="number" placeholder="Monto" id="amount" name="amount" value="{{$expense->amount}}">
                @error('identity')
                <span class="error">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            <button type="submit">Editar Reporte</button>

        </form>
            <a href="#deleteModal"><button class="delete-button">Eliminar Reporte</button></a>
            <div id="deleteModal" class="modal">
                <div class="modal-contenido">
                    <h1>¿Estas seguro que quieres eliminar el reporte?</h1>
                    <p>Una vez que elimines el reporte no se podrá recuperar</p>
                    <form class="form-container" method="POST" action="/clients/{{ $client->id }}/expenses/{{ $expense->id }}">
                    @csrf
                    @method('delete')
                        <button class="delete-button">Eliminar Reporte</button>
                    </form>
                    <a href="#"><button>Cancelar</button></a>
                </div>
            </div>
        </section>
    </div>
</body>
@endsection