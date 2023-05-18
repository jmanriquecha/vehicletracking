<?php

for ($i=0; $i < count($data['estadosIniciales']); $i++) {
    if($data['estadosIniciales'][$i]['id'] === 1){
        $kilometrosIniciales =  $data['estadosIniciales'][$i]['kilometraje'];
    }
}

for ($i=0; $i < count($data['recomendacionMantenimientos']); $i++) { 
    if($data['recomendacionMantenimientos'][$i]['tipo'] === 1){
        $cambioAceite = $data['recomendacionMantenimientos'][$i]['kilometros'];
    }
}

for ($i=0; $i < count($data['mantenimientos']); $i++) { 
    if($data['mantenimientos'][$i]['tipo']){
        $ultimoCambioAceite = $data['mantenimientos'][$i]['kilometros_actuales'];
        $fechaCambio = $data['mantenimientos'][$i]['fecha'];
    }
}

for ($i=0; $i < count($data['recorridos']); $i++) { 
        $iniciaKilometros += $data['recorridos'][$i]['cantidad'];
}

$iniciaKilometros = round($iniciaKilometros, 1) + round($kilometrosIniciales, 1);

$recorridoConCambioDeAceite = round($iniciaKilometros, 1) - round($ultimoCambioAceite, 1);
$proximoCambioAceite = round($ultimoCambioAceite, 1) + round($cambioAceite, 1);
$faltanKilometrosCambioAceite = round($proximoCambiaAceite, 1) - round($iniciaKilometros, 1);
$pasados = round($recorridoConCambioDeAceite, 1) - round($cambioAceite, 1);

if($recorridoConCambioDeAceite >= $cambioAceite){
    $cambiarAceite = "Debiste cambiar el aceite hace ".round($pasados, 1) ." km";
}else{
    $cambiarAceite = round($proximoCambioAceite, 1) . " km";
}