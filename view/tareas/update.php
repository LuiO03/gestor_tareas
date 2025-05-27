<?php
    require_once('../../controller/TareaController.php');
    $objetoTareaedit = new TareaController();
    $objetoTareaedit->actualizarTarea($_POST['id'], $_POST['nombre_tarea']);
    
?>