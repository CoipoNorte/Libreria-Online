<?php
session_start();

// Verificar si existe la variable de sesión id
if (isset($_SESSION['id'])) {
    // La variable de sesión id_usuario se establece con el valor de la sesión id
    $_SESSION['id_usuario'] = $_SESSION['id'];
}

$title = "Librería Online";

// Verificar si la variable de sesión id_usuario está definida
$usuario_id = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : null;

// Obtener información adicional del usuario si está autenticado
if ($usuario_id) {
    include('../conexion.php');
    
    $sql = "SELECT * FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $usuario_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        $title = "Bienvenido " . $usuario['nombre']; // Actualiza el título con el nombre del usuario
    }

    // Cierra la conexión
    include('../closeconexion.php');
}
?>

