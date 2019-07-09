@extends("Layauts.layaut")
@section("title","Contratos")

@section("content")
    <div class="row justify-content-md-center">
        <div class="row">
            <a class="btn btn-info" href="{{url("contratos/create")}}"><i class="btn btn-info"></i>Generar Contrato</a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>N servicio</th>
                    <th>Costo</th>
                    <th>Usuario</th>
                    <th>Sensor</th>
                    <th colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contratos as $contratos)
                    <tr>
                        <td>{{$contratos->id_contrato}}</td>
                        <td>{{$contratos->n_servicio}}</td>
                        <td>{{isset($contratos->getClientes[0])?$contratos->getClientes->nombre:""}}</td>
                        <td>{{isset($contratos->getClientes[0])?$contratos->getClientes->ap:""}}</td>
                        <td>{{isset($contratos->getClientes[0])?$contratos->getClientes->am:""}}</td>
                        <td>{{isset($contratos->getSensor[0])?$contratos->getSensor->n_sensor:""}}</td>
                        <td>{{$contratos->costo}}</td>

                    </tr>
                @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
@endsection
