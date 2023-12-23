<?php
// Incluye el archivo de sesión
include('../controller/session.php');
include('../conexion.php');

// Verifica si la variable $usuario está definida
if (isset($usuario)) {
    // El usuario está autenticado, procede a obtener la información del libro desde el formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtener los datos del formulario
        $libro_id = $_POST['libro_id'];
        $libro_titulo = $_POST['libro_titulo'];
        $libro_precio = $_POST['libro_precio'];
        $cantidad = $_POST['cantidad'];

        // Verificar si el libro ya está en el carrito
        $sql_verificar = "SELECT id FROM carrito WHERE libro_id = ? AND usuario_id = ?";
        $stmt_verificar = $conn->prepare($sql_verificar);
        $stmt_verificar->bind_param("ii", $libro_id, $usuario['id']);
        $stmt_verificar->execute();
        $resultado_verificar = $stmt_verificar->get_result();

        if ($resultado_verificar->num_rows > 0) {
            // Actualizar la cantidad si el libro ya está en el carrito
            $sql_actualizar = "UPDATE carrito SET cantidad = cantidad + ? WHERE libro_id = ? AND usuario_id = ?";
            $stmt_actualizar = $conn->prepare($sql_actualizar);
            $stmt_actualizar->bind_param("iii", $cantidad, $libro_id, $usuario['id']);
            $stmt_actualizar->execute();
        } else {
            // Añadir al carrito con el ID del usuario
            $sql_insertar = "INSERT INTO carrito (usuario_id, libro_id, cantidad) VALUES (?, ?, ?)";
            $stmt_insertar = $conn->prepare($sql_insertar);
            $stmt_insertar->bind_param("iii", $usuario['id'], $libro_id, $cantidad);
            $stmt_insertar->execute();
        }

        // Cierra la conexión
        include('../closeconexion.php');

        // Redirigir a la página del carrito o a donde desees
        header("Location: ../views/verproducto.php?id=" . $libro_id);
        exit();
    } else {
        // Si el formulario no se envió correctamente, redirigir a la página de inicio
        header('Location: ../views/main.php');
        exit();
    }
} else {
    // Si el usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    header('Location: ../views/login.php');
    exit();
}
?>