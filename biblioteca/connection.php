<?php
    // Conexión a la base de datos con mysqli

    require_once 'config.php'; // Incluimos el archivo de configuración para obtener los datos de conexión. En PHP tenemos dos funciones para incluir archivos: require_once e include once. require_once es más estricta, ya que si el archivo no se encuentra o tiene un error, la ejecución del script se detendrá y se mostrará un error fatal. Por otro lado, include_once mostrará una advertencia pero continuará ejecutando el script.

    $conn = new mysqli($host, $username, $password, $database); // En esta línea creamos una nueva conexión a la base de datos utilizando la clase mysqli (Más adelante, cuando vean POO verán qué es una clase). La función mysqli toma cuatro parámetros: el host, el nombre de usuario, la contraseña y el nombre de la base de datos. Estos parámetros los obtenemos del archivo de configuración que incluimos anteriormente.
    
    // $conn = new mysqli('localhost', 'root', '', 'biblioteca'); // Realmente también podríamos escribir la conexión directamente, sin embargo, por temas de seguridad y buenas prácticas, es recomendable tener los datos de conexión en un archivo independiente.

    if($conn->connect_error){ // Aquí verificamos si hubo un error en la conexión utilizando la propiedad connect_error de la clase mysqli. Si hay un error, se mostrará un mensaje de error y se detendrá la ejecución del script utilizando die().
        die("Error de conexión: " . $conn->connect_error); // Si la conexión falla, se mostrará un mensaje de error indicando el motivo del fallo.
    } else{
        // echo "Conexión exitosa a la base de datos"; // Si la conexión fue exitosa, se mostrará un mensaje indicando que la conexión fue exitosa.
    }
?>