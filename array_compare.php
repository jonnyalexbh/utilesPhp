<?php

/*
 * Jonnyalexbh
 * @Descripcion: comparar igualdad 2 arrays
 */

function your_array_diff($arraya, $arrayb) {
    foreach ($arraya as $keya => $valuea) {
        if (in_array($valuea, $arrayb)) {
            unset($arraya[$keya]);
        }
    }
    return $arraya;
}

$a1 = Array
    (
    "0" => Array
        (
        "Empresa" => "EMP01",
        "Paga" => "13/01/2015",
        "ID" => "A2",
        "Valor" => "200",
        "Nombre" => "BONI"
    ),
    "1" => Array
        (
        "Empresa" => "EMP01",
        "Paga" => "13/01/2015",
        "ID" => "A1",
        "Valor" => "100",
        "Nombre" => "SUELDO"
    )
);

$b1 = Array
    (
    "0" => Array
        (
        "Empresa" => "EMP01",
        "Paga" => "13/01/2015",
        "ID" => "A1",
        "Valor" => "999",
        "Nombre" => "SUELDO"
    ),
    "1" => Array
        (
        "Empresa" => "EMP01",
        "Paga" => "13/01/2015",
        "ID" => "A2",
        "Valor" => "200",
        "Nombre" => "BONI"
    )
);

$resultado = your_array_diff($a1, $b1);

echo "<pre>";
echo print_r($resultado);
echo "</pre>";
