@extends('layouts.eschema')
  @section('content') 

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-asterisk"></i> Datos Adicionales de registro</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
              <div class="col-lg-12">
                  <div class="form-panel">
                      <!--<h4 class="mb">Formulario de Inmobiliaria (http://publicar.tuinmueble.com.ve/fsbo/fsbo?execution=e1s2)</h4>-->
                      <h4 class="mb">Completa el registro</h4>
                      <form class="form-horizontal style-form" method="POST" action="datosadicionales">
                        @foreach($datos as $datos)                        
                        {!! csrf_field() !!}

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>País: </strong></label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="PAI" name="PAI"></select>
                                </div>                                
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Provincia: </strong></label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="EDO" name="EDO"></select>
                                </div>                                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Municipio: </strong></label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="MUN" name="MUN">
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Distrito Municipal: </strong></label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="PAR" name="PAR" value="{{$datos->cur_parroquia_rec_id}}">
                                  </select>
                                </div>                                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Dirección: </strong></label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="direccion" name="direccion" value="{{$datos->cur_direccion}}">
                                </div> 
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Nacionalidad: </strong></label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="NAC" name="NAC" value="{{$datos->cur_nacionalidad_rec_id}}">
                                  </select>
                                </div>
                          </div>                                                    
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Sexo: </strong></label>
                                <div class="col-sm-3">
                                  <select class="form-control" value="{{$datos->cur_sexo_rec_id}}" id="SEX" name="SEX"></select>
                                </div>                                
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Fecha de Nacimiento: </strong></label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="fechanac" name="fechanac" value="{{$datos->cur_fecha_nac}}">
                                </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Teléfono fijo: </strong></label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="telfijo" name="telfijo" value="{{$datos->cur_telfijo}}">
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