<?php
    require_once('../../controller/TareaController.php');

    $objetoTarea = new TareaController();
    $objetoTarea->crearTarea($_POST['nombre_tarea']);
    
?>