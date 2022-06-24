<?php
require_once RUTA_RAIZ_PROJECTO . "/Controlador/ControladorBase.php";
class ControladorPersona extends ControladorBase
{
    public function listarAccion()
    {
        $strErrorDesc = '';
        $metodoSolicitud = $_SERVER["REQUEST_METHOD"];
        $arrParametros = $this->getParametros();
        
        if (strtoupper($metodoSolicitud) == 'GET') {
            try {
                $personaModelo = new ModeloPersona();
                $intLimite = 10;
                if (isset($arrParametros["limite"]) && $arrParametros["limite"]) {
                    $intLimite = $arrParametros["limite"];
                }
                $arrPersonas = $personaModelo->getPersonas($intLimite);
                $datosRespuesta = json_encode($arrPersonas);
            } catch (Error $e) {
                $strErrorDesc = $e->getMessage().'Algo salió mal! Por favor contacte a mantenimiento.';
                $strErrorHeader = 'HTTP/1.1 500 Internal Server Error';
            }
        } else {
            $strErrorDesc = 'Metodo inexistente';
            $strErrorHeader = 'HTTP/1.1 422 Unprocessable Entity';
        }
        // send output
        if (!$strErrorDesc) {
            $this->enviarSalida($datosRespuesta, array('Content-Type: application/json', 'HTTP/1.1 200 OK')
            );
        } else {
            $this->enviarSalida(json_encode(array('error' => $strErrorDesc)), 
                array('Content-Type: application/json', $strErrorHeader)
            );
        }
    }
}