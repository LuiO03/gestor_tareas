<?php
    require_once(__DIR__ ."/../../view/templates/header.php")
?>
<div class="container my-4">
    <form action="store.php" method="post" autocomplete="off">
        <div class="mb-4 align-items-center">
            <label for="nombre_tarea" class="col-sm-4 col-form-label fw-bold fs-5">
                Nombre de la Tarea
            </label>
            <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-text"><i class="ri-pencil-line"></i></span>
                    <input
                        type="text"
                        class="form-control"
                        name="nombre_tarea"
                        id="nombre_tarea"
                        placeholder="Inserte tarea"
                        required
                    />
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8 d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="ri-save-line me-1"></i>Guardar
                </button>
                <a href="../../" class="btn btn-danger">
                    <i class="ri-close-circle-line me-1"></i>Cancelar
                </a>
            </div>
        </div>
    </form>
</div>

<?php
    require_once(__DIR__ ."/../../view/templates/footer.php")
?>