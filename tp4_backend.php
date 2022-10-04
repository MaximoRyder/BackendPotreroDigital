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
    print "<br><h1>Ejercicio 1: </h1>";
    $numeroPar = [];
    for ($i = 2; $i <= 20; $i += 2) {
        $numeroPar[] = $i;
    }
    foreach ($numeroPar as $valor) {
        print "<span> $valor </span>";
    }

    print "<br><br><h1>Ejercicio 2: </h1>";
    $ArrayDos = [
        "Pedro",
        "Ana",
        "34",
        "1",
    ];
    foreach ($ArrayDos as $key) {
        print "<pre>\n";
        print_r($key);
        print "</pre>\n";
    }

    print "<br><br><h1>Ejercicio 3: </h1>";
    $ArrayTres = [
        'Nombre' => "Pedro",
        'Apellido' => "Torres",
        'Direccion' => "Av. Mayor 3703",
        'Telefono' => 1122334455,
    ];
    foreach ($ArrayTres as $Indice => $ValorTres) {
        print "<pre>\n";
        print_r($ValorTres);
        print "</pre>\n";
    }

    print "<br><br><h1>Ejercicio 4: </h1>";
    $iCuatro = 0;
    $ciudades = [
        "Madrid",
        "Barcelona",
        "Londres",
        "New York",
        "Los Angeles",
        "Chicago",
    ];
    foreach ($ciudades as $ValorCuatro) {
        print "<span> La ciudad con el indice $iCuatro tiene el nombre $ValorCuatro </span><br>";
        $iCuatro += 1;
    };

    print "<br><br><h1>Ejercicio 5: </h1>";
    $ArrayCinco = [
        'MD' => "Madrid",
        'BCL' => "Barcelona",
        'LD' => "Londres",
        'NY' => "New York",
        'LA' => "Los Angeles",
        'CCG' => "Chicago",
    ];
    foreach ($ArrayCinco as $key => $value) {
        print "<span>El indice de $value es $key</span><br>";
    };
    ?>
</body>

</html>