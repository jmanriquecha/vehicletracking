<br>
<div class="col">
    <div class="row">
        <h2 class="text-center">Nuevo Mantenimiento</h2>
    </div>
</div>
<br>
<form action="" method="post" class="col">
    <div class="form-floating mb-3">
        <select class="form-select" id="vehiculo" name="vehiculo" aria-label="Default select example" required>
            <option value="" selected>Seleccione un vehículo</option>
            <?php
                foreach($data['vehiculos'] as $vehiculo){
                    echo "<option value='{$vehiculo['id']}'>Placa: {$vehiculo['placa']} - {$vehiculo['nombre']}</option>";
                }
            ?>
        </select>
    <label for="origen">Elige una placa *</label>
    </div>
    
    <div class="form-floating mb-3">
        <select class="form-select" id="tipo" name="tipo" aria-label="Default select example" required>
            <option value="" selected>Seleccione un tipo</option>
            <?php
                foreach($data['tipoMantenimientos'] as $tipo){
                    echo "<option value='{$tipo['id']}'>{$tipo['tipo']}</option>";
                }
            ?>
        </select>
    <label for="origen">Elige tipo de mantenimiento *</label>
    </div>

    <div class="form-floating mb-3" id="fechas">
        <input type="date" class="form-control" name="fecha" id="fecha" value="<?= DATE ?>" placeholder="Fecha de salida" required>
        <label for="fecha">Elige una fecha *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="kilometros_actuales" id="kilometros_actuales" value="" class="form-control" placeholder="Destino">
        <label for="kilometros_actuales">Kilómetros actuales *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="precio" id="precio" value="" class="form-control" placeholder="Valor $">
        <label for="precio">Valor $ *</label>
    </div>
     
    <div class="form-group form-floating mb-3">
        <textarea class="form-control" name="observacion" id="observacion" placeholder="Deje aquí sus comentarios" rows="5"></textarea>
        <label for="salida">Deje aquí sus comentarios...</label>                
    </div>
    <input type="hidden" name="created_user" id="created_user" value="1" class="form-control" placeholder="Usuario creador" required="true">
    <input type="submit" value="Guardar" class="btn btn-success" name="save">
</form>