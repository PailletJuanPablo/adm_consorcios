@extends('header')
@section('content')

    <h2>Consorcistas con sus edificios</h2>
    {{$consorcistas->links()}}
    <table class="table">
      <thead>
        <tr>
          <td>Nombre</td>
          <td>Edificio</td>
          <td>Porc. Ocupación</td>
          <td>Edificio</td>
          <td>Editar</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($consorcistas as $consorcista)
        <tr>
        <td> {{$consorcista->nombre}}</td>
        <td> {{$consorcista->edificio->nombre}}</td>
        <td> {{$consorcista->porcentaje_ocupacion}}</td>
        <td> {{$consorcista->edificio->nombre}}</td>

        <td>  
          
  <a class="btn btn-small btn-info" href="{{ URL::to('consorcistas/' . $consorcista->id . '/edit') }}">Editar Consorcista</a>
  <a class="btn btn-small btn-success" href="{{ URL::to('edificios/' . $consorcista->edificio->id) }}">Ver Edificio Consorcista</a>

        </td></tr>
     @endforeach



      </tbody>
    </table>


    @endsection



