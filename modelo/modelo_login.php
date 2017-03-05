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
        $row = mysqli_fetch_assoc($query);
        $idusuario = $row['id_usuario'];
        $usuario = $row['nombre_usuario'];
        $idempleado = $row['id_empleado'];
        $idestado = $row['id_estado_usuario'];
        session_start();
        $_SESSION["idusuario"] = $idusuario;
        $_SESSION["usuario"] = $usuario;
        $_SESSION["idempleado"] = $idempleado;
        $_SESSION["idestado"] = $idestado;
        echo 1;
    } else {
        echo 2;
    }
}
