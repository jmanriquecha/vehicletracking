<?php

namespace App\Models;

use App\Libraries\Core\Mysql;

class Mantenimiento extends Mysql
{
    private $table = "mantenimiento";
    private $vehiculo;    

    public function insertMantenimiento($data){
        $sql = "INSERT INTO {$this->table} (vehiculo, tipo, fecha, precio, observacion, kilometros_actuales, created_at, created_user) 
                        VALUES (:vehiculo, :tipo, :fecha, :precio, :observacion, :kilometros_actuales, :created_at, :created_user)";

        $data = array(":vehiculo" => $data['vehiculo'], ":tipo" => $data['tipo'], ":fecha" => $data['fecha'],
                    ":precio" => $data['precio'], ":observacion" => $data['observacion'], ":kilometros_actuales" => $data['kilometros_actuales'],
                    ":created_at" => DATETIME, ":created_user" => USER_ID);
        $request = $this->insert($sql, $data);
        return $request;
    }

    public function getMantenimientos()
    {
        $sql = "SELECT * FROM {$this->table} ORDER BY created_at DESC";
        $request = $this->selectAll($sql);
        return $request;
    }

    public function showMantenimiento($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        $data = array(":id" => $id);
        $request = $this->select($sql, $data);
        return $request;
    }

    public function deleteMantenimiento($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $data = array(":id" => $id);
        $request = $this->delete($sql, $data);
        return $request;
    }

    public function updateMantenimiento($data){
        $sql = "UPDATE {$this->table} SET vehiculo=:vehiculo, tipo=:tipo, fecha=:fecha, precio=:precio, observacion=:observacion, kilometros_actuales=:kilometros_actuales, updated_at=:updated_at, updated_user=:updated_user WHERE id = :id";

        $data = array(":id" => $data['id'], ":vehiculo" => $data['vehiculo'], ":tipo" => $data['tipo'], ":fecha" => $data['fecha'],
        ":precio" => $data['precio'], ":observacion" => $data['observacion'], ":kilometros_actuales" => $data['kilometros_actuales'],
                    ":updated_at" => DATETIME, ":updated_user" => USER_ID);
        $request = $this->update($sql, $data);
        return $request;
    }
    
    public function getUltimoMantenimiento($tipo)
    {
        $sql = "SELECT * FROM {$this->table} WHERE tipo=1 ORDER BY fecha DESC LIMIT 1";
        $request = $this->selectAll($sql);
        return $request;
    }
}
