<?php
    // Procesamos el formulario de registro del autor

    require_once '../includes/connection.php'; // Incluimos el archivo de conexión para poder interactuar con la base de datos

    if($_SERVER['REQUEST_METHOD'] === 'POST'){ // Valido que la información del formulario haya sido enviada por medio del método POST
        if(isset($_POST['nombre_autor']) && !empty($_POST['nombre_autor'])){ // Valido que el campo nombre_autor no esté vacío y que exista. Ojo, solo valido con nombre autor ya que la nacionalidad no es un campo obligatorio
            $nombre_autor = $_POST['nombre_autor']; // Obtengo el valor del campo nombre_autor del formulario
            $nacionalidad = $_POST['nacionalidad']; // Obtengo el valor del campo nacionalidad del formulario

            // Realizamos nuestra consulta INSERT mediante una Prepared Statement (Consulta Preparada). Recuerda que, las Prepared Statements son una forma segura de ejecutar consultas SQL, y que estas nos permiten evitar ataques de inyección SQL, ya que los parámetros se envían por separado y no se mezclan con el código SQL. Además, las Prepared Statements pueden mejorar el rendimiento de las consultas, especialmente si se ejecutan varias veces con diferentes parámetros.

            $stmt = $conn->prepare("INSERT INTO autor(nombre, nacionalidad) VALUES (?, ?)"); // Preparamos la consulta SQL utilizando el método prepare(). Los signos de interrogación, son marcadores de posición para los valores que se van a insertar.

            $stmt->bind_param("ss", $nombre_autor, $nacionalidad); // Enlazamos los parámetros utilizando el método bind_param(). La función bind_param() toma dos parámetros: El primero indica el tipo de dato de los parámetros, para este ejemplo usamos "ss" ya que ambos parámetros son de tipo string. El segundo y tercer parámetro son las variables que contienen los valores que se van a insertar en la base de datos. Estos son valores posicionales, es decir que si inviertes el orden de alguno, el valor se insertará en la columna incorrecta.

            if($stmt->execute()){ // Con el método execute() ejecutamos la consulta preparada. Y al validarla con el if, verificamos si la ejecución fue exitosa o no.
                echo "Autor registrado exitosamente";
            }else{
                echo "Error al registrar el autor: " . $stmt->error;
            }

            // Nota importante: Esta validación, podríamos hacerla incluso con try-catch, para manejar los errores de manera correcta y que la ejecución de nuestro script no se detenga. Sin embargo, para este ejemplo utilice if-else para hacer una validación más sencilla.

            $stmt->close(); // Cerramos la consulta preparada para liberar recursos
            $conn->close(); // Cerramos la conexión a la base de datos para liberar recursos

            // Nota importante 2: Es importante que cierres tanto la consulta preparada como la conexión a la base de datos después de utilizarlas, esto para liberar recursos del servidor y evitar problemas de rendimiento o seguridad.
        }
    }