<?php
//Haz un programa que declare un arreglo y cuente pares e impares.
$arreglo = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$pares = 0;
$impares = 0;
foreach ($arreglo as $numero) {
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}
echo "Arreglo: ";
echo implode(", ", $arreglo) . "<br>";
echo "Total de números pares: " . $pares . "<br>";
echo "Total de números impares: " . $impares . "<br>";
?>

