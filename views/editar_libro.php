<?php
// editar_libro.php
include('../controller/session.php');
include('../conexion.php');
include('../controller/verAdmin.php');
include('../controller/editar_libroController.php');
?>

<!DOCTYPE html>
<html lang="es">

<!-- Head -->
<?php include('./includes/head.php'); ?>

<body>

    <!-- Header -->
    <?php include('./includes/header.php'); ?>

    <main class="container mt-5 mb-5">
        <h2>Editar Libro</h2>
        <div class="row">
            <div class="col-md-8">
                <!-- Formulario para editar el libro -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?id_libro=$id_libro"; ?>"
                    method="post">
                    <!-- Agrega aquí los campos del formulario según tus necesidades -->
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $titulo; ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $autor; ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion"
                            required><?php echo $descripcion; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio"
                            value="<?php echo $precio; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">URL de la Imagen</label>
                        <input type="text" class="form-control" id="imagen" name="imagen" value="<?php echo $imagen; ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="formato" class="form-label">Formato</label>
                        <input type="text" class="form-control" id="formato" name="formato"
                            value="<?php echo $formato; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="ano_publicacion" class="form-label">Año de Publicación</label>
                        <input type="number" class="form-control" id="ano_publicacion" name="ano_publicacion"
                            value="<?php echo $ano_publicacion; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="idioma" class="form-label">Idioma</label>
                        <input type="text" class="form-control" id="idioma" name="idioma" value="<?php echo $idioma; ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoría</label>
                        <input type="text" class="form-control" id="categoria" name="categoria"
                            value="<?php echo $categoria; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Libro</button>
                </form>
            </div>
            <div class="col-md-4">
                <!-- Muestra la información del libro a la derecha -->
                <h3>Vista previa del Libro</h3>
                <p><strong>Título:</strong>
                    <?php echo $titulo; ?>
                </p>
                <p><strong>Autor:</strong>
                    <?php echo $autor; ?>
                </p>
                <p><strong>Descripción:</strong>
                    <?php echo $descripcion; ?>
                </p>
                <p><strong>Precio:</strong> $
                    <?php echo $precio; ?>
                </p>
                <img src="../img/<?php echo $imagen; ?>" alt="Imagen del Libro" class="img-fluid" style="max-width: 200px;">
                <p><strong>Formato:</strong>
                    <?php echo $formato; ?>
                </p>
                <p><strong>Año de Publicación:</strong>
                    <?php echo $ano_publicacion; ?>
                </p>
                <p><strong>Idioma:</strong>
                    <?php echo $idioma; ?>
                </p>
                <p><strong>Categoría:</strong>
                    <?php echo $categoria; ?>
                </p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include('./includes/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>