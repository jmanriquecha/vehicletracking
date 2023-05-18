<br>
<div class="col">
    <div class="row">
        <h2 class="text-center">Editar Tipo de Mantenimiento</h2>
    </div>
</div>
<form action="<?= RUTA ?>/tmantenimiento/update" method="post" class="col">    
    <div class="form-floating mb-3">
        <input type="text" name="tipo" id="tipo" value="<?=$data['showTipo']['tipo']?>" class="form-control" placeholder="Destino">
        <label for="tipo">Nombre *</label>
    </div>  
    <input type="hidden" name="id" value="<?= $data['showTipo']['id'] ?>">
    <input type="submit" value="Actualizar" class="btn btn-success" name="update">
</form>