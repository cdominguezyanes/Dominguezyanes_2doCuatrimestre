<?php

//Ejercicio 2: Crea un formulario que solicite el nombre de un producto y su precio sin IVA. Al enviar el formulario, se deberá calcular el IVA y mostrar lo siguiente: el monto del IVA (16%), el precio total con IVA incluido. Muestra los resultados en pantalla.
//Archivos que vamos utilizar
//Archivos que vamos a utilizar 
          //ejercicio2.html: Estructura HTML base del programa, con un formulario para ingresar el nombre del producto y su precio sin IVA.
          //ejercicio2.php: Procesamiento de los datos ingresados en el formulario, realizando el calculo del IVA y mostrando el resultado.
// Verificamos si se ha enviado el parámetro necesario
if (isset($_GET["nombre"]) && isset($_GET["precio"])) {
    // Asignamos los valores a variables
    $nombre = htmlspecialchars($_GET["nombre"]);
    $precio = floatval($_GET["precio"]);

    // Calculamos el IVA (16%)
    $iva = $precio * 0.16;

    // Calculamos el precio total con IVA
    $total = $precio + $iva;

    // Mostramos los resultados
    echo "<h2>Resultados para el producto: $nombre</h2>";
    echo "<p>Precio sin IVA: $" . number_format($precio, 2) . "</p>";
    echo "<p>Monto del IVA (16%): $" . number_format($iva, 2) . "</p>";
    echo "<p>Precio total con IVA: $" . number_format($total, 2) . "</p>";
} else {
    echo "<p>No se han enviado los datos necesarios.</p>";
}
?>