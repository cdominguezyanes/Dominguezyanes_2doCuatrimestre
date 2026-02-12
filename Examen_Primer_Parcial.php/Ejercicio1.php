<?php
//Haz un programa que declare una frase y muestre la palabra mas larga.
$frase = "muy buenos dias norteamerica";
$palabras = explode(" ", $frase);
$palabra_mas_larga = "";
foreach ($palabras as $palabra) {
    if (strlen($palabra) > strlen($palabra_mas_larga)) {
        $palabra_mas_larga = $palabra;
    }
}
echo "Frase: " . $frase . "<br>";
echo "Palabra más larga: " . $palabra_mas_larga . "<br>";
echo "Longitud: " . strlen($palabra_mas_larga) . " caracteres";
?>
