<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "cmf_engines_db";

    $conexionDB = mysqli_connection($server, $user, $password, $db) or die ('Error conexion a DB');
?>