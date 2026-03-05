<?php

//Ejercicio 10: Haz un formulario que solicite el nombre del empleado, su salario por hora y las horas trabajadas en la semana. Posteriormente, calcula y muestra en pantalla: salario base (Primeras 40 horas a tarifa normal), horas extras (Las que excedan 40 se pagan al doble), total bruto (Salario base + horas extras), deducciones (15% del total bruto), salario neto (Total bruto – deducciones).
//Archivos que vamos utilizar
//Archivos que vamos a utilizar 
          //ejercicio10.html: Estructura HTML base del programa, con un formulario para ingresar el nombre del empleado, su salario por hora y las horas trabajadas en la semana.
          //ejercicio10.php: Procesamiento de los datos ingresados en el formulario, realizando los cálculos del salario y mostrando el resultado al usuario.
// Verificamos si se ha enviado el parámetro necesario
if (isset($_GET["nombre"]) && isset($_GET["salario"]) && isset($_GET["horas"])) {
    // Asignamos los valores a variables
    $nombre = htmlspecialchars($_GET["nombre"]);
    $salario_hora = floatval($_GET["salario"]);
    $horas = floatval($_GET["horas"]);

    // Calculamos el salario base (primeras 40 horas)
    $salario_base = min($horas, 40) * $salario_hora;

    // Calculamos las horas extras (al doble)
    $horas_extras = max(0, $horas - 40);
    $pago_extras = $horas_extras * ($salario_hora * 2);

    // Calculamos el total bruto
    $total_bruto = $salario_base + $pago_extras;

    // Calculamos las deducciones (15% del total bruto)
    $deducciones = $total_bruto * 0.15;

    // Calculamos el salario neto
    $salario_neto = $total_bruto - $deducciones;

    // Mostramos los resultados
    echo "<h2>Resultados para el empleado: $nombre</h2>";
    echo "<p>Salario por hora: $" . number_format($salario_hora, 2) . "</p>";
    echo "<p>Horas trabajadas: $horas</p>";
    echo "<p>Salario base (primeras 40 horas): $" . number_format($salario_base, 2) . "</p>";
    echo "<p>Horas extras: $horas_extras (pago: $" . number_format($pago_extras, 2) . ")</p>";
    echo "<p>Total bruto: $" . number_format($total_bruto, 2) . "</p>";
    echo "<p>Deducciones (15%): $" . number_format($deducciones, 2) . "</p>";
    echo "<p>Salario neto: $" . number_format($salario_neto, 2) . "</p>";
} else {
    echo "<p>No se han enviado los datos necesarios.</p>";
}
?>