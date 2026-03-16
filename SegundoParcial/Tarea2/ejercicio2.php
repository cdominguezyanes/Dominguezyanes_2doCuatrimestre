<?php
    // Ejercicio2: Crea un formulario que pida un párrafo o texto libre (Utiliza un textarea). Al enviar el formulario, muestra lo siguiente: El número total de palabras en el texto (Sin contar espacios en blanco). El número de oraciones, contando los puntos finales “.” Presentes en el texto. La palabra más larga del texto. El promedio de caracteres por palabra, redondeado a 2 decimales (Usa round()).
    
    //Verificamos si los datos fueron enviados mediante POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["frase"])){
            //Recibimos los datos del formulario y los asignamos a variables
            $texto = $_POST["frase"];
            
            // Número total de palabras
            $palabras = ($texto, 1);
            $num_palabras = ($palabras);
            
            // Número de oraciones (contando puntos)
            $num_oraciones = ($texto, '.');
            
            // Palabra más larga
            $palabra_mas_larga = '';
            $total_caracteres = 0;
            foreach($palabras as $palabra){
                $len = ($palabra);
                $total_caracteres += $len;
                if($len > ($palabra_mas_larga)){
                    $palabra_mas_larga = $palabra;
                }
            }
            
            // Promedio de caracteres por palabra
            if($num_palabras > 0){
                $promedio = ($total_caracteres / $num_palabras, 2);
            } else {
                $promedio = 0;
            }
            
            // Mostramos los resultados
            echo "<p>Número total de palabras: $num_palabras</p>";
            echo "<p>Número de oraciones: $num_oraciones</p>";
            echo "<p>Palabra más larga: $palabra_mas_larga</p>";
            echo "<p>Promedio de caracteres por palabra: $promedio</p>";
        }
    }
?>