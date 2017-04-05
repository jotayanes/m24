                <form class="form-modal" method="POST" action="registro">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Registra tu Cuenta aquí</h4>
                          </div>
                          <div class="modal-body" >
                            <div class="box-body">
                              <div class="col-xs-12">
                                <div class="col-xs-5 col-md-offset-1">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <input type="hidden" class="form-control" id="id" placeholder="">
                                  <label for="exampleInputEmail1">Nombre</label>
                                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Pablito">
                                </div>
                                <div class="col-xs-5 col-md-offset-1">
                                  <label for="exampleInputEmail1">Apellido</label>
                                  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ej: Picapiedra" >
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <div class="col-xs-5 col-md-offset-1">
                                  <label for="exampleInputEmail1">Documento de identidad</label>
                                  <input type="text" class="form-control" id="documento" name="documento" placeholder="Ej: V12345678" >
                                </div>
                                <div class="col-xs-5 col-md-offset-1">
                                  <label for="exampleInputEmail1">Telefono movil</label>
                                  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ej: 0412 -010-00-00">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <div class="col-xs-5 col-md-offset-1">
                                  <label for="exampleInputEmail1">Correo</label>
                                  <input type="text" class="form-control" id="correo" name="correo" placeholder="Ej: nombre@ejemplo.com" >
                                </div>
                                <div class="col-xs-5 col-md-offset-1">
                                  <label for="exampleInputEmail1">Contraseña</label>
                                  <input type="text" class="form-control" id="clave" name="clave" placeholder="Entre 6 y 20 caracteres">
                                </div>
                              </div>                                 
                              <div class="col-xs-12">
                              </div>                                   
                              <div class="col-xs-12">
                              </div>  
                              <div class="col-xs-12">
                              </div>
                              <div class="col-xs-12">
                              </div>                                   
                              <div class="col-xs-12">
                              </div>  
                              <div class="col-xs-12">
                              </div>                                                                                              
                            </div> 
                          </div>
                          <div class="modal-footer">
                          <CENTER>
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                              <button class="btn btn-theme" type="submit">Registrarme</button>
                          </CENTER>
                          </div>
                      </div>
                  </div>
                </form>                  
