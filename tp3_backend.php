<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php

    //Variables//
    $number1 = 1;
    $number2 = 100;
    $number3 = 2;
    $number4 = 1;
    $number5 = 0;
    $sumaTodosWhile = 0;
    $sumaTodosFor = 0;
    $number6 = 0;
    $sumaTodosPar = 0;

    //Codigo, los br son meramente estéticos para una mejor visualizacion en el navegador//
    print "<br><h1>Ejercicio 1: </h1>";
    while ($number1 <= 100) {
        print "<span> $number1  </span>";
        $number1++;
    }

    print "<br><br><h1>Ejercicio 2: </h1>";

    while ($number2 >= 1) {
        print "<span> $number2  </span>";
        $number2--;
    }

    print "<br><br><h1>Ejercicio 3: </h1>";

    while ($number3 <= 100) {
        print "<span> $number3  </span>";
        $number3 = $number3 + 2;
    }

    print "<br><br><h1>Ejercicio 4: </h1>";

    while ($number4 <= 100) {
        print "<span> $number4  </span>";
        $number4 = $number4 + 2;
    }

    print "<br><br><h1>Ejercicio 5 con While: </h1>";

    while ($number5 <= 20) {
        $sumaTodosWhile = $sumaTodosWhile + $number5;
        $number5++;
    }
    print "<span> $sumaTodosWhile  </span>";

    print "<br><br><h1>Ejercicio 5 con For: </h1>";
    for ($number5 = 1; $number5 <= 20; $number5++) {
        $sumaTodosFor += $number5;
    }
    print "<span> $sumaTodosFor  </span>";

    print "<br><br><h1>Ejercicio 6: </h1>";
    for ($number6 = 0; $number6 <= 20; $number6 = $number6 + 2) {
        $sumaTodosPar += $number6;
    }
    print "<span> $sumaTodosPar  </span>";
    print "<br><br>";
    ?>
</body>

</html>