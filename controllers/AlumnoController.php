<?php 
include ('../models/AlumnoModel.php');
class AlumnoController {
	private $model;

    public function __construct() {
		$this->model = new AlumnoModel();
	}

	public function set( $propietario_data1, $propietario_data) {
		return $this->model->set($propietario_data);
	}

	public function get( $code_alumno = '' ) {
		return $this->model->get($code_alumno);
	}
    public function getAlumno( $code_alumno = '' ) {
        return $this->model->getAlumno($code_alumno);
    }

		public function del( $code_alumno = '' ) {
		return $this->model->dele($code_alumno);
	}
}