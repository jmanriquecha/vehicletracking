<?php

namespace App\Models;

use App\Libraries\Core\Mysql;

class Tmantenimiento extends Mysql
{
    private $table = "tipo_mantenimiento";

    public function insertTipo($data){
        $sql = "INSERT INTO {$this->table} (tipo, created_at, created_user) 
                        VALUES (:tipo, :created_at, :created_user)";
        $data = array(":tipo" => $data['tipo'], ":created_at" => DATETIME, ":created_user" => USER_ID);
        $request = $this->insert($sql, $data);
        return $request;
    }

    public function showTipo($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        $data = array(":id" => $id);
        $request = $this->select($sql, $data);
        return $request;
    }

    public function deleteTipo($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $data = array(":id" => $id);
        $request = $this->delete($sql, $data);
        return $request;
    }

    public function updateTipo($data){
        $sql = "UPDATE {$this->table} SET tipo=:tipo, updated_at=:updated_at, updated_user=:updated_user WHERE id = :id";

        $data = array(":id" => $data['id'], ":tipo" => $data['tipo'],
                    ":updated_at" => DATETIME, ":updated_user" => USER_ID    
                    );
        $request = $this->update($sql, $data);
        return $request;
    }

    public function getTipoMantenimientos()
    {
        $sql = "SELECT * FROM {$this->table}";
        $request = $this->selectAll($sql);
        return $request;
    }
}
