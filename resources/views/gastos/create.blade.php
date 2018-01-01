
@extends('header')
@section('content')
           
            
              
                    <h2>Agregar gastos a liquidacion </h2>
                    <h3> Período: {{$liquidacion->periodo}}</h3><br  />
                 
                    

                    <form method="post" action="{{ route('gastos.store') }}">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="POST">

                      <input type="hidden" name="liquidacion_id" value="{{$liquidacion->id}}">

                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                          <label for="concepto">Concepto:</label>
                          <input type="text" class="form-control" name="concepto" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="monto">Monto:</label>
                            <input type="text" class="form-control" name="monto" >
                          </div>
                        </div>
                        <div class="row">
                              <div class="col-md-4"></div>
                       
                      </div>
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                          <button type="submit" class="btn btn-success" style="margin-left:38px">Agregar a Liquidacion</button>
                        </div>
                      </div>
                    </form>


                    <table class="table">
                        <thead>
                            <tr>
                                <th>Eliminar</th>
                                <th>Concepto</th>
                                <th>Monto</th>
                           

                            </tr>
                        </thead>
                        <tbody>

                                @foreach ($liquidacion->gastos as $gasto)
                            <tr>
                                <td>
                                    <form   method="post" action="{{ route('gastos.destroy', $gasto->id) }}">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger" style="margin-left:38px">Eliminar</button>
                            
                                      </form></td>
                                <td>{{$gasto->concepto}}</td>
                                <td>{{$gasto->monto}}</td>
                             

                            </tr>
                            @endforeach
<tr>
  <td><h2> TOTAL </h2></td>
  <td></td>

  <td > <h2> {{$liquidacion->monto_total}} </h2></td>
</tr>
                        </tbody>
                    </table>
         

                   
                  @endsection