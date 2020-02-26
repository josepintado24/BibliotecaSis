<?php
include ('Model.php');
class ReservaModel extends Model {

	public function set($code_alum ,$code_usu) {
        $code_alumno=$code_alum;
        $code_usuario=$code_usu;
        $mensaje=false;
        if ($this->searchReserva($code_alumno)<=0){
            $this->query = "INSERT INTO reserva (code_reserva, code_alumno, fecha_reserva, estado_reserva, code_usuario) VALUES (
                        NULL, '$code_alumno', current_timestamp(), '1', '$code_usuario')";
            $this->set_query();
            $mensaje=true;
        }
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
    public function searchReserva( $code_alum) {
        $this->query = "select * from reserva where code_alumno='$code_alum' and CAST(fecha_reserva AS DATE) = CAST(NOW() AS DATE)";

        $this->get_query();
        $num_rows = count($this->rows);

        echo $num_rows;
        return $num_rows;
    }
	public function del( $code_reserva = '' ) {
		$this->query = "DELETE FROM reserva WHERE code_reserva = $code_reserva";
		$this->set_query();
	}
	public function validate_reserva($code_alumno){
	    $this->query="SELECT * FROM reserva where  code_alumno=$code_alumno";
        $this->get_query();
        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

}