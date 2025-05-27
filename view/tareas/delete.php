<?php
    require_once('../../controller/TareaController.php');
    $objetoTarea = new TareaController();
    $objetoTarea->eliminarTarea($_GET['id']);
?>