<?php
//Haz un programa que declare un arreglo de calificacionesy calcule el promedio 
$calificaciones = array(85, 92, 78, 88, 95, 73, 87, 81, 90, 79);
$total = 0;
$cantidad = count($calificaciones);
foreach ($calificaciones as $calificacion) {
    $total += $calificacion;
}
$promedio = $total / $cantidad;
$calificacion_maxima = $calificaciones[0];
$calificacion_minima = $calificaciones[0];

foreach ($calificaciones as $calificacion) {
    if ($calificacion > $calificacion_maxima) {
        $calificacion_maxima = $calificacion;
    }
    if ($calificacion < $calificacion_minima) {
        $calificacion_minima = $calificacion;
    }
}
$aprobadas = 0;
$reprobadas = 0;
echo "Calificación Mínima: " . $calificacion_minima . "<br>";
echo "Total de Calificaciones: " . $cantidad . "<br>";
echo "Calificaciones Aprobadas (≥70): " . $aprobadas . "<br>";
echo "Calificaciones Reprobadas (<70): " . $reprobadas . "<br>";
?>
