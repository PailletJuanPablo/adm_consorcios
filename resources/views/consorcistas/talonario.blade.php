@extends('header')
@section('content')

    <h2>Generación de Liquidaciones</h2>

        @foreach ($consorcistas as $consorcista)
        <hr>

<h3>Consorcista {{$consorcista->nombre}} </h3>
<h4> Porc. Ocupación: {{$consorcista->porcentaje_ocupacion}} %</h4>
<hr>
<h5>Gastos del Período </h5>
        <table class="table">
                <thead>
                    <tr>
                        <th>Concepto</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody>
              @foreach ($gastos as $gasto)
        <tr>
               
                <td>{{$gasto->concepto}}</td>
                <td>$ {{$gasto->monto}}</td>
               
            </tr>
            @endforeach
            <tr>
             
                    <td>  <h5><b> Monto Total </h5> </b></td>
                    <td><h5> <b>$ {{ $monto_total }} </h5></b></td>
              
                </tr>
        </table>
        <div> 



      


<h1> Monto a Pagar: ${{$consorcista->abonar($monto_total)}}</h1>

<hr>
<hr>
     @endforeach
    
    </div>


    @endsection



