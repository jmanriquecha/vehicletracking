<br>
<?php if (count($data['tipoMantenimientos']) === 0) : ?>
<div class="alert alert-warning">
    <p class="text-center">¡Estimado usuario! en el momento no has registrado mantenimientos</p>
    <p class="text-center"><a href="<?=RUTA?>/mantenimiento/create" class="nav-link text-primary">Nuevo Manenimiento</a></p>
</div>
<?php else: ?>

<h1 class="text-center h3">TIPOS DE MANTENIMIENTO</h1>  
<br>
<p class="text-end"><a class="nav-link text-primary" href="<?=RUTA?>/tmantenimiento/create"><strong>Nuevo tipo</strong></a></p>
<br>
<div class="table-responsive-md">
    <table class="table table-striped table-hover text-center">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['tipoMantenimientos'] as $tmantenimiento) : ?>
                <tr>
                    <td><a class="nav-link text-primary" href="<?= RUTA?>/tmantenimiento/show/<?= $tmantenimiento['id'] ?>"><?=$tmantenimiento['tipo']?></a></td>
                    <td><?= $tmantenimiento['created_at']?>      
                </td>
                <td class="bg-primary"><a class="text-white text-center nav-link" href="<?= RUTA?>/tmantenimiento/edit/<?php echo $tmantenimiento['id'] ?>">Editar</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php endif ?>
