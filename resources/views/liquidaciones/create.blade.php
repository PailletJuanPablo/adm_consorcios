
@extends('header')
@section('content')
           
            
              
                    <h2>Agregar Nueva Liquidación</h2><br  />
                 
                    <form  method="post" action="{{ route('liquidacions.store') }}">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="POST">
              
                      <div class="container">

                        <div class="form-group ">
                          <label for="periodo">Período:</label>
                          <input type="date" class="form-control" name="periodo" >
                        </div>
                        <div class="form-group ">

                        <label for="edificio_id">Edificio:</label>
        
                        <select name="edificio_id" class="form-control dropdown selectpicker ">
        
                                @foreach ($edificios as $edificio)
        
                                <option value="{{$edificio->id}}">{{$edificio->nombre}}</option>
                                @endforeach
        
                              </select>
                 
                    </div>
                    
                  </div>
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                          <button type="submit" class="btn btn-success" style="margin-left:38px">Crear y Agregar Gastos</button>
                        </div>
                      </div>
                    </form>
         
                  @endsection