<?php 

class UsuarioController {
	private $model;

    public function __construct() {
		$this->model = new UsuarioModel();
	}

	public function set( $usuario_data = array() ) {
		return $this->model->set($usuario_data);
	}

	public function get( $code_alumno = '' ) {
		return $this->model->get($code_alumno);
	}

		public function del( $code_alumno = '' ) {
		return $this->model->dele($code_alumno);
	}
}