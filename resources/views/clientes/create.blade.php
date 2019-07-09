@extends("Layauts.layaut")
@section('title','Agregar Cliente')
@section('content')

    <h1 class="bg-primary text-white text-center">Agregar Clientes</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("clientes")}}">Regresar</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("clientes")}}">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    <label for="nombre">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ap" placeholder="Apellido Paterno">
                    <label for="nombre">Apellido Materno</label>
                    <input type="text" class="form-control" name="am" placeholder="Apellido Materno">
                    <label for="nombre">Direccion</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Direccion">
                </div>
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
@endsection
