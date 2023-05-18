<?php

namespace App\Http\Controllers;

use App\Libraries\Core\Controller;
use App\Models\Vehiculo;
use App\Models\Tmantenimiento;

class MantenimientoController extends Controller
{
    private $raiz = "/mantenimiento";

    public function __construct()
    {
        parent::__construct();
        $this->authorization->authorization();
        $this->vehiculos = new Vehiculo();
        $this->tipoMantenimiento = new Tmantenimiento();
    }

    public function index()
    {
        $data['mantenimientos'] = $this->model->getMantenimientos();
        $data['vehiculos'] = $this->vehiculos->getVehiculos();
        $data['tipoMantenimientos'] = $this->tipoMantenimiento->getTipoMantenimientos();
        return view('mantenimiento.index', $data);
    }

    public function create(){
        $data['vehiculos'] = $this->vehiculos->getVehiculos();
        $data['tipoMantenimientos'] = $this->tipoMantenimiento->getTipoMantenimientos();
        $data['mantenimientos'] = $this->model->getMantenimientos();

        if(isset($_POST['save'])){
            $data = $this->model->insertMantenimiento($_POST);
            header("location:" . RUTA . "{$this->raiz}");
        }
        return view('mantenimiento.create', $data);        
    }

    public function show($id)
    {

        foreach ($id as $id);
        $data['vehiculos'] = $this->vehiculos->getVehiculos();
        $data['tipoMantenimientos'] = $this->tipoMantenimiento->getTipoMantenimientos();
        $data['mantenimiento']  = $this->model->showMantenimiento($id);
        if ($data['mantenimiento'] == false) {
            header("location:" . RUTA . "{$this->raiz}");
        } else {
            return view('mantenimiento.show', $data);
        }
    }
    public function delete()
    {
        if(isset($_POST['delete'])){
            $id = $_POST['id'];
            $data = $this->model->deleteMantenimiento($id);
            header("location:" . RUTA . "{$this->raiz}");
        }else{
            header("location:" . RUTA . "{$this->raiz}");
        }
    }

    public function edit($id)
    {
        foreach ($id as $id);
        $data['mantenimiento'] = $this->model->showMantenimiento($id);
        $data['tipoMantenimientos'] = $this->tipoMantenimiento->getTipoMantenimientos();
        $data['vehiculos'] = $this->vehiculos->getVehiculos();
        if ($data['mantenimiento']['id'] == false) {
            header("location:" . RUTA . "{$this->raiz}");
        } else {
            return view('mantenimiento.edit', $data);
        }
    }

    public function update()
    {
        $data = false;
        if ($data == false) {
            header("location:" . RUTA . "{$this->raiz}");
        }
        if (isset($_POST['update'])) {
            $data = $this->model->updateMantenimiento($_POST);
            header("location:" . RUTA . "{$this->raiz}");
        }
    }
}
