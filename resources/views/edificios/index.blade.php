@extends('header')
@section('content')

    <h2>Edificio con numero de Consorcistas</h2>
    {{$edificios->links()}}
    <table class="table">
      <thead>
        <tr>
          <td>Nombre</td>
          <td>Dirección</td>
          <td>Nº de Consorcistas</td>
          <td>Tipo de Unidad</td>
          <td>Imagen</td>

          <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($edificios as $edificio)
        <tr>
        <td> {{$edificio->nombre}}</td>
        <td> {{$edificio->direccion}}</td>
        <td> {{$edificio->consorcistas_count}}</td>
        <td> {{$edificio->tipo_unidad}}</td>
        <td> <img src="http://localhost:3623/apirequests/public/{{$edificio->imagen}}" width=100></td>

        <td>  
            <a class="btn btn-small btn-success" href="{{ URL::to('edificios/' . $edificio->id )}}">Ver Detalles del Edificio</a>
          <a class="btn btn-small btn-info" href="{{ URL::to('edificios/' . $edificio->id . '/edit') }}">Editar Edificio</a>

          <form enctype="multipart/form-data"  method="post" action="{{ route('edificios.destroy', $edificio->id) }}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="btn btn-danger" style="margin-left:38px">Eliminar Edificio</button>

          </form>
        </td></tr>
     @endforeach



      </tbody>
    </table>


    @endsection



