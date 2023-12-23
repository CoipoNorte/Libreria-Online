<!-- login -->

<!-- Session ? -->
<?php include('../controller/session.php'); ?>

<!DOCTYPE html>
<html lang="es">

<!-- Head -->
<?php include('./includes/head.php'); ?>

<body>

    <!-- Header -->
    <?php include('./includes/header.php'); ?>

    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Bienvenido</h2>
                <p class="pb-3">Ingresa con tus credenciales o registrate en el sitio web para acceder a todas las posibilidades que ofrecemos para ti ;)</p>
                <a class="btn btn-success" href="register.php">Registrate</a>
            </div>

            <!-- Formulario de Login -->
            <div class="col-lg-6">
                <form action="../controller/loginController.php" method="post">
                     <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include('./includes/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
