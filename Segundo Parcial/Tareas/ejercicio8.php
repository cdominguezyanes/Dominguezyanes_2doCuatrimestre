<?php

//Ejercicio 8: Haz un formulario que pida un número entero positivo N. Posteriormente calcula y muestra en pantalla lo siguiente: la suma de todos los números del 1 al N (Es decir, si el usuario ingresa 9, muestra el resultado de sumar 1+2+3+4+5+6+7+8+9), la suma de todos los números pares entre 1 y N (Es decir, si el usuario ingresa 9, muestra el resultado de sumar 2+4+6+8) y la suma de todos los números impares entre 1 y N (Es decir, si el usuario ingresa 9, muestra el resultado de sumar 1+3+5+7+9).
//Archivos que vamos utilizar
//Archivos que vamos a utilizar 
          //ejercicio8.html: Estructura HTML base del programa, con un formulario para ingresar el número entero positivo N.
          //ejercicio8.php: Procesamiento de los datos ingresados en el formulario, realizando los cálculos de las sumas y mostrando el resultado al usuario.
// Verificamos si se ha enviado el parámetro necesario
if (isset($_GET["numero"])) {
    // Asignamos el valor a una variable
    $n = intval($_GET["numero"]);

    // Verificamos que sea positivo
    if ($n > 0) {
        // Suma de 1 a N
        $suma_total = $n * ($n + 1) / 2;

        // Suma de números pares
        $k = floor($n / 2);
        $suma_pares = 2 * ($k * ($k + 1) / 2);

        // Suma de números impares
        $m = ceil($n / 2);
        $suma_impares = $m * $m;

        // Mostramos los resultados
        echo "<h2>Resultados para N = $n</h2>";
        echo "<p>Suma de todos los números del 1 al $n: $suma_total</p>";
        echo "<p>Suma de los números pares entre 1 y $n: $suma_pares</p>";
        echo "<p>Suma de los números impares entre 1 y $n: $suma_impares</p>";
    } else {
        echo "<p>El número debe ser un entero positivo.</p>";
    }
} else {
    echo "<p>No se ha enviado un número válido.</p>";
}