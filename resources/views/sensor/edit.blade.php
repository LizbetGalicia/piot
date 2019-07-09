@extends("Layauts.layaut")
@section('title','Agregar Sensor')
@section('content')
    <h1 class="bg-primary text-white text-center">Modificar Sensor</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("sensor")}}">Regresar</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("sensor.update",$sensor->id_sensor)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="n_sensor">Codigo</label>
                    <input type="number"  value="{{$sensor->n_sensor}}" id="n_sensor" class="form-control" name="n_sensor" placeholder="Código">
                    <label for="ap">Nombre</label>
                    <input type="text"  value="{{$sensor->nombre}}" id="nombre" class="form-control" name="nombre" placeholder="Nombre">
                    
                    </select>  
                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
@endsection