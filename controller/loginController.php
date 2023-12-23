<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../conexion.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['rol'] = $row['rol'];

        // Redirigir a la página de inicio de sesión exitosa o a donde desees
        header("Location: ../views/main.php");
        exit();
    } else {
        header("Location: ../views/login.php");
    }
    $conn->close();
}
?>
