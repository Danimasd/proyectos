<?php

function getInformacion() {
    global $conexion;
    $sql = "SELECT *FROM tbl_informacion";
    $query = mysqli_query($conexion, $sql);
    $arr = [];
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $arr = $row;
    } else {
        $arr = ["Nombre" => 0];
    }
    echo json_encode($arr);
}
