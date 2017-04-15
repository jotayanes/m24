@extends('layouts.eschema')
  @section('content') 
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalVistapostular" class="modal fade">
        @include('modales.mispostulaciones')  
      </div>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-share"></i> ¡Postúlate!</h3>
          <div class="row mt">
            <div class="col-lg-12">
                      <div class="content-panel">
                      <h4> Solicitudes de Servicios</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                <tr>
                                    <th>Servicio</th>
                                    <th>Titulo</th>
                                    <th>Tipo</th>
                                    <th>Ubicación</th>
                                    <th>Acciones</th>
                                </tr>
                              </thead>                              
                              <tbody>
                                @foreach($postulaciones as $postulaciones)
                                <tr>
                                    <td>{{$postulaciones->ser_service}}</td>
                                    <td>{{$postulaciones->ser_detalle}}</td>
                                    <td>{{$postulaciones->ser_tipo}}</td>
                                    <td>{{$postulaciones->ser_parroquia}}</td>
                                    <td><button  href="#modalVistapostular" data-toggle="modal" class="btn btn-theme" value="{{$postulaciones->ser_id}}" OnClick='Postu(this)'><i class="fa fa-search"></i></button></td>
                                </tr>
                                @endforeach
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->     
        </div><!-- /row -->

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->


      <!--main content end-->
  @parent 
@endsection

@section('script') 
  {!!Html::script('js/ajaxcrud/postulaciones.js')!!}
  @parent 
@endsection      