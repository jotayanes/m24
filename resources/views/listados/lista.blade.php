@extends('layouts.eschema')
  @section('content') 

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-search"></i> Busqueda</h3>
          <div class="row mt">
            <div class="col-lg-12">
                      <div class="content-panel">
                      <h4> Inmuebles / Servicios</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Titulo</th>
                                    <th>Valor</th>
                                    <th>Ubicación</th>
                                    <th>Acciones</th>
                                </tr>
                              </thead>                              
                              <tbody>
                                @foreach($servicios as $servicios)
                                <tr>
                                    <td>AAC</td>
                                    <td><a href="detalle">{{$servicios->ser_detalle}}</a></td>
                                    <td>{{$servicios->ser_descripcion}}</td>
                                    <td>{{$servicios->ser_info_adicional}}</td>
                                    <td>{{$servicios->ser_parroquia_rec_id}}</td>
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