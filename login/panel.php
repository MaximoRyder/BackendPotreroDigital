<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Panel de control</h1>

        <h2>Bienvenido: <?php echo $_SESSION["usuario"] ?></h2>

        <a href="cerrarsesion.php">Cerrar Sesion</a>
    </body>
</html>