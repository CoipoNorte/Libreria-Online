<?php
// dashboard.php
include('../conexion.php');

// Obtener todos los libros de la base de datos
$sql = "SELECT * FROM libros";
$result = $conn->query($sql);

// Obtener libros en el carrito
$sql = "SELECT libro_id FROM carrito";
$resultCarrito = $conn->query($sql);

// Inicializar un array para almacenar los ID de los libros en el carrito
$librosEnCarrito = array();

// Verificar si hay resultados
if ($resultCarrito->num_rows > 0) {
    // Iterar a través de los resultados y almacenar los ID en el array
    while ($rowCarrito = $resultCarrito->fetch_assoc()) {
        $librosEnCarrito[] = $rowCarrito['libro_id'];
    }
}
?>