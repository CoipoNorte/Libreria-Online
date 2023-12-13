<!-- header.php -->
<style>
    @media (min-width: 992px) {
        .contact-number {
            margin-left: 10px; /* Ajusta el margen según sea necesario */
            font-size: 18px; /* Ajusta el tamaño de fuente según sea necesario */
            font-weight: bold; /* Hace la letra más gruesa */
            white-space: nowrap;
            display: inline-block;
        }
    }
</style>

<section>
    <nav class="navbar navbar-expand-lg d-flex flex-column justify-content-center">
        <div class="container">
            <button class="navbar-toggler col-md-3" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand col-md-3 d-flex align-items-center p-0 m-0" href="index.php">Liberia Online</a>

            <form class="navbar-search d-none d-lg-block col-md-5" role="search" action="buscar.php" method="get">
                <div class="input-group">
                    <input class="form-control" type="search" name="busqueda" placeholder="Buscar por título o autor" aria-label="Search">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>

            <div class="offcanvas offcanvas-start ms-5" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Libreria Online</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column flex-lg-row justify-content-center align-items-center">
                    <div class="d-flex flex-row m-4">
                        <button class="btn" type="submit"><i class="fa fa-user p-0 m-0"></i></button>
                        <a class="btn" href="carrito.php"><i class="fa fa-cart-shopping p-0 m-0"></i></a>
                        <span class="contact-number mt-2">+56 9 8919 8933</span>
                    </div>
                    <div class="col-md-7 d-flex flex-column justify-content-center align-items-center">
                        <div class="nav-item d-block  d-lg-none"><a class="nav-link" href="index.php">Inicio</a></div>
                        <div class="nav-item d-block  d-lg-none"><a class="nav-link" href="error.php">Ofertas</a></div>
                        <div class="nav-item d-block  d-lg-none"><a class="nav-link" href="categorias.php">Categorias</a></div>
                        <div class="nav-item d-block  d-lg-none"><a class="nav-link" href="error.php">Juegos de mesa</a></div>
                        <div class="nav-item d-block  d-lg-none"><a class="nav-link" href="error.php">Utilies escolares</a></div>
                        <div class="nav-item d-block  d-lg-none"><a class="nav-link" href="error.php">Novedades</a></div>
                        <div class="nav-item d-block  d-lg-none"><a class="nav-link" href="contacto.php">Contactanos</a></div>
                    </div>
                    <div class="d-flex flex-row mt-5">
                        <div class="nav-social d-block  d-lg-none"><a class="nav-link" href="#"><i
                                    class="fa-brands fa-instagram"></i></a></div>
                        <div class="nav-social d-block  d-lg-none"><a class="nav-link" href="#"><i
                                    class="fa-brands fa-facebook"></i></a></div>
                        <div class="nav-social d-block  d-lg-none"><a class="nav-link" href="#"><i
                                    class="fa-brands fa-twitter"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar-menu d-block d-none d-lg-block">
        <div class="d-flex flex-row justify-content-center align-items-center text-center m-0 p-0">
            <a class="nav-link" href="index.php">Inicio</a>
            <a class="nav-link" href="error.php">Ofertas</a>
            <a class="nav-link" href="categorias.php">Categorias</a>
            <a class="nav-link" href="error.php">Juegos de mesa</a>
            <a class="nav-link" href="error.php">Utilies escolares</a>
            <a class="nav-link" href="error.php">Novedades</a>
            <a class="nav-link" href="contacto.php">Contactanos</a>
        </div>
    </nav>
</section>
