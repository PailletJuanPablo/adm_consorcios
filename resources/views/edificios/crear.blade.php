
@extends('header')
@section('content')
           
            
              
                    <h2>Crear Edificio</h2><br  />
                 
                    <form enctype="multipart/form-data" method="post" action="{{ route('edificios.store') }}">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="POST">
              
                      <div class="row">
                          <input type="file" name="imagen" id="imagen">

                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                          <label for="nombre">Nombre:</label>
                          <input type="text" class="form-control" name="nombre" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="direccion">Direccion:</label>
                            <input type="text" class="form-control" name="direccion" >
                          </div>
                        </div>
                        <div class="row">
                                <div class="col-md-4"></div>
                                  <div class="form-group col-md-4">
                                    <label for="tipo_unidad">Tipo de Unidad:</label>
                                    <input type="text" class="form-control" name="tipo_unidad" >
                                  </div>
                                </div>
                    
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                          <button type="submit" class="btn btn-success" style="margin-left:38px">Crear Edificio</button>
                        </div>
                      </div>
                    </form>
         
                  @endsection