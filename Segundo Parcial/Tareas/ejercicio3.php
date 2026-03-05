<?php

//Ejercicio 3: Haz un programa que solicite al usuario el nombre de un artículo, su precio original y el porcentaje de descuento. Posteriormente muestra en pantalla: el monto del descuento, el precio final con descuento aplicado y un mensaje indicando si el descuento es "Bajo" (menos del 10%), "Moderado (10% al 30%) o "Alto" (más del 30%).
//Archivos que vamos utilizar
//Archivos que vamos a utilizar 
          //ejercicio3.html: Estructura HTML base del programa, con un formulario para ingresar el nombre del artículo, su precio original y el porcentaje de descuento.
          //ejercicio3.php: Procesamiento de los datos ingresados en el formulario, realizando el calculo del descuento y mostrando el resultado.
// Verificamos si se ha enviado el parámetro necesario
if (isset($_GET["nombre"]) && isset($_GET["precio"]) && isset($_GET["descuento"])) {
    // Asignamos los valores a variables
    $nombre = htmlspecialchars($_GET["nombre"]);
    $precio = floatval($_GET["precio"]);
    $descuento = floatval($_GET["descuento"]);

    // Calculamos el monto del descuento
    $monto_descuento = $precio * ($descuento / 100);

    // Calculamos el precio final con descuento
    $precio_final = $precio - $monto_descuento;

    // Determinamos la categoría del descuento
    if ($descuento < 10) {
        $categoria = "Bajo";
    } elseif ($descuento <= 30) {
        $categoria = "Moderado";
    } else {
        $categoria = "Alto";
    }

    // Mostramos los resultados
    echo "<h2>Resultados para el artículo: $nombre</h2>";
    echo "<p>Precio original: $" . number_format($precio, 2) . "</p>";
    echo "<p>Descuento aplicado: " . $descuento . "%</p>";
    echo "<p>Monto del descuento: $" . number_format($monto_descuento, 2) . "</p>";
    echo "<p>Precio final con descuento: $" . number_format($precio_final, 2) . "</p>";
    echo "<p>Categoría del descuento: <strong>$categoria</strong></p>";
} else {
    echo "<p>No se han enviado los datos necesarios.</p>";
}
?>