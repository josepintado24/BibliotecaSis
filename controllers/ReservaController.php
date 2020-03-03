<?php

include('../models/ReservaModel.php');

class ReservaController {
	private $model;

    public function __construct() {
		$this->model = new ReservaModel();
	}

	public function set( $code_alum ,$code_usu ) {
		return $this->model->set($code_alum ,$code_usu);
	}

	public function get( $code_reserva = '' ) {
		return $this->model->get($code_reserva);
	}

    public function serachReserva( $code_alum) {
        return $this->model->searchReserva($code_alum);
    }

		public function del( $code_reserva = '' ) {
		return $this->model->del($code_reserva);
	}
}