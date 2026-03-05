<?php

//Ejercicio 7: Haz un formulario que solicite tres números. El script PHP, debe determinar y mostrar: cual es el número mayor, cuál es el número menor y cuál es el número que queda en el rango medio. Si dos o más números son iguales, indícalo con un mensaje apropiado.
//Archivos que vamos utilizar
//Archivos que vamos a utilizar 
          //ejercicio7.html: Estructura HTML base del programa, con un formulario para ingresar los tres números.
          //ejercicio7.php: Procesamiento de los datos ingresados en el formulario, realizando la comparación de los números y mostrando el resultado al usuario.
// Verificamos si se ha enviado el parámetro necesario
if (isset($_GET["numero1"]) && isset($_GET["numero2"]) && isset($_GET["numero3"])) {
    // Asignamos los valores a variables
    $numero1 = floatval($_GET["numero1"]);
    $numero2 = floatval($_GET["numero2"]);
    $numero3 = floatval($_GET["numero3"]);

    // Creamos un array con los números
    $numeros = [$numero1, $numero2, $numero3];

    // Verificamos si hay números iguales
    if (count(array_unique($numeros)) < 3) {
        echo "<p>Al menos dos números son iguales. Por favor, ingrese tres números diferentes.</p>";
    } else {
        // Ordenamos el array para encontrar el menor, medio y mayor
        sort($numeros);
        echo "<h2>Resultados:</h2>";
        echo "<p>Número menor: " . $numeros[0] . "</p>";
        echo "<p>Número medio: " . $numeros[1] . "</p>";
        echo "<p>Número mayor: " . $numeros[2] . "</p>";
    }
} else {
    echo "<p>No se han enviado los datos necesarios.</p>";
}