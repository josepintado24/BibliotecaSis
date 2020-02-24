<?php 
class UsuarioModel extends Model {

	public function set( $propietario_data = array() ) {
		foreach ($propietario_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "REPLACE INTO usuario(code_usuario,nombre_usuario,tipo_usuario,estado_usuario,password)
                        VALUES ($code_usuario,$nombre_usuario,$tipo_usuario,$estado_usuario,$password)";
		$this->set_query();
	}

	public function get( $code_usuario = '' ) {
		$this->query = ($code_usuario != '')
			?"SELECT * FROM usuario WHERE code_usuario = $code_usuario"
			:"SELECT * FROM usuario";
		
		$this->get_query();
		$num_rows = count($this->rows);
		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}

		return $data;
	}

	public function del( $code_usuario = '' ) {
		$this->query = "DELETE FROM usuario WHERE code_usuario = $code_usuario";
		$this->set_query();
	}
	public function validate_user($password){
	    $this->query="SELECT * FROM usuario where  password=$password";
        $this->get_query();
        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

}