<?php

namespace App\Http\Controllers;
use App\Libraries\Core\Controller;
use App\Libraries\Core\Authorized;

class ErrorController extends Controller
{
    public function __construct(){
        $this->authorization = new Authorized();
        $this->index();
    }

    public function index()
    {
        if(!$this->authorization->authorization()){
            return view('error.404');
        }
    }

}