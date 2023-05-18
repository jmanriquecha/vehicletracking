<?php

namespace App\Http\Controllers;

use App\Libraries\Core\Controller;
use App\Models\Vehiculo;
use App\Models\EstadoInicial;
use App\Models\Mantenimiento;
use App\Models\Recorrido;
use App\Models\RecomendacionMantenimiento;

class HomeController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->authorization->authorization();
        $this->vehiculos = new Vehiculo();
        $this->estadosIniciales = new EstadoInicial();
        $this->mantenimientos = new Mantenimiento();
        $this->recorridos = new Recorrido();
        $this->recomendacionMantenimientos = new RecomendacionMantenimiento();
    }

    public function index($params)
    {
        $data['usuario'] = $this->model->getUsuario($_SESSION['user_id']);
        $data['estadosIniciales'] = $this->estadosIniciales->getEstadosIniciales();
        $data['vehiculos'] = $this->vehiculos->getVehiculos();
        $data['recorridos'] = $this->recorridos->getRecorridos();
        $data['recomendacionMantenimientos'] = $this->recomendacionMantenimientos->getRecomendacionMantenimientos();
        $data['mantenimientos'] = $this->mantenimientos->getUltimoMantenimiento(1);
        return view('home', $data);
    }

}
