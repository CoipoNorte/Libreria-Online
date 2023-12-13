<!-- eliminar_producto.php -->
<?php
include('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el producto del carrito
    $sql = "DELETE FROM carrito WHERE id = $id";
    $conn->query($sql);
}

header('Location: carrito.php');
exit();
?>
