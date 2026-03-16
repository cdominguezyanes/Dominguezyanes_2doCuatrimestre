<?php
    // Ejercicio1: Crea un formulario que pida una palabra o frase. Al enviar el formulario muestra lo siguiente: La palabra o frase original tal como fue ingresada. La palabra o frase invertida (Puedes utilizar strrev()). Si es un palíndromo o no (Ignora mayúsculas. Minúsculas y espacios en blanco).
    
    //Verificamos si los datos fueron enviados mediante POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["frase"])){
            //Recibimos los datos del formulario y los asignamos a variables
            $frase = $_POST["frase"];
            $original = $frase;
            $invertida = strrev($frase);
            
            // Para verificar si es palíndromo: ignorar mayúsculas, minúsculas y espacios
            $limpia = strtolower(str_replace(' ', '', $frase));
            $invertida_limpia = strrev($limpia);
            $es_palindromo = ($limpia === $invertida_limpia) ? "Sí" : "No";
            
            // Mostramos los resultados
            echo "<p>Palabra o frase original: $original</p>";
            echo "<p>Palabra o frase invertida: $invertida</p>";
            echo "<p>¿Es un palíndromo? $es_palindromo</p>";
        }
    }
?>