<!DOCTYPE html>
<html lang="es">
<head>
  <title>Sistema Administración</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/material-kit.css')}}" rel="stylesheet"/>
</head>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sistema Administración</a>
        </div>
  
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
           
            
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Edificios <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li class="{{ Request::path() == 'edificios' ? 'active' : '' }}">
                          <a class="nav-link" href="{{route('edificios.index')}}">Listar Edificios <span class="sr-only">(current)</span></a>
                        </li>                  
                        <li class="{{ Request::path() == 'edificios/create' ? 'active' : '' }}">
                          <a class="nav-link" href="{{route('edificios.create')}}">Añadir Nuevo Edificio</a>
                        </li>
                          
                  </ul>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consorcistas <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="{{ Request::path() == 'consorcistas' ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('consorcistas.index')}}">Consorcistas <span class="sr-only">(current)</span></a>
                          </li>                  
                          <li class="{{ Request::path() == 'consorcistas/create' ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('consorcistas.create')}}">Añadir Nuevo Consorcista</a>
                          </li>
                            
                    </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Liquidaciones <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li class="{{ Request::route() == 'liquidacions.create' ? 'active' : '' }}">
                              <a class="nav-link" href="{{route('liquidacions.create')}}">Crear Nueva <span class="sr-only">(current)</span></a>
                            </li>                  
                            <li class="{{ Request::path() == 'liquidacions' ? 'active' : '' }}">
                              <a class="nav-link" href="{{route('liquidacions.index')}}">Generar Talonarios</a>
                            </li>
                              
                      </ul>
                    </li>
      




          </ul>
        </div>
    </div>
  </nav>
<body>
 
    <div class="container main ">
    @yield('content')
</div>


</body>
	<!--   Core JS Files   -->
	<script src="{{asset('/js/jquery.min.js')}} " type="text/javascript"></script>
	<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/material.min.js')}}"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="{{asset('js/nouislider.min.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="{{asset('js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="{{asset('js/material-kit.js')}}" type="text/javascript"></script>
</html>


<!--    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          	<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
              </div>
                <a class="navbar-brand" href="{{route('consorcistas.index')}}">Navbar</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="{{ Request::path() == 'consorcistas' ? 'active' : '' }}">
                      <a class="nav-link" href="{{route('consorcistas.index')}}">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="{{ Request::path() == 'consorcistas/create' ? 'active' : '' }}">
                      <a class="nav-link" href="{{route('consorcistas.create')}}">Crear</a>
                    </li>
                  
                    
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                  </ul>
                </div>

            </div>
        </nav>-->