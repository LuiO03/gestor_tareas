<?php

    class db{
        private $host = "localhost";
        private $dbname = "gestor_tareas";
        private $user = "root";
        private $password = "";

        public function conectar(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
            } catch (PDOException $error) {
                return $error->getMessage();
            }
        }
    }


?>