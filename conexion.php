<?php
// <!-- conexion.php -->
$servername = "localhost";
$username = "root";  // Nombre de usuario predeterminado para XAMPP es "root"
$password = "";      // La contraseña por defecto es generalmente vacía en XAMPP
$dbname = "libreria";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
