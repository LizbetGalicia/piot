@extends('Layauts.layaut')
@section("title","Tipo de Mantenimientos")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("tipom/create")}}"><i class="fa fa-plus"> Agregar</i></a>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripcion</th>
                    <th colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tipom as $tipom)
                    <tr>
                        <td>{{$tipom->id_tipo}}</td>
                        <td>{{$tipom->descripcion}}</td>
                        <td><a href="{{route("tipom.edit",$tipom->id_tipo)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                        <td>
                        
                            <form action="{{route("tipom.destroy",$tipom->id_tipo)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
