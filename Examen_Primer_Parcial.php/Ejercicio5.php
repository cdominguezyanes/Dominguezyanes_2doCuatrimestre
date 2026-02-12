<?php
//Haz un programa que declare un arreglo asociativo de productos con precios y calcule el total.
$productos = array(
    "Computadora" => 850.50,
    "Raton Mause" => 25.00,
    "Teclado gamer" => 75.25,
    "Monitor" => 320.00,
    "Cable USB" => 12.99,
    "Audifonos" => 120.00,
    "camara" => 95.75
);
$total = 0;
echo "Lista de Productos:<br>";
foreach ($productos as $producto => $precio) {
    echo $producto . ": $" . number_format($precio, 2) . "<br>";
    $total += $precio;
}
echo "Total de la compra: $" . number_format($total, 2) . "<br>";
echo "Cantidad de productos: " . count($productos) . "<br>";
echo "Promedio por producto: $" . number_format($total / count($productos), 2) . "<br>";
?>