@extends("Layauts.layaut")
@section("title","Clientes")
@section("content")
<div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("sexos")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("sexos")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("sexos")}}" method="post">
                @csrf
                <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text"  name="nombre" class="form-control"  placeholder="nombre">

                <label for="ap">Apellido Paterno</label>
                <input type="text"  name="ap" class="form-control"  placeholder="ap">

                <label for="am">Apellido Materno</label>
                <input type="text"  name="am" class="form-control"  placeholder="am">

                

                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
