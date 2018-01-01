
@extends('header')
@section('content')
           
            
              
                    <h2>Crear Edificio</h2><br  />
                 
                    <form enctype="multipart/form-data"  method="post" action="{{ route('edificios.update', $idEdificio) }}">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="PUT">
              
                      <div class="row">

                        Para cambiar la imagen seleccione un nuevo archivo: <br>
                          <input type="file" name="imagen" id="imagen">

                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                          <label for="nombre">Nombre:</label>
                          <input type="text" class="form-control" name="nombre" value="{{$edificio->nombre}}">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="direccion">Direccion:</label>
                            <input type="text" class="form-control" name="direccion" value="{{$edificio->direccion}}">
                          </div>
                        </div>
                        <div class="row">
                                <div class="col-md-4"></div>
                                  <div class="form-group col-md-4">
                                    <label for="tipo_unidad">Tipo de Unidad:</label>
                                    <input type="text" class="form-control" name="tipo_unidad" value="{{$edificio->tipo_unidad}}">
                                  </div>
                                </div>
                    
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                          <button type="submit" class="btn btn-success" style="margin-left:38px">Editar Edificio</button>
                        </div>
                      </div>
                    </form>
         
                  @endsection