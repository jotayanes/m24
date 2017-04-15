@extends('layouts.schemalogin')

  @section('content') 
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalRegistro" class="modal fade">
        @include('login.registro')  
      </div>

    <div id="login-page">
      <div class="container">
      
          <form class="form-login" action="login" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <h2 class="form-login-heading">Inicia Sesión</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo" autofocus>
                <br>
                <input type="password" class="form-control" name="clave" id="clave" placeholder="Contraseña">
                <label class="checkbox">
                    <span class="pull-right">
                        <a data-toggle="modal" href="login.html#myModal"> ¿Olvidaste tu Contraseña?</a>
    
                    </span>
                </label>
                <div class="login-social-link centered">
                    <button class="btn btn-twitter" type="submit"><i class="fa fa-lock"></i> Ingresar</button>
                    <button class="btn btn-twitter" type="submit"><i class="fa fa-arrow-left"></i> Volver</a></button>
                </div>
                <hr>
                
                <div class="registration">
                    ¿No tienes cuenta?<br/>
                    <a data-toggle="modal" href="#modalRegistro">
                        ¡Crea una! Registrate
                    </a>
                </div>
    
            </div>
    
              <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">¿Olvidaste tu Contraseña?</h4>
                          </div>
                          <div class="modal-body">
                              <p>Ingresa tu correo para restaurar tu contraseña</p>
                              <input type="text" name="email" placeholder="Correo" autocomplete="on" class="form-control placeholder-no-fix">
    
                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                              <button class="btn btn-theme" type="button">Enviar</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- modal -->
    
          </form>     
      
      </div>
    </div>
  @parent 
@endsection   