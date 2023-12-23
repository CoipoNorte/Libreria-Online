<?php
// Verifica si se proporciona un ID de libro
if (!isset($_GET['id_libro'])) {
    header("Location: dashboard.php");
    exit();
}

$id_libro = $_GET['id_libro'];

// Obtén los datos del libro
$sql_libro = "SELECT * FROM libros WHERE id = $id_libro";
$result_libro = $conn->query($sql_libro);

// Verifica si el libro existe
if ($result_libro->num_rows == 0) {
    header("Location: dashboard.php");
    exit();
}

$row_libro = $result_libro->fetch_assoc();

// Inicializa variables con los datos del libro
$titulo = $row_libro['titulo'];
$autor = $row_libro['autor'];
$descripcion = $row_libro['descripcion'];
$precio = $row_libro['precio'];
$imagen = $row_libro['imagen'];
$formato = $row_libro['formato'];
$ano_publicacion = $row_libro['ano_publicacion'];
$idioma = $row_libro['idioma'];
$categoria = $row_libro['categoria'];

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Actualiza los datos del libro
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $formato = $_POST['formato'];
    $ano_publicacion = $_POST['ano_publicacion'];
    $idioma = $_POST['idioma'];
    $categoria = $_POST['categoria'];

    $sql_actualizar = "UPDATE libros SET 
                        titulo = '$titulo', 
                        autor = '$autor', 
                        descripcion = '$descripcion', 
                        precio = $precio, 
                        imagen = '$imagen', 
                        formato = '$formato', 
                        ano_publicacion = $ano_publicacion, 
                        idioma = '$idioma', 
                        categoria = '$categoria' 
                        WHERE id = $id_libro";

    if ($conn->query($sql_actualizar) === TRUE) {
        echo "Libro actualizado con éxito.";
    } else {
        echo "Error: " . $sql_actualizar . "<br>" . $conn->error;
    }
}

// Cierra la conexión a la base de datos
$conn->close();
?>
