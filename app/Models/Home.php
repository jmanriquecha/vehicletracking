<?php

namespace App\Models;

use App\Libraries\Core\Mysql;

class Home extends Mysql
{
    public function getUsuario($id)
    {
        $sql = "SELECT id, nombre, apellido FROM usuarios  WHERE id = :id";
        $data = array(":id" => $id);
        $request = $this->select($sql, $data);
        return $request;
    }
}
