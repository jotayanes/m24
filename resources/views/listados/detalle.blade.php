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
                          <li><a  href="inmobiliaria"><i class="fa fa-building-o"></i>Inmobiliaria</a></li>
                          <li  class="active"><a href="servicios"><i class="fa fa-legal"></i>Servicios</a></li>
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
          	<h3><i class="fa fa-eye"></i> Detalles</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
              <div class="col-lg-12">
                  <div class="form-panel">
                      <!--<h4 class="mb">Formulario de Inmobiliaria (http://publicar.tuinmueble.com.ve/fsbo/fsbo?execution=e1s2)</h4>-->
                      <h4 class="mb"></h4>
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Servicio: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Arreglos Generales</option>
                                    <option>Electricidad</option>
                                    <option>Gas</option>
                                    <option>Plomería</option>
                                    <option>Aires Acondicionados</option>
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Tipo: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Instalación</option>
                                    <option>Reparación</option>
                                  </select>
                                </div>                                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Descripción del Servicio: </label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control">
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Información Adicional: </label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control">
                                </div>                                
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Estado: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Venta</option>
                                    <option>Alquiler</option>
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Municipio: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Venta</option>
                                    <option>Alquiler</option>
                                  </select>
                                </div>                                
                          </div>                                                    
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Parroquia: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Venta</option>
                                    <option>Alquiler</option>
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Dirección: </label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control">
                                </div> 
                          </div>                                                                                            
                      </form>
                  </div>
              </div><!-- col-lg-12-->             	 
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  @parent 
@endsection   