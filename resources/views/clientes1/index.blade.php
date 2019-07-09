@extends("Layauts.layaut")
@section("title","Agregar Clientes")
@section("content")
<div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("sexos/create")}}"><i class="fa fa-plus"> Agregar</i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
        <table class="table">
        <thead>
        <tr >
            <th>Indice</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Sexo</th>
            <th>Direccion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$cliente->id_cliente}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->ap}}</td>
                <td>{{$cliente->am}}</td>
                <td>{{isset($cliente->getSexo[0])?$cliente->getSexo[0]->sexo:""}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>
                    <a href="{{route("clientes.edit",$cliente->id_cliente)}}" class="btn btn-outline-primary" name="actualizar"><i class="far fa-edit"></i></a>
                </td>
                <td>
                    <form action="{{url("clientes")."/".$cliente->id_cliente}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-minus-circle"></i></button>
                    </form>
                </td>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>


    @endsection