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
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    
    <style>
        .box-shadow { 
            box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .1);
        }
        .padding{
            margin:10px; 
        }
    body{
        margin-top: 50px;
        /*margin-bottom: 55px;*/
    }
    
    @include('frangment/estilos')
    @include('frangment/modales')

    </style>
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel fixed-top">
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ "/home" }}">Home</a>
                        </li>
                        @can('products.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('products.index') }}">Menú</a>
                            </li>
                        @endcan
                        @can('products.index_todos_tabla')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('products.index_todos_tabla') }}">Productos</a>
                            </li>
                        @endcan
                        @can('ordenes')
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ordenes</a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @can('orders.index_cliente')
                                <a class="dropdown-item" href="{{ route('orders.index_cliente') }}">Mis ordenes</a>
                            @endcan
                            @can('orders.index')
                                <a class="dropdown-item" href="{{ route('orders.index') }}">Pendientes</a>
                            @endcan
                            
                            @can('orders.index_todas')
                                <a class="dropdown-item" href="{{ route('orders.index_todas') }}">Todas</a>
                            @endcan
                          </div>
                        </li>
                        @endcan
    
                        @can('users.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                            </li>
                        @endcan
                        @can('roles.index')
                            <li class="nav-item">
                                 <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                            </li>
                        @endcan
                        @can('comentarios.index_2')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('comentarios.index_2') }}">Comentarios</a>
                            </li>
                        @endcan
                        @can('catalagos')
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catálagos</a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @can('tipo_sangre.index')
                                <a class="dropdown-item" href="{{ route('tipo_sangre.index') }}">Sangre</a>
                            @endcan
                            

                            @can('escolaridad.index')
                                <a class="dropdown-item" href="{{ route('escolaridad.index') }}">Escolaridad</a>
                            @endcan

                            @can('estatus_social.index')
                                <a class="dropdown-item" href="{{ route('estatus_social.index') }}">Estatus Social</a>
                            @endcan

                            @can('ocupacion.index')
                                <a class="dropdown-item" href="{{ route('ocupacion.index') }}">Ocupación</a>
                            @endcan
                            
                            @can('orden_estatus.index')
                                <a class="dropdown-item" href="{{ route('orden_estatus.index') }}">Estatus Orden</a>
                            @endcan

                          </div>
                        </li>
                        @endcan
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="saldo" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> Saldo <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="saldo">
                                    <a class="dropdown-item">
                                      ${{ \Auth::user()->saldo }}
                                    </a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@include('sweet::alert')
</html>
