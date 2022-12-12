<?php

$server = 'localhost';
$usuario = 'root';
$contraseña = '';
$basededatos = 'pweb';


$conexion = new mysqli($server, $usuario, $contraseña, $basededatos);
if($conexion->connect_error){
  die("conexion fallida" . $conexion->connect_error);
}

?>