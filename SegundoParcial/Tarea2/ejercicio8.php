<?php
    // Ejercicio8: Crea un formulario que pida una base numérica entera y un exponente máximo (Número entre 1 y 10). Al enviar el formulario, calcula y muestra: Una tabla con las potencias de la base desde el exponente 1 hasta el exponente máximo ingresado, con el formato: 2^1 = 2, 2^2 = 4, 2^3 = 8 Usa pow() o el operador ** para calcular cada potencia. La suma de todas las potencias calculadas en la tabla. Para cada resultado, indica si el número es par o impar.
    
    //Verificamos si los datos fueron enviados mediante POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["base"]) && isset($_POST["exponente_max"])){
        //Recibimos los datos del formulario y los asignamos a variables
        $base = $_POST["base"];
        $exponente_max = $_POST["exponente_max"];
        
        // Verificamos que el exponente esté entre 1 y 10
        if($exponente_max >= 1 && $exponente_max <= 10){
            $suma_potencias = 0;
            
            // Mostramos la tabla con las potencias
            echo "<table border='1'>";
            echo "<tr><th>Potencia</th><th>Resultado</th><th>Par/Impar</th></tr>";
            for($i = 1; $i <= $exponente_max; $i++){
                $potencia = pow($base, $i);
                $suma_potencias += $potencia;
                $par_impar = ($potencia % 2 == 0) ? "Par" : "Impar";
                echo "<tr><td>$base^$i</td><td>$potencia</td><td>$par_impar</td></tr>";
            }
            echo "</table>";
            
            // Mostramos la suma
            echo "<p>La suma de todas las potencias calculadas en la tabla: $suma_potencias</p>";
        } else {
            echo "<p>Error: El exponente máximo debe ser un número entre 1 y 10.</p>";
        }
    }
}