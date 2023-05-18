<?php

namespace App\Http\Controllers;

use App\Libraries\Core\Controller;

class AuthController extends Controller
{
    private $raiz = "/auth";

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        header("location: " . RUTA . "/auth/login");
    }

    public function validate(){
        $data = $this->model->validateUser($_POST);
        if($data !== false ){
            session_start();
            $_SESSION['user'] = $data['username'];
            $_SESSION['user_id'] = $data['id'];
            header("location:" . RUTA . "/");
        }else{
            header("location:" . RUTA . "{$this->raiz}");
        }
    }

    public function login()
    {
        return view('auth.login', $data);
    }

    public function logout(){
        if(isset($_POST['logout'])){
            session_start();
            session_unset();
            session_destroy();
            header("location: ". RUTA . "/auth/login");
        }else{
            header("location: ". RUTA . "/");
        }
    }
}
