<!-- vercategoria.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Librería Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<style>
    @media (min-width: 992px) {
        /* Aplica estos estilos solo a pantallas de 992px (tamaño LG) o más grandes */
        .card {
            height: 420px;
            display: flex;
            flex-direction: column;
        }

        .card img {
            max-height: 100%;
            width: auto;
        }

        .card-body {
            flex: 1;
            overflow: hidden;
        }

        .card-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    }
</style>

<!-- Header -->
<?php include('header.php'); ?>

<main class="container mt-5 mb-5">
    <?php
    // Incluir la conexión a la base de datos
    include('conexion.php');

    // Obtener la categoría desde la URL
    $categoria = $_GET['categoria'];

    // Consulta SQL para obtener los libros de la categoría seleccionada
    $sql = "SELECT id, titulo, autor, precio, descripcion, imagen FROM libros WHERE categoria = '$categoria'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Imprimir los libros
        echo '<h2 class="mb-4">Libros de la categoría: ' . $categoria . '</h2>';
        echo '<div class="row">';
        while ($row = $result->fetch_assoc()) {
            echo '
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <a href="verproducto.php?id=' . $row['id'] . '">
                            <img src="./img/' . $row['imagen'] . '" class="card-img-top img-thumbnail" alt="Imagen del Producto">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">' . $row['titulo'] . '</h5>
                            <p class="card-text">Autor: ' . $row['autor'] . '</p>
                            <p class="card-text">Precio: $' . $row['precio'] . '</p>
                        </div>
                    </div>
                </div>
            ';
        }
        echo '</div>';
    } else {
        echo "No hay libros disponibles en esta categoría.";
    }

    // Cerrar la conexión
    include('closeconexion.php');
    ?>
</main>

<!-- Footer -->
<?php include('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
