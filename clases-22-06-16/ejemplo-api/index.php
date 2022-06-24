<?php
require __DIR__ . "/include/include.php";
 
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );


if ((isset($uri[2]) && $uri[2] != 'persona') || !isset($uri[3])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}
 
require RUTA_RAIZ_PROJECTO . "/Controlador/ControladorPersona.php";
 
$objFeedController = new ControladorPersona();
$strMetodo = $uri[3] . 'Accion';
$objFeedController->{$strMetodo}();
?>