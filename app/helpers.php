<?php
if(! function_exists('view')){
    function view($view, $data = ""){
        $datos = $data;
        return new App\Libraries\Core\View($view, $datos);
    }
}
