<?php
    // Ejercicio5: Crea un formulario que pida un número entero N (entre 1 y 10). Al enviar el formulario, genera y muestra lo siguiente utilizando bucles: Una pirámide de asteriscos de N filas (Dependiendo del número ingresado), donde: La fila 1 tiene 1 asterisco. Cada fila tiene 2 asteriscos más que la anterior. Los asteriscos de cada fila están centrados respecto a la fila más ancha (Usa str_repeat() para los espacios). Ejemplo para N = 4 * *** ***** ******* El número total de asteriscos que tiene la pirámide completa (Pista: La suma de la serie 1+3+5+...+(2N-1) = N2).
    
    //Verificamos si los datos fueron enviados mediante POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["n"])){
        //Recibimos los datos del formulario y los asignamos a variables
        $n = $_POST["n"];
        
        // Verificamos que N esté entre 1 y 10
        if($n >= 1 && $n <= 10){
            // Calculamos el número total de asteriscos
            $total_asteriscos = $n * $n;
            
            // Ancho máximo de la pirámide
            $max_width = 2 * $n - 1;
            
            // Generamos la pirámide
            echo "<pre>";
            for($i = 1; $i <= $n; $i++){
                $asteriscos = 2 * $i - 1;
                $espacios = ($max_width - $asteriscos) / 2;
                echo str_repeat(" ", $espacios) . str_repeat("*", $asteriscos) . "\n";
            }
            echo "</pre>";
            
            // Mostramos el total de asteriscos
            echo "<p>Número total de asteriscos que tiene la pirámide completa: $total_asteriscos</p>";
        } else {
            echo "<p>Error: N debe ser un número entero entre 1 y 10.</p>";
        }
    }
}