	<?
	require_once RUTA_RAIZ_PROYECTO. "/ModeloPersona/BaseDeDatos.php";


	class ModeloPersona extends BaseDeDatos
	{
		public function getPersonas($limite){


		}

	           return $this->seleccionar("SELECT * FROM persona ORDER BY ci ASC LIMIT? , ^["i",$limite]");
	           
	}