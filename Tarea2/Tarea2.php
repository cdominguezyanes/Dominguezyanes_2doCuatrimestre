<?php

#1.Haz un programa que declare una cadena y la muestre en mayúsculas.
$cadena = "Hola mucho gusto";
$cadena_mayusculas = strtoupper($cadena);
echo "Cadena en mayusculas: " . $cadena_mayusculas . "\n";

#2.Haz un programa que declare un arreglo de edades y muestre la edad mayor.
$edades = [23, 46, 16, 68, 15, 10, 23, 50];
$edad_mayor = max($edades);
echo "La edad mayor es: " . $edad_mayor . "\n";

#3.Haz un programa que declare un arreglo de palabras y muestre solo las que tienen más de 5 letras.
$palabras = ["avion", "edificio", "bombas", "septiembre", "USA", "once"];
$palabras_mas_de_cinco = array_filter($palabras, function($palabra)) {
    return strlen($palabra) > 5;
});
echo "Palabras con mas de 5 letras: " . implode(", ", $palabras_mas_de_cinco) . "\n";

#4.Haz un programa que declare una cadena y muestre cuántas veces aparece cada letra.
$cadena = "programacion";
$letras = str_split($cadena);
$array_letras = array_count_values($letras);
foreach ($array_letras as $letra => $cantidad) {
    echo "La letra '" . $letra . "' aparece " . $cantidad . " veces.\n";
}

#5.Haz un programa que declare un arreglo de números y separe pares e impares en dos arreglos nuevos.
$numeros = [1, 5, 8, 12, 15, 22, 27, 30];
$pares = [];
$impares = [];
foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares[] = $numero;
    } else {
        $impares[] = $numero;
    }
}
echo "Numeros pares: " . implode(", ", $pares) . "\n";
echo "Numeros impares: " . implode(", ", $impares) . "\n";
#6.Haz un programa que declare una cadena y cuente cuántas vocales tiene.
$cadena = "Abecedario";
$vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$contador_vocales = 0;
for ($i = 0; $i < strlen($cadena); $i++) {
    if (in_array($cadena[$i], $vocales)) {
        $contador_vocales++;
    }
}
echo "La cadena tiene " . $contador_vocales . " vocales.\n";

#7.Haz un programa que declare un arreglo asociativo con producto y cantidad y muestre los que están bajos (<5).
$productos = [
    "naranjas" => 10,
    "limones" => 3,
    "manzanas" => 8,
    "platanos" => 2,
    "uvas" => 15
];
foreach ($productos as $producto => $cantidad) {
    if ($cantidad < 5) {
        echo "El producto " . $producto . " tiene una cantidad baja de: " . $cantidad . "\n";
    }
}

#8.Haz un programa que declare una frase y reemplace una palabra por otra.
$frase = "Hay una serpiente en mi bota";
$frase_modificada = str_replace("serpiente", "araña", $frase);
echo "Frase modificada: " . $frase_modificada . "\n";

#9.Haz un programa que declare un arreglo asociativo de alumnos, donde cada alumno tenga varias calificaciones, y calcule el promedio de cada uno.
$alumnos = [
    "Juan" => [8, 9, 10]
    "Maria" => [7, 6, 9],
    "Pedro" => [10, 10, 9]
];
foreach ($alumnos as $alumnos => $calificaciones) {
    $promedio = array_sum($calificaciones) / count($calificaciones);
    echo "El promedio de " . $alumno . " es: " . $promedio . "\n";

#10.Haz un programa que declare un arreglo de nombres y muestre los que empiezan con vocal.
$names = ["Samuel", "Carlos", "Grabiel", "Feliciano", "Santiago", "Kevin"];
$vocales = ['A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u'];
$nombres_con_vocal = [];
foreach ($names as $name) {
    if (in_array($name[0], $vocales)) {
        $nombres_con_vocal[] = $name;
    }
}
echo "Nombres que empiezan con vocal: " . implode(", ", $nombres_con_vocal) . "\n";
