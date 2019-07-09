@extends('layauts.layaut')
@section('title','Contratos')
@section('content')
    <h1 class="bg-primary text-white text-center">Modificar Contrato</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("contratos")}}">Regresar</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("contratos.update",$contratos->id_contrato)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                <label for="contrato">N Servicio</label>
                    <input type="number"  name="descripcion" class="form-control"  placeholder="N servicio">

                </div>
                <div class="form-group">
                <label for="contrato">Costo</label>
                    <input type="text"  name="descripcion" class="form-control"  placeholder="">

                </div>
                <div class="form-group">
                <label for="contrato">Usuario</label>
                    <input type="text"  name="descripcion" class="form-control"  placeholder="">

                </div>
                <div class="form-group">
                <label for="contrato">Sensor</label>
                    <input type="text"  name="descripcion" class="form-control"  placeholder="">

                </div>

                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
@endsection