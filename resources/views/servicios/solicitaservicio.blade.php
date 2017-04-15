@extends('layouts.eschema')
  @section('content') 

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-bullhorn"></i> Solicita el servicio que necesitas</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
              <div class="col-lg-12">
                  <div class="form-panel">
                      <!--<h4 class="mb">Formulario de Inmobiliaria (http://publicar.tuinmueble.com.ve/fsbo/fsbo?execution=e1s2)</h4>-->
                      <h4 class="mb">Registro</h4>
                      <form class="form-horizontal style-form" method="POST" action="serviciousuario">
                        {!! csrf_field() !!}
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Servicio:</strong></label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="SER" name="SER">
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Tipo:</strong></label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="TSE" name="TSE">
                                  </select>
                                </div>                                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Titulo del servicio:</strong></label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="titulo" name="titulo">
                                </div>                                
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Descripción del Servicio:</strong></label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="descripcion" name="descripcion">
                                </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Información Adicional:</strong></label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="infoadicional" name="infoadicional">
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Correo de contacto:</strong></label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="correosolicitante" name="correosolicitante">
                                </div>                                  
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Pais:</strong></label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="PAI" name="PAI">
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Estado:</strong></label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="EDO" name="EDO">
                                  </select>
                                </div>
                          </div>                                                     
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Municipio:</strong></label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="MUN" name="MUN">
                                  </select>
                                </div>                                
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Parroquia:</strong></label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="PAR" name="PAR">>
                                  </select>
                                </div>
                          </div>
                          
                            <center><button type="submit" class="btn btn-theme">Registrar</button></center>                                                                                         
                      </form>
                  </div>
              </div><!-- col-lg-12-->             	 
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  @parent 
@endsection   