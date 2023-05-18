<br>
<div class="col">
    <div class="row">
        <h2 class="text-center">Editar tanqueo</h2>
    </div>
</div>
<form action="<?= RUTA ?>/tanquear/update" method="post" class="col">
    <div class="form-floating mb-3">
        <select class="form-select" id="vehiculo_id" name="vehiculo_id" aria-label="Default select example" required>
            <?php
            $flag = "";
                for ($i=0; $i < count($data['vehiculos']); $i++) { 
                    if($data['tanqueos']['vehiculo'] === $data['vehiculos'][$i]['id']){
                        $flag = "selected";
                    }else{
                        $flag = "";
                    }
                    echo "<option value='{$data['vehiculos'][$i]['id']}' $flag>{$data['vehiculos'][$i]['placa']} - {$data['vehiculos'][$i]['nombre']}</option>";
                }
            ?>
        </select>
        <label for="vehiculo_id">Seleccione la placa</label>
    </div>
    
    <div class="form-floating mb-3">
        <input type="text" name="combustible_id" id="combustible_id" value="<?=$data['tanqueos']['combustible_id']?>" class="form-control" placeholder="Tipo de combustible" required="true">
        <label for="combustible_id">Tipo de combustible *</label>
    </div>

    <div class="form-floating mb-3">
    <input type="number" min="0.1" step="0.1" disabled="disabled" name="muestraCantidadGalon" id="muestraCantidadGalon" value="<?=$data['tanqueos']['cantidadGalon']?>" class="form-control" placeholder="Cantidad galones" required>
        <input type="hidden" min="0.1" step="0.1" name="cantidadGalon" id="cantidadGalon" value="<?=$data['tanqueos']['cantidadGalon']?>" required>
        <label for="cantidadGalon">Cantidad galones *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="number" min="0.1" step="0.1" name="valorGalon" id="valorGalon" value="<?=$data['tanqueos']['valorGalon']?>" class="form-control" placeholder="Valor por galón" required>
        <label for="valorGalon">Valor galón $ *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="number" min="0.1" step="0.1" name="valorTotal" id="valorTotal" value="<?=$data['tanqueos']['valorTotal']?>" class="form-control" placeholder="Valor total tanqueada" required>
        <label for="valorTotal">Valor total tanqueada $ *</label>
    </div>

    <div class="form-floating mb-3" id="fechas">
            <input type="date" class="form-control" name="fecha" id="fecha" value="<?=$data['tanqueos']['fecha']?>" placeholder="Fecha de tanqueo" required>
            <label for="fecha">Elige fecha *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="number" min="0.1" step="0.1" name="kilometrosActuales" id="kilometrosActuales" value="<?=$data['tanqueos']['kilometrosActuales']?>" class="form-control" placeholder="Kilómetros actuales" required>
        <label for="kilometrosActuales">Kilómetros actuales *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="estacionServicio" id="estacionServicio" value="<?=$data['tanqueos']['estacionServicio']?>" class="form-control" placeholder="Seleccione estación de servicio" required>
        <label for="estacionServicio">Estación de servicio *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="direccion" id="direccion" value="<?=$data['tanqueos']['direccion']?>" class="form-control" placeholder="Ingrese la dirección de la estación de servicio">
        <label for="direccion">Dirección</label>
    </div>

    <input type="hidden" name="id" value="<?= $data['tanqueos']['id'] ?>">
    <input type="submit" value="Actualizar" class="btn btn-success" name="update">
</form>

<script src="<?=Assets?>/js/tanqueos.js"></script>
