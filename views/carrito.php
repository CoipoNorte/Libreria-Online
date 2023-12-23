<!-- carrito.php -->
<?php
// Incluimos el archivo de sesión al inicio
include('../controller/session.php');
include('../conexion.php');
include('../controller/carritoController.php');
?>

<!DOCTYPE html>
<html lang="es">

<!-- Head -->
<?php include('./includes/head.php'); ?>

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
                    <th>Imagen</th>
                    <th>Precio Unitario</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
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
                                <img src="../img/<?php echo $row['imagen']; ?>" alt="Imagen Producto" class="img-fluid"
                                    style="max-width: 100px;">
                            </td>
                            <td>
                                <?php echo '$' . $row['precio']; ?>
                            </td>
                            <td>
                                <form action="../controller/actualizar_cantidad.php" method="post"
                                    class="d-flex align-items-center">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="number" name="cantidad" value="<?php echo $row['cantidad']; ?>" min="1"
                                        class="form-control rounded-start text-center border-light">
                                    <button type="submit" class="btn btn-sm btn-success rounded-end">Actualizar</button>
                                </form>
                            </td>
                            <td>
                                <?php echo '$' . $total; ?>
                            </td>
                            <td>
                                <a href="../controller/eliminar_producto.php?id=<?php echo $row['id']; ?>"
                                    class="btn btn-sm btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <?php if ($result->num_rows > 0) { ?>
            <div class="text-end">
                <strong>Total a pagar:</strong>
                <?php echo calcularTotalCarrito($conn, $_SESSION['id_usuario']); ?>
                <form action="procesar_compra.php" method="post" class="mt-3">
                    <button type="submit" class="btn btn-primary">Ir a Pagar</button>
                </form>
            </div>
        <?php } ?>

    </main>

    <!-- Footer -->
    <?php
    include('../closeconexion.php');
    include('./includes/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>