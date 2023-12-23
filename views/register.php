<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Librería Online - Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <!-- Header -->
    <?php include('./includes/header.php'); ?>

    <main class="container mt-5 mb-5">
        <div class="row">
            <!-- Formulario de Login -->
            <div class="col-lg-6 pb-4">
                <form action="../controller/registerController.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div> 
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-success">Registrate</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h2>Registrate</h2>
                <p class="pb-3">Rellena el formulario para poder registrarte y haci aceder a todas las funcionalidades grandiosas que tenemos para ti, ven y entra a HABBO HOTEL o puedes ingresar si ya tienes cuenta :D</p>
                <a class="btn btn-primary" href="login.php">Ingresar</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include('./includes/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
