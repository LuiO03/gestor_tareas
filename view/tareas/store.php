<?php
    require_once('../../controller/TareaController.php');

    $objetoTarea = new TareaController();
    $objetoTarea->guardar($_POST['nombre_tarea']);
    
?>