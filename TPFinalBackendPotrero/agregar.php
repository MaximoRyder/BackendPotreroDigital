<?php
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "rydertech");
$nombreProducto = $_POST['nombreProducto'];
$precioProducto = $_POST['precioProducto'];
$descripcionProducto = $_POST['descripcionProducto'];
$tipoProducto = $_POST['tipoProducto'];
$imagenProducto = addslashes(file_get_contents($_FILES['imagenProducto']['tmp_name']));
$masVendido = $_POST['masVendido'];
$nuevoIngreso = $_POST['nuevoIngreso'];
$disponible = $_POST['disponible'];
$consulta = "INSERT INTO productos (id,nombreProducto,precioProducto,descripcionProducto,tipoProducto,imagenProducto,masVendido,nuevoIngreso,disponible)
          VALUES ('','$nombreProducto','$precioProducto','$descripcionProducto','$tipoProducto','$imagenProducto','$masVendido','$nuevoIngreso','$disponible')";
mysqli_query($conexion, $consulta);
header('location: panel.php');
