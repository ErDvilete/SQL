<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $database = "Biblioteca";

    try {
        $conexion = new PDO("mysql:host=$servidor", $usuario, $clave);
        $borrarDatabase = "DROP DATABASE IF EXISTS $database";
        $createDatabase = "CREATE DATABASE if not exists $database";
        $conexion->query($borrarDatabase);
        $resultado= $conexion->query($createDatabase);
        echo "Se ha creado la base de datos correctamente";

        $tablas = 
        " USE Biblioteca;
        CREATE TABLE if not exists Libros (id_libros int Primary key,
                                           titulo varchar(100), 
                                           precio decimal (5,2)
                                           );
        CREATE TABLE if not exists Lectores (DNI varchar(9) Primary key,
                                            nombre varchar(50),
                                            fecha_nacimiento date
                                            );
        CREATE TABLE if not exists Prestamos (id_libros int, 
                                            DNI varchar(9),
                                            fecha_compra date,
                                            FOREIGN KEY (id_libros) REFERENCES Libros(id_libros),
                                            FOREIGN KEY (DNI) REFERENCES Lectores(DNI)
                                            );";
        
        
    }
    catch (PDOException $exception){
        echo "Fallo de conexión ", $exception->getmessage();
    }
    $conexion = null;

?>