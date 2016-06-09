<?php

/*
 * Jonnyalexbh
 * @Descripcion: arrays
 */
// ----------------------------- JABH Array -------------------------- //

$cars = array("Volvo", "BMW", "Toyota");
//echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// ---------------- JABH Obtener longitud de un array ---------------- //

$cars = array("Volvo", "BMW", "Toyota");
//echo count($cars);
// --------------------- JABH Recorrer matriz ----------------------- //

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    //echo $cars[$x];
    //echo "<br>";
}
// --------------------- JABH Array asociativo ---------------------- //

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
//echo "Peter is " . $age['Peter'] . " years old.";

/* JABH Recorrer array asociativo */

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
    //echo "Key=" . $x . ", Value=" . $x_value;
    //echo "<br>";
}

// ----------------------- JABH Ordenar array ----------------------- //

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
//echo $numbers[0];
//
// --------------------- ABECEDARIO TIPO EXCEL  --------------------- //

$Cantidad_de_columnas_a_crear = 34;
$Contador = 0;
$Letra = 'A';
while ($Contador < $Cantidad_de_columnas_a_crear) {
    //echo $Letra . "  ";
    $Contador++;
    $Letra++;
}

// --------------- CICLO foreach ANIDADO CLAVE VALOR  --------------- //

$arr = array("primero" => array("nombre" => "joel", "apellido" => "rodriguez", "edad" => 20),
    "segundo" => array("nombre" => "tania", "apellido" => "Martinez", "edad" => 21),
    "tercero" => array("nombre" => "viviana", "apellido" => "Torres", "edad" => 19)
);
/*
  echo "<table width='100%' border='1'>";
  foreach ($arr as $key => $value) {
  echo "<tr>";
  echo "<td>$key</td>";
  foreach ($value as $key => $value) {
  echo " <td>$value </td>";
  }
  echo "</tr>";
  }
  echo "</table"; */

// ----------------- CICLO for ANIDADO CLAVE VALOR  ----------------- //
$uniArray = array("Alemania", "Austria", "Bélgica");

echo "<table border='1'>";
echo "<tr>";
echo "<th>Elemento</th>";
// Recorrer los índices
for ($ind = 0; $ind < count($uniArray); $ind++)
    echo"<td>$ind</td>";

echo "</tr>";
echo "<tr>";
echo "<th>Valor</th>";
// Recorrer los valores
for ($ind = 0; $ind < count($uniArray); $ind++)
    echo "<td> $uniArray[$ind] </td>";

echo "</tr>";
echo "</table>";

// --------------------- JABH Comparar array ------------------------ //
// Devuelve un array que contiene todas las entradas de array1 que no están presentes
//  en ninguna de los otros arrays.

$array1 = array("txt_uno" => "2000", "verde", "azul", "Rojo");
$array2 = array("txt_uno" => "200", "verde", "azul");
$resultado = array_diff($array1, $array2);

//print_r($resultado);

$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
//print_r($result);
?>
