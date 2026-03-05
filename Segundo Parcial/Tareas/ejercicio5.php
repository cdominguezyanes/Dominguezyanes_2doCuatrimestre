<?php

//Ejercicio 5: Haz un programa que tenga un formulario, el cual deberá receive una lista de números separados por coma. Luego, clasifícalos y muestra lo siguiente en pantalla (Divídelo en secciones con <hr>): los numeros positivos, los números negativos, los 0, los números pares y los números impares. Muestra el conteo de cada categoría y un mensaje si una categoría está vacía.
//Archivos que vamos utilizar
//Archivos que vamos a utilizar 
          //ejercicio5.html: Estructura HTML base del programa, con un formulario para ingresar la lista de números separados por coma.
          //ejercicio5.php: Procesamiento de los datos ingresados en el formulario, realizando la clasificación de los números y mostrando el resultado al usuario.
// Verificamos si se ha enviado el parámetro necesario
if (isset($_GET["numeros"])) {
    // Obtenemos la lista de números
    $numeros = $_GET["numeros"];
    
    // Separamos por coma y limpiamos espacios
    $lista = array_map('trim', explode(",", $numeros));
    
    // Inicializamos arrays para cada categoría
    $positivos = [];
    $negativos = [];
    $ceros = [];
    $pares = [];
    $impares = [];
    
    // Clasificamos cada número
    foreach ($lista as $num_str) {
        $num = intval($num_str);
        
        // Positivos, negativos, ceros
        if ($num > 0) {
            $positivos[] = $num;
        } elseif ($num < 0) {
            $negativos[] = $num;
        } else {
            $ceros[] = $num;
        }
        
        // Pares e impares
        if ($num % 2 == 0) {
            $pares[] = $num;
        } else {
            $impares[] = $num;
        }
    }
    
    // Función para mostrar una categoría
    function mostrar_categoria($titulo, $array) {
        echo "<h3>$titulo</h3>";
        if (empty($array)) {
            echo "<p>No hay números en esta categoría.</p>";
        } else {
            echo "<p>Números: " . implode(", ", $array) . "</p>";
            echo "<p>Conteo: " . count($array) . "</p>";
        }
        echo "<hr>";
    }
    
    // Mostramos los resultados
    echo "<h2>Clasificación de Números</h2>";
    mostrar_categoria("Números Positivos", $positivos);
    mostrar_categoria("Números Negativos", $negativos);
    mostrar_categoria("Ceros", $ceros);
    mostrar_categoria("Números Pares", $pares);
    mostrar_categoria("Números Impares", $impares);
} else {
    echo "<p>No se ha enviado la lista de números.</p>";
}
?>