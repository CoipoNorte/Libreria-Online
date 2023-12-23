<?php
include('../controller/session.php');
include('../conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_libro'])) {
    $id_libro = $_GET['id_libro'];

    $sql = "DELETE FROM libros WHERE id='$id_libro'";
    $result = $conn->query($sql);

    if ($result) {
        // Operación de eliminación exitosa
        header("Location: ../views/dashboard.php");
        exit();
    } else {
        // Operación de eliminación exitosa
        header("Location: ../views/dashboard.php");
        exit();
    }
}

$conn->close();
?>
