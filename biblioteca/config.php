<?php
$host = "localhost";
$username = "root"; // también corregí el nombre (tenías "usarname")
$password = "";
$database = "biblioteca";
$port = 3306;

// Crear conexion
$conexion = new mysqli($host, $username, $password, $database, $port);

// Verificar conexion
if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}
?>
    