<!-- main.php -->

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
        <h1>Bienvenido a la Librería Online</h1>
        <!-- Productos -->
        <?php include('productos.php'); ?>
    </main>

    <!-- Footer -->
    <?php include('./includes/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>