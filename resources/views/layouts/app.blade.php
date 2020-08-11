<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-color: #050047;
            font-family: 'Source Sans Pro', sans-serif;
        }
        a{
            text-decoration: none;
            color: white;
        }
        .menu-container{
            background-color: #06018A;
            height: 50px;
            width: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white;
        }
        .logo-container{
            margin: 0px 50px;
        }
        .navbar-container{
            padding: 0px 0px 0px 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .navbar-container a{
            padding: 0px 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        nav.navbar-container a:hover {
            background-color: #050047;
        }
        .burger-button{
            display:none;
        }
        @media (max-width: 900px) {
            #burger-button{
                bottom: 55px;
                right: 2rem;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;
                height: 55px;
                cursor: pointer;
                z-index: 10;
                position: fixed;
                width: 55px;
                -webkit-box-align: center;
                align-items: center;
                border-width: initial;
                border-style: none;
                border-color: initial;
                border-image: initial;
                border-radius: 50%;
                padding: 5px;
            }
            .navbar-container{
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 214px;
                position: fixed;
                z-index: 1;
                flex-direction: column;
                bottom: 0px;
                left: 0px;
                background: #06018A;
                transform: translateY(215px);
                transition: transform 0.3s ease-in-out 0s;
            }
            .is_active{
                transform: translateY(0px);
                transition: transform 0.3s ease-in-out 0s;
            }
            .navbar-container{
                padding:0px;
            }
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <div class="logo-container">
            <h1>{{ Auth::user()->name }}</h1>
        </div>
        <nav class="navbar-container" id="navbar">
            <a href="/clients">Clientes</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
    <div id="burger-button" class="burger-button" onclick="burgerButton()">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><defs><style>.cls-1{fill:#ff4d00;}</style></defs><path class="cls-1" d="M88,.09h23c.18.79.78.88,1.47,1,39.06,4.51,72.6,33,83.41,70.92,1.51,5.3,2.7,10.69,4,16v25c-1.86,1.35-1.34,3.57-1.73,5.36-8.83,40.08-33,66-72.07,78-4.94,1.52-10.08,2.39-15.12,3.55H87c-1.15-1.91-3.26-1.27-4.87-1.63-42-9.2-68.35-34.63-79.57-76-.83-3.09-.37-6.54-2.48-9.28V87c1.85-1.37,1.3-3.59,1.7-5.38,8.81-40.1,33-65.92,72.05-78.11C78.5,2.06,83.52,2.17,88,.09Zm12,16.74A83.16,83.16,0,1,0,183.14,99.9,83,83,0,0,0,100,16.83Z"/><path class="cls-1" d="M100,125c10.64,0,21.28,0,31.92,0,5.9,0,9.77,3.37,9.77,8.31s-3.82,8.38-9.77,8.4q-31.92.1-63.85,0c-5.93,0-9.77-3.48-9.77-8.4S62.17,125,68.06,125C78.7,124.94,89.35,125,100,125Z"/><path class="cls-1" d="M100,75c-10.47,0-21,0-31.42,0-6.28,0-10.26-3.32-10.24-8.38s4-8.35,10.31-8.36q31.43-.06,62.85,0c6.31,0,10.25,3.35,10.22,8.44s-4,8.28-10.3,8.3C120.9,75.05,110.43,75,100,75Z"/><path class="cls-1" d="M99.84,108.24c-10.47,0-20.94,0-31.4,0-6.38,0-10.23-3.27-10.13-8.39.11-5,3.83-8.07,9.93-8.08q31.65-.06,63.3,0c6.39,0,10.23,3.25,10.12,8.38-.11,5-3.83,8.06-9.92,8.08C121.11,108.27,110.47,108.24,99.84,108.24Z"/></svg>
    </div>
    <script type="text/javascript">
    
        function burgerButton() {
            if ( document.getElementById("navbar").classList.contains('is_active') ) {
            document.getElementById("navbar").classList.remove('is_active');
            }else {
                document.getElementById("navbar").classList.add('is_active');
            }
        }
        
    </script>
</body>
</html>