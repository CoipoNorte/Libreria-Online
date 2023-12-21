<!-- categorias.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Librería Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<!-- Header -->
<?php include('./includes/header.php'); ?>

<main class="container mt-5 mb-5">
    <h2 class="mb-4">Categorías</h2>
    
    <div class="row">
        <?php
        // Incluir la conexión a la base de datos
        include('../conexion.php');

        // Consulta SQL para obtener las categorías
        $sql = "SELECT DISTINCT categoria FROM libros";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                    <div class="col-md-3 mb-3">
                        <a class="btn btn-warning" href="vercategoria.php?categoria=' . $row['categoria'] . '">' . $row['categoria'] . '</a>
                    </div>
                ';
            }
        } else {
            echo "No hay categorías disponibles.";
        }

        // Cerrar la conexión
        include('../closeconexion.php');
        ?>
    </div>
</main>

<!-- Footer -->
<?php include('./includes/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
