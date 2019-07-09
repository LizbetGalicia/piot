@extends("Layauts.layaut")
@section("title","Generar Contrato")
@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("contratos")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("contratos")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("contratos")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <select name=id_cliente id="">
                    <option value="">Seleccione una opción</option>
                    @foreach($Clientes as $clientes)
                    <option value="{{$clientes->id_cliente}}"{{$clientes->nombre}}></option>
                    @endforeach
                    </select>

                    <label for="ap">Apellido Paterno</label>
                    <select name=id_cliente id="">
                    <option value="">Seleccione una opción</option>
                    @foreach($Clientes as $clientes)
                    <option value="{{$clientes->id_cliente}}"{{$clientes->ap}}></option>
                    @endforeach
                    </select>


                    <label for="nombre">Apellido Materno</label>
                    <select name=id_cliente id="">
                    <option value="">Seleccione una opción</option>
                    @foreach($Clientes as $clientes)
                    <option value="{{$clientes->id_cliente}}"{{$clientes->am}}></option>
                    @endforeach
                    </select>

                    <label for="nombre">Numero de Sensor</label>
                    <select name=id_sensor id="">
                    <option value="">Seleccione una opción</option>
                    @foreach($Sensor as $sensor)
                    <option value="{{$sensor->id_sensor}}"{{$sensor->n_sensor}}></option>
                    @endforeach
                    </select>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
