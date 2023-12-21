<?php
include('../conexion.php');

// Procesar la compra

// Limpiar el carrito
$sqlLimpiarCarrito = "DELETE FROM carrito";
$conn->query($sqlLimpiarCarrito);

include('../closeconexion.php');

header('Location: index.php'); // Redirige a la página principal después de la compra
?>
