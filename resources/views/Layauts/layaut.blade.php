<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
<header class="bg-primary">
</br>
<font color="navy" face="Comic Sans MS,arial">
  <h1 align="center"><i>Prototipo IOT para tomas de Agua</i></h1>
</font></br>
   
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><span class="fa fa-search"></span></div>
                </div>
                <input type="text" placeholder="Search">
            </div>
        </li>
        <li class="nav-item"><a href="" class="nav-link text-white">Inicio</a></li>
        <li class="nav-item"><a href="{{url("clientes")}}" class="nav-link text-white">Usuarios</a></li>
        <li class="nav-item"><a href="{{url("tipom")}}" class="nav-link text-white">Tipo de Mantenimientos</a></li>
        <li class="nav-item"><a href="{{url("contratos")}}" class="nav-link text-white">Contratos</a></li>
        <li class="nav-item"><a href="{{url("actividades")}}" class="nav-link text-white">Actividades de Mantenimiento</a></li>
        <li class="nav-item"><a href="{{url("consumo")}}" class="nav-link text-white">Mi consumo</a></li>
        <li class="nav-item"><a href="{{url("sensor")}}" class="nav-link text-white">Sensores</a></li>
    </ul>
    
</header>
<main class="container">
    @yield("content")
</main>
<footer class="bg-primary text-center">
    <span class="text-warning font-weight-light"> Liz Galicia</span>
</footer>
</body>
</html>
