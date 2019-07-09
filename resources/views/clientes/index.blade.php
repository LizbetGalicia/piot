@extends("Layauts.layaut")
@section('title','Clientes')

@section('content')

    <h1 class="bg-primary text-white text-center">Clientes</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("clientes/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Cliente</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Direccion</th>
                <th colspan="2"> Acciones</th>

                </thead>
                <tbdoy>
                    @foreach($clientes as $clientes)
                        <tr>
                            <td>{{$clientes->id_cliente}}</td>
                            <td>{{$clientes->nombre}}</td>
                            <td>{{$clientes->ap}}</td>
                            <td>{{$clientes->am}}</td>
                            <td>{{$clientes->direccion}}</td>
                            <td><a href="{{route("clientes.edit",$clientes->id_cliente)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form action="{{url("clientes")."/".$clientes->id_cliente}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button href="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>


@endsection
