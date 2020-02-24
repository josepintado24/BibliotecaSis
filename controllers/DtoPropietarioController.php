<?php 

class DtoPropietarioController {
	private $model;

    public function __construct() {
		$this->model = new DptoPropietarioModel();
	}

	public function set( $status_data = array() ) {
		return $this->model->set($status_data);
	}

	public function get( $status_id = '' ) {
		return $this->model->get($status_id);
	}

		public function del( $status_id = '' ) {
		return $this->model->dele($status_id);
	}
}