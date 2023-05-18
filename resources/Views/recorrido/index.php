<br>
<?php
    include_once Views . "/recorrido/calcula.cambio.aceite.php";
?>
<br>
<?php if (count($data['recorridos']) === 0) : ?>
<div class="alert alert-warning">
    <p class="text-center">¡Estimado usuario! en el momento no has registrado recorridos</p>
    <p class="text-center"><a href="<?=RUTA?>/recorrido/create" class="nav-link text-primary">Nuevo recorrido</a></p>
</div>
<?php else: ?>
<h1 class="text-center h3">RECORRIDOS REALIZADOS</h1>
<hr>
<p class="text-end w-100 text-white"><span id="odo" class="p-2 bg-primary">ODO <span id="odoNumber"><?=$iniciaKilometros . " km"?></span></span></p>
<div class="table-responsive-md">
    <table class="table table-striped table-hover text-center">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">Kilómetros</th>
                <th scope="col">Vehículo</th>
                <th scope="col">Origen/Destino</th>
                <th scope="col">Fecha salida</th>
                <th scope="col">Estado llegada</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['recorridos'] as $recorrido) : ?>
                <tr>
                    <?php 
                        if($recorrido['llegada'] === null || $recorrido['cantidad'] === null){
                            $estado = "
                                <!-- Button trigger modal -->
                                <button width='20px' type='button' id='btnFinalizar' value='".json_encode($recorrido)."' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                                            Finalizar Recorrido!
                                </button>

                            ";
                            $cantidad = "<span class='text-primary text-secondary'> En ruta...</span>";
                        }else{
                            $estado = $recorrido['llegada'];
                            $cantidad = $recorrido['cantidad'];
                        }
                    ?>
                    <td><a class="nav-link text-primary" name="id" href="<?= RUTA?>/recorrido/show/<?= $recorrido['id'] ?>"><?=$cantidad?></a></td>
                    <td>
                        <?php
                            for ($i=0; $i < count($data['vehiculos']); $i++) { 
                                if($recorrido['vehiculo'] === $data['vehiculos'][$i]['id']){
                                    echo $data['vehiculos'][$i]['placa'];
                                }
                            }
                        ?>
                    </td>
                    <td ><?= $recorrido['origen'] . " | " . $recorrido['destino'] ?></td>
                    <td><?= $recorrido['salida'] ?></td>
                    <td><?=$estado?>      
                </td>
                <td class="bg-primary"><a class="text-white text-center nav-link" href="<?= RUTA?>/recorrido/edit/<?php echo $recorrido['id'] ?>">Editar</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include_once Views . "/recorrido/modal.finalizar.php" ?>

<?php endif ?>

<script src="<?=Assets?>/js/recorrido.js"></script>