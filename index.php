<?php
require_once ('./controllers/Autoload.php');
$auload=new Autoload();

$router=isset($GET['r']) ?$_GET['r']:'home';
$ciudadverde=new Router($router);
//$a=new PropietarioModel();
