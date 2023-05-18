<br>
<div class="col">
    <div class="row">
        <h2 class="text-center">Nueva tanqueada</h2>
    </div>
</div>
<br>
<form action="" method="post" class="col">
    <div class="form-floating mb-3">
        <select class="form-select" id="vehiculo_id" name="vehiculo_id" aria-label="Default select example" required>
            <option value="" selected>Seleccione un vehículo</option>
            <?php
                foreach($data['vehiculos'] as $vehiculo){
                    echo "<option value='{$vehiculo['id']}'>Placa: {$vehiculo['placa']} - {$vehiculo['nombre']}</option>";
                }
            ?>
        </select>
    <label for="vehiculo_id">Elige una placa *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="combustible_id" id="combustible_id" value="Gasolina" class="form-control" placeholder="Tipo de combustible" required="true">
        <label for="combustible_id">Tipo de combustible *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="number" min="0.1" step="0.1" disabled="disabled" name="muestraCantidadGalon" id="muestraCantidadGalon" value="" class="form-control" placeholder="Cantidad galones" required>
        <input type="hidden" min="0.1" step="0.1" name="cantidadGalon" id="cantidadGalon" required>
        <label for="cantidadGalon">Cantidad galones *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="number" min="0.1" step="0.1" name="valorGalon" id="valorGalon" value="" class="form-control" placeholder="Valor por galón" required>
        <label for="valorGalon">Valor galón $ *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="number" min="0.1" step="0.1" name="valorTotal" id="valorTotal" value="" class="form-control" placeholder="Valor total tanqueada" required>
        <label for="valorTotal">Valor total tanqueada $ *</label>
    </div>

    <div class="form-floating mb-3" id="fechas">
            <input type="date" class="form-control" name="fecha" id="fecha" value="<?= DATE ?>" placeholder="Fecha de tanqueo" required>
            <label for="fecha">Elige fecha *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="number" min="0.1" step="0.1" name="kilometrosActuales" id="kilometrosActuales" value="" class="form-control" placeholder="Kilómetros actuales" required>
        <label for="kilometrosActuales">Kilómetros actuales *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="estacionServicio" id="estacionServicio" value="" class="form-control" placeholder="Seleccione estación de servicio" required>
        <label for="estacionServicio">Estación de servicio *</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="direccion" id="direccion" value="" class="form-control" placeholder="Ingrese la dirección de la estación de servicio">
        <label for="direccion">Dirección</label>
    </div>
    <input type="submit" value="Guardar" class="btn btn-success" name="save">
</form>

<script src="<?=Assets?>/js/tanqueos.js"></script>