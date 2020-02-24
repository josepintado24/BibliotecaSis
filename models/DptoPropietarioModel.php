<?php 
class DptoPropietarioModel extends Model {

	public function set( $dotPropietario_data = array() ) {
		foreach ($dotPropietario_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "REPLACE INTO propietarioxdepartamento(dni, numdepartamento)
                        VALUES ($dni, $numdepartamento)";
		$this->set_query();
	}

	public function get( $dni = '' ) {
		$this->query = ($dni != '')
			?"SELECT * FROM propietarioxdepartamento WHERE dni = $dni"
			:"SELECT * FROM propietarioxdepartamento";
		
		$this->get_query();
		$num_rows = count($this->rows);
		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}

		return $data;
	}

	public function del( $dni = '' ) {
		$this->query = "DELETE FROM propietarioxdepartamento WHERE dni = $dni";
		$this->set_query();
	}


}