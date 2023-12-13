<!-- enviar_correo.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $para = "dici.cec@gmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $asunto = "Nuevo mensaje de contacto de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n";
    $contenido .= "Mensaje:\n$mensaje";

    $headers = "From: $email";

    mail($para, $asunto, $contenido, $headers);

    header("Location: contacto.php");
}
?>