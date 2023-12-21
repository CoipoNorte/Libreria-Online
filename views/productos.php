<!-- productos.php -->
<style>
    @media (min-width: 992px) {
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

<div class="row mt-4">
    <?php
    // Conexion a la DB 
    include('../conexion.php');

    // Consulta SQL para obtener los productos
    $sql = "SELECT id, titulo, autor, precio, imagen FROM libros";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Imprimir los productos
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
    } else {
        echo "parece que nos quedamos sin libros :(";
    }
    // Desconexion de la DB 
    include('../closeconexion.php');
    ?>
</div>
