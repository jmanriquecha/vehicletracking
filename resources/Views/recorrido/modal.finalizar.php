<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true" >
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-50" id="exampleModalLabel">Finalizar </h5>
                <span class="text-end w-50 text-primary b-1"><span id="odo" class="p-2"><strong>ODO <span id="odoNumber"><?=$iniciaKilometros . " km"?></strong></span></span></span>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=RUTA?>/recorrido/update" method="post">
                    <div class="row g-3">
                        <div class="form-floating mb-3 col-4">

                            <button type="button" class="btn btn-danger" id="btnChange">Cantidad</button>
                        </div>
                        <div class="form-floating mb-3 col-8" >
                            <p class="text-end mt-2"><span id="muestraKilometros"></span></p>
                        </div>
                    </div>                    
                    <input type="hidden" name="id" id="id">

                    <div class="mb-3 form-floating">
                        <input type="hidden" name="kInicial" id="kInicial" class="form-control" required="true" value="<?= $iniciaKilometros ?>" autofocus>
                    </div>

                    <div class="mb-3 form-floating">
                        <input type="number" min="0.1" step="0.1" name="cantidad" id="cantidad" class="form-control" placeholder="Ingrese manualmente la cantidad de kilómetros" required="true" autofocus>
                        <label id="cantidad-label" for="cantidad">Cantidad</label>
                    </div>

                    <div class="mb-3 form-floating">
                        <input type="number"  min="<?= $iniciaKilometros ?>" step="0.1" name="kFinal" id="kFinal" class="form-control" placeholder="Ingrese el total de kilómetros, el sistema calculara la cantidad para esté recorrido" required="true" autofocus>
                        <label id="kFinal-label" for="kFinal">Kilómetros totales</label>
                    </div>
                    
                     
                    <div class="row g-3">
                        <?php
                            $datetimeLlegada = new DateTime($data['recorridos']['llegada']);
                            if($data['recorridos']['llegada'] !== null){
                                $isInvalid = "";
                                $dateLlegada = $datetimeLlegada->format('Y-m-d');
                                $hourLlegada = $datetimeLlegada->format('H:i');
                                $secondLlegada = $datetimeLlegada->format('s');
                            }else{
                                $isInvalid = "is-invalid";
                                $dateLlegada = DATE;
                                $hourLlegada = HOURANDMINUTE;
                                $secondLlegada = SECOND;
                            }
                        ?>

                        <label for="fechas" class="form-label">Fecha y hora de llegada</label>
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

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger" name="finalizar">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>