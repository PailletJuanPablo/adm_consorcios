
@extends('header')
@section('content')
           
            
              
                    <h2>Crear Consorcista</h2><br  />
                 
                    <form method="post" action="{{ route('consorcistas.store') }}">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="POST">
              
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                          <label for="nombre">Nombre:</label>
                          <input type="text" class="form-control" name="nombre" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="porcentaje_ocupacion">Porc. Ocupación:</label>
                            <input type="text" class="form-control" name="porcentaje_ocupacion" >
                          </div>
                        </div>
                        <div class="row">
                              <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
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
                          <button type="submit" class="btn btn-success" style="margin-left:38px">Crear Consorcista</button>
                        </div>
                      </div>
                    </form>
         
                  @endsection