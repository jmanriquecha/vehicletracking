<?php

namespace App\Http\Controllers;

use App\Libraries\Core\Controller;

class RecomendacionMantenimientoController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->authorization->authorization();

    }

    public function index()
    {
        $data = $this->model->getRecomendacionMantenimientos();
        echo $data;
        //return $this->views->View('home', $data);
    }
}
