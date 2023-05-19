<?php
    $recorridos = $data['recorridos'];
    for($i = 0; $i < count($recorridos); $i++){
        if($recorridos[$i]['cantidad'] === null){
            $nulo = true;
        }
    }
    
    // Obtener el último origen y destino
    $ultimoOrigen = $data['recorridos'][0]['origen'];
    $ultimoDestino = $data['recorridos'][0]['destino'];
?>

<br>

<?php
    if($nulo === true):
        echo "<div class='alert alert-danger'>
                <p class='text-center'>Tienes recorridos pendientes por finalizar</p>
                <p class='text-center'><a class='nav-link text-primary' href='".RUTA."/recorrido/'>Finalizar recorridos pendientes</a></p>
              </div>";
    else:
?>

<div class="col">
    <div class="row">
        <h2 class="text-center">Nuevo Recorrido</h2>
    </div>
</div>
<br>
<form action="" method="post" class="col">
    <div class="form-floating mb-3">
        <select class="form-select" id="vehiculo" name="vehiculo" aria-label="Default select example" required>
            <option value="" selected>Seleccione un vehículo</option>
            <?php
                foreach($data['vehiculos'] as $vehiculo){
                    echo "<option selected value='{$vehiculo['id']}'>Placa: {$vehiculo['placa']}</option>";
                }
            ?>
        </select>
    <label for="origen">Elige una placa *</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="origen" id="origen" value="<?= $ultimoDestino ?>" class="form-control" placeholder="Origen" required="true">
        <label for="origen">Origen *</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="destino" id="destino" value="<?= $ultimoOrigen ?>" class="form-control" placeholder="Destino">
        <label for="destino">Destino *</label>
    </div>

    <div class="row g-3">
        <label for="fechas" class="form-label">Fecha y hora de salida</label>
        <br>

        <div class="form-floating mb-3 col-5" id="fechas">
            <input type="date" class="form-control" name="fechaSalida" id="fechaSalida" value="<?= DATE ?>" placeholder="Fecha de salida" required>
            <label for="fechaSalida">Elige fecha *</label>

        </div>
        <div class="form-floating mb-3 col-4">
            <input type="time" class="form-control" name="horaSalida" id="horaSalida" value="<?= HOURANDMINUTE ?>" placeholder="Hora de salida" required>
            <label for="horaSalida">Elige hora *</label>

        </div>
        <div class="form-floating mb-3 col-3">
            <select class="form-select" id="segundoSalida" name="segundoSalida" aria-label="Default select example" placeholder="Segundos" required>
                <?php
                    $flag = "";                    
                    for ($i=0; $i <60 ; $i++) { 
                        if(SECOND == $i){
                            $flag = "selected";
                        }else{
                            $flag = "";
                        }
                        $imprimeSecond = ($i < 10) ? 0 . "$i" : $i;
                        echo "<option value='$imprimeSecond' $flag>".$imprimeSecond."</option>";
                    }
                ?>    
            </select>
            <label for="segundoSalida">Elige segundos *</label>
        </div>
    </div>    
    <div class="form-group form-floating mb-3">
        <textarea class="form-control" name="observacion" id="observacion" placeholder="Deje aquí sus comentarios" rows="5"></textarea>
        <label for="salida">Deje aquí sus comentarios...</label>                
    </div>
    <input type="submit" value="Guardar" class="btn btn-success" name="save">
</form>
<?php endif ?>