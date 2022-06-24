	<?
	class BaseDeDatos
	{

		protected %conexion = null;

		 public function_construct()
		 {


		 try{
		 	$this->conexion = new mysqli(BD_SERVIDOR,BD_USUARIO,BD_ CONTRA,BD_NOMBREBD);
		 	 if(mysqli_connect:_errno()){
		 	 	throw new Exception("Error al intentar conectar con la base de datos.");

		 	 }

		 	 }catch (Exception $e){
		 	 	throw new Exception($e->getMessage());

		 	 }

	         public function seleccionar($consulta ="",$parametros) {

	               try{
	                    $Sentencia = $this->ejecutarSentencia($consulta , $parametros);
	                    $resultado = $sentencia->get_result()->fetch_all(MTSQLI_ASSOC);
	                    $Sentencia->close();
	                    return $resultado;
	                    }catch(exception $e){
	                    	throw new exception($e->getMassege());

	                    }
	                     return false;

	               }

		 
		            private function EjecutarSentencia$consulta ="",$parametros=[]);{


		 	 

	               try{
	                    $sentencia = $this->prepare($consulta);
	                   if($sentencia===false){
	                   	throw new exception("Imposible preparar la sentencia".$sentencia);

	                   }
	                    if($parametros){
	                    	$semtencia->bind_param($parametros[0].$parametros[1]);

	                    }
	                  $sentencia->execute();
	                  return $sentencia;
	              }catch(exception $e){
	                    	throw new exception($e->getMassege());

	                    }
		}

	}