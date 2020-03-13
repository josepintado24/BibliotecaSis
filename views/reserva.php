<?php
    $template='
  <div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <section class="content ">
      <div class="container-fluid">
        <div class="row">
          <!-- Input addon -->
            <div class="card card-info col-lg col-md-11 col-sm-11">
              <div class="card-header">
                <h3 class="card-title">Reserva</h3>
              </div>
              <div>
                <form id="frmEliminarReserva" action="" method="POST">
                    <input type="hidden" id="code_reserva" name="code_reserva" value="">
                    <input type="hidden" id="opcion" name="opcion" value="Eliminar">
                    <!-- Modal -->
                    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="modalEliminarLabel">Eliminar Usuario</h4>
                                </div>
                                <div class="modal-body">							
                                    ¿Está seguro de eliminar al usuario?<strong data-name=""></strong>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="cancelReserva" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                </form>
	          </div>
              
              
              <div class="card-body">
                
                    <form  id="frmReserva" method="POST">
                              <label for="codigo_alumno">Codigo Alumno</label>
                              <input style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" required pattern="[A-Z0-9]+" type="text" maxlength="8" class="form-control" placeholder="Codigo" id="codeAlumno">
                             <div class="row">
                               <div class="col-lg-6 pt-3" >
                               <br>
                                   <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                               </div>
                              <div class=" pt-2 col-lg-6" id="mensaje-envio"></div></div>
                     </form>
              </div>
             <div class="item p-4 table-responsive-sm table-responsive-md table-responsive-xl ">
                <table class="table table-sm table-striped " cellspacing="0" width="100%" id="contenidoReserva">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>código Reserva</th>
                            <th>alumno</th>
                            <th>código</th>
                            <th>fecha y hora</th>  
                            <th>turno a asistir</th>
                            <th>control</th>
                        </tr>
                     </thead>';

    $template.='</table>
   <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
        </div>
      </div>
    </section>
  </div>

';

print($template);
