<?php
class Cliente{
    public $IdCliente;
    public $Nombre;
    public $Contacto;
    public $Cargo;
    public $Ciudad;
    public $Pais;
    public $Telefono;
}
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "bendetto";
try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $clave);
    $consulta = "SELECT * FROM clientes WHERE Ciudad = ? ORDER BY Nombre";
    $resultado = $conexion->prepare($consulta);
    $resultado->bindParam(1, $ciudad);
    $ciudad = "México D.F.";
    $resultado->execute();
    echo "<table><caption>Clientes de  “ $ciudad “</caption>";
    echo " <th>Nombre</th> <th>Telefono</th>";
    while ($cliente = $resultado->fetchObject('Cliente')) {
    echo "<tr>";
    echo "<td>",$cliente->Nombre , "</td>";
    echo "<td>",$cliente->Telefono , "</td>";
    echo "</tr>";
    }
}
catch (PDOException $exception){
    echo "Fallo de conexión", $exception->getmessage();
}
$conexion = null;
?>