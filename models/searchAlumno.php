<?php

include('conecion.php');
$search = $_POST['search'];
 if(!empty($search)) {
    $query = "SELECT * FROM alumno WHERE nombre_alumno LIKE '$search%'";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query Error' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'code_alumno' => $row['code_alumno'],
            'nombre_alumno' => $row['nombre_alumno'],
            'numero_expediente' => $row['numero_expediente'],
            'turno' => $row['turno'],
            'estado' => $row['estado']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;


}