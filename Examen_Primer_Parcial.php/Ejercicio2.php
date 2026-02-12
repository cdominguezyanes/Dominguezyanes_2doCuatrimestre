<?php
//Haz un programa que declare una frase y cuente las vocales.
$frase_minuscula = strtolower($frase);
$contador_vocales = 0;
$vocales_encontradas = array(); 
$vocales = array ('a', 'e', 'i', 'o', 'u');
for ($i = 0; $i < strlen($frase_minuscula); $i++) {
    $caracter = $frase_minuscula[$i];
    if (in_array($caracter, $vocales)) {
        $contador_vocales++;
        
        if (!isset($vocales_encontradas[$caracter])) {
            $vocales_encontradas[$caracter] = 0;
        }
        $vocales_encontradas[$caracter]++;
    }
}
echo "Frase: " . $frase . "<br>";
echo "Total de vocales: " . $contador_vocales . "<br>";
echo "Desglose por vocal:<br>";
foreach ($vocales as $vocal) {
    $cantidad = isset($vocales_encontradas[$vocal]) ? $vocales_encontradas[$vocal] : 0;
    echo "- " . $vocal . ": " . $cantidad . "<br>";
}
?>