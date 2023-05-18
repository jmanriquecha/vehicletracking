<?php

namespace App\Http\Controllers;

use App\Libraries\Core\Controller;
use App\Models\Vehiculo;

class TanquearController extends Controller
{
    private $raiz = "/tanquear";

    public function __construct()
    {
        parent::__construct();
        $this->authorization->authorization();
        $this->vehiculos = new Vehiculo();
    }

    public function index()
    {
        $data['vehiculos'] = $this->vehiculos->getVehiculos();
        $data['tanqueos'] = $this->model->getTanqueos();
        return view('tanquear.index', $data);
    }

    public function create(){
        $data['vehiculos'] = $this->vehiculos->getVehiculos();

        if(isset($_POST['save'])){
            $data = $this->model->insertTanqueada($_POST);
            header("location:" . RUTA . "{$this->raiz}");
        }
        return view('tanquear.create', $data);        
    }

    public function show($id)
    {
        foreach ($id as $id);
        $data['vehiculos'] = $this->vehiculos->getVehiculos();
        $data['tanqueo']  = $this->model->showTanqueo($id);
        if ($data['tanqueo'] == false) {
            header("location:" . RUTA . "{$this->raiz}");
        } else {
            return view('tanquear.show', $data);
        }
    }

    public function delete()
    {
        if(isset($_POST['delete'])){
            $id = $_POST['id'];
            $data = $this->model->deleteTanqueo($id);
            header("location:" . RUTA . "{$this->raiz}");
        }else{
            header("location:" . RUTA . "{$this->raiz}");
        }
    }

    public function edit($id)
    {
        foreach ($id as $id);
        $data['tanqueos'] = $this->model->showTanqueo($id);
        $data['vehiculos'] = $this->vehiculos->getVehiculos();
        if ($data['tanqueos']['id'] == false) {
            header("location:" . RUTA . "{$this->raiz}");
        } else {
            return view('tanquear.edit', $data);
        }
    }

    public function update()
    {
        $data = false;
        if ($data == false) {
            header("location:" . RUTA . "{$this->raiz}");
        }
        if (isset($_POST['update'])) {
            $data = $this->model->updateTanqueo($_POST);
            header("location:" . RUTA . "{$this->raiz}");
        }
    }
}
