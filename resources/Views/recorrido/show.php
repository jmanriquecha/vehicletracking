<br>
<div class="card">
    <div class="card-header">
        Información completa para el recorrido realizado por el vehículo 
        <?php 
        for ($i=0; $i < count($data['vehiculos']); $i++) {
            if($data['vehiculos'][$i]['id'] === $data['recorrido']['vehiculo']){
                $placa = $data['vehiculos'][$i]['placa'];
            }
        }
        ?>
        <strong> 
            <?= "{$placa}" ?>
        </strong>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p><strong>Kilómetros:</strong> <?= $data['recorrido']['cantidad'] ?></p>
            <p><strong>Origen:</strong> <?= $data['recorrido']['origen'] ?></p>
            <p><strong>Destino:</strong> <?= $data['recorrido']['destino'] ?></p>
            <p><strong>Fecha Salida:</strong> <?= $data['recorrido']['salida'] ?></p>
            <p><strong>Fecha Llegada:</strong> <?= $data['recorrido']['llegada'] ?></p>
            <p><strong>Observación:</strong> <?= $data['recorrido']['observacion'] ?></p>
            
            <br>
            <footer class="blockquote-footer">Fecha y hora de registro <cite title="Source Title"><?= $data['recorrido']['created_at'] ?></cite> | última actualización <cite title="Source Title"><?= $modificado = ($data['recorrido']['updated_at'] === null) ? "Sin modificaciones" : $data['recorrido']['updated_at'] ?></cite></footer>
        </blockquote>
        <br>
        <!-- Button trigger modal -->
        <button width="20px" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Eliminar Registro
        </button>
    </div>
</div>

<?php include Views . "/recorrido/modal.eliminar.php" ?>