<?php

// Ejercicio1: Crea un programa que implemente una calculadora basica mediante un formulario HTML, el cual debera solicitar dos numeros y contener un menu desplegable (<select>) para elegir entre las operaciones: suma, resta, multiplicacion y division. El formulario debera procesarse mediante el metodo GET en un script PHP, el cual debe verificar que ambos campos no esten vacios y que los valores ingresados sean numericos. Ademas, debera realizar el calculo seleccionado; para la division, debe validar que el segundo numero no sea 0 para evitar errores de ejecucion. Finalmente, debera mostrar la operacion completa y el resultado (Ej: 5 + 3= 8) o, en caso de error, un mensaje de advertencia claro para el usuario.

// Verificamos si el formulario ha sido enviado por metodo GET
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    //Verifica que los campos existan 
    if (isset($_GET["nombre"]) && isset($_GET["correo"]) && isset($_GET))
        $nombre_completo = $_GET["nombre"];
        $correo_electronico = $_GET["correo"];
        $contraseña = $_GET["contraseña"];
        $edad = $_GET["edad"];
    //Remplazamos la contraseña con asteriscos
    $contraseña_oculta = str_repeat("*", strlen($contraseña));

// verificamos que la contraseña tenga al menos 8 caracteres
if(strlen($contraseña)< 8){
    echo "<p style='color:red;'>¡La contraseña debe tomar al menos <strong>8 caracteres</strong>!</p>"
    }
    //Verificamos que la edad sea un numero positivo
    elseif($edad <= 0) {
        echo "<p style=color:red;'> La edad debe ser un numero positivo!</p>"
    }else
    echo "<p><strong>Nombre: </strong>. $nombre. </p>";
    echo "<p><strong>Correo electronico: </strong>".$correo. "</p>"
    echo "<p><strong>Contraseña: <strong>" .$contraseña_oculta. "</p>"
    echo "<p><strong>Edad: <strong>" .$edad. "</p>"

   }else{
    echo"<p> style-color:red;'> Por favor completa todos los campos del formulario</p>";    
     }

