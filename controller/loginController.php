<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../conexion.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Obtener el hash de la contraseña almacenada en la base de datos
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $storedPasswordHash = $row['password'];

        // Verificar la contraseña hasheada
        if (password_verify($password, $storedPasswordHash)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['rol'] = $row['rol'];

            // Redirigir según el rol del usuario
            if ($row['rol'] === 'admin') {
                header("Location: ../views/dashboard.php");
            } else {
                header("Location: ../views/main.php");
            }
            exit();
        }
    }

    // Si no se encuentra el usuario o la contraseña no coincide, redirige al inicio de sesión
    header("Location: ../views/login.php");
    exit();
}
?>