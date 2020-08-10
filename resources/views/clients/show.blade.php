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
        align-items: center;
        list-style: none;
    }
    .clients-container ul li{
        padding: 0px 30px;
        color: white;
        width: -webkit-fill-available;
    }
    .clients-container ul li div{
        height: 25px;
        align-self: center;
        max-width: 25px;
    }
    }
    .profile-buttons a button{
        margin:0;
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
.profile-container{
    display: grid;
    grid-template-columns: 1fr 2fr;
    grid-gap: 10px;
    grid-auto-rows: minmax(100px, auto);
}
.profile-container h3{
    color:#FF4D00;
}
.profile-container p{
    color:white;
}
.profile-img-container{
    margin: 50px;
    min-width: 200px;
    justify-self: center;
}
.group-2 {
    display: flex;
    justify-content: space-between;
}
.group-2 {
    margin-right: 40px;
}
.profile-information div{
    margin: 20px 20px 20px 0px;
}
</style>
<div class="title-container">
    <h1 class="title">Lista de Reportes</h1>
</div>
<div class="profile-container">
    <div class="profile-img-container">
        <div>
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 289.45 289.1"><defs><style>.cls-1{fill:#010101;}</style></defs><path class="cls-1" d="M144.78,289.1C65,289.12,0,224.27,0,144.62,0,64.82,65,0,144.82,0S289.48,65,289.45,144.66,224.5,289.07,144.78,289.1Zm-11.14-83.54a3.85,3.85,0,0,1-1.13-1.74q-9.69-20.7-19.32-41.42c-.66-1.42-1.08-1.48-2.3-.56a76.76,76.76,0,0,1-32,14c-5.36,1.06-10.77,1.88-16,3.6A21.37,21.37,0,0,0,49.22,192a47,47,0,0,0-1.78,5c-2.27,7.92-2.8,16.07-3.19,24.24a4.58,4.58,0,0,0,1.16,3.45c31.38,36.71,71.05,52.38,118.89,45.76,30.46-4.22,55.77-18.79,76.25-41.7,4.85-5.41,4.79-5.46,4.34-12.76,0-.49,0-1-.09-1.48-.57-7.12-1.42-14.17-3.91-20.93-2.71-7.34-7.69-12.22-15.24-14.45a106,106,0,0,0-11.78-2.64c-12.91-2.27-24.94-6.65-35.42-14.71-1.21-.93-1.58-.67-2.16.59q-9.58,20.66-19.24,41.27a7,7,0,0,1-1.27,1.94L151.66,193c-.59-1.82-1.72-3.68.34-5.35a1.09,1.09,0,0,0,.2-.45c.89-3.5,2.55-6.7,3.93-10a3.8,3.8,0,0,0-.82-4.4,5.68,5.68,0,0,0-4.47-1.8c-4.08,0-8.17,0-12.25,0a7.26,7.26,0,0,0-1.8.21,4.45,4.45,0,0,0-3.25,6.43c1,2.34,2,4.69,3,7,.51,1.21.39,2.74,1.4,3.66s.83,2,.42,3.1c-.68,1.86-1.24,3.77-1.86,5.66C135.54,199.84,134.62,202.6,133.64,205.56ZM144.89,33.74c-10.62.09-20.58,2.32-29.21,8.93a6.23,6.23,0,0,1-1.17.62,25.49,25.49,0,0,0-12.1,11.55,49.92,49.92,0,0,0-5,16.4,132.12,132.12,0,0,0-1.14,15c0,.61.2,1.38-.54,1.79-2.22,1.2-2.78,3.39-3.1,5.57a32.31,32.31,0,0,0,3.74,20.63,7.45,7.45,0,0,0,3.24,3.44,3.18,3.18,0,0,1,1.74,2,83.8,83.8,0,0,0,8.1,15.9c5.43,8.27,11.89,15.5,20.75,20.24a29.63,29.63,0,0,0,19.84,3.37c7.46-1.39,13.66-5.21,19.13-10.28,8.85-8.18,14.88-18.24,19.28-29.35.26-.65.37-1.38,1.12-1.76a9.12,9.12,0,0,0,3.8-4.25,32.8,32.8,0,0,0,3.37-19.75c-.3-2.14-.86-4.24-2.81-5.6-.54-.38-.4-1-.45-1.52-.36-3.9-.69-7.81-1.08-11.7a63.81,63.81,0,0,0-3-14.72c-2.64-7.54-7-13.58-14.51-17a4.31,4.31,0,0,1-.7-.44C165.57,36.12,155.57,33.81,144.89,33.74Z"/></svg>
        </div>
    </div>
    <div class="profile-information-container">
        <div class="profile-information">
            <div class="group-1">
                <h3>Cliente</h3>
                <p>{{$client->name}}</p>
            </div>
            <div class="group-2">
                <div>
                    <h3>Identificación</h3>
                    <p>{{$client->identity}}</p>
                </div>
                <div>
                    <h3>Contacto</h3>
                    <p>{{$client->phone}}</p>
                </div>
                <div>
                    <h3>Sexo</h3>
                    <p>{{$client->sex}}</p>
                </div>
            </div>
            <div class="group-3">
                <h3>Dirección</h3>
                <p>{{$client->direction}}</p>
            </div>
        </div>
        <div class="profile-buttons">
            <a href="/clients/{{ $client->id }}/edit"><button>Editar Cliente</button></a>
        </div>
    </div>
</div>
<div class="client-list-container">
    <div class="controls-container">
        <a href="expenses/create"><button>Añadir Reporte</button></a>
    </div>
    <div class="header-container">
        <ul>
            <li>Descripción</li>
            <li>Costo</li>
            <li>Editar</li>
        </ul>
    </div>
        @foreach($client->expenses as $expense)
            <div class="clients-container">
                    <ul>
                        <li>{{ $expense->description }}</li>
                        <li>{{ $expense->amount }} $</li>
                        <li>
                                <div>
                            <a href="/clients/{{$client->id}}/expenses/{{ $expense->id }}/edit">  
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 383 383.89"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M271.91,37.39A55,55,0,0,0,267,32.3c-2.17-1.77-1.69-2.9.09-4.62C273,22,278.89,16.2,284.53,10.21,289.45,5,295.76,2.42,302.21,0h10.48c8.86,2,15.95,6.71,22,13.39,4.35,4.77,9.17,9.11,13.78,13.64a74.59,74.59,0,0,0,8.28,8.3c1.36,1.45,2.7,2.92,4.07,4.34,8.73,9,19.17,16.78,22.15,30.06v12c-.12,0-.33,0-.34.09-2.82,11.25-11.31,18.33-19,26-2.73,2.72-5.62,5.29-8.1,8.22-2,2.39-3.38,2-5.13-.15a38.53,38.53,0,0,0-3.75-3.58L339,104.63l-26-26-7.64-7.68-26-26.08Z"/><path class="cls-1" d="M0,383.89Q5.1,365.42,10.21,347l1.12-.69,8.88,9.88a73.3,73.3,0,0,0,8.17,8.36l8.5,9.16C25.29,376.89,14.16,380,3,383.09c-.57.16-1.25.07-1.52.8Z"/><path class="cls-1" d="M293.2,165.77c.3.39.55.82.88,1.17,5.22,5.39,5.23,5.39-.19,10.82Q217.78,254,141.7,330.32c-.95.95-1.77,2-3,3.38-1.58-3.88-.61-7.34-1.58-10.51a94.47,94.47,0,0,0-1.09-13.54c0-1.49-.14-3,0-4.48.2-3.3-1-4.59-4.58-4.83-9.61-.67-19.17-1.88-29.11-2.91.58-.73.85-1.13,1.18-1.46q78.86-79.05,157.68-158.14c1.76-1.77,2.57-1.36,4.07.16,7,7.07,14.14,14,21.23,21A46.61,46.61,0,0,0,293.2,165.77Z"/><path class="cls-1" d="M35.88,340.48c-5.53-5.74-11-11.55-16.64-17.18A4.31,4.31,0,0,1,18,318.4c1.45-4.89,2.69-9.85,4-14.78q2.77-10.11,5.54-20.21c1.32-4.62,2.76-9.21,3.92-13.87.55-2.24,1.61-2.92,3.82-2.6,2.68.37,5.39.45,8.09.65l13.48,1.46c5.58.71,5.57.71,6.08,6.58.19,2.23.43,4.45.67,6.67l2.88,27.36c.42,7.68-1.32,6.9,7.2,7.53.62.05,1.24,0,1.85,0,10.7,1.16,21.39,2.31,32.08,3.51,7,.8,7,.84,7.71,7.7L116.52,342c-.35,3.18,1.71,7.21-.28,9.3s-5.92,2-9,2.89c-1.87.56-3.72,1.21-5.58,1.82a171,171,0,0,0-19.37,5.38c-6,1.56-12,3-17.89,4.75a3.81,3.81,0,0,1-4.51-1.17c-5.34-5.54-10.8-10.95-16.21-16.4A69.7,69.7,0,0,0,35.88,340.48Z"/><path class="cls-1" d="M233.48,74.64c-.31-.39-.58-.8-.92-1.15-5.46-5.65-5.46-5.65,0-11.1,4.83-4.83,9.71-9.62,14.45-14.55,1.42-1.47,2.33-1.72,3.79-.07,1.71,1.94,3.71,3.63,5.59,5.43A66.67,66.67,0,0,0,264,60.86q12.36,13,25.37,25.41a72.46,72.46,0,0,0,8.3,8.32Q310,107.64,323,120a75,75,0,0,0,8.3,8.33c1.79,2,5.32,4.44,5,6-.55,2.49-3.64,4.45-5.72,6.56-4.29,4.36-8.71,8.57-12.89,13-1.79,1.9-3,2.53-4.86.12a40.19,40.19,0,0,0-4.55-4.38,44.22,44.22,0,0,0-6.56-6.56q-13.19-14-27.1-27.18a44.29,44.29,0,0,0-6.57-6.56Q254.9,95.42,241,82.2Z"/><path class="cls-1" d="M62.14,247.32,50.3,245.74c-.08-1.3,1.13-1.78,1.85-2.5Q130.44,164.7,208.74,86.16c1.89-1.9,3-2.33,4.81,0a61.23,61.23,0,0,0,5.62,5.41,45.28,45.28,0,0,0,6.71,6.78c6.37,6.47,12.67,13,19.16,19.37,1.87,1.83,1.86,2.77,0,4.63Q166.65,200.72,88.34,279.24c-.61.6-1,1.77-2.29,1.49-.75-7.73-1.61-15.41-2.22-23.12-.71-9-.62-9-9.76-9.23C70.1,247.9,66.16,247.2,62.14,247.32Z"/></svg>
                            </a>
                                </div>           
                        </li>
                    </ul>
            </div>
        @endforeach
@endsection