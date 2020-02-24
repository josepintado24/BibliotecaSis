<?php 

class UsuarioController {
	private $model;

    public function __construct() {
		$this->model = new UsuarioModel();
	}

	public function set( $code_alum ,$code_alum) {
		return $this->model->set($code_alum);
	}

	public function get( $code_alumno = '' ) {
		return $this->model->get($code_alumno);
	}

		public function del( $code_alumno = '' ) {
		return $this->model->dele($code_alumno);
	}
}