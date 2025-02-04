<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $database = "biblioteca";

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$database", $usuario, $clave);
       
        $consulta = "INSERT INTO Libros (id_libros,titulo,precio) VALUES (:id_libros,:titulo,:precio)";
        
        $resultado = $conexion->prepare($consulta);

     
        

        $id_libros = 108;
        $titulo = 'Don Quijote ';
        $precio = 10;
 
        $resultado->execute(array(':id_libros' => $id_libros, ':titulo' => $titulo, ':precio' => $precio));
      
  

        $id_libros = 208;
        $titulo = 'Gregoria Croqueta';
        $precio = 8000;
        
        $resultado->execute(array(':id_libros' => $id_libros, ':titulo' => $titulo, ':precio' => $precio));

        
    }
    catch (PDOException $exception){
        echo "Fallo de conexión ", $exception->getmessage();
    }
    $conexion = null;

?>