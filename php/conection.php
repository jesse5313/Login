<?php
// Conexión a la base de datos
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "prueba";

$conn = new mysqli($servername, $user, $password, $dbname);

// Verificación de conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>