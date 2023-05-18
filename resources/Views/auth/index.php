<br>
<?php if (count($data['mantenimientos']) === 0) : ?>
<div class="alert alert-warning">
    <p class="text-center">¡Estimado usuario! en el momento no has registrado mantenimientos</p>
    <p class="text-center"><a href="<?=RUTA?>/mantenimiento/create" class="nav-link text-primary">Nuevo Manenimiento</a></p>
</div>
<?php else: ?>

<h1 class="text-center h3">MANTENIMIENTOS REALIZADOS</h1>  
<br>
<div class="table-responsive-md">
    <table class="table table-striped table-hover text-center">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">Kilómetros</th>
                <th scope="col">Vehículo</th>
                <th scope="col">Tipo mantenimiento</th>
                <th scope="col">Fecha</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['mantenimientos'] as $mantenimiento) : ?>
                <tr>
                    <td><a class="nav-link text-primary" href="<?= RUTA?>/mantenimiento/show/<?= $mantenimiento['id'] ?>"><?=$mantenimiento['kilometros_actuales']?></a></td>
                    <td >
                        <?php
                            $vehiculo = $mantenimiento['vehiculo'];
                            for ($i = 0; $i < count($data['mantenimientos']); $i++) { 
                                if($vehiculo ===  $data['vehiculos'][$i]['id']){
                                    echo $vehiculo =  $data['vehiculos'][$i]['placa'];
                                }
                            }
                        ?>
                    </td>
                    <td >
                        <?php
                            $tipoMantenimiento = $mantenimiento['tipo'];
                            for ($i = 0; $i < count($data['mantenimientos']); $i++) { 
                                if($tipoMantenimiento ===  $data['tipoMantenimientos'][$i]['id']){
                                    echo $tipoMantenimiento =  $data['tipoMantenimientos'][$i]['tipo'];
                                }
                            }
                        ?>
                    </td>
                    <td><?= $mantenimiento['fecha']?>      
                </td>
                <td class="bg-primary"><a class="text-white text-center nav-link" href="<?= RUTA?>/mantenimiento/edit/<?php echo $mantenimiento['id'] ?>">Editar</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php endif ?>
