<?php
// dashboard.php
include('../controller/session.php');
include('../conexion.php');
include('../controller/verAdmin.php');
include('../controller/dashboardController.php');
?>

<!DOCTYPE html>
<html lang="es">

<!-- Head -->
<?php include('./includes/head.php'); ?>

<body>
    <style>
        .card-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>


    <!-- Header -->
    <?php include('./includes/header.php'); ?>

    <main class="container mt-5 mb-5">
        <h2 class="pb-3">Tablero - Administrador</h2>
        <div class="row">
            <div class="col-md-8">
                <h3>Tabla de Libros</h3>
                <div style="max-height: 90vh; overflow-y: auto;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Libro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                $libroEnCarrito = in_array($row['id'], $librosEnCarrito);

                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <h5 class="card-title <?php echo $libroEnCarrito ? 'text-muted' : ''; ?>">
                                            <?php echo $row['titulo']; ?>
                                        </h5>
                                        <h6 class="<?php echo $libroEnCarrito ? 'text-muted' : ''; ?>">
                                            <?php echo $row['autor']; ?>
                                        </h6>
                                        <p class="<?php echo $libroEnCarrito ? 'text-muted' : ''; ?>">
                                            $
                                            <?php echo $row['precio']; ?>
                                        </p>
                                    </td>
                                    <td>
                                        <?php if (!$libroEnCarrito) { ?>
                                            <!-- Enlaces para Editar y Eliminar solo si no está en el carrito -->
                                            <a href="editar_libro.php?id_libro=<?php echo $row['id']; ?>"
                                                class="btn btn-sm btn-warning">Editar</a>
                                            <a href="../controller/eliminar_libro.php?id_libro=<?php echo $row['id']; ?>"
                                                class="btn btn-sm btn-danger">Eliminar</a>
                                        <?php } else { ?>
                                            <!-- Texto en lugar de botones si está en el carrito -->
                                            <span class="text-muted">En el carrito</span>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Crear Libro</h3>
                <form action="../controller/crear_libro.php" method="post">
                    <!-- Agrega aquí los campos del formulario según tus necesidades -->
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="autor" name="autor" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" required>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">URL de la Imagen</label>
                        <input type="text" class="form-control" id="imagen" name="imagen" required>
                    </div>
                    <div class="mb-3">
                        <label for="formato" class="form-label">Formato</label>
                        <input type="text" class="form-control" id="formato" name="formato" required>
                    </div>
                    <div class="mb-3">
                        <label for="ano_publicacion" class="form-label">Año de Publicación</label>
                        <input type="number" class="form-control" id="ano_publicacion" name="ano_publicacion" required>
                    </div>
                    <div class="mb-3">
                        <label for="idioma" class="form-label">Idioma</label>
                        <input type="text" class="form-control" id="idioma" name="idioma" required>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoría</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Libro</button>
                </form>
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