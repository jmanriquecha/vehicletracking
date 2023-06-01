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
            $_SESSION['user_img'] = $data['img'];
            $_SESSION['user_name'] = $data["nombre"];
            $_SESSION['user_lastname'] = $data["apellido"];
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
            //  Redirecciona la página cuando se cierra sesión.
            echo '<script type="text/JavaScript">
                    location.replace("/auth/login");                        
                  </script>';
        }else{
            header("location: ". RUTA . "/");
        }
    }
}
