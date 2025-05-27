<?php
    require_once(__DIR__ . "/../../view/templates/header.php");
    require_once(__DIR__ . '/../../controller/TareaController.php');

    $objtareacontrol = new TareaController();
    $rows = $objtareacontrol->listarTareas();
?>

<section class="seccion container py-4">
    <div class="d-flex justify-content-between mb-4">
        <h2 class="fw-bold mb-0">Gestión de Tareas</h2>
        <a href="create.php" class="btn btn-primary">
            <i class="ri-add-circle-line"></i> Nueva tarea
        </a>
    </div>

    <div class="table-responsive">
        <table class=" tablaTareas table table-hover align-middle mb-0">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php if ($rows): ?>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td class="text-start"><?= $row['nombre_tarea'] ?></td>
                            <td>
                                <a href="show.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-info me-1">
                                    <i class="ri-eye-line"></i> Ver
                                </a>
                                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning me-1">
                                    <i class="ri-edit-line"></i> Editar
                                </a>
                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalId">
                                    <i class="ri-delete-bin-6-line"></i> Eliminar
                                </button>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                            aria-labelledby="modalTitleId" aria-hidden="true">
                    <?php endforeach; ?>
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
                                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">
                                        <i class="ri-delete-bin-6-line"></i> Eliminar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>


<?php require_once(__DIR__ . "/../../view/templates/footer.php"); ?>
