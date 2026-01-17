<?php
#1.Haz un programa que almacene el total de ventas de un día en una variable y muestre un mensaje indicando si fue un buen día de ventas cuando el monto sea mayor o igual a $5,000, o ventas bajas en caso contrario.
$ventas_dia = 6200; // Total de ventas del dia
if($ventas_dia >= 5000){
    echo "<p> Buen dia de ventas! Total de ventas: $$ventas_dia </p> <br>";
}else{
    echo "<p> Ventas bajas. Total de ventas: $$ventas_dia </p> <br>";
}

#2.Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado, calcule el total de gastos utilizando un ciclo y muestre también el promedio semanal.
$gastos_semanales = [150, 200, 175, 300, 250, 400, 225]; // Gastos diarios de la semana
$total_gastos = 0;
for($i = 0; $i < count($gastos_semanales); $i++){
    $total_gastos += $gastos_semanales[$i];
}
$promedio_gastos = $total_gastos / count($gastos_semanales);
echo "<p> Total de gastos semanales: $$total_gastos <br> Promedio diario de gastos: $$promedio_gastos </p> <br>";

#3.Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado, calcule el total de gastos utilizando un ciclo y muestre también el promedio semanal.
$ingresos_semanales = [500, 600, 550, 700, 650, 800, 750]; // Ingresos diarios de la semana
$total_ingresos = 0;
foreach($ingresos_semanales as $ingreso){
    $total_ingresos += $ingreso;
}
$promedio_ingresos = $total_ingresos / count($ingresos_semanales);
echo "<p> Total de ingresos semanales: $$total_ingresos <br> Promedio diario de ingresos: $$promedio_ingresos </p> <br>";

#4.Haz un programa que guarde una lista de al menos cinco clientes en un arreglo indexado y muestre el nombre de cada cliente utilizando un ciclo.
$clientes = ["Juan", "Maria", "Carlos", "Ana", "Luis"]; // Lista de clientes
echo "<p> Lista de clientes: <br>";
for($i = 0; $i < count($clientes); $i++){
    echo "- " . $clientes[$i] . "<br>";
}
echo "</p> <br>";

#5.Haz un programa que almacene las ventas de diferentes productos en un arreglo asociativo, muestre cada producto con la cantidad vendida y calcule el total de productos vendidos.
$ventas_productos = [
    "Producto A" => 150,
    "Producto B" => 200,
    "Producto C" => 175,
    "Producto D" => 300,
    "Producto E" => 250
]; // Ventas de productos
$total_productos_vendidos = 0;
echo "<p> Ventas de productos: <br>";
foreach($ventas_productos as $producto => $cantidad){
    echo "$producto: $cantidad unidades vendidas <br>";
    $total_productos_vendidos += $cantidad;
}
echo "Total de productos vendidos: $total_productos_vendidos </p> <br>";

#6.Haz un programa que guarde los precios de varios productos en un arreglo y calcule el precio total sumando todos los valores.
$precios_productos = [29.99, 49.99, 19.99, 99.99, 39.99]; // Precios de productos
$total_precio = 0;
foreach($precios_productos as $precio){
    $total_precio += $precio;
}
echo "<p> Precio total de los productos: $$total_precio </p> <br>";

#7.Haz un programa que almacene los nombres de varios empleados en un arreglo y muestre cuántos empleados hay registrados.
$empleados = ["Laura", "Pedro", "Sofia", "Miguel", "Elena", "Jorge"]; // Nombres de empleados
$total_empleados = count($empleados);
echo "<p> Total de empleados registrados: $total_empleados </p> <br>";

#8.Haz un programa que almacene varios números en un arreglo y muestre únicamente los números mayores a 50 utilizando un ciclo y una condición.
$numeros = [23, 67, 45, 89, 12, 54, 78, 34, 90, 11]; // Arreglo de numeros
echo "<p> Números mayores a 50: <br>";
foreach($numeros as $numero){
    if($numero > 50){
        echo "$numero <br>";
    }
}
echo "</p> <br>";

#9.Haz un programa que almacene las ventas de una semana y muestre cuántos días las ventas fueron mayores a $3,000.
$ventas_semana = [2800, 3200, 4500, 2900, 5000, 3100, 2700]; // Ventas diarias de la semana
$dias_mayores_3000 = 0;
foreach($ventas_semana as $venta){
    if($venta > 3000){
        $dias_mayores_3000++;
    }
}
echo "<p> Días con ventas mayores a $3,000: $dias_mayores_3000 </p> <br>";

#10.Haz un programa que almacene el total de ventas de varios vendedores y determine cuál obtuvo la mayor venta.
$ventas_vendedores = [
    "Vendedor 1" => 4500,
    "Vendedor 2" => 5200,
    "Vendedor 3" => 4800,
    "Vendedor 4" => 6100,
    "Vendedor 5" => 3900
]; // Ventas de vendedores
$mayor_venta = 0;
$vendedor_exitoso = "";
foreach($ventas_vendedores as $vendedor => $venta){
    if($venta > $mayor_venta){
        $mayor_venta = $venta;
        $vendedor_exitoso = $vendedor;
    }
}
echo "<p> El vendedor con la mayor venta es $vendedor_exitoso con una venta de $$mayor_venta </p> <br>";