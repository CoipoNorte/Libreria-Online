<?php
session_start();

// Destruir todas las variables de sesión
session_destroy();

// Redirigir a la página de inicio o a donde desees
header("Location: ../views/main.php");
exit();
?>
