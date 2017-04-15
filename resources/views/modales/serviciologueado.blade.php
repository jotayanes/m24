                <form class="form-modal" method="POST" action="lista">
                	 {!! csrf_field() !!}
                    <input type="hidden" name="token" id="token" value="{{ csrf_token() }}">
                    <input type="hidden" class="form-control" id="id" placeholder="">
                  	<div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Información del sercivio <b  id="detalle"></b></h4>
                          </div>
                        
                          <div class="modal-body" >
                            <div class="box-body">

                              <div class="col-xs-12">
                                <div class="col-xs-5 col-md-offset-1">              
                                  <label for="">Servicio: <b  style="color:#14aabf" id="serv"></b></label>   
                                </div>                              
                                <div class="col-xs-5 col-md-offset-1">
                                  <label for="">Tipo: <b  style="color:#14aabf" id="tip"></b></label>        
                                </div>
                              </div>

                            <div class="col-xs-12">
                                <div class="col-xs-5 col-md-offset-1">              
                                  <label for="">Descripción del Servicio: <b  style="color:#14aabf" id="descrip"></b></label>                             
                                </div>                              
                                <div class="col-xs-5 col-md-offset-1">
                                  <label for="">Información Adicional: <b  style="color:#14aabf" id="informacion"></b></label>           
                                </div>
                            </div>  

                            <div class="col-xs-12">
                                <div class="col-xs-5 col-md-offset-1">              
                                  <label for="">Pais: <b  style="color:#14aabf" id="pais"></b></label>                             
                                </div>                              
                                <div class="col-xs-5 col-md-offset-1">
                                  <label for="">Estado: <b  style="color:#14aabf" id="estado"></b></label>           
                                </div>
                             </div> 

                            <div class="col-xs-12">
                                <div class="col-xs-5 col-md-offset-1">              
                                  <label for="">Municipio:  <b  style="color:#14aabf" id="municipio"></b></label>                             
                                </div>                              
                                <div class="col-xs-5 col-md-offset-1">
                                  <label for="">Parroquia:  <b  style="color:#14aabf" id="parroquia"></b></label>           
                                </div>
                            </div> 

                            <div class="col-xs-12">
                                <div class="col-xs-5 col-md-offset-1">              
                                  <label for="">Dirección: <b  style="color:#14aabf" id="direc"></b></label>                             
                                </div>                              
                            </div> 
                                                                                                                           
                            </div> 
                          </div>
                          <div class="modal-footer">
                          <CENTER>
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                              <button class="btn btn-theme" type="submit">Postularme</button>
                          </CENTER>
                          </div> 
                      </div>
                  </div>
                </form>