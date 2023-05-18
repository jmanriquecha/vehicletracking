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

$iniciaKilometros = $iniciaKilometros + $kilometrosIniciales;

$recorridoConCambioDeAceite = $iniciaKilometros - $ultimoCambioAceite;
$proximoCambioAceite = $ultimoCambioAceite + $cambioAceite;
$faltanKilometrosCambioAceite = $proximoCambiaAceite - $iniciaKilometros;
$pasados = $recorridoConCambioDeAceite - $cambioAceite;

if($recorridoConCambioDeAceite >= $cambioAceite){
    $cambiarAceite = "Debiste cambiar el aceite hace {$pasados} km";
}else{
    $cambiarAceite = "{$proximoCambioAceite} km";
}