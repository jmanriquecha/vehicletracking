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
        }
        else{
            header("location:" . RUTA . "{$this->raiz}");
        }
    }

    public function login()
    {
        if(!isset($_SESSION['user'])){
            return view('auth.login', $data);
            echo "El usuario no existe";
        }
        else{
            //  Redirecciona la página home cuando esta iniciada una sesión.
            echo '<script type="text/JavaScript">
                    location.replace("/");                        
                  </script>';
        }
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
        }
        else{
            //  Redirecciona la página al home.
            echo '<script type="text/JavaScript">
                    location.replace("/");                        
                  </script>';
        }
    }
}
