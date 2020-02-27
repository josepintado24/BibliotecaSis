<?php
$reserva_controller=new ReservaController();
$reserva=$reserva_controller->get();

if(empty($reserva)){
    print ('<h1>No hay Reserva</h1>>');
}else{

    $template='
  <div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Reserva</li>
            </ol>
            
          </div>
          <!--<ul class="navar-nav ml-auto">
                <form class="form-inline my-2 my-lg-0">
                    <input type="search" id="search" class="form-control mr-sm-2" placeholder="Buscar Estudiante">
                    <button class="btn btn-success my-2 my-sm-0" type="submit" >
                    Buscar
                    </button>
                </form>
          </ul>-->
        </div>
        <div class="card my-4" id="resultadoAlumno">
            <div class="card-body">
                <ul id="container">
                
                </ul>
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
              <div class="card-body">
                
                    <form  id="resgitroAlumno_form">
                              <label for="codigo_alumno">Codigo Alumno</label>
                              <input style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" required pattern="[A-Z0-9]+" type="text" maxlength="8" class="form-control" placeholder="Codigo" id="code_alumno">
                             <div class="row">
                               <div class="col-lg-6" ">
                               <br>
                                    <button type="submit" class="btn btn-outline-success  btn-block col-5 toastrDefaultSuccess">Gargar</button> 
                               </div>
                              <div class=" p-2 col-lg-6" id="mensaje-envio"></div></div>
                     </form>
                
                
                
            <div class="card card-warning card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Toastr Examples
                </h3>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-success toastrDefaultSuccess">
                  Launch Success Toast
                </button>
                <button type="button" class="btn btn-info toastrDefaultInfo">
                  Launch Info Toast
                </button>
                <button type="button" class="btn btn-danger toastrDefaultError">
                  Launch Error Toast
                </button>
                <button type="button" class="btn btn-warning toastrDefaultWarning">
                  Launch Warning Toast
                </button>
                <div class="text-muted mt-3">
                  For more examples look at <a href="https://codeseven.github.io/toastr/">https://codeseven.github.io/toastr/</a>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
             
            <div class="item p-4 table-responsive-sm table-responsive-md table-responsive-xl">
                <table class="table table-sm table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>code_reserva</th>
                            <th>code_alumno</th>
                            <th>fecha_reserva</th>
                            <th>estado_reserva</th>  
                            <th>code_usuario</th>
                            <th>Actividad</th>
                        </tr>
                     </thead>';

            $template.='
                    <tbody id="reserva_data">
                        
                    </tbody>
                    
            ';


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

}
print($template);
