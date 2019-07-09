@extends("Layauts.layaut")
@section('title','Agregar Cliente')
@section('content')

    <h1 class="bg-primary text-white text-center">Agregar Sensor</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("sensor")}}">Regresar</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("sensor")}}">
                @csrf
                <div class="form-group">
                    <label for="nombre">N. Sensor</label>
                    <input type="Number" class="form-control" name="n_sensor" placeholder="N. Sensor">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    
                </div>
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
@endsection
