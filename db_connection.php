<?php
$servername = "localhost"; 
$username = "tu_usuario"; 
$password = "tu_contraseña"; 
$database = "tu_base_de_datos"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
