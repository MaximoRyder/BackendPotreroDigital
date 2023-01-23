<?php
session_start();
?>
<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "rydertech");

// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];

// 3) Preparar la orden SQL
// => Selecciona todos los campos de la tabla alumno donde el campo dni sea igual a $dni
// a) generar la consulta a realizar
$consulta = "SELECT * FROM productos WHERE id=$id";

// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$respuesta = mysqli_query($conexion, $consulta);

// 5) Transformamos el registro obtenido a un array
$datos = mysqli_fetch_array($respuesta);
?>
<?php
$nombreProducto = $datos['nombreProducto'];
$precioProducto = $datos['precioProducto'];
$descripcionProducto = $datos['descripcionProducto'];
$tipoProducto = $datos['tipoProducto'];
$imagenProducto = $datos['imagenProducto'];
$masVendido = $datos['masVendido'];
$nuevoIngreso = $datos['nuevoIngreso'];
$disponible = $datos['disponible'];
?>
<?php
// Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
if (array_key_exists('guardar_cambios', $_POST)) {

    // 2') Almacenamos los datos actualizados del envío POST
    // a) generar variables para cada dato a almacenar en la bbdd
    // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
    // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
    $nombreProducto = $_POST['nombreProducto'];
    $precioProducto = $_POST['precioProducto'];
    $descripcionProducto = $_POST['descripcionProducto'];
    $tipoProducto = $_POST['tipoProducto'];
    $imagenProducto = addslashes(file_get_contents($_FILES['imagenProducto']['tmp_name']));
    $masVendido = $_POST['masVendido'];
    $nuevoIngreso = $_POST['nuevoIngreso'];
    $disponible = $_POST['disponible'];

    // 3') Preparar la orden SQL
    // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
    // a) generar la consulta a realizar
    $consulta = "UPDATE productos SET nombreProducto='$nombreProducto', precioProducto='$precioProducto', descripcionProducto='$descripcionProducto', tipoProducto='$tipoProducto', imagenProducto='$imagenProducto', masVendido='$masVendido', nuevoIngreso='$nuevoIngreso', disponible='$disponible' WHERE id =$id";

    // 4') Ejecutar la orden y actualizamos los datos
    // a) ejecutar la consulta
    mysqli_query($conexion, $consulta);
    exit(header("Location: panel.php"));
} ?>
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
    <div class="container px-4 px-lg-5 my-5"></div>
    <div class="text-center text-black">
        <h1 class="display-4 fw-bolder">Modificar producto</h1>
    </div>
    <div class="container px-4 px-lg-5 my-5">
        <form method="POST" action="" enctype="multipart/form-data" class="form-text px-4 px-lg-5 my-5">
            <label class="fw-bolder">Nombre Producto</label>
            <input type="text" name="nombreProducto" placeholder="Nombre Producto" value="<?php echo "$nombreProducto"; ?>" required />
            <br><br>

            <label class="fw-bolder">Precio Producto</label>
            <input type="text" name="precioProducto" placeholder="Precio Producto" value="<?php echo "$precioProducto"; ?>" required />
            <br><br>

            <label class="fw-bolder">Descripción Producto</label>
            <input type="text" name="descripcionProducto" placeholder="Descripción Producto" value="<?php echo "$descripcionProducto"; ?>" required />
            <br><br>

            <label class="fw-bolder">Tipo Producto</label>
            <input type="text" name="tipoProducto" placeholder="Tipo Producto" value="<?php echo "$tipoProducto"; ?>" required />
            <br><br>

            <label class="fw-bolder">Imagen Producto</label>
            <input type="file" name="imagenProducto" placeholder="Imagen Producto" required />
            <br><br>

            <label class="fw-bolder">Más Vendido</label>
            <input type="text" name="masVendido" placeholder="Más Vendido" value="<?php echo "$masVendido"; ?>" required />
            <br><br>

            <label class="fw-bolder">Nuevo Ingreso</label>
            <input type="text" name="nuevoIngreso" placeholder="Nuevo Ingreso" value="<?php echo "$nuevoIngreso"; ?>" required />
            <br><br>

            <label class="fw-bolder">Disponible</label>
            <input type="text" name="disponible" placeholder="Disponible" value="<?php echo "$disponible"; ?>" required />
            <br><br><br>

            <input type="submit" name="guardar_cambios" value="Guardar Cambios" class="btn btn-outline-dark">
            <button name="Cancelar" type="button" class="btn btn-outline-dark" value="Cancelar" onClick="location.href='panel.php'">
                Cancelar
            </button>
            <br><br>
        </form>
    </div>
</body>

</html>