<?php

namespace App\Libraries\Core;

use App\Libraries\Core\Conection;
use Exception;
use PDO, PDOException;

class Mysql extends Conection
{
    private string $query;
    private array $values;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Insertar registros
     */

    public function insert(string $query, array $values)
    {
        try {
            $this->query = $query;
            $this->values = $values;


            $insert = $this->mbd->prepare($this->query);
            $insert->execute($this->values);

            if ($insert) {
                $lastInset = $this->mbd->lastInsertId();
            } else {
                $lastInset = 0;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            echo "<br><h2 class='alert alert-warning alert-dismissible fade show text-center'>Lo siento, presentamos un error al guardar el registro <a href='" . RUTA . "'>Home</a></h2>";
        }

        return $lastInset;
    }

    /**
     * Actualziar registros
     */

    public function update(string $query, array $values)
    {
        try {
            $this->query = $query;
        $this->values = $values;

        $update = $this->mbd->prepare($this->query);
        $update->execute($this->values);
        } catch (Exception $e) {
            echo "<br><h2 class='alert alert-warning alert-dismissible fade show text-center'>Lo sieto, presentamos un error al actualizar el registro <a href='/'>Home</a></h2>";
        }
        return $update;
    }

    /**
     * Buscar un registro
     */

    public function select(string $query, array $values)
    {
        try {
            $this->query = $query;
            $this->values = $values;

            $select = $this->mbd->prepare($this->query);
            $select->execute($values);
            $row = $select->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "<br><h2 class='alert alert-warning alert-dismissible fade show text-center'>Lo sieto, presentamos un error al actualizar el registro <a href='/'>Home</a></h2>";
        }
        return $row;
    }

    /**
     * Buscar todos los registros en la base de datos
     */

    public function selectAll(string $query)
    {
        $this->query = $query;

        $select = $this->mbd->prepare($this->query);
        $select->execute();
        $row = $select->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    /**
     * Eliminar un registro
     */

    public function delete(string $query, array $values)
    {
        try {
            $this->query = $query;
            $this->values = $values;

            $delete = $this->mbd->prepare($this->query);
            $delete->execute($values);
        } catch (Exception $e) {
            $delete = "<br><h2 class='alert alert-warning alert-dismissible fade show text-center'>Lo sieto, presentamos un error al eliminar el registro <a href='/'>Home</a></h2>";
        }

        return $delete;
    }
}
