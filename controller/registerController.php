<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión a la base de datos
    require_once '../conexion.php';

    // Recuperar los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar si el correo electrónico ya está registrado
    $checkEmailQuery = "SELECT * FROM usuarios WHERE email = '$email'";
    $checkEmailResult = $conn->query($checkEmailQuery);

    if ($checkEmailResult->num_rows > 0) {
        header('Location: ../views/register.php');
    } else {
        // Insertar el nuevo usuario en la base de datos
        $insertQuery = "INSERT INTO usuarios (nombre, email, password, rol) VALUES ('$name', '$email', '$password', 'cliente')";
        
        if ($conn->query($insertQuery) === TRUE) {
            header('Location: ../views/login.php');
        } else {
            header('Location: ../views/main.php');
        }
    }
    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
