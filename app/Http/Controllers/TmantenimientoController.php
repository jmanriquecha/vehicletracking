<?php

namespace App\Http\Controllers;

use App\Libraries\Core\Controller;

class TmantenimientoController extends Controller
{
    private $raiz = "/tmantenimiento";

    public function __construct()
    {
        parent::__construct();
        $this->authorization->authorization();
    }

    public function index()
    {
        $data['tipoMantenimientos'] = $this->model->getTipoMantenimientos();
        return view('tmantenimiento.index', $data);
    }

    public function create(){
        if(isset($_POST['save'])){
            $data = $this->model->insertTipo($_POST);
            header("location:" . RUTA . "{$this->raiz}");
        }
        return view('tmantenimiento.create', $data);        
    }

    public function show($id)
    {
        foreach ($id as $id);
        $data['showTipo']  = $this->model->showTipo($id);
        if ($data['showTipo'] == false) {
            header("location:" . RUTA . "{$this->raiz}");
        } else {
            return view('tmantenimiento.show', $data);
        }
    }

    public function delete()
    {
        if(isset($_POST['delete'])){
            $id = $_POST['id'];
            $data = $this->model->deleteTipo($id);
            header("location:" . RUTA . "{$this->raiz}");
        }else{
            header("location:" . RUTA . "{$this->raiz}");
        }
    }

    public function edit($id)
    {
        foreach ($id as $id);
        $data['showTipo']  = $this->model->showTipo($id);
        if ($data['showTipo']['id'] == false) {
            header("location:" . RUTA . "{$this->raiz}");
        } else {
            return view('tmantenimiento.edit', $data);
        }
    }

    public function update()
    {
        $data = false;
        if ($data == false) {
            header("location:" . RUTA . "{$this->raiz}");
        }
        if (isset($_POST['update'])) {
            $data = $this->model->updateTipo($_POST);
            header("location:" . RUTA . "{$this->raiz}");
        }
    }
}
