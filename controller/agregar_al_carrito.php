<!-- agregar_al_carrito.php -->
<?php
include('../conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $libro_id = $_POST['libro_id'];
    $libro_titulo = $_POST['libro_titulo'];
    $libro_precio = $_POST['libro_precio'];
    $cantidad = $_POST['cantidad'];

    // Verificar si el libro ya está en el carrito
    $sql_verificar = "SELECT id FROM carrito WHERE libro_id = $libro_id";
    $resultado_verificar = $conn->query($sql_verificar);

    if ($resultado_verificar->num_rows > 0) {
        // Actualizar la cantidad si el libro ya está en el carrito
        $sql_actualizar = "UPDATE carrito SET cantidad = cantidad + $cantidad WHERE libro_id = $libro_id";
        $conn->query($sql_actualizar);
    } else {
        // Insertar el libro en el carrito si no está presente
        $sql_insertar = "INSERT INTO carrito (libro_id, cantidad) VALUES ($libro_id, $cantidad)";
        $conn->query($sql_insertar);
    }

    // Cierra la conexión
    include('../closeconexion.php');

    // Redirigir a la página del carrito
    header('Location: verproducto.php?id=' . $libro_id);
    
    exit();
} else {
    // Cierra la conexión
    include('../closeconexion.php');
    // Si el formulario no se envió correctamente, redirigir a la página de inicio o a donde desees
    header('Location: index.php');
    exit();
}
?>