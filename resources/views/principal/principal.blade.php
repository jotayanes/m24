@extends('layouts.eschema')

    <!--sidebar start-->
  @section('sidebar') 
      <aside>
          <div id="sidebar"  class="nav-collapse " >
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="img/m24c.png" class="" width="80"></a></p>
                  <h5 class="centered"></h5>                                                            
                  <li class="sub-menu">
                      <a href="">
                          <i class="fa fa-sun-o" ></i>
                          <span>Admin de Servicios</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="inmobiliaria"><i class="fa fa-building-o"></i>Inmobiliaria</a></li>
                          <li><a  href="transporte"><i class="fa fa-cab"></i>Transporte</a></li>
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

      <!-- Modal -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalRegistro" class="modal fade">
        @include('login.registro')  
      </div>
      <!-- modal -->
      <!-- Modal -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalbuscar" class="modal fade">
        @include('modales.busqueda')  
      </div>
      <!-- modal -->

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">      
                    <div class="row">       
                      <! -- PROFILE 01 PANEL -->
                      <div class="col-lg-12 col-md-4 col-sm-12 mb">
                        <div class="content-panel pn">
                          <div id="profile-01">
                            <h3><i class="fa fa-search"></i> Busca el Servicio que necesitas </h3><br>
                            <h6>AQUÍ <i class="fa fa-arrow-down"></i></h6>
                              <div class="col-sm-4">

                              </div>
                          </div>
                          <div class="profile-01 centered">
                            <a data-toggle="modal"  href="#modalbuscar"><p>EMPEZAR</p></a>
                          </div>
                <div class="centered">
                  <h4><span class="fa fa-check"></span> TIPS MUDATE</h4>
                </div>                          
                        </div><! --/content-panel -->
                      </div><! --/col-md-4 -->

                    <div class="row mtbox">
                      <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                        <div class="box1">
                          <span class="fa fa-pencil"></span>
                          <h3>1</h3>
                        </div>
                        <p>¡Registrate Gratis y empieza la experiencia Mudate24!</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                          <span class="fa fa-search"></span>
                          <h3>2</h3>
                        </div>
                          <p>Busca los inmuebles y servicios que necesitas</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                          <span class="fa fa-bullhorn"></span>
                          <h3>3</h3>
                        </div>
                          <p>Puedes publicar tu inmueble o servicios</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                          <span class="fa fa-magic"></span>
                          <h3>4</h3>
                        </div>
                          <p>Planifica tu mudanza</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                          <span class="fa fa-truck"></span>
                          <h3>5</h3>
                        </div>
                        <p>¡Mudate!</p>
                      </div>
                 
                    </div><!-- /row mt -->  

                    </div><!-- /row -->          
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
                      <h3>REGISTRATE</h3>
                                        
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-thumbs-up"></i></span>
                        </div>
                        <div class="details">
                             <a data-toggle="modal" href="#modalRegistro">Registrate</a> Gratis<br/>
                        </div>
                      </div>
                      <!-- First Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-building-o"></i></span>
                        </div>
                        <div class="details">
                             <a href="#">Inmuebles</a> Podrás comprar, vender o alquilar un inmueble<br/>
                        </div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-archive"></i></span>
                        </div>
                        <div class="details">
                             <a href="#">Mudanzas</a> ¿Necesitas mudarte?<br/>
                        </div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-truck"></i></span>
                        </div>
                        <div class="details">
                             <a href="#">Mudanzas</a> ¿Tienes un transporte para hacer mudanzas?<br/>
                        </div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-gavel"></i></span>
                        </div>
                        <div class="details">
                             <a href="#">Servicios</a> ¿Necesitas una reparación o una instalación?<br/>
                        </div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-lightbulb-o"></i></span>
                        </div>
                        <div class="details">
                             <a href="#">Servicios</a> Puedes ofertar tus servicios aquí<br/>
                        </div>
                      </div>
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>
<!-- js placed at the end of the document so the pages load faster -->

    <!--common script for all pages-->
    


    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>    
  <script src="js/zabuto_calendar.js"></script>  
  


      <!--main content end-->
  @parent 
@endsection   