<?php
if (isset($usuario)) {
    // Consulta SQL para obtener productos en el carrito del usuario
    $sql = "SELECT carrito.id, libros.titulo, libros.imagen, libros.precio, carrito.cantidad 
        FROM carrito 
        JOIN libros ON carrito.libro_id = libros.id 
        WHERE carrito.usuario_id = {$_SESSION['id_usuario']}";

    $result = $conn->query($sql);
} else {
    // Si el usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    header('Location: ../views/login.php');
    exit();
}
// Función para calcular el total del carrito
function calcularTotalCarrito($conn, $usuario_id)
{
    $sql = "SELECT SUM(libros.precio * carrito.cantidad) as total 
            FROM carrito 
            JOIN libros ON carrito.libro_id = libros.id 
            WHERE carrito.usuario_id = $usuario_id";

    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        return isset($row['total']) ? '$' . $row['total'] : '$0.00';
    } else {
        return '$0.00';
    }
}
?>