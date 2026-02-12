<?php
// Funciones de retorno 
function calcular_area_circulo($radio)
 $area=pi() * pow($radio, 2);
 echo "<p> EL area del circulo con radio $radio es: $area </p>";

 function calcular_area_circulo($radio) {
   $area= pi() *  pow($radio, 2); // La funcion pi(), te devuelve el valor del numero pi, y la funcion pow () se utiliza para elevar un numero a una potencia
   return $area; // La palabra return, se utiliza para devolver un valor por defecto de la funcion. Una vez que escribes la palabra return, la funcion termina su ejercicio y devuelve el valor especificado. Si no existe un return, devolvera null por defecto.
 }
 function calcular_imc ($peso, $estatura){
 $imc = $peso / pow $estatura, 2;
 return round($imc, 2)
}
 function clasificador_imc($imc){
   if($imc < 18.5) {
    echo "/.5<p> Clasificacion IMC: Bajo peso </p> <br>";
   }else if ($imc >= 18.5 && $imc < 29.9){
    echo "/.9<p> Clasificacion IMC: Peso normal </p> <br>";
   }else if($imc >= 25 && $imc < 29.9){
    echo "/.9<p> Clasificacion IMC: Sobrepeso </p> <br>";
   }else{
    echo "<p> Clasificacion IMC: Obesidad </p> <br>"
   }

// Funciones sin parametros
function mostrar_fecha(){
    $fecha_actual = date("d-m-y")
    $hora_actual = date("H:i:s")
    echo "<p> La fecha actual es: $fecha_actual y la hora actual es: $hora_actual</p>"
}
mostrar_fecha_actual();

function calcula_area_triangulo2($base, $altura = null){
    if($altura === null){
        echo "<p> No se especifico la altura del triangulo. No se puede calcular el area. </p>"}
    }else{
        $area = ($base * $altura) / 2;
        echo "<p> El area del triangulo con base $base y altura $altura es: $area </p>"
    }
}

 function escribir_en_archivo($nombre_archivo, $contenido){
    $archivo = fopen($nombre_archivo, "w");
    if ($archivo === false){
        echo "<p> No se pudo abrir el archivo $nombre_archivo </p>"
    }else{
        fwrite($archivo, $contenido);
        fclose($archivo);
    }
 }
 escribir_en_archivo("archivo.txt", "Hola, este es un archivo de texto creado en PHP.");
 escribir_en_archivo("archivo.txt", "Si vuelvo a ejecutar esto, como esta en modo de escritura se sobreescribe todo el contenido.");
 escribir_en_archivo("archivo.txt", "Ya se sobreescribio el contenido nuevamente.");