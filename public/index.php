<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../config/config.php";

use App\Libraries\Core\Request;

$request = new Request();

$session = $_SESSION['user'];

if(isset($session))
    require_once Views . "../layouts/principal.php";

