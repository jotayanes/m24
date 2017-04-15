                <form class="form-modal" method="POST" action="lista">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">BUSCAR</h4>
                          </div>
                        
                          <div class="modal-body" >
                            <div class="box-body">
                              <div class="col-xs-12">
                                <div class="col-xs-5 col-md-offset-1">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="token" id="token" value="{{ csrf_token() }}">
                                  <input type="hidden" class="form-control" id="id" placeholder="">
                                  <label for="">Empieza su búsqueda: </label>
                                    <select class="form-control" id="SER"  name="SER"></select>
                                </div>                              
                                <div class="col-xs-5 col-md-offset-1">
                                  <label for="exampleInputEmail1"></label>
                                  
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
                              <button class="btn btn-theme" type="submit">Buscar</button>
                          </CENTER>
                          </div> 
                      </div>
                  </div>
                </form>