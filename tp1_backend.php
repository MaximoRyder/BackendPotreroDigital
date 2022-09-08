<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <h1>Ejercicio 1: </h1>

    <?php
    echo "Hola Mundo";
    ?>
    
    <br>
    <hr>

    <h1>Ejercicio 2: </h1>
    <h3>Hola Mundo por variable:</h3>

    <?php
    $mensaje = "Hola Mundo";
    echo $mensaje;
    ?>

    <br>
    <hr>

    <h1>Ejercicio 3: </h1>
    <h3>Suma</h3>

    <?php
    $var1 = 10;
    $var2 = 2;
    $resultado = $var1 + $var2;
    echo $resultado;
    ?>

    <br>

    <h3>Resta</h3>

    <?php
    $resultado = $var1 - $var2;
    echo $resultado;
    ?>

    <br>

    <h3>Multiplicacion</h3>

    <?php
    $resultado = $var1 * $var2;
    echo $resultado;
    ?>

    <br>

    <h3>Division</h3>

    <?php
    $resultado = $var1 / $var2;
    echo $resultado;
    ?>

    <br>

    <h3>Resto Division</h3>

    <?php
    $resultado = $var1 % $var2;
    echo $resultado;
    ?>

    <br>
    <hr>

    <h1>Ejercicio 4: </h1>
    <h3>Temperatura grados Celcius a Fahrenheit</h3>

    <?php
    $temperaturaCelcius = 20;
    $temperaturaFahrenheit = ($temperaturaCelcius * 1.8) + 32;
    echo "La temperatura en grados Celcius es de ", $temperaturaCelcius, "°C eso equivale a ", $temperaturaFahrenheit, "°F en grados Fahrenheit";
    ?>

    <br>
    <hr>

    <h1>Ejercicio 5: </h1>
    <h3>A- </h3>
    <h3>Perimetro Rectangulo</h3>

    <?php
    $lado = 18;
    $altura = 12;
    $perimetro = ($lado * 2) + ($altura * 2);
    echo "El perimetro del rectangulo es de ", $perimetro, " cm";
    ?>

    <br>

    <h3>Superficie Rectangulo</h3>

    <?php
    $superficie = $lado * $altura;
    echo "La superficie es de ", $superficie, " cm2";
    ?>

    <br>
    
    <h3>B- </h3>
    <h3>Perimetro Circulo</h3>

    <?php
    $pi = 3.141516;
    $radio = 30;
    $perimetroCirculo = 2 * ($pi * $radio);
    echo "El perimetro es de ", $perimetroCirculo, " cm";
    ?>

    <br>

    <h3>Area Circulo</h3>

    <?php
    $areaCirculo = $pi * ($radio * $radio);
    echo "El area es de ", $areaCirculo, " cm2";
    ?>

</body>

</html>