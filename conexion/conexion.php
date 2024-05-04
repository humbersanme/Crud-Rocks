<?php


/* Definimos las credenciales de la base de datos */
$servidor = "localhost";
$usuario = "id21555305_sanmen";
$password = "Madrid_2017";
$base_de_datos = "id21555305_basedatos1";


// Conectamos a la base de datos usando la función mysqli_connect
$conexion = new mysqli($servidor, $usuario, $password, $base_de_datos);
$conexion->set_charset("utf8");
// Verificamos si la conexión fue exitosa
if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}
?>