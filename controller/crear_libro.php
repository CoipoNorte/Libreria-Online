<?php
// procesar_agregar_libro.php
include('../conexion.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $formato = $_POST['formato'];
    $ano_publicacion = $_POST['ano_publicacion'];
    $idioma = $_POST['idioma'];
    $categoria = $_POST['categoria'];

    // Ahora, puedes insertar estos valores en la base de datos.
    $sql = "INSERT INTO libros (titulo, autor, descripcion, precio, imagen, formato, ano_publicacion, idioma, categoria)
            VALUES ('$titulo', '$autor', '$descripcion', $precio, '$imagen', '$formato', $ano_publicacion, '$idioma', '$categoria')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/dashboard.php");
        exit();
    } else {
        header("Location: ../views/dashboard.php");
        exit();
    }
}
?>

?>