<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "rydertech");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM productos WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$repuesta = mysqli_query($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos = mysqli_fetch_array($repuesta);
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
        <h1 class="display-4 fw-bolder">Ryder Tech</h1>
        <p class="lead fw-normal text-white-50 mb-0">Tienda de electrónica</p>
      </div>
    </div>
  </header>
  <?php
  // 6) asignamos a diferentes variables los respectivos valores del array $datos.
  // este paso no es estrictamente necesario, pero es mas practico
  //para despues llamarlos solo con el nombre de la variable
  $nombreProducto = $datos["nombreProducto"];
  $precioProducto = $datos["precioProducto"];
  $descripcionProducto = $datos["descripcionProducto"];
  $tipoProducto = $datos["tipoProducto"];
  $imagenProducto = $datos['imagenProducto'];
  $imagenProductoDos = $datos['imagenProductoDos'];
  $imagenProductoTres = $datos['imagenProductoTres'];
  $masVendido = $datos['masVendido'];
  $nuevoIngreso = $datos['nuevoIngreso'];
  $disponible = $datos['disponible']; ?>

  <!-- mostramos los datos de ese único producto
  lo meto en una card, pero se puede mostrar como quieran-->
  <div class="container px-4 px-lg-5 my-5"></div>
  <div class="container px-4 px-lg-5 my-5">
    <div class="centerCard">
      <div class="card w-50">
        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($imagenProducto) ?>" alt="..." />
        <!-- <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($datos['imagenProductoDos']) ?>" alt="..." />
           <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($datos['imagenProductoTres']) ?>" alt="..." /> -->
        <div class="card-body">
          <h5 class="card-title"><?php echo $nombreProducto; ?></h5>
          <p class="card-text">$<?php echo $datos["precioProducto"]; ?></p>
          <p class="card-text">Detalle: <?php echo $descripcionProducto ?></p>
          <p class="card-text">Más vendido: <?php echo $masVendido ?></p>
          <p class="card-text">Nuevo Ingreso: <?php echo $nuevoIngreso ?></p>
          <p class="card-text">Con stock disponible: <?php echo $datos["disponible"]; ?></p>
          <a href="<?php echo $reg['link']; ?>" class="btn btn-primary">Comprar</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer-->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright RyderTech Software &copy; Your Website 2022</p>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>