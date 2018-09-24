<?php
    include_once "models/categoriaModel.php";
    include_once "views/categoriaView.php";

    class categoriaController {

        define("PRODUCTO", 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/producto');

        function mostrarCategorias() {
            $model = new categoriaModel;
            $categorias = $model->getCategorias();
            $view = new categoriaView;
            $view->mostrarCategorias($categorias);
        }
}
?>