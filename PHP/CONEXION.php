<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "primera_bd";

    $conexion = mysqli_connect($servidor, $usuario, $password, $bd);

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
?>