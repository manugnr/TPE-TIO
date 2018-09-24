<?php
    class categoriaModel {
        private $db_conecction;

        function __construct() {
            $this->db_coneccion = new PDO('mysql:host=localhost;'.'dbname=db_dulcinea;charset=utf8', 'root', '');
        }

        function getCategorias() {
            $sentencia = $this->db_coneccion->prepare("SELECT * from categoria");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>