<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $database = "biblioteca";

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$database", $usuario, $clave);
       
        $consulta = "INSERT INTO Libros (id_libros,titulo,precio) VALUES (?,?,?)";
        
        $resultado = $conexion->prepare($consulta);

        $resultado->bindParam(1, $id_libros);
        $resultado->bindParam(2, $titulo);
        $resultado->bindParam(3, $precio);
        

        $id_libros = 103;
        $titulo = 'Don Quijote de la Mancha';
        $precio = 10;
 
        $resultado->execute();
       
        $resultado->bindParam(1, $id_libros);
        $resultado->bindParam(2, $titulo);
        $resultado->bindParam(3, $precio);
  

        $id_libros = 203;
        $titulo = 'Gregorio';
        $precio = 8000;
        
        $resultado->execute();

        
    }
    catch (PDOException $exception){
        echo "Fallo de conexión ", $exception->getmessage();
    }
    $conexion = null;

?>