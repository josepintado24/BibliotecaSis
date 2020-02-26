<?php
    include ("../models/conecion.php");
    $query='select * from reserva';
    $result=mysqli_query($connection,$query);
    if(!$result){
        die('consulta fallida'.mysqli_error($connection));
    }

    $json=array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'code_reserva'  => $row['code_reserva'],
            'code_alumno'  => $row['code_alumno'],
            'fecha_reserva'  => $row['fecha_reserva'],
            'estado_reserva'  => $row['estado_reserva'],
            'code_usuario'  => $row['code_usuario']

        );

    }
    $jsonString=json_encode($json);
    echo $jsonString;
