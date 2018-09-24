<?php

class productoModel {
    private $db_coneccion

    function __construct() {
        $this->db_conneccion = new PDO('mysql:host=localhost;'.'dbname=db_dulcinea;charset=utf8', 'root', '');
    }

    function getProductos() {

    }

    function getProducto($id) {

    }

    function insertarProducto($nombre, $precio, $descripcion, $id_categoria) {

    }

    function editarProducto($nombre, $precio, $descripcion, $id_categoria, $id_producto) {

    }

    function eliminarProducto($id) {

    }
}