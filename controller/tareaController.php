<?php 
class TareaController {

    private $model;

    public function __construct() {
        require_once(__DIR__ . '/../model/TareaModel.php');
        $this->model = new TareaModel();
    }

    public function crearTarea($nombre) {
        $id = $this->model->crear($nombre);
        if ($id !== false) {
            header("Location: show.php?id=" . $id);
            exit;
        } else {
            header("Location: create.php");
            exit;
        }
    }
    public function mostrarTarea($id) {
        $dato = $this->model->verid($id);
        if ($dato !== false) {
            return $dato;
        } else {
            header("Location: index.php");
            exit;
        }
    }

    public function listarTareas() {
        return $this->model->obtenerTodas(); // ya devuelve false si falla
    }

    public function actualizarTarea($id, $nombre) {
        $resultado = $this->model->actualizar($id, $nombre);
        if ($resultado !== false) {
            header("Location: show.php?id=" . $id);
            exit;
        } else {
            header("Location: index.php?id=" . $id);
            exit;
        }
    }

    public function eliminarTarea($id) {
        $this->model->eliminar($id);
        header("Location: index.php");
        exit;
    }
}
?>
