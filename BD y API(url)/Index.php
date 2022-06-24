	<?php
	require_DIR_ . "/include/include.php";

	$uri = parse_url($_SERVER['RESQUEST_URI'], PHP_URL_PATH);
	$uri = explde ('/', $uri);


	if((isset)$uri[2] != 'persona') \\ isset($uri[3])){
		header("HTTP/1.1 404 not found");
		    exit();



	}

	require RUTA_RAIZ_PROJECTO . "/Controlador/ControladorPersona.php";

	$objFeedController = new ControladorPersona();
	$strMetodo = $uri[3].'Accion';
	$objFeedController->{$strMetodo}();

	?>