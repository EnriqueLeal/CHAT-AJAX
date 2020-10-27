<?php

$servidor = "localhost";
$usuario= "root";
$password = "enriquepro123";
$base_datos = "appchat";



$conexion = new mysqli($servidor, $usuario, $password, $base_datos);


function formatearFecha($fecha){
	return date('g:i a', strtotime($fecha));
}


?>