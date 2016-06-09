<?php

/*
 * Jonnyalexbh
 * @Descripcion: recibo de nomina
 */
$a1 = Array
    (
    "0" => Array
        (
        "ID_RH" => "M001",
        "Paga" => "13/01/2015",
        "Fre" => "003",
        "Pr" => "1"
    ),
    "1" => Array
        (
        "ID_RH" => "M002",
        "Paga" => "13/01/2015",
        "Fre" => "003",
        "Pr" => "1"
    )
);

$b1 = Array
    (
    "0" => Array
        (
        "ID_RH" => "M001",
        "Paga" => "13/01/2015",
        "Fre" => "003",
        "Pr" => "1",
        "Concepto" => "Sueldo",
        "Valor" => "200"
    ),
    "1" => Array
        (
        "ID_RH" => "M002",
        "Paga" => "13/01/2015",
        "Fre" => "003",
        "Pr" => "1",
        "Concepto" => "Aux",
        "Valor" => "300"
    ),
    "2" => Array
        (
        "ID_RH" => "M001",
        "Paga" => "13/01/2015",
        "Fre" => "003",
        "Pr" => "1",
        "Concepto" => "Aux",
        "Valor" => "300"
    )
);

foreach ($a1 as $index1 => $row1) {
    echo $row1[ID_RH] . "</br>";
    foreach ($b1 as $index2 => $row2) {
        //var_dump($row2[ID_RH]);
        //var_dump($row1[ID_RH]);
        if ($row2[ID_RH] == $row1[ID_RH]) {
            echo $row2[ID_RH] . "-" . $row2[Concepto] . "-" . $row2[Valor] . "</br>";
        }
    }
    echo "</br>";
}