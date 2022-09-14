<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Coloque respuestas en los else, para que quedara más prolijo, tambien defini simplemente 1 variable para los primeros 3 ejercicios -->

    <h1>Ejercicio 1: </h1>

    <?php
    $numero = 8;

    if ($numero > 0) {
        echo "El numero $numero es un n° positivo";
    } else {
        echo "El numero $numero NO es un n° positivo";
    }
    ?>

    <br>
    <hr>

    <h1>Ejercicio 2: </h1>

    <?php
    if ($numero > 1 && $numero < 10) {
        echo "El numero $numero es mayor a 1 y menor a 10";
    } else {
        echo "El numero $numero no cumple las condiciones";
    }
    ?>

    <br>
    <hr>

    <h1>Ejercicio 3: </h1>

    <?php
    if ($numero > 10 || $numero < 2) {
        echo "El numero $numero es mayor a 10 o menor a 2";
    } else {
        echo "El numero $numero no cumple ninguna de las condiciones";
    }
    ?>

    <br>
    <hr>

    <h1>Ejercicio 4: </h1>

    <?php
    $numero1 = 15;
    $numero2 = 20;

    if ($numero1 > $numero2) {
        echo "Numero1 ($numero1) es mayor a Numero2 ($numero2), entonces: <br>";
        echo "Suma: ", $numero1 + $numero2, "<br>";
        echo "Resta: ", $numero1 - $numero2, "<br>";
    } elseif ($numero2 > $numero1) {
        echo "Numero2 ($numero2) es mayor a Numero1 ($numero1), entonces: <br>";
        echo "Multiplicacion: ", $numero2 * $numero1, "<br>";
        echo "Division Entera: ", intdiv($numero2, $numero1), "<br>";
        echo "Resto division: ", $numero2 % $numero1, "<br>";
    } else {
        echo "Los numeros ingresados son iguales";
    }
    ?>

    <br>