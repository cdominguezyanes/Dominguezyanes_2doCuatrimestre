<?php
#Ejercicio 1: Crear un programa en PHP que calcule el area de un rectangulo (base * altura) y el perimetro (2 * (base + altura)). Mostrar los resultados en pantalla.
$base = 10;
$altura = 5;
$area = $base * $altura;
$perimetro = 2 * ($base + $altura);
echo "<p> Area del rectangulo: $area <br> Perimetro del rectangulo: $perimetro <br> </p>";

#Ejercicio 2: Crea un programa en PHP que realice las siguientes conversiones de monedas: De peso a dolar, de dolar a euro, de euro a libra esterlina, y de peso a euro. Muestra los resultados en pantalla.
$peso = 1000; // cantidad en pesos 
$dolar = $peso / 20; // suponiendo 1 dolar = 20 pesos
$euro = $dolar * 0.85; // suponiendo 1 dolar = 0.85 euros
$lira = $euro * 0.86; // suponiendo 1 euro = 0.86 libros esterlinas
echo "<p> Conversiones de monedas: <br> Peso a Dolar: $dolar <br> Dolar a Euro: $euro <br> Euro a Libra Esterlina: $lira <br> Peso a Euro: " . ($peso / 20 * 0.85) . "<br> </p>";

#Ejercicio 3: Crea un programa en PHP que calcule el IMC (Indice de Masa corporal) de una persona. Muestra los resultados en pantalla. El IMC se calcula con la informula: IMC = peso (kg) / (altura (m))^2.
$peso_kg = 70; //peso en kilogramos 
$altura_m = 1.75; // altura en metros
$imc = $peso_kg / ($altura_m ** 2);
echo "<p> Indice de Masa Corporal (IMC): $imc <br> </p>";

#Ejercicio 4: Crea un programa en PHP que convierta una temperatura dada en grados Celsius a Fahrenheit y Kelvin. Muestra los resultados en pantalla. Las formulas son: Fahrenheit = (Celsius * 9/5) + 32 y Kelvin = Celsius + 273.15.
$celsius = 25; // temperatura en grados celsius 
$falrenheit = ($celsius * 9/5) + 32;
$kelvin = $celsius + 273.15;
echo "<p> Conversion de temperatura: <br> Celsius a Fahrenheit: $falrenheit <br> Celsius a Kelvin: $kelvin <br> </p>";
?>