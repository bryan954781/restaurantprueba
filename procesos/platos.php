<?php

require_once("ConectarBD.php");

$mysql= new Conexion();
$conexion = $mysql->get_connection();
$nombre=
$datos = array("nombre"=>$nombre)
$statement= $conexion->prepare("CALL insert_plato");
 ?>
