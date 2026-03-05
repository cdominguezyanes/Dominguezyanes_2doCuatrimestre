<?php

//Ejercicio 1: Crea un formulario que pida un número entero. Al enviar el formulario, indica lo siguiente: si el numero es par o impar, si el numero el positivo o negativo, muestra los resultados en la pantalla.
//Archivos que vamos utilizar
//Archivos que vamos a utilizar 
          //ejercicio1.html: Estructura HTML base del programa, con un formulario para ingresar los numeros.
          //ejercicio1.php: Procesamiento de los datos ingresados en el formulario, realizando  y mostrando el resultado.

// Verificamos si se ha enviado el parámetro necesario
if (isset($_GET["numero"])) {
    // Asignamos el valor a una variable
    $numero = intval($_GET["numero"]);

    // Determinamos si es par o impar
    $par_impar = ($numero % 2 == 0) ? "par" : "impar";

    // Determinamos si es positivo, negativo o cero
    if ($numero > 0) {
        $signo = "positivo";
    } elseif ($numero < 0) {
        $signo = "negativo";
    } else {
        $signo = "cero";
    }

    // Mostramos los resultados
    echo "<h2>Resultados para el número: $numero</h2>";
    echo "<p>El número es $par_impar.</p>";
    echo "<p>El número es $signo.</p>";
} else {
    echo "<p>No se ha enviado un número válido.</p>";
}
?>
