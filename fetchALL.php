<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "Biblioteca";
try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario,
    $clave);
    $consulta = "SELECT * FROM Libros ORDER BY Autor";
    $resultado = $conexion->query($consulta);
    echo "<table><caption>Biblioteca</caption>";
    echo "<tr> <th>Titulo</th> <th>Autor</th></tr>";
    $libros = $resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach ($libros as $libro)
    {
        echo "<tr>"; echo "<td>",$libro['titulo'] , "</td>";
        echo "<td>",$libro['Autor'] , "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
catch (PDOException $exception){
    echo "Fallo de conexión", $exception->getmessage();
}
$conexion = null;
?>