<?php
include('AlumnoController.php');

$search = $_POST['search'];
$controllerAlumno= new AlumnoController();

$controllerAlumno->getAlumno($search);