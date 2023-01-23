<?php
session_start();
?>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-4 px-lg-5">
            <a title="Meme Test2" href="index.php"><img src="./assets/PerfilRyderTechWhite.png" alt="Meme Test2" width="400" height="88.15" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="agregarFront.php">Agregar producto</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="panel.php">Panel Admin</a></li>
                </ul>
                <form class="d-flex">
                    <div class="bg-dark py-2">
                        <div class="container px-1 px-lg-2 my-1">
                            <div class="text-center text-white">
                                <p class="display-8 fw-bolder">Bienvenido: <?php echo $_SESSION["usuario"] ?></p>
                                <p class="lead fw-normal text-white-50 mb-0"><a href="cerrarsesion.php">Cerrar Sesión</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <div class="container px-4 px-lg-5 my-5"></div>

    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Panel de control</h1>
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
                $consulta = 'SELECT * FROM productos';
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
                                <div class="text-center text-white">
                                    <a href="productos.php?id=<?php echo $reg['id']; ?>"> <button class="btn btn-outline-dark" type="button" name="button">Ver</button></a>
                                    <a href="modificarFront.php?id=<?php echo $reg['id']; ?>"><button class="btn btn-outline-dark" type="button" name="button">Editar</button></a>
                                    <a href="borrar.php?id=<?php echo $reg['id']; ?>"><button class="btn btn-outline-dark" type="button" name="button">Borrar</button></a>
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
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>