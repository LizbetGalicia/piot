<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset("css/app.css")}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
<header class="bg-primary">
</br>
<font color="navy" face="Comic Sans MS,arial">
  <h1 align="center"><i>Prototipo IOT para tomas de Agua</i></h1>
</font></br>
   
    <ul style="background-color: #1463AF" class="nav justify-content-end">
        @guest
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                </li>
            @endif
        @else
            @if (auth()->user()->id_tipo_usuario==1)


            <li class="nav-item">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><span class="fa fa-search"></span></div>
                    </div>
                    <input type="text" placeholder="Search">
                </div>
            </li>
            <li class="nav-item"><a href="{{url("inicio")}}" class="nav-link text-white">Inicio</a></li>
            <li class="nav-item"><a href="{{url("clientes")}}" class="nav-link text-white">Usuarios</a></li>
            <li class="nav-item"><a href="{{url("tipom")}}" class="nav-link text-white">Tipo de Mantenimientos</a></li>
            <li class="nav-item"><a href="{{url("contratos")}}" class="nav-link text-white ">Contratos </a></li>
            <li class="nav-item"><a href="{{url("actividades")}}" class="nav-link text-white">Actividades de Mantenimiento</a></li>
            <li class="nav-item"><a href="{{url("consumo")}}" class="nav-link text-white">Mi consumo</a></li>
            <li class="nav-item"><a href="{{url("sensor")}}" class="nav-link text-white">Sensores </a></li>
            <li class="nav-item dropdown">
                <a style=" color: #F4E2C3" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            @endif

            @if (auth()->user()->id_tipo_usuario==2)
                    <li class="nav-item">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><span class="fa fa-search"></span></div>
                            </div>
                            <input type="text" placeholder="Search">
                        </div>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link text-white">Inicio</a></li>




                    <li class="nav-item"><a href="{{url("consumo")}}" class="nav-link text-white">Mi consumo</a></li>

                    <li class="nav-item dropdown">
                        <a style=" color: #F4E2C3" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                @endif

        @endguest

    </ul>

    <style>

        header{

            background-image : url({{url("imagenes/agua.jpg")}} ) ;
            background-size: 100% 70%;
        }
        footer{


        }


    </style>
    
</header>
<main class="container">
    @yield("content")
</main>
<footer class="bg-primary text-center" style="background-color:#1463AF ">
    <div class="row justify-content-md-center">


        <div class="align-content-lg-center">
            <p> <h4>Redes Sociales </h4><br>
            <a style=" color: #D0D8E0" class="btn btn" href="https://www.facebook.com/TecnologicoValledeBravo/"  target="_blank"><h2><i class="fab fa-facebook-square" ></i></h2></a>
            <a style=" color: #D0D8E0" class="btn btn" href="https://twitter.com/TESVBOficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><h2><i class="fab fa-twitter-square" ></i></h2></a>
            <a style=" color: #D0D8E0" class="btn btn" href="https://www.youtube.com/channel/UCqxotQqHCbIJdDORFfiNO3w/featured" target="_blank"><h2><i class="fab fa-youtube" ></i></h2></a>

        </div>

    </div>

    <span class="text-warning font-weight-light"> Liz Galicia</span>
</footer>
</body>
</html>
