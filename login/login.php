<?php
$usuario = $_POST["User"];
$contrasenia = $_POST["Password"];

$ckUser = "Admin";
$ckPassword = "1234";

if ($usuario == $ckUser && $contrasenia == $ckPassword) {
    header("location:https://www.potrerodigital.org/");
} else {
    header("location:error.html");
}
?>