<?php 
    include_once Views . "/recorrido/calcula.cambio.aceite.php";
?>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Ultimo cambio de aceite</h5>
        <p class="card-text"><?= $ultimoCambioAceite?> km <?=$fechaCambio?></p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Próximo cambio de aceite</h5>
        <p class="card-text"><?= $cambiarAceite?></p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Kilómetros recorridos despues del último cambio</h5>
        <p class="card-text"><?= $recorridoConCambioDeAceite?> km</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>