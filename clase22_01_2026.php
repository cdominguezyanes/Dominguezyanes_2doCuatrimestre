<?php
 //Clase 4-22-01-2026
 //Manejo de cadenas 
 $cadena1 = "Esto es una cadena de texto.";
 $cadena2 = "Esta es otra cadena de texto.";

 //Concatenacion de cadenas
 $cadena1_concatenada = $cadena1 . " " . $cadena2; 
 echo "<p> Cadena concatenada: $cadena1_concatenada <br> </p>";

 //Longitud de una cadena 
 $longitud_cadena1 = strlen($cadena1);// strlen() devuelve la longitud de una cadena, es decir, el numero de caracteres que contiene, incluye los espacios y los caracteres especiales.
 $longitud_cadena2 = strlen ($cadena2);
 echo "<p> Longitud de cadena 1: $longitud_cadena1 <br> Longitud de cadena 2: $longitud_cadena2 <br> </p>";

 //Convertir una cadena a mayuscula 
 $cadena_a_mayusculas = strtooupper($cadena2); //strtooupper() convierte todos los caracteres de una cadena a mayusculas.
 echo "<p> Cadena en mayusculas: $cadena_a_mayusculas </p><br>";

 //Convertir una cadena en minusculas
 $cadena_a_minusculas = strtolower($cadena1); //strtolower() convierte todos los caracteres de una cadena a minisculas.
    echo "<p> Cadena convertida a minusculas: Cadena orginal: $cadena2, cadena en minuscula: $cadena_a_minusculas </p><br>";
 //Convertir una cadena en arreglo de palabras 
 $nombre= "Juan, mario, pedro, luis, ana, maria, sofia, carla"; 
 echo "<p> Cadena original: $nombre <br> </p>";
    $arreglo_nombres = explode(", ", $nombre); // La funcion explode() divide una cadena en un ar reglo de subcadenas, utilizando un delimitador especifico, en este caso la coma y el espacio.
    echo "<p> Cadena2 em minusculas: $cadena_a_minusculas <br> </p>";

 //Convertir una cadena en arreglo de palabras }
 $nombres= "Juan, mario, pedro, luis, ana, maria, sofia, carla";
 $arreglo_nombres = explode(", ", $nombres); // La funcion explode() divide una cadena en un arreglo de subcadenas, utilizando un delimitador especifico, en este caso la coma y el espacio.
   echo "<p> Arreglo de nombres: <br> </p>";
   print_r($arreglo_nombres);


 //Convertir un arreglo de palabras en una cadena 
   $arreglo_palabras = array("Rojo", "cafe", "verde", "azul", "amarillo", "Naranja", "Morado", "Rosado");
   echo "<p> Arreglo de palabras: <br> </p>";
   print_r ($arreglo_colores);
   $cadena_de_palabras = implode(", ", $arreglo_palabras); // La funcion implode() une los elementos de un arreglo en una sola cadena, utilizando un delimitador especifico, en este caso la coma y el espacio.
   echo "<p> Cadena de palabras: $cadena_de_palabras <br> </p>";

   //Otras funciones para manejo de candenas en PHP
   //Encontrar la posicion de una subcadena dentro de una cadena
   $frase = "El aprendizaje de PHP es divertido y poderoso.";
   $sub_cadena = "PHP";
   $posicion = strpos($frase, $sub_cadena); // La funcion strpos() devuelve la posicion de la primera aparicion de una subcadena dentro de una cadena.
   echo "<p> La posicion de la subcadena '$sub_cadena' en la frase es: $posicion  $posicion_subcadena dentro de la frase: '$frase'</p>";
   
   //Reemplazar una cadena dentro de otra cadena
   $frase_modificada = str_replace("PHP", "Python", $frase); // La funcion str_replace() reemplaza todas las apariciones de una subcadena dentro de una cadena por otra subcadena. Los atributos esperados de la son: La subcadena a buscar, la subcadena por la que se va a reemplazar y la cadena original.
   echo("<p> Frase original: $frase' </p>");
   echo("<p> Frase modificada: $frase_modificada </p>");
   //Nota: str_replace() distingue entre mayuscula y miniscula. Si se desea hacer una busqueda que no distinga entre mayusculas, puedes utilizar la funcion str_ireplace().

   str_word_count($frase); // Divide una cadena en una arreglo de caracteres.
   echo "<p> La frase tiene" , str_word_count($frase) , " palabras. </p>";
   strrev($frase); // Invierte una cadena.
   echo "<p> La frase invertida es: " , strrev($frase) , " .</p>";
   trim($frase); // Elimina los espacios en blanco al inicio y al final de una cadena.
   echo "<p> Frase sin espacios en blanco al inicio y al final: '" , trim($frase) , "' .</p>";

   $arreglo_caracteres = str_split($frase); // Divide una cadena en un arreglo de caracteres.
   echo "<p> Arreglo de caracteres: <br> </p>";
   trim($frase); //La Funcion trim() elimina los espacios en blanco (u otros caracteres espeficificos.)
   echo "<p> Frase sin espacios en blanco al inicio y al final: '" , trim($frase) , "' .</p>";

   //Manejo de errores en PHP
   //Comparativa con python: try - except - finally. En PHP: try - catch - finally

   try {
      $numero = 20;
      $numero = 0;
      $resultado = $numero / $numero2;
      echo "<p> El resultado de la division es: $resultado </p>";
   }catch (DivisionByZeroError $e) {
      echo "<p> Error: No se puede dividir por cero. </p>";
   }
      


   