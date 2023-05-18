 <!-- Modal elimiar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Está seguro de eliminar el registro?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    Si decide continuar no podra deshacer la acción.
            </div>
            <div class="modal-footer">
                <form action="<?=RUTA?>/mantenimiento/delete" method="post">
                    <input type="hidden" name="id" value="<?=$data['mantenimiento']['id'] ?>">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger" name="delete">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>