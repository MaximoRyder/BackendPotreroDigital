<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ryder Tech</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/faviconRyderTech.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a title="Meme Test2" href="index.php"><img src="./assets/PerfilRyderTech.png" alt="Meme Test2" width="400" height="88.15" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobreNosotros.php">Sobre Nosotros</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tienda</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php">Todos los productos</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="masVendidos.php">Más Vendidos</a></li>
                            <li><a class="dropdown-item" href="nuevosIngresos.php">Nuevos Ingresos</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">

                        <a href="login.html">Acceso Vendedores</a>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <div class="container px-4 px-lg-5 my-5">
        <button class="btn btn-outline-dark" type="submit">
            <a href="pcEscritorio.php">PCs de escritorio</a>
        </button>
        <button class="btn btn-outline-dark" type="submit">
            <a href="notebooks.php">Notebooks</a>
        </button>
        <button class="btn btn-outline-dark" type="submit">
            <a href="placaVideo.php">Placas de video</a>
        </button>
        <button class="btn btn-outline-dark" type="submit">
            <a href="monitores.php">Monitores</a>
        </button>
        <button class="btn btn-outline-dark" type="submit">
            <a href="microprocesadores.php">Microprocesadores</a>
        </button>
        <button class="btn btn-outline-dark" type="submit">
            <a href="perifericos.php">Periféricos</a>
        </button>
    </div>
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Monitores</h1>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
                $conexion = mysqli_connect("127.0.0.1", "root", "");
                mysqli_select_db($conexion, "rydertech");
                $consulta = "SELECT*FROM productos WHERE tipoProducto ='Monitor' ";
                $datos = mysqli_query($conexion, $consulta);
                while ($reg = mysqli_fetch_array($datos)) { ?>

                    <div class="col mb-5">
                        <div class="card h-100">
                            <h6 class="fw-bolder"><?php echo ucwords($reg['tipoProducto']) ?></h6>
                            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagenProducto']) ?>" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"><?php echo ucwords($reg['nombreProducto']) ?></h5>
                                    <h6 class="fw-bolder"><?php echo ucwords($reg['descripcionProducto']) ?></h6>
                                    <h2>$<?php echo $reg['precioProducto']; ?></h2>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="">
                                    <a href="productos.php?id=<?php echo $reg['id']; ?>"> <button type="button" name="button">Ver producto</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright RyderTech Software &copy; Your Website 2022</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>