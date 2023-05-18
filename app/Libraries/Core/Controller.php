<?php

namespace App\Libraries\Core;

use App\Libraries\Core\Request;
use App\Libraries\Core\Authorized;

class Controller extends Request
{
    public function __construct()
    {
        parent::__construct();
        $this->authorization = new Authorized();
        $this->loadModel();

    }

    public function loadModel()
    { // Carga modelos
        $fileModel = __DIR__ . "/../../Models/{$this->getClass()}.php";
        $class = "App\Models\\{$this->getClass()}";
        if (file_exists($fileModel)) {
            require $fileModel;
            $this->model = new $class();
        } else {
            require_once error404();
        }
    }
}
