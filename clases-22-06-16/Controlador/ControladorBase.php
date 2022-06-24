<?php
class ControladorBase
{
    public function __call($nombre, $argumentos)
    {
        $this->enviarSalida('', array('HTTP/1.1 404 Not Found'));
    }
 
    protected function getSegmentosURI()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = explode( '/', $uri );
 
        return $uri;
    }
 
    protected function getParametros()
    {
        parse_str($_SERVER['QUERY_STRING'], $consulta);
        return $consulta;
    }
 
    protected function enviarSalida($datos, $httpHeaders=array())
    {
        header_remove('Set-Cookie');
 
        if (is_array($httpHeaders) && count($httpHeaders)) {
            foreach ($httpHeaders as $httpHeader) {
                header($httpHeader);
            }
        } 
        echo $datos;
        exit;
    }
}