<?php
    // Ejercicio4: Crea un formulario que pida: Nombre del usuario. Sexo (Mediante un select) Peso en kilogramos. Altura en centímetros. Edad en años. Nivel de actividad física (Usa un select con opciones): Sedentario (Poco o nada de ejercicio) -> factor: 1.2 Ligero (Ejercicio 1 – 3 días/semana) -> factor: 1.375 Moderado (Ejercicio 3 – 5 días/semana) -> factor: 1.55 Activo (Ejercicio 6 – 7 días/semana) -> factor: 1.725 Al enviar el formulario, calcula la TMB usando la fórmula de Harris Benedict y muestra: El nombre del usuario y sus datos (peso, altura, edad). La TMB (Calorías en reposo por día): Hombres: TMB = 88.36 + (13.4 x peso) + (4.8 x altura) – (5.7 x edad) Mujeres: TMB = 447.6 + (9.2 x peso) + (3.1 x altura) – (4.3 x edad) Las calorías diarias recomendadas según el nivel de actividad (Usa la fórmula TMB x factor de actividad), redondeadas a 2 decimales.
    
    //Verificamos si los datos fueron enviados mediante POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["nombre"]) && isset($_POST["sexo"]) && isset($_POST["peso"]) && isset($_POST["altura"]) && isset($_POST["edad"]) && isset($_POST["actividad"])){
        //Recibimos los datos del formulario y los asignamos a variables
        $nombre = $_POST["nombre"];
        $sexo = $_POST["sexo"];
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $edad = $_POST["edad"];
        $actividad = $_POST["actividad"];
        
        // Calculamos la TMB
        if($sexo == "hombre"){
            $tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $edad);
        } else {
            $tmb = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $edad);
        }
        
        // Factores de actividad
        $factores = [
            "sedentario" => 1.2,
            "ligero" => 1.375,
            "moderado" => 1.55,
            "activo" => 1.725
        ];
        $factor = $factores[$actividad];
        $calorias_diarias = round($tmb * $factor, 2);
        
        // Mostramos los resultados
        echo "<p>Nombre del usuario: $nombre</p>";
        echo "<p>Datos: Peso: $peso kg, Altura: $altura cm, Edad: $edad años</p>";
        echo "<p>TMB (Calorías en reposo por día): $tmb</p>";
        echo "<p>Calorías diarias recomendadas: $calorias_diarias</p>";
    }
}