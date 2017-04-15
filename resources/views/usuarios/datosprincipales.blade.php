@extends('layouts.eschema')
  @section('content') 

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-folder"></i> Datos Principales</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
              <div class="col-lg-12">
                  <div class="form-panel">
                      <!--<h4 class="mb">Formulario de Inmobiliaria (http://publicar.tuinmueble.com.ve/fsbo/fsbo?execution=e1s2)</h4>-->
                      <h4 class="mb">Completa el registro</h4>
                      <form class="form-horizontal style-form" method="POST" action="datosa">
                        @foreach($datos as $datos)
                        {!! csrf_field() !!}
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Nombre: </strong></label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="nombre" name="nombre" value="{{$datos->per_nombre}}">
                                </div>                                
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Apellido: </strong></label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="apellido" name="apellido" value="{{$datos->per_apellido}}">
                                </div>                                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Documento de identidad: </strong></label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="documento" name="documento" value="{{$datos->per_ci}}">
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Telefono movil: </strong></label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="telefono" name="telefono" value="{{$datos->per_telefono}}">
                                </div>                                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Correo: </strong></label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="correo" name="correo" value="{{$datos->email}}">
                                </div> 
                          </div>                                                    

                            <center><button type="submit" class="btn btn-theme">Registrar</button></center> 

                        @endforeach                                                                                        
                      </form>
                  </div>
              </div><!-- col-lg-12-->             	 
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  @parent 
@endsection   