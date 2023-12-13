<!-- actualizar_cantidad.php -->
<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $cantidad = $_POST['cantidad'];

    // Actualizar la cantidad en la base de datos
    $sql = "UPDATE carrito SET cantidad = $cantidad WHERE id = $id";
    $conn->query($sql);
}

header('Location: carrito.php');
exit();
?>
