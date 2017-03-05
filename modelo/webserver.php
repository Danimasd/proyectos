<?php

include './conexion/conexion.php';
include './modelo_login.php';
$action = isset($_GET["action"]) ? $_GET["action"] : (isset($_POST["action"]) ? $_POST["action"] : "no se encontro");
switch ($action) {
    case 'inicio_session':
        $usuario = isset($_GET["usuario"]) ? $_GET["usuario"] : (isset($_POST["usuario"]) ? $_POST["usuario"] : 0);
        $clave = isset($_GET["clave"]) ? $_GET["clave"] : (isset($_POST["clave"]) ? $_POST["clave"] : 0);
        inicio_session($usuario, $clave);
        break;
    default:
        echo 'no se encotro registro';
        break;
}

