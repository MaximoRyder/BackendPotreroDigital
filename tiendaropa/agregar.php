<?php
  // 1) Conexion
  // a) Realizar la conexion con la bbdd
  // b) seleccionar la base de datos a usar
  $conexion = mysqli_connect("127.0.0.1", "root", "");
  mysqli_select_db($conexion, "tiendaropa");

  // 2) Almacenamos los datos del envío POST
  // a) Generar variables para cada dato a almacenar en la bbdd
  // Si se desea almacenar una imagen en la base de datos usar lo siguiente: addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
  $tipoDePrenda = $_POST ['tipoDePrenda'];
    $marca = $_POST['marca'];
    $talle = $_POST['talle'];
    $precio = $_POST['precio'];
   
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  // 3) Preparar la orden SQL
  // INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_a_ingresar)
  // => Ingresa dentro de la siguiente tabla los siguientes valores
  // a) Generar la consulta a realizar
  $consulta = "INSERT INTO ropa (id,tipoDePrenda,marca,talle,precio,imagen)
          VALUES ('','$tipoDePrenda','$marca','$talle','$precio','$imagen')";

  // 4) Ejecutar la orden y ingresamos datos
  // a) ejecutar la consulta
  mysqli_query($conexion,$consulta);

   // a) Redirigir a index
   header('location: listar.php');

?>
