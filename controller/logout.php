<?php
session_start();

// Limpiar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Limpiar la cookie de sesión
setcookie(session_name(), '', time() - 3600, '/');

// Redirigir a la página de inicio o a donde desees
header("Location: ../views/main.php");
exit();
?>
