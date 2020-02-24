<?php 
class PropietarioModel extends Model {

	public function set( $propietario_data = array() ) {
		foreach ($propietario_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "REPLACE INTO propietario(pro_dni,pro_nombre,pro_estado,pro_contrasena)
                        VALUES ($pro_dni,$pro_nombre,$pro_estado,$pro_contrasena)";
		$this->set_query();
	}

	public function get( $dni = '' ) {
		$this->query = ($dni != '')
			?"SELECT * FROM propietario WHERE pro_dni = $dni"
			:"SELECT * FROM propietario";
		
		$this->get_query();
		$num_rows = count($this->rows);
		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}

		return $data;
	}

	public function del( $dni = '' ) {
		$this->query = "DELETE FROM propietario WHERE pro_dni = $dni";
		$this->set_query();
	}
	public function validate_user($dni){
	    $this->query="SELECT * FROM propietario where  pro_dni=$dni";
        $this->get_query();
        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

}