@extends('layouts.eschema')
  @section('content') 
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-edit"></i> Curriculum</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
              <div class="col-lg-12">
                  <div class="form-panel">
                      <!--<h4 class="mb">Formulario de Inmobiliaria (http://publicar.tuinmueble.com.ve/fsbo/fsbo?execution=e1s2)</h4>-->
                      <h4 class="mb"><i class="fa fa-info"></i>  Mi Curriculum</h4>
                      <form class="form-horizontal style-form" method="POST" action="datosa">
                        @foreach($datos as $datos)
                          <?php
                            function calculaedad($fechanacimiento){
                              list($ano,$mes,$dia) = explode("-",$fechanacimiento);
                              $ano_diferencia  = date("Y") - $ano;
                              $mes_diferencia = date("m") - $mes;
                              $dia_diferencia   = date("d") - $dia;
                              if ($dia_diferencia < 0 || $mes_diferencia < 0)
                                $ano_diferencia--;
                              return $ano_diferencia;
                            }
                            $miedad=$datos->cur_fecha_nac;
                            //echo calculaedad ($miedad);
                          ?>
                        {!! csrf_field() !!}
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong> Nombre y Apellido: </strong></label>
                                <div class="col-sm-3">
                                  <p class="form-control-static">{{$datos->per_nombre}}, {{$datos->per_apellido}}</p>
                                </div>                                
                              <label class="col-sm-2 col-sm-2 control-label"><strong> Documento de identidad: </strong></label>
                                <div class="col-sm-3">
                                  <p class="form-control-static">{{$datos->per_ci}}</p>
                                </div>                                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Telefono fijo: </strong></label>
                                <div class="col-sm-3">
                                  <p class="form-control-static">{{$datos->cur_telfijo}}</p>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Telefono movil: </strong></label>
                                <div class="col-sm-3">
                                  <p class="form-control-static">{{$datos->per_telefono}}</p>
                                </div>                                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Correo: </strong></label>
                                <div class="col-sm-3">
                                  <p class="form-control-static">{{$datos->email}}</p>
                                </div> 
                              <label class="col-sm-2 col-sm-2 control-label"><strong>Edad: </strong></label>
                                <div class="col-sm-3">
                                  <p class="form-control-static"><?php echo calculaedad ($miedad).' Años';?></p>
                                </div>                                  
                          </div>                                                    


                        @endforeach                                                                                        
                      </form>
                  </div>
              </div><!-- col-lg-12-->             	 
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  @parent 
@endsection   