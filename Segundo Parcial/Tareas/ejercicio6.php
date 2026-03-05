<?php

//Ejercicio 6: Crea un programa que tenga un formulario, en el cual se solicite el nombre completo. El script PHP debe extraer las iniciales de cada palabra y mostrarlas separadas por puntos y mostrarlo en pantalla. Por ejemplo, si el usuario ingresa “Mario Alonso Segovia Gutiérrez”, el programa mostrará en pantalla -> “M.A.S.G.”
//Archivos que vamos utilizar
//Archivos que vamos a utilizar 
          //ejercicio6.html: Estructura HTML base del programa, con un formulario para ingresar el nombre completo.
          //ejercicio6.php: Procesamiento de los datos ingresados en el formulario, realizando la extracción de las iniciales y mostrando el resultado al usuario.
// Verificamos si se ha enviado el parámetro necesario
if (isset($_GET["nombre"])) {
    // Asignamos el valor a una variable
    $nombre_completo = htmlspecialchars($_GET["nombre"]);

    // Dividimos el nombre completo en palabras
    $palabras = explode(" ", $nombre_completo);

    // Extraemos las iniciales de cada palabra
    $iniciales = array_map(function($palabra) {
        return strtoupper(substr($palabra, 0, 1));
    }, $palabras);

    // Unimos las iniciales con puntos
    $resultado = implode(".", $iniciales);

    // Mostramos el resultado
    echo "<h2>Nombre completo: $nombre_completo</h2>";
    echo "<p>Iniciales: <strong>$resultado</strong></p>";
} else {
    echo "<p>No se ha enviado un nombre válido.</p>";
}