<?php

namespace App\Libraries\Core;

use PDO, Exception;

class Conection
{

    public $mbd;

    public function __construct()
    {
        $this->conection();                    
    }

    public function conection()
    {
        $conectionString = "mysql:host=" . DB_HOST . "; dbname=" . DB_DATABASE . "; " .  DB_CHARACTER;
        try {
            $this->mbd = new PDO($conectionString, DB_USER, DB_PASSWORD);
            $this->mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            $this->mbd = $e->getMessage();
            die("<div class='alert alert-danger text-center'><strong>LO SIENTO ESTAMOS PRESENTANDO FALLAS DE CONEXIÓN:</strong> " . /*$this->mbd .*/ "</div>");
        }
        return $this->mbd;
    }
}
