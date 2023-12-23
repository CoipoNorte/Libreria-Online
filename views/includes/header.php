<!-- header.php -->
<style>
    @media (min-width: 992px) {
        .contact-number {
            margin-left: 10px;
            font-size: 18px;
            font-weight: bold;
            white-space: nowrap;
            display: inline-block;
        }
    }
</style>

<section>
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler col-md-3" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand col-md-3 p-0 m-0" href="main.php">Libreria Online</a>

            <form class="navbar-search d-none d-lg-block col-md-5" role="search" action="buscar.php" method="get">
                <div class="input-group">
                    <input class="form-control" type="search" name="busqueda" placeholder="Buscar por título o autor"
                        aria-label="Search">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Libreria Online</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column flex-lg-row justify-content-center align-items-center">
                    <div class="d-flex flex-row m-4">
                        <?php if (!isset($_SESSION['id'])) { ?>
                            <a class="btn" href="login.php"><i class="fa fa-user p-0 m-0"></i></a>
                        <?php } ?>
                        <a class="btn" href="carrito.php"><i class="fa fa-cart-shopping p-0 m-0"></i></a>
                        <span class="contact-number me-3">+56 9 8919 8933</span>
                        <?php if (isset($_SESSION['id'])) { ?>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-danger p-1 m-0" href="../controller/logout.php">Logout</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar-menu d-block d-none d-lg-block">
        <div class="d-flex flex-row justify-content-center align-items-center text-center m-0 p-0">
            <a class="nav-link" href="main.php">Inicio</a>
            <a class="nav-link" href="error.php">Ofertas</a>
            <a class="nav-link" href="categorias.php">Categorias</a>
            <a class="nav-link" href="error.php">Juegos de mesa</a>
            <a class="nav-link" href="error.php">Utilies escolares</a>
            <a class="nav-link" href="error.php">Novedades</a>
            <a class="nav-link" href="contacto.php">Contactanos</a>
            <?php
            // Verifica si el usuario tiene el rol de administrador
            if (isset($_SESSION['id']) && $_SESSION['rol'] === 'admin') {
                echo '<a class="nav-link " href="dashboard.php" style="color: yellow;" >Dashboard</a>';
            }
            ?>
        </div>
    </nav>
</section>