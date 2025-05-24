<?php
require_once(__DIR__ . "/../../view/templates/header.php");
require_once(__DIR__ . '/../../controller/TareaController.php');

$objtareacontrol = new TareaController();
$date = $objtareacontrol->ver($_GET['id']);
?>

<h2 class="text-center">Detalles del registro</h2>

<div class="p-2 d-flex gap-2">
    <a href="index.php" class="btn btn-primary">
        <i class="ri-arrow-left-line"></i> Regresar
    </a>
    <a href="edit.php?id=<?= $date['id'] ?>" class="btn btn-success">
        <i class="ri-edit-line"></i> Actualizar
    </a>

    <!-- Modal trigger button -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalId">
        <i class="ri-delete-bin-6-line"></i> Eliminar
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    <i class="ri-error-warning-line text-danger"></i> ¿Desea eliminar este registro?
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                Una vez eliminado no se podrá recuperar el registro.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="ri-close-line"></i> Cancelar
                </button>
                <a href="delete.php?id=<?= $date['id'] ?>" class="btn btn-danger">
                    <i class="ri-delete-bin-6-line"></i> Eliminar
                </a>
            </div>
        </div>
    </div>
</div>

<section class="seccion mt-4">
    <div class="table-responsive">
        <table class="table table-striped table-hover table-borderless table-primary align-middle border-light">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="table-primary">
                    <td><?= $date['id'] ?></td>
                    <td><?= $date['nombre_tarea'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php
require_once(__DIR__ . "/../../view/templates/footer.php");
?>
