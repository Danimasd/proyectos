<?php

$url = "localhost";
$usuario = "root";
$clave = "";
$db = "instituto";
$conexion = mysqli_connect($url, $usuario, $clave, $db);

if ($conexion) {
    echo 1;
} else {
    echo 2;
}
