<?php
include('ReservaController.php');
//include('AlumnoController.php');
$reservaController=new ReservaController();


    $code_alumno=$_POST['code_alumno'];
    $code_usuario=$_POST['code_usuario'];
    $options=$_POST['options'];
    $code_reserva=$_POST['code_reserva'];
    $mensaje;
    switch ($options){
        case 'Guardar':
            $mensaje=$reservaController->set($code_alumno,$code_usuario);
            break;
        case 'Eliminar':
            $mensaje=$reservaController->del($code_reserva);
            break;
    }


