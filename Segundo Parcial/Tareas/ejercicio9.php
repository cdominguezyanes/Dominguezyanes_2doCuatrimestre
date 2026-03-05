<?php

//Ejercicio 9: Haz un programa que solicite una frase mediante un formulario y una palabra a buscar. Posteriormente, imprime (Muestra en pantalla): cuántas veces aparece la palabra en la frase (Sin importar mayúsculas o minúsculas), si la frase contiene o no la palabra buscada, la frase con todas las apariciones de las palabras resaltadas en negritas (etiqueta <strong> </strong> para resaltar en negritas). Nota: Puedes utilizar las funciones substr_count(), stripos(), str_ireplace().
//Archivos que vamos utilizar
//Archivos que vamos a utilizar 
          //ejercicio9.html: Estructura HTML base del programa, con un formulario para ingresar la frase y la palabra a buscar.
          //ejercicio9.php: Procesamiento de los datos ingresados en el formulario, realizando la búsqueda de la palabra en la frase y mostrando el resultado al usuario.
// Verificamos si se ha enviado el parámetro necesario
if (isset($_GET["frase"]) && isset($_GET["palabra"])) {
    // Asignamos los valores a variables
    $frase = htmlspecialchars($_GET["frase"]);
    $palabra = htmlspecialchars($_GET["palabra"]);

    // Contamos cuántas veces aparece la palabra en la frase (sin importar mayúsculas o minúsculas)
    $contador = substr_count(strtolower($frase), strtolower($palabra));

    // Verificamos si la frase contiene la palabra buscada
    $contiene = stripos($frase, $palabra) !== false ? "Sí" : "No";

    // Resaltamos todas las apariciones de la palabra en la frase
    $frase_resaltada = str_ireplace($palabra, "<strong>$palabra</strong>", $frase);

    // Mostramos los resultados
    echo "<h2>Resultados para la frase: \"$frase\" y la palabra: \"$palabra\"</h2>";
    echo "<p>La palabra aparece <strong>$contador</strong> veces en la frase.</p>";
    echo "<p>¿La frase contiene la palabra buscada? <strong>$contiene</strong></p>";
    echo "<p>Frase con las apariciones de la palabra resaltadas: <br><em>$frase_resaltada</em></p>";
} else {
    echo "<p>No se han enviado los datos necesarios.</p>";
}