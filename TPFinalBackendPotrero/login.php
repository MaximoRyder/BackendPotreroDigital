<?php
$usuario = $_POST["User"];
$contrasenia = $_POST["Password"];


session_start();
$_SESSION["usuario"] = $usuario;


$ckUser = "Admin";
$ckPassword = "1234";

if ($usuario == $ckUser && $contrasenia == $ckPassword) {
    header("location:panel.php");
} else {
    header("location:error.html");
}
?>