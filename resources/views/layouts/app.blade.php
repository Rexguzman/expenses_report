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
    </style>
</head>
<body>
    <div class="menu-container">
        <div class="logo-container">
            <h1>{{ Auth::user()->name }}</h1>
        </div>
        <nav class="navbar-container">
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
</body>
</html>