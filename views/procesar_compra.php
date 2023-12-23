<!-- procesar_compra.php -->
<?php
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
        <h2>Procesar Compra</h2>
        <div class="row">
            <div class="col-md-8">
                <h3>Información de Tarjeta de Crédito</h3>
                <form action="../controller/comprar.php" method="post">
                    <div class="mb-3">
                        <label for="num_tarjeta" class="form-label">Número de Tarjeta</label>
                        <input type="text" class="form-control" id="num_tarjeta" name="num_tarjeta" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre_tarjeta" class="form-label">Nombre en la Tarjeta</label>
                        <input type="text" class="form-control" id="nombre_tarjeta" name="nombre_tarjeta" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="exp_mes" class="form-label">Mes de Expiración</label>
                            <input type="text" class="form-control" id="exp_mes" name="exp_mes" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="exp_anio" class="form-label">Año de Expiración</label>
                            <input type="text" class="form-control" id="exp_anio" name="exp_anio" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cvc" class="form-label">CVC</label>
                        <input type="text" class="form-control" id="cvc" name="cvc" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Realizar Compra</button>
                </form>
            </div>
            <div class="col-md-4">
                <div style="max-height: 90vh; overflow-y: auto;">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $total = $row['precio'] * $row['cantidad'];
                                    ?>
                                    <tr>
                                        <td class="text-center">
                                            <img src="../img/<?php echo $row['imagen']; ?>" alt="Imagen Producto"
                                                class="img-fluid" style="max-width: 200px;">
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
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
