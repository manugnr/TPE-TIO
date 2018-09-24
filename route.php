<?php
// constantes
define('ACTION', 0); 
define('ID', 1);

// si no indica "action" forzamos asi entra al default
if (!isset($_GET['action']))
    $_GET['action'] = '';

// parseamos la url 
$action = $_GET['action'];
$partesURL = explode("/", $action);

// decide que acción tomar en base a la url
switch ($partesURL[ACTION]) {
    
}