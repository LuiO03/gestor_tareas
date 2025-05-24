<?php 
    class TareaController{

        private $model;

        public function __construct(){
            require_once(__DIR__ . '/../model/TareaModel.php');
            $this->model = new TareaModel();
        }

        public function guardar($nombre){
            $id = $this->model->insertar($nombre);
            return($id!=false) ? header("location:show.php?id=".$id) : header("Location:create.php");
        }

        public function ver($id){
            return ($this->model->verid($id) != false) ? $this->model->verid($id) : header("Location:index.php");
        }
    }
?>