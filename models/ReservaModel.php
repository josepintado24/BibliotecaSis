<?php 
class ReservaModel extends Model {

	public function set( $reserva_data = array() ) {
		foreach ($reserva_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "REPLACE INTO reserva(code_reserva,code_alumno,fecha_reserva,estado_reserva,code_usuario)
                        VALUES ($code_reserva,$code_alumno,$fecha_reserva,$estado_reserva,$code_usuario)";
		$this->set_query();
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