<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .title{
            margin-top:10px;
        }
        .title-color{
            color:rgb(6,177,241);
        }
        .strong{
            font-weight: bold;
        }
        .form-center{
            margin: 25px 200px 0 200px;
            width:410px;
            height:250px;
            padding: 20px 15px 0 15px;
            box-shadow: 1px 2px 3px 1px rgba(0,0,0,.8);
            background-color: rgb(219,219,219);
            border-radius: 5px;
        }
        .divisor-text{
            font-size:1.5em;
            margin:25px 250px 10px;
            color:rgb(115,115,115);
        }
        .box-formulary{
            box-shadow: 1px 0 3px 2px rgba(35, 68, 255, 0.5);
            padding: 0 0 0 60px;
            border-radius:5px;
            margin-bottom:20px;
            background-color:rgba(155, 155, 155, 0.1);
        }
        
    </style>
</head>
<body>
    <div id="app" class="btn-block" style="position:fixed;z-index:100;">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link active" href="{{ route('register') }}">{{ __('Registro') }}</a>
                            </li> -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        
    </div>
    @yield('content')
</body>
</html>
