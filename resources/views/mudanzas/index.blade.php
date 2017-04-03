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
                          <li><a href="servicios"><i class="fa fa-legal"></i>Servicios</a></li>
                          <li  class="active"><a  href="mudanzas"><i class="fa fa-truck"></i>Mudanzas</a></li>                                                    
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
          	<h3><i class="fa fa-truck"></i> Formulario de Mudanzas</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb">Información de la  Mudanza</h4>
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tipo: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Casa / Apartamento/ Condominio</option>
                                    <option>Oficina</option>
                                    <option>Remolques u otros</option>
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Titulo descriptivo: </label>
                              <div class="col-sm-3">
                                  <input type="text" class="form-control">
                              </div>                                                                
                          </div>

                           <HR><h4 class="mb">Casa / Apartamento / Condominio<HR></h4>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Dormitorios: </label>
                              <div class="col-sm-3">
                                  <input type="number" class="form-control">
                              </div>  
                              <label class="col-sm-2 col-sm-2 control-label">Pisos: </label>
                              <div class="col-sm-3">
                                  <input type="number" class="form-control">
                              </div>                             
                          </div>   

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Comedor: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Mesa, comedor</option>
                                    <option>Silla, sillita de bebé</option>
                                    <option>Estante para vinos</option>
                                    <option>Aparador chino de 2 piezas</option>
                                    <option>Mesa plegable</option>
                                    <option>Carrito de té</option>
                                    <option>Gabinete pequeño</option>
                                    <option>Aparador chino de 1 pieza</option>
                                    <option>Mesa de servir</option>
                                    <option>Vitrina-aparador</option>
                                    <option>Gabinete mediano</option>
                                    <option>Lámpara de piso</option>
                                    <option>Silla de comedor</option>
                                    <option>Base del aparador</option>
                                    <option>Gabinete grande</option>
                                    <option>Lámpara de mesa</option>
                                    <option>Silla de respaldar alto</option>
                                    <option>Parte superior del aparador</option>
                                    <option>Gabinete de esquina</option>
                                    <option>Lámpara grande</option>
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Cantidad: </label>
                              <div class="col-sm-2">
                                  <input type="number" class="form-control">
                              </div> 
                              <button type="button" class="btn btn-theme">+</button>                              
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Salas: </label>
                                <div class="col-sm-3">
                                  <select class="form-control">
                                    <option>Seleccione...</option>
                                    <option>Sofá de dos asientos</option>
                                    <option>Librero, 6x3</option>
                                    <option>Unidad de pared de 4 piezas</option>
                                    <option>Sistema estéreo</option>
                                    <option>Sofá cama de 3 asientos</option>
                                    <option>Estante grande</option>
                                    <option>Televisión de piso</option>
                                    <option>Piano Espineta</option>
                                    <option>Sofá de 4 asientos</option>
                                    <option>Estante pequeño</option>
                                    <option>Consola de televisión</option>
                                    <option>Piano de pared</option>
                                    <option>Sofá seccional de 4 piezas</option>
                                    <option>Estante mediano</option>
                                    <option>Televisión de más de 21 a 41</option>
                                    <option>Piano de cola pequeño</option>
                                    <option>Otomano grande</option>
                                    <option>Gabinete de curiosidades</option>
                                    <option>Televisión de más de 42 a 47</option>
                                    <option>Piano de cola</option>
                                    <option>Otomano pequeño</option>
                                    <option>Reloj de caja</option>
                                    <option>TV grande de 60"</option>
                                    <option>Alfombra 8x10</option>
                                    <option>Sofá seccional de 5 piezas</option>
                                    <option>Centro de entretenimiento pequeño</option>
                                    <option>Proyector de tv de más de 48</option>
                                    <option>Bar 3x4x2</option>
                                    <option>Silla de brazo</option>
                                    <option>Centro de entretenimiento grande</option>
                                    <option>Final de la mesa</option>
                                    <option>Taburete de bar</option>
                                    <option>Silla de estancia</option>
                                    <option>Lámpara Chandelier pequeña</option>
                                    <option>Lado de la mesa</option>
                                    <option>Sillón mullido</option>
                                    <option>Lámpara chandelier grande</option>
                                    <option>Mesita de café</option>
                                    <option>Sillón reclinable</option>
                                    <option>Unidad de pared, una pieza</option>
                                    <option>Bocina mediana</option>
                                    <option>Silla mecedora</option>                                      
                                    <option>Unidad de pared, 2 piezas</option>                                      
                                    <option>Bocina grande</option>                                      
                                    <option>Silla de mimbre</option>                                      
                                    <option>Unidad de pared, 3 piezas</option>                                      
                                    <option>Gabinete estéreo</option>                                      
                                    <option>Lámpara de piso</option>                                      
                                    <option>Lámpara grande</option>                                      
                                    <option>Lámpara de mesa</option>                                      
                                  </select>
                                </div>
                              <label class="col-sm-2 col-sm-2 control-label">Cantidad: </label>
                              <div class="col-sm-2">
                                  <input type="number" class="form-control">
                              </div> 
                              <button type="button" class="btn btn-theme">+</button>                              
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