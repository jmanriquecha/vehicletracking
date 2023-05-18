<br>
<div class="col">
    <div class="row">
        <h2 class="text-center">Editar Mantenimiento</h2>
    </div>
</div>
<form action="<?= RUTA ?>/mantenimiento/update" method="post" class="col">
    <div class="form-floating mb-3">
        <select class="form-select" id="vehiculo" name="vehiculo" aria-label="Default select example" required>
            <?php
            $flag = "";
                for ($i=0; $i < count($data['vehiculos']); $i++) { 
                    if($data['mantenimiento']['vehiculo'] === $data['vehiculos'][$i]['id']){
                        $flag = "selected";
                    }else{
                        $flag = "";
                    }
                    echo "<option value='{$data['vehiculos'][$i]['id']}' $flag>{$data['vehiculos'][$i]['placa']} - {$data['vehiculos'][$i]['nombre']}</option>";
                }
            ?>
        </select>
        <label for="vehiculo">Elige la placa *</label>
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" id="tipo" name="tipo" aria-label="Default select example" required>
            <?php
            $flag = "";
                for ($i=0; $i < count($data['tipoMantenimientos']); $i++) { 
                    if($data['mantenimiento']['tipo'] === $data['tipoMantenimientos'][$i]['id']){
                        $flag = "selected";
                    }else{
                        $flag = "";
                    }
                    echo "<option value='{$data['tipoMantenimientos'][$i]['id']}' $flag>{$data['tipoMantenimientos'][$i]['tipo']}</option>";
                }
            ?>
        </select>
        <label for="tipo">Elige tipo de mantenimiento *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="date" name="fecha" id="fecha" value="<?=$data['mantenimiento']['fecha']?>" class="form-control" placeholder="Origen" required="true">
        <label for="fecha">Fecha</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="kilometros_actuales" id="kilometros_actuales" value="<?=$data['mantenimiento']['kilometros_actuales']?>" class="form-control" placeholder="Kilómetros recorridos" required="true">
        <label for="kilometros_actuales">Kilómetros actuales</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="precio" id="precio" value="<?=$data['mantenimiento']['precio']?>" class="form-control" placeholder="Destino">
        <label for="precio">Valor $</label>
    </div>  

    <div class="form-group form-floating mb-3">
        <textarea class="form-control" name="observacion" id="observacion" placeholder="Deje aquí sus observaciones" rows="5"><?= $data['mantenimiento']['observacion']?></textarea>
        <label for="salida">Deje aquí sus observaciones...</label>                
    </div>

    <input type="hidden" name="id" value="<?= $data['mantenimiento']['id'] ?>">
    <input type="submit" value="Actualizar" class="btn btn-success" name="update">
</form>