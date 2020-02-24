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
            <h1>Reservar </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Reserva</li>
            </ol>
            
          </div>
          <ul class="navar-nav ml-auto">
                <form class="form-inline my-2 my-lg-0">
                    <input type="search" id="search" class="form-control mr-sm-2" placeholder="Buscar Estudiante">
                    <button class="btn btn-success my-2 my-sm-0" type="submit" >
                    Buscar
                    </button>
                </form>
            </ul>
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
                
                

                <p>Ingrese codigo alumno</p>
                <div class="input-group input-group-sm">
                <form action="" id="resgitroAlumno">
                      <input type="text" class="form-control" placeholder="Codigo Estudiante" id="code_alumno">
                      <span class="input-group-append">
                        <button type="submit" class="btn btn-info btn-flat">Gargar</button>
                      </span>
                  </form>
                </div>
                
                
                
             
            <div class="item p-4">
                <table class="table ">
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
                        <tr>
                             <th></th>
                             <td></td>
                             <td></td>
                             <td></td>  
                             <td></td>
                             <td>
                                <form action="" method="POST">
                                    <input type="hidden" name="r" value="reserva-delete">
                                    <input type="hidden" name="code_reserva" value="">
                                    <input type="hidden" name="code_reserva" value="">
                                    <input type="button" type="submit" value="Eliminar">
                                </form> 
                            </td> 
                        </tr>
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
