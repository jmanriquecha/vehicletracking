<?php

namespace App\Models;

use App\Libraries\Core\Mysql;

class EstadoInicial extends Mysql
{
    private $table = "estado_inicial";

    public function getEstadosIniciales()
    {
        $sql = "SELECT * FROM {$this->table}";
        $request = $this->selectAll($sql);
        return $request;
    }
}
