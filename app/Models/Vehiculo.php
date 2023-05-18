<?php

namespace App\Models;

use App\Libraries\Core\Mysql;

class Vehiculo extends Mysql
{
    private $table = "vehiculo";

    public function getVehiculos()
    {
        $sql = "SELECT * FROM {$this->table}";
        $request = $this->selectAll($sql);
        return $request;
    }
}
