<?php
function calcularTotalCarrito($conn)
{
    $sql = "SELECT SUM(libros.precio * carrito.cantidad) as total FROM carrito JOIN libros ON carrito.libro_id = libros.id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return isset($row['total']) ? '$' . $row['total'] : '$0.00';
}

include('../conexion.php');

// Obtener los productos del carrito
$sql = "SELECT carrito.id, libros.titulo, libros.precio, carrito.cantidad FROM carrito JOIN libros ON carrito.libro_id = libros.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar la tabla de productos en el carrito
    ?>
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
            <h2>Carrito de Compras</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Precio Unitario</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        $total = $row['precio'] * $row['cantidad'];
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['id']; ?>
                            </td>
                            <td>
                                <?php echo $row['titulo']; ?>
                            </td>
                            <td>
                                <?php echo '$' . $row['precio']; ?>
                            </td>
                            <td>
                                <form action="actualizar_cantidad.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="number" name="cantidad" value="<?php echo $row['cantidad']; ?>" min="1">
                                    <button type="submit" class="btn btn-sm btn-success">Actualizar</button>
                                </form>
                            </td>
                            <td>
                                <?php echo '$' . $total; ?>
                            </td>
                            <td>
                                <a href="eliminar_producto.php?id=<?php echo $row['id']; ?>"
                                    class="btn btn-sm btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

            <div class="text-end">
                <strong>Total:</strong>
                <?php echo calcularTotalCarrito($conn); ?>
                <form action="comprar.php" method="post" class="mt-3">
                    <button type="submit" class="btn btn-primary">Comprar</button>
                </form>
            </div>
        </main>

        <!-- Footer -->
        <?php
            include('../closeconexion.php');
            include('./includes/footer.php');
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
    <?php
} else {
    include('../closeconexion.php');
    // Redirigir a la página del carrito
    header('Location: index.php');
}
?>