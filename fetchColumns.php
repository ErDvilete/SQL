
<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $base_datos = "bendetto";
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario,
        $clave);
        $consulta = "SELECT * FROM productos ORDER BY Nombre ";
        $resultado = $conexion->query($consulta);
        echo "<ul>";
        foreach($resultado->fetchAll(PDO::FETCH_COLUMN,1) as $nombre){
            echo "<li>", $nombre, "</li>";

        }
        echo "</ul>";
    }
    catch (PDOException $exception){
        echo "Fallo de conexión", $exception->getmessage();
    }
    $conexion = null;

    echo  "<img src='Virgen-Maria.jpg' alt='imagen de ejemplo'>";
?>