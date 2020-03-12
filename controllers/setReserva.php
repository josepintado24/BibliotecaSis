<?php
include('ReservaController.php');
$reservaController=new ReservaController();

$code_usuario = (isset($_POST['code_usuario'])) ? $_POST['code_usuario'] : '';
$code_alumno = (isset($_POST['code_alumno'])) ? $_POST['code_alumno'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$code_reserva = (isset($_POST['code_reserva'])) ? $_POST['code_reserva'] : '';


switch ($opcion) {
    case 1:
        $reservaController->set($code_alumno,$code_usuario);
        //$data=$reservaController->get();
        break;
    case 3:
        $reservaController->del($code_reserva);
        break;
    case 4:
        $data=$reservaController->get();
        print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
        break;
}




