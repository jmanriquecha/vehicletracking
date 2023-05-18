<br>
<div class="col">
    <div class="row">
        <h2 class="text-center">Editar Recorrido</h2>
    </div>
</div>
<form action="<?= RUTA ?>/recorrido/update" method="post" class="col">
    <div class="form-floating mb-3">
        <select class="form-select" id="vehiculo" name="vehiculo" aria-label="Default select example" required>
            <?php
            $flag = "";
                for ($i=0; $i < count($data['vehiculos']); $i++) { 
                    if($data['recorridos']['vehiculo'] === $data['vehiculos'][$i]['id']){
                        $flag = "selected";
                    }else{
                        $flag = "";
                    }
                    echo "<option value='{$data['vehiculos'][$i]['id']}' $flag>{$data['vehiculos'][$i]['placa']} - {$data['vehiculos'][$i]['nombre']}</option>";
                }
            ?>
        </select>
        <label for="vehiculo">Seleccione la placa</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="cantidad" id="cantidad" value="<?=$data['recorridos']['cantidad']?>" class="form-control" placeholder="Kilómetros recorridos" required="true">
        <label for="cantidad">Kilómetros recorridos</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="origen" id="origen" value="<?=$data['recorridos']['origen']?>" class="form-control" placeholder="Origen" required="true">
        <label for="origen">Origen</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="destino" id="destino" value="<?=$data['recorridos']['destino']?>" class="form-control" placeholder="Destino">
        <label for="destino">Destino</label>
    </div>
    <div class="row g-3">
        <label for="fechas" class="form-label">Fecha y hora de salida</label>
        <br>
        <?php
            $datetimeSalida = new DateTime($data['recorridos']['salida']);
            $dateSalida = $datetimeSalida->format('Y-m-d');
            $hourSalida = $datetimeSalida->format('H:i');
            $secondSalida = $datetimeSalida->format('s');
        ?>

        <div class="form-floating mb-3 col-5" id="fechas">
            <input type="date" class="form-control" name="fechaSalida" id="fechaSalida" value="<?= $dateSalida ?>" placeholder="Fecha de salida" required>
            <label for="fechaSalida">Elige fecha *</label>

        </div>
        <div class="form-floating mb-3 col-4">
            <input type="time" class="form-control" name="horaSalida" id="horaSalida" value="<?= $hourSalida ?>" placeholder="Hora de salida" required>
            <label for="horaSalida">Elige hora *</label>

        </div>
        <div class="form-floating mb-3 col-3">
            <select class="form-select" id="segundoSalida" name="segundoSalida" aria-label="Default select example" placeholder="Segundos" required>
                <?php
                    $flag = "";
                    for ($i=0; $i <60 ; $i++) { 
                        if($secondSalida == $i){
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
    <div class="row g-3">
        <?php
            $datetimeLlegada = new DateTime($data['recorridos']['llegada']);
            if($data['recorridos']['llegada'] !== null){
                $mensaje = "";
                $isInvalid = "";
                $danger = "";
                $dateLlegada = $datetimeLlegada->format('Y-m-d');
                $hourLlegada = $datetimeLlegada->format('H:i');
                $secondLlegada = $datetimeLlegada->format('s');
            }else{
                $mensaje = "El recorrido no ha finalizado todavia";
                $isInvalid = "is-invalid";
                $danger = "alert alert-danger";
                $dateLlegada = DATE;
                $hourLlegada = HOURANDMINUTE;
                $secondLlegada = SECOND;
            }
        ?>

        <label for="fechas" class="form-label <?= $danger ?>">Fecha y hora de llegada <?=$mensaje?></label>
        <br>
        <div class="form-floating mb-3 col-5" id="fechas">
            <input type="date" class="form-control <?=$isInvalid?>" name="fechaLlegada" id="fechaLlegada" value="<?= $dateLlegada ?>" placeholder="Fecha de salida" required>
            <label for="fechaLlegada">Elige fecha *</label>

        </div>
        <div class="form-floating mb-3 col-4">
            <input type="time" class="form-control <?=$isInvalid?>" name="horaLlegada" id="horaLlegada" value="<?= $hourLlegada ?>" placeholder="Hora de salida" required>
            <label for="horaLlegada">Elige hora *</label>

        </div>
        <div class="form-floating mb-3 col-3">
            <select class="form-select <?=$isInvalid?>" id="segundoLlegada" name="segundoLlegada" aria-label="Default select example" placeholder="Segundos" required>
                <?php
                    $flag = "";
                    for ($i=0; $i <60 ; $i++) { 
                        if($secondLlegada == $i){
                            $flag = "selected";
                        }else{
                            $flag = "";
                        }
                        $imprimeSecond = ($i < 10) ? 0 . "$i" : $i;
                        echo "<option value='$imprimeSecond' $flag>".$imprimeSecond."</option>";
                    }
                ?>    
            </select>
            <label for="segundoLlegada">Elige segundos *</label>
        </div>
    </div>  

    <div class="form-floating mb-3">
        <input type="text" name="observacion" id="observacion" value="<?=$data['recorridos']['observacion']?>" class="form-control" placeholder="Observación">
        <label for="observacion">Observación</label>
    </div>

    <input type="hidden" name="id" value="<?= $data['recorridos']['id'] ?>">
    <input type="submit" value="Actualizar" class="btn btn-success" name="update">
</form>