<br>
<h1 class="text-center">Bienvenido a la zona de Administración</h1>
<br>
<p class="text-center">Sesión actual: <?="{$data['usuario']['nombre']} {$data['usuario']['apellido']}"?></p>
<br>
<?php
    include_once Views . "/recorrido/card.resumen.php";
?>
<br>
<p class="text-center">Version 1.0 ACME S.A</p>