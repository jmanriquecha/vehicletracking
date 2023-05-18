<br>
<div class="card">
    <div class="card-header">
        Información completa del mantenimiento realizado al vehículo  
        <strong> 
            <?php 
            for ($i=0; $i < count($data['mantenimiento']) ; $i++) { 
                if($data['vehiculos'][$i]['id'] === $data['mantenimiento']['vehiculo']){
                    echo $data['vehiculos'][$i]['placa'];
                }
            }
            ?>
        </strong>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p><strong>Fecha de mantenimiento:</strong> <?= $data['mantenimiento']['fecha'] ?></p>
            <p><strong>Kilómetros:</strong> <?= $data['mantenimiento']['kilometros_actuales'] ?></p>
            <p><strong>Tipo de mantenimiento:</strong>
                <?php 
                for ($i=0; $i < count($data['mantenimiento']) ; $i++) { 
                    if($data['tipoMantenimientos'][$i]['id'] === $data['mantenimiento']['tipo']){
                        echo $data['tipoMantenimientos'][$i]['tipo'];
                    }
                }
                ?>
            </p>
            <p><strong>Precio:</strong> <?= "$" . $data['mantenimiento']['precio'] ?></p>
            <p><strong>Observación:</strong> <?= $data['mantenimiento']['observacion'] ?></p>
            
            <br>
            <footer class="blockquote-footer">Fecha y hora de registro <cite title="Source Title"><?= $data['mantenimiento']['created_at'] ?></cite> | última actualización <cite title="Source Title"><?= $modificado = ($data['mantenimiento']['updated_at'] === null) ? "Sin modificaciones" : $data['mantenimiento']['updated_at'] ?></cite></footer>
        </blockquote>
        <br>
        <!-- Button trigger modal -->
        <button width="20px" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Eliminar Registro
        </button>
    </div>
</div>

<?php include Views . "/mantenimiento/modal.eliminar.php" ?>