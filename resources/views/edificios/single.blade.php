@extends('header')
@section('content')
<a class="btn btn-small btn-success" href="{{ URL::to('edificios' )}}">Volver a Edificios</a>

    <h1>Edificio  {{$edificio->nombre}}</h1>
    <h3>Dirección {{$edificio->direccion}}</h3>


    <h4>Consorcistas de {{$edificio->nombre}}</h4>


    <table class="table">
      <thead>
        <tr>
          <td>Nombre</td>
          <td>Porcentaje de Ocupación</td>
          <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($edificio->consorcistas as $consorcistas)
        <tr>
        <td> {{$consorcistas->nombre}}</td>
        <td> {{$consorcistas->porcentaje_ocupacion}}</td>

        <td>  <a class="btn btn-small btn-info" href="{{ URL::to('consorcistas/' . $consorcistas->id . '/edit') }}">Editar Consorcista</a>
        </td></tr>
     @endforeach



      </tbody>
    </table>


    @endsection



