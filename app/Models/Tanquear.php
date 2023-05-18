<?php

namespace App\Models;

use App\Libraries\Core\Mysql;

class Tanquear extends Mysql
{
    private $table = "carga_combustible";
    private $vehiculo;    

    public function insertTanqueada($data){
        $sql = "INSERT INTO {$this->table} (vehiculo_id, combustible_id, cantidadGalon, valorGalon, valorTotal, fecha, kilometrosActuales, estacionServicio, direccion, created_at, created_user) 
                        VALUES (:vehiculo_id, :combustible_id, :cantidadGalon, :valorGalon, :valorTotal, :fecha, :kilometrosActuales, :estacionServicio, :direccion, :created_at, :created_user)";

        $data = array(":vehiculo_id" => $data['vehiculo_id'], ":combustible_id" => $data['combustible_id'], ":cantidadGalon" => $data['cantidadGalon'],
                    ":valorGalon" => $data['valorGalon'], ":valorTotal" => $data['valorTotal'], ":fecha" => $data['fecha'], ":kilometrosActuales" => $data['kilometrosActuales'],
                    ":estacionServicio" => $data['estacionServicio'], ":direccion" => $data['direccion'], ":created_at" => DATETIME, ":created_user" => USER_ID);
        $request = $this->insert($sql, $data);
        return $request;
    }

    public function getTanqueos()
    {
        $sql = "SELECT * FROM {$this->table} ORDER BY fecha DESC";
        $request = $this->selectAll($sql);
        return $request;
    }

    public function showTanqueo($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        $data = array(":id" => $id);
        $request = $this->select($sql, $data);
        return $request;
    }

    public function deleteTanqueo($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $data = array(":id" => $id);
        $request = $this->delete($sql, $data);
        return $request;
    }

    public function updateTanqueo($data){
        $sql = "UPDATE {$this->table} SET vehiculo_id=:vehiculo_id, combustible_id=:combustible_id, cantidadGalon=:cantidadGalon, valorGalon=:valorGalon, valorTotal=:valorTotal,
        fecha=:fecha, kilometrosActuales=:kilometrosActuales, estacionServicio=:estacionServicio, direccion=:direccion, updated_at=:updated_at, updated_user=:updated_user WHERE id = :id";

        $data = array(":id" => $data['id'], ":vehiculo_id" => $data['vehiculo_id'], ":combustible_id" => $data['combustible_id'], ":cantidadGalon" => $data['cantidadGalon'],
        ":valorGalon" => $data['valorGalon'], ":valorTotal" => $data['valorTotal'], ":fecha" => $data['fecha'], ":kilometrosActuales" => $data['kilometrosActuales'],
        ":estacionServicio" => $data['estacionServicio'], ":direccion" => $data['direccion'], ":updated_at" => DATETIME, ":updated_user" => USER_ID );
        $request = $this->update($sql, $data);
        return $request;
    }
}
