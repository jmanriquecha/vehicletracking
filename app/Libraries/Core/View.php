<?php

namespace App\Libraries\Core;

class View extends Request
{
    public function __construct($view, $data){
        $this->view = $view;
        $this->data = $data;    
        $this->execView($data);
    }

    public function getView(){
        return $this->view;
    }

    public function execView($data)
    {   
        $view = str_replace('.', '/', $this->getView());
        if ($view == "home") {
            require_once __DIR__ . "/../../../resources/Views/home.php";
        } else {
            require_once __DIR__ . "/../../../resources/Views/{$view}.php";
        }
    }
}
