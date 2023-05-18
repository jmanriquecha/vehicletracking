<?php

namespace App\Libraries\Core;

use App\Libraries\Core\Response;

class Request
{
    private $url;
    private $controller;
    private $method;
    private $params = "";
    private $response;
    private $iniUrl; //Modificar según la pocision de la url donde se ejecute la app

    /**
     * Ejemplo 1: http://developer/
     * En este caso es la posición 1
     * Se asignar el valor 1 a $iniUrl = 1
     * 
     * Ejemplo 2: http://developer/pro/appweb/
     * En este caso es la posición 3
     * Se debe asignar el valor 3 a $iniUrl = 3
     */

    public function __construct()
    {
        $this->url = explode('/', $_SERVER["REQUEST_URI"]);
        $this->setNivelIniUrl();
        $this->setController();
        $this->setMethod();
        $this->setParams();
        $this->response = new Response();
    }

    public function setNivelIniUrl(){
        $ruta = explode('/', RUTA);
        $this->iniUrl = count($ruta);
    }

    public function setController()
    {
        $this->controller = empty($this->url[$this->iniUrl]) ? 'home' : $this->url[$this->iniUrl];
    }

    public function setMethod()
    {
        $this->method = empty($this->url[$this->iniUrl + 1]) ? 'index' : $this->url[$this->iniUrl + 1];
    }

    public function setParams()
    {
        if (isset($this->url[($this->iniUrl + 1)])) {
            if (!empty($this->url[$this->iniUrl + 2])) {
                for ($i = $this->iniUrl + 2; $i < count($this->url); $i++) {
                    $this->params .= $this->url[$i] . ",";
                }
            }
        }
    }

    public function getClass()
    {
        return ucfirst($this->controller);
    }

    public function getController()
    {
        return "{$this->getClass()}Controller";
    }

    public function getMethod()
    {
        $method = ucfirst($this->method);
        return $method;
    }

    public function getParams()
    {
        $params = trim($this->params, ",");
        $params = explode(",", $params);
        return $params;
    }

    public function send()
    {
        // Method requerido en el public/index.php
        $controller = $this->getController();
        $method = $this->getMethod();
        $params = $this->getParams();

        $response = new $this->response;
        $response->send($controller, $method, $params);
    }
}
