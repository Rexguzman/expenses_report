@extends('layouts.app')

@section('content')
<style>
    .title{
        color: white;
        text-align: center;
        margin: 25px 0px;
    }
    button{
        margin: 20px 25px;
        padding: 10px 0px;
        border-radius: 5px;
        outline: none;
        border-color: transparent;
        background-color: #06018A;
        color: white;
        cursor: pointer;
        min-width: 300px;
    }
    button:hover {
        background-color: limegreen;
        border-color: transparent;
    }
    .header-container ul{
        display: flex;
        justify-content: space-between;
        list-style: none;
    }
    .header-container{
        padding: 25px;
        margin: 0px 25px;
    }
    .header-container ul li{
        padding: 0px 30px;
        color: #FF4D00;
        width: -webkit-fill-available;
    }
    .clients-container{
        padding: 25px;
        background-color: #06018A;
        border-radius: 10px;
        margin: 25px 25px;
    }
    .clients-container ul{
        display: flex;
        justify-content: space-between;
        list-style: none;
    }
    .clients-container ul li{
        padding: 0px 30px;
        color: white;
        width: -webkit-fill-available;
    }
    .modal-contenido{
  background-color:aqua;
  width:300px;
  padding: 10px 20px;
  margin: 20% auto;
  position: relative;
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
#miModal:target{
  opacity:1;
  pointer-events:auto;
}
</style>
<div class="title-container">
    <h1 class="title">Clientes</h1>
</div>
<div class="client-list-container">
    <div class="controls-container">
        <a href="clients/create"><button>Añadir</button></a>
    </div>
    <div class="header-container">
        <ul>
            <li>Nombre</li>
            <li>Identificación</li>
            <li>Contacto</li>
        </ul>
    </div>
        @foreach($clients as $client)
            <div class="clients-container">
                <a href="/clients/{{$client->id}}/">
                    <ul>
                        <li>{{ $client->name }}</li>
                        <li>{{ $client->identity }}</li>
                        <li>{{ $client->phone }}</li>
                    </ul>
                </a>
            </div>
        @endforeach
@endsection