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
$consulta = "SELECT * FROM clientes";
$resultado = $conexion->query($consulta);
$cliente = $resultado->fetchObject('Cliente');
var_dump($cliente);
}
catch (PDOException $exception){
echo "Fallo de conexión", $exception->getmessage();
}
$conexion = null;
echo  "<img src='Virgen-Maria.jpg' alt='imagen de ejemplo'>";

?>
