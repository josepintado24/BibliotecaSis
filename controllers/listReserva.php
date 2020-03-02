<?php
    include ("../models/conecion.php");

    date_default_timezone_set("America/Lima");
    $time= date("G");

    if (($time>='0') and ($time<='13')){
        $query="SELECT a.nombre_alumno,r.code_alumno,r.fecha_reserva,r.turno, r.code_reserva FROM reserva as r INNER JOIN alumno as a  ON a.code_alumno=r.code_alumno  where  CAST(fecha_reserva AS DATE) = CAST(NOW() AS DATE)  and r.estado_reserva=1 and r.turno='T'";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die('consulta fallida'.mysqli_error($connection));
        }


        while($data = mysqli_fetch_assoc($result)) {
                $areglo['data'][]=array_map("utf8_decode",$data);
        }
        $jsonString=json_encode($areglo);
        echo $jsonString;
        mysqli_free_result($result);
        mysqli_close($connection);
    }else {
        //if(($time>='14') and ($time<='5')){
            $query="SELECT a.nombre_alumno,r.code_alumno,r.fecha_reserva,r.turno, r.code_reserva FROM reserva as r INNER JOIN alumno as a  ON a.code_alumno=r.code_alumno  where  CAST(fecha_reserva AS DATE) = CAST(NOW() AS DATE)  and r.estado_reserva=1 and r.turno='M'";
            $result=mysqli_query($connection,$query);
            if(!$result){
                die('consulta fallida'.mysqli_error($connection));
            }

        while($data = mysqli_fetch_assoc($result)) {
            $areglo['data'][]=array_map("utf8_decode",$data);
        }
        $jsonString=json_encode($areglo);
        echo $jsonString;
        mysqli_free_result($result);
        mysqli_close($connection);
        //}

    }



