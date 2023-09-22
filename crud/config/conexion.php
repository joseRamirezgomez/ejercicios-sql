<?php


    $host  = "localhost";
    $user = "root";
    $pass = "";
    $db = "crud";

    $conexion =new mysqli($host,$user,$pass,$db);

    if (!$conexion) {
        echo 'Conexion fallida';    
    }
    ?>