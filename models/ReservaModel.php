<?php
include ('Model.php');
class ReservaModel extends Model {

	public function set($code_alumno ,$code_usuario) {
	    $mensaje=-1;
        date_default_timezone_set("America/Lima");
        $time= date("G");

        if ($this->validate_alumno($code_alumno)>=1){
            $mensaje=1;

            if ($this->searchReserva($code_alumno)<=0){
                if (($time>='6') and ($time<='12')){
                    $this->query = "INSERT INTO reserva (code_reserva, code_alumno, fecha_reserva, estado_reserva, code_usuario, turno) VALUES (
                            NULL, '$code_alumno', current_timestamp(), '1', '$code_usuario','T')";
                    $this->set_query();
                    $mensaje=0;

                }else {
                    $this->query = "INSERT INTO reserva (code_reserva, code_alumno, fecha_reserva, estado_reserva, code_usuario, turno ) VALUES (
                            NULL, '$code_alumno', current_timestamp(), '1', '$code_usuario','M')";
                    $this->set_query();
                    $mensaje=0;
                }

            }

       }
        echo $mensaje;
        return $mensaje;

	}

	public function get( $code_reserva = '' ) {
		$this->query = ($code_reserva != '')
			?"SELECT * FROM reserva WHERE code_reserva = $code_reserva"
			:"SELECT * FROM reserva";
		
		$this->get_query();
		$num_rows = count($this->rows);
		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}

		return $data;
	}
    public function searchReserva($code_alum) {
        $this->rows=null;
        $this->query = "select * from reserva where code_alumno='$code_alum' and CAST(fecha_reserva AS DATE) = CAST(NOW() AS DATE)";

        $this->get_query();
        //echo count($this->rows);
        return count($this->rows);
    }
	public function del( $code_reserva = '' ) {
		$this->query = "UPDATE `reserva` SET `estado_reserva` = '0' WHERE `reserva`.`code_reserva` = '$code_reserva'";
		$this->set_query();
	}
	public function validate_alumno($code_alumno){
        $this->query ="select * from alumno where code_alumno='$code_alumno'";
        $this->get_query();
        return count($this->rows);
    }

}