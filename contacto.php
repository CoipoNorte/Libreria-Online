<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Librería Online - Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <!-- Header -->
    <?php include('header.php'); ?>

    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Contacto</h2>
                <p>Este sitio web fue realizado en conjunto por el grupo más chingon de toda la uta</p>
                <p>Si tienes algún problema, por favor, utiliza el siguiente formulario para ponerte en contacto con nosotros:</p>
            </div>

            <!-- Formulario de contacto -->
            <div class="col-lg-6">
                <form action="enviar_correo.php" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje:</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
