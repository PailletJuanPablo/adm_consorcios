

@extends('header')
@section('content')
      <h2>Editar Consorcista</h2><br  />
   
      <form method="post" action="{{ route('consorcistas.update', $idConsorcista) }}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PUT">

        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{$consorcista->nombre}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="porcentaje_ocupacion">Porc. Ocupación:</label>
              <input type="number" class="form-control" name="porcentaje_ocupacion" value="{{$consorcista->porcentaje_ocupacion}}">
            </div>
          </div>
          <div class="row">
                <div class="col-md-4"></div>
          <div class="form-group col-md-4">
                <label for="edificio_id">Edificio:</label>

                <select name="edificio_id" class="form-control">
                        <option value="{{$consorcista->edificio->id}}">{{$consorcista->edificio->nombre}}</option>

                        @foreach ($edificios as $edificio)

                        <option value="{{$edificio->id}}">{{$edificio->nombre}}</option>
                        @endforeach

                      </select>
         
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar Consorcista</button>
          </div>
        </div>
      </form>
      @endsection