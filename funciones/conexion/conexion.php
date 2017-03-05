<?php

$url = "localhost";
$usuario = "root";
$clave = "";
$db = "inventario";
$conexion = mysqli_connect($url, $usuario, $clave, $db);

if ($conexion) {
    echo 1;
} else {
    echo 2;
}
