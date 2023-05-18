<br>
<br>
<?php if (count($data['tanqueos']) === 0) : ?>
<div class="alert alert-warning">
    <p class="text-center">¡Estimado usuario! en el momento no has registrado tanqueos</p>
    <p class="text-center"><a href="<?=RUTA?>/tanquear/create" class="nav-link text-primary">Nuevo tanqueo</a></p>
</div>
<?php else: ?>
<h1 class="text-center h3">TANQUEOS REALIZADOS</h1>
<br>
<div class="table-responsive-md">
    <table class="table table-striped table-hover text-center">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">Kilómetros</th>
                <th scope="col">Vehículo</th>
                <th scope="col">Tipo de combustible</th>
                <th scope="col">Galones</th>
                <th scope="col">Valor tanqueada</th>
                <th scope="col">Fecha</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['tanqueos'] as $tanqueo) : ?>
                <tr>
                    <td><a class="nav-link text-primary" name="id" href="<?= RUTA?>/tanquear/show/<?= $tanqueo['id'] ?>"><?=$tanqueo['kilometrosActuales']?></a></td>
                    <td>
                        <?php
                            for ($i=0; $i < count($data['vehiculos']); $i++) { 
                                if($tanqueo['vehiculo_id'] === $data['vehiculos'][$i]['id']){
                                    echo $data['vehiculos'][$i]['placa'];
                                }
                            }
                        ?>
                    </td>
                    <td ><?=$tanqueo['combustible_id'] ?></td>
                    <td><?= $tanqueo['cantidadGalon'] ?></td>
                    <td>$<?= $tanqueo['valorTotal'] ?></td>
                    <td><?= $tanqueo['fecha'] ?></td>
                <td class="bg-primary"><a class="text-white text-center nav-link" href="<?= RUTA?>/tanquear/edit/<?php echo $tanqueo['id'] ?>">Editar</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include_once Views . "/tanquear/modal.finalizar.php" ?>

<?php endif ?>