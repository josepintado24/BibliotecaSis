<?php
    include ("../models/conecion.php");

    date_default_timezone_set("America/Lima");
    $time= date("G");

    if ((time>='6') and ($time<='12')){
        $query="select * from reserva where  CAST(fecha_reserva AS DATE) = CAST(NOW() AS DATE)  and estado_reserva=1 and turno='T'";
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
    }else {
        if((time>='14') and ($time<='19')){
            $query="select * from reserva where  CAST(fecha_reserva AS DATE) = CAST(NOW() AS DATE)  and estado_reserva=1 and turno='M'";
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
        }

    }



