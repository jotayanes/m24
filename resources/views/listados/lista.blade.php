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
                      <a class="" href="">
                          <i class="fa fa-sun-o" ></i>
                          <span>Admin de Servicios</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="inmobiliaria"><i class="fa fa-building-o"></i>Inmobiliaria</a></li>
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
                                  <th class="numeric">Valor</th>
                                  <th class="numeric">Ubicación</th>
                              </tr>
                              </thead>                              
                              <tbody>
                              <tr>
                                  <td>AAC</td>
                                  <td><a href="detalle">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</a></td>
                                  <td class="numeric">$1.38</td>
                                  <td class="numeric">-0.01</td>
                              </tr>
                              <tr>
                                  <td>AAD</td>
                                  <td>ARDENT LEISURE GROUP</td>
                                  <td class="numeric">$1.15</td>
                                  <td class="numeric">  +0.02</td>
                              </tr>
                              <tr>
                                  <td>AAX</td>
                                  <td>AUSENCO LIMITED</td>
                                  <td class="numeric">$4.00</td>
                                  <td class="numeric">-0.04</td>
                              </tr>
                              <tr>
                                  <td>ABC</td>
                                  <td>ADELAIDE BRIGHTON LIMITED</td>
                                  <td class="numeric">$3.00</td>
                                  <td class="numeric">  +0.06</td>
                              </tr>
                              <tr>
                                  <td>ABP</td>
                                  <td>ABACUS PROPERTY GROUP</td>
                                  <td class="numeric">$1.91</td>
                                  <td class="numeric">0.00</td>
                              </tr>
                              <tr>
                                  <td>ABY</td>
                                  <td>ADITYA BIRLA MINERALS LIMITED</td>
                                  <td class="numeric">$0.77</td>
                                  <td class="numeric">  +0.02</td>
                              </tr>
                              <tr>
                                  <td>ACR</td>
                                  <td>ACRUX LIMITED</td>
                                  <td class="numeric">$3.71</td>
                                  <td class="numeric">  +0.01</td>
                              </tr>
                              <tr>
                                  <td>ADU</td>
                                  <td>ADAMUS RESOURCES LIMITED</td>
                                  <td class="numeric">$0.72</td>
                                  <td class="numeric">0.00</td>
                              </tr>
                              <tr>
                                  <td>AGG</td>
                                  <td>ANGLOGOLD ASHANTI LIMITED</td>
                                  <td class="numeric">$7.81</td>
                                  <td class="numeric">-0.22</td>
                              </tr>
                              <tr>
                                  <td>AGK</td>
                                  <td>AGL ENERGY LIMITED</td>
                                  <td class="numeric">$13.82</td>
                                  <td class="numeric">  +0.02</td>
                              </tr>
                              <tr>
                                  <td>AGO</td>
                                  <td>ATLAS IRON LIMITED</td>
                                  <td class="numeric">$3.17</td>
                                  <td class="numeric">-0.02</td>
                               </tr>
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