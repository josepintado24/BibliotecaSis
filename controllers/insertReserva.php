<?php
include('ReservaController.php');
$reservaController=new ReservaController();

if(($_POST['code_alumno'])){


    $code_alumno=$_POST['code_alumno'];

    $code_usuario=$_POST['code_usuario'];
    $mensaje=$reservaController->set($code_alumno,$code_usuario);

}