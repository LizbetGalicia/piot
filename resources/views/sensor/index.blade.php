@extends("Layauts.layaut")
@section('title','Sensores')

@section('content')

    <h1 class="bg-primary text-white text-center">Sensores</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("sensor/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Sensor</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th colspan="2"> Acciones</th>

                </thead>
                <tbdoy>
                    @foreach($sensor as $sensor)
                        <tr>
                            <td>{{$sensor->id_sensor}}</td>
                            <td>{{$sensor->n_sensor}}</td>
                            <td>{{$sensor->nombre}}</td>
                            <td><a href="{{route("sensor.edit",$sensor->id_sensor)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form action="{{url("sensor")."/".$sensor->id_sensor}}" method="post">
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
