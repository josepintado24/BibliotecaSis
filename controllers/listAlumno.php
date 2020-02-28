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


        while($data = mysqli_fetch_assoc($result)) {
                $areglo['data'][]=array_map("utf8_decode",$data);
        }
        $jsonString=json_encode($areglo);
        echo $jsonString;
        mysqli_free_result($result);
        mysqli_close($connection);
    }else {
        //if((time>='14') and ($time<='5')){
            $query="select * from reserva where  CAST(fecha_reserva AS DATE) = CAST(NOW() AS DATE)  and estado_reserva=1 and turno='M'";
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



