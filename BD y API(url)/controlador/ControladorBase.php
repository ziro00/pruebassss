		<?
		class ControladorBase 
		{

			public function_call($nombre,$argumentos)
			{

				$this->enviarSalida('',array('HTTP/1.1 404 Not found'));


			}

			protected function getSegmentosURI()
			{

				$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
				$uri = explode('/', $uri);


			return $uri;

			}

			protected function getParametros()
			{
	          
	          header_remove('set-Cookie');

	          if(is_array($httpHeader)&& count($httpHeader)){

	          	foreach ($httpHeader as $httpHeader) {
	          		
	          	}
	          }
	             echo $datos;
	             exit;
			}
		}