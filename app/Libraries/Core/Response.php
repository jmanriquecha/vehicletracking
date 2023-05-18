<?php

namespace App\Libraries\Core;
use App\Http\Controllers\ErrorController;

class Response
{
    public function send($controller, $method, $params)
    {
        // Comprobamos que el archivo del controlador exista
        $fileController = __DIR__ . "/../../Http/Controllers/{$controller}.php";
        $class = "App\Http\Controllers\\{$controller}";

        if (file_exists($fileController)) { // Cargamos el archivo del controlador
            require $fileController;
            if (class_exists($class)) {
                $controller = new $class();
                if (method_exists($controller, $method)) { //Si existe el método solicitado lo cargamos
                    $controller->{$method}($params);
                } else {
                    // No existe el metódo
                    $this->error();
                }
            } else {
                // No existe la clase
                $this->error();
            }
        } else {
            // No existe el controllador
            $this->error();
        }
    }

    public function error(){
        return $error = new ErrorController();
    }
}
