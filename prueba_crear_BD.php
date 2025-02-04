<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    try {
        $conexion = new PDO("mysql:host=$servidor", $usuario, $clave);
        $consulta = "CREATE DATABASE Biblioteca";
        $resultado = $conexion->query($consulta);
        if ($resultado) {
            echo "Se ha creado la base de datos 'Biblioteca'";
        } else {
            echo "Error al ejecutar la consulta";
        }
    }
    catch (PDOException $exception){
        echo "Fallo de conexión ", $exception->getmessage();
    }
    $conexion = null;
 ?>