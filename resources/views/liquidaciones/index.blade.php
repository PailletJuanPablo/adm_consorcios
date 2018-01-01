@extends('header')
@section('content')

    <h2>Liquidaciones</h2>
    <table class="table">
      <thead>
        <tr>
          <td>Monto Total</td>
          <td>Período</td>

          <td>Edificio</td>

          <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($liquidaciones as $liquidacion)
        <tr>
        <td> {{$liquidacion->monto_total}}</td>
        <td> {{$liquidacion->periodo}}</td>
        <td> {{$liquidacion->edificio->nombre}}</td>

        <td>  
            <a class="btn btn-small btn-success" href="{{ URL::to('liquidacions/' . $liquidacion->id )}}" target="_blank">Generar Talonarios</a>

        
        </td></tr>
     @endforeach



      </tbody>
    </table>


    @endsection



