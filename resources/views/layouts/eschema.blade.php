<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image" href="/img/m24.png"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content="Dashboard"/>
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Mudate24</title>
    <!-- Bootstrap core CSS -->
    {!!Html::style('css/bootstrap.css')!!}
    <!--external css-->
    {!!Html::style('font-awesome/css/font-awesome.css')!!}
        
    <!-- Custom styles for this template -->
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/style-responsive.css')!!}
    {!!Html::style('css/table-responsive.css')!!}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="/" class="logo"><b>Mudate<strong>24</strong></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                  @if (Auth::check()) 
                    <li>
                      <button type="button" class="logout" data-toggle="dropdown">
                        Cerrar sesion <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="datosprincipales">Datos Principales</a></li>
                        <li><a href="datosadicionales">Datos Adicionales</a></li>
                        <li class="divider"></li>
                        <li><a href="auth/logout">Salir</a></li>
                      </ul>
                    </li>
                  @else
                   <li><a class="logout" href="login">Ingresar</a></li>
                  @endif 
                   
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
    <!--sidebar start-->

      <aside>
          <div id="sidebar"  class="nav-collapse " >
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><a href="/"><img src="img/m24copy.png" class="img-circle" width="60"></a></p>
                  @if (Auth::check())  
                    <h5 class="centered"><?php $array = explode("@", Auth::user()->email, 2); echo($array[0])?></h5>
                  @endif
                @if (Auth::check())                                  
                  <li class="sub-menu">
                      <a  href="">
                          <i class="fa fa-sun-o" ></i>
                          <span>Menú Ofertante</span>
                      </a>
                      <ul class="sub">
                          <li><a href="solicitar"><i class="fa fa-share"></i>Ofertar un servicio</a></li>
                          <li><a href="#"><i class="fa fa-check"></i>Mis Servicios solicitados</a></li>
                      </ul>                   
                  </li>
                  <li class="sub-menu">
                      <a  href="">
                          <i class="fa fa-sun-o" ></i>
                          <span>Menú Demandante</span>
                      </a>
                      <ul class="sub">
                          <li><a href="postulaciones"><i class="fa fa-share"></i>Postularme</a></li>
                          <li><a href="mispostulaciones"><i class="fa fa-check"></i>Mis Postulaciones</a></li>
                          <li><a href="#"><i class="fa fa-eye"></i>Mis Servicios realizados</a></li>
                          <li><a href="#"><i class="fa fa-star"></i>Calificaciones</a></li>
                          <li><a href="curriculum"><i class="fa fa-edit"></i>Curriculum</a></li>
                      </ul>                   
                  </li>
                  <li class="sub-menu">
                      <a  href="">
                          <i class="fa fa-sun-o" ></i>
                          <span>Menú Administrador</span>
                      </a>
                      <ul class="sub">
                          <li><a href="#"><i class="fa fa-share"></i>Registrar Nuevo Administrador</a></li>
                          <li><a href="aprousu"><i class="fa fa-check"></i>Aprobar Usuarios</a></li>
                          <li><a href="#"><i class="fa fa-eye"></i>Aprobar Servicios</a></li>
                      </ul>                   
                  </li>
                @endif 
                </ul>
              </div>
            </aside>

    <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      @yield('content')
      <!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2017 - Mudate24
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    
    {!!Html::script('js/jquery.js')!!}<!--OBLIGATORIO-->
    {!!Html::script('js/bootstrap.min.js')!!}<!--OBLIGATORIO-->      
    {!!Html::script('js/jquery.ui.touch-punch.min.js')!!}<!--MODAL-->
    {!!Html::script('js/jquery-ui-1.9.2.custom.min.js')!!}<!--COMPLEMENTAN SIDEBAR-->
    {!!Html::script('js/jquery.dcjqaccordion.2.7.js')!!}<!--COMPLEMENTAN SIDEBAR-->
    {!!Html::script('js/jquery.scrollTo.min.js')!!}<!--COMPLEMENTAN SIDEBAR-->
    {!!Html::script('js/jquery.nicescroll.js')!!}<!--SCROLL PAG-->
    {!!Html::script('js/common-scripts.js')!!}<!--COMPLEMENTAN SIDEBAR-->
    {!!Html::script('js/ajaxcrud/select.js')!!}<!--SELECT-->
    <!--script for this page-->
    @yield('script')
  <script>

      //custom select box
/*
      $(function(){
          $('select.styled').customSelect();
      });
*/
  </script>

  </body>
</html>
