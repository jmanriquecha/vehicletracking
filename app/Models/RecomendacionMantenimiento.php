<?php

namespace App\Models;

use App\Libraries\Core\Mysql;

class RecomendacionMantenimiento extends Mysql
{
    private $table = "recomendacion_mantenimiento";

    public function getRecomendacionMantenimientos()
    {
        $sql = "SELECT * FROM {$this->table}";
        $request = $this->selectAll($sql);
        return $request;
    }
}
