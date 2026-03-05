<?php

//Ejercicio 4: Crea un formulario con un campo de texto donde el usuario ingrese nombres separados por coma. Muestra la siguiente información en pantalla: cada nombre en una línea diferente, el total de nombres ingresados, los nombres ordenados alfabéticamente e indica si hay nombres duplicados (Investiga el método array_unique()).
//Archivos que vamos utilizar
//Archivos que vamos a utilizar 
          //ejercicio4.html: Estructura HTML base del programa, con un formulario para ingresar los nombres separados por coma.
          //ejercicio4.php: Procesamiento de los datos ingresados en el formulario, realizando el conteo de nombres, ordenándolos alfabéticamente y verificando si hay nombres duplicados, mostrando el resultado al usuario.
// Verificamos si se ha enviado el parámetro necesario
if (isset($_GET["nombres"])) {
    // Asignamos el valor a una variable
    $nombres = $_GET["nombres"];

    // Convertimos la cadena en un array de nombres
    $array_nombres = explode(",", $nombres);

    // Eliminamos espacios en blanco alrededor de cada nombre
    $array_nombres = array_map("trim", $array_nombres);

    // Contamos el total de nombres ingresados
    $total_nombres = count($array_nombres);

    // Ordenamos los nombres alfabéticamente
    sort($array_nombres);

    // Verificamos si hay nombres duplicados
    $nombres_unicos = array_unique($array_nombres);
    $hay_duplicados = (count($array_nombres) !== count($nombres_unicos));
} else {
    echo "<p>No se han enviado los datos necesarios.</p>";
}
?>