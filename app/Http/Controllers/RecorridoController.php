<?php

namespace App\Http\Controllers;

use App\Libraries\Core\Controller;
use App\Models\Vehiculo;
use App\Models\EstadoInicial;
use App\Models\Mantenimiento;
use App\Models\RecomendacionMantenimiento;

class RecorridoController extends Controller
{
    private $raiz = "/recorrido";

    public function __construct()
    {
        parent::__construct();
        $this->authorization->authorization();
        $this->vehiculos = new Vehiculo();
        $this->estadosIniciales = new EstadoInicial();
        $this->mantenimientos = new Mantenimiento();
        $this->recomendacionMantenimientos = new RecomendacionMantenimiento();
    }

    public function index()
    {
        $data['estadosIniciales'] = $this->estadosIniciales->getEstadosIniciales();
        $data['vehiculos'] = $this->vehiculos->getVehiculos();
        $data['recorridos'] = $this->model->getRecorridos();
        $data['recomendacionMantenimientos'] = $this->recomendacionMantenimientos->getRecomendacionMantenimientos();
        $data['mantenimientos'] = $this->mantenimientos->getUltimoMantenimiento(1);
        return view('recorrido.index', $data);
    }

    public function create(){
        $data['vehiculos'] = $this->vehiculos->getVehiculos();
        $data['recorridos'] = $this->model->getRecorridos();

        if(isset($_POST['save'])){
            $data = $this->model->insertRecorrido($_POST);
            header("location:" . RUTA . "{$this->raiz}");
        }
        return view('recorrido.create', $data);        
    }

    public function show($id)
    {
        foreach ($id as $id);
        $data['vehiculos'] = $this->vehiculos->getVehiculos();
        $data['recorrido']  = $this->model->showRecorrido($id);
        if ($data['recorrido'] == false) {
            header("location:" . RUTA . "{$this->raiz}");
        } else {
            return view('recorrido.show', $data);
        }
    }

    public function delete()
    {
        if(isset($_POST['delete'])){
            $id = $_POST['id'];
            $data = $this->model->deleteRecorrido($id);
            header("location:" . RUTA . "{$this->raiz}");
        }else{
            header("location:" . RUTA . "{$this->raiz}");
        }
    }

    public function edit($id)
    {
        foreach ($id as $id);
        $data['recorridos'] = $this->model->showRecorrido($id);
        $data['vehiculos'] = $this->vehiculos->getVehiculos();
        if ($data['recorridos']['id'] == false) {
            header("location:" . RUTA . "{$this->raiz}");
        } else {
            return view('recorrido.edit', $data);
        }
    }

    public function update()
    {
        $data = false;
        if ($data == false) {
            header("location:" . RUTA . "{$this->raiz}");
        }
        if (isset($_POST['update'])) {
            $data = $this->model->updateRecorrido($_POST);
            header("location:" . RUTA . "{$this->raiz}");
        }else if(isset($_POST['finalizar'])){
            $data = $this->model->finalizarRecorrido($_POST);
            header("location:" . RUTA . "{$this->raiz}");
        }
    }
}
