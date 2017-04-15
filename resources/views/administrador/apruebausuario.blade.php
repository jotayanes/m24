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
            <h3><i class="fa fa-share"></i> Administrador de usuarios</h3>
          <div class="row mt">
            <div class="col-lg-12">
                      <div class="content-panel">
                      <h4> Listado de Usuarios</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Documento</th>
                                    <th>Correo</th>
                                    <th>Status</th>
                                    <th>Acciones</th>
                                </tr>
                              </thead>                              
                              <tbody>
                                @foreach($usuariosd as $usuariosd)
                                <tr>
                                    <td>{{$usuariosd->per_nombre}}</td>
                                    <td>{{$usuariosd->per_apellido}}</td>
                                    <td>{{$usuariosd->per_ci}}</td>
                                    <td>{{$usuariosd->email}}</td>
                                    <td>{{$usuariosd->rec_detalle}}</td>
                                    <td><button  href="#modalVistapostular" data-toggle="modal" class="btn btn-theme" value="{{$usuariosd->id}}" OnClick='Postu(this)'><i class="fa fa-search"></i></button></td>
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