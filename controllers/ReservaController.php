<?php 

class ReservaController {
	private $model;

    public function __construct() {
		$this->model = new ReservaModel();
	}

	public function set( $rserva_data = array() ) {
		return $this->model->set($rserva_data);
	}

	public function get( $code_reserva = '' ) {
		return $this->model->get($code_reserva);
	}

		public function del( $code_reserva = '' ) {
		return $this->model->dele($code_reserva);
	}
}