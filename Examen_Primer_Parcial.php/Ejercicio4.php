<?php
//Haz un programa que declare una funcion que valide si una palabra es palindromo.
function esPalindromo($palabra) {
    $palabra = strtolower(trim($palabra));
    $palabra_invertida = strrev($palabra);
    return $palabra === $palabra_invertida;
}
$palabras_prueba = array("ana", "samuel", "gabriel", "pro", "hola", "hmtl", "python");
echo "Validación de Palíndromos:<br><br>";
foreach ($palabras_prueba as $palabra) {
    $resultado = esPalindromo($palabra);
    $es_palindromo = $resultado ? "SÍ es palíndromo" : "NO es palíndromo";
    echo "Palabra: \"" . $palabra . "\" - " . $es_palindromo . "<br>";
}
?>
