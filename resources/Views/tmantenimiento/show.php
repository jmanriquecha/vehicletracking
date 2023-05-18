<br>
<div class="card">
    <div class="card-header">
        Información completa del tipo de mantenimiento 
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p><strong>Nombre:</strong> <?= $data['showTipo']['tipo'] ?></p>
            <br>
            <footer class="blockquote-footer">Fecha y hora de registro <cite title="Source Title"><?= $data['showTipo']['created_at'] ?></cite> | última actualización <cite title="Source Title"><?= $modificado = ($data['showTipo']['updated_at'] === null) ? "Sin modificaciones" : $data['showTipo']['updated_at'] ?></cite></footer>
        </blockquote>
        <br>
        <!-- Button trigger modal -->
        <button width="20px" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Eliminar Registro
        </button>
    </div>
</div>

<?php include Views . "/tmantenimiento/modal.eliminar.php" ?>