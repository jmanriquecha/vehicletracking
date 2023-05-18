<?php

namespace App\Models;

use App\Libraries\Core\Mysql;

class Recorrido extends Mysql
{
    private $table = "kilometraje";
    private $vehiculo;    

    public function insertRecorrido($data){
        $sql = "INSERT INTO {$this->table} (vehiculo, origen, destino, salida, observacion, created_at, created_user) 
                        VALUES (:vehiculo, :origen, :destino, :salida, :observacion, :created_at, :created_user)";

        $data = array(":vehiculo" => $data['vehiculo'], ":origen" => $data['origen'], ":destino" => $data['destino'],
                    ":salida" => $data['fechaSalida']." ".$data['horaSalida'].':'.$data['segundoSalida'], ":observacion" => $data['observacion'],
                    ":created_at" => DATETIME, ":created_user" => USER_ID    
                    );
        $request = $this->insert($sql, $data);
        return $request;
    }

    public function getRecorridos()
    {
        $sql = "SELECT * FROM {$this->table} ORDER BY salida DESC";
        $request = $this->selectAll($sql);
        return $request;
    }

    public function showRecorrido($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        $data = array(":id" => $id);
        $request = $this->select($sql, $data);
        return $request;
    }

    public function deleteRecorrido($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $data = array(":id" => $id);
        $request = $this->delete($sql, $data);
        return $request;
    }

    public function updateRecorrido($data){
        $sql = "UPDATE {$this->table} SET vehiculo=:vehiculo, cantidad=:cantidad, origen=:origen, destino=:destino, salida=:salida, llegada=:llegada, observacion=:observacion, updated_at=:updated_at, updated_user=:updated_user WHERE id = :id";

        $data = array(":id" => $data['id'], ":vehiculo" => $data['vehiculo'], ":cantidad" => $data['cantidad'], ":origen" => $data['origen'], ":destino" => $data['destino'],
                    ":salida" => $data['fechaSalida']." ".$data['horaSalida'].':'.$data['segundoSalida'], ":llegada" => $data['fechaLlegada']." ".$data['horaLlegada'].':'.$data['segundoLlegada'], ":observacion" => $data['observacion'],
                    ":updated_at" => DATETIME, ":updated_user" => USER_ID    
                    );
        $request = $this->update($sql, $data);
        return $request;
    }

    public function finalizarRecorrido($data){
        $sql = "UPDATE {$this->table} SET cantidad=:cantidad, llegada=:llegada WHERE id = :id";
        $data = array(":id" => $data['id'], ":cantidad" => $data['cantidad'], ":llegada" => $data['fechaLlegada']." ".$data['horaLlegada'].':'.$data['segundoLlegada']);
        $request = $this->update($sql, $data);
        return $request;
    }
}
