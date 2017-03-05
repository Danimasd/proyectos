<?php

include './conexion/conexion.php';
include './modelo_login.php';
$action = isset($_GET["action"]) ? $_GET["action"] : (isset($_POST["action"]) ? $_POST["action"] : "no se encontro");
switch ($action) {

    case 'uno':
        break;

    default:
        echo 'No criteria matched on action case';
        break;
}

