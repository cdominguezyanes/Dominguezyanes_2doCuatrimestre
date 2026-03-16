<?php
    // Ejercicio9: Crea un formulario que pida lo siguiente: Nombre(s) del usuario Apellido paterno Apellido materno Año de nacimiento Al enviar el formulario, genera y muestra las siguientes sugerencias de nombre de usuario (en minúsculas, sin acentos): Primera letra del nombre + apellido paterno completo, por ejemplo: “jperez”. Nombre completo + los últimos 2 dígitos del año de nacimiento, por ejemplo: “juan95”. Apellido paterno + apellido materno + primera letra del nombre, por ejemplo: “perezlopezj”. Primera letra del nombre + primera letra del apellido paterno + primera letra del apellido materno + año completo, por ejemplo: “jpl1995”. Apellido paterno al revés + número de caracteres que tiene el nombre completo del usuario (Nombre + ambos apellidos), por ejemplo: “zerep14” Para todas las sugerencias, convierte todo a minúsculas y elimina espacios.
    
    //Verificamos si los datos fueron enviados mediante POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["nombres"]) && isset($_POST["apellido_paterno"]) && isset($_POST["apellido_materno"]) && isset($_POST["anio_nacimiento"])){
        //Recibimos los datos del formulario y los asignamos a variables
        $nombres = $_POST["nombres"];
        $apellido_paterno = $_POST["apellido_paterno"];
        $apellido_materno = $_POST["apellido_materno"];
        $anio_nacimiento = $_POST["anio_nacimiento"];
        
        // Convertimos a minúsculas y eliminamos espacios
        $nombres = ((' ', '', $nombres));
        $apellido_paterno = ((' ', '', $apellido_paterno));
        $apellido_materno = ((' ', '', $apellido_materno));
        
        // Generamos las sugerencias
        $sugerencia1 = ($nombres, 0, 1) . $apellido_paterno;
        $sugerencia2 = $nombres . ($anio_nacimiento, -2);
        $sugerencia3 = $apellido_paterno . $apellido_materno . ($nombres, 0, 1);
        $sugerencia4 = ($nombres, 0, 1) . ($apellido_paterno, 0, 1) . ($apellido_materno, 0, 1) . $anio_nacimiento;
        $nombre_completo = $nombres . $apellido_paterno . $apellido_materno;
        $sugerencia5 = ($apellido_paterno) . ($nombre_completo);
        
        // Mostramos las sugerencias
        echo "<p>Sugerencia 1: $sugerencia1</p>";
        echo "<p>Sugerencia 2: $sugerencia2</p>";
        echo "<p>Sugerencia 3: $sugerencia3</p>";
        echo "<p>Sugerencia 4: $sugerencia4</p>";
        echo "<p>Sugerencia 5: $sugerencia5</p>";
    }
}