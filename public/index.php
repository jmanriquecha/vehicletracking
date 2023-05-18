<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../config/config.php";

use App\Libraries\Core\Request;

$request = new Request();
require_once Views . "/inc/header.php";
if(isset($_SESSION['user'])){
    require_once Views . "/inc/navbar.php";
}
echo "<div class='container'>";


$request->send();

echo " </div>";
require_once Views . "/inc/footer.php";

