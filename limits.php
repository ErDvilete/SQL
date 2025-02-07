<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $base_datos = "Biblioteca";
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario,$clave);
        $consulta = "SELECT * FROM Libros WHERE Titulo = ? ORDER BY id_libros";
        $resultado = $conexion->prepare($consulta);
        $resultado->bindParam(1,$titulo);
        $titulo = "Don Quijote De La Mancha";
        $resultado->execute();
        echo "<table><caption>Libros  “ $titulo “</caption>";
        echo " <th>ID</th> <th>Titulo</th>";
       
        while ($tupla = $resultado->fetch()){
            echo "<tr>";
            echo "<td>",$tupla[0] , "</td>";
            echo "<td>",$tupla["titulo"] ,"</td>";
            echo "</tr>";
    }
        echo "</table>";
    }
    catch (PDOException $exception){
    echo "Fallo de conexión", $exception->getmessage();
    }
    $conexion = null;

    //poner una imagen en html

    echo  "<img src='Virgen-Maria.jpg' alt='imagen de ejemplo'>";
?>
