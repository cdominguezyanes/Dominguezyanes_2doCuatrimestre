<?php
    // Ejercicio10: 10.Crea un formulario que pida un número de tarjeta de crédito (Solo los dígitos, sin espacios ni guiones). Al enviar el formulario, verifica lo siguiente: Si tiene exactamente 16 caracteres. Si todos los caracteres son dígitos numéricos (Puedes usar ctype_digit()). Si ambas condiciones se cumplen, muestra el número formateado en grupos de 4 separados por espacio, por ejemplo: 1234 5678 9012 3456 Muestra una versión, donde los primeros 12 dígitos se remplacen por ateríscos y solo se muestren los últimos 4, por ejemplo: **** **** **** 3456.
    
    //Verificamos si los datos fueron enviados mediante POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["numero_tarjeta"])){
        //Recibimos los datos del formulario y los asignamos a variables
        $numero_tarjeta = $_POST["numero_tarjeta"];
        
        // Verificamos que tenga exactamente 16 caracteres y sean dígitos
        if(($numero_tarjeta) == 16 && ($numero_tarjeta)){
            // Formateamos en grupos de 4 separados por espacio
            $formateado = ($numero_tarjeta, 0, 4) . ' ' . ($numero_tarjeta, 4, 4) . ' ' . ($numero_tarjeta, 8, 4) . ' ' . ($numero_tarjeta, 12, 4);
            
            // Versión mascarada con asteriscos en los primeros 12 dígitos
            $mascarado = '**** **** **** ' . ($numero_tarjeta, 12, 4);
            
            // Mostramos los resultados
            echo "<p>Número formateado: $formateado</p>";
            echo "<p>Número mascarado: $mascarado</p>";
        } else {
            echo "<p>Error: El número de tarjeta debe tener exactamente 16 dígitos numéricos.</p>";
        }
    }
}