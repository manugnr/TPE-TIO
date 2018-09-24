<?php
    include_once "models/categoriaModel.php";

    class categoriaView {
        private $basehref;

        function __construct() {
            $this->basehref = '//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/';
        }

        function mostrarCategorias($categorias) {

        }
    }
?>