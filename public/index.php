<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../config/config.php";

use App\Libraries\Core\Request;

$request = new Request();

if (isset($_SESSION['user'])){
    require_once Views . "/inc/header.php";
    $request->send();
    require_once Views . "/inc/footer.php";
}else{
    require_once Views . "/auth/login.php";
}