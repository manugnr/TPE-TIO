<?php

include_once "models/productoModel.php";
include_once "views/productoView.php";

class productoController {

    function mostrarProductos() {
        $model = new productoModel();
        $productos = $model->getProductos();
        $view = new productoView();
        $view->mostrarProductos($productos);
    }
    
}