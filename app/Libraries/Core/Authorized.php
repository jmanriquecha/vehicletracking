<?php

namespace App\Libraries\Core;

class Authorized{
    public $user;

    public function __construct(){
        session_start();
        $this->user = $_SESSION['user'];
    }

    public function authorization(){
        if(!isset($this->user)){
            return header("location: ". RUTA . "/auth/login");
        }
    }

    public function getUser(){
        return $this->user;
    }
}