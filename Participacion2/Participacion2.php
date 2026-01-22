<?php
//Ejercicio 1: Haz un programa que reciba una cadena (Ya definida en el codigo), y devuelva la misma cadena pero con las palabras en orden inverso. Maneja los posibles errores. 
$cadena = "Hola mundo desde PHP";
$palabras = explode(" ", $cadena);
foreach($palabras === false) {
    echo "Error: No se pudo dividir la cadena en palabras.\n";
} else {
    $palabras_invertidas = array_reverse($palabras);
    $cadena_invertida = implode(" ", $palabras_invertidas);
    echo "Cadena con palabras en orden inverso: " . $cadena_invertida . "\n";
} 
//Ejercicio 2: Haz un programa que reciba una cadena de texto que contenga una lista de numeros separados por comas (Ya definida en el codigo), y devuelva a suma de esos numeros. Maneja los posibles errores.
$cadena_original = "1,2,3,4,5";
$numeros = explode(",", $cadena_original);
if ($numeros === false) {
    echo "Error: No se pudo dividir la cadena en numeros.\n";
} else {
    $suma = 0;
    foreach ($numeros as $numero) {
        if (is_numeric($numero)) {
            $suma += $numero;
        } else {
            echo "Error: La cadena contiene un valor no numerico: " . $numero . "\n";
            exit;
        }
    }
    echo "La suma de los numeros es: " . $suma . "\n";
}
//Ejercicio 3: Haz un programa que reciba una cadena de texto (Ya definida en el codigo), y cuente cuantas veces aparece una subcadena especifica dentro de esa cadena. Maneja los posibles errores. 
$cadena_texto = "Hola mundo, bienvenido al mundo de PHP";
$subcadena = "mundo";
function contarSubcadena($cadena_texto, $subcadena) {
    if (!is_string($cadena_texto) || !is_string($subcadena)) {
        return "Error: Ambas entradas deben ser cadenas de texto.";
    }
    return substr_count($cadena_texto, $subcadena);
}
$resultado_conteo = contarSubcadena($cadena_texto, $subcadena);
if (is_numeric($resultado_conteo)) {
    echo "La subcadena '" . $subcadena . "' aparece " . $resultado_conteo . " veces en la cadena.\n";
} else {
    echo $resultado_conteo . "\n";
}
