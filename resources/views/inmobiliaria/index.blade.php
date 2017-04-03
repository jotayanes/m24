@extends('layouts.eschema')

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
  @section('sidebar') 
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Nombre del logueado</h5>
                    
                  <li class="sub-menu">
                      <a class="active" href="">
                          <i class="fa fa-sun-o" ></i>
                          <span>Admin de Servicios</span>
                      </a>
                      <ul class="sub">
                          <li  class="active"><a  href="inmobiliaria"><i class="fa fa-building-o"></i>Inmobiliaria</a></li>
                          <li><a  href="servicios"><i class="fa fa-legal"></i>Servicios</a></li>
                          <li><a  href="mudanzas"><i class="fa fa-truck"></i>Mudanzas</a></li>                                                    
                      </ul>                      
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
  @parent 
@endsection  

  @section('content') 

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-building-o"></i> Inmobiliaria</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <!--<h4 class="mb">Formulario de Inmobiliaria (http://publicar.tuinmueble.com.ve/fsbo/fsbo?execution=e1s2)</h4>-->
                      <h4 class="mb">Caracteristicas Principales</h4>
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Baños: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Venta</option>
                                    <option>Alquiler</option>
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Habitaciones: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Venta</option>
                                    <option>Alquiler</option>
                                  </select>
                                </div>                                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Baños de Servicio: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Venta</option>
                                    <option>Alquiler</option>
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Estacionamientos: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Venta</option>
                                    <option>Alquiler</option>
                                  </select>
                                </div>                                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Hab. de  Servicio: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Venta</option>
                                    <option>Alquiler</option>
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Antiguedad: </label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control">
                                </div>                                
                          </div>                                                    
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Metros Terreno: </label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control">
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Metros Construcción</label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control">
                                </div> 
                          </div>

                          <HR><h4 class="mb">Caracteristicas Adicionales</h4>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Líneas Telefónicas: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Venta</option>
                                    <option>Alquiler</option>
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Cuartos: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Venta</option>
                                    <option>Alquiler</option>
                                  </select>
                                </div>                                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Áreas Sociales: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Venta</option>
                                    <option>Alquiler</option>
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Estacionamientos: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Venta</option>
                                    <option>Alquiler</option>
                                  </select>
                                </div>                                 
                          </div>                                                   
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Caracteristicas Adicionales: </label>
                                <div class="col-sm-3">
                                  <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                    <option>Aire Acondicionado</option>
                                    <option>Calefacción o chimenea</option>
                                    <option>Cocina Empotrada</option>
                                    <option>Estudio o Biblioteca</option>
                                    <option>Jardines</option>
                                    <option>Planta Electrica</option>
                                    <option>TV por Cable</option>
                                    <option>Estacionamiento de Visitantes</option>
                                    <option>Gimnasio</option>
                                    <option>Maletero</option>
                                    <option>Rejas de Seguridad</option>
                                    <option>Vestier</option>
                                    <option>Estar</option>
                                    <option>Jacuzzi</option>
                                    <option>Piscina</option>
                                    <option>Sauna</option>
                                    <option>Vista Panoramica</option>
                                  </select>
                                </div>        
                              <label class="col-sm-2 col-sm-2 control-label">Instalaciones y comodidades: </label>
                                <div class="col-sm-3">
                                  <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                    <option>Conjunto Cerrado</option>
                                    <option>Vigilancia Privada</option>
                                  </select>
                                </div>                                                                                   
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Detalles de Interés: </label>
                                <div class="col-sm-3">
                                  <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                    <option>Buena Distribución</option>
                                    <option>Desocupado</option>
                                    <option>Excelente ubicación</option>
                                    <option>Ideal para ejecutivos</option>
                                    <option>Remodelada</option>
                                    <option>Zona Tranquila</option>
                                    <option>Clima de montaña</option>
                                    <option>Espacioso</option>
                                    <option>Excelente vista</option>
                                    <option>Listo para mudarse</option>
                                    <option>Tipo estudio</option>
                                    <option>Condominio económico</option>
                                    <option>Excelente oportunidad</option>
                                    <option>Fácil acceso</option>
                                    <option>Muy bonito</option>
                                    <option>Verlo es comprarlo</option>
                                  </select>
                                </div>        
                              <label class="col-sm-2 col-sm-2 control-label">Cercanías a menos de dos cuadras: </label>
                                <div class="col-sm-3">
                                  <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                    <option>Abasto</option>
                                    <option>Estación de metro</option>
                                    <option>Panadería</option>
                                    <option>Centro Comercial</option>
                                    <option>Farmacia</option>
                                    <option>Supermercado</option>
                                    <option>Colegio</option>
                                    <option>Otros negocios</option>                           
                                  </select>
                                </div>
                                                                                                                
                          </div>
              <div class="control-group">
                <label class="control-label" for="fileInput">File input</label>
                <div class="controls">
                <input class="input-file uniform_on" id="fileInput" type="file">
                </div>
              </div>    


                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	




          	</div><!-- /row -->
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  @parent 
@endsection   