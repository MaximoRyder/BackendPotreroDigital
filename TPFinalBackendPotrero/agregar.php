<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "rydertech");

// 2) Almacenamos los datos del envío POST
// a) generar variables para cada dato a almacenar en la bbdd
// Si se desea almacenar una imagen en la base de datos usar lo siguiente: addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
$nombreProducto = $_POST['nombreProducto'];
$precioProducto = $_POST['precioProducto'];
$descripcionProducto = $_POST['descripcionProducto'];
$tipoProducto = $_POST['tipoProducto'];
$imagenProducto = addslashes(file_get_contents($_FILES['imagenProducto']['tmp_name']));
$masVendido = $_POST['masVendido'];
$nuevoIngreso = $_POST['nuevoIngreso'];
$disponible = $_POST['disponible'];

// $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

// 3) Preparar la orden SQL
// INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_a_ingresar)
// => Ingresa dentro de la siguiente tabla los siguientes valores
// a) generar la consulta a realizar
$consulta = "INSERT INTO productos (id,nombreProducto,precioProducto,descripcionProducto,tipoProducto,imagenProducto,masVendido,nuevoIngreso,disponible)
          VALUES ('','$nombreProducto','$precioProducto','$descripcionProducto','$tipoProducto','$imagenProducto','$masVendido','$nuevoIngreso','$disponible')";
// 4) Ejecutar la orden y ingresamos datos
// a) ejecutar la consulta
mysqli_query($conexion, $consulta);

// a) rederigir a index
header('location: panel.php');
