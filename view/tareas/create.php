<?php
require_once(__DIR__ . "/../../view/templates/header.php")
    ?>
<div class="container my-4">
    <form action="store.php" method="post" autocomplete="off">
        <div class="align-items-center mb-4">
            <h2 class="fw-bold mb-0" for="nombre_tarea">Crea nueva tarea</h2>
        </div>
        <div class="col-sm-12 mb-4">
            <div class="input-group">
                <span class="input-group-text"><i class="ri-pencil-line"></i></span>
                <input type="text" class="form-control" name="nombre_tarea" id="nombre_tarea"
                    placeholder="Inserte tarea" required />
            </div>
        </div>

        <div class="d-flex gap-2 w-100 justify-content-center">
            <button type="submit" class="btn btn-primary">
                <i class="ri-save-line me-1"></i>Guardar
            </button>
            <a href="index.php" class="btn btn-danger">
                <i class="ri-close-circle-line me-1"></i>Cancelar
            </a>
        </div>
    </form>
</div>

<?php
require_once(__DIR__ . "/../../view/templates/footer.php")
    ?>