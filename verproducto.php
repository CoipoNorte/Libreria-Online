<!-- verproducto.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Librería Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <style>
        /* Añade estos estilos para el botón de Deseo */
        .btn-wishlist {
            color: orange;
            background-color: transparent;
            border: 1px solid orange;
        }
        .btn-wishlist.active {
            color: white;
            border-color: red;
            background-color: red;
        }
        /* Estilos adicionales para mejorar la apariencia */
        .btn-outline-orange {
            color: orange;
            border-color: orange;
        }
        .btn-outline-orange:hover {
            color: white;
            background-color: orange;
            border-color: orange;
        }
    </style>

</head>

<body>

<!-- Header -->
<?php include('header.php'); ?>

<main class="container mt-5 mb-5">
    <section class="single-product">
        <div class="container">
            <?php
            // Incluye la conexión a la base de datos
            include('conexion.php');
            // Obtener el ID del libro desde la URL
            $libro_id = $_GET['id'];
            // Consulta SQL para obtener los detalles del libro
            $sql = "SELECT id, titulo, autor, precio, descripcion, imagen, formato, ano_publicacion, idioma, categoria FROM libros WHERE id = $libro_id";
            $result = $conn->query($sql);
            // Verificar si se obtuvieron resultados
            if ($result->num_rows > 0) {
                // Obtener los detalles del libro
                $libro = $result->fetch_assoc();
            ?>
                <div class="d-flex flex-lg-row flex-column">
                    <div class="product-image col-md-3">
                        <div id="producto-slider" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./img/<?php echo $libro['imagen']; ?>" alt="Imagen del Libro" class="d-block">
                                </div>
                                <!-- Puedes agregar más elementos de carrusel aquí si tienes más imágenes -->
                            </div>
                        </div>
                    </div>
                    <div class="buy-detail col-md-8 ms-lg-5">
                        <p class="new-arrival text-center">NEW</p>
                        <div class="d-flex flex-row align-content-center">
                            <h2 class="book-title"><?php echo $libro['titulo']; ?></h2>
                            <!-- Botón de Deseo -->
                            <button type="button" class="btn btn-outline-orange btn-wishlist ms-4" onclick="toggleWishlist(this)">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        
                        <div class="book-sub-title d-flex flex-row align-content-center mb-2">
                            <a class="link-primary" href="buscar.php?busqueda=<?php echo $libro['autor']; ?>"><?php echo $libro['autor']; ?> <i class="fa fa-user"></i> ,</a>
                            <a class="link-primary" href="vercategoria.php?categoria=<?php echo $libro['categoria']; ?>"><?php echo $libro['categoria']; ?></a>
                        </div>
                        <p>Producto code: <?php echo $libro['id']; ?></p>
                        
                        <!-- Botón para agregar al carrito -->
                        <form action="agregar_al_carrito.php" method="post">
                            <input type="hidden" name="libro_id" value="<?php echo $libro['id']; ?>">
                            <input type="hidden" name="libro_titulo" value="<?php echo $libro['titulo']; ?>">
                            <input type="hidden" name="libro_precio" value="<?php echo $libro['precio']; ?>">
                            
                            <div class="shoping d-flex flex-row justify-content-start mt-3">
                                <p>Cantidad : <input type="text" name="cantidad" value="1"></p>
                                <button type="submit" class="btn btn-primary m-0"> Añadir al Carro</button>
                            </div>
                        </form>

                        
                    </div>
                </div>
                
                <div class="d-flex d-flex flex-lg-row flex-column">
                    <div class="d-flex flex-column col-md-3">
                        <h5 class="mt-4 d-flex justify-content-lg-center">Detalles del producto</h5>
                        <div class="producto-detail d-flex flex-lg-row justify-content-lg-center mt-3 ">
                            <div class="d-flex flex-column me-lg-0 me-5">
                                <p>Formato:</p>
                                <p>Autor:</p>
                                <p>Año:</p>
                                <p>Idioma:</p>
                                <p>Categoria:</p>
                            </div>
                            <div class="d-flex flex-column me-lg-0 ms-5">
                                <p> <?php echo $libro['formato']; ?> </p>
                                <p> <?php echo $libro['autor']; ?> </p>
                                <p> <?php echo $libro['ano_publicacion']; ?> </p>
                                <p> <?php echo $libro['idioma']; ?> </p>
                                <p> <?php echo $libro['categoria']; ?> </p>
                            </div>
                        </div>                      
                    </div>
                    <div class="pruduct-description col-md-7 ms-lg-5">
                        <h3>Reseña</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint cupiditate temporibus do
                            loribus impedit facere ab harum? Praesentium doloremque, repellat natus quisquam quas ab. Temporibus 
                            et magni consequuntur exercitationem perferendis. Quae?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sin
                            t cupiditate temporibus doloribus impedit facere ab harum? Praesentium doloremque, repellat natus quisquam quas ab. Temporibus et magni co
                            nsequuntur exercitationem perferendis. Quae?
                            loribus impedit facere ab harum? Praesentium doloremque, repellat natus quisquam quas ab. Temporibus 
                            et magni consequuntur exercitationem perferendis. Quae?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sin
                            t cupiditate temporibus doloribus impedit facere ab harum? Praesentium doloremque, repellat natus quisquam quas ab. Temporibus et magni co
                            nsequuntur exercitationem perferendis.</p>
                    </div>
                </div>

            <?php
            } else {
                // Si no se encontró el libro, puedes mostrar un mensaje de error o redirigir a otra página
                echo "Libro no encontrado";
            }
            // Cierra la conexión
            include('closeconexion.php');
            ?>
        </div>
    </section>
</main>

<!-- Footer -->
<?php include('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Agrega jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                        <!-- Script JavaScript para manejar el clic del botón de deseo -->
                        <script>
                            function toggleWishlist(button) {
                                $(button).toggleClass("active");
                            }
                        </script>

</body>
</html>
