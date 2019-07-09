@extends('layauts.layaut')
@section('title','Tipo de Mantenimiento')
@section('content')
    <h1 class="bg-primary text-white text-center">Modificar Tipo de Mantenimiento</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("tipom")}}">Regresar</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("tipom.update",$tipom->id_tipo)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                <label for="Tipom">Tipo de Mantenimiento</label>
                <input type=" text"  value="{{$tipom->descripcion}}" id="descripcion" class="form-control" name="descripcion" placeholder="descripcion">
                <!--<input type="text"  name="descripcion" class="form-control"  placeholder="descripcion">-->

                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
@endsection