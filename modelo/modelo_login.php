<?php

include './conexion/conexion.php';

function inicio() {
    echo "hola mundo";
}

function inicio_session($usuario, $clave) {
    global $conexion;
    $sql = "SELECT * FROM tbl_usuario WHERE Nombre_usuario = '$usuario'  and clave= '$clave' ";
    $query = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($query) > 0) {
        echo 1;
    } else {
        echo 2;
    }
}
