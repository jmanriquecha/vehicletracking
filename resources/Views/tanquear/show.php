<br>
<div class="card">
    <div class="card-header">
        Información completa para el tanqueo realizado por el vehículo 
        <?php 
        for ($i=0; $i < count($data['vehiculos']); $i++) {
            if($data['vehiculos'][$i]['id'] === $data['tanqueo']['vehiculo_id']){
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
            <p><strong>Vehículo:</strong> <?= $placa ?></p>
            <p><strong>Kilómetros:</strong> <?= $data['tanqueo']['kilometrosActuales'] ?></p>
            <p><strong>Tipo de combustible:</strong> <?= $data['tanqueo']['combustible_id'] ?></p>
            <p><strong>Cantidad galones:</strong> <?= $data['tanqueo']['cantidadGalon'] ?></p>
            <p><strong>Valor por galón:</strong> <?= $data['tanqueo']['valorGalon'] ?></p>
            <p><strong>Valor total tanqueada:</strong> <?= $data['tanqueo']['valorTotal'] ?></p>
            <p><strong>Fecha de tanqueo:</strong> <?= $data['tanqueo']['fecha'] ?></p>
            <p><strong>Kilómetros actuales:</strong> <?= $data['tanqueo']['kilometrosActuales'] ?></p>
            <p><strong>Estación de servicio:</strong> <?= $data['tanqueo']['estacionServicio'] ?></p>
            <p><strong>Dirección:</strong> <?= $data['tanqueo']['direccion'] ?></p>
            
            <br>
            <footer class="blockquote-footer">Fecha y hora de registro <cite title="Source Title"><?= $data['tanqueo']['created_at'] ?></cite> | última actualización <cite title="Source Title"><?= $modificado = ($data['tanqueo']['updated_at'] === null) ? "Sin modificaciones" : $data['tanqueo']['updated_at'] ?></cite></footer>
        </blockquote>
        <br>
        <!-- Button trigger modal -->
        <button width="20px" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Eliminar Registro
        </button>
    </div>
</div>

<?php include Views . "/tanquear/modal.eliminar.php" ?>