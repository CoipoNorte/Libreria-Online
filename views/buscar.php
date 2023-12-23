<!-- buscar.php -->

<!-- Session ? -->
<?php include('../controller/session.php'); ?>

<!DOCTYPE html>
<html lang="es">

<!-- Head -->
<?php include('./includes/head.php'); ?>

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
<?php include('./includes/header.php'); ?>

<main class="container mt-5 mb-5">

    <?php
    // Conexion a la DB 
    include('../conexion.php');

    if (isset($_GET['busqueda'])) {
        $busqueda = $_GET['busqueda'];

        // Consulta SQL para buscar libros por título o autor
        $sql = "SELECT id, titulo, autor, precio, descripcion, imagen FROM libros WHERE titulo LIKE '%$busqueda%' OR autor LIKE '%$busqueda%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<h2>Resultados de la búsqueda: "' . $busqueda . '"</h2>';
            // Imprimir los resultados de la búsqueda
            echo '<div class="row mt-4">';
            while ($row = $result->fetch_assoc()) {
                echo '
                    <div class="col-md-2 mb-4">
                        <div class="card">
                            <a href="verproducto.php?id=' . $row['id'] . '">
                                <img src="../img/' . $row['imagen'] . '" class="card-img-top img-thumbnail" alt="Imagen del Producto">
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
            echo '<h1>No se encontraron resultados para la búsqueda: "' . $busqueda . '"</h1>';
        }
    } else {
        echo '<h1>Ingrese un título o autor para buscar.</h1>';
    }

    // Desconexion de la DB 
    include('../closeconexion.php');
    ?>
</main>

<!-- Footer -->
<?php include('./includes/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
