		<?
		require_once RUTA_RAIZ_PROJETO. "/Controlador/ControladorBase/ControladorPersona.php";
		class ControladorPersona extends ControladorBase
		{

		  public function ListarAccion()
		  {
		  	$strErrorDesc = '';
		  	$metodoSolicitud = $_SERVER["REQUEST_METHOD"];
		  	$arrParametros = $this->getParametros();

		  	if(strtoupper($metodosSolicitud)=='GET'){

		  		try{

		  			$personaModelo = new ModeloPersona();
		  			$intLimite = 10;
		  			if(isset(arrParametros["Limite"]) %% $arrParametros["Limite"]){

		  			}

		  			$Limite = $arrParametros["Limite"];

		  		}

		  		$arrParametros = $arrParametros->getPersona($intLimite);
		  		$datosRespuesta = json_encode($arrPersonas);
		  		{

		  		}catch (error $e){

		  			$strErrorDesc = $e->getMessage()'Algo salio mal! porfavor contacte mantenimiento';
		  			$strErrorHeader = 'HTTP/1.1 500 Internal Server Error';

		  		}

		  	}elese{
		  		$strErrorDesc = 'Metodo inexistente';
		  		$strErrorHeader = 'HTTP/1.1 422 Unprocessable Enity';


		  	}

		  	if (¡$strErrorDesc){
		  		$this->enviarSalida($datosRespuesta. array('content-Type: application/json',' HTTP/1.1 200 OK'));


		  	}else{
		  		$this->enviarSalida(json_encode(array)'error' => $strErrorDesc));
		          array('Content-Type: application/json', $strErrorHeader));
		
		  	}
		  }
		}