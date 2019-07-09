@extends("Layauts.layaut")
@section("title","Agregar Mantenimiento")
@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-outline-primary" href="{{url("tipom")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("tipom")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("tipom")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text"  name="descripcion" class="form-control"  placeholder="tipom">
                </div>
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection
