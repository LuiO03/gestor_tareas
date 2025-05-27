<?php
    require_once(__DIR__ . "/../../view/templates/header.php");
    require_once(__DIR__ . "/../../controller/TareaController.php");
    $objtareacontrol = new TareaController();
    $user= $objtareacontrol->mostrarTarea($_GET['id']);
?>

<div class="container my-4">
    <form action="update.php" method="post" autocomplete="off">
        <div class="mb-4 align-items-center">
            <div class="align-items-center mb-4">
                <h2 class="fw-bold mb-0" for="nombre_tarea">
                    Actualizar la Tarea: 
                </h2>
                <h3>
                    <?= $user['nombre_tarea'] ?>
                </h3>
            </div>
            <div class="d-flex flex-row gap-2">
                <div class="input-group w-25">
                    <span class="input-group-text"><i class="ri-hashtag"></i></span>
                    <input type="text" class="form-control" name="id" id="nombre_tarea" readonly
                        placeholder="Inserte tarea" required value="<?= $user['id'] ?>"/>
                </div>
                <div class="input-group">
                    <span class="input-group-text"><i class="ri-pencil-line"></i></span>
                    <input type="text" class="form-control" name="nombre_tarea" id="nombre_tarea"
                        placeholder="Inserte tarea" required value="<?= $user['nombre_tarea'] ?>"/>
                </div>
            </div>
        </div>

        <div class="d-flex gap-2 w-100 justify-content-center">
            <button type="submit" class="btn btn-primary">
                <i class="ri-save-line me-1"></i>Actualizar
            </button>
            <a href="show.php?id=<?= $user['id'] ?>" class="btn btn-danger">
                <i class="ri-close-circle-line me-1"></i>Cancelar
            </a>
        </div>
    </form>
</div>

<?php
    require_once(__DIR__ . "/../../view/templates/footer.php")
?>