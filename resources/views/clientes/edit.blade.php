@extends("Layauts.layaut")
@section('title','Agregar CLientes')
@section('content')
    <h1 class="bg-primary text-white text-center">Modificar Cliente</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("clientes")}}">Regresar</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("clientes.update",$cliente->id_cliente)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="nombre">Nombre Cliente</label>
                    <input type="text"  value="{{$cliente->nombre}}" id="nombre" class="form-control" name="nombre" placeholder="Nombre">
                    <label for="ap">Apellido Paterno</label>
                    <input type="text"  value="{{$cliente->ap}}" id="ap" class="form-control" name="ap" placeholder="Apellido Apetrno">
                    <label for="am">Apellido Materno</label>
                    <input type="text"  value="{{$cliente->am}}" id="am" class="form-control" name="am" placeholder="Apellido Materno">
                    <label for="direccion">Dirección</label>
                    <input type="direccion" value="{{$cliente->direccion}}" id="direccion" class="form-control" name="direccion" placeholder="Dirección">
                    </select>  
                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
@endsection