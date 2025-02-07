<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "Biblioteca";
try {
$conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario,$clave);
$consulta = "SELECT Libros.titulo FROM Libros INNER JOIN Prestamos ON (Prestamos.id_libros = Libros.id_libros) INNER JOIN Lectores ON (Lectores.DNI = Prestamos.DNI) WHERE Lectores.DNI = ? ORDER BY titulo";
$resultado = $conexion->prepare($consulta);
$resultado->bindParam(1,$DNI);
$DNI = "12344567B";
$resultado->execute();
echo "<table><caption>Libros del lector con DNI “ $DNI “</caption>";
echo " <th>Titulo</th>";
while ($tupla = $resultado->fetch()){
echo "<tr>";
echo "<td>",$tupla['titulo'] , "</td>";
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