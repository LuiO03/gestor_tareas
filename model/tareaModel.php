<?php 
class TareaModel {
    private $PDO;

    public function __construct() {
        require_once(__DIR__ . '/../config/conexion.php'); // Ruta segura

        $conn = new db();
        $this->PDO = $conn->conectar();
    }

    public function crear($nombre) {
        try {
            $stmt = $this->PDO->prepare("INSERT INTO tareas (nombre_tarea) VALUES (:nombre_tarea)");
            $stmt->bindParam(":nombre_tarea", $nombre);
            if ($stmt->execute()) {
                return $this->PDO->lastInsertId();
            } else {
                return false;
            }
        } catch (PDOException $e) {
            // Mostrar un mensaje genérico
            echo "Ocurrió un error al guardar la tarea.";
            // Guardar el error real en logs/error.log
            error_log(
                date('Y-m-d H:i:s') . " - Error al insertar() tarea: " . $e->getMessage() . "\n",
                3,
                __DIR__ . '/../logs/error.log'
            );
            return false;
        }
    }

    public function verid($id){
        try {
            $stmt = $this->PDO->prepare("SELECT * FROM tareas WHERE id = :id LIMIT 1");
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC); 
        } catch (PDOException $e) {
            error_log(
                date('Y-m-d H:i:s') . " - Error en ver() tarea: " . $e->getMessage() . "\n",
                3,
                __DIR__ . '/../logs/error.log'
            );
            return false;
        }
    }

    public function obtenerTodas() {
        try {
            $stmt = $this->PDO->prepare("SELECT * FROM tareas ORDER BY id DESC");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log(
                date('Y-m-d H:i:s') . " - Error en listar() tareas: " . $e->getMessage() . "\n",
                3,
                __DIR__ . '/../logs/error.log'
            );
            return false;
        }
    }

    public function actualizar($id, $nombre){
        try {
            $stmt = $this->PDO->prepare("UPDATE tareas SET nombre_tarea = :nombre_tarea WHERE id = :id");
            $stmt->bindParam(":nombre_tarea", $nombre);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return $id;
        } catch (\Throwable $e) {
            error_log(
                date('Y-m-d H:i:s') . " - Error en actualizar() tareas: " . $e->getMessage() . "\n",
                3,
                __DIR__ . '/../logs/error.log'
            );
            return false;
        }
    }

    public function eliminar($id) {
        try {
            $stmt = $this->PDO->prepare("DELETE FROM tareas WHERE id = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log(date('Y-m-d H:i:s') . " - Error en eliminar() tarea: " . $e->getMessage() . "\n", 3, __DIR__ . '/../logs/error.log');
            return false;
        }
    }
}
?>
