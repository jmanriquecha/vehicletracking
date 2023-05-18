<?php

namespace App\Models;

use App\Libraries\Core\Mysql;

class Auth extends Mysql
{
    private $table = "usuarios";
    private $vehiculo;    

    public function showUsuario($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        $data = array(":id" => $id);
        $request = $this->select($sql, $data);
        return $request;
    }

    public function validateUser($data){
        $sql = "SELECT * FROM {$this->table} WHERE email = :email AND password = :pass";
        $data = array(":email" => $data['email'], ":pass" => $data['pass']);
        $request = $this->select($sql, $data);
        return $request;
    }
}
