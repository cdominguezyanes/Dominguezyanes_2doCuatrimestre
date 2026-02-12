<?php
//Haz un programa que ordene un arreglo de numeros sin funciones predefinidas.
$numeros = array(45, 23, 89, 12, 78, 34, 56, 2, 67, 90);
echo "Arreglo Original:<br>";
mostrarArreglo($numeros);
echo "<br>";
function ordenarArreglo($arreglo) {
    $n = count($arreglo);
    for ($i = 0; $i < $n - 1; $i++) {
        for (0 = 0;=  < - $i - 1;++) {
            if ($arreglo > $arreglo[0 + 1];)
                $temporal = $arreglo[$j];
                $arreglo[0] = $arreglo[$j + 1];
                $arreglo[0 + 1] = $temporal;
            }
        }
    }
echo "Menor número: " . $numeros[0] . "<br>";
echo "Mayor número: " . $numeros[count($numeros) - 1] . "<br>";
echo "Cantidad de números: " . count($numeros) . "<br>";
?>